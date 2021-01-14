<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentRelative extends Model
{
    use HasFactory;
    public function student(){
        $this->belongsTo(Student::class);
    }
    public function student_relative_address(){
        $this->hasMany(StudentRelativeAddress::class);
    }
    public function student_relative_phone(){
        $this->hasMany(StudentRelativePhone::class);
    }
    public function student_relative_other_data(){
        $this->hasMany(StudentRelativeOtherData::class);
    }
}
