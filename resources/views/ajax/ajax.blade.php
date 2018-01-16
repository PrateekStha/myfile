@extends('admin.layouts.app')
@section('content')
  <div class="row">
        <div class="container col-sm-4 col-sm-offset-4">
      <div class="panel-heading">
        DashBoard
        <button class="btn btn-success pull-right" id="read-data">get data</button>
      </div>
      <div class="panel-body">
    
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>address</th>
              <th>action</th>
            </tr>
          </thead>
          <tbody id="student-info">
          </tbody>

        </table>
      </div>
      </div>
    </div>
@endsection

  @section('script')
<script type="text/javascript">
  $('#read-data').on('click',function(){
    
    $.get("{{URL::to('ajax/read-data')}}",function(data){
    	//	console.log(data)
    	$('#student-info').empty()

	$.each(data,function(i,value){
		var tr=$("<tr/>");
			tr.append($("<td/>",{
				text : value.id
			})).append($("<td/>",{
				text : value.name
			})).append($("<td/>",{
				text : value.address
			})).append($("<td/>",{
				html : "<a href='#'>view</a>"
			}))
			$('#student-info').append(tr);
				});

	    })
  })
</script>


@endsection