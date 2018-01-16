<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\notice;
use App\gallery;

class NoticeController extends Controller
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
        $notices = notice::all();
        return view('admin.notice',compact('notices'));
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
        $notice=new notice;
        $notice->title=$request->title;
        $notice->description=$request->description;
        if($request->hasfile('image')){
        $filename=$request->image->hashName();
        //$filesize=$request->image->getClientsize();
        $request->image->storeas('public/image/notice',$filename);
        $notice->image=$filename;
        //$f->size=$filesize;
      }
      $notice->save();
            session()->flash('added','Added Successfully');
        return redirect('admin/notice');
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
        $notice=notice::find($id);
        $notice->title=$request->title;
        $notice->description=$request->description;
        if($request->hasfile('image')){
        $filename=$request->image->hashName();
        //$filesize=$request->image->getClientsize();
        $request->image->storeas('public/image/notice',$filename);
        $notice->image=$filename;
        //$f->size=$filesize;
      }
      $notice->save();
            session()->flash('Updated','Updated Successfully');
        return redirect('admin/notice');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $notice=notice::find($id);
        if($file=$notice->image){
        if(Storage::delete('public/image/notice/'.$file)){

         }}
                   $notice->delete();
         session()->flash('delete','Deleted Successfully');
         return redirect('admin/notice');
    }
}
