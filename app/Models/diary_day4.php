<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diary_day4 extends Model
{
    protected $fillable = [
        'color_feel_today',
        'sensation_level',
        'detail_t4',
        'rounds_id',
    ];
    public $timestamps = false;
    protected $table = 'day4';

public function diary_day4()
{
    return $this->belongsTo(rounds_completed::class, 'rounds_id');
}
}