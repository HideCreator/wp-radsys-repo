<?php 

namespace App\Exports;
use App\Models\Pengepakan;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
class PengepakanViewExport implements FromQuery, WithHeadings, WithMapping, ShouldAutoSize
{
	protected $query;

	protected $rec_id;

    public function __construct($query, $rec_id)
    {
        $this->query = $query->select(Pengepakan::exportViewFields());
        $this->rec_id = $rec_id;
    }


    public function query()
    {
        return $this->query->where("kd_pengepakan", $this->rec_id);
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
