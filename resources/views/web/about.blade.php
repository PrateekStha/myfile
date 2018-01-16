@extends('web.layouts.app')
@section('content')  



                <!--Breadcrumb Banner Area Start-->
                <div class="breadcrumb-banner-area"  style="background-image: url('storage/web/img/banner/4.jpg');">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="breadcrumb-text">
                                    <h1 class="text-center">ABOUT US</h1>
                                    <div class="breadcrumb-bar">
                                        <ul class="breadcrumb text-center">
                                            <li><a href="/">Home</a></li>
                                            <li>ABOUT US</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Breadcrumb Banner Area-->
                <!--About Page Area Start-->
                <div class="about-page-area section-padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title-wrapper">
                                    <div class="section-title">
                                        <h3>Who we are</h3>
                                        <p>There are many variations of passages</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="about-text-container">
                                    <p>{{$abouts[0]->description}}
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="skill-image">
                                    <img src="storage/image/teacher/{{$abouts[0]->image}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of About Page Area-->
                <!--Skill And Experience Area Start-->
                <div class="skill-and-experience-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title-wrapper">
                                    <div class="section-title">
                                        <h3>Skills and Experience</h3>
                                        <p>There are many variations of passages</p>
                                    </div>
                                </div> 
                            </div>       
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="experience-skill-wrapper">
                                    <div class="skill-bar-item">
                                        <span>Programming</span>
                                        <div class="progress">
                                            <div class="progress-bar wow fadeInLeft" data-progress="80%" style="width: 80%;" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                <span class="text-top">80%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="skill-bar-item">
                                        <span>Sports </span>
                                        <div class="progress">
                                            <div class="progress-bar wow fadeInLeft" data-progress="75%" style="width: 75%;" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                <span class="text-top">75%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="skill-bar-item">
                                        <span>Creative Writing</span>
                                        <div class="progress">
                                            <div class="progress-bar wow fadeInLeft" data-progress="90%" style="width: 90%;" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                <span class="text-top">90%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="skill-bar-item">
                                        <span>English Knowledge</span>
                                        <div class="progress">
                                            <div class="progress-bar wow fadeInLeft" data-progress="70%" style="width: 70%;" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                <span class="text-top">70%</span>
                                            </div>
                                        </div>
                                    </div>  
                                </div>    
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="experience-skill-wrapper">
                                    <div class="skill-bar-item">
                                        <span>Extra-curriulum</span>
                                        <div class="progress">
                                            <div class="progress-bar wow fadeInLeft" data-progress="75%" style="width: 75%;" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                <span class="text-top">75%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="skill-bar-item">
                                        <span>Services</span>
                                        <div class="progress">
                                            <div class="progress-bar wow fadeInLeft" data-progress="90%" style="width: 90%;" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                <span class="text-top">90%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="skill-bar-item">
                                        <span>Fascilities</span>
                                        <div class="progress">
                                            <div class="progress-bar wow fadeInLeft" data-progress="80%" style="width: 80%;" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                <span class="text-top">80%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="skill-bar-item">
                                        <span>Exam results</span>
                                        <div class="progress">
                                            <div class="progress-bar wow fadeInLeft" data-progress="100%" style="width: 100%;" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                <span class="text-top">100%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Skill And Experience Area-->

                <!--Teachers Area Start-->
                <div class="teachers-area padding-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title-wrapper">
                                    <div class="section-title">
                                        <h3>OUR TEACHERS</h3>
                                        <p>There are many variations of passages of Lorem Ipsum</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                        	@foreach($teachers as $teacher)
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="single-teacher-item">
                                    <div class="single-teacher-image">
                                        <a href="#"><img src="storage/image/teacher/{{$teacher->image}}" style="height: 100px" alt=""></a>
                                    </div>
                                    <div class="single-teacher-text">
                                        <h3><a href="#">{{$teacher->name}}</a></h3>
                                        <h4>Teacher</h4>
                                        <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr</p>
                                        <div class="social-links">
                                            <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                            <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                                            <a href="#"><i class="zmdi zmdi-google-old"></i></a>
                                            <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                            @endforeach
                        </div>
                    </div>
                </div>
                <!--End of Teachers Area-->


@endsection