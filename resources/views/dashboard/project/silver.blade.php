<!DOCTYPE html>
<html lang="en">

<head>
    <title>ToBeABrideXCloudStudio</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/tobeabride.ico">
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/silver/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/silver/vendor/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/silver/vendor/slick-theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/silver/vendor/lightbox.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/premium/icomoon.css')}}">

    <!-- Main style -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/silver/main.css')}}">
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css"
        href="{{asset('assets/css/fonts/font-awesome-4.7.0\css\font-awesome.min.css')}}">
    <link
        href="https://fonts.googleapis.com/css?family=Playfair+Display%7COpen+Sans:300,400,600,700%7CSource+Serif+Pro%7CDosis"
        rel="stylesheet">
    <!-- <link rel="shortcut icon" type="image/png" href="/favicon.ico"> -->
    <!--[if lt IE 9]>
			<script src="js/vendor/html5shiv.min.js"></script>
			<script src="js/vendor/respond.min.js"></script>
		<![endif]-->

    <style>
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

    .h4 {
        margin: 0px;
        margin-bottom: 0px;
    }

    .commentText p {
        margin: 0px;
    }

    .rsvp {
        position: relative;
    }

    .rsvp:after {
        content: '';
        display: block;
        width: 100%;
        height: 100%;
        background: url(assets/img/silver/rsvp-flowers-r.png) no-repeat;
        background-size: contain;
        background-position: 0 100%;
        max-width: 500px;
        position: absolute;
        right: 0;
        bottom: 0;
        z-index: -1;
    }

    @media only screen and (min-width: 768px) {
        .rsvp:before {
            content: '';
            display: block;
            width: 100%;
            height: 100%;
            background: url(assets/img/silver/rsvp-flowers-l.png) no-repeat;
            background-size: contain;
            background-position: left;
            max-width: 400px;
            position: absolute;
            left: 0;
            bottom: 0;
            z-index: -1;
        }
    }

    .rsvp .title {
        font-family: "Playfair Display", serif;
        display: block;
    }

    .rsvp .title:after,
    .rsvp .title:before {
        display: none;
    }

    /* //comment */
    .comment {
        position: relative;
    }

    .comment:after {
        content: '';
        display: block;
        width: 100%;
        height: 100%;
        background: url(assets/img/silver/rsvp-flowers-r.png) no-repeat;
        background-size: contain;
        background-position: 0 100%;
        max-width: 500px;
        position: absolute;
        right: 0;
        bottom: 0;
        z-index: -1;
    }

    @media only screen and (min-width: 768px) {
        .comment:before {
            content: '';
            display: block;
            width: 100%;
            height: 100%;
            background: url(assets/img/silver/rsvp-flowers-l.png) no-repeat;
            background-size: contain;
            background-position: left;
            max-width: 400px;
            position: absolute;
            left: 0;
            bottom: 0;
            z-index: -1;
        }
    }

    .comment .title {
        font-family: "Playfair Display", serif;
        display: block;
    }

    .comment .title:after,
    .comment .title:before {
        display: none;
    }

    /* //gallery  */

    .gallery {
        position: relative;
        background: url("{{$calon->fotoBody->foto_kedua}}");
        background-size: cover;
        background-position: center;
    }

    .gallery:before {
        content: '';
        background: rgba(245, 226, 228, 0.5);
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

    /* Body */
    html,
    body {
        height: 100%;
    }

    body {
        font-family: "Open Sans", sans-serif;
        font-size: 14px;
        font-weight: 300;
        line-height: 1.7;
        color: #212529;
        overflow-x: hidden;
        background: url(assets/img/silver/seamless.png);
    }

    body.offcanvas {
        overflow: hidden;
    }

    /*** music box ***/
    .music-box {
        position: fixed;
        width: 300px;
        height: 160px;
        z-index: 120;
        bottom: 30px;
        right: 30px;
    }

    @media (max-width: 991px) {
        .music-box {
            width: 250px;
            height: 120px;
            right: auto;
            left: 30px;
        }
    }

    .music-box .music-holder {
        width: 100%;
        height: 100%;
        position: absolute;
        right: 0;
        top: -30px;
        visibility: hidden;
        opacity: 0;
        -webkit-transition: all 0.5s ease-out;
        -o-transition: all 0.5s ease-out;
        transition: all 0.5s ease-out;
    }

    .music-box .music-holder iframe {
        width: 100%;
        height: 100%;
    }

    .music-box button {
        background: rgba(0, 0, 0, 0.1);
        width: 40px;
        height: 40px;
        line-height: 35px;
        font-size: 18px;
        color: #9a8c40;
        border: 1px solid #e6e6e6;
        outline: 0;
        padding: 0;
        margin: 0;
        position: absolute;
        right: 0;
        bottom: 0;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        -o-border-radius: 50%;
        -ms-border-radius: 50%;
        border-radius: 50%;
    }

    .music-box.music-box-2 button {
        color: #4b4e4e;
    }

    @media (max-width: 991px) {
        .music-box button {
            right: auto;
            left: 0;
        }
    }

    .music-box .toggle-music-box {
        top: -50px;
        visibility: visible;
        opacity: 1;
    }

    div.parent {
        text-align: center;
    }

    ul {
        list-style: inside;
        display: inline-block;
        text-align: left;
    }
    </style>
</head>

<body id="home">
    <div id="loader" class="loader">
        <div id="my-svg"></div>
        <div class="loader-img text-center">
            <img src="assets\img\silver\story-flowers.png" alt="flowers">
        </div>
    </div>

    <div class="qbootstrap-hero" data-section="home">
        <div class="qbootstrap-overlay"></div>
        @if($calon->fotoHeader->foto_header)
        <div class="qbootstrap-cover text-center center-bg" data-stellar-background-ratio="0.5"
            style="background-image: url({{$calon->fotoHeader->foto_header}});">
            @endif
            <div class="display-t">
                <div class="display-tc">
                    <div class="container">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="animate-box svg-sm colored">
                                <!-- <img src="assets/img/premium/flaticon/svg/004-nature.svg" class="svg" alt=""> -->
                                <h1 class="holder"><span>The Wedding of</span></h1>
                                <h2>{{$calon->nick_pria}} &amp; {{$calon->nick_wanita}}</h2>
                                <p>{{date("l jS F Y", strtotime($calon->akadNikah->tgl))}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- <nav id="navbar" class="navbar navbar-expand-lg fixed-top p-0 text-white">
        <div class="d-lg-flex w-100 align-items-start">
            <a class="navbar-brand text-primary" href="#">
                <img class="d-none d-lg-block navbar-brand__img" src="assets\img\silver\logo.png" alt="logo">
                <img class="d-lg-none navbar-brand__img" src="assets\img\silver\logo-small.png" alt="logo">
            </a>
            <button type="button" class="d-lg-none navbar-toggle collapsed" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active page-scroll" href="#top">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#events">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#rsvp">RSVP</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Pages
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="blog.html">Blog</a>
                            <a class="dropdown-item" href="gallery.html">Gallery</a>
                            <a class="dropdown-item" href="rsvp.html">RSVP</a>
                            <a class="dropdown-item" href="blog-single.html">Single Post</a>
                        </div>
                    </li>
                    <li class="nav-item d-flex ml-lg-4">
                        <a class="nav-link nav-link_social" href="#">
                            <i class="fa fa-2x fa-facebook-square"></i>
                        </a>
                        <a class="nav-link nav-link_social" href="#">
                            <i class="fa fa-2x fa-twitter-square"></i>
                        </a>
                        <a class="nav-link nav-link_social" href="#">
                            <i class="fa fa-2x fa-google-plus-square"></i>
                        </a>
                    </li>
                    <li class="nav-item ml-lg-4 d-lg-none">
                        <span class="nav-link">&copy; Joseph and Sophia 2018.</span>
                    </li>
                </ul>
            </div>
        </div>
    </nav> -->
    <!-- <div id="loader" class="loader">
        <div id="my-svg"></div>
        <div class="loader-img text-center">
            <img src="assets\img\silver\story-flowers.png" alt="flowers">
        </div>
    </div>
    <div id="top" class="main-hero">
        <div class="c-hero-banner c-hero-banner--main">
            <div class="cover"></div>
            <div class="c-hero-banner__section c-hero-banner__image">
                <img class="lazyload" src="assets\img\silver\banner.jpg" alt="image">
            </div>
            <div class="mask">
                <img src="img\mask.png" alt="">
            </div>
        </div>
    </div> -->
    <!-- Section Love story -->
    <section class="love-story section position-relative text-center">
        <div class="d-none d-sm-block love-story__flower-parallax position-absolute parallax">
            <img src="assets\img\silver\ls-flower-prlx.png" alt="flower">
        </div>
        <div class="container">
            <div class="love-story__flowers m-auto">
                <img src="assets\img\silver\story-flowers.png" alt="flowers">
            </div>
            <h1 class="title">Quotes</h1>
            <p class="m-auto">{{$calon->quotes->isi}}.</p>
            <span>&ldquo;{{$calon->quotes->judul}}&rdquo;</span>
        </div>
    </section>
    <!-- Section Date -->
    <section class="date-section section section--blue countdown text-center">
        <div class="container">
            <div class="date-section__flowers m-auto">
                <img src="assets\img\silver\date-flowers.png" alt="flowers">
            </div>
            <div class="date-section__block">
                <div class="d-inline-block">
                    <h2 class="title--special">{{date("l jS F Y", strtotime($calon->akadNikah->tgl))}}</h2>
                    <h3 class="date-section__place">
                        {{$calon->akadNikah->tempat}}<br>
                        {{$calon->akadNikah->alamat}}
                    </h3>
                </div>
            </div>
            <div id="qbootstrap-countdown" class="timer d-flex justify-content-center">
                <div class="timer-item">
                    <span id="days" class="days timer__digit"></span>
                    <div class="timer__text">days</div>
                </div>
                <div class="timer-item">
                    <span id="hours" class="hours timer__digit"></span>
                    <div class="timer__text">hours</div>
                </div>
                <div class="timer-item">
                    <span id="minutes" class="minutes timer__digit"></span>
                    <div class="timer__text">minutes</div>
                </div>
                <div class="timer-item">
                    <span id="seconds" class="seconds timer__digit"></span>
                    <div class="timer__text">seconds</div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Events -->
    <section id="events" class="events section text-center">
        <div class="container">
            <h1 class="title">Wedding events</h1>
            <p class="subtitle mx-auto">Real life will begins.</p>
            <div id="accordion">
                <div class="accordion__header d-flex justify-content-center">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                        aria-controls="collapseOne">
                        Akad Nikah
                    </button>
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                        aria-expanded="false" aria-controls="collapseTwo">
                        Resepsi
                    </button>
                </div>
                <div class="accordion__body">
                    <div id="collapseOne" class="collapse show" data-parent="#accordion">
                        <div class="row">
                            <h2 class="accordion__item-heading">Akad Nikah</h2>
                            @if($calon->fotoBody->foto_pertama)
                            <div class="col-md-6">
                                <img class="accordion__item-img" src="{{$calon->fotoBody->foto_pertama}}"
                                    alt="ceremony">
                            </div>
                            @endif
                            <div class="col-md-6 text-left">
                                <h3 class="accordion__item-subheading">When and Where</h3>
                                <p class="d-flex align-items-center"><i
                                        class="fa fa-2x fa-map-marker align-middle pr-1"></i>{{$calon->akadNikah->alamat}}
                                </p>
                                <p class="d-flex align-items-center"><i
                                        class="fa fa-2x fa-clock-o align-middle pr-1"></i>{{$calon->akadNikah->waktu}}
                                    WIB, {{date("l jS F Y", strtotime($calon->akadNikah->tgl))}}
                                </p>
                                <!-- <p class="font-weight-bold">Keep it classy</p> -->
                                <a href="https://maps.google.com/?q={{$calon->akadNikah->google_loc}}"
                                    class="btn btn-outline-dark rounded-0 px-2 py-1">View on map</a>
                            </div>
                        </div>
                    </div>
                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                        <div class="row">
                            <h2 class="accordion__item-heading">Resepsi</h2>
                            @if($calon->fotoBody->foto_kedua)
                            <div class="col-md-6">
                                <img class="accordion__item-img" src="{{$calon->fotoBody->foto_kedua}}" alt="ceremony">
                            </div>
                            @endif
                            <div class="col-md-6 text-left">
                                <h3 class="accordion__item-subheading">When and Where</h3>
                                <p class="d-flex align-items-center"><i
                                        class="fa fa-2x fa-map-marker align-middle pr-1"></i>{{$calon->resepsi->alamat_rsp}}
                                </p>
                                <p class="d-flex align-items-center"><i
                                        class="fa fa-2x fa-clock-o align-middle pr-1"></i>{{$calon->resepsi->waktu_rsp}}
                                    WIB, {{date("l jS F Y", strtotime($calon->resepsi->tgl_rsp))}}
                                </p>
                                <!-- <p class="font-weight-bold">Keep it classy</p> -->
                                <a href="https://maps.google.com/?q={{$calon->akadNikah->google_loc_rsp}}"
                                    class="btn btn-outline-dark rounded-0 px-2 py-1">View on map</a>
                            </div>
                        </div>
                    </div>
                    <!-- <div id="collapseThree" class="collapse" data-parent="#accordion">
                        <div class="row">
                            <h2 class="accordion__item-heading">Party</h2>
                            <div class="col-md-6">
                                <img class="accordion__item-img" src="assets\img\silver\party.jpg" alt="ceremony">
                            </div>
                            <div class="col-md-6 text-left">
                                <h3 class="accordion__item-subheading">When and Where</h3>
                                <p class="d-flex align-items-center"><i
                                        class="fa fa-2x fa-map-marker align-middle pr-1"></i>W Hotel, 1423 Hobart St,
                                    Pittsburgh, PA, 15217</p>
                                <p class="d-flex align-items-center"><i
                                        class="fa fa-2x fa-clock-o align-middle pr-1"></i>21:00 - 00:00, Sep 15, 2018
                                </p>
                                <p class="font-weight-bold">Keep it classy</p>
                                <div class="btn btn-outline-dark rounded-0 px-2 py-1">View on map</div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            <!-- <div class="events__info">
                <div class="row text-left">
                    <div class="col-md-4 event__info-item">
                        <h6 class="event__info-header font-weight-bold">Getting there</h6>
                        <p>You can get there using the car, bus or train.</p>
                    </div>
                    <div class="col-md-4 event__info-item">
                        <h6 class="event__info-header font-weight-bold">Where to stay</h6>
                        <p>Hotel, Motel</p>
                        <p>There are many options to choose around. You can book accommodation online, either at hotel's
                            own web site or at web site of an agency.</p>
                    </div>
                    <div class="col-md-4 event__info-item">
                        <h6 class="event__info-header font-weight-bold">Activities</h6>
                        <p>Here are a few of our favorite local spots.</p>
                        <ul>
                            <li>Climbing Park</li>
                            <li>Bowling</li>
                            <li>Golf</li>
                            <li>Spa center</li>
                            <li>Biking</li>
                        </ul>
                    </div>
                </div>
            </div> -->
        </div>
    </section>
    <!-- Section Gallery -->
    <section id="gallery" class="gallery section text-center">
        <div class="d-none d-lg-block gallery__flower-prlx-l position-absolute parallax">
            <img src="assets\img\silver\gallery-prlx-l.png" alt="flower">
        </div>
        <div class="d-none d-lg-block gallery__flower-prlx-r position-absolute parallax">
            <img src="assets\img\silver\gallery-prlx-r.png" alt="flower">
        </div>
        <div class="container position-relative">
            <h1 class="title">Gallery</h1>
            <p class="subtitle mx-auto">Our hapiness in photograph...</p>
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
    </section>
    <!-- Section Wishes -->
    <!-- <section class="wishes section text-center">
        <div class="container">
            <h1 class="title">Wishes</h1>
            <p class="subtitle m-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt</p>
            <div class="wishes__slider">
                <div class="slick slick-wishes mb-0">
                    <div class="slider__item">
                        <div class="wishes__person">
                            <img class="rounded-circle m-auto" src="assets\img\silver\person1.jpg" alt="slider">
                        </div>
                        <h4 class="wishes__title font-weight-bold">Alex Cooper</h4>
                        <p class="mx-auto">"With warm congratulations to a very special pair. May you always find in
                            each other the love, laughter and happiness that only partners in life share!"</p>
                    </div>
                    <div class="slider__item">
                        <div class="wishes__person">
                            <img class="rounded-circle m-auto" src="assets\img\silver\person2.jpg" alt="slider">
                        </div>
                        <h4 class="wishes__title font-weight-bold">Mary Alen</h4>
                        <p class="mx-auto">"True love stories never end! Happy wedding day and may there be many more
                            chapters in the wonderful story of your love for one another."</p>
                    </div>
                    <div class="slider__item">
                        <div class="wishes__person">
                            <img class="rounded-circle m-auto" src="assets\img\silver\person3.jpg" alt="slider">
                        </div>
                        <h4 class="wishes__title font-weight-bold">John Colen</h4>
                        <p class="mx-auto">"A wedding wish for two special person: love is best when shared by two. You
                            know that together you are stronger, together you are one. Have a wonderful married life!"
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Section Gift -->
    <!-- <section class="gifts section section--blue text-center">
        <div class="container">
            <h1 class="title">Gift registry</h1>
            <p class="subtitle m-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt</p>
            <div class="wishes__slider">
                <div class="slick slick-gifts mb-0 pb-0">
                    <div class="slider__item">
                        <img class="m-auto" src="assets\img\silver\gift1.png" alt="gift">
                    </div>
                    <div class="slider__item">
                        <img class="m-auto" src="assets\img\silver\gift2.png" alt="gift">
                    </div>
                    <div class="slider__item">
                        <img class="m-auto" src="assets\img\silver\gift3.png" alt="gift">
                    </div>
                    <div class="slider__item">
                        <img class="m-auto" src="assets\img\silver\gift4.png" alt="gift">
                    </div>
                    <div class="slider__item">
                        <img class="m-auto" src="assets\img\silver\gift1.png" alt="gift">
                    </div>
                    <div class="slider__item">
                        <img class="m-auto" src="assets\img\silver\gift2.png" alt="gift">
                    </div>
                    <div class="slider__item">
                        <img class="m-auto" src="assets\img\silver\gift3.png" alt="gift">
                    </div>
                    <div class="slider__item">
                        <img class="m-auto" src="assets\img\silver\gift4.png" alt="gift">
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- RSVP -->
    <section id="rsvp" class="rsvp section">
        <div class="container">
            <div class="row">
                <div class="d-none d-md-block col-sm-12 col-md-4">
                    <img src="assets\img\silver\rsvp-flower.png" class="parallax" alt="flower">
                </div>
                <div class="col-sm-12 col-md-8 align-self-center">
                    <h2 class="title">RSVP</h2>
                    <h6 class="text-uppercase font-weight-bold mb-0">Will you attend?</h6>
                    <form id="rsvp-form" action="{{route('reservasi.save')}}" method="post">
                        <input type="hidden" name="calon_id" id="calon_id" value="{{$calon->id}}">
                        <input type="hidden" name="slug" id="slug" value="{{$calon->slug}}">
                        @csrf
                        <div class="row">
                            <div class="col-md-8 mb-3 m-md-0">
                                <div class="form-group">
                                    <label class="control-label" for="inputName">Name</label>
                                    <input type="text" class="form-control" id="nama" name="nama" required="">
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="inputNumber">Address</label>
                                    <input type="tel" class="form-control" id="alamat" name="alamat" required="">
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="ket"></label>
                                    <div class="form-group">
                                        <!-- <label for="ket" class="sr-only">Apakah Anda Akan Datang?</label> -->
                                        <select name="ket" id="ket" placeholder="Apakah anda Datang?"
                                            class="form-control">
                                            <!-- <option value=""></option> -->
                                            <option disabled="" selected="">Will you Attending?</option>
                                            <option value="Ya, tentu saja!">Ya, tentu saja!</option>
                                            <option value="Maaf, saya tidak bisa.">Maaf, saya tidak bisa.</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 align-self-end">
                                <button type="submit"
                                    class="btn btn-outline-dark rounded-0 px-3 py-1 font-weight-bold">Submit</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="success-msg"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="comment" class="comment section">
        <div class="container">
            <div class="row">
                <div class="d-none d-md-block col-sm-12 col-md-4">
                    <img src="assets\img\silver\rsvp-flower.png" class="parallax" alt="flower">
                </div>
                <div class="col-sm-12 col-md-8 align-self-center">
                    <h2 class="title">Comment</h2>
                    <h6 class="text-uppercase font-weight-bold mb-0">Send wishes or your comment!</h6>
                    <form id="rsvp-form" action="{{route('comment.save')}}" method="post">
                        <input type="hidden" name="calon_id" id="calon_id" value="{{$calon->id}}">
                        <input type="hidden" name="slug" id="slug" value="{{$calon->slug}}">
                        @csrf
                        <div class="row">
                            <div class="col-md-8 mb-3 m-md-0">
                                <div class="form-group">
                                    <label class="control-label" for="inputName">Name</label>
                                    <input type="text" class="form-control" id="nama" name="nama" required="">
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="inputNumber">Comment</label>
                                    <input type="tel" class="form-control" id="comment" name="comment" required="">
                                </div>
                            </div>
                            <div class="col-md-4 align-self-end">
                                <button type="submit"
                                    class="btn btn-outline-dark rounded-0 px-3 py-1 font-weight-bold">Submit</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="success-msg"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="komentar panel" class="comment section">
        <!-- <div class="row horizontal-line"> -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4><strong>Comment Section</strong></h4>
                    <div class="media g-mb-30 media-comment">
                        <div class="media-body u-shadow-v18 g-bg-secondary g-pa-30">
                            @foreach($calon->comment as $data)
                            <div class="commentText">
                                <h6><strong>{{ $data->nama }}</strong></h6>
                                <p class="">{{ $data->comment }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- </div> -->
    </section>
    <!-- Footer -->
    <footer class="section">
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
    <script src="{{asset('assets/js/silver/vendor/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/silver/vendor/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('assets/js/silver/vendor/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/silver/vendor/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/silver/vendor/slick.min.js')}}"></script>
    <script src="{{asset('assets/js/silver/vendor/vivus.min.js')}}"></script>
    <script src="{{asset('assets/js/silver/vendor/circletype.min.js')}}"></script>
    <script src="{{asset('assets/js/silver/vendor/masonry.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/silver/vendor/lightbox.min.js')}}"></script>
    <script src="{{asset('assets/js/silver/main.js')}}"></script>


    <script>
    var countDownDate = new Date("{{$calon->akadNikah->tgl}}").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get todays date and time
        var now = new Date().getTime();

        // Find the distance between now an the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in an element with id="demo"
        // document.getElementById("demo").innerHTML = days + "Days " + hours + "Hours "
        // + minutes + "Minutes " + seconds + "Seconds ";

        // Display the result in an element with id="demo"
        document.getElementById("days").innerHTML = days + " <small></small>";
        document.getElementById("hours").innerHTML = hours + " <small></small> ";
        document.getElementById("minutes").innerHTML = minutes + " <small></small> ";
        document.getElementById("seconds").innerHTML = seconds + " <small></small> ";

        // If the count down is finished, write some text 
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "The Wedding Ceremony Already Begin";
            // document.getElementById("countdown").style.visibility = "hidden";
            document.getElementById("days").innerHTML = 0 + " <small></small>";
            document.getElementById("hours").innerHTML = 0 + " <small></small> ";
            document.getElementById("minutes").innerHTML = 0 + " <small></small> ";
            document.getElementById("seconds").innerHTML = 0 + " <small></small> ";
        }
    }, 1000);

    // $(document).ready(function() {

    //     const calon = @json($calon);
    //     console.log(calon);


    //     const undang = calon.undang.replaceAll("|", ",");
    //     $("#undang").tagsinput('add', undang)

    // $('#key_category').val(product.key_category.split("|")); // Select the option with a value of '1'
    // $('#key_category').trigger('change'); // Notify any JS components that the value changed

    // })
    </script>

</body>

</html>