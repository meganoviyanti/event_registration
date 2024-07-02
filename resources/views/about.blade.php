<!-- resources/views/about.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card p-4 shadow-lg rounded">
        <h1>Tentang Kami</h1>
        <div class="row">
            <div class="col-md-6">
                <p>
                    Selamat datang di Festival Konser LiveWire! Kami adalah ekstravaganza musik tahunan yang mempertemukan beragam artis, pertunjukan yang menggemparkan, dan pengalaman tak terlupakan bagi pecinta musik dari segala usia. Didirikan dengan misi untuk merayakan musik dalam segala bentuknya, LiveWire telah berkembang menjadi festival utama, yang terkenal dengan suasananya yang semarak, produksi mutakhir, dan komitmen untuk menciptakan lingkungan yang aman dan inklusif bagi semua orang.

                    Di LiveWire, kami percaya pada kekuatan musik untuk menyatukan orang-orang dan menciptakan kenangan abadi. Festival kami lebih dari sekedar serangkaian konser; ini adalah komunitas tempat para penggemar dapat terhubung dengan artis favorit mereka, menemukan suara baru, dan membenamkan diri dalam dunia ritme dan melodi. Dari rock hingga pop, hip-hop hingga elektronik, beragam lineup kami memastikan selalu ada sesuatu untuk setiap penggemar musik.
                    <p>Siap menjadi bagian dari pengalaman LiveWire? Segara mendaftar!!</p>
                </p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('https://i.pinimg.com/564x/de/5b/f4/de5bf4986c3683bdfe9e4772bc0da7c2.jpg') }}" class="img-fluid" alt="Tentang Kami" style= width: 100%;
                        height: 20%;>
            </div>
        </div>
    </div>


    <div class="card mt-5 p-4 shadow-lg rounded">
        <h2>Nilai-Nilai Kami</h2>
        <ul>
            Di LiveWire Concert Festival, tim kami didorong oleh komitmen terhadap semangat musik, inovasi, integritas, inklusivitas, keunggulan, komunitas, keberlanjutan, dan kolaborasi. Kami percaya pada kekuatan transformatif musik untuk menginspirasi dan menyatukan orang-orang dari semua lapisan masyarakat. Menjunjung tinggi standar integritas dan inklusivitas tertinggi, kami berupaya mencapai keunggulan dalam setiap aspek pengalaman festival, mulai dari kurasi artis hingga produksi acara
        </ul>
    </div>

    <div class="card mt-5 p-4 shadow-lg rounded">
        <h2>Tim Kami</h2>
        <p>Di LiveWire Concert Festival, tim kami adalah jantung dan jiwa yang membuat acara ini benar-benar spektakuler.
            Dengan semangat yang sama terhadap musik dan dedikasi untuk menciptakan pengalaman tak 
            terlupakan bagi para peserta, tim kami menyatukan kekayaan keahlian dan kreativitas. 
            Kenali orang-orang di balik layar yang mewujudkan LiveWire:
        </p>

        <div class="row justify-content-center">
            <div class="col-md-2 text-center">
                <img src="{{ url('images\tim\mega.jpg') }}" class="img-fluid rounded-circle" alt="Mega" style="width: 150px; height: 150px;">
                <h4 class="mt-2">Mega <br> Nopiyanti</h4>
            </div>
            <div class="col-md-2 text-center">
                <img src="{{ url('images\tim\kintan.jpg') }}" class="img-fluid rounded-circle" alt="Kintan" style="width: 150px; height: 150px;">
                <h4 class="mt-2">Kintan <br> Mutiara L</h4>
            </div>
            <div class="col-md-2 text-center">
                <img src="{{ url('images\tim\hendra.jpg') }}" class="img-fluid rounded-circle" alt="Hendra" style="width: 150px; height: 150px;">
                <h4 class="mt-2">Hendra <br> Sopian</h4> 
            </div>
            <div class="col-md-2 text-center">
                <img src="{{ url('images\tim\aryanti.jpg') }}" class="img-fluid rounded-circle" alt="Aryanti" style="width: 150px; height: 150px;">
                <h4 class="mt-2">Aryanti</h4>
            </div>
            <div class="col-md-2 text-center">
                <img src="{{ url('images\tim\riska.jpg') }}" class="img-fluid rounded-circle" alt="Riska" style="width: 150px; height: 150px;">
                <h4 class="mt-2">Riska <br> Mulyani</h4>
            </div>
        </div>
    </div>

    <div class="card mt-5 p-4 shadow-lg rounded">
        <h2>Hubungi Kami</h2>
        <p>Jika Anda memiliki pertanyaan atau masukan, jangan ragu untuk <a href="{{ url('/contact') }}">menghubungi kami</a>. Kami senang mendengar masukan dari Anda!</p>
    </div>
</div>
</section>
<footer class="mt-5 bg-dark text-white py-3">
    <div class="container">

        <p>&copy; 2024 LiveWire</p>
    </div>
</footer>
@endsection

