<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Transaksi_Ruah_Pelanggan extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'transaksi_ruah_pelanggan';
	

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
				ekspedisi1 LIKE ?  OR 
				ekspedisi2 LIKE ?  OR 
				catatan LIKE ?  OR 
				produk_edisi LIKE ?  OR 
				status_bayar LIKE ?  OR 
				kategori LIKE ?  OR 
				klot LIKE ?  OR 
				cabangtrk LIKE ?  OR 
				no_plg_lama LIKE ?  OR 
				nama_lengkap LIKE ?  OR 
				telp1 LIKE ?  OR 
				telp2 LIKE ?  OR 
				alamat LIKE ?  OR 
				kotakab LIKE ?  OR 
				provinsi LIKE ?  OR 
				kodepos LIKE ?  OR 
				nama_lembaga LIKE ?  OR 
				plg_ekspedisi1 LIKE ?  OR 
				plg_ekspedisi2 LIKE ?  OR 
				catatan_pelanggan LIKE ?  OR 
				status_pelanggan LIKE ?  OR 
				jenis_produk LIKE ?  OR 
				prediksi_ongkir LIKE ?  OR 
				cabang LIKE ?  OR 
				kloter LIKE ?  OR 
				tagihan LIKE ?  OR 
				saldo LIKE ?  OR 
				kebiasaan_jenis_bayar LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
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
			"kd_trk_ruah",
			"tr_kd_plg",
			"ekspedisi1",
			"ekspedisi2",
			"catatan",
			"produk_edisi",
			"jumlah",
			"harga",
			"subtotal",
			"diskon",
			"status_bayar",
			"piutangtotal",
			"bayartotal",
			"timestamp_create",
			"timestamp_modified",
			"dihapus",
			"ongkir",
			"total_bayar",
			"kategori",
			"klot",
			"cabangtrk",
			"p_kd_plg",
			"no_plg_lama",
			"nama_lengkap",
			"telp1",
			"telp2",
			"alamat",
			"kotakab",
			"provinsi",
			"kodepos",
			"nama_lembaga",
			"plg_ekspedisi1",
			"plg_ekspedisi2",
			"catatan_pelanggan",
			"status_pelanggan",
			"jenis_produk",
			"alokasi",
			"prediksi_ongkir",
			"cabang",
			"kloter",
			"tagihan",
			"saldo",
			"timestamp",
			"kebiasaan_jenis_bayar",
			"alokasicafe" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"kd_trk_ruah",
			"tr_kd_plg",
			"ekspedisi1",
			"ekspedisi2",
			"catatan",
			"produk_edisi",
			"jumlah",
			"harga",
			"subtotal",
			"diskon",
			"status_bayar",
			"piutangtotal",
			"bayartotal",
			"timestamp_create",
			"timestamp_modified",
			"dihapus",
			"ongkir",
			"total_bayar",
			"kategori",
			"klot",
			"cabangtrk",
			"p_kd_plg",
			"no_plg_lama",
			"nama_lengkap",
			"telp1",
			"telp2",
			"alamat",
			"kotakab",
			"provinsi",
			"kodepos",
			"nama_lembaga",
			"plg_ekspedisi1",
			"plg_ekspedisi2",
			"catatan_pelanggan",
			"status_pelanggan",
			"jenis_produk",
			"alokasi",
			"prediksi_ongkir",
			"cabang",
			"kloter",
			"tagihan",
			"saldo",
			"timestamp",
			"kebiasaan_jenis_bayar",
			"alokasicafe" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"kd_trk_ruah",
			"tr_kd_plg",
			"ekspedisi1",
			"ekspedisi2",
			"catatan",
			"produk_edisi",
			"jumlah",
			"harga",
			"subtotal",
			"diskon",
			"status_bayar",
			"piutangtotal",
			"bayartotal",
			"timestamp_create",
			"timestamp_modified",
			"dihapus",
			"ongkir",
			"total_bayar",
			"kategori",
			"klot",
			"cabangtrk",
			"p_kd_plg",
			"no_plg_lama",
			"nama_lengkap",
			"telp1",
			"telp2",
			"alamat",
			"kotakab",
			"provinsi",
			"kodepos",
			"nama_lembaga",
			"plg_ekspedisi1",
			"plg_ekspedisi2",
			"catatan_pelanggan",
			"status_pelanggan",
			"jenis_produk",
			"alokasi",
			"prediksi_ongkir",
			"cabang",
			"kloter",
			"tagihan",
			"saldo",
			"timestamp",
			"kebiasaan_jenis_bayar",
			"alokasicafe" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"kd_trk_ruah",
			"tr_kd_plg",
			"ekspedisi1",
			"ekspedisi2",
			"catatan",
			"produk_edisi",
			"jumlah",
			"harga",
			"subtotal",
			"diskon",
			"status_bayar",
			"piutangtotal",
			"bayartotal",
			"timestamp_create",
			"timestamp_modified",
			"dihapus",
			"ongkir",
			"total_bayar",
			"kategori",
			"klot",
			"cabangtrk",
			"p_kd_plg",
			"no_plg_lama",
			"nama_lengkap",
			"telp1",
			"telp2",
			"alamat",
			"kotakab",
			"provinsi",
			"kodepos",
			"nama_lembaga",
			"plg_ekspedisi1",
			"plg_ekspedisi2",
			"catatan_pelanggan",
			"status_pelanggan",
			"jenis_produk",
			"alokasi",
			"prediksi_ongkir",
			"cabang",
			"kloter",
			"tagihan",
			"saldo",
			"timestamp",
			"kebiasaan_jenis_bayar",
			"alokasicafe" 
		];
	}
}
