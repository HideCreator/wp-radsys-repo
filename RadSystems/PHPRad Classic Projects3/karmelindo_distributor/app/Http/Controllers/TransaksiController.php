<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TransaksiAddRequest;
use App\Http\Requests\TransaksiEditRequest;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Exception;
class TransaksiController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.transaksi.list";
		$query = Transaksi::query();
		$limit = $request->limit ?? 20;
		if($request->search){
			$search = trim($request->search);
			Transaksi::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "transaksi.kd_db_trk";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, Transaksi::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = Transaksi::query();
		$record = $query->findOrFail($rec_id, Transaksi::viewFields());
		return $this->renderView("pages.transaksi.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.transaksi.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(TransaksiAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save Transaksi record
		$record = Transaksi::create($modeldata);
		$rec_id = $record->kd_db_trk;
		return $this->redirect("transaksi", "Record added successfully");
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(TransaksiEditRequest $request, $rec_id = null){
		$query = Transaksi::query();
		$record = $query->findOrFail($rec_id, Transaksi::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("transaksi", "Record updated successfully");
		}
		return $this->renderView("pages.transaksi.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = Transaksi::query();
		$query->whereIn("kd_db_trk", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, "Record deleted successfully");
	}
}
