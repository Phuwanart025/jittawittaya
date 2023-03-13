<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diary_day19 extends Model
{
    protected $fillable = [
        'data1_t19',
        'data2_t19',
        'data3_t19',
        'data4_t19',
        'data5_t19',
        'data6_t19',
        'data7_t19',
        'data9_t19',
        'data9_t19',
        'data10_t19',
        'data11_t19',
        'data12_t19',
        'data13_t19',
        'data14_t19',
        'rounds_id',
    ];
    public $timestamps = false;
    protected $table = 'day19';

public function diary_day19()
{
    return $this->belongsTo(rounds_completed::class, 'rounds_id');
}
}