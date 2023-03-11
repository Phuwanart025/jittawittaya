<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diary_day12 extends Model
{
    protected $fillable = [
        'color_feel_today',
        'sensation_level',
        'detail_t12',
        'detail2_t12',
        'detail3_t12',
        'proof_support_v4_1',
       ' objectionable_evidence_v4_2',
       ' proof_support_v5_1',
        'objectionable_evidence_v5_2	',
        'rounds_id',
    ];
    public $timestamps = false;
    protected $table = 'day12';

public function diary_day12()
{
    return $this->belongsTo(rounds_completed::class, 'rounds_id');
}
}