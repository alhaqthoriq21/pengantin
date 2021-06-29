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
    <title>{{$calon->nick_pria}} &amp; {{$calon->nick_wanita}} | To Be A Bride</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0, 
    user-scalable=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/tobeabride.ico">

    <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet'
        type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset('assets/css/silver/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href=" {{asset('assets/css/silver/icomoon.css')}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('assets/css/silver/bootstrap.css')}}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('assets/css/silver/magnific-popup.css')}}">
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{asset('assets/css/silver/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/silver/owl.theme.default.min.css')}}">
    <!-- Theme style  -->
    <link rel="stylesheet" href="{{asset('assets/css/silver/style.css')}}">
    <!-- Modernizr JS -->
    <script src="{{asset('assets/js/silver/modernizr-2.6.2.min.js')}}"></script>

    <link rel="stylesheet" href="{{asset('assets/css/premium/icomoon.css')}}">

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script> -->

    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

    <style>
    .gateway {
        background-image: url('{{$calon->foto_gateway}}');
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


    .commentText p {
        margin: 0px;
        margin-bottom: 0px;
        color: #000000;
        line-height: normal;
        margin-top: 5px;
    }

    div.parent {
        text-align: center;
    }

    ul {
        list-style: inside;
        display: inline-block;
        text-align: left;
    }

    /* //countdown color  */
    .simply-countdown>.simply-section {
        /* coutndown blocks */
        display: inline-block;
        width: 100px;
        height: 100px;
        background: <?=$calon->color ?>;
        margin: 0 4px;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        -ms-border-radius: 50%;
        border-radius: 50%;
        position: relative;
        animation: pulse 1s ease infinite;
    }

    .heart i {
        font-size: 20px;
        background: #fff;
        padding: 20px;
        color: <?=$calon->color ?>;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        -ms-border-radius: 50%;
        border-radius: 50%;
    }

    .fh5co-heading h2 {
        font-size: 40px;
        margin-bottom: 10px;
        line-height: 1.5;
        font-weight: bold;
        color: <?=$calon->color ?>;
        font-family: "Sacramento", Arial, serif;
    }

    .couple-half p {
        font-size: 15px;
        margin-bottom: 0px;
        line-height: normal;

    }

    .couple-half h3 {
        font-family: "Sacramento", Arial, serif;
        color: <?=$calon->color ?>;
        font-size: 22px;
        margin-bottom: 0px;
        /* margin-top: 10px; */

    }

    .couple-half h3 strong {
        font-family: "Sacramento", Arial, serif;
        color: <?=$calon->color ?>;
        font-size: 22px;
        margin-bottom: 0px;
        /* margin-top: 10px; */
    }

    /* //btn loc  */
    a {
        color: <?=$calon->color ?>;
        -webkit-transition: 0.5s;
        -o-transition: 0.5s;
        transition: 0.5s;
    }

    /* //musixbox  */
    .music-box.music-box-2 button {
        color: <?=$calon->color ?>;
    }

    /* //btn comment  */
    #fh5co-started .btn {
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

    /* .comment-area {
        background: url("{{$calon->fotoBody->foto_kedua}}") no-repeat center center / cover;
        padding: 100px 0;
        position: absolute;
        background-attachment: fixed;
        z-index: 1;
    } */
    /* //footer  */

    footer:before {
        height: 100%;
        background-position: center;
        background-size: cover;
        position: absolute;
        color: white;
        /* font-family: "Courier New", Courier, monospace; */
        /* font-size: 25px; */
    }

    /* // background  */
    .section {
        padding: 6.25rem 0;
    }

    .section--bg {
        background: <?=$calon->color ?>;
    }

    /* //button  */
    .button4 {
        margin-top: 10px;
        background-color: #ffffff;
        color: black;
        border-radius: 12px;
        width: 300px;
        height: 45px;
        margin-top: 0px;
    }


    @media screen and (max-width: 768px) {

        .fh5co-cover .display-t .display-tc .button4 {
            width: 260px;
            display: table-cell;
            vertical-align: middle;

        }
    }

    @media screen and (max-width: 360px) {

        .fh5co-cover .display-t .display-tc .button4 {
            width: 230px;
            margin-left: auto;
            margin-right: auto;
        }
    }

    .hide {
        padding: 0.5% 0%;
        width: 18%;
        color: white;
        border-radius: 3px;
        transition: 0.5s opacity;
        background: rgba(1, 1, 1, 1);
        border: 2px solid rgba(1, 1, 1, 0.7);
    }

    .hide:hover {
        cursor: pointer;
        opacity: 0.5;
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

    @media screen and (max-width: 480px) {

        #fh5co-header .display-tc h1,
        #fh5co-counter .display-tc h1,
        .fh5co-cover .display-tc h1 {
            font-size: <?=$calon->size_font ?>px;
        }

        .center-bg {
            background-position: center center !important;
            background-repeat: no-repeat;
        }
    }

    .footer__title {
        position: relative;
        font-family: "Sacramento",
            Arial,
            serif;
        font-size: <?=$calon->size_font ?>px;
        line-height: 40px;
        margin-bottom: 40px;
    }
    </style>

</head>

<body>

    <!-- <div class="fh5co-loader"></div> -->

    <div id="page">
        <div class="fh5co-cover centre-bg c-hero-banner gateway gt-section" role="banner">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <div class="display-t">
                            <div class="display-tc animate-box" data-animate-effect="fadeIn">
                                @if (isset($qs['u']))
                                    <h6>Dear {{ Str::title($qs['u'])}},</h6>
                                @endif
                                <p><strong>You're Invited!</strong></p>
                                <h3>We Are Getting Married</h3>
                                <h1>{{$calon->nick_pria}} &amp; {{$calon->nick_wanita}}</h1>
                                <p><button href="#" id="play-music" class="button button4"><img
                                            src="assets/img/logo/btn.png" width="25px" height="25px" alt="" srcset="">
                                        Open
                                        Invitation</button>
                                </p>
                                <!-- <div class="hide" onclick="play()">Open Invitation</div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if($calon->fotoHeader->foto_header)
        <header id="fh5co-header" class="fh5co-cover centre-bg c-hero-banner" role="banner"
            style="background-image:url({{$calon->fotoHeader->foto_header}});" data-stellar-background-ratio="0.5">
            @endif
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <div class="display-t">
                            <div class="display-tc animate-box" data-animate-effect="fadeIn">
                                <h1>{{$calon->nick_pria}} &amp; {{$calon->nick_wanita}}</h1>
                                <h2>We Are Getting Married</h2>
                                <!-- <p>{{$tanggalIndoAkad}}</p> -->
                                <!-- <div class="simply-countdown-losange" id="simply-countdown-losange"></div> -->
                                <div class="simply-countdown simply-countdown-one">
                                </div>
                                <!-- <p><a href="#" class="btn btn-default btn-sm">Save the date</a></p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mask">
                <img src="assets\img\silver\mask.png" alt="">
            </div>
        </header>

        <div id="fh5co-couple">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                        <h2>Welcome!</h2>
                        <h3>{{$tanggalIndoAkad}}</h3>
                        <p>We invited you to celebrate our wedding</p>
                    </div>
                </div>
                <div class="couple-wrap animate-box">
                    <div class="couple-half">
                        <div class="groom">
                            <img src="{{$calon->foto_pria}}" style="width:150px;height:150px;" alt="groom"
                                class="img-responsive">
                        </div>
                        <div class="desc-groom">
                            <h3><strong>{{$calon->calon_pria}}</strong></h3>
                            <p><strong>Putra Dari</strong></p>
                            <p>Bpk. {{$calon->ayah_pria}} </p>
                            <p>Ibu {{$calon->ibu_pria}} </p>
                            <p><a href="https://www.instagram.com/{{$calon->sosmed_pria}}/"><i
                                        class="icon-instagram"></i></a></p>
                        </div>
                    </div>
                    <p class="heart text-center"><i class="icon-heart2"></i></p>
                    <div class="couple-half">
                        <div class="bride">
                            <img src="{{$calon->foto_wanita}}" style="width:150px;height:150px;" alt="groom"
                                class="img-responsive">
                        </div>
                        <div class="desc-bride">
                            <h3><strong>{{$calon->calon_wanita}}</strong></h3>
                            <p><strong>Putri Dari</strong></p>
                            <p>Bpk. {{$calon->ayah_wanita}} </p>
                            <p>Ibu {{$calon->ibu_wanita}} </p>
                            <p><a href="https://www.instagram.com/{{$calon->sosmed_wanita}}/"><i
                                        class="icon-instagram"></i></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if($calon->fotoBody->foto_pertama)
        <div id="fh5co-event" class="fh5co-bg center-bg"
            style="background-image:url({{$calon->fotoBody->foto_pertama}});">
            @endif
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                        <span>Our Main Events</span>
                        <h2>Wedding Ceremony</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="display-t">
                        <div class="display-tc">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="col-md-6 col-sm-6 text-center">
                                    <div class="event-wrap animate-box">
                                        <h3>Akad Nikah</h3>
                                        <div class="event-col">
                                            <i class="icon-clock"></i>
                                            <span>{{$calon->akadNikah->waktu}}</span>
                                            <!-- <span>4:00 PM</span>
                                            <span>6:00 PM</span> -->
                                        </div>
                                        <div class="event-col">
                                            <i class="icon-calendar"></i>
                                            <span>{{$tanggalIndoAkad}}</span>
                                        </div>
                                        <p>
                                            <span>{{$calon->akadNikah->tempat}}</span>
                                        </p>
                                        <p>
                                            <span>{{$calon->akadNikah->alamat}}</span>
                                        </p>
                                        <p>
                                            <a href="https://maps.google.com/?q={{$calon->akadNikah->google_loc}}"
                                                class="icon-location">Location</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 text-center">
                                    <div class="event-wrap animate-box">
                                        <h3>Resepsi</h3>
                                        <div class="event-col">
                                            <i class="icon-clock"></i>
                                            <span>{{$calon->resepsi->waktu_rsp}}</span>
                                            <!-- <span>7:00 PM</span>
                                            <span>12:00 AM</span> -->
                                        </div>
                                        <div class="event-col">
                                            <i class="icon-calendar"></i>
                                            <span>{{$tanggalIndoResepsi}}</span>
                                            <!-- <span>Monday 28</span>
                                            <span>November, 2016</span> -->
                                        </div>
                                        <p>
                                            <span>{{$calon->resepsi->tempat_rsp}}</span>
                                        </p>
                                        <p>
                                            <span>{{$calon->resepsi->alamat_rsp}}</span>
                                        </p>
                                        <p>
                                            <a href="https://maps.google.com/?q={{$calon->resepsi->google_loc_rsp}}"
                                                class="icon-location">Location</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div id="fh5co-couple-story">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                        <span>We Love Each Other</span>
                        <h2>Our Love Story</h2>
                        <p>{{$calon->quotes->isi}}.</p>
                        <span>&ldquo;{{$calon->quotes->judul}}&rdquo;</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-md-offset-0">
                        <ul class="timeline animate-box">
                            <li class="animate-box">
                                @if($calon->loveStory->foto_firstmeet)
                                <div class="timeline-badge"
                                    style="background-image:url({{$calon->loveStory->foto_firstmeet}});">
                                    @endif
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3 class="timeline-title">First Meet</h3>
                                        <span class="date">{{$calon->loveStory->tgl_firstmeet}}</span>
                                    </div>
                                    <div class="timeline-body">
                                        <p>
                                            {{$calon->loveStory->story_firstmeet}}.
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted animate-box">
                                @if($calon->loveStory->foto_firstdate)
                                <div class="timeline-badge"
                                    style="background-image:url({{$calon->loveStory->foto_firstdate}});">
                                    @endif
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3 class="timeline-title">First Date</h3>
                                        <span class="date">{{$calon->loveStory->tgl_firstdate}}</span>
                                    </div>
                                    <div class="timeline-body">
                                        <p>{{$calon->loveStory->story_firstdate}}.
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="animate-box">
                                @if($calon->loveStory->foto_relationship)
                                <div class="timeline-badge"
                                    style="background-image:url({{$calon->loveStory->foto_relationship}});">
                                    @endif
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3 class="timeline-title">In A Relationship</h3>
                                        <span class="date">{{$calon->loveStory->tgl_relationship}}</span>
                                    </div>
                                    <div class="timeline-body">
                                        <p>
                                            {{$calon->loveStory->story_relationship}}.
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted animate-box">
                                @if($calon->loveStory->foto_enganged)
                                <div class="timeline-badge"
                                    style="background-image:url({{$calon->loveStory->foto_enganged}});">
                                    @endif
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3 class="timeline-title">Enganged</h3>
                                        <span class="date">{{$calon->loveStory->tgl_enganged}}</span>
                                    </div>
                                    <div class="timeline-body">
                                        <p>{{$calon->loveStory->story_enganged}}.
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> -->

        <div id="fh5co-gallery" class="fh5co-section-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                        <span>Our Memories in photograph</span>
                        <h2>Our Galleries</h2>
                        <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p> -->
                    </div>
                </div>
                <div class="row row-bottom-padded-md">
                    <div class="col-md-12">
                        <ul id="fh5co-gallery-list">
                            @foreach($calon->fotoFooter as $data)
                            <li class="one-third animate-box" data-animate-effect="fadeIn"
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

        <!-- <div id="fh5co-counter" class="fh5co-bg fh5co-counter"
            style="background-image:url(assets/img/silver/img_bg_5.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="display-t">
                        <div class="display-tc">
                            <div class="col-md-3 col-sm-6 animate-box">
                                <div class="feature-center">
                                    <span class="icon">
                                        <i class="icon-users"></i>
                                    </span>

                                    <span class="counter js-counter" data-from="0" data-to="500" data-speed="5000"
                                        data-refresh-interval="50">1</span>
                                    <span class="counter-label">Estimated Guest</span>

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 animate-box">
                                <div class="feature-center">
                                    <span class="icon">
                                        <i class="icon-user"></i>
                                    </span>

                                    <span class="counter js-counter" data-from="0" data-to="1000" data-speed="5000"
                                        data-refresh-interval="50">1</span>
                                    <span class="counter-label">We Catter</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 animate-box">
                                <div class="feature-center">
                                    <span class="icon">
                                        <i class="icon-calendar"></i>
                                    </span>
                                    <span class="counter js-counter" data-from="0" data-to="402" data-speed="5000"
                                        data-refresh-interval="50">1</span>
                                    <span class="counter-label">Events Done</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 animate-box">
                                <div class="feature-center">
                                    <span class="icon">
                                        <i class="icon-clock"></i>
                                    </span>

                                    <span class="counter js-counter" data-from="0" data-to="2345" data-speed="5000"
                                        data-refresh-interval="50">1</span>
                                    <span class="counter-label">Hours Spent</span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- <div id="fh5co-testimonial">
            <div class="container">
                <div class="row">
                    <div class="row animate-box">
                        <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                            <span>Best Wishes</span>
                            <h2>Friends Wishes</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 animate-box">
                            <div class="wrap-testimony">
                                <div class="owl-carousel-fullwidth">
                                    <div class="item">
                                        <div class="testimony-slide active text-center">
                                            <figure>
                                                <img src="assets/img/silver/couple-1.jpg" alt="user">
                                            </figure>
                                            <span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
                                            <blockquote>
                                                <p>"Far far away, behind the word mountains, far from the countries
                                                    Vokalia and Consonantia, there live the blind texts. Separated they
                                                    live in Bookmarksgrove right at the coast of the Semantics"</p>
                                            </blockquote>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="testimony-slide active text-center">
                                            <figure>
                                                <img src="assets/img/silver/couple-2.jpg" alt="user">
                                            </figure>
                                            <span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
                                            <blockquote>
                                                <p>"Far far away, behind the word mountains, far from the countries
                                                    Vokalia and Consonantia, at the coast of the Semantics, a large
                                                    language ocean."</p>
                                            </blockquote>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="testimony-slide active text-center">
                                            <figure>
                                                <img src="assets/img/silver/couple-3.jpg" alt="user">
                                            </figure>
                                            <span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
                                            <blockquote>
                                                <p>"Far far away, far from the countries Vokalia and Consonantia, there
                                                    live the blind texts. Separated they live in Bookmarksgrove right at
                                                    the coast of the Semantics, a large language ocean."</p>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- <div id="fh5co-services" class="fh5co-section-gray">
            <div class="container">

                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <h2>We Offer Services</h2>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem
                            provident. Odit ab aliquam dolor eius.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                            <span class="icon">
                                <i class="icon-calendar"></i>
                            </span>
                            <div class="feature-copy">
                                <h3>We Organized Events</h3>
                                <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos
                                    cumque dicta adipisci architecto culpa amet.</p>
                            </div>
                        </div>

                        <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                            <span class="icon">
                                <i class="icon-image"></i>
                            </span>
                            <div class="feature-copy">
                                <h3>Photoshoot</h3>
                                <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos
                                    cumque dicta adipisci architecto culpa amet.</p>
                            </div>
                        </div>

                        <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                            <span class="icon">
                                <i class="icon-video"></i>
                            </span>
                            <div class="feature-copy">
                                <h3>Video Editing</h3>
                                <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos
                                    cumque dicta adipisci architecto culpa amet.</p>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6 animate-box">
                        <div class="fh5co-video fh5co-bg" style="background-image: url(assets/img/silver/img_bg_3.jpg); ">
                            <a href="https://vimeo.com/channels/staffpicks/93951774" class="popup-vimeo"><i
                                    class="icon-video2"></i></a>
                            <div class="overlay"></div>
                        </div>
                    </div>
                </div>


            </div>
        </div> -->



        @if($calon->fotoBody->foto_kedua)
        <div id="fh5co-started" class="fh5co-bg comment-area animate-box"
            style="background-image:url({{$calon->fotoBody->foto_kedua}});">
            @endif
            <!-- style="background-image:url(assets/img/silver/img_bg_4.jpg);" -->
            <!-- <div class="overlay"></div> -->
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <h2>Guest Book</h2>
                        <p>Leave a message or send wishes for the Couple!</p>
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
                                    <label for="name" class="sr-only">Nama</label>
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

        <div id="fh5co-started" class="">
            <!-- style="background-image:url(assets/img/silver/img_bg_4.jpg);" -->
            <!-- <div class="overlay"></div> -->
            <div class="row horizontal-line animate-box">
                <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
                    rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
                    crossorigin="anonymous">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="media g-mb-30 media-comment">
                                <h7><strong>Comment Section</strong></h7>
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
    </div>
    <!-- </div> -->

    <footer class="section section--bg">
        <div class="container text-white position-relative animate-box">
            <div class="footer__title color-wht">
                <div class="text-center">Thank You</div>
                <div class="text-center"><strong>{{$calon->nick_pria}} &amp; {{$calon->nick_wanita}}</strong></div>
            </div>
            <div class="row pb-4">
                <div class="col-md-12 text-center color-wht">
                    <p>Turut Mengundang :</p>
                </div>
                <div class="col-md-12 text-center color-wht">
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
            <!-- <div class="copyright text-center color-wht">ToBeABrideXCloudStudio</div> -->
            <p><img class="center" style="width: 100px;" src="{{ asset('tbb-logo-putih.png') }}" alt="logo"></p>
            <div class="row">
                <div class="col-md-12 text-center">
                    <ol class="social social-circle">
                        <li><a href="https://www.instagram.com/tobeabride_/"><i class="fa fa-instagram"></i></a></li>
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

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>

    <!-- jQuery -->
    <script src="{{asset('assets/js/silver/jquery.min.js')}}"></script>
    <!-- jQuery Easing -->
    <script src="{{asset('assets/js/silver/jquery.easing.1.3.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('assets/js/silver/bootstrap.min.js')}}"></script>
    <!-- Waypoints -->
    <script src="{{asset('assets/js/silver/jquery.waypoints.min.js')}}"></script>
    <!-- Carousel -->
    <script src="{{asset('assets/js/silver/owl.carousel.min.js')}}"></script>
    <!-- countTo -->
    <script src="{{asset('assets/js/silver/jquery.countTo.js')}}"></script>
    <!-- Stellar -->
    <script src="{{asset('assets/js/silver/jquery.stellar.min.js')}}"></script>
    <!-- Magnific Popup -->
    <script src="{{asset('assets/js/silver/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/silver/magnific-popup-options.js')}}"></script>
    <!-- // <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js"></script> -->
    <script src=" {{asset('assets/js/silver/simplyCountdown.js')}}"></script>
    <!-- Main -->
    <script src="{{asset('assets/js/silver/main.js')}}"></script>

    <script>
    const calon = @json($calon);
    // console.log(d);
    // var d = new Date(new Date("{{$calon->akadNikah->tgl}}").getTime());

    var d = new Date(new Date(calon.akad_nikah.tgl).getTime());
    // console.log(new Date());

    // default example
    // simplyCountdown('.simply-countdown-one', {
    //     year: d.getFullYear(),
    //     month: d.getMonth() + 1,
    //     day: d.getDate(),
    //     hour: d.getHours(),
    //     minute: d.getMinutes(),
    //     second: d.getSeconds()
    // });

    //jQuery example
    $('.simply-countdown-one').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });

    $(".button").click(function() {
        $(".gateway").slideUp("slow");
    });

    // wow = new WOW({
    //     boxClass: 'wow', // default
    //     animateClass: 'animated', // change this if you are not using animate.css
    //     offset: 0, // default
    //     mobile: true, // keep it on mobile
    //     live: true // track if element updates
    // })
    // wow.init();

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


    // $(document).ready(function() {
    //     $('#play-music').on('click', function(ev) {

    //         $("#music")[0].src += "&autoplay=1";
    //         ev.preventDefault();

    //     });
    // });

    // function play() {
    //     var audio = document.getElementById('audio');
    //     if (audio.paused) {
    //         audio.play();
    //     } else {
    //         audio.pause();
    //     }
    //     var audios = document.getElementById('audios');
    //     if (audios.paused) {
    //         audios.play();
    //     } else {
    //         audios.pause();
    //     }
    // }
    </script>


</body>

</html>