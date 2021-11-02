<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Transaksi_Duplikasi;
use Illuminate\Http\Request;
use Exception;
class Transaksi_DuplikasiController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.transaksi_duplikasi.list";
		$query = Transaksi_Duplikasi::query();
		$limit = $request->limit ?? 20;
		if($request->search){
			$search = trim($request->search);
			Transaksi_Duplikasi::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "transaksi_duplikasi.kd_pelanggan";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, Transaksi_Duplikasi::listFields());
		return $this->renderView($view, compact("records"));
	}
// No View Function Generated Because No Field is Defined as the Primary Key on the Database Table
}
