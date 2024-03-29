<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $filled =['name','email','phone','_token'];  
    protected $hidden =['created_at','updated_at'];

    public function course()
    {
        return $this->belongToMany(Course::class);
    }
}

