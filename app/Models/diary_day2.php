<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diary_day2 extends Model
{
    protected $fillable = [
        'color_feel_today',
        'sensation_level',
        'detail_t1',
        'two_friends',
        'feel_body1',
        'feel_body2',
        'feel_body3',
        'feel_body4',
        'feel_body5',
        'feel_body6',
        'rounds_id',
    ];
    public $timestamps = false;
    protected $table = 'day2';

public function diary_day()
{
    return $this->belongsTo(rounds_completed::class, 'rounds_id');
}
}