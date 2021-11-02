<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\PengirimanAddRequest;
use App\Http\Requests\PengirimanEditRequest;
use App\Models\Pengiriman;
use Illuminate\Http\Request;
use Exception;
class PengirimanController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.pengiriman.list";
		$query = Pengiriman::query();
		$limit = $request->limit ?? 20;
		if($request->search){
			$search = trim($request->search);
			Pengiriman::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "pengiriman.kd_pengiriman";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, Pengiriman::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = Pengiriman::query();
		$record = $query->findOrFail($rec_id, Pengiriman::viewFields());
		return $this->renderView("pages.pengiriman.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.pengiriman.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(PengirimanAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save Pengiriman record
		$record = Pengiriman::create($modeldata);
		$rec_id = $record->kd_pengiriman;
		return $this->redirect("pengiriman", "Record added successfully");
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(PengirimanEditRequest $request, $rec_id = null){
		$query = Pengiriman::query();
		$record = $query->findOrFail($rec_id, Pengiriman::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("pengiriman", "Record updated successfully");
		}
		return $this->renderView("pages.pengiriman.edit", ["data" => $record, "rec_id" => $rec_id]);
	}
	

	/**
     * Delete record from the database
	 * Support multi delete by separating record id by comma.
	 * @param  \Illuminate\Http\Request
	 * @param string $rec_id //can be separated by comma 
     * @return \Illuminate\Http\Response
     */
	function delete(Request $request, $rec_id = null){
		$arr_id = explode(",", $rec_id);
		$query = Pengiriman::query();
		$query->whereIn("kd_pengiriman", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, "Record deleted successfully");
	}
}
