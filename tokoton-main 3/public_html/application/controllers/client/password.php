<?
	class Password extends ClientController{
		/* ------------------------------------------------------------------ */
		/* 共通変数設定
		--------------------------------------------------------------------- */
		var $table = "t_shop_password";
		
		function Password(){
			parent::ClientController();
			$this -> load -> helper(array('form','date'));									// ヘルパーのロード
			
			$this -> output -> set_header('Content-Type: text/html; charset=UTF-8');
		}
		function index(){
			$data = array();
			/* ------------------------------------------------------------------ */
			/* ページの設定
			--------------------------------------------------------------------- */
			$data['page_title'] = "パスワードの設定";
			$data['now_category'] = "admin";
			$data['now_page'] = "password";
			$data['document_root'] = str_replace("secure_html", "public_html", $_SERVER['DOCUMENT_ROOT']);
			
			$datestring = "%Y年%m月%d日";
			$time = time();
			$data['today'] = mdate($datestring, $time)."(".get_day($time).")";
			
#			$data['sid'] = $this->session->userdata['sid'];
			$data['sid'] = $_SESSION['login_dat']['sid'];
			$this->sid = $data['sid'];
#			/* ------------------------------------------------------------------ */
#			/* 会社情報取得
#			--------------------------------------------------------------------- */
			$this -> load -> model('client/passwordmodel');
#			$result = $this -> passwordmodel -> do_select(array("sid" => $data['sid']));
#		
#			if($result != null and count($result) == 1){
# #				$_SESSION['form'] = $result[0];
#				$query_data = $result[0];
#			}
#			$_SESSION['form'] = (isset($_SESSION['form'])) ? $_SESSION['form'] : $query_data;
			
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
			/* ユーザー情報の設定
			--------------------------------------------------------------------- */
			$result = $this->passwordmodel->select_shop_data("t_shop_base",array("sid" => $data['sid']));
			if($result != null and count($result) == 1){
				$data['user_data'] = $result[0];
			}
			
			/* ------------------------------------------------------------------ */
			/* フォーム入力データがあったらセットする
			--------------------------------------------------------------------- */
			if(isset($_SESSION['form'])){
				foreach($_SESSION['form'] as $key => $val){
					$data['form_data'][$key] = $val;
				}
			}
			
			$this->smarty_parser->parse("ci:client/password.tpl", $data);
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
			
			/* ------------------------------------------------------------------ */
			/* フィールドセット
			--------------------------------------------------------------------- */
			$fields['sid'] = "店舗番号";
			$fields['now_pwd'] = "変更前のパスワード";
			$fields['next_pwd'] = "変更後のパスワード";
			$fields['conf_pwd'] = "確認用変更後のパスワード";
			
			$this -> validation -> set_fields($fields);
			/* ------------------------------------------------------------------ */
			/* ルールセット
			--------------------------------------------------------------------- */
			$rules['sid'] = "required";
			$rules['now_pwd'] = "callback_pwd_chk|required";
			$rules['next_pwd'] = "required|min_length[6]|max_length[12]";
			$rules['conf_pwd'] = "required|matches[next_pwd]";
			
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
				header("location: /client/password/");
			}else{
				#OK
				foreach ($this->validation->_fields as $field => $label){
					$_SESSION['form'][$field] = $this->input->post($field);
				}
				header("location: /client/password/regist_db");
			}
		}
		
		function regist_db(){
			if(!isset($_SESSION['form'])){
				header("location: /client/password/");
			}
			$values = $_SESSION['form'];
			
			$this -> load -> model('client/passwordmodel');
			
			if(isset($values['sid'])){
				if($this -> passwordmodel -> do_update($values)){
					$_SESSION['msg'] = "パスワードを変更しました。";
					unset($_SESSION['form']);
				}else{
					$_SESSION['form_error'][] = "DB登録時にエラーが発生しました。";
				}
				
			}else{
				$_SESSION['form_error'][] = "DB登録時にエラーが発生しました。";
			}
			
			header("location: /client/password/");
		}
		
#		function delete_db($mail_no){
# #			if(!isset($mail_no)){
# #				header("location: /client/password/");
# #			}
# #			$this -> load -> model('client/passwordmodel');
# #			
# #			if($this -> passwordmodel -> do_delete(array("mail_no" => $mail_no))){
# #				$_SESSION['msg'] = "見積りメール設定の内容をを削除しました。";
# #			}else{
# #				$_SESSION['form_error'][] = "データ削除時にエラーが発生しました。";
# #			}
# #			unset($_SESSION['form']);
# #			header("location: /client/password/");
#		}
		
#		function edit($mail_no){
# #			/* ------------------------------------------------------------------ */
# #			/* 編集データの取得
# #			--------------------------------------------------------------------- */
# #			if(!isset($mail_no)){
# #				$_SESSION['form_error'] = "トピックが選択されていないので編集できません。";
# #				header("location: /client/password/");
# #			}
# #			$this -> load -> model('client/passwordmodel');
# #			
# #			$result = $this -> passwordmodel -> do_select(array("mail_no" => $mail_no));
# #			if($this->passwordmodel->rows == 1){
# #				if($result != null){
# #					foreach($result[0] as $key => $val){
# #						$_SESSION['form'][$key] = $val;
# #					}
# #				}
# #			}
# #			header("location: /client/password/#regist_form");
#			/* ------------------------------------------------------------------ */
#		}
		
		
		function pwd_chk($pwd){
			$this -> load -> model('client/passwordmodel');
			if($pwd == ""){
				$this->validation->set_message('pwd_chk','変更前のパスワードを入力して下さい。');
				return false;
			}else{
#				$result = $this->passwordmodel->do_select(array("sid" => $this->session->userdata['sid']));
				$result = $this->passwordmodel->do_select(array("sid" => $_SESSION['login_dat']['sid']));
				if($result != null and count($result) == 1){
					if($pwd == $result[0]['sd_pwd']){
						return true;
					}else{
						$this->validation->set_message('pwd_chk','変更前のパスワードを正しく入力してください。');
						return false;
					}
				}else{
					$this->validation->set_message('pwd_chk','変更前のパスワード情報を取得できませんでした。');
					return false;
				}
			}
			
		}
		
		
		
		
		
		
		
	}
	
?>