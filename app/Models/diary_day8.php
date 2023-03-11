<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diary_day8 extends Model
{
    protected $fillable = [
        'color_feel_today',
        'sensation_level',
        'detail_t8',
        'detail2_t8',
        'story_d8',
        'story2_d8',
        'rounds_id',
    ];
    public $timestamps = false;
    protected $table = 'day2';

public function diary_day8()
{
    return $this->belongsTo(rounds_completed::class, 'rounds_id');
}
}