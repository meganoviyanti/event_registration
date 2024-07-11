@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Form Transaksi</h2>
    <form action="{{ route('transaksi.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="nama_pembeli">Nama Pembeli</label>
            <input type="text" class="form-control" id="nama_pembeli" name="nama_pembeli" value="{{ $tiket->nama_pembeli }}" readonly>
        </div>
        <div class="form-group">
            <label for="kategori_tiket">Kategori Tiket</label>
            <input type="text" class="form-control" id="kategori_tiket" name="kategori_tiket" value="{{ $tiket->kategori_tiket }}" readonly>
        </div>
        <div class="form-group">
            <label for="jumlah">Jumlah Tiket</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ $tiket->jumlah }}" readonly>
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" class="form-control" id="harga" name="harga" value="{{ $tiket->kategori_tiket == 'VIP' ? 500000 : 300000 }}" readonly>
        </div>
        <button type="submit" class="btn btn-primary">Proses Pembayaran</button>
    </form>
</div>
@endsection