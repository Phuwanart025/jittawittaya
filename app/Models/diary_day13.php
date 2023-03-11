<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diary_day13 extends Model
{
    protected $fillable = [
        'color_feel_today',
        'sensation_level',
        'detail_t13',
        'detail2_t13',
        'detail3_t13',
        'story_d13',
        'new_idea_v5_1',
        'new_emotions_v5_2',
        'new_idea_v6_1',
        'new_emotions_v6_2',
        'new_idea_v7_1',
        'new_emotions_v7_2',
        'rounds_id',
    ];
    public $timestamps = false;
    protected $table = 'day13';

public function diary_day13()
{
    return $this->belongsTo(rounds_completed::class, 'rounds_id');
}
}