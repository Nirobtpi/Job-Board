@extends('frontend.layout.front-end-app')

@section('content')
    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row fullscreen d-flex align-items-center justify-content-center" style="height: 587px;">
                <div class="banner-content col-lg-12">
                    <h1 class="text-white">
                        <span>{{ $totalJob }}+</span> Jobs posted
                    </h1>
                    <form action="{{ route('search') }}" class="serach-form-area" method="GET">
                        <div class="row justify-content-center form-wrap">
                            <div class="col-lg-4 form-cols">
                                <input type="text" class="form-control" name="search"
                                    placeholder="what are you looging for?">
                            </div>
                            <div class="col-lg-3 form-cols">
                                <div class="default-select" id="default-selects" "="">
                               <select style=" display: none;">
                                                        <option value="1">Select area</option>
                                                        <option value="2">Dhaka</option>
                                                        <option value="3">Rajshahi</option>
                                                        <option value="4">Barishal</option>
                                                        <option value="5">Noakhali</option>
                                                        </select>
                                                        <div class="nice-select" tabindex="0"><span class="current">Select area</span>
                                                            <ul class="list">
                                                                <li data-value="1" class="option selected">Select area</li>
                                                                <li data-value="2" class="option">Dhaka</li>
                                                                <li data-value="3" class="option">Rajshahi</li>
                                                                <li data-value="4" class="option">Barishal</li>
                                                                <li data-value="5" class="option">Noakhali</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 form-cols">
                                                    <div class="default-select" id="default-selects2">
                                                        <select style="display: none;">
                                                            <option selected disabled>All Category</option>
                                                            @foreach ($categories as $category)
                                                                <option value="{{ $category->name }}">{{ $category->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 form-cols">
                                                    <button type="submit"  class="btn btn-info">
                                                        <span class="lnr lnr-magnifier"></span> Search
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                        <p class="text-white"> <span>Search by tags:</span> Tecnology, Business, Consulting, IT Company,
                                            Design, Development</p>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- End banner Area -->

                        <!-- Start features Area -->
                        <section class="features-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6">
                                        <div class="single-feature">
                                            <h4>Searching</h4>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="single-feature">
                                            <h4>Applying</h4>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="single-feature">
                                            <h4>Security</h4>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="single-feature">
                                            <h4>Notifications</h4>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- End features Area -->

                        <!-- Start feature-cat Area -->
                        <section class="feature-cat-area pt-100" id="category">
                            <div class="container">
                                <div class="row d-flex justify-content-center">
                                    <div class="menu-content pb-60 col-lg-10">
                                        <div class="title text-center">
                                            <h1 class="mb-10">Featured Job Categories</h1>
                                            <p>Who are in extremely love with eco friendly system.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                       @foreach ($categories as $category)
                                    <div class="col-lg-2 col-md-4 col-sm-6 mb-2">
                                        <div class="single-fcat">
                                            <a href="">
                                                <p>{{ $category->name }}</p>
                                            </a>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
    </section>
    <!-- End feature-cat Area -->

    <!-- Start post Area -->
    <section class="post-area section-gap">
        <div class="container">
            <div class="row justify-content-center d-flex">
                <div class="col-lg-8 post-list">
                    @forelse ($jobs as $job)
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
                                <h5>Job Nature: {{ $job->job_type == 'full_time' ? 'Full Time' : 'Part Time' }}</h5>
                                <p class="address"><span class="lnr lnr-map"></span> {{ ucwords($job->location) }}</p>
                                <p class="address"><span class="lnr lnr-database"></span>{{ $job->salary }}k</p>
                            </div>
                        </div>
                    @empty
                        <h2>No Data Found</h2>
                    @endforelse

                    {{-- <a class="text-uppercase loadmore-btn mx-auto d-block" href="category.html">Load More job Posts</a> --}}

                </div>
                <div class="col-lg-4 sidebar">
                    {{-- <div class="single-slidebar">
                        <h4>Jobs by Location</h4>
                        <ul class="cat-list">
                            @foreach ($jobs as $job)
                                <li>
                                    <a class="justify-content-between d-flex" href="{{ route('home') }}">
                                        <p>{{ ucwords($job->location) }}</p><span> {{ $jobCountsByLocation[$job->location] ?? 0  }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div> --}}


                    <div class="single-slidebar">
                        <h4>Jobs by Category</h4>
                        <ul class="cat-list">
                            @foreach ($jobs as $job)
                                <li>
                                    <a class="justify-content-between d-flex" href="category.html">
                                        <p>{{ $job->category->name }}</p>
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
                        Job Listing App Today!</h1>
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
