<?php 

namespace App\Exports;
use App\Models\Pelanggan_Cafe;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
class PelangganCafeViewExport implements FromQuery, WithHeadings, WithMapping, ShouldAutoSize
{
	protected $query;

	protected $rec_id;

    public function __construct($query, $rec_id)
    {
        $this->query = $query->select(Pelanggan_Cafe::exportViewFields());
        $this->rec_id = $rec_id;
    }


    public function query()
    {
        return $this->query->where("kd_pelanggan_cafe", $this->rec_id);
    }


	public function headings(): array
    {
        return [
			'Kd Pelanggan Cafe',
			'No Plg Lama',
			'Nama Lengkap',
			'Telp1',
			'Telp2',
			'Alamat',
			'Kotakab',
			'Provinsi',
			'Kodepos',
			'Nama Lembaga',
			'Ekspedisi1',
			'Ekspedisi2',
			'Catatan Pelanggan',
			'Status Pelanggan',
			'Kebiasaan Jenis Bayar',
			'Alokasi',
			'Prediksi Ongkir',
			'Timestamp',
			'Cabang',
			'Jenis Produk',
			'Kloter',
			'Tagihan',
			'Saldo'
        ];
    }


    public function map($record): array
    {
        return [
			$record->kd_pelanggan_cafe,
			$record->no_plg_lama,
			$record->nama_lengkap,
			$record->telp1,
			$record->telp2,
			$record->alamat,
			$record->kotakab,
			$record->provinsi,
			$record->kodepos,
			$record->nama_lembaga,
			$record->ekspedisi1,
			$record->ekspedisi2,
			$record->catatan_pelanggan,
			$record->status_pelanggan,
			$record->kebiasaan_jenis_bayar,
			$record->alokasi,
			$record->prediksi_ongkir,
			$record->timestamp,
			$record->cabang,
			$record->jenis_produk,
			$record->kloter,
			$record->tagihan,
			$record->saldo
        ];
    }
}
