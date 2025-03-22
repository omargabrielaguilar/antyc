<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExerciseLog extends Model
{
    use HasFactory;

    protected $fillable = ['exercise_id', 'user_id', 'weight', 'sets', 'repetitions'];

    public function exercise()
    {
        return $this->belongsTo(Exercise::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
