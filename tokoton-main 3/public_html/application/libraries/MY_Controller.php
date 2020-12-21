<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class AdminController extends Controller {

	function AdminController(){
		parent::Controller();
	

#		$this->load->library('session');
		$this->load->helper(array('form', 'url'));
		
		// セッションログインCHECK----------------------------------------------------------
#		if($this->session->userdata('logged_in')){
		if(isset($_SESSION['admin_login']['logged_in']) and $_SESSION['admin_login']['logged_in']){
			
			
		}else{
			redirect('admin/login/', 'refresh');
		}
		//----------------------------------------------------------------------------------
	}
}

class ClientController extends Controller {

	function ClientController(){
		parent::Controller();
	
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));
		
		
		// セッションログインCHECK----------------------------------------------------------
#		if($this->session->userdata('logged_in')){
		if(isset($_SESSION['login_dat']['logged_in']) and $_SESSION['login_dat']['logged_in']){
		
		}else{
			
			redirect('client/login/', 'refresh');
		}
		//----------------------------------------------------------------------------------
	}
}

?>