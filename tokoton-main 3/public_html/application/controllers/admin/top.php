<?php
class Top extends Controller {
	
	const LOGIN_DIR = 'admin/';
	
	function Top(){
		parent::Controller();
		$this->load->helper(array('url'));
		
	}
	
	function index(){
		/* /admin/ �̕\���������Ȃ����߂̃t�@�C���ł��B*/
		redirect(self::LOGIN_DIR.'login/', 'refresh');
	}

	

}
?>
