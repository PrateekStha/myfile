@extends('admin.layouts.app')
@section('page','Results')
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
						<li><button class="btn btn-warning btn-large btn-block" id="infoclass1">Class 1</button>
            <li><button class="btn btn-warning btn-large btn-block" id="infoclass2">Class 2</button></li>
            <li><button class="btn btn-warning btn-large btn-block" id="infoclass3">Class 3</button></li>
            <li><button class="btn btn-warning btn-large btn-block" id="infoclass4">Class 4</button></li>
            <li><button class="btn btn-warning btn-large btn-block" id="infoclass5">Class 5</button></li>
            <li><button class="btn btn-warning btn-large btn-block" id="infoclass6">Class 6</button>
            </li>
            <li><button class="btn btn-warning btn-large btn-block" id="infoclass7">Class 7</button></li>
            <li><button class="btn btn-warning btn-large btn-block" id="infoclass8">Class 8</button></li>
            <li><button class="btn btn-warning btn-large btn-block" id="infoclass9">Class 9</button></li>
            <li><button class="btn btn-warning btn-large btn-block" id="infoclass10">Class 10</button>         </li>
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
                            <option>Lkg</option>
                            <option>Ukg</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
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
					<tbody id="tableinfoclass1">
					</tbody>
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

      @section('script')
<script type="text/javascript">
  $('#infoclass1').on('click',function(){
    
    $.get("{{URL::to('ajax/read-data')}}",function(data){
       // console.log(data)
      $('#tableinfoclass1').empty()

  $.each(data,function(i,value){
    var tr=$("<tr/>");
      tr.append($("<td/>",{
        text : value.rollno
      })).append($("<td/>",{
        text : value.name
      })).append($("<td/>",{
        text : value.address
      })).append($("<td/>",{
        text : value.phone
      })).append($("<td/>",{
        text : value.faculty
      })).append($("<td/>",{
        text : value.faculty
      })).append($("<td/>",{
        html : "<a href='#'>view</a>"
      }))
      $('#tableinfoclass1').append(tr);
        });

      })
  })
</script>
<script type="text/javascript">
  $('#infoclass2').on('click',function(){
    
    $.get("{{URL::to('ajax/read-data2')}}",function(data){
       // console.log(data)
      $('#tableinfoclass1').empty()

  $.each(data,function(i,value){
    var tr=$("<tr/>");
      tr.append($("<td/>",{
        text : value.rollno
      })).append($("<td/>",{
        text : value.name
      })).append($("<td/>",{
        text : value.address
      })).append($("<td/>",{
        text : value.phone
      })).append($("<td/>",{
        text : value.faculty
      })).append($("<td/>",{
        text : value.faculty
      })).append($("<td/>",{
        html : "<a href='#'>view</a>"
      }))
      $('#tableinfoclass1').append(tr);
        });

      })
  })
</script>

@endsection