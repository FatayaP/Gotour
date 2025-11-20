@extends('layouts.main')

@section('title', 'Login')

@section('content')
<div class="auth-container d-flex justify-content-center align-items-center" style="height: 90vh;">
  <div class="auth-box bg-dark text-light p-5 rounded shadow" style="width: 400px;">
      <h2 class="text-center mb-4 fw-semibold">Login</h2>

      {{-- Pesan Error --}}
      @if(session('error'))
          <div class="alert alert-danger">{{ session('error') }}</div>
      @endif

      <form action="{{ route('login.process') }}" method="POST">
          @csrf
          <div class="mb-3">
              <input type="email" name="email" placeholder="Email" class="form-control bg-secondary text-white border-0 rounded-pill py-2 px-3" required>
          </div>
          <div class="mb-3">
              <input type="password" name="password" placeholder="Password" class="form-control bg-secondary text-white border-0 rounded-pill py-2 px-3" required>
          </div>
          <button type="submit" class="btn w-100 py-2 fw-bold text-white" style="background-color: #0066cc; border-radius: 50px;">
              Masuk
          </button>
      </form>

      <p class="mt-3 text-center">
          Belum punya akun?
          <a href="#" class="text-info text-decoration-none">Daftar sekarang</a>
      </p>
  </div>
</div>
@endsection
