<div id="page-map">
    <aside>
        <header>
            <img src={{asset('images/map-marker.svg')}} alt="Happy" />
            <h2>Escolha um orfanato no map</h2>
            <p>Muitas crianças estão esperando a sua visita :)</p>
        </header>

        <footer>
            <strong>Minas Gerais</strong>
            <span>Divinoólis</span>
        </footer>
    </aside>

    <div id="map" style="width: 100%; height: 100%;"></div>

    <a href="/" class="create-orphanage">
        <i data-feather="plus"></i>
    </a>
</div>

<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script>

    const map = L.map('map', {
        center: [-20.1540336,-44.9159928],
        zoom: 15
    });

    L.tileLayer("https://api.mapbox.com/styles/v1/mapbox/light-v10/tiles/256/{z}/{x}/{y}@2x?access_token={{config('happy.mapbox_token')}}")
        .addTo(map);

</script>
