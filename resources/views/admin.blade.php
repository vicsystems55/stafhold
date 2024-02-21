@extends('layouts.app')

@section('content')

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
                                    <li class="active">Admin</li>
                                </ul>
                            </div>

                            <div class="title" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                                <h2>Admin Page</h2>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->

        <!--Start Blog Page One-->
        <section class="blog-page-one">
            <div class="container">

                <h6>Change Password</h6>

                <form action="/change-password" method="post" class="col-md-6">

                    @if(Session::has('message'))
                    <p class="alert alert-info">{{ Session::get('message') }}</p>
                    @endif

                    @csrf

                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <label for="n">New password</label>
                        <input type="password" name="password" class="form-control" placeholder="New Password">
                    </div>

                    <div class="form-group">
                        <label for="">Confirm Password</label>
                        <input type="password" name="confirm-password" class="form-control" placeholder="Confirm new password">
                    </div>
                    <div class="form-group"><button type="submit" class="btn btn-primary">Submit</button></div>

                </form>


            </div>

            <div class="updae">
                @if(Session::has('msg'))
                <p class="alert alert-info">{{ Session::get('msg') }}</p>
                @endif
                <div class="py-2">
                    <form action="/update-site" method="post">
                    @csrf

                    <button type="submit" class="btn btn-primary">Update App</button>
                    </form>
                </div>
            </div>

        </section>
        <!--End Blog Page One-->

@endsection
