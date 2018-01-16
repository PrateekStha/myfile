@extends('admin.layouts.app')
@section('page','Dashboard')
@section('content')

<section class="content">
    <div class="row">
    	<div class="col-xl-3 col-md-6 col-12">
        <div class="info-box">
          <span class="info-box-icon bg-blue"><i class="ion ion-stats-bars"></i></span>
          <a href="/admin/event">
          <div class="info-box-content">
            <span class="info-box-number"><?php $a=count($events); echo $a;?><small>%</small></span>
            <span class="info-box-text">Events</span>
          </div></a>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-xl-3 col-md-6 col-12">
        <div class="info-box">
          <span class="info-box-icon bg-blue"><i class="ion ion-person-stalker"></i></span>
          <a href="/admin/teacher"> 
          <div class="info-box-content">
            <span class="info-box-number"><?php $count=count($teachers);echo $count;?></span>
            <span class="info-box-text">Teachers</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
            <div class="col-xl-3 col-md-6 col-12">
        <div class="info-box">
          <span class="info-box-icon bg-purple"><i class="ion ion-bag"></i></span>

          <a href="/admin/gallery"><div class="info-box-content">
            <span class="info-box-number"><?php $a=count($gallery); echo $a;?></span>
            <span class="info-box-text">Photos</span>
          </div></a>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->



    </div>
</section>
@endsection
@section('script')
<script type="text/javascript">
  $('#read-data').on('click',function(){
    alert('test only');
  })
</script>


@endsection