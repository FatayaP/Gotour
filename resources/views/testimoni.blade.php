@extends('layouts.app')

@section('title', 'Testimoni Pelanggan - GoTour')

@section('content')
<style>
    .testimonial-cards {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 30px;
    }
    .testimonial-card {
        background-color: #ffffff;
        border-radius: 10px;
        padding: 25px;
        width: 280px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }
    .testimonial-card:hover {
        transform: translateY(-5px);
    }
    .testimonial-photo {
        width: 100%;
        max-width: 200px;
        height: 200px;
        object-fit: cover;
        border-radius: 10px;
        margin-bottom: 15px;
        border: 3px solid #4CAF50;
    }
    .testimonial-card p {
        font-size: 1rem;
        font-style: italic;
        color: #555;
        margin: 10px 0;
    }
    .testimonial-card h4 {
        font-size: 1.2rem;
        color: #4CAF50;
        margin-top: 10px;
    }
    .add-testimoni-btn {
        background-color: #3498db;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        text-decoration: none;
    }
    .add-testimoni-btn:hover {
        background-color: #2980b9;
    }
</style>

<div class="container py-5">
    <section id="testimoni">
        <h2 class="text-center mb-5 fw-bold text-success">Testimoni Pelanggan</h2>

        <div class="testimonial-cards">
            @forelse ($testimonials as $testimoni)
                <div class="testimonial-card text-center">
                    @php
                        $photo_path = str_replace(['../images/', 'images/'], '', $testimoni->photo);
                    @endphp
                    <img src="{{ asset('images/' . $photo_path) }}" 
                         alt="foto_{{ $testimoni->name }}" 
                         class="testimonial-photo">

                    <p>"{{ $testimoni->description }}"</p>
                    <h4>- {{ $testimoni->name }}</h4>
                </div>
            @empty
                <div class="col-12 text-center">
                    <p>Belum ada testimoni pelanggan saat ini.</p>
                </div>
            @endforelse
        </div>
    </section>

    <div class="text-center mt-5">
        <a href="{{ route('login') }}" class="add-testimoni-btn">Tambah Testimoni</a>
    </div>
</div>
@endsection
