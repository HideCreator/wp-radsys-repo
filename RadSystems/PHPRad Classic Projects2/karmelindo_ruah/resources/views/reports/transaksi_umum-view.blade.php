
@extends('layouts.report')
@section('content')
<div id="report-title"><h1></h1></div>
<table class="table table-sm table-striped">
    <tbody>
        <tr>
            <th>Kd Transaksi Umum</th>
            <td>{{ $record->kd_transaksi_umum }}</td>
        </tr>
        <tr>
            <th>Kode Unik</th>
            <td>{{ $record->kode_unik }}</td>
        </tr>
        <tr>
            <th>Tanggalwaktu</th>
            <td>{{ $record->tanggalwaktu }}</td>
        </tr>
        <tr>
            <th>Atas Nama</th>
            <td>{{ $record->atas_nama }}</td>
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
            <th>Total Bayar</th>
            <td>{{ $record->total_bayar }}</td>
        </tr>
        <tr>
            <th>Status Bayar</th>
            <td>{{ $record->status_bayar }}</td>
        </tr>
        <tr>
            <th>Tgl Bayar</th>
            <td>{{ $record->tgl_bayar }}</td>
        </tr>
        <tr>
            <th>Catatan</th>
            <td>{{ $record->catatan }}</td>
        </tr>
        <tr>
            <th>Dihapus</th>
            <td>{{ $record->dihapus }}</td>
        </tr>
    </tbody>
</table>
@endsection
