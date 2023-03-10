<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rounds_completed extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'jobs_id',
        'rounds',
        'score',
    ];
    protected $table = 'rounds_completed';

    public function rounds_completed()
    {

        return $this->hasMany(diary_day::class, 'rounds_id', 'id');

    }
    public function rounds_completed2()
    {

        return $this->hasMany(diary_day2::class, 'rounds_id', 'id');

    }
    public function rounds_completed3()
    {

        return $this->hasMany(diary_day3::class, 'rounds_id', 'id');
    }

    public function rounds_completed4()
    {

        return $this->hasMany(diary_day4::class, 'rounds_id', 'id');
    }
    public function rounds_completed5()
    {

        return $this->hasMany(diary_day5::class, 'rounds_id', 'id');
    }
    public function rounds_completed6()
    {

        return $this->hasMany(diary_day6::class, 'rounds_id', 'id');
    }
    public function rounds_completed7()
    {

        return $this->hasMany(diary_day7::class, 'rounds_id', 'id');
    }

    public function rounds_completed8()
    {

        return $this->hasMany(diary_day8::class, 'rounds_id', 'id');
    }
    public function rounds_completed9()
    {

        return $this->hasMany(diary_day9::class, 'rounds_id', 'id');
    }
    public function rounds_completed10()
    {

        return $this->hasMany(diary_day10::class, 'rounds_id', 'id');
    }
    public function rounds_completed11()
    {

        return $this->hasMany(diary_day11::class, 'rounds_id', 'id');
    }

    public function rounds_completed12()
    {

        return $this->hasMany(diary_day12::class, 'rounds_id', 'id');
    } 
      public function rounds_completed13()
    {

        return $this->hasMany(diary_day13::class, 'rounds_id', 'id');
    }
    public function rounds_completed14()
    {

        return $this->hasMany(diary_day14::class, 'rounds_id', 'id');
    }
    public function rounds_completed15()
    {

        return $this->hasMany(diary_day15::class, 'rounds_id', 'id');
    }
    public function rounds_completed16()
    {

        return $this->hasMany(diary_day16::class, 'rounds_id', 'id');
    }
    public function rounds_completed17()
    {

        return $this->hasMany(diary_day17::class, 'rounds_id', 'id');
    }
    public function rounds_completed18()
    {

        return $this->hasMany(diary_day18::class, 'rounds_id', 'id');
    }
    public function rounds_completed19()
    {

        return $this->hasMany(diary_day19::class, 'rounds_id', 'id');
    }
    public function rounds_completed20()
    {

        return $this->hasMany(diary_day20::class, 'rounds_id', 'id');
    }
    public function rounds_completed21()
    {

        return $this->hasMany(diary_day21::class, 'rounds_id', 'id');
    }
   

}
