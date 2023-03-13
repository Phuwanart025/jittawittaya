<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diary_day16 extends Model
{
    protected $fillable = [
        'color_feel_today',
        'sensation_level',
        'detail_t16',
        'detail2_t16',
        'detail3_t16',
        'rethink_16',
        'new_mood_16',
        'new_mood_level',
        'rethink2_16',
        'new_mood2_16',
        'new_mood_level2',
        'rounds_id',
    ];
    public $timestamps = false;
    protected $table = 'day16';

public function diary_day16()
{
    return $this->belongsTo(rounds_completed::class, 'rounds_id');
}
}