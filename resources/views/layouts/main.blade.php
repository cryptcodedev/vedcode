<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">

    <title>BCM - IT Solution for You Business</title>

    <meta name="description" content="Description">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2">

    <link rel="icon" href="{{asset('assets/img/favicon/favicon.ico')}}" type="image/x-icon">

    <link rel="stylesheet" href="{{asset('assets/css/libs.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <link rel="stylesheet" href="{{asset('assets/libs/jquery-minicolors-master/jquery.minicolors.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/settings.css')}}">
    <link rel="preload" href="{{asset('assets/fonts/istok-web-v15-latin/istok-web-v15-latin-regular.woff2')}}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{asset('assets/fonts/istok-web-v15-latin/istok-web-v15-latin-700.woff2" as="font')}}" type="font/woff2" crossorigin>
    <link rel="preload" href="{{asset('assets/fonts/montserrat-v15-latin/montserrat-v15-latin-700.woff2" as="font')}}" type="font/woff2" crossorigin>
    <link rel="preload" href="{{asset('assets/fonts/montserrat-v15-latin/montserrat-v15-latin-600.woff2" as="font')}}" type="font/woff2" crossorigin>

    <link rel="preload" href="{{asset('assets/fonts/material-design-icons/material-design-icons.woff2')}}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{asset('assets/fonts/material-design-icons/material-design-icons-outlined.woff2')}}" as="font" type="font/woff2" crossorigin>

</head>

<body>

    <main class="main">

        <div class="main-inner">
         @include('shared.menu')
         @yield('content')
       </div>
         @include('shared.footer')
        

<!-- Begin сallback popup -->
<!-- <div id="сallback_popup" class="popup_style popup_style_sally open_popup" style="display:none;">
<div class="popup">
<div class="popup_content">
    <h4 class="popup_title">We will call you</h4>
    <form action="#!" method="post" class="сallback_popup_form">
        <input type="hidden" name="form_subject" value="Pop up form">
        <div class="form-field">
            <label for="popup-field-name" class="form-field-label">Your name</label>
            <input type="text" class="form-field-input" name="NameCallBack" value="" autocomplete="off" required="required" id="popup-field-name">
        </div>
        <div class="form-field">
            <label for="popup-field-phone" class="form-field-label">Your phone</label>
            <input type="tel" class="form-field-input mask-phone" name="PhoneCallBack" value="" autocomplete="off" required="required" id="popup-field-phone">
        </div>
        <div class="form-field form-field-checkbox">
            <div class="checkbox">
                <input type="checkbox" class="checkbox-input" name="checkboxLogin" id="checkbox-popup">
                <label for="checkbox-popup" class="checkbox-label">I agree to the transfer of personal data in accordance with the <a href="privacy-policy.html">Privacy Policy</a></label>
            </div>
        </div>
        <div class="form-btn form-btn-wide">
            <button type="submit" class="btn ripple"><span>Waiting for a Сall</span></button>
        </div>
    </form>
</div>
<div class="сallback_popup_close popup_close"><i class="material-icons md-24">close</i></div>
</div>
</div>End сallback popup -->

<!-- Begin cookie message -->
<!-- <div class="cookie-message">
<div class="cm-content">
<h5 class="cmc-title">Cookies</h5>
<p class="cmc-desc">We use cookies to understand how you use our site, to personalize content and to improve your experience. By continuing to use our site, you accept our use of cookies and revised. <a href="privacy-policy.html">Privacy Policy</a></p>
</div>
<div class="mc-btn btn btn-with-icon btn-small ripple">
<span>Accept cookies</span>
<svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9"><use xlink:href="assets/img/sprite.svg#arrow-right"></use></svg>
</div>
</div>End cookie message -->

</main><!-- End main -->

<script src="{{ asset('assets/libs/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('assets/libs/lozad/lozad.min.js')}}"></script>
<script src="{{ asset('assets/libs/device/device.js')}}"></script>
<script src="{{ asset('assets/libs/ScrollToFixed/jquery-scrolltofixed-min.js')}}"></script>
<script src="{{ asset('assets/libs/spincrement/jquery.spincrement.min.js')}}"></script>
<script src="{{ asset('assets/libs/jquery-popup-overlay-gh-pages/jquery.popupoverlay.js')}}"></script>
<script src="{{ asset('assets/libs/jquery-validation-1.19.3/jquery.validate.min.js')}}"></script>
<script src="{{ asset('assets/libs/autosize-master/autosize.min.js')}}"></script>
<script src="{{ asset('assets/libs/flickity/flickity.pkgd.min.js')}}"></script>
<script src="{{ asset('assets/libs/flickity/flickity-imagesloaded.js')}}"></script>
<script src="{{ asset('assets/libs/flickity/bg-lazyload.js')}}"></script>
<script src="{{ asset('assets/libs/flickity/flickity-fade.js')}}"></script>
<script src="{{ asset('assets/libs/isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{ asset('assets/libs/lightGallery/js/picturefill.min.js')}}"></script>
<script src="{{ asset('assets/libs/lightGallery/js/lightgallery-all.min.js')}}"></script>
<script src="{{ asset('assets/libs/lightGallery/js/jquery.mousewheel.min.js')}}"></script>
<script src="{{ asset('assets/libs/jquery-ui-range/jquery-ui.min.js')}}"></script>
<script src="{{ asset('assets/js/custom.js')}}"></script>

<script src="{{ asset('assets/libs/jquery-minicolors-master/jquery.minicolors.min.js')}}"></script>
<script src="{{ asset('assets/js/settings.js')}}"></script>

</body>

</html>