<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GradeStudent extends Model
{
        protected $table = "grade_student";
    public static function getStudent($id){
    	return GradeStudent::where('grade_id',$id)->get();
    }
        public static function getGrades($id){
    	return GradeStudent::where('student_id',$id)->get();
    }
}
