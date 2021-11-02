
@extends('layouts.report')
@section('content')
<div id="report-title"><h1></h1></div>
<table class="table table-sm table-striped">
    <thead>
        <tr>
            <th>Kd Db Saldo Cafe</th>
            <th>Kd Saldo Cafe</th>
            <th>Timestamp</th>
            <th>Kd Pelanggan Cafe</th>
            <th>Pemasukkan</th>
            <th>Pengeluaran</th>
            <th>Keterangan</th>
            <th>Kd Trk Cafe</th>
            <th>Klasifikasi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($records as $record)
        <tr>
            <td>{{ $record->kd_db_saldo_cafe }}</td>
            <td>{{ $record->kd_saldo_cafe }}</td>
            <td>{{ $record->timestamp }}</td>
            <td>{{ $record->kd_pelanggan_cafe }}</td>
            <td>{{ $record->pemasukkan }}</td>
            <td>{{ $record->pengeluaran }}</td>
            <td>{{ $record->keterangan }}</td>
            <td>{{ $record->kd_trk_cafe }}</td>
            <td>{{ $record->klasifikasi }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
