
@extends('layouts.report')
@section('content')
<div id="report-title"><h1></h1></div>
<table class="table table-sm table-striped">
    <thead>
        <tr>
            <th>Kd Pelanggan Cafe</th>
            <th>No Plg Lama</th>
            <th>Nama Lengkap</th>
            <th>Telp1</th>
            <th>Telp2</th>
            <th>Alamat</th>
            <th>Kotakab</th>
            <th>Provinsi</th>
            <th>Kodepos</th>
            <th>Nama Lembaga</th>
            <th>Ekspedisi1</th>
            <th>Ekspedisi2</th>
            <th>Catatan Pelanggan</th>
            <th>Status Pelanggan</th>
            <th>Kebiasaan Jenis Bayar</th>
            <th>Alokasi</th>
            <th>Prediksi Ongkir</th>
            <th>Timestamp</th>
            <th>Cabang</th>
            <th>Jenis Produk</th>
            <th>Kloter</th>
            <th>Tagihan</th>
            <th>Saldo</th>
        </tr>
    </thead>
    <tbody>
        @foreach($records as $record)
        <tr>
            <td>{{ $record->kd_pelanggan_cafe }}</td>
            <td>{{ $record->no_plg_lama }}</td>
            <td>{{ $record->nama_lengkap }}</td>
            <td>{{ $record->telp1 }}</td>
            <td>{{ $record->telp2 }}</td>
            <td>{{ $record->alamat }}</td>
            <td>{{ $record->kotakab }}</td>
            <td>{{ $record->provinsi }}</td>
            <td>{{ $record->kodepos }}</td>
            <td>{{ $record->nama_lembaga }}</td>
            <td>{{ $record->ekspedisi1 }}</td>
            <td>{{ $record->ekspedisi2 }}</td>
            <td>{{ $record->catatan_pelanggan }}</td>
            <td>{{ $record->status_pelanggan }}</td>
            <td>{{ $record->kebiasaan_jenis_bayar }}</td>
            <td>{{ $record->alokasi }}</td>
            <td>{{ $record->prediksi_ongkir }}</td>
            <td>{{ $record->timestamp }}</td>
            <td>{{ $record->cabang }}</td>
            <td>{{ $record->jenis_produk }}</td>
            <td>{{ $record->kloter }}</td>
            <td>{{ $record->tagihan }}</td>
            <td>{{ $record->saldo }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
