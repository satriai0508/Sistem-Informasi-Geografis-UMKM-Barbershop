@extends('admin.layouts.main')

@section('container')
    <div class="card container-fluid">
        <div class="card-body">
            <div id="map" style="height: 500px; margin: 50px;">
                <script>
                    // var map = L.map('map').setView([-0.471852, 117.160556], 13);
                    var curLocation = [0, 0];
                    if (curLocation[0] == 0 && curLocation[1] == 0) {
                        curLocation = [<?= $maps[0]->x ?>, <?= $maps[0]->y ?>]
                    }
                    var osmUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
                        osmAttrib = '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
                        osm = L.tileLayer(osmUrl, {
                            maxZoom: 18,
                            attribution: osmAttrib
                        });
                    var map = L.map('map').setView([<?= $maps[0]->x ?>, <?= $maps[0]->y ?>], 13).addLayer(osm);

                    var data = [
                        <?php foreach ($maps as $key => $value) { ?>
                            {"lokasi":[<?= $value->x ?>, <?= $value->y ?>], "nama":"<?= $value->nama ?>"
                            },
                        <?php } ?>
                    ];

                    //layer contain searched elements
                    var markersLayer = new L.LayerGroup();
                    map.addLayer(markersLayer);

                    //Search dengan menandai titik yang dicari
                    map.addControl( new L.Control.Search({
                        layer: markersLayer,
                        initial: false,
                        zoom: 18,
                        collapsed: true
                    }) );

                    ////////////populate map with markers from sample data
                    for(i in data) {
                        var nama = data[i].nama;  //value searched
                        var lokasi = data[i].lokasi;      //position found
                        var marker = new L.circleMarker(new L.latLng(lokasi), {title: nama} );//see property searched
                        marker.bindPopup('Nama: '+ nama );
                        markersLayer.addLayer(marker);
                    }
                    var redIcon = new L.Icon({
                        iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png',
                        shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
                        iconSize: [25, 41],
                        iconAnchor: [12, 41],
                        popupAnchor: [1, -34],
                        shadowSize: [41, 41]
                    });

                </script>
                @foreach ($maps as $data)
                    <script>

                        @if(\Carbon\Carbon::now()->format('H:i:s')>=$data->jam_buka && \Carbon\Carbon::now()->format('H:i:s')<$data->jam_tutup)
                            var markerLayers = L.marker([<?= $data->x ?>, <?= $data->y ?>]).addTo(map);
                        @else
                            var markerLayers = L.marker([<?= $data->x ?>, <?= $data->y ?>],{icon: redIcon}).addTo(map);
                        @endif
                            markerLayers.bindPopup('<?= $data->nama ?>'+ '<br>' + '<?= $data->alamat ?>' + '<br>' + '<?= $data->no_hp ?>' +'<br> Jam Operasional : '+' <?= $data->jam_buka ?>' +' : '+'<?= $data->jam_tutup ?>' +'<br>'+'{!! \Carbon\Carbon::now()->format('H:i:s')>=$data->jam_buka&&\Carbon\Carbon::now()->format('H:i:s')<$data->jam_tutup?'<span class="text-success"> Buka</span>':'<span class=" text-danger"> Tutup</span>' !!}' +'<br>'+
                            'Hari Operasional : <?= $data->hari_buka ?>'+'<br> Hari Tutup : <?= $data->hari_tutup ?>'+'<br>'+
                            '<button class="btn btn-info btn-sm mb-2 d-inline" onclick="dariSini(<?= $data->x ?>, <?= $data->y ?>)">Dari Sini</button>'+
                            '<br><button class="btn btn-info btn-sm mb-2 d-inline" onclick="keSini(<?= $data->x ?>, <?= $data->y ?>)">Ke Sini</button>'+
                            '<br><a href="/peta/<?= strtolower($data->nama) ?>" class="text-decoration-none text-dark">Selengkapnya</a>');
                    </script>
                @endforeach
            </div>
        </div>
    </div>
@endsection
