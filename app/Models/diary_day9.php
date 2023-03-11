<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diary_day9 extends Model
{
    protected $fillable = [
        'color_feel_today',
        'sensation_level',
        'detail_t9',
        'detail2_t9',
        'story_d9',
        'story2_d9',
        'rounds_id',
    ];
    public $timestamps = false;
    protected $table = 'day9';

public function diary_day9()
{
    return $this->belongsTo(rounds_completed::class, 'rounds_id');
}
}