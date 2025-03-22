<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Exercise extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'tutorial'];

    public function muscles()
    {
        return $this->belongsToMany(Muscle::class, 'exercise_muscle');
    }
}
