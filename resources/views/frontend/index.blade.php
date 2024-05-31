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
                    <form action="search.html" class="serach-form-area">
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
                                                        <option value="1">All Category</option>
                                                        <option value="2">Medical</option>
                                                        <option value="3">Technology</option>
                                                        <option value="4">Goverment</option>
                                                        <option value="5">Development</option>
                                                    </select>
                                                    <div class="nice-select" tabindex="0"><span class="current">All Category</span>
                                                        <ul class="list">
                                                            <li data-value="1" class="option selected">All Category</li>
                                                            <li data-value="2" class="option">Medical</li>
                                                            <li data-value="3" class="option">Technology</li>
                                                            <li data-value="4" class="option">Goverment</li>
                                                            <li data-value="5" class="option">Development</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 form-cols">
                                                <button type="button" class="btn btn-info">
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

                    <!-- Start popular-post Area -->
                    <section class="popular-post-area pt-100">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="active-popular-post-carusel owl-carousel owl-theme owl-loaded">






                                    <div class="owl-stage-outer">
                                        <div class="owl-stage"
                                            style="transform: translate3d(-4095px, 0px, 0px); transition: 0.25s; width: 5850px;">
                                            <div class="owl-item cloned" style="width: 555px; margin-right: 30px;">
                                                <div class="single-popular-post d-flex flex-row">
                                                    <div class="thumb">
                                                        <img src="img/p1.png" alt="">
                                                        <a class="btns text-uppercase" href="#">view job post</a>
                                                    </div>
                                                    <div class="details">
                                                        <a href="#">
                                                            <h4>Creative Designer</h4>
                                                        </a>
                                                        <h6>Los Angeles</h6>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                            temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                                                            quis.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-item cloned" style="width: 555px; margin-right: 30px;">
                                                <div class="single-popular-post d-flex flex-row">
                                                    <div class="thumb">
                                                        <img src="img/p2.png" alt="">
                                                        <a class="btns text-uppercase" href="#">view job post</a>
                                                    </div>
                                                    <div class="details">
                                                        <a href="#">
                                                            <h4>Creative Designer</h4>
                                                        </a>
                                                        <h6>Los Angeles</h6>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                            temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                                                            quis.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 555px; margin-right: 30px;">
                                                <div class="single-popular-post d-flex flex-row">
                                                    <div class="thumb">
                                                        <img class="img-fluid" src="img/p1.png" alt="">
                                                        <a class="btns text-uppercase" href="#">view job post</a>
                                                    </div>
                                                    <div class="details">
                                                        <a href="#">
                                                            <h4>Creative Designer</h4>
                                                        </a>
                                                        <h6>Los Angeles</h6>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                            temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                                                            quis.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 555px; margin-right: 30px;">
                                                <div class="single-popular-post d-flex flex-row">
                                                    <div class="thumb">
                                                        <img src="img/p2.png" alt="">
                                                        <a class="btns text-uppercase" href="#">view job post</a>
                                                    </div>
                                                    <div class="details">
                                                        <a href="#">
                                                            <h4>Creative Designer</h4>
                                                        </a>
                                                        <h6>Los Angeles</h6>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                            temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                                                            quis.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 555px; margin-right: 30px;">
                                                <div class="single-popular-post d-flex flex-row">
                                                    <div class="thumb">
                                                        <img src="img/p1.png" alt="">
                                                        <a class="btns text-uppercase" href="#">view job post</a>
                                                    </div>
                                                    <div class="details">
                                                        <a href="#">
                                                            <h4>Creative Designer</h4>
                                                        </a>
                                                        <h6>Los Angeles</h6>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                            temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                                                            quis.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 555px; margin-right: 30px;">
                                                <div class="single-popular-post d-flex flex-row">
                                                    <div class="thumb">
                                                        <img src="img/p2.png" alt="">
                                                        <a class="btns text-uppercase" href="#">view job post</a>
                                                    </div>
                                                    <div class="details">
                                                        <a href="#">
                                                            <h4>Creative Designer</h4>
                                                        </a>
                                                        <h6>Los Angeles</h6>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                            temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                                                            quis.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 555px; margin-right: 30px;">
                                                <div class="single-popular-post d-flex flex-row">
                                                    <div class="thumb">
                                                        <img src="img/p1.png" alt="">
                                                        <a class="btns text-uppercase" href="#">view job post</a>
                                                    </div>
                                                    <div class="details">
                                                        <a href="#">
                                                            <h4>Creative Designer</h4>
                                                        </a>
                                                        <h6>Los Angeles</h6>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                            temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                                                            quis.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-item active" style="width: 555px; margin-right: 30px;">
                                                <div class="single-popular-post d-flex flex-row">
                                                    <div class="thumb">
                                                        <img src="img/p2.png" alt="">
                                                        <a class="btns text-uppercase" href="#">view job post</a>
                                                    </div>
                                                    <div class="details">
                                                        <a href="#">
                                                            <h4>Creative Designer</h4>
                                                        </a>
                                                        <h6>Los Angeles</h6>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                            temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                                                            quis.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-item cloned active" style="width: 555px; margin-right: 30px;">
                                                <div class="single-popular-post d-flex flex-row">
                                                    <div class="thumb">
                                                        <img class="img-fluid" src="img/p1.png" alt="">
                                                        <a class="btns text-uppercase" href="#">view job post</a>
                                                    </div>
                                                    <div class="details">
                                                        <a href="#">
                                                            <h4>Creative Designer</h4>
                                                        </a>
                                                        <h6>Los Angeles</h6>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                            temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                                                            quis.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-item cloned" style="width: 555px; margin-right: 30px;">
                                                <div class="single-popular-post d-flex flex-row">
                                                    <div class="thumb">
                                                        <img src="img/p2.png" alt="">
                                                        <a class="btns text-uppercase" href="#">view job post</a>
                                                    </div>
                                                    <div class="details">
                                                        <a href="#">
                                                            <h4>Creative Designer</h4>
                                                        </a>
                                                        <h6>Los Angeles</h6>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                            temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                                                            quis.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-controls">
                                        <div class="owl-nav">
                                            <div class="owl-prev" style="display: none;">prev</div>
                                            <div class="owl-next" style="display: none;">next</div>
                                        </div>
                                        <div style="" class="owl-dots">
                                            <div class="owl-dot"><span></span></div>
                                            <div class="owl-dot"><span></span></div>
                                            <div class="owl-dot active"><span></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End popular-post Area -->

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
                                        <a href="single.html">
                                            <h4>{{ $job->title }}</h4>
                                        </a>
                                    </div>
                                    <ul class="btns">
                                        <li><a href="#"><span class="lnr lnr-heart"></span></a></li>
                                        <li><a href="{{ url('apply',[$job->id]) }}">Apply</a></li>
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
                        <h4>Top rated job posts</h4>
                        <div class="active-relatedjob-carusel owl-carousel owl-theme owl-loaded">



                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                    style="transform: translate3d(-1360px, 0px, 0px); transition: 0.25s; width: 2380px;">
                                    <div class="owl-item cloned" style="width: 310px; margin-right: 30px;">
                                        <div class="single-rated">
                                            <img class="img-fluid" src="img/r1.jpg" alt="">
                                            <a href="single.html">
                                                <h4>Creative Art Designer</h4>
                                            </a>
                                            <h6>Premium Labels Limited</h6>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                temporinc ididunt ut dolore magna aliqua.
                                            </p>
                                            <h5>Job Nature: Full time</h5>
                                            <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath
                                                Dhanmondi Dhaka</p>
                                            <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
                                            <a href="#" class="btns text-uppercase">Apply job</a>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 310px; margin-right: 30px;">
                                        <div class="single-rated">
                                            <img class="img-fluid" src="img/r1.jpg" alt="">
                                            <a href="single.html">
                                                <h4>Creative Art Designer</h4>
                                            </a>
                                            <h6>Premium Labels Limited</h6>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                temporinc ididunt ut dolore magna aliqua.
                                            </p>
                                            <h5>Job Nature: Full time</h5>
                                            <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath
                                                Dhanmondi Dhaka</p>
                                            <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
                                            <a href="#" class="btns text-uppercase">Apply job</a>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 310px; margin-right: 30px;">
                                        <div class="single-rated">
                                            <img class="img-fluid" src="img/r1.jpg" alt="">
                                            <a href="single.html">
                                                <h4>Creative Art Designer</h4>
                                            </a>
                                            <h6>Premium Labels Limited</h6>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                temporinc ididunt ut dolore magna aliqua.
                                            </p>
                                            <h5>Job Nature: Full time</h5>
                                            <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath
                                                Dhanmondi Dhaka</p>
                                            <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
                                            <a href="#" class="btns text-uppercase">Apply job</a>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 310px; margin-right: 30px;">
                                        <div class="single-rated">
                                            <img class="img-fluid" src="img/r1.jpg" alt="">
                                            <a href="single.html">
                                                <h4>Creative Art Designer</h4>
                                            </a>
                                            <h6>Premium Labels Limited</h6>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                temporinc ididunt ut dolore magna aliqua.
                                            </p>
                                            <h5>Job Nature: Full time</h5>
                                            <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath
                                                Dhanmondi Dhaka</p>
                                            <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
                                            <a href="#" class="btns text-uppercase">Apply job</a>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 310px; margin-right: 30px;">
                                        <div class="single-rated">
                                            <img class="img-fluid" src="img/r1.jpg" alt="">
                                            <a href="single.html">
                                                <h4>Creative Art Designer</h4>
                                            </a>
                                            <h6>Premium Labels Limited</h6>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                temporinc ididunt ut dolore magna aliqua.
                                            </p>
                                            <h5>Job Nature: Full time</h5>
                                            <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath
                                                Dhanmondi Dhaka</p>
                                            <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
                                            <a href="#" class="btns text-uppercase">Apply job</a>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 310px; margin-right: 30px;">
                                        <div class="single-rated">
                                            <img class="img-fluid" src="img/r1.jpg" alt="">
                                            <a href="single.html">
                                                <h4>Creative Art Designer</h4>
                                            </a>
                                            <h6>Premium Labels Limited</h6>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                temporinc ididunt ut dolore magna aliqua.
                                            </p>
                                            <h5>Job Nature: Full time</h5>
                                            <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath
                                                Dhanmondi Dhaka</p>
                                            <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
                                            <a href="#" class="btns text-uppercase">Apply job</a>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 310px; margin-right: 30px;">
                                        <div class="single-rated">
                                            <img class="img-fluid" src="img/r1.jpg" alt="">
                                            <a href="single.html">
                                                <h4>Creative Art Designer</h4>
                                            </a>
                                            <h6>Premium Labels Limited</h6>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                temporinc ididunt ut dolore magna aliqua.
                                            </p>
                                            <h5>Job Nature: Full time</h5>
                                            <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath
                                                Dhanmondi Dhaka</p>
                                            <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
                                            <a href="#" class="btns text-uppercase">Apply job</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-controls">
                                <div class="owl-nav">
                                    <div class="owl-prev" style="display: none;">prev</div>
                                    <div class="owl-next" style="display: none;">next</div>
                                </div>
                                <div style="" class="owl-dots">
                                    <div class="owl-dot"><span></span></div>
                                    <div class="owl-dot"><span></span></div>
                                    <div class="owl-dot active"><span></span></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="single-slidebar">
                        <h4>Jobs by Category</h4>
                        <ul class="cat-list">
                            <li><a class="justify-content-between d-flex" href="category.html">
                                    <p>Technology</p><span>37</span>
                                </a></li>
                            <li><a class="justify-content-between d-flex" href="category.html">
                                    <p>Media &amp; News</p><span>57</span>
                                </a></li>
                            <li><a class="justify-content-between d-flex" href="category.html">
                                    <p>Goverment</p><span>33</span>
                                </a></li>
                            <li><a class="justify-content-between d-flex" href="category.html">
                                    <p>Medical</p><span>36</span>
                                </a></li>
                            <li><a class="justify-content-between d-flex" href="category.html">
                                    <p>Restaurants</p><span>47</span>
                                </a></li>
                            <li><a class="justify-content-between d-flex" href="category.html">
                                    <p>Developer</p><span>27</span>
                                </a></li>
                            <li><a class="justify-content-between d-flex" href="category.html">
                                    <p>Accounting</p><span>17</span>
                                </a></li>
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
