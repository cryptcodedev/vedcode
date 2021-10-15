@extends('layouts.main')

@section('content')
<style>
 .intro-content-background{
    background: linear-gradient(to right, rgba(0, 0, 0, 0.5) 20%, rgba(0, 0, 0, 0.02)100%) 50% no-repeat;
    border-top-left-radius: 2em;
    border-bottom-left-radius: 2em;
 }  
 .white{
     color: white;
 } 
 .btn.btn-border{
     color: white;
 }
 .btn.btn-border::before {
    content: "";
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    border: 1px solid white;
    border-radius: white;
    overflow: hidden;
}
</style>

<!-- Begin intro -->
<div class="section-bg intro">
    <div class="intro-slider flickity-dots-absolute" data-flickity='{ "bgLazyLoad": 1, "bgLazyLoad": true, "fade": true, "autoPlay":7000 ,"prevNextButtons": false}'>
        <div class="intro-item" data-flickity-bg-lazyload="{{asset('assets/img/intro-img1.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col intro-content-background">
                        <div class="intro-content">
                            <div class="section-heading shm-none">
                                <h1>IT Solution for Your Business</h1>
                                <p class="section-desc white">The template you will be able to create a site for your business. The template has many different blocks from which you can create your own unique site.</p>
                            </div>
                            <div class="wrap-btn intro-btns">
                                <a href="{{url('about-us')}}" class="btn btn-with-icon btn-small ripple">
                                    <span>About Us</span>
                                    <svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9">
                                        <use xlink:href="{{asset('assets/img/sprite.svg#arrow-right')}}"></use>
                                    </svg>
                                </a>
                                <a href="{{url('contact-us')}}" class="btn btn-with-icon btn-border btn-small ripple">
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
                    <div class="col intro-content-background">
                        <div class="intro-content">
                            <div class="section-heading shm-none">
                                <h2>IT Solution for Your Business</h2>
                                <p class="section-desc white">Since our establishment, we have been delivering high-quality and sustainable software solutions for corporate business purposes.</p>
                            </div>
                            <div class="wrap-btn intro-btns">
                                <a href="{{url('about-us')}}" class="btn btn-with-icon btn-small ripple">
                                    <span>About Us</span>
                                    <svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9">
                                        <use xlink:href="{{asset('assets/img/sprite.svg#arrow-right')}}"></use>
                                    </svg>
                                </a>
                                <a href="{{url('contact-us')}}" class="btn btn-with-icon btn-border btn-small ripple">
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
        <div class="intro-item" data-flickity-bg-lazyload="assets/img/intro-img4.jpg">
            <div class="container">
                <div class="row">
                    <div class="col intro-content-background">
                        <div class="intro-content">
                            <div class="section-heading shm-none">
                                <h2>IT Solution for Your Business</h2>
                                <p class="section-desc white">The template you will be able to create a site for your business. The template has many different blocks from which you can create your own unique site.</p>
                            </div>
                            <div class="wrap-btn intro-btns">
                                <a href="{{url('about-us')}}" class="btn btn-with-icon btn-small ripple">
                                    <span>About Us</span>
                                    <svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9">
                                        <use xlink:href="{{asset('assets/img/sprite.svg#arrow-right')}}"></use>
                                    </svg>
                                </a>
                                <a href="{{url('contact-us')}}" class="btn btn-with-icon btn-border btn-small ripple">
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
    </div>
</div><!-- End intro -->

<!-- Begin services -->
<section class="section services">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading heading-center">
                    <div class="section-subheading">Areas what we serve</div>
                    <h2>Our Services</h2>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 item">
                <!-- Begin services item -->
                <a href="{{url('single-services')}}" class="services-item item-style">
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
                <a href="{{url('single-services')}}" class="services-item item-style">
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
                <a href="{{url('single-services')}}" class="services-item item-style">
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
                    <a href="{{url('services')}}" class="btn btn-with-icon btn-w240 ripple">
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
            <div class="col-xl-5 col-md-4 col-lg-4  col-12 my-auto">
                <div class="main-counter">
                    <div class="main-counter-item">
                        <div class="main-counter-item-center">
                            <div>
                                <div class="main-counter-numb spincrement" data-from="0" data-to="3">0</div>
                                <div class="main-counter-title">Years <br> Of Experience</div>
                            </div>
                        </div>
                        <div class="main-counter-item-circ"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 offset-xl-1 col-lg-5 offset-lg-1 col-12 counter-items items">
            <div class="row">
                <div class="col-lg-6">
                <div class="counter-item item">
                    <div class="counter-item-numb"><span class="spincrement" data-from="0" data-to="4">0</span></div>
                    <h4 class="counter-item-title">Аpps Developed</h4>
                </div>
                <div class="counter-item item">
                    <div class="counter-item-numb"><span class="spincrement" data-from="0" data-to="3">0</span></div>
                    <h4 class="counter-item-title">Systems Developed</h4>
                </div>
                <div class="counter-item item">
                    <div class="counter-item-numb"><span class="spincrement" data-from="0" data-to="5">0</span></div>
                    <h4 class="counter-item-title">Websites Developed</h4>
                </div>
                </div>
                <div class="col-lg-6">
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
        </div>
    </div>
</section><!-- End counter section -->

<!-- Begin team -->
<section class="section section-projects section-overflow-hidden section-bg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading heading-center">
                    <div class="section-subheading">Who we are</div>
                    <h2>Our Team</h2>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12 item">
                <!-- Begin team item -->
                <div class="team-item item-style">
                    <div class="team-item-img">
                        <img data-src="assets/img/team-img-7.png" class="lazy" src="data:image/gif" alt="">
                    </div>
                    <div class="team-item-info">
                        <h4 class="team-item-title item-heading">Mary Lee</h4>
                        <div class="team-item-position">Software Developer</div>
                        <!-- <ul class="team-item-social-links">
                            <li>
                                <a href="" title="Facebook">
                                    <svg viewBox="0 0 320 512">
                                        <use xlink:href="assets/img/sprite.svg"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="" title="Instagram">
                                    <svg viewBox="0 0 448 512">
                                        <use xlink:href="assets/img/sprite.svg#instagram-ico"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="" title="LinkedIn">
                                    <svg viewBox="0 0 448 512">
                                        <use xlink:href="assets/img/sprite.svg#linkedin-in-ico"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="" title="Twitter">
                                    <svg viewBox="0 0 512 512">
                                        <use xlink:href="assets/img/sprite.svg#twitter-ico"></use>
                                    </svg>
                                </a>
                            </li>
                        </ul> -->
                    </div>
                </div><!-- End team item -->
            </div>
            <div class="col-lg-3 col-sm-6 col-12 item">
                <!-- Begin team item -->
                <div class="team-item item-style">
                    <div class="team-item-img">
                        <img data-src="assets/img/team-img-8.png" class="lazy" src="data:image/gif" alt="">
                    </div>
                    <div class="team-item-info">
                        <h4 class="team-item-title item-heading">Ryan Wilson</h4>
                        <div class="team-item-position">CEO</div>
                        <!-- <ul class="team-item-social-links">
                            <li>
                                <a href="" title="Facebook">
                                    <svg viewBox="0 0 320 512">
                                        <use xlink:href="assets/img/sprite.svg#facebook-ico"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="" title="Instagram">
                                    <svg viewBox="0 0 448 512">
                                        <use xlink:href="assets/img/sprite.svg#instagram-ico"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="" title="LinkedIn">
                                    <svg viewBox="0 0 448 512">
                                        <use xlink:href="assets/img/sprite.svg#linkedin-in-ico"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="" title="Twitter">
                                    <svg viewBox="0 0 512 512">
                                        <use xlink:href="assets/img/sprite.svg#twitter-ico"></use>
                                    </svg>
                                </a>
                            </li>
                        </ul> -->
                    </div>
                </div><!-- End team item -->
            </div>
            <div class="col-lg-3 col-sm-6 col-12 item">
                <!-- Begin team item -->
                <div class="team-item item-style">
                    <div class="team-item-img">
                        <img data-src="assets/img/team-img-9.png" class="lazy" src="data:image/gif" alt="">
                    </div>
                    <div class="team-item-info">
                        <h4 class="team-item-title item-heading">Sam Robinson</h4>
                        <div class="team-item-position">Senior Developer</div>
                        <!-- <ul class="team-item-social-links">
                            <li>
                                <a href="" title="Facebook">
                                    <svg viewBox="0 0 320 512">
                                        <use xlink:href="assets/img/sprite.svg#facebook-ico"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="" title="Instagram">
                                    <svg viewBox="0 0 448 512">
                                        <use xlink:href="assets/img/sprite.svg#instagram-ico"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="" title="LinkedIn">
                                    <svg viewBox="0 0 448 512">
                                        <use xlink:href="assets/img/sprite.svg#linkedin-in-ico"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="" title="Twitter">
                                    <svg viewBox="0 0 512 512">
                                        <use xlink:href="assets/img/sprite.svg#twitter-ico"></use>
                                    </svg>
                                </a>
                            </li>
                        </ul> -->
                    </div>
                </div><!-- End team item -->
            </div>
            <div class="col-lg-3 col-sm-6 col-12 item">
                <!-- Begin team item -->
                <div class="team-item item-style">
                    <div class="team-item-img">
                        <img data-src="assets/img/team-img-7.png" class="lazy" src="data:image/gif" alt="">
                    </div>
                    <div class="team-item-info">
                        <h4 class="team-item-title item-heading">Jill Peterson</h4>
                        <div class="team-item-position">Senior Developer</div>
                        <!-- <ul class="team-item-social-links">
                            <li>
                                <a href="" title="Facebook">
                                    <svg viewBox="0 0 320 512">
                                        <use xlink:href="assets/img/sprite.svg#facebook-ico"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="" title="Instagram">
                                    <svg viewBox="0 0 448 512">
                                        <use xlink:href="assets/img/sprite.svg#instagram-ico"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="" title="LinkedIn">
                                    <svg viewBox="0 0 448 512">
                                        <use xlink:href="assets/img/sprite.svg#linkedin-in-ico"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="" title="Twitter">
                                    <svg viewBox="0 0 512 512">
                                        <use xlink:href="assets/img/sprite.svg#twitter-ico"></use>
                                    </svg>
                                </a>
                            </li>
                        </ul> -->
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
                            <img data-src="assets/img/auth-img-1.jpg" class="lazy" src="data:image/gif" alt="">
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
                            <img data-src="assets/img/auth-img-2.jpg" class="lazy" src="data:image/gif" alt="">
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
                            <img data-src="assets/img/auth-img-3.jpg" class="lazy" src="data:image/gif" alt="">
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
            <!-- <div class="col-12">
                <div class="section-btns justify-content-center">
                    <a href="testimonials.html" class="btn btn-with-icon btn-w240 ripple">
                        <span>See All Reviews</span>
                        <svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9">
                            <use xlink:href="assets/img/sprite.svg#arrow-right"></use>
                        </svg>
                    </a>
                </div>
            </div> -->
        </div>
    </div>
</section><!-- End reviews -->
@endsection