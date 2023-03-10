<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diary_day5 extends Model
{
    protected $fillable = [
        'color_feel_today',
        'sensation_level',
        'detail_t5',
        'idea_v4',
        'rounds_id',
    ];
    public $timestamps = false;
    protected $table = 'day5';

public function diary_day5()
{
    return $this->belongsTo(rounds_completed::class, 'rounds_id');
}
}