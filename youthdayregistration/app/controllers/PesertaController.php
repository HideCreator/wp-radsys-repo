<?php 
/**
 * Peserta Page Controller
 * @category  Controller
 */
class PesertaController extends SecureController{
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
		$tablename = $this->tablename = 'peserta';
		$fields = array('kd_peserta', 
			'harga_paket_acara', 
			'kode_booking', 
			'nama_lengkap', 
			'email', 
			'telp', 
			'asal_sel_komunitas', 
			'asal_kota_kab', 
			'asal_negara', 
			'tgl_lahir', 
			'jenis_kelamin', 
			'transport_pergi', 
			'transport_pulang', 
			'sub_total', 
			'konfirmasi_transfer', 
			'verifikasi_lunas', 
			'status', 
			'kd_kamar', 
			'kd_kelompok', 
			'kd_kelas', 
			'riwayat_kesehatan', 
			'transport_catatan');
		$limit = $this->get_page_limit(MAX_RECORD_COUNT); // return pagination from BaseModel Class e.g array(5,20)
		$getdata = $this->getdata; //array of sanitized values passed via $_GET;
		if(!empty($this->search)){
			$text = trim($this->search);
			$db->where("(kd_peserta LIKE ? OR nama_lengkap LIKE ? OR email LIKE ? OR telp LIKE ? OR asal_sel_komunitas LIKE ? OR tgl_lahir LIKE ? OR jenis_kelamin LIKE ? OR transport_pergi LIKE ? OR transport_pulang LIKE ? OR sub_total LIKE ? OR status LIKE ? OR riwayat_kesehatan LIKE ? OR transport_catatan LIKE ?)", array("%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"));
		}
		if(!empty($this->orderby)){ // when order by request fields (from $_GET param)
			$db->orderBy($this->orderby,$this->ordertype);
		}
		else{
			$db->orderBy('peserta.kd_peserta', ORDER_TYPE);
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
		$this->view->page_title ="Peserta";
		$this->view->render('peserta/list.php' , $data ,'main_layout.php');
	}
	/**
     * Load csv data
     * @return data
     */
	function import_data(){
		if(!empty($_FILES['file'])){
			$finfo = pathinfo($_FILES['file']['name']);
			$ext = strtolower($finfo['extension']);
			if(!in_array($ext , array('csv'))){
				set_flash_msg("File format not supported",'danger');
			}
			else{
			$file_path = $_FILES['file']['tmp_name'];
				if(!empty($file_path)){
					$db = $this->GetModel();
					$tablename = $this->tablename = 'peserta';
					$options = array('table' => $tablename, 'fields' => '', 'delimiter' => ',', 'quote' => '"');
					$data = $db->loadCsvData( $file_path , $options , false );
					if($db->getLastError()){
						set_flash_msg($db->getLastError(),'danger');
					}
					else{
						set_flash_msg("Data imported successfully",'success');
					}
				}
				else{
					set_flash_msg("Error uploading file",'danger');
				}
			}
		}
		else{
			set_flash_msg("No file selected for upload",'warning');
		}
		$list_page = (!empty($_POST['redirect']) ? $_POST['redirect'] : 'peserta/list');
		redirect_to_page($list_page);
	}
	/**
     * View Record Action 
     * @return View
     */
	function view( $rec_id = null , $value = null){
		$db = $this->GetModel();
		$this->rec_id = $rec_id;
		$tablename = $this->tablename = 'peserta';
		$fields = array('kd_peserta', 
			'paket_acara', 
			'harga_paket_acara', 
			'kd_akun', 
			'nama_akun', 
			'kd_transaksi', 
			'kode_booking', 
			'nama_lengkap', 
			'email', 
			'telp', 
			'asal_sel_komunitas', 
			'asal_kota_kab', 
			'asal_negara', 
			'tgl_lahir', 
			'jenis_kelamin', 
			'transport_pergi', 
			'harga_transport_pergi', 
			'transport_pulang', 
			'harga_transport_pulang', 
			'sub_total', 
			'konfirmasi_transfer', 
			'verifikasi_lunas', 
			'alergi_makanan', 
			'catatan', 
			'kehadiran', 
			'timestamp', 
			'status', 
			'kd_kamar', 
			'kd_kelompok', 
			'kd_kelas', 
			'nama_panggilan', 
			'riwayat_kesehatan', 
			'transport_catatan');
		$getdata = $this->getdata; //array of sanitized values passed via $_GET;
		if( !empty($value) ){
			$db->where($rec_id, urldecode($value));
		}
		else{
			$db->where('peserta.kd_peserta' , $rec_id);
		}
		$record = $db->getOne($tablename, $fields );
		if(!empty($record)){
			$this->view->page_title ="View  Peserta";
			$this->view->render('peserta/view.php' , $record ,'main_layout.php');
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
			$this->view->render('peserta/view.php' , $record , 'main_layout.php');
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
			$tablename = $this->tablename = 'peserta';
			$fields = $this->fields = array('paket_acara','kd_akun','nama_akun','kd_transaksi','kode_booking','nama_panggilan','nama_lengkap','jenis_kelamin','email','telp','asal_sel_komunitas','asal_kota_kab','asal_negara','tgl_lahir','transport_pergi','transport_pulang','transport_catatan','alergi_makanan','timestamp','riwayat_kesehatan'); //insert fields
			$postdata = $this->transform_request_data($_POST);
			$this->rules_array = array(
				'paket_acara' => 'required',
				'kd_transaksi' => 'required|numeric',
				'kode_booking' => 'required',
				'nama_panggilan' => 'required',
				'nama_lengkap' => 'required',
				'jenis_kelamin' => 'required',
				'email' => 'valid_email',
				'telp' => 'required|min_len,6',
				'asal_sel_komunitas' => 'required',
				'asal_kota_kab' => 'required|min_len,4',
				'asal_negara' => 'required',
				'tgl_lahir' => 'required',
				'transport_pergi' => 'required',
				'transport_pulang' => 'required',
			);
			$this->sanitize_array = array(
				'paket_acara' => 'sanitize_string',
				'kd_transaksi' => 'sanitize_string',
				'kode_booking' => 'sanitize_string',
				'nama_panggilan' => 'sanitize_string',
				'nama_lengkap' => 'sanitize_string',
				'jenis_kelamin' => 'sanitize_string',
				'email' => 'sanitize_string',
				'telp' => 'sanitize_string',
				'asal_sel_komunitas' => 'sanitize_string',
				'asal_kota_kab' => 'sanitize_string',
				'asal_negara' => 'sanitize_string',
				'tgl_lahir' => 'sanitize_string',
				'transport_pergi' => 'sanitize_string',
				'transport_pulang' => 'sanitize_string',
				'transport_catatan' => 'sanitize_string',
				'alergi_makanan' => 'sanitize_string',
				'riwayat_kesehatan' => 'sanitize_string',
			);
			$this->filter_vals = true; //set whether to remove empty fields
			$modeldata = $this -> modeldata = $this->validate_form($postdata);
			$modeldata['kd_akun']=USER_ID;
$modeldata['nama_akun']=USER_NAME;
$modeldata['timestamp']=datetime_now();
			//Check if Duplicate Record Already Exit In The Database
			$db->where('nama_lengkap',$modeldata['nama_lengkap']);
			if($db->has($tablename)){
				$this->view->page_error[] = $modeldata['nama_lengkap']." Already exist!";
			} 
			if(empty($this->view->page_error)){
				$rec_id = $this->rec_id = $db->insert($tablename, $modeldata);
				if(!empty($rec_id)){
					$db->rawQuery("UPDATE peserta SET 
harga_paket_acara = (SELECT harga_paket_acara FROM paket_acara WHERE paket_acara LIKE '$modeldata[paket_acara]' AND `tgl_mulai_daftar` <= peserta.timestamp AND `tgl_selesai_daftar` >= peserta.timestamp),
harga_transport_pergi = (SELECT harga-IF('$modeldata[transport_pergi]' LIKE '$modeldata[transport_pulang]',diskon_pp/2,0) FROM `transport_pergi` WHERE nama_transport_pergi LIKE '$modeldata[transport_pergi]') ,
harga_transport_pulang = (SELECT harga FROM `transport_pulang` WHERE nama_transport_pulang LIKE '$modeldata[transport_pulang]')-(SELECT IF('$modeldata[transport_pergi]' LIKE '$modeldata[transport_pulang]',diskon_pp/2,0) FROM `transport_pergi` WHERE nama_transport_pergi LIKE '$modeldata[transport_pergi]'),
sub_total=harga_paket_acara+harga_transport_pergi+harga_transport_pulang
WHERE peserta.kd_peserta = '$rec_id'");
$db->rawQuery("UPDATE transaksi SET 
total_bayar = (SELECT sum(sub_total) FROM peserta WHERE kd_transaksi='$modeldata[kd_transaksi]'),
total_transfer = total_bayar+kd_transaksi
WHERE transaksi.kd_transaksi = '$modeldata[kd_transaksi]'");
					if(is_ajax()){
						render_json("Record added successfully");
					}
					else{
						set_flash_msg("Changed successfully",'success');
						if(!empty($this->redirect)){ 
							redirect_to_page($this->redirect); //if redirect url is passed via $_GET
						}
						else{
							redirect_to_page("transaksi/view/$modeldata[kd_transaksi]");
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
		$this->view->page_title ="Add more Participant";
		$this->view->render('peserta/add.php' ,null,'main_layout.php');
	}
	/**
     * Edit Record Action 
     * If Not $_POST Request, Display Edit Record Form View
     * @return View
     */
	function edit($rec_id = null){
		$db = $this->GetModel();
		$this->rec_id = $rec_id;
		$tablename = $this->tablename = 'peserta';
		$fields = $this->fields = array('kd_peserta','paket_acara','kd_akun','nama_akun','kd_transaksi','kode_booking','nama_panggilan','nama_lengkap','jenis_kelamin','email','telp','asal_sel_komunitas','asal_kota_kab','asal_negara','tgl_lahir','transport_pergi','transport_pulang','transport_catatan','alergi_makanan','riwayat_kesehatan'); //editable fields
		if(is_post_request()){
			Csrf :: cross_check();
			$postdata = $this->transform_request_data($_POST);
			$this->rules_array = array(
				'paket_acara' => 'required',
				'kd_transaksi' => 'required|numeric',
				'kode_booking' => 'required',
				'nama_panggilan' => 'required',
				'nama_lengkap' => 'required',
				'jenis_kelamin' => 'required',
				'email' => 'valid_email',
				'telp' => 'required|min_len,6',
				'asal_sel_komunitas' => 'required',
				'asal_kota_kab' => 'required|min_len,4',
				'asal_negara' => 'required',
				'tgl_lahir' => 'required',
				'transport_pergi' => 'required',
				'transport_pulang' => 'required',
			);
			$this->sanitize_array = array(
				'paket_acara' => 'sanitize_string',
				'kd_transaksi' => 'sanitize_string',
				'kode_booking' => 'sanitize_string',
				'nama_panggilan' => 'sanitize_string',
				'nama_lengkap' => 'sanitize_string',
				'jenis_kelamin' => 'sanitize_string',
				'email' => 'sanitize_string',
				'telp' => 'sanitize_string',
				'asal_sel_komunitas' => 'sanitize_string',
				'asal_kota_kab' => 'sanitize_string',
				'asal_negara' => 'sanitize_string',
				'tgl_lahir' => 'sanitize_string',
				'transport_pergi' => 'sanitize_string',
				'transport_pulang' => 'sanitize_string',
				'transport_catatan' => 'sanitize_string',
				'alergi_makanan' => 'sanitize_string',
				'riwayat_kesehatan' => 'sanitize_string',
			);
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			$modeldata['kd_akun']=USER_ID;
$modeldata['nama_akun']=USER_NAME;
			//Check if Duplicate Record Already Exit In The Database
			if(isset($modeldata['nama_lengkap'])){
				$db->where('nama_lengkap',$modeldata['nama_lengkap'])->where('kd_peserta',$rec_id,'!=');
				if($db->has($tablename)){
					$this->view->page_error[] = $modeldata['nama_lengkap']." Already exist!";
				}
			} 
			if(empty($this->view->page_error)){
				$db->where('peserta.kd_peserta' , $rec_id);
				$bool = $db->update($tablename, $modeldata);
				$numRows = $db->getRowCount(); //number of affected rows. 0 = no record field updated
				if($bool && $numRows){
					$db->rawQuery("UPDATE peserta SET 
harga_paket_acara = (SELECT harga_paket_acara FROM paket_acara WHERE paket_acara LIKE '$modeldata[paket_acara]' AND `tgl_mulai_daftar` <= peserta.timestamp AND `tgl_selesai_daftar` >= peserta.timestamp),
harga_transport_pergi = (SELECT harga-IF('$modeldata[transport_pergi]' LIKE '$modeldata[transport_pulang]',diskon_pp/2,0) FROM `transport_pergi` WHERE nama_transport_pergi LIKE '$modeldata[transport_pergi]') ,
harga_transport_pulang = (SELECT harga FROM `transport_pulang` WHERE nama_transport_pulang LIKE '$modeldata[transport_pulang]')-(SELECT IF('$modeldata[transport_pergi]' LIKE '$modeldata[transport_pulang]',diskon_pp/2,0) FROM `transport_pergi` WHERE nama_transport_pergi LIKE '$modeldata[transport_pergi]'),
sub_total=harga_paket_acara+harga_transport_pergi+harga_transport_pulang
WHERE peserta.kd_peserta = '$rec_id'");
$db->rawQuery("UPDATE transaksi SET 
total_bayar = (SELECT sum(sub_total) FROM peserta WHERE kd_transaksi='$modeldata[kd_transaksi]'),
total_transfer = total_bayar+kd_transaksi
WHERE transaksi.kd_transaksi = '$modeldata[kd_transaksi]'");
					if(is_ajax()){
						render_json("Record updated successfully");
					}
					else{
						set_flash_msg('','');
						if(!empty($this->redirect)){ 
							redirect_to_page($this->redirect); //if redirect url is passed via $_GET
						}
						else{
							redirect_to_page("transaksi/view/$modeldata[kd_transaksi]");
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
								redirect_to_page("transaksi/view/$modeldata[kd_transaksi]");
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
		$db->where('peserta.kd_peserta' , $rec_id);
		$data = $db->getOne($tablename, $fields);
		$this->view->page_title ="Edit  Peserta";
		if(!empty($data)){
			$this->view->render('peserta/edit.php' , $data, 'main_layout.php');
		}
		else{
			if($db->getLastError()){
				$this->view->page_error[] = $db->getLastError();
			}
			else{
				$this->view->page_error[] = "No record found";
			}
			$this->view->render('peserta/edit.php' , $data , 'main_layout.php');
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
		$tablename = $this->tablename = 'peserta';
		$fields = $this->fields = array('kd_peserta','paket_acara','kd_akun','nama_akun','kd_transaksi','kode_booking','nama_panggilan','nama_lengkap','jenis_kelamin','email','telp','asal_sel_komunitas','asal_kota_kab','asal_negara','tgl_lahir','transport_pergi','transport_pulang','transport_catatan','alergi_makanan','riwayat_kesehatan'); //editable fields
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
				'kd_transaksi' => 'required|numeric',
				'kode_booking' => 'required',
				'nama_panggilan' => 'required',
				'nama_lengkap' => 'required',
				'jenis_kelamin' => 'required',
				'email' => 'valid_email',
				'telp' => 'required|min_len,6',
				'asal_sel_komunitas' => 'required',
				'asal_kota_kab' => 'required|min_len,4',
				'asal_negara' => 'required',
				'tgl_lahir' => 'required',
				'transport_pergi' => 'required',
				'transport_pulang' => 'required',
			);
			$this->sanitize_array = array(
				'paket_acara' => 'sanitize_string',
				'kd_transaksi' => 'sanitize_string',
				'kode_booking' => 'sanitize_string',
				'nama_panggilan' => 'sanitize_string',
				'nama_lengkap' => 'sanitize_string',
				'jenis_kelamin' => 'sanitize_string',
				'email' => 'sanitize_string',
				'telp' => 'sanitize_string',
				'asal_sel_komunitas' => 'sanitize_string',
				'asal_kota_kab' => 'sanitize_string',
				'asal_negara' => 'sanitize_string',
				'tgl_lahir' => 'sanitize_string',
				'transport_pergi' => 'sanitize_string',
				'transport_pulang' => 'sanitize_string',
				'transport_catatan' => 'sanitize_string',
				'alergi_makanan' => 'sanitize_string',
				'riwayat_kesehatan' => 'sanitize_string',
			);
			$this->filter_rules = true; //filter validation rules by excluding fields not in the POST Data
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			//Check if Duplicate Record Already Exit In The Database
			if(isset($modeldata['nama_lengkap'])){
				$db->where('nama_lengkap',$modeldata['nama_lengkap'])->where('kd_peserta',$rec_id,'!=');
				if($db->has($tablename)){
					$this->view->page_error[] = $modeldata['nama_lengkap']." Already exist!";
				}
			} 
			if(empty($this->view->page_error)){
				$db->where('peserta.kd_peserta' , $rec_id);
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
		$tablename = $this->tablename = 'peserta';
		//split record id separated by comma into array
		$arr_id = explode(',', $rec_ids);
		//set query conditions for all records that will be deleted
		foreach($arr_id as $rec_id){
			$db->where('peserta.kd_peserta' , $rec_id,"=",'OR');
		}
		$bool = $db->update($tablename, array( 'status' => "deleted" ));
		if($bool){
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
			redirect_to_page("peserta/viewdeletetransaksi/$rec_id");
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
	function listcetak($fieldname = null , $fieldvalue = null){
		$db = $this->GetModel();
		$tablename = $this->tablename = 'peserta';
		$fields = array('kd_peserta', 
			'nama_panggilan', 
			'nama_lengkap', 
			'email', 
			'telp', 
			'asal_sel_komunitas', 
			'asal_kota_kab', 
			'tgl_lahir', 
			'jenis_kelamin', 
			'transport_pergi', 
			'harga_transport_pergi', 
			'transport_pulang', 
			'harga_transport_pulang', 
			'sub_total');
		$limit = $this->get_page_limit(50); // return pagination from BaseModel Class e.g array(5,20)
		$getdata = $this->getdata; //array of sanitized values passed via $_GET;
		if(!empty($this->search)){
			$text = trim($this->search);
			$db->where("(nama_panggilan LIKE ? OR kd_kelas LIKE ? OR riwayat_kesehatan LIKE ? OR transport_catatan LIKE ?)", array("%$text%","%$text%","%$text%","%$text%"));
		}
		if(!empty($this->orderby)){ // when order by request fields (from $_GET param)
			$db->orderBy($this->orderby,$this->ordertype);
		}
		else{
			$db->orderBy('peserta.kd_peserta', ORDER_TYPE);
		}
		$db->where("status='active'");
		if( !empty($fieldname) ){
			$db->where($fieldname , $fieldvalue);
		}
		//page filter command
		$tc = $db->withTotalCount();
		$records = $db->get($tablename, $limit, $fields);
		if(	!empty($records)){
			foreach($records as &$record){
				$record['harga_transport_pergi'] = approximate($record['harga_transport_pergi'],0);
$record['harga_transport_pulang'] = approximate($record['harga_transport_pulang'],0);
$record['sub_total'] = approximate($record['sub_total'],0);
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
		$this->view->page_title ="Peserta";
		$this->view->render('peserta/listcetak.php' , $data ,'main_layout.php');
	}
	/**
     * Load Record Action 
     * $arg1 Field Name
     * $arg2 Field Value 
     * $param $arg1 string
     * $param $arg1 string
     * @return View
     */
	function listreadonly($fieldname = null , $fieldvalue = null){
		$db = $this->GetModel();
		$tablename = $this->tablename = 'peserta';
		$fields = array('kd_peserta', 
			'nama_lengkap', 
			'email', 
			'telp', 
			'asal_kota_kab', 
			'tgl_lahir', 
			'jenis_kelamin', 
			'transport_pergi', 
			'transport_pulang', 
			'sub_total', 
			'status');
		$limit = $this->get_page_limit(50); // return pagination from BaseModel Class e.g array(5,20)
		$getdata = $this->getdata; //array of sanitized values passed via $_GET;
		if(!empty($this->search)){
			$text = trim($this->search);
			$db->where("(nama_panggilan LIKE ? OR kd_kelas LIKE ? OR riwayat_kesehatan LIKE ? OR transport_catatan LIKE ?)", array("%$text%","%$text%","%$text%","%$text%"));
		}
		if(!empty($this->orderby)){ // when order by request fields (from $_GET param)
			$db->orderBy($this->orderby,$this->ordertype);
		}
		else{
			$db->orderBy('peserta.kd_peserta', ORDER_TYPE);
		}
		$db->where("status='active'");
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
		$this->view->page_title ="Peserta";
		$this->view->render('peserta/listreadonly.php' , $data ,'main_layout.php');
	}
	/**
     * View Record Action 
     * @return View
     */
	function viewdeletetransaksi( $rec_id = null , $value = null){
		$db = $this->GetModel();
		$this->rec_id = $rec_id;
		$tablename = $this->tablename = 'peserta';
		$fields = array('kd_peserta', 
			'paket_acara', 
			'harga_paket_acara', 
			'kd_akun', 
			'nama_akun', 
			'kd_transaksi', 
			'kode_booking', 
			'nama_lengkap', 
			'email', 
			'telp', 
			'asal_sel_komunitas', 
			'asal_kota_kab', 
			'asal_negara', 
			'tgl_lahir', 
			'jenis_kelamin', 
			'transport_pergi', 
			'harga_transport_pergi', 
			'transport_pulang', 
			'harga_transport_pulang', 
			'sub_total', 
			'konfirmasi_transfer', 
			'verifikasi_lunas', 
			'alergi_makanan', 
			'catatan', 
			'kehadiran', 
			'timestamp', 
			'status', 
			'kd_kamar', 
			'kd_kelompok', 
			'kd_kelas', 
			'nama_panggilan', 
			'riwayat_kesehatan', 
			'transport_catatan');
		$getdata = $this->getdata; //array of sanitized values passed via $_GET;
		if( !empty($value) ){
			$db->where($rec_id, urldecode($value));
		}
		else{
			$db->where('peserta.kd_peserta' , $rec_id);
		}
		$record = $db->getOne($tablename, $fields );
		if(!empty($record)){
			$record['harga_transport_pergi'] = approximate($record['harga_transport_pergi'],0);
$record['harga_transport_pulang'] = approximate($record['harga_transport_pulang'],0);
$record['sub_total'] = approximate($record['sub_total'],0);
			$this->view->page_title ="View  Peserta";
			$this->view->render('peserta/viewdeletetransaksi.php' , $record ,'main_layout.php');
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
			$this->view->render('peserta/viewdeletetransaksi.php' , $record , 'main_layout.php');
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
	function listeditable($fieldname = null , $fieldvalue = null){
		$db = $this->GetModel();
		$tablename = $this->tablename = 'peserta';
		$fields = array('kd_peserta', 
			'nama_lengkap', 
			'email', 
			'telp', 
			'asal_sel_komunitas', 
			'tgl_lahir', 
			'jenis_kelamin', 
			'transport_pergi', 
			'transport_pulang');
		$limit = $this->get_page_limit(50); // return pagination from BaseModel Class e.g array(5,20)
		$getdata = $this->getdata; //array of sanitized values passed via $_GET;
		if(!empty($this->search)){
			$text = trim($this->search);
			$db->where("(kd_peserta LIKE ? OR riwayat_kesehatan LIKE ? OR transport_catatan LIKE ?)", array("%$text%","%$text%","%$text%"));
		}
		if(!empty($this->orderby)){ // when order by request fields (from $_GET param)
			$db->orderBy($this->orderby,$this->ordertype);
		}
		else{
			$db->orderBy('peserta.kd_peserta', ORDER_TYPE);
		}
		$db->where("status='active'");
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
		$this->view->page_title ="Peserta";
		$this->view->render('peserta/listeditable.php' , $data ,'main_layout.php');
	}
	/**
     * Load Record Action 
     * $arg1 Field Name
     * $arg2 Field Value 
     * $param $arg1 string
     * $param $arg1 string
     * @return View
     */
	function listtransportpergi($fieldname = null , $fieldvalue = null){
		$db = $this->GetModel();
		$tablename = $this->tablename = 'peserta';
		$fields = array('kd_peserta', 
			'nama_panggilan', 
			'nama_lengkap', 
			'telp', 
			'asal_kota_kab', 
			'asal_negara', 
			'jenis_kelamin', 
			'harga_transport_pergi', 
			'transport_catatan');
		$limit = $this->get_page_limit(50); // return pagination from BaseModel Class e.g array(5,20)
		$getdata = $this->getdata; //array of sanitized values passed via $_GET;
		if(!empty($this->search)){
			$text = trim($this->search);
			$db->where("(nama_panggilan LIKE ? OR kd_kelas LIKE ? OR riwayat_kesehatan LIKE ? OR transport_catatan LIKE ?)", array("%$text%","%$text%","%$text%","%$text%"));
		}
		if(!empty($this->orderby)){ // when order by request fields (from $_GET param)
			$db->orderBy($this->orderby,$this->ordertype);
		}
		else{
			$db->orderBy('peserta.kd_peserta', ORDER_TYPE);
		}
		$db->where("status='active'");
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
		$this->view->page_title ="Peserta";
		$this->view->render('peserta/listtransportpergi.php' , $data ,'main_layout.php');
	}
	/**
     * Load Record Action 
     * $arg1 Field Name
     * $arg2 Field Value 
     * $param $arg1 string
     * $param $arg1 string
     * @return View
     */
	function listtransportpulang($fieldname = null , $fieldvalue = null){
		$db = $this->GetModel();
		$tablename = $this->tablename = 'peserta';
		$fields = array('kd_peserta', 
			'nama_panggilan', 
			'nama_lengkap', 
			'telp', 
			'asal_kota_kab', 
			'asal_negara', 
			'jenis_kelamin', 
			'harga_transport_pulang', 
			'transport_catatan');
		$limit = $this->get_page_limit(50); // return pagination from BaseModel Class e.g array(5,20)
		$getdata = $this->getdata; //array of sanitized values passed via $_GET;
		if(!empty($this->search)){
			$text = trim($this->search);
			$db->where("(nama_panggilan LIKE ? OR kd_kelas LIKE ? OR riwayat_kesehatan LIKE ? OR transport_catatan LIKE ?)", array("%$text%","%$text%","%$text%","%$text%"));
		}
		if(!empty($this->orderby)){ // when order by request fields (from $_GET param)
			$db->orderBy($this->orderby,$this->ordertype);
		}
		else{
			$db->orderBy('peserta.kd_peserta', ORDER_TYPE);
		}
		$db->where("status='active'");
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
		$this->view->page_title ="Peserta";
		$this->view->render('peserta/listtransportpulang.php' , $data ,'main_layout.php');
	}
	/**
     * Load Record Action 
     * $arg1 Field Name
     * $arg2 Field Value 
     * $param $arg1 string
     * $param $arg1 string
     * @return View
     */
	function listkelompok($fieldname = null , $fieldvalue = null){
		$db = $this->GetModel();
		$tablename = $this->tablename = 'peserta';
		$fields = array('kd_peserta', 
			'nama_panggilan', 
			'nama_lengkap', 
			'telp', 
			'asal_kota_kab', 
			'asal_negara', 
			'jenis_kelamin', 
			'sub_total', 
			'transport_catatan');
		$limit = $this->get_page_limit(50); // return pagination from BaseModel Class e.g array(5,20)
		$getdata = $this->getdata; //array of sanitized values passed via $_GET;
		if(!empty($this->search)){
			$text = trim($this->search);
			$db->where("(nama_panggilan LIKE ? OR kd_kelas LIKE ? OR riwayat_kesehatan LIKE ? OR transport_catatan LIKE ?)", array("%$text%","%$text%","%$text%","%$text%"));
		}
		if(!empty($this->orderby)){ // when order by request fields (from $_GET param)
			$db->orderBy($this->orderby,$this->ordertype);
		}
		else{
			$db->orderBy('peserta.kd_peserta', ORDER_TYPE);
		}
		$db->where("status='active'");
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
		$this->view->page_title ="Peserta";
		$this->view->render('peserta/listkelompok.php' , $data ,'main_layout.php');
	}
	/**
     * Load Record Action 
     * $arg1 Field Name
     * $arg2 Field Value 
     * $param $arg1 string
     * $param $arg1 string
     * @return View
     */
	function listkamar($fieldname = null , $fieldvalue = null){
		$db = $this->GetModel();
		$tablename = $this->tablename = 'peserta';
		$fields = array('kd_peserta', 
			'nama_panggilan', 
			'nama_lengkap', 
			'telp', 
			'asal_kota_kab', 
			'asal_negara', 
			'jenis_kelamin', 
			'sub_total', 
			'transport_catatan');
		$limit = $this->get_page_limit(50); // return pagination from BaseModel Class e.g array(5,20)
		$getdata = $this->getdata; //array of sanitized values passed via $_GET;
		if(!empty($this->search)){
			$text = trim($this->search);
			$db->where("(nama_panggilan LIKE ? OR kd_kelas LIKE ? OR riwayat_kesehatan LIKE ? OR transport_catatan LIKE ?)", array("%$text%","%$text%","%$text%","%$text%"));
		}
		if(!empty($this->orderby)){ // when order by request fields (from $_GET param)
			$db->orderBy($this->orderby,$this->ordertype);
		}
		else{
			$db->orderBy('peserta.kd_peserta', ORDER_TYPE);
		}
		$db->where("status='active'");
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
		$this->view->page_title ="Peserta";
		$this->view->render('peserta/listkamar.php' , $data ,'main_layout.php');
	}
	/**
     * Load Record Action 
     * $arg1 Field Name
     * $arg2 Field Value 
     * $param $arg1 string
     * $param $arg1 string
     * @return View
     */
	function listkelas($fieldname = null , $fieldvalue = null){
		$db = $this->GetModel();
		$tablename = $this->tablename = 'peserta';
		$fields = array('kd_peserta', 
			'nama_panggilan', 
			'nama_lengkap', 
			'telp', 
			'asal_kota_kab', 
			'asal_negara', 
			'jenis_kelamin', 
			'sub_total', 
			'transport_catatan');
		$limit = $this->get_page_limit(50); // return pagination from BaseModel Class e.g array(5,20)
		$getdata = $this->getdata; //array of sanitized values passed via $_GET;
		if(!empty($this->search)){
			$text = trim($this->search);
			$db->where("(nama_panggilan LIKE ? OR kd_kelas LIKE ? OR riwayat_kesehatan LIKE ? OR transport_catatan LIKE ?)", array("%$text%","%$text%","%$text%","%$text%"));
		}
		if(!empty($this->orderby)){ // when order by request fields (from $_GET param)
			$db->orderBy($this->orderby,$this->ordertype);
		}
		else{
			$db->orderBy('peserta.kd_peserta', ORDER_TYPE);
		}
		$db->where("status='active'");
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
		$this->view->page_title ="Peserta";
		$this->view->render('peserta/listkelas.php' , $data ,'main_layout.php');
	}
}
