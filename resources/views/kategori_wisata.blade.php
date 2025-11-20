@extends('layouts.main')

@section('title', 'Kategori Wisata')

@section('content')
<div class="container py-4">
    {{-- Bagian Judul dan Deskripsi Atas --}}
    <div class="card bg-light text-center p-4 mb-5 shadow-sm">
        <h1 class="h3 mb-2">Paket Wisata Terbanyak Di Kunjungi Berdasarkan Per Kategori</h1>
        <p class="lead">Berikut Merupakan Data Pengunjung Per Bulan Di Setiap Paket Wisata Berdasarkan Kategorinya</p>
    </div>

    {{-- Kategori Cards dan Statistik --}}
    <div class="row row-cols-1 row-cols-md-3 g-4">
        
        {{-- Loop Melalui Data Kategori --}}
        @foreach($kategori_data as $key => $data)
        <div class="col">
            <div class="card h-100 shadow-sm">
                {{-- Gambar Kategori --}}
                <img src="{{ asset($data['image_url']) }}" class="card-img-top" alt="Wisata {{ $data['nama'] }}" style="height: 200px; object-fit: cover;">
                
                <div class="card-body">
                    <h3 class="card-title">{{ $data['nama'] }}</h3>
                    <p class="card-text text-muted">{{ $data['deskripsi'] }}</p>
                    
                    {{-- Statistik Pengunjung --}}
                    <div class="statistics mt-3">
                        <h4 class="h6">Statistik Pengunjung - {{ $data['nama'] }}</h4>
                        <table class="table table-sm table-striped table-bordered">
                            <thead class="bg-secondary text-white">
                                <tr>
                                    <th>Bulan</th>
                                    <th>Pengunjung</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data['statistik'] as $stats)
                                <tr>
                                    <td>{{ $stats['bulan'] }}</td>
                                    <td>{{ $stats['pengunjung'] }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        
    </div>
    
    {{-- Tombol Lihat Statistik --}}
    <div class="text-right mt-4">
        {{-- Menggunakan route('statistik') yang perlu Anda definisikan di web.php --}}
        <a href="{{ route('statistik') }}" class="btn btn-primary">
            Lihat Statistics 
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
            </svg>
        </a>
    </div>

</div>

@endsection