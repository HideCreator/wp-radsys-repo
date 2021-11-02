<?php 

namespace App\Exports;
use App\Models\Transaksi_Umum;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
class TransaksiUmumViewExport implements FromQuery, WithHeadings, WithMapping, ShouldAutoSize
{
	protected $query;

	protected $rec_id;

    public function __construct($query, $rec_id)
    {
        $this->query = $query->select(Transaksi_Umum::exportViewFields());
        $this->rec_id = $rec_id;
    }


    public function query()
    {
        return $this->query->where("kd_transaksi_umum", $this->rec_id);
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
