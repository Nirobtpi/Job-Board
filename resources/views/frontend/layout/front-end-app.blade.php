<html lang="zxx" class="no-js" style="display: block;">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="codepixer">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Job Listing</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
   CSS
   ============================================= -->
    <link rel="stylesheet" href="{{ asset('frontend/css/linearicons.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css')}}">

    @stack('style')
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css')}}">
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/57/2/common.js">
    </script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/57/2/util.js">
    </script>
</head>
<body style="display: block;"><button type="button" id="mobile-nav-toggle"><i class="lnr lnr-menu"></i></button>

    <header id="header">
        <div class="container">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a href="index.html"><img src="{{ asset('frontend/img/logo.png') }}" alt="" title=""></a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu sf-js-enabled sf-arrows" style="touch-action: pan-y;">
                        <li class="menu-active"><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="">About Us</a></li>
                        <li><a href="">Category</a></li>
                        <li><a href="">Price</a></li>
                        <li><a href="">Blog</a></li>
                        <li><a href="">Contact</a></li>
                        <li class="menu-has-children"><a href="" class="sf-with-ul">Pages</a>
                            <ul style="display: none;">
                                <li><a href="elements.html">elements</a></li>
                                <li><a href="search.html">search</a></li>
                                <li><a href="single.html">single</a></li>
                            </ul>
                        </li>
                        @if(Auth::check())
                        <li><a class="ticker-btn" href="{{ route('account') }}">Accoint</a></li>
                        @endif
                        @if(!Auth::check())
                        <li><a class="ticker-btn" href="{{ route('user.register') }}">Signup</a></li>
                        <li><a class="ticker-btn" href="{{ route('login') }}">Login</a></li>
                        @else
                         <li><a class="ticker-btn" href="{{ route('user.logout') }}">Logout</a></li>
                         @endif
                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </div>
    </header><!-- #header -->

    @yield('content')


    <!-- start footer Area -->
    <footer class="footer-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-md-12">
                    <div class="single-footer-widget">
                        <h6>Top Products</h6>
                        <ul class="footer-nav">
                            <li><a href="#">Managed Website</a></li>
                            <li><a href="#">Manage Reputation</a></li>
                            <li><a href="#">Power Tools</a></li>
                            <li><a href="#">Marketing Service</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6  col-md-12">
                    <div class="single-footer-widget newsletter">
                        <h6>Newsletter</h6>
                        <p>You can trust us. we only send promo offers, not a single spam.</p>
                        <div id="mc_embed_signup">
                            <form target="_blank" novalidate="true"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="form-inline">

                                <div class="form-group row" style="width: 100%">
                                    <div class="col-lg-8 col-md-12">
                                        <input name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Enter Email '" required="" type="email">
                                        <div style="position: absolute; left: -5000px;">
                                            <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
                                                type="text">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-12">
                                        <button class="nw-btn primary-btn">Subscribe<span
                                                class="lnr lnr-arrow-right"></span></button>
                                    </div>
                                </div>
                                <div class="info"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3  col-md-12">
                    <div class="single-footer-widget mail-chimp">
                        <h6 class="mb-20">Instragram Feed</h6>
                        <ul class="instafeed d-flex flex-wrap">
                            <li><img src="img/i1.jpg" alt=""></li>
                            <li><img src="img/i2.jpg" alt=""></li>
                            <li><img src="img/i3.jpg" alt=""></li>
                            <li><img src="img/i4.jpg" alt=""></li>
                            <li><img src="img/i5.jpg" alt=""></li>
                            <li><img src="img/i6.jpg" alt=""></li>
                            <li><img src="img/i7.jpg" alt=""></li>
                            <li><img src="img/i8.jpg" alt=""></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row footer-bottom d-flex justify-content-between">
                <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright ©<script>
                        document.write(new Date().getFullYear());

                    </script>2024 All rights reserved | This template is made with <i class="fa fa-heart-o"
                        aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
                <div class="col-lg-4 col-sm-12 footer-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-behance"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer Area -->

    <script src="{{ asset('frontend/js/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="{{ asset('frontend/js/vendor/bootstrap.min.js')}}"></script>
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="{{ asset('frontend/js/easing.min.js')}}"></script>
    <script src="{{ asset('frontend/js/hoverIntent.js')}}"></script>
    <script src="{{ asset('frontend/js/superfish.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.sticky.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ asset('frontend/js/parallax.min.js')}}"></script>
    <script src="{{ asset('frontend/js/mail-script.js')}}"></script>
    <script src="{{ asset('frontend/js/main.js')}}"></script>

    @stack('script')



    <nav id="mobile-nav">
        <ul class="" style="touch-action: pan-y;" id="">
            <li class="menu-active"><a href="index.html">Home</a></li>
            <li><a href="about-us.html">About Us</a></li>
            <li><a href="category.html">Category</a></li>
            <li><a href="price.html">Price</a></li>
            <li><a href="blog-home.html">Blog</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li class="menu-has-children"><i class="lnr lnr-chevron-down"></i><a href="" class="sf-with-ul">Pages</a>
                <ul style="display: none;">
                    <li><a href="elements.html">elements</a></li>
                    <li><a href="search.html">search</a></li>
                    <li><a href="single.html">single</a></li>
                </ul>
            </li>
            <li><a class="ticker-btn" href="#">Signup</a></li>
            <li><a class="ticker-btn" href="#">Login</a></li>
        </ul>
    </nav>
    <div id="mobile-body-overly"></div>
</body>

</html>
