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
						<h2>Team Member</h2>
					</div>
					<div class="breatcumb-content-text">
						<ul>
							<li><a href="#">home</a> <i class="fas fa-angle-double-right"></i> <span>Team Member</span></li>
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
<!-- Start techno team Area -->
<!--==================================================-->
<div class="team-area pt-100">
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
