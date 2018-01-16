@extends('admin.layouts.app')
@section('page','Teachers')
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
              <div class-"pull-right" style="float:right; margin:5px;"><button type="button" class="btn btn-block btn-success" data-toggle="modal" data-target="#myModal">Add Teacher</button>
              </div>
            </div>
            <div class="col-12">
            <div class="box">
                <div class="box-header with-border">
                <h3 class="box-title">Teacher List</h3>
              </div>
                  <div class="box-body">
                    <div class="table-responsive">
              <table id="employeelist" class="table table-hover no-wrap" data-page-size="10">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Department</th>
                    <th>Joined Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                	@foreach($teachers as $teacher)
                  <tr>
                    <td>
                      <a href="#"><img src="/storage/image/teacher/{{$teacher->image}}" alt="user" class="avatar avatar-sm mr-5" />{{$teacher->name}}</a>
                    </td>
                    <td>{{$teacher->email}}</td>
                    <td>{{$teacher->address}}</td>
                    <td>{{$teacher->phone}}</td>
                    <td>@foreach($teacher->subjects as $subject)
                     <span class="btn btn-default" >{{$subject->subject}}</span>
                    @endforeach</td>
                    <td>{{$teacher->date}}</td>
                    <td>

                    <form class="form-group" action="{{'teacher/'.$teacher->id}}" method="post"> 
					{{csrf_field()}}
					{{method_field('DELETE')}}
			  		<button type="submit" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true" align="center"></i></button>
			  		</form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
      <!-- /.box-body -->
      </div>
      <!-- /.box -->          
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
</div>
<!-- /.content-wrapper -->

<div id="myModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">Add Teacher</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
				<div class="modal-body">
        <form class="form-horizontal form-element" method="post" enctype="multipart/form-data" action="teacher">				
        	{{csrf_field()}}			
                    <div class="col-md-12 m-b-20">
                      <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Name" required value="@yield('name')"> 
                    </div>
                      
                      <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="Email"  required value="@yield('email')"> 
                    </div>
                      <div class="form-group">
                        <input type="text" name="address" class="form-control" placeholder="Address"  required value="@yield('address')"> 
                    </div>
                      <div class="form-group">
                        <input type="text" class="form-control" name="phone" placeholder="Phone"  required value="@yield('phone')"> 
                    </div>
                        <div class="form-group">
                          <label>Select The Department</label>
                          <select value="@yield('course')" class="form-control select2 select2-hidden-accessible" multiple="" name="subject_id[]"  data-placeholder="Select course" style="width: 100%;" tabindex="-1" aria-hidden="true">
                            @foreach($subjects as $subject)
                            <option value="{{$subject->id}}">{{$subject->subject}}</option>
                            @endforeach
                            </select>
                    </div>
                      <div class="form-group">
                      <label>Select Start Date</label>
                        <input type="date" class="form-control" placeholder="Date of joining" name="date"  required value="@yield('title')"> 
                    </div>
                        
                      <div class="form-group">
                        <div class="fileupload btn btn-danger">
                          <div class="file-group">
                            <span><i class="fa fa-camera file-browser mr-10"></i>Upload Contact Image</span>
                            <input id="file-selector1" type="file" multiple="multiple" name="image" value="@yield('image')">
                          </div>
                    </div>
                    <hr />
                      <b>Live Preview</b>
                      <br>
                      <div id="dvPreview">
                      </div>
                      </div>
                    </div>
                  </div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-info">Submit</button>
						<button type="button" class="btn btn-default float-right" data-dismiss="modal">Cancel</button>
					</div>
        </form>
								</div>
								<!-- /.modal-content -->
							</div>
							<!-- /.modal-dialog -->
						</div>



				
@endsection