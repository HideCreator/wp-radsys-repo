
@extends('layouts.report')
@section('content')
<div id="report-title"><h1></h1></div>
<table class="table table-sm table-striped">
    <tbody>
        <tr>
            <th>Kd Pengepakan</th>
            <td>{{ $record->kd_pengepakan }}</td>
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
            <th>Status</th>
            <td>{{ $record->status }}</td>
        </tr>
        <tr>
            <th>Catatan</th>
            <td>{{ $record->catatan }}</td>
        </tr>
    </tbody>
</table>
@endsection
