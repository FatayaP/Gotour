@extends('layouts.main')

@section('title', 'Beranda')

@section('content')
  <!-- Hero Section -->
  <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <video autoplay muted loop>
          <source src="{{ asset('images/latarbelakang.mp4') }}" type="video/mp4">
        </video>
        <div class="carousel-caption">
          <h2>Selamat Datang di GoTour</h2>
          <p>Kami membantu membuat liburan Anda menjadi lebih mudah dan menyenangkan.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/HalUtama1.jpg') }}" alt="Gambar 2">
        <div class="carousel-caption">
          <h2>Ayo Menjelajah Bersama Kami</h2>
          <p>Kami telah melayani ribuan wisatawan dengan hasil memuaskan.</p>
        </div>
      </div>
      <div class="carousel-item">
        <video autoplay muted loop>
          <source src="{{ asset('images/lt.mp4') }}" type="video/mp4">
        </video>
        <div class="carousel-caption">
          <h2>Dengan Banyak Pilihan Wisata</h2>
          <p>Pilih tempat wisata yang sesuai dengan jadwal dan keinginan Anda.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Paket Wisata -->
  <section class="py-5 text-center">
    <div class="container">
      <h2 class="fw-bold mb-4">Paket Wisata Unggulan</h2>
      <div class="row">
        @foreach ($paketWisata as $paket)
        <div class="col-md-4 mb-4">
          <div class="card h-100 shadow-sm">
            <img src="{{ asset('images/'.$paket['gambar']) }}" class="card-img-top" alt="{{ $paket['nama'] }}">
            <div class="card-body">
              <h5 class="card-title">{{ $paket['nama'] }}</h5>
              <p class="card-text">{{ $paket['durasi'] }}</p>
              <p class="card-text fw-bold">{{ $paket['harga'] }}</p>
              <p class="text-danger">Diskon: {{ $paket['diskon'] }}</p>
              <div class="rating mb-2">
                @for ($i = 0; $i < $paket['rating']; $i++)
                  <span class="star">&#9733;</span>
                @endfor
              </div>
              <a href="{{ $paket['link'] }}" class="btn btn-detail w-100">Lihat Detail</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection
