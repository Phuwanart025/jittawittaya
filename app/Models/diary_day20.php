<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diary_day20 extends Model
{
    protected $fillable = [
        'color_feel_today',
        'sensation_level',
        'detail_t1',
        'rounds_id',
    ];
    public $timestamps = false;
    protected $table = 'day20';

public function diary_day20()
{
    return $this->belongsTo(rounds_completed::class, 'rounds_id');
}
}