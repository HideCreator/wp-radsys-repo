<?php 
/**
 * Transport_pergi Page Controller
 * @category  Controller
 */
class Transport_pergiController extends SecureController{
	/**
     * Load Record Action 
     * $arg1 Field Name
     * $arg2 Field Value 
     * $param $arg1 string
     * $param $arg1 string
     * @return View
     */
	function index($fieldname = null , $fieldvalue = null){
		$db = $this->GetModel();
		$tablename = $this->tablename = 'transport_pergi';
		$fields = array('kd_transport_pergi', 
			'paket_acara', 
			'nama_transport_pergi', 
			'harga', 
			'nama_baru', 
			'diskon_pp');
		$limit = $this->get_page_limit(MAX_RECORD_COUNT); // return pagination from BaseModel Class e.g array(5,20)
		$getdata = $this->getdata; //array of sanitized values passed via $_GET;
		if(!empty($this->search)){
			$text = trim($this->search);
			$db->where("(kd_transport_pergi LIKE ? OR paket_acara LIKE ? OR nama_transport_pergi LIKE ? OR harga LIKE ? OR nama_baru LIKE ? OR kd_akun LIKE ? OR status LIKE ? OR diskon_pp LIKE ?)", array("%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"));
		}
		if(!empty($this->orderby)){ // when order by request fields (from $_GET param)
			$db->orderBy($this->orderby,$this->ordertype);
		}
		else{
			$db->orderBy('transport_pergi.kd_transport_pergi', ORDER_TYPE);
		}
		if( !empty($fieldname) ){
			$db->where($fieldname , $fieldvalue);
		}
		//page filter command
		$tc = $db->withTotalCount();
		$records = $db->get($tablename, $limit, $fields);
		$data = new stdClass;
		$data->records = $records;
		$data->record_count = count($records);
		$data->total_records = intval($tc->totalCount);
		if($db->getLastError()){
			$page_error = $db->getLastError();
			$this->view->page_error = $page_error;
		}
		$this->view->page_title ="Transport Pergi";
		$this->view->render('transport_pergi/list.php' , $data ,'main_layout.php');
	}
	/**
     * View Record Action 
     * @return View
     */
	function view( $rec_id = null , $value = null){
		$db = $this->GetModel();
		$this->rec_id = $rec_id;
		$tablename = $this->tablename = 'transport_pergi';
		$fields = array('kd_transport_pergi', 
			'paket_acara', 
			'nama_transport_pergi', 
			'harga', 
			'kd_akun', 
			'status', 
			'diskon_pp');
		$getdata = $this->getdata; //array of sanitized values passed via $_GET;
		if( !empty($value) ){
			$db->where($rec_id, urldecode($value));
		}
		else{
			$db->where('transport_pergi.kd_transport_pergi' , $rec_id);
		}
		$record = $db->getOne($tablename, $fields );
		if(!empty($record)){
			$this->view->page_title ="View  Transport Pergi";
			$this->view->render('transport_pergi/view.php' , $record ,'main_layout.php');
		}
		else{
			$page_error = null;
			if($db->getLastError()){
				$page_error = $db->getLastError();
			}
			else{
				$page_error = "No record found";
			}
			$this->view->page_error = $page_error;
			$this->view->render('transport_pergi/view.php' , $record , 'main_layout.php');
		}
	}
	/**
     * Add New Record Action 
     * If Not $_POST Request, Display Add Record Form View
     * @return View
     */
	function add(){
		if(is_post_request()){
			Csrf :: cross_check();
			$db = $this->GetModel();
			$tablename = $this->tablename = 'transport_pergi';
			$fields = $this->fields = array('paket_acara','nama_transport_pergi','harga','kd_akun','status','diskon_pp'); //insert fields
			$postdata = $this->transform_request_data($_POST);
			$this->rules_array = array(
				'paket_acara' => 'required',
				'nama_transport_pergi' => 'required',
				'harga' => 'required|numeric',
				'kd_akun' => 'required|numeric',
				'diskon_pp' => 'required|numeric',
			);
			$this->sanitize_array = array(
				'paket_acara' => 'sanitize_string',
				'nama_transport_pergi' => 'sanitize_string',
				'harga' => 'sanitize_string',
				'kd_akun' => 'sanitize_string',
				'diskon_pp' => 'sanitize_string',
			);
			$this->filter_vals = true; //set whether to remove empty fields
			$modeldata = $this -> modeldata = $this->validate_form($postdata);
			$modeldata['status']="active";
			if(empty($this->view->page_error)){
				$rec_id = $this->rec_id = $db->insert($tablename, $modeldata);
				if(!empty($rec_id)){
					if(is_ajax()){
						render_json("Record added successfully");
					}
					else{
						set_flash_msg("Changed successfully",'success');
						if(!empty($this->redirect)){ 
							redirect_to_page($this->redirect); //if redirect url is passed via $_GET
						}
						else{
							redirect_to_page("transport_pergi");
						}
					}
					return;
				}
				else{
					$page_error = null;
					if($db->getLastError()){
						$page_error = $db->getLastError();
					}
					else{
						$page_error = "Error inserting record";
					}
					if(is_ajax()){
						render_error($page_error); 
						return;
					}
					else{
						$this->view->page_error[] = $page_error;
					}
				}
			}
		}
		$this->view->page_title ="Add New Transport Pergi";
		$this->view->render('transport_pergi/add.php' ,null,'main_layout.php');
	}
	/**
     * Edit Record Action 
     * If Not $_POST Request, Display Edit Record Form View
     * @return View
     */
	function edit($rec_id = null){
		$db = $this->GetModel();
		$this->rec_id = $rec_id;
		$tablename = $this->tablename = 'transport_pergi';
		$fields = $this->fields = array('kd_transport_pergi','paket_acara','nama_transport_pergi','harga','nama_baru','kd_akun','status','diskon_pp'); //editable fields
		if(is_post_request()){
			Csrf :: cross_check();
			$postdata = $this->transform_request_data($_POST);
			$this->rules_array = array(
				'paket_acara' => 'required',
				'nama_transport_pergi' => 'required',
				'harga' => 'required|numeric',
				'kd_akun' => 'required|numeric',
				'diskon_pp' => 'required|numeric',
			);
			$this->sanitize_array = array(
				'paket_acara' => 'sanitize_string',
				'nama_transport_pergi' => 'sanitize_string',
				'harga' => 'sanitize_string',
				'nama_baru' => 'sanitize_string',
				'kd_akun' => 'sanitize_string',
				'diskon_pp' => 'sanitize_string',
			);
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			$modeldata['status']="active";
			if(empty($this->view->page_error)){
				$db->where('transport_pergi.kd_transport_pergi' , $rec_id);
				$bool = $db->update($tablename, $modeldata);
				$numRows = $db->getRowCount(); //number of affected rows. 0 = no record field updated
				if($bool && $numRows){
					if ($modeldata['nama_baru']!="") {
$db->rawQuery("UPDATE peserta SET transport_pergi = '$modeldata[nama_baru]' WHERE  transport_pergi = '$modeldata[nama_transport_pergi]'");
$db->rawQuery("UPDATE transport_pergi SET nama_transport_pergi = '$modeldata[nama_baru]' WHERE nama_transport_pergi = '$modeldata[nama_transport_pergi]'");
$db->rawQuery("UPDATE transport_pergi SET nama_baru = '' WHERE nama_transport_pergi = '$modeldata[nama_baru]'");
};
					if(is_ajax()){
						render_json("Record updated successfully");
					}
					else{
						set_flash_msg('','');
						if(!empty($this->redirect)){ 
							redirect_to_page($this->redirect); //if redirect url is passed via $_GET
						}
						else{
							redirect_to_page("transport_pergi");
						}
					}
					return;
				}
				else{
					$page_error = null;
					if($db->getLastError()){
						$page_error = $db->getLastError();
					}
					elseif(!$numRows){
						$page_error = "No record updated";
						if(is_ajax()){
							render_error($page_error); //return http status error
						}
						else{
							//no changes made to the table record
							set_flash_msg($page_error, 'warning');
							if(!empty($this->redirect)){ 
								redirect_to_page($this->redirect); //if redirect url is passed via $_GET
							}
							else{
								redirect_to_page("transport_pergi");
							}
						}
						return;
					}
					else{
						$page_error = "No record found";
					}
					if(is_ajax()){
						render_error($page_error); //return http status error
						return;
					}
					//continue to display edit page with errors
					$this->view->page_error[] = $page_error;
				}
			}
		}
		$db->where('transport_pergi.kd_transport_pergi' , $rec_id);
		$data = $db->getOne($tablename, $fields);
		$this->view->page_title ="Edit  Transport Pergi";
		if(!empty($data)){
			$this->view->render('transport_pergi/edit.php' , $data, 'main_layout.php');
		}
		else{
			if($db->getLastError()){
				$this->view->page_error[] = $db->getLastError();
			}
			else{
				$this->view->page_error[] = "No record found";
			}
			$this->view->render('transport_pergi/edit.php' , $data , 'main_layout.php');
		}
	}
	/**
     * Edit single field Action 
     * Return record id
     * @return View
     */
	function editfield($rec_id = null){
		$db = $this->GetModel();
		$this->rec_id = $rec_id;
		$tablename = $this->tablename = 'transport_pergi';
		$fields = $this->fields = array('kd_transport_pergi','paket_acara','nama_transport_pergi','harga','nama_baru','kd_akun','status','diskon_pp'); //editable fields
		if(is_post_request()){
			Csrf :: cross_check();
			$postdata = array();
			if(isset($_POST['name']) && isset($_POST['value'])){
				$fieldname = $_POST['name'];
				$fieldvalue = $_POST['value'];
				$postdata[$fieldname] = $fieldvalue;
				$postdata = $this->transform_request_data($postdata);
			}
			else{
				$this->view->page_error = "invalid post data";
			}
			$this->rules_array = array(
				'paket_acara' => 'required',
				'nama_transport_pergi' => 'required',
				'harga' => 'required|numeric',
				'kd_akun' => 'required|numeric',
				'diskon_pp' => 'required|numeric',
			);
			$this->sanitize_array = array(
				'paket_acara' => 'sanitize_string',
				'nama_transport_pergi' => 'sanitize_string',
				'harga' => 'sanitize_string',
				'nama_baru' => 'sanitize_string',
				'kd_akun' => 'sanitize_string',
				'diskon_pp' => 'sanitize_string',
			);
			$this->filter_rules = true; //filter validation rules by excluding fields not in the POST Data
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			if(empty($this->view->page_error)){
				$db->where('transport_pergi.kd_transport_pergi' , $rec_id);
				try{
					$bool = $db->update($tablename, $modeldata);
					$numRows = $db->getRowCount();
					if($bool && $numRows){
						render_json(
							array(
								'num_rows' =>$numRows,
								'rec_id' =>$rec_id,
							)
						);
					}
					else{
						$page_error = null;
						if($db->getLastError()){
							$page_error = $db->getLastError();
						}
						elseif(!$numRows){
							$page_error = "No record updated";
						}
						else{
							$page_error = "No record found";
						}
						render_error($page_error);
					}
				}
				catch(Exception $e){
					render_error($e->getMessage());
				}
			}
			else{
				render_error($this->view->page_error);
			}
		}
		else{
			render_error("Request type not accepted");
		}
	}
	/**
     * Delete Record Action 
     * @return View
     */
	function delete( $rec_ids = null ){
		Csrf :: cross_check();
		$db = $this->GetModel();
		$this->rec_id = $rec_ids;
		$tablename = $this->tablename = 'transport_pergi';
		//split record id separated by comma into array
		$arr_id = explode(',', $rec_ids);
		//set query conditions for all records that will be deleted
		foreach($arr_id as $rec_id){
			$db->where('transport_pergi.kd_transport_pergi' , $rec_id,"=",'OR');
		}
		$bool = $db->delete($tablename);
		if($bool){
			set_flash_msg("Deleted Successfully",'success');
		}
		else{
			$page_error = "";
			if($db->getLastError()){
				$page_error = $db->getLastError();
			}
			else{
				$page_error = "Error deleting the record. please make sure that the record exit";
			}
			set_flash_msg($page_error,'danger');
		}
		if(!empty($this->redirect)){ 
			redirect_to_page($this->redirect); //if redirect url is passed via $_GET
		}
		else{
			redirect_to_page("transport_pergi");
		}
	}
}
