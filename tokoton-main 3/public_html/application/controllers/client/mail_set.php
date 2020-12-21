<?
	class Mail_set extends ClientController{
		/* ------------------------------------------------------------------ */
		/* 共通変数設定
		--------------------------------------------------------------------- */
		var $table = "t_shop_mail_set";
		
		
		function Mail_set(){
			parent::ClientController();
			$this -> load -> helper(array('form','date'));									// ヘルパーのロード
			
			$this -> output -> set_header('Content-Type: text/html; charset=UTF-8');
		}
		function index(){
			$data = array();
			/* ------------------------------------------------------------------ */
			/* ページの設定
			--------------------------------------------------------------------- */
			$data['page_title'] = "メールアドレスの設定";
			$data['now_category'] = "admin";
			$data['now_page'] = "mail_set";
			$data['document_root'] = str_replace("secure_html", "public_html", $_SERVER['DOCUMENT_ROOT']);
			
			$datestring = "%Y年%m月%d日";
			$time = time();
			$data['today'] = mdate($datestring, $time)."(".get_day($time).")";
			
#			$data['sid'] = $this->session->userdata['sid'];
			$data['sid'] = $_SESSION['login_dat']['sid'];
			/* ------------------------------------------------------------------ */
			/* 会社情報取得
			--------------------------------------------------------------------- */
			$this -> load -> model('client/mail_setmodel');
			$result = $this -> mail_setmodel -> do_select(array("sid" => $data['sid']));

			if($result != null and count($result) == 1){
#				$_SESSION['form'] = $result[0];
				$query_data = $result[0];
			}
			
			// 2011-09-29　五十嵐修正
			//$_SESSION['form'] = (isset($_SESSION['form'])) ? $_SESSION['form'] : $query_data;
			$_SESSION['form'] = $query_data;
			
			/* ------------------------------------------------------------------ */
			/* エラーメッセージの代入
			--------------------------------------------------------------------- */
			if(isset($_SESSION['form_error'])){
				$data['form_error'] = $_SESSION['form_error'];
			}
			/* ------------------------------------------------------------------ */
			/* 登録・編集・削除メッセージの代入
			--------------------------------------------------------------------- */
			if(isset($_SESSION['msg'])){
				$data['msg'] = "<li>".$_SESSION['msg']."</li>";
			}
			/* ------------------------------------------------------------------ */
			/* フォーム入力データがあったらセットする
			--------------------------------------------------------------------- */
			if(isset($_SESSION['form'])){
				foreach($_SESSION['form'] as $key => $val){
					$data['form_data'][$key] = $val;
				}
			}
			
			if(empty($data['form_data']['sd_info_mail'])){
				if(!empty($data['form_data']['sd_remind_mail'])){
					$data['form_data']['sd_info_mail'] = $data['form_data']['sd_remind_mail'];
				}
			}
			/* ------------------------------------------------------------------ */
			/* ユーザー情報の設定
			--------------------------------------------------------------------- */
			$result = $this->mail_setmodel->select_shop_data("t_shop_base",array("sid" => $data['sid']));
			if($result != null and count($result) == 1){
				$data['user_data'] = $result[0];
			}
			
			$this->smarty_parser->parse("ci:client/mail_set.tpl", $data);
			unset($_SESSION['msg'],$_SESSION['form_error']);
		}
		
		function to_confirm(){
			unset($_SESSION['form_error'],$_SESSION['form']);
			$this -> load -> library('validation');
			$this -> validation -> set_error_delimiters('<li>','</li>');
			
			/* ------------------------------------------------------------------ */
			/* XSS対策 + タグの無効化
			--------------------------------------------------------------------- */
			foreach($_POST as $key => $val){
				$val = $this->input->xss_clean($val);
				$_POST[$key] = htmlspecialchars($val);
			}
			
#			/* ------------------------------------------------------------------ */
			/* フィールドセット
			--------------------------------------------------------------------- */
			$fields['sid'] = "店舗番号";
			$fields['sd_estimate_mail'] = "見積りメール受信先";
			$fields['sd_info_mail'] = "車検ナビからのお知らせ受信先";
			
			$this -> validation -> set_fields($fields);
			/* ------------------------------------------------------------------ */
			/* ルールセット
			--------------------------------------------------------------------- */
			$rules['sid'] = "required";
			$rules['sd_estimate_mail'] = "required|callback_chk_email";
			$rules['sd_info_mail'] = "required|valid_email";
			
			$this -> validation -> set_rules($rules);
			/* ------------------------------------------------------------------ */
			/* エラーチェック
			--------------------------------------------------------------------- */
			if ($this->validation->run() == FALSE){
				#NG
				foreach ($this->validation->_fields as $field => $label){
					$_SESSION['form_error'][$field] = $this->validation->{$field.'_error'};
					$_SESSION['form'][$field] = $this->input->post($field);
				}
				header("location: /client/mail_set/");
			}else{
				#OK
				foreach ($this->validation->_fields as $field => $label){
					$_SESSION['form'][$field] = $this->input->post($field);
				}
				header("location: /client/mail_set/regist_db");
			}
		}
		
		function regist_db(){
			if(!isset($_SESSION['form'])){
				header("location: /client/mail_set/");
			}
			$values = $_SESSION['form'];
			
			$this -> load -> model('client/mail_setmodel');
			
			if(isset($values['sid'])){
				if($this -> mail_setmodel -> do_update($values)){
					$_SESSION['msg'] = "メールアドレスを登録しました。";
					unset($_SESSION['form']);
				}else{
					$_SESSION['form_error'][] = "DB登録時にエラーが発生しました。";
				}
				
			}else{
				$_SESSION['form_error'][] = "DB登録時にエラーが発生しました。";
			}
			
			header("location: /client/mail_set/");
		}
		
		
		
		function chk_email($e_mail){
			$flag = true;
			$email_arr = explode(",",$e_mail);
			
			for($i=0;$i<count($email_arr);$i++){
				if($email_arr[$i] != ""){
					if(strlen(strstr($email_arr[$i],"@")) >=3){
						$url = substr(strrchr($email_arr[$i],"@"),1);
//						if(checkdnsrr($url,"ANY")){
							
//						}else{
//							$flag = false;
//						}
					}else{
						$flag = false;
					}
				}else{
					$flag = false;
				}
			}
			if(!$flag){
				$this->validation->set_message('chk_email', '%s が正しくありません。');
			}
			return $flag;
			
		}
		
		
	}
	
?>