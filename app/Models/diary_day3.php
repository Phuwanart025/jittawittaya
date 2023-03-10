<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diary_day3 extends Model
{
    protected $fillable = [
        'color_feel_today',
        'sensation_level',
        'detail_t1',
        'scared_brickstory_v4',
        'd3_v5',
        'd3_v6',
        'd3_v7',
        'd3_v8',
        'd3_v9',
        'd3_v10',
        'rounds_id',
    ];
    public $timestamps = false;
    protected $table = 'day2';

public function diary_day()
{
    return $this->belongsTo(rounds_completed::class, 'rounds_id');
}
}