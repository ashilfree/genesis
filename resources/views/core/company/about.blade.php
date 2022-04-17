@extends('core.layout')

@section('content')

<!--==================================================-->
<!-- start techno slider Area -->
<!--==================================================-->
<div class="breatcumb-area">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-12">
                <div class="breatcumb-content text-center">
                    <div class="breatcumb-title">
                        <h2>About us</h2>
                    </div>
                    <div class="breatcumb-content-text">
                        <ul>
                            <li><a href="{{ route('home') }}">home</a> <i class="fas fa-angle-double-right"></i> <span>About Us</span></li>
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
<!-- Start techno about Area -->
<!--==================================================-->
<div class="about-area style-two">
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
                        <div class="dreamit-section-title">
                            <h5>About Us</h5>
                            <h1>{{ $about->title }}</h1>
                            <h1>AGENCY <span>{{ $about->colorful_title }}</span></h1>
                            <p>{{ $about->description }}</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="elementor-about-icon-box">
                            @for ($i = 0; $i < (ceil(count($about->tags) / 2)); $i++)
                                <div class="about-icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="elementor-about-title">
                                    <p>{{ $about->tags[$i]->name }}</p>
                                </div>
                            @endfor
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="elementor-about-icon-box">
                            @for ($i = (ceil(count($about->tags) / 2)); $i < count($about->tags); $i++)
                                <div class="about-icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="elementor-about-title">
                                    <p>{{ $about->tags[$i]->name }}</p>
                                </div>
                            @endfor
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="dreamit-about-thumb-box">
                            <div class="dreamit-about-signature-thumb">
                                <img src="assets/images/about/sign.png" alt="">
                            </div>
                            <div class="dreamit-about-name">
                                <div class="about-name-title">
                                    <h2>Robert Smith</h2>
                                    <p>CEO & Founder Techno</p>
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
<!-- End techno about Area -->
<!--==================================================-->

<!--==================================================-->
<!-- Start techno team Area -->
<!--==================================================-->
<div class="team-area pb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="dreamit-section-title style-two text-center">
                    <h5>OUR TEAM</h5>
                    <h1>MEET THE EXPERT <span>TEAM</span></h1>
                </div>
            </div>
        </div>
        <div class="row">
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
<!-- Start techno video Area -->
<!--==================================================-->
<div class="video-area">
    <div class="container">
        <div class="row video-bg">
            <div class="col-lg-8">
                <div class="rs-video style-three">
                    <div class="animate-border">
                        <a class="video-vemo-icon2 venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="https://youtu.be/BS4TUd7FJSg">
                            <i class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="video-content">
                    <div class="video-title">
                        <h4>AGENCY THAT GETS EXCITED ABOUT</h4>
                    </div>
                    <div class="video-button text-right">
                        <a href="#">Learn More <span><i class="fas fa-check-square"></i></span></a>
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
<!--Start datatech testimonial Area -->
<!--==================================================-->
<div class="testimonial-area style-three">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="dreamit-section-title style-two text-center pb-40">
                    <h5>TESTIMONIAL</h5>
                    <h1>CLIENT <span>TESTIMONIAL</span></h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="testimonial-list owl-carousel">
                <div class="col-lg-12 col-sm-12">
                    <div class="dreamit-single-testimonial-box">
                        <div class="testimonial-content">
                            <div class="testimonial-thumb">
                                <img src="assets/images/resource/testi5.png" alt="">
                            </div>
                            <div class="testi-titile">
                                <h2>JELY TAMIM</h2>
                                <span>Robotic Engineer</span>
                            </div>
                            <div class="testimonial-text"><p>Dramatically formulate accurate tailers whereas collaboration and idea-sharing. Enthusiastically build dive action items where equity invested products done.</p></div>
                            <div class="testimonial-star">
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-sm-12">
                    <div class="dreamit-single-testimonial-box">
                        <div class="testimonial-content">
                            <div class="testimonial-thumb">
                                <img src="assets/images/resource/testi4.png" alt="">
                            </div>
                            <div class="testi-titile">
                                <h2>ANJELINA KEMI</h2>
                                <span>UI/UX Designer</span>
                            </div>
                            <div class="testimonial-text"><p>Dramatically formulate accurate tailers whereas collaboration and idea-sharing. Enthusiastically build dive action items where equity invested products done.</p></div>
                            <div class="testimonial-star">
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-sm-12">
                    <div class="dreamit-single-testimonial-box">
                        <div class="testimonial-content">
                            <div class="testimonial-thumb">
                                <img src="assets/images/resource/testi5.png" alt="">
                            </div>
                            <div class="testi-titile">
                                <h2>Ellen Eyre</h2>
                                <span>Manager Of TM</span>
                            </div>
                            <div class="testimonial-text"><p>Dramatically formulate accurate tailers whereas collaboration and idea-sharing. Enthusiastically build dive action items where equity invested products done.</p></div>
                            <div class="testimonial-star">
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-sm-12">
                    <div class="dreamit-single-testimonial-box">
                        <div class="testimonial-content">
                            <div class="testimonial-thumb">
                                <img src="assets/images/resource/testi4.png" alt="">
                            </div>
                            <div class="testi-titile">
                                <h2>Mike Jonsone</h2>
                                <span>Sr. Engineer</span>
                            </div>
                            <div class="testimonial-text"><p>Dramatically formulate accurate tailers whereas collaboration and idea-sharing. Enthusiastically build dive action items where equity invested products done.</p></div>
                            <div class="testimonial-star">
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<!-- End datatech testimonial Area -->
<!--==================================================-->

<!--==================================================-->
<!-- Start techno brand Area -->
<!--==================================================-->
<div class="brand-area style-three">
    <div class="container">
        <div class="row">
            <div class="brand-list owl-carousel">
                <div class="col-lg-12 col-md-12">
                    <div class="dreamit-single-brand">
                        <div class="brand-thumb">
                            <img src="assets/images/resource/brand4.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="dreamit-single-brand">
                        <div class="brand-thumb">
                            <img src="assets/images/resource/brand5.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="dreamit-single-brand">
                        <div class="brand-thumb">
                            <img src="assets/images/resource/brand3.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="dreamit-single-brand">
                        <div class="brand-thumb">
                            <img src="assets/images/resource/brand1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="dreamit-single-brand">
                        <div class="brand-thumb">
                            <img src="assets/images/resource/brand2.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="dreamit-single-brand">
                        <div class="brand-thumb">
                            <img src="assets/images/resource/brand4.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<!--End techno brand Area -->
<!--==================================================-->
@endsection
