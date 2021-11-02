
@extends('layouts.report')
@section('content')
<div id="report-title"><h1></h1></div>
<table class="table table-sm table-striped">
    <thead>
        <tr>
            <th>Kd Saldo</th>
            <th>Timestamp</th>
            <th>Kd Pelanggan</th>
            <th>Pemasukkan</th>
            <th>Pengeluaran</th>
            <th>Keterangan</th>
            <th>Kd Trk Ruah</th>
            <th>Klasifikasi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($records as $record)
        <tr>
            <td>{{ $record->kd_saldo }}</td>
            <td>{{ $record->timestamp }}</td>
            <td>{{ $record->kd_pelanggan }}</td>
            <td>{{ $record->pemasukkan }}</td>
            <td>{{ $record->pengeluaran }}</td>
            <td>{{ $record->keterangan }}</td>
            <td>{{ $record->kd_trk_ruah }}</td>
            <td>{{ $record->klasifikasi }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
