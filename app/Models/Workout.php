<?php

//test
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User;

/** @package App\Models */
class Workout extends Model
{
    protected $fillable = ['user_id', 'date', 'exercise', 'weight', 'sets', 'reps'];

    protected $casts = [
        'reps' => 'array',
    ];

    /** @return BelongsTo<User, Workout>  */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
