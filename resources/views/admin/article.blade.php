@extends('admin.layouts.app')
@section('page','Articles')
@section('content')

    <!-- Main content -->
    <section class="content">
      <div class="row">
              @if(session()->has('delete'))
      <h1 class="alert alert-success">
      {{session()->get('delete')}}
      </h1>
      @endif
      @if(session()->has('added'))
      <h1 class="alert alert-success">
      {{session()->get('added')}}
      </h1>
      @endif
        <div class="col-12">  
          <div class-"pull-right" style="float:right; margin:5px;">
            <button type="button" class="btn btn-block btn-success" data-toggle="modal" data-target="#modal-create">New Article</button></a>
          </div>
        </div>
        <div class="col-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 table-responsive" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>Title</th>
						<th>Author</th>
						<th>Published Date</th>
						<th>Category</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
          @foreach($articles as $article)
          <tr>
            <th>{{$article->title}}</th>
            <th>{{$article->author}}</th>
            <th>{{$article->created_at}}</th>
            <th>{{$article->category}}</th>
            <th style="width:20%;">
            <a><span class="badge badge-pill badge-info"  data-toggle="modal" data-target="#modal-center{{$article->id}}">View</span></a>
            <a><span class="badge badge-pill badge-warning"  data-toggle="modal" data-target="#modal-edit{{$article->id}}">Edit</span></a>
            <a><form method="post" action='article/{{$article->id}}'>
              {{method_field('DELETE')}}
              {{csrf_field()}}
              <button type="submit" class="badge badge-pill badge-danger">Delete</button></a>
            </form></a>
            </th>
          </tr>
               



                      <!-- Modal -->
              <div class="modal center-modal fade" id="modal-center{{$article->id}}" tabindex="-1">
                <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  </div>
                  <div class="modal-body">
                    <h1>{{$article->title}}</h1>
                  <img src="/storage/image/article/{{$article->image}}" alt="" srcset="">
                  </div>
                  <div class="modal-footer modal-footer-uniform">
                  <button type="button" class="btn btn-bold btn-pure btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
                </div>
              </div>
          <!-- /.modal -->

                <!-- Modal for edit -->
          <div class="modal fade out" data-backdrop="false"  id="modal-edit{{$article->id}}" aria-labelledby="myModalLabel" tabindex="-1">
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
                <form class="form-horizontal form-element" method="post" enctype="multipart/form-data" action="article/{{$article->id}}">        
                  {{csrf_field()}}  
                  {{method_field('PUT')}}
                        <div class="form-group">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                            <div class>
                            <input class="form-control" type="text" id="example-text-input" name="title" value="{{$article->title}}">
                        </div>
                        <div class="form-group">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Author</label>
                            <div class>
                            <input class="form-control" type="text" id="example-text-input" name="author" value="{{$article->author}}">
                        </div>
                        <div class="form-group">
                          <label>Select The category</label>
                          <select value="@yield('course')" class="form-control select2 select2-hidden-accessible" multiple="" name="category"  style="width: 100%;" tabindex="-1" aria-hidden="true" >
                            <option>Home</option>
                            <option>About</option>
                            <option>Footer</option>
                            </select>
                        </div>
                          <br>
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <input type="file" id="exampleInputFile" name="image">
                            <p class="help-block text-red">Select file with only jpg or png extensions.</p>
                        </div>
                        <textarea   placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="description">{{$article->description}}
                        </textarea>
                        </div>
                        <div class="box-footer">
                        <button type="submit" class="btn btn-danger">Submit</button>
                      </div>
                      </form>
                        </div>
                    </div>
                  </div>
                </div>
        <!-- /.modal for edit -->
          @endforeach
				</tbody>
			</table>

              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->          
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>



      <!-- Modal -->
  <div class="modal fade out" data-backdrop="false"  id="modal-create" aria-labelledby="myModalLabel" tabindex="-1">
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
        <form class="form-horizontal form-element" method="post" enctype="multipart/form-data" action="/admin/article">        
          {{csrf_field()}}  
                <div class="form-group">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                    <div class>
                    <input class="form-control" type="text" id="example-text-input" name="title">
                </div>
                <div class="form-group">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Author</label>
                    <div class>
                    <input class="form-control" type="text" id="example-text-input" name="author">
                </div>
                <div class="form-group">
                          <label>Select The category</label>
                          <select  class="form-control select2 select2-hidden-accessible" multiple="" name="category[]"  data-placeholder="Select category" style="width: 100%;" tabindex="-1" aria-hidden="true">
                            <option>home</option>
                            <option>course</option>
                            <option>Opt.math</option>
                            </select>
                        </div>
                  <br>
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <input type="file" id="exampleInputFile" name="image">
                    <p class="help-block text-red">Select file with only jpg or png extensions.</p>
                </div>
                <textarea  placeholder="Place some text here"
                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="description">
                </textarea>
                </div>
                <div class="box-footer">
                <button type="submit" class="btn btn-danger">Submit</button>
              </div>
              </form>
                </div>
            </div>
          </div>
        </div>
        <!-- /.modal -->
</div>  
        @endsection