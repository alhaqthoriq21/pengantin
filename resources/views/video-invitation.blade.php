@extends('layouts.landing-page.master')

@section('title', 'Video Invitation')

@section('content')
<!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center">
            <img src="{{ url('landing-page/img/tbb-logo.png') }}" alt="Logo">
        </a>

        {{-- <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
                <li><a class="nav-link scrollto" href="#values">Services</a></li>
                <li><a class="nav-link scrollto" href="#theme">Pilihan Tema</a></li>
                <li><a class="nav-link scrollto" href="#pricing">Price List</a></li>
                <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li>
                <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar --> --}}

    </div>
</header><!-- End Header -->

<main id="main">

    <!-- ======= Values Section as services ======= -->
    {{-- <section id="values" class="values features">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Services</h2>
                <p>Pelayanan Yang Kami Berikan</p>
            </header>

            <div class="row">

                <div class="col-lg-4">
                    <div class="box" data-aos="fade-up" data-aos-delay="200">
                        <img src="{{ url('landing-page/img/values-1.png') }}" class="img-fluid" alt="">
    <h3>Hemat</h3>
    <p>Sesuaikan undangan dengan Kebutuhan dan budget yang anda miliki</p>
    </div>
    </div>

    <div class="col-lg-4 mt-4 mt-lg-0">
        <div class="box" data-aos="fade-up" data-aos-delay="400">
            <img src="{{ url('landing-page/img/values-2.png') }}" class="img-fluid" alt="">
            <h3>Memuaskan</h3>
            <p>Dapatkan hasil yang maksimal dengan bantuan tim yang kompeten</p>
        </div>
    </div>

    <div class="col-lg-4 mt-4 mt-lg-0">
        <div class="box" data-aos="fade-up" data-aos-delay="600">
            <img src="{{ url('landing-page/img/values-3.png') }}" class="img-fluid" alt="">
            <h3>Proses Cepat</h3>
            <p>Proses pengerjaan maksimal 1 hari kerja setelah konfirmasi pembayaran</p>
        </div>
    </div>

    </div>

    <!-- Feature Icons -->
    <div class="row feature-icons" data-aos="fade-up">
        <h3>Fitur Dalam Undangan</h3>

        <div class="row">

            <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
                <img src="{{ url('landing-page/img/features-3.png') }}" class="img-fluid p-4" alt="">
            </div>

            <div class="col-xl-8 d-flex content">
                <div class="row align-self-center gy-4">

                    <div class="col-md-6 icon-box" data-aos="fade-up">
                        <i class="bi bi-person-check"></i>
                        <div>
                            <h4>Nama Tamu Undangan</h4>
                            <p>Anda bisa merubah nama tamu undangan sesuai keinginan, untuk memberikan kesan
                                yang lebih baik dalam undangan</p>
                        </div>
                    </div>

                    <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                        <i class="bi bi-image"></i>
                        <div>
                            <h4>Gallery Foto</h4>
                            <p>Anda dapat menampilkan gallery foto terbaik bersama pasangan dalam satu undangan
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-geo-alt"></i>
                        <div>
                            <h4>Alamat Lokasi</h4>
                            <p>Alamat lokasi pernikahan langsung terhubung dengan google maps</p>
                        </div>
                    </div>

                    <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-music-note-beamed"></i>
                        <div>
                            <h4>Music</h4>
                            <p>Anda bisa memilih musik sesuai keinginan untuk dijadikan backsound undangan</p>
                        </div>
                    </div>

                    <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-calendar-plus"></i>
                        <div>
                            <h4>Add To Calender</h4>
                            <p>Tamu undangan bisa menambahkan acara pernikahan anda ke google calender dengan
                                satu kali klik</p>
                        </div>
                    </div>

                    <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                        <i class="bi bi-journal-bookmark"></i>
                        <div>
                            <h4>RSVP / Buku Tamu</h4>
                            <p>Dapatkan status kehadiran dari setiap tamu undangan yang anda undang</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div><!-- End Feature Icons -->

    </div>

    </section><!-- End Values Section --> --}}

    <section id="video-invitation" class="video-invitation">
        <div class="container">

            <header class="section-header">
                <h2>Video</h2>
                <p>List Video Invitation</p>
            </header>

            <div class="row list-video">
                <div class="col-sm-12 col-md-6 col-lg-4 video-item">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/lX8mjWC3Bxw"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                    <div class="title-video">video #A01.</div>
                </div>
            </div>

        </div>
    </section>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <img src="{{ url('landing-page/img/tbb-logo.png') }}" alt="tbb-logo">
                    </a>
                    <p>
                        Ikuti media sosial kami untuk mendapatkan promo dan informasi menarik lainya
                    </p>
                    <div class="social-links mt-3">
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/_tobeabride_/" target="_blank" class="instagram"><i
                                class="bi bi-instagram bx bxl-instagram"></i></a>
                        <a href="#" class="bi-youtube"><i class="bi bi-bi-youtube bx bxl-bi-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>To Be A Bride</span></strong>. All Rights Reserved | Developed By Team
        </div>
        <div class="credits">
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
</a>
@endsection