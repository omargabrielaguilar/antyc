<?php

namespace Database\Seeders;

use App\Models\Exercise;
use App\Models\ExerciseLog;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExerciseLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first(); // Usamos el primer usuario
        $exercise = Exercise::where('name', 'Bench Press')->first(); // Ejemplo con Bench Press

        if ($user && $exercise) {
            ExerciseLog::create([
                'exercise_id' => $exercise->id,
                'user_id' => $user->id,
                'weight' => 80, // 80kg en press banca
                'sets' => 4,
                'repetitions' => '12,12,10,8'
            ]);
        }
    }
}
