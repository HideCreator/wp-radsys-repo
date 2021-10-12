<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\PresensiAddRequest;
use App\Http\Requests\PresensiEditRequest;
use App\Http\Requests\PresensiAttendRequest;
use App\Http\Requests\PresensiLeaveRequest;
use App\Models\Presensi;
use Illuminate\Http\Request;
use Exception;
class PresensiController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.presensi.list";
		$query = Presensi::query();
		$limit = $request->limit ?? 20;
		if($request->search){
			$search = trim($request->search);
			Presensi::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "presensi.id_presensi";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, Presensi::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = Presensi::query();
		$record = $query->findOrFail($rec_id, Presensi::viewFields());
		return $this->renderView("pages.presensi.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.presensi.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(PresensiAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		$modeldata['id_pengguna'] = auth()->user()->id_pengguna;
		$modeldata['tanggal'] = date_now();
		$modeldata['waktu'] = time_now();
		
		//save Presensi record
		$record = Presensi::create($modeldata);
		$rec_id = $record->id_presensi;
		return $this->redirect("presensi", "Record added successfully");
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(PresensiEditRequest $request, $rec_id = null){
		$query = Presensi::query();
		$record = $query->findOrFail($rec_id, Presensi::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("presensi", "Record updated successfully");
		}
		return $this->renderView("pages.presensi.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = Presensi::query();
		$query->whereIn("id_presensi", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, "Record deleted successfully");
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function attend(){
		return $this->renderView("pages.presensi.attend");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function attend_store(PresensiAttendRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		$modeldata['id_pengguna'] = auth()->user()->id_pengguna;
		$modeldata['tanggal'] = date_now();
		$modeldata['waktu'] = time_now();
		
		//save Presensi record
		$record = Presensi::create($modeldata);
		$rec_id = $record->id_presensi;
		return $this->redirect("presensi", "Record added successfully");
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function leave(){
		return $this->renderView("pages.presensi.leave");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function leave_store(PresensiLeaveRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		$modeldata['id_pengguna'] = auth()->user()->id_pengguna;
		$modeldata['tanggal'] = date_now();
		$modeldata['waktu'] = time_now();
		
		//save Presensi record
		$record = Presensi::create($modeldata);
		$rec_id = $record->id_presensi;
		return $this->redirect("presensi", "Record added successfully");
	}
}
