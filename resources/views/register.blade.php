@extends('layouts.main')

@section('title', 'Form Registrasi Pembayaran')

@section('content')
<div class="container my-5">
    <div class="mx-auto p-4 rounded-4 shadow-lg" 
         style="max-width: 450px; background: rgba(0, 0, 0, 0.7); color: white;">

        <h2 class="text-center mb-4">Formulir Pembayaran</h2>

        @php
            // Data dummy user (contoh)
            $user = [
                'nama' => 'Khairunnisa',
                'email' => 'khairunnisa@example.com',
                'alamat' => 'Jl. Sukajadi No.45, Bandung',
                'no_telp' => '081234567890'
            ];
        @endphp

        <form method="POST" action="{{ route('register.success') }}">
            @csrf

            <div class="mb-3">
                <label class="form-label fw-semibold">Nama Lengkap</label>
                <input type="text" name="nama" value="{{ $user['nama'] }}" 
                       class="form-control bg-dark text-white border-0 rounded-3" 
                       placeholder="Masukkan nama lengkap">
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Email</label>
                <input type="email" name="email" value="{{ $user['email'] }}" 
                       class="form-control bg-dark text-white border-0 rounded-3" 
                       placeholder="Masukkan email">
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Alamat</label>
                <input type="text" name="alamat" value="{{ $user['alamat'] }}" 
                       class="form-control bg-dark text-white border-0 rounded-3" 
                       placeholder="Masukkan alamat">
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Nomor Telepon</label>
                <input type="tel" name="no_telp" value="{{ $user['no_telp'] }}" 
                       class="form-control bg-dark text-white border-0 rounded-3" 
                       placeholder="Masukkan nomor telepon">
            </div>

            <button type="submit" class="btn btn-success w-100 rounded-3 py-2">
                Proses Pembayaran
            </button>
        </form>
    </div>
</div>
@endsection
