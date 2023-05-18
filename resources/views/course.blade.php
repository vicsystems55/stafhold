@extends('layouts.app')

@section('content')


        <!--Start breadcrumb area paroller-->
        <section class="breadcrumb-area">
            <div class="breadcrumb-area-bg" style="background-image: url({{asset('/')}}assets/images/breadcrumb/breadcrumb-1.jpg);">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content">
                            <div class="breadcrumb-menu" data-aos="fade-down" data-aos-easing="linear"
                                data-aos-duration="1500">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li class="active">Course Details</li>
                                </ul>
                            </div>

                            <div class="title" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                                <h2>Course Details</h2>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->


        <!--Start Blog Page Three-->
        <section class="blog-details-page">
            <div class="container">

                <div class="row">

                    <div class="col-xl-8 col-lg-12">
                        <div class="blog-details-content">

                            <div class="single-blog-style1 single-blog-style1--instyle3">
                                <div class="single-blog-style1__inner">
                                    <div class="img-holder">
                                        <div class="inner">
                                            <img src="{{asset('/')}}assets/images/blog/blog-v3-1.jpg" alt="">
                                        </div>

                                    </div>
                                    <div class="text-holder">
                                        <ul class="meta-info">
                                            <li>
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                                <a href="#">by Admin</a>
                                            </li>

                                        </ul>
                                        <div class="text-inner">

                                            {{-- {{request()->get('code')}} --}}
                                            @if (request()->get('code')== 'one')
                                            <h3 class="blog-title">Sterilization and Disinfection Best Practices for Healthcare Facilities</h3>
                                            @elseif (request()->get('code')== 'two')
                                            <h3>Mastering Central Sterile Services Department (CSSD) Operations</h3>
                                            @elseif (request()->get('code')== 'three')
                                            <h3>Infection Control and Environmental Decontamination in Healthcare</h3>
                                            @elseif (request()->get('code')== 'four')
                                            <h3>Advanced Techniques in Healthcare Decontamination</h3>
                                            @else
                                            <h3 class="blog-title">Sterilization and Disinfection Best Practices for Healthcare Facilities</h3>


                                            @endif
                                        </div>
                                        <div class="text">
                                            <div class="py-5 text-center">


                                                <h4  class="py-5">You don't have access to this course.</h4>

                                                <button class="btn btn-lg btn-warning">Proceed to payment</button>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="tag-social-share-box">
                                <div class="tag-box d-none">
                                    <div class="title">
                                        <h3>Tags:</h3>
                                    </div>
                                    <ul class="tag-list">
                                        <li><a href="#">waste</a></li>
                                        <li><a href="#">Dumpster</a></li>
                                    </ul>
                                </div>
                                <div class="post-social-share">
                                    <div class="post-social-share-links clearfix">
                                        <ul class="clearfix">
                                            <li>
                                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>


                            <div class="blog-details-author d-none">
                                <div class="inner-box">
                                    <div class="img-box">
                                        <img src="{{asset('/')}}assets/images/blog/author.jpg" alt="">
                                    </div>
                                    <div class="text">
                                        <h3>Christine Eve</h3>
                                        <p>Lorem ipsum is simply free text used copytyping inventore veritatis
                                            refreshing. Neque porro est
                                            qui dolorem quaed inventore veritatis et quasi architecto.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="comment-box d-none">
                                <div class="inner-title">
                                    <h2>2 Comments</h2>
                                </div>
                                <div class="outer-box">
                                    <div class="row">
                                        <div class="col-md-12">

                                            <!--Start single comment-->
                                            <div class="single-comment">
                                                <div class="single-comment-box">
                                                    <div class="img-holder">
                                                        <img src="{{asset('/')}}assets/images/blog/comment-1.jpg" alt="Awesome Image">
                                                    </div>
                                                    <div class="text-holder">
                                                        <div class="top">
                                                            <div class="name">
                                                                <h3>Kevin Martin</h3>
                                                            </div>
                                                            <div class="reply">
                                                                <a href="#">Reply</a>
                                                            </div>
                                                        </div>
                                                        <div class="text">
                                                            <p>Lorem ipsum is simply free text used by copytyping
                                                                refreshing. Neque porro est qui dolorem ipsum quia quaed
                                                                inventore veritatis et quasi architecto beatae vitae
                                                                dicta sunt explicabo porro est qui dolorem.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End single comment-->
                                            <!--Start single comment-->
                                            <div class="single-comment">
                                                <div class="single-comment-box">
                                                    <div class="img-holder">
                                                        <img src="{{asset('/')}}assets/images/blog/comment-2.jpg" alt="Awesome Image">
                                                    </div>
                                                    <div class="text-holder">
                                                        <div class="top">
                                                            <div class="name">
                                                                <h3>Sarah Albert</h3>
                                                            </div>
                                                            <div class="reply">
                                                                <a href="#">Reply</a>
                                                            </div>
                                                        </div>
                                                        <div class="text">
                                                            <p>Lorem ipsum is simply free text used by copytyping
                                                                refreshing. Neque porro est qui dolorem ipsum quia quaed
                                                                inventore veritatis et quasi architecto beatae vitae
                                                                dicta sunt explicabo porro est qui dolorem.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End single comment-->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="add-comment-box d-none">
                                <div class="inner-title">
                                    <h2>Leave a Comment</h2>
                                </div>
                                <form id="add-comment-form" action="#">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input-box">
                                                        <input type="text" name="fname" value="" placeholder="Your name"
                                                            required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-box">
                                                        <input type="email" name="femail" value=""
                                                            placeholder="Email address" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="input-box">
                                                        <textarea name="fcomments" placeholder="Write message"
                                                            required=""></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="button-box">
                                                        <button class="btn-one" type="submit">
                                                            <span class="txt">Submit Comment</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>


                    <!--Start Thm Sidebar Box-->
                    <div class="col-xl-4 col-lg-12">
                        <div class="thm-sidebar-box">
                            <div class="sidebar-search-box d-none">
                                <form class="search-form" action="#">
                                    <input placeholder="Search" type="text">
                                    <button type="submit">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </div>

                            <div class="single-sidebar-box">
                                <div class="sidebar-title">
                                    <h3>Recent Posts</h3>
                                </div>
                                <div class="sidebar-blog-post">
                                    <ul class="blog-post">
                                        <li>
                                            <div class="inner">
                                                <div class="img-box">
                                                    <img src="{{asset('/')}}assets/images/sidebar/news-1.jpg" alt="Awesome Image">
                                                    <div class="overlay-content">
                                                        <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                                <div class="title-box">
                                                    <div class="admin"><span class="icon-user"></span> by Admin</div>
                                                    <h4><a href="#">Sterilization and Disinfection Best Practices for Healthcare Facilities</a></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="inner">
                                                <div class="img-box">
                                                    <img src="{{asset('/')}}assets/images/sidebar/news-2.jpg" alt="Awesome Image">
                                                    <div class="overlay-content">
                                                        <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                                <div class="title-box">
                                                    <div class="admin"><span class="icon-user"></span> by Admin</div>
                                                    <h4><a href="#">Mastering Central Sterile Services Department (CSSD) Operations</a></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="inner">
                                                <div class="img-box">
                                                    <img src="{{asset('/')}}assets/images/sidebar/news-3.jpg" alt="Awesome Image">
                                                    <div class="overlay-content">
                                                        <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                                <div class="title-box">
                                                    <div class="admin"><span class="icon-user"></span> by Admin</div>
                                                    <h4><a href="#">Infection Control and Environmental Decontamination in Healthcare</a></h4>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="single-sidebar-box">
                                <div class="sidebar-title">
                                    <h3>Categories</h3>
                                </div>
                                <ul class="sidebar-categories-box">
                                    <li><a href="#">Zero Waste</a></li>
                                    <li><a href="#">Waste Management</a></li>
                                    <li><a href="#">Plastic waste</a></li>
                                    <li><a href="#">Paper Waste</a></li>
                                    <li><a href="#">Solid Waste</a></li>
                                </ul>
                            </div>

                            <div class="single-sidebar-box d-none">
                                <div class="sidebar-title">
                                    <h3>Tags</h3>
                                </div>
                                <div class="popular-tag-box">
                                    <ul class="popular-tag">
                                        <li><a href="#">waste</a></li>
                                        <li><a href="#">Dumpster</a></li>
                                        <li><a href="#">Zerowaste</a></li>
                                        <li><a href="#">Garbage</a></li>
                                        <li><a href="#">trash</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--End Thm Sidebar Box-->

                </div>
            </div>
        </section>
        <!--End Blog Page Three-->



@endsection
