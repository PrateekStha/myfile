<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\article;
use App\gallery;
use App\slider;
use App\teacher;
use App\event;
use App\notice;
use App\about;

class HomepageController extends Controller
{
	public function index(){
		//$article=article::all();
		$articles=article::where("category","=","home")->get();
		$teachers=teacher::all();
		$gallery=gallery::all();	
		$events = event::orderBy('id', 'desc')->take(3)->get();
		$sliders=slider::all();
        $abouts = about::all();
		$notices = notice::orderBy('id', 'desc')->take(4)->get();
		return view('web.index',compact('articles','teachers','events','sliders','gallery','notices','abouts'));
	}
		public function about(){
		//$article=article::all();
		$articles=article::where("category","=","home")->get();
		$teachers=teacher::all();
		$gallery=gallery::all();		
		$sliders=slider::all();
        $abouts= about::all();
		return view('web.about',compact('articles','teachers','events','sliders','gallery','abouts'));
	}
	        public function web()
    {
        $events= event::all();
        $abouts = about::all();
        $gallery= gallery::all();
        return view('web.event',compact('events','gallery','abouts'));
        
    }

        public function display($id)
    {
        $gallery= gallery::all();
        $events = event::orderBy('id', 'desc')->take(3)->get();
        $eve= event::find($id);
        $abouts = about::all();
        return view('web.eventdetail',compact('gallery','eve','events','abouts'));
    }

        public function gallery(){
                $gallery=gallery::all();
                $abouts = about::all();
        return view('web.gallery',compact('gallery','abouts'));
        //
    }
            public function notice(){
            	$notices = notice::all();
                $gallery=gallery::all();
                $abouts = about::all();
        return view('web.notice',compact('gallery','notices','abouts'));
        //
    }
    
}
