@extends('layouts.main') 

@section('title', 'Bantuan Kami')

@section('content')
<div class="container py-5">
    <header class="text-center mb-5">
        <h1 class="display-4" style="color: #ddd;">Bantuan Kami</h1>
        <p class="lead" style="color: #ccc;">Jika Anda memiliki pertanyaan atau membutuhkan bantuan, jangan ragu untuk menghubungi kami melalui salah satu metode berikut:</p>
    </header>

    <div class="row row-cols-1 row-cols-md-3 g-4 text-center mb-5">
        
        <div class="col">
            <div class="card h-100 bg-dark text-white border-secondary">
                <div class="card-body">
                    <h3 class="card-title">Email</h3>
                    <p class="card-text">Kirimkan email ke **tamufatjaya01@gmail.com**</p>
                    <a href="mailto:tamufatjaya01@gmail.com" class="btn btn-outline-info mt-2">Kirim Email</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 bg-dark text-white border-secondary">
                <div class="card-body">
                    <h3 class="card-title">Telepon</h3>
                    <p class="card-text">Hubungi kami di **+62 821-2937-8808**</p>
                    <a href="tel:+6282129378808" class="btn btn-outline-info mt-2">Hubungi Kami</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 bg-dark text-white border-secondary">
                <div class="card-body">
                    <h3 class="card-title">Chat Langsung</h3>
                    <p class="card-text">Klik tombol di bawah untuk memulai chat langsung dengan tim kami.</p>
                    <button class="btn btn-primary mt-2">MULAI CHAT</button>
                </div>
            </div>
        </div>
    </div>
    
    <section class="faq-section mt-5 pt-4">
        <h2 class="text-center mb-4" style="color: #ddd;">FAQ</h2>
        <p class="text-center mb-5" style="color: #ccc;">Kami telah menyusun daftar pertanyaan yang sering diajukan untuk membantu Anda menemukan jawaban dengan cepat.</p>

        {{-- Data Dummy FAQ --}}
        @php
            $faqs = [
                ['question' => 'Bagaimana cara memesan paket wisata?', 'answer' => 'Anda dapat memesan melalui halaman <a href="'.route('paket_wisata').'">Paket Wisata</a>.'],
                ['question' => 'Apakah saya bisa membatalkan pesanan?', 'answer' => 'Ya, pembatalan dapat dilakukan melalui akun Anda atau dengan menghubungi kami.'],
                ['question' => 'Bagaimana cara mendapatkan promo?', 'answer' => 'Promo tersedia di halaman <a href="'.route('promo').'">Promo</a>.'],
            ];
        @endphp

        <div class="accordion" id="faqAccordion">
            @foreach($faqs as $index => $faq)
            <div class="card bg-dark text-white border-secondary mb-2">
                <div class="card-header" id="heading{{ $index }}">
                    <h5 class="mb-0">
                        <button class="btn btn-link w-100 text-left text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}" aria-expanded="true" aria-controls="collapse{{ $index }}">
                            {{ $faq['question'] }}
                        </button>
                    </h5>
                </div>

                <div id="collapse{{ $index }}" class="collapse @if($index == 0) show @endif" aria-labelledby="heading{{ $index }}" data-bs-parent="#faqAccordion">
                    <div class="card-body" style="color: #ccc;">
                        {!! $faq['answer'] !!} {{-- Menggunakan {!! !!} karena answer mengandung tag <a> --}}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

</div>
@endsection