<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table= "students";

    public function units()
    {
        return $this->hasMany(Unit::class);
    }

    public function applications()
    {
        return $this->hasMany(Application::class);
    }

    public function studentunit()
    {
        return $this->belongsTo(StudentUnit::class);
    }

    public function exam()
    {
        return $this->hasMany(Exam::class);
    }
}
