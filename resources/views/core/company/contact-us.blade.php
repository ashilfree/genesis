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
                            <h2>Contact us</h2>
                        </div>
                        <div class="breatcumb-content-text">
                            <ul>
                                <li><a href="#">home</a> <i class="fas fa-angle-double-right"></i>
                                    <span>Contact Us</span></li>
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
    <!-- Start techno contact us Area -->
    <!--==================================================-->
    <div class="contact-us-area style-two pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="dreamit-section-title style-two text-center">
                        <h5>CONTACT US</h5>
                        <h1>GET IN TOUCH ANY TIME</h1>
                        <h1>WITH <span>TECHNO</span></h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="contact-us-single-box">
                                <div class="contact-us-icon">
                                    <i class="flaticon-suitcase"></i>
                                </div>
                                <div class="contact-us-title">
                                    <h2>Office Address</h2>
                                    <p>Digital Techno Network & IT 20 Eastbourne the Terrace Cen London W2</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="contact-us-single-box">
                                <div class="contact-us-icon">
                                    <i class="flaticon-call"></i>
                                </div>
                                <div class="contact-us-title">
                                    <h2>TELEPHONE NO.</h2>
                                    <p>+99 (408) 389-5470</p>
                                    <p>+99 (408) 389-5470</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="contact-us-single-box">
                                <div class="contact-us-icon">
                                    <i class="flaticon-communications"></i>
                                </div>
                                <div class="contact-us-title">
                                    <h2>E-MAIL ADDRESS</h2>
                                    <p>yourmail@yahoocom</p>
                                    <p>yourmail@yahoocom</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="contact-form-box style-two">
                                @if (session('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <form action="{{ route('contact.store', ['page' => 'contact']) }}" method="POST">
                                    @csrf
                                    <h4>For any inquiries relating to my Retail and Leadership Programs</h4>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-title">
                                                <p>Name (required)</p>
                                            </div>
                                            <div class="from-box">
                                                <input class="form-control  @error('name') is-invalid @enderror " type="text"
                                                       name="name" placeholder="Your Name*" value="{{ old('name') }}">
                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-title">
                                                <p>E-Mail Address (required)</p>
                                            </div>
                                            <div class="from-box">
                                                <input class="form-control  @error('email') is-invalid @enderror" type="text" name="email" placeholder="Your Mail*" value="{{ old('email') }}">
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-title">
                                                <p>Phone No. (optional)</p>
                                            </div>
                                            <div class="from-box">
                                                <input class="form-control  @error('phone') is-invalid @enderror" type="text" name="phone" placeholder="Phone No." value="{{ old('phone') }}">
                                                @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-title">
                                                <p>Service (required)</p>
                                            </div>
                                            <div class="from-box">
                                                <select name="service" id="Select-Service">
                                                    <option value="Phone No">Select Service</option>
                                                    <option value="name">Your Name*</option>
                                                    <option value="Your Mail">Your Mail*</option>
                                                    <option value="Phone No.">Phone No.</option>
                                                    <option value="Subject">Subject</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-title">
                                                <p>Your Message</p>
                                            </div>
                                            <div class="from-box">
                                                <textarea class="form-control  @error('message') is-invalid @enderror" name="message" id="massage" placeholder="Massage*">{{ old('message') }}</textarea>
                                                @error('message')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="from-box1 pt-35">
                                        <button type="submit">Submit Now <span><i
                                                    class="fas fa-check-square"></i></span></button>
                                    </div>
                                </form>
                                <div id="status"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End techno contact us Area -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start techno map Area -->
    <!--==================================================-->
    <div class="map-area pt-100">
        <div class="container-fluid">
            <div class="row">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3746840.9773080125!2d88.10061603600629!3d23.495630908432812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30adaaed80e18ba7%3A0xf2d28e0c4e1fc6b!2sBangladesh!5e0!3m2!1sen!2sbd!4v1634707629702!5m2!1sen!2sbd"
                    width="1920" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!--End techno map Area -->
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
