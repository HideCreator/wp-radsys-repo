<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Dinas extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'dinas';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'id_dinas';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'id_pengguna','peserta','tanggal','waktu','status_dinas','nama_balat','balat_out','balat_in','mengetahui'
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
				peserta LIKE ?  OR 
				status_dinas LIKE ?  OR 
				nama_balat LIKE ?  OR 
				mengetahui LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%"
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
			"id_dinas",
			"id_pengguna",
			"peserta",
			"tanggal",
			"waktu",
			"status_dinas",
			"nama_balat",
			"balat_out",
			"balat_in",
			"mengetahui" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"id_dinas",
			"id_pengguna",
			"peserta",
			"tanggal",
			"waktu",
			"status_dinas",
			"nama_balat",
			"balat_out",
			"balat_in",
			"mengetahui" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"id_dinas",
			"id_pengguna",
			"peserta",
			"tanggal",
			"waktu",
			"status_dinas",
			"nama_balat",
			"balat_out",
			"balat_in",
			"mengetahui" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"id_dinas",
			"id_pengguna",
			"peserta",
			"tanggal",
			"waktu",
			"status_dinas",
			"nama_balat",
			"balat_out",
			"balat_in",
			"mengetahui" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"id_dinas",
			"id_pengguna",
			"peserta",
			"tanggal",
			"waktu",
			"status_dinas",
			"nama_balat",
			"balat_out",
			"balat_in",
			"mengetahui" 
		];
	}
}
