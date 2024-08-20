@extends('frontend.layouts.main')

@section('container')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Visi dan Misi</h2>
                <ol>
                    <li><a href="/">Beranda</a></li>
                    <li>Visi dan Misi</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us">
        <div class="container" data-aos="fade-up">

            <div class="row content">
                <div class="col-lg-6" data-aos="fade-right">
                    <img src="assets/img/foto1.jpg" alt="" width="500" height="450" class="img-fluid">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
                    <h2>
                        Visi
                    </h2>
                    <ul>
                        <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequa</li>
                        <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit
                        </li>
                        <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in</li>
                    </ul>

                    <h2>
                        Misi
                    </h2>
                    <ul>
                        <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequa</li>
                        <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit
                        </li>
                        <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in</li>
                    </ul>

                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->
@endsection
