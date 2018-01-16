@extends('web.layouts.app')
@section('content') 
 <div class="breadcrumb-banner-area" style="background-image: url('/storage/web/img/banner/4.jpg');">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="breadcrumb-text">
                                    <h1 class="text-center">Notices</h1>
                                    <div class="breadcrumb-bar">
                                        <ul class="breadcrumb text-center">
                                            <li><a href="/">Home</a></li>
                                            <li>Notices</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Breadcrumb Banner Area-->
                 <div class="contact-form-area section-padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <h4 class="contact-title">social media</h4>
                                <div class="link-social">
                                    <a href="www.facebook.com/sthapratik4"><i class="zmdi zmdi-facebook"></i></a>
                                    <a href="#"><i class="zmdi zmdi-rss"></i></a>
                                    <a href="#"><i class="zmdi zmdi-google-plus"></i></a>
                                    <a href="#"><i class="zmdi zmdi-pinterest"></i></a>
                                    <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h4 class="contact-title" align="center">Notices</h4>
                                @foreach($notices as $notice)
                                  <div class="media align-items-center py-30 bg-white" style="background-color:  #ebebe0">
                                    <img class="avatar avatar-xxl" src="/storage/image/notice/{{$notice->image}}" alt="...">
                                    <div class="media-body">
                                      <h5>{{$notice->title}}</h5>
                                      {{$notice->description}}
                                      <div class="gap-items font-size-16">
                                        <a class="text-dark" href="#"><i class="fa fa-twitter"></i></a>
                                        <a class="text-dark" href="#"><i class="fa fa-instagram"></i></a>
                                        <a class="text-dark" href="#"><i class="fa fa-facebook"></i></a>
                                       <p class="pull-right"> {{ $notice->created_at->diffForHumans() }}</p>
                                      </div>
                                    </div>
                                    <div class="fb-comments" data-href="https://localhost:8000" data-numposts="1" align="center"></div>
                                     </div><br><br>
                                      @endforeach
                                   
                            </div>
                        </div>
                    </div>
                </div>


@endsection