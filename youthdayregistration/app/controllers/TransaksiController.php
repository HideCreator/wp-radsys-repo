<?php 
/**
 * Transaksi Page Controller
 * @category  Controller
 */
class TransaksiController extends SecureController{
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
		$tablename = $this->tablename = 'transaksi';
		$fields = array('kd_transaksi', 
			'kode_booking', 
			'timestamp_dibuat', 
			'kd_akun', 
			'nama_akun', 
			'total_bayar', 
			'total_transfer', 
			'konfirmasi_transfer', 
			'konfirmasi_transfer_tanggal', 
			'IF((SELECT mutasi FROM detailbca WHERE mutasi LIKE concat(transaksi.total_transfer,"%")),"Ada","Belum") AS mutasi', 
			'verfikasi_lunas', 
			'konfirmasi_transfer_catatan', 
			'status');
		$limit = $this->get_page_limit(MAX_RECORD_COUNT); // return pagination from BaseModel Class e.g array(5,20)
		$getdata = $this->getdata; //array of sanitized values passed via $_GET;
		if(!empty($this->search)){
			$text = trim($this->search);
			$db->where("(kd_transaksi LIKE ? OR kode_booking LIKE ? OR timestamp_dibuat LIKE ? OR kd_akun LIKE ? OR nama_akun LIKE ? OR total_bayar LIKE ? OR total_transfer LIKE ? OR konfirmasi_transfer LIKE ? OR konfirmasi_transfer_tanggal LIKE ? OR verfikasi_lunas LIKE ? OR konfirmasi_transfer_catatan LIKE ? OR konfirmasi_transfer_upload LIKE ? OR timestamp_diperbarui LIKE ? OR konfirmasi_transfer_atas_nama LIKE ? OR konfirmasi_transfer_bank LIKE ? OR paket_acara LIKE ? OR timestamp_expired LIKE ? OR status LIKE ?)", array("%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"));
		}
		if(!empty($this->orderby)){ // when order by request fields (from $_GET param)
			$db->orderBy($this->orderby,$this->ordertype);
		}
		else{
			$db->orderBy('transaksi.kd_transaksi', ORDER_TYPE);
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
		$this->view->page_title ="Order List";
		$this->view->render('transaksi/list.php' , $data ,'main_layout.php');
	}
	/**
     * View Record Action 
     * @return View
     */
	function view( $rec_id = null , $value = null){
		$db = $this->GetModel();
		$this->rec_id = $rec_id;
		$tablename = $this->tablename = 'transaksi';
		$fields = array('kd_transaksi', 
			'kode_booking', 
			'timestamp_dibuat', 
			'timestamp_diperbarui', 
			'kd_akun', 
			'nama_akun', 
			'total_bayar', 
			'total_transfer', 
			'konfirmasi_transfer', 
			'verfikasi_lunas', 
			'konfirmasi_transfer_upload', 
			'konfirmasi_transfer_atas_nama', 
			'konfirmasi_transfer_bank', 
			'konfirmasi_transfer_catatan', 
			'konfirmasi_transfer_tanggal', 
			'paket_acara', 
			'timestamp_expired', 
			'status', 
			'(SELECT telp FROM akun WHERE kd_akun=transaksi.kd_akun) AS telp_akun', 
			'(SELECT email FROM akun WHERE kd_akun=transaksi.kd_akun) AS email_akun', 
			'(SELECT count(*) FROM peserta WHERE peserta.kd_transaksi=transaksi.kd_transaksi AND status not LIKE "deleted") AS qty_peserta');
		$getdata = $this->getdata; //array of sanitized values passed via $_GET;
		//$db->rawQuery("UPDATE transaksi SET status = 'expired' WHERE kd_transaksi = '$rec_id' AND timestamp_expired < now() AND status LIKE 'active' AND konfirmasi_transfer LIKE 'none'");
$db->rawQuery("UPDATE transaksi SET verfikasi_lunas = IF((SELECT mutasi FROM detailbca WHERE mutasi LIKE concat(transaksi.total_transfer,'%')),'Verified','none') WHERE `kd_transaksi` = '$rec_id' AND `konfirmasi_transfer` LIKE 'Confirmed' AND `verfikasi_lunas` LIKE 'none'");
		if( !empty($value) ){
			$db->where($rec_id, urldecode($value));
		}
		else{
			$db->where('transaksi.kd_transaksi' , $rec_id);
		}
		$record = $db->getOne($tablename, $fields );
		if(!empty($record)){
			//$db->rawQuery("UPDATE transaksi SET status = 'expired' WHERE kd_transaksi = '$rec_id' AND timestamp_expired < now() AND status LIKE 'active' AND konfirmasi_transfer LIKE 'none'");
			$this->view->page_title ="Order Details";
			$this->view->render('transaksi/view.php' , $record ,'main_layout.php');
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
			$this->view->render('transaksi/view.php' , $record , 'main_layout.php');
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
			$tablename = $this->tablename = 'transaksi';
			$fields = $this->fields = array('kode_booking','timestamp_dibuat','kd_akun','nama_akun','paket_acara','timestamp_expired'); //insert fields
			$postdata = $this->transform_request_data($_POST);
			$this->rules_array = array(
				'paket_acara' => 'required',
			);
			$this->sanitize_array = array(
				'paket_acara' => 'sanitize_string',
			);
			$this->filter_vals = true; //set whether to remove empty fields
			$modeldata = $this -> modeldata = $this->validate_form($postdata);
			$modeldata['kode_booking']=random_str($limit=5,$context='ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890');
$modeldata['timestamp_dibuat']=datetime_now();
$modeldata['kd_akun']=USER_ID;
$modeldata['nama_akun']=USER_NAME;
$modeldata['timestamp_expired']=date("Y-m-d H:i:s", strtotime('+36 hours'));
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
							redirect_to_page("peserta/add?kd_transaksi=$rec_id&kode_booking=$modeldata[kode_booking]&paket_acara=$modeldata[paket_acara]");
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
		$this->view->page_title ="Create New order";
		$this->view->render('transaksi/add.php' ,null,'main_layout.php');
	}
	/**
     * Edit Record Action 
     * If Not $_POST Request, Display Edit Record Form View
     * @return View
     */
	function edit($rec_id = null){
		$db = $this->GetModel();
		$this->rec_id = $rec_id;
		$tablename = $this->tablename = 'transaksi';
		$fields = $this->fields = array('kd_transaksi','konfirmasi_transfer'); //editable fields
		if(is_post_request()){
			Csrf :: cross_check();
			$postdata = $this->transform_request_data($_POST);
			$this->rules_array = array(
				'konfirmasi_transfer' => 'required',
			);
			$this->sanitize_array = array(
				'konfirmasi_transfer' => 'sanitize_string',
			);
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			if(empty($this->view->page_error)){
				$db->where('transaksi.kd_transaksi' , $rec_id);
				$bool = $db->update($tablename, $modeldata);
				$numRows = $db->getRowCount(); //number of affected rows. 0 = no record field updated
				if($bool && $numRows){
					if(is_ajax()){
						render_json("Record updated successfully");
					}
					else{
						set_flash_msg('','');
						if(!empty($this->redirect)){ 
							redirect_to_page($this->redirect); //if redirect url is passed via $_GET
						}
						else{
							redirect_to_page("transaksi");
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
								redirect_to_page("transaksi");
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
		$db->where('transaksi.kd_transaksi' , $rec_id);
		$data = $db->getOne($tablename, $fields);
		$this->view->page_title ="Edit  Transaksi";
		if(!empty($data)){
			$this->view->render('transaksi/edit.php' , $data, 'main_layout.php');
		}
		else{
			if($db->getLastError()){
				$this->view->page_error[] = $db->getLastError();
			}
			else{
				$this->view->page_error[] = "No record found";
			}
			$this->view->render('transaksi/edit.php' , $data , 'main_layout.php');
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
		$tablename = $this->tablename = 'transaksi';
		$fields = $this->fields = array('kd_transaksi','konfirmasi_transfer'); //editable fields
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
				'konfirmasi_transfer' => 'required',
			);
			$this->sanitize_array = array(
				'konfirmasi_transfer' => 'sanitize_string',
			);
			$this->filter_rules = true; //filter validation rules by excluding fields not in the POST Data
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			if(empty($this->view->page_error)){
				$db->where('transaksi.kd_transaksi' , $rec_id);
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
		$tablename = $this->tablename = 'transaksi';
		//split record id separated by comma into array
		$arr_id = explode(',', $rec_ids);
		//set query conditions for all records that will be deleted
		foreach($arr_id as $rec_id){
			$db->where('transaksi.kd_transaksi' , $rec_id,"=",'OR');
		}
		$bool = $db->update($tablename, array( 'status' => "deleted" ));
		if($bool){
			$db->rawQuery("UPDATE peserta SET 
status = 'deleted'
WHERE peserta.kd_transaksi = '$rec_id'"); 
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
			redirect_to_page("transaksi/deleteredirect/$rec_id");
		}
	}
	/**
     * Load Record Action 
     * $arg1 Field Name
     * $arg2 Field Value 
     * $param $arg1 string
     * $param $arg1 string
     * @return View
     */
	function listpartcipant($fieldname = null , $fieldvalue = null){
		$db = $this->GetModel();
		$tablename = $this->tablename = 'transaksi';
		$fields = array('kd_transaksi', 
			'paket_acara', 
			'timestamp_dibuat', 
			'total_transfer', 
			'konfirmasi_transfer', 
			'verfikasi_lunas', 
			'status', 
			'(SELECT count(*) FROM peserta WHERE peserta.kd_transaksi=transaksi.kd_transaksi AND status not LIKE "deleted") AS qty_peserta');
		$limit = $this->get_page_limit(MAX_RECORD_COUNT); // return pagination from BaseModel Class e.g array(5,20)
		$getdata = $this->getdata; //array of sanitized values passed via $_GET;
		if(!empty($this->search)){
			$text = trim($this->search);
			$db->where("(kd_transaksi LIKE ? OR paket_acara LIKE ? OR kode_booking LIKE ? OR total_transfer LIKE ? OR konfirmasi_transfer LIKE ? OR verfikasi_lunas LIKE ? OR status LIKE ?)", array("%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"));
		}
		if(!empty($this->orderby)){ // when order by request fields (from $_GET param)
			$db->orderBy($this->orderby,$this->ordertype);
		}
		else{
			$db->orderBy('transaksi.kd_transaksi', ORDER_TYPE);
		}
		$db->where("status NOT LIKE 'deleted' AND kd_akun='".USER_ID."'");
		if( !empty($fieldname) ){
			$db->where($fieldname , $fieldvalue);
		}
		//page filter command
		$tc = $db->withTotalCount();
		$records = $db->get($tablename, $limit, $fields);
		if(	!empty($records)){
			foreach($records as &$record){
				$record['total_transfer'] = approximate($record['total_transfer'],0);
			}
		}
		$data = new stdClass;
		$data->records = $records;
		$data->record_count = count($records);
		$data->total_records = intval($tc->totalCount);
		if($db->getLastError()){
			$page_error = $db->getLastError();
			$this->view->page_error = $page_error;
		}
		$this->view->page_title ="Order List";
		$this->view->render('transaksi/listpartcipant.php' , $data ,'main_layout.php');
	}
	/**
     * Edit Record Action 
     * If Not $_POST Request, Display Edit Record Form View
     * @return View
     */
	function konfirmasi($rec_id = null){
		$db = $this->GetModel();
		$this->rec_id = $rec_id;
		$tablename = $this->tablename = 'transaksi';
		$fields = $this->fields = array('kd_transaksi','konfirmasi_transfer','konfirmasi_transfer_upload','konfirmasi_transfer_atas_nama','konfirmasi_transfer_bank','konfirmasi_transfer_catatan','konfirmasi_transfer_tanggal'); //editable fields
		if(is_post_request()){
			Csrf :: cross_check();
			$postdata = $this->transform_request_data($_POST);
			$this->rules_array = array(
				'konfirmasi_transfer_atas_nama' => 'required',
				'konfirmasi_transfer_bank' => 'required',
				'konfirmasi_transfer_tanggal' => 'required',
			);
			$this->sanitize_array = array(
				'konfirmasi_transfer_upload' => 'sanitize_string',
				'konfirmasi_transfer_atas_nama' => 'sanitize_string',
				'konfirmasi_transfer_bank' => 'sanitize_string',
				'konfirmasi_transfer_catatan' => 'sanitize_string',
				'konfirmasi_transfer_tanggal' => 'sanitize_string',
			);
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			$modeldata['konfirmasi_transfer']="Confirmed";
			if(empty($this->view->page_error)){
				//get files link to be deleted before updating records
				$file_fields = array('konfirmasi_transfer_upload'); //list of file fields
				$db->where('transaksi.kd_transaksi' , $rec_id);
				$fields_file_paths = $db->getOne($tablename, $file_fields);
				$db->where('transaksi.kd_transaksi' , $rec_id);
				$bool = $db->update($tablename, $modeldata);
				$numRows = $db->getRowCount(); //number of affected rows. 0 = no record field updated
				if($bool && $numRows){
					if(!empty($fields_file_paths)){
						foreach($file_fields as $field){
							$files = explode(',', $fields_file_paths[$field]); // for list of files separated by comma
							foreach($files as $file){
								//delete files which are not among the submited post data
								if(stripos($modeldata[$field], $file) === false ){
									$file_dir_path = str_ireplace( SITE_ADDR , "" , $file ) ;
									@unlink($file_dir_path);
								}
							}
						}
					}
					$db->rawQuery("UPDATE peserta SET 
konfirmasi_transfer = 'Confirmed'
WHERE peserta.kd_transaksi = '$rec_id'");
					if(is_ajax()){
						render_json("Record updated successfully");
					}
					else{
						set_flash_msg('','');
						if(!empty($this->redirect)){ 
							redirect_to_page($this->redirect); //if redirect url is passed via $_GET
						}
						else{
							redirect_to_page("transaksi/view/$rec_id");
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
								redirect_to_page("transaksi/view/$rec_id");
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
		$db->where('transaksi.kd_transaksi' , $rec_id);
		$data = $db->getOne($tablename, $fields);
		$this->view->page_title ="Payment Confirmation";
		if(!empty($data)){
			$this->view->render('transaksi/konfirmasi.php' , $data, 'main_layout.php');
		}
		else{
			if($db->getLastError()){
				$this->view->page_error[] = $db->getLastError();
			}
			else{
				$this->view->page_error[] = "No record found";
			}
			$this->view->render('transaksi/konfirmasi.php' , $data , 'main_layout.php');
		}
	}
	/**
     * View Record Action 
     * @return View
     */
	function deleteredirect( $rec_id = null , $value = null){
		$db = $this->GetModel();
		$this->rec_id = $rec_id;
		$tablename = $this->tablename = 'transaksi';
		$fields = array('kd_transaksi', 
			'kode_booking', 
			'timestamp_dibuat', 
			'timestamp_diperbarui', 
			'kd_akun', 
			'nama_akun', 
			'total_bayar', 
			'total_transfer', 
			'konfirmasi_transfer', 
			'verfikasi_lunas', 
			'konfirmasi_transfer_upload', 
			'konfirmasi_transfer_atas_nama', 
			'konfirmasi_transfer_bank', 
			'konfirmasi_transfer_catatan', 
			'konfirmasi_transfer_tanggal', 
			'paket_acara', 
			'timestamp_expired', 
			'status');
		$getdata = $this->getdata; //array of sanitized values passed via $_GET;
		if( !empty($value) ){
			$db->where($rec_id, urldecode($value));
		}
		else{
			$db->where('transaksi.kd_transaksi' , $rec_id);
		}
		$record = $db->getOne($tablename, $fields );
		if(!empty($record)){
			$this->view->page_title ="View  Transaksi";
			$this->view->render('transaksi/deleteredirect.php' , $record ,'main_layout.php');
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
			$this->view->render('transaksi/deleteredirect.php' , $record , 'main_layout.php');
		}
	}
	/**
     * View Record Action 
     * @return View
     */
	function cetak( $rec_id = null , $value = null){
		$db = $this->GetModel();
		$this->rec_id = $rec_id;
		$tablename = $this->tablename = 'transaksi';
		$fields = array('kd_transaksi', 
			'kode_booking', 
			'timestamp_dibuat', 
			'timestamp_diperbarui', 
			'kd_akun', 
			'nama_akun', 
			'total_bayar', 
			'total_transfer', 
			'konfirmasi_transfer', 
			'verfikasi_lunas', 
			'konfirmasi_transfer_upload', 
			'konfirmasi_transfer_atas_nama', 
			'konfirmasi_transfer_bank', 
			'konfirmasi_transfer_catatan', 
			'konfirmasi_transfer_tanggal', 
			'paket_acara', 
			'timestamp_expired', 
			'status', 
			'(SELECT telp FROM akun WHERE kd_akun=transaksi.kd_akun) AS telp_akun', 
			'(SELECT email FROM akun WHERE kd_akun=transaksi.kd_akun) AS email_akun');
		$getdata = $this->getdata; //array of sanitized values passed via $_GET;
		if( !empty($value) ){
			$db->where($rec_id, urldecode($value));
		}
		else{
			$db->where('transaksi.kd_transaksi' , $rec_id);
		}
		$record = $db->getOne($tablename, $fields );
		if(!empty($record)){
			$record['total_transfer'] = approximate($record['total_transfer'],0);
			$this->view->page_title ="Order Details";
			$this->view->render('transaksi/cetak.php' , $record ,'main_layout.php');
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
			$this->view->render('transaksi/cetak.php' , $record , 'main_layout.php');
		}
	}
}
