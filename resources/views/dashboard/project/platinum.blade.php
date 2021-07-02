<!doctype html>
<html class="no-js" lang="en">

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
    <!-- Place favicon.ico in the root directory -->
    <!-- bootstrap.min.css -->
    <link rel="stylesheet" href="{{asset('assets/css/platinum/bootstrap.min.css')}}">
    <!-- magnific-popup.css -->
    <link rel="stylesheet" href="{{asset('assets/css/platinum/magnific-popup.css')}}">
    <!-- slicknav.min.css -->
    <!-- <link rel="stylesheet" href="{{asset('assets/css/platinum/slicknav.min.css')}}"> -->
    <!-- font-awesome.min.css -->
    <link rel="stylesheet" href="{{asset('assets/css/platinum/font-awesome.min.css')}}">
    <!-- owl.carousel.min.css -->
    <link rel="stylesheet" href="{{asset('assets/css/platinum/owl.carousel.min.css')}}">
    <!-- flaticon.css -->
    <link rel="stylesheet" href="{{asset('assets/css/platinum/flaticon.css')}}">
    <!-- swiper.min.css -->
    <link rel="stylesheet" href="{{asset('assets/css/platinum/swiper.min.css')}}">
    <!-- default-css.css -->
    <link rel="stylesheet" href="{{asset('assets/css/platinum/default-css.css')}}">
    <!-- style.css -->
    <link rel="stylesheet" href="{{asset('assets/css/platinum/style.css')}}">

    <!-- <link rel="stylesheet" href="{{asset('assets/css/platinum/style.scss')}}"> -->
    <!-- responsive.css -->
    <link rel="stylesheet" href="{{asset('assets/css/platinum/responsive.css')}}">

    <!-- <link rel="stylesheet" href="{{asset('assets/css/premium/animate.css')}}"> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css">

    <!-- <link rel="stylesheet" href="{{asset('assets/css/platinum/bt.css')}}"> -->

    <link rel="stylesheet" href="{{asset('assets/css/premium/icomoon.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/platinum/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/platinum/slick-theme.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Lobster+Two' rel='stylesheet'>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

    <!-- <script>
    wow = new WOW({
        boxClass: 'wow', // default
        animateClass: 'animated', // change this if you are not using animate.css
        offset: 0, // default
        mobile: true, // keep it on mobile
        live: true // track if element updates
    })
    wow.init();
    </script> -->

    <style>
    @font-face {
        font-family: La-storia-Demo;
        src: url("assets/fonts/La-storia-Demo.otf") format("opentype");
    }

    body,
    html {
        height: 100%;
        margin: 0;
    }

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

    .centered {
        justify-content: center;
    }

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

        .qbootstrap-cover .display-t .display-tc .button4 {
            width: 260px;
            display: table-cell;
            vertical-align: middle;

        }
    }

    @media screen and (max-width: 360px) {

        .qbootstrap-cover .display-t .display-tc .button4 {
            width: 230px;
            margin-left: auto;
            margin-right: auto;
        }
    }

    /* @media screen and (max-width: 360px) {

        .qbootstrap-cover .display-t .display-tc .button4 {
            width: 350px;
        }
    } */


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
        background: <?=$calon->color ?>;
        opacity: .8;
        left: 0;
        top: 0;
    }

    .count-down-section #clock {
        color: <?=$calon->color ?>;
        overflow: hidden;
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
        background: <?=$calon->color ?>;
        opacity: .9;
    }

    .welcome-content {
        text-align: center;
        padding: 100px 0;
    }

    .welcome-content h2 {
        font-size: 45px;
        color: #fff;
        font-family: 'Great Vibes', cursive;
    }

    .welcome-content p {
        font-size: 16px;
        padding: 10px 0px 20px;
        color: #fff;
        /* max-width: 700px; */
        margin-bottom: 0px;
    }

    .btn a {
        display: inline-block;
        background: #fff;
        color: <?=$calon->color ?>;
        padding: 10px 38px;
        font-size: 16px;
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
        background: <?=$calon->color ?>;
        opacity: .5;
        z-index: -1;
    }

    .section-title-guest h2 {
        position: relative;
        font-size: 35px;
        font-family: 'Great Vibes', cursive;
        margin-bottom: 50px;
        color: #fff;
        ;
    }

    .guest-area p {
        font-size: 18px;
    }

    .section-title-guest h2:before {
        position: absolute;
        content: "";
        /* background: url(assets/img/platinum/section/4.png) no-repeat center center / cover; */
        width: 26%;
        height: 22%;
        top: -13px;
        left: 37%;
    }

    .section-title-guest h2:after {
        position: absolute;
        content: "";
        /* background: url(assets/img/platinum/section/4.png) no-repeat center center / cover; */
        width: 26%;
        height: 22%;
        bottom: -13px;
        left: 37%;
    }

    .guest-area.guest-2:before {
        background: #9a8c40;
    }

    .guest-wrap {
        background: rgba(255, 255, 255, .5);
        padding: 40px;
    }

    .section-title2.section-title3 h2:before {
        position: absolute;
        content: "";
        /* background: url(assets/img/platinum/section/3.png) no-repeat center center / cover; */
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
        background: #fff url(assets/img/platinum/select-icon.png) no-repeat calc(100% - 15px) center;
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
        background: <?=$calon->color ?>;
        color: #fff;
        border-radius: 5px;
        margin-top: 20px;
        cursor: pointer;
    }

    .guest-2 button#submit {
        background: <?=$calon->color ?>;
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

    h1 {
        color: <?=$calon->color ?>;
    }

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
        background: <?=$calon->color ?>;
        opacity: .5;
        z-index: -1;
    }

    .section-title-comment h2 {
        position: relative;
        font-size: 35px;
        font-family: 'Great Vibes', cursive;
        margin-bottom: 50px;
        color: #fff;
        ;
    }

    .section-title-comment h2:before {
        position: absolute;
        content: "";
        /* background: url(assets/img/platinum/section/4.png) no-repeat center center / cover; */
        width: 26%;
        height: 22%;
        top: -13px;
        left: 37%;
    }

    .section-title-comment h2:after {
        position: absolute;
        content: "";
        /* background: url(assets/img/platinum/section/4.png) no-repeat center center / cover; */
        width: 26%;
        height: 22%;
        bottom: -13px;
        left: 37%;
    }

    .comment-area p {
        font-size: 18px;
    }

    .comment-area.guest-2:before {
        background: #9a8c40;
    }

    .comment-wrap {
        background: rgba(255, 255, 255, .5);
        padding: 40px;
    }

    .section-title2.section-title3 h2:before {
        position: absolute;
        content: "";
        /* background: url(assets/img/platinum/section/3.png) no-repeat center center / cover; */
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
        background: #fff url(assets/img/platinum/select-icon.png) no-repeat calc(100% - 15px) center;
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
        background: <?=$calon->color ?>;
        color: #fff;
        border-radius: 5px;
        margin-top: 20px;
        cursor: pointer;
    }

    .comment-2 button#submit {
        background: <?=$calon->color ?>;
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


    .section-title.svg-sm .svg {
        height: 160px;
        margin-bottom: -70px;
        padding: 0;
    }

    .section-title.colored .svg {
        fill: <?=$calon->color ?>;
    }

    .section-title h2 {
        position: relative;
        font-size: 35px;
        font-family: 'Great Vibes', cursive;
        margin-bottom: 50px;
        color: <?=$calon->color ?>;
    }

    .section-title h2:before {
        position: absolute;
        content: "";
        /* background: url(assets/img/platinum/svg/1.svg) no-repeat center center / cover; */
        width: 26%;
        height: 22%;
        top: -13px;
        left: 37%;
    }

    .section-title h2:after {
        position: absolute;
        content: "";
        /* background: url(assets/img/platinum/svg/2.svg) no-repeat center center / cover; */
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

    .section-title2 h2 {
        position: relative;
        font-size: 50px;
        font-family: 'Great Vibes', cursive;
        margin-bottom: 50px;
        padding-bottom: 20px;
        color: #9a8c40;
    }

    .section-title2 h2:before {
        position: absolute;
        content: "";
        /* background: url(assets/img/platinum/section/3.png) no-repeat center center / cover; */
        width: 18%;
        height: 63%;
        bottom: -9px;
        left: 41%;
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
        font-size: 20px;
        font-family: "Lobster Two";
        color: <?=$calon->color ?>;
    }

    .couple-content2 h4 {
        font-size: 25px;
        color: <?=$calon->color ?>;
    }


    .couple-content p {
        margin-top: 0px;
        margin-right: 0px;
        margin-bottom: 0px;
        margin-left: 0px;
        font-family: "Arial";
        font-size: 14px;
        line-height: normal;
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
        color: <?=$calon->color ?> !important;
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
        /* background: url(assets/img/platinum/couple/4.png) no-repeat center center / cover; */
    }

    .couple-img2:after {
        position: absolute;
        content: "";
        left: 10px;
        top: 11px;
        width: 94%;
        height: 95%;
        /* background: url(assets/img/platinum/couple/5.png) no-repeat center center / cover; */
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
        /* background: url(assets/img/platinum/couple/6.png) no-repeat center center / cover; */
    }

    .couple-img3:after {
        position: absolute;
        content: "";
        left: 52%;
        bottom: 10px;
        width: 45%;
        height: 51%;
        /* background: url(assets/img/platinum/couple/7.png) no-repeat center center / cover; */
    }


    /*===================================
couple-area end
=====================================*/

    /* //gallery  */

    .gallery {
        position: relative;
        background: url("{{$calon->fotoBody->foto_pertama}}");
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
    }

    .gallery:before {
        content: "";
        width: 100%;
        height: 100%;
        position: absolute;
        background: <?=$calon->color ?>;
        opacity: .8;
        left: 0;
        top: 0;
    }

    .section-title-gallery h2 {
        position: relative;
        font-size: 35px;
        font-family: 'Great Vibes', cursive;
        margin-bottom: 50px;
        color: #fff;
        ;
    }

    .section-title-gallery h2:before {
        position: absolute;
        content: "";
        /* background: url(assets/img/platinum/section/2.png) no-repeat center center / cover; */
        width: 26%;
        height: 22%;
        top: -13px;
        left: 37%;
    }

    .section-title-gallery h2:after {
        position: absolute;
        content: "";
        /* background: url(assets/img/platinum/section/1.png) no-repeat center center / cover; */
        width: 26%;
        height: 22%;
        bottom: -13px;
        left: 37%;
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

    /* //header area logo  */
    .sticky-header.sticky .header-area-3 .logo h1 a {
        color: <?=$calon->color ?>;
    }

    .sticky-header.sticky .header-area-3 .logo h1 a span {
        color: <?=$calon->color ?>;
    }

    /* //Footer  */
    /* Footer */
    footer {
        background: url(assets/img/platinum/footer.jpg) no-repeat;
        background-size: cover;
        background-position: bottom;
        background-attachment: fixed;
        position: relative;
    }

    footer .nav-link:hover:before {
        background: none;
    }

    footer .nav-link::after {
        display: none !important;
    }

    footer:before {
        content: "";
        width: 100%;
        height: 100%;
        position: absolute;
        background: <?=$calon->color ?>;
        opacity: .8;
        left: 0;
        top: 0;
    }

    .footer__title {
        position: relative;
        font-family: "Satisfy";
        /* font-size: <?=$calon->size_font ?>px; */
        font-size: 30px;
        line-height: 40px;
        /* line-height: 2.5rem; */
        margin-bottom: 40px;
        margin-top: 20px;
    }

    /* 
    .footer__title h2 {
        font-size: 20px;
    } */

    @media only screen and (min-width: 768px) {
        .footer__title {
            font-size: 2.75rem;
            line-height: 3.25rem;
        }
    }

    .copyright {
        padding-right: 20px;
    }

    /* //auto resize  */
    /* .resize {
        overflow: auto;
        overflow-x: hidden;
        overflow-y: hidden;
    } */

    /* //story area  */
    .story-top:before,
    .story-bottom:before {
        content: '\f10a';
        font-family: "Flaticon";
        position: absolute;
        top: -28px;
        left: 50%;
        z-index: 20;
        display: block;
        font-size: 50px;
        color: <?=$calon->color ?>;
    }

    .story a.story-btn {
        font-weight: 500;
        color: <?=$calon->color ?>;
        text-transform: uppercase;
        font-size: 17px;
    }

    .story .story-content h2 {
        margin-bottom: 2px;
        font-family: 'Great Vibes', cursive;
        font-size: 22px;
        color: <?=$calon->color ?>;
    }

    .story-icon span:before {
        font-size: 30px;
        line-height: 30px;
        color: <?=$calon->color ?>;
    }

    .story-area a.theme-btn:hover {
        color: <?=$calon->color ?>;
    }

    /* // service area alias when n where  */
    .service-area-menu li a.active,
    .service-area-menu li a:hover {
        background: #e7e7e7;
        color: #fff;
    }

    .service-area-menu ul {
        margin-top: 50px;
        background: <?=$calon->color ?>;
    }

    .ceromony-content h3 {
        font-size: 20px;
        color: <?=$calon->color ?>;
        margin-bottom: 16px;
    }

    .ceromony-content a {
        color: <?=$calon->color ?>;
        font-weight: 600;
    }


    /* gift content */
    .nomor-rekening {
        margin: auto 0;
        background-color: #e2e0e0;
    }

    .nomor-rekening h3 {
        color: <?=$calon->color ?>;
        font-size: 20px;
    }

    .nomor-rekening p {
        margin-bottom: 20px;
        font-size: 18px;
    }

    .gift-img {
        background-color: <?=$calon->color ?>;
        padding: 20px;
        height: 300px;
    }

    .gift-img img {
        display: block;
        margin: auto;
        width: 250px
    }

    /* //music box  */
    .music-box.music-box-2 button {
        color: <?=$calon->color ?>;
    }

    /* //loader preloader  */
    .heart,
    .heart:before,
    .heart:after {
        display: block;
        width: 50px;
        height: 50px;
        background-color: <?=$calon->color ?>;
        -webkit-transform: rotateZ(45deg);
        transform: rotateZ(45deg);
    }

    .text-center {
        text-align: center !important;
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

    @media screen and (max-width: 836px) {

        .qbootstrap-cover .display-tc h2,
        .video-hero .display-tc h2 {
            font-size: <?=$calon->size_font ?>px;
        }
    }

    /* // video  */
    .video-card {
        margin-top: 5px;
        clear: both;
        text-align: center;
    }

    .video-card-top {
        border-radius: 10px;
        border-top: 10px;
        box-shadow: 16px 13px 42px -17px rgba(0, 0, 0, 0.63);
        height: 250px;
        width: 250px;
    }

    @media screen and (min-width: 550px) {
        .video-card {
            margin-top: -100px;
            clear: both;
            text-align: center;
        }

        .video-card-top {
            border-radius: 10px;
            border-top: 10px;
            box-shadow: 16px 13px 42px -17px rgba(0, 0, 0, 0.63);
            height: 320px;
            width: 350px;
        }
    }

    @media screen and (max-width: 375px) {
        .video-card {
            margin-top: 5px;
            clear: both;
            text-align: center;
        }

        .video-card-top {
            border-radius: 10px;
            border-top: 10px;
            box-shadow: 16px 13px 42px -17px rgba(0, 0, 0, 0.63);
            height: 200px;
            width: 200px;
        }
    }

    img.gallery {
        width: 100%;
        height: 400px;
        object-fit: cover;
    }

    @media screen and (min-width: 500px) {
        img.gallery {
            width: 100%;
            height: 620px;
            object-fit: cover;
        }
    }

    .comment-box {
        padding: 20px;
    }

    .media-body {
        border-radius: 10px;
        max-height: 300px;
        overflow: auto;
    }

    .protokol-covid {
        text-align: center;
        padding: 30px 20px;
        background-color: <?=$calon->color ?>;
        ;
    }

    .protokol-covid h5,
    .protokol-covid p {
        margin: 20px;
        color: white !important;
    }
    </style>


</head>

<body id="home">
    <div class="preloader">
        <div class="hart-wrap">
            <div class="heart"></div>
        </div>
    </div>

    <!-- prealoader area end -->

    <!-- header-area start -->
    <header id="sticky-header" class="sticky-header">
        <div class="header-area header-area-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-11 col-sm-11 col-10">
                        <div class="logo">
                            <h1><a href="#">{{$calon->nick_pria}}<span><i class="fa fa-heart"
                                            aria-hidden="true"></i></span>{{$calon->nick_wanita}}</a></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-area end -->
    <!-- //Gateway  -->
    <div class="gateway gt-section" id="gt">
        <div class="qbootstrap-hero" data-section="home">
            <div class="qbootstrap-overlay"></div>
            <div class="qbootstrap-cover text-center center-bg" data-stellar-background-ratio="0.5">
                <div class="display-t">
                    <div class="display-tc">
                        <div class="container">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="slider-content">
                                    <div class="col-lg-12">
                                        @if (isset($qs['u']))
                                        <h6>Dear {{ Str::title($qs['u'])}},</h6>
                                        @endif
                                        <p><strong>You're Invited!</strong></h6>
                                        <h4>We're Getting Married</h4>
                                        <h2><strong>{{$calon->nick_pria}} &amp;</strong></h2>
                                        <h2><strong>{{$calon->nick_wanita}}</strong></h2>
                                        <p><button href="#" id="play-music" class="button text-center button4">
                                                <img src="{{ asset('assets/img/logo/tobeabride.ico') }}" width="25px"
                                                    height="25px" alt="" srcset="">
                                                Open
                                                Invitation</button></p>
                                    </div>

                                </div>
                                @if ($calon->song->video)
                                <div class="video-card">
                                    <iframe id="yt" allowfullscreen="" class="YOUTUBE-iframe-video video-card-top"
                                        data-thumbnail-src="" frameborder="0" src="{{$calon->song->video}}">
                                    </iframe>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- slider-area start -->
    <div class="qbootstrap-hero" data-section="home">
        <div class="qbootstrap-overlay"></div>
        @if($calon->fotoHeader->foto_header)
        <div class="qbootstrap-cover text-center center-bg bg-cover" data-stellar-background-ratio="0.5"
            style="background-image:url({{$calon->fotoHeader->foto_header}});">
            @endif
            <div class="display-t">
                <div class="display-tc">
                    <div class="container">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="slider-content">
                                <div class="col-lg-12">
                                    <h4>We're Getting Married</h4>
                                    <h2><strong>{{$calon->nick_pria}} &amp;</strong>
                                        <h2><strong>{{$calon->nick_wanita}}</strong></h2>
                                        <p>{{$tanggalIndoAkad}}</p>
                                </div>
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
                <div class="text-center section-title svg-sm colored wow slideInUp">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="200px" height="200px"
                        style="margin-bottom: -105px; margin-top: -105px" viewBox="0 0 1280.000000 640.000000"
                        preserveAspectRatio="xMidYMid meet">
                        <g transform="translate(0.000000,640.000000) scale(0.100000,-0.100000)"
                            fill="<?=$calon->color ?>" stroke="none">
                            <path
                                d="M5910 3704 c-51 -9 -146 -48 -186 -74 -64 -45 -122 -143 -124 -210 0 -47 21 -102 57 -141 42 -47 89 -53 123 -17 31 34 25 64 -22 108 l-43 39 20 37 c31 58 87 89 159 89 102 -1 177 -53 225 -155 31 -67 35 -157 8 -208 -41 -76 -170 -136 -292 -136 -90 1 -168 22 -335 90 -277 114 -293 119 -415 119 -129 0 -170 -14 -343 -116 l-103 -62 -97 51 c-140 73 -213 93 -363 99 -157 7 -202 -2 -352 -74 l-117 -56 -153 76 c-83 42 -247 125 -362 184 -318 163 -521 230 -769 254 -255 26 -396 -26 -866 -316 -377 -232 -432 -257 -621 -274 -315 -29 -594 59 -852 269 -96 78 -103 65 -10 -20 244 -223 561 -340 884 -327 194 8 277 40 653 250 240 133 413 219 511 252 164 56 385 41 647 -45 133 -44 295 -120 611 -288 l189 -100 -124 -60 c-170 -83 -217 -97 -313 -96 -169 3 -337 64 -680 248 -318 171 -406 206 -519 206 -72 0 -143 -30 -204 -85 -58 -52 -75 -104 -70 -213 5 -99 29 -156 90 -208 47 -39 147 -84 205 -90 138 -17 276 67 290 176 7 51 -1 82 -33 119 -31 37 -66 40 -88 9 -22 -31 -21 -35 16 -68 28 -26 30 -32 20 -55 -6 -14 -26 -34 -44 -46 -43 -26 -121 -22 -166 9 -38 28 -82 114 -82 162 0 73 73 140 151 140 68 0 173 -42 429 -171 340 -172 516 -229 699 -229 43 0 102 7 132 16 61 18 217 95 315 155 l66 40 92 -35 c185 -70 340 -106 502 -113 166 -8 294 23 519 127 195 90 289 115 383 100 72 -12 70 -11 295 -101 297 -119 438 -146 592 -115 103 21 229 82 299 147 l56 51 56 -51 c70 -65 196 -126 299 -147 154 -31 295 -4 592 115 225 90 223 89 295 101 69 11 152 -3 250 -42 68 -27 77 -33 66 -47 -11 -14 -11 -14 3 -3 14 10 36 4 134 -38 189 -81 247 -95 410 -95 176 0 332 31 517 102 l66 25 59 -35 c91 -55 233 -123 292 -141 30 -9 89 -16 132 -16 183 0 358 57 699 229 256 129 361 171 429 171 78 0 151 -67 151 -140 0 -48 -44 -134 -82 -162 -45 -31 -123 -35 -166 -9 -18 12 -38 32 -44 46 -10 23 -8 29 20 55 37 33 38 37 16 68 -42 60 -124 -13 -124 -111 0 -82 83 -165 189 -188 76 -16 144 -5 228 36 124 61 173 144 173 289 0 86 -21 138 -75 185 -60 53 -130 81 -201 81 -111 0 -204 -36 -503 -197 -321 -173 -465 -231 -636 -254 -112 -14 -185 2 -345 77 l-114 55 219 116 c346 182 487 248 623 293 262 85 483 101 647 45 98 -33 271 -119 511 -252 376 -210 459 -242 653 -250 323 -13 640 104 884 327 93 85 86 98 -10 20 -258 -210 -537 -298 -852 -269 -189 17 -244 42 -621 274 -350 216 -504 289 -667 317 -135 23 -394 -17 -608 -92 -135 -48 -244 -99 -525 -246 -140 -73 -287 -147 -326 -164 l-71 -32 -132 66 c-162 80 -208 90 -371 83 -141 -5 -216 -25 -342 -88 l-77 -39 -77 47 c-42 25 -108 60 -148 77 -65 28 -80 31 -181 31 -122 0 -138 -5 -415 -119 -167 -68 -245 -89 -335 -90 -122 0 -251 60 -292 136 -27 51 -23 141 8 208 48 102 123 154 225 155 72 0 128 -31 159 -89 l20 -37 -43 -39 c-47 -44 -53 -74 -22 -108 34 -36 81 -30 123 17 73 81 73 178 1 282 -85 124 -296 178 -464 120 -105 -37 -215 -112 -263 -181 l-17 -24 -17 24 c-48 69 -159 145 -259 179 -62 20 -169 33 -214 25z m-1500 -562 c74 -23 152 -55 182 -76 20 -14 19 -15 -18 -34 -174 -89 -404 -94 -664 -16 -47 14 -88 29 -92 33 -12 11 157 93 220 108 83 18 289 10 372 -15z m4256 17 c54 -9 158 -55 243 -107 l34 -20 -69 -21 c-278 -82 -536 -61 -714 58 -24 16 106 66 245 95 42 8 204 6 261 -5z" />
                        </g>
                    </svg>
                    <h2>Happy Couple</h2>
                </div>
            </div>
            <div class="couple-wrap">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 couple-single wow slideInLeft">
                        <div class="couple-wrap2 couple-s-3">
                            <div class="couple-img3">
                                <img class="center" src="{{$calon->foto_wanita}}" style="max-width:100%;height:auto;"
                                    alt="">
                            </div>
                            <div class="couple-text">
                                <div class="couple-content">
                                    <h4><strong>{{$calon->calon_wanita}}</strong></h4>
                                    <p><strong>Putri Dari</strong></p>
                                    <p>Bpk. {{$calon->ayah_wanita}}</p>
                                    <p>Ibu {{$calon->ibu_wanita}}</p>
                                </div>
                                <div class="social-icon">
                                    <ol class="d-flex">
                                        <li>
                                            <a href="https://www.instagram.com/{{$calon->sosmed_wanita}}/">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 couple-single wow fadeInDown">
                        @if($calon->fotoHeader->foto_countdown)
                        <div class="couple-img2">
                            <img src="{{$calon->fotoHeader->foto_countdown}}" style="max-width:100%;height:auto;"
                                alt="">
                        </div>
                        @endif
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 couple-single md-0 wow slideInRight">
                        <div class="couple-wrap2 couple-s-3">
                            <div class="couple-img3">
                                <img class="center" src="{{$calon->foto_pria}}" style="max-width:100%;height:auto;"
                                    alt="">
                            </div>
                            <div class="couple-text">
                                <div class="couple-content">
                                    <h4><strong>{{$calon->calon_pria}}</strong></h4>
                                    <p><strong>Putra Dari</strong></p>
                                    <p>Bpk. {{$calon->ayah_pria}}</p>
                                    <p>Ibu {{$calon->ibu_pria}}</p>
                                </div>
                                <div class="social-icon">
                                    <ol class="d-flex">
                                        <li><a href="https://www.instagram.com/{{$calon->sosmed_pria}}/"><i
                                                    class="fa fa-instagram"></i></a></li>
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
    <div id="countdown" class="count-down-area count-down-area-sub">
        <section class="count-down-section section-padding parallax" data-speed="7">
            <div class="container">
                <div class="row wow fadeInDown">
                    <div class="col-12 col-md-4">
                        <h2 class="big"><span>We Are Waiting For.....</span> The Big Day</h2>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="count-down-clock">
                            <div id="clock">
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
    @if ($calon->loveStory->tgl_firstmeet)
    <div id="story" class="story-area ptb--100">
        <div class="container">
            <div class="col-l2">
                <div class="section-title text-center wow fadeInDown">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.0"
                        style="margin-bottom: -105px; margin-top: -105px;" width="160px" height="200px"
                        viewBox="0 0 1280.000000 640.000000" preserveAspectRatio="xMidYMid meet">
                        <metadata>
                            Created by potrace 1.15, written by Peter Selinger 2001-2017
                        </metadata>
                        <g transform="translate(0.000000,640.000000) scale(0.100000,-0.100000)"
                            fill="<?=$calon->color ?>" stroke="none">
                            <path
                                d="M758 3889 c-271 -33 -507 -150 -631 -310 -175 -228 -166 -576 20 -766 91 -93 232 -142 374 -128 196 18 324 101 398 255 35 73 36 78 36 195 0 114 -2 123 -32 187 -61 130 -166 209 -277 210 -136 1 -187 -117 -65 -154 35 -10 52 -9 111 6 l70 18 24 -23 c13 -13 37 -48 52 -78 25 -51 27 -66 27 -171 0 -105 -2 -119 -27 -165 -69 -133 -215 -204 -393 -192 -59 3 -99 12 -138 30 -135 61 -217 215 -217 402 0 155 46 263 161 377 61 61 95 86 170 122 144 69 268 97 474 103 276 9 497 -35 827 -163 48 -19 91 -34 96 -34 4 0 23 13 42 28 l34 29 -130 50 c-320 126 -516 171 -764 178 -91 2 -199 0 -242 -6z" />
                            <path
                                d="M11663 3890 c-168 -18 -383 -77 -627 -173 l-130 -50 34 -29 c19 -15 38 -28 42 -28 4 0 31 10 60 21 197 79 412 140 580 165 166 24 415 15 558 -21 160 -39 275 -100 369 -193 115 -114 161 -222 161 -377 0 -93 -24 -191 -64 -259 -65 -111 -155 -165 -291 -173 -178 -12 -324 59 -393 192 -25 46 -27 60 -27 165 0 105 2 120 27 171 15 30 39 65 52 78 l24 23 70 -18 c59 -15 76 -16 111 -6 122 37 71 155 -65 154 -111 -1 -216 -80 -277 -210 -30 -64 -32 -73 -32 -187 0 -117 1 -122 36 -195 57 -119 157 -203 283 -236 248 -66 473 24 574 229 101 205 75 459 -67 647 -176 234 -573 356 -1008 310z" />
                            <path
                                d="M4548 3861 c-75 -24 -118 -52 -172 -112 -61 -68 -81 -130 -80 -249 1 -105 31 -213 80 -291 14 -23 24 -42 22 -44 -2 -2 -71 35 -153 82 -389 223 -742 394 -975 473 -374 128 -778 142 -1100 38 -245 -78 -444 -243 -547 -453 -46 -93 -58 -149 -57 -265 1 -89 5 -116 27 -174 86 -220 281 -356 512 -356 96 0 166 18 260 64 132 66 230 164 235 236 5 62 -1 83 -34 116 -26 26 -42 34 -69 34 -74 0 -111 -68 -97 -179 7 -57 5 -60 -70 -103 -77 -44 -152 -61 -254 -56 -77 3 -101 9 -159 37 -187 90 -285 302 -232 504 59 227 295 440 543 492 93 19 310 20 417 1 327 -58 655 -191 1450 -588 504 -253 676 -323 938 -387 268 -66 545 -83 732 -47 308 60 514 239 581 505 25 100 16 249 -19 323 -88 182 -337 263 -579 188 -115 -35 -188 -106 -188 -182 0 -89 124 -106 196 -26 12 12 32 43 44 68 13 25 28 48 34 52 20 14 171 8 224 -7 73 -22 132 -70 165 -135 27 -52 28 -61 25 -165 -3 -103 -5 -115 -41 -189 -72 -151 -221 -264 -422 -318 -118 -31 -376 -32 -527 0 -422 88 -770 337 -856 612 -26 84 -23 233 5 286 29 54 93 109 151 128 47 17 207 22 228 8 6 -4 24 -35 39 -70 31 -69 55 -92 97 -92 58 0 82 60 50 125 -54 112 -260 168 -424 116z" />
                            <path
                                d="M8015 3874 c-152 -38 -250 -168 -179 -238 19 -20 63 -21 90 -2 11 8 33 43 49 78 15 35 33 66 39 70 21 14 181 9 228 -8 58 -19 122 -74 151 -128 28 -53 31 -202 5 -286 -86 -275 -434 -524 -856 -612 -151 -32 -409 -31 -527 0 -201 54 -350 167 -422 318 -36 74 -38 86 -41 189 -3 104 -2 113 25 165 33 65 92 113 165 135 53 15 205 21 224 7 5 -4 20 -27 33 -52 42 -82 91 -120 156 -120 47 0 85 36 85 82 0 72 -76 144 -188 178 -242 75 -491 -6 -579 -188 -35 -74 -44 -223 -19 -323 53 -212 201 -375 415 -458 226 -87 541 -87 898 0 262 64 434 134 938 387 795 397 1123 530 1450 588 120 21 332 18 432 -6 249 -59 470 -264 528 -487 53 -202 -45 -414 -232 -504 -131 -63 -314 -49 -437 33 l-49 33 2 88 c2 85 1 88 -28 117 -77 78 -197 -10 -171 -125 13 -56 55 -111 123 -162 121 -90 241 -133 372 -133 389 0 648 388 501 751 -157 388 -615 608 -1169 560 -270 -22 -476 -79 -773 -211 -171 -76 -458 -226 -699 -363 -82 -47 -151 -84 -153 -82 -2 2 8 21 22 44 49 78 79 186 80 291 1 132 -19 186 -98 266 -81 80 -145 106 -276 110 -52 1 -104 1 -115 -2z" />
                            <path
                                d="M2058 3560 c-20 -11 -39 -24 -42 -29 -9 -13 498 -237 804 -354 80 -30 249 -91 375 -135 127 -44 237 -83 245 -86 8 -4 23 -19 32 -36 33 -59 148 -60 156 -2 7 50 -54 87 -260 157 -310 106 -798 295 -1026 396 -135 60 -245 109 -246 109 -1 -1 -18 -10 -38 -20z" />
                            <path
                                d="M10454 3470 c-224 -100 -707 -287 -1022 -395 -206 -70 -267 -107 -260 -157 8 -58 123 -57 156 2 9 17 24 32 32 36 8 3 119 42 245 86 127 44 295 105 375 135 307 118 813 341 804 354 -5 9 -80 50 -86 48 -2 0 -112 -49 -244 -109z" />
                            <path
                                d="M3080 3240 c0 -3 37 -19 83 -35 81 -30 85 -30 340 -35 141 -3 257 -2 257 1 0 4 -28 19 -62 35 l-63 29 -278 5 c-152 3 -277 3 -277 0z" />
                            <path
                                d="M9435 3240 l-270 -5 -62 -29 c-35 -16 -63 -31 -63 -35 0 -3 116 -4 257 -1 255 5 259 5 341 35 45 16 82 33 82 37 0 5 -3 7 -7 6 -5 -1 -129 -5 -278 -8z" />
                            <path
                                d="M140 3205 l0 -35 341 0 c307 0 341 2 335 16 -3 9 -6 24 -6 35 0 18 -11 19 -335 19 l-335 0 0 -35z" />
                            <path d="M1012 3208 l3 -33 251 -3 251 -2 10 35 11 35 -265 0 -264 0 3 -32z" />
                            <path
                                d="M1766 3231 c-3 -4 -10 -20 -15 -34 l-10 -27 469 -2 c259 -2 470 -1 470 2 0 3 -37 20 -83 38 l-83 32 -371 0 c-205 0 -374 -4 -377 -9z" />
                            <path d="M4546 3205 l26 -35 799 0 799 0 0 35 0 35 -826 0 -825 0 27 -35z" />
                            <path d="M6630 3205 l0 -35 799 0 799 0 26 35 27 35 -825 0 -826 0 0 -35z" />
                            <path
                                d="M10198 3207 c-43 -18 -78 -34 -78 -37 0 -3 211 -4 470 -2 l470 2 -13 33 -13 32 -380 2 -379 1 -77 -31z" />
                            <path
                                d="M11273 3205 l10 -35 248 0 c265 0 259 -1 259 51 0 18 -10 19 -264 19 l-264 0 11 -35z" />
                            <path
                                d="M11990 3221 c0 -11 -3 -26 -6 -35 -6 -14 28 -16 335 -16 l341 0 0 35 0 35 -335 0 c-324 0 -335 -1 -335 -19z" />
                        </g>
                    </svg>
                    <h2>Our Story</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="story clearfix">
                        <div class="story-top"></div>
                        <div class="content-wrapper">
                            <div class="item wow slideInLeft">
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
                                    <h2><strong>First Meet</strong></h2>
                                    <span class="date">{{$calon->loveStory->tgl_firstmeet}}</span>
                                    <p>{{$calon->loveStory->story_firstmeet}},</p>
                                    <!-- <div class="story-button">
                                        <a class="theme-btn" href="#" target="_blank" title="READ MORE">READ MORE</a>
                                    </div> -->
                                </div>
                            </div>
                            <div class="item wow slideInRight">
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
                                    <h2><strong>First Date</strong></h2>
                                    <span class="date">{{$calon->loveStory->tgl_firstdate}}</span>
                                    <p>{{$calon->loveStory->story_firstdate}},</p>
                                    <!-- <div class="story-button">
                                        <a class="theme-btn" href="#" target="_blank" title="READ MORE">READ MORE</a>
                                    </div> -->
                                </div>
                            </div>
                            <div class="item wow slideInLeft">
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
                                    <h2><strong>In Relationship</strong></h2>
                                    <span class="date">{{$calon->loveStory->tgl_relationship}}</span>
                                    <p>{{$calon->loveStory->story_relationship}}</p>
                                    <!-- <div class="story-button">
                                        <a class="theme-btn" href="#" target="_blank" title="READ MORE">READ MORE</a>
                                    </div> -->
                                </div>
                            </div>
                            <div class="item wow slideInRight">
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
                                    <h2><strong>Engagement</strong></h2>
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
    @endif
    <!-- story area end -->
    <!-- welcome area start-->
    <div class="welcome-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="welcome-content wow slideInUp">
                        <h2>Welcome to our big day</h2>
                        <p>&ldquo;{{$calon->quotes->isi}}&rdquo;</p>
                        <p>&ldquo;{{$calon->quotes->judul}}&rdquo;</p>
                        <div class="btn"><a href="#rsvp">RSVP</a></div>
                        <div class="btn"><a href="#comment">COMMENT</a></div>
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
        <div class="container wow fadeInDown">
            <div class="col-l2">
                <div class="section-title text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="200px" height="200px"
                        style="margin-bottom: -105px; margin-top: -105px" viewBox="0 0 1280.000000 640.000000"
                        preserveAspectRatio="xMidYMid meet">
                        <g transform="translate(0.000000,640.000000) scale(0.100000,-0.100000)"
                            fill="<?=$calon->color ?>" stroke="none">
                            <path
                                d="M5910 3704 c-51 -9 -146 -48 -186 -74 -64 -45 -122 -143 -124 -210 0 -47 21 -102 57 -141 42 -47 89 -53 123 -17 31 34 25 64 -22 108 l-43 39 20 37 c31 58 87 89 159 89 102 -1 177 -53 225 -155 31 -67 35 -157 8 -208 -41 -76 -170 -136 -292 -136 -90 1 -168 22 -335 90 -277 114 -293 119 -415 119 -129 0 -170 -14 -343 -116 l-103 -62 -97 51 c-140 73 -213 93 -363 99 -157 7 -202 -2 -352 -74 l-117 -56 -153 76 c-83 42 -247 125 -362 184 -318 163 -521 230 -769 254 -255 26 -396 -26 -866 -316 -377 -232 -432 -257 -621 -274 -315 -29 -594 59 -852 269 -96 78 -103 65 -10 -20 244 -223 561 -340 884 -327 194 8 277 40 653 250 240 133 413 219 511 252 164 56 385 41 647 -45 133 -44 295 -120 611 -288 l189 -100 -124 -60 c-170 -83 -217 -97 -313 -96 -169 3 -337 64 -680 248 -318 171 -406 206 -519 206 -72 0 -143 -30 -204 -85 -58 -52 -75 -104 -70 -213 5 -99 29 -156 90 -208 47 -39 147 -84 205 -90 138 -17 276 67 290 176 7 51 -1 82 -33 119 -31 37 -66 40 -88 9 -22 -31 -21 -35 16 -68 28 -26 30 -32 20 -55 -6 -14 -26 -34 -44 -46 -43 -26 -121 -22 -166 9 -38 28 -82 114 -82 162 0 73 73 140 151 140 68 0 173 -42 429 -171 340 -172 516 -229 699 -229 43 0 102 7 132 16 61 18 217 95 315 155 l66 40 92 -35 c185 -70 340 -106 502 -113 166 -8 294 23 519 127 195 90 289 115 383 100 72 -12 70 -11 295 -101 297 -119 438 -146 592 -115 103 21 229 82 299 147 l56 51 56 -51 c70 -65 196 -126 299 -147 154 -31 295 -4 592 115 225 90 223 89 295 101 69 11 152 -3 250 -42 68 -27 77 -33 66 -47 -11 -14 -11 -14 3 -3 14 10 36 4 134 -38 189 -81 247 -95 410 -95 176 0 332 31 517 102 l66 25 59 -35 c91 -55 233 -123 292 -141 30 -9 89 -16 132 -16 183 0 358 57 699 229 256 129 361 171 429 171 78 0 151 -67 151 -140 0 -48 -44 -134 -82 -162 -45 -31 -123 -35 -166 -9 -18 12 -38 32 -44 46 -10 23 -8 29 20 55 37 33 38 37 16 68 -42 60 -124 -13 -124 -111 0 -82 83 -165 189 -188 76 -16 144 -5 228 36 124 61 173 144 173 289 0 86 -21 138 -75 185 -60 53 -130 81 -201 81 -111 0 -204 -36 -503 -197 -321 -173 -465 -231 -636 -254 -112 -14 -185 2 -345 77 l-114 55 219 116 c346 182 487 248 623 293 262 85 483 101 647 45 98 -33 271 -119 511 -252 376 -210 459 -242 653 -250 323 -13 640 104 884 327 93 85 86 98 -10 20 -258 -210 -537 -298 -852 -269 -189 17 -244 42 -621 274 -350 216 -504 289 -667 317 -135 23 -394 -17 -608 -92 -135 -48 -244 -99 -525 -246 -140 -73 -287 -147 -326 -164 l-71 -32 -132 66 c-162 80 -208 90 -371 83 -141 -5 -216 -25 -342 -88 l-77 -39 -77 47 c-42 25 -108 60 -148 77 -65 28 -80 31 -181 31 -122 0 -138 -5 -415 -119 -167 -68 -245 -89 -335 -90 -122 0 -251 60 -292 136 -27 51 -23 141 8 208 48 102 123 154 225 155 72 0 128 -31 159 -89 l20 -37 -43 -39 c-47 -44 -53 -74 -22 -108 34 -36 81 -30 123 17 73 81 73 178 1 282 -85 124 -296 178 -464 120 -105 -37 -215 -112 -263 -181 l-17 -24 -17 24 c-48 69 -159 145 -259 179 -62 20 -169 33 -214 25z m-1500 -562 c74 -23 152 -55 182 -76 20 -14 19 -15 -18 -34 -174 -89 -404 -94 -664 -16 -47 14 -88 29 -92 33 -12 11 157 93 220 108 83 18 289 10 372 -15z m4256 17 c54 -9 158 -55 243 -107 l34 -20 -69 -21 c-278 -82 -536 -61 -714 58 -24 16 106 66 245 95 42 8 204 6 261 -5z" />
                        </g>
                    </svg>
                    <h2>When & Where</h2>
                </div>
            </div>
            <div class="service-area-menu">
                <ul class="nav nav-tabs d-flex">
                    <li class="active"><a data-toggle="tab" href="#Akad">Akad Nikah</a></li>
                    <li><a data-toggle="tab" href="#Resepsi">Resepsi</a></li>
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
                                        <span>{{$tanggalIndoAkad}},
                                            {{$calon->akadNikah->waktu}}</span>
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
                                        <span>{{$tanggalIndoResepsi}},
                                            {{$calon->resepsi->waktu_rsp}}</span>
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
                </div>
            </div>
        </div>
    </div>
    <!-- service-area end -->

    <!-- Section Gallery -->
    <div id="gallery" class="gallery-area gallery pt--100 pb--70">
        <div class="container wow slideInRight">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-gallery text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.0"
                            style="margin-bottom: -105px; margin-top: -105px" width="200px" height="200px"
                            viewBox="0 0 1280.000000 320.000000" preserveAspectRatio="xMidYMid meet">
                            <metadata>
                                Created by potrace 1.15, written by Peter Selinger 2001-2017
                            </metadata>
                            <g transform="translate(0.000000,320.000000) scale(0.100000,-0.100000)" fill="#fff"
                                stroke="none">
                                <path
                                    d="M5915 2729 c-77 -4 -279 -15 -450 -23 -977 -50 -1698 -139 -2483 -306 -722 -153 -1713 -219 -2182 -144 -157 25 -330 75 -368 106 -9 8 9 22 77 54 96 46 111 62 111 117 0 68 -103 126 -200 113 -25 -3 -88 -27 -140 -54 -107 -54 -140 -90 -140 -154 0 -214 476 -352 1145 -333 644 18 1068 66 1695 190 629 124 1146 200 1720 250 96 8 186 15 200 14 14 0 -72 -33 -190 -73 -260 -87 -410 -147 -595 -235 -410 -196 -671 -394 -761 -577 -37 -73 -39 -83 -39 -170 0 -87 2 -95 30 -136 119 -168 473 -236 895 -172 468 70 981 300 1245 558 220 214 189 406 -73 462 -238 50 -633 -23 -960 -177 -350 -164 -519 -312 -499 -435 8 -46 22 -63 77 -87 58 -27 209 -27 330 -2 274 56 595 230 673 364 l18 30 -28 7 c-15 3 -35 8 -44 10 -9 2 -25 -9 -37 -26 -17 -22 -31 -30 -55 -30 -25 0 -37 -7 -56 -35 -68 -101 -257 -186 -474 -214 -49 -7 -109 -9 -134 -5 -188 28 -30 233 273 355 231 93 478 143 674 137 138 -5 193 -21 240 -72 20 -23 25 -38 24 -81 -2 -308 -863 -694 -1474 -661 -375 20 -536 161 -432 379 73 154 275 322 572 476 252 130 485 215 847 306 494 125 925 171 1513 162 347 -5 496 -17 775 -58 817 -120 1601 -441 1927 -788 145 -154 178 -297 90 -390 -46 -48 -104 -67 -260 -83 -260 -27 -643 45 -998 187 -392 157 -635 358 -634 524 1 84 35 101 196 101 418 0 1079 -281 1087 -462 l2 -33 -65 3 c-199 10 -454 109 -569 221 -32 31 -63 64 -68 74 -9 17 -14 17 -51 7 -23 -6 -42 -14 -42 -18 0 -4 15 -27 34 -52 42 -58 126 -122 229 -176 92 -49 96 -57 10 -18 -95 42 -196 110 -249 167 -43 47 -54 54 -78 50 -38 -8 -42 -26 -16 -68 33 -53 133 -129 235 -180 169 -83 339 -127 501 -128 88 -1 107 2 155 25 30 14 74 35 99 46 48 23 80 64 80 104 0 42 -50 126 -103 174 -157 142 -458 280 -762 349 -93 22 -155 29 -275 32 -181 6 -251 -6 -370 -64 -141 -68 -173 -106 -173 -204 0 -166 203 -359 553 -528 297 -142 573 -222 864 -250 283 -28 476 0 675 98 129 63 174 99 207 167 38 78 32 164 -21 272 -74 151 -284 330 -560 476 -60 33 -111 60 -113 61 -2 2 9 15 23 29 16 16 37 26 55 26 34 0 70 31 70 58 0 55 -97 74 -137 28 -15 -17 -32 -26 -52 -26 -33 0 -69 -39 -55 -61 5 -8 2 -10 -7 -7 -181 75 -307 123 -454 175 l-180 63 70 -6 c462 -38 1007 -119 1610 -239 612 -122 961 -163 1574 -186 562 -21 874 22 1157 161 130 63 196 120 209 181 23 104 -72 193 -205 193 -58 0 -76 -6 -158 -48 -80 -41 -96 -53 -109 -84 -14 -34 -14 -40 3 -71 38 -69 137 -91 221 -50 24 12 46 20 48 17 2 -2 -5 -18 -16 -35 -24 -37 -88 -65 -219 -94 -195 -42 -322 -53 -620 -52 -604 2 -1065 51 -1733 183 -862 170 -1506 250 -2327 290 -124 6 -349 18 -500 25 -288 16 -885 18 -1125 4z m6646 -256 c-12 -20 -14 -14 -5 12 4 9 9 14 11 11 3 -2 0 -13 -6 -23z m-12150 -187 c91 -46 52 -37 -49 12 -71 34 -122 79 -122 108 0 9 21 -6 48 -33 27 -27 82 -66 123 -87z m7931 68 c280 -101 587 -259 774 -400 98 -74 217 -202 250 -271 19 -38 29 -76 31 -117 l3 -61 -15 59 c-24 93 -73 174 -162 267 -167 174 -439 336 -813 484 -80 32 -147 59 -149 61 -10 9 12 3 81 -22z m-2877 -234 c46 -22 75 -64 74 -107 l-1 -28 -15 35 c-19 45 -60 89 -98 106 -16 7 -24 13 -16 14 8 0 33 -9 56 -20z m2893 -126 c235 -97 392 -223 392 -313 l0 -36 -19 40 c-10 22 -31 55 -47 74 -49 58 -182 149 -308 212 -66 32 -117 59 -113 59 5 0 47 -16 95 -36z m-1024 -163 c83 -112 249 -234 475 -347 69 -35 123 -64 119 -64 -14 0 -194 82 -268 123 -246 134 -401 290 -399 402 0 27 2 26 18 -17 11 -26 35 -70 55 -97z m-3251 -238 c26 -29 9 -30 -21 -3 -12 12 -22 31 -22 43 1 21 1 21 12 2 6 -11 20 -30 31 -42z m-668 -109 c19 -66 83 -137 161 -178 59 -32 18 -23 -48 10 -70 35 -115 86 -127 145 -20 94 -11 108 14 23z" />
                                <path
                                    d="M3986 2395 c-13 -14 -34 -25 -49 -25 -54 0 -77 -65 -35 -94 33 -24 75 -20 104 9 15 15 36 25 54 25 34 0 70 31 70 58 0 54 -102 73 -144 27z" />
                                <path
                                    d="M3722 2339 c-18 -4 -43 -16 -56 -28 -12 -11 -31 -21 -42 -21 -26 0 -64 -27 -64 -46 0 -18 -4 -18 -41 2 -56 28 -124 20 -216 -26 -90 -45 -113 -68 -113 -115 1 -57 65 -105 141 -105 82 0 249 98 249 147 0 11 4 11 21 2 31 -16 106 -5 133 20 12 11 32 21 45 21 12 0 36 14 53 30 24 25 29 36 23 58 -3 15 -12 33 -19 40 -19 19 -75 30 -114 21z" />
                                <path
                                    d="M9062 2315 c-17 -14 -39 -25 -50 -25 -36 0 -72 -38 -72 -76 0 -68 103 -97 174 -49 20 14 45 25 55 25 34 0 71 39 71 75 0 47 -37 75 -101 75 -36 0 -55 -6 -77 -25z" />
                                <path
                                    d="M9427 2259 c-21 -3 -50 -15 -65 -26 -15 -11 -40 -23 -56 -27 -16 -4 -41 -20 -57 -36 -70 -69 -4 -170 112 -170 59 0 220 78 237 114 16 36 15 62 -4 92 -30 44 -96 66 -167 53z" />
                                <path
                                    d="M9896 2150 c10 -10 254 -114 362 -155 40 -15 71 -29 69 -32 -3 -2 -85 17 -183 43 -209 55 -244 61 -228 45 41 -44 751 -289 1089 -376 403 -104 742 -131 827 -66 13 10 39 23 58 30 44 15 80 49 80 76 0 60 -86 85 -421 125 -729 85 -1200 172 -1568 289 -51 16 -90 26 -85 21z" />
                                <path
                                    d="M2900 2124 c-332 -107 -846 -201 -1520 -279 -293 -34 -348 -46 -449 -97 -94 -47 -107 -62 -97 -102 22 -89 283 -95 672 -15 356 73 980 281 1344 449 175 80 183 87 50 44z" />
                                <path
                                    d="M2980 1996 c-361 -125 -778 -331 -995 -491 -138 -102 -257 -228 -274 -292 -18 -66 32 -115 118 -115 35 0 68 11 139 48 78 39 104 59 150 113 215 252 501 487 850 695 61 38 112 70 112 72 0 2 -1 4 -2 3 -2 0 -46 -15 -98 -33z" />
                                <path
                                    d="M9830 2017 c0 -2 51 -33 113 -70 61 -37 126 -78 142 -92 28 -23 24 -22 -50 9 -103 43 -245 89 -251 83 -7 -6 10 -18 179 -127 276 -179 520 -384 701 -588 48 -54 101 -107 118 -117 47 -27 129 -24 175 7 21 14 50 29 65 32 68 16 87 85 42 152 -122 181 -399 375 -764 538 -192 85 -470 187 -470 173z" />
                                <path
                                    d="M3152 1880 c-46 -28 -87 -50 -92 -50 -5 0 -55 -31 -112 -69 -178 -120 -309 -250 -359 -355 -51 -108 -31 -181 49 -181 26 0 52 8 69 21 15 11 41 24 56 28 65 16 112 78 224 300 98 195 112 217 179 284 39 39 71 72 70 72 0 0 -38 -23 -84 -50z" />
                                <path
                                    d="M9717 1869 c60 -64 127 -158 118 -167 -2 -2 -21 9 -42 25 -66 52 -151 105 -163 101 -6 -2 11 -32 38 -68 57 -76 105 -158 191 -326 76 -147 109 -190 161 -205 43 -13 94 0 104 27 3 8 18 14 33 14 101 0 105 119 10 253 -79 110 -272 269 -472 387 -39 23 -38 21 22 -41z" />
                            </g>
                        </svg>
                        <h2>Our Gallery</h2>
                    </div>
                </div>
            </div>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    @if($calon->fotoBody->foto_kedua)
                    <div class="item active">
                        <img class="gallery" src="{{$calon->fotoBody->foto_kedua}}" alt="">
                    </div>
                    @endif
                    @foreach($calon->fotoFooter as $data)
                    <div class="item">
                        <img class="gallery" src="{{$data->foto}}" alt="">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- gift are start -->
    @if ($calon->nama_bank)
    <div id="gift" class="service-area ptb--100">
        <div class="container wow fadeInDown">
            <div class="col-l2">
                <div class="section-title text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="130px" height="200px"
                        style="margin-bottom: -105px; margin-top: -105px" viewBox="0 0 1280.000000 640.000000"
                        preserveAspectRatio="xMidYMid meet">
                        <g transform="translate(0.000000,640.000000) scale(0.100000,-0.100000)"
                            fill="<?=$calon->color ?>" stroke="none">
                            <path
                                d="M5910 3704 c-51 -9 -146 -48 -186 -74 -64 -45 -122 -143 -124 -210 0 -47 21 -102 57 -141 42 -47 89 -53 123 -17 31 34 25 64 -22 108 l-43 39 20 37 c31 58 87 89 159 89 102 -1 177 -53 225 -155 31 -67 35 -157 8 -208 -41 -76 -170 -136 -292 -136 -90 1 -168 22 -335 90 -277 114 -293 119 -415 119 -129 0 -170 -14 -343 -116 l-103 -62 -97 51 c-140 73 -213 93 -363 99 -157 7 -202 -2 -352 -74 l-117 -56 -153 76 c-83 42 -247 125 -362 184 -318 163 -521 230 -769 254 -255 26 -396 -26 -866 -316 -377 -232 -432 -257 -621 -274 -315 -29 -594 59 -852 269 -96 78 -103 65 -10 -20 244 -223 561 -340 884 -327 194 8 277 40 653 250 240 133 413 219 511 252 164 56 385 41 647 -45 133 -44 295 -120 611 -288 l189 -100 -124 -60 c-170 -83 -217 -97 -313 -96 -169 3 -337 64 -680 248 -318 171 -406 206 -519 206 -72 0 -143 -30 -204 -85 -58 -52 -75 -104 -70 -213 5 -99 29 -156 90 -208 47 -39 147 -84 205 -90 138 -17 276 67 290 176 7 51 -1 82 -33 119 -31 37 -66 40 -88 9 -22 -31 -21 -35 16 -68 28 -26 30 -32 20 -55 -6 -14 -26 -34 -44 -46 -43 -26 -121 -22 -166 9 -38 28 -82 114 -82 162 0 73 73 140 151 140 68 0 173 -42 429 -171 340 -172 516 -229 699 -229 43 0 102 7 132 16 61 18 217 95 315 155 l66 40 92 -35 c185 -70 340 -106 502 -113 166 -8 294 23 519 127 195 90 289 115 383 100 72 -12 70 -11 295 -101 297 -119 438 -146 592 -115 103 21 229 82 299 147 l56 51 56 -51 c70 -65 196 -126 299 -147 154 -31 295 -4 592 115 225 90 223 89 295 101 69 11 152 -3 250 -42 68 -27 77 -33 66 -47 -11 -14 -11 -14 3 -3 14 10 36 4 134 -38 189 -81 247 -95 410 -95 176 0 332 31 517 102 l66 25 59 -35 c91 -55 233 -123 292 -141 30 -9 89 -16 132 -16 183 0 358 57 699 229 256 129 361 171 429 171 78 0 151 -67 151 -140 0 -48 -44 -134 -82 -162 -45 -31 -123 -35 -166 -9 -18 12 -38 32 -44 46 -10 23 -8 29 20 55 37 33 38 37 16 68 -42 60 -124 -13 -124 -111 0 -82 83 -165 189 -188 76 -16 144 -5 228 36 124 61 173 144 173 289 0 86 -21 138 -75 185 -60 53 -130 81 -201 81 -111 0 -204 -36 -503 -197 -321 -173 -465 -231 -636 -254 -112 -14 -185 2 -345 77 l-114 55 219 116 c346 182 487 248 623 293 262 85 483 101 647 45 98 -33 271 -119 511 -252 376 -210 459 -242 653 -250 323 -13 640 104 884 327 93 85 86 98 -10 20 -258 -210 -537 -298 -852 -269 -189 17 -244 42 -621 274 -350 216 -504 289 -667 317 -135 23 -394 -17 -608 -92 -135 -48 -244 -99 -525 -246 -140 -73 -287 -147 -326 -164 l-71 -32 -132 66 c-162 80 -208 90 -371 83 -141 -5 -216 -25 -342 -88 l-77 -39 -77 47 c-42 25 -108 60 -148 77 -65 28 -80 31 -181 31 -122 0 -138 -5 -415 -119 -167 -68 -245 -89 -335 -90 -122 0 -251 60 -292 136 -27 51 -23 141 8 208 48 102 123 154 225 155 72 0 128 -31 159 -89 l20 -37 -43 -39 c-47 -44 -53 -74 -22 -108 34 -36 81 -30 123 17 73 81 73 178 1 282 -85 124 -296 178 -464 120 -105 -37 -215 -112 -263 -181 l-17 -24 -17 24 c-48 69 -159 145 -259 179 -62 20 -169 33 -214 25z m-1500 -562 c74 -23 152 -55 182 -76 20 -14 19 -15 -18 -34 -174 -89 -404 -94 -664 -16 -47 14 -88 29 -92 33 -12 11 157 93 220 108 83 18 289 10 372 -15z m4256 17 c54 -9 158 -55 243 -107 l34 -20 -69 -21 c-278 -82 -536 -61 -714 58 -24 16 106 66 245 95 42 8 204 6 261 -5z" />
                        </g>
                    </svg>
                    <h2>Gift</h2>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-7 p-5 nomor-rekening">
                        <h3>Nama Bank</h3>
                        <p>{{ $calon->nama_bank ?? '' }}</p>

                        <h3>Pemilik Rekening</h3>
                        <p>{{ $calon->nama_rek ?? '' }}</p>

                        <h3>Nomor Rekening</h3>
                        <p>{{ $calon->no_rek ?? '' }}</p>
                    </div>
                    <div class="col-lg-5">
                        <div class="gift-img">
                            <img src="{{ asset('assets/img/gift.png') }}" alt="Gift Image" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @endif
    <!-- gift-area end -->

    <!-- guest-area strat -->
    <div id="rsvp" class="guest-area horizontal-line">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 wow fadeInDown">
                    <div class="guest-wrap">
                        <div class="col-12">
                            <div class="section-title-guest section-title4 text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="120px" height="200px"
                                    style="margin-bottom: -105px; margin-top: -105px"
                                    viewBox="0 0 1280.000000 640.000000" preserveAspectRatio="xMidYMid meet">
                                    <g transform="translate(0.000000,640.000000) scale(0.100000,-0.100000)" fill="#fff"
                                        stroke="none">
                                        <path
                                            d="M5910 3704 c-51 -9 -146 -48 -186 -74 -64 -45 -122 -143 -124 -210 0 -47 21 -102 57 -141 42 -47 89 -53 123 -17 31 34 25 64 -22 108 l-43 39 20 37 c31 58 87 89 159 89 102 -1 177 -53 225 -155 31 -67 35 -157 8 -208 -41 -76 -170 -136 -292 -136 -90 1 -168 22 -335 90 -277 114 -293 119 -415 119 -129 0 -170 -14 -343 -116 l-103 -62 -97 51 c-140 73 -213 93 -363 99 -157 7 -202 -2 -352 -74 l-117 -56 -153 76 c-83 42 -247 125 -362 184 -318 163 -521 230 -769 254 -255 26 -396 -26 -866 -316 -377 -232 -432 -257 -621 -274 -315 -29 -594 59 -852 269 -96 78 -103 65 -10 -20 244 -223 561 -340 884 -327 194 8 277 40 653 250 240 133 413 219 511 252 164 56 385 41 647 -45 133 -44 295 -120 611 -288 l189 -100 -124 -60 c-170 -83 -217 -97 -313 -96 -169 3 -337 64 -680 248 -318 171 -406 206 -519 206 -72 0 -143 -30 -204 -85 -58 -52 -75 -104 -70 -213 5 -99 29 -156 90 -208 47 -39 147 -84 205 -90 138 -17 276 67 290 176 7 51 -1 82 -33 119 -31 37 -66 40 -88 9 -22 -31 -21 -35 16 -68 28 -26 30 -32 20 -55 -6 -14 -26 -34 -44 -46 -43 -26 -121 -22 -166 9 -38 28 -82 114 -82 162 0 73 73 140 151 140 68 0 173 -42 429 -171 340 -172 516 -229 699 -229 43 0 102 7 132 16 61 18 217 95 315 155 l66 40 92 -35 c185 -70 340 -106 502 -113 166 -8 294 23 519 127 195 90 289 115 383 100 72 -12 70 -11 295 -101 297 -119 438 -146 592 -115 103 21 229 82 299 147 l56 51 56 -51 c70 -65 196 -126 299 -147 154 -31 295 -4 592 115 225 90 223 89 295 101 69 11 152 -3 250 -42 68 -27 77 -33 66 -47 -11 -14 -11 -14 3 -3 14 10 36 4 134 -38 189 -81 247 -95 410 -95 176 0 332 31 517 102 l66 25 59 -35 c91 -55 233 -123 292 -141 30 -9 89 -16 132 -16 183 0 358 57 699 229 256 129 361 171 429 171 78 0 151 -67 151 -140 0 -48 -44 -134 -82 -162 -45 -31 -123 -35 -166 -9 -18 12 -38 32 -44 46 -10 23 -8 29 20 55 37 33 38 37 16 68 -42 60 -124 -13 -124 -111 0 -82 83 -165 189 -188 76 -16 144 -5 228 36 124 61 173 144 173 289 0 86 -21 138 -75 185 -60 53 -130 81 -201 81 -111 0 -204 -36 -503 -197 -321 -173 -465 -231 -636 -254 -112 -14 -185 2 -345 77 l-114 55 219 116 c346 182 487 248 623 293 262 85 483 101 647 45 98 -33 271 -119 511 -252 376 -210 459 -242 653 -250 323 -13 640 104 884 327 93 85 86 98 -10 20 -258 -210 -537 -298 -852 -269 -189 17 -244 42 -621 274 -350 216 -504 289 -667 317 -135 23 -394 -17 -608 -92 -135 -48 -244 -99 -525 -246 -140 -73 -287 -147 -326 -164 l-71 -32 -132 66 c-162 80 -208 90 -371 83 -141 -5 -216 -25 -342 -88 l-77 -39 -77 47 c-42 25 -108 60 -148 77 -65 28 -80 31 -181 31 -122 0 -138 -5 -415 -119 -167 -68 -245 -89 -335 -90 -122 0 -251 60 -292 136 -27 51 -23 141 8 208 48 102 123 154 225 155 72 0 128 -31 159 -89 l20 -37 -43 -39 c-47 -44 -53 -74 -22 -108 34 -36 81 -30 123 17 73 81 73 178 1 282 -85 124 -296 178 -464 120 -105 -37 -215 -112 -263 -181 l-17 -24 -17 24 c-48 69 -159 145 -259 179 -62 20 -169 33 -214 25z m-1500 -562 c74 -23 152 -55 182 -76 20 -14 19 -15 -18 -34 -174 -89 -404 -94 -664 -16 -47 14 -88 29 -92 33 -12 11 157 93 220 108 83 18 289 10 372 -15z m4256 17 c54 -9 158 -55 243 -107 l34 -20 -69 -21 c-278 -82 -536 -61 -714 58 -24 16 106 66 245 95 42 8 204 6 261 -5z" />
                                    </g>
                                </svg>
                                <h2>RSVP</h2>
                                <p>Tell the Couple you'll be attending.</p>
                            </div>
                        </div>
                        <div class="contact-form form-style">
                            <form id="rsvp-form" action="{{route('reservasi.save')}}" method="post">
                                <input type="hidden" name="calon_id" id="calon_id" value="{{$calon->id}}">
                                <input type="hidden" name="slug" id="slug" value="{{$calon->slug}}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="text" placeholder="Your Name*" id="nama" name="nama"
                                            class="form-control">
                                    </div>
                                    <div class="col-lg-12">
                                        <select class="form-control" name="ket" id="ket">
                                            <option selected>I Am Attending*</option>
                                            <option value="Ya, tentu saja!">Ya, tentu saja!</option>
                                            <option value="Maaf, saya tidak bisa.">Maaf, saya tidak bisa.</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <input type="text" placeholder="Your Address*" id="alamat" name="alamat"
                                            class="form-control">
                                    </div>
                                    <div class="col-12 text-center">
                                        <button id="submit" class="submit">Submit</button>
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

    <!-- protokol covid area start -->
    <div id="gift" class="service-area ptb--100 protokol-covid horizontal-line">
        <div class="container wow fadeInDown">
            <div class="col-12">
                <div class="section-title-gallery text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.0"
                        style="margin-bottom: -105px; margin-top: -105px" width="200px" height="200px"
                        viewBox="0 0 1280.000000 320.000000" preserveAspectRatio="xMidYMid meet">
                        <metadata>
                            Created by potrace 1.15, written by Peter Selinger 2001-2017
                        </metadata>
                        <g transform="translate(0.000000,320.000000) scale(0.100000,-0.100000)" fill="#fff"
                            stroke="none">
                            <path
                                d="M5915 2729 c-77 -4 -279 -15 -450 -23 -977 -50 -1698 -139 -2483 -306 -722 -153 -1713 -219 -2182 -144 -157 25 -330 75 -368 106 -9 8 9 22 77 54 96 46 111 62 111 117 0 68 -103 126 -200 113 -25 -3 -88 -27 -140 -54 -107 -54 -140 -90 -140 -154 0 -214 476 -352 1145 -333 644 18 1068 66 1695 190 629 124 1146 200 1720 250 96 8 186 15 200 14 14 0 -72 -33 -190 -73 -260 -87 -410 -147 -595 -235 -410 -196 -671 -394 -761 -577 -37 -73 -39 -83 -39 -170 0 -87 2 -95 30 -136 119 -168 473 -236 895 -172 468 70 981 300 1245 558 220 214 189 406 -73 462 -238 50 -633 -23 -960 -177 -350 -164 -519 -312 -499 -435 8 -46 22 -63 77 -87 58 -27 209 -27 330 -2 274 56 595 230 673 364 l18 30 -28 7 c-15 3 -35 8 -44 10 -9 2 -25 -9 -37 -26 -17 -22 -31 -30 -55 -30 -25 0 -37 -7 -56 -35 -68 -101 -257 -186 -474 -214 -49 -7 -109 -9 -134 -5 -188 28 -30 233 273 355 231 93 478 143 674 137 138 -5 193 -21 240 -72 20 -23 25 -38 24 -81 -2 -308 -863 -694 -1474 -661 -375 20 -536 161 -432 379 73 154 275 322 572 476 252 130 485 215 847 306 494 125 925 171 1513 162 347 -5 496 -17 775 -58 817 -120 1601 -441 1927 -788 145 -154 178 -297 90 -390 -46 -48 -104 -67 -260 -83 -260 -27 -643 45 -998 187 -392 157 -635 358 -634 524 1 84 35 101 196 101 418 0 1079 -281 1087 -462 l2 -33 -65 3 c-199 10 -454 109 -569 221 -32 31 -63 64 -68 74 -9 17 -14 17 -51 7 -23 -6 -42 -14 -42 -18 0 -4 15 -27 34 -52 42 -58 126 -122 229 -176 92 -49 96 -57 10 -18 -95 42 -196 110 -249 167 -43 47 -54 54 -78 50 -38 -8 -42 -26 -16 -68 33 -53 133 -129 235 -180 169 -83 339 -127 501 -128 88 -1 107 2 155 25 30 14 74 35 99 46 48 23 80 64 80 104 0 42 -50 126 -103 174 -157 142 -458 280 -762 349 -93 22 -155 29 -275 32 -181 6 -251 -6 -370 -64 -141 -68 -173 -106 -173 -204 0 -166 203 -359 553 -528 297 -142 573 -222 864 -250 283 -28 476 0 675 98 129 63 174 99 207 167 38 78 32 164 -21 272 -74 151 -284 330 -560 476 -60 33 -111 60 -113 61 -2 2 9 15 23 29 16 16 37 26 55 26 34 0 70 31 70 58 0 55 -97 74 -137 28 -15 -17 -32 -26 -52 -26 -33 0 -69 -39 -55 -61 5 -8 2 -10 -7 -7 -181 75 -307 123 -454 175 l-180 63 70 -6 c462 -38 1007 -119 1610 -239 612 -122 961 -163 1574 -186 562 -21 874 22 1157 161 130 63 196 120 209 181 23 104 -72 193 -205 193 -58 0 -76 -6 -158 -48 -80 -41 -96 -53 -109 -84 -14 -34 -14 -40 3 -71 38 -69 137 -91 221 -50 24 12 46 20 48 17 2 -2 -5 -18 -16 -35 -24 -37 -88 -65 -219 -94 -195 -42 -322 -53 -620 -52 -604 2 -1065 51 -1733 183 -862 170 -1506 250 -2327 290 -124 6 -349 18 -500 25 -288 16 -885 18 -1125 4z m6646 -256 c-12 -20 -14 -14 -5 12 4 9 9 14 11 11 3 -2 0 -13 -6 -23z m-12150 -187 c91 -46 52 -37 -49 12 -71 34 -122 79 -122 108 0 9 21 -6 48 -33 27 -27 82 -66 123 -87z m7931 68 c280 -101 587 -259 774 -400 98 -74 217 -202 250 -271 19 -38 29 -76 31 -117 l3 -61 -15 59 c-24 93 -73 174 -162 267 -167 174 -439 336 -813 484 -80 32 -147 59 -149 61 -10 9 12 3 81 -22z m-2877 -234 c46 -22 75 -64 74 -107 l-1 -28 -15 35 c-19 45 -60 89 -98 106 -16 7 -24 13 -16 14 8 0 33 -9 56 -20z m2893 -126 c235 -97 392 -223 392 -313 l0 -36 -19 40 c-10 22 -31 55 -47 74 -49 58 -182 149 -308 212 -66 32 -117 59 -113 59 5 0 47 -16 95 -36z m-1024 -163 c83 -112 249 -234 475 -347 69 -35 123 -64 119 -64 -14 0 -194 82 -268 123 -246 134 -401 290 -399 402 0 27 2 26 18 -17 11 -26 35 -70 55 -97z m-3251 -238 c26 -29 9 -30 -21 -3 -12 12 -22 31 -22 43 1 21 1 21 12 2 6 -11 20 -30 31 -42z m-668 -109 c19 -66 83 -137 161 -178 59 -32 18 -23 -48 10 -70 35 -115 86 -127 145 -20 94 -11 108 14 23z" />
                            <path
                                d="M3986 2395 c-13 -14 -34 -25 -49 -25 -54 0 -77 -65 -35 -94 33 -24 75 -20 104 9 15 15 36 25 54 25 34 0 70 31 70 58 0 54 -102 73 -144 27z" />
                            <path
                                d="M3722 2339 c-18 -4 -43 -16 -56 -28 -12 -11 -31 -21 -42 -21 -26 0 -64 -27 -64 -46 0 -18 -4 -18 -41 2 -56 28 -124 20 -216 -26 -90 -45 -113 -68 -113 -115 1 -57 65 -105 141 -105 82 0 249 98 249 147 0 11 4 11 21 2 31 -16 106 -5 133 20 12 11 32 21 45 21 12 0 36 14 53 30 24 25 29 36 23 58 -3 15 -12 33 -19 40 -19 19 -75 30 -114 21z" />
                            <path
                                d="M9062 2315 c-17 -14 -39 -25 -50 -25 -36 0 -72 -38 -72 -76 0 -68 103 -97 174 -49 20 14 45 25 55 25 34 0 71 39 71 75 0 47 -37 75 -101 75 -36 0 -55 -6 -77 -25z" />
                            <path
                                d="M9427 2259 c-21 -3 -50 -15 -65 -26 -15 -11 -40 -23 -56 -27 -16 -4 -41 -20 -57 -36 -70 -69 -4 -170 112 -170 59 0 220 78 237 114 16 36 15 62 -4 92 -30 44 -96 66 -167 53z" />
                            <path
                                d="M9896 2150 c10 -10 254 -114 362 -155 40 -15 71 -29 69 -32 -3 -2 -85 17 -183 43 -209 55 -244 61 -228 45 41 -44 751 -289 1089 -376 403 -104 742 -131 827 -66 13 10 39 23 58 30 44 15 80 49 80 76 0 60 -86 85 -421 125 -729 85 -1200 172 -1568 289 -51 16 -90 26 -85 21z" />
                            <path
                                d="M2900 2124 c-332 -107 -846 -201 -1520 -279 -293 -34 -348 -46 -449 -97 -94 -47 -107 -62 -97 -102 22 -89 283 -95 672 -15 356 73 980 281 1344 449 175 80 183 87 50 44z" />
                            <path
                                d="M2980 1996 c-361 -125 -778 -331 -995 -491 -138 -102 -257 -228 -274 -292 -18 -66 32 -115 118 -115 35 0 68 11 139 48 78 39 104 59 150 113 215 252 501 487 850 695 61 38 112 70 112 72 0 2 -1 4 -2 3 -2 0 -46 -15 -98 -33z" />
                            <path
                                d="M9830 2017 c0 -2 51 -33 113 -70 61 -37 126 -78 142 -92 28 -23 24 -22 -50 9 -103 43 -245 89 -251 83 -7 -6 10 -18 179 -127 276 -179 520 -384 701 -588 48 -54 101 -107 118 -117 47 -27 129 -24 175 7 21 14 50 29 65 32 68 16 87 85 42 152 -122 181 -399 375 -764 538 -192 85 -470 187 -470 173z" />
                            <path
                                d="M3152 1880 c-46 -28 -87 -50 -92 -50 -5 0 -55 -31 -112 -69 -178 -120 -309 -250 -359 -355 -51 -108 -31 -181 49 -181 26 0 52 8 69 21 15 11 41 24 56 28 65 16 112 78 224 300 98 195 112 217 179 284 39 39 71 72 70 72 0 0 -38 -23 -84 -50z" />
                            <path
                                d="M9717 1869 c60 -64 127 -158 118 -167 -2 -2 -21 9 -42 25 -66 52 -151 105 -163 101 -6 -2 11 -32 38 -68 57 -76 105 -158 191 -326 76 -147 109 -190 161 -205 43 -13 94 0 104 27 3 8 18 14 33 14 101 0 105 119 10 253 -79 110 -272 269 -472 387 -39 23 -38 21 22 -41z" />
                        </g>
                    </svg>
                    <h2>Protokol Kesehatan covid-19</h2>
                </div>
            </div>
            <p class="subtitle mx-auto mb-3">Demi keamanan dan kenyamanan bersama, para hadirin undangan dihimbau untuk
                memenuhi beberapa peraturan berikut :</p>
            <div class="row">
                <div class="col-sm-1 col-md-6 col-lg-3 rounded-md py-3">
                    <h5>Menjaga Jarak</h5>
                    <img src="{{ asset('assets/img/covid19/social-distancing-1.png') }}" alt="Jaga Jarak"
                        class="image-fluid" style="width: 100px">
                    <p>Saling menjaga jarak ketika menghadiri acara</p>
                </div>
                <div class="col-sm-1 col-md-6 col-lg-3 rounded-md py-3">
                    <h5>Menggunakan Masker</h5>
                    <img src="{{ asset('assets/img/covid19/mask-1-1.png') }}" alt="Jaga Jarak" class="image-fluid"
                        style="width: 100px">
                    <p>Wajib menggunakan masker selama acara berlangsung</p>
                </div>
                <div class="col-sm-1 col-md-6 col-lg-3 rounded-md py-3">
                    <h5>Mencuci Tangan</h5>
                    <img src="{{ asset('assets/img/covid19/wash-your-hands-1.png') }}" alt="Jaga Jarak"
                        class="image-fluid" style="width: 100px">
                    <p>Mencuci tangan dan menggunakan hand sanitizer</p>
                </div>
                <div class="col-sm-1 col-md-6 col-lg-3 rounded-md py-3">
                    <h5>Cek Suhu Tubuh</h5>
                    <img src="{{ asset('assets/img/covid19/thermometer-1.png') }}" alt="Jaga Jarak" class="image-fluid"
                        style="width: 100px">
                    <p>Cek suhu ketika hendak memasuki ruangan acara</p>
                </div>
            </div>
        </div>
    </div>
    <!-- protokol covid area end -->

    <!-- //comment  -->
    <div id="comment" class="comment-area horizontal-line">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 wow fadeInDown">
                    <div class="comment-wrap">
                        <div class="col-12">
                            <div class="section-title-comment section-title4 text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="180px" height="200px"
                                    style="margin-bottom: -105px; margin-top: -105px"
                                    viewBox="0 0 1280.000000 640.000000" preserveAspectRatio="xMidYMid meet">
                                    <g transform="translate(0.000000,640.000000) scale(0.100000,-0.100000)" fill="#fff"
                                        stroke="none">
                                        <path
                                            d="M5910 3704 c-51 -9 -146 -48 -186 -74 -64 -45 -122 -143 -124 -210 0 -47 21 -102 57 -141 42 -47 89 -53 123 -17 31 34 25 64 -22 108 l-43 39 20 37 c31 58 87 89 159 89 102 -1 177 -53 225 -155 31 -67 35 -157 8 -208 -41 -76 -170 -136 -292 -136 -90 1 -168 22 -335 90 -277 114 -293 119 -415 119 -129 0 -170 -14 -343 -116 l-103 -62 -97 51 c-140 73 -213 93 -363 99 -157 7 -202 -2 -352 -74 l-117 -56 -153 76 c-83 42 -247 125 -362 184 -318 163 -521 230 -769 254 -255 26 -396 -26 -866 -316 -377 -232 -432 -257 -621 -274 -315 -29 -594 59 -852 269 -96 78 -103 65 -10 -20 244 -223 561 -340 884 -327 194 8 277 40 653 250 240 133 413 219 511 252 164 56 385 41 647 -45 133 -44 295 -120 611 -288 l189 -100 -124 -60 c-170 -83 -217 -97 -313 -96 -169 3 -337 64 -680 248 -318 171 -406 206 -519 206 -72 0 -143 -30 -204 -85 -58 -52 -75 -104 -70 -213 5 -99 29 -156 90 -208 47 -39 147 -84 205 -90 138 -17 276 67 290 176 7 51 -1 82 -33 119 -31 37 -66 40 -88 9 -22 -31 -21 -35 16 -68 28 -26 30 -32 20 -55 -6 -14 -26 -34 -44 -46 -43 -26 -121 -22 -166 9 -38 28 -82 114 -82 162 0 73 73 140 151 140 68 0 173 -42 429 -171 340 -172 516 -229 699 -229 43 0 102 7 132 16 61 18 217 95 315 155 l66 40 92 -35 c185 -70 340 -106 502 -113 166 -8 294 23 519 127 195 90 289 115 383 100 72 -12 70 -11 295 -101 297 -119 438 -146 592 -115 103 21 229 82 299 147 l56 51 56 -51 c70 -65 196 -126 299 -147 154 -31 295 -4 592 115 225 90 223 89 295 101 69 11 152 -3 250 -42 68 -27 77 -33 66 -47 -11 -14 -11 -14 3 -3 14 10 36 4 134 -38 189 -81 247 -95 410 -95 176 0 332 31 517 102 l66 25 59 -35 c91 -55 233 -123 292 -141 30 -9 89 -16 132 -16 183 0 358 57 699 229 256 129 361 171 429 171 78 0 151 -67 151 -140 0 -48 -44 -134 -82 -162 -45 -31 -123 -35 -166 -9 -18 12 -38 32 -44 46 -10 23 -8 29 20 55 37 33 38 37 16 68 -42 60 -124 -13 -124 -111 0 -82 83 -165 189 -188 76 -16 144 -5 228 36 124 61 173 144 173 289 0 86 -21 138 -75 185 -60 53 -130 81 -201 81 -111 0 -204 -36 -503 -197 -321 -173 -465 -231 -636 -254 -112 -14 -185 2 -345 77 l-114 55 219 116 c346 182 487 248 623 293 262 85 483 101 647 45 98 -33 271 -119 511 -252 376 -210 459 -242 653 -250 323 -13 640 104 884 327 93 85 86 98 -10 20 -258 -210 -537 -298 -852 -269 -189 17 -244 42 -621 274 -350 216 -504 289 -667 317 -135 23 -394 -17 -608 -92 -135 -48 -244 -99 -525 -246 -140 -73 -287 -147 -326 -164 l-71 -32 -132 66 c-162 80 -208 90 -371 83 -141 -5 -216 -25 -342 -88 l-77 -39 -77 47 c-42 25 -108 60 -148 77 -65 28 -80 31 -181 31 -122 0 -138 -5 -415 -119 -167 -68 -245 -89 -335 -90 -122 0 -251 60 -292 136 -27 51 -23 141 8 208 48 102 123 154 225 155 72 0 128 -31 159 -89 l20 -37 -43 -39 c-47 -44 -53 -74 -22 -108 34 -36 81 -30 123 17 73 81 73 178 1 282 -85 124 -296 178 -464 120 -105 -37 -215 -112 -263 -181 l-17 -24 -17 24 c-48 69 -159 145 -259 179 -62 20 -169 33 -214 25z m-1500 -562 c74 -23 152 -55 182 -76 20 -14 19 -15 -18 -34 -174 -89 -404 -94 -664 -16 -47 14 -88 29 -92 33 -12 11 157 93 220 108 83 18 289 10 372 -15z m4256 17 c54 -9 158 -55 243 -107 l34 -20 -69 -21 c-278 -82 -536 -61 -714 58 -24 16 106 66 245 95 42 8 204 6 261 -5z" />
                                    </g>
                                </svg>
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
                                        <textarea class="contact-textarea p-3" id="comment" name="comment"
                                            placeholder="Message"></textarea>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button id="submit" class="submit">Submit</button>
                                    </div>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row comment-box">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeInDown">
                    <h1><strong>Comment Section</strong></h1>
                    <div class="media g-mb-30 media-comment">
                        <div class="media-body u-shadow-v18 g-bg-secondary g-pa-30">
                            @foreach($calon->comment as $data)
                            <div class="commentText">
                                <h3><strong>{{ $data->nama }}</strong></h3>
                                <p>{{ $data->comment }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Comment-area end -->

    <!-- .footer-area start -->
    <footer class="section horizontal-line ">
        <div class="container text-white position-relative wow fadeInDown">
            <div class="footer__title">
                <div class="text-center">Thank You</div>
                <div class="text-center"><strong>{{$calon->nick_pria}} &amp; {{$calon->nick_wanita}}</strong></div>
            </div>
            <div class="row pb-4">
                @if ($calon->undang)
                <div class="col-md-12 text-center parent">
                    <p>Turut Mengundang :</p>
                    <ul>
                        @foreach( explode("|", $calon->undang) as $data )
                        <li>{{$data}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
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
    <!-- .footer-area start -->

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
    <!-- all js here -->
    <!-- modernizr-3.5.0.min.js -->
    <script src="{{asset('assets/js/platinum/vendor/modernizr-3.5.0.min.js')}}"></script>
    <!-- jquery-2.2.4.min.js -->
    <script src="{{asset('assets/js/platinum/vendor/jquery-2.2.4.min.js')}}"></script>
    <!-- imageloded.min.js -->
    <script src="{{asset('assets/js/platinum/imageloded.min.js')}}"></script>
    <!-- easing-min.js -->
    <script src="{{asset('assets/js/platinum/easing-min.js')}}"></script>
    <!-- jquery.slicknav.min.js -->
    <script src="{{asset('assets/js/platinum/jquery.slicknav.min.js')}}"></script>
    <!-- isotop.min.js -->
    <script src="{{asset('assets/js/platinum/isotop.min.js')}}"></script>
    <!-- magnific-popup.min.js -->
    <script src="{{asset('assets/js/platinum/jquery.magnific-popup.min.js')}}"></script>
    <!-- jquery.mb.YTPlayer.src.js -->
    <script src="{{asset('assets/js/platinum/jquery.mb.YTPlayer.src.js')}}"></script>
    <!-- owl-carousel.js -->
    <script src="{{asset('assets/js/platinum/owl-carousel.js')}}"></script>
    <!-- swiper.min.js -->
    <script src="{{asset('assets/js/platinum/swiper.min.js')}}"></script>
    <!-- countdown.js -->
    <script src="{{asset('assets/js/platinum/countdown.js')}}"></script>
    <!-- bootstrap.min.js -->
    <script src="{{asset('assets/js/platinum/bootstrap.min.js')}}"></script>
    <!-- jquery-sticky-menu.js -->
    <script src="{{asset('assets/js/platinum/jquery-sticky-menu.js')}}"></script>
    <!-- jquery-validation.js -->
    <script src="{{asset('assets/js/platinum/validation.js')}}"></script>
    <!-- main.js -->
    <script src="{{asset('assets/js/platinum/main.js')}}"></script>

    <script src="{{asset('assets/js/platinum/slick.min.js')}}"></script>

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
    // console.log(calon);

    if ($("#clock").length) {
        $('#clock').countdown(new Date(calon.akad_nikah.tgl), function(event) {
            var $this = $(this).html(event.strftime('' +
                '<div class="box"><div class="date">%D</div> <span>Days</span> </div>' +
                '<div class="box"><div class="date">%H</div> <span>Hours</span> </div>' +
                '<div class="box"><div class="date">%M</div> <span>Mins</span> </div>' +
                '<div class="box"><div class="date">%S</div> <span>Secs</span> </div>'));
        });
    }

    $(".button").click(function() {
        $(".gateway").slideUp("slow");
    });

    wow = new WOW({
        boxClass: 'wow', // default
        animateClass: 'animated', // change this if you are not using animate.css
        offset: 0, // default
        mobile: true, // keep it on mobile
        live: true // track if element updates
    });
    wow.init();
    </script>
</body>

</html>