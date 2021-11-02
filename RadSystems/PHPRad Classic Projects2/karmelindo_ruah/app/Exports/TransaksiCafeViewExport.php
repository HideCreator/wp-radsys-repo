<?php 

namespace App\Exports;
use App\Models\Transaksi_Cafe;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
class TransaksiCafeViewExport implements FromQuery, WithHeadings, WithMapping, ShouldAutoSize
{
	protected $query;

	protected $rec_id;

    public function __construct($query, $rec_id)
    {
        $this->query = $query->select(Transaksi_Cafe::exportViewFields());
        $this->rec_id = $rec_id;
    }


    public function query()
    {
        return $this->query->where("kd_db_trk_cafe", $this->rec_id);
    }


	public function headings(): array
    {
        return [
			'Kd Db Trk Cafe',
			'Kd Trk Cafe',
			'Kd Pelanggan Cafe',
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
			'Cabangtrk'
        ];
    }


    public function map($record): array
    {
        return [
			$record->kd_db_trk_cafe,
			$record->kd_trk_cafe,
			$record->kd_pelanggan_cafe,
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
			$record->cabangtrk
        ];
    }
}
