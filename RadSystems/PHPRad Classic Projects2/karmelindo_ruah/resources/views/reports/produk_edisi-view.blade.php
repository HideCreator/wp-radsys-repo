
@extends('layouts.report')
@section('content')
<div id="report-title"><h1></h1></div>
<table class="table table-sm table-striped">
    <tbody>
        <tr>
            <th>Kd Produk</th>
            <td>{{ $record->kd_produk }}</td>
        </tr>
        <tr>
            <th>Kd Internal</th>
            <td>{{ $record->kd_internal }}</td>
        </tr>
        <tr>
            <th>Kd Isbn Issn</th>
            <td>{{ $record->kd_isbn_issn }}</td>
        </tr>
        <tr>
            <th>Judul</th>
            <td>{{ $record->judul }}</td>
        </tr>
        <tr>
            <th>Jenis</th>
            <td>{{ $record->jenis }}</td>
        </tr>
        <tr>
            <th>Satuan</th>
            <td>{{ $record->satuan }}</td>
        </tr>
        <tr>
            <th>Harga Dasar</th>
            <td>{{ $record->harga_dasar }}</td>
        </tr>
        <tr>
            <th>Harga Jual</th>
            <td>{{ $record->harga_jual }}</td>
        </tr>
        <tr>
            <th>Stok Awal</th>
            <td>{{ $record->stok_awal }}</td>
        </tr>
        <tr>
            <th>Judul Lama</th>
            <td>{{ $record->judul_lama }}</td>
        </tr>
        <tr>
            <th>Kode Tahun</th>
            <td>{{ $record->kode_tahun }}</td>
        </tr>
        <tr>
            <th>Kode Bulan</th>
            <td>{{ $record->kode_bulan }}</td>
        </tr>
    </tbody>
</table>
@endsection
