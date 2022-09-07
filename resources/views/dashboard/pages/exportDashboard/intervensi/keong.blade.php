<table class="table table-bordered mt-3">
    <thead>
        <tr style="vertical-align: center;border: 1px solid black;" align="center">
            <th scope="col" style="vertical-align: center;border: 1px solid black;" align="center">No.</th>
            <th scope="col" style="vertical-align: center;border: 1px solid black;" align="center">OPD</th>
            <th scope="col" style="vertical-align: center;border: 1px solid black;" align="center">Perencanaan</th>
            <th scope="col" style="vertical-align: center;border: 1px solid black;" align="center">Realisasi</th>
            <th scope="col" style="vertical-align: center;border: 1px solid black;" align="center">Persentase
                Realisasi</th>
        </tr>
    </thead>
    <tbody>
        @php
            $perencanaan = 0;
            $realisasi = 0;
            $persentase = 0;
        @endphp
        @foreach ($tabelKeong as $keong)
            <tr>
                <th scope="row" style="vertical-align: center;border: 1px solid black;" align="center">
                    {{ $loop->iteration }}</th>
                <td style="vertical-align: center;border: 1px solid black;" align="center">{{ $keong['opd'] }}</td>
                <td style="vertical-align: center;border: 1px solid black;" align="center">{{ $keong['perencanaan'] }}
                </td>
                <td style="vertical-align: center;border: 1px solid black;" align="center">{{ $keong['realisasi'] }}
                </td>
                <td style="vertical-align: center;border: 1px solid black;" align="center">
                    {{ $keong['persentase'] == '-' ? '-' : $keong['persentase'] . '%' }}</td>
            </tr>
            @php
                $perencanaan += $keong['perencanaan'];
                $realisasi += $keong['realisasi'];
            @endphp
        @endforeach
        @if (Auth::user()->role != 'OPD')
            <tr>
                <th scope="row" colspan="2" style="vertical-align: center;border: 1px solid black;"
                    align="center">Total</th>
                <td style="vertical-align: center;border: 1px solid black;" align="center">{{ $perencanaan }}</td>
                <td style="vertical-align: center;border: 1px solid black;" align="center">{{ $realisasi }}</td>
                <td style="vertical-align: center;border: 1px solid black;" align="center">
                    {{ $perencanaan == 0 ? 0 : round(($realisasi / $perencanaan) * 100, 2) }} %
                </td>
            </tr>
        @endif

    </tbody>
</table>
