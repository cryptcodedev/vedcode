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
                    <li><a href="{{url('services')}}">Services</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav><!-- End bread crumbs -->

<!-- Begin main content -->
<div class="section">
    <div class="container">
        <div class="row items">
            <div class="col-12">
                <div class="section-heading heading-center">
                    <div class="section-subheading">Areas what we serve</div>
                    <h1>Our Services</h1>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 item">
                <!-- Begin services item -->
                <a href="{{url('IT-consulting-service')}}" class="services-item item-style">
                    <div class="services-item-ico">
                        <i class="material-icons material-icons-outlined md-48">settings</i>
                    </div>
                    <div class="services-item-ico-bg">
                        <i class="material-icons material-icons-outlined">settings</i>
                    </div>
                    <h4 class="services-item-title">IT Consulting</h4>
                    <div class="services-item-desc">Information technology (IT) consulting services allow companies to implement IT strategies and solutions to achieve business-IT alignment..</div>
                </a><!-- End services item -->
            </div>
            <div class="col-lg-4 col-md-6 col-12 item">
                <!-- Begin services item -->
                <a href="{{url('call-center-solutions-service')}}" class="services-item item-style">
                    <div class="services-item-ico">
                        <i class="material-icons material-icons-outlined md-48">perm_phone_msg</i>
                    </div>
                    <div class="services-item-ico-bg">
                        <i class="material-icons material-icons-outlined">perm_phone_msg</i>
                    </div>
                    <h4 class="services-item-title">Call Center Solutions</h4>
                    <div class="services-item-desc">IT support equipment such as printers, scanners, servers etc. are present in every office. From everyday support to taking care of complex tasks..</div>
                </a><!-- End services item -->
            </div>
            <div class="col-lg-4 col-md-12 col-12 item">
                <!-- Begin services item -->
                <a href="{{url('cloud-development-service')}}" class="services-item item-style">
                    <div class="services-item-ico">
                        <i class="material-icons material-icons-outlined md-48">cloud_download</i>
                    </div>
                    <div class="services-item-ico-bg">
                        <i class="material-icons material-icons-outlined">cloud_download</i>
                    </div>
                    <h4 class="services-item-title">Cloud Development</h4>
                    <div class="services-item-desc"><q style="font-style: oblique;font-weight:600">Vedcode Technologies</q> covers the entire spectrum of cloud development capabilities, helping our clients create a holistic strategy..</div>
                </a><!-- End services item -->
            </div>
            <div class="col-lg-4 col-md-6 col-12 item">
                <!-- Begin services item -->
                <a href="{{url('IOS/MacOS-Apps-service')}}" class="services-item item-style">
                    <div class="services-item-ico">
                        <i class="material-icons material-icons-outlined md-48">laptop_mac</i>
                    </div>
                    <div class="services-item-ico-bg">
                        <i class="material-icons material-icons-outlined">laptop_mac</i>
                    </div>
                    <h4 class="services-item-title">IOS/MacOS Apps</h4>
                    <div class="services-item-desc">With a great deal of experience, our iOS app developers take advantage of such programming languages as Swift, Objective-C..</div>
                </a><!-- End services item -->
            </div>
            <div class="col-lg-4 col-md-6 col-12 item">
                <!-- Begin services item -->
                <a href="{{url('android-applications-service')}}" class="services-item item-style">
                    <div class="services-item-ico">
                        <i class="material-icons material-icons-outlined md-48">phone_android</i>
                    </div>
                    <div class="services-item-ico-bg">
                        <i class="material-icons material-icons-outlined">phone_android</i>
                    </div>
                    <h4 class="services-item-title">Android Applications</h4>
                    <div class="services-item-desc">We explore the market and  deep dive into your business to understand your needs and help you unlock the full potential with a top-notch..</div>
                </a><!-- End services item -->
            </div>
            <div class="col-lg-4 col-md-12 col-12 item">
                <!-- Begin services item -->
                <a href="{{url('data-analytics-service')}}" class="services-item item-style">
                    <div class="services-item-ico">
                        <i class="material-icons material-icons-outlined md-48">tv</i>
                    </div>
                    <div class="services-item-ico-bg">
                        <i class="material-icons material-icons-outlined">tv</i>
                    </div>
                    <h4 class="services-item-title">Data Analytics</h4>
                    <div class="services-item-desc">Data analytics is used to extract actionable insights from business data for quick and informed decision-making..</div>
                </a><!-- End services item -->
            </div>
        </div>
    </div>
</div><!-- End main content -->
@endsection
