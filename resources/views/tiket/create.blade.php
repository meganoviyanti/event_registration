@extends('layouts.app')

@section('content')
<style>
  .body {
    background-color: #8fe3f85a;
  }
  .form-container {
    max-width: 500px;
    margin: auto;
    padding: 20px;
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
  }

  label {
    font-weight: bold;
    color: #333;
  }

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


  button[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
  }

 
  button[type=submit]:hover {
    background-color: #45a049;
  }

  .button-container {
    text-align: right; 
    margin-top: 10px; 
  }
</style>

<div class="form-container">
  <form action="{{ route('tiket.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="nama_pembeli">Nama Pembeli</label>
        <input type="text" class="form-control" id="nama_pembeli" name="nama_pembeli" value="{{ old('nama_pembeli') }}">
    </div>
    <div class="form-group">
      <label for="kategori_tiket">Kategori Tiket</label>
      <select class="form-control" id="kategori_tiket" name="kategori_tiket">
        <option value="">Pilih Kategori Tiket</option>
        <option>PAYUN - PRESALE 1 IDR Rp.150.000</option>
        <option>PAYUN - PRESALE 2 IDR Rp.175.000</option>
        <option>PAYUN - EARLY BIRD IDR Rp.125.000</option>
        <option>PENGKER - PRESALE 1 IDR Rp.75.000</option>
        <option>PENGKER - PRESALE 2 IDR Rp.100.000</option>
      </select>
    </div>
    <div class="form-group">
      <label for="jumlah">Jumlah</label>
      <select class="form-control" id="jumlah" name="jumlah">
        <option value="">Pilih Jumlah Tiket</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
      </select>
    </div>
    <div class="form-group">
        <label for="tanggal">Tanggal</label>
        <input type="text" class="form-control" id="tanggal" name="tanggal" value="{{ old('tanggal') }}">
    </div>
    <div class="button-container">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
@endsection
