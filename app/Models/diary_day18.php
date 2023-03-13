<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diary_day18 extends Model
{
    protected $fillable = [
        'data1_t18',
        'data2_t18',
        'data3_t18',
        'data4_t18',
        'data5_t18',
        'data6_t18',
        'data7_t18',
        'data8_t18',
        'data9_t18',
        'data10_t18',
        'data11_t18',
        'data12_t18',
        'data13_t18',
        'data14_t18',
        'rounds_id',
    ];
    public $timestamps = false;
    protected $table = 'day18';

public function diary_day18()
{
    return $this->belongsTo(rounds_completed::class, 'rounds_id');
}
}