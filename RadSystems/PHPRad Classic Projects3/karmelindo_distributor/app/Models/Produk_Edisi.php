<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Produk_Edisi extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'produk_edisi';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'kd_produk';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'kd_internal','kd_isbn_issn','judul','jenis','satuan','harga_dasar','harga_jual','stok_awal','judul_lama','kode_tahun','kode_bulan'
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
				kd_internal LIKE ?  OR 
				kd_isbn_issn LIKE ?  OR 
				judul LIKE ?  OR 
				jenis LIKE ?  OR 
				satuan LIKE ?  OR 
				judul_lama LIKE ?  OR 
				kode_tahun LIKE ?  OR 
				kode_bulan LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
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
			"kd_produk",
			"kd_internal",
			"kd_isbn_issn",
			"judul",
			"jenis",
			"satuan",
			"harga_dasar",
			"harga_jual",
			"stok_awal",
			"judul_lama",
			"kode_tahun",
			"kode_bulan" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"kd_produk",
			"kd_internal",
			"kd_isbn_issn",
			"judul",
			"jenis",
			"satuan",
			"harga_dasar",
			"harga_jual",
			"stok_awal",
			"judul_lama",
			"kode_tahun",
			"kode_bulan" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"kd_produk",
			"kd_internal",
			"kd_isbn_issn",
			"judul",
			"jenis",
			"satuan",
			"harga_dasar",
			"harga_jual",
			"stok_awal",
			"judul_lama",
			"kode_tahun",
			"kode_bulan" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"kd_produk",
			"kd_internal",
			"kd_isbn_issn",
			"judul",
			"jenis",
			"satuan",
			"harga_dasar",
			"harga_jual",
			"stok_awal",
			"judul_lama",
			"kode_tahun",
			"kode_bulan" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"kd_produk",
			"kd_internal",
			"kd_isbn_issn",
			"judul",
			"jenis",
			"satuan",
			"harga_dasar",
			"harga_jual",
			"stok_awal",
			"judul_lama",
			"kode_tahun",
			"kode_bulan" 
		];
	}
}
