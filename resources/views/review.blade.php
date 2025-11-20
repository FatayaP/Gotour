@extends('layouts.main')

@section('title', 'Halaman Review')

@section('content')
<div class="container my-5">
    <div class="review-box bg-white p-4 rounded-4 shadow-lg mx-auto" style="max-width: 500px;">
        <h3 class="text-center fw-bold">Berikan Review Anda</h3>

        {{-- Pesan sukses --}}
        @if(session('success'))
            <div class="alert alert-success mt-2">{{ session('success') }}</div>
        @endif

        {{-- Form Review --}}
        <form method="POST" action="{{ route('review.store') }}">
            @csrf
            <div class="text-center mt-3">
                <label class="fw-semibold">Rating (1–5 bintang):</label>
                <div class="star-rating d-flex justify-content-center" style="direction: rtl; font-size: 2rem;">
                    @for($i = 5; $i >= 1; $i--)
                        <input type="radio" id="star{{ $i }}" name="rating" value="{{ $i }}" hidden>
                        <label for="star{{ $i }}" class="mx-1" style="color: #ccc; cursor: pointer;">★</label>
                    @endfor
                </div>
            </div>

            <div class="mt-3">
                <label for="komentar" class="fw-semibold">Komentar:</label>
                <textarea name="komentar" id="komentar" class="form-control rounded-3" rows="3" placeholder="Tulis komentar Anda di sini..."></textarea>
            </div>

            <div class="text-center mt-3">
                <button type="submit" class="btn btn-primary rounded-3 px-4">Kirim Review</button>
            </div>
        </form>

        <hr>

        <h4 class="text-center fw-bold">Review Pengguna</h4>

        @foreach($reviews as $r)
            <div class="border rounded p-2 my-2 bg-light">
                <strong>{{ $r['nama'] }}</strong> — 
                <span class="text-warning">
                    {{ str_repeat('★', $r['rating']) }}
                    {{ str_repeat('☆', 5 - $r['rating']) }}
                </span>
                <p class="mb-0">{{ $r['komentar'] }}</p>
            </div>
        @endforeach
    </div>
</div>

{{-- Style khusus halaman ini --}}
<style>
    body {
        background-image: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e');
        background-size: cover;
        background-attachment: fixed;
    }

    .star-rating label:hover,
    .star-rating label:hover ~ label {
        color: gold !important;
    }

    input[type="radio"]:checked ~ label {
        color: gold !important;
    }
</style>
@endsection
