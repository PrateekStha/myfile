@extends('web.layouts.app')
@section('content') 

 <!--Breadcrumb Banner Area Start-->
                <div class="breadcrumb-banner-area" style="background-image: url('/storage/web/img/banner/3.jpg')">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="breadcrumb-text">
                                    <h1 class="text-center">EVENT DETAILS</h1>
                                    <div class="breadcrumb-bar">
                                        <ul class="breadcrumb text-center">
                                            <li><a href="/">Home</a></li>
                                            <li>EVENTS</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Breadcrumb Banner Area-->
                <!--Event Details Area Start-->
                <div class="event-details-area section-padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="event-details-content">
                                    <div class="single-event-item">
                                        <div class="single-event-image">
                                            <a href="#">
                                                <img alt="" src="/storage/image/event/{{$eve->image}}">
                                                <span><span>{{ $eve->created_at->format('d') }}</span>{{ $eve->created_at->format('M') }}</span>
                                            </a>
                                        </div>
                                        <div class="single-event-text">
                                            <h3>{{$eve->title}}</h3>
                                            <div class="single-item-comment-view">
                                               <span><i class="zmdi zmdi-time"></i>{{$eve->duration}}</span>
                                               <span><i class="zmdi zmdi-pin"></i>{{$eve->location}}</span>
                                           </div>
                                           <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr sarata din mela.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.amar songr balga ami aomar ...</p>
                                        </div>
                                    </div>
                                                               <div class="container" >
                <div class="fb-comments" data-href="https://localhost:8000" data-numposts="2"></div>
            </div>
                                </div>    
                            </div>
                            <div class="col-md-3">
                                <div class="sidebar-widget">
                                    <div class="single-sidebar-widget">
                                        <h4 class="title">Recent Events</h4>
                                        <div class="recent-content">
                                        	@foreach($events as $event)
                                            <div class="recent-content-item">
                                                <a href="/event-detail/{{$event->id}}"><img src="/storage/image/event/{{$event->image}}" alt=""></a>
                                                <div class="recent-text">
                                                    <h4><a href="#">{{$event->title}}</a></h4>
                                                    <div class="single-item-comment-view">
                                                        <span><i class="zmdi zmdi-eye"></i></span>
                                                        <span><i class="zmdi zmdi-comments"></i></span>
                                                    </div>
                                                    <p>There are many varf passages of Lorem Ipsuable,amar</p>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Event Details Area-->

@endsection