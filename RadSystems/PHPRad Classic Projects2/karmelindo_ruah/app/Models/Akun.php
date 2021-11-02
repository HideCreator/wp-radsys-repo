<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Akun extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'akun';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'kd_akun';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'username','password','email','role'
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
				username LIKE ?  OR 
				password LIKE ?  OR 
				email LIKE ?  OR 
				role LIKE ? 
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
			"kd_akun",
			"username",
			"password",
			"email",
			"role",
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
			"kd_akun",
			"username",
			"password",
			"email",
			"role",
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
			"kd_akun",
			"username",
			"password",
			"email",
			"role",
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
			"kd_akun",
			"username",
			"password",
			"email",
			"role",
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
			"kd_akun",
			"username",
			"password",
			"email",
			"role" 
		];
	}
}
