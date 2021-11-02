
@extends('layouts.report')
@section('content')
<div id="report-title"><h1></h1></div>
<table class="table table-sm table-striped">
    <thead>
        <tr>
            <th>Kd Produk</th>
            <th>Kd Internal</th>
            <th>Kd Isbn Issn</th>
            <th>Judul</th>
            <th>Jenis</th>
            <th>Satuan</th>
            <th>Harga Dasar</th>
            <th>Harga Jual</th>
            <th>Stok Awal</th>
            <th>Judul Lama</th>
            <th>Kode Tahun</th>
            <th>Kode Bulan</th>
        </tr>
    </thead>
    <tbody>
        @foreach($records as $record)
        <tr>
            <td>{{ $record->kd_produk }}</td>
            <td>{{ $record->kd_internal }}</td>
            <td>{{ $record->kd_isbn_issn }}</td>
            <td>{{ $record->judul }}</td>
            <td>{{ $record->jenis }}</td>
            <td>{{ $record->satuan }}</td>
            <td>{{ $record->harga_dasar }}</td>
            <td>{{ $record->harga_jual }}</td>
            <td>{{ $record->stok_awal }}</td>
            <td>{{ $record->judul_lama }}</td>
            <td>{{ $record->kode_tahun }}</td>
            <td>{{ $record->kode_bulan }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
