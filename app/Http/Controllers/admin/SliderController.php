<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\slider;

class SliderController extends Controller
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
        $sliders= slider::all();
        return view('admin.slider',compact('sliders'));
        
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
        $slider=new slider;
        $slider->title=$request->title;
        $slider->titlehead=$request->titlehead;
        $slider->titlebody=$request->titlebody;
        if($request->hasfile('image')){
        $filename=$request->image->hashName();
        //$filesize=$request->image->getClientsize();
        $request->image->storeas('public/image/slider',$filename);
        $slider->image=$filename;
        //$f->size=$filesize;

      }
        $slider->save();
      session()->flash('added','Added Successfully');
        //return 'lol';
        return redirect('/admin/slider');
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
        $slider=slider::find($id);
        $file=$slider->image;
        if(Storage::delete('public/image/slider/'.$file)){
            $slider->delete();
            session()->flash('deleted','Deleted Successfully');
            return redirect('/admin/slider');
        }
    }
}
