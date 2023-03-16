<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jobs_21day extends Model
{
    use HasFactory;
    protected $fillable = [
        'jobs_21day',
    ];
    public $timestamps = false;
    protected $table = 'jobs_21day';
}
