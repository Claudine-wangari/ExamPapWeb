<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    protected $table = "timetables";

    protected $fillable = [
        'faculty',
        'study_year',
        'session_start',
        'session_end',
        'unit_name',
        'unit_code',
        'day_of_the_week',
        'time',
        'lecturer',
        'room',
    ];

    public function units()
    {
        return $this->hasMany(Unit::class);
    }
}
