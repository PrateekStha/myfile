<!DOCTYPE html>
<html>
<head>
	<title></title>
	@include('admin.partials.head')

</head>
<body class="hold-transition skin-black-light sidebar-mini fixed">
	<div class="wrapper">
				@include('admin.partials.nav')
				@include('admin.partials.aside')
			<div class="content-wrapper">
				<section class="content-header">
				    <h1>
				      @yield('page')
				      <small>Control panel</small>
				    </h1>
				    <ol class="breadcrumb">
				      <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
				      <li class="breadcrumb-item active">@yield('page')</li>
				    </ol>
				</section>
				
				@section('content')
				
				@show

				

			</div>
				@include('admin.partials.footer')
	</div>
				@section('script')
				@show
</body>
</html>