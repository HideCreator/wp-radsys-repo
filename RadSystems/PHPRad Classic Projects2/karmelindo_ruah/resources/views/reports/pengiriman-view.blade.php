
@extends('layouts.report')
@section('content')
<div id="report-title"><h1></h1></div>
<table class="table table-sm table-striped">
    <tbody>
        <tr>
            <th>Kd Pengiriman</th>
            <td>{{ $record->kd_pengiriman }}</td>
        </tr>
        <tr>
            <th>Timestamp</th>
            <td>{{ $record->timestamp }}</td>
        </tr>
        <tr>
            <th>Kd Transaksi</th>
            <td>{{ $record->kd_transaksi }}</td>
        </tr>
        <tr>
            <th>Ekspedisi</th>
            <td>{{ $record->ekspedisi }}</td>
        </tr>
        <tr>
            <th>Biaya</th>
            <td>{{ $record->biaya }}</td>
        </tr>
        <tr>
            <th>No Resi</th>
            <td>{{ $record->no_resi }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{ $record->status }}</td>
        </tr>
        <tr>
            <th>Tgl Kirim</th>
            <td>{{ $record->tgl_kirim }}</td>
        </tr>
        <tr>
            <th>Catatan</th>
            <td>{{ $record->catatan }}</td>
        </tr>
        <tr>
            <th>Jenis Produk</th>
            <td>{{ $record->jenis_produk }}</td>
        </tr>
        <tr>
            <th>Produk Edisi</th>
            <td>{{ $record->produk_edisi }}</td>
        </tr>
        <tr>
            <th>Jumlah</th>
            <td>{{ $record->jumlah }}</td>
        </tr>
        <tr>
            <th>Nama Pelanggan</th>
            <td>{{ $record->nama_pelanggan }}</td>
        </tr>
    </tbody>
</table>
@endsection
