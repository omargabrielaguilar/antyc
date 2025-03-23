<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WorkoutExercise extends Model
{
    protected $fillable = ['workout_id', 'exercise_id'];

    /** @return BelongsTo<Workout, WorkoutExercise> */
    public function workout()
    {
        return $this->belongsTo(Workout::class);
    }

    /** @return BelongsTo<Exercise, WorkoutExercise> */
    public function exercise()
    {
        return $this->belongsTo(Exercise::class);
    }
}
