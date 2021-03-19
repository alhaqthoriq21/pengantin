<!-- <div class="et_pb_blurb_content">

    <div class="et_pb_blurb_container">
        <h4 class="et_pb_module_header"><span>{{$calon->calon_pria}}</span>
        </h4>
        <div class="et_pb_blurb_description">
            <p>Putra dari<br><span>{{$calon->ayah_pria}}</span><br> &amp;
                <span>{{$calon->ayah_wanita}}</span>
            </p>
        </div>
    </div>
</div> -->

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
    <title>TimeStoryXCloudStudio</title>
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

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Montez" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

    <!-- Animate.css -->

    <link rel="stylesheet" href="{{asset('assets/css/silver/animate.css')}}">
    <!-- Icomoon Icon Fonts-->

    <link rel="stylesheet" href="{{asset('assets/css/silver/icomoon.css')}}">
    <!-- Bootstrap  -->

    <link rel="stylesheet" href="{{asset('assets/css/silver/bootstrap.css')}}">
    <!-- Superfish -->
    <link rel="stylesheet" href="{{asset('assets/css/silver/superfish.css')}}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('assets/css/silver/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/silver/style.css')}}">


    <!-- Modernizr JS -->
    <script src="{{asset('assets/js/silver/modernizr-2.6.2.min.js')}}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>

    <audio controls autoplay loop hidden>
        <source src="uploads/songs/onelastbreath.mp3" type="audio/mpeg">
    </audio>

    <div id="fh5co-wrapper">
        <div id="fh5co-page">

            <div class="fh5co-hero" data-section="home">
                <div class="fh5co-overlay"></div>
                <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5"
                    style="background-image: url(assets/img/love/7.jpg);">
                    <div class="display-t">
                        <div class="display-tc">
                            <div class="container">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="animate-box">
                                        <h2>Dear, {{$qs['u']}}</h2>
                                        <h1>Welcome to the Wedding of</h1>
                                        <h2>{{$calon->nick_pria}} &amp; {{$calon->nick_wanita}}</h2>
                                        <p><span>{{date("l jS F Y", strtotime($calon->akadNikah->tgl))}}</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <header id="fh5co-header-section" class="sticky-banner">
                <div class="container">
                    <div class="nav-header"> -->
            <!-- <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
                        <h1 id="fh5co-logo"><a href="index.html">Nuptial</a></h1> -->
            <!-- START #fh5co-menu-wrap -->
            <!-- <nav id="fh5co-menu-wrap" role="navigation">
                            <ul class="sf-menu" id="fh5co-primary-menu">
                                <li class="active"><a href="index.html">Home</a></li>
                                <li>
                                    <a href="groom-bride.html" class="fh5co-sub-ddown">Groom &amp; Bride</a>
                                    <ul class="fh5co-sub-menu">
                                        <li><a href="#">Dropdown Menu 1</a></li>
                                        <li><a href="#">Dropdown Menu 2</a></li>
                                        <li><a href="#">Dropdown Menu 3</a></li>
                                        <li><a href="#">Dropdown Menu 4</a></li>
                                    </ul>
                                </li>
                                <li><a href="when-where.html">When &amp; Where</a></li>
                                <li><a href="guest.html">Guest</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="blog.html">Blog</a></li>
                            </ul>
                        </nav> -->
            <!-- </div>
                </div>
            </header> -->

            <!-- end:header-top -->
            <div id="fh5co-couple" class="fh5co-section-gray">
                <div class="container">
                    <div class="row row-bottom-padded-md animate-box">
                        <div class="col-md-6 col-md-offset-3 text-center">
                            <div class="col-md-5 col-sm-5 col-xs-5 nopadding">
                                <img src="{{$calon->foto_pria}}" class="img-responsive" alt="">
                                <h3>{{$calon->calon_pria}}</h3>
                                <p>Putra Dari</p>
                                <p>Bpk. {{$calon->ayah_pria}}</p>
                                <p>& Ibu {{$calon->ibu_pria}}</p>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 nopadding">
                                <h2 class="amp-center"><i class="icon-heart"></i></h2>
                            </div>
                            <div class="col-md-5 col-sm-5 col-xs-5 nopadding">
                                <img src="{{$calon->foto_wanita}}" class="img-responsive" alt="">
                                <h3>{{$calon->calon_wanita}}</h3>
                                <p>Putri Dari</p>
                                <p>Bpk. {{$calon->ayah_wanita}}</p>
                                <p>& Ibu {{$calon->ibu_wanita}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2">
                    <div class="col-md-12 text-center heading-section">
                        <h2>Are Getting Married</h2>
                        <p><strong>on {{$calon->akadNikah->tgl}} &mdash; {{$calon->akadNikah->alamat}}</strong></p>
                    </div>
                </div>
            </div>
            <div id="fh5co-countdown">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                        <h1>Countdown the Wedding Day</h1>
                    </div>
                    <div class="col-md-8 col-md-offset-2 text-center animate-box">
                        <!-- <h1 id="demo"></h1> -->
                        <p class="countdown" id="countdown">
                            <span id="days"></span>
                            <span id="hours"></span>
                            <span id="minutes"></span>
                            <span id="seconds"></span>
                        </p>
                    </div>
                </div>
            </div>

            <div id="fh5co-when-where" class="fh5co-section-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                            <h2>When &amp; Where</h2>
                        </div>
                    </div>
                    <div class="row row-bottom-padded-md">
                        <div class="col-md-6 text-center animate-box">
                            <div class="wedding-events">
                                @if($calon->fotoBody->foto_pertama)
                                <div class="ceremony-bg"
                                    style="background-image: url({{$calon->fotoBody->foto_pertama}});">
                                </div>
                                @endif
                                <div class="desc">
                                    <h3>Akad Nikah</h3>
                                    <p><strong>{{date("l jS F Y", strtotime($calon->akadNikah->tgl))}}</strong></p>
                                    <p><strong>{{$calon->akadNikah->waktu}}</strong></p>
                                    <p><strong>{{$calon->akadNikah->tempat}}</strong></p>
                                    <p><a href="https://maps.google.com/?q={{$calon->akadNikah->google_loc}}"
                                            class="icon-location">Location</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 text-center animate-box">
                            <div class="wedding-events">
                                @if($calon->fotoBody->foto_kedua)
                                <div class="ceremony-bg"
                                    style="background-image: url({{$calon->fotoBody->foto_kedua}});">
                                </div>
                                @endif
                                <div class="desc">
                                    <h3>Resepsi</h3>
                                    <p><strong>{{date("l jS F Y", strtotime($calon->resepsi->tgl_rsp))}}</strong></p>
                                    <p><strong>{{$calon->resepsi->waktu_rsp}}</strong></p>
                                    <p><strong>{{$calon->resepsi->tempat_rsp}}</strong></p>
                                    <p><a href="https://maps.google.com/?q={{$calon->resepsi->google_loc_rsp}}"
                                            class="icon-location">Location</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="col-md-12">
                            <div id="map" class="fh5co-map"></div>
                        </div>
                    </div> -->
                </div>
            </div>

            <div id="fh5co-gallery">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                            <h2>Wedding Gallery</h2>
                        </div>
                    </div>
                    <div class="row">
                        @php
                        $index = 0;
                        @endphp
                        @foreach($calon->fotoFooter as $data)
                        @if(($index == (count($calon->fotoFooter)) || $index % 3 == 0 ) && $index != 0)
                    </div>

                    <div class="col-md-4">
                        @endif
                        @if($index == 0)
                        <div class="col-md-4">
                            @endif
                            <div class="gallery animate-box">
                                <a class="gallery-img image-popup image-popup" href="{{$data->foto}}"><img
                                        src="{{$data->foto}}" class="img-responsive" alt=""></a>
                            </div>

                            @php
                            $index++;
                            @endphp
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>


            <div id="fh5co-started" style="background-image:url();" data-stellar-background-ratio="0.5">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row animate-box">
                        <div class="col-md-8 col-md-offset-2 text-center heading-section">
                            <h2>Guest Book</h2>
                            <p>Please Fill-up the form to notify you that you're attending. Thanks.
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
                                        <label for="nama" class="sr-only">Nama</label>
                                        <input type="nama" class="form-control" name="nama" id="nama"
                                            placeholder="Nama">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label for="comment" class="sr-only">Comment</label>
                                        <input type="comment" class="form-control" name="comment" id="comment"
                                            placeholder="Comment">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <button type="submit" class="btn btn-primary btn-block">Kirim</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                @foreach($calon->comment as $data)
                                <p>&ldquo;{{ $data->nama }}&rdquo;</p>
                                <p>&ldquo;{{ $data->comment }}&rdquo;</p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer>
                <div id="footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h2>{{$calon->nick_pria}} &amp; {{$calon->nick_wanita}}</h2>
                            </div>
                            <div class="col-md-6 col-md-offset-3 text-center">
                                <p class="fh5co-social-icons">
                                    <a href="https://www.instagram.com/alhaqthoriq/"><i class="icon-instagram"></i></a>
                                </p>
                                <p class="copyright text-center">&copy;2021 All
                                    Rights Reserved. <a href="index.html">TimeStoryXCloudStudio<img
                                            src="assets/img/silver/awesome.jpg"></a>
                                </p>
                                <!-- <p><a href="#"></a>2021. All Rights Reserved<br>Made with Feel
                                    <i class="icon-heart3"></i> by TimeStoryXCloudStudio <img
                                        src="assets/img/silver/awesome.jpg">
                                </p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </footer>



        </div>
        <!-- END fh5co-page -->

    </div>
    <!-- END fh5co-wrapper -->

    <!-- Google Map -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"> -->
    </script>
    <!-- jQuery -->

    <script src="{{asset('assets/dist/silver/scripts.min.js')}}"></script>
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
            document.getElementById("demo").innerHTML = "The Wedding Ceremony is Over";
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