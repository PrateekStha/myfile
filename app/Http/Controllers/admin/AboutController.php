<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\gallery;
use App\about;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $abouts = about::all();
        $gallery = gallery::all();
        return view('admin.about',compact('gallery','abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $about = about::find($id);
        /*$this->validate($request,[
        'name'=>'required:abouts',
        'location'=>'required:abouts',
        'gmail'=>'required:abouts',
        'phone'=>'required:abouts',
        'social'=>'required:abouts',
        'website'=>'required:abouts',
        'image'=>'required:abouts',
        'description'=>'required:abouts',
        ]);*/

        $about->name = $request->name;
        $about->location = $request->location;
        $about->gmail = $request->gmail;
        $about->phone = $request->phone;
        $about->social = $request->social;
        $about->website = $request->website;
        $about->description = $request->description;
        if($request->hasfile('image')){
        $filename=$request->image->hashName();
        $request->image->storeas('public/image/teacher',$filename);
        $about->image=$filename;
            
        $about->save();
        return redirect('admin/about');}
        return 'not send';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
