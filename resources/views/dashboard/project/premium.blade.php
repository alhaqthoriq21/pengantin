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
    <title>ToBeAbrideXCloudStudio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by QBOOTSTRAP.COM
		
	Website: 		http://qbootstrap.com/
	Email: 			info@qbootstrap.com
	Twitter: 		http://twitter.com/Q_bootstrap
	Facebook: 		https://www.facebook.com/Qbootstrap
	//////////////////////////////////////////////////////
	 -->

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
    <!-- // datetimepicker -->
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('assets/css/premium/jquery.datetimepicker.css')}}" /> -->

    <!-- Modernizr JS -->

    <script src="{{asset('assets/js/premium/modernizr-2.6.2.min.js')}}"></script>
    <!-- datetime/ -->
    <!-- <script src="{{asset('assets/js/premium/jquery.js')}}"></script>
    <script src="/build/jquery.datetimepicker.full.min.js"></script> -->
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>
    <!-- <header role="banner" id="qbootstrap-header">
        <div class="container"> -->
    <!-- <div class="row"> -->
    <!-- <nav class="navbar navbar-default"> -->
    <!-- <div class="navbar-header">
                    Mobile Toggle Menu Button
                    <a href="#" class="js-qbootstrap-nav-toggle qbootstrap-nav-toggle" data-toggle="collapse"
                        data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
                    <a class="navbar-brand" href="index.html">Wedding</a>
                </div> -->
    <!-- <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#" data-nav-section="home"><span>Home</span></a></li>
                        <li><a href="#" data-nav-section="groom-bride"><span>Groom &amp; Bride</span></a></li>
                        <li><a href="#" data-nav-section="story"><span>Love Story</span></a></li>
                        <li><a href="#" data-nav-section="greetings"><span>Greetings</span></a></li>
                        <li><a href="#" data-nav-section="people"><span>People</span></a></li>
                        <li><a href="#" data-nav-section="when-where"><span>When &amp; Where</span></a></li>
                        <li><a href="#" data-nav-section="rsvp"><span>RSVP</span></a></li>
                        <li><a href="#" data-nav-section="gallery"><span>Gallery</span></a></li>
                        <li><a href="#" data-nav-section="blog"><span>Blog</span></a></li>
                    </ul>
                </div> -->
    <!-- </nav> -->
    <!-- </div> -->
    <!-- </div> -->
    <!-- </header> -->

    <audio controls autoplay loop hidden>
        <source src="https://media.vocaroo.com/mp3/6JEBAPEMA6A">
    </audio>


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
                                <img src="assets/img/premium/flaticon/svg/004-nature.svg" class="svg" alt="">
                                @if (isset($qs['u']))
                                <h2>Dear, {{$qs['u']}}</h2>

                                @endif
                                <h1 class="holder"><span>Welcome to the Wedding of</span></h1>
                                <h2>{{$calon->nick_pria}} &amp; {{$calon->nick_wanita}}</h2>
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
                        <h2>Are Getting Married</h2>
                        <p>{{$calon->quotes->isi}}</p>
                        <h1> <strong>&ldquo; {{$calon->quotes->judul}}&rdquo;</strong></h1>
                        <!-- <h3></h3> -->
                        <!-- <p><strong>on {{$calon->akadNikah->tgl}} &mdash; {{$calon->akadNikah->alamat}}</strong></p> -->
                    </div>
                </div>
            </div>
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="col-md-5 col-sm-5 col-xs-5 nopadding">
                        <img src="{{$calon->foto_pria}}" class="img-responsive" alt="">
                        <h3>{{$calon->calon_pria}}</h3>
                        <h1>Putra Dari</h1>
                        <span>Bpk. {{$calon->ayah_pria}}</span>
                        <span>& Ibu {{$calon->ibu_pria}}</span>
                        <h2><a href="https://www.instagram.com/{{$calon->sosmed_pria}}/"><i
                                    class="icon-instagram"></i></a></h2>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-2 nopadding">
                        <h2 class="amp-center"><img src="assets/img/premium/flaticon/svg/003-luxury.svg"
                                class="svg img-responsive" alt=""></h2>
                    </div>
                    <div class="col-md-5 col-sm-5 col-xs-5 nopadding">
                        <img src="{{$calon->foto_wanita}}" class="img-responsive" alt="">
                        <h3>{{$calon->calon_wanita}}</h3>
                        <h1>Putri Dari</h1>
                        <span>Bpk. {{$calon->ayah_wanita}}</span>
                        <span>& Ibu {{$calon->ibu_wanita}}</span>
                        <h2><a href="https://www.instagram.com/{{$calon->sosmed_wanita}}/"><i
                                    class="icon-instagram"></i></a></h2>
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
                        <span class="datewed">{{date("l jS F Y", strtotime($calon->akadNikah->tgl))}}</span>
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
                                    <h3 class="timeline-title">First We Meet</h3>
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
                                    <h3 class="timeline-title">First Date</h3>
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
                                    <h3 class="timeline-title">In A Relationship</h3>
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
                                    <h3 class="timeline-title">We're Engaged</h3>
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


    <!-- <div id="qbootstrap-testimonials" class="qbootstrap-greetings" data-section="greetings"
        data-stellar-background-ratio="0.5" style="background-image: url(assets/img/cover_bg_1.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-12 section-heading text-center svg-sm colored">
                    <img src="assets/img/flaticon/svg/006-flower-bell-outline-design-variant-with-vines-and-leaves.svg"
                        class="svg" alt="">
                    <h2 class="">Sweet Messages</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 animate-box">
                    <div class="box-testimony ">
                        <blockquote>
                            <span class="quote"><span><i class="icon-quote-left"></i></span></span>
                            <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and
                                Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at
                                the coast of the Semantics, a large language ocean.&rdquo;</p>
                        </blockquote>
                        <p class="author">John Doe</p>
                    </div>

                </div>
                <div class="col-md-4 animate-box">
                    <div class="box-testimony ">
                        <blockquote>
                            <span class="quote"><span><i class="icon-quote-left"></i></span></span>
                            <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and
                                Consonantia, there live the blind texts.&rdquo;</p>
                        </blockquote>
                        <p class="author">John Doe</p>
                    </div>


                </div>
                <div class="col-md-4 animate-box">
                    <div class="box-testimony ">
                        <blockquote>
                            <span class="quote"><span><i class="icon-quote-left"></i></span></span>
                            <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and
                                Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at
                                the coast of the Semantics, a large language ocean.&rdquo;</p>
                        </blockquote>
                        <p class="author">John Doe</p>
                    </div>

                </div>
            </div>
        </div>
    </div> -->

    <!-- <div id="qbootstrap-people" data-section="people">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2">
                    <div class="col-md-12 text-center section-heading svg-sm colored">
                        <img src="assets/img/flaticon/svg/005-two.svg" class="svg"
                            alt="">
                        <h2>The Groomsmen</h2>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1 subtext  ">
                                <h3>Far far away, behind the word mountains, far from the countries Vokalia and
                                    Consonantia, there live the blind texts.</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-bottom-padded-lg">
                <div class="col-md-3 text-center animate-box">
                    <div class="groom-men">
                        <img src="assets/img/groom-men-1.jpg" class="img-responsive"
                            alt="">
                        <h3>Ian Bill</h3>
                    </div>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <div class="groom-men">
                        <img src="assets/img/groom-men-2.jpg" class="img-responsive"
                            alt="">
                        <h3>George Smith</h3>
                    </div>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <div class="groom-men">
                        <img src="assets/img/groom-men-3.jpg" class="img-responsive"
                            alt="">
                        <h3>Brian Thompson</h3>
                    </div>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <div class="groom-men">
                        <img src="assets/img/groom-men-4.jpg" class="img-responsive"
                            alt="">
                        <h3>David Howard</h3>
                    </div>
                </div>
            </div>
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2">
                    <div class="col-md-12 text-center section-heading svg-sm colored">
                        <img src="assets/img/flaticon/svg/005-two.svg" class="svg"
                            alt="">
                        <h2>The Bridesmaid</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 text-center animate-box">
                    <div class="groom-men">
                        <img src="assets/img/bridesmaid-1.jpg" class="img-responsive"
                            alt="">
                        <h3>Angel Thomas</h3>
                    </div>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <div class="groom-men">
                        <img src="assets/img/bridesmaid-2.jpg" class="img-responsive"
                            alt="">
                        <h3>Kathy Shol</h3>
                    </div>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <div class="groom-men">
                        <img src="assets/img/bridesmaid-3.jpg" class="img-responsive"
                            alt="">
                        <h3>Rose Mel</h3>
                    </div>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <div class="groom-men">
                        <img src="assets/img/bridesmaid-4.jpg" class="img-responsive"
                            alt="">
                        <h3>Ann Hathway</h3>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div id="qbootstrap-when-where" data-section="when-where">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2">
                    <div class="col-md-12 text-center section-heading svg-sm colored">
                        <img src="assets/img/premium/flaticon/svg/005-two.svg" class="svg" alt="">
                        <h2>Akad Nikah &amp; Resepsi</h2>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1 subtext">
                                <h1>our journey will finally begin....</h1>
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
                                        <span>WIB</span>
                                        <!-- <span>10:00 AM</span>
                                        <span>11:00 AM</span> -->
                                    </div>
                                </div>
                            </div>
                            <p>{{$calon->akadNikah->tempat}}</p>
                            <p>{{$calon->akadNikah->alamat}}</p>
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
                                        <span>WIB</span>
                                    </div>
                                </div>
                            </div>
                            <p>{{$calon->resepsi->tempat_rsp}}</p>
                            <p> {{$calon->resepsi->alamat_rsp}}</p>
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
                            <h1>Our memories in photograph.</h1>
                        </div>
                    </div>
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

    <div id="qbootstrap-started" class="qbootstrap-bg" data-section="rsvp" data-stellar-background-ratio="0.5">
        <!-- style="background-image: url(assets/img/cover_bg_1.jpg);"  -->
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
                                <!-- <label for="ket" class="sr-only">Apakah Anda Akan Datang?</label> -->
                                <select name="ket" id="ket" placeholder="Apakah anda Datang?" class="form-control">
                                    <!-- <option value=""></option> -->
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
                <!-- <div class="col-md-4 col-sm-4">
                    <div class="form-group">
                        @foreach($calon->reservasi as $data)
                        <p>&ldquo;{{ $data->nama }}&rdquo;</p>
                        <p>&ldquo;{{ $data->alamat }}&rdquo;</p>
                        <p>&ldquo;{{ $data->ket }}&rdquo;</p>
                        @endforeach
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <div class="container bg-white">
    </div>

    <div id="qbootstrap-comment" class="qbootstrap-bg" data-section="comment" data-stellar-background-ratio="0.5">
        <!-- style="background-image: url(assets/img/cover_bg_1.jpg);"  -->
        <div class="overlay"></div>
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2">
                    <div class="col-md-12 text-center section-heading svg-sm colored">
                        <img src="assets/img/premium/flaticon/svg/005-two.svg" class="svg" alt="">
                        <h2>Guest Book</h2>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1 subtext">
                                <h1>Leave a message or send wishes for the Couple!</h1>
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
            <div class="row">
                <div class="col-12 horizontal-line">
                    <div class="media d-block d-md-flex mt-3">
                        <div class="media-body text-left text-md-left ml-md-3 ml-0 komentar">
                            @foreach($calon->comment as $data)
                            <h2 class="komentar"><strong>{{ $data->nama }}</strong>
                                <a href="" class="pull-left">
                                </a>
                            </h2>
                            {{ $data->comment }}
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


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

    <footer id="footer" role="contentinfo">
        <div class="container">
            <div class="row row-bottom-padded-sm">
                <div class="col-md-12">
                    <p class="copyright text-center">&copy; 2021 <a href="index.html">TobeABrideXCloudStudio</a>. All
                        Rights Reserved.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="social social-circle">
                        <li><a href="#"><i class="icon-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


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
    </script>

</body>

</html>