<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diary_day14 extends Model
{
    protected $fillable = [
        'color_feel_today',
        'sensation_level',
        'detail_t14',
        'detail2_t14',
        'detail3_t14',
        'story_v4',
        'positive_v4',
        'negative_v4',
        'story_v5',
        'positive_v5',
        'negative_v5',
        'story_v6',
        'positive_v6',
        'negative_v6',
        'story_positive_v7',
        'rounds_id',
    ];
    public $timestamps = false;
    protected $table = 'day14';

public function diary_day14()
{
    return $this->belongsTo(rounds_completed::class, 'rounds_id');
}
}