<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ruiz - Watch Store HTML Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link
      href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@700&display=swap"
      rel="stylesheet"
    />
    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/vendor/simple-line-icons.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins/animation.css">
    <link rel="stylesheet" href="assets/css/plugins/slick.css">
    <link rel="stylesheet" href="assets/css/plugins/animation.css">
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="assets/css/plugins/fancy-box.css">
    <link rel="stylesheet" href="assets/css/plugins/jqueryui.min.css">

    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from avobe) -->
    <!--
    <script src="assets/js/vendor/vendor.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script>
    -->

    <!-- Main Style CSS (Please use minify version for better website load performance) -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--<link rel="stylesheet" href="assets/css/style.min.css">-->
    <style>
        .navWraper::after {
            width: 1px;
            height: 12px;
            content: '|';
            color: #d5d4d5;
            display: inline-block;
            position: absolute;
            top: 3px;
            right: 0;
        }
        
        .borderBotSolid{
            border-bottom: 2px solid black;
        }
        
        .logo {
            max-width: 10em;
            display: inline-block;
        }

        .content {
            min-height: 620px;
        }

        ul.footerMenu {
            text-align: center;
        }

        ul.footerMenu li {
            display: inline-block;
            margin: 0 20px;
            font-size: 100% !important;
        }

        ul.socialMedia {
            text-align: center;
        }

        ul.socialMedia li {
            display: inline-block;
            vertical-align: baseline;
            margin-right: 12px;
            margin-left: 12px;
            margin-bottom: 25px;
        }

        ul.socialMedia li a {
            height: 22px;
            display: block;
        }

        .footer-top{
            color: #000;
            border-top: 9px solid #000; 
        }
    </style>
    @stack('style')
</head>

<body>

        @include('layouts.store.header')
        <div class="content">
            @yield('content')
        </div>
        @include('layouts.store.footer')

    <!-- JS
============================================ -->

    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>

    <!-- Plugins JS -->
    <script src="assets/js/plugins/slick.min.js"></script>
    <script src="assets/js/plugins/jquery.nice-select.min.js"></script>
    <script src="assets/js/plugins/countdown.min.js"></script>
    <script src="assets/js/plugins/image-zoom.min.js"></script>
    <script src="assets/js/plugins/fancybox.js"></script>
    <script src="assets/js/plugins/scrollup.min.js"></script>
    <script src="assets/js/plugins/jqueryui.min.js"></script> 
    <script src="assets/js/plugins/ajax-contact.js"></script>

    <!-- Vendor & Plugins JS (Please remove the comment from below vendor.min.js & plugins.min.js for better website load performance and remove js files from avobe) -->
    <!--
<script src="assets/js/vendor/vendor.min.js"></script>
<script src="assets/js/plugins/plugins.min.js"></script>
-->

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

</body>
</html>