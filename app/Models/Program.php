<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Program extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'duration', 'days_per_week'];

    public function weeklySchedules()
    {
        return $this->hasMany(WeeklySchedule::class);
    }
}
