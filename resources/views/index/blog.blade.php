<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Tooplate">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Halaman index</title>


    <!-- Additional CSS Files -->

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl-carousel.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/tooplate-artxibition.css') }}">

<!--

Tooplate 2125 ArtXibition

https://www.tooplate.com/view/2125-artxibition

-->
    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->
    
    <!-- ***** Pre HEader ***** -->
    <div class="pre-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <span>Hai! Pertunjukannya Akan Dimulai dalam 3 Hari.</span>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="text-button">
                        <a href="/contact">Hubungi kami sekarang! <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="#" class="logo">Event<em>Registration</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="/home" class="active">Home</a></li>
                            <li><a href="/about">About Us</a></li>
                            <li><a href="{{ route('daftar.tampilan') }}">Show & Event</a></li> 
                            <li><a href="{{ route('tiket.index') }}">Ticket</a></li> 
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner">
        <div class="counter-content">
            <ul>
                <li>Days<span id="days"></span></li>
                <li>Hours<span id="hours"></span></li>
                <li>Minutes<span id="minutes"></span></li>
                <li>Seconds<span id="seconds"></span></li>
            </ul>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-content">
                        <div class="next-show">
                            <i class="fa fa-arrow-up"></i>
                            <span>Next Show</span>
                        </div>
                        <h6>Dibuka pada tanggal 20 Juni 2024</h6>
                        <h2>LiveWire Concert Fest 2024</h2>
                        <div class="main-white-button">
                            <a href="{{ route('daftar.index') }}">Beli Tiket</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- *** Owl Carousel Items ***-->
    <div class="show-events-carousel">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-show-events owl-carousel">
                        <div class="item">
                            <a href="event-details.html"><img src="assets/images/show-events-01.jpg" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="event-details.html"><img src="assets/images/show-events-02.jpg" alt=""></a> 
                        </div>
                        <div class="item">
                            <a href="event-details.html"><img src="assets/images/show-events-03.jpg" alt=""></a> 
                        </div>
                        <div class="item">
                            <a href="event-details.html"><img src="assets/images/show-events-04.jpg" alt=""></a> 
                        </div>
                        <div class="item">
                            <a href="event-details.html"><img src="assets/images/show-events-01.jpg" alt=""></a> 
                        </div>
                        <div class="item">
                            <a href="event-details.html"><img src="assets/images/show-events-02.jpg" alt=""></a> 
                        </div>
                        <div class="item">
                            <a href="event-details.html"><img src="assets/images/show-events-03.jpg" alt=""></a> 
                        </div>
                        <div class="item">
                            <a href="event-details.html"><img src="assets/images/show-events-04.jpg" alt=""></a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <!-- *** Amazing Venus ***-->
    <div class="amazing-venues">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="left-content">
                        <h4>Lima Guest Star luar biasa Untuk Acara!</h4>
                        <p>Bayangkan menikmati penampilan memukau dari musisi terkenal, tertawa terbahak-bahak bersama komedian populer, dan mendapatkan inspirasi dari pembicara motivasional ternama. Selain itu, Anda juga bisa menyaksikan artis visual yang melakukan live painting atau pertunjukan seni langsung yang mengesankan, serta berinteraksi dengan selebriti media sosial yang memiliki pengikut besar. Menyenagkan bukan?</p>
                        <br>
                        <p>Jika ada pertanyaan lebih lanjut yang Anda inginkan, <a href="/contact">beri tahu saya!</a></p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="right-content">
                        <h5><i class="fa fa-map-marker"></i>Kunjungi Kami</h5>
                        <span><br>Lapangan PPI Pussenif<br>G.K. Sunan Ambu ISBI Bandung<br>Tritan Point Bandung</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- *** Map ***-->
    <div class="map-image">
        <img src="assets/images/itu.jpg" alt="Maps of 3 Venues">
    </div>


    <!-- *** Venues & Tickets ***-->
    <div class="venue-tickets">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Tiket & Tempat</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="venue-item">
                        <div class="thumb">
                            <img src="assets/images/venue-01.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <div class="left-content">
                                <div class="main-white-button">
                                    <a href="{{ route('daftar.index') }}">Beli Tiket</a>
                                </div>
                            </div>
                            <div class="right-content">
                                <h4>PAYUN - PRESALE 1</h4>
                                <p>Tiket ini memberikan akses ke barisan depan dengan harga presale khusus. Ideal untuk penggemar yang ingin menikmati konser dari dekat.</p>
                                <ul>
                                    <li><i class="fa fa-sitemap"></i>250</li>
                                    <li><i class="fa fa-user"></i>500</li>
                                </ul>
                                <div class="price">
                                    <span>1 ticket <br>mulai <em>Rp. 150.000</em></span>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="venue-item">
                        <div class="thumb">
                            <img src="assets/images/venue-02.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <div class="left-content">
                                <div class="main-white-button">
                                    <a href="{{ route('daftar.index') }}">Beli Tiket</a>
                                </div>
                            </div>
                            <div class="right-content">
                                <h4>PAYUN - EARLY BIRD</h4>
                                <p>Tiket early bird ini menawarkan tempat di bagian depan dengan harga lebih murah jika dibeli lebih awal.
                                </p>
                                <ul>
                                    <li><i class="fa fa-sitemap"></i>450</li>
                                    <li><i class="fa fa-user"></i>650</li>
                                </ul>
                                <div class="price">
                                    <span>1 ticket<br>mulai <em>Rp. 125.000</em></span>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="venue-item">
                        <div class="thumb">
                            <img src="assets/images/venue-03.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <div class="left-content">
                                <div class="main-white-button">
                                    <a href="{{ route('daftar.index') }}">Beli Tiket</a>
                                </div>
                            </div>
                            <div class="right-content">
                                <h4>PENGKER - PRESALE 1</h4>
                                <p>Tiket ini menyediakan tempat di bagian belakang dengan harga yang terjangkau. Cocok untuk pengalaman konser tanpa biaya tinggi.</p>
                                <ul>
                                    <li><i class="fa fa-sitemap"></i>450</li>
                                    <li><i class="fa fa-user"></i>750</li>
                                </ul>
                                <div class="price">
                                    <span>1 ticket<br>mulai <em>Rp. 75.000</em></span>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- *** Coming Events ***-->
    <div class="coming-events">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="event-item">
                        <div class="thumb">
                            <a href="event-details.html"><img src="assets/images/event-01.jpg" alt=""></a>
                        </div>
                        <div class="down-content">
                            <a href="event-details.html"><h4>Lapangan PPI Pussenif</h4></a>
                            <ul>
                                <li><i class="fa fa-clock-o"></i> Kamis: 15:30-19:30</li>
                                <li><i class="fa fa-map-marker"></i>Jl. Brigadir Jend. Katamso No.31 40122 Bandung Jawa Barat</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="event-item">
                        <div class="thumb">
                            <a href="event-details.html"><img src="assets/images/event-02.jpg" alt=""></a>
                        </div>
                        <div class="down-content">
                            <a href="event-details.html"><h4>G.K. Sunan Ambu ISBI Bandung</h4></a>
                            <ul>
                                <li><i class="fa fa-clock-o"></i> Jum'at: 08:00-14:00</li>
                                <li><i class="fa fa-map-marker"></i>Jl. Buah Batu No.212 40264 Bandung Jawa Barat</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="event-item">
                        <div class="thumb">
                            <a href="event-details.html"><img src="assets/images/event-03.jpg" alt=""></a>
                        </div>
                        <div class="down-content">
                            <a href="event-details.html"><h4>Tritan Point Bandung</h4></a>
                            <ul>
                                <li><i class="fa fa-clock-o"></i> Sabtu: 09:00-23:00</li>
                                <li><i class="fa fa-map-marker"></i>Jl. Raya Cipadung, Cipadung Wetan, Kec. Panyileukan, Kota Bandung, Jawa Barat 40614.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- *** Footer *** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="address">
                        <h4>Alamat LiveWire Concert Fest</h4>
                        <span><br>Lapangan PPI Pussenif<br>G.K. Sunan Ambu ISBI Bandung<br>Tritan Point Bandung</span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="links">
                        {{-- <h4>Useful Links</h4>
                        <ul>
                            <li><a href="#">Info</a></li>
                            <li><a href="#">Venues</a></li>
                            <li><a href="#">Guides</a></li>
                            <li><a href="#">Videos</a></li>
                            <li><a href="#">Outreach</a></li>
                        </ul> --}}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="hours">
                        <h4>Waktu</h4>
                        <ul>
                            <li>Kamis: 15:30-19:30</li>
                            <li>Jum'at: 08:00-14:00</li>
                            <li>Sabtu: 09:00-23:00</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <p>Mega, Riska, Aryanti, Kintan, Hendra</p>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <p class="copyright">Copyright 2024 Kelompok Enam
                    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="sub-footer">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="logo"><span>Event<em>Registration</em></span></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="menu">
                                    <ul>
                                        <li><a href="/home" class="active">Home</a></li>
                                        <li><a href="/about">About Us</a></li>
                                        <li><a href="{{ route('daftar.tampilan') }}">Show & Event</a></li> 
                                        <li><a href="{{ route('tiket.index') }}">Ticket</a></li> 
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="social-links">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery-2.1.0.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/popper.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- Plugins -->
    <script src="{{ asset('assets/js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/imgfix.min.js') }}"></script> 
    <script src="{{ asset('assets/js/mixitup.js') }}"></script> 
    <script src="{{ asset('assets/js/accordions.js') }}"></script>
    <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
    
    <!-- Global Init -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

  </body>
</html>