<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\WeeklySchedule;
use App\Models\WeeklyScheduleExercise;
use App\Models\Exercise;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::with('weeklySchedules.weeklyScheduleExercises.exercise')->get();
        return view('livewire.programs.index', compact('programs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'duration' => 'required|integer|min:1',
            'days_per_week' => 'required|integer|min:1|max:7',
        ]);

        Program::create($request->all());

        return redirect()->back()->with('success', 'Programa creado exitosamente');
    }

    public function addDay(Request $request, Program $program)
    {
        $request->validate([
            'day' => 'required|string',
        ]);

        $program->weeklySchedules()->create(['day' => $request->day]);

        return redirect()->back()->with('success', 'Día agregado al programa');
    }

    public function addExercise(Request $request, WeeklySchedule $weeklySchedule)
    {
        $request->validate([
            'exercise_id' => 'required|exists:exercises,id',
            'sets' => 'required|integer|min:1',
            'repetitions' => 'required|string',
            'rpe' => 'required|string',
        ]);

        $weeklySchedule->weeklyScheduleExercises()->create($request->all());

        return redirect()->back()->with('success', 'Ejercicio agregado al día de entrenamiento');
    }
}
