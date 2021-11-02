
@extends('layouts.report')
@section('content')
<div id="report-title"><h1></h1></div>
<table class="table table-sm table-striped">
    <tbody>
        <tr>
            <th>Kd Db Trk Cafe</th>
            <td>{{ $record->kd_db_trk_cafe }}</td>
        </tr>
        <tr>
            <th>Kd Trk Cafe</th>
            <td>{{ $record->kd_trk_cafe }}</td>
        </tr>
        <tr>
            <th>Kd Pelanggan Cafe</th>
            <td>{{ $record->kd_pelanggan_cafe }}</td>
        </tr>
        <tr>
            <th>Ekspedisi1</th>
            <td>{{ $record->ekspedisi1 }}</td>
        </tr>
        <tr>
            <th>Ekspedisi2</th>
            <td>{{ $record->ekspedisi2 }}</td>
        </tr>
        <tr>
            <th>Catatan</th>
            <td>{{ $record->catatan }}</td>
        </tr>
        <tr>
            <th>Produk Edisi</th>
            <td>{{ $record->produk_edisi }}</td>
        </tr>
        <tr>
            <th>Jumlah</th>
            <td>{{ $record->jumlah }}</td>
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
            <th>Subtotal</th>
            <td>{{ $record->subtotal }}</td>
        </tr>
        <tr>
            <th>Ongkir</th>
            <td>{{ $record->ongkir }}</td>
        </tr>
        <tr>
            <th>Status Bayar</th>
            <td>{{ $record->status_bayar }}</td>
        </tr>
        <tr>
            <th>Total Bayar</th>
            <td>{{ $record->total_bayar }}</td>
        </tr>
        <tr>
            <th>Piutangtotal</th>
            <td>{{ $record->piutangtotal }}</td>
        </tr>
        <tr>
            <th>Bayartotal</th>
            <td>{{ $record->bayartotal }}</td>
        </tr>
        <tr>
            <th>Timestamp Create</th>
            <td>{{ $record->timestamp_create }}</td>
        </tr>
        <tr>
            <th>Timestamp Modified</th>
            <td>{{ $record->timestamp_modified }}</td>
        </tr>
        <tr>
            <th>Dihapus</th>
            <td>{{ $record->dihapus }}</td>
        </tr>
        <tr>
            <th>Kategori</th>
            <td>{{ $record->kategori }}</td>
        </tr>
        <tr>
            <th>Klot</th>
            <td>{{ $record->klot }}</td>
        </tr>
        <tr>
            <th>Cabangtrk</th>
            <td>{{ $record->cabangtrk }}</td>
        </tr>
    </tbody>
</table>
@endsection
