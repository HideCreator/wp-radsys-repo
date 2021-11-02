<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Transaksi_Duplikasi extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'transaksi_duplikasi';
	

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
				status_bayar LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%"
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
			"duplikasi",
			"kd_trk_ruah",
			"produk_edisi",
			"jumlah",
			"subtotal",
			"status_bayar",
			"dihapus" 
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
			"duplikasi",
			"kd_trk_ruah",
			"produk_edisi",
			"jumlah",
			"subtotal",
			"status_bayar",
			"dihapus" 
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
			"duplikasi",
			"kd_trk_ruah",
			"produk_edisi",
			"jumlah",
			"subtotal",
			"status_bayar",
			"dihapus" 
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
			"duplikasi",
			"kd_trk_ruah",
			"produk_edisi",
			"jumlah",
			"subtotal",
			"status_bayar",
			"dihapus" 
		];
	}
}
