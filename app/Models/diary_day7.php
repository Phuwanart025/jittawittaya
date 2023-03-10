<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diary_day7 extends Model
{
    protected $fillable = [
        'color_feel_today',
        'sensation_level',
        'detail_t7',
        'detail2_t7',
        'thoughts_feelings',
        'thoughts_feelings2',
        'thoughts_feelings3',
        'thoughts_feelings4',
        'rounds_id',
    ];
    public $timestamps = false;
    protected $table = 'day7';

public function diary_day7()
{
    return $this->belongsTo(rounds_completed::class, 'rounds_id');
}
}