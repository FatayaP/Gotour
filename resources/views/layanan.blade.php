@extends('layouts.main') 

@section('title', 'Layanan Kami - GoTour Bandung')

@section('content')
<div class="container py-5">
    
    <header class="text-center mb-5">
        <h1 class="display-4">Layanan Kami</h1>
    </header>

    <section class="services">
        {{-- Grid untuk kartu layanan, menggunakan Bootstrap 4/5 --}}
        {{-- row-cols-md-4 berarti 4 kolom di desktop, row-cols-md-3 di screenshot Anda, saya pakai 4 agar padat --}}
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 text-center">
            
            @forelse ($layanan as $item)
            <div class="col">
                {{-- Card Layanan --}}
                <div class="card h-100 shadow-sm border-0">
                    <img src="{{ asset($item['gambar']) }}" class="card-img-top mx-auto mt-3" alt="{{ $item['judul'] }}" style="width: 100px; height: 100px; object-fit: cover; border-radius: 8px;">
                    <div class="card-body">
                        <h3 class="card-title h5 font-weight-bold">{{ $item['judul'] }}</h3>
                        <p class="card-text text-muted small">{{ $item['deskripsi'] }}</p>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center">
                <p>Belum ada layanan yang tersedia saat ini.</p>
            </div>
            @endforelse

        </div>
    </section>

</div>
@endsection