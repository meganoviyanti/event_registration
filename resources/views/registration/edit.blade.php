<!-- resources/views/registration/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Edit Pendaftaran</h1>

    <form action="{{ route('registration.update', $pendaftaran->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="{{ $pendaftaran->nama }}" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $pendaftaran->email }}" required><br>

        <label for="telepon">Telepon:</label>
        <input type="text" id="telepon" name="telepon" value="{{ $pendaftaran->telepon }}" required><br>

        <button type="submit">Simpan Perubahan</button>
    </form>
@endsection
