@extends('layouts.main')

@section('content')
	<!-- Begin bread crumbs -->
			<nav class="bread-crumbs">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<ul class="bread-crumbs-list">
								<li>
									<a href="{{url('/')}}">Home</a>
									<i class="material-icons md-18">chevron_right</i>
								</li>
								<li>
									<a href="{{url('services')}}">Services</a>
									<i class="material-icons md-18">chevron_right</i>
								</li>
								<li><a href="single-services.html#!">Android Applications</a></li>
							</ul>
						</div>
					</div>
				</div>
			</nav><!-- End bread crumbs -->

			<!-- Begin main content -->
			<div class="section">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="section-heading heading-center">
								<h1>Android Applications</h1>
							</div>
							<div class="content">
								<div class="img-style">
									<img src="{{asset('assets/img/android-1.jpg')}}" alt="">
								</div>
								<p>We explore the market and  deep dive into your business to understand your needs and help you unlock the full potential with a top-notch, feature-rich Android development solution. We deliver a fully-customized Android applications with a user-friendly interface, smooth navigation, and the required functionality.</p>
								<p>To satisfy the highest demands of our customers and to provide them with highly reliable solutions, each Android developer at <q style="font-style: oblique;font-weight:600">Vedcode Technologies</q> takes advantage of a wide range of programming languages, and a full stack of related technologies. Our Android developers keep track of all the updates on Android OS and use top-notch technologies and proven approaches. We’ve written thousands of lines of code and created dozens of Android apps with stunning design and rich functionality. By working with us, you get predictably great results because we always make sure our clients get digital products that fully meet their business requirements.</p>
								<h5>Key Features</h5>
								<ul>
									<li>Requirements Analysis</li>
									<li>UX/UI Design</li>
									<li>Deployment and Support</li>
									<li>Software Development</li>
                                    <li>Testing</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div><!-- End main content -->

			<!-- Begin Pricing -->
			<section class="section section-bg">
				<div class="container">
					<div class="row items">
						<div class="col-12">
							<div class="section-heading heading-center">
								<h2 >Pricing</h2>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12 item">
							<!-- Begin pricing item -->
							<div class="pricing-item item-style">
								<header class="pricing-item-header">
									<div class="pricing-item-title">Basic</div>
									<div class="pricing-item-price"><small>from</small> 899$</div>
								</header>
								<div class="pricing-item-content">
									<ul class="pricing-item-list">
										<li class="active">
											<i class="material-icons md-24">check</i>
											Requirements Analysis
										</li>
										<li class="active">
											<i class="material-icons md-24">check</i>
											UI/UX design
										</li>
										<li>
											<i class="material-icons md-24">check</i>
											Deployment and Support
										</li>
										<li>
											<i class="material-icons md-24">check</i>
											Software Development
										</li>
										<li>
											<i class="material-icons md-24">check</i>
											Testing
										</li>
									</ul>
								</div>
								<footer class="pricing-item-footer">
									<a href="{{url('contact-us')}}" class="btn btn-large btn-with-icon btn-wide ripple">
										<span>Contact us to start service</span>
										<svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9"><use xlink:href="assets/img/sprite.svg#arrow-right"></use></svg>
									</a>
								</footer>
							</div><!-- End pricing item -->
						</div>
						<div class="col-lg-4 col-md-6 col-12 item">
							<!-- Begin pricing item -->
							<div class="pricing-item item-style">
								<div class="pricing-item-badge">Popular</div>
								<header class="pricing-item-header">
									<div class="pricing-item-title">Optimal</div>
									<div class="pricing-item-price"><small>from</small> 1 500$</div>
								</header>
								<div class="pricing-item-content">
									<ul class="pricing-item-list">
										<li class="active">
											<i class="material-icons md-24">check</i>
											Requirements Analysis
										</li>
										<li class="active">
											<i class="material-icons md-24">check</i>
											UI/UX design
										</li>
										<li class="active">
											<i class="material-icons md-24">check</i>
											Deployment and Support
										</li>
										<li>
											<i class="material-icons md-24">check</i>
											Software Development
										</li>
										<li>
											<i class="material-icons md-24">check</i>
											Testing
										</li>
									</ul>
								</div>
								<footer class="pricing-item-footer">
                                <a href="{{url('contact-us')}}" class="btn btn-large btn-with-icon btn-wide ripple">
										<span>Contact us to start service</span>
										<svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9"><use xlink:href="assets/img/sprite.svg#arrow-right"></use></svg>
									</a>
								</footer>
							</div><!-- End pricing item -->
						</div>
						<div class="col-lg-4 col-md-12 col-12 item">
							<!-- Begin pricing item -->
							<div class="pricing-item item-style">
								<header class="pricing-item-header">
									<div class="pricing-item-title">Ultimate</div>
									<div class="pricing-item-price"><small>from</small> 2 000$</div>
								</header>
								<div class="pricing-item-content">
									<ul class="pricing-item-list">
										<li class="active">
											<i class="material-icons md-24">check</i>
											Requirements Analysis
										</li>
										<li class="active">
											<i class="material-icons md-24">check</i>
											UI/UX design
										</li>
										<li class="active">
											<i class="material-icons md-24">check</i>
											Deployment and Support
										</li>
										<li class="active">
											<i class="material-icons md-24">check</i>
											Software Development
										</li>
										<li class="active">
											<i class="material-icons md-24">check</i>
											Testing
										</li>
									</ul>
								</div>
								<footer class="pricing-item-footer">
                                <a href="{{url('contact-us')}}" class="btn btn-large btn-with-icon btn-wide ripple">
										<span>Contact us to start service</span>
										<svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9"><use xlink:href="assets/img/sprite.svg#arrow-right"></use></svg>
									</a>
								</footer>
							</div><!-- End pricing item -->
						</div>
					</div>
				</div>
			</section><!-- End Pricing -->

			@include('shared.allservices')
            @endsection