<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diary_day6 extends Model
{
    protected $fillable = [
        'color_feel_today',
        'sensation_level',
        'detail_t6',
        'detail2_t6',
        'grandma_v4',
        'rounds_id',
    ];
    public $timestamps = false;
    protected $table = 'day6';

public function diary_day6()
{
    return $this->belongsTo(rounds_completed::class, 'rounds_id');
}
}