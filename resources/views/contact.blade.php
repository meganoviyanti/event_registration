<!-- resources/views/contact.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Hubungi Kami</h1>
    <p>
        Kami senang mendengar dari Anda! Jika Anda memiliki pertanyaan, saran, atau masukan, silakan hubungi kami melalui formulir di bawah ini.
    </p>
    <form action="{{ url('/contact') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nama:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="message">Pesan:</label>
            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
</div>
@endsection
