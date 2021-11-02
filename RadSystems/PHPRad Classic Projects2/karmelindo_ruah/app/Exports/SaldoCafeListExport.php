<?php 

namespace App\Exports;
use App\Models\Saldo_Cafe;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
class SaldoCafeListExport implements FromQuery, WithHeadings, WithMapping, ShouldAutoSize
{
	
	protected $query;
	
    public function __construct($query)
    {
        $this->query = $query->select(Saldo_Cafe::exportListFields());
    }
	
    public function query()
    {
        return $this->query;
    }
	
	public function headings(): array
    {
        return [
			'Kd Db Saldo Cafe',
			'Kd Saldo Cafe',
			'Timestamp',
			'Kd Pelanggan Cafe',
			'Pemasukkan',
			'Pengeluaran',
			'Keterangan',
			'Kd Trk Cafe',
			'Klasifikasi'
        ];
    }
	
    public function map($record): array
    {
        return [
			$record->kd_db_saldo_cafe,
			$record->kd_saldo_cafe,
			$record->timestamp,
			$record->kd_pelanggan_cafe,
			$record->pemasukkan,
			$record->pengeluaran,
			$record->keterangan,
			$record->kd_trk_cafe,
			$record->klasifikasi
        ];
    }
}
