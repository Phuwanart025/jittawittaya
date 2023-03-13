<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diary_day17 extends Model
{
    protected $fillable = [
        'color_feel_today',
        'sensation_level',
        'detail_t17',
        'detail2_t17',
        'detail3_t17',
        'rethink_17',
        'new_mood_17',
        'new_mood_level',
        'rethink2_17',
        'new_mood2_17',
        'new_mood_level2',
        'rounds_id',
    ];
    public $timestamps = false;
    protected $table = 'day17';

public function diary_day17()
{
    return $this->belongsTo(rounds_completed::class, 'rounds_id');
}
}