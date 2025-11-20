@extends('layouts.main') 

@section('title', 'Blog Terbaru - GoTour')

@section('content')
<div class="container py-5">
    
    <header class="text-center mb-5">
        <h1 class="display-4">Blog Terbaru</h1>
    </header>

    <section class="blog-section">
        {{-- Menggunakan grid Bootstrap untuk tata letak 4 kolom --}}
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
            
            @forelse ($blog_posts as $post)
            <div class="col">
                {{-- Card Blog Post --}}
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body d-flex flex-column">
                        <h3 class="card-title h5 font-weight-bold mb-3">{{ $post['judul'] }}</h3>
                        <p class="card-text text-muted mb-4">{{ $post['deskripsi'] }}</p>
                        
                        {{-- Tombol Baca Selengkapnya dengan link eksternal --}}
                        <div class="mt-auto">
                            <a href="{{ $post['link'] }}" target="_blank" class="btn btn-primary btn-sm">BACA SELENGKAPNYA</a>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center">
                <p>Belum ada post blog terbaru saat ini.</p>
            </div>
            @endforelse

        </div>
    </section>

</div>
@endsection