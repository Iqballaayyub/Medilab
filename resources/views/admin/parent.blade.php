
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Medilab</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ url('admin/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ url('admin/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ url('admin/assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ url('admin/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ url('admin/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ url('admin/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ url('admin/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ url('admin/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ url('admin/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ url('admin/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ url('admin/assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

@include('admin.includes.header')  

<main id="main" class="main">

    @yield('content')
    @include('sweetalert::alert')

</main>

@include('admin.includes.footer')

</body>


<!-- Vendor JS Files -->
<script src="{{ url('admin/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ url('admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ url('admin/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ url('admin/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ url('admin/assets/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ url('admin/assets/js/main.js') }}"></script>

</html>