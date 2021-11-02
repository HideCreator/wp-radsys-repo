
@extends('layouts.report')
@section('content')
<div id="report-title"><h1></h1></div>
<table class="table table-sm table-striped">
    <thead>
        <tr>
            <th>Kd Transaksi Umum</th>
            <th>Kode Unik</th>
            <th>Tanggalwaktu</th>
            <th>Atas Nama</th>
            <th>Alamat</th>
            <th>Kotakab</th>
            <th>Provinsi</th>
            <th>Total Bayar</th>
            <th>Status Bayar</th>
            <th>Tgl Bayar</th>
            <th>Catatan</th>
            <th>Dihapus</th>
        </tr>
    </thead>
    <tbody>
        @foreach($records as $record)
        <tr>
            <td>{{ $record->kd_transaksi_umum }}</td>
            <td>{{ $record->kode_unik }}</td>
            <td>{{ $record->tanggalwaktu }}</td>
            <td>{{ $record->atas_nama }}</td>
            <td>{{ $record->alamat }}</td>
            <td>{{ $record->kotakab }}</td>
            <td>{{ $record->provinsi }}</td>
            <td>{{ $record->total_bayar }}</td>
            <td>{{ $record->status_bayar }}</td>
            <td>{{ $record->tgl_bayar }}</td>
            <td>{{ $record->catatan }}</td>
            <td>{{ $record->dihapus }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
