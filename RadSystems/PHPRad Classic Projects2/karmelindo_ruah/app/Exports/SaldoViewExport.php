<?php 

namespace App\Exports;
use App\Models\Saldo;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
class SaldoViewExport implements FromQuery, WithHeadings, WithMapping, ShouldAutoSize
{
	protected $query;

	protected $rec_id;

    public function __construct($query, $rec_id)
    {
        $this->query = $query->select(Saldo::exportViewFields());
        $this->rec_id = $rec_id;
    }


    public function query()
    {
        return $this->query->where("kd_saldo", $this->rec_id);
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
