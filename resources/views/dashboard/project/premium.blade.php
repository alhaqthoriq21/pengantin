<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{$calon->nick_pria}} &amp; {{$calon->nick_wanita}} | ToBeABrideXCloudStudio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0, 
    user-scalable=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/tobeabride.ico">

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,400italic,700' rel='stylesheet'
        type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Clicker+Script" rel="stylesheet">

    <!-- Animate.css -->

    <link rel="stylesheet" href="{{asset('assets/css/premium/animate.css')}}">
    <!-- Icomoon Icon Fonts-->

    <link rel="stylesheet" href="{{asset('assets/css/premium/icomoon.css')}}">
    <!-- Simple Line Icons -->

    <link rel="stylesheet" href="{{asset('assets/css/premium/simple-line-icons.css')}}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('assets/css/premium/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/premium/owl.theme.default.min.css')}}">
    <!-- Magnific popup  -->

    <link rel="stylesheet" href="{{asset('assets/css/premium/magnific-popup.css')}}">
    <!-- Bootstrap  -->

    <link rel="stylesheet" href="{{asset('assets/css/premium/bootstrap.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/premium/style.css')}}">

    <!-- //font awesome -->
    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free-5.15.2/css/all.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <!-- // datetimepicker -->
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('assets/css/premium/jquery.datetimepicker.css')}}" /> -->

    <!-- Modernizr JS -->

    <script src="{{asset('assets/js/premium/modernizr-2.6.2.min.js')}}"></script>

    <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
    <!-- datetime/ -->
    <!-- <script src="{{asset('assets/js/premium/jquery.js')}}"></script>
    <script src="/build/jquery.datetimepicker.full.min.js"></script> -->
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

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

    .gt-section {
        z-index: 11;
        position: relative;
        height: 100%;
        position: fixed;
        width: 100%;
        top: 0px;
        display: flex;
        flex-direction: column;
    }

    /* //button  */
    .button4 {
        background-color: #ffffff;
        color: black;
        border-radius: 12px;
        width: 300px;
        height: 45px;
    }


    @media screen and (min-width: 280px) {

        .qbootstrap-cover .display-t .display-tc .button4 {
            width: 250px;
            vertical-align: middle;
        }
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

    .commentText p,
    ul,
    li {
        margin: 0;
        font-size: 14px;
    }

    .commentText p {
        color: #000000;
    }


    div.parent {
        text-align: center;
    }

    ul {
        list-style: inside;
        display: inline-block;
        text-align: left;
    }

    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
    }

    /* //bg  */
    .section--bg {
        background: <?=$calon->color ?>;
    }

    /* //heading colored  */
    .section-heading.colored .svg {
        fill: <?=$calon->color ?>;
    }

    .section-heading h2 {
        font-size: 80px;
        color: <?=$calon->color ?>;
        display: block;
        padding-bottom: 20px;
        line-height: 1.5;
    }



    @media screen and (max-width: 768px) {
        .section-heading h2 {
            font-size: 40px;
        }
    }


    #qbootstrap-couple h3 {
        font-size: 34px;
        font-family: "Clicker Script", cursive;
        color: <?=$calon->color ?>;
        margin-bottom: 0px;
        margin: 10px;
    }

    .couple-font p {
        font-size: 12px;
    }



    @media screen and (max-width: 768px) {
        #qbootstrap-couple h3 {
            font-size: 17px;
            margin-bottom: 0px;
            margin: 10px;
        }
    }

    a {
        color: <?=$calon->color ?>;
        -webkit-transition: 0.5s;
        -o-transition: 0.5s;
        transition: 0.5s;
    }

    #qbootstrap-comment .btn {
        height: 54px;
        border: none !important;
        background: <?=$calon->color ?>;
        color: #fff;
        font-size: 16px;
        text-transform: uppercase;
        font-weight: 400;
        padding-left: 50px;
        padding-right: 50px;
    }

    .timeline-title {
        margin-top: 0;
        font-size: 20px;
        color: <?=$calon->color ?>;
        margin-bottom: 30px;
    }

    .wedding-events .desc h3 {
        font-size: 40px;
        color: <?=$calon->color ?>;
        display: block;
        margin-bottom: 40px;
    }

    .wedding-events .desc .icon i {
        color: #fff;
        padding: 15px;
        background: <?=$calon->color ?>;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        -ms-border-radius: 50%;
        border-radius: 50%;
    }

    .music-box.music-box-2 button {
        color: <?=$calon->color ?>;
    }

    /* button footer  */
    .social.social-circle a {
        background: <?=$calon->color ?>;
        color: #fff;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        -ms-border-radius: 50%;
        border-radius: 50%;
    }

    @media screen and (max-width: 768px) {

        .qbootstrap-cover .display-tc h2,
        .video-hero .display-tc h2 {
            font-size: <?=$calon->size_font ?>px;
        }
    }

    .footer h1 {
        font-size: <?=$calon->size_font ?>px;
    }

    .footer h1 {
        color: #ffffff;
    }
    </style>

</head>

<body>

    <div class="gateway gt-section" id="gt">
        <div class="qbootstrap-hero" data-section="home">
            <div class="qbootstrap-overlay"></div>
            <div class="qbootstrap-cover text-center center-bg" data-stellar-background-ratio="0.5">
                <div class="display-t">
                    <div class="display-tc">
                        <div class="container">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="animate-box svg-sm colored">
                                    @if (isset($qs['u']))
                                    <h6>Dear {{$qs['u']}},</h6>
                                    @endif
                                    <p><span>You're Invited!</span></p>
                                    <h3 class="holder"><span>The Wedding of</span></h3>
                                    <h2><strong>{{$calon->nick_pria}} &amp; {{$calon->nick_wanita}}</strong></h2>
                                    <p><button href="#" id="play-music" class="button button4"><i
                                                class="fa fa-heart"></i> Open
                                            Invitation</button>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="qbootstrap-hero" data-section="home">
        @if($calon->fotoHeader->foto_header)
        <div class="qbootstrap-cover text-center center-bg" data-stellar-background-ratio="0.5"
            style="background-image: url({{$calon->fotoHeader->foto_header}});">
            @endif
            <div class="qbootstrap-overlay"></div>
            <div class="display-t">
                <div class="display-tc">
                    <div class="container">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="animate-box svg-sm colored">
                                <img src="assets/img/premium/flaticon/svg/004-nature.svg" class="svg" alt="">
                                <h1 class="holder"><span>The Wedding of</span></h1>
                                <h2><strong>{{$calon->nick_pria}} &amp; {{$calon->nick_wanita}}</strong></h2>
                                <p>{{date("l jS F Y", strtotime($calon->akadNikah->tgl))}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="qbootstrap-couple" class="qbootstrap-section-gray">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 animate-box">
                    <div class="col-md-12 text-center section-heading svg-sm colored">
                        <img src="assets/img/premium/flaticon/svg/005-two.svg" class="svg" alt="">
                        <h2>Welcome to Our Wedding!</h2>
                        <p>{{$calon->quotes->isi}}</p>
                        <p> <strong>&ldquo; {{$calon->quotes->judul}}&rdquo;</strong></p>
                        <!-- <h3></h3> -->
                        <!-- <p><strong>on {{$calon->akadNikah->tgl}} &mdash; {{$calon->akadNikah->alamat}}</strong></p> -->
                    </div>
                </div>
            </div>
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center couple-font">
                    <div class="col-md-5 col-sm-5 col-xs-5 nopadding">
                        <img class="center" src="{{$calon->foto_pria}}" style="width:110px;height:110px;"
                            class="img-responsive" alt="">
                        <h3>{{$calon->calon_pria}}</h3>
                        <p><strong>Putra Dari</strong></p>
                        <p>Bpk. {{$calon->ayah_pria}}</p>
                        <p>& Ibu {{$calon->ibu_pria}}</p>
                        <p><a href="https://www.instagram.com/{{$calon->sosmed_pria}}/"><i
                                    class="icon-instagram"></i></a></p>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-2 nopadding">
                        <h2 class="amp-center"><img src="assets/img/premium/flaticon/svg/003-luxury.svg" class="svg"
                                alt=""></h2>
                    </div>
                    <div class="col-md-5 col-sm-5 col-xs-5 nopadding">
                        <img class="center" src="{{$calon->foto_wanita}}" style="width:110px;height:110px;"
                            class="img-responsive" alt="">
                        <h3>{{$calon->calon_wanita}}</h3>
                        <p><strong>Putri Dari</strong></p>
                        <p>Bpk. {{$calon->ayah_wanita}}</p>
                        <p>& Ibu {{$calon->ibu_wanita}}</p>
                        <p><a href="https://www.instagram.com/{{$calon->sosmed_wanita}}/"><i
                                    class="icon-instagram"></i></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if($calon->fotoHeader->foto_countdown)
    <div id="qbootstrap-countdown" data-stellar-background-ratio="0.5"
        style="background-image: url({{$calon->fotoHeader->foto_countdown}});" data-section="wedding-day">
        @endif
        <div class="overlay"></div>
        <div class="display-over">
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-12 section-heading text-center svg-sm colored">
                        <img src="assets/img/premium/flaticon/svg/006-flower-bell-outline-design-variant-with-vines-and-leaves.svg"
                            class="svg" alt="">
                        <h2 class="">The Wedding Day</h2>
                        <h1 class="datewed">{{date("l jS F Y", strtotime($calon->akadNikah->tgl))}}</h1>
                    </div>
                </div>
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center">
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
    </div>

    <!-- <div id="qbootstrap-groom-bride" data-section="groom-bride">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2">
                    <div class="col-md-12 text-center section-heading svg-sm-2 colored">
                        <img src="assets/img/flaticon/svg/002-wedding-couple.svg" class="svg"
                            alt="">
                        <h2>Groom &amp; Bride</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam accusamus, sequi, minima
                            repellendus explicabo magni aperiam, ducimus perferendis ad quidem suscipit omnis unde
                            veritatis pariatur. Commodi, nisi. Iusto, accusantium a.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="couple groom text-center animate-box">
                        <img src="assets/img/groom.jpg" class="img-responsive"
                            alt="">
                        <div class="desc">
                            <h2>Louie Jie L. Mahusay</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda vero totam eum,
                                necessitatibus reprehenderit nisi, ratione neque aspernatur sapiente minus? Omnis neque
                                labore distinctio aspernatur esse impedit laboriosam, veritatis dolorem!</p>
                            <ul class="social social-circle">
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="couple bride text-center animate-box">
                        <img src="assets/img/bride.jpg" class="img-responsive"
                            alt="">
                        <div class="desc">
                            <h2>Marializa R. Tabay</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda vero totam eum,
                                necessitatibus reprehenderit nisi, ratione neque aspernatur sapiente minus? Omnis neque
                                labore distinctio aspernatur esse impedit laboriosam, veritatis dolorem!</p>
                            <ul class="social social-circle">
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div id="qbootstrap-story" data-section="story">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2">
                    <div class="col-md-12 text-center section-heading svg-sm-2">
                        <img src="assets/img/premium/flaticon/svg/003-luxury.svg" class="svg" alt="">
                        <h2>Our Love Story</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ul class="timeline animate-box">
                        <li class="animate-box">
                            @if($calon->loveStory->foto_firstmeet)
                            <div class="timeline-badge"
                                style="background-image: url({{$calon->loveStory->foto_firstmeet}});"></div>
                            @endif
                            <div class="timeline-panel">
                                <div class="overlay"></div>
                                <div class="timeline-heading">
                                    <h3 class="timeline-title"><strong>First We Meet</strong></h3>
                                    <span class="date">{{$calon->loveStory->tgl_firstmeet}}</span>
                                </div>
                                <div class="timeline-body">
                                    <p>{{$calon->loveStory->story_firstmeet}}.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted animate-box">
                            @if($calon->loveStory->foto_firstdate)
                            <div class="timeline-badge"
                                style="background-image: url({{$calon->loveStory->foto_firstdate}});"></div>
                            @endif
                            <div class="timeline-panel">
                                <div class="overlay overlay-2"></div>
                                <div class="timeline-heading">
                                    <h3 class="timeline-title"><strong>First Date</strong></h3>
                                    <span class="date">{{$calon->loveStory->tgl_firstdate}}</span>
                                </div>
                                <div class="timeline-body">
                                    <p>{{$calon->loveStory->story_firstdate}}.</p>
                                </div>
                            </div>
                        </li>
                        <li class="animate-box">
                            @if($calon->loveStory->foto_relationship)
                            <div class="timeline-badge"
                                style="background-image: url({{$calon->loveStory->foto_relationship}});"></div>
                            @endif
                            <div class="timeline-panel">
                                <div class="overlay"></div>
                                <div class="timeline-heading">
                                    <h3 class="timeline-title"><strong>In A Relationship</strong></h3>
                                    <span class="date">{{$calon->loveStory->tgl_relationship}}</span>
                                </div>
                                <div class="timeline-body">
                                    <p>{{$calon->loveStory->story_relationship}}.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted animate-box">
                            @if($calon->loveStory->foto_enganged)
                            <div class="timeline-badge"
                                style="background-image: url({{$calon->loveStory->foto_enganged}});"></div>
                            @endif
                            <div class="timeline-panel">
                                <div class="overlay overlay-2"></div>
                                <div class="timeline-heading">
                                    <h3 class="timeline-title"><strong>We're Engaged</strong></h3>
                                    <span class="date">{{$calon->loveStory->tgl_enganged}}</span>
                                </div>
                                <div class="timeline-body">
                                    <p>{{$calon->loveStory->story_enganged}}.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="qbootstrap-when-where" data-section="when-where">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2">
                    <div class="col-md-12 text-center section-heading svg-sm colored">
                        <img src="assets/img/premium/flaticon/svg/005-two.svg" class="svg" alt="">
                        <h2>Akad Nikah &amp; Resepsi</h2>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1 subtext">
                                <h3><strong>our journey will finally begin....</strong></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-bottom-padded-md">
                <div class="col-md-6 text-center animate-box">
                    <div class="wedding-events">
                        @if($calon->fotoBody->foto_pertama)
                        <div class="ceremony-bg" style="background-image: url({{$calon->fotoBody->foto_pertama}});">
                        </div>
                        @endif
                        <div class="desc">
                            <h3>Akad Nikah</h3>
                            <div class="row">
                                <div class="col-md-2 col-md-push-5">
                                    <div class="icon-tip">
                                        <span class="icon"><i class="icon-heart-o"></i></span>
                                    </div>
                                </div>
                                <div class="col-md-5 col-md-pull-1">
                                    <div class="date">
                                        <i class="icon-calendar"></i>
                                        <!-- <span>Saturday</span> -->
                                        <span>{{date("l jS F Y", strtotime($calon->akadNikah->tgl))}}</span>
                                    </div>
                                </div>
                                <div class="col-md-5 col-md-pull-1">
                                    <div class="date">
                                        <i class="icon-clock2"></i>
                                        <span>{{$calon->akadNikah->waktu}}</span>
                                        <!-- <span>WIB</span> -->
                                        <!-- <span>10:00 AM</span>
                                        <span>11:00 AM</span> -->
                                    </div>
                                </div>
                            </div>
                            <p><strong>{{$calon->akadNikah->tempat}}</strong></p>
                            <p><strong>{{$calon->akadNikah->alamat}}</strong></p>
                            <p><a href="https://maps.google.com/?q={{$calon->akadNikah->google_loc}}"><i
                                        class="fas fa-map-marker-alt"></i> Location</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-center animate-box">
                    <div class="wedding-events">
                        @if($calon->fotoBody->foto_kedua)
                        <div class="ceremony-bg" style="background-image: url({{$calon->fotoBody->foto_kedua}});"></div>
                        @endif
                        <div class="desc">
                            <h3>Resepsi</h3>
                            <div class="row">
                                <div class="col-md-2 col-md-push-5">
                                    <div class="icon-tip">
                                        <span class="icon"><i class="icon-heart-o"></i></span>
                                    </div>
                                </div>
                                <div class="col-md-5 col-md-pull-1">
                                    <div class="date">
                                        <i class="icon-calendar"></i>
                                        <!-- <span>Saturday</span> -->
                                        <span>{{date("l jS F Y", strtotime($calon->resepsi->tgl_rsp))}}</span>
                                    </div>
                                </div>
                                <div class="col-md-5 col-md-pull-1">
                                    <div class="date">
                                        <i class="icon-clock2"></i>
                                        <!-- <span>10:00 AM</span> -->
                                        <span>{{$calon->resepsi->waktu_rsp}}</span>
                                        <!-- <span>WIB</span> -->
                                    </div>
                                </div>
                            </div>
                            <p><strong>{{$calon->resepsi->tempat_rsp}}</strong></p>
                            <p><strong>{{$calon->resepsi->alamat_rsp}}</strong></p>
                            <p><a href="https://maps.google.com/?q={{$calon->resepsi->google_loc_rsp}}"><i
                                        class="fas fa-map-marker-alt"></i> Location</a></p>


                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="map" class="qbootstrap-map"></div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div id="fh5co-gallery" class="fh5co-section-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center section-heading svg-sm colored">
                    <img src="assets/img/premium/flaticon/svg/005-two.svg" class="svg" alt="">
                    <h2>Our Galleries</h2>
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 subtext">
                            <h3><strong>Our memories in photograph.</strong></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-bottom-padded-md">
                <div class="col-md-12">
                    <ul id="fh5co-gallery-list">
                        @foreach($calon->fotoFooter as $data)
                        <li class="one-third animate-box center-bg" data-animate-effect="fadeIn"
                            style="background-image: url({{$data->foto}});">
                            <a href="{{$data->foto}}">
                                <div class="case-studies-summary">
                                    <!-- <span>14 Photos</span>
                                        <h2>Two Glas of Juice</h2> -->
                                </div>
                            </a>
                        </li>
                        @endforeach
                </div>
            </div>
        </div>
    </div>




    <!-- <div id="qbootstrap-gallery" data-section="gallery">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2">
                    <div class="col-md-12 text-center section-heading svg-sm colored">
                        <img src="assets/img/premium/flaticon/svg/005-two.svg" class="svg" alt="">
                        <h2>Our Galleries</h2>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1 subtext">
                                <h1>Our memories in photograph.</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                @php
                $index = 0;
                @endphp
                @foreach($calon->fotoFooter as $data)
                @if(($index == (count($calon->fotoFooter)) || $index % 3 == 0 ) && $index != 0)

            </div>
            <div class="col-md-3 col-sm-6">

                @endif
                @if($index == 0)
                <div class="col-md-3 col-sm-6">
                    @endif
                    <div class="gallery animate-box">
                        <a class="gallery-img image-popup image-popup" href="{{$data->foto}}"><img src="{{$data->foto}}"
                                class="img-responsive" alt=""></a>
                    </div>

                    @php
                    $index++;
                    @endphp
                    @endforeach
                </div>
            </div>
        </div>
    </div> -->

    <!-- <div id="qbootstrap-started" class="qbootstrap-bg" data-section="rsvp" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2">
                    <div class="col-md-12 text-center section-heading svg-sm colored">
                        <img src="assets/img/premium/flaticon/svg/005-two.svg" class="svg" alt="">
                        <h2>Reservation</h2>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1 subtext">
                                <h1>Tell the couple, you'll be attending!</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row animate-box">
                <div class="col-md-10 col-md-offset-1">
                    <form action="{{route('reservasi.save')}}" method="post" class="form-inline">
                        <input type="hidden" name="calon_id" id="calon_id" value="{{$calon->id}}">
                        <input type="hidden" name="slug" id="slug" value="{{$calon->slug}}">
                        @csrf
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="name" class="sr-only">Name</label>
                                <input type="name" class="form-control" name="nama" id="nama" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="alamat" class="sr-only">Address</label>
                                <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                               
                                <select name="ket" id="ket" placeholder="Apakah anda Datang?" class="form-control">
                                 
                                    <option value="Leave a message!">Leave a message!</option>
                                    <option value="Ya, tentu saja!">Ya, tentu saja!</option>
                                    <option value="Maaf, saya tidak bisa.">Maaf, saya tidak bisa.</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <button type="submit" class="btn btn-default btn-block">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> -->
    <div class="container bg-white">
    </div>


    @if($calon->fotoBody->foto_kedua)
    <div id="qbootstrap-comment" class="" data-section="comment" data-stellar-background-ratio="0.5"
        style="background-image:url({{$calon->fotoBody->foto_kedua}});">
        @endif
        <div class="overlay"></div>
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2">
                    <div class="col-md-12 text-center section-heading svg-sm colored">
                        <img src="assets/img/premium/flaticon/svg/005-two.svg" class="svg" alt="">
                        <h2>Guest Book</h2>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1 subtext">
                                <h4>Leave a message or send wishes for the Couple!</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row animate-box">
                <div class="col-md-10 col-md-offset-1">
                    <form action="{{route('comment.save')}}" method="post" class="form-inline">
                        <input type="hidden" name="calon_id" id="calon_id" value="{{$calon->id}}">
                        <input type="hidden" name="slug" id="slug" value="{{$calon->slug}}">
                        @csrf
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="name" class="sr-only">Name</label>
                                <input type="name" class="form-control" name="nama" id="nama" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="comment" class="sr-only">Comment</label>
                                <input type="text" class="form-control" name="comment" id="comment"
                                    placeholder="Comment">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <button type="submit" class="btn btn-default btn-block">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <div class="qbootstrap-comment" data-section="comment" data-stellar-background-ratio="0.5">
        <div class="row horizontal-line">
            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
                integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
                crossorigin="anonymous">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h7><strong>Comment Section</strong></h7>
                        <div class="media g-mb-30 media-comment">
                            <!-- <img class="d-flex g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-15"> -->
                            <div class="media-body u-shadow-v18 g-bg-secondary g-pa-30">
                                @foreach($calon->comment as $data)
                                <div class="commentText">
                                    <p><strong>{{ $data->nama }}</strong></p>
                                    <p class="">{{ $data->comment }}</p>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <div class="container">
        
    </div> -->






    <!-- <div id="qbootstrap-press" data-section="blog">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2">
                    <div class="col-md-12 text-center section-heading svg-sm colored">
                        <img src="assets/img/flaticon/svg/005-two.svg" class="svg"
                            alt="">
                        <h2>Our Blog</h2>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1 subtext">
                                <h3>Far far away, behind the word mountains, far from the countries Vokalia and
                                    Consonantia, there live the blind texts.</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="qbootstrap-press-item animate-box">
                        <div class="qbootstrap-press-img" style="background-image: url(assets/img/blog-1.jpg)">
                        </div>
                        <div class="qbootstrap-press-text">
                            <h3 class="h2 qbootstrap-press-title">The Wedding Party <span
                                    class="qbootstrap-border"></span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis eius quos similique
                                suscipit dolorem cumque vitae qui molestias illo accusantium...</p>
                            <p><a href="#" class="btn btn-primary btn-sm">Learn more</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="qbootstrap-press-item animate-box">
                        <div class="qbootstrap-press-img" style="background-image: url(assets/img/blog-2.jpg)">
                        </div>
                        <div class="qbootstrap-press-text">
                            <h3 class="h2 qbootstrap-press-title">Wedding Party <span class="qbootstrap-border"></span>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis eius quos similique
                                suscipit dolorem cumque vitae qui molestias illo accusantium...</p>
                            <p><a href="#" class="btn btn-primary btn-sm">Learn more</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="qbootstrap-press-item animate-box">
                        <div class="qbootstrap-press-img" style="background-image: url(assets/img/blog-3.jpg);">
                        </div>
                        <div class="qbootstrap-press-text">
                            <h3 class="h2 qbootstrap-press-title">Venue Wedding <span class="qbootstrap-border"></span>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis eius quos similique
                                suscipit dolorem cumque vitae qui molestias illo accusantium...</p>
                            <p><a href="#" class="btn btn-primary btn-sm">Learn more</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="qbootstrap-press-item animate-box">
                        <div class="qbootstrap-press-img" style="background-image: url(assets/img/blog-4.jpg);">
                        </div>
                        <div class="qbootstrap-press-text">
                            <h3 class="h2 qbootstrap-press-title">About The Couple <span
                                    class="qbootstrap-border"></span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis eius quos similique
                                suscipit dolorem cumque vitae qui molestias illo accusantium...</p>
                            <p><a href="#" class="btn btn-primary btn-sm">Learn more</a></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> -->

    <footer id="footer" role="contentinfo" class="section--bg">
        <div class="container overlay">
            <div class="col-md-12 text-center footer">
                <h1>Thank You</h1>
                <h1><strong>{{$calon->nick_pria}} &amp; {{$calon->nick_wanita}}</strong></h1>
            </div>
            <div class="row pb-4 commentText">
                <div class="col-md-12 text-center">
                    <h8>Turut Mengundang :</h8>
                </div>
                <div class="col-md-12 text-center parent">
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
            <div class="row row-bottom-padded-sm">
                <div class="col-md-12">
                    <!-- <p class="copyright text-center">ToBeABrideXCloudStudio</p> -->
                    <img class="center" style="width:200px;height:100px;" src="assets/img/logo/tobeabride.png" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <ol class="social social-circle">
                        <li><a href="https://www.instagram.com/tobeabride_/"><i class="icon-instagram"></i></a></li>
                        <li><a href="https://www.instagram.com/cloudphoto.id/"><i class="icon-instagram"></i></a></li>
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
            <iframe id="music" src="{{$calon->song->song}}" frameborder="0" allow="autoplay; encrypted-media"
                allowfullscreen></iframe>
        </div>
    </div>
    <!-- end music box -->


    <!-- jQuery -->
    <script src="{{asset('assets/js/premium/jquery.min.js')}}"></script>
    <!-- jQuery Easing -->
    <script src="{{asset('assets/js/premium/jquery.easing.1.3.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('assets/js/premium/bootstrap.min.js')}}"></script>
    <!-- Waypoints -->
    <script src="{{asset('assets/js/premium/jquery.waypoints.min.js')}}"></script>
    <!-- YTPlayer -->
    <script src="{{asset('assets/js/premium/jquery.mb.YTPlayer.min.js')}}"></script>
    <!-- Flexslider -->
    <script src="{{asset('assets/js/premium/jquery.flexslider-min.js')}}"></script>
    <!-- Owl Carousel -->
    <script src="{{asset('assets/js/premium/owl.carousel.min.js')}}"></script>
    <!-- Parallax -->
    <script src="{{asset('assets/js/premium/jquery.stellar.min.js')}}"></script>
    <!-- Magnific Popup -->
    <script src="{{asset('assets/js/premium/jquery.magnific-popup.min.js')}}"></script>
    <script src=" {{asset('assets/js/magnific-popup-options.js')}}"></script>
    <!-- Main JS (Do not remove) -->
    <script src=" {{asset('assets/js/premium/main.js')}}"></script>

    <script>
    const Player = document.getElementById('music');
    const PlayBtn = document.getElementById('play-music');
    let times = 0,
        playY;
    const playVideo = PlayBtn.addEventListener('click', () => {
        if (times == 0) {
            playY = Player.src += '?autoplay=1';
            times = 1;
        }
    });

    const calon = @json($calon);
    var countDownDate = new Date(calon.akad_nikah.tgl).getTime();

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
        document.getElementById("days").innerHTML = days + " <small>days</small>";
        document.getElementById("hours").innerHTML = hours + " <small>hours</small> ";
        document.getElementById("minutes").innerHTML = minutes + " <small>minutes</small> ";
        document.getElementById("seconds").innerHTML = seconds + " <small>seconds</small> ";

        // If the count down is finished, write some text 
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "The Wedding Ceremony Already Begin";
            // document.getElementById("countdown").style.visibility = "hidden";
            document.getElementById("days").innerHTML = 0 + " <small>days</small>";
            document.getElementById("hours").innerHTML = 0 + " <small>hours</small> ";
            document.getElementById("minutes").innerHTML = 0 + " <small>minutes</small> ";
            document.getElementById("seconds").innerHTML = 0 + " <small>seconds</small> ";
        }
    }, 1000);

    $(".button").click(function() {
        $(".gateway").slideUp("slow");
    });

    // $(document).ready(function() {
    //     $('#play-music').on('click', function(ev) {

    //         $("#music")[0].src += "&autoplay=1";
    //         ev.preventDefault();

    //     });
    // });
    </script>

</body>

</html>