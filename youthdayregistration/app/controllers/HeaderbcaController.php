<?php 
/**
 * Headerbca Page Controller
 * @category  Controller
 */
class HeaderbcaController extends SecureController{
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
		$tablename = $this->tablename = 'headerbca';
		$fields = array('norek', 
			'nama', 
			'tgl', 
			'muang', 
			'saldo');
		$limit = $this->get_page_limit(MAX_RECORD_COUNT); // return pagination from BaseModel Class e.g array(5,20)
		$getdata = $this->getdata; //array of sanitized values passed via $_GET;
		if(!empty($this->search)){
			$text = trim($this->search);
			$db->where("(norek LIKE ? OR nama LIKE ? OR tgl LIKE ? OR muang LIKE ? OR saldo LIKE ?)", array("%$text%","%$text%","%$text%","%$text%","%$text%"));
		}
		if(!empty($this->orderby)){ // when order by request fields (from $_GET param)
			$db->orderBy($this->orderby,$this->ordertype);
		}
		else{
			$db->orderBy('headerbca.norek', ORDER_TYPE);
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
		$this->view->page_title ="Informasi Rekening";
		$this->view->render('headerbca/list.php' , $data ,'main_layout.php');
	}
// No View Function Generated Because No Field is Defined as the Primary Key on the Database Table
	/**
     * Add New Record Action 
     * If Not $_POST Request, Display Add Record Form View
     * @return View
     */
	function add(){
		if(is_post_request()){
			Csrf :: cross_check();
			$db = $this->GetModel();
			$tablename = $this->tablename = 'headerbca';
			$fields = $this->fields = array('norek','nama','tgl','muang','saldo'); //insert fields
			$postdata = $this->transform_request_data($_POST);
			$this->rules_array = array(
				'norek' => 'required',
				'nama' => 'required',
				'tgl' => 'required',
				'muang' => 'required',
				'saldo' => 'required',
			);
			$this->sanitize_array = array(
				'norek' => 'sanitize_string',
				'nama' => 'sanitize_string',
				'tgl' => 'sanitize_string',
				'muang' => 'sanitize_string',
				'saldo' => 'sanitize_string',
			);
			$this->filter_vals = true; //set whether to remove empty fields
			$modeldata = $this -> modeldata = $this->validate_form($postdata);
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
							redirect_to_page("headerbca");
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
		$this->view->page_title ="Add New Headerbca";
		$this->view->render('headerbca/add.php' ,null,'main_layout.php');
	}
// No Edit Function Generated Because No Field is Defined as the Primary Key
// No Delete Function Generated Because No Field is Defined as the Primary Key on the Database Table/View
}
