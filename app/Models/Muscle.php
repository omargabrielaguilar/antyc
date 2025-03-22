<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Muscle extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'group'];

    public function exercises()
    {
        return $this->belongsToMany(Exercise::class, 'exercise_muscle');
    }
}
