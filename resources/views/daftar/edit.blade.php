@extends('layouts.app')

@section('content')
<div class="container">
    <div class="mt-3">
        <h1 class="text-center">Edit Data Pendaftaran</h1>
    </div>
    <div class="card mt-3">
        <div class="card-header bg-primary text-white">
            Edit Data Pendaftaran
        </div>
        <div class="card-body">
            <form action="{{ route('daftar.update', $daftar->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" value="{{ $daftar->nama }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="{{ $daftar->email }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nomor Telepon</label>
                    <input type="text" class="form-control" name="nomor" value="{{ $daftar->nomor }}" required>
                </div>
                <div class="modal-footer">
                    <a href="{{ route('daftar.index') }}" class="btn btn-danger me-3">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
