<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- x-icon -->
    <link rel="shortcut icon" href="{{asset('assets/images/x-icon.png')}}" type="image/x-icon">

    <!-- Other css -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.cs')}}s">
    <link rel="stylesheet" href="{{asset('assets/css/icofont.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <title>TuruLav</title>
    @yield('styles')
</head>

<body>
<!-- preloader start here -->
<div class="preloader">
    <div class="preloader-inner">
        <div class="preloader-icon">
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- preloader ending here -->

<!-- ==========Header Section Starts Here========== -->
<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="header-top-area">
                <ul class="left">
                    <li>
                        <i class="icofont-ui-call"></i> <span>+800-123-4567 6587</span>
                    </li>
                    <li>
                        <i class="icofont-location-pin"></i> {{\Carbon\Carbon::now()}}
                    </li>
                </ul>
                <ul class="social-icons d-flex align-items-center">
                    <li>
                        <p>
                            Find us on :
                        </p>
                    </li>
                    <li>
                        <a href="#" class="fb"><i class="icofont-facebook-messenger"></i></a>
                    </li>
                    <li>
                        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#" class="vimeo"><i class="icofont-vimeo"></i></a>
                    </li>
                    <li>
                        <a href="#" class="skype"><i class="icofont-skype"></i></a>
                    </li>
                    <li>
                        <a href="#" class="rss"><i class="icofont-rss-feed"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="index.html">
                        <img src="assets/images/logo/logo.png" alt="logo">
                    </a>
                </div>
                <div class="menu-area">
                    <ul class="menu">
                        <li>
                            <a href="{{url('home')}}">Home</a>
                        </li>

                        <li>
                            <a href="#0">Features</a>
                            <ul class="submenu">
                                <li><a href="{{url('members')}}">All Members</a></li>
                                <li><a href="">Member Profile</a></li>
                                <li><a href="">Login</a></li>
                                <li><a href="">Sign Up</a></li>
                                <li><a href="">Pricing Plan</a></li>
                                <li><a href="">404 Page</a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="">Community</a>
                        </li>
                        <li>
                            <a href="#0">Blog</a>
                            <ul class="submenu">
                                <li><a href="">Blog</a></li>
                                <li><a href="">Blog Single</a></li>
                            </ul>
                        </li>
                        <li><a href="{{url('contact-us')}}">Contact</a></li>
                    </ul>
                    <a href="{{route('login')}}" class="login"><i class="icofont-user"></i> <span>LOG IN</span> </a>
                    <a href="{{route('register')}}" class="signup"><i class="icofont-users"></i> <span>SIGN UP</span> </a>

                    <!-- toggle icons -->
                    <div class="header-bar d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="ellepsis-bar d-lg-none">
                        <i class="icofont-info-square"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- ==========Header Section Ends Here========== -->
@yield('content')
<footer class="footer-section">
    <div class="footer-top">
        <div class="container">
            <div class="row g-3 justify-content-center g-lg-0">
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="footer-top-item lab-item">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="assets/images/footer/icons/01.png" alt="Phone-icon">
                            </div>
                            <div class="lab-content">
                                <span>Phone Number : +88019 339 702 520</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="footer-top-item lab-item">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="assets/images/footer/icons/02.png" alt="email-icon">
                            </div>
                            <div class="lab-content">
                                <span>Email : admin@edating.com</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="footer-top-item lab-item">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="assets/images/footer/icons/03.png" alt="location-icon">
                            </div>
                            <div class="lab-content">
                                <span>Address : 30 North West New York 240</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-middle padding-tb" style="background-image: url(assets/images/footer/bg.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="footer-middle-item-wrapper">
                        <div class="footer-middle-item mb-lg-0">
                            <div class="fm-item-title">
                                <h4>About TuruLav</h4>
                            </div>
                            <div class="fm-item-content">
                                <p class="mb-4">Energistically coordinate highly efficient procesr
                                    partnerships befor revolutionar growth strategie
                                    improvement viaing awesome</p>
                                <img src="assets/images/footer/about.jpg" alt="about-image" class="footer-abt-img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="footer-middle-item-wrapper">
                        <div class="footer-middle-item mb-lg-0">
                            <div class="fm-item-title">
                                <h4>our Recent news</h4>
                            </div>
                            <div class="fm-item-content">
                                <div class="fm-item-widget lab-item">
                                    <div class="lab-inner">
                                        <div class="lab-thumb">
                                            <a href="#"> <img src="assets/images/footer/01.jpg"
                                                              alt="footer-widget-img"></a>
                                        </div>
                                        <div class="lab-content">
                                            <h6><a href="blog-single.html">Enable Seamin Matera Forin And Our
                                                    Orthonal Create Vortals.</a></h6>
                                            <p>July 23, 2021</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="fm-item-widget lab-item">
                                    <div class="lab-inner">
                                        <div class="lab-thumb">
                                            <a href="#"><img src="assets/images/footer/02.jpg"
                                                             alt="footer-widget-img"></a>
                                        </div>
                                        <div class="lab-content">
                                            <h6><a href="blog-single.html">Dynamca Network Otuitive Catays For
                                                    Plagiarize Mindshare After</a></h6>
                                            <p>July 23, 2021</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="fm-item-widget lab-item">
                                    <div class="lab-inner">
                                        <div class="lab-thumb">
                                            <a href="#"><img src="assets/images/footer/03.jpg"
                                                             alt="footer-widget-img"></a>
                                        </div>
                                        <div class="lab-content">
                                            <h6><a href="blog-single.html">Dynamca Network Otuitive Catays For
                                                    Plagiarize Mindshare After</a></h6>
                                            <p>July 23, 2021</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="footer-middle-item-wrapper">
                        <div class="footer-middle-item-3 mb-lg-0">
                            <div class="fm-item-title">
                                <h4>Our Newsletter Signup</h4>
                            </div>
                            <div class="fm-item-content">
                                <p>By subscribing to our mailing list you will always
                                    be update with the latest news from us.</p>
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Enter email">
                                    </div>
                                    <button type="submit" class="lab-btn">Send Massage <i
                                            class="icofont-paper-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-bottom-content text-center">
                        <p>&copy; 2022 <a href="index.html">Edating</a> -Best For Dating.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ================ footer Section end Here =============== -->



<!-- scrollToTop start here -->
<a href="#" class="scrollToTop"><i class="icofont-rounded-up"></i></a>
<!-- scrollToTop ending here -->



@yield('scripts')
<!-- All Scripts -->
<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/swiper.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/js/functions.js')}}"></script>
</body>
