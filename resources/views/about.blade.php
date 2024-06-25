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
                <img src="{{ asset('https://i.pinimg.com/564x/d8/1b/2e/d81b2e185eb441d5240725586f41a1e5.jpg') }}" class="img-fluid" alt="Tentang Kami">
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
                <img src="{{ asset('https://scontent-cgk1-1.xx.fbcdn.net/v/t39.30808-6/378118786_215376908206999_9021053465256297304_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeEp6E1vLuVjOKRkOPn2PM_IHbNt7L6MQAkds23svoxACd9sNJuhD4Cu4K__6aqaAgdqDLwd-qGt4659qNS3EJmA&_nc_ohc=yztqTzFxEcwQ7kNvgHD12zw&_nc_ht=scontent-cgk1-1.xx&oh=00_AYDqxq9_bluO8hj5yOp4hWLn_wMa-7AlJghZYYKzF9WgDw&oe=667EB458') }}" class="img-fluid rounded-circle" alt="Mega" style="width: 150px; height: 150px;">
                <h4 class="mt-2">Mega <br> Nopiyanti</h4>
            </div>
            <div class="col-md-2 text-center">
                <img src="{{ asset('https://scontent-cgk1-1.xx.fbcdn.net/v/t39.30808-6/448088983_387767930967895_3167959565098602180_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHRsUCbq3-L3oh301Plcg3NbHKPSs9EE6dsco9Kz0QTp8Xf6He7T54Ch6gr2cZ-3Z_ohGLdgjc_dPWCPqLf5EK_&_nc_ohc=URE3hVNP4zQQ7kNvgEnm7s6&_nc_ht=scontent-cgk1-1.xx&oh=00_AYAPcM4Aff58XhYduH9KUQCSZQxerKs4ka629FBGP8iKIw&oe=667ECCA2') }}" class="img-fluid rounded-circle" alt="Kintan" style="width: 150px; height: 150px;">
                <h4 class="mt-2">Kintan <br> Mutiara L</h4>
            </div>
            <div class="col-md-2 text-center">
                <img src="{{ asset('https://scontent-cgk1-1.xx.fbcdn.net/v/t39.30808-6/448252568_389454984132523_6436258827321965701_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeEZAcFHtcATBs7kT3INiDCfv9fbIwfUN--_19sjB9Q37_uL7ohs7US_u501vhGod6mwaAYFm1vtgOSCNTG_2Lm5&_nc_ohc=oVbyktK_CsQQ7kNvgE9RxRR&_nc_ht=scontent-cgk1-1.xx&oh=00_AYBClsbnuWGzc6Ya8TpBjwDmADG0fvoY9mcWVlXWQrYSnw&oe=667ED009') }}" class="img-fluid rounded-circle" alt="Hendra" style="width: 150px; height: 150px;">
                <h4 class="mt-2">Hendra <br> Sopian</h4> 
            </div>
            <div class="col-md-2 text-center">
                <img src="{{ asset('https://scontent-cgk1-1.xx.fbcdn.net/v/t39.30808-6/448249480_388829207528434_2086134669336791652_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFM2KxzadzLQ4HCIPvPziVDW4SWs28aBT9bhJazbxoFP_g-K1n2vE6PSYdQZtWcXGmHS9vzTGmMzBQoaiD124DA&_nc_ohc=ITWgJMSSa-wQ7kNvgGI-cJ7&_nc_ht=scontent-cgk1-1.xx&oh=00_AYB3tPS4dlTybUgcTadNvOnD5y71heobTPwimRXvH6MYhw&oe=667EC658') }}" class="img-fluid rounded-circle" alt="Aryanti" style="width: 150px; height: 150px;">
                <h4 class="mt-2">Aryanti</h4>
            </div>
            <div class="col-md-2 text-center">
                <img src="{{ asset('https://scontent-cgk1-1.xx.fbcdn.net/v/t39.30808-6/448106241_388831000861588_7694285451109038078_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGcl1jq6mU-xnPyJrH_cWtR6hPCrhgiWvTqE8KuGCJa9Ma8V-J0ICns8EbL3rSKHThGBu0_GRYvVxrr_tiI3N3I&_nc_ohc=GAuZyDuo9WsQ7kNvgHd-l52&_nc_ht=scontent-cgk1-1.xx&oh=00_AYD7t9WFa_4vxSJ-HxBrNsCxNDU5qdGCbF1RPx-ky6lPYw&oe=667EE0B6') }}" class="img-fluid rounded-circle" alt="Riska" style="width: 150px; height: 150px;">
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

