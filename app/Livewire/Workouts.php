<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Workout;
use App\Models\Exercise;
use App\Models\WorkoutExercise;
use App\Models\ExerciseLog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Workouts extends Component
{
    public $date;
    public $exercises = [];
    public $availableExercises;

    protected $rules = [
        'date' => 'required|date',
        'exercises.*.exercise_id' => 'required|exists:exercises,id',
        'exercises.*.weight' => 'nullable|numeric|min:0',
        'exercises.*.sets' => 'required|integer|min:1',
        'exercises.*.repetitions' => 'required|string',
    ];

    public function mount()
    {
        $this->date = now()->toDateString();
        $this->availableExercises = Exercise::all();
    }

    public function addExercise()
    {
        $this->exercises[] = [
            'exercise_id' => '',
            'weight' => null,
            'sets' => 1,
            'repetitions' => '',
        ];
    }

    public function removeExercise($index)
    {
        unset($this->exercises[$index]);
        $this->exercises = array_values($this->exercises);
    }

    public function saveWorkout()
    {
        $this->validate();

        DB::transaction(function () {
            $workout = Workout::create([
                'user_id' => Auth::id(),
                'date' => $this->date,
            ]);

            foreach ($this->exercises as $exerciseData) {
                $workoutExercise = WorkoutExercise::create([
                    'workout_id' => $workout->id,
                    'exercise_id' => $exerciseData['exercise_id'],
                ]);

                ExerciseLog::create([
                    'workout_exercise_id' => $workoutExercise->id,
                    'weight' => $exerciseData['weight'],
                    'sets' => $exerciseData['sets'],
                    'repetitions' => $exerciseData['repetitions'],
                ]);
            }
        });

        session()->flash('success', 'Entrenamiento guardado con éxito.');
        $this->reset(['exercises']);
    }

    public function render()
    {
        return view('livewire.workouts');
    }
}
