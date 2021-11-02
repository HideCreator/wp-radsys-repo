
@extends('layouts.report')
@section('content')
<div id="report-title"><h1></h1></div>
<table class="table table-sm table-striped">
    <thead>
        <tr>
            <th>Kd Transaksi Umum Detail</th>
            <th>Kode Unik</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Diskon</th>
            <th>Jumlah</th>
            <th>Timestamp</th>
        </tr>
    </thead>
    <tbody>
        @foreach($records as $record)
        <tr>
            <td>{{ $record->kd_transaksi_umum_detail }}</td>
            <td>{{ $record->kode_unik }}</td>
            <td>{{ $record->nama }}</td>
            <td>{{ $record->harga }}</td>
            <td>{{ $record->diskon }}</td>
            <td>{{ $record->jumlah }}</td>
            <td>{{ $record->timestamp }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
