<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diary_day21 extends Model
{
    protected $fillable = [
        'data1_t21',
        'data2_t21',
        'data3_t21',
        'data4_t21',
        'data5_t21',
        'data6_t21',
        'data7_t21',
        'data8_t21',
        'data9_t21',
        'data10_t21',
        'data11_t21',
        'data12_t21',
        'data13_t21',
        'data14_t21',
        'activity_summary',
        'rounds_id',
    ];
    public $timestamps = false;
    protected $table = 'day21';

public function diary_day21()
{
    return $this->belongsTo(rounds_completed::class, 'rounds_id');
}
}