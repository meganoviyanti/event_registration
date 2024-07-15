@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
           
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('reviews.index') }}">All Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('reviews.create') }}">Create Review</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<div class="container mt-4">
    <div class="card p-4 shadow-lg rounded">
        <h1 style=" font-family: Arial, sans-serif;">Hubungi Kami</h1>
        <p style=" font-family: Arial, sans-serif;">
            Kami senang mendengar dari Anda! Jika Anda memiliki pertanyaan, saran, atau masukan, silakan hubungi kami melalui formulir di bawah ini.
        </p>
        <form action="{{ url('/contact') }}" method="POST">
            @csrf
            <div class="card p-4 shadow-lg rounded">
                <div>
                    <label for="name" style="font-size: 1.1rem; font-family: Arial, sans-serif;">Nama:</label>
                    <input type="text" class="form-control" id="name" name="name" required style="font-family: Arial, sans-serif;">
                </div>
                <div>
                    <label for="email" style="font-size: 1.1rem; font-family: Arial, sans-serif;">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required style="font-family: Arial, sans-serif;">
                </div>
                <div>
                    <label for="message" style="font-size: 1.1rem; font-family: Arial, sans-serif;">Pesan:</label>
                    <textarea class="form-control" id="message" name="message" rows="5" required style="font-family: Arial, sans-serif;"></textarea>
                </div>
                <button type="submit" class="btn btn-primary" style="font-size: 1.1rem; font-family: Arial, sans-serif;">Kirim</button>
            </div>
        </form>
    </div>
</div>
@endsection

