<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\gallery;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
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
        $galleries=gallery::all();
        return view('admin.gallery',compact('galleries'));
        //
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gallery=new gallery;
                        $teacher= new teacher;
         $this->validate($request,[
        'title'=>'required:galleries',
    ]);
        $gallery->title=$request->title;
        if($request->hasfile('image')){
        $filename=$request->image->getClientOriginalName();
        //$filesize=$request->image->getClientsize();
        $request->image->storeas('public/image/gallery',$filename);
        $gallery->image=$filename;
        //$f->size=$filesize;

      }
        $gallery->save();
      session()->flash('added','Added Successfully');
        //return 'lol';
        return redirect('admin/gallery');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery=gallery::find($id);
        $file=$gallery->image;
        if(Storage::delete('public/image/gallery/'.$file)){
            $gallery->delete();
            session()->flash('deleted',"Deleted Successfully");
            return redirect('admin/gallery');
        }
        return $file ;

    }
}
