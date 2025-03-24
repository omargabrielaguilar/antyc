<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Program;
use App\Models\WeeklySchedule;
use Illuminate\Support\Facades\Auth;
use App\Models\Exercise;

class Programs extends Component
{
    public $name;
    public $duration;
    public $days_per_week;
    public $programs;
    public $selectedProgram;
    public $day;
    public $selectedSchedule;
    public $exercise_id;
    public $sets;
    public $repetitions;
    public $rpe;
    public $availableExercises;

    protected $rules = [
        'name' => 'required|string|max:255',
        'duration' => 'required|integer|min:1',
        'days_per_week' => 'required|integer|min:1|max:7',
    ];

    public function mount()
    {
        $this->loadPrograms();
        $this->availableExercises = Exercise::all();
    }

    public function loadPrograms()
    {
        $this->programs = Program::with('weeklySchedules.weeklyScheduleExercises.exercise')->get();
    }

    public function createProgram()
    {
        $this->validate();
        Program::create([
            'name' => $this->name,
            'duration' => $this->duration,
            'days_per_week' => $this->days_per_week,
            'user_id' => Auth::id(),
        ]);
        $this->reset(['name', 'duration', 'days_per_week']);
        $this->loadPrograms();
        session()->flash('success', 'Programa creado exitosamente.');
    }

    public function selectProgram($programId)
    {
        $this->selectedProgram = Program::find($programId);
    }

    public function addDay()
    {
        $this->validate(['day' => 'required|string']);
        $this->selectedProgram->weeklySchedules()->create(['day' => $this->day]);
        $this->reset('day');
        $this->loadPrograms();
    }

    public function selectSchedule($scheduleId)
    {
        $this->selectedSchedule = WeeklySchedule::find($scheduleId);
    }

    public function addExercise()
    {
        $this->validate([
            'exercise_id' => 'required|exists:exercises,id',
            'sets' => 'required|integer|min:1',
            'repetitions' => 'required|string',
            'rpe' => 'required|string',
        ]);
        $this->selectedSchedule->weeklyScheduleExercises()->create([
            'exercise_id' => $this->exercise_id,
            'sets' => $this->sets,
            'repetitions' => $this->repetitions,
            'rpe' => $this->rpe,
        ]);
        $this->reset(['exercise_id', 'sets', 'repetitions', 'rpe']);
        $this->loadPrograms();
    }

    public function render()
    {
        return view('livewire.programs');
    }
}
