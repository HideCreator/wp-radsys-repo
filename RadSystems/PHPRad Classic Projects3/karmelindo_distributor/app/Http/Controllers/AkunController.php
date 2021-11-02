<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\AkunAddRequest;
use App\Http\Requests\AkunEditRequest;
use App\Models\Akun;
use Illuminate\Http\Request;
use Exception;
class AkunController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.akun.list";
		$query = Akun::query();
		$limit = $request->limit ?? 20;
		if($request->search){
			$search = trim($request->search);
			Akun::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "akun.kd_akun";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, Akun::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = Akun::query();
		$record = $query->findOrFail($rec_id, Akun::viewFields());
		return $this->renderView("pages.akun.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.akun.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(AkunAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		$modeldata['password'] = bcrypt($modeldata['password']);
		
		//save Akun record
		$record = Akun::create($modeldata);
		$rec_id = $record->kd_akun;
		return $this->redirect("akun", "Record added successfully");
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(AkunEditRequest $request, $rec_id = null){
		$query = Akun::query();
		$record = $query->findOrFail($rec_id, Akun::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$modeldata['password'] = bcrypt($modeldata['password']);
			$record->update($modeldata);
			return $this->redirect("akun", "Record updated successfully");
		}
		return $this->renderView("pages.akun.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = Akun::query();
		$query->whereIn("kd_akun", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, "Record deleted successfully");
	}
}
