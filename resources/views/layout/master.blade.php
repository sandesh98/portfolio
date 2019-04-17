<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sandesh Boedhoe</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <link rel="icon" type="image/png" href="favicon.png?version=v1.0">
</head>
<body>
<div id="wrapper" class="animsition">
    @include('layout.loader')
    @include('layout.navbar')
    @yield('main')
</div>
<script src="{{ asset('js/main.js') }}"></script>
@stack('script')
</body>
</html>