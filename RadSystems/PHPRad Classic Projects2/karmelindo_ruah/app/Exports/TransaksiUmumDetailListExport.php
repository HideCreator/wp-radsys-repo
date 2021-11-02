<?php 

namespace App\Exports;
use App\Models\Transaksi_Umum_Detail;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
class TransaksiUmumDetailListExport implements FromQuery, WithHeadings, WithMapping, ShouldAutoSize
{
	
	protected $query;
	
    public function __construct($query)
    {
        $this->query = $query->select(Transaksi_Umum_Detail::exportListFields());
    }
	
    public function query()
    {
        return $this->query;
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
