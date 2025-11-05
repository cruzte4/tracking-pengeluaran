@extends('layouts.app')

@section('content')
<h2 class="mb-4">Daftar Transaksi</h2>
<div class="card p-3 bg-white">
  <div class="d-flex mb-3 justify-content-between">
    <div>
      <label>Kategori:</label>
      <select class="form-select d-inline-block w-auto">
        <option>Semua</option>
        <option>Pemasukan</option>
        <option>Pengeluaran</option>
      </select>
    </div>
    <div>
      <label>Tanggal:</label>
      <input type="date" class="form-control d-inline-block w-auto">
    </div>
  </div>
  <table class="table table-bordered align-middle">
    <thead class="table-success">
      <tr>
        <th>Tanggal</th>
        <th>Kategori</th>
        <th>Jenis</th>
        <th>Jumlah</th>
      </tr>
    </thead>
    <tbody>
      <tr><td colspan="4" class="text-center text-muted">Belum ada transaksi</td></tr>
    </tbody>
  </table>
</div>
@endsection
