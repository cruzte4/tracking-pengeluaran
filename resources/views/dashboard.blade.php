@extends('layouts.app')

@section('content')
<h2 class="mb-4">Dashboard Utama</h2>
<div class="row g-3">
  <div class="col-md-3">
    <div class="card p-3 text-center bg-white">
      <h5>Saldo</h5>
      <p class="fs-4 text-success fw-bold">Rp 0</p>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card p-3 text-center bg-white">
      <h5>Total Pemasukan</h5>
      <p class="fs-5 text-success">Rp 0</p>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card p-3 text-center bg-white">
      <h5>Total Pengeluaran</h5>
      <p class="fs-5 text-danger">Rp 0</p>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card p-3 text-center bg-white">
      <h5>Grafik Bulanan</h5>
      <p class="text-muted">[grafik nanti di sini]</p>
    </div>
  </div>
</div>
@endsection
