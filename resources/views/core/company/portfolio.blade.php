@extends('core.layout')

@section('content')
    <!-- Sidebar Cart Item -->
    <div class="xs-sidebar-group info-group">
        <div class="xs-overlay xs-bg-black"></div>
        <div class="xs-sidebar-widget">
            <div class="sidebar-widget-container">
                <div class="widget-heading">
                    <a href="#" class="close-side-widget">
                        <i class="far fa-times-circle"></i>
                    </a>
                </div>
                <div class="sidebar-textwidget">
                    <!-- Sidebar Info Content -->
                    <div class="sidebar-info-contents">
                        <div class="content-inner">
                            <div class="nav-logo">
                                <a href="index.html"><img src="assets/images/logo.png" alt=""/></a>
                            </div>
                            <div class="content-box">
                                <h2>About Us</h2>
                                <p class="text">The argument in favor of using filler text goes something like this: If
                                    you use real content in the Consulting Process, anytime you reach a review point
                                    you’ll end up reviewing and negotiating the content itself and not the design.</p>
                                <a href="index" class="theme-btn btn-style-two"><span>Consultation</span> <i
                                        class="fas fa-heart"></i></a>
                            </div>
                            <div class="contact-info">
                                <h2>Contact Info</h2>
                                <ul class="list-style-one">
                                    <li><span class="icon flaticon-email-1"></span>Chicago 12, Melborne City, USA</li>
                                    <li><span class="flaticon-24-hours-1"></span>(+001) 123-456-7890</li>
                                    <li><span class="icon flaticon-placeholder-1"></span>globex@gmail.com</li>
                                    <li><span class="flaticon-24-hours-3"></span>Week Days: 09.00 to 18.00 Sunday:
                                        Closed
                                    </li>
                                </ul>
                            </div>
                            <!-- Social Box -->
                            <ul class="social-box">
                                <li class="facebook"><a href="#" class="fab fa-facebook-f"></a></li>
                                <li class="twitter"><a href="#" class="fab fa-instagram"></a></li>
                                <li class="linkedin"><a href="#" class="fab fa-twitter"></a></li>
                                <li class="instagram"><a href="#" class="fab fa-pinterest-p"></a></li>
                                <li class="youtube"><a href="#" class="fab fa-linkedin-in"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- start techno slider Area -->
    <!--==================================================-->
    <div class="breatcumb-area">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-12">
                    <div class="breatcumb-content text-center">
                        <div class="breatcumb-title">
                            <h2>Portfolio</h2>
                        </div>
                        <div class="breatcumb-content-text">
                            <ul>
                                <li><a href="#">home</a> <i class="fas fa-angle-double-right"></i>
                                    <span>Portfolio</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End techno slider Area -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start techno Portfolio Area -->
    <!--==================================================-->
    <div class="portfolio_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="dreamit-section-title text-center style-two">
                        <h5>OUR PROJECTS</h5>
                        <h1>OUR LATEST <span>CASE STUDIES</span></h1>
                    </div>
                </div>
                <div class="col-lg-12 col-sm-12">
                    <div class="portfolio_nav text-center">
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
                                    <img src="{{ $project->images->first()->url() }}" alt=""/>
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

@endsection
