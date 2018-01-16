<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubjectTeacher extends Model
{
    protected $table = "subject_teacher";
    public static function getTeachers($id){
    	return SubjectTeacher::where('subject_id',$id)->get();
    }
        public static function getSubjects($id){
    	return SubjectTeacher::where('teacher_id',$id)->get();
    }
}
