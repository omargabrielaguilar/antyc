<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Exercise;

class ExerciseManager extends Component
{
    public $name, $tutorial, $exerciseId;
    public $isEditing = false;

    protected $rules = [
        'name' => 'required|string|max:255',
        'tutorial' => 'nullable|url'
    ];

    public function saveExercise()
    {
        $this->validate();

        Exercise::updateOrCreate(
            ['id' => $this->exerciseId],
            ['name' => $this->name, 'tutorial' => $this->tutorial]
        );

        session()->flash('success', $this->exerciseId ? 'Ejercicio actualizado' : 'Ejercicio creado');

        $this->resetForm();
    }

    public function editExercise($id)
    {
        $exercise = Exercise::findOrFail($id);
        $this->exerciseId = $exercise->id;
        $this->name = $exercise->name;
        $this->tutorial = $exercise->tutorial;
        $this->isEditing = true;
    }

    public function deleteExercise($id)
    {
        Exercise::destroy($id);
        session()->flash('success', 'Ejercicio eliminado');
    }

    public function resetForm()
    {
        $this->reset(['name', 'tutorial', 'exerciseId', 'isEditing']);
    }

    public function render()
    {
        return view('livewire.exercises', [
            'exercises' => Exercise::latest()->get(),
            'isEditing' => $this->isEditing,
        ]);
    }
}
