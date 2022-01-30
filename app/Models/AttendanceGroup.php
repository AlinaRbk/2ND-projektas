<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceGroup extends Model
{
    use HasFactory;
    //grazina viena rezultata 
    public function attendanceGroupSchool(){
        return $this->hasMany(Sshool::class,'school_id','id');
    
//grazina masyva
   // public function attendanceGroupStudents(){
       // return $this->hasMany(Student::class,'group_id','id');

    }
}
