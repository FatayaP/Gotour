@extends('layouts.main')

@section('title', 'Rekomendasi Foto - GoTour')
@section('page-class', 'page-foto')

@section('content')
<div class="container py-5">
  <h2 class="text-center fw-bold text-dark">Rekomendasi Foto</h2>
  <p class="subtitle text-center text-muted mb-5">Temukan inspirasi dari koleksi foto terbaik</p>

  <div class="row g-4">
    @foreach ($fotoList as $foto)
      <div class="col-md-3">
        <div class="card foto-card">
          <img src="{{ asset('images/' . $foto['gambar']) }}" alt="{{ $foto['nama_foto'] }}">
          <div class="card-body">
            <h5>{{ $foto['nama_foto'] }}</h5>
            <p>Kategori: {{ $foto['kategori'] }}</p>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection
