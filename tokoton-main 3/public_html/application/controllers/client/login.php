<?php
class login extends Controller {
	
	const LOGIN_DIR = 'client/';
	
	function login(){
		parent::Controller();
		//ログインライブラリを読み込む
		$this->load->library('client_login');

		$this->load->library('session');
		$this->load->database();
		$this->load->helper(array('form', 'url'));
		$this->load->library('validation');
		$this->output->set_header('Content-Type: text/html; charset=UTF-8');
		$this->load->library('smarty_parser');
		
		$this->load->model('client/loginmodel');
		
	}
	
	function index(){
		
		//初期設定---------------------------------------------------------------------------
		$data = array();
		$error_result = array();
		$err_ck = TRUE;
		//-----------------------------------------------------------------------------------
		
		//入力チェック-----------------------------------------------------------------------
		if($this->input->post('login') == "login" || ($this->input->post('id') != "" || $this->input->post('pwd') != "" || $this->input->get('id') != "" || $this->input->get('pwd') != "")){
			// バリデーション ルール設定
			$rules['id'] = "trim|required|";
			$rules['pwd'] = "trim|required|min_length[6]|max_length[12]";
		
			$this->validation->set_rules($rules);
		
			// バリデーション フィールド名設定
			$fields['id'] = 'アカウント';
			$fields['pwd'] = 'パスワード';
		
			$this->validation->set_fields($fields);
			if($this->validation->run() == FALSE){
				foreach ($this->validation->_fields as $field => $label){
					$error_result[$field] = $this->validation->{$field.'_error'};
				}
				$err_ck = FALSE;
			}else{
				//ログインチェック
				
				if($this->client_login->login($this->input->post('id'), $this->input->post('pwd'), $this->input->post('mode')) == FALSE){
					$error_result['account_ck'] = "アカウントかパスワードに誤りがあります";
					$err_ck = FALSE;
				}else{
					$err_ck = TRUE;
					log_message('info', 'ip：'.$_SERVER['REMOTE_ADDR'].' id：'.$this->input->post('id').' ログインしました');
				}
			}
		}else{
			$err_ck = FALSE;
		}
		//-----------------------------------------------------------------------------------
		
		if(isset($_SESSION['logout_flag']) and $_SESSION['logout_flag'] == "t"){
			$data['logout_msg'] = "t";
		}
		
		//出力VIEW---------------------------------------------------------------------------
		$data['form']['id'] = $this->input->post('id');
		
		if(is_array($error_result))$data['form_error'] = $error_result;
		
		if($err_ck){
			
#	#PRINT_R
#	print "<pre>";
#	print_r($this->session->userdata);
#	print "</pre>";
			
			//OK
#			if($this->session->userdata['sd_regist_flag'] == "t"){
			if($_SESSION['login_dat']['sd_regist_flag'] == "t"){
				redirect(self::LOGIN_DIR.'top/', 'refresh');
				
			}else{
				$this->smarty_parser->parse("ci:".self::LOGIN_DIR."first_login.tpl", $data);
			}
		}else{
			//ERROR
			$this->smarty_parser->parse("ci:".self::LOGIN_DIR."login.tpl", $data);
			unset($_SESSION['logout_flag']);
		}
		//-----------------------------------------------------------------------------------
	}

#	function other(){
#			// セッションでログイン状態を確認
#			if($this->session->userdata('logged_in')){
#				//User is logged in
#				echo 'あなたはログイン中です';
#				echo '<hr>';
#				echo anchor(self::LOGIN_DIR.'login/logout', 'ログアウトする');
#			
#			
#	#PRINT_R
#	print "<pre>";
#	print_r($this->session);
#	print "</pre>";
#			
#			}else{
#				//User is not logged in
#				redirect(self::LOGIN_DIR.'login/', 'refresh');
#			}
#	}
	

	
	function logout(){
		// ログアウトメソッド実行
		log_message('info', 'ip：'.$_SERVER['REMOTE_ADDR'].' id：'.$_SESSION['login_dat']['sd_account'].' ログアウトしました');
#		$this->client_login->logout();

		// セッション情報破棄 iga 20130110
		$_SESSION = array();
		if (isset($_COOKIE[session_name()])) {
		    setcookie(session_name(), '', time()-42000, '/');
		}
		session_destroy();

		if(isset($_SESSION['login_dat'])){
			unset($_SESSION['login_dat']);
		}
		$_SESSION['logout_flag'] = "t";
		redirect(self::LOGIN_DIR.'login/', 'refresh');
	}
	
	function re_password(){
	
#		if($this->session->userdata['sid'] == "") redirect(self::LOGIN_DIR.'login/', 'refresh');
		if(!isset($_SESSION['login_dat']['sid']) or $_SESSION['login_dat']['sid'] == "") redirect(self::LOGIN_DIR.'login/', 'refresh');
		//初期設定---------------------------------------------------------------------------
		$data = array();
		$error_result = array();
		$err_ck = TRUE;
		//-----------------------------------------------------------------------------------
#		$old_pwd = $this->input->post('old_pwd');
		$new_pwd = $this->input->post('new_pwd');
		$new_pwd_r = $this->input->post('new_pwd_r');
		
		//入力チェック-----------------------------------------------------------------------
		// バリデーション ルール設定
#		$rules['old_pwd'] = "trim|required|min_length[6]|max_length[12]";
		$rules['new_pwd'] = "trim|required|min_length[6]|max_length[12]";
		$rules['new_pwd_r'] = "trim|required|min_length[6]|max_length[12]";
	
		$this->validation->set_rules($rules);
	
		// バリデーション フィールド名設定
#		$fields['old_pwd'] = '旧パスワード';
		$fields['new_pwd'] = '新パスワード';
		$fields['new_pwd_r'] = '新パスワード（確認）';
	
		$this->validation->set_fields($fields);
		if($this->validation->run() == FALSE){
			foreach ($this->validation->_fields as $field => $label){
				$error_result[$field] = $this->validation->{$field.'_error'};
			}
			$err_ck = FALSE;
		}else{
#			$db_dat = $this ->loginmodel ->do_select(array("sid" => $this->session->userdata['sid']));
			$db_dat = $this ->loginmodel ->do_select(array("sid" => $_SESSION['login_dat']['sid']));
			
			if(count($db_dat) == 1){
#				if($db_dat[0]['sd_pwd'] != $old_pwd){
#					$error_result['account_ck'] = "旧パスワードが間違っています。";
#					$old_pwd = "";
#					$new_pwd = "";
#					$new_pwd_r = "";
#					$err_ck = FALSE;
#				}else
				if($this->input->post('new_pwd') != $this->input->post('new_pwd_r')){
					$error_result['account_ck'] = "新パスワード と 新パスワード（確認）が一致しません。";
					$new_pwd = "";
					$new_pwd_r = "";
					$err_ck = FALSE;
				}else{
					$err_ck = TRUE;
				}
			}else{
				$error_result['account_ck'] = "DB接続できませんでした。";
				$err_ck = FALSE;
			}
		}

		//-----------------------------------------------------------------------------------
		
		//出力VIEW---------------------------------------------------------------------------
		if(is_array($error_result))$data['form_error'] = $error_result;
#		$data['form']['old_pwd'] = $old_pwd;
		$data['form']['new_pwd'] = $new_pwd;
		$data['form']['new_pwd_r']= $new_pwd_r;
		 
		if($err_ck){
			//OK
#			if($this ->loginmodel ->do_update(array("sid" => $this->session->userdata['sid'],"sd_pwd" => $this->input->post('new_pwd'),"sd_regist_flag" => "t"))){
			if($this ->loginmodel ->do_update(array("sid" => $_SESSION['login_dat']['sid'],"sd_pwd" => $this->input->post('new_pwd'),"sd_regist_flag" => "t"))){
				redirect(self::LOGIN_DIR.'top/', 'refresh');
			}else{
				$this->smarty_parser->parse("ci:".self::LOGIN_DIR."first_login.tpl", $data);
			}
		}else{
			//ERROR
			$this->smarty_parser->parse("ci:".self::LOGIN_DIR."first_login.tpl", $data);
		}
	}

}
?>
