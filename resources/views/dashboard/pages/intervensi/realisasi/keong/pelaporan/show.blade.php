@extends('dashboard.layouts.main')

@section('title')
    Detail Laporan Realisasi Intervensi Habitat Keong
@endsection

@section('titlePanelHeader')
    Detail Laporan Realisasi Intervensi Habitat Keong | <span style="text-decoration: underline">Laporan Tanggal:
        {{ Carbon\Carbon::parse($realisasi_intervensi_keong->created_at)->translatedFormat('j F Y') }}</span>
@endsection

@section('subTitlePanelHeader')
    {{ $rencana_intervensi_keong->sub_indikator }}
@endsection

@section('buttonPanelHeader')
    <a href="{{ url()->previous() }}" class="btn btn-secondary btn-round"><i class="fas fa-arrow-left mr-1"></i>
        Kembali</a>
@endsection

@push('styles')
    <style>
        #peta {
            height: 600px;
            margin-top: 0px;
        }
    </style>
@endpush

@section('contents')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="card-head-row">
                        <div class="card-title">Info Detail</div>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-bordered">
                        <li class="list-group-item d-flex justify-content-between align-items-center">Tanggal Laporan:
                            <span
                                class="font-weight-bold">{{ Carbon\Carbon::parse($realisasi_intervensi_keong->created_at)->translatedFormat('j F Y') }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">Sub Indikator:<span
                                class="font-weight-bold">{{ $rencana_intervensi_keong->sub_indikator }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">OPD:<span
                                class="font-weight-bold">{{ $rencana_intervensi_keong->opd->nama }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">Lokasi
                            ({{ $realisasi_intervensi_keong->lokasiRealisasiKeong->count() }}):<span
                                class="font-weight-bold">
                                <ul>
                                    @foreach ($realisasi_intervensi_keong->lokasiRealisasiKeong as $item)
                                        <li class="d-flex justify-content-end align-items-end">
                                            {{ $item->lokasiKeong->nama . ' ' }}
                                            (<span>{{ $item->lokasiKeong->desa->nama }}</span>)
                                        </li>
                                    @endforeach
                                </ul>
                            </span>
                        </li>
                        @if ($rencana_intervensi_keong->opdTerkaitKeong->count() > 0)
                            <li class="list-group-item d-flex justify-content-between align-items-center">OPD Terkait
                                ({{ $rencana_intervensi_keong->opdTerkaitKeong->count() }}):<span class="font-weight-bold">
                                    <ul>
                                        @foreach ($rencana_intervensi_keong->opdTerkaitKeong as $item)
                                            <li class="d-flex justify-content-end align-items-end">
                                                {{ $item->opd->nama . ' ' }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </span>
                            </li>
                        @endif
                        <li class="list-group-item d-flex justify-content-between align-items-center">Penggunaan
                            Anggaran:<span class="font-weight-bold"><span>Rp. </span>
                                <span class="rupiah">{{ $realisasi_intervensi_keong->penggunaan_anggaran }}</span></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">Sumber Dana:<span
                                class="font-weight-bold">{{ $rencana_intervensi_keong->sumberDana->nama }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">Status:
                            @if ($realisasi_intervensi_keong->status == 1)
                                <span class="font-weight-bold badge badge-success">Disetujui</span>
                            @elseif($realisasi_intervensi_keong->status == 2)
                                <span class="font-weight-bold badge badge-danger">Ditolak</span>
                            @else
                                <span class="font-weight-bold badge badge-warning">Menunggu Konfirmasi</span>
                            @endif
                        </li>
                        @if ($realisasi_intervensi_keong->status == 2)
                            <li class="list-group-item d-flex justify-content-between align-items-center">Alasan Ditolak:
                                <span
                                    class="font-weight-bold text-danger">{{ $realisasi_intervensi_keong->alasan_ditolak }}</span>
                            </li>
                        @endif
                        @if ($realisasi_intervensi_keong->status != 0)
                            <li class="list-group-item d-flex justify-content-between align-items-center">Tanggal
                                Konfirmasi:<span
                                    class="font-weight-bold">{{ Carbon\Carbon::parse($realisasi_intervensi_keong->tanggal_konfirmasi)->translatedFormat('j F Y') }}</span>
                            </li>
                        @endif

                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <div class="card-head-row">
                        <div class="card-title">List Dokumen Laporan Realisasi</div>

                    </div>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-bordered">
                        @forelse ($realisasi_intervensi_keong->dokumenRealisasiKeong as $item)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{ $item->nama }}
                                <a href="{{ Storage::url('uploads/dokumen/realisasi/keong/' . $item->file) }}"
                                    target="_blank" class="badge badge-primary" data-toggle="tooltip" data-placement="top"
                                    title="Download">
                                    <i class="fas fa-download"></i>

                                </a>
                            </li>
                        @empty
                            <h5 class="text-center">Tidak Ada Dokumen</h5>
                        @endforelse

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="card-head-row">
                        <div class="card-title">Titik Koordinat Lokasi Laporan Realisasi Intervensi Habitat Keong</div>

                    </div>
                </div>
                <div class="card-body">
                    <div id="peta"></div>
                </div>
            </div>
        </div>
        @if ($realisasi_intervensi_keong->status == 0 && Auth::user()->role == 'Admin')
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <div class="card-head-row">
                            <div class="card-title">Konfirmasi Laporan Realisasi</div>

                        </div>
                    </div>
                    <div class="card-body pt-0">
                        @component('dashboard.components.forms.confirm',
                            [
                                'action' => url('realisasi-intervensi-keong/konfirmasi/' . $realisasi_intervensi_keong->id),
                            ])
                        @endcomponent
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection

@push('scripts')
    <script>
        $('#nav-realisasi').addClass('active');
        $('#nav-realisasi .collapse').addClass('show');
        $('#nav-realisasi .collapse #li-keong-2').addClass('active');

        $(document).ready(function() {
            initializeMap();
        })

        var map = null;

        function initializeMap() {
            if (map != undefined || map != null) {
                map.remove();
            }

            var center = [-1.3618072, 120.1619337];

            map = L.map("peta", {
                maxBounds: [
                    [-1.511127, 119.9637063],
                    [-1.21458, 120.2912363]
                ]
            }).setView(center, 11);
            map.addControl(new L.Control.Fullscreen());

            L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
                attribution: 'Data © <a href="http://osm.org/copyright">OpenStreetMap</a>',
                maxZoom: 18,
                minZoom: 11
            }).addTo(map);

            var pin = L.Icon.extend({
                options: {
                    iconSize: [50, 50],
                    iconAnchor: [22, 94],
                    shadowAnchor: [4, 62],
                    popupAnchor: [-3, -76],
                },
            });

            var pinIcon = new pin({
                iconUrl: "{{ asset('assets/dashboard/img/pin/pin_red_x.png') }}",
                iconSize: [40, 40],
                iconAnchor: [25, 20],
                popupAnchor: [-4, -20]
            });

            map.invalidateSize();

            $.ajax({
                url: "{{ url('/map/desa') }}",
                type: "GET",
                success: function(response) {
                    if (response.status == 'success') {
                        for (var i = 0; i < response.data.length; i++) {
                            L.polygon(response.data[i].koordinatPolygon, {
                                    color: response.data[i].warna_polygon,
                                    weight: 1,
                                    opacity: 1,
                                    fillOpacity: 1
                                })
                                .bindTooltip(response.data[i].nama, {
                                    permanent: true,
                                    direction: "center",
                                    className: 'labelPolygon'
                                })
                                .addTo(map);
                        }
                    }
                },
            })

            const data = {!! $dataMap !!};

            for (var i = 0; i < data.length; i++) {
                var pemilikKeong = '';
                if (data[i].pemilik_lokasi_keong.length > 0) {
                    pemilikKeong += '<hr class="my-1">';
                    pemilikKeong += "<p class='my-0 fw-bold'>Pemilik Lahan : </p>";
                    for (var j = 0; j < data[i].pemilik_lokasi_keong.length; j++) {
                        pemilikKeong += "<p class='my-0'> -" + data[i]
                            .pemilik_lokasi_keong[
                                j].penduduk.nama + "</p>";
                    }
                }

                icon = pinIcon;
                L.marker([data[i].latitude, data[i].longitude], {
                        icon: icon
                    })
                    .bindPopup(
                        "<p class='fw-bold my-0 text-center'>" + data[i].nama +
                        "</p><hr class='my-1'>" +
                        "<p class='my-0 fw-bold'>Desa : </p>" +
                        "<p class='my-0'>" + data[i].desa
                        .nama + "</p>" +
                        "<p class='my-0 fw-bold'>Latitude : </p>" +
                        "<p class='my-0'>" + data[i].latitude + "</p>" +
                        "<p class='my-0 fw-bold'>Longitude : </p>" +
                        "<p class='my-0'>" + data[i].longitude + "</p>" +
                        pemilikKeong
                    )
                    // .on('click', L.bind(petaKlik, null, data[0][i].id))
                    .addTo(map);
            }
        }
    </script>
@endpush
