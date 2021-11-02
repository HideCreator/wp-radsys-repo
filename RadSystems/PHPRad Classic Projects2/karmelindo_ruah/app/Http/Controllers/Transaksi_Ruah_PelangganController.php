<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Transaksi_Ruah_Pelanggan;
use Illuminate\Http\Request;
use Exception;
class Transaksi_Ruah_PelangganController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.transaksi_ruah_pelanggan.list";
		$query = Transaksi_Ruah_Pelanggan::query();
		$limit = $request->limit ?? 20;
		if($request->search){
			$search = trim($request->search);
			Transaksi_Ruah_Pelanggan::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "transaksi_ruah_pelanggan.kd_trk_ruah";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, Transaksi_Ruah_Pelanggan::listFields());
		return $this->renderView($view, compact("records"));
	}
// No View Function Generated Because No Field is Defined as the Primary Key on the Database Table
}
