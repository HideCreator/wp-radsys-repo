<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Pelanggan extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'pelanggan';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'kd_pelanggan';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'nama_lengkap','telp1','telp2','alamat','kotakab','provinsi','kodepos','nama_lembaga','ekspedisi1','ekspedisi2','catatan_pelanggan','status_pelanggan','kebiasaan_jenis_bayar','alokasi','prediksi_ongkir','cabang','jenis_produk','tagihan','simpanan'
	];
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
	

	/**
     * Set search query for the model
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param string $text
     */
	public static function search($query, $text){
		//search table record 
		$search_condition = '(
				nama_lengkap LIKE ?  OR 
				telp1 LIKE ?  OR 
				telp2 LIKE ?  OR 
				alamat LIKE ?  OR 
				kotakab LIKE ?  OR 
				provinsi LIKE ?  OR 
				kodepos LIKE ?  OR 
				nama_lembaga LIKE ?  OR 
				ekspedisi1 LIKE ?  OR 
				ekspedisi2 LIKE ?  OR 
				catatan_pelanggan LIKE ?  OR 
				status_pelanggan LIKE ?  OR 
				kebiasaan_jenis_bayar LIKE ?  OR 
				prediksi_ongkir LIKE ?  OR 
				cabang LIKE ?  OR 
				jenis_produk LIKE ?  OR 
				tagihan LIKE ?  OR 
				simpanan LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
		];
		//setting search conditions
		$query->whereRaw($search_condition, $search_params);
	}
	

	/**
     * return list page fields of the model.
     * 
     * @return array
     */
	public static function listFields(){
		return [ 
			"kd_pelanggan",
			"nama_lengkap",
			"telp1",
			"telp2",
			"alamat",
			"kotakab",
			"provinsi",
			"kodepos",
			"nama_lembaga",
			"ekspedisi1",
			"ekspedisi2",
			"catatan_pelanggan",
			"status_pelanggan",
			"kebiasaan_jenis_bayar",
			"alokasi",
			"prediksi_ongkir",
			"timestamp",
			"cabang",
			"jenis_produk",
			"tagihan",
			"simpanan" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"kd_pelanggan",
			"nama_lengkap",
			"telp1",
			"telp2",
			"alamat",
			"kotakab",
			"provinsi",
			"kodepos",
			"nama_lembaga",
			"ekspedisi1",
			"ekspedisi2",
			"catatan_pelanggan",
			"status_pelanggan",
			"kebiasaan_jenis_bayar",
			"alokasi",
			"prediksi_ongkir",
			"timestamp",
			"cabang",
			"jenis_produk",
			"tagihan",
			"simpanan" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"kd_pelanggan",
			"nama_lengkap",
			"telp1",
			"telp2",
			"alamat",
			"kotakab",
			"provinsi",
			"kodepos",
			"nama_lembaga",
			"ekspedisi1",
			"ekspedisi2",
			"catatan_pelanggan",
			"status_pelanggan",
			"kebiasaan_jenis_bayar",
			"alokasi",
			"prediksi_ongkir",
			"timestamp",
			"cabang",
			"jenis_produk",
			"tagihan",
			"simpanan" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"kd_pelanggan",
			"nama_lengkap",
			"telp1",
			"telp2",
			"alamat",
			"kotakab",
			"provinsi",
			"kodepos",
			"nama_lembaga",
			"ekspedisi1",
			"ekspedisi2",
			"catatan_pelanggan",
			"status_pelanggan",
			"kebiasaan_jenis_bayar",
			"alokasi",
			"prediksi_ongkir",
			"timestamp",
			"cabang",
			"jenis_produk",
			"tagihan",
			"simpanan" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"kd_pelanggan",
			"nama_lengkap",
			"telp1",
			"telp2",
			"alamat",
			"kotakab",
			"provinsi",
			"kodepos",
			"nama_lembaga",
			"ekspedisi1",
			"ekspedisi2",
			"catatan_pelanggan",
			"status_pelanggan",
			"kebiasaan_jenis_bayar",
			"alokasi",
			"prediksi_ongkir",
			"cabang",
			"jenis_produk",
			"tagihan",
			"simpanan" 
		];
	}
}
