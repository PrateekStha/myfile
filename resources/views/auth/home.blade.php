@extends('web.layouts.app')
@section('content')  
                <!--Slider Area Start-->
                <div class="slider-area">
                    <div class="preview-2">
                        <div id="nivoslider" class="slides">    
                           <img src="storage/image/slider/{{$sliders[0]->image}}" alt="" title="#slider-1-caption1"/>
                            <img src="storage/image/slider/{{$sliders[1]->image}}" alt="" title="#slider-1-caption2"/>
                        </div> 
                        <div id="slider-1-caption1" class="nivo-html-caption nivo-caption">
                            <div class="banner-content slider-1">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="text-content-wrapper">
                                                <div class="text-content">
                                                    <h1 class="title1 wow fadeInUp" data-wow-duration="2000ms" data-wow-delay="0s">Education Needs<br>
                                                    Complete Solution</h1>
                                                    <p class="sub-title wow fadeInUp hidden-sm hidden-xs" data-wow-duration="2900ms" data-wow-delay=".5s"> There are many variations of passages of Lorem Ipsum available, but the majority have<br>
                                                    suffered alteration in some form, by injected humour, or randomised words which<br>
                                                    don't look even slightly believable.</p>
                                                    <div class="banner-readmore wow fadeInUp" data-wow-duration="3600ms" data-wow-delay=".6s">
                                                        <a class="button-default" href="#">View Courses</a>                 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div id="slider-1-caption2" class="nivo-html-caption nivo-caption">
                            <div class="banner-content slider-2">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="text-content-wrapper">
                                                <div class="text-content slide-2">
                                                    <h1 class="title1 wow rotateInDownLeft" data-wow-duration="1000ms" data-wow-delay="0s">Education Needs<br>
                                                    Complete Solution</h1>
                                                    <p class="sub-title wow rotateInDownLeft hidden-sm hidden-xs" data-wow-duration="1800ms" data-wow-delay="0s"> There are many variations of passages of Lorem Ipsum available, but the majority have<br>
                                                    suffered alteration in some form, by injected humour, or randomised words which<br>
                                                    don't look even slightly believable.</p>
                                                    <div class="banner-readmore wow rotateInDownLeft" data-wow-duration="1800ms" data-wow-delay="0s">
                                                        <a class="button-default" href="#">View Courses</a>                 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                    </div>
                </div>
                       
                    </div>
                </div>
                <!--End of Slider Area-->
                <!--About Area Start--> 
                <div class="about-area" style="background-image:url('storage/web/img/banner/1.jpg')">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="about-container">
                                   
                                    <h3>{{$articles[0]->title}}</h3>

                                    <p>{{$articles[0]->description}}</p>
                                    <a class="button-default" href="#">Learn Now</a>          
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of About Area-->
                <!--Course Area Start-->

                <br>
                <br>
                <!--End of Course Area-->


                <section id="feature">
                    <div class="container">
                        <div class="center section-heading wow swing" data-wow-delay="0.2s">
                            <div class="col-md-12">
                                <div class="section-title-wrapper">
                                    <div class="section-title">
                                        <h3>Features</h3>
                                        <p>Features Content</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--        <div class="center wow fadeInRightBig " >
                                    <h2 class="text-success">Features</h2>
                                    <p class="lead">Modern Indian School is a co-educational English medium school with an international outlook</p>
                                </div>-->

                        <div class="row">
                            <div class="features">
                                <a href="#" class="col-md-4 col-sm-6 wow fadeInRight"
                                   data-wow-duration="1000ms" data-wow-delay="0.2s" style="display: block; cursor: pointer;">
                                    <div class="feature-wrap">
                                        <i class="fa fa-truck"></i>

                                        <h2>School Transport</h2><br>

                                        <h3>School buses are available for the students of all classes</h3>
                                    </div>
                                </a>


                                <a href="#" class="col-sm-4 wow fadeInRight"
                                   data-wow-duration="1000ms" data-wow-delay="0.2s" style="display: block; cursor: pointer;">
                                    <div class="feature-wrap">
                                        <i class="fa fa-list-alt"></i>

                                        <h2>Attendance</h2><br>

                                        <h3>Students are expected to attend school on all working days and be punctual</h3>
                                    </div>
                                </a>

                                <a href="#" class="col-sm-4 wow fadeInRight"
                                   data-wow-duration="1000ms" data-wow-delay="0.2s" style="display: block; cursor: pointer;">
                                    <div class="feature-wrap">
                                        <i class="fa fa-leaf"></i>

                                        <h2>Work Experience</h2><br>

                                        <h3>It is mandatory for each student to undertake one of the work experiences</h3>
                                    </div>
                                </a>

                                <a href="#" class="col-sm-4 wow fadeInLeft"
                                   data-wow-duration="1000ms" data-wow-delay="0.2s" style="display: block; cursor: pointer;">
                                    <div class="feature-wrap">
                                        <i class="fa fa-dribbble"></i>

                                        <h2>Sports & Games</h2><br>

                                        <h3>Students are encouraged to play different sports and games</h3>
                                    </div>
                                </a>

                                <a href="#" class="col-sm-4 wow fadeInLeft"
                                   data-wow-duration="1000ms" data-wow-delay="0.2s" style="display: block; cursor: pointer;">
                                    <div class="feature-wrap">
                                        <i class="fa fa-group"></i>

                                        <h2>Students Council</h2><br>

                                        <h3>The students council is the official medium of communication between the students and the
                                            school</h3>
                                    </div>
                                </a>

                                <a href="#" class="col-sm-4 wow fadeInLeft"
                                   data-wow-duration="1000ms" data-wow-delay="0.2s" style="display: block; cursor: pointer;">
                                    <div class="feature-wrap">
                                        <i class="fa fa-tasks"></i>

                                        <h2>Project Work</h2><br>

                                        <h3>Students are given a number of projects and assignments to compliment each subject</h3>
                                    </div>
                                </a>


                            </div>
                        </div>
                    </div>
                </section>
                <!--Fun Factor Area Start-->
                <div class="fun-factor-area" style="background-image:url('storage/web/img/banner/2.jpg')">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title-wrapper white center section-heading wow swing" data-wow-delay="0.2s">
                                    <div class="section-title">
                                        <h3>IMPORTANT FACTS</h3>
                                        <p>There are many variations of passages of Lorem Ipsum</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="single-fun-factor">
                                    <h4>Teachers</h4>
                                    <h2><span class="counter">50</span>+</h2>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="single-fun-factor">
                                    <h4>Students</h4>
                                    <h2><span class="counter">520</span>+</h2>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-4">
                                <div class="single-fun-factor">
                                    <h4>Staffs</h4>
                                    <h2><span class="counter">50</span>+</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Fun Factor Area-->   

                <!--Latest News Area Start--> 
                <div class="latest-area section-padding bg-white" id="notices">
                    <div class="container">
                        <div class="center section-heading wow swing" data-wow-delay="0.2s">
                            <div class="col-md-12">
                                <div class="section-title-wrapper">
                                    <div class="section-title">
                                        <h3>Notices</h3>
                                        <p>Latest Notices</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach($notices as $notice)
                            <div class="col-md-6 center section-heading" data-wow-delay="0.2s">
                                
                                <div class="single-latest-item">
                                    <div class="single-latest-text">
                                        <h3><a href="#">{{$notice->title}}</a></h3>
                                        <div class="single-item-comment-view">
                                           <span><i class="zmdi zmdi-calendar-check"></i>25 jun 2050</span>
                                           <span><i class="zmdi zmdi-eye"></i>59</span>
                                           <span><i class="zmdi zmdi-comments"></i>19</span>
                                       </div>
                                       <p>{{$notice->description}}</p>
                                       <a href="/notices" class="button-default">LEARN Now</a>
                                    </div>
                                </div>

                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!--End of Latest News Area--> 
                
                <!--Testimonial Area Start-->
                <div class="testimonial-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-lg-offset-0 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                                <div class="row">
                                    <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2">
                                        <div class="testimonial-image-slider text-center">
                                            @foreach($teachers as $teacher)
                                            <div class="sin-testiImage">
                                                <img src="storage/image/teacher/{{$teacher->image}}" alt="lol" />
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div> 
                                <div class="testimonial-text-slider text-center">
                                    @foreach($teachers as $teacher)
                                    <div class="sin-testiText">
                                        <h2>{{$teacher->name}}</h2>
                                        <p>{{$teacher->course}}</p>
                                    </div>
                                    @endforeach
                                </div>   
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Testimonial Area-->
                <!--Event Area Start-->
                <div class="event-area section-padding bg-white">
                    <div class="container">
                        <div class="center section-heading " data-wow-delay="0.2s">
                            <div class="col-md-12">
                                <div class="section-title-wrapper">
                                    <div class="section-title">
                                        <h3>Our Events</h3>
                                        <p>Latest Events</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach($events as $event)
                            <div class="col-md-4 col-sm-6 center section-heading" data-wow-delay="0.2s">
                                <div class="single-event-item">
                                    <div class="single-event-image">
                                        <a href="#">
                                            <img src="storage/image/event/{{$event->image}}" alt="" style="height: 250px">
                                            <span><span>{{ $event->created_at->format('D') }}</span>{{ $event->created_at->format('M') }}</span>
                                        </a>
                                    </div>
                                    <div class="single-event-text">
                                        <h3><a href="#">{{$event->title}}</a></h3>
                                        <div class="single-item-comment-view">
                                           <span><i class="zmdi zmdi-time"></i>{{$event->duration}}</span>
                                           <span><i class="zmdi zmdi-pin"></i>{{$event->location}}</span>
                                       </div>
                                       <p>{{$event->titlebody}}....</p>
                                       <a class="button-default" href="event-detail/{{$event->id}}">LEARN Now</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!--End of Event Area-->



  @endsection