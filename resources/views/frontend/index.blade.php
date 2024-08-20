@extends('frontend.layouts.main')

@section('container')
    <!-- ======= Hero Section ======= -->
    {{-- <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true" style="margin-top: 4rem">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/img/slide/cover.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/img/slide/cover.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/img/slide/cover.jpg') }}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div> --}}

    <section id="hero">
        <div class="hero-container">
            <img src="{{ asset('assets/img/ratuayu.png') }}" alt="logo" data-aos="fade-down" data-aos-duration="1000">
        </div>
        <div class="hero-center">
            <img src="{{ asset('assets/img/home/15.png') }}" alt="part" data-aos="fade-up" data-aos-duration="1000"
                data-aos-delay="1000">
        </div>
        <div class="hero-left">
            <img src="{{ asset('assets/img/home/14.png') }}" alt="part" data-aos="fade-right" data-aos-duration="1000"
                data-aos-delay="1000">
        </div>
        <div class="hero-right">
            <img src="{{ asset('assets/img/home/16.png') }}" alt="part" data-aos="fade-left" data-aos-duration="1000"
                data-aos-delay="1000">
        </div>
    </section>

    <!-- End Hero -->

    <!-- ======= About Us Section ======= -->
    <section id="home" class="home">
        <div class="container" data-aos="fade-up">

            <div class="row content">
                <div class="col-lg-6 side1" data-aos="fade-right">
                    <h2>Selamat Datang</h2>
                    <h3>di PT. Ratu Makmur Abadi</h3>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
                    <p>
                        PT. Ratu Makmur Abadi, perusahaan produsen beras terkemuka, dikenal sebagai penyedia beras
                        berkualitas tinggi. Dengan teknologi modern, perusahaan ini menghasilkan beras unggul yang memenuhi
                        standar kualitas tertinggi. Keandalan PT. Ratu Makmur Abadi membuatnya menjadi pilihan utama bagi
                        konsumen yang menghargai kualitas dalam setiap butir beras.
                    </p>
                    <ul>
                        <li><i class="ri-check-double-line"></i> Beras Berkualitas</li>
                        <li><i class="ri-check-double-line"></i> Tanpa Pemutih
                        </li>
                        <li><i class="ri-check-double-line"></i> Tanpa Pengawet</li>
                    </ul>
                    <p class="">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore
                        magna aliqua.
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->

    <section id="slider" class="slider" data-aos="fade-up">
        <div class="slider-container">
            <button type="button" class="slick-prev"><i class="bx bx-chevron-left"></i></button>
            <div class="product-slider">
                <div class="product-item">
                    <img src="{{ asset('assets/img/produk/hitam1.png') }}" alt="hitam">
                    <p>Beras Ratuayu Hitam</p>
                </div>
                <div class="product-item">
                    <img src="{{ asset('assets/img/produk/merah1.png') }}" alt="merah">
                    <p>Beras Ratuayu Merah</p>
                </div>
                <div class="product-item">
                    <img src="{{ asset('assets/img/produk/biru1.png') }}" alt="biru">
                    <p>Beras Ratuayu Biru</p>
                </div>
                <div class="product-item">
                    <img src="{{ asset('assets/img/produk/ungu1.png') }}" alt="ungu">
                    <p>Beras Ratuayu Ungu</p>
                </div>
                <div class="product-item">
                    <img src="{{ asset('assets/img/produk/tempong1.png') }}" alt="tempong">
                    <p>Beras Ratuayu Tempong</p>
                </div>
            </div>
            <button type="button" class="slick-next"><i class="bx bx-chevron-right"></i></button>
        </div>
        <div class="produk"><a href="/produk">Produk Kami</a></div>

    </section>

    <!-- Import Boxicons -->
    {{-- <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'> --}}

    <!-- Import jQuery and Slick Carousel JavaScript -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.product-slider').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2500,
                arrows: true,
                prevArrow: $('.slick-prev'),
                nextArrow: $('.slick-next'),
                responsive: [{
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            infinite: true,
                            arrows: false,
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        }
                    }
                ]
            });
        });
    </script>
@endsection
