<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $table = "units";

    public function student()
    {
        return $this->belongsTo(Student:: class);
    }

    public function timetable()
    {
        return $this->belongsTo(Timetable::class);
    }

    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }

    public function studentunit()
    {
        return $this->belongsTo(StudentUnit::class);
    }
}
