<?php 

namespace App\Exports;
use App\Models\Produk_Edisi;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
class ProdukEdisiViewExport implements FromQuery, WithHeadings, WithMapping, ShouldAutoSize
{
	protected $query;

	protected $rec_id;

    public function __construct($query, $rec_id)
    {
        $this->query = $query->select(Produk_Edisi::exportViewFields());
        $this->rec_id = $rec_id;
    }


    public function query()
    {
        return $this->query->where("kd_produk", $this->rec_id);
    }


	public function headings(): array
    {
        return [
			'Kd Produk',
			'Kd Internal',
			'Kd Isbn Issn',
			'Judul',
			'Jenis',
			'Satuan',
			'Harga Dasar',
			'Harga Jual',
			'Stok Awal',
			'Judul Lama',
			'Kode Tahun',
			'Kode Bulan'
        ];
    }


    public function map($record): array
    {
        return [
			$record->kd_produk,
			$record->kd_internal,
			$record->kd_isbn_issn,
			$record->judul,
			$record->jenis,
			$record->satuan,
			$record->harga_dasar,
			$record->harga_jual,
			$record->stok_awal,
			$record->judul_lama,
			$record->kode_tahun,
			$record->kode_bulan
        ];
    }
}
