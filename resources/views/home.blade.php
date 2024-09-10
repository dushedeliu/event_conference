<x-home-layout>
    <!--? slider Area Start-->
    <div class="slider-area position-relative">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 col-md-9 col-sm-10">
                            <div class="hero__caption">
                                <span data-animation="fadeInLeft" data-delay=".1s">Committed to success</span>
                                <h1 data-animation="fadeInLeft" data-delay=".5s">Digital Conference For Designers</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 col-md-9 col-sm-10">
                            <div class="hero__caption">
                                <span data-animation="fadeInLeft" data-delay=".1s">Committed to success</span>
                                <h1 data-animation="fadeInLeft" data-delay=".5s">Digital Conference For Designers</h1>
                                <!-- Hero-btn -->
                                <div class="slider-btns">
                                    <a data-animation="fadeInLeft" data-delay="1.0s" href="#" class="btn hero-btn">Download</a>
                                    <a data-animation="fadeInRight" data-delay="1.0s" class="popup-video video-btn"  href="#">
                                        <i class="fas fa-play"></i></a>
                                    <p class="video-cap d-none d-sm-blcok" data-animation="fadeInRight" data-delay="1.0s">Story Video<br> Watch</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- slider Area End-->
    <!--? About Law Start-->
    <section class="about-low-area section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="about-caption mb-50">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-35">
                            <h2>{{$eventlatest->title}}</h2>
                        </div>
                        <p>{{$eventlatest->description}}</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-10">
                            <div class="single-caption mb-20">
                                <div class="caption-icon">
                                    <span class="flaticon-communications-1"></span>
                                </div>
                                <div class="caption">
                                    <h5>Where</h5>
                                    <p>{{$eventlatest->location}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-10">
                            <div class="single-caption mb-20">
                                <div class="caption-icon">
                                    <span class="flaticon-education"></span>
                                </div>
                                <div class="caption">
                                    <h5>When</h5>
                                    <p>{{$eventlatest->start_date->format('d/m/Y H:i')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary"><a href="{{ route('home.book', $eventlatest) }}" class="text-white">Get Your ticket</a></button>
                </div>
                <div class="col-lg-6 col-md-12">
                    <!-- about-img -->
                    <div class="about-img ">
                        <div class="about-font-img d-none d-lg-block">
                            <img src="{{asset('home/assets/img/gallery/about2.png')}}" alt="">
                        </div>
                        <div class="about-back-img ">
                            <img src="{{asset('home/assets/img/gallery/about1.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Law End-->

    <!--? Brand Area Start -->
{{--    <section class="team-area pt-180 pb-100 section-bg" data-background="{{asset('home/assets/img/gallery/section_bg02.png')}}">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-6 col-md-9">--}}
{{--                    <!-- Section Tittle -->--}}
{{--                    <div class="section-tittle section-tittle2 mb-50">--}}
{{--                        <h2>The Most Importent Speakers.</h2>--}}
{{--                        <p>There arge many variations ohf passages of sorem gpsum ilable, but the majority have suffered alteration in.</p>--}}
{{--                        <a href="#" class="btn white-btn mt-30">View Spackert</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-4 col-sm-6">--}}
{{--                    <div class="single-team mb-30">--}}
{{--                        <div class="team-img">--}}
{{--                            <img src="{{asset('home/assets/img/gallery/team1.png')}}" alt="">--}}
{{--                            <!-- Blog Social -->--}}
{{--                            <ul class="team-social">--}}
{{--                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fas fa-globe"></i></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="team-caption">--}}
{{--                            <h3><a href="#">Jesscia brown</a></h3>--}}
{{--                            <p> Co Founder</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-4 col-sm-6">--}}
{{--                    <div class="single-team mb-30">--}}
{{--                        <div class="team-img">--}}
{{--                            <img src="{{asset('home/assets/img/gallery/team2.png')}}" alt="">--}}
{{--                            <!-- Blog Social -->--}}
{{--                            <ul class="team-social">--}}
{{--                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fas fa-globe"></i></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="team-caption">--}}
{{--                            <h3><a href="#">Jesscia brown</a></h3>--}}
{{--                            <p> Co Founder</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-4 col-sm-6">--}}
{{--                    <div class="single-team mb-30">--}}
{{--                        <div class="team-img">--}}
{{--                            <img src="{{asset('home/assets/img/gallery/team3.png')}}" alt="">--}}
{{--                            <!-- Blog Social -->--}}
{{--                            <ul class="team-social">--}}
{{--                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fas fa-globe"></i></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="team-caption">--}}
{{--                            <h3><a href="#">brown Rulsan</a></h3>--}}
{{--                            <p> Co Founder</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-4 col-sm-6">--}}
{{--                    <div class="single-team mb-30">--}}
{{--                        <div class="team-img">--}}
{{--                            <img src="{{asset('home/assets/img/gallery/team4.png')}}" alt="">--}}
{{--                            <!-- Blog Social -->--}}
{{--                            <ul class="team-social">--}}
{{--                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fas fa-globe"></i></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="team-caption">--}}
{{--                            <h3><a href="#">Jesscia brown</a></h3>--}}
{{--                            <p> Co Founder</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-4 col-sm-6">--}}
{{--                    <div class="single-team mb-30">--}}
{{--                        <div class="team-img">--}}
{{--                            <img src="{{asset('home/assets/img/gallery/team5.png')}}" alt="">--}}
{{--                            <!-- Blog Social -->--}}
{{--                            <ul class="team-social">--}}
{{--                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fas fa-globe"></i></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="team-caption">--}}
{{--                            <h3><a href="#">Jesscia brown</a></h3>--}}
{{--                            <p> Co Founder</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-4 col-sm-6">--}}
{{--                    <div class="single-team mb-30">--}}
{{--                        <div class="team-img">--}}
{{--                            <img src="{{asset('home/assets/img/gallery/team6.png')}}" alt="">--}}
{{--                            <!-- Blog Social -->--}}
{{--                            <ul class="team-social">--}}
{{--                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fas fa-globe"></i></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="team-caption">--}}
{{--                            <h3><a href="#">wndfert droit</a></h3>--}}
{{--                            <p> Co Founder</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- Brand Area End -->

    <!--? accordion -->
    <section class="accordion fix section-padding30">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-6">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-80">
                        <h2>Event Dates</h2>
                        <p>There arge many variations ohf passages of sorem gp ilable, but the majority have ssorem gp iluffe.</p>
                    </div>
                </div>
            </div>
{{--            <div class="row ">--}}
{{--                <div class="col-lg-11">--}}
{{--                    <div class="properties__button mb-40">--}}
{{--                        <!--Nav Button  -->--}}
{{--                        <nav>--}}
{{--                            <div class="nav nav-tabs" id="nav-tab" role="tablist">--}}
{{--                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Day - 01</a>--}}
{{--                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"> Day - 02</a>--}}
{{--                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false"> Day - 03 </a>--}}
{{--                                <a class="nav-item nav-link" id="nav-dinner-tab" data-toggle="tab" href="#nav-dinner" role="tab" aria-controls="nav-dinner" aria-selected="false"> Day - 04 </a>--}}
{{--                            </div>--}}
{{--                        </nav>--}}
{{--                        <!--End Nav Button  -->--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
        @foreach($events as $event)
            <div class="container">
                <!-- Nav Card -->
                <div class="tab-content" id="nav-tabContent">
                    <!-- card one -->
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row">
                            <div class="col-lg-11">
                                <div class="accordion-wrapper">
                                    <div class="accordion" id="accordionExample">
                                        <!-- single-one -->
                                        <div class="card">
                                            <div class="card-header" id="heading{{ $loop->index }}">
                                                <h2 class="mb-0">
                                                    <a href="#" class="btn-link" data-toggle="collapse" data-target="#collapse{{ $loop->index }}" aria-expanded="{{ $loop->first ? 'true' : 'false' }}" aria-controls="collapse{{ $loop->index }}">
                                                        <span>{{$event->start_date->format('d/m/Y H:i')}}</span> - <span>{{$event->end_date->format('d/m/Y')}}</span>
                                                        <p>{{$event->title}}</p>
                                                        <span>Location:</span> <span>{{$event->location}}</span>
                                                    </a>
                                                </h2>
                                            </div>
                                            <div id="collapse{{ $loop->index }}" class="collapse" aria-labelledby="heading{{ $loop->index }}" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    {{$event->description}}
                                                </div>
                                                @php
                                                    $currentDateTime = \Carbon\Carbon::now();
                                                    $eventStartDate = \Carbon\Carbon::parse($event->start_date);
                                                    $isPastEvent = $currentDateTime->greaterThan($eventStartDate);
                                                @endphp
                                                <button class="btn btn-primary {{ $isPastEvent ? 'disabled' : '' }}">
                                                    @if($isPastEvent)
                                                        Event has started
                                                    @else
                                                        <a href="{{ route('home.book', $event) }}" class="text-white">Attend</a>
                                                    @endif
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- End Nav Card -->
            </div>
        @endforeach
    </section>
    <!-- accordion End -->

    <!--? gallery Products Start -->
    <div class="gallery-area fix">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                            <div class="gallery-img " style="background-image: url({{asset('home/assets/img/gallery/gallery1.png')}});"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                            <div class="gallery-img " style="background-image: url({{asset('home/assets/img/gallery/gallery2.png')}});"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                            <div class="gallery-img " style="background-image: url({{asset('home/assets/img/gallery/gallery3.png')}});"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                            <div class="gallery-img " style="background-image: url({{asset('home/assets/img/gallery/gallery4.png')}});"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                            <div class="gallery-img " style="background-image: url({{asset('home/assets/img/gallery/gallery5.png')}});"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                            <div class="gallery-img " style="background-image: url({{asset('home/assets/img/gallery/gallery6.png')}});"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- gallery Products End -->

    <!--? Pricing Card Start -->
{{--    <section class="pricing-card-area section-padding2">--}}
{{--        <div class="container">--}}
{{--            <!-- Section Tittle -->--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-lg-5 col-md-8">--}}
{{--                    <div class="section-tittle text-center mb-100">--}}
{{--                        <h2>Program Pricing</h2>--}}
{{--                        <p>There arge many variations ohf passages of sorem gp ilable, but the majority have ssorem gp iluffe.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">--}}
{{--                    <div class="single-card text-center mb-30">--}}
{{--                        <div class="card-top">--}}
{{--                            <span>Day - 1</span>--}}
{{--                            <h4>$ 05.00</h4>--}}
{{--                        </div>--}}
{{--                        <div class="card-bottom">--}}
{{--                            <ul>--}}
{{--                                <li>Increase traffic 50%</li>--}}
{{--                                <li>E-mail support</li>--}}
{{--                                <li>10 Free Optimization</li>--}}
{{--                                <li>24/7  support</li>--}}
{{--                            </ul>--}}
{{--                            <a href="services.html" class="black-btn">View Spackert</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">--}}
{{--                    <div class="single-card active text-center mb-30">--}}
{{--                        <div class="card-top">--}}
{{--                            <span>Day - 1,2,3</span>--}}
{{--                            <h4>$ 08.00</h4>--}}
{{--                        </div>--}}
{{--                        <div class="card-bottom">--}}
{{--                            <ul>--}}
{{--                                <li>Increase traffic 50%</li>--}}
{{--                                <li>E-mail support</li>--}}
{{--                                <li>10 Free Optimization</li>--}}
{{--                                <li>24/7  support</li>--}}
{{--                            </ul>--}}
{{--                            <a href="services.html" class="black-btn">View Spackert</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">--}}
{{--                    <div class="single-card text-center mb-30">--}}
{{--                        <div class="card-top">--}}
{{--                            <span>Day - 1,2</span>--}}
{{--                            <h4>$ 06.00</h4>--}}
{{--                        </div>--}}
{{--                        <div class="card-bottom">--}}
{{--                            <ul>--}}
{{--                                <li>Increase traffic 50%</li>--}}
{{--                                <li>E-mail support</li>--}}
{{--                                <li>10 Free Optimization</li>--}}
{{--                                <li>24/7  support</li>--}}
{{--                            </ul>--}}
{{--                            <a href="services.html" class="black-btn">View Spackert</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- Pricing Card End -->



    <!--? Blog Area Start -->
{{--    <section class="home-blog-area section-padding30">--}}
{{--        <div class="container">--}}
{{--            <!-- Section Tittle -->--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-lg-5 col-md-8">--}}
{{--                    <div class="section-tittle text-center mb-50">--}}
{{--                        <h2>News From Blog</h2>--}}
{{--                        <p>There arge many variations ohf passages of sorem gp ilable, but the majority have ssorem gp iluffe.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-xl-6 col-lg-6 col-md-6">--}}
{{--                    <div class="home-blog-single mb-30">--}}
{{--                        <div class="blog-img-cap">--}}
{{--                            <div class="blog-img">--}}
{{--                                <img src="{{asset('home/assets/img/gallery/home-blog1.png')}}" alt="">--}}
{{--                                <!-- Blog date -->--}}
{{--                                <div class="blog-date text-center">--}}
{{--                                    <span>24</span>--}}
{{--                                    <p>Now</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="blog-cap">--}}
{{--                                <p>|   Physics</p>--}}
{{--                                <h3><a href="blog_details.html">Footprints in Time is perfect House in Kurashiki</a></h3>--}}
{{--                                <a href="blog_details.html" class="more-btn">Read more »</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-6 col-lg-6 col-md-6">--}}
{{--                    <div class="home-blog-single mb-30">--}}
{{--                        <div class="blog-img-cap">--}}
{{--                            <div class="blog-img">--}}
{{--                                <img src="{{asset('home/assets/img/gallery/home-blog2.png')}}" alt="">--}}
{{--                                <!-- Blog date -->--}}
{{--                                <div class="blog-date text-center">--}}
{{--                                    <span>24</span>--}}
{{--                                    <p>Now</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="blog-cap">--}}
{{--                                <p>|   Physics</p>--}}
{{--                                <h3><a href="blog_details.html">Footprints in Time is perfect House in Kurashiki</a></h3>--}}
{{--                                <a href="blog_details.html" class="more-btn">Read more »</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- Blog Area End -->

</x-home-layout>
