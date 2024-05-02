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
                                    <li><a href="/">Home</a></li>
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
                    <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=24%20Harbour%20House%20Coldharbour%20Lane%20Rainham%20RM13%209YB%20United%20Kingdom+(Stafhold%20Health%20Care%20Limited)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps vehicle tracker</a></iframe></div>
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
                                            <h4>5 Harbour House,
                                                Coldharbour Lane
                                                RM13 9YB

                                                United Kingdom</h4>
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

                                @if (Session::has('status'))
                                <p class="alert alert-success">{{Session::get('status')}}</p>

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
                                        <div class="form-group">
                                            <div class="g-recaptcha mt-4" data-sitekey={{config('services.recaptcha.key')}}></div>

                                        </div>
                                    </div>

                                     <!-- Google Recaptcha -->


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
