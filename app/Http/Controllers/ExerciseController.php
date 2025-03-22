<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class ExerciseController extends Controller
{
    public function index()
    {
        return view('livewire.exercises.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'tutorial' => 'nullable|url'
        ]);

        Auth::user()->exercises()->create($request->only(['name', 'tutorial']));

        return redirect()->back()->with('success', 'Ejercicio guardado');
    }
}
