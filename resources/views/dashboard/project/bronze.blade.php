<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ToBeAbrideXCloudStudio</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/tobeabride.ico">
    <!-- Place favicon.ico in the root directory -->
    <!-- bootstrap.min.css -->
    <link rel="stylesheet" href="{{asset('assets/css/bronze/bootstrap.min.css')}}">
    <!-- magnific-popup.css -->
    <link rel="stylesheet" href="{{asset('assets/css/bronze/magnific-popup.css')}}">
    <!-- slicknav.min.css -->
    <!-- <link rel="stylesheet" href="{{asset('assets/css/bronze/slicknav.min.css')}}"> -->
    <!-- font-awesome.min.css -->
    <link rel="stylesheet" href="{{asset('assets/css/bronze/font-awesome.min.css')}}">
    <!-- owl.carousel.min.css -->
    <link rel="stylesheet" href="{{asset('assets/css/bronze/owl.carousel.min.css')}}">
    <!-- flaticon.css -->
    <link rel="stylesheet" href="{{asset('assets/css/bronze/flaticon.css')}}">
    <!-- swiper.min.css -->
    <link rel="stylesheet" href="{{asset('assets/css/bronze/swiper.min.css')}}">
    <!-- default-css.css -->
    <link rel="stylesheet" href="{{asset('assets/css/bronze/default-css.css')}}">
    <!-- style.css -->
    <link rel="stylesheet" href="{{asset('assets/css/bronze/style.css')}}">
    <!-- responsive.css -->
    <link rel="stylesheet" href="{{asset('assets/css/bronze/responsive.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/premium/icomoon.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bronze/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bronze/slick-theme.css')}}">
    <style>
    body,
    html {
        height: 100%;
        margin: 0;
    }

    .gateway {
        background-image: url('{{$calon->fotoHeader->foto_header}}');
        height: 100%;
        background-position: center;
        background-size: cover;
        position: relative;
        color: white;
        font-family: "Courier New", Courier, monospace;
        font-size: 25px;
    }

    .topleft {
        position: absolute;
        top: 0;
        left: 16px;
    }

    .bottomleft {
        position: absolute;
        bottom: 0;
        left: 16px;
    }

    .middle {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
    }

    hr {
        margin: auto;
        width: 40%;
    }

    body {
        margin-top: 20px;
        background: #eee;
    }

    @media (min-width: 0) {
        .g-mr-15 {
            margin-right: 1.07143rem !important;
        }
    }

    @media (min-width: 0) {
        .g-mt-3 {
            margin-top: 0.21429rem !important;
        }
    }

    .g-height-50 {
        height: 50px;
    }

    .g-width-50 {
        width: 50px !important;
    }

    @media (min-width: 0) {
        .g-pa-30 {
            padding: 2.14286rem !important;
        }
    }

    .g-bg-secondary {
        background-color: #fafafa !important;
    }

    .u-shadow-v18 {
        box-shadow: 0 5px 10px -6px rgba(0, 0, 0, 0.15);
    }

    .g-color-gray-dark-v4 {
        color: #777 !important;
    }

    .g-font-size-12 {
        font-size: 0.85714rem !important;
    }

    .media-comment {
        margin-top: 20px
    }

    .p {
        margin: 0;
    }

    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
    }

    .commentText p {
        margin: 0;
    }

    /*===========================
 count-down
=============================*/

    .count-down-area {
        background: url("{{$calon->fotoHeader->foto_countdown}}") no-repeat center center / cover;
        background-attachment: fixed;
        position: relative;
    }

    .count-down-area:before {
        content: "";
        width: 100%;
        height: 100%;
        position: absolute;
        background: #5e9a8e;
        opacity: .8;
        left: 0;
        top: 0;
    }

    .count-down-section {
        padding: 100px 0;
    }

    .count-down-section h2 {
        font-family: "Great Vibes", cursive;
        font-size: 60px;
        color: #fff;
        margin: 0;
    }

    @media (max-width: 1199px) {
        .count-down-section h2 {
            font-size: 62px;
            font-size: 3.44444rem;
        }
    }

    @media (max-width: 767px) {
        .count-down-section h2 {
            font-size: 50px;
            font-size: 2.77778rem;
        }
    }

    .count-down-section h2>span {
        font-size: 30px;
        display: block;
        margin-bottom: 0.6em;
    }

    .count-down-item2 h2>span {
        font-size: 24px;
        display: block;
        margin-bottom: 0.6em;
    }

    @media (max-width: 1199px) {
        .count-down-section h2>span {
            font-size: 25px;
            font-size: 1.38889rem;
        }
    }

    @media (max-width: 767px) {
        .count-down-section h2>span {
            font-size: 60px;
            font-size: 1.11111rem;
        }
    }


    .count-down-section #clock {
        color: #5e9a8e;
        overflow: hidden;
    }

    .count-down-section #clock>div {
        width: 18%;
        float: left;
        text-align: center;
        border: 1px solid #fff;
        color: #fff;
        padding: 20px 0;
    }

    @media (max-width: 767px) {
        .count-down-section #clock>div {
            width: calc(50% - 5px);
        }
    }

    .count-down-section #clock>div+div {
        margin-left: 2%;
    }

    @media (max-width: 767px) {
        .count-down-section #clock {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .count-down-section #clock>div {
            flex-basis: calc(100% * (1/2) - 15px);
            margin-bottom: 30px;
        }
    }

    .count-down-section #clock .box>div {
        font-size: 60px;
        font-weight: 600;
        line-height: 1em;
        font-family: 'Great Vibes', cursive;
    }

    @media (max-width: 1199px) {
        .count-down-section #clock .box>div {
            font-size: 60px;
        }
    }

    @media (max-width: 991px) {
        .count-down-section #clock .box>div {
            font-size: 40px;
            line-height: 1.3em;
        }
    }

    .count-down-section #clock .box span {
        font-size: 14px;
        text-transform: uppercase;
    }

    /*===============================
welcome-area
=================================*/

    .welcome-area {
        background: url("{{$calon->fotoBody->foto_pertama}}") no-repeat center center / cover;
        position: relative;
        background-attachment: fixed;
    }

    .welcome-area:before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #649e93;
        opacity: .9;
    }

    .welcome-content {
        text-align: center;
        padding: 100px 0;
    }

    .welcome-content h2 {
        font-size: 55px;
        color: #fff;
        font-family: 'Great Vibes', cursive;
    }

    .welcome-content p {
        font-size: 18px;
        padding: 20px 50px 30px;
        color: #fff;
        max-width: 700px;
        margin: auto;
    }

    .btn a {
        display: inline-block;
        background: #fff;
        color: #649e93;
        padding: 10px 38px;
        font-size: 18px;
        transition: all .3s;
        font-weight: 600;
    }

    .btn a:hover {
        background: #3f7267;
        color: #fff;
    }

    /*=============================
guest-area
===============================*/

    .guest-area {
        background: url("{{$calon->fotoBody->foto_kedua}}") no-repeat center center / cover;
        padding: 100px 0;
        position: relative;
        background-attachment: fixed;
        z-index: 1;
    }

    .guest-area:before {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: #649e93;
        opacity: .5;
        z-index: -1;
    }

    .guest-area.guest-2:before {
        background: #9a8c40;
    }

    .guest-wrap {
        background: rgba(255, 255, 255, .5);
        padding: 70px;
    }

    .section-title2.section-title3 h2:before {
        position: absolute;
        content: "";
        background: url(assets/img/bronze/section/3.png) no-repeat center center / cover;
        width: 40%;
        height: 53%;
        bottom: -9px;
        left: 31%;
    }

    .contact-form input {
        width: 100%;
        height: 45px;
        margin-top: 20px;
        padding-left: 10px;
        background: #fff;
        opacity: 1;
        border: none;
        border-radius: 5px;
    }

    .form-control {
        margin-top: 20px;
        font-size: 16px;
        background: #fff;
    }

    select.form-control:not([size]):not([multiple]) {
        height: 50px;
        border-radius: 5px;
        color: #666;
        font-size: 14px;
        -webkit-appearance: none;
        -ms-appearance: none;
        -o-appearance: none;
        appearance: none;
        -moz-appearance: none;
        background: #fff url(assets/img/bronze/select-icon.png) no-repeat calc(100% - 15px) center;
        position: relative;

    }

    .contact-textarea {
        width: 100%;
        height: 170px;
        margin-top: 20px;
        padding-left: 10px;
        padding-top: 10px;
        border: none;
        border-radius: 5px;
    }

    .section-title p {
        padding-top: 10px;
    }

    .contact-form button {
        background: none;
        border: none;
        padding: 5px 15px 8px;
        background: #649e93;
        color: #fff;
        border-radius: 5px;
        margin-top: 20px;
        cursor: pointer;
    }

    .guest-2 button#submit {
        background: #9a8c40;
    }

    .contact-form button:hover {
        background: #3f7267;
    }

    ::-webkit-input-placeholder {
        /* Chrome/Opera/Safari */

        color: #666;
        font-size: 14px;
    }

    ::-moz-placeholder {
        /* Firefox 19+ */

        color: #666;
        font-size: 14px;
    }

    :-ms-input-placeholder {
        /* IE 10+ */

        color: #666;
        font-size: 14px;
    }

    :-moz-placeholder {
        /* Firefox 18- */

        color: #666;
        font-size: 14px;
    }

    /* //comment area */
    /*=============================
comment-area
===============================*/

    .comment-area {
        background: url("{{$calon->fotoBody->foto_pertama}}") no-repeat center center / cover;
        padding: 100px 0;
        position: relative;
        background-attachment: fixed;
        z-index: 1;
    }

    .comment-area:before {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: #649e93;
        opacity: .5;
        z-index: -1;
    }

    .comment-area.guest-2:before {
        background: #9a8c40;
    }

    .comment-wrap {
        background: rgba(255, 255, 255, .5);
        padding: 70px;
    }

    .section-title2.section-title3 h2:before {
        position: absolute;
        content: "";
        background: url(assets/img/bronze/section/3.png) no-repeat center center / cover;
        width: 40%;
        height: 53%;
        bottom: -9px;
        left: 31%;
    }

    .contact-form input {
        width: 100%;
        height: 45px;
        margin-top: 20px;
        padding-left: 10px;
        background: #fff;
        opacity: 1;
        border: none;
        border-radius: 5px;
    }

    .form-control {
        margin-top: 20px;
        font-size: 16px;
        background: #fff;
    }

    select.form-control:not([size]):not([multiple]) {
        height: 50px;
        border-radius: 5px;
        color: #666;
        font-size: 14px;
        -webkit-appearance: none;
        -ms-appearance: none;
        -o-appearance: none;
        appearance: none;
        -moz-appearance: none;
        background: #fff url(assets/img/bronze/select-icon.png) no-repeat calc(100% - 15px) center;
        position: relative;

    }

    .contact-textarea {
        width: 100%;
        height: 170px;
        margin-top: 20px;
        padding-left: 10px;
        padding-top: 10px;
        border: none;
        border-radius: 5px;
    }

    .section-title p {
        padding-top: 10px;
    }

    .contact-form button {
        background: none;
        border: none;
        padding: 5px 15px 8px;
        background: #649e93;
        color: #fff;
        border-radius: 5px;
        margin-top: 20px;
        cursor: pointer;
    }

    .comment-2 button#submit {
        background: #9a8c40;
    }

    .contact-form button:hover {
        background: #3f7267;
    }

    ::-webkit-input-placeholder {
        /* Chrome/Opera/Safari */

        color: #666;
        font-size: 14px;
    }

    ::-moz-placeholder {
        /* Firefox 19+ */

        color: #666;
        font-size: 14px;
    }

    :-ms-input-placeholder {
        /* IE 10+ */

        color: #666;
        font-size: 14px;
    }

    :-moz-placeholder {
        /* Firefox 18- */

        color: #666;
        font-size: 14px;
    }

    /*===================================
couple-area
=====================================*/

    .section-title h2 {
        position: relative;
        font-size: 50px;
        font-family: 'Great Vibes', cursive;
        margin-bottom: 50px;
        color: #649e93;
    }

    .section-title h2:before {
        position: absolute;
        content: "";
        background: url(assets/img/bronze/section/2.png) no-repeat center center / cover;
        width: 26%;
        height: 22%;
        top: -13px;
        left: 37%;
    }

    .section-title h2:after {
        position: absolute;
        content: "";
        background: url(assets/img/bronze/section/1.png) no-repeat center center / cover;
        width: 26%;
        height: 22%;
        bottom: -13px;
        left: 37%;
    }

    .section-title4 h2:before {
        width: 50%;
        height: 22%;
        top: -13px;
        left: 25%;
    }

    .section-title4 h2:after {
        width: 50%;
        height: 22%;
        bottom: -13px;
        left: 26%;
    }


    .couple-item {
        padding-top: 50px;
    }

    .couple-img {
        overflow: hidden;
        border: 2px solid #5e9a8e;
        border-radius: 100%;
    }

    .couple-img:hover.couple-img img {
        transform: scale(1);
    }

    .couple-img img {
        border-radius: 100%;
        transform: scale(1.2);
        transition: all .3s;
    }

    .couple-wrap2 {
        background: #fefdf8;
    }

    .couple-wrap2.couple-s-3 {
        background: #f2fbf9;
    }

    .couple-wrap2 .couple-text i {
        color: #9a8c40;
        font-size: 20px;
    }

    .couple-wrap2.couple-s-3 .couple-text i {
        color: #5e9a8e;
    }

    .couple-content h4 {
        font-size: 21px;
        color: #5e9a8e;
    }

    .couple-content2 h4 {
        font-size: 21px;
        color: #9a8c40;
    }


    .couple-content p {
        padding: 0;
    }

    .couple-content2 p {
        padding: 0;
    }

    .couple-content {
        text-align: center;
    }

    .couple-text {
        padding: 23px 0;
    }

    .social-icon ol li a {
        font-size: 24px;
        color: #5e9a8e;
    }

    .social-icon ol li {
        padding: 0px 10px;
    }

    .couple-shape {
        padding-top: 100px;
    }

    .social-icon ol {
        justify-content: center;
    }

    .social-list2 ol li:last-child {
        margin-right: 0;
    }

    .couple-img2 {
        position: relative;
    }

    .couple-img2:before {
        position: absolute;
        content: "";
        left: 10px;
        top: 11px;
        width: 94%;
        height: 95%;
        background: url(assets/img/bronze/couple/4.png) no-repeat center center / cover;
    }

    .couple-img2:after {
        position: absolute;
        content: "";
        left: 10px;
        top: 11px;
        width: 94%;
        height: 95%;
        background: url(assets/img/bronze/couple/5.png) no-repeat center center / cover;
    }

    .couple-img3 {
        position: relative;
    }

    .couple-img3:before {
        position: absolute;
        content: "";
        left: 8px;
        top: 10px;
        width: 45%;
        height: 51%;
        background: url(assets/img/bronze/couple/6.png) no-repeat center center / cover;
    }

    .couple-img3:after {
        position: absolute;
        content: "";
        left: 52%;
        bottom: 10px;
        width: 45%;
        height: 51%;
        background: url(assets/img/bronze/couple/7.png) no-repeat center center / cover;
    }


    /*===================================
couple-area end
=====================================*/

    /* //gallery  */

    .gallery {
        position: relative;
        /* background: url("{{$calon->fotoBody->foto_kedua}}"); */
        background-size: cover;
        background-position: center;
    }

    .gallery:before {
        content: '';
        background: rgba(94, 154, 142, .5);
        display: block;
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
    }

    .gallery__slider {
        position: relative;
        margin-top: 80px;
    }

    @media only screen and (min-width: 992px) {
        .gallery__slider {
            margin-bottom: 100px;
        }
    }

    .gallery__slider .slick-list {
        margin-bottom: 30px;
    }

    .gallery__slider-num {
        position: absolute;
        bottom: -79px;
        display: -ms-flexbox;
        display: flex;
        left: 50%;
        -ms-transform: translateX(-50%);
        transform: translateX(-50%);
        font-size: 30px;
        font-family: georgia;
    }

    .gallery__flower-prlx-l {
        top: -150px;
    }

    .gallery__flower-prlx-r {
        bottom: -75px;
        right: 0;
    }

    div.parent {
        text-align: center;
    }

    ul {
        display: inline-block;
        text-align: left;
    }
    </style>
</head>

<body id="home">
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div class="preloader">
        <div class="hart-wrap">
            <div class="heart"></div>
        </div>
    </div>
    <!-- prealoader area end -->
    <!-- header-area start -->
    <header class="sticky-header">
        <div class="header-area header-area-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-11 col-sm-11 col-10">
                        <div class="logo">
                            <h1><a href="index.html">{{$calon->nick_pria}}<span><i class="fa fa-heart"
                                            aria-hidden="true"></i></span>{{$calon->nick_wanita}}</a></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-area end -->
    <!-- slider-area start -->
    @if($calon->fotoHeader->foto_header)
    <div class="slider-area slider-style-2 slider-two parallax qbootstrap-cover text-center center-bg"
        style="background-image:url({{$calon->fotoHeader->foto_header}});">
        @endif
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="single-slider swiper-slide">
                    <div class="container">
                        <div class="slider-content sd-default-content">
                            <div class="col-lg-12">
                                <span>WE’RE GETTING MARRIED</span>
                                <h4>{{$calon->nick_pria}} &amp; {{$calon->nick_wanita}}</h4>
                                <p>{{date("l jS F Y", strtotime($calon->akadNikah->tgl))}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider-area end -->
    <!-- couple-area start -->
    <div id="cuple" class="couple-area ptb--100">
        <div class="container">
            <div class="col-l2">
                <div class="section-title text-center">
                    <h2>Happy Couple</h2>
                </div>
            </div>
            <div class="couple-wrap">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 couple-single">
                        <div class="couple-wrap2 couple-s-3">
                            <div class="couple-img3">
                                <img class="center" src="{{$calon->foto_wanita}}" alt="">
                            </div>
                            <div class="couple-text">
                                <div class="couple-content">
                                    <h4>{{$calon->calon_wanita}}</h4>
                                    <p>Putri Dari</p>
                                    <p>Bpk. {{$calon->ayah_wanita}}</p>
                                    <p>Ibu {{$calon->ibu_wanita}}</p>
                                </div>
                                <div class="social-icon">
                                    <ol class="d-flex">
                                        <li><a href="https://www.instagram.com/{{$calon->sosmed_wanita}}/"><i
                                                    class="fa fa-instagram"></i></a></li>
                                        <!-- <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li> -->
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 couple-single">
                        @if($calon->fotoHeader->foto_countdown)
                        <div class="couple-img2">
                            <img src="{{$calon->fotoHeader->foto_countdown}}" alt="">
                        </div>
                        @endif
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 couple-single md-0">
                        <div class="couple-wrap2 couple-s-3">
                            <div class="couple-img3">
                                <img class="center" src="{{$calon->foto_pria}}" alt="">
                            </div>
                            <div class="couple-text">
                                <div class="couple-content">
                                    <h4>{{$calon->calon_pria}}</h4>
                                    <p>Putra Dari</p>
                                    <p>Bpk. {{$calon->ayah_pria}}</p>
                                    <p>Ibu {{$calon->ibu_pria}}</p>
                                </div>
                                <div class="social-icon">
                                    <ol class="d-flex">
                                        <li><a href="https://www.instagram.com/{{$calon->sosmed_pria}}/"><i
                                                    class="fa fa-instagram"></i></a></li>
                                        <!-- <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li> -->
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- couple-area end -->
    <!-- start count-down-section -->
    <div class="count-down-area count-down-area-sub">
        <section class="count-down-section section-padding parallax" data-speed="7">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <h2 class="big"><span>We Are Waiting For.....</span> The Big Day</h2>
                    </div>
                    <div class="col-12 col-md-8 ">
                        <div class="count-down-clock">
                            <div id="clock">
                                <h1 id="demo"></h1>
                                <p class="countdown" id="countdown">
                                    <span id="days"></span>
                                    <span id="hours"></span>
                                    <span id="minutes"></span>
                                    <span id="seconds"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
    </div>
    <!-- end count-down-section -->
    <!-- story area start -->
    <div id="story" class="story-area ptb--100">
        <div class="container">
            <div class="col-l2">
                <div class="section-title text-center">
                    <h2>Our Story</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="story clearfix">
                        <div class="story-top"></div>
                        <div class="content-wrapper">
                            <div class="item">
                                <div class="story-icon">
                                    <span class="flaticon-birds-in-love"></span>
                                </div>
                                <div class="story-content">
                                    <div class="image-wrap">
                                        <div class="single-image">
                                            @if($calon->loveStory->foto_firstmeet)
                                            <div>
                                                <img src="{{$calon->loveStory->foto_firstmeet}}" alt="">
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    <h2>First Meet</h2>
                                    <span class="date">{{$calon->loveStory->tgl_firstmeet}}</span>
                                    <p>{{$calon->loveStory->story_firstmeet}},</p>
                                    <!-- <div class="story-button">
                                        <a class="theme-btn" href="#" target="_blank" title="READ MORE">READ MORE</a>
                                    </div> -->
                                </div>
                            </div>
                            <div class="item">
                                <div class="story-icon">
                                    <span class="flaticon-birds-in-love"></span>
                                </div>
                                <div class="story-content">
                                    <div class="image-wrap">
                                        <div class="single-image">
                                            @if($calon->loveStory->foto_firstdate)
                                            <div>
                                                <img src="{{$calon->loveStory->foto_firstdate}}" alt="">
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    <h2>First Date</h2>
                                    <span class="date">{{$calon->loveStory->tgl_firstdate}}</span>
                                    <p>{{$calon->loveStory->story_firstdate}},</p>
                                    <!-- <div class="story-button">
                                        <a class="theme-btn" href="#" target="_blank" title="READ MORE">READ MORE</a>
                                    </div> -->
                                </div>
                            </div>
                            <div class="item">
                                <div class="story-icon">
                                    <span class="flaticon-birds-in-love"></span>
                                </div>
                                <div class="story-content">
                                    <div class="image-wrap">
                                        <div class="single-image">
                                            @if($calon->loveStory->foto_relationship)
                                            <div>
                                                <img src="{{$calon->loveStory->foto_relationship}}" alt="">
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    <h2>In Relationship</h2>
                                    <span class="date">{{$calon->loveStory->tgl_relationship}}</span>
                                    <p>{{$calon->loveStory->story_relationship}}</p>
                                    <!-- <div class="story-button">
                                        <a class="theme-btn" href="#" target="_blank" title="READ MORE">READ MORE</a>
                                    </div> -->
                                </div>
                            </div>
                            <div class="item">
                                <div class="story-icon">
                                    <span class="flaticon-birds-in-love"></span>
                                </div>
                                <div class="story-content">
                                    <div class="image-wrap">
                                        <div class="single-image">
                                            @if($calon->loveStory->foto_enganged)
                                            <div>
                                                <img src="{{$calon->loveStory->foto_enganged}}" alt="">
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    <h2>Engagement</h2>
                                    <span class="date">{{$calon->loveStory->tgl_enganged}}</span>
                                    <p>{{$calon->loveStory->story_enganged}}</p>
                                    <!-- <div class="story-button">
                                        <a class="theme-btn" href="#" target="_blank" title="READ MORE">READ MORE</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="story-bottom"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- story area end -->
    <!-- welcome area start-->
    <div class="welcome-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="welcome-content">
                        <h2>Welcome to our big day</h2>
                        <p>{{$calon->quotes->isi}}</p>
                        <p>{{$calon->quotes->judul}}</p>
                        <div class="btn"><a href="#Contact">RSVP</a></div>
                        <div class="btn"><a href="#Comment">COMMENT SECTION</a></div>
                        <!-- <div class="btn"><a class="popup-gmaps"
                                href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25211.21212385712!2d144.95275648773628!3d-37.82748510398018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0x5045675218ce7e0!2zTWVsYm91cm5lIFZJQyAzMDA0LCDgpoXgprjgp43gpp_gp43gprDgp4fgprLgpr_gpq_gprzgpr4!5e0!3m2!1sbn!2sbd!4v1503742051881">Location</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- welcome area end-->
    <!-- service-area start -->
    <div id="event" class="service-area ptb--100">
        <div class="container">
            <div class="col-l2">
                <div class="section-title text-center">
                    <h2>When & Where</h2>
                </div>
            </div>
            <div class="service-area-menu">
                <ul class="nav nav-tabs d-flex">
                    <li class="active"><a data-toggle="tab" href="#Akad">Akad Nikah</a></li>
                    <li><a data-toggle="tab" href="#Resepsi">Resepsi</a></li>
                    <!-- <li><a data-toggle="tab" href="#menu2">Wedding Dinner</a></li>
                    <li><a data-toggle="tab" href="#menu3">Reception Party</a></li> -->
                </ul>
                <div class="tab-content">
                    <div id="Akad" class="tab-pane fade show active">
                        <div class="Ceremony-wrap">
                            <div class="row">
                                <div class="col-lg-5">
                                    @if($calon->fotoBody->foto_pertama)
                                    <div class="ceromony-img">
                                        <img src="{{$calon->fotoBody->foto_pertama}}" alt="">
                                    </div>
                                    @endif
                                </div>
                                <div class="col-lg-7">
                                    <div class="ceromony-content">
                                        <h3>Akad Nikah</h3>
                                        <span>{{date("l jS F Y", strtotime($calon->akadNikah->tgl))}},
                                            {{$calon->akadNikah->waktu}} WIB</span>
                                        <span>{{$calon->akadNikah->tempat}}</span>
                                        <span>{{$calon->akadNikah->alamat}}</span>
                                        <!-- <p>It is a long established fact that a reader will be distracted by the
                                            readable content of a page when looking at its layout. The point of using
                                            Lorem Ipsum is that it has a normal </p> -->
                                        <a class="popup-gmaps"
                                            href="https://maps.google.com/?q={{$calon->akadNikah->google_loc}}">See
                                            Location</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="Resepsi" class="tab-pane fade">
                        <div class="Ceremony-wrap">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="ceromony-content ceromony-content2">
                                        <h3>Resepsi</h3>
                                        <span>{{date("l jS F Y", strtotime($calon->resepsi->tgl_rsp))}},
                                            {{$calon->resepsi->waktu_rsp}} WIB</span>
                                        <span>{{$calon->resepsi->tempat_rsp}}</span>
                                        <span>{{$calon->resepsi->alamat_rsp}}</span>
                                        <!-- <p>It is a long established fact that a reader will be distracted by the
                                            readable content of a page when looking at its layout. The point of using
                                            Lorem Ipsum is that it has a more-or-less normal </p> -->
                                        <a class="popup-gmaps"
                                            href="https://maps.google.com/?q={{$calon->resepsi->google_loc_rsp}}">See
                                            Location</a>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    @if($calon->fotoBody->foto_kedua)
                                    <div class="ceromony-img">
                                        <img src="{{$calon->fotoBody->foto_kedua}}" alt="">
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div id="menu2" class="tab-pane fade">
                        <div class="Ceremony-wrap">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="ceromony-img">
                                        <img src="assets\img\bronze\service\3.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="ceromony-content">
                                        <h3>Wedding Dinner</h3>
                                        <span>Sunday, 25 July 18, 9.00 AM-5.00 PM</span>
                                        <span>256 Apay Road,Califonia Bong, London</span>
                                        <p>It is a long established fact that a reader will be distracted by the
                                            readable content of a page when looking at its layout. The point of using
                                            Lorem Ipsum is that it has a more-or-less normal </p>
                                        <a class="popup-gmaps"
                                            href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25211.21212385712!2d144.95275648773628!3d-37.82748510398018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0x5045675218ce7e0!2zTWVsYm91cm5lIFZJQyAzMDA0LCDgpoXgprjgp43gpp_gp43gprDgp4fgprLgpr_gpq_gprzgpr4!5e0!3m2!1sbn!2sbd!4v1503742051881">See
                                            Location</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="menu3" class="tab-pane fade">
                        <div class="Ceremony-wrap">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="ceromony-content ceromony-content2">
                                        <h3>Reception Party</h3>
                                        <span>Sunday, 25 July 18, 9.00 AM-5.00 PM</span>
                                        <span>256 Apay Road,Califonia Bong, London</span>
                                        <p>It is a long established fact that a reader will be distracted by the
                                            readable content of a page when looking at its layout. The point of using
                                            Lorem Ipsum is that it has a more-or-less normal </p>
                                        <a class="popup-gmaps"
                                            href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25211.21212385712!2d144.95275648773628!3d-37.82748510398018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0x5045675218ce7e0!2zTWVsYm91cm5lIFZJQyAzMDA0LCDgpoXgprjgp43gpp_gp43gprDgp4fgprLgpr_gpq_gprzgpr4!5e0!3m2!1sbn!2sbd!4v1503742051881">See
                                            Location</a>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="ceromony-img">
                                        <img src="assets\img\bronze\service\2.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- service-area end -->
    <!--person-area start -->
    <!-- <div id="people" class="person-area pt--100 pb--70 pb-40">
        <div class="container">
            <div class="col-l2">
                <div class="section-title text-center">
                    <h2>Important persons</h2>
                </div>
            </div>
            <div class="person-item pu-0">
                <div class="row">
                    <div class="col-12">
                        <div class="person-title">
                            <h3>Bridesman</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="person-wrap">
                            <div class="person-img">
                                <img src="assets\img\bronze\person\1.jpg" alt="">
                                <div class="social-list">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="person-content">
                                <h3>Mr Abraham</h3>
                                <span>Best Friend</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="person-wrap">
                            <div class="person-img">
                                <img src="assets\img\bronze\person\2.jpg" alt="">
                                <div class="social-list">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="person-content">
                                <h3>Rohan Mithy</h3>
                                <span>Brother</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="person-wrap">
                            <div class="person-img">
                                <img src="assets\img\bronze\person\3.jpg" alt="">
                                <div class="social-list">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="person-content">
                                <h3>Lily Brown</h3>
                                <span>Sister</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="person-item person-item2">
                <div class="row">
                    <div class="col-12">
                        <div class="person-title text-right">
                            <h3>Bridesman</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="person-wrap">
                            <div class="person-img">
                                <img src="assets\img\bronze\person\5.jpg" alt="">
                                <div class="social-list">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="person-content">
                                <h3>Mr Abraham</h3>
                                <span>Best Friend</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="person-wrap">
                            <div class="person-img">
                                <img src="assets\img\bronze\person\6.jpg" alt="">
                                <div class="social-list">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="person-content">
                                <h3>Rohan Mithy</h3>
                                <span>Brother</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="person-wrap">
                            <div class="person-img">
                                <img src="assets\img\bronze\person\7.jpg" alt="">
                                <div class="social-list">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="person-content">
                                <h3>Lily Brown</h3>
                                <span>Sister</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!--person-area end -->
    <!-- Section Gallery -->
    <section id="gallery" class="gallery section text-center">
        <div class="container position-relative">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2>Our Gallery</h2>
                    </div>
                    <div class="gallery__slider">
                        <div class="slick-gallery slick mb-0 ">
                            @foreach($calon->fotoFooter as $data)
                            <div class="slider__item">
                                <img src="{{$data->foto}}" alt="slider">
                            </div>
                            @endforeach
                        </div>

                        <div class="gallery__slider-num d-none d-lg-flex">
                            <div class="gallery__slider-current pr-1"></div>
                            <div class="pr-1">from</div>
                            <div class="gallery__slider-all"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- gallery area start -->
    <!-- <div id="gallery" class="gallery-area pt--100 pb--70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2>Our Gallery</h2>
                    </div>
                </div> -->
    <!-- <div class="col-12">
                    <div class="gallery-menu text-center">
                        <button class="active" data-filter="*">All</button>
                        <button data-filter=".Pre-Wedding">Pre Wedding</button>
                        <button data-filter=".Enagagement">Enagagement</button>
                        <button data-filter=".Parties">Parties</button>
                    </div>
                </div> -->
    <!-- </div> -->
    <!-- <div class="row grid">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 grid-item Pre-Wedding">
                    <div class="gallery-single">
                        @foreach($calon->fotoFooter as $data)
                        <img src="{{$data->foto}}" alt="">
                        <div class="social-1st">
                            <ul>
                                <li><a href="{{$data->foto}}" class="expand-img"><i class="fa fa-search"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    @endforeach
                </div> -->
    <!-- <div class="col-lg-4 col-md-6 col-sm-6 col-12 grid-item Enagagement">
                    <div class="gallery-single">
                        <img src="assets\img\bronze\gallery\4.jpg" alt="">
                        <div class="social-1st">
                            <ul>
                                <li><a href="assets\img\bronze\gallery\4.jpg" class="expand-img"><i
                                            class="fa fa-search"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 col-sm-6 grid-item Pre-Wedding">
                    <div class="gallery-single">
                        <img src="assets\img\bronze\gallery\2.jpg" alt="">
                        <div class="social-1st">
                            <ul>
                                <li><a href="assets\img\bronze\gallery\2.jpg" class="expand-img"><i
                                            class="fa fa-search"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 col-sm-6 grid-item Parties">
                    <div class="gallery-single">
                        <img src="assets\img\bronze\gallery\3.jpg" alt="">
                        <div class="social-1st">
                            <ul>
                                <li> <a href="https://https://www.youtube.com/watch?v=Wxy80QvnMwA" data-type="iframe"
                                        class="expand-video">
                                        <i class="fa fa-play"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 col-sm-6 grid-item Enagagement Parties">
                    <div class="gallery-single">
                        <img src="assets\img\bronze\gallery\5.jpg" alt="">
                        <div class="social-1st">
                            <ul>
                                <li><a href="assets\img\bronze\gallery\5.jpg" class="expand-img"><i
                                            class="fa fa-search"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 col-sm-6 grid-item Enagagement Parties">
                    <div class="gallery-single">
                        <img src="assets\img\bronze\gallery\6.jpg" alt="">
                        <div class="social-1st">
                            <ul>
                                <li><a href="assets\img\bronze\gallery\6.jpg" class="expand-img"><i
                                            class="fa fa-search"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div> -->
    <!-- </div> -->
    <!-- </div>
    </div> -->
    <!-- gallery area end -->
    <!-- guest-area strat -->
    <div id="Contact" class="guest-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="guest-wrap">
                        <div class="col-12">
                            <div class="section-title section-title4 text-center">
                                <h2>Be Our Guest</h2>
                                <p>Tell the Couple you'll be attending.</p>
                            </div>
                        </div>
                        <div class="contact-form form-style">
                            <form id="rsvp-form" action="{{route('reservasi.save')}}" method="post">
                                <input type="hidden" name="calon_id" id="calon_id" value="{{$calon->id}}">
                                <input type="hidden" name="slug" id="slug" value="{{$calon->slug}}">
                                @csrf
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <input type="text" placeholder="Your Name*" id="nama" name="nama">
                                    </div>
                                    <div class="col-12  col-sm-6">
                                        <select class="form-control" name="events">
                                            <option disabled="" selected="">I Am Attending*</option>
                                            <option value="Ya, tentu saja!">Ya, tentu saja!</option>
                                            <option value="Maaf, saya tidak bisa.">Maaf, saya tidak bisa.</option>
                                        </select>
                                    </div>
                                    <div class="col col-sm-12">
                                        <input type="text" placeholder="Your Address*" id="alamat" name="alamat">
                                    </div>

                                    <div class="col-12 text-center">
                                        <button id="submit" class="submit">Submit</button>
                                        <!-- <span id="loader"><i class="fa fa-refresh fa-spin fa-3x fa-fw"></i></span> -->
                                    </div>
                                    <!-- <div class="col col-md-12 success-error-message">
                                        <div id="success">Thank you</div>
                                        <div id="error"> Error occurred while sending email. Please try again later.
                                    </div> -->
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- //guest area end -->

    <!-- //comment  -->
    <div id="Comment" class="comment-area horizontal-line">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="comment-wrap">
                        <div class="col-12">
                            <div class="section-title section-title4 text-center">
                                <h2>Comment</h2>
                                <p>Send your Wish or your comment!</p>
                            </div>
                        </div>
                        <div class="contact-form form-style">
                            <form id="rsvp-form" action="{{route('comment.save')}}" method="post">
                                <input type="hidden" name="calon_id" id="calon_id" value="{{$calon->id}}">
                                <input type="hidden" name="slug" id="slug" value="{{$calon->slug}}">
                                @csrf
                                <div class="row">
                                    <div class="col-12 col-sm-12">
                                        <input type="text" placeholder="Your Name*" id="nama" name="nama">
                                    </div>
                                    <div class="col-12">
                                        <textarea class="contact-textarea" id="comment" name="comment"
                                            placeholder="Message"></textarea>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button id="submit" class="submit">Submit</button>
                                        <!-- <span id="loader"><i class="fa fa-refresh fa-spin fa-3x fa-fw"></i></span> -->
                                    </div>
                                    <!-- <div class="col col-md-12 success-error-message">
                                        <div id="success">Thank you</div>
                                        <div id="error"> Error occurred while sending email. Please try again later.
                                    </div> -->
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
            integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><strong>Comment Section</strong></h1>
                    <div class="media g-mb-30 media-comment">
                        <!-- <img class="d-flex g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-15"> -->
                        <div class="media-body u-shadow-v18 g-bg-secondary g-pa-30">
                            @foreach($calon->comment as $data)
                            <div class="commentText">
                                <h2><strong>{{ $data->nama }}</strong></h2>
                                <p>{{ $data->comment }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Comment-area end -->
    <!-- Gift Registration start -->
    <!-- <div class="Gift-area pt--100 pb--30">
        <div class="container">
            <div class="col-12">
                <div class="section-title text-center">
                    <h2>Gift Registration</h2>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                        alteration in some form, by injected humour, or randomised.</p>
                </div>
            </div>
            <div class="gift-item">
                <div class="Gift-carousel owl-carousel">
                    <img src="assets\img\bronze\gift\3.png" alt="clinet">
                    <img src="assets\img\bronze\gift\2.png" alt="clinet">
                    <img src="assets\img\bronze\gift\3.png" alt="clinet">
                    <img src="assets\img\bronze\gift\4.png" alt="clinet">
                </div>
            </div>
        </div>
    </div> -->
    <!-- Gift Registration end -->
    <!-- .footer-area start -->
    <footer class="section horizontal-line ">
        <div class="container text-white position-relative">
            <div class="footer__title">
                <div class="text-center">Thank You</div>
                <div class="text-center"><strong>{{$calon->nick_pria}} &amp; {{$calon->nick_wanita}}</strong></div>
            </div>
            <div class="row pb-4">
                <div class="col-md-12 text-center parent">
                    <p>Turut Mengundang :</p>
                    <?php 
                    $undang = explode("|",$calon->undang);
                    ?>
                    <ul>
                        @foreach($undang as $data)
                        <li>{{$data}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="copyright text-center">&copy;2021. ToBeABrideXCloudStudio.</div>
            <p><img class="center" style="width:200px;height:200px;" src="assets/img/logo/tobeabride.png" alt=""></p>
            <div class="row">
                <div class="col-md-12 text-center">
                    <ol class="social social-circle">
                        <li><a href="https://www.instagram.com/tobeabride/"><i class="icon-instagram"></i></a></li>
                        <li><a href="https://www.instagram.com/cloudstudio/"><i class="icon-instagram"></i></a></li>
                    </ol>
                </div>
            </div>
        </div>
    </footer>
    <!-- .footer-area start -->
    <!-- strat music-box -->
    <div class="music-box music-box-2">
        <button class="music-box-toggle-btn">
            <i class="fa fa-music" aria-hidden="true"></i>
        </button>
        <div class="music-holder">
            <iframe src="{{$calon->song->song}}"></iframe>
        </div>
    </div>
    <!-- end music box -->
    <!-- all js here -->
    <!-- modernizr-3.5.0.min.js -->
    <script src="{{asset('assets/js/bronze/vendor/modernizr-3.5.0.min.js')}}"></script>
    <!-- jquery-2.2.4.min.js -->
    <script src="{{asset('assets/js/bronze/vendor/jquery-2.2.4.min.js')}}"></script>
    <!-- imageloded.min.js -->
    <script src="{{asset('assets/js/bronze/imageloded.min.js')}}"></script>
    <!-- easing-min.js -->
    <script src="{{asset('assets/js/bronze/easing-min.js')}}"></script>
    <!-- jquery.slicknav.min.js -->
    <script src="{{asset('assets/js/bronze/jquery.slicknav.min.js')}}"></script>
    <!-- isotop.min.js -->
    <script src="{{asset('assets/js/bronze/isotop.min.js')}}"></script>
    <!-- magnific-popup.min.js -->
    <script src="{{asset('assets/js/bronze/jquery.magnific-popup.min.js')}}"></script>
    <!-- jquery.mb.YTPlayer.src.js -->
    <script src="{{asset('assets/js/bronze/jquery.mb.YTPlayer.src.js')}}"></script>
    <!-- owl-carousel.js -->
    <script src="{{asset('assets/js/bronze/owl-carousel.js')}}"></script>
    <!-- swiper.min.js -->
    <script src="{{asset('assets/js/bronze/swiper.min.js')}}"></script>
    <!-- countdown.js -->
    <script src="{{asset('assets/js/bronze/countdown.js')}}"></script>
    <!-- bootstrap.min.js -->
    <script src="{{asset('assets/js/bronze/bootstrap.min.js')}}"></script>
    <!-- jquery-sticky-menu.js -->
    <script src="{{asset('assets/js/bronze/jquery-sticky-menu.js')}}"></script>
    <!-- jquery-validation.js -->
    <script src="{{asset('assets/js/bronze/validation.js')}}"></script>
    <!-- main.js -->
    <script src="{{asset('assets/js/bronze/main.js')}}"></script>

    <script src="{{asset('assets/js/bronze/slick.min.js')}}"></script>

    <script>
    const calon = @json($calon);
    console.log(calon);

    if ($("#clock").length) {
        $('#clock').countdown(new Date(calon.akad_nikah.tgl), function(event) {
            var $this = $(this).html(event.strftime('' +
                '<div class="box"><div class="date">%D</div> <span>month</span> </div>' +
                '<div class="box"><div class="date">%D</div> <span>Days</span> </div>' +
                '<div class="box"><div class="date">%H</div> <span>Hours</span> </div>' +
                '<div class="box"><div class="date">%M</div> <span>Mins</span> </div>' +
                '<div class="box"><div class="date">%S</div> <span>Secs</span> </div>'));
        });
    }
    </script>
</body>

</html>