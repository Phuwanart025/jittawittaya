<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diary_day20 extends Model
{
    protected $fillable = [
        'data1_t20',
        'data2_t20',
        'data3_t20',
        'data4_t20',
        'data5_t20',
        'data6_t20',
        'data7_t20',
        'data8_t20',
        'data9_t20',
        'data10_t20',
        'data11_t20',
        'data12_t20',
        'data13_t20',
        'data14_t20',
        'rounds_id',
    ];
    public $timestamps = false;
    protected $table = 'day20';

public function diary_day20()
{
    return $this->belongsTo(rounds_completed::class, 'rounds_id');
}
}