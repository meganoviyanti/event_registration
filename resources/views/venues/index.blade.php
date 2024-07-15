@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lokasi Venue</h1>
       
        <div id="map" style="height: 500px;"></div>
    </div>
    <script>
        var map = L.map('map').setView([-6.200000, 106.816666], 10); // Sesuaikan koordinat dengan lokasi Anda

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        @foreach($venues as $venue)
            @if($venue->city === 'Bandung')
                L.marker([{{ $venue->latitude }}, {{ $venue->longitude }}], {icon: L.icon({
                    iconUrl: 'https://leafletjs.com/examples/custom-icons/leaf-red.png', // URL icon khusus
                    iconSize: [38, 95], // Ukuran icon
                    iconAnchor: [22, 94], // Anchor icon
                    popupAnchor: [-3, -76] // Anchor popup
                })})
                .addTo(map)
                .bindPopup('<b>{{ $venue->name }}</b><br>{{ $venue->address }}<br><i>Acara di Bandung</i>');
            @else
                L.marker([{{ $venue->latitude }}, {{ $venue->longitude }}])
                .addTo(map)
                .bindPopup('<b>{{ $venue->name }}</b><br>{{ $venue->address }}');
            @endif
        @endforeach
    </script>
@endsection

