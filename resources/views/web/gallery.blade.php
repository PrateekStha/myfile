@extends('web.layouts.app')
@section('content')  

<div class="breadcrumb-banner-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="breadcrumb-text">
                                    <h1 class="text-center">Image Gallery</h1>
                                    <div class="breadcrumb-bar">
                                        <ul class="breadcrumb text-center">
                                            <li><a href="/">Home</a></li>
                                            <li>Gallery</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Breadcrumb Banner Area-->
                <!--Gallery Area Start-->
                <div class="gallery-area pt-110 pb-130" >
                    <div class="container">
                        <div class="row">
                        	@foreach($gallery as $value)
                            <div class="col-md-4 mb-30 col-sm-6">
                                <div class="gallery-img">
                                    <img src="storage/image/gallery/{{$value->image}}" alt=""  style="height: 200px;">
                                    <div class="hover-effect">
                                        <h2>Photo Fiture</h2>
                                        <p>{{$value->title}}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>

@endsection