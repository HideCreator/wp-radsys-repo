<?php 

/**
 * Report Page Controller
 * @category  Controller
 */
class PeriksamutasiController extends BaseController{
	/**
     * Render All Records  in a  Data Table 
     * @return Html View
     */
	function index(){
		$this->view->render(null , null , "periksamutasi_layout.php");
	}
}