<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Transaksi_Umum_Detail extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'transaksi_umum_detail';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'kd_transaksi_umum_detail';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'kode_unik','nama','harga','diskon','jumlah'
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
				kode_unik LIKE ?  OR 
				nama LIKE ? 
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
			"kd_transaksi_umum_detail",
			"kode_unik",
			"nama",
			"harga",
			"diskon",
			"jumlah",
			"timestamp" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"kd_transaksi_umum_detail",
			"kode_unik",
			"nama",
			"harga",
			"diskon",
			"jumlah",
			"timestamp" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"kd_transaksi_umum_detail",
			"kode_unik",
			"nama",
			"harga",
			"diskon",
			"jumlah",
			"timestamp" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"kd_transaksi_umum_detail",
			"kode_unik",
			"nama",
			"harga",
			"diskon",
			"jumlah",
			"timestamp" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"kd_transaksi_umum_detail",
			"kode_unik",
			"nama",
			"harga",
			"diskon",
			"jumlah" 
		];
	}
}
