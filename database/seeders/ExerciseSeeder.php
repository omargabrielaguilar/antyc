<?php

namespace Database\Seeders;

use App\Models\Exercise;
use App\Models\Muscle;
use Illuminate\Database\Seeder;

class ExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Lista de ejercicios con sus tutoriales y músculos asociados
        // Lista de ejercicios con sus tutoriales y músculos asociados
        $exercises = [
            ['name' => 'Seated Overhead Press', 'tutorial' => 'https://www.youtube.com/watch?v=example1', 'muscles' => ['Shoulders', 'Triceps']],
            ['name' => 'Overhead Press', 'tutorial' => 'https://www.youtube.com/watch?v=example2', 'muscles' => ['Shoulders', 'Triceps']],
            ['name' => 'Smith Machine Overhead Press', 'tutorial' => 'https://www.youtube.com/watch?v=example3', 'muscles' => ['Shoulders', 'Triceps']],
            ['name' => 'Seated Dumbbell Press', 'tutorial' => 'https://www.youtube.com/watch?v=example4', 'muscles' => ['Shoulders', 'Triceps']],
            ['name' => 'Machine Lateral Raises', 'tutorial' => 'https://www.youtube.com/watch?v=example5', 'muscles' => ['Shoulders']],
            ['name' => 'Dumbbell Lateral Raises', 'tutorial' => 'https://www.youtube.com/watch?v=example6', 'muscles' => ['Shoulders']],
            ['name' => 'Rear Delt Fly', 'tutorial' => 'https://www.youtube.com/watch?v=example7', 'muscles' => ['Rear Delts']],
            ['name' => 'Dumbbell Rear Delt Fly', 'tutorial' => 'https://www.youtube.com/watch?v=example8', 'muscles' => ['Rear Delts']],
            ['name' => 'Face Pull', 'tutorial' => 'https://www.youtube.com/watch?v=example9', 'muscles' => ['Rear Delts', 'Traps']],
            ['name' => 'Dumbbell Hammer Curl', 'tutorial' => 'https://www.youtube.com/watch?v=example10', 'muscles' => ['Biceps', 'Forearms']],
            ['name' => 'Reverse Slow Curl', 'tutorial' => 'https://www.youtube.com/watch?v=example11', 'muscles' => ['Biceps', 'Forearms']],
            ['name' => 'Straight Bar Pressdown', 'tutorial' => 'https://www.youtube.com/watch?v=example12', 'muscles' => ['Triceps']],
            ['name' => 'GHD Sit Ups', 'tutorial' => 'https://www.youtube.com/watch?v=example13', 'muscles' => ['Abs']],
            ['name' => 'Olympic Squat', 'tutorial' => 'https://www.youtube.com/watch?v=example14', 'muscles' => ['Quads', 'Glutes']],
            ['name' => 'Paused Squat', 'tutorial' => 'https://www.youtube.com/watch?v=example15', 'muscles' => ['Quads', 'Glutes']],
            ['name' => 'Barbell Row', 'tutorial' => 'https://www.youtube.com/watch?v=example16', 'muscles' => ['Back', 'Biceps']],
            ['name' => 'T-Bar Row', 'tutorial' => 'https://www.youtube.com/watch?v=example17', 'muscles' => ['Back', 'Biceps']],
            ['name' => 'Machine Row', 'tutorial' => 'https://www.youtube.com/watch?v=example18', 'muscles' => ['Back']],
            ['name' => 'Cable Row', 'tutorial' => 'https://www.youtube.com/watch?v=example19', 'muscles' => ['Back', 'Biceps']],
            ['name' => 'Pull Ups', 'tutorial' => 'https://www.youtube.com/watch?v=example20', 'muscles' => ['Back', 'Biceps']],
            ['name' => 'Chin Ups', 'tutorial' => 'https://www.youtube.com/watch?v=example21', 'muscles' => ['Back', 'Biceps']],
            ['name' => 'Lat Pull Down', 'tutorial' => 'https://www.youtube.com/watch?v=example22', 'muscles' => ['Back', 'Biceps']],
            ['name' => 'Belt Squat', 'tutorial' => 'https://www.youtube.com/watch?v=example23', 'muscles' => ['Quads', 'Glutes']],
            ['name' => 'Leg Press', 'tutorial' => 'https://www.youtube.com/watch?v=example24', 'muscles' => ['Quads', 'Glutes']],
            ['name' => 'Horizontal Leg Press', 'tutorial' => 'https://www.youtube.com/watch?v=example25', 'muscles' => ['Quads', 'Glutes']],
            ['name' => 'Adductor Machine', 'tutorial' => 'https://www.youtube.com/watch?v=example26', 'muscles' => ['Adductors']]
        ];



        // Iteramos sobre cada ejercicio y lo creamos en la base de datos
        foreach ($exercises as $exerciseData) {
            // Creamos el ejercicio
            $exercise = Exercise::create([
                'name' => $exerciseData['name'],
                'tutorial' => $exerciseData['tutorial']
            ]);

            // Obtenemos los IDs de los músculos asociados
            $muscleIds = Muscle::whereIn('name', $exerciseData['muscles'])->pluck('id');

            // Asociamos los músculos al ejercicio
            $exercise->muscles()->attach($muscleIds);
        }
    }
}
