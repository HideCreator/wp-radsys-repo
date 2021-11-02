
@extends('layouts.report')
@section('content')
<div id="report-title"><h1></h1></div>
<table class="table table-sm table-striped">
    <thead>
        <tr>
            <th>Kd Pengiriman</th>
            <th>Timestamp</th>
            <th>Kd Transaksi</th>
            <th>Ekspedisi</th>
            <th>Biaya</th>
            <th>No Resi</th>
            <th>Status</th>
            <th>Tgl Kirim</th>
            <th>Catatan</th>
            <th>Jenis Produk</th>
            <th>Produk Edisi</th>
            <th>Jumlah</th>
            <th>Nama Pelanggan</th>
        </tr>
    </thead>
    <tbody>
        @foreach($records as $record)
        <tr>
            <td>{{ $record->kd_pengiriman }}</td>
            <td>{{ $record->timestamp }}</td>
            <td>{{ $record->kd_transaksi }}</td>
            <td>{{ $record->ekspedisi }}</td>
            <td>{{ $record->biaya }}</td>
            <td>{{ $record->no_resi }}</td>
            <td>{{ $record->status }}</td>
            <td>{{ $record->tgl_kirim }}</td>
            <td>{{ $record->catatan }}</td>
            <td>{{ $record->jenis_produk }}</td>
            <td>{{ $record->produk_edisi }}</td>
            <td>{{ $record->jumlah }}</td>
            <td>{{ $record->nama_pelanggan }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
