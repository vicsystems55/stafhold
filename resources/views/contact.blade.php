@extends('layouts.app')


@section('content')



        <!-- Main header-->



        <!--Start breadcrumb area paroller-->
        <section class="breadcrumb-area">
            <div class="breadcrumb-area-bg" style="background-image: url(assets/images/breadcrumb/breadcrumb-1.jpg);">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content">
                            <div class="breadcrumb-menu" data-aos="fade-down" data-aos-easing="linear"
                                data-aos-duration="1500">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li class="active">Contact</li>
                                </ul>
                            </div>

                            <div class="title" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                                <h2>Contact</h2>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->

        <!--Start Google Map Style2 Area-->
        <section class="google-map-area">
            <div class="auto-container">
                <div class="contact-page-map-outer">
                    <!--Map Canvas-->
                    <div class="map-canvas" data-zoom="12" data-lat="51.401230" data-lng="-0.100400"
                        data-type="roadmap" data-hue="#ffc400" data-title="Envato"
                        data-icon-path="assets/images/icon/map-marker.png"
                        data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                    </div>
                </div>
            </div>
        </section>
        <!--End Google Map Style2 Area-->



        <!--Start Main Contact Form Area-->
        <section class="main-contact-form-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="contact-info-box">
                            <div class="sec-title">
                                <div class="sub-title">
                                    <h3>Get in Tocuh with us</h3>
                                </div>
                                <h2>Contact with the Team</h2>
                            </div>
                            <div class="text">
                                <p></p>
                            </div>

                            <div class="contact-info-list">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-telephone"></span>
                                        </div>

                                        <div class="text">
                                            <p>Have any questions?</p>
                                            <h4>Free: <a href="tel: 07445 107434"> 07445 107434</a></h4>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <span class="icon-email-1"></span>
                                        </div>

                                        <div class="text">
                                            <p>Write a email</p>
                                            <h4><a href="mailto:yourmail@email.com">admin@stafhold.com</a></h4>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <span class="icon-pin-1"></span>
                                        </div>

                                        <div class="text">
                                            <p>Visit our location</p>
                                            <h4>81A Parchmore Road,
                                                Thornton Heath, Croydon
                                                United Kingdom
                                                CR7 8LY </h4>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>



                    <div class="col-xl-6 col-lg-6">
                        <div class="contact-form contact-form--style2">
                            <div class="sec-title">
                                <div class="sub-title">
                                    <h3>Write Message</h3>
                                </div>
                                <h2>Send a Message</h2>

                                @if (Session::has('msg'))
                                <p class="alert alert-success">{{Session::get('msg')}}</p>

                                @endif

                            </div>

                            <form  name="contact_form" class="default-form2"
                                action="/post-message" method="post">

                                @csrf
                                <div class="row">

                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <input type="text" name="name" id="formName"
                                                    placeholder="Full Name" required="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <input type="email" name="email" id="formEmail"
                                                    placeholder="Email Address" required="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <input type="text" name="phone" value="" id="formPhone"
                                                    placeholder="Phone">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <input type="text" name="subject" value="" id="formSubject"
                                                    placeholder="Subject">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <textarea name="message" id="formMessage"
                                                    placeholder="Write a Message" required=""></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-12">
                                        <div class="button-box">

                                            <button class="btn-one" type="submit" >
                                                <span class="txt">send a message<i
                                                        class="icon-refresh arrow"></i></span>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!--End Main Contact Form Area-->


@endsection
