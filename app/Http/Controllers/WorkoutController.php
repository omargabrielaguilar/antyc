<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class WorkoutController extends Controller
{
    public function index()
    {
        $workouts = Auth::user()->workouts()->latest()->get();
        return view('livewire.workouts.index', compact('workouts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'exercise' => 'required|string|max:255',
            'weight' => 'nullable|integer|min:0',
            'sets' => 'required|integer|min:1',
            'reps' => 'required|array',
            'reps.*' => 'integer|min:0', // Cada repetición debe ser número
        ]);

        Auth::user()->workouts()->create([
            'date' => $request->date,
            'exercise' => $request->exercise,
            'weight' => $request->weight,
            'sets' => $request->sets,
            'reps' => $request->reps,
        ]);

        return redirect()->back()->with('success', 'Entrenamiento guardado');
    }
}
