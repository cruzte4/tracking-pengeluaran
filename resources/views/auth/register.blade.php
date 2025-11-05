@extends('layouts.app')

@section('content')
<h2 class="mb-4 text-center">Daftar Akun Baru</h2>
<div class="card mx-auto p-4 bg-white" style="max-width:400px;">
  <form>
    <div class="mb-3">
      <label>Nama</label>
      <input type="text" class="form-control" placeholder="Nama lengkap">
    </div>
    <div class="mb-3">
      <label>Email</label>
      <input type="email" class="form-control" placeholder="email@contoh.com">
    </div>
    <div class="mb-3">
      <label>Password</label>
      <input type="password" class="form-control" placeholder="Kata sandi">
    </div>
    <button class="btn btn-primary w-100">Daftar</button>
  </form>
  <p class="mt-3 text-center">Sudah punya akun? <a href="/login">Masuk</a></p>
</div>
@endsection
