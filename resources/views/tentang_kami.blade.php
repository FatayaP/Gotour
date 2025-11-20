@extends('layouts.main') 

@section('title', 'Tentang GoTour')

@section('content')
<div class="container py-5">
    
    {{-- Visi dan Misi --}}
    <section class="mb-5 p-4 border rounded shadow-sm">
        <h2 class="h3 mb-3">Visi dan Misi</h2>
        <p>Visi kami adalah menjadi platform terbaik untuk membantu pengguna menjelajahi dunia dengan cara yang mudah dan menyenangkan. Misi kami adalah menyediakan layanan berkualitas tinggi yang mengutamakan kebutuhan pelanggan, serta memberikan pengalaman tak terlupakan dalam setiap perjalanan Anda.</p>
    </section>

    {{-- Siapa Kami --}}
    <section class="mb-5 p-4 border rounded shadow-sm">
        <h2 class="h3 mb-3">Siapa Kami?</h2>
        <p>Kami adalah tim yang berdedikasi dalam menciptakan aplikasi perjalanan yang memudahkan pengguna untuk menemukan, merencanakan, dan menikmati destinasi impian mereka. Dengan pengalaman bertahun-tahun di industri pariwisata, kami berkomitmen untuk memberikan layanan terbaik kepada Anda.</p>
    </section>

    {{-- Tim Kami --}}
    <section class="mb-5 p-4 border rounded shadow-sm text-center">
        <h2 class="h3 mb-4">Tim Kami</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4 team-members">
            @foreach ($team_members as $member)
            <div class="col">
                <div class="team-member-card">
                    {{-- Ganti path gambar dengan fungsi asset() --}}
                    <img src="{{ asset($member['foto']) }}" alt="{{ $member['nama'] }}" class="rounded-circle mb-3" style="width: 120px; height: 120px; object-fit: cover; border: 3px solid #007bff;">
                    <h3 class="h5 mb-1">{{ $member['nama'] }}</h3>
                    <p class="text-muted small">{{ $member['jabatan'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    {{-- Hubungi Kami --}}
    <section class="p-4 border rounded shadow-sm">
        <h2 class="h3 mb-3">Hubungi Kami</h2>
        <p>Jika Anda memiliki pertanyaan atau butuh bantuan, jangan ragu untuk menghubungi kami melalui layanan kami atau melalui media sosial kami. Kunjungi halaman <a href="{{ route('bantuan_kami') }}">Bantuan Kami</a> untuk kontak lebih lanjut.</p>
    </section>

</div>
@endsection