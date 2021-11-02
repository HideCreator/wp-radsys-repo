<?php 

namespace App\Exports;
use App\Models\Transaksi_Umum;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
class TransaksiUmumListExport implements FromQuery, WithHeadings, WithMapping, ShouldAutoSize
{
	
	protected $query;
	
    public function __construct($query)
    {
        $this->query = $query->select(Transaksi_Umum::exportListFields());
    }
	
    public function query()
    {
        return $this->query;
    }
	
	public function headings(): array
    {
        return [
			'Kd Transaksi Umum',
			'Kode Unik',
			'Tanggalwaktu',
			'Atas Nama',
			'Alamat',
			'Kotakab',
			'Provinsi',
			'Total Bayar',
			'Status Bayar',
			'Tgl Bayar',
			'Catatan',
			'Dihapus'
        ];
    }
	
    public function map($record): array
    {
        return [
			$record->kd_transaksi_umum,
			$record->kode_unik,
			$record->tanggalwaktu,
			$record->atas_nama,
			$record->alamat,
			$record->kotakab,
			$record->provinsi,
			$record->total_bayar,
			$record->status_bayar,
			$record->tgl_bayar,
			$record->catatan,
			$record->dihapus
        ];
    }
}
