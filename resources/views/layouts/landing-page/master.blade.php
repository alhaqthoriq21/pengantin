<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ config('app.name') }}</title>

  <!-- Favicons -->
  <link href="{{ url('landing-page/img/favicon.png') }}" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ url('landing-page/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ url('landing-page/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ url('landing-page/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ url('landing-page/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ url('landing-page/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ url('landing-page/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ url('landing-page/css/style.css') }}" rel="stylesheet">

</head>

<body>

    @yield('content')


  <!-- Vendor JS Files -->
  <script src="{{ url('landing-page/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
  <script src="{{ url('landing-page/vendor/aos/aos.js') }}"></script>
  <script src="{{ url('landing-page/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ url('landing-page/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ url('landing-page/vendor/purecounter/purecounter.js') }}"></script>
  <script src="{{ url('landing-page/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ url('landing-page/vendor/glightbox/js/glightbox.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ url('landing-page/js/main.js') }}"></script>

</body>

</html>