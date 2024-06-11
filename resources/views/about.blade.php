<!-- resources/views/about.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Tentang Kami</h1>
    <div class="row">
        <div class="col-md-6">
            <p>
                Selamat datang di platform Pendaftaran Acara kami! Kami berdedikasi untuk memberikan pengalaman terbaik dalam mengelola dan menghadiri acara.
            </p>
            <p>
                Misi kami adalah menyederhanakan proses pendaftaran acara dan membuatnya dapat diakses oleh semua orang. Kami percaya bahwa acara memiliki kekuatan untuk menyatukan orang-orang, berbagi pengetahuan, dan menciptakan kenangan yang abadi.
            </p>
            <p>
                Didirikan pada tahun 2024, kami telah berkembang pesat berkat dukungan komunitas kami. Platform kami dibangun dengan teknologi terkini untuk memastikan proses pendaftaran yang mulus dan aman.
            </p>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('https://i.pinimg.com/564x/d8/1b/2e/d81b2e185eb441d5240725586f41a1e5.jpg') }}" class="img-fluid" alt="Tentang Kami">
        </div>
    </div>

    <h2 class="mt-5">Nilai-Nilai Kami</h2>
    <ul>
        <li><strong>Inovasi:</strong> Kami berusaha untuk terus meningkatkan platform kami dengan fitur dan fungsi baru.</li>
        <li><strong>Fokus pada Pelanggan:</strong> Pengguna kami adalah prioritas utama kami, dan kami bekerja keras untuk memenuhi kebutuhan mereka.</li>
        <li><strong>Integritas:</strong> Kami percaya pada transparansi dan kejujuran dalam semua tindakan kami.</li>
        <li><strong>Komunitas:</strong> Kami mendukung dan menghargai komunitas yang menggunakan platform kami.</li>
    </ul>

    <h2 class="mt-5">Tim Kami</h2>
    <p>
        Tim kami terdiri dari profesional yang berdedikasi dengan hasrat terhadap teknologi dan acara. Kami bekerja sama untuk memberikan pengalaman pendaftaran acara terbaik yang mungkin.
    </p>
    <div class="row">
        <div class="col-md-4 text-center">
            <img src="{{ asset('images/team/mega.jpg') }}" class="img-fluid rounded-circle" alt="Mega" style="width: 150px; height: 150px;">
            <h4 class="mt-2">Mega</h4>
        </div>
        <div class="col-md-4 text-center">
            <img src="{{ asset('images/team/kintan.jpg') }}" class="img-fluid rounded-circle" alt="Kintan" style="width: 150px; height: 150px;">
            <h4 class="mt-2">Kintan</h4>
        </div>
        <div class="col-md-4 text-center">
            <img src="{{ asset('images/team/hendra.jpg') }}" class="img-fluid rounded-circle" alt="Hendra" style="width: 150px; height: 150px;">
            <h4 class="mt-2">Hendra</h4>
        </div>
    </div>

    <h2 class="mt-5">Hubungi Kami</h2>
    <p>
        Jika Anda memiliki pertanyaan atau masukan, jangan ragu untuk <a href="{{ url('/contact') }}">menghubungi kami</a>. Kami senang mendengar dari Anda!
    </p>
</div>
@endsection

