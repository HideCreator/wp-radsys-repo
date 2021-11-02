
@extends('layouts.report')
@section('content')
<div id="report-title"><h1></h1></div>
<table class="table table-sm table-striped">
    <thead>
        <tr>
            <th>Kd Db Trk Ruah</th>
            <th>Kd Trk Ruah</th>
            <th>Kd Pelanggan</th>
            <th>Ekspedisi1</th>
            <th>Ekspedisi2</th>
            <th>Catatan</th>
            <th>Produk Edisi</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Diskon</th>
            <th>Subtotal</th>
            <th>Ongkir</th>
            <th>Status Bayar</th>
            <th>Total Bayar</th>
            <th>Piutangtotal</th>
            <th>Bayartotal</th>
            <th>Timestamp Create</th>
            <th>Timestamp Modified</th>
            <th>Dihapus</th>
            <th>Kategori</th>
            <th>Klot</th>
            <th>Cabangtrk</th>
            <th>Jumlahruah</th>
        </tr>
    </thead>
    <tbody>
        @foreach($records as $record)
        <tr>
            <td>{{ $record->kd_db_trk_ruah }}</td>
            <td>{{ $record->kd_trk_ruah }}</td>
            <td>{{ $record->kd_pelanggan }}</td>
            <td>{{ $record->ekspedisi1 }}</td>
            <td>{{ $record->ekspedisi2 }}</td>
            <td>{{ $record->catatan }}</td>
            <td>{{ $record->produk_edisi }}</td>
            <td>{{ $record->jumlah }}</td>
            <td>{{ $record->harga }}</td>
            <td>{{ $record->diskon }}</td>
            <td>{{ $record->subtotal }}</td>
            <td>{{ $record->ongkir }}</td>
            <td>{{ $record->status_bayar }}</td>
            <td>{{ $record->total_bayar }}</td>
            <td>{{ $record->piutangtotal }}</td>
            <td>{{ $record->bayartotal }}</td>
            <td>{{ $record->timestamp_create }}</td>
            <td>{{ $record->timestamp_modified }}</td>
            <td>{{ $record->dihapus }}</td>
            <td>{{ $record->kategori }}</td>
            <td>{{ $record->klot }}</td>
            <td>{{ $record->cabangtrk }}</td>
            <td>{{ $record->jumlahruah }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
