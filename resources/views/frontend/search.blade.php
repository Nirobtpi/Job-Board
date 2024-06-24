@extends('frontend.layout.front-end-app')

@section('content')
 <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Application List
                    </h1>
                    <p class="text-white link-nav"><a href="{{ route('home') }}">Home </a> <span
                            class="lnr lnr-arrow-right"></span> <a href=""> Search Item</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- Start post Area -->
    <section class="post-area section-gap">
        <div class="container">
            <div class="row justify-content-center d-flex">
                <div class="col-lg-8 post-list">
                    @forelse ($alljob as $job)
                        <div class="single-post d-flex flex-row">
                            <div class="details">
                                <div class="title d-flex flex-row justify-content-between">
                                    <div class="titles">
                                        <a href="{{ route('job', [$job->id, Str::slug($job->title)]) }}">
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
                                <h5>a Nature: {{ $job->a_type == 'full_time' ? 'Full Time' : 'Part Time' }}</h5>
                                <p class="address"><span class="lnr lnr-map"></span> {{ ucwords($job->location) }}</p>
                                <p class="address"><span class="lnr lnr-database"></span>{{ $job->salary }}k</p>
                            </div>
                        </div>
                    @empty
                        <h2>No Data Found</h2>
                    @endforelse

                    {{-- <a class="text-uppercase loadmore-btn mx-auto d-block" href="category.html">Load More a Posts</a> --}}

                </div>
            </div>
        </div>
    </section>
    <!-- End post Area -->


    <!-- Start callto-action Area -->
    <section class="callto-action-area section-gap" id="join">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content col-lg-9">
                    <div class="title text-center">
                        <h1 class="mb-10 text-white">Join us today without any hesitation</h1>
                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation.</p>
                        <a class="primary-btn" href="#">I am a Candidate</a>
                        <a class="primary-btn" href="#">Request Free Demo</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End calto-action Area -->

    <!-- Start download Area -->
    <section class="download-area section-gap" id="app">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 download-left">
                    <img class="img-fluid" src="img/d1.png" alt="">
                </div>
                <div class="col-lg-6 download-right">
                    <h1>Download the <br>
                        a Listing App Today!</h1>
                    <p class="subs">
                        It won’t be a bigger problem to find one video game lover in your neighbor. Since the
                        introduction of Virtual Game, it has been achieving great heights so far as its popularity and
                        technological advancement are concerned.
                    </p>
                    <div class="d-flex flex-row">
                        <div class="buttons">
                            <i class="fa fa-apple" aria-hidden="true"></i>
                            <div class="desc">
                                <a href="#">
                                    <p>
                                        <span>Available</span> <br>
                                        on App Store
                                    </p>
                                </a>
                            </div>
                        </div>
                        <div class="buttons">
                            <i class="fa fa-android" aria-hidden="true"></i>
                            <div class="desc">
                                <a href="#">
                                    <p>
                                        <span>Available</span> <br>
                                        on Play Store
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End download Area -->
@endsection
