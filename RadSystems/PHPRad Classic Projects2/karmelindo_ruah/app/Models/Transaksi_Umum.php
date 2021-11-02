<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Transaksi_Umum extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'transaksi_umum';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'kd_transaksi_umum';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'kode_unik','atas_nama','alamat','kotakab','provinsi','total_bayar','status_bayar','tgl_bayar','catatan','dihapus'
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
				atas_nama LIKE ?  OR 
				alamat LIKE ?  OR 
				kotakab LIKE ?  OR 
				provinsi LIKE ?  OR 
				total_bayar LIKE ?  OR 
				status_bayar LIKE ?  OR 
				catatan LIKE ?  OR 
				dihapus LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
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
			"kd_transaksi_umum",
			"kode_unik",
			"tanggalwaktu",
			"atas_nama",
			"alamat",
			"kotakab",
			"provinsi",
			"total_bayar",
			"status_bayar",
			"tgl_bayar",
			"catatan",
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
			"kd_transaksi_umum",
			"kode_unik",
			"tanggalwaktu",
			"atas_nama",
			"alamat",
			"kotakab",
			"provinsi",
			"total_bayar",
			"status_bayar",
			"tgl_bayar",
			"catatan",
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
			"kd_transaksi_umum",
			"kode_unik",
			"tanggalwaktu",
			"atas_nama",
			"alamat",
			"kotakab",
			"provinsi",
			"total_bayar",
			"status_bayar",
			"tgl_bayar",
			"catatan",
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
			"kd_transaksi_umum",
			"kode_unik",
			"tanggalwaktu",
			"atas_nama",
			"alamat",
			"kotakab",
			"provinsi",
			"total_bayar",
			"status_bayar",
			"tgl_bayar",
			"catatan",
			"dihapus" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"kd_transaksi_umum",
			"kode_unik",
			"atas_nama",
			"alamat",
			"kotakab",
			"provinsi",
			"total_bayar",
			"status_bayar",
			"tgl_bayar",
			"catatan",
			"dihapus" 
		];
	}
}
