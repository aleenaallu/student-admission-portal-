<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    use HasFactory;
    protected $fillable =['student_id','course_id','status'];

    public function student()
    {
        return $this->belongTo(Student::class, 'student_id');
    }
    public function course()
    {
        return $this->belongTo(Course::class,'course_id');
    }
}
