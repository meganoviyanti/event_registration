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
                        background-color: #f4f4f4;
                    }

                    .container {
                        display: flex;
                        padding: 20px;
                        gap: 30px;
                    }

                    .event-info {
                        width: 30%;
                    }

                    .event-image {
                        width: 70%;
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
                        <img src="{{ asset('https://scontent-xsp1-1.xx.fbcdn.net/v/t39.30808-6/448158352_389757510768937_528856765891646536_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGgzMTXEf2NraDsNt-PvHL8NsCV9E77rIw2wJX0TvusjPqf3YWwS1y7UdY6_Y5cRkMrGR7VgBSYaMiVOS-viriU&_nc_ohc=WUuY6v8RokMQ7kNvgEFpOtF&_nc_ht=scontent-xsp1-1.xx&oh=00_AYD8MP-WbOWMFEyOCUp6ms_kfgi0O-NX4qGoM8aAGYjJQA&oe=667242AE') }}" class="img-fluid" alt="Flowercity Fest">
                    </div>
                    <div class="event-info">
                        <div class="event-details">
                            <h3>Detail Event</h3>
                            <div class="detail-item">
                                <i class='far fa-calendar-alt'></i>
                                <p>04 Aug 2024</p>
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
                            <button>Beli Tiket</button>
                        </div>
                        <div class="event-footer">
                            <div class="event-organizer">
                                <img src="{{ asset('https://scontent-xsp1-1.xx.fbcdn.net/v/t39.30808-6/448158352_389757510768937_528856765891646536_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGgzMTXEf2NraDsNt-PvHL8NsCV9E77rIw2wJX0TvusjPqf3YWwS1y7UdY6_Y5cRkMrGR7VgBSYaMiVOS-viriU&_nc_ohc=WUuY6v8RokMQ7kNvgEFpOtF&_nc_ht=scontent-xsp1-1.xx&oh=00_AYD8MP-WbOWMFEyOCUp6ms_kfgi0O-NX4qGoM8aAGYjJQA&oe=667242AE') }}" class="img-fluid" alt="Flowercity Fest">
                                <p>LiveWire Festival</p>
                            </div>
                        </div>
                        <div class="event-footer">
                            <div class="event-actions">
                                <button class="disabled" id="btn-deskripsi" onclick="showContent('deskripsi')"><i class="fas fa-calendar-alt"></i> Deskripsi</button>
                                <button class="disabled" id="btn-tiket" onclick="showContent('tiket')"><i class="fas fa-ticket-alt"></i> Tiket</button>
                                <button class="disabled" id="btn-talent" onclick="showContent('talent')"><i class="fas fa-user-friends"></i> Talent</button>
                                <button class="disabled" id="btn-fasilitas" onclick="showContent('fasilitas')"><i class="fas fa-chair"></i> Fasilitas</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Include Font Awesome Script -->
                <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
            </body>
            </html>
            <div id="deskripsi" style="display: none;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Deskripsi Event</h5>
                        <p class="card-text">Ini adalah deskripsi event, tulis informasi menarik tentang event anda di sini.</p>
                    </div>
                </div>
            </div>
            <div id="tiket" style="display: none;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Informasi Tiket</h5>
                        <p class="card-text">Ini adalah informasi tiket, tulis informasi harga, kategori, dan pembelian tiket di sini.</p>
                    </div>
                </div>
            </div>
            <div id="talent" style="display: none;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Daftar Talent</h5>
                        <p class="card-text">Ini adalah daftar talent yang akan tampil, tulis informasi lengkap tentang mereka di sini.</p>
                    </div>
                </div>
            </div>
            <div id="fasilitas" style="display: none;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Fasilitas</h5>
                        <p class="card-text">Ini adalah daftar fasilitas yang tersedia di event, tulis informasi lengkap tentangnya di sini.</p>
                    </div>
                </div>
            </div>
            <script>
                function showContent(id) {
                    let content = document.getElementById(id);
                    content.style.display = 'block';
                    let buttons = document.getElementsByClassName('disabled');
                    for (let i = 0; i < buttons.length; i++) {
                        if (buttons[i].id !== 'btn-' + id) {
                            buttons[i].classList.add('disabled');
                            buttons[i].onclick = null;
                        } else {
                            buttons[i].classList.remove('disabled');
                        }
                    }
                }
            </script>
        </div>
    </div>
</div>
@endsection
