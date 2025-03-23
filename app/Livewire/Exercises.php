<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Exercise;
use App\Models\Muscle;

class Exercises extends Component
{
    public $name, $tutorial, $exerciseId, $selectedMuscles = [];
    public $isEditing = false;

    protected $rules = [
        'name' => 'required|string|max:255',
        'tutorial' => 'nullable|url',
        'selectedMuscles' => 'array|max:3',
        'selectedMuscles.*' => 'exists:muscles,id'
    ];

    public function saveExercise()
    {
        $this->selectedMuscles = (array) $this->selectedMuscles; // Asegurar que siempre sea un array
        $this->validate();

        $exercise = Exercise::updateOrCreate(
            ['id' => $this->exerciseId],
            ['name' => $this->name, 'tutorial' => $this->tutorial]
        );

        $exercise->muscles()->sync($this->selectedMuscles);

        session()->flash('success', $this->exerciseId ? 'Ejercicio actualizado' : 'Ejercicio creado');

        $this->resetForm();
    }

    public function editExercise($id)
    {
        $exercise = Exercise::findOrFail($id);
        $this->exerciseId = $exercise->id;
        $this->name = $exercise->name;
        $this->tutorial = $exercise->tutorial;
        $this->selectedMuscles = $exercise->muscles()->pluck('id')->toArray();
        $this->isEditing = true;
    }

    public function deleteExercise($id)
    {
        Exercise::destroy($id);
        session()->flash('success', 'Ejercicio eliminado');
    }

    public function resetForm()
    {
        $this->reset(['name', 'tutorial', 'exerciseId', 'selectedMuscles', 'isEditing']);
    }

    public function render()
    {
        return view('livewire.exercises', [
            'exercises' => Exercise::latest()->get(),
            'muscles' => Muscle::all(), // Asegurándonos de obtener los músculos
            'isEditing' => $this->isEditing,
        ]);
    }
}
