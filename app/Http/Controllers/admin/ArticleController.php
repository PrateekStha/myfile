<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\article;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
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
        $articles=article::all();
        return view('admin.article',compact('articles'));
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


        
    public function store(Request $request)
    {
        $article=new article;
                        $article= new article;
         $this->validate($request,[
        'title'=>'required:articles',
        'author'=>'required|unique:articles',
        'description'=>'required:articles',
    ]);
        $article->title=$request->title;
        $article->author=$request->author;
        $article->description=$request->description;
        
        $article->category="";
        foreach ($request->category as $category) {
            //$article->category .= $category. ($category == $request->category[count($request->category)-1]) ? '' : ",";  
            $article->category=$category;  
        }
        
        if($request->hasfile('image')){
        $filename=$request->image->hashName();
        //$filesize=$request->image->getClientsize();
        $request->image->storeas('public/image/article',$filename);
        $article->image=$filename;
        //$f->size=$filesize;
      }
      $article->save();
            session()->flash('added','Added Successfully');
        return redirect('admin/article');
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
        $article=article::find($id);
        $article->title=$request->title;
        $article->author=$request->author;
        $article->description=$request->description;
        $article->category=$request->category;
        if($request->hasfile('image')){
        $filename=$request->image->hashName();
        //$filesize=$request->image->getClientsize();
        $request->image->storeas('public/image/article',$filename);
        $article->image=$filename;
        //$f->size=$filesize;
      }
      $article->save();
            session()->flash('Updated','Updated Successfully');
        return redirect('admin/article');
        return 'what the fuck';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article=article::find($id);
        if($file=$article->image){
        if(Storage::delete('public/image/article/'.$file)){
            return 'fukc';
         }
        }
          $article->delete();
        session()->flash('delete','Deleted Successfully');
         return redirect('admin/article');
    }
}
