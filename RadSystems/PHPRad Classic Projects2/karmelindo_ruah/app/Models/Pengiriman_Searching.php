<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Pengiriman_Searching extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'pengiriman_searching';
	

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
				ekspedisi LIKE ?  OR 
				no_resi LIKE ?  OR 
				status LIKE ?  OR 
				catatan LIKE ?  OR 
				jenis_produk LIKE ?  OR 
				produk_edisi LIKE ?  OR 
				nama_pelanggan LIKE ?  OR 
				nama_lengkap LIKE ?  OR 
				cabangtrk LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
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
			"nama_pelanggan",
			"nama_lengkap",
			"cabangtrk",
			"jumlah_total" 
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
			"nama_pelanggan",
			"nama_lengkap",
			"cabangtrk",
			"jumlah_total" 
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
			"nama_pelanggan",
			"nama_lengkap",
			"cabangtrk",
			"jumlah_total" 
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
			"nama_pelanggan",
			"nama_lengkap",
			"cabangtrk",
			"jumlah_total" 
		];
	}
}
