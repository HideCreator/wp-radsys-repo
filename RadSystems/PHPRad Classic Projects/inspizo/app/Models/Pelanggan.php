<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Pelanggan extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'pelanggan';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'id_pelanggan';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'id_pelanggan','nama_pelanggan','nama_tempat','alamat','telp','jenis_usaha'
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
				nama_pelanggan LIKE ?  OR 
				nama_tempat LIKE ?  OR 
				alamat LIKE ?  OR 
				telp LIKE ?  OR 
				jenis_usaha LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%"
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
			"id_pelanggan",
			"nama_pelanggan",
			"nama_tempat",
			"alamat",
			"telp",
			"jenis_usaha" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"id_pelanggan",
			"nama_pelanggan",
			"nama_tempat",
			"alamat",
			"telp",
			"jenis_usaha" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"id_pelanggan",
			"nama_pelanggan",
			"nama_tempat",
			"alamat",
			"telp",
			"jenis_usaha" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"id_pelanggan",
			"nama_pelanggan",
			"nama_tempat",
			"alamat",
			"telp",
			"jenis_usaha" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"id_pelanggan",
			"nama_pelanggan",
			"nama_tempat",
			"alamat",
			"telp",
			"jenis_usaha" 
		];
	}
}
