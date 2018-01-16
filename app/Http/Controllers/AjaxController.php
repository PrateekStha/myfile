<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;

class AjaxController extends Controller
{
    public function index(){
    	return view('ajax.ajax');
    }

    public function readdata(){
    	$students=student::all();
    	return response($students);
    	//return view('ajax.studentlist',compact('students'));
    }
    public function readdata2(){
		$students=student::where("name","=","ram")->get()->first();
		return response($students);
		//return view('ajax.studentlist',compact('students'));
	}
}
