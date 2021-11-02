
@extends('layouts.report')
@section('content')
<div id="report-title"><h1></h1></div>
<table class="table table-sm table-striped">
    <thead>
        <tr>
            <th>Kd Pengepakan</th>
            <th>Timestamp</th>
            <th>Kd Transaksi</th>
            <th>Status</th>
            <th>Catatan</th>
        </tr>
    </thead>
    <tbody>
        @foreach($records as $record)
        <tr>
            <td>{{ $record->kd_pengepakan }}</td>
            <td>{{ $record->timestamp }}</td>
            <td>{{ $record->kd_transaksi }}</td>
            <td>{{ $record->status }}</td>
            <td>{{ $record->catatan }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
