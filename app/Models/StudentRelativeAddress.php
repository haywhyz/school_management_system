<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentRelativeAddress extends Model
{
    use HasFactory;
    public function student(){
        $this->belongsTo(Student::class);
    }
    public function student_relative(){
        $this->belongsTo(StudentRelative::class);
    }
   
}
