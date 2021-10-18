@extends('layouts.main')

@section('content')
<style>
    q{
        font-style: oblique;
    }
</style>

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
                    <li><a href="about-us.html#!">About us</a></li>
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
                    <div class="section-subheading">MORE INFO</div>
                    <h1>About us</h1>
                </div>
                <div class="content">
                    <div class="img-style">
                        <img src="assets/img/about-img.jpg" alt="">
                    </div>
                    <h2>Developing High-quality Apps</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page. It will tell you lots of interesting things about our company, its products and services, highly professional staff and happy customers. Our site design and navigation has been thoroughly thought out. The layout is aesthetically appealing, contains concise texts in order not to take your precious time. Text styling allows scanning the pages quickly. Site navigation is extremely intuitive and user-friendly. You will always know where you are now and will be able to skip from one page to another with a single mouse click. We use only trusted, verified content.</p>
                    <h3>Providing Reliable Software</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page. It will tell you lots of interesting things about our company, its products and services, highly professional staff and happy customers. Our site design and navigation has been thoroughly thought out. The layout is aesthetically appealing, contains concise texts in order not to take your precious time. Text styling allows scanning the pages quickly. Site navigation is extremely intuitive and user-friendly. You will always know where you are now and will be able to skip from one page to another with a single mouse click. We use only trusted, verified content.</p>
                    <h3>Supporting Our Clients</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
        </div>
    </div>
</div><!-- End main content -->

<!-- Begin advantages -->
<section class="section section-bg">
    <div class="container">
        <div class="row items">
            <div class="col-12">
                <div class="section-heading heading-center">
                    <div class="section-subheading">a roadmap for how to get there</div>
                    <h2>Vission & Mission</h2>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 item">
                <!-- Begin choose us item -->
                <div class="advantages-item">
                    <div class="advantages-item-count">01</div>
                    <div class="advantages-item-info">
                        <h4 class="advantages-item-title">Vission</h4>
                        <div class="advantages-item-desc">
                            <q>We use top-notch hardware to develop the most efficient apps for our customers</q>
                        </div>
                    </div>
                </div><!-- End choose us item -->
            </div>
            <div class="col-lg-4 col-md-6 col-12 item">
                <!-- Begin choose us item -->
                <div class="advantages-item">
                    <div class="advantages-item-count">02</div>
                    <div class="advantages-item-info">
                        <h4 class="advantages-item-title">Mission</h4>
                        <div class="advantages-item-desc">
                            <q>You can rely on our 24/7 tech support that will gladly solve any app issue you may have.</q>
                        </div>
                    </div>
                </div><!-- End choose us item -->
            </div>
            <div class="col-lg-4 col-md-6 col-12 item">
                <!-- Begin choose us item -->
                <div class="advantages-item">
                    <div class="advantages-item-count">03</div>
                    <div class="advantages-item-info">
                        <h4 class="advantages-item-title">Core Values</h4>
                        <div class="advantages-item-desc">
                            <q>If you are not satisfied with our apps, we will return your money in the first 30 days.</q>
                        </div>
                    </div>
                </div><!-- End choose us item -->
            </div>
        </div>
    </div>
</section><!-- End advantages -->

<!-- Begin our customers -->
<section class="section">
    <div class="container">
        <div class="row items">
            <div class="col-12">
                <div class="section-heading heading-center">
                    <div class="section-subheading">The best</div>
                    <h2>Our customers</h2>
                    <p class="section-desc">Our customers have disrupted industries, opened new markets, and made countless lives better. We are privileged to work with hundreds of future-thinking businesses, including many of the world’s top hardware, software, and consumer brands.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
                <!-- Begin brands item -->
                <div class="brands-item item-style">
                    <img data-src="assets/img/brands/circle.png" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                </div><!-- End brands item -->
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
                <!-- Begin brands item -->
                <div class="brands-item item-style">
                    <img data-src="assets/img/brands/codelab.png" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                </div><!-- End brands item -->
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
                <!-- Begin brands item -->
                <div class="brands-item item-style">
                    <img data-src="assets/img/brands/earth.png" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                </div><!-- End brands item -->
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
                <!-- Begin brands item -->
                <div class="brands-item item-style">
                    <img data-src="assets/img/brands/hexa.png" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                </div><!-- End brands item -->
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
                <!-- Begin brands item -->
                <div class="brands-item item-style">
                    <img data-src="assets/img/brands/lightai.png" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                </div><!-- End brands item -->
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
                <!-- Begin brands item -->
                <div class="brands-item item-style">
                    <img data-src="assets/img/brands/nirastate.png" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                </div><!-- End brands item -->
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
                <!-- Begin brands item -->
                <div class="brands-item item-style">
                    <img data-src="assets/img/brands/treva.png" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                </div><!-- End brands item -->
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
                <!-- Begin brands item -->
                <div class="brands-item item-style">
                    <img data-src="assets/img/brands/zootv.png" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                </div><!-- End brands item -->
            </div>
        </div>
    </div>
</section><!-- End our customers -->
@endsection