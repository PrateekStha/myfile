@extends('admin.layouts.app')
@section('page','Articles')
@section('content')
	<section class="content"><div class="container" >
		<a><span class="btn btn-info  pull-right"  data-toggle="modal" data-target="#modal-edit">Edit</span></a>
		<div class="row col-sm-8"><ul class="list-group">
			@foreach($abouts as $about)
  <li class="list-group-item d-flex justify-content-between align-items-center">
   <b>School Name:</b>{{$about->name}}
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
   <b>Location</b> {{$about->location}}
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
   <b>Gmail account</b> {{$about->gmail}}
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <b>Phone Number:</b>{{$about->phone}}
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <b>Social Network</b>{{$about->social}}
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <b>Website Name:</b>{{$about->website}}
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <b>Description:</b>{{$about->description}}
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <img src="/storage/image/teacher/{{$about->image}}" style="width: 100%">
  </li>

</ul></div></div>
 <!-- Modal for edit -->
          <div class="modal fade out" data-backdrop="false"  id="modal-edit" aria-labelledby="myModalLabel" tabindex="-1">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title">Article</h1>
                        <hr>
                          <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                          </button>
                              <hr>
                      </div>
                        <div class="modal-body">
                <form class="form-horizontal form-element" method="post" enctype="multipart/form-data" action="/admin/about/{{$about->id}}">        
                  {{csrf_field()}}  
                  {{method_field('PUT')}}
                        <div class="form-group">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                            <div class>
                            <input class="form-control" type="text" id="example-text-input" name="name" value="{{$about->name}}">
                        </div>
                        <div class="form-group">
                            <label for="example-text-input" class="col-sm-2 col-form-label">location</label>
                            <div class>
                            <input class="form-control" type="text" id="example-text-input" name="location" value="{{$about->location}}">
                        </div>
                        <div class="form-group">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Gmail</label>
                            <div class>
                            <input class="form-control" type="text" id="example-text-input" name="gmail" value="{{$about->gmail}}">
                        </div>
                        <div class="form-group">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Phone number</label>
                            <div class>
                            <input class="form-control" type="text" id="example-text-input" name="phone" value="{{$about->phone}}">
                        </div>
                        <div class="form-group">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Social Link</label>
                            <div class>
                            <input class="form-control" type="text" id="example-text-input" name="social" value="{{$about->social}}">
                        </div>
                        <div class="form-group">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Website</label>
                            <div class>
                            <input class="form-control" type="text" id="example-text-input" name="website" value="{{$about->website}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <input type="file" id="exampleInputFile" name="image">
                            <p class="help-block text-red">Select file with only jpg or png extensions.</p>
                        </div>
                        <textarea placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="description" >
                        {{$about->description}}</textarea>
                        </div>
                        <div class="box-footer">
                        <button type="submit" class="btn btn-danger">Save</button>
                      </div>
                      </form>
                        </div>
                    </div>
                  </div>
                </div>
        <!-- /.modal for edit -->
          @endforeach
		
	</section>




      
@endsection