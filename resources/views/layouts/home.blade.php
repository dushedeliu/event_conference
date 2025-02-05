<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Event </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('home/assets/img/favicon.ico')}}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('home/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/home/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('home/assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('home/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('home/assets/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('home/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('home/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('home/assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('home/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('home/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('home/assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('home/assets/css/style.css')}}">
</head>
<body>
<!-- ? Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="{{asset('home/assets/img/logo/loder.png')}}" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->
<header>
    <!--? Header Start -->
    <div class="header-area">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-xl-2 col-lg-2 col-md-1">
                        <div class="logo">
                            <a href="/"><img src="{{asset('home/assets/img/logo/logo.png')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-10">
                        <div class="menu-main d-flex align-items-center justify-content-end">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="/">Home</a></li>
{{--                                        <li><a href="#">About</a></li>--}}
                                        <li><a href="{{route('home.index')}}">Events</a></li>
                                        <li><a href="#">Contact</a></li>
                                        @if (Route::has('login'))
                                                @auth
                                                   <li><a href="{{ url('/dashboard') }}" class="text-sm text-black-700 dark:text-black-500 underline">Dashboard</a></li>
                                                @else
                                                   <li><a href="{{ route('login') }}" class="text-sm text-black-700 dark:text-clack-500 underline">Log in</a></li>

                                                    @if (Route::has('register'))
                                                       <li><a href="{{ route('register') }}" class="ml-4 text-sm text-black-700 dark:text-black-500 underline">Register</a></li>
                                                    @endif
                                                @endauth
                                        @endif
                                    </ul>
                                </nav>
                            </div>

                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
<main>
    {{$slot}}
</main>
<footer>
    <!-- Footer Start-->
    <div class="footer-area footer-padding">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-footer-caption mb-50">
                        <div class="single-footer-caption mb-30">
                            <div class="footer-tittle">
                                <h4>About Us</h4>
                                <div class="footer-pera">
                                    <p>Heaven frucvitful doesn't cover lesser dvsays appear creeping seasons so behold.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>Contact Info</h4>
                            <ul>
                                <li>
                                    <p>Address :Your address goes here, your demo address.</p>
                                </li>
                                <li><a href="#">Phone : +8880 44338899</a></li>
                                <li><a href="#">Email : info@colorlib.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>Important Link</h4>
                            <ul>
                                <li><a href="#"> View Project</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Testimonial</a></li>
                                <li><a href="#">Proparties</a></li>
                                <li><a href="#">Support</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-5">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>Newsletter</h4>
                            <div class="footer-pera footer-pera2">
                                <p>Heaven fruitful doesn't over lesser in days. Appear creeping.</p>
                            </div>
                            <!-- Form -->
                            <div class="footer-form" >
                                <div id="mc_embed_signup">
                                    <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                          method="get" class="subscribe_form relative mail_part">
                                        <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                               class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                               onblur="this.placeholder = ' Email Address '">
                                        <div class="form-icon">
                                            <button type="submit" name="submit" id="newsletter-submit"
                                                    class="email_icon newsletter-submit button-contactForm"><img src="{{asset('home/assets/img/gallery/form.png')}}" alt=""></button>
                                        </div>
                                        <div class="mt-10 info"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="row footer-wejed justify-content-between">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <!-- logo -->
                    <div class="footer-logo mb-20">
                        <a href="index.html"><img src="{{asset('home/assets/img/logo/logo2_footer.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                    <div class="footer-tittle-bottom">
                        <span>5000+</span>
                        <p>Talented Hunter</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                    <div class="footer-tittle-bottom">
                        <span>451</span>
                        <p>Talented Hunter</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                    <!-- Footer Bottom Tittle -->
                    <div class="footer-tittle-bottom">
                        <span>568</span>
                        <p>Talented Hunter</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-bottom area -->
    <div class="footer-bottom-area footer-bg">
        <div class="container">
            <div class="footer-border">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-xl-10 col-lg-8 ">
                        <div class="footer-copy-right">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4">
                        <div class="footer-social f-right">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fas fa-globe"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>
<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->

<script src="{{asset('home/assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="{{asset('home/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('home/assets/js/popper.min.js')}}"></script>
<script src="{{asset('home/assets/js/bootstrap.min.js')}}"></script>
<!-- Jquery Mobile Menu -->
<script src="{{asset('home/assets/js/jquery.slicknav.min.js')}}"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{{asset('home/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('home/assets/js/slick.min.js')}}"></script>
<!-- One Page, Animated-HeadLin -->
<script src="{{asset('home/assets/js/wow.min.js')}}"></script>
<script src="{{asset('home/assets/js/animated.headline.js')}}"></script>
<script src="{{asset('home/assets/js/jquery.magnific-popup.js')}}"></script>

<!-- Date Picker -->
<script src="{{asset('home/assets/js/gijgo.min.js')}}"></script>
<!-- Nice-select, sticky -->
<script src="{{asset('home/assets/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('home/assets/js/jquery.sticky.js')}}"></script>

<!-- counter , waypoint -->
<script src="{{asset('home/assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('home/assets/js/waypoints.min.js')}}"></script>
<script src="{{asset('home/assets/js/jquery.countdown.min.js')}}"></script>
<!-- contact js -->
<script src="{{asset('home/assets/js/contact.js')}}"></script>
<script src="{{asset('home/assets/js/jquery.form.js')}}"></script>
<script src="{{asset('home/assets/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('home/assets/js/mail-script.js')}}"></script>
<script src="{{asset('home/assets/js/jquery.ajaxchimp.min.js')}}"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="{{asset('home/assets/js/plugins.js')}}"></script>
<script src="{{asset('home/assets/js/main.js')}}"></script>

</body>
</html>
