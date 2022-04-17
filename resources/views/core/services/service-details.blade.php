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
								<li><span class="icon flaticon-email-1"></span>Chicago 12, Melborne City, USA</li>
								<li><span class="flaticon-24-hours-1"></span>(+001) 123-456-7890</li>
								<li><span class="icon flaticon-placeholder-1"></span>globex@gmail.com</li>
								<li><span class="flaticon-24-hours-3"></span>Week Days: 09.00 to 18.00 Sunday: Closed</li>
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
						<h2>UI/UX DESIGN</h2>
					</div>
					<div class="breatcumb-content-text">
						<ul>
							<li><a href="#">home</a> <i class="fas fa-angle-double-right"></i> <span><a href="#">service</a> <i class="fas fa-angle-double-right"></i></span> <span>UI/UX DESIGN</span></li>
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
<div class="service-area" id="blog">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-6 col-sm-12 col-sm-12">
				<div class="row">
					<div class="col-lg-12 col-sm-12">
						<div class="dreamit-single-service-box">
							<div class="dreamit-sigle-tmumb">
                                @if ($service->image)
                                    <img src="{{ $service->image->url() }}" alt="">
                                @else
                                    <img src="assets/images/resource/img-1.jpg" alt="">
                                @endif

							</div>
							<div class="em-service-content">
								<div class="service-page-title">
                                    <h1>{{ $counter }}</h1>
									<h1><a href="#">UI/UX GRAPHIC DESIGN</a></h1>
									<p>Authoritatively disintermediate reliable niche markets after plug-and-play infrastructures. Professiona maximize real-time outsourcing whereas open-source intellectual capital. Monotonectally procrastina process-centric communities after highs-quality metrics. Professionally fashion ethical testing proced for reliable opportunities. Dynamically whiteboard functional ROIS before proactive web services is the synthesize worldwide experiences with customer directed markets. Uniquely pursue effective process rather than optimal partnerships. Energistically.</p>
								</div>
							</div>
						</div>
					</div>
                    @forelse ($service->tags as $tag)
                        <div class="col-lg-6 col-md-6 col-sm-12 srvce-upper pt-20 pb-50">
                            @Tag(['name' => $tag->name, 'content' => $tag->content])
                            @endTag
                        </div>
                    @empty
                        <h1>No tag</h1>
                    @endforelse

					<div class="col-lg-6 col-md-6 col-sm-12 srvce-upper pt-20 pb-50">
						<div class="service-details-box">
							<div class="service-details-icon">
								<i class="flaticon-support-6"></i>
							</div>
							<div class="service-details-title">
								<h4>24/7 SUPPORT</h4>
								<p>Phosfluorescently pontificates fully researched it.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="service-details-thumb">
							<img src="assets/images/resource/img-2.png" alt="">
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="service-details-icon-box">
							<div class="service-details-icon-title">
								<h3>WE SERVE THE BEST WORK</h3>
								<p>Dramatically monetize revolutionary collaboration and idea-sharing through accurate platforms the nectally syndicate high</p>
							</div>
						</div>
						<div class="widget-service-details-icon">
							<p><i class="fas fa-check"></i> <span>Rather than unique Idea.</span></p>
							<p><i class="fas fa-check"></i> <span>Entums estibulum dignissim posuere</span></p>
							<p><i class="fas fa-check"></i> <span>Quality users after Breed Applications.</span></p>
						</div>
					</div>
					<div class="col-lg-12 col-sm-12">
						<div class="widget-details-text pt-25 pb-3">
							<p>Authoritatively disintermediate reliable niche markets after plug-and-play infrastructures. Professiona maximize real-time outsourcing whereas open-source intellectual capital. Monotonectally procrastina process-centric communities.</p>
						</div>
						<div class="widget-details-text2">
							<p>Authoritatively disintermediate reliable niche markets after plug-and-play infrastructures.That product Professiona maximize real-time outsourcing whereas open-source intellectual capital. Monotonectally procrastina process-centric communities after highs-quality metrics of fetures Professionally fashion ethical testing proced for reliable opportunities. Dynamically whiteboard functional ROIS before proactive web services is the synthesize worldwide experiences with of customer directed markets. Uniquely pursue effective process rather than optimal partnerships. Energistically.</p>
						</div>
					</div>
				</div>
			</div>
			<div class=" col-lg-4 col-md-6 col-sm-12 col-sm-12">
				<div class="widget-service-box">
					<h4>ALL SERVICES</h4>
					<div class="widget-service-menu">
						<ul>
							<li><a href="web-development.html">WEB DEVELOPMENT <i class="fas fa-angle-right"></i></a></li>
							<li><a href="service-details.html">UI UX DESIGN <i class="fas fa-angle-right"></i></a></li>
							<li><a href="cloud-computing.html">CLOUD COMPUTING <i class="fas fa-angle-right"></i></a></li>
							<li><a href="digital-marketing.html">DIGITAL MARKETING <i class="fas fa-angle-right"></i></a></li>
							<li><a href="content-writing.html">SEO & CONTENT WRITING <i class="fas fa-angle-right"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="widget-service-thumb-box">
					<div class="wedget-service-thumb">
						<img src="assets/images/resource/details.png" alt="">
						<div class="widget-service-content text-center">
							<div class="widget-text">
								<p>Contact Us Now</p>
							</div>
							<div class="widget-title2">
								<h3>If Need Help</h3>
							</div>
							<div class="widget-contact-title">
								<h2>557-3452-234</h2>
								<p>Or got to contact form</p>
							</div>
							<div class="widget-button">
								<a href="#">LET’s START NOW</a>
								<span><i class="fas fa-link"></i></span>
							</div>
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
@endsection
