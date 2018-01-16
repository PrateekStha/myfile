@extends('admin.layouts.app')
@section('page','Gallery')

@section('content')
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
            <button type="button" class="btn btn-block btn-success" data-toggle="modal" data-target="#modal-upload">Upload Image</button>
          </div>
        </div>
        @foreach($galleries as $gallery)
      <div class="col-3">
          <div class="ratio-16-9">
            
            <a href="#">
              <div class="ratio-image"  data-toggle="modal" data-target="#modal-center{{$gallery->id}}" style="background-image: url('/storage/image/gallery/{{$gallery->image}}')">
              </div>
              
            </a>

            <!-- Modal -->
              <div class="modal center-modal fade" id="modal-center{{$gallery->id}}" tabindex="-1">
                <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  </div>
                  <div class="modal-body">
                      <h1>{{$gallery->title}}</h1>
                    <img src="/storage/image/gallery/{{$gallery->image}}" alt="" srcset=""><br>
                    <form method="post" action='gallery/{{$gallery->id}}'>
                      {{method_field('DELETE')}}
                      {{csrf_field()}}
                      <button type="submit" class="badge badge-pill badge-danger">Delete</button></a>
                    </form>
                  </div>

                  <div class="modal-footer modal-footer-uniform">
                  <button type="button" class="btn btn-bold btn-pure btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
                </div>
              </div>

          <!-- /.modal -->
          </div>

        </div>
         @endforeach
      </div>
    </div>
  </section>
<!-- /.content-wrapper -->

<!-- Modal -->
<div class="modal modal-right fade" data-backdrop="false" id="modal-upload" tabindex="-1">
				  <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
              <h5 class="modal-title">Upload Image</h5>
              <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
              </button>
              </div>
              <form class="form-horizontal form-element" method="post" enctype="multipart/form-data" action="gallery">       
              {{csrf_field()}}  
                  <div class="modal-body">
                    <div class=" form-group">
                      <label for="example-text-input">Title</label>
                      <input class="form-control" type="text" id="example-text-input" name="title">
                    </div>
                    <div class="form-group">
                    <label>Image</label>
                    <input  id="file-selector1" type="file" multiple="multiple" name="image" />

                    <hr />
                    <b>Live Preview</b>
                    <br />
                    <br />
                    <div id="dvPreview">
                    </div>
                    </div>
                  </div>
                  <div class="modal-footer modal-footer-uniform">
                  <button type="button" class="btn btn-bold btn-pure btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-bold btn-pure btn-primary float-right">Save changes</button>
                  </div>
              </form>
            </div>
				  </div>
				</div>

@endsection