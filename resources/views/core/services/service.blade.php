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
							<a href="index.html"><img src="assets/images/logo.png" alt="" /></a>
						</div>
						<div class="content-box">
							<h2>About Us</h2>
							<p class="text">The argument in favor of using filler text goes something like this: If you use real content in the Consulting Process, anytime you reach a review point you’ll end up reviewing and negotiating the content itself and not the design.</p>
							<a href="index" class="theme-btn btn-style-two"><span>Consultation</span> <i class="fas fa-heart"></i></a>
						</div>
						<div class="contact-info">
							<h2>Contact Info</h2>
							<ul class="list-style-one">
								<li><span class="icon flaticon-email"></span>Chicago 12, Melborne City, USA</li>
								<li><span class="flaticon-phone-call"></span>(+001) 123-456-7890</li>
								<li><span class="icon flaticon-placeholder-1"></span>Example.com</li>
								<li><span class="flaticon-clock-2"></span>Week Days: 09.00 to 18.00 Sunday: Closed</li>
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
						<h2>SERVICES</h2>
					</div>
					<div class="breatcumb-content-text">
						<ul>
							<li><a href="#">home</a> <i class="fas fa-angle-double-right"></i> <span>SERVICES</span></li>
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
<!-- Start techno service Area -->
<!--==================================================-->
<div class="service-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 padding-left">
				<div class="dreamit-section-title text-left">
					<h5>SERVICES</h5>
					<h1>WE SERVE THE PERFECT</h1>
					<h1>PIXEL <span>IT SOLUTION</span></h1>
				</div>
			</div>
            @auth
            @foreach ( $services as $service )
                @can( 'view-any', $service)
                <div class="col-lg-3 col-md-6 col-sm-12 padding-left">
                    <div class="techno-sinlge-service-box">
                        <a href="{{ route('services.detail', ['slug' => $service->slug]) }}" class="techno-service-box-inner">
                            <div class="techno-service-content">
                                <div class="techno-service-icon">
                                    <i class="flaticon-growth"></i>
                                </div>
                                <div class="techno-service-title">
                                    <h2>{{ ucwords($service->title)  }}</h2>
                                    <p>{{ \Illuminate\Support\Str::limit($service->description, 70, '...') }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @endcan
            @endforeach
            @endauth
			<div class="col-lg-3 col-md-6 col-sm-12 padding-left">
				<div class="techno-sinlge-service-box2">
					<div class="techno-service-box-inner">
						<div class="service-button">
							<a href="#">Read More <i class="fas fa-plus"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End techno service Area -->
<!--==================================================-->

<!--==================================================-->
<!-- Start techno service Area -->
<!--==================================================-->
<div class="service-area style-three">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-sm-12">
				<div class="dreamit-section-title style-three white text-center pb-3">
					<h5>SERVICES</h5>
					<h1>WE SERVE THE PERFECT</h1>
					<h1>PIXEL <span>SOLUTIONS</span></h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-12">
				<div class="techno-sinlge-service-box white">
					<div class="techno-service-box-inner">
						<div class="techno-service-content">
							<div class="techno-service-icon">
								<i class="flaticon-brain-1"></i>
							</div>
							<div class="techno-service-title">
								<h2>DIGITAL SEO CONSULTANCY</h2>
								<p>Dramatically simplify to proof a data before high mindshare done.</p>
							</div>
						</div>
						<div class="service-button2">
							<a href="#">READ MORE <span><i class="fas fa-angle-double-right"></i></span></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12">
				<div class="techno-sinlge-service-box white">
					<div class="techno-service-box-inner">
						<div class="techno-service-content">
							<div class="techno-service-icon">
								<i class="flaticon flaticon-code"></i>
							</div>
							<div class="techno-service-title">
								<h2>APPS INTERFACE DESIGN</h2>
								<p>Dramatically simplify to proof a data before high mindshare done.</p>
							</div>
						</div>
						<div class="service-button2">
							<a href="#">READ MORE <span><i class="fas fa-angle-double-right"></i></span></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12">
				<div class="techno-sinlge-service-box white">
					<div class="techno-service-box-inner">
						<div class="techno-service-content">
							<div class="techno-service-icon">
								<i class="flaticon-pen"></i>
							</div>
							<div class="techno-service-title">
								<h2>WEBSITE DEVELOPMENT</h2>
								<p>Dramatically simplify to proof a data before high mindshare done.</p>
							</div>
						</div>
						<div class="service-button2">
							<a href="#">READ MORE <span><i class="fas fa-angle-double-right"></i></span></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12">
				<div class="techno-sinlge-service-box white">
					<div class="techno-service-box-inner">
						<div class="techno-service-content">
							<div class="techno-service-icon">
								<i class="flaticon-chat"></i>
							</div>
							<div class="techno-service-title">
								<h2>UI DATABASE DESIGN</h2>
								<p>Dramatically simplify to proof a data before high mindshare done.</p>
							</div>
						</div>
						<div class="service-button2">
							<a href="#">READ MORE <span><i class="fas fa-angle-double-right"></i></span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End techno service Area -->
<!--==================================================-->

<!--==================================================-->
<!-- Start techno feature Area -->
<!--==================================================-->
<div class="feture-area pt-100 pb-100">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-md-5 col-sm-12">
				<div class="dreamit-section-title style-four text-left pb-3">
					<h5>SERVICES</h5>
					<h1>YOU CAN GET THE</h1>
					<h1>BEST ALL DESIGN</h1>
					<h1><span> SOLUTION</span></h1>
					<p>Dramatically enable is a economically sound information deliverables is a completely impact resource-leveling the focussed leadership for a reals methodologies supported digital agency techno.</p>
				</div>
			</div>
			<div class="col-lg-7 col-md-6 col-sm-12">
				<div class="dreamit-department-tab">
					<ul class="nav nav-pills mb-60" id="pills-tab" role="tablist">
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
							<div class="dreamit-department-tab-box">
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
						<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
							<div class="dreamit-department-tab-box">
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
							<div class="dreamit-department-tab-box">
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
<!-- Start techno brand Area -->
<!--==================================================-->
<div class="brand-area style-four">
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
