<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentUnit extends Model
{
    protected $table= "student_units";

    public function student()
    {
        return $this->hasMany(Student::class);
    }

    public function Unit()
    {
        return $this->hasMany(Unit::class);
    }
}
