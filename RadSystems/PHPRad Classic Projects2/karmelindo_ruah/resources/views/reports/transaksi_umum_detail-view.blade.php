
@extends('layouts.report')
@section('content')
<div id="report-title"><h1></h1></div>
<table class="table table-sm table-striped">
    <tbody>
        <tr>
            <th>Kd Transaksi Umum Detail</th>
            <td>{{ $record->kd_transaksi_umum_detail }}</td>
        </tr>
        <tr>
            <th>Kode Unik</th>
            <td>{{ $record->kode_unik }}</td>
        </tr>
        <tr>
            <th>Nama</th>
            <td>{{ $record->nama }}</td>
        </tr>
        <tr>
            <th>Harga</th>
            <td>{{ $record->harga }}</td>
        </tr>
        <tr>
            <th>Diskon</th>
            <td>{{ $record->diskon }}</td>
        </tr>
        <tr>
            <th>Jumlah</th>
            <td>{{ $record->jumlah }}</td>
        </tr>
        <tr>
            <th>Timestamp</th>
            <td>{{ $record->timestamp }}</td>
        </tr>
    </tbody>
</table>
@endsection
