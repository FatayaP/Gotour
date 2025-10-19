@extends('layouts.main')

@section('title', 'Destinasi Populer')

@section('content')
<div class="container my-5">
    <h2 class="text-center mb-4 fw-bold">Destinasi Populer</h2>
    <p class="text-center mb-5">Temukan destinasi wisata terbaik yang paling populer untuk liburan Anda!</p>

    <div class="row">
        @foreach ($destinasi as $d)
        <div class="col-md-3 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('images/' . $d['gambar']) }}" class="card-img-top" alt="{{ $d['nama'] }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $d['nama'] }}</h5>
                    <p class="card-text">{{ $d['deskripsi'] }}</p>
                </div>
                <div class="card-footer text-center">
                    <a href="#" class="btn btn-dark">Selengkapnya</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

