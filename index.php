@extends('welcome')

@section('content')
    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">MYSKINLAB<br>Aesthetic and Dermatology Clinic</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">Spesialis Kulit, Kelamin, dan Kecantikan</h2>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a class="btn-get-started tambah scrollto d-inline-flex align-items-center justify-content-center align-self-center"
                                data-bs-toggle="modal" data-bs-target="#basicModal">
                                <span>Reservation Now</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <!-- <img src="assets/img/hero-img.png" class="img-fluid" alt=""> -->
                </div>
            </div>
        </div>

    </section>

    <main id="main">

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Services</h2>
                    <p>Categories</p>
                </header>

                <div class="row gy-4">

                    @foreach ($service as $p)
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="service-box blue">
                                <img src="assets/img/acne-human.jpg" class="img-thumbnail rounded-circle img-fluid"
                                    alt=""><br><br>
                                <h3>{{ $p->nama }}</h3>
                                <p>{{ $p->deskripsi }}</p>
                                <h4>{{ $p->harga }}</h4>
                                <a href="#" class="read-more"><span>Read More</span> <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>

        </section><!-- End Services Section -->

        <!-- ======= Features Section ======= -->
        <section id="pricing" class="features">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Online Store</h2>
                    <p>We're Available in E-Commerce</p>
                </header>

                <div class="row">

                    <div class="col-lg-6">
                        <img src="assets/img/product.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
                        <div class="row align-self-center gy-4">

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                                <div class="feature-box d-flex align-items-center">
                                    <a href="https://shopee.co.id/myskinlab_msl" class="onlineshop"><img
                                            src="assets/img/shopee.png" width="50" height="50">Shopee</a>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                                <div class="feature-box d-flex align-items-center">
                                    <a href="#" class="onlineshop"><img src="assets/img/tokopedia.jpg" class="rounded"
                                            width="50" height="50">Tokopedia</a>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                                <div class="feature-box d-flex align-items-center">
                                    <a href="#" class="onlineshop"><img src="assets/img/halodoc.jpg" class="rounded"
                                            width="50" height="50">Halodoc</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section><!-- End Features Section -->
        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Product</h2>
                    <p>Check Our Best Selling Product</p>
                </header>

                <div class="row gy-4" data-aos="fade-left">

                    @forelse ($product as $p)
                        <tr>
                            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                                <div class="box">
                                    <h3 style="color: #6256a4;">{{ $p->nama }}</h3>
                                    <div class="price"><sup>Rp.</sup>{{ $p->harga }}</div>
                                    <img src="{{ asset('data_file') . '/' . $p->gambar }}" class="img-fluid" alt="">
                                    <p>{{ $p->deskripsi }}</p>
                                    <a href="{{ $p->link }}" class="btn-buy">Buy Now</a>
                                </div>
                            </div>
                        </tr>
                    @empty
                    @endforelse
                </div>

            </div>

        </section>
        <!-- End Pricing Section -->
        <!-- ======= Recent Blog Posts Section ======= -->
        <section id="specialoffers" class="recent-blog-posts">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Special Offers</h2>
                    <p>Our Special Price For You</p>
                </header>

                <div class="row">
                    @php
                        $count = 0;
                    @endphp

                    @foreach ($penawaran as $p)
                        @if ($count < 3)
                            <div class="col-lg-4">
                                <div class="post-box">
                                    <div class="post-img"><img src="{{ asset('data_file') . '/' . $p->poster }}"
                                            class="img-fluid" alt=""></div>
                                    <span class="post-date">{{ $p->tanggal }}</span>
                                    <h3 class="post-title">{{ $p->nama_promo }}</h3>
                                    <h6>{{ $p->deskripsi }}</h6><br>
                                    <a href="https://wa.me/08231231412?text=Halo,%20saya%20ingin%20mengambil%20promo%20ramadhan"
                                        class="btn btn-primary">Dapatkan Promo Sekarang <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>

                            @php
                                $count++;
                            @endphp
                        @endif
                    @endforeach
                </div>

            </div>

        </section>


        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Gallery</h2>
                    <p>Check Our Gallery</p>
                </header>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">Treatment</li>
                            <li data-filter=".filter-card">Product</li>
                            <li data-filter=".filter-web">Before-After</li>
                        </ul>
                    </div>
                </div>

                <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Home Treatment</h4>
                                <p>Acne</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery"
                                        class="portfokio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Before - After</h4>
                                <p>Acne</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery"
                                        class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Home Treatment</h4>
                                <p>Anti - Aging</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery"
                                        class="portfokio-lightbox" title="App 2"><i class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Body Lotion</h4>
                                <p>Brightening</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery"
                                        class="portfokio-lightbox" title="Card 2"><i class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>DNA Salmon</h4>
                                <p>Treatment</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery"
                                        class="portfokio-lightbox" title="App 5"><i class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>In Place Treatment</h4>
                                <p>Serum</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery"
                                        class="portfokio-lightbox" title="App 3"><i class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>UV</h4>
                                <p>Defender</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery"
                                        class="portfokio-lightbox" title="Card 1"><i class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Hydrating</h4>
                                <p>Cleanser</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery"
                                        class="portfokio-lightbox" title="Card 3"><i class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Cleansing</h4>
                                <p>Treatment</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery"
                                        class="portfokio-lightbox" title="App 4"><i class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End Portfolio Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Team</h2>
                    <p>Our hard working team</p>
                </header>

                <div class="row gy-4">
                    @forelse ($staff as $p)
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                            data-aos-delay="100">
                            <div class="member">
                                <div class="member-img">
                                    <img src="{{ asset('data_file') . '/' . $p->foto }}" class="img-fluid"
                                        width="600" height="600" alt="">
                                </div>
                                <div class="member-info">
                                    <h4>{{ $p->nama }}</h4>
                                    <span>{{ $p->job }}</span>
                                    <p>{{ $p->deskripsi }}</p>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>


            </div>

        </section><!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Contact</h2>
                    <p>Contact Us</p>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-6">
                        <div class="row gy-4">
                            @foreach ($contact as $p)
                                <div class="col-md-6">
                                    <div class="info-box">
                                        <i class="bi bi-clock"></i>
                                        <h3>Open Hours</h3>
                                        <p>{{ $p->jam_operasional }}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="info-box">
                                        <i class="bi bi-geo-alt"></i>
                                        <h3>Address</h3>
                                        <p>{{ $p->alamat }}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="info-box">
                                        <i class="bi bi-telephone"></i>
                                        <h3>Call Us</h3>
                                        <p>{{ $p->nomor }}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="info-box">
                                        <i class="bi bi-envelope"></i>
                                        <h3>Email Us</h3>
                                        <p>{{ $p->email }}</p>
                                    </div>
                                </div>
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <iframe src="{{ $p->maps }}" width="600" height="450" style="border:0;"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    @endforeach

                </div>

            </div>

        </section>
    @endsection
