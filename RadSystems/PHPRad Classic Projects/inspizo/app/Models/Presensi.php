<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Presensi extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'presensi';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'id_presensi';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'id_pengguna','tanggal','waktu','keterangan'
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
				keterangan LIKE ? 
		)';
		$search_params = [
			"%$text%"
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
			"id_presensi",
			"id_pengguna",
			"tanggal",
			"waktu",
			"keterangan" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"id_presensi",
			"id_pengguna",
			"tanggal",
			"waktu",
			"keterangan" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"id_presensi",
			"id_pengguna",
			"tanggal",
			"waktu",
			"keterangan" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"id_presensi",
			"id_pengguna",
			"tanggal",
			"waktu",
			"keterangan" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"id_presensi",
			"id_pengguna",
			"tanggal",
			"waktu",
			"keterangan" 
		];
	}
}
