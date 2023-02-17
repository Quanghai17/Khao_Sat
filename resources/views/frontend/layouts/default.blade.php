@php
    $lang = app()->getLocale();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eduplan HTML-5 Template</title>
    <!-- favicon -->
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}" sizes="20x20" type="image/png">
    <!-- animate -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <!-- Nice Select -->
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <!-- Odomiters css -->
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.css') }}">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- Responsive Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />


</head>

<body>

    <main class="page-wrapper">
        @include('frontend.layouts.partials.header')

        @yield('content')

        @include('frontend.layouts.partials.footer')
    </main>
    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    <!-- back to top area end -->

    <!-- Jquery Js -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- magnific popup -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.js') }}"></script>
    <!-- wow -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <!-- Nice Select -->
    <script src="{{ asset('assets/js/jquery.nice-select.js') }}"></script>
    <!-- countdown -->
    <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
    <!-- Odomiters -->
    <script src="{{ asset('assets/js/odometer.min.js') }}"></script>
    <!-- Viewport Js -->
    <script src="{{ asset('assets/js/viewport.jquery.js') }}"></script>
    <!-- slick Js -->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
