@extends('layouts.landing-page.master')

@section('content')
<!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center">
            <img src="{{ url('landing-page/img/tbb-logo.png') }}" alt="Logo">
        </a>

        <nav id="navbar" class="navbar">
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
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">To Be a Bride</h1>
                <h2 data-aos="fade-up" data-aos-delay="400">Bagikan Momen Kebahagiaanmu Tanpa Batas Jarak dan Waktu</h2>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-start">
                        <a href="#about"
                            class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>Mulai Sekarang</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="{{ url('landing-page/img/hero-mockup-2.png') }}" class="img-fluid" alt="">
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">

        <div class="container" data-aos="fade-up">
            <div class="row gx-0">

                <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="content p4">
                        <h3>Siapa kita</h3>
                        <h2>To Be a Bride</h2>
                        <p>
                            Adalah sebuah platform Undangan Pernikahan Online atau Wedding E-Invitation Letter yang
                            menggunakan media website
                            untuk membantu anda dalam menyebarkan informasi acara tanpa batas jarak dan waktu.
                        <p>
                        <p>
                            Wedding E-Invitation Letter ini berisi informasi yang lengkap mulai dari Foto, Musik, Lokasi
                            Pernikahan dengan Google Maps,
                            Google Calender, hingga Video dapat ditampilkan dalam satu undangan.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ url('landing-page/img/wedding1.jpg') }}" class="img-fluid" alt="">
                </div>

            </div>
        </div>

    </section><!-- End About Section -->

    <!-- ======= Values Section as services ======= -->
    <section id="values" class="values features">

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

    </section><!-- End Values Section -->

    <!-- ======= Services Section as theme ======= -->
    <section id="theme" class="services">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Tema</h2>
                <p>Pilihan Tema Sesuai Paket</p>
            </header>

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-box bronze">
                        <i class="bi bi-archive icon"></i>
                        <h3>Tema Bronze</h3>
                        <a href="/lusi-gilang?u=Nama+Tamu" class="read-more"><span>Lihat Tema</span> <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-box silver">
                        <i class="bi bi-archive icon"></i>
                        <h3>Tema Silver</h3>
                        <a href="/satria-berlin?u=Nama+Tamu" class="read-more"><span>Lihat Tema</span> <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-box gold">
                        <i class="bi bi-archive icon"></i>
                        <h3>Tema Gold</h3>
                        <a href="/alfarizi-intan?u=Nama+Tamu" class="read-more"><span>Lihat Tema</span> <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-box platinum">
                        <i class="bi bi-archive icon"></i>
                        <h3>Tema Platinum</h3>
                        <a href="/icha-agi?u=Nama+Tamu" class="read-more"><span>Lihat Tema</span> <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- End Services Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Price List</h2>
                <p>Daftar Price List</p>
            </header>

            <div class="row gy-4" data-aos="fade-left">

                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                        <div class="header-price p-3 mb-3 rounded-2" style="color: #fff; background-color: #CD7F32;">
                            <h3>Bronze</h3>
                            <div class="price"><sup>Rp. </sup>100<span>.000</span></div>
                        </div>
                        <ul>
                            <li><i class="bi bi-check-circle mx-2" style="color: #0d6efd"></i> Nama Tamu Undangan</li>
                            <li><i class="bi bi-check-circle mx-2" style="color: #0d6efd"></i> Max 6 Gallery Foto</li>
                            <li><i class="bi bi-check-circle mx-2" style="color: #0d6efd"></i> Turut Mengundang</li>
                            <li><i class="bi bi-check-circle mx-2" style="color: #0d6efd"></i> Link Sosial Media</li>
                            <li><i class="bi bi-check-circle mx-2" style="color: #0d6efd"></i> Alamat Lokasi</li>
                            <li><i class="bi bi-check-circle mx-2" style="color: #0d6efd"></i> Hitung Mundur</li>
                            <li><i class="bi bi-check-circle mx-2" style="color: #0d6efd"></i> Kolom Ucapan</li>
                            <li><i class="bi bi-check-circle mx-2" style="color: #0d6efd"></i> Musik</li>
                            <li class="na"><i class="bi bi-x-circle mx-2" style="color: #dc3545"></i> Add To Calender
                            </li>
                            <li class="na"><i class="bi bi-x-circle mx-2" style="color: #dc3545"></i> RSVP/Buku Tamu
                            </li>
                            <li class="na"><i class="bi bi-x-circle mx-2" style="color: #dc3545"></i> Love Story</li>
                            <li class="na"><i class="bi bi-x-circle mx-2" style="color: #dc3545"></i> Video</li>
                        </ul>
                        <form action="{{route('send.message')}}" method="POST" target="_blank">
                            @csrf
                            <input type="text" value="bronze" name="paket" hidden>
                            <button class="btn-buy" type="submit">Pilih</button>
                        </form>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="box">
                        <!-- <span class="featured">Featured</span> -->
                        <div class="header-price p-3 mb-3 rounded-2" style="color: #fff; background-color: #c0c0c0;">
                            <h3>Silver</h3>
                            <div class="price"><sup>Rp. </sup>125<span>.000</span></div>
                        </div>
                        <ul>
                            <li><i class="bi bi-check-circle mx-2" style="color: #0d6efd"></i> Nama Tamu Undangan</li>
                            <li><i class="bi bi-check-circle mx-2" style="color: #0d6efd"></i> Max 8 Gallery Foto</li>
                            <li><i class="bi bi-check-circle mx-2" style="color: #0d6efd"></i> Turut Mengundang</li>
                            <li><i class="bi bi-check-circle mx-2" style="color: #0d6efd"></i> Link Sosial Media</li>
                            <li><i class="bi bi-check-circle mx-2" style="color: #0d6efd"></i> Alamat Lokasi</li>
                            <li><i class="bi bi-check-circle mx-2" style="color: #0d6efd"></i> Hitung Mundur</li>
                            <li><i class="bi bi-check-circle mx-2" style="color: #0d6efd"></i> Kolom Ucapan</li>
                            <li><i class="bi bi-check-circle mx-2" style="color: #0d6efd"></i> Musik</li>
                            <li class="na"><i class="bi bi-x-circle mx-2" style="color: #dc3545"></i> Add To Calender
                            </li>
                            <li class="na"><i class="bi bi-x-circle mx-2" style="color: #dc3545"></i> RSVP/Buku Tamu
                            </li>
                            <li class="na"><i class="bi bi-x-circle mx-2" style="color: #dc3545"></i> Love Story</li>
                            <li class="na"><i class="bi bi-x-circle mx-2" style="color: #dc3545"></i> Video</li>
                        </ul>
                        <form action="{{route('send.message')}}" method="POST" target="_blank">
                            @csrf
                            <input type="text" value="silver" name="paket" hidden>
                            <button class="btn-buy" type="submit">Pilih</button>
                        </form>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                    <div class="box">
                        <div class="header-price p-3 mb-3 rounded-2" style="color: #fff; background-color: #e2e20d;">
                            <h3>Gold</h3>
                            <div class="price"><sup>Rp. </sup>150<span>.000</span></div>
                        </div>
                        <ul>
                            <li><i class="bi bi-check-circle mx-2" style="color: #0d6efd"></i> Nama Tamu Undangan</li>
                            <li><i class="bi bi-check-circle mx-2" style="color: #0d6efd"></i> Max 12 Gallery Foto</li>
                            <li><i class="bi bi-check-circle mx-2" style="color: #0d6efd"></i> Turut Mengundang</li>
                            <li><i class="bi bi-check-circle mx-2" style="color: #0d6efd"></i> Link Sosial Media</li>
                            <li><i class="bi bi-check-circle mx-2" style="color: #0d6efd"></i> Alamat Lokasi</li>
                            <li><i class="bi bi-check-circle mx-2" style="color: #0d6efd"></i> Hitung Mundur</li>
                            <li><i class="bi bi-check-circle mx-2" style="color: #0d6efd"></i> Kolom Ucapan</li>
                            <li><i class="bi bi-check-circle mx-2" style="color: #0d6efd"></i> Musik</li>
                            <li><i class="bi bi-check-circle mx-2" style="color: #0d6efd"></i> Add To Calender</li>
                            <li><i class="bi bi-check-circle mx-2" style="color: #0d6efd"></i> RSVP/Buku Tamu</li>
                            <li class="na"><i class="bi bi-x-circle mx-2" style="color: #dc3545"></i> Love Story</li>
                            <li class="na"><i class="bi bi-x-circle mx-2" style="color: #dc3545"></i> Video</li>
                        </ul>
                        <form action="{{route('send.message')}}" method="POST" target="_blank">
                            @csrf
                            <input type="text" value="gold" name="paket" hidden>
                            <button class="btn-buy" type="submit">Pilih</button>
                        </form>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                    <div class="box">
                        <div class="header-price p-3 mb-3 rounded-2" style="color: #fff; background-color: #36c4a5;">
                            <h3>Platinum</h3>
                            <div class="price"><sup>Rp. </sup>200<span>.000</span></div>
                        </div>
                        <ul>
                            <li><i class="bi bi-check-circle mx-2" style="color: #0d6efd"></i> Nama Tamu Undangan</li>
                            <li><i class="bi bi-check-circle mx-2" style="color: #0d6efd"></i> Max 15 Gallery Foto</li>
                            <li><i class="bi bi-check-circle mx-2" style="color: #0d6efd"></i> Turut Mengundang</li>
                            <li><i class="bi bi-check-circle mx-2" style="color: #0d6efd"></i> Link Sosial Media</li>
                            <li><i class="bi bi-check-circle mx-2" style="color: #0d6efd"></i> Alamat Lokasi</li>
                            <li><i class="bi bi-check-circle mx-2" style="color: #0d6efd"></i> Hitung Mundur</li>
                            <li><i class="bi bi-check-circle mx-2" style="color: #0d6efd"></i> Kolom Ucapan</li>
                            <li><i class="bi bi-check-circle mx-2" style="color: #0d6efd"></i> Musik</li>
                            <li><i class="bi bi-check-circle mx-2" style="color: #0d6efd"></i> Add To Calender</li>
                            <li><i class="bi bi-check-circle mx-2" style="color: #0d6efd"></i> RSVP/Buku Tamu</li>
                            <li><i class="bi bi-check-circle mx-2" style="color: #0d6efd"></i> Love Story</li>
                            <li><i class="bi bi-check-circle mx-2" style="color: #0d6efd"></i> Video</li>
                        </ul>
                        <form action="{{route('send.message')}}" method="POST" target="_blank">
                            @csrf
                            <input type="text" value="platinum" name="paket" hidden>
                            <button class="btn-buy" type="submit">Pilih</button>
                        </form>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- End Pricing Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>F.A.Q</h2>
                <p>Frequently Asked Questions</p>
            </header>

            <div class="row">
                <div class="col-lg-6">
                    <!-- F.A.Q List 1-->
                    <div class="accordion accordion-flush" id="faqlist1">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-1">
                                    Bagaimana cara membuat undangan pernikahan online?
                                </button>
                            </h2>
                            <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                <div class="accordion-body">
                                    Pembuatan undangan dilakukan oleh admin, client hanya memberikan data yang diminta
                                    oleh admin melalui pesan WhatsApp.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-2">
                                    Bagaimana memilih template undangan pernikahan online?
                                </button>
                            </h2>
                            <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                <div class="accordion-body">
                                    Tema dibagi menjadi beberapa bagian sesuai dengan paket yang dipilih. untuk melihat
                                    berbagai tema anda bisa klik menu <a class="scrollto" href="#theme">Pilihan
                                        Tema</a>.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-3">
                                    Bagaimana cara pembayaranya?
                                </button>
                            </h2>
                            <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                <div class="accordion-body">
                                    Saat ini pembayaran hanya dilakukan melalui transfer antar bank setelah mengisi
                                    format yang diberikan admin melalui pesan WhatsApp. Konfirmasi pembayaran juga
                                    dilakukan melalui pesan WhatsApp.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6">

                    <!-- F.A.Q List 2-->
                    <div class="accordion accordion-flush" id="faqlist2">

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq2-content-1">
                                    Berapa lama proses pembuatanya?
                                </button>
                            </h2>
                            <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                <div class="accordion-body">
                                    Pembuatan undangan pernikahan online maksimal 1 hari setelah konfirmasi pembayaran.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq2-content-2">
                                    Apakah ada batasan pembagian link undangan?
                                </button>
                            </h2>
                            <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                <div class="accordion-body">
                                    Tidak ada batasan untuk membagikan link undangan (Sepuasny)
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq2-content-3">
                                    Berapa lama masa aktif link undangan pernikahan online di tobeabride.com?
                                </button>
                            </h2>
                            <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                <div class="accordion-body">
                                    Setiap tipe undangan memiliki masa aktif 1 tahun.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </section><!-- End F.A.Q Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Portfolio</h2>
                <p>Mereka Yang Berbahagia</p>
            </header>

            <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="{{ url('landing-page/img/portfolio/portfolio-1.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Wedding Of</h4>
                            <p>Irfan & Rifa</p>
                            <div class="portfolio-links">
                                <a href="#" title="More Details"><i class="bi bi-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="{{ url('landing-page/img/portfolio/portfolio-2.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Wedding Of</h4>
                            <p>Citra & Rio</p>
                            <div class="portfolio-links">
                                <a href="#" title="More Details"><i class="bi bi-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="{{ url('landing-page/img/portfolio/portfolio-3.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Wedding Of</h4>
                            <p>Laras Budi</p>
                            <div class="portfolio-links">
                                <a href="#" title="More Details"><i class="bi bi-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Testimoni</h2>
                <p>Client Bahagia Kami</p>
            </header>

            <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="200">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                Bagus banget dan hasilnya pun memuaskan, rekomended!!
                            </p>
                            <div class="profile mt-auto">
                                <img src="{{ url('landing-page/img/testimonials/testimonials.png') }}"
                                    class="testimonial-img" alt="">
                                <h3>Hani & Gani</h3>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                Fast respon, dan adminya baik banget.
                            </p>
                            <div class="profile mt-auto">
                                <img src="{{ url('landing-page/img/testimonials/testimonials.png') }}"
                                    class="testimonial-img" alt="">
                                <h3>Laras & Budi</h3>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                Bagus, Hasil yang memuaskan sesuai dengan harapan
                            </p>
                            <div class="profile mt-auto">
                                <img src="{{ url('landing-page/img/testimonials/testimonials.png') }}"
                                    class="testimonial-img" alt="">
                                <h3>Irfan dan Rifa</h3>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                Waktu buatnya gak lama, pagi transfer eh sorenya udah ada, mantapppp
                            </p>
                            <div class="profile mt-auto">
                                <img src="{{ url('landing-page/img/testimonials/testimonials.png') }}"
                                    class="testimonial-img" alt="">
                                <h3>Lusi & Hanif</h3>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                Terimakasih team to be a bride sangat membantu kami dalam mempersingkat waktu untuk
                                membagikan undangan, sukses selalu
                            </p>
                            <div class="profile mt-auto">
                                <img src="{{ url('landing-page/img/testimonials/testimonials.png') }}"
                                    class="testimonial-img" alt="">
                                <h3>Citra & Rio</h3>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Kontak</h2>
                <p>Hubungi Kami</p>
            </header>

            <div class="row gy-4">

                <div class="col-lg-6">

                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-whatsapp"></i>
                                <h3>WhatsApp</h3>
                                <p>+62838 2758 9388<br>+62896 7489 5106</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-envelope"></i>
                                <h3>Email</h3>
                                <p>admin@tobeabride.com</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-clock"></i>
                                <h3>Jam Pelayanan</h3>
                                <p>Setiap Hari<br>07:00 - 18:00 WIB</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <form action="forms/contact.php" method="post" class="php-email-form">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message"
                                    required></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>

                                <button type="submit">Send Message</button>
                            </div>

                        </div>
                    </form>

                </div>

            </div>

        </div>

    </section><!-- End Contact Section -->

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

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Link Lainya</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a class="scrollto" href="#faq">F.A.Q</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a class="scrollto" href="#testimonials">Testimoni</a>
                        </li>
                    </ul>
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

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>
@endsection