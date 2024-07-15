@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Buat Pembayaran</h1>
    <form action="{{ route('transaksi.store') }}" method="POST">
        @csrf
        <input type="hidden" name="tiket_id" value="{{ $tiket->id }}">
        <div class="form-group">
            <label for="jumlah">Jumlah</label>
            <input type="number" name="jumlah" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection