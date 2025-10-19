<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>GoTour - @yield('title', 'Beranda')</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" rel="stylesheet">

<style>
  body { font-family: 'Poppins', sans-serif; background-color: #f8f9fa; }
  nav.navbar { background-color: #fff; box-shadow: 0 2px 6px rgba(0,0,0,0.1); }
  nav a.nav-link { color: #000 !important; font-weight: 500; }
  nav a.nav-link:hover { color: #007bff !important; }
  .hero video, .hero img { width: 100%; height: 70vh; object-fit: cover; }
  .carousel-caption { background: rgba(0,0,0,0.4); padding: 20px; border-radius: 10px; }
  footer { background-color: #222; color: #fff; padding: 40px 0; margin-top: 40px; }
  footer a { color: #ddd; text-decoration: none; }
  footer a:hover { color: #fff; }
  .card img { height: 200px; object-fit: cover; }
  .btn-detail { background: #000; color: #fff; border-radius: 8px; }
  .btn-detail:hover { background: #333; }
  .star { color: gold; }

  /* Tambahan untuk halaman Destinasi Populer */
.page-destinasi {
  background-color: #fff;
  color: #212529;
}
.page-destinasi h2 {
  color: #000;
}
.page-destinasi p {
  color: #555;
}
.page-destinasi .card {
  border: none;
  border-radius: 12px;
  transition: transform 0.2s, box-shadow 0.2s;
}
.page-destinasi .card:hover {
  transform: translateY(-5px);
  box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
}
.page-destinasi .btn-dark {
  background-color: #000;
  border: none;
  transition: background-color 0.2s;
}
.page-destinasi .btn-dark:hover {
  background-color: #333;
}

/* Tambahan untuk halaman Paket Wisata */
.page-paket {
  background-color: #f8f9fa;
  font-family: 'Poppins', sans-serif;
}

.page-paket .paket-card {
  border: none;
  border-radius: 15px;
  overflow: hidden;
  box-shadow: 0 3px 10px rgba(0,0,0,0.1);
  transition: transform 0.2s;
}

.page-paket .paket-card:hover {
  transform: translateY(-5px);
}

.page-paket .paket-card img {
  height: 200px;
  object-fit: cover;
}

.page-paket .diskon {
  color: red;
  font-weight: bold;
}

.page-paket .rating {
  color: gold;
}

.page-paket .btn-detail {
  background-color: black;
  color: white;
  border-radius: 8px;
  text-transform: uppercase;
  font-weight: 500;
}

.page-paket .btn-detail:hover {
  background-color: #333;
}

/* ============================= */
/* Halaman Rekomendasi Foto      */
/* ============================= */
.page-foto {
  background-color: #f4f6f9;
  font-family: 'Segoe UI', sans-serif;
}

.page-foto h2 {
  text-align: center;
  font-weight: bold;
  color: #2c3e50;
}

.page-foto .subtitle {
  text-align: center;
  color: #7f8c8d;
  margin-bottom: 40px;
}

.page-foto .foto-card {
  border: none;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.1);
  transition: transform 0.3s ease;
}

.page-foto .foto-card:hover {
  transform: translateY(-5px);
}

.page-foto .foto-card img {
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  height: 280px;
  object-fit: cover;
}

.page-foto .card-body {
  text-align: center;
}

.page-foto .card-body h5 {
  font-weight: bold;
  color: #2c3e50;
}

.page-foto .card-body p {
  color: #555;
  margin-bottom: 0;
}

</style>
