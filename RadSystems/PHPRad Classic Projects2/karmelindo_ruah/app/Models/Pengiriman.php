<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Pengiriman extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'pengiriman';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'kd_pengiriman';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'kd_transaksi','ekspedisi','biaya','no_resi','status','tgl_kirim','catatan','jenis_produk','produk_edisi','jumlah','nama_pelanggan'
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
				ekspedisi LIKE ?  OR 
				no_resi LIKE ?  OR 
				status LIKE ?  OR 
				catatan LIKE ?  OR 
				jenis_produk LIKE ?  OR 
				produk_edisi LIKE ?  OR 
				nama_pelanggan LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
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
			"kd_pengiriman",
			"timestamp",
			"kd_transaksi",
			"ekspedisi",
			"biaya",
			"no_resi",
			"status",
			"tgl_kirim",
			"catatan",
			"jenis_produk",
			"produk_edisi",
			"jumlah",
			"nama_pelanggan" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"kd_pengiriman",
			"timestamp",
			"kd_transaksi",
			"ekspedisi",
			"biaya",
			"no_resi",
			"status",
			"tgl_kirim",
			"catatan",
			"jenis_produk",
			"produk_edisi",
			"jumlah",
			"nama_pelanggan" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"kd_pengiriman",
			"timestamp",
			"kd_transaksi",
			"ekspedisi",
			"biaya",
			"no_resi",
			"status",
			"tgl_kirim",
			"catatan",
			"jenis_produk",
			"produk_edisi",
			"jumlah",
			"nama_pelanggan" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"kd_pengiriman",
			"timestamp",
			"kd_transaksi",
			"ekspedisi",
			"biaya",
			"no_resi",
			"status",
			"tgl_kirim",
			"catatan",
			"jenis_produk",
			"produk_edisi",
			"jumlah",
			"nama_pelanggan" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"kd_pengiriman",
			"kd_transaksi",
			"ekspedisi",
			"biaya",
			"no_resi",
			"status",
			"tgl_kirim",
			"catatan",
			"jenis_produk",
			"produk_edisi",
			"jumlah",
			"nama_pelanggan" 
		];
	}
}
