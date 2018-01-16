@extends('web.layouts.app')
@section('content') 
 <div class="breadcrumb-banner-area" style="background-image: url('/storage/web/img/banner/4.jpg');">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="breadcrumb-text">
                                    <h1 class="text-center">Our Events</h1>
                                    <div class="breadcrumb-bar">
                                        <ul class="breadcrumb text-center">
                                            <li><a href="/">Home</a></li>
                                            <li>Events</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Breadcrumb Banner Area-->
                <!--Event Area Start-->
                <div class="event-area section-padding event-page">
                    <div class="container">
                        <div class="row">
                        	@foreach($events as $event)
                            <div class="col-md-4 col-sm-6">
                                <div class="single-event-item">
                                    <div class="single-event-image">
                                        <a href="#">
                                            <img src="/storage/image/event/{{$event->image}}" alt="">
                                            <span><span>{{ $event->created_at->format('d') }}</span>{{ $event->created_at->format('M') }}</span>
                                        </a>
                                    </div>
                                    <div class="single-event-text">
                                        <h3><a href="#">{{$event->title}}</a></h3>
                                        <div class="single-item-comment-view">
                                           <span><i class="zmdi zmdi-time"></i>{{$event->duration}}</span>
                                           <span><i class="zmdi zmdi-pin"></i>{{$event->location}}</span>
                                       </div>
                                       <p>{{$event->description}}</p>
                                       <a class="button-default" href="event-detail/{{$event->id}}">Read More</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="pagination-content">
                                    <ul class="pagination">
                                        <li><a href="#"><i class="zmdi zmdi-chevron-left"></i></a></li>
                                        <li class="current"><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Event Area-->
@endsection