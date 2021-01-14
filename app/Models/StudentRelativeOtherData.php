<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentRelativeOtherData extends Model
{
    use HasFactory;
    public function student_relative(){
        $this->belongsTo(StudentRelative::class);
    }
}
