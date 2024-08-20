@extends('frontend.layouts.main')

@section('container')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Produk</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Produk</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <section id="carousel" class="carousel">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/img/background/9.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/background/10.png') }}" class="d-block w-100" alt="...">
                </div>

            </div>
        </div>

        </div>
    </section>

    <section id="produk" class="produk">
        <div class="container">
            <div class="row justify-content-center" data-aos="fade-up">
                <div class="col-lg-4 col-md-6 d-flex justify-content-center produk-item">
                    <div class="card" onclick="goToLink('/produk/hitam')">
                        <img src="{{ asset('assets/img/produk/hitam1.png') }}" class="card-img-top" alt="...">

                        <div class="card-body">
                            <h4 class="card-text">Beras Ratuayu Hitam</h4>

                            <p>Kemasan 5 Kg, 10 Kg, 25 Kg</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex justify-content-center produk-item">
                    <div class="card" onclick="goToLink('/produk/merah')">
                        <img src="{{ asset('assets/img/produk/merah1.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-text">Beras Ratuayu Merah</h4>

                            <p>Kemasan 5 Kg, 10 Kg, 25 Kg</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex justify-content-center produk-item">
                    <div class="card" onclick="goToLink('/produk/ungu')">
                        <img src="{{ asset('assets/img/produk/ungu1.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-text">Beras Ratuayu Ungu</h4>

                            <p>Kemasan 5 Kg, 10 Kg, 25 Kg</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center" data-aos="fade-up">
                <div class="col-lg-6 col-md-6 d-flex justify-content-center produk-item">
                    <div class="card" onclick="goToLink('/produk/biru')">
                        <img src="{{ asset('assets/img/produk/biru1.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-text">Beras Ratuayu Biru</h4>

                            <p>Kemasan 5 Kg, 10 Kg, 25 Kg</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 d-flex justify-content-center produk-item">
                    <div class="card" onclick="goToLink('/produk/tempong')">
                        <img src="{{ asset('assets/img/produk/tempong1.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-text">Beras Nasi Tempong</h4>

                            <p>Kemasan 5 Kg, 10 Kg, 25 Kg</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    {{-- <section id="produk1" class="produk1">
        <div class="produk-container">
            <div class="row">
                <div class="produk-item col-lg-4 ">
                    <img src="{{ asset('assets/img/produk/hitam1.png') }}" alt="hitam">
                    <h4>Ratuayu Hitam</h4>
                    <p>Kemasan 5 Kg, 10 Kg, 25 Kg</p>
                </div>
                <div class="produk-item col-lg-4 ">
                    <img src="{{ asset('assets/img/produk/hitam1.png') }}" alt="hitam">
                    <h4>Ratuayu Hitam</h4>
                    <p>Kemasan 5 Kg, 10 Kg, 25 Kg</p>
                </div>
                <div class="produk-item col-lg-4 ">
                    <img src="{{ asset('assets/img/produk/hitam1.png') }}" alt="hitam">
                    <h4>Ratuayu Hitam</h4>
                    <p>Kemasan 5 Kg, 10 Kg, 25 Kg</p>
                </div>
            </div>
    </section> --}}

    <script>
        function goToLink(url) {
            window.location.href = url;
        }
    </script>
@endsection
