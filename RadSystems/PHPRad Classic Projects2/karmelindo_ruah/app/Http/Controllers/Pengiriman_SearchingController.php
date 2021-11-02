<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Pengiriman_Searching;
use Illuminate\Http\Request;
use Exception;
class Pengiriman_SearchingController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.pengiriman_searching.list";
		$query = Pengiriman_Searching::query();
		$limit = $request->limit ?? 20;
		if($request->search){
			$search = trim($request->search);
			Pengiriman_Searching::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "pengiriman_searching.kd_pengiriman";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, Pengiriman_Searching::listFields());
		return $this->renderView($view, compact("records"));
	}
// No View Function Generated Because No Field is Defined as the Primary Key on the Database Table
}
