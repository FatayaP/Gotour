<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinasi Populer Bandung</title>
    <!-- Asumsi menggunakan Tailwind CSS karena ini adalah proyek modern Laravel -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Gaya tambahan untuk gambar agar terlihat bagus */
        .card-image {
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <!-- Header -->
    <header class="bg-indigo-600 shadow-md">
        <div class="container mx-auto p-4">
            <h1 class="text-3xl font-bold text-white">Destinasi Populer Bandung</h1>
        </div>
    </header>

    <!-- Konten Utama Destinasi -->
    <div class="container mx-auto p-8">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Jelajahi Pesona Kota Kembang</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            {{-- Loop untuk menampilkan data destinasi dari Controller --}}
            @foreach ($destinasi as $item)
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transition duration-300 transform hover:scale-105">
                    {{-- Gambar menggunakan placeholder karena file fisik tidak tersedia --}}
                    <img class="w-full card-image" 
                         src="https://placehold.co/400x200/525252/FFFFFF?text={{ urlencode($item['nama']) }}"
                         alt="{{ $item['nama'] }}"
                         onerror="this.onerror=null;this.src='https://placehold.co/400x200/525252/FFFFFF?text=Placeholder+Image';"
                    >
                    <div class="p-5">
                        <h3 class="text-xl font-bold text-indigo-600 mb-2">{{ $item['nama'] }}</h3>
                        <p class="text-gray-700 text-sm mb-4 line-clamp-3">{{ $item['deskripsi'] }}</p>
                        <a href="#" class="inline-block px-4 py-2 bg-indigo-500 text-white text-sm font-semibold rounded-lg hover:bg-indigo-700 transition duration-150">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white p-4 mt-8">
        <div class="container mx-auto text-center text-sm">
            &copy; 2025 Aplikasi Wisata. Data dari DestinasiController.
        </div>
    </footer>

</body>
</html>
