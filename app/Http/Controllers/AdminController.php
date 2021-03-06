<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\timeline;
use App\teacher;
use App\event;
use App\gallery;
class AdminController extends Controller
{
     public function __construct()
    {
       $this->middleware('auth');
    }

    public function index(){
        $teachers = teacher::all();
        $events = event::all();
        $gallery = gallery::all();
        return view('admin.dashboard',compact('teachers','events','gallery'));
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
}
