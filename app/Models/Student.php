<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public function student_address(){
        return $this->hasMany(StudentAddress::class);
    }
    public function student_phone(){
        return $this->hasMany(StudentPhone::class);
    }
    public function student_relative(){
        return $this->hasMany(StudentRelative::class);
    }
}
