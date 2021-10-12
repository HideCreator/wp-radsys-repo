<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Agenda extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'agenda';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'id_agenda';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'id_pengguna','tanggal','uraian','id_pelanggan','keterangan','tanggal_kunjungan'
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
				uraian LIKE ?  OR 
				id_pelanggan LIKE ?  OR 
				keterangan LIKE ?  OR 
				tanggal_kunjungan LIKE ? 
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
			"id_agenda",
			"id_pengguna",
			"tanggal",
			"uraian",
			"id_pelanggan",
			"keterangan",
			"tanggal_kunjungan" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"id_agenda",
			"id_pengguna",
			"tanggal",
			"uraian",
			"id_pelanggan",
			"keterangan",
			"tanggal_kunjungan" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"id_agenda",
			"id_pengguna",
			"tanggal",
			"uraian",
			"id_pelanggan",
			"keterangan",
			"tanggal_kunjungan" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"id_agenda",
			"id_pengguna",
			"tanggal",
			"uraian",
			"id_pelanggan",
			"keterangan",
			"tanggal_kunjungan" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"id_agenda",
			"id_pengguna",
			"tanggal",
			"uraian",
			"keterangan",
			"tanggal_kunjungan" 
		];
	}
}
