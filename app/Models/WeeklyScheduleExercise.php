<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WeeklyScheduleExercise extends Model
{
    use HasFactory;

    protected $fillable = ['weekly_schedule_id', 'exercise_id', 'sets', 'repetitions', 'rpe'];

    /** @return BelongsTo<Program, WeeklySchedule>  */
    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    /** @return BelongsTo<WeeklySchedule, WeeklyScheduleExercise>  */
    public function weeklyScheduleExercises()
    {
        return $this->belongsTo(WeeklySchedule::class);
    }
}
