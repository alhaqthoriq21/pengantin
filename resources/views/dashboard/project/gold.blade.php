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
    <title>ToBeABrideXCloudStudio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />



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
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/tobeabride.ico">

    <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet'
        type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset('assets/css/gold/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href=" {{asset('assets/css/gold/icomoon.css')}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('assets/css/gold/bootstrap.css')}}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('assets/css/gold/magnific-popup.css')}}">
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{asset('assets/css/gold/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/gold/owl.theme.default.min.css')}}">
    <!-- Theme style  -->
    <link rel="stylesheet" href="{{asset('assets/css/gold/style.css')}}">
    <!-- Modernizr JS -->
    <script src="{{asset('assets/js/gold/modernizr-2.6.2.min.js')}}"></script>

    <link rel="stylesheet" href="{{asset('assets/css/premium/icomoon.css')}}">
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

    <style>
    .commentText p {
        margin: 0px;
        margin-bottom: 0px;
    }
    </style>

</head>

<body>



    <div class="fh5co-loader"></div>

    <div id="page">
        <!-- <nav class="fh5co-nav" role="navigation">
            <div class="container"> -->
        <!-- <div class="row">
                    <div class="col-xs-2">
                        <div id="fh5co-logo"><a href="index.html">Wedding<strong>.</strong></a></div>
                    </div>
                    <div class="col-xs-10 text-right menu-1">
                        <ul>
                            <li class="active"><a href="index.html">Home</a></li>
                            <li><a href="about.html">Story</a></li>
                            <li class="has-dropdown">
                                <a href="services.html">Services</a>
                                <ul class="dropdown">
                                    <li><a href="#">Web Design</a></li>
                                    <li><a href="#">eCommerce</a></li>
                                    <li><a href="#">Branding</a></li>
                                    <li><a href="#">API</a></li>
                                </ul>
                            </li>
                            <li class="has-dropdown">
                                <a href="gallery.html">Gallery</a>
                                <ul class="dropdown">
                                    <li><a href="#">HTML5</a></li>
                                    <li><a href="#">CSS3</a></li>
                                    <li><a href="#">Sass</a></li>
                                    <li><a href="#">jQuery</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div> -->

        <!-- </div>
        </nav> -->
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
                                <!-- <div class="simply-countdown-losange" id="simply-countdown-losange"></div> -->
                                <div class="simply-countdown simply-countdown-one">
                                    <span id="days"></span>
                                    <span id="hours"></span>
                                    <span id="minutes"></span>
                                    <span id="seconds"></span>
                                </div>
                                <!-- <p><a href="#" class="btn btn-default btn-sm">Save the date</a></p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mask">
                <img src="assets\img\gold\mask.png" alt="">
            </div>
        </header>

        <div id="fh5co-couple">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                        @if (isset($qs['u']))
                        <h2>Welcome, Dear {{$qs['u']}}!</h2>
                        @endif
                        <h3> {{date("l jS F Y", strtotime($calon->akadNikah->tgl))}}</h3>
                        <p>We invited you to celebrate our wedding</p>
                    </div>
                </div>
                <div class="couple-wrap animate-box">
                    <div class="couple-half">
                        <div class="groom">
                            <img src="{{$calon->foto_pria}}" alt="groom" class="img-responsive">
                        </div>
                        <div class="desc-groom">
                            <h3><strong>{{$calon->calon_pria}}</strong></h3>
                            <p><strong>Putra Dari</strong></p>
                            <p>Bpk. {{$calon->ayah_pria}} </p>
                            <p>& Ibu {{$calon->ibu_pria}} </p>
                        </div>
                    </div>
                    <p class="heart text-center"><i class="icon-heart2"></i></p>
                    <div class="couple-half">
                        <div class="bride">
                            <img src="{{$calon->foto_wanita}}" alt="groom" class="img-responsive">
                        </div>
                        <div class="desc-bride">
                            <h3><strong>{{$calon->calon_wanita}}</strong></h3>
                            <p><strong>Putri Dari</strong></p>
                            <p>Bpk. {{$calon->ayah_wanita}} </p>
                            <p>& Ibu {{$calon->ibu_wanita}} </p>
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
                                            <span>{{$calon->akadNikah->waktu}} WIB</span>
                                            <!-- <span>4:00 PM</span>
                                            <span>6:00 PM</span> -->
                                        </div>
                                        <div class="event-col">
                                            <i class="icon-calendar"></i>
                                            <span>{{date("l jS F Y", strtotime($calon->akadNikah->tgl))}}</span>
                                        </div>
                                        <p>
                                            {{$calon->akadNikah->tempat}}
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
                                            <span>{{$calon->resepsi->waktu_rsp}} WIB</span>
                                            <!-- <span>7:00 PM</span>
                                            <span>12:00 AM</span> -->
                                        </div>
                                        <div class="event-col">
                                            <i class="icon-calendar"></i>
                                            <span>{{date("l jS F Y", strtotime($calon->resepsi->tgl_rsp))}}</span>
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

        <div id="fh5co-couple-story">
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
        </div>

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
            style="background-image:url(assets/img/gold/img_bg_5.jpg);">
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
                                                <img src="assets/img/gold/couple-1.jpg" alt="user">
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
                                                <img src="assets/img/gold/couple-2.jpg" alt="user">
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
                                                <img src="assets/img/gold/couple-3.jpg" alt="user">
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
                        <div class="fh5co-video fh5co-bg" style="background-image: url(assets/img/gold/img_bg_3.jpg); ">
                            <a href="https://vimeo.com/channels/staffpicks/93951774" class="popup-vimeo"><i
                                    class="icon-video2"></i></a>
                            <div class="overlay"></div>
                        </div>
                    </div>
                </div>


            </div>
        </div> -->




        <div id="fh5co-started" class="fh5co-bg">
            <!-- style="background-image:url(assets/img/gold/img_bg_4.jpg);" -->

            <div class="overlay"></div>
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
                <div class="row horizontal-line">
                    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
                        rel="stylesheet"
                        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
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
    </div>
    <!-- </div> -->

    <footer class="section">
        <div class="container text-white position-relative">
            <div class="footer__title">
                <div class="text-center">Thank You</div>
                <div class="text-center"><strong>{{$calon->nick_pria}} &amp; {{$calon->nick_wanita}}</strong></div>
            </div>
            <div class="row pb-4">
                <div class="col-md-12 text-center">
                    <p>Turut Mengundang :</p>
                </div>
                <div class="col-md-12 text-center">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            <div class="copyright text-center">&copy;2021. ToBeABrideXCloudStudio.</div>
            <p><img class="center" style="width:200px;height:200px;" src="assets/img/logo/tobeabride.png" alt=""></p>
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="social social-circle">
                        <li><a href="https://www.instagram.com/tobeabride/"><i class="icon-instagram"></i></a></li>
                        <li><a href="https://www.instagram.com/cloudstudio/"><i class="icon-instagram"></i></a></li>
                    </ul>
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

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>

    <!-- jQuery -->
    <script src="{{asset('assets/js/gold/jquery.min.js')}}"></script>
    <!-- jQuery Easing -->
    <script src="{{asset('assets/js/gold/jquery.easing.1.3.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('assets/js/gold/bootstrap.min.js')}}"></script>
    <!-- Waypoints -->
    <script src="{{asset('assets/js/gold/jquery.waypoints.min.js')}}"></script>
    <!-- Carousel -->
    <script src="{{asset('assets/js/gold/owl.carousel.min.js')}}"></script>
    <!-- countTo -->
    <script src="{{asset('assets/js/gold/jquery.countTo.js')}}"></script>
    <!-- Stellar -->
    <script src="{{asset('assets/js/gold/jquery.stellar.min.js')}}"></script>
    <!-- Magnific Popup -->
    <script src="{{asset('assets/js/gold/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/gold/magnific-popup-options.js')}}"></script>
    <!-- // <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js"></script> -->
    <script src=" {{asset('assets/js/gold/simplyCountdown.js')}}"></script>
    <!-- Main -->
    <script src="{{asset('assets/js/gold/main.js')}}"></script>

    <script>
    var d = new Date(new Date("{{$calon->akadNikah->tgl}}").getTime());
    // var d = new Date("{{$calon->akadNikah->tgl}}").getTime() + 200 * 120 * 120 * 2000;
    // var d = new Date("{{$calon->akadNikah->tgl}}").getTime();

    // default example
    simplyCountdown('.simply-countdown-one', {
        // "{$calon->akadNikah->tgl}"
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        hours: d.getHours(),
        minutes: d.getMinutes(),
        seconds: d.getSeconds()
    });


    // $('#simply-countdown-losange').simplyCountdown({
    //     year: 2015, // required
    //     month: 6, // required
    //     day: 30, // required

    // });


    // jQuery example
    // $('#simply-countdown-losange').simplyCountdown(
    // year: d.getFullYear(),
    // month: d.getMonth() + 1,
    // day: d.getDate(),
    // enableUtc: false,
    // // });
    // 
    </script>

    <!-- <script>
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
    </script> -->


</body>

</html>