@extends('frontend.layout.front-end-app')

@section('content')
    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Job Details
                    </h1>
                    <p class="text-white link-nav"><a href="{{ route('home') }}">Home </a> <span
                            class="lnr lnr-arrow-right"></span> <a href="javaScriptvoid(0)"> Job Details</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start post Area -->
    <section class="post-area section-gap">
        <div class="container">
            <div class="row justify-content-center d-flex">
                <div class="col-lg-8 post-list">
                    <div class="single-post d-flex flex-row">
                        <div class="details">
                            <div class="title d-flex flex-row justify-content-between">
                                <div class="titles">
                                    <a href="javaScriptvoid(0)">
                                        <h4>{{ $job->title }}</h4>
                                    </a>
                                </div>
                                <ul class="btns">
                                    <li><a href="#"><span class="lnr lnr-heart"></span></a></li>
                                    <li><a href="{{ route('apply', [$job->id]) }}">Apply</a></li>
                                </ul>
                            </div>
                            <p>
                                {!! $job->description !!}
                            </p>
                            <h5>Job Nature: {{ $job->job_type == 'full_time' ? 'Full time' : 'Part time' }}</h5>
                            <p class="address"><span class="lnr lnr-map"></span>{{ ucwords($job->location) }} </p>
                            <p class="address"><span class="lnr lnr-database"></span> {{ $job->salary }}k</p>
                        </div>
                    </div>
                    <div class="single-post job-details">
                        <h4 class="single-title">Whom we are looking for</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed
                            ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                            architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                            aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                            voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                            consectetur.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                    </div>
                    <div class="single-post job-experience">
                        <h4 class="single-title">Experience Requirements</h4>
                        <ul>
                            <li>
                                <img src="img/pages/list.jpg" alt="">
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliquaut enim ad minim veniam.</span>
                            </li>
                            <li>
                                <img src="img/pages/list.jpg" alt="">
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliquaut enim ad minim veniam.</span>
                            </li>
                            <li>
                                <img src="img/pages/list.jpg" alt="">
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliquaut enim ad minim veniam.</span>
                            </li>
                            <li>
                                <img src="img/pages/list.jpg" alt="">
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliquaut enim ad minim veniam.</span>
                            </li>
                            <li>
                                <img src="img/pages/list.jpg" alt="">
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliquaut enim ad minim veniam.</span>
                            </li>
                            <li>
                                <img src="img/pages/list.jpg" alt="">
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliquaut enim ad minim veniam.</span>
                            </li>
                        </ul>
                    </div>
                    <div class="single-post job-experience">
                        <h4 class="single-title">Job Features &amp; Overviews</h4>
                        <ul>
                            <li>
                                <img src="img/pages/list.jpg" alt="">
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliquaut enim ad minim veniam.</span>
                            </li>
                            <li>
                                <img src="img/pages/list.jpg" alt="">
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliquaut enim ad minim veniam.</span>
                            </li>
                            <li>
                                <img src="img/pages/list.jpg" alt="">
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliquaut enim ad minim veniam.</span>
                            </li>
                            <li>
                                <img src="img/pages/list.jpg" alt="">
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliquaut enim ad minim veniam.</span>
                            </li>
                        </ul>
                    </div>
                    <div class="single-post job-experience">
                        <h4 class="single-title">Education Requirements</h4>
                        <ul>
                            <li>
                                <img src="img/pages/list.jpg" alt="">
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliquaut enim ad minim veniam.</span>
                            </li>
                            <li>
                                <img src="img/pages/list.jpg" alt="">
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliquaut enim ad minim veniam.</span>
                            </li>
                            <li>
                                <img src="img/pages/list.jpg" alt="">
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliquaut enim ad minim veniam.</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 sidebar">
                    <div class="single-slidebar">
                        <h4>Jobs by Category</h4>
                        <ul class="cat-list">
                            @foreach ($categories as $category)
                                
                            <li><a class="justify-content-between d-flex" href="">
                                    <p>{{ $category->name }}</p><span></span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="single-slidebar">
                        <h4>Carrer Advice Blog</h4>
                        <div class="blog-list">
                            <div class="single-blog " style="background:#000 url(img/blog1.jpg);">
                                <a href="single.html">
                                    <h4>Home Audio Recording <br>
                                        For Everyone</h4>
                                </a>
                                <div class="meta justify-content-between d-flex">
                                    <p>
                                        02 Hours ago
                                    </p>
                                    <p>
                                        <span class="lnr lnr-heart"></span>
                                        06
                                        <span class="lnr lnr-bubble"></span>
                                        02
                                    </p>
                                </div>
                            </div>
                            <div class="single-blog " style="background:#000 url(img/blog2.jpg);">
                                <a href="single.html">
                                    <h4>Home Audio Recording <br>
                                        For Everyone</h4>
                                </a>
                                <div class="meta justify-content-between d-flex">
                                    <p>
                                        02 Hours ago
                                    </p>
                                    <p>
                                        <span class="lnr lnr-heart"></span>
                                        06
                                        <span class="lnr lnr-bubble"></span>
                                        02
                                    </p>
                                </div>
                            </div>
                            <div class="single-blog " style="background:#000 url(img/blog1.jpg);">
                                <a href="single.html">
                                    <h4>Home Audio Recording <br>
                                        For Everyone</h4>
                                </a>
                                <div class="meta justify-content-between d-flex">
                                    <p>
                                        02 Hours ago
                                    </p>
                                    <p>
                                        <span class="lnr lnr-heart"></span>
                                        06
                                        <span class="lnr lnr-bubble"></span>
                                        02
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End post Area -->


    <!-- Start callto-action Area -->
    <section class="callto-action-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content col-lg-9">
                    <div class="title text-center">
                        <h1 class="mb-10 text-white">Join us today without any hesitation</h1>
                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation.</p>
                        <a class="primary-btn" href="#">I am a Candidate</a>
                        <a class="primary-btn" href="#">We are an Employer</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End calto-action Area -->
@endsection
