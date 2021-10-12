<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Inventaris extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'inventaris';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'id_balat';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'nama_balat','tanggal','jml_awl','balat_in','balat_out','jml_akh','satuan'
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
				nama_balat LIKE ?  OR 
				jml_awl LIKE ?  OR 
				satuan LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%"
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
			"id_balat",
			"nama_balat",
			"tanggal",
			"jml_awl",
			"balat_in",
			"balat_out",
			"jml_akh",
			"satuan" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"id_balat",
			"nama_balat",
			"tanggal",
			"jml_awl",
			"balat_in",
			"balat_out",
			"jml_akh",
			"satuan" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"id_balat",
			"nama_balat",
			"tanggal",
			"jml_awl",
			"balat_in",
			"balat_out",
			"jml_akh",
			"satuan" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"id_balat",
			"nama_balat",
			"tanggal",
			"jml_awl",
			"balat_in",
			"balat_out",
			"jml_akh",
			"satuan" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"id_balat",
			"nama_balat",
			"tanggal",
			"jml_awl",
			"balat_in",
			"balat_out",
			"jml_akh",
			"satuan" 
		];
	}
}
