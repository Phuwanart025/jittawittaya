<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diary_day10 extends Model
{
    protected $fillable = [
        'color_feel_today',
        'sensation_level',
        'detail_t10',
        'detail2_t10',
        'story_d10',
        'story2_d10',
        'story3_d10',
        'rounds_id',
    ];
    public $timestamps = false;
    protected $table = 'day10';

public function diary_day10()
{
    return $this->belongsTo(rounds_completed::class, 'rounds_id');
}
}