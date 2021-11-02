<?php 

namespace App\Exports;
use App\Models\Transaksi_Umum_Detail;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
class TransaksiUmumDetailViewExport implements FromQuery, WithHeadings, WithMapping, ShouldAutoSize
{
	protected $query;

	protected $rec_id;

    public function __construct($query, $rec_id)
    {
        $this->query = $query->select(Transaksi_Umum_Detail::exportViewFields());
        $this->rec_id = $rec_id;
    }


    public function query()
    {
        return $this->query->where("kd_transaksi_umum_detail", $this->rec_id);
    }


	public function headings(): array
    {
        return [
			'Kd Transaksi Umum Detail',
			'Kode Unik',
			'Nama',
			'Harga',
			'Diskon',
			'Jumlah',
			'Timestamp'
        ];
    }


    public function map($record): array
    {
        return [
			$record->kd_transaksi_umum_detail,
			$record->kode_unik,
			$record->nama,
			$record->harga,
			$record->diskon,
			$record->jumlah,
			$record->timestamp
        ];
    }
}
