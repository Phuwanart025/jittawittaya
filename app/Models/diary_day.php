<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diary_day extends Model
{
    protected $fillable = [
        'color_feel_today',
        'sensation_level',
        'detail_t1',
        'story_d1',
        'thoughts_emotions',
        'thoughts_emu',
        'rounds_id',
    ];
    public $timestamps = false;
    protected $table = 'day1';

public function diary_day()
{
    return $this->belongsTo(rounds_completed::class, 'rounds_id');
}
}