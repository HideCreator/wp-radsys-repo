<?php 

namespace App\Exports;
use App\Models\Pengiriman;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
class PengirimanViewExport implements FromQuery, WithHeadings, WithMapping, ShouldAutoSize
{
	protected $query;

	protected $rec_id;

    public function __construct($query, $rec_id)
    {
        $this->query = $query->select(Pengiriman::exportViewFields());
        $this->rec_id = $rec_id;
    }


    public function query()
    {
        return $this->query->where("kd_pengiriman", $this->rec_id);
    }


	public function headings(): array
    {
        return [
			'Kd Pengiriman',
			'Timestamp',
			'Kd Transaksi',
			'Ekspedisi',
			'Biaya',
			'No Resi',
			'Status',
			'Tgl Kirim',
			'Catatan',
			'Jenis Produk',
			'Produk Edisi',
			'Jumlah',
			'Nama Pelanggan'
        ];
    }


    public function map($record): array
    {
        return [
			$record->kd_pengiriman,
			$record->timestamp,
			$record->kd_transaksi,
			$record->ekspedisi,
			$record->biaya,
			$record->no_resi,
			$record->status,
			$record->tgl_kirim,
			$record->catatan,
			$record->jenis_produk,
			$record->produk_edisi,
			$record->jumlah,
			$record->nama_pelanggan
        ];
    }
}
