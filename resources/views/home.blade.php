@extends('layouts.main')

@section('content')
<!-- Begin intro -->
<div class="section-bg intro">
    <div class="intro-slider flickity-dots-absolute" data-flickity='{ "bgLazyLoad": 1, "bgLazyLoad": true, "fade": true, "prevNextButtons": false }'>
        <div class="intro-item" data-flickity-bg-lazyload="{{asset('assets/img/intro-img1.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="intro-content">
                            <div class="section-heading shm-none">
                                <h1>IT Solution for Your Business</h1>
                                <p class="section-desc">The template you will be able to create a site for your business. The template has many different blocks from which you can create your own unique site.</p>
                            </div>
                            <div class="wrap-btn intro-btns">
                                <a href="ui.html" class="btn btn-with-icon btn-small ripple">
                                    <span>UI elements</span>
                                    <svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9">
                                        <use xlink:href="{{asset('assets/img/sprite.svg#arrow-right')}}"></use>
                                    </svg>
                                </a>
                                <a href="contact-us.html" class="btn btn-with-icon btn-border btn-small ripple">
                                    <span>Get in Touch</span>
                                    <svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9">
                                        <use xlink:href="{{asset('assets/img/sprite.svg#arrow-right')}}"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro-item" data-flickity-bg-lazyload="assets/img/intro-img2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="intro-content">
                            <div class="section-heading shm-none">
                                <h2>IT Solution for Your Business</h2>
                                <p class="section-desc">Since our establishment, we have been delivering high-quality and sustainable software solutions for corporate business purposes.</p>
                            </div>
                            <div class="wrap-btn intro-btns">
                                <a href="ui.html" class="btn btn-with-icon btn-small ripple">
                                    <span>UI elements</span>
                                    <svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9">
                                        <use xlink:href="assets/img/sprite.svg#arrow-right"></use>
                                    </svg>
                                </a>
                                <a href="contact-us.html" class="btn btn-with-icon btn-border btn-small ripple">
                                    <span>Get in Touch</span>
                                    <svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9">
                                        <use xlink:href="assets/img/sprite.svg#arrow-right"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro-item" data-flickity-bg-lazyload="assets/img/intro-img3.jpg">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="intro-content">
                            <div class="section-heading shm-none">
                                <h2>IT Solution for Your Business</h2>
                                <p class="section-desc">The template you will be able to create a site for your business. The template has many different blocks from which you can create your own unique site.</p>
                            </div>
                            <div class="wrap-btn intro-btns">
                                <a href="ui.html" class="btn btn-with-icon btn-small ripple">
                                    <span>UI elements</span>
                                    <svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9">
                                        <use xlink:href="assets/img/sprite.svg#arrow-right"></use>
                                    </svg>
                                </a>
                                <a href="contact-us.html" class="btn btn-with-icon btn-border btn-small ripple">
                                    <span>Get in Touch</span>
                                    <svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9">
                                        <use xlink:href="assets/img/sprite.svg#arrow-right"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- End intro -->

<!-- Begin services -->
<section class="section services">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading heading-center">
                    <div class="section-subheading">Areas what we serv</div>
                    <h2>Our Services</h2>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 item">
                <!-- Begin services item -->
                <a href="single-services.html" class="services-item item-style">
                    <div class="services-item-ico">
                        <i class="material-icons material-icons-outlined md-48">settings</i>
                    </div>
                    <div class="services-item-ico-bg">
                        <i class="material-icons material-icons-outlined">settings</i>
                    </div>
                    <h4 class="services-item-title">Corporate Solution</h4>
                    <div class="services-item-desc">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</div>
                </a><!-- End services item -->
            </div>
            <div class="col-lg-4 col-md-6 col-12 item">
                <!-- Begin services item -->
                <a href="single-services.html" class="services-item item-style">
                    <div class="services-item-ico">
                        <i class="material-icons material-icons-outlined md-48">perm_phone_msg</i>
                    </div>
                    <div class="services-item-ico-bg">
                        <i class="material-icons material-icons-outlined">perm_phone_msg</i>
                    </div>
                    <h4 class="services-item-title">Call Center Solutions</h4>
                    <div class="services-item-desc">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it.</div>
                </a><!-- End services item -->
            </div>
            <div class="col-lg-4 col-md-12 col-12 item">
                <!-- Begin services item -->
                <a href="single-services.html" class="services-item item-style">
                    <div class="services-item-ico">
                        <i class="material-icons material-icons-outlined md-48">cloud_download</i>
                    </div>
                    <div class="services-item-ico-bg">
                        <i class="material-icons material-icons-outlined">cloud_download</i>
                    </div>
                    <h4 class="services-item-title">Cloud Development</h4>
                    <div class="services-item-desc">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</div>
                </a><!-- End services item -->
            </div>
            <div class="col-12">
                <div class="section-btns justify-content-center">
                    <a href="services.html" class="btn btn-with-icon btn-w240 ripple">
                        <span>See All Services</span>
                        <svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9">
                            <use xlink:href="assets/img/sprite.svg#arrow-right"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section><!-- End services -->

<!-- Begin advantages -->
<section class="section section-bg">
    <div class="container">
        <div class="row items">
            <div class="col-12">
                <div class="section-heading heading-center">
                    <div class="section-subheading">some reasons</div>
                    <h2>Why Choose Us</h2>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 item">
                <!-- Begin choose us item -->
                <div class="advantages-item">
                    <div class="advantages-item-count">01</div>
                    <div class="advantages-item-info">
                        <h4 class="advantages-item-title">High Quality Hardware</h4>
                        <div class="advantages-item-desc">
                            <p>We use top-notch hardware to develop the most efficient apps for our customers</p>
                        </div>
                    </div>
                </div><!-- End choose us item -->
            </div>
            <div class="col-lg-4 col-md-6 col-12 item">
                <!-- Begin choose us item -->
                <div class="advantages-item">
                    <div class="advantages-item-count">02</div>
                    <div class="advantages-item-info">
                        <h4 class="advantages-item-title">Dedicated 24\7 Support</h4>
                        <div class="advantages-item-desc">
                            <p>You can rely on our 24/7 tech support that will gladly solve any app issue you may have.</p>
                        </div>
                    </div>
                </div><!-- End choose us item -->
            </div>
            <div class="col-lg-4 col-md-6 col-12 item">
                <!-- Begin choose us item -->
                <div class="advantages-item">
                    <div class="advantages-item-count">03</div>
                    <div class="advantages-item-info">
                        <h4 class="advantages-item-title">30-Day Money-back Guarantee</h4>
                        <div class="advantages-item-desc">
                            <p>If you are not satisfied with our apps, we will return your money in the first 30 days.</p>
                        </div>
                    </div>
                </div><!-- End choose us item -->
            </div>
            <div class="col-lg-4 col-md-6 col-12 item">
                <!-- Begin choose us item -->
                <div class="advantages-item">
                    <div class="advantages-item-count">04</div>
                    <div class="advantages-item-info">
                        <h4 class="advantages-item-title">Agile and Fast Working Style</h4>
                        <div class="advantages-item-desc">
                            <p>This type of approach to our work helps our specialists to quickly develop better apps.</p>
                        </div>
                    </div>
                </div><!-- End choose us item -->
            </div>
            <div class="col-lg-4 col-md-6 col-12 item">
                <!-- Begin choose us item -->
                <div class="advantages-item">
                    <div class="advantages-item-count">05</div>
                    <div class="advantages-item-info">
                        <h4 class="advantages-item-title">Some Apps <br> are Free</h4>
                        <div class="advantages-item-desc">
                            <p>We also develop free apps that can be downloaded online without any payments.</p>
                        </div>
                    </div>
                </div><!-- End choose us item -->
            </div>
            <div class="col-lg-4 col-md-6 col-12 item">
                <!-- Begin choose us item -->
                <div class="advantages-item">
                    <div class="advantages-item-count">06</div>
                    <div class="advantages-item-info">
                        <h4 class="advantages-item-title">High Level of Usability</h4>
                        <div class="advantages-item-desc">
                            <p>All our products have high usability allowing users to easily operate the apps.</p>
                        </div>
                    </div>
                </div><!-- End choose us item -->
            </div>
        </div>
    </div>
</section><!-- End advantages -->

<!-- Begin counter section -->
<section class="section">
    <div class="container">
        <div class="row spincrement-container">
            <div class="col-xl-5 offset-xl-2 col-lg-6 offset-lg-1 col-12">
                <div class="main-counter">
                    <div class="main-counter-item">
                        <div class="main-counter-item-center">
                            <div>
                                <div class="main-counter-numb spincrement" data-from="0" data-to="10">0</div>
                                <div class="main-counter-title">Years <br> Of Experience</div>
                            </div>
                        </div>
                        <div class="main-counter-item-circ"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 offset-xl-1 col-lg-3 offset-lg-1 col-12 counter-items items">
                <div class="counter-item item">
                    <div class="counter-item-numb"><span class="spincrement" data-from="0" data-to="2">0</span>K</div>
                    <h4 class="counter-item-title">Аpps Developed</h4>
                </div>
                <div class="counter-item item">
                    <div class="counter-item-numb spincrement" data-from="0" data-to="40">0</div>
                    <h4 class="counter-item-title">Consultans</h4>
                </div>
                <div class="counter-item item">
                    <div class="counter-item-numb spincrement" data-from="0" data-to="160">0</div>
                    <h4 class="counter-item-title">Employers</h4>
                </div>
            </div>
        </div>
    </div>
</section><!-- End counter section -->

<!-- Begin latest projects -->
<section class="section section-projects section-overflow-hidden section-bg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading heading-center">
                    <div class="section-subheading">Our works</div>
                    <h2>Latest Projects</h2>
                </div>
            </div>
            <div class="col-12">
                <div class="section-nav">
                    <ul class="section-nav-list project-nav-list">
                        <li class="hover-link active" data-filter="*" data-title="All"><span>All</span></li>
                        <li class="hover-link" data-filter=".project-mobile-apps" data-title="MOBILE APPS"><span>MOBILE APPS</span></li>
                        <li class="hover-link" data-filter=".project-custom-software" data-title="CUSTOM SOFTWARE"><span>CUSTOM SOFTWARE</span></li>
                        <li class="hover-link" data-filter=".project-qa-testing" data-title="QA & TESTING"><span>QA & TESTING</span></li>
                        <li class="hover-link" data-filter=".project-ux-design" data-title="UX AND DESIGN"><span>UX AND DESIGN</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row" id="projects-container">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 item project-col project-ux-design">
                <!-- Begin project item -->
                <div class="project-item">
                    <div class="project-item-card project-item-card-front">
                        <img data-src="assets/img/project-img-1.jpg" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                    </div>
                    <div class="project-item-card project-item-card-back">
                        <div class="project-item-card-center">
                            <h5 class="project-item-title">MPlanner</h5>
                            <div class="project-item-desc">
                                <p>We work hard on every app to deliver top-notch features with great UI that you won’t find anywhere else.</p>
                            </div>
                            <div class="wrapp-btn-circl-arrow justify-content-center">
                                <a href="single-project.html" class="btn-circl-arrow btn-circl-arrow-white">
                                    <svg viewBox="0 0 13 9" width="13" height="9" width="13px" height="9px">
                                        <use xlink:href="assets/img/sprite.svg#arrow-right"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- End project item -->
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 item project-col">
                <!-- Begin project item -->
                <div class="project-item">
                    <div class="project-item-card project-item-card-front">
                        <img data-src="assets/img/project-img-2.jpg" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                    </div>
                    <div class="project-item-card project-item-card-back">
                        <div class="project-item-card-center">
                            <h5 class="project-item-title">WeatherNow</h5>
                            <div class="project-item-desc">
                                <p>We work hard on every app to deliver top-notch features with great UI that you won’t find anywhere else.</p>
                            </div>
                            <div class="wrapp-btn-circl-arrow justify-content-center">
                                <a href="single-project.html" class="btn-circl-arrow btn-circl-arrow-white">
                                    <svg viewBox="0 0 13 9" width="13" height="9" width="13px" height="9px">
                                        <use xlink:href="assets/img/sprite.svg#arrow-right"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- End project item -->
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 item project-col project-custom-software project-qa-testing">
                <!-- Begin project item -->
                <div class="project-item">
                    <div class="project-item-card project-item-card-front">
                        <img data-src="assets/img/project-img-3.jpg" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                    </div>
                    <div class="project-item-card project-item-card-back">
                        <div class="project-item-card-center">
                            <h5 class="project-item-title">Langer Messenger</h5>
                            <div class="project-item-desc">
                                <p>We work hard on every app to deliver top-notch features with great UI that you won’t find anywhere else.</p>
                            </div>
                            <div class="wrapp-btn-circl-arrow justify-content-center">
                                <a href="single-project.html" class="btn-circl-arrow btn-circl-arrow-white">
                                    <svg viewBox="0 0 13 9" width="13" height="9" width="13px" height="9px">
                                        <use xlink:href="assets/img/sprite.svg#arrow-right"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- End project item -->
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 item project-col project-mobile-apps">
                <!-- Begin project item -->
                <div class="project-item">
                    <div class="project-item-card project-item-card-front">
                        <img data-src="assets/img/project-img-4.jpg" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                    </div>
                    <div class="project-item-card project-item-card-back">
                        <div class="project-item-card-center">
                            <h5 class="project-item-title">Mobile Finance</h5>
                            <div class="project-item-desc">
                                <p>We work hard on every app to deliver top-notch features with great UI that you won’t find anywhere else.</p>
                            </div>
                            <div class="wrapp-btn-circl-arrow justify-content-center">
                                <a href="single-project.html" class="btn-circl-arrow btn-circl-arrow-white">
                                    <svg viewBox="0 0 13 9" width="13" height="9" width="13px" height="9px">
                                        <use xlink:href="assets/img/sprite.svg#arrow-right"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- End project item -->
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 item project-col project-qa-testing">
                <!-- Begin project item -->
                <div class="project-item">
                    <div class="project-item-card project-item-card-front">
                        <img data-src="assets/img/project-img-5.jpg" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                    </div>
                    <div class="project-item-card project-item-card-back">
                        <div class="project-item-card-center">
                            <h5 class="project-item-title">RaptCash</h5>
                            <div class="project-item-desc">
                                <p>We work hard on every app to deliver top-notch features with great UI that you won’t find anywhere else.</p>
                            </div>
                            <div class="wrapp-btn-circl-arrow justify-content-center">
                                <a href="single-project.html" class="btn-circl-arrow btn-circl-arrow-white">
                                    <svg viewBox="0 0 13 9" width="13" height="9" width="13px" height="9px">
                                        <use xlink:href="assets/img/sprite.svg#arrow-right"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- End project item -->
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 item project-col project-mobile-apps project-ux-design project-qa-testing">
                <!-- Begin project item -->
                <div class="project-item">
                    <div class="project-item-card project-item-card-front">
                        <img data-src="assets/img/project-img-6.jpg" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                    </div>
                    <div class="project-item-card project-item-card-back">
                        <div class="project-item-card-center">
                            <h5 class="project-item-title">Search by photo</h5>
                            <div class="project-item-desc">
                                <p>We work hard on every app to deliver top-notch features with great UI that you won’t find anywhere else.</p>
                            </div>
                            <div class="wrapp-btn-circl-arrow justify-content-center">
                                <a href="single-project.html" class="btn-circl-arrow btn-circl-arrow-white">
                                    <svg viewBox="0 0 13 9" width="13" height="9" width="13px" height="9px">
                                        <use xlink:href="assets/img/sprite.svg#arrow-right"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- End project item -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="section-btns justify-content-center">
                    <a href="index.html#!" class="btn btn-with-icon btn-w240 ripple">
                        <span>See All Projects</span>
                        <svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9">
                            <use xlink:href="assets/img/sprite.svg#arrow-right"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section><!-- End latest projects -->

<!-- Begin team -->
<section class="section">
    <div class="container">
        <div class="row items">
            <div class="col-12">
                <div class="section-heading heading-center">
                    <div class="section-subheading">Who we are</div>
                    <h2>Meet The Team</h2>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12 item">
                <!-- Begin team item -->
                <div class="team-item item-style">
                    <div class="team-item-img">
                        <img data-src="assets/img/team-img-1.jpg" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                    </div>
                    <div class="team-item-info">
                        <h4 class="team-item-title item-heading">Mary Lee</h4>
                        <div class="team-item-position">Software Developer</div>
                        <ul class="team-item-social-links">
                            <li>
                                <a href="index.html#!" title="Facebook">
                                    <svg viewBox="0 0 320 512">
                                        <use xlink:href="assets/img/sprite.svg#facebook-ico"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#!" title="Instagram">
                                    <svg viewBox="0 0 448 512">
                                        <use xlink:href="assets/img/sprite.svg#instagram-ico"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#!" title="LinkedIn">
                                    <svg viewBox="0 0 448 512">
                                        <use xlink:href="assets/img/sprite.svg#linkedin-in-ico"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#!" title="Twitter">
                                    <svg viewBox="0 0 512 512">
                                        <use xlink:href="assets/img/sprite.svg#twitter-ico"></use>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div><!-- End team item -->
            </div>
            <div class="col-lg-3 col-sm-6 col-12 item">
                <!-- Begin team item -->
                <div class="team-item item-style">
                    <div class="team-item-img">
                        <img data-src="assets/img/team-img-2.jpg" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                    </div>
                    <div class="team-item-info">
                        <h4 class="team-item-title item-heading">Ryan Wilson</h4>
                        <div class="team-item-position">CEO</div>
                        <ul class="team-item-social-links">
                            <li>
                                <a href="index.html#!" title="Facebook">
                                    <svg viewBox="0 0 320 512">
                                        <use xlink:href="assets/img/sprite.svg#facebook-ico"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#!" title="Instagram">
                                    <svg viewBox="0 0 448 512">
                                        <use xlink:href="assets/img/sprite.svg#instagram-ico"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#!" title="LinkedIn">
                                    <svg viewBox="0 0 448 512">
                                        <use xlink:href="assets/img/sprite.svg#linkedin-in-ico"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#!" title="Twitter">
                                    <svg viewBox="0 0 512 512">
                                        <use xlink:href="assets/img/sprite.svg#twitter-ico"></use>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div><!-- End team item -->
            </div>
            <div class="col-lg-3 col-sm-6 col-12 item">
                <!-- Begin team item -->
                <div class="team-item item-style">
                    <div class="team-item-img">
                        <img data-src="assets/img/team-img-3.jpg" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                    </div>
                    <div class="team-item-info">
                        <h4 class="team-item-title item-heading">Sam Robinson</h4>
                        <div class="team-item-position">Senior Developer</div>
                        <ul class="team-item-social-links">
                            <li>
                                <a href="index.html#!" title="Facebook">
                                    <svg viewBox="0 0 320 512">
                                        <use xlink:href="assets/img/sprite.svg#facebook-ico"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#!" title="Instagram">
                                    <svg viewBox="0 0 448 512">
                                        <use xlink:href="assets/img/sprite.svg#instagram-ico"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#!" title="LinkedIn">
                                    <svg viewBox="0 0 448 512">
                                        <use xlink:href="assets/img/sprite.svg#linkedin-in-ico"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#!" title="Twitter">
                                    <svg viewBox="0 0 512 512">
                                        <use xlink:href="assets/img/sprite.svg#twitter-ico"></use>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div><!-- End team item -->
            </div>
            <div class="col-lg-3 col-sm-6 col-12 item">
                <!-- Begin team item -->
                <div class="team-item item-style">
                    <div class="team-item-img">
                        <img data-src="assets/img/team-img-4.jpg" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                    </div>
                    <div class="team-item-info">
                        <h4 class="team-item-title item-heading">Jill Peterson</h4>
                        <div class="team-item-position">Senior Developer</div>
                        <ul class="team-item-social-links">
                            <li>
                                <a href="index.html#!" title="Facebook">
                                    <svg viewBox="0 0 320 512">
                                        <use xlink:href="assets/img/sprite.svg#facebook-ico"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#!" title="Instagram">
                                    <svg viewBox="0 0 448 512">
                                        <use xlink:href="assets/img/sprite.svg#instagram-ico"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#!" title="LinkedIn">
                                    <svg viewBox="0 0 448 512">
                                        <use xlink:href="assets/img/sprite.svg#linkedin-in-ico"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#!" title="Twitter">
                                    <svg viewBox="0 0 512 512">
                                        <use xlink:href="assets/img/sprite.svg#twitter-ico"></use>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div><!-- End team item -->
            </div>
        </div>
    </div>
</section><!-- End team -->

<!-- Begin reviews -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading heading-center">
                    <div class="section-subheading">Reviews from our clients</div>
                    <h2>What People Say</h2>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 item">
                <!-- Begin reviews item -->
                <div class="reviews-item item-style">
                    <div class="reviews-item-header">
                        <div class="reviews-item-img">
                            <img data-src="assets/img/auth-img-1.jpg" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                        </div>
                        <div class="reviews-item-info">
                            <h4 class="reviews-item-title item-heading">Catherine Williams</h4>
                            <div class="reviews-item-position">Regular client</div>
                        </div>
                    </div>
                    <div class="reviews-item-text">
                        <p>PathSoft offers a high caliber of resources skilled in Microsoft Azure.NET, mobile and Quality Assurance. They became our true business partners over the past three years.</p>
                    </div>
                </div><!-- End reviews item -->
            </div>
            <div class="col-lg-4 col-md-6 col-12 item">
                <!-- Begin reviews item -->
                <div class="reviews-item item-style">
                    <div class="reviews-item-header">
                        <div class="reviews-item-img">
                            <img data-src="assets/img/auth-img-2.jpg" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                        </div>
                        <div class="reviews-item-info">
                            <h4 class="reviews-item-title item-heading">Rupert Wood</h4>
                            <div class="reviews-item-position">Regular client</div>
                        </div>
                    </div>
                    <div class="reviews-item-text">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit consequuntur sequi eos beatae deleniti culpa cupiditate rerum. Similique, blanditiis rem perspiciatis fugiat voluptatem quas officiis ducimus reprehenderit.</p>
                    </div>
                </div><!-- End reviews item -->
            </div>
            <div class="col-lg-4 col-md-12 col-12 item">
                <!-- Begin reviews item -->
                <div class="reviews-item item-style">
                    <div class="reviews-item-header">
                        <div class="reviews-item-img">
                            <img data-src="assets/img/auth-img-3.jpg" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                        </div>
                        <div class="reviews-item-info">
                            <h4 class="reviews-item-title item-heading">Samantha Brown</h4>
                            <div class="reviews-item-position">Regular client</div>
                        </div>
                    </div>
                    <div class="reviews-item-text">
                        <p>We sincerely hope that each and every user entering our website will find exactly. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page.</p>
                    </div>
                </div><!-- End reviews item -->
            </div>
            <div class="col-12">
                <div class="section-btns justify-content-center">
                    <a href="testimonials.html" class="btn btn-with-icon btn-w240 ripple">
                        <span>See All Reviews</span>
                        <svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9">
                            <use xlink:href="assets/img/sprite.svg#arrow-right"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section><!-- End reviews -->

<!-- Begin latest news -->
<section class="section section-bg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading heading-center">
                    <div class="section-subheading">More info about</div>
                    <h2>Latest News</h2>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 item">
                <!-- Begin news item -->
                <article class="news-item item-style">
                    <a href="news-post.html" class="news-item-img">
                        <img data-src="assets/img/news-img-1.jpg" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                    </a>
                    <div class="news-item-info">
                        <div class="news-item-date">07/01/2021</div>
                        <h4 class="news-item-title item-heading">
                            <a href="news-post.html" title="Benefits Of Async/Await">Benefits Of Async/Await</a>
                        </h4>
                        <div class="news-item-desc">
                            <p>Asynchronous functions are a good and bad thing in JavaScript.</p>
                        </div>
                    </div>
                </article><!-- End news item -->
            </div>
            <div class="col-lg-4 col-md-6 col-12 item">
                <!-- Begin news item -->
                <article class="news-item item-style">
                    <a href="news-post.html" class="news-item-img">
                        <img data-src="assets/img/news-img-2.jpg" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                    </a>
                    <div class="news-item-info">
                        <div class="news-item-date">05/01/2021</div>
                        <h4 class="news-item-title item-heading">
                            <a href="news-post.html" title="Key Considerations Of IPaaS">Key Considerations Of IPaaS</a>
                        </h4>
                        <div class="news-item-desc">
                            <p>Digital transformation requires cloud appropriate adoption</p>
                        </div>
                    </div>
                </article><!-- End news item -->
            </div>
            <div class="col-lg-4 col-md-6 col-12 item">
                <!-- Begin news item -->
                <article class="news-item item-style">
                    <a href="news-post.html" class="news-item-img">
                        <img data-src="assets/img/news-img-3.jpg" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                    </a>
                    <div class="news-item-info">
                        <div class="news-item-date">01/01/2021</div>
                        <h4 class="news-item-title item-heading">
                            <a href="news-post.html" title="Hibernate Query Language">Hibernate Query Language</a>
                        </h4>
                        <div class="news-item-desc">
                            <p>In this tutorial, we will discuss the Hibernate Query Language. </p>
                        </div>
                    </div>
                </article><!-- End news item -->
            </div>
            <div class="col-12">
                <div class="section-btns justify-content-center">
                    <a href="news.html" class="btn btn-with-icon btn-w240 ripple">
                        <span>See All News</span>
                        <svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9">
                            <use xlink:href="assets/img/sprite.svg#arrow-right"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section><!-- End latest news -->
@endsection