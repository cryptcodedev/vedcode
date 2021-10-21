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
								<li><a href="single-services.html#!">IT Consulting</a></li>
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
								<h1>IT Consulting</h1>
							</div>
							<div class="content">
								<div class="img-style">
									<img src="assets/img/subheader-corporate.png" alt="">
								</div>
								<p>Information technology (IT) consulting services allow companies to implement IT strategies and solutions to achieve business-IT alignment, and drive max value from the current IT initiatives. Your business goals shape the project scope – we may focus our entire attention on the advisory stage if you need to work through IT challenges and lay down the strategy for positive IT transformation. Also, we provide a full-service package of assistance for IT projects – we plan, design, implement and continuously support technology-powered solutions.</p>
								<h5>Key Features</h5>
								<ul>
									<li>IT advisory</li>
									<li>IT solution implementation</li>
									<li>IT modernization</li>
									<li>Infrastructure management</li>
									<li>Managed IT services</li>
									<li>Cloud consulting</li>
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
											IT advisory
										</li>
										<li class="active">
											<i class="material-icons md-24">check</i>
											IT solution implementation
										</li>
										<li>
											<i class="material-icons md-24">check</i>
											IT modernization
										</li>
										<li>
											<i class="material-icons md-24">check</i>
											Infrastructure management
										</li>
										<li>
											<i class="material-icons md-24">check</i>
											Managed IT services
                                        </li>

										<li>
											<i class="material-icons md-24">check</i>
											Cloud consulting
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
											IT advisory
										</li>
										<li class="active">
											<i class="material-icons md-24">check</i>
											IT solution implementation
										</li>
										<li class="active">
											<i class="material-icons md-24">check</i>
											IT modernization
										</li>
										<li>
											<i class="material-icons md-24">check</i>
											Infrastructure management
										</li>
										<li>
											<i class="material-icons md-24">check</i>
											Managed IT services
                                        </li>

										<li>
											<i class="material-icons md-24">check</i>
											Cloud consulting
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
											IT advisory
										</li>
										<li class="active">
											<i class="material-icons md-24">check</i>
											IT solution implementation
										</li>
										<li class="active">
											<i class="material-icons md-24">check</i>
											IT modernization
										</li>
										<li class="active">
											<i class="material-icons md-24">check</i>
											Infrastructure management
										</li>
										<li class="active">
											<i class="material-icons md-24">check</i>
											Managed IT services
                                        </li>

										<li class="active">
											<i class="material-icons md-24">check</i>
											Cloud consulting
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
