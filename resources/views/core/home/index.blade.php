@extends('core.layout')

@section('content')

{{--    <!-- Start techno Sidebar Cart Item -->--}}
{{--    <div class="xs-sidebar-group info-group">--}}
{{--        <div class="xs-overlay xs-bg-black"></div>--}}
{{--        <div class="xs-sidebar-widget">--}}
{{--            <div class="sidebar-widget-container">--}}
{{--                <div class="widget-heading">--}}
{{--                    <a href="#" class="close-side-widget">--}}
{{--                        <i class="far fa-times-circle"></i>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="sidebar-textwidget">--}}
{{--                    <!-- Sidebar Info Content -->--}}
{{--                    <div class="sidebar-info-contents">--}}
{{--                        <div class="content-inner">--}}
{{--                            <div class="nav-logo">--}}
{{--                                <a href="index.html"><img src="assets/images/logo.png" alt="" /></a>--}}
{{--                            </div>--}}
{{--                            <div class="content-box">--}}
{{--                                <h2>About Us</h2>--}}
{{--                                <p class="text">The argument in favor of using filler text goes something like this: If you use real content in the Consulting Process, anytime you reach a review point you’ll end up reviewing and negotiating the content itself and not the design.</p>--}}
{{--                                <a href="index" class="theme-btn btn-style-two"><span>Consultation</span> <i class="fas fa-heart"></i></a>--}}
{{--                            </div>--}}
{{--                            <div class="contact-info">--}}
{{--                                <h2>Contact Info</h2>--}}
{{--                                <ul class="list-style-one">--}}
{{--                                    <li><span class="icon flaticon-email"></span>Chicago 12, Melborne City, USA</li>--}}
{{--                                    <li><span class="flaticon-phone-call"></span>(+001) 123-456-7890</li>--}}
{{--                                    <li><span class="icon flaticon-placeholder-1"></span>Example.com</li>--}}
{{--                                    <li><span class="flaticon-clock-2"></span>Week Days: 09.00 to 18.00 Sunday: Closed</li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <!-- Social Box -->--}}
{{--                            <ul class="social-box">--}}
{{--                                <li class="facebook"><a href="#" class="fab fa-facebook-f"></a></li>--}}
{{--                                <li class="twitter"><a href="#" class="fab fa-instagram"></a></li>--}}
{{--                                <li class="linkedin"><a href="#" class="fab fa-twitter"></a></li>--}}
{{--                                <li class="instagram"><a href="#" class="fab fa-pinterest-p"></a></li>--}}
{{--                                <li class="youtube"><a href="#" class="fab fa-linkedin-in"></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- End techno Sidebar Cart Item -->--}}

    <!--==================================================-->
    <!-- Start techno slider Area -->
    <!--==================================================-->
    <div class="slider_list2 owl-carousel">
        @foreach ($sliders as $slider)
            <div class="slider-area slider4 d-flex align-items-center" style="background: url({{ $slider->image->url() }});">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-12 col-md-6 col-sm-12">
                            <div class="slider-content2">
                                <h4>{{ $slider->sub_title }}</h4>
                                <h1>{{ $slider->title }}</h1>
                                <h1>Design <span class="color2">Agency</span></h1>
                                <div class="slider-button2">
                                    <a href="{{ $slider->discover_link }}">DISCOVER MORE<i class="fas fa-check-square"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="slider-socail-icon2">
                            <a href="#">LINKEDIN</a>
                            <a href="#">TWITTER</a>
                            <a href="https://www.facebook.com/genesistechdz">FACEBOOK</a>
                        </div>
                        <div class="slider-shape-thumb">
                            <div class="slider-shape-thumb-inner">
                                <img src="{{ asset('assets/core/images/slider/shape-2.png') }}" alt="">
                            </div>
                            <div class="slider-shape-thumb-inner1">
                                <img src="{{ asset('assets/core/images/slider/shape-1.png') }}" alt="">
                            </div>
                            <div class="slider-shape-thumb-inner2 rotateme">
                                <img src="{{ asset('assets/core/images/slider/round3.png') }}" alt="">
                            </div>
                            <div class="slider-shape-thumb-inner3">
                                <img src="{{ asset('assets/core/images/slider/line.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <!--==================================================-->
    <!-- End techno slider Area -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start techno service Area -->
    <!--==================================================-->
    <div class="service-area style-three upper5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="dreamit-section-title style-four text-left white pb-3">
                        <h5>SERVICES</h5>
                        <h1>WE SERVE THE PERFECT</h1>
                        <h1>PIXEL <span class="color1">SOLUTIONS</span></h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="section-text white">
                        <p>Uniquely unleash client-centered relationships and world-class alignments Compellingly impact premier enterprise quality vectors whereas client has functionalities. Seamlessly benchmark</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($services as $service)
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="techno-sinlge-service-box white">
                            <div class="techno-service-box-inner">
                                <div class="techno-service-content">
                                    <div class="techno-service-icon">
                                        <i class="flaticon-brain-1"></i>
                                    </div>
                                    <div class="techno-service-title">
                                        <h2>{{ ucwords($service->title)  }}</h2>
                                        <p>{{ \Illuminate\Support\Str::limit($service->description, 70, '...') }}</p>
                                    </div>
                                </div>
                                <div class="service-button2">
                                    <a href="{{ route('services.detail', ['slug' => $service->slug]) }}">READ MORE <span><i class="fas fa-angle-double-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End techno service Area -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start techno about Area -->
    <!--==================================================-->
    <div class="about-area style-three">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="techno-about-thumb-box">
                        <div class="techno-about-thumb-3">
                            <img src="{{ $about->image->url() }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="row about-left">
                        <div class="col-lg-12">
                            <div class="dreamit-section-title style-four white">
                                <h5>About Us</h5>
                                <h1>{{ $about->title }}</h1>
                                <h1>AGENCY <span class="color2">{{ $about->colorful_title }}</span></h1>
                                <p class="pt-text">{{ $about->description }}</p>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="prossess-ber-plugin style-two upper4">
                                <span class="prosses-bar">Web UI/UX Design</span>
                                <div id="bar1" class="barfiller">
                                    <div class="tipWrap">
                                        <span class="tip"></span>
                                    </div>
                                    <span class="fill" data-percentage="90"></span>
                                </div>
                                <span class="prosses-bar">Apps Development</span>
                                <div id="bar2" class="barfiller">
                                    <div class="tipWrap">
                                        <span class="tip"></span>
                                    </div>
                                    <span class="fill" data-percentage="70"></span>
                                </div>
                                <span class="prosses-bar">SEO & Digital Marketing</span>
                                <div id="bar3" class="barfiller">
                                    <div class="tipWrap">
                                        <span class="tip"></span>
                                    </div>
                                    <span class="fill" data-percentage="75"></span>
                                </div>
                                <div class="about-button">
                                    <a href="{{ route('contact') }}">Contsct Us <i class="fas fa-check-square"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End techno about Area -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start techno video Area -->
    <!--==================================================-->
    <div class="video-area style-three pt-100 pb-100" id="company">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="dreamit-section-title style-five white text-center">
                        <h5>Video</h5>
                        <h1>EXPERIENCE US <span class="color2">LIVE</span></h1>
                    </div>
                </div>
            </div>
            <div class="row video-bg" style="background: url({{ $video->image->url() }})">
                <div class="col-lg-8">
                    <div class="rs-video style-three">
                        <div class="animate-border">
                            <a class="video-vemo-icon2 venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="{{ $video->video_link }}">
                                <i class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="video-content">
                        <div class="video-title">
                            <h4>{{ $video->title }}</h4>
                        </div>
                        <div class="video-button text-right">
                            <a href="{{ $video->learn_more_link }}">Learn More <span><i class="fas fa-check-square"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End techno video Area -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start techno feature Area -->
    <!--==================================================-->
    <div class="feture-area style-two upper6 pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <div class="dreamit-section-title style-four text-left white pb-3">
                        <h5>SERVICES</h5>
                        <h1>YOU CAN GET THE</h1>
                        <h1>BEST ALL DESIGN</h1>
                        <h1><span> SOLUTION</span></h1>
                        <p>Dramatically enable is a economically sound information deliverables is a completely impact resource-leveling the focussed leadership for a reals methodologies supported digital agency techno.</p>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <div class="dreamit-department-tab">
                        <ul class="nav nav-pills mb-35" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><span>FULL SATISFACTION</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><span>EXPERT TEAM</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"><span>MISSION & VISION</span></a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="dreamit-department-tab-box white">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="tab-content-text">
                                                <p>We’ve combined a new kind of doctor’s experience that blends the highest level of the moment your health care with exceptional service. People can enroll membership by paying only an annual.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="dreamit-department-thumb">
                                                <img src="assets/images/resource/feature1.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="dreamit-department-bottom-content-inner white">
                                                <ul>
                                                    <li><i class="fas fa-check"></i><span>Rather than unique Idea.</span></li>
                                                    <li><i class="fas fa-check"></i><span>Entums estibulum dignissim posuere</span></li>
                                                    <li><i class="fas fa-check"></i><span>Quality users after Breed Applications.</span></li>
                                                    <li><i class="fas fa-check"></i><span>Market Positioning Expertise.</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <div class="dreamit-department-tab-box white">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="tab-content-text">
                                                <p>We’ve combined a new kind of doctor’s experience that blends the highest level of the moment your health care with exceptional service. People can enroll membership by paying only an annual.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="dreamit-department-thumb">
                                                <img src="assets/images/resource/feature1.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="dreamit-department-bottom-content-inner">
                                                <ul>
                                                    <li><i class="fas fa-check"></i><span>Rather than unique Idea.</span></li>
                                                    <li><i class="fas fa-check"></i><span>Entums estibulum dignissim posuere</span></li>
                                                    <li><i class="fas fa-check"></i><span>Quality users after Breed Applications.</span></li>
                                                    <li><i class="fas fa-check"></i><span>Market Positioning Expertise.</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                <div class="dreamit-department-tab-box white">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="tab-content-text">
                                                <p>We’ve combined a new kind of doctor’s experience that blends the highest level of the moment your health care with exceptional service. People can enroll membership by paying only an annual.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="dreamit-department-thumb">
                                                <img src="assets/images/resource/feature1.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="dreamit-department-bottom-content-inner">
                                                <ul>
                                                    <li><i class="fas fa-check"></i><span>Rather than unique Idea.</span></li>
                                                    <li><i class="fas fa-check"></i><span>Entums estibulum dignissim posuere</span></li>
                                                    <li><i class="fas fa-check"></i><span>Quality users after Breed Applications.</span></li>
                                                    <li><i class="fas fa-check"></i><span>Market Positioning Expertise.</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End techno feature Area -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start techno Portfolio Area -->
    <!--==================================================-->
    <div class="portfolio_area style-three upper7">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="dreamit-section-title text-left style-four white">
                        <h5>PROJECTS</h5>
                        <h1>LATEST <span>PROJECTS</span></h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="portfolio_nav text-right white pt-5">
                        <div class="portfolio_menu">
                            <ul class="menu-filtering">
                                <li class="current_menu_item" data-filter="*">ALL</li>
                                <li data-filter=".web">WEB APPLICATION</li>
                                <li data-filter=".mobile">MOBILE APPLICATION</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row image_load">
                @foreach ($projects as $project)
                    <div class="col-lg-4 col-md-6 col-sm-12 grid-item {{ $project->category }}">
                    <div class="single_portfolio">
                        <div class="single_portfolio_inner">
                            <div class="single_portfolio_thumb">
                                <img src="{{ $project->image->url() }}" alt="" />
                                <div class="single_portfolio_content">
                                    <div class="single-portfolio-content-inner">
                                                  <span>
                                            @if ($project->category === 'web')
                                                          WEB APPLICATION
                                                      @else
                                                          MOBILE APPLICATION
                                                      @endif
                                        </span>
                                        <h3><a href="{{ $project->link }}">{{ $project->title }}</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!--End techno Portfolio Area -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start techno counter Area -->
    <!--==================================================-->
    <div class="counter-area style-three" id="contact">
        <div class="container">
            <div class="row counter-to">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="techno-single-counter-box">
                        <div class="single-counter-box-inner">
                            <div class="counter-icon">
                                <i class="flaticon-code"></i>
                            </div>
                            <div class="counter-text">
                                <h1 class="counter">2,205 </h1>
                            </div>
                            <div class="counter-title">
                                <h4>Completed Projects</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="techno-single-counter-box">
                        <div class="single-counter-box-inner">
                            <div class="counter-icon">
                                <i class="flaticon-temporary-agency"></i>
                            </div>
                            <div class="counter-text">
                                <h1 class="counter">95</h1>
                                <span>+</span>
                            </div>
                            <div class="counter-title">
                                <h4>Active Members</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="techno-single-counter-box">
                        <div class="single-counter-box-inner">
                            <div class="counter-icon">
                                <i class="flaticon-pen"></i>
                            </div>
                            <div class="counter-text">
                                <h1 class="counter">23</h1>
                                <span>+</span>
                            </div>
                            <div class="counter-title">
                                <h4>Award Wining</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="techno-single-counter-box">
                        <div class="single-counter-box-inner">
                            <div class="counter-icon">
                                <i class="fas fa-award"></i>
                            </div>
                            <div class="counter-text">
                                <h1 class="counter">100</h1>
                                <span>%</span>
                            </div>
                            <div class="counter-title">
                                <h4>Satisfaction Rate</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End techno counter Area -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start techno faq Area -->
    <!--==================================================-->
    <div class="faq-area style-two upper8" >
        <div class="container">
            <div class="row padding-top">
                <div class="col-lg-5">
                    <div class="contact-form-box style-three upper8">
                        <div class="contact-form-title white">
                            <h5>Contact</h5>
                            <h3>FEEL FREE TO CONTACT</h3>
                            <h3>WITH OUR IT AGENCY</h3>
                            @if (session('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif
                        </div>
                        <form action="{{ route('contact.store', ['page' => 'home']) }}" method="POST" id="dreamit-form">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="from-box">
                                        <input type="text" name="name" placeholder="Your Name*" class="@error('name') is-invalid @enderror" value="{{ old('name') }}">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <div class="from-box">
                                        <input type="text" name="email" placeholder="Your Mail*" class="@error('email') is-invalid @enderror" value="{{ old('email') }}">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <div class="from-box">
                                        <input type="text" name="phone" placeholder="Phone No." class="@error('phone') is-invalid @enderror" value="{{ old('phone') }}">
                                        @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="from-box">
                                        <textarea name="message" id="massage" placeholder="Message*" class="@error('message') is-invalid @enderror">{{ old('message') }}</textarea>
                                        @error('message')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="from-box2 pt-30">
                                <button type="submit">Submit Now <span><i class="fas fa-check-square"></i></span></button>
                            </div>
                        </form>
                        <div id="status"></div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-8 col-sm-12">
                    <div class="row background-color1">
                        <div class="col-lg-12">
                            <div class="dreamit-section-title style-four white text-left">
                                <h5 class="color2">FREEQUENTLY ASK QUESTION</h5>
                                <h1>HOW CAN WE <span class="color2">HELP?</span></h1>
                                <p class="text-color">Dramatically utilize user-centric users through business action items. Progressively.</p>
                            </div>
                            <ul class="accordion">
                                <li>
                                    <a> Dramatically maximize tactical e-commerce</a>
                                    <p>Intrinsically build just in time customer service without the partnerships. Interactively synthesize cros leverage other is a class best practices through.</p>
                                </li>
                                <li>
                                    <a> Intrinsicly implement cross functional</a>
                                    <p>Intrinsically build just in time customer service without the partnerships. Interactively synthesize cros leverage other is a class best practices through.</p>
                                </li>
                                <li>
                                    <a> Globally 24/335 infrastructures</a>
                                    <p>Intrinsically build just in time customer service without the partnerships. Interactively synthesize cros leverage other is a class best practices through.</p>
                                </li>
                                <li>
                                    <a> Globally 24/335 infrastructures</a>
                                    <p>Intrinsically build just in time customer service without the partnerships. Interactively synthesize cros leverage other is a class best practices through.</p>
                                </li>
                                <li>
                                    <a> Globally 24/335 infrastructures</a>
                                    <p>Intrinsically build just in time customer service without the partnerships. Interactively synthesize cros leverage other is a class best practices through.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End techno faq Area-->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start techno team Area -->
    <!--==================================================-->
    <div class="team-area upper1 pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="dreamit-section-title style-two white text-center">
                        <h5>OUR TEAM</h5>
                        <h1>MEET THE EXPERT <span>TEAM</span></h1>
                    </div>
                </div>
            </div>
            <div class="row team-bottom">
                @foreach ($profiles as $profile)
                    <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="dreamit-single-team-box">
                        <div class="single-team-thumb">
                            <img src="{{ $profile->image->url() }}" alt="">
                            <div class="team-socail-icon">
                                <a href="{{ $profile->fb_link }}"><i class="fab fa-facebook-f"></i></a>
                                <a href="{{ $profile->fb_link }}"><i class="fab fa-instagram"></i></a>
                                <a href="{{ $profile->fb_link }}"><i class="fab fa-twitter"></i></a>
                                <a href="{{ $profile->fb_link }}"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                        </div>
                        <div class="team-content">
                            <div class="team-title">
                                <h3>{{ $profile->user->name }}</h3>
                            </div>
                            <div class="team-text">
                                <p>{{ $profile->profession }}</p>
                            </div>
                        </div>
                        <div class="team-icon">
                            <a href="#"><i class="far fa-envelope"></i> <span>Email</span></a>
                            <a href="#"><i class="fas fa-phone-volume"></i></a>
                            <a href="#"><i class="fas fa-share-alt"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!--End techno team Area -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start techno Blog Area -->
    <!--==================================================-->
    <div class="blog_area style-four upper2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 6 col-sm-12">
                    <div class="dreamit-section-title style-two white text-center">
                        <h5>LATEST BLOG</h5>
                        <h1>TECHNO LATEST <span>NEWS FEED</span></h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single_blog">
                        <div class="single_blog_thumb">
                            <a href="blog-details.html"><img src="assets/images/resource/blg1.jpg" alt="" /></a>
                        </div>
                        <div class="single_blog_content style_two">
                            <div class="post-categories">
                                <a href="#"><span><i class="far fa-calendar-alt"></i></span>July 10,2022</a>
                            </div>
                            <div class="techno_blog_meta">
                                <a href="#"><i class="far fa-user-circle"></i> By Posted </a>
                            </div>
                            <div class="blog_page_title">
                                <h4><a href="blog-details.html">Top 15 Secrete Business Ideas Next Levels</a></h4>
                            </div>
                            <div class="blog_button">
                                <a href="#"><i class="flaticon flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single_blog">
                        <div class="single_blog_thumb">
                            <a href="blog-details.html"><img src="assets/images/resource/blg2.jpg" alt="" /></a>
                        </div>
                        <div class="single_blog_content">
                            <div class="post-categories">
                                <a href="#"><span><i class="far fa-calendar-alt"></i></span>July 10,2022</a>
                            </div>
                            <div class="techno_blog_meta">
                                <a href="#"><i class="far fa-user-circle"></i> By Jhon</a>
                            </div>
                            <div class="blog_page_title">
                                <h4><a href="blog-details.html">Market Positioning for the Competitive.</a></h4>
                            </div>
                            <div class="blog_button">
                                <a href="#"><i class="flaticon flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single_blog">
                        <div class="single_blog_thumb">
                            <a href="blog-details.html"><img src="assets/images/resource/blg3.jpg" alt="" /></a>
                        </div>
                        <div class="single_blog_content">
                            <div class="post-categories">
                                <a href="#"><span><i class="far fa-calendar-alt"></i></span>July 10,2022</a>
                            </div>
                            <div class="techno_blog_meta">
                                <a href="#"><i class="far fa-user-circle"></i> By Jhon</a>
                            </div>
                            <div class="blog_page_title">
                                <h4><a href="blog-details.html">Techno Secrete Business Ideas Next Levels</a></h4>
                            </div>
                            <div class="blog_button">
                                <a href="#"><i class="flaticon flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End techno Blog Area -->
    <!--==================================================-->
@endsection
