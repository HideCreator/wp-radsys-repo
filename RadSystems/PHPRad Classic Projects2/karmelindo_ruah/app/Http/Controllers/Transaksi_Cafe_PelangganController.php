<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Transaksi_Cafe_Pelanggan;
use Illuminate\Http\Request;
use Exception;
class Transaksi_Cafe_PelangganController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.transaksi_cafe_pelanggan.list";
		$query = Transaksi_Cafe_Pelanggan::query();
		$limit = $request->limit ?? 20;
		if($request->search){
			$search = trim($request->search);
			Transaksi_Cafe_Pelanggan::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "transaksi_cafe_pelanggan.kd_trk_cafe";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, Transaksi_Cafe_Pelanggan::listFields());
		return $this->renderView($view, compact("records"));
	}
// No View Function Generated Because No Field is Defined as the Primary Key on the Database Table
}
