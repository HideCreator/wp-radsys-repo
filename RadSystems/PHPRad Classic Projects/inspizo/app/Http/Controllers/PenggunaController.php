<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\PenggunaRegisterRequest;
use App\Http\Requests\PenggunaAccountEditRequest;
use App\Http\Requests\PenggunaAddRequest;
use App\Http\Requests\PenggunaEditRequest;
use App\Models\Pengguna;
use Illuminate\Http\Request;
use Exception;
class PenggunaController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.pengguna.list";
		$query = Pengguna::query();
		$limit = $request->limit ?? 20;
		if($request->search){
			$search = trim($request->search);
			Pengguna::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "pengguna.id_pengguna";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, Pengguna::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = Pengguna::query();
		$record = $query->findOrFail($rec_id, Pengguna::viewFields());
		return $this->renderView("pages.pengguna.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.pengguna.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(PenggunaAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		$modeldata['password'] = bcrypt($modeldata['password']);
		$modeldata['tanggal'] = date_now();
		
		//save Pengguna record
		$record = Pengguna::create($modeldata);
		$rec_id = $record->id_pengguna;
		return $this->redirect("pengguna", "Record added successfully");
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(PenggunaEditRequest $request, $rec_id = null){
		$query = Pengguna::query();
		$record = $query->findOrFail($rec_id, Pengguna::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$modeldata['password'] = bcrypt($modeldata['password']);
			$record->update($modeldata);
			return $this->redirect("pengguna", "Record updated successfully");
		}
		return $this->renderView("pages.pengguna.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = Pengguna::query();
		$query->whereIn("id_pengguna", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, "Record deleted successfully");
	}
}
