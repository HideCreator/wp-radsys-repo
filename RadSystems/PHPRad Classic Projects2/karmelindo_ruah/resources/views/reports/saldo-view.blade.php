
@extends('layouts.report')
@section('content')
<div id="report-title"><h1></h1></div>
<table class="table table-sm table-striped">
    <tbody>
        <tr>
            <th>Kd Saldo</th>
            <td>{{ $record->kd_saldo }}</td>
        </tr>
        <tr>
            <th>Timestamp</th>
            <td>{{ $record->timestamp }}</td>
        </tr>
        <tr>
            <th>Kd Pelanggan</th>
            <td>{{ $record->kd_pelanggan }}</td>
        </tr>
        <tr>
            <th>Pemasukkan</th>
            <td>{{ $record->pemasukkan }}</td>
        </tr>
        <tr>
            <th>Pengeluaran</th>
            <td>{{ $record->pengeluaran }}</td>
        </tr>
        <tr>
            <th>Keterangan</th>
            <td>{{ $record->keterangan }}</td>
        </tr>
        <tr>
            <th>Kd Trk Ruah</th>
            <td>{{ $record->kd_trk_ruah }}</td>
        </tr>
        <tr>
            <th>Klasifikasi</th>
            <td>{{ $record->klasifikasi }}</td>
        </tr>
    </tbody>
</table>
@endsection
