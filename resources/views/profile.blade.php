@extends('layouts.app')

@section('content')
<h2 class="mb-4">Profil & Pengaturan Akun</h2>
<div class="card p-4 bg-white">
  <form>
    <div class="mb-3">
      <label class="form-label">Nama</label>
      <input type="text" class="form-control" placeholder="Nama Anda">
    </div>
    <div class="mb-3">
      <label class="form-label">Email</label>
      <input type="email" class="form-control" placeholder="Email Anda">
    </div>
    <div class="mb-3">
      <label class="form-label">Kata Sandi Baru</label>
      <input type="password" class="form-control" placeholder="Kata sandi baru">
    </div>
    <button class="btn btn-primary">Simpan Perubahan</button>
  </form>
</div>
@endsection
