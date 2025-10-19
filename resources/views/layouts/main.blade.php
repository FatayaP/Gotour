<!DOCTYPE html>
<html lang="id">
<head>
  @include('partials.header')
</head>
<body>

  @include('partials.navbar')

  <main class="@yield('page-class')">
  @yield('content')
</main>


  

  @include('partials.footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
