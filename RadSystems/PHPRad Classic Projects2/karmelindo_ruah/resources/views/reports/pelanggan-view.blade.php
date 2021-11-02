
@extends('layouts.report')
@section('content')
<div id="report-title"><h1></h1></div>
<table class="table table-sm table-striped">
    <tbody>
        <tr>
            <th>Kd Pelanggan</th>
            <td>{{ $record->kd_pelanggan }}</td>
        </tr>
        <tr>
            <th>No Plg Lama</th>
            <td>{{ $record->no_plg_lama }}</td>
        </tr>
        <tr>
            <th>Nama Lengkap</th>
            <td>{{ $record->nama_lengkap }}</td>
        </tr>
        <tr>
            <th>Telp1</th>
            <td>{{ $record->telp1 }}</td>
        </tr>
        <tr>
            <th>Telp2</th>
            <td>{{ $record->telp2 }}</td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td>{{ $record->alamat }}</td>
        </tr>
        <tr>
            <th>Kotakab</th>
            <td>{{ $record->kotakab }}</td>
        </tr>
        <tr>
            <th>Provinsi</th>
            <td>{{ $record->provinsi }}</td>
        </tr>
        <tr>
            <th>Kodepos</th>
            <td>{{ $record->kodepos }}</td>
        </tr>
        <tr>
            <th>Nama Lembaga</th>
            <td>{{ $record->nama_lembaga }}</td>
        </tr>
        <tr>
            <th>Ekspedisi1</th>
            <td>{{ $record->ekspedisi1 }}</td>
        </tr>
        <tr>
            <th>Ekspedisi2</th>
            <td>{{ $record->ekspedisi2 }}</td>
        </tr>
        <tr>
            <th>Catatan Pelanggan</th>
            <td>{{ $record->catatan_pelanggan }}</td>
        </tr>
        <tr>
            <th>Status Pelanggan</th>
            <td>{{ $record->status_pelanggan }}</td>
        </tr>
        <tr>
            <th>Kebiasaan Jenis Bayar</th>
            <td>{{ $record->kebiasaan_jenis_bayar }}</td>
        </tr>
        <tr>
            <th>Alokasi</th>
            <td>{{ $record->alokasi }}</td>
        </tr>
        <tr>
            <th>Prediksi Ongkir</th>
            <td>{{ $record->prediksi_ongkir }}</td>
        </tr>
        <tr>
            <th>Timestamp</th>
            <td>{{ $record->timestamp }}</td>
        </tr>
        <tr>
            <th>Cabang</th>
            <td>{{ $record->cabang }}</td>
        </tr>
        <tr>
            <th>Jenis Produk</th>
            <td>{{ $record->jenis_produk }}</td>
        </tr>
        <tr>
            <th>Kloter</th>
            <td>{{ $record->kloter }}</td>
        </tr>
        <tr>
            <th>Tagihan</th>
            <td>{{ $record->tagihan }}</td>
        </tr>
        <tr>
            <th>Saldo</th>
            <td>{{ $record->saldo }}</td>
        </tr>
        <tr>
            <th>Alokasicafe</th>
            <td>{{ $record->alokasicafe }}</td>
        </tr>
    </tbody>
</table>
@endsection
