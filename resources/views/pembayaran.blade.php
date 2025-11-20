@extends('layouts.main')

@section('title', 'Pembayaran Berhasil')

@section('content')
<div class="container text-center py-5">
    <div class="mx-auto p-4 rounded-4 shadow" 
         style="max-width: 500px; background: rgba(0, 0, 0, 0.6); backdrop-filter: blur(20px); color: white;">
        
        <h1 class="text-success fw-bold mb-3">✅ Pembayaran Berhasil!</h1>
        <p>Terima kasih atas pembayaran Anda. Berikut detail transaksinya:</p>

        <div class="text-start mt-3">
            <p><strong>Nama:</strong> <span class="text-info">{{ $pembayaran['nama'] ?? '-' }}</span></p>
            <p><strong>Email:</strong> <span class="text-info">{{ $pembayaran['email'] ?? '-' }}</span></p>
            <p><strong>Alamat:</strong> <span class="text-info">{{ $pembayaran['alamat'] ?? '-' }}</span></p>
            <p><strong>No. Telepon:</strong> <span class="text-info">{{ $pembayaran['no_telp'] ?? '-' }}</span></p>
            <p><strong>Total Pembayaran:</strong> <span class="text-info">{{ $pembayaran['total'] ?? '-' }}</span></p>
            <p><strong>Metode:</strong> <span class="text-info">{{ $pembayaran['metode'] ?? '-' }}</span></p>
            <p><strong>Status:</strong> 
                <span class="fw-bold text-success">{{ $pembayaran['status'] ?? 'Berhasil' }}</span>
            </p>
        </div>

        <a href="{{ url('/') }}" class="btn btn-success mt-3 px-4">Kembali ke Beranda</a>
    </div>
</div>

<script>
    // Otomatis kembali ke beranda setelah 3 detik
    setTimeout(() => window.location.href = "{{ url('/') }}", 3000);
</script>
@endsection
