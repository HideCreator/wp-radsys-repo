<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Transaksi_Ruah extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'transaksi_ruah';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'kd_db_trk_ruah';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'kd_trk_ruah','kd_pelanggan','ekspedisi1','ekspedisi2','catatan','produk_edisi','jumlah','harga','diskon','subtotal','ongkir','status_bayar','total_bayar','piutangtotal','bayartotal','dihapus','kategori','klot','cabangtrk','jumlahruah'
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
				cabangtrk LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
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
			"kd_db_trk_ruah",
			"kd_trk_ruah",
			"kd_pelanggan",
			"ekspedisi1",
			"ekspedisi2",
			"catatan",
			"produk_edisi",
			"jumlah",
			"harga",
			"diskon",
			"subtotal",
			"ongkir",
			"status_bayar",
			"total_bayar",
			"piutangtotal",
			"bayartotal",
			"timestamp_create",
			"timestamp_modified",
			"dihapus",
			"kategori",
			"klot",
			"cabangtrk",
			"jumlahruah" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"kd_db_trk_ruah",
			"kd_trk_ruah",
			"kd_pelanggan",
			"ekspedisi1",
			"ekspedisi2",
			"catatan",
			"produk_edisi",
			"jumlah",
			"harga",
			"diskon",
			"subtotal",
			"ongkir",
			"status_bayar",
			"total_bayar",
			"piutangtotal",
			"bayartotal",
			"timestamp_create",
			"timestamp_modified",
			"dihapus",
			"kategori",
			"klot",
			"cabangtrk",
			"jumlahruah" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"kd_db_trk_ruah",
			"kd_trk_ruah",
			"kd_pelanggan",
			"ekspedisi1",
			"ekspedisi2",
			"catatan",
			"produk_edisi",
			"jumlah",
			"harga",
			"diskon",
			"subtotal",
			"ongkir",
			"status_bayar",
			"total_bayar",
			"piutangtotal",
			"bayartotal",
			"timestamp_create",
			"timestamp_modified",
			"dihapus",
			"kategori",
			"klot",
			"cabangtrk",
			"jumlahruah" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"kd_db_trk_ruah",
			"kd_trk_ruah",
			"kd_pelanggan",
			"ekspedisi1",
			"ekspedisi2",
			"catatan",
			"produk_edisi",
			"jumlah",
			"harga",
			"diskon",
			"subtotal",
			"ongkir",
			"status_bayar",
			"total_bayar",
			"piutangtotal",
			"bayartotal",
			"timestamp_create",
			"timestamp_modified",
			"dihapus",
			"kategori",
			"klot",
			"cabangtrk",
			"jumlahruah" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"kd_db_trk_ruah",
			"kd_trk_ruah",
			"kd_pelanggan",
			"ekspedisi1",
			"ekspedisi2",
			"catatan",
			"produk_edisi",
			"jumlah",
			"harga",
			"diskon",
			"subtotal",
			"ongkir",
			"status_bayar",
			"total_bayar",
			"piutangtotal",
			"bayartotal",
			"dihapus",
			"kategori",
			"klot",
			"cabangtrk",
			"jumlahruah" 
		];
	}
}
