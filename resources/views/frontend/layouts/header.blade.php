 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top">
     <div class="container d-flex align-items-center">

         <h1 class="logo me-auto"><a href="/"><img src="{{ asset('assets/img/logo.png') }}" alt=""> </a>
         </h1>
         <!-- Uncomment below if you prefer to use an image logo -->
         <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

         <nav id="navbar" class="navbar order-last order-lg-0">
             <ul>
                 <li><a href="/" class="{{ $judul === 'Beranda' ? 'active' : '' }}">Beranda</a></li>

                 <li class="dropdown"><a href="#"
                         class="{{ $judul === 'Profil' ? 'active' : '' }}"><span>Profil</span> <i
                             class="bi bi-chevron-down"></i></a>
                     <ul>
                         <li><a href="/tentangkami">Tentang Kami</a></li>
                         <li><a href="/sambutan">Sambutan</a></li>
                         <li><a href="/visidanmisi">Visi dan Misi</a></li>
                     </ul>
                 </li>

                 <li><a href="/produk" class="{{ $judul === 'Produk' ? 'active' : '' }}">Produk</a></li>
                 <li><a href="/artikel" class="{{ $judul === 'Artikel' ? 'active' : '' }}">Artikel</a></li>
                 <li><a href="/kontak" class="{{ $judul === 'Kontak' ? 'active' : '' }}">Kontak</a></li>
                 <li><a href="/karir" class="{{ $judul === 'Karir' ? 'active' : '' }}">Karir</a></li>

             </ul>
             <i class="bi bi-list mobile-nav-toggle"></i>
         </nav><!-- .navbar -->

         {{-- <div class="header-social-links d-flex">
             <a href="#" class="twitter"><i class="bu bi-twitter"></i></a>
             <a href="#" class="facebook"><i class="bu bi-facebook"></i></a>
             <a href="#" class="instagram"><i class="bu bi-instagram"></i></a>
             <a href="#" class="linkedin"><i class="bu bi-linkedin"></i></i></a>
         </div> --}}

     </div>
 </header><!-- End Header -->
