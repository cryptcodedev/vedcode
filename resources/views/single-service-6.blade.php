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
								<li><a href="single-services.html#!">UX And Design</a></li>
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
								<h1>UX And Design</h1>
							</div>
							<div class="content">
								<div class="img-style">
									<img src="{{asset('assets/img/ux-design-1.jpg')}}" alt="">
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
								<h5>Key Features</h5>
								<ul>
									<li>High usability</li>
									<li>Improved performance</li>
									<li>Customizable interface</li>
									<li>Crossplatform support</li>
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
											Concept development
										</li>
										<li class="active">
											<i class="material-icons md-24">check</i>
											UI/UX design
										</li>
										<li>
											<i class="material-icons md-24">check</i>
											Configuration management
										</li>
										<li>
											<i class="material-icons md-24">check</i>
											Software quality assurance
										</li>
										<li>
											<i class="material-icons md-24">check</i>
											App integration
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
											Concept development
										</li>
										<li class="active">
											<i class="material-icons md-24">check</i>
											UI/UX design
										</li>
										<li class="active">
											<i class="material-icons md-24">check</i>
											Configuration management
										</li>
										<li>
											<i class="material-icons md-24">check</i>
											Software quality assurance
										</li>
										<li>
											<i class="material-icons md-24">check</i>
											App integration
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
											Concept development
										</li>
										<li class="active">
											<i class="material-icons md-24">check</i>
											UI/UX design
										</li>
										<li class="active">
											<i class="material-icons md-24">check</i>
											Configuration management
										</li>
										<li class="active">
											<i class="material-icons md-24">check</i>
											Software quality assurance
										</li>
										<li class="active">
											<i class="material-icons md-24">check</i>
											App integration
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

			<section class="section">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="section-heading heading-center">
								<h1>All Services</h1>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12 item">
							<!-- Begin services item -->
							<div class="services-image-item">
								<div class="services-image-item-card services-image-item-card-front">
									<img data-src="assets/img/services-img-1.jpg" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
								</div>
								<div class="services-image-item-card services-image-item-card-back">
									<div class="services-image-item-card-center">
										<h5 class="services-image-item-title">Corporate Solution</h5>
										<p class="services-image-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla expedita velit omnis quas officia dolore repudiandae? Dolorum, sed dolor? Incidunt, dolor.</p>
										<div class="wrapp-btn-circl-arrow justify-content-center">
											<a href="{{url('corporate-solution-service')}}" class="btn-circl-arrow btn-circl-arrow-white">
												<span class="btn-circl-arrow-text">Go to service</span>
												<svg viewBox="0 0 13 9" width="13" height="9" width="13px" height="9px">
													<use xlink:href="assets/img/sprite.svg#arrow-right"></use>
												</svg>
											</a>
										</div>
									</div>
								</div>
							</div><!-- End services item -->
						</div>
						<div class="col-lg-4 col-md-6 col-12 item">
							<!-- Begin services item -->
							<div class="services-image-item">
								<div class="services-image-item-card services-image-item-card-front">
									<img data-src="assets/img/services-img-2.jpg" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
								</div>
								<div class="services-image-item-card services-image-item-card-back">
									<div class="services-image-item-card-center">
										<h5 class="services-image-item-title">Call Center Solutions</h5>
										<p class="services-image-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla expedita velit omnis quas officia dolore repudiandae? Dolorum, sed dolor? Incidunt, dolor.</p>
										<div class="wrapp-btn-circl-arrow justify-content-center">
											<a href="{{url('call-center-solutions-service')}}" class="btn-circl-arrow btn-circl-arrow-white">
												<span class="btn-circl-arrow-text">Go to service</span>
												<svg viewBox="0 0 13 9" width="13" height="9" width="13px" height="9px">
													<use xlink:href="assets/img/sprite.svg#arrow-right"></use>
												</svg>
											</a>
										</div>
									</div>
								</div>
							</div><!-- End services item -->
						</div>
						<div class="col-lg-4 col-md-6 col-12 item">
							<!-- Begin services item -->
							<div class="services-image-item">
								<div class="services-image-item-card services-image-item-card-front">
									<img data-src="assets/img/services-img-3.jpg" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
								</div>
								<div class="services-image-item-card services-image-item-card-back">
									<div class="services-image-item-card-center">
										<h5 class="services-image-item-title">Cloud Development</h5>
										<p class="services-image-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla expedita velit omnis quas officia dolore repudiandae? Dolorum, sed dolor? Incidunt, dolor.</p>
										<div class="wrapp-btn-circl-arrow justify-content-center">
											<a href="{{url('cloud-development-service')}}" class="btn-circl-arrow btn-circl-arrow-white">
												<span class="btn-circl-arrow-text">Go to service</span>
												<svg viewBox="0 0 13 9" width="13" height="9" width="13px" height="9px">
													<use xlink:href="assets/img/sprite.svg#arrow-right"></use>
												</svg>
											</a>
										</div>
									</div>
								</div>
							</div><!-- End services item -->
						</div>
						<div class="col-lg-4 col-md-6 col-12 item">
							<!-- Begin services item -->
							<div class="services-image-item">
								<div class="services-image-item-card services-image-item-card-front">
									<img data-src="assets/img/services-img-4.jpg" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
								</div>
								<div class="services-image-item-card services-image-item-card-back">
									<div class="services-image-item-card-center">
										<h5 class="services-image-item-title">IOS/MacOS Apps</h5>
										<p class="services-image-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla expedita velit omnis quas officia dolore repudiandae? Dolorum, sed dolor? Incidunt, dolor.</p>
										<div class="wrapp-btn-circl-arrow justify-content-center">
											<a href="{{url('IOS/MacOS-Apps-service')}}" class="btn-circl-arrow btn-circl-arrow-white">
												<span class="btn-circl-arrow-text">Go to service</span>
												<svg viewBox="0 0 13 9" width="13" height="9" width="13px" height="9px">
													<use xlink:href="assets/img/sprite.svg#arrow-right"></use>
												</svg>
											</a>
										</div>
									</div>
								</div>
							</div><!-- End services item -->
						</div>
						<div class="col-lg-4 col-md-6 col-12 item">
							<!-- Begin services item -->
							<div class="services-image-item">
								<div class="services-image-item-card services-image-item-card-front">
									<img data-src="assets/img/services-img-5.jpg" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
								</div>
								<div class="services-image-item-card services-image-item-card-back">
									<div class="services-image-item-card-center">
										<h5 class="services-image-item-title">Android Applications</h5>
										<p class="services-image-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla expedita velit omnis quas officia dolore repudiandae? Dolorum, sed dolor? Incidunt, dolor.</p>
										<div class="wrapp-btn-circl-arrow justify-content-center">
											<a href="{{url('android-applications-service')}}" class="btn-circl-arrow btn-circl-arrow-white">
												<span class="btn-circl-arrow-text">Go to service</span>
												<svg viewBox="0 0 13 9" width="13" height="9" width="13px" height="9px">
													<use xlink:href="assets/img/sprite.svg#arrow-right"></use>
												</svg>
											</a>
										</div>
									</div>
								</div>
							</div><!-- End services item -->
						</div>
						<div class="col-lg-4 col-md-6 col-12 item">
							<!-- Begin services item -->
							<div class="services-image-item">
								<div class="services-image-item-card services-image-item-card-front">
									<img data-src="assets/img/services-img-6.jpg" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
								</div>
								<div class="services-image-item-card services-image-item-card-back">
									<div class="services-image-item-card-center">
										<h5 class="services-image-item-title">UX And Design</h5>
										<p class="services-image-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla expedita velit omnis quas officia dolore repudiandae? Dolorum, sed dolor? Incidunt, dolor.</p>
										<div class="wrapp-btn-circl-arrow justify-content-center">
											<a href="{{url('ux-design-service')}}" class="btn-circl-arrow btn-circl-arrow-white">
												<span class="btn-circl-arrow-text">Go to service</span>
												<svg viewBox="0 0 13 9" width="13" height="9" width="13px" height="9px">
													<use xlink:href="assets/img/sprite.svg#arrow-right"></use>
												</svg>
											</a>
										</div>
									</div>
								</div>
							</div><!-- End services item -->
						</div>
					</div>
				</div>
			</section>
            @endsection