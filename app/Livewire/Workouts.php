<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Workout;
use Illuminate\Support\Facades\Auth;

class Workouts extends Component
{
    public $date, $exercise, $weight, $sets, $reps;

    protected $rules = [
        'date' => 'required|date',
        'exercise' => 'required|string',
        'weight' => 'nullable|numeric',
        'sets' => 'required|integer|min:1',
        'reps' => 'required|string',
    ];

    public function saveWorkout()
    {
        $this->validate();

        Workout::create([
            'user_id' => Auth::id(),
            'date' => $this->date,
            'exercise' => $this->exercise,
            'weight' => $this->weight,
            'sets' => $this->sets,
            'reps' => explode(',', $this->reps),
        ]);

        session()->flash('success', 'Entrenamiento guardado con éxito.');

        $this->reset(['date', 'exercise', 'weight', 'sets', 'reps']);
    }

    public function render()
    {
        return view('livewire.workouts', [
            'workouts' => Workout::latest()->get(),
        ]);
    }
}
