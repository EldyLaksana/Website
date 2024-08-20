<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index', [
            'judul' => 'Beranda'
        ]);
    }

    public function about()
    {
        return view('frontend.about', [
            'judul' => 'Profil'
        ]);
    }

    public function sambutan()
    {
        return view('frontend.sambutan', [
            'judul' => 'Profil'
        ]);
    }

    public function visidanmisi()
    {
        return view('frontend.visidanmisi', [
            'judul' => 'Profil'
        ]);
    }

    public function produk()
    {
        return view('frontend.produk', [
            'judul' => 'Produk'
        ]);
    }

    public function hitam()
    {
        return view('frontend.detail.hitam', [
            'judul' => 'Ratuayu Hitam'
        ]);
    }

    public function merah()
    {
        return view('frontend.detail.merah', [
            'judul' => 'Ratuayu Merah'
        ]);
    }

    public function ungu()
    {
        return view('frontend.detail.ungu', [
            'judul' => 'Ratuayu Ungu'
        ]);
    }

    public function biru()
    {
        return view('frontend.detail.biru', [
            'judul' => 'Ratuayu Biru'
        ]);
    }

    public function tempong()
    {
        return view('frontend.detail.tempong', [
            'judul' => 'Tempong'
        ]);
    }

    public function kontak()
    {
        return view('frontend.kontak', [
            'judul' => 'Kontak'
        ]);
    }

    public function artikel()
    {
        // dd(request('cari'));
        // $artikels = Artikel::with(['kategori'])->filter(request(['cari', 'kategori']))->latest();
        $artikels = Artikel::latest()->filter(request(['cari', 'kategori']));

        return view('frontend.artikel', [
            'judul' => 'Artikel',
            'artikels' => $artikels->paginate(5),
        ]);
    }

    public function show(Artikel $artikel)
    {
        // return ($artikel);
        return view('frontend.show', [
            'judul' => 'Artikel',
            'artikel' => $artikel->load('kategori')
        ]);
    }

    public function karir()
    {
        return view('frontend.karir', [
            'judul' => 'Karir'
        ]);
    }

    public function kategori(Kategori $kategori)
    {
        // return (request('cari'));
        $artikels = $kategori->artikels()->latest();

        if (request('cari')) {
            $artikels->where('judul', 'like', '%' . request('cari') . '%')
                ->orWhere('body', 'like', '%' . request('cari') . '%');
        }

        return view('frontend.kategori', [
            'judul' => $kategori->nama,
            'artikels' => $artikels->paginate(5),
            'kategori' => $kategori->nama,
            'slug' => $kategori->slug
        ]);
    }
}
