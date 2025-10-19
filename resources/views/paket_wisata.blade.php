@extends('layouts.main')

@section('title', 'Paket Wisata Unggulan - GoTour')
@section('page-class', 'page-paket')

@section('content')
<div class="container py-5">
    <h2 class="text-center mb-4 fw-bold">Paket Wisata Unggulan1</h2>
    <div class="row">
        @foreach($paketWisata as $paket)
        <div class="col-md-4 mb-4">
            <div class="card paket-card">
                <img src="{{ asset('images/'.$paket['gambar']) }}" class="card-img-top" alt="{{ $paket['nama'] }}">
                <div class="card-body">
                    <h5 class="card-title fw-bold text-capitalize">{{ $paket['nama'] }}</h5>
                    <p class="mb-1">{{ $paket['durasi'] }}</p>
                    <p class="mb-1 fw-bold">{{ $paket['harga'] }}</p>
                    <p class="diskon mb-2">Diskon: {{ $paket['diskon'] }}</p>
                    <div class="rating mb-3">
                        @for ($i = 0; $i < $paket['rating']; $i++)
                            ★
                        @endfor
                    </div>
                    <a href="{{ $paket['link'] ?? '#' }}" class="btn btn-detail w-100">Lihat Detail</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
