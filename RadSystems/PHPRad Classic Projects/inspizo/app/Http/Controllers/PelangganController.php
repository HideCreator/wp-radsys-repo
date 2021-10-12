<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\PelangganAddRequest;
use App\Http\Requests\PelangganEditRequest;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Exception;
class PelangganController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.pelanggan.list";
		$query = Pelanggan::query();
		$limit = $request->limit ?? 20;
		if($request->search){
			$search = trim($request->search);
			Pelanggan::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "pelanggan.id_pelanggan";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, Pelanggan::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = Pelanggan::query();
		$record = $query->findOrFail($rec_id, Pelanggan::viewFields());
		return $this->renderView("pages.pelanggan.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.pelanggan.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(PelangganAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save Pelanggan record
		$record = Pelanggan::create($modeldata);
		$rec_id = $record->id_pelanggan;
		return $this->redirect("pelanggan", "Record added successfully");
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(PelangganEditRequest $request, $rec_id = null){
		$query = Pelanggan::query();
		$record = $query->findOrFail($rec_id, Pelanggan::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("pelanggan", "Record updated successfully");
		}
		return $this->renderView("pages.pelanggan.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = Pelanggan::query();
		$query->whereIn("id_pelanggan", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, "Record deleted successfully");
	}
}
