<?php

use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\WorkoutController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


//Acceder a workout
Route::middleware(['auth'])->group(function () {
    Route::get('/workouts', [WorkoutController::class, 'index'])->name('workouts.index');
    Route::post('/workouts', [WorkoutController::class, 'store'])->name('workouts.store');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/exercises', [ExerciseController::class, 'index'])->name('exercises.index');
    Route::post('/exercises', [ExerciseController::class, 'store'])->name('exercises.store');
});


require __DIR__ . '/auth.php';
