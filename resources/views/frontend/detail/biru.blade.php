@extends('frontend.layouts.main')

@section('container')
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Detail Produk</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li><a href="/produk">Produk</a></li>
                    <li>Ratuayu Biru</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container" data-aos="fade-down">

            <div class="row gy-4 d-flex justify-content-center">

                <div class="col-lg-6">
                    {{-- <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('assets/img/produk/biru1.png') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/img/produk/biru1.png') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/img/produk/biru1.png') }}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div> --}}
                    <div class="gambar-produk">
                        <img src="{{ asset('assets/img/produk/biru1.png') }}" alt="">
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="portfolio-info">
                        <h3>Beras Ratuayu Biru</h3>
                        <ul>
                            <li><strong>Bahan baku</strong>: Beras Bengawan IR 64</li>
                            <li><strong>Kemasan</strong>: Karung plastik</li>
                            <li><strong>Ukuran</strong>: 5 Kg, 10 Kg, 25 Kg</li>
                            <li><strong>Kualitas</strong>: Medium</li>
                        </ul>
                    </div>
                    <div class="portfolio-description">
                        <p>
                            Beras Ratuayu Biru adalah beras dengan kualitas medium.
                            Dimana memiliki butiran yang utuh dan putih sehingga membuat
                            cita rasa nasi menjadi lebih enak untuk dinikmati.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Details Section -->
@endsection
