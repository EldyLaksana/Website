@extends('frontend.layouts.main')

@section('container')
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Detail Produk</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li><a href="/produk">Produk</a></li>
                    <li>Ratuayu Ungu</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container" data-aos="fade-down">

            <div class="row gy-4 d-flex justify-content-center">

                <div class="col-lg-6">
                    {{-- <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">

                            <div class="swiper-slide ">
                                <img src="{{ asset('assets/img/produk/ungu5.jpg') }}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/portfolio-details-2.jpg" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/portfolio-details-3.jpg" alt="">
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div> --}}
                    <div class="gambar-produk">
                        <img src="{{ asset('assets/img/produk/ungu1.png') }}" alt="">
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="portfolio-info">
                        <h3>Beras Ratuayu Ungu</h3>
                        <ul>
                            <li><strong>Bahan baku</strong>: Beras Bengawan IR 64</li>
                            <li><strong>Kemasan</strong>: Karung plastik</li>
                            <li><strong>Ukuran</strong>: 5 Kg, 10 Kg, 25 Kg</li>
                            <li><strong>Kualitas</strong>: Premium</li>
                        </ul>
                    </div>
                    <div class="portfolio-description">
                        <p>
                            Beras Ratuayu Ungu adalah beras dengan kualitas premium.
                            Dimana memiliki butiran yang utuh dan putih sehingga membuat
                            cita rasa nasi menjadi lebih enak untuk dinikmati.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Details Section -->
@endsection
