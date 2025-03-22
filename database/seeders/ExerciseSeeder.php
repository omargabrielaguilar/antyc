<?php

namespace Database\Seeders;

use App\Models\Exercise;
use App\Models\Muscle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $benchPress = Exercise::create([
            'name' => 'Bench Press',
            'tutorial' => 'https://www.youtube.com/watch?v=SCVCLChPQFY'
        ]);

        $squat = Exercise::create([
            'name' => 'Squat',
            'tutorial' => 'https://www.youtube.com/watch?v=Dy28eq2PjcM'
        ]);

        // Relacionamos músculos con ejercicios
        $benchPress->muscles()->attach([
            Muscle::where('name', 'Upper Chest')->first()->id,
            Muscle::where('name', 'Middle Chest')->first()->id,
            Muscle::where('name', 'Triceps')->first()->id
        ]);

        $squat->muscles()->attach([
            Muscle::where('name', 'Quadriceps')->first()->id,
            Muscle::where('name', 'Glutes')->first()->id
        ]);
    }
}
