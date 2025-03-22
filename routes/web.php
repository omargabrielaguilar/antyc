<?php

use App\Http\Controllers\ExerciseManagerController;
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
    Route::get('/exercises', [ExerciseManagerController::class, 'index'])->name('exercises.index');
    Route::post('/exercises', [ExerciseManagerController::class, 'store'])->name('exercises.store');
});


require __DIR__ . '/auth.php';
