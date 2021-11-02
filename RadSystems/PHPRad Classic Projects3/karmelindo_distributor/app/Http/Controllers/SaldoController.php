<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\SaldoAddRequest;
use App\Http\Requests\SaldoEditRequest;
use App\Models\Saldo;
use Illuminate\Http\Request;
use Exception;
class SaldoController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.saldo.list";
		$query = Saldo::query();
		$limit = $request->limit ?? 20;
		$this->beforeList($fieldname, $fieldvalue);
		if($request->search){
			$search = trim($request->search);
			Saldo::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "saldo.kd_db_saldo";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, Saldo::listFields());
		return $this->renderView($view, compact("records"));
	}
    /**
     * Before page list record
     * @param string $fieldname //filter records by table field
     * @param string $fieldvalue //filter value
     */
    private function beforeList($fieldname, $fieldvalue){
        //enter statement here
    }
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = Saldo::query();
		$record = $query->findOrFail($rec_id, Saldo::viewFields());
		return $this->renderView("pages.saldo.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.saldo.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(SaldoAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save Saldo record
		$record = Saldo::create($modeldata);
		$rec_id = $record->kd_db_saldo;
		$this->afterAdd($record);
		return $this->redirect("saldo", "Record added successfully");
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
	function edit(SaldoEditRequest $request, $rec_id = null){
		$query = Saldo::query();
		$record = $query->findOrFail($rec_id, Saldo::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("saldo", "Record updated successfully");
		}
		return $this->renderView("pages.saldo.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = Saldo::query();
		$query->whereIn("kd_db_saldo", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, "Record deleted successfully");
	}
}
