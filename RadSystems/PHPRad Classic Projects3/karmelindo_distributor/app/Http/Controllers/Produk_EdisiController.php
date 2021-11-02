<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\Produk_EdisiAddRequest;
use App\Http\Requests\Produk_EdisiEditRequest;
use App\Models\Produk_Edisi;
use Illuminate\Http\Request;
use Exception;
class Produk_EdisiController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.produk_edisi.list";
		$query = Produk_Edisi::query();
		$limit = $request->limit ?? 20;
		if($request->search){
			$search = trim($request->search);
			Produk_Edisi::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "produk_edisi.kd_produk";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, Produk_Edisi::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = Produk_Edisi::query();
		$record = $query->findOrFail($rec_id, Produk_Edisi::viewFields());
		return $this->renderView("pages.produk_edisi.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.produk_edisi.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(Produk_EdisiAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save Produk_Edisi record
		$record = Produk_Edisi::create($modeldata);
		$rec_id = $record->kd_produk;
		$this->afterAdd($record);
		return $this->redirect("produk_edisi", "Record added successfully");
	}
    /**
     * After new record created
     * @param array $record // newly created record
     */
    private function afterAdd($record){
        //enter statement here
    }
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(Produk_EdisiEditRequest $request, $rec_id = null){
		$query = Produk_Edisi::query();
		$record = $query->findOrFail($rec_id, Produk_Edisi::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("produk_edisi", "Record updated successfully");
		}
		return $this->renderView("pages.produk_edisi.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = Produk_Edisi::query();
		$query->whereIn("kd_produk", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, "Record deleted successfully");
	}
}
