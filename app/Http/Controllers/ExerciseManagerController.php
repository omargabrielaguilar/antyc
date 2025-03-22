<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class ExerciseManagerController extends Controller
{
    public function index()
    {
        return view('livewire.exercises.index');
    }

    public function store(Request $request)
    {
        Auth::user()->exercise()->create([
            'name' => $request->name,
            'tutorial' => $request->tutorial,
        ]);

        return redirect()->back()->with('success', 'Exercise guardado');
    }
}
