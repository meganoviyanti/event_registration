@extends('layouts.app')

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Flowercity Fest</title>
                <!-- Include Font Awesome -->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
                <style>
                    body {
                        font-family: sans-serif;
                        margin: 0;
                        padding: 0;
                        background-color: #8fe3f85a;
                        /* background-image: url('https://wallpaperaccess.com/full/5234615.jpg');
                        background-size: cover;
                        background-repeat: no-repeat;
                        background-position: center; */
                    }

                    .container {
                        display: flex;
                        padding: 0px;
                        gap: 40px;
                    }

                    .event-info {
                        width: 40%;
                    }

                    .event-image {
                        width: 100%;
                        height: 20%;
                    }

                    .event-image img {
                        width: 100%;
                        height: auto;
                    }

                    .event-details {
                        padding: 20px;
                        background-color: #fff;
                        border-radius: 10px;
                    }

                    .event-details h3 {
                        margin-bottom: 10px;
                    }

                    .event-details .detail-item {
                        display: flex;
                        align-items: center;
                        margin-bottom: 10px;
                    }

                    .event-details .detail-item i {
                        margin-right: 10px;
                        font-size: 1.5rem;
                    }

                    .event-details .detail-item p {
                        margin: 0;
                    }

                    .event-actions {
                        display: flex;
                        justify-content: space-between;
                        margin-top: 20px;
                    }

                    .event-actions button {
                        padding: 10px 20px;
                        background-color: #007bff;
                        color: #fff;
                        border: none;
                        border-radius: 5px;
                        cursor: pointer;
                        transition: background-color 0.3s;
                    }

                    .event-actions button:hover {
                        background-color: #0056b3;
                    }

                    .event-footer {
                        display: flex;
                        justify-content: space-between;
                        margin-top: 20px;
                    }

                    .event-footer .social-media {
                        display: flex;
                        align-items: center;
                    }

                    .event-footer .social-media a {
                        margin-right: 10px;
                    }

                    .event-footer .social-media i {
                        font-size: 1.5rem;
                    }

                    .event-footer .event-organizer {
                        display: flex;
                        align-items: center;
                    }

                    .event-footer .event-organizer img {
                        width: 40px;
                        height: 40px;
                        border-radius: 50%;
                        margin-right: 10px;
                    }

                    .event-footer .event-organizer p {
                        margin: 0;
                    }

                    .event-footer .event-actions {
                        display: flex;
                        justify-content: center;
                        gap: 10px;
                        margin-top: 20px;
                    }

                    .event-footer .event-actions button {
                        padding: 10px 20px;
                        background-color: #007bff;
                        color: #fff;
                        border: none;
                        border-radius: 5px;
                        cursor: pointer;
                        transition: background-color 0.3s;
                    }

                    .event-footer .event-actions button:hover {
                        background-color: #0056b3;
                    }

                    .event-footer .event-actions button.disabled {
                        opacity: 0.5;
                        cursor: not-allowed;
                    }

                    .event-footer .event-actions button:first-child {
                        background-color: #6c757d;
                    }

                    .event-footer .event-actions button:first-child:hover {
                        background-color: #5a6268;
                    }

                    .gg-calendar,
                    .gg-calendar::before {
                     display: block;
                     box-sizing: border-box
                    }

                    .gg-calendar {
                     position: relative;
                     transform: scale(var(--ggs,1));
                     width: 18px;
                     height: 18px;
                     border: 2px solid;
                     border-top: 4px solid;
                     border-radius: 3px
                    }

                    .gg-calendar::before {
                     content: "";
                     position: absolute;
                     width: 10px;
                     border-radius: 3px;
                     left: 2px;
                     background: currentColor;
                     height: 2px;
                     top: 2px
                    } 

                    
                </style>
            </head>
            <body>
                <div class="container">
                    <div class="event-image">
                        <img src="{{ url('images\foto\livewire.jpg') }}" class="img-fluid" alt="Flowercity Fest">
                    </div>
                    <div class="event-info">
                        <div class="event-details">
                            <h3>Detail Event</h3>
                            <div class="detail-item">
                                <i class='far fa-calendar-alt'></i>
                                <p>20 Juni 2024</p>
                            </div>
                            <div class="detail-item">
                                <i class='far fa-clock'></i>
                                <p>11:00 - 23:55</p>
                            </div>
                            <div class="detail-item">
                                &nbsp;<i class="fa fa-map-pin"></i>
                                <p>Bandung, Indonesia</p>
                            </div>
                        </div>
                        <div class="event-actions">
                            <a class="nav-link" href="{{ route('daftar.tampilan') }}">
                                <button>Pertunjukan & Acara</button>
                            </a>
                        </div>
                        
                        <div class="event-footer">
                            <div class="event-actions">
                                <img src="{{ asset('https://s.mxmcdn.net/images-storage/albums5/3/4/8/6/3/2/65236843_500_500.jpg') }}"style="width:95px; height:95px; margin: 5px;">
                                <img src="{{ asset('https://www.ngepop.id/upload/media/entries/2023-07/21/463-entry-3-1689942619.jpg') }}"style="width:95px; height:95px; margin: 5px;">
                                <img src="{{ asset('https://lh3.googleusercontent.com/dca67HvZTqlOuKgfPkADCZ4SYDdwm4B-TfWzYIvBLhF7ycFsHcqGmeMYJ3v6n0emRBsga1If93iiFWs=w544-h544-l90-rj') }}"style="width:95px; height:95px; margin: 5px;">
                                <img src="{{ asset('https://mosaic.scdn.co/640/ab67616d0000b2734b685f036496bb88ee961c3cab67616d0000b2736b221b782a6aa8159d2886aeab67616d0000b27388dbfe85024acb12162c0e52ab67616d0000b273a8ed5e88294cb292a9cc7baa') }}"style="width:95px; height:95px; margin: 5px;">
                                <img src="{{ asset('https://th.bing.com/th/id/OIP.WPecAfIZ6IgCcug0xYFyywAAAA?rs=1&pid=ImgDetMain') }}"style="width:95px; height:95px; margin: 5px;">
                            </div>
                        </div>
                        </div>
                    </div>
                <!-- Include Font Awesome Script -->
                <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
            </body>
            </html>
        </header>
    
        <main>
            <section class="card mt-5 p-4 shadow-lg rounded" style="background-color: 	#E6E6FA">
                <h2>Deskripsi Event</h2>
                <p>Livewire Konser Festival adalah sebuah event musik live yang menghadirkan berbagai musisi ternama dari berbagai genre. Festival ini akan diadakan pada waktu dan tempat yang telah ditentukan diatas. Livewire Konser Festival adalah kesempatan perfect untuk kamu yang ingin menikmati musik live bersama teman-teman dan keluarga. Festival ini akan menghadirkan berbagai hiburan, seperti:</p>
                <ul>
                    <li>Penampilan musik live dari musisi ternama</li>
                    <li>Food and beverage stalls</li>
                    <li>Merchandise stalls</li>
                    <li>Games and activities</li>
                    <li>Dan masih banyak lagi!</li>
                </ul>
            </section>
    
            <section class="card mt-5 p-4 shadow-lg rounded" style="background-color: 	#E6E6FA">
                <h2>Pemesanan Tiket</h2>
                <p>Tiket Livewire Konser Festival sudah tersedia sekarang! Dapatkan tiketmu di <a href="{{ route('daftar.tampilan') }}">sini</a>. Harga tiket:</p>
                <ul>
                    <li>PAYUN - PRESALE 1: Rp [150.000]</li>
                    <li>PAYUN - EARLY BIRD : Rp [125.000]</li>
                    <li>PENGKER - PRESALE 1: Rp [75.000]</li>
                </ul>
                <p>Jangan sampai ketinggalan! Pesan tiket Livewire Konser Festival sekarang juga!</p>
            </section>
        </main>
        </div>
    </div>
</div>
@endsection
