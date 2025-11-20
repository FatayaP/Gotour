@extends('layouts.main')

@section('title', 'Promo & Diskon')

@section('content')

  <!-- Hero Section -->
  <div class="hero text-center text-white py-5" 
       style="background-image: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e');
              background-size: cover; background-position: center;">
    <div class="container py-5">
      <h1 class="fw-bold">🎉 Promo & Diskon Spesial!</h1>
      <p>Temukan penawaran terbaik untuk perjalanan wisata Anda.</p>
    </div>
  </div>

  <!-- Daftar Diskon -->
  <section class="container my-5">
    <h2 class="fw-bold text-center mb-4">Penawaran Terbaik Minggu Ini</h2>
    <div class="row">
      @foreach($discounts as $diskon)
        <div class="col-md-4 mb-4">
          <div class="card discount-card h-100 shadow-sm">
            <img src="{{ $diskon['image'] }}" class="card-img-top discount-img" alt="diskon">
            <div class="card-body">
              <h5 class="fw-bold">{{ $diskon['title'] }}</h5>
              <p>{{ $diskon['description'] }}</p>
              <p><strong>Potongan:</strong> {{ $diskon['percentage'] }}%</p>
              <p><strong>Berlaku hingga:</strong> {{ $diskon['valid_until'] }}</p>
              <a href="#" class="btn btn-primary w-100">Ambil Promo</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </section>

@endsection
