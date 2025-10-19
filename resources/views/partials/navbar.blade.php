<nav class="navbar navbar-expand-lg sticky-top bg-light shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-bold" href="{{ url('/') }}">
      <img src="{{ asset('images/IMG_7079-removebg-preview.png') }}" height="50" alt="GoTour">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link {{ Request::is('/') ? 'active text-primary fw-bold' : '' }}" href="{{ url('/') }}">
            Beranda
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ Request::is('paket') ? 'active text-primary fw-bold' : '' }}" href="{{ url('/paket') }}">
            Paket Wisata
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ Request::is('destinasi') ? 'active text-primary fw-bold' : '' }}" href="{{ url('/destinasi') }}">
            Destinasi Populer
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ Request::is('foto') ? 'active text-primary fw-bold' : '' }}" href="{{ url('/foto') }}">
            Rekomendasi Foto
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ Request::is('layanan') ? 'active text-primary fw-bold' : '' }}" href="#">
            Layanan
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ Request::is('testimoni') ? 'active text-primary fw-bold' : '' }}" href="#">
            Testimoni
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ Request::is('blog') ? 'active text-primary fw-bold' : '' }}" href="#">
            Blog
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ Request::is('bantuan') ? 'active text-primary fw-bold' : '' }}" href="#">
            Bantuan Kami
          </a>
        </li>
      </ul>

      <div class="d-flex">
        <a href="#" class="btn btn-outline-dark me-2">Login</a>
        <a href="#" class="btn btn-dark">Daftar</a>
      </div>
    </div>
  </div>
</nav>
