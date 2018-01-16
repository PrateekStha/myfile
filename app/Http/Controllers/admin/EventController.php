<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\event;
use App\gallery;

class EventController extends Controller
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
        $events= event::all();
        return view('admin.event',compact('events'));
        
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
        $event=new event;
        $event->title=$request->title;
        $event->duration=$request->duration;
        $event->location=$request->location;
        $event->titlehead=$request->titlehead;
        $event->titlebody=$request->titlebody;
        if($request->hasfile('image')){
        $filename=$request->image->getClientOriginalName();
        //$filesize=$request->image->getClientsize();
        $request->image->storeas('public/image/event',$filename);
        $event->image=$filename;
        //$f->size=$filesize;

      }
        $event->save();
      session()->flash('added','Added Successfully');
        //return 'lol';
        return redirect('event');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gallery= gallery::all();
        $events= event::all();
        $event= event::find($id);
        return view('web.eventdetail',compact('gallery','event','events'));
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
        $event=event::find($id);
        $file=$event->image;
        if(Storage::delete('public/image/event/'.$file)){
            $event->delete();
            session()->flash('deleted','Deleted Successfully');
            return redirect('/admin/event');
        }
    }
}
