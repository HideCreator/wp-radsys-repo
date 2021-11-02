<?php 

namespace App\Exports;
use App\Models\Transaksi_Ruah;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
class TransaksiRuahViewExport implements FromQuery, WithHeadings, WithMapping, ShouldAutoSize
{
	protected $query;

	protected $rec_id;

    public function __construct($query, $rec_id)
    {
        $this->query = $query->select(Transaksi_Ruah::exportViewFields());
        $this->rec_id = $rec_id;
    }


    public function query()
    {
        return $this->query->where("kd_db_trk_ruah", $this->rec_id);
    }


	public function headings(): array
    {
        return [
			'Kd Db Trk Ruah',
			'Kd Trk Ruah',
			'Kd Pelanggan',
			'Ekspedisi1',
			'Ekspedisi2',
			'Catatan',
			'Produk Edisi',
			'Jumlah',
			'Harga',
			'Diskon',
			'Subtotal',
			'Ongkir',
			'Status Bayar',
			'Total Bayar',
			'Piutangtotal',
			'Bayartotal',
			'Timestamp Create',
			'Timestamp Modified',
			'Dihapus',
			'Kategori',
			'Klot',
			'Cabangtrk',
			'Jumlahruah'
        ];
    }


    public function map($record): array
    {
        return [
			$record->kd_db_trk_ruah,
			$record->kd_trk_ruah,
			$record->kd_pelanggan,
			$record->ekspedisi1,
			$record->ekspedisi2,
			$record->catatan,
			$record->produk_edisi,
			$record->jumlah,
			$record->harga,
			$record->diskon,
			$record->subtotal,
			$record->ongkir,
			$record->status_bayar,
			$record->total_bayar,
			$record->piutangtotal,
			$record->bayartotal,
			$record->timestamp_create,
			$record->timestamp_modified,
			$record->dihapus,
			$record->kategori,
			$record->klot,
			$record->cabangtrk,
			$record->jumlahruah
        ];
    }
}
