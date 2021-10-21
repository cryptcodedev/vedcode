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
								<li><a href="single-services.html#!">Call Center Solutions</a></li>
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
								<h1>Call Center Solutions</h1>
							</div>
							<div class="content">
								<div class="img-style">
									<img src="{{asset('assets/img/call-center.jpg')}}" alt="">
								</div>
								<p>IT support equipment such as printers, scanners, servers etc. are present in every office. From everyday support to taking care of complex tasks, there are plenty of IT products and services that are part of every office. Helping businesses with their technology remotely, or offsite has been a part of IT for decades. But like other areas of technology, remote IT support tools and techniques have improved over the years and many businesses find they can fulfill many of their day-to-day IT needs using remote support from an outsourced provider.</p>
								<p>Remote support from <q style="font-style: oblique;font-weight:600">Vedcode Technologies</q> allows organizations to receive high-quality IT support from just a click or phone call away. Remote support services are often a much more flexible option for clients looking to receive consistent IT help without an onsite presence.</p>
								<h5>Key Features</h5>
								<ul>
									<li>Helpdesk support from the Service Desk team</li>
									<li>Virus Protection</li>
									<li>24/7 System Monitoring and Resolution</li>
									<li>Monthly Executive Reports</li>
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
											Helpdesk support from the Service Desk team
										</li>
										<li class="active">
											<i class="material-icons md-24">check</i>
											Virus Protection
										</li>
										<li>
											<i class="material-icons md-24">check</i>
											24/7 System Monitoring and Resolution
										</li>
										<li>
											<i class="material-icons md-24">check</i>
											Monthly Executive Reports
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
											Helpdesk support from the Service Desk team
										</li>
										<li class="active">
											<i class="material-icons md-24">check</i>
											Virus Protection
										</li>
										<li class="active">
											<i class="material-icons md-24">check</i>
											24/7 System Monitoring and Resolution
										</li>
										<li>
											<i class="material-icons md-24">check</i>
											Monthly Executive Reports
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
											Helpdesk support from the Service Desk team
										</li>
										<li class="active">
											<i class="material-icons md-24">check</i>
											Virus Protection
										</li>
										<li class="active">
											<i class="material-icons md-24">check</i>
											24/7 System Monitoring and Resolution
										</li>
										<li class="active">
											<i class="material-icons md-24">check</i>
											Monthly Executive Reports
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