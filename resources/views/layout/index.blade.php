<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MRP UB</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="icon" href="img/logo MRP.png" type="image/png">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="{{ asset('lib/animate/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}">

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mrp/mrp-style.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/mrp/components/mrp-carousel-extended.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/mrp/components/mrp-carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mrp/components/mrp-navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mrp/components/mrp-mobile-nav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mrp/components/mrp-fasilitas.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mrp/components/mrp-program.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mrp/mrp-utils.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    {{-- @vite([]) --}}
</head>

<body>
    <!-- Spinner Start -->
    {{-- <div id="spinner" --}}
        {{-- class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"> --}}
        {{-- <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status"> --}}
            {{-- <span class="sr-only">Loading...</span> --}}
        {{-- </div> --}}
    {{-- </div> --}}
    <!-- Spinner End -->

    @include('partials.navbar')

    @yield('konten')

    @include('partials.footer')

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top" style="z-index: 2"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/mrp/mrp-mobile-navbar.js') }}"></script>
    <script src="{{ asset('js/mrp/mrp-carousel.js') }}"></script>
</body>

</html>
