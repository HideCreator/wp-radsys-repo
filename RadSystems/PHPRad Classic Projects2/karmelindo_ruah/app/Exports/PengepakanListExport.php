<?php 

namespace App\Exports;
use App\Models\Pengepakan;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
class PengepakanListExport implements FromQuery, WithHeadings, WithMapping, ShouldAutoSize
{
	
	protected $query;
	
    public function __construct($query)
    {
        $this->query = $query->select(Pengepakan::exportListFields());
    }
	
    public function query()
    {
        return $this->query;
    }
	
	public function headings(): array
    {
        return [
			'Kd Pengepakan',
			'Timestamp',
			'Kd Transaksi',
			'Status',
			'Catatan'
        ];
    }
	
    public function map($record): array
    {
        return [
			$record->kd_pengepakan,
			$record->timestamp,
			$record->kd_transaksi,
			$record->status,
			$record->catatan
        ];
    }
}
