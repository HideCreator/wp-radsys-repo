<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\InventarisAddRequest;
use App\Http\Requests\InventarisEditRequest;
use App\Models\Inventaris;
use Illuminate\Http\Request;
use Exception;
class InventarisController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.inventaris.list";
		$query = Inventaris::query();
		$limit = $request->limit ?? 20;
		if($request->search){
			$search = trim($request->search);
			Inventaris::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "inventaris.id_balat";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, Inventaris::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = Inventaris::query();
		$record = $query->findOrFail($rec_id, Inventaris::viewFields());
		return $this->renderView("pages.inventaris.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.inventaris.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(InventarisAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save Inventaris record
		$record = Inventaris::create($modeldata);
		$rec_id = $record->id_balat;
		return $this->redirect("inventaris", "Record added successfully");
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(InventarisEditRequest $request, $rec_id = null){
		$query = Inventaris::query();
		$record = $query->findOrFail($rec_id, Inventaris::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("inventaris", "Record updated successfully");
		}
		return $this->renderView("pages.inventaris.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = Inventaris::query();
		$query->whereIn("id_balat", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, "Record deleted successfully");
	}
}
