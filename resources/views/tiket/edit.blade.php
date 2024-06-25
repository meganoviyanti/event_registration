@extends('layouts.app')

@section('content')
<style>
  /* Style untuk form */
  .form-container {
    max-width: 500px;
    margin: auto;
    padding: 20px;
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
  }

  /* Style untuk label */
  label {
    font-weight: bold;
    color: #333;
  }

  /* Style untuk input dan select */
  input[type=text],
  select {
    width: 100%;
    padding: 10px;
    margin: 6px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  /* Style untuk tombol submit */
  button[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
  }

  /* Style untuk tombol submit saat dihover */
  button[type=submit]:hover {
    background-color: #45a049;
  }

  /* Style untuk container tombol */
  .button-container {
    text-align: right; /* Mengatur posisi tombol ke kanan */
    margin-top: 10px; /* Jarak antara form dan tombol */
  }
</style>

<div class="form-container">
  <form action="{{ route('tiket.update', $tiket->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="nama_tiket">Nama tiket</label>
        <input type="text" class="form-control" id="nama_tiket" name="nama_tiket" value="{{ $tiket->nama_tiket }}">
    </div>
    <div class="form-group">
      <label for="kategori_tiket">Kategori Tiket</label>
      <select class="form-control" id="kategori_tiket" name="kategori_tiket">
        <option value="">Pilih Kategori Tiket</option>
        <option {{ $tiket->kategori_tiket == 'PAYUN - PRESALE 1 IDR Rp.150.000' ? 'selected' : '' }}>PAYUN - PRESALE 1 IDR Rp.150.000</option>
        <option {{ $tiket->kategori_tiket == 'PAYUN - PRESALE 2 IDR Rp.175.000' ? 'selected' : '' }}>PAYUN - PRESALE 2 IDR Rp.175.000</option>
        <option {{ $tiket->kategori_tiket == 'PAYUN - EARLY BIRD IDR Rp.125.000' ? 'selected' : '' }}>PAYUN - EARLY BIRD IDR Rp.125.000</option>
        <option {{ $tiket->kategori_tiket == 'PENGKER - PRESALE 1 IDR Rp.75.000' ? 'selected' : '' }}>PENGKER - PRESALE 1 IDR Rp.75.000</option>
        <option {{ $tiket->kategori_tiket == 'PENGKER - PRESALE 2 IDR Rp.100.000' ? 'selected' : '' }}>PENGKER - PRESALE 2 IDR Rp.100.000</option>
      </select>
    </div>
    <div class="form-group">
      <label for="jumlah">Jumlah</label>
      <select class="form-control" id="jumlah" name="jumlah">
        <option value="">Pilih Jumlah Tiket</option>
        <option {{ $tiket->jumlah == '1' ? 'selected' : '' }}>1</option>
        <option {{ $tiket->jumlah == '2' ? 'selected' : '' }}>2</option>
        <option {{ $tiket->jumlah == '3' ? 'selected' : '' }}>3</option>
      </select>
    </div>
    <div class="form-group">
        <label for="kapasitas">Kapasitas</label>
        <select class="form-control" id="kapasitas" name="kapasitas">
          <option value="">Pilih Kapasitas untuk Tiket</option>
          <option {{ $tiket->kapasitas == 'PAYUN - PRESALE 1 [200]' ? 'selected' : '' }}>PAYUN - PRESALE 1 [200]</option>
          <option {{ $tiket->kapasitas == 'PAYUN - PRESALE 2 [300]' ? 'selected' : '' }}>PAYUN - PRESALE 2 [300]</option>
          <option {{ $tiket->kapasitas == 'PAYUN - EARLY BIRD [400]' ? 'selected' : '' }}>PAYUN - EARLY BIRD [400]</option>
          <option {{ $tiket->kapasitas == 'PAYUN - PRESALE 1 [500]' ? 'selected' : '' }}>PAYUN - PRESALE 1 [500]</option>
          <option {{ $tiket->kapasitas == 'PAYUN - PRESALE 2 [600]' ? 'selected' : '' }}>PAYUN - PRESALE 2 [600]</option>
        </select>
    </div>
    <div class="button-container">
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </form>
</div>
@endsection
