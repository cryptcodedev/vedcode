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
								<li><a href="single-services.html#!">Data Analytics</a></li>
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
								<h1>Data Analytics</h1>
							</div>
							<div class="content">
								<div class="img-style">
									<img src="{{asset('assets/img/data-anlystics.jpg')}}" alt="">
								</div>
								<p>Data analytics is used to extract actionable insights from business data for quick and informed decision-making. For customers in 30+ industries, <q style="font-style: oblique;font-weight:600">Vedcode Technologies</q> data experts with 3+ years of experience design and develop tailored analytics solutions and render managed analytics services. <q style="font-style: oblique;font-weight:600">Vedcode Technologies</q> helps businesses from 30+ industries integrate, aggregate, and analyze various data types from multiple data sources to address their most deliberate needs at department and enterprise levels.</p>
								<h5>Key Features</h5>
								<ul>
									<li>Analytics</li>
									<li>Managed data analysis</li>
									<li>Data analytics consulting</li>
									<li>Data analytics implementation</li>
                                    <li>Data analytics modernization</li>
                                    <li>Data management services</li>
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
											Analytics
										</li>
										<li class="active">
											<i class="material-icons md-24">check</i>
											Managed data analysis
										</li>
										<li>
											<i class="material-icons md-24">check</i>
											Data analytics consulting
										</li>
										<li>
											<i class="material-icons md-24">check</i>
											Data analytics implementation
										</li>
										<li>
											<i class="material-icons md-24">check</i>
											Data analytics modernization
										</li>
                                        <li>
											<i class="material-icons md-24">check</i>
											Data management services
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
											Analytics
										</li>
										<li class="active">
											<i class="material-icons md-24">check</i>
											Managed data analysis
										</li>
										<li class="active">
											<i class="material-icons md-24">check</i>
											Data analytics consulting
										</li>
										<li>
											<i class="material-icons md-24">check</i>
											Data analytics implementation
										</li>
										<li>
											<i class="material-icons md-24">check</i>
											Data analytics modernization
										</li>
                                        <li>
											<i class="material-icons md-24">check</i>
											Data management services
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
											Analytics
										</li>
										<li class="active">
											<i class="material-icons md-24">check</i>
											Managed data analysis
										</li>
										<li class="active">
											<i class="material-icons md-24">check</i>
											Data analytics consulting
										</li>
										<li class="active">
											<i class="material-icons md-24">check</i>
											Data analytics implementation
										</li>
										<li class="active">
											<i class="material-icons md-24">check</i>
											Data analytics modernization
										</li>
                                        <li class="active">
											<i class="material-icons md-24">check</i>
											Data management services
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