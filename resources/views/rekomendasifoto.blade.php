<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rekomendasi Foto - GoTour</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f4f6f9;
      font-family: 'Segoe UI', sans-serif;
    }

    nav {
      background-color: #333;
      padding: 10px 0;
    }

    nav a {
      color: white;
      margin: 0 15px;
      text-decoration: none;
      font-weight: 500;
    }

    nav a:hover {
      color: #1abc9c;
    }

    .logo {
      color: #1abc9c;
      font-weight: bold;
      margin-right: 30px;
      font-size: 20px;
    }

    .container {
      margin-top: 40px;
    }

    h2 {
      text-align: center;
      font-weight: bold;
      color: #2c3e50;
    }

    p.subtitle {
      text-align: center;
      color: #7f8c8d;
      margin-bottom: 40px;
    }

    .card {
      border: none;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card img {
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
      height: 280px;
      object-fit: cover;
    }

    .card-body {
      text-align: center;
    }

    .card-body h5 {
      font-weight: bold;
      color: #2c3e50;
    }

    .card-body p {
      color: #555;
      margin-bottom: 0;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="d-flex justify-content-center align-items-center">
  <span class="logo">GoTour</span>
  <a href="#">Beranda</a>
  <a href="#">Paket Wisata</a>
  <a href="#">Kategori</a>
  <a href="#">Destinasi Populer</a>
  <a href="#">Layanan</a>
  <a href="#">Testimoni</a>
  <a href="#">Blog</a>
  <a href="#">Bantuan Kami</a>
  <a href="#" class="ms-auto">Login</a>
  <a href="#">Daftar</a>
</nav>

<!-- Main Content -->
<div class="container">
  <h2>Rekomendasi Foto</h2>
  <p class="subtitle">Temukan inspirasi dari koleksi foto terbaik</p>

  <div class="row g-4">
    @foreach ($fotoList as $foto)
      <div class="col-md-3">
        <div class="card">
          <img src="{{ asset('images/' . $foto['gambar']) }}" alt="{{ $foto['nama_foto'] }}">
          <div class="card-body">
            <h5>{{ $foto['nama_foto'] }}</h5>
            <p>Kategori: {{ $foto['kategori'] }}</p>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>

</body>
</html>