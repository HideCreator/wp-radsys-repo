<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Saldo extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'saldo';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'kd_saldo';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'kd_pelanggan','pemasukkan','pengeluaran','keterangan','kd_trk_ruah','klasifikasi'
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
				keterangan LIKE ?  OR 
				klasifikasi LIKE ? 
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
			"kd_saldo",
			"timestamp",
			"kd_pelanggan",
			"pemasukkan",
			"pengeluaran",
			"keterangan",
			"kd_trk_ruah",
			"klasifikasi" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"kd_saldo",
			"timestamp",
			"kd_pelanggan",
			"pemasukkan",
			"pengeluaran",
			"keterangan",
			"kd_trk_ruah",
			"klasifikasi" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"kd_saldo",
			"timestamp",
			"kd_pelanggan",
			"pemasukkan",
			"pengeluaran",
			"keterangan",
			"kd_trk_ruah",
			"klasifikasi" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"kd_saldo",
			"timestamp",
			"kd_pelanggan",
			"pemasukkan",
			"pengeluaran",
			"keterangan",
			"kd_trk_ruah",
			"klasifikasi" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"kd_saldo",
			"kd_pelanggan",
			"pemasukkan",
			"pengeluaran",
			"keterangan",
			"kd_trk_ruah",
			"klasifikasi" 
		];
	}
}
