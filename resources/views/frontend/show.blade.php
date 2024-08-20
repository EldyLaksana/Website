@extends('frontend.layouts.main')

@section('container')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Artikel</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li><a href="/artikel">Artikel</a></li>
                    <li>{{ $artikel->judul }}</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-10 entries">

                    <article class="entry entry-single">

                        <div class="entry-img-show">
                            <a href="{{ $artikel->sumber_gambar }}" target="_blank"><img
                                    src="{{ asset('storage/' . $artikel->gambar) }}" alt="" class="img-fluid"></a>
                        </div>

                        @if ($artikel->sumber_gambar)
                            <p class="entry-source">
                                Sumber: <a href="{{ $artikel->sumber_gambar }}"
                                    target="_blank">{{ $artikel->sumber_gambar }}</a>
                            </p>
                        @endif

                        <h2 class="entry-title">
                            {{ $artikel->judul }}
                        </h2>

                        <div class="entry-meta">
                            <ul>

                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a>Admin</a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-tag"></i> <a
                                        href="/artikel?kategori={{ $artikel->kategori->slug }}">{{ $artikel->kategori->nama }}</a>
                                </li>
                                <li class="d-flex align-items-center"><i class="bi bi-calendar3"></i>
                                    <a>{{ \Carbon\Carbon::parse($artikel->created_at)->translatedFormat('d F Y') }}</a>
                                </li>

                            </ul>
                        </div>

                        <div class="entry-content">
                            <p>{!! $artikel->body !!}</p>


                            @if ($artikel->sumber)
                                <p class="entry-source">
                                    Sumber: {{ $artikel->sumber }}
                                </p>
                            @endif

                            <div class="read-more">
                                <a href="/artikel"><i class="bi bi-arrow-left"></i> Kembali</a>
                            </div>
                        </div>

                    </article>

                </div>
            </div>
        </div>
    </section>
@endsection
