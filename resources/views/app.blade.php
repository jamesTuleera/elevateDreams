<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>{{ env('APP_NAME') }}</title>

    <link rel="stylesheet" href="{{ asset('home_assets/app/css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('home_assets/app/css/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('home_assets/app/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('home_assets/app/css/textanimation.css') }}">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="assets/images/favico.png') }}">
    <link rel="apple-touch-icon-precomposed" href="assets/images/favico.png') }}">
    @vite('resources/js/app.js')
    @inertiaHead
  </head>
  <body>
    @inertia
  </body>

    <!-- Javascript -->
    <script src="{{ asset('home_assets/app/js/jquery.min.js') }}"></script>
    <script src="{{ asset('home_assets/app/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('home_assets/app/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('home_assets/app/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('home_assets/app/js/swiper.js') }}"></script>
    <script src="{{ asset('home_assets/app/js/plugin.js') }}"></script>
    <script src="{{ asset('home_assets/app/js/count-down.js') }}"></script>
    <script src="{{ asset('home_assets/app/js/countto.js') }}"></script>
    <script src="{{ asset('home_assets/app/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('home_assets/app/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('home_assets/app/js/price-ranger.js') }}"></script>
    <script src="{{ asset('home_assets/app/js/textanimation.js') }}"></script>
    <script src="{{ asset('home_assets/app/js/wow.min.js') }}"></script>
    <script src="{{ asset('home_assets/app/js/shortcodes.js') }}"></script>
    <script src="{{ asset('home_assets/app/js/main.js') }}"></script>
</html>
