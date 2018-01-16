@extends('web.layouts.app')

@section('content')

                <div class="breadcrumb-banner-area" style="background-image: url('storage/web/img/banner/3.jpg');">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="breadcrumb-text">
                                    <h1 class="text-center">CONTACT US</h1>
                                    <div class="breadcrumb-bar">
                                        <ul class="breadcrumb text-center">
                                            <li><a href="/">Home</a></li>
                                            <li>CONTACT</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <!--Contact Form Area Start-->
                <div class="contact-form-area section-padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <h4 class="contact-title">contact info</h4>
                                <div class="contact-text">
                                    <p><span class="c-icon"><i class="zmdi zmdi-phone"></i></span><span class="c-text">987654321</span></p>
                                    <p><span class="c-icon"><i class="zmdi zmdi-email"></i></span><span class="c-text">littleflower@gmail.com</span></p>
                                    <p><span class="c-icon"><i class="zmdi zmdi-pin"></i></span><span class="c-text">Chhatachowk<br>
                                    Dharan, Nepal</span></p>
                                </div>
                                <h4 class="contact-title">social media</h4>
                                <div class="link-social">
                                    <a href="www.facebook.com/sthapratik4"><i class="zmdi zmdi-facebook"></i></a>
                                    <a href="#"><i class="zmdi zmdi-rss"></i></a>
                                    <a href="#"><i class="zmdi zmdi-google-plus"></i></a>
                                    <a href="#"><i class="zmdi zmdi-pinterest"></i></a>
                                    <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <h4 class="contact-title">send your massage</h4>
                                <form id="contact-form" action="/contacts" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" name="name" placeholder="name">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="email" name="email" placeholder="Email">
                                        </div>
                                        <div class="col-md-12">
                                            <textarea name="description" cols="30" rows="10" placeholder="Messages"></textarea>
                                            
                                        </div>
                                    </div>
                                        <button type="submit">SUBMIT</button>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endsection