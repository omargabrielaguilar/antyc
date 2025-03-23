<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('exercise_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('workout_exercise_id')->constrained()->onDelete('cascade'); // Relación con workout_exercises
            $table->decimal('weight', 5, 2); // Peso en KG (puedes ajustar decimales)
            $table->integer('sets'); // Número de series
            $table->string('repetitions'); // Ejemplo: "15,15,15,15"
            $table->string('rpe'); // Ejemplo: "9Rpe"
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exercise_logs');
    }
};
