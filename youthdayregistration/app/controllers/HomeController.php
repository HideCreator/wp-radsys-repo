<?php 

/**
 * Home Page Controller
 * @category  Controller
 */
class HomeController extends SecureController{
	/**
     * Index Action
     * @return View
     */
	function index(){
		if(strtolower(USER_ROLE) == 'participant'){
			$this->view->render("home/participant.php" , null , "main_layout.php");
		}
		elseif(strtolower(USER_ROLE) == 'sekretariat'){
			$this->view->render("home/sekretariat.php" , null , "main_layout.php");
		}
		elseif(strtolower(USER_ROLE) == 'administrator'){
			$this->view->render("home/administrator.php" , null , "main_layout.php");
		}
		elseif(strtolower(USER_ROLE) == 'panitia'){
			$this->view->render("home/panitia.php" , null , "main_layout.php");
		}
		elseif(strtolower(USER_ROLE) == 'transport'){
			$this->view->render("home/transport.php" , null , "main_layout.php");
		}
		else{
			$this->view->render("home/index.php" , null , "main_layout.php");
		}
	}
}
