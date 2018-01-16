<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\teacher;
use App\subject;
use App\SubjectTeacher;
class TeacherController extends Controller
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
        $teachers=teacher::all();
        $subjects=subject::all();
        return view('admin.teacher',compact('teachers','subjects'));
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
                $teacher= new teacher;
         $this->validate($request,[
        'name'=>'required:teachers',
        'email'=>'required|unique:teachers',
        'address'=>'required:teachers',
        'phone'=>'required|unique:teachers',
        'subject_id'=>'required:teachers',
        'date'=>'required:teachers',
        'image'=>'required:teachers',
    ]);


        $teacher->name=$request->name;
        $teacher->email=$request->email;
        $teacher->address=$request->address;
        $teacher->phone=$request->phone;
        $teacher->date=$request->date;
        if($request->hasfile('image')){
        $filename=$request->image->hashName();
        $request->image->storeas('public/image/teacher',$filename);
        $teacher->image=$filename;
        //$f->size=$filesize;
      }
        $teacher->save();
       if(!($teacher->id>0))
        {
            session()->flash('message','Teacher Saving Failed');
            return 'fail';
        }
        foreach ($request->subject_id as $id) {
            $ct=new SubjectTeacher;
            $ct->subject_id = $id;
            $ct->teacher_id = $teacher->id;
            $ct->save();
            # code...
                  session()->flash('added','Added Successfully');
       
        return redirect('teacher');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
        
        $teacher=teacher::find($id);
        $file=$teacher->image;
        if(Storage::delete('public/image/teacher/'.$file)){
          $teacher->delete();
         session()->flash('delete','Deleted Successfully');
         return redirect('/admin/teacher');
     }
     return 'try Again';
      
    }
}
