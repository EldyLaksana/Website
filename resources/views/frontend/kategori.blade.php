@extends('frontend.layouts.main')

@section('container')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>{{ $kategori }}</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li><a href="/artikel">Artikel</a></li>
                    <li>{{ $kategori }}</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-8 entries">
                    @foreach ($artikels as $artikel)
                        <article class="entry">

                            <div class="entry-img">
                                <img src="{{ asset('storage/' . $artikel->gambar) }}" alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                {{ $artikel->judul }}
                            </h2>

                            <div class="entry-meta">
                                <ul>

                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a>Admin</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-bookmark"></i> <a
                                            href="#">{{ $artikel->kategori->nama }}</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i>
                                        <a>{{ $artikel->created_at }}</a>
                                    </li>

                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>{{ $artikel->excerpt }}</p>

                                <div class="read-more">
                                    <a href="/artikel/{{ $artikel->slug }}">Baca lebih lanjut ...</a>
                                </div>
                            </div>

                        </article>
                    @endforeach
                    <div class="d-flex justify-content-end">
                        {{ $artikels->links() }}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar">
                        <h3 class="sidebar-title">Cari</h3>
                        <form action="/artikel">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Cari..." name="cari"
                                    value="{{ request('cari') }}">
                                <button class="btn btn-danger" type="submit" id="button-addon2"><i class="bi bi-search"
                                        aria-hidden="true"></i></button>
                            </div>
                        </form>

                        <hr>
                        <h3 class="sidebar-title">Categories</h3>
                        <div class="sidebar-item categories">
                            <ul>
                                <li><a href="/kategoris/tips">Tips <span></span></a></li>
                                <li><a href="/kategoris/info">Info <span></span></a></li>
                                <li><a href="/kategoris/resep">Resep</a></li>
                            </ul>
                        </div><!-- End sidebar categories-->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
