<?php
class reminder extends Controller {
	
	function reminder(){
		parent::Controller();
		//ログインライブラリを読み込む
#		$this->load->library('client_login');

#		$this->load->library('session');
#		$this->load->database();
		$this->load->helper(array('form', 'url'));
		$this->load->library('validation');
		$this->output->set_header('Content-Type: text/html; charset=UTF-8');
#		$this->load->library('smarty_parser');
		
		$this -> load -> model('client/remindermodel');
	}
	
	function index(){
		
		//初期設定---------------------------------------------------------------------------
		$data = array();
		$error_result = "";
		$err_ck = TRUE;
		//-----------------------------------------------------------------------------------
		
		//入力チェック-----------------------------------------------------------------------
		if($this->input->post('reminder') == "reminder"){
			if($this->input->post('kind') == ""){
				$error_result .= "<p>確認項目が選択させていません</p>\n";
				$err_ck = FALSE;
			}
			
			// バリデーション ルール設定
			$rules['sid'] = "trim|required|numeric";
			$rules['sd_remind_mail'] = "trim|required";
			$this->validation->set_rules($rules);
			// バリデーション フィールド名設定
			$fields['sid'] = '店舗番号';
			$fields['sd_remind_mail'] = 'メールアドレス';
			
			$this->validation->set_fields($fields);
			if($this->validation->run() == FALSE ){
				foreach ($this->validation->_fields as $field => $label){
					$error_result .= $this->validation->{$field.'_error'}."\n";
				}
				$err_ck = FALSE;
			}
#			if($err_ck){
				if($this->input->post('sid') != "" and $err_ck){
					// 店舗番号チェック
					$result = $this -> remindermodel -> sid_check($this->input->post('sid'));
					if($result){
						
						// アカウントマッチチェック
						$result = $this -> remindermodel -> match_check($this->input->post('sid'),$this->input->post('sd_remind_mail'));
						if($result){
							$err_ck = TRUE;
						}else{
							$error_result .= "<p>入力されたメールアドレスが対象店舗のメールアドレスとマッチしませんでした。</p><p>再度ご確認の上入力し直して下さい。</p>\n";
							$err_ck = FALSE;
						}
					}else{
						$error_result .= "<p>入力された店舗番号に該当する店舗が見つかりません。</p><p>再度ご確認の上入力し直して下さい。</p>\n";
						$err_ck = FALSE;
					}
				}
				
				
#				if($err_ck){
#					// アカウントマッチチェック
#					$result = $this -> remindermodel -> match_check($this->input->post('sid'),$this->input->post('sd_remind_mail'));
#					
#					if($result){
#						$err_ck = TRUE;
#					}else{
#						$error_result .= "<p>入力されたメールアドレスが対象店舗のメールアドレスとマッチしませんでした。</p><p>再度ご確認の上入力し直して下さい。</p>\n";
#						$err_ck = FALSE;
#					}
#					
#				}
				
				
#			if($this->input->post('sd_remind_mail')){
#				//メールアドレスチェック
#				$result = $this -> remindermodel -> mail_check($this->input->post('sd_remind_mail'));
#				
#				if($result){
#					$err_ck = TRUE;
#				}else{
#					$error_result .= "<p>メールアドレスが間違っています。再度ごご確認ください。</p>\n";
#					$err_ck = FALSE;
#				}
#			}


#			}
		}else{
			$err_ck = FALSE;
		}
		//-----------------------------------------------------------------------------------
		
		//メール送信-------------------------------------------------------------------------
		if($err_ck){
			if($this -> remindermodel -> mail_send($this->input->post('kind'))){
				$data['form']['result'] = "メールを送信しました。\nメールを確認して、ログインしてください";
			}else{
				$data['form']['result'] = "メール送信に失敗しました\n";
			}
		}
		//-----------------------------------------------------------------------------------
		
		//出力VIEW---------------------------------------------------------------------------
		$data['form']['sid'] = $this->input->post('sid');
		$data['form']['sd_remind_mail'] = $this->input->post('sd_remind_mail');
		$data['form']['kind'] = $this->input->post('kind');
		if($error_result != "")$data['form_error'] = $error_result;
		
		if($err_ck){
			$this->smarty_parser->parse("ci:client/reminder_after.tpl", $data);
		}else{
			//ERROR
			$this->smarty_parser->parse("ci:client/reminder.tpl", $data);
		}
		//-----------------------------------------------------------------------------------
	}
	
}
?>
