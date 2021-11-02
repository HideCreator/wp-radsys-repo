<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Transaksi_Cafe_Pelanggan extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'transaksi_cafe_pelanggan';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = '';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
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
				produk_edisi LIKE ?  OR 
				kategori LIKE ?  OR 
				no_plg_lama LIKE ?  OR 
				nama_lembaga LIKE ?  OR 
				nama_lengkap LIKE ?  OR 
				telp1 LIKE ?  OR 
				telp2 LIKE ?  OR 
				alamat LIKE ?  OR 
				kotakab LIKE ?  OR 
				provinsi LIKE ?  OR 
				kodepos LIKE ?  OR 
				ekspedisi1 LIKE ?  OR 
				ekspedisi2 LIKE ?  OR 
				status_pelanggan LIKE ?  OR 
				status_bayar LIKE ?  OR 
				klot LIKE ?  OR 
				cabangtrk LIKE ?  OR 
				catatan LIKE ?  OR 
				plg_ekspedisi1 LIKE ?  OR 
				plg_ekspedisi2 LIKE ?  OR 
				catatan_pelanggan LIKE ?  OR 
				cabang LIKE ?  OR 
				kloter LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
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
			"kd_trk_cafe",
			"produk_edisi",
			"kategori",
			"tr_kd_plg",
			"p_kd_plg",
			"no_plg_lama",
			"nama_lembaga",
			"nama_lengkap",
			"telp1",
			"telp2",
			"alamat",
			"kotakab",
			"provinsi",
			"kodepos",
			"ekspedisi1",
			"ekspedisi2",
			"status_pelanggan",
			"status_bayar",
			"jumlah",
			"diskon",
			"bayartotal",
			"ongkir",
			"total_bayar",
			"klot",
			"cabangtrk",
			"catatan",
			"harga",
			"subtotal",
			"piutangtotal",
			"timestamp_create",
			"timestamp_modified",
			"dihapus",
			"plg_ekspedisi1",
			"plg_ekspedisi2",
			"catatan_pelanggan",
			"alokasi",
			"cabang",
			"kloter" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"kd_trk_cafe",
			"produk_edisi",
			"kategori",
			"tr_kd_plg",
			"p_kd_plg",
			"no_plg_lama",
			"nama_lembaga",
			"nama_lengkap",
			"telp1",
			"telp2",
			"alamat",
			"kotakab",
			"provinsi",
			"kodepos",
			"ekspedisi1",
			"ekspedisi2",
			"status_pelanggan",
			"status_bayar",
			"jumlah",
			"diskon",
			"bayartotal",
			"ongkir",
			"total_bayar",
			"klot",
			"cabangtrk",
			"catatan",
			"harga",
			"subtotal",
			"piutangtotal",
			"timestamp_create",
			"timestamp_modified",
			"dihapus",
			"plg_ekspedisi1",
			"plg_ekspedisi2",
			"catatan_pelanggan",
			"alokasi",
			"cabang",
			"kloter" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"kd_trk_cafe",
			"produk_edisi",
			"kategori",
			"tr_kd_plg",
			"p_kd_plg",
			"no_plg_lama",
			"nama_lembaga",
			"nama_lengkap",
			"telp1",
			"telp2",
			"alamat",
			"kotakab",
			"provinsi",
			"kodepos",
			"ekspedisi1",
			"ekspedisi2",
			"status_pelanggan",
			"status_bayar",
			"jumlah",
			"diskon",
			"bayartotal",
			"ongkir",
			"total_bayar",
			"klot",
			"cabangtrk",
			"catatan",
			"harga",
			"subtotal",
			"piutangtotal",
			"timestamp_create",
			"timestamp_modified",
			"dihapus",
			"plg_ekspedisi1",
			"plg_ekspedisi2",
			"catatan_pelanggan",
			"alokasi",
			"cabang",
			"kloter" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"kd_trk_cafe",
			"produk_edisi",
			"kategori",
			"tr_kd_plg",
			"p_kd_plg",
			"no_plg_lama",
			"nama_lembaga",
			"nama_lengkap",
			"telp1",
			"telp2",
			"alamat",
			"kotakab",
			"provinsi",
			"kodepos",
			"ekspedisi1",
			"ekspedisi2",
			"status_pelanggan",
			"status_bayar",
			"jumlah",
			"diskon",
			"bayartotal",
			"ongkir",
			"total_bayar",
			"klot",
			"cabangtrk",
			"catatan",
			"harga",
			"subtotal",
			"piutangtotal",
			"timestamp_create",
			"timestamp_modified",
			"dihapus",
			"plg_ekspedisi1",
			"plg_ekspedisi2",
			"catatan_pelanggan",
			"alokasi",
			"cabang",
			"kloter" 
		];
	}
}
