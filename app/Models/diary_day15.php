<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diary_day15 extends Model
{
    protected $fillable = [
        'color_feel_today',
        'sensation_level',
        'detail_t15',
        'detail2_t15',
        'detail3_t15',
        'rethink_15',
        'new_mood_15',
        'new_mood_level',
        'rethink2_15',
        'new_mood2_15',
        'new_mood_level2',
        'rounds_id',
    ];
    public $timestamps = false;
    protected $table = 'day15';

public function diary_day15()
{
    return $this->belongsTo(rounds_completed::class, 'rounds_id');
}
}