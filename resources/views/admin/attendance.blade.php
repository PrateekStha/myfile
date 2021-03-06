@extends('admin.layouts.app')
@section('page','Attendance')
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
        <div class="col-lg-3 col-md-12">
			<div class="box">
				<div class="box-body">
				  <div class="contact-page-aside">
					<ul class="list-style-none font-size-16">
						<li class="box-label"><a href="#">All Students <span><?php $count=count($students);echo $count;?></span></a></li>
						<li class="divider"></li>
						<li><a href="#">Male <span></span></a></li>
						<li><a href="#">Female <span></span></a></li>
						<li><a href="#">Class 1<span><?php $count=count($students);echo $count;?></span></a>
            <li><a href="#">Class 2<span><?php $count=count($students);echo $count;?></span></a>
            <li><a href="#">Class 3<span><?php $count=count($students);echo $count;?></span></a>
            <li><a href="#">Class 4<span><?php $count=count($students);echo $count;?></span></a>
            <li><a href="#">Class 5<span><?php $count=count($students);echo $count;?></span></a>
             <li><a href="#">Class 6<span><?php $count=count($students);echo $count;?></span></a>
            </li>
            <li><a href="#">Class 7<span><?php $count=count($students);echo $count;?></span></a>
            <li><a href="#">Class 8<span><?php $count=count($students);echo $count;?></span></a>
            <li><a href="#">Class 9<span><?php $count=count($students);echo $count;?></span></a>
            <li><a href="#">Class 10<span><?php $count=count($students);echo $count;?></span></a>            </li>
            <li class="box-label"><a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-info text-white mt-10">+ Add New Student</a></li>
            <!--New Student MOdal-->
						<div id="myModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title" id="myModalLabel">Add New Student</h4>
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									</div>
									<div class="modal-body">
                  <form class="form-horizontal form-element" method="post" action="student"  enctype="multipart/form-data">							
                  {{csrf_field()}}					
                    <div class="col-md-12 m-b-20">
                    <div class="form-group">
                        <input type="text" class="form-control" name="rollno" placeholder="Roll No." required> </div>
                        <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Name" required> </div>
                        <div class="form-group">
                        <input type="text" class="form-control" name="pname" placeholder="Father's Name" required> </div>
                      <div class="form-group">
                        <input type="text" class="form-control" name="pphone" placeholder="Guardians Phone number" required> </div>
                      <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="Email"  required> </div>
                      <div class="form-group">
                        <input type="text" class="form-control" name="address" placeholder="Address"  required> </div>
                      <div class="form-group">
                        <input type="text" class="form-control" name="phone" placeholder="Phone"  required> </div>
                        <div class="form-group">
                          <label>Select The Class</label>
                          <select class="form-control select2 select2-hidden-accessible" name="class" multiple="" data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true">
                            <option>11</option>
                            <option>12</option>
                         </div>
                      <div class="form-group">
                        <input type="date" class="form-control" placeholder="Date of joining"  required> </div>
                      <div class="form-group">
                        <div class="fileupload btn btn-danger">
                          <div class="file-group">
                            <span><i class="fa fa-camera file-browser mr-10"></i>Upload Contact Image</span>
                            <input id="file-selector1" type="file" multiple="multiple" name="image">
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
										<button type="submit" class="btn btn-info">Save</button>
										<button type="button" class="btn btn-default float-right" data-dismiss="modal">Cancel</button>
									</div>
                </form>
								</div>
								<!-- /.modal-content -->
							</div>
							<!-- /.modal-dialog -->
						</div>
					</ul>
				</div>
			  </div>
            </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
        <div class="col-lg-9 col-md-12">
          <div class="box">
			    <div class="box-header with-border">
				  <h3 class="box-title">Student List</h3>
				</div>
            <div class="box-body">
              <div class="table-responsive">
                @if(count($students)>0)
				<table id="employeelist" class="table table-hover no-wrap" data-page-size="10">
					<thead>
						<tr>
							<th>Roll No</th>
							<th>Name</th>
              <th>Email</th>
              <th>Address</th>
              <th>Phone</th>
              <th>Faculty</th>
              <th>Parents Name</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
            @foreach($students as $student)
						<tr>
							<td>{{$student->rollno}}</td>
							<td>
								<a href="#"><img src="storage/image/student/{{$student->image}}" alt="user" class="avatar avatar-sm mr-5" />{{$student->name}}</a>
							</td>
              <td>{{$student->email}}</td>
              <td>{{$student->address}}</td>
              <td>{{$student->phone}}</td>
              <td>{{$student->Class}}</td>
              <td>{{$student->parens->name}}</td>
							<td>
                <form action="student/{{$student->id}}" method="post">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
								<button type="submit" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
							 </form>
              </td>
						</tr>
            @endforeach
					</tbody>
          @else
          {{'---------Add Some Student---------'}}
          @endif
				</table>
			</div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>

    @endsection