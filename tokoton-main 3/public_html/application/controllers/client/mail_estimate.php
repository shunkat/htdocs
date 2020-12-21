<?
	class Mail_estimate extends ClientController{
		/* ------------------------------------------------------------------ */
		/* 共通変数設定
		--------------------------------------------------------------------- */
		var $table = "t_shop_mail_estimate";
		
		
		function Mail_estimate(){
			parent::ClientController();
			$this -> load -> helper(array('form','date'));									// ヘルパーのロード
			$this -> load -> model('client/mail_estimatemodel');							// モデルのロード
			$this -> load -> library('validation');
			
			$this -> output -> set_header('Content-Type: text/html; charset=UTF-8');
		}
		function index(){
			$data = array();
			/* ------------------------------------------------------------------ */
			/* ページの設定
			--------------------------------------------------------------------- */
			$data['page_title'] = "見積りメール設定";
			$data['now_category'] = "shop";
			$data['now_page'] = "mail_estimate";
			$data['document_root'] = str_replace("secure_html", "public_html", $_SERVER['DOCUMENT_ROOT']);
			
			$datestring = "%Y年%m月%d日";
			$time = time();
			$data['today'] = mdate($datestring, $time)."(".get_day($time).")";
			
#			$data['sid'] = $this->session->userdata['sid'];
			$data['sid'] = $_SESSION['login_dat']['sid'];
			/* ------------------------------------------------------------------ */
			/* 見積りメール取得
			--------------------------------------------------------------------- */
#			$this -> load -> model('client/mail_estimatemodel');
			$result = $this -> mail_estimatemodel -> do_select(array("sid" => $data['sid']));
			
			if($result != null and count($result) == 1){
				$_SESSION['form'] = $result[0];
			}
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
			/* ------------------------------------------------------------------ */
			/* ユーザー情報の設定
			--------------------------------------------------------------------- */
			$result = $this->mail_estimatemodel->select_shop_data("t_shop_base",array("sid" => $data['sid']));
			if($result != null and count($result) == 1){
				$data['user_data'] = $result[0];
			}
			
			$this->smarty_parser->parse("ci:client/mail_estimate.tpl", $data);
			unset($_SESSION['msg'],$_SESSION['form_error'],$_SESSION['form']);
		}
		
		function to_confirm(){
			unset($_SESSION['form_error'],$_SESSION['form']);
#			$this -> load -> library('validation');
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
			if(isset($_POST['mail_no'])){
				$fields['mail_no'] = "メールNo.";
			}
			$fields['mail_subject'] = "メール件名";
			$fields['mail_greeting'] = "メール挨拶文";
			$fields['mail_footer'] = "メールフッター";
			
			$this -> validation -> set_fields($fields);
			/* ------------------------------------------------------------------ */
			/* ルールセット
			--------------------------------------------------------------------- */
			$rules['sid'] = "required";
			if(isset($_POST['mail_no'])){
				$rules['mail_no'] = "";
			}
			$rules['mail_subject'] = "trim|required";
			$rules['mail_greeting'] = "trim";
			$rules['mail_footer'] = "trim";
			
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
				header("location: /client/mail_estimate/");
			}else{
				#OK
				foreach ($this->validation->_fields as $field => $label){
					$_SESSION['form'][$field] = $this->input->post($field);
				}
				header("location: /client/mail_estimate/regist_db");
			}
		}
		
		function regist_db(){
			if(!isset($_SESSION['form'])){
				header("location: /client/mail_estimate/");
			}
			$values = $_SESSION['form'];
			
#			$this -> load -> model('client/mail_estimatemodel');
			
			if(!isset($values['mail_no'])){
				if($this -> mail_estimatemodel -> do_insert($values)){
					$_SESSION['msg'] = "見積りメール設定の内容を登録しました。";
					unset($_SESSION['form']);
				}else{
					$_SESSION['form_error'][] = "DB登録時にエラーが発生しました。";
				}
			}else{
				if($this -> mail_estimatemodel -> do_update($values)){
					$_SESSION['msg'] = "見積りメール設定の内容を登録しました。";
					unset($_SESSION['form']);
				}else{
					$_SESSION['form_error'][] = "DB登録時にエラーが発生しました。";
				}
			}
			
			header("location: /client/mail_estimate/");
		}
		
		function delete_db($mail_no){
			if(!isset($mail_no)){
				header("location: /client/mail_estimate/");
			}
#			$this -> load -> model('client/mail_estimatemodel');
			
			if($this -> mail_estimatemodel -> do_delete(array("mail_no" => $mail_no))){
				// t_shop_base の情報更新日をupdate する
				if(isset($atrlist['sid']) and $atrlist['sid'] != ""){
					$this->db->query("update t_shop_base set sd_last_update = now() where sid = '".$atrlist['sid']."'");
				}
				$_SESSION['msg'] = "見積りメール設定の内容をを削除しました。";
			}else{
				$_SESSION['form_error'][] = "データ削除時にエラーが発生しました。";
			}
			unset($_SESSION['form']);
			header("location: /client/mail_estimate/");
		}
		
#		function edit($mail_no){
# #			/* ------------------------------------------------------------------ */
# #			/* 編集データの取得
# #			--------------------------------------------------------------------- */
# #			if(!isset($mail_no)){
# #				$_SESSION['form_error'] = "トピックが選択されていないので編集できません。";
# #				header("location: /client/mail_estimate/");
# #			}
# #			$this -> load -> model('client/mail_estimatemodel');
# #			
# #			$result = $this -> mail_estimatemodel -> do_select(array("mail_no" => $mail_no));
# #			if($this->mail_estimatemodel->rows == 1){
# #				if($result != null){
# #					foreach($result[0] as $key => $val){
# #						$_SESSION['form'][$key] = $val;
# #					}
# #				}
# #			}
# #			header("location: /client/mail_estimate/#regist_form");
#			/* ------------------------------------------------------------------ */
#		}
		
		
		
	}
	
?>