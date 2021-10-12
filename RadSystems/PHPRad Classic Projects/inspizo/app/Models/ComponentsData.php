<?php 
namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
/**
 * Components data Model
 * Use for getting values from the database for page components
 * Support raw query builder
 * @category Model
 */
class ComponentsData{
	

	/**
     * id_pelanggan_option_list Model Action
     * @return array
     */
	function id_pelanggan_option_list(){
		$sqltext = "SELECT  DISTINCT id_pelanggan AS value,nama_pelanggan AS label FROM pelanggan";
		$query_params = [];
		$arr = DB::select(DB::raw($sqltext), $query_params);
		return $arr;
	}
	

	/**
     * Check if value already exist in Pelanggan table
	 * @param string $value
     * @return bool
     */
	function pelanggan_telp_value_exist(Request $request){
		$value = trim($request->value);
		$exist = DB::table('pelanggan')->where('telp', $value)->value('telp');   
		if($exist){
			return true;
		}
		return false;
	}
	

	/**
     * Check if value already exist in Pengguna table
	 * @param string $value
     * @return bool
     */
	function pengguna_username_value_exist(Request $request){
		$value = trim($request->value);
		$exist = DB::table('pengguna')->where('username', $value)->value('username');   
		if($exist){
			return true;
		}
		return false;
	}
	

	/**
     * id_pengguna_option_list Model Action
     * @return array
     */
	function id_pengguna_option_list(){
		$sqltext = "SELECT  DISTINCT id_pengguna AS value,username AS label FROM pengguna";
		$query_params = [];
		$arr = DB::select(DB::raw($sqltext), $query_params);
		return $arr;
	}
	

	/**
     * nama_balat_option_list Model Action
     * @return array
     */
	function nama_balat_option_list(){
		$sqltext = "SELECT  DISTINCT nama_balat AS value,nama_balat AS label FROM inventaris ORDER BY id_balat ASC";
		$query_params = [];
		$arr = DB::select(DB::raw($sqltext), $query_params);
		return $arr;
	}
	

	/**
     * mengetahui_option_list Model Action
     * @return array
     */
	function mengetahui_option_list(){
		$sqltext = "SELECT  DISTINCT id_pengguna AS value,username AS label FROM pengguna";
		$query_params = [];
		$arr = DB::select(DB::raw($sqltext), $query_params);
		return $arr;
	}
}
