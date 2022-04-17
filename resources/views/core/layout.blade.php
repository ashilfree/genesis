<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Genesis-Tech Techno-IT Solutions Services</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('core.inc.styles')

    <link rel="icon" type="image/png" sizes="56x56" href="{{asset('storage/img/favicon.ico')}}">

</head>
<body>
<!--==================================================-->
<!-- Start techno Main Menu Area -->
<!--==================================================-->
{{--@component('badge', ['type' => 'primary'])--}}
{{--    New--}}
{{--@endcomponent--}}

{{--@badge(['type'=> 'primary', 'show' => now()->diffInMinutes($service->created_at) < 20])--}}
{{--    New One--}}
{{--@endbadge--}}

{{--@card(['title' => 'Most Active'])--}}
{{--    @slot('subtitle')--}}
{{--        Users with most written--}}
{{--    @endslot--}}
{{--@slot('items', collect($services)->pluck('title'))--}}
{{--@endcard--}}

<div id="sticky-header" class="techno_nav_manu style-two">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3">
                <div class="logo">
                    <a class="logo_img" href="{{ route('home') }}" title="techno">
                        <img src="{{ asset('assets/core/images/genesis.png') }}" alt=""/>
                    </a>
                    <a class="main_sticky" href="{{ route('home') }}" title="techno">
                        <img src="{{ asset('assets/core/images/genesis.png') }}" alt="astute"/>
                    </a>
                </div>
            </div>
            <div class="col-lg-9">
                <nav class="techno_menu text-center">
                    <ul class="nav_scroll">
                        <li><a href="{{ route('home') }}">{{ __('layout.Home') }}</a>
                        </li>
                        <li><a href="#Company">{{ __('layout.Company') }} <span><i class="fas fa-angle-down"></i></span></a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('team.member') }}">{{ __('layout.Team') }}</a></li>
                                <li><a href="{{ route('portfolio') }}">{{ __('layout.Portfolio') }}</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('services.index') }}">{{ __('layout.Services') }} </a>
                        </li>
                        <li><a href="{{ route('about') }}">{{ __('layout.About') }}<span></span></a></li>
                        <li><a href="{{ route('contact') }}">{{ __('layout.Contact') }}</a></li>
                        @guest()
                            @if (\Illuminate\Support\Facades\Route::has('login'))
                                <li><a href="{{ route('login') }}">{{ __('layout.Login') }}</a></li>
                            @endif
                            @if (\Illuminate\Support\Facades\Route::has('register'))
                                <li><a href="{{ route('register') }}"></a></li>
                            @endif
                        @else
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{ __('layout.Logout') }}
                                    <span style="font-size: 10px;">({{ \Illuminate\Support\Facades\Auth::user()->name }})</span></a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        @endguest
                    </ul>
                    <div class="header-button">
                        <a @auth  href="/sales" @endauth>
                            <i class="flaticon-phone-call"></i>
                        </a>
                    </div>
                    <div class="slider-button-text">
                        <p>Call Now!</p>
                        <h2>+91 (456) 7890</h2>
                    </div>
                </nav>
            </div>
            <div class="lines style-three">
                <div class="line"></div>
            </div>
        </div>
    </div>
</div>
<!-- techno Mobile Menu Area -->
<div class="mobile-menu-area d-sm-block d-md-block d-lg-none ">
    <div class="mobile-menu">
        <nav class="techno_menu">
            <ul class="nav_scroll">
                <li><a href="#home">Home <span><i class="fas fa-angle-down"></i></span></a>
                    <ul class="sub-menu">
                        <li><a href="index.html">Digital Agency 01</a></li>
                        <li><a href="index-2.html">Digital Agency 02</a></li>
                        <li><a href="index-3.html">Digital Agency 03</a></li>
                        <li><a href="index-4.html">Digital Agency 04</a></li>
                        <li><a href="index-5.html">Digital Agency 05</a></li>
                        <li><a href="index-6.html">Digital Agency 06</a></li>
                    </ul>
                </li>
                <li><a href="#Company">Company <span><i class="fas fa-angle-down"></i></span></a>
                    <ul class="sub-menu">
                        <li><a href="about.html">About</a></li>
                        <li><a href="team-member.html">Team Member</a></li>
                        <li><a href="contact-us.html">Contact Us</a></li>
                        <li><a href="portfolio.html">Portfolio</a></li>
                    </ul>
                </li>
                <li><a href="#Services.html">Services <span><i class="fas fa-angle-down"></i></span></a>
                    <ul class="sub-menu">
                        <li><a href="service.html">Service</a></li>
                        <li><a href="service-details.html">Service Details</a></li>
                    </ul>
                </li>
                <li><a href="#Solution.html">It Solution <span><i class="fas fa-angle-down"></i></span></a></li>
                <li><a href="#blog">Blog <span><i class="fas fa-angle-down"></i></span></a>
                    <ul class="sub-menu">
                        <li><a href="blog-grid.html">blog Grid</a></li>
                        <li><a href="blog-list.html">Blog List</a></li>
                        <li><a href="blog-details.html">Blog Details</a></li>
                        <li><a href="blog-2colum.html">Blog 2column</a></li>
                    </ul>
                </li>
                <li><a href="about.html">About <span></span></a></li>
                <li><a href="contact-us.html">Contact</a></li>
            </ul>
        </nav>
    </div>
</div>
<!--==================================================-->
<!-- End techno Main Menu Area -->
<!--==================================================-->

@yield('content')

<!--==================================================-->
<!-- Start techno subscribe Area -->
<!--==================================================-->
<div class="subscribe-area style-five" id="newsletter">
    <div class="container">
        <div class="row subscribe-bg">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="subscribe-content white">
                    <div class="subscribe-title">
                        <h1>Subscribe our newsletter</h1>
                        <p>
                            @error('newsletter_email')
                                {{ $message }}
                            @enderror
                            @if (\Session::has('success_subscribing'))
                                {{ \Session::get('success_subscribing') }}
                            @endif
                            @if (\Session::has('failure_subscribing'))
                                {{ \Session::get('failure_subscribing') }}
                            @endif
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="contact-form-box">
                    <form id="contact_form" action="{{ route('newsletter.store') }}" method="POST">
                        @csrf
                        <div class="from-box">
                            <input type="email" name="newsletter_email" placeholder="Enter E-Mail Address"
                                   class="@error('newsletter_email') is-invalid @enderror" value="{{ old('newsletter_email') }}">

                            <button type="submit">Subscribe</button>
                        </div>
                    </form>
                    <p class="form-message"></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<!-- End techno subscribe Area -->
<!--==================================================-->

<!--==================================================-->
<!-- Start techno Footer Middle Area -->
<!--==================================================-->
<div class="footer-middle">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="widget-widgets-company-info white">
                    <div class="techno-logo">
                        <a class="logo_img" href="index.html" title="techno">
                            <img src="assets/images/logo.png" alt=""/>
                        </a>
                    </div>
                    <div class="company-info-desc">
                        <p>Holisticly reintermediate intuitive factured products after ethical to rables.
                            Monotonectally.</p>
                    </div>
                    <div class="company_icon">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12">
                <div class="widget widget-nav-menu">
                    <h4 class="widget-title"><span>R</span>ESOURCE</h4>
                    <div class="menu-quick-link-content">
                        <ul class="menu">
                            <li><a href="#">Open Source</a></li>
                            <li><a href="#">Documentation</a></li>
                            <li><a href="#">User Studio</a></li>
                            <li><a href="#">Manage Report</a></li>
                            <li><a href="#">Live Seassion</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="widget-footer-title">
                    <h4 class="widget-title"><span>U</span>SEFUL LINKS</h4>
                </div>
                <div class="footer-recent-post">
                    <ul class="menu">
                        <li><a href="#">Open Source</a></li>
                        <li><a href="#">Documentation</a></li>
                        <li><a href="#">User Studio</a></li>
                        <li><a href="#">Manage Report</a></li>
                        <li><a href="#">Live Seassion</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div id="footer-widget-address">
                    <h4 class="widget-title"><span>C</span>ONTACTS</h4>
                    <div class="footer-inner">
                        <div class="footer-socail-icon">
                            <i class="flaticon-call"></i>
                        </div>
                        <div class="footer-socail-info">
                            <p>
                                <span>(+001) 123-456-7890</span>
                            </p>
                        </div>
                    </div>
                    <div class="footer-inner">
                        <div class="footer-socail-icon">
                            <i class="icon flaticon-email"></i>
                        </div>
                        <div class="footer-socail-info">
                            <p>support@delton.com</p>
                        </div>
                    </div>
                    <div class="footer-inner">
                        <div class="footer-socail-icon">
                            <i class="icon flaticon-placeholder-1"></i>
                        </div>
                        <div class="footer-socail-info2">
                            <p>515 Carriage Court, Coachella, CA, 92236 USA</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row footer-bottom">
            <div class="col-lg-6 col-md-6">
                <div class="footer-bottom-content">
                    <div class="footer-bottom-content-copy">
                        <p>Copyright © 2021. All rights reserved to <span>Techno</span></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="footer-bottom-menu">
                    <p>Terms & Condition . Services . Careers</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<!-- End techno Footer Middle Area -->
<!--==================================================-->

<!--==================================================-->
<!-- Start scrollup section Area -->
<!--==================================================-->
<!-- scrollup section -->
<div class="scroll-area">
    <div class="top-wrap">
        <div class="go-top-btn-wraper">
            <div class="go-top go-top-button">
                <i class="fas fa-arrow-up"></i>
                <i class="fas fa-arrow-up"></i>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<!-- Start scrollup section Area -->
<!--==================================================-->

<!--==================================================-->
<!-- Start Search Popup Area -->
<!--==================================================-->
<div class="search-popup">
    <button class="close-search style-two"><span class="flaticon-multiply"><i class="far fa-times-circle"></i></span>
    </button>
    <button class="close-search"><i class="fas fa-arrow-up"></i></button>
    <form method="post" action="#">
        <div class="form-group">
            <input type="search" name="search-field" value="" placeholder="Search Here" required="">
            <button type="submit"><i class="fa fa-search"></i></button>
        </div>
    </form>
</div>
<!--==================================================-->
<!-- Start Search Popup Area -->
<!--==================================================-->

@include('core.inc.scripts')
</body>
</html>
