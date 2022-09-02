    <table align="center" style="vertical-align: center;border: 1px solid black;font-weight : bold">
        <thead align="center" style="vertical-align: center;border: 1px solid black;font-weight : bold">
            <tr align="center" style="vertical-align: center;border: 1px solid black;font-weight : bold">
                <th scope="col" align="center" style="vertical-align: center;border: 1px solid black;font-weight : bold"
                    rowspan="2">No.</th>
                <th scope="col" align="center"
                    style="vertical-align: center;border: 1px solid black;font-weight : bold" rowspan="2">Sub
                    Indikator</th>
                <th scope="col" align="center"
                    style="vertical-align: center;border: 1px solid black;font-weight : bold" rowspan="2">OPD Pembuat
                </th>
                <th scope="col" align="center"
                    style="vertical-align: center;border: 1px solid black;font-weight : bold" rowspan="2">OPD Terkait
                </th>
                <th scope="col" align="center"
                    style="vertical-align: center;border: 1px solid black;font-weight : bold" rowspan="2">Pembiayaan
                </th>
                <th scope="col" align="center"
                    style="vertical-align: center;border: 1px solid black;font-weight : bold" rowspan="2">Sumber Dana
                </th>
                <th scope="col" align="center"
                    style="vertical-align: center;border: 1px solid black;font-weight : bold" rowspan="2">Jumlah
                    Penduduk</th>
                <th scope="col" align="center"
                    style="vertical-align: center;border: 1px solid black;font-weight : bold" colspan="4">Progress
                </th>
                <th scope="col" align="center"
                    style="vertical-align: center;border: 1px solid black;font-weight : bold" rowspan="2">Status</th>
                {{-- <th scope="col" align="center"
                    style="vertical-align: center;border: 1px solid black;font-weight : bold">Keterangan</th> --}}

            </tr>
            <tr>
                <th scope="col" align="center"
                    style="vertical-align: center;border: 1px solid black;font-weight : bold">TW 1</th>
                <th scope="col" align="center"
                    style="vertical-align: center;border: 1px solid black;font-weight : bold">TW 2</th>
                <th scope="col" align="center"
                    style="vertical-align: center;border: 1px solid black;font-weight : bold">TW 3</th>
                <th scope="col" align="center"
                    style="vertical-align: center;border: 1px solid black;font-weight : bold">TW 4</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataRealisasi as $item)
                <tr style="vertical-align: center;border: 1px solid black;">
                    <td style="vertical-align: center;border: 1px solid black;" align="center">
                        {{ $loop->iteration }}</td>
                    <td style="vertical-align: center;border: 1px solid black;" align="left">
                        {{ $item->sub_indikator }}</td>
                    <td style="vertical-align: center;border: 1px solid black;" align="center">
                        {{ $item->opd->nama }}</td>
                    <td style="vertical-align: center;border: 1px solid black;" align="left">
                        @forelse ($item->opdTerkaitManusia as $item2)
                            <p>{{ $loop->iteration }}. {{ $item2->opd->nama }}</p>
                        @empty
                            <p>-</p>
                        @endforelse
                    </td>
                    <td style="vertical-align: center;border: 1px solid black;" align="right">
                        {{ $item->nilai_pembiayaan }}</td>
                    <td style="vertical-align: center;border: 1px solid black;" align="center">
                        {{ $item->sumber_dana }}</td>
                    <td style="vertical-align: center;border: 1px solid black;" align="center">
                        {{ $item->pendudukPerencanaanManusia->count() }}</td>
                    <td style="vertical-align: center;border: 1px solid black;" align="center">
                        @if ($item->realisasiManusia->where('tw', 1)->where('status', 1)->count() > 0)
                            {{ $item->realisasiManusia->where('tw', 1)->where('status', 1)->max('progress') }}%
                        @else
                            -
                        @endif
                    </td>
                    <td style="vertical-align: center;border: 1px solid black;" align="center">
                        @if ($item->realisasiManusia->where('tw', 2)->where('status', 1)->count() > 0)
                            {{ $item->realisasiManusia->where('tw', 2)->where('status', 1)->max('progress') }}%
                        @else
                            -
                        @endif
                    </td>
                    <td style="vertical-align: center;border: 1px solid black;" align="center">
                        @if ($item->realisasiManusia->where('tw', 3)->where('status', 1)->count() > 0)
                            {{ $item->realisasiManusia->where('tw', 3)->where('status', 1)->max('progress') }}%
                        @else
                            -
                        @endif
                    </td>
                    <td style="vertical-align: center;border: 1px solid black;" align="center">
                        @if ($item->realisasiManusia->where('tw', 4)->where('status', 1)->count() > 0)
                            {{ $item->realisasiManusia->where('tw', 4)->where('status', 1)->max('progress') }}%
                        @else
                            -
                        @endif
                    </td>
                    <td style="vertical-align: center;border: 1px solid black;" align="center">
                        @if ($item->realisasiManusia->where('status', 1)->max('progress') == 100)
                            <p>{{ $item->realisasiManusia->where('status', 1)->count() }}
                                Laporan Selesai</p>
                        @else
                            @if ($item->realisasiManusia->where('status', 0)->count() > 0)
                                <p>Menunggu Konfirmasi : </p>{{ $item->realisasiManusia->where('status', 0)->count() }}
                            @endif
                            @if ($item->realisasiManusia->where('status', 1)->count() > 0)
                                <p>Laporan Disetujui : </p>{{ $item->realisasiManusia->where('status', 1)->count() }}
                            @endif
                            @if ($item->realisasiManusia->where('status', 2)->count() > 0)
                                <p>Laporan Ditolak : </p>{{ $item->realisasiManusia->where('status', 2)->count() }}
                            @endif
                            @if ($item->realisasiManusia->count() == 0)
                                <p>Belum Ada Laporan</p>
                            @endif
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
