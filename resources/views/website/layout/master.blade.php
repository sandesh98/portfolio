<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sandesh Boedhoe</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" type="text/css" href="{{ asset('website/css/animsition.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('website/css/core.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('website/css/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('website/css/elements.css') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('website/images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('website/images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('website/images/favicon/favicon-16x16.png') }}">
</head>
<body>
<div id="wrapper" class="animsition">
    @include('website.layout.loader')
    @include('website.layout.navbar')
    @yield('main')
</div>
<script src="{{ asset('website/js/vendor.js') }}"></script>
<script src="{{ asset('website/js/functions.js') }}"></script>
<script src="{{ asset('website/modules/titan-slider/titan-slider.js') }}"></script>
<script src="{{ asset('website/modules/tera-lightbox/tera-lightbox.js') }}"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-138942259-1"></script>
<script src="{{ asset('website/js/custom.js') }}"></script>
@stack('script')
</body>
</html>