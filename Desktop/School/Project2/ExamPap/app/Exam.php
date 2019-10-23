<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $table= "exams";

    public function units()
    {
        return $this->hasMany(Unit::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
