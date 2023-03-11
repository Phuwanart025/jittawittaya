<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diary_day11 extends Model
{
    protected $fillable = [
        'color_feel_today',
        'sensation_level',
        'detail_t11',
        'detail2_t11',
        'grandma2_v4',
        'thought_pattern11',
        'rounds_id',
    ];
    public $timestamps = false;
    protected $table = 'day11';

public function diary_day11()
{
    return $this->belongsTo(rounds_completed::class, 'rounds_id');
}
}