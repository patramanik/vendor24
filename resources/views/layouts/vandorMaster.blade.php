<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="{{ asset('assets/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!--Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/css/styles.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset(assets/vendor/bootstrap-icons/bootstrap-icons.css)}}" rel="stylesheet">
  <link href="{{asset(assets/vendor/aos/aos.css)}}" rel="stylesheet">
  <link href="{{asset(assets/vendor/glightbox/css/glightbox.min.css)}}" rel="stylesheet">
  <link href="a{{asset(ssets/vendor/swiper/swiper-bundle.min.css)}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{asset(assets/css/main.css)}}" rel="stylesheet">

</head>

<body>
    @include('layouts.inc.admin-navbar')
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <main>
                @yield('content')
            </main>
            @include('layouts.inc.admin-footer')
        </div>

    </div>
    <!-- Scripts -->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/jquery/jquery.min.js') }}"></script>

     <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  
  <script src="{{asset(assets/vendor/php-email-form/validate.js)}}"></script>
  <script src="{{asset(assets/vendor/aos/aos.js)}}"></script>
  <script src="{{asset(assets/vendor/glightbox/js/glightbox.min.js)}}"></script>
  <script src="{{asset(assets/vendor/swiper/swiper-bundle.min.js)}}"></script>
  <script src="{{asset(assets/vendor/waypoints/noframework.waypoints.js)}}"></script>
  <script src="{{asset(assets/vendor/imagesloaded/imagesloaded.pkgd.min.js)}}"></script>
  <script src="{{asset(assets/vendor/isotope-layout/isotope.pkgd.min.js)}}"></script>

  <!-- Main JS File -->
  <script src="{{asset(assets/js/main.js)}}"></script>
</body>

</html>
