<section class="bg-light p-1 p-md-2 p-xl-3">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <div class="container">
        <div class="row justify-content-center">
            <div class="">
                <div class="card border-light-subtle shadow-sm">
                    <div class="row g-0">
                        <div class="">
                            <img src="{{ url('images\latar.gif') }}" loading="lazy" class="img-fluid rounded-start w-100 h-100 object-fit-cover"  alt="Welcome back you've been missed!">
                        </div>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="col-12 col-lg-11 col-l-10">
                                <div class="card-body p-3 p-md-4 p-xl-5">
                                    <div class="row">
                                        <div class="col-12">
                                            {{-- Bagian Navbar --}}
                                            <style>
                                                body {
                                                  margin: 0;
                                                  padding: 0;
                                                  font-family: sans-serif;
                                                }
                                            
                                                .navbar {
                                                  display: flex;
                                                  justify-content: space-between;
                                                  align-items: center;
                                                  background-color: #f0f0f0;
                                                  padding: 10px 20px;
                                                }
                                            
                                                .navbar-brand {
                                                  font-weight: bold;
                                                  font-size: 1.2em;
                                                }
                                            
                                                .navbar-nav {
                                                  display: flex;
                                                }
                                            
                                                .navbar-nav a {
                                                  margin-left: 20px;
                                                  text-decoration: none;
                                                  color: #333;
                                                }
                                            
                                                .navbar-nav a:hover {
                                                  text-decoration: underline;
                                                }
                                            
                                                .navbar-options {
                                                  display: flex;
                                                  align-items: center;
                                                }
                                            
                                                .navbar-options .dropdown {
                                                  position: relative;
                                                  display: inline-block;
                                                }
                                            
                                                .dropdown-content {
                                                  display: none;
                                                  position: absolute;
                                                  background-color: #f9f9f9;
                                                  min-width: 160px;
                                                  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                                                  z-index: 1;
                                                }
                                            
                                                .dropdown-content a {
                                                  color: black;
                                                  padding: 12px 16px;
                                                  text-decoration: none;
                                                  display: block;
                                                }
                                            
                                                .dropdown-content a:hover {
                                                  background-color: #f1f1f1;
                                                }
                                            
                                                .dropdown:hover .dropdown-content {
                                                  display: block;
                                                }
                                            
                                                .navbar-options .btn {
                                                  background-color: #929496;
                                                  border: none;
                                                  color: white;
                                                  padding: 10px 20px;
                                                  text-align: center;
                                                  text-decoration: none;
                                                  display: inline-block;
                                                  font-size: 16px;
                                                  margin: 4px 2px;  
                                                  cursor: pointer;
                                                }
                                            
                                                .navbar-options .btn:hover {
                                                    background-color: #929496;
                                                }
                                            
                                                .navbar-options .btn.active {
                                                    background-color: #929496;
                                                }
                                              </style>
                                            </head>
                                            <body>
                                              
                                              <section class="card mt-5 p-4 shadow-lg rounded" style="background-color: 	#E6E6FA">
                                                    Klik titik 3 dan daftar untuk melanjutkan pembelian!
                                              </section>
                                              


                                              <nav class="navbar mt-3">
                                                <a href="#" class="navbar-brand">LiveWire Festival</a>
                                                <div class="navbar-options">
                                                  <div class="dropdown">
                                                    <button class="btn">...</button>                                                    
                                                    <div class="dropdown-content">
                                                      <a href="{{ route ('daftar.index') }}">Daftar</a>
                                                    </div>
                                                  </div>
                                                </div>
                                              </nav>
                                            </body>
                                            
                                                                                        {{-- Bagian Navbar --}}
{{-- playlist --}}
<style>
    * {
padding: 0;
margin: 0;
}

body {
background-color: #121212;
font-family: 'Montserrat', sans-serif;
}

.sidebar .navigation ul li a:hover .fa,
.sidebar .navigation ul li a:active .fa,
.sidebar .navigation ul li a:focus .fa {
color: #b3b3b3;
}
.sidebar .navigation ul li .fa {
font-size: 20px;
margin-right: 10px;
}
.sidebar .navigation ul li a:hover .fa:hover,
.sidebar .navigation ul li a:hover .fa:active,
.sidebar .navigation ul li a:hover .fa:focus {
color: #ffffff;
}

.spotify-playlists {
padding: 20px 40px;
}
.spotify-playlists h2 {
color: #ffffff;
font-size: 22px;
margin-bottom: 20px;
}
.spotify-playlists .list {
display: flex;
gap: 20px;
overflow: hidden;
}
.spotify-playlists .list .item {
min-width: 140px;
width: 160px;
padding: 15px;
background-color: #181818;
border-radius: 6px;
cursor: pointer;
transition: all ease 0.4s;
}
.spotify-playlists .list .item:hover {
background-color: #252525;
}
.spotify-playlists .list .item img {
width: 100%;
border-radius: 6px;
margin-bottom: 10px;
}
.spotify-playlists .list .item .play {
position: relative;
}
.spotify-playlists .list .item .play .fa {
position: absolute;
right: 10px;
top: -60px;
padding: 18px;
background-color: #1db954;
border-radius: 100%;
opacity: 0;
transition: all ease 0.4s;
}
.spotify-playlists .list .item:hover .play .fa {
opacity: 1;
transform: translateY(-20px);
}
.spotify-playlists .list .item h4 {
color: #ffffff;
font-size: 14px;
margin-bottom: 10px;
white-space: nowrap;
overflow: hidden;
text-overflow: ellipsis;
}
.spotify-playlists .list .item p {
color: #989898;
font-size: 12px;
line-height: 20px;
font-weight: 600;
}
.spotify-playlists hr {
margin: 70px 0px 0px;
border-color: #636363;
}

.preview {
position: fixed;
bottom: 0;
left: 0;
right: 0;
background: linear-gradient(to right, #ae2896, #509bf5);
padding: 15px 40px;
display: flex;
justify-content: space-between;
}
.preview h6 {
color: #ffffff;
text-transform: uppercase;
font-weight: 400;
font-size: 12px;
margin-bottom: 10px;
}
.preview p {
color: #ffffff;
font-size: 14px;
font-weight: 500;
}
.preview button {
background-color: #ffffff;
color: #000000;
font-size: 16px;
font-weight: bold;
padding: 14px 30px;
border: 0px;
border-radius: 40px;
cursor: pointer;
}

.sidebar .navigation ul li a:hover .fa,
.sidebar .navigation ul li a:active .fa,
.sidebar .navigation ul li a:focus .fa {
  color: #b3b3b3;
}
.sidebar .navigation ul li .fa {
  font-size: 20px;
  margin-right: 10px;
}
.sidebar .navigation ul li a:hover .fa:hover,
.sidebar .navigation ul li a:hover .fa:active,
.sidebar .navigation ul li a:hover .fa:focus {
  color: #ffffff;
}

</style>
<div class="spotify-playlists">
    <h2>Playlist</h2>

    <div class="list">
      <div class="item">
        <img src="{{ asset('https://th.bing.com/th/id/OIP.wARUI_qM6lByWfXELdyFagAAAA?rs=1&pid=ImgDetMain') }}" >
        <div class="play">
            <a href="https://youtu.be/_I876NfSNf0?si=HGmJC9BftdbMhi_C" target="_blank">
                <i class="fas fa-play-circle fa-2x" style="color:#fff;"></i>
            </a>
        </div>
        <h4>NDX AKA</h4>
        <p>Kelingan Mantan</p>
    </div>
    

      <div class="item">
        <img src="{{ asset('https://th.bing.com/th/id/OIP.WPecAfIZ6IgCcug0xYFyywAAAA?rs=1&pid=ImgDetMain') }}" >
        <div class="play">
          <a href="https://youtu.be/aX-HzCxeuQY?si=ImNv-NA3jd5fqvQP" target="_blank">
              <i class="fas fa-play-circle fa-2x" style="color:#fff;"></i>
          </a>
      </div>
        <h4>NDX AKA</h4>
        <p>Nemen</p>
      </div>

      <div class="item">
        <img src="{{ asset('https://images.genius.com/972fa433b7775b32a831e8beb0e7959b.538x538x1.jpg') }}" >
        <div class="play">
          <a href="https://youtu.be/nj-uFt6N6Yc?si=hIKGJV7xODwFlTNS" target="_blank">
              <i class="fas fa-play-circle fa-2x" style="color:#fff;"></i>
          </a>
      </div>
        <h4>NDX AKA</h4>
        <p>Ditinggal Rabi</p>
      </div>

      <div class="item">
        <img src="{{ asset('https://play-lh.googleusercontent.com/ZLgQpu8sh-JOYNYe4bgqWPP6IqqFiJFQOwOlIkv_CD7eFAoslcQYorIa1bswsIwxEV_T') }}" >
        <div class="play">
          <a href="https://youtu.be/_kD2lt1lXxU?si=5tJiw5T1m4vblSUq" target="_blank">
              <i class="fas fa-play-circle fa-2x" style="color:#fff;"></i>
          </a>
      </div>
        <h4>NDX AKA</h4>
        <p>Janji Temani</p>
      </div>

      <div class="item">
        <img src="{{ asset('https://estehsolo.com/assets/WEB/images/es_teh_solo_14c.jpg') }}" >
        <div class="play">
          <a href="https://youtu.be/LBJdWVrPprg?si=4WjGQmlr8XR39lQU" target="_blank">
              <i class="fas fa-play-circle fa-2x" style="color:#fff;"></i>
          </a>
      </div>
        <h4>NDX AKA</h4>
        <p>Ngertenono Ati</p>
      </div>
    </div>
  </div>
<div class="spotify-playlists">
    <h2>Playlist</h2>

    <div class="list">
      <div class="item">
        <img src="{{ asset('https://i.pinimg.com/564x/31/3d/d3/313dd332edf8dc1e1496501e78a8f811.jpg') }}" >
        <div class="play">
          <a href="https://youtu.be/z8Oi1AvxnDE?si=ZSD0lPXL-KZXu4U7" target="_blank">
              <i class="fas fa-play-circle fa-2x" style="color:#fff;"></i>
          </a>
      </div>
        <h4>HINDIA</h4>
        <p>Secukupnya</p>
      </div>

      <div class="item">
        <img src="{{ asset('https://i.ytimg.com/vi/62pbVY1__Pw/hqdefault.jpg') }}" >
        <div class="play">
          <a href="https://youtu.be/vGOvhEbeNwE?si=FGl41_Yk33tjk3T1" target="_blank">
              <i class="fas fa-play-circle fa-2x" style="color:#fff;"></i>
          </a>
      </div>
        <h4>HINDIA</h4>
        <p>Evaluasi</p>
      </div>

      <div class="item">
        <img src="{{ asset('https://1.bp.blogspot.com/-gdQAXfWYkQ4/X0W8biPnzSI/AAAAAAAABKc/UZgHz9zQ15grrya5eBrG9pv2-irxwwFqACLcBGAsYHQ/w1600/lirik%2Blagu%2Brumah%2Bke%2Brumah%2B-%2Bhindia.jpg') }}" >
        <div class="play">
          <a href="https://youtu.be/xkCv6q0km4k?si=Ri6qc6MRa1J-DGrO" target="_blank">
              <i class="fas fa-play-circle fa-2x" style="color:#fff;"></i>
          </a>
      </div>
        <h4>HINDIA</h4>
        <p>Rumah ke rumah</p>
      </div>

      <div class="item">
        <img src="{{ asset('https://miro.medium.com/v2/resize:fit:915/1*pIUdVOa92Ch404QRJ3xjZQ.jpeg') }}" >
        <div class="play">
          <a href="https://youtu.be/jaiqG8CW8zE?si=-ZsJ3P25AD8FHk8p" target="_blank">
              <i class="fas fa-play-circle fa-2x" style="color:#fff;"></i>
          </a>
      </div>
        <h4>HINDIA</h4>
        <p>Membasuh</p>
      </div>

      <div class="item">
        <img src="{{ asset('https://i.ytimg.com/vi/w--akgxofN4/maxresdefault.jpg') }}" >
        <div class="play">
          <a href="https://youtu.be/ZoWRUpuDM3M?si=GpbFTGzebIETOe1j" target="_blank">
              <i class="fas fa-play-circle fa-2x" style="color:#fff;"></i>
          </a>
      </div>
        <h4>HINDIA</h4>
        <p>Untuk apa</p>
      </div>
    </div>
  </div>

  <div class="spotify-playlists">
    <div class="list">
      <div class="item">
        <img src="{{ asset('https://images.genius.com/5f77888ebc178061f767473c0dadf850.1000x1000x1.jpg') }}" >
        <div class="play">
          <a href="https://youtu.be/Svz5F8J1Ap0?si=z2E1LWp-co2eb9mP" target="_blank">
              <i class="fas fa-play-circle fa-2x" style="color:#fff;"></i>
          </a>
      </div>
        <h4>MAHALINI</h4>
        <p>Melawan Restu</p>
      </div>
      
      <div class="item">
        <img src="{{ asset('https://i.ytimg.com/vi/VXkKJW6RO0A/maxresdefault.jpg') }}" >
        <div class="play">
          <a href="https://youtu.be/QSWYyoF79oE?si=eAUrzsguyJQZf6bY" target="_blank">
              <i class="fas fa-play-circle fa-2x" style="color:#fff;"></i>
          </a>
      </div>
        <h4>MAHALINI</h4>
        <p>Sial</p>
      </div>
    
      <div class="item">
        <img src="{{ asset('https://is1-ssl.mzstatic.com/image/thumb/Music211/v4/e6/91/eb/e691eb58-7ae3-cb1b-0a5f-839ad3a010e0/cover.jpg/1200x1200bf-60.jpg') }}" >
        <div class="play">
          <a href="https://youtu.be/LAOxuo6pkdo?si=kzAguF5E3l73yCFH" target="_blank">
              <i class="fas fa-play-circle fa-2x" style="color:#fff;"></i>
          </a>
      </div>
        <h4>MAHALINI</h4>
        <p>Mati-matian</p>
      </div>

      <div class="item">
        <img src="{{ asset('https://th.bing.com/th/id/OIP.jgsTuuw22mTyiM9Ica13NwAAAA?rs=1&pid=ImgDetMain') }}" >
        <div class="play">
          <a href="https://youtu.be/Wh66ThpxvI4?si=l71umxYIT9VL55YG" target="_blank">
              <i class="fas fa-play-circle fa-2x" style="color:#fff;"></i>
          </a>
      </div>
        <h4>MAHALINI</h4>
        <p>Sisa Rasa</p>
      </div>

      <div class="item">
        <img src="{{ asset('https://is2-ssl.mzstatic.com/image/thumb/Music126/v4/4d/ee/a6/4deea663-8868-a069-3583-4061e19ec993/cover.jpg/1200x1200bf-60.jpg') }}" >
        <div class="play">
          <a href="https://youtu.be/8dgEh5crj0I?si=8Ei2MniGDpPuljvB" target="_blank">
              <i class="fas fa-play-circle fa-2x" style="color:#fff;"></i>
          </a>
      </div>
        <h4>MAHALINI</h4>
        <p>Kisah Sempurna</p>
      </div>
    </div>
  </div>

  <div class="spotify-playlists">
    <div class="list">
      <div class="item">
        <img src="{{ asset('https://images.genius.com/279230e50bbc23bf30c648e40b7af5d7.1000x1000x1.jpg') }}" >
        <div class="play">
          <a href="https://youtu.be/ZjU1G0Lt0a8?si=MVUsoiRlps0Iwfjm" target="_blank">
              <i class="fas fa-play-circle fa-2x" style="color:#fff;"></i>
          </a>
      </div>
        <h4>FIERSA BESARI</h4>
        <p>Tempat aku pulang</p>
      </div>

      <div class="item">
        <img src="{{ asset('https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2022/02/17/989710726.jpg') }}" >
        <div class="play">
          <a href="https://youtu.be/I2ONuGkkA08?si=t-YfCQPI71oPbLWe" target="_blank">
              <i class="fas fa-play-circle fa-2x" style="color:#fff;"></i>
          </a>
      </div>
        <h4>FIERSA BESARI</h4>
        <p>Waktu yang salah</p>
      </div>

      <div class="item">
        <img src="{{ asset('https://i.ytimg.com/vi/DbFztA0ksGs/maxresdefault.jpg') }}" >
        <div class="play">
          <a href="https://youtu.be/ruj7AFOD3aU?si=tKH_POeDt9BZFO11" target="_blank">
              <i class="fas fa-play-circle fa-2x" style="color:#fff;"></i>
          </a>
      </div>
        <h4>FIERSA BESARI</h4>
        <p>Celengan Rindu</p>
      </div>

      <div class="item">
        <img src="{{ asset('https://images.genius.com/0c33ce52d38274bc496a4567d7b94b24.720x720x1.jpg') }}" >
        <div class="play">
          <a href="https://youtu.be/3BFp7o2DjWo?si=V10hr8CFz4-A3Ta5" target="_blank">
              <i class="fas fa-play-circle fa-2x" style="color:#fff;"></i>
          </a>
      </div>
        <h4>FIERSA BESARI</h4>
        <p>Lekas Pulih</p>
      </div>

      <div class="item">
        <img src="{{ asset('https://images.sk-static.com/images/media/img/col3/20181028-074844-075111.png') }}" >
        <div class="play">
          <a href="https://youtu.be/eIGW4nD2JVU?si=VdpCxIrBYP00dmAM" target="_blank">
              <i class="fas fa-play-circle fa-2x" style="color:#fff;"></i>
          </a>
      </div>
        <h4>FIERSA BESARI</h4>
        <p>April</p>
      </div>
    </div>
    </div>
  </div>
  <div class="spotify-playlists">
    <div class="list">
      <div class="item">
        <img src="{{ asset('https://i.ytimg.com/vi/N-6t_xhjkzo/maxresdefault.jpg') }}" >
        <div class="play">
          <a href="https://youtu.be/bGsMkd8qHWI?si=asg6sGkOzvDQ3PXW" target="_blank">
              <i class="fas fa-play-circle fa-2x" style="color:#fff;"></i>
          </a>
      </div>
        <h4>FOR REVENGE</h4>
        <p>Serana</p>
      </div>

      <div class="item">
        <img src="{{ asset('https://i.ytimg.com/vi/HHaHrYTPHao/maxresdefault.jpg') }}" >
        <div class="play">
          <a href="https://youtu.be/9Nlz_6_CeFA?si=BsqLhghI7UuQelCu" target="_blank">
              <i class="fas fa-play-circle fa-2x" style="color:#fff;"></i>
          </a>
      </div>
        <h4>FOR REVENGE</h4>
        <p>Pulang</p>
      </div>

      <div class="item">
        <img src="{{ asset('https://i.ytimg.com/vi/P4oqYF7cQiI/hqdefault.jpg') }}" >
        <div class="play">
          <a href="https://youtu.be/QgiZVuQUoHo?si=3C0UVAKOaBGdu4ii" target="_blank">
              <i class="fas fa-play-circle fa-2x" style="color:#fff;"></i>
          </a>
      </div>
        <h4>FOR REVENGE</h4>
        <p>Jakarta Hari Ini</p>
      </div>

      <div class="item">
        <img src="{{ asset('https://i.scdn.co/image/ab67616d0000b27370b131a889f0e7b2f1eb600b') }}" >
        <div class="play">
          <a href="https://youtu.be/9c3XMEzYwo8?si=DBKMEE7zpZsAHXPQ" target="_blank">
              <i class="fas fa-play-circle fa-2x" style="color:#fff;"></i>
          </a>
      </div>
        <h4>FOR REVENGE</h4>
        <p>Jentaka</p>
      </div>

      <div class="item">
        <img src="{{ asset('https://www.broadcastmagz.com/wp-content/uploads/2022/12/FOVUS-TRACK-DEMI-SEMESTA_copy_600x600.jpg') }}" >
        <div class="play">
          <a href="https://youtu.be/txOb4NEA-r4?si=cJlfOuaogbviI0GtB" target="_blank">
              <i class="fas fa-play-circle fa-2x" style="color:#fff;"></i>
          </a>
      </div>
        <h4>FOR REVENGE</h4>
        <p>Demi Semesta</p>
      </div>
    </div>
    </div>
  </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
