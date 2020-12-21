<?php
class login extends AdminController {
	
	const LOGIN_DIR = 'admin/';
	
	function login(){
		parent::Controller();
		//ログインライブラリを読み込む
		$this->load->library('admin_login');

#		$this->load->library('session');
		$this->load->database();
		$this->load->helper(array('form', 'url'));
		$this->load->library('validation');
		$this->output->set_header('Content-Type: text/html; charset=UTF-8');
		$this->load->library('smarty_parser');
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
			$fields['id'] = 'ユーザ名';
			$fields['pwd'] = 'パスワード';
		
			$this->validation->set_fields($fields);
			if($this->validation->run() == FALSE){
				foreach ($this->validation->_fields as $field => $label){
					$error_result[$field] = $this->validation->{$field.'_error'};
				}
				$err_ck = FALSE;
			}else{
				//ログインチェック
				if($this->admin_login->login($this->input->post('id'), $this->input->post('pwd')) == FALSE){
					$error_result['account_ck'] = "ユーザ名かパスワードに誤りがあります";
					$err_ck = FALSE;
				}else{
					$err_ck = TRUE;
			
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
			//OK
			redirect(self::LOGIN_DIR.'account/', 'refresh');
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
		$this->admin_login->logout();
		$_SESSION['logout_flag'] = "t";
		redirect(self::LOGIN_DIR.'login/', 'refresh');
		
#		echo 'ログアウトしました';
#		echo '<hr>';
#		echo anchor(self::LOGIN_DIR.'login/', 'indexページへ');
	}

}
?>
