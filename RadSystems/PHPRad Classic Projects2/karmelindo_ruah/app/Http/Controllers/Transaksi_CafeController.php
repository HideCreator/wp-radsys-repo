<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\Transaksi_CafeAddRequest;
use App\Http\Requests\Transaksi_CafeEditRequest;
use App\Models\Transaksi_Cafe;
use Illuminate\Http\Request;
use \PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\TransaksiCafeListExport;
use App\Exports\TransaksiCafeViewExport;
use Exception;
class Transaksi_CafeController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.transaksi_cafe.list";
		$query = Transaksi_Cafe::query();
		$limit = $request->limit ?? 20;
		if($request->search){
			$search = trim($request->search);
			Transaksi_Cafe::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "transaksi_cafe.kd_db_trk_cafe";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		// if request format is for export example:- product/index?export=pdf
		if($this->getExportFormat()){
			return $this->ExportList($query); // export current query
		}
		$records = $query->paginate($limit, Transaksi_Cafe::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = Transaksi_Cafe::query();
		// if request format is for export example:- product/view/344?export=pdf
		if($this->getExportFormat()){
			return $this->ExportView($query, $rec_id);
		}
		$record = $query->findOrFail($rec_id, Transaksi_Cafe::viewFields());
		return $this->renderView("pages.transaksi_cafe.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.transaksi_cafe.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(Transaksi_CafeAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save Transaksi_Cafe record
		$record = Transaksi_Cafe::create($modeldata);
		$rec_id = $record->kd_db_trk_cafe;
		return $this->redirect("transaksi_cafe/view/$rec_id", "Record added successfully");
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(Transaksi_CafeEditRequest $request, $rec_id = null){
		$query = Transaksi_Cafe::query();
		$record = $query->findOrFail($rec_id, Transaksi_Cafe::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("transaksi_cafe/view/$rec_id", "Record updated successfully");
		}
		return $this->renderView("pages.transaksi_cafe.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = Transaksi_Cafe::query();
		$query->whereIn("kd_db_trk_cafe", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, "Record deleted successfully");
	}
	

	/**
     * Export table records to different format
	 * supported format:- PDF, CSV, EXCEL, HTML
	 * @param \Illuminate\Database\Eloquent\Model $query
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
	private function ExportList($query){
		ob_end_clean(); // clean any output to allow file download
		$filename = "ListTransaksi_CafeReport-" . date_now();
		$format = $this->getExportFormat();
		if($format == "print"){
			$records = $query->get(Transaksi_Cafe::exportListFields());
			return view("reports.transaksi_cafe-list", ["records" => $records]);
		}
		elseif($format == "pdf"){
			$records = $query->get(Transaksi_Cafe::exportListFields());
			$pdf = PDF::loadView("reports.transaksi_cafe-list", ["records" => $records]);
			return $pdf->download("$filename.pdf");
		}
		elseif($format == "csv"){
			return Excel::download(new TransaksiCafeListExport($query), "$filename.csv", \Maatwebsite\Excel\Excel::CSV);
		}
		elseif($format == "excel"){
			return Excel::download(new TransaksiCafeListExport($query), "$filename.xlsx", \Maatwebsite\Excel\Excel::XLSX);
		}
	}
	

	/**
     * Export single record to different format
	 * supported format:- PDF, CSV, EXCEL, HTML
	 * @param \Illuminate\Database\Eloquent\Model $record
	 * @param string $rec_id
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
	private function ExportView($query, $rec_id){
		ob_end_clean();// clean any output to allow file download
		$filename ="ViewTransaksi_CafeReport-" . date_now();
		$format = $this->getExportFormat();
		if($format == "print"){
			$record = $query->findOrFail($rec_id, Transaksi_Cafe::exportViewFields());
			return view("reports.transaksi_cafe-view", ["record" => $record]);
		}
		elseif($format == "pdf"){
			$record = $query->findOrFail($rec_id, Transaksi_Cafe::exportViewFields());
			$pdf = PDF::loadView("reports.transaksi_cafe-view", ["record" => $record]);
			return $pdf->download("$filename.pdf");
		}
		elseif($format == "csv"){
			return Excel::download(new TransaksiCafeViewExport($query, $rec_id), "$filename.csv", \Maatwebsite\Excel\Excel::CSV);
		}
		elseif($format == "excel"){
			return Excel::download(new TransaksiCafeViewExport($query, $rec_id), "$filename.xlsx", \Maatwebsite\Excel\Excel::XLSX);
		}
	}
}
