<?
	class Company extends ClientController{
		/* ------------------------------------------------------------------ */
		/* 共通変数設定
		--------------------------------------------------------------------- */
		var $table = "t_shop_company";
		
		
		function Company(){
			parent::ClientController();
			$this -> load -> helper(array('form','date'));									// ヘルパーのロード
			
			$this -> output -> set_header('Content-Type: text/html; charset=UTF-8');
		}
		function index(){
			$data = array();
			/* ------------------------------------------------------------------ */
			/* ページの設定
			--------------------------------------------------------------------- */
			$data['page_title'] = "会社情報の設定";
			$data['now_category'] = "admin";
			$data['now_page'] = "company";
			$data['document_root'] = str_replace("secure_html", "public_html", $_SERVER['DOCUMENT_ROOT']);
			
			$datestring = "%Y年%m月%d日";
			$time = time();
			$data['today'] = mdate($datestring, $time)."(".get_day($time).")";
			
#			$data['sid'] = $this->session->userdata['sid'];
			$data['sid'] = $_SESSION['login_dat']['sid'];
			/* ------------------------------------------------------------------ */
			/* 会社情報取得
			--------------------------------------------------------------------- */
			$this -> load -> model('client/companymodel');
			$result = $this -> companymodel -> do_select(array("sid" => $data['sid']));
			
			if($result != null and count($result) == 1){
				$_SESSION['form'] = $result[0];
			}
			if(isset($_SESSION['form']['sd_company_zip']) and $_SESSION['form']['sd_company_zip'] != ""){
				list($_SESSION['form']['zip1'],$_SESSION['form']['zip2']) = explode("-",$_SESSION['form']['sd_company_zip']);
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
			/* ユーザー情報の設定
			--------------------------------------------------------------------- */
			$result = $this->companymodel->select_shop_data("t_shop_base",array("sid" => $data['sid']));
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
			
			$this->smarty_parser->parse("ci:client/company.tpl", $data);
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
			$fields['sd_company_nm'] = "会社名";
			$fields['sd_tanto_section'] = "部署名";
			$fields['sd_tanto_position'] = "お役職";
			$fields['sd_tanto_nm'] = "担当者氏名";
			$fields['sd_tanto_kana'] = "フリガナ";
			$fields['sd_company_tel'] = "電話番号";
			$fields['sd_company_fax'] = "FAX番号";
			$fields['zip1'] = "郵便番号";
			$fields['zip2'] = "郵便番号";
			$fields['sd_company_address'] = "住所";
			
			
			$this -> validation -> set_fields($fields);
			/* ------------------------------------------------------------------ */
			/* ルールセット
			--------------------------------------------------------------------- */
			$rules['sid'] = "required";
			$rules['sd_company_nm'] = "";
			$rules['sd_tanto_section'] = "";
			$rules['sd_tanto_position'] = "";
			$rules['sd_tanto_nm'] = "";
			$rules['sd_tanto_kana'] = "";
			$rules['sd_company_tel'] = "";
			$rules['sd_company_fax'] = "";
			$rules['zip1'] = "";
			$rules['zip2'] = "";
			$rules['sd_company_address'] = "";
			
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
				header("location: /client/company/");
			}else{
				#OK
				foreach ($this->validation->_fields as $field => $label){
					$_SESSION['form'][$field] = $this->input->post($field);
				}
				header("location: /client/company/regist_db");
			}
		}
		
		function regist_db(){
			if(!isset($_SESSION['form'])){
				header("location: /client/company/");
			}
			$values = $_SESSION['form'];
			if((isset($_SESSION['form']['zip1']) and $_SESSION['form']['zip1'] != "") or (isset($_SESSION['form']['zip2']) and $_SESSION['form']['zip2'] != ""))
			$values['sd_company_zip'] = $_SESSION['form']['zip1']."-".$_SESSION['form']['zip2'];
			
			$this -> load -> model('client/companymodel');
			
			if(isset($values['sid'])){
				if($this -> companymodel -> do_update($values)){
					$_SESSION['msg'] = "会社情報の設定内容の編集が完了しました。";
					// 検索キャッシュの更新
					$this->companymodel->make_search_cache(array("sid" => $_SESSION['login_dat']['sid']));
					unset($_SESSION['form']);
				}else{
					$_SESSION['form_error'][] = "DB登録時にエラーが発生しました。";
				}
				
			}else{
				$_SESSION['form_error'][] = "DB登録時にエラーが発生しました。";
			}
			
			header("location: /client/company/");
		}
		
#		function delete_db($mail_no){
# #			if(!isset($mail_no)){
# #				header("location: /client/company/");
# #			}
# #			$this -> load -> model('client/companymodel');
# #			
# #			if($this -> companymodel -> do_delete(array("mail_no" => $mail_no))){
# #				$_SESSION['msg'] = "見積りメール設定の内容をを削除しました。";
# #			}else{
# #				$_SESSION['form_error'][] = "データ削除時にエラーが発生しました。";
# #			}
# #			unset($_SESSION['form']);
# #			header("location: /client/company/");
#		}
		
#		function edit($mail_no){
# #			/* ------------------------------------------------------------------ */
# #			/* 編集データの取得
# #			--------------------------------------------------------------------- */
# #			if(!isset($mail_no)){
# #				$_SESSION['form_error'] = "トピックが選択されていないので編集できません。";
# #				header("location: /client/company/");
# #			}
# #			$this -> load -> model('client/companymodel');
# #			
# #			$result = $this -> companymodel -> do_select(array("mail_no" => $mail_no));
# #			if($this->companymodel->rows == 1){
# #				if($result != null){
# #					foreach($result[0] as $key => $val){
# #						$_SESSION['form'][$key] = $val;
# #					}
# #				}
# #			}
# #			header("location: /client/company/#regist_form");
#			/* ------------------------------------------------------------------ */
#		}
		
		
		
	}
	
?>