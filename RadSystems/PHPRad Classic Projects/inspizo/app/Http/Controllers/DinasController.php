<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\DinasAddRequest;
use App\Http\Requests\DinasEditRequest;
use App\Http\Requests\DinasBackRequest;
use App\Models\Dinas;
use Illuminate\Http\Request;
use Exception;
class DinasController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.dinas.list";
		$query = Dinas::query();
		$limit = $request->limit ?? 20;
		if($request->search){
			$search = trim($request->search);
			Dinas::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "dinas.id_dinas";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, Dinas::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = Dinas::query();
		$record = $query->findOrFail($rec_id, Dinas::viewFields());
		return $this->renderView("pages.dinas.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.dinas.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(DinasAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		$modeldata['tanggal'] = date_now();
		
		//save Dinas record
		$record = Dinas::create($modeldata);
		$rec_id = $record->id_dinas;
		return $this->redirect("dinas", "Record added successfully");
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(DinasEditRequest $request, $rec_id = null){
		$query = Dinas::query();
		$record = $query->findOrFail($rec_id, Dinas::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("dinas", "Record updated successfully");
		}
		return $this->renderView("pages.dinas.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = Dinas::query();
		$query->whereIn("id_dinas", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, "Record deleted successfully");
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function back(){
		return $this->renderView("pages.dinas.back");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function back_store(DinasBackRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		$modeldata['tanggal'] = date_now();
		$modeldata['waktu'] = time_now();
		
		//save Dinas record
		$record = Dinas::create($modeldata);
		$rec_id = $record->id_dinas;
		return $this->redirect("dinas", "Record added successfully");
	}
}
