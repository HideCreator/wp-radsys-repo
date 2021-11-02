<?php 

namespace App\Exports;
use App\Models\Saldo;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
class SaldoListExport implements FromQuery, WithHeadings, WithMapping, ShouldAutoSize
{
	
	protected $query;
	
    public function __construct($query)
    {
        $this->query = $query->select(Saldo::exportListFields());
    }
	
    public function query()
    {
        return $this->query;
    }
	
	public function headings(): array
    {
        return [
			'Kd Saldo',
			'Timestamp',
			'Kd Pelanggan',
			'Pemasukkan',
			'Pengeluaran',
			'Keterangan',
			'Kd Trk Ruah',
			'Klasifikasi'
        ];
    }
	
    public function map($record): array
    {
        return [
			$record->kd_saldo,
			$record->timestamp,
			$record->kd_pelanggan,
			$record->pemasukkan,
			$record->pengeluaran,
			$record->keterangan,
			$record->kd_trk_ruah,
			$record->klasifikasi
        ];
    }
}
