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
        $exercises = [
            ['name' => 'Seated Calf Raises', 'tutorial' => 'https://www.youtube.com/watch?v=example1', 'muscles' => ['Calves']],
            ['name' => 'Incline Bench Press Paused', 'tutorial' => 'https://www.youtube.com/watch?v=example2', 'muscles' => ['Chest', 'Shoulders', 'Triceps']],
            ['name' => 'Incline Dumbbell Press', 'tutorial' => 'https://www.youtube.com/watch?v=example3', 'muscles' => ['Chest', 'Shoulders', 'Triceps']],
            ['name' => 'Incline Machine Press', 'tutorial' => 'https://www.youtube.com/watch?v=example4', 'muscles' => ['Chest', 'Shoulders', 'Triceps']],
            ['name' => 'Pec Fly', 'tutorial' => 'https://www.youtube.com/watch?v=example5', 'muscles' => ['Chest']],
            ['name' => 'ATG Dips', 'tutorial' => 'https://www.youtube.com/watch?v=example6', 'muscles' => ['Chest', 'Triceps']],
            ['name' => 'Bayesian Curl', 'tutorial' => 'https://www.youtube.com/watch?v=example7', 'muscles' => ['Biceps']],
            ['name' => 'Cable Curl', 'tutorial' => 'https://www.youtube.com/watch?v=example8', 'muscles' => ['Biceps']]
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
