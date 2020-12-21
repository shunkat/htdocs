<?
	class Plan_item extends ClientController{
		/* ------------------------------------------------------------------ */
		/* 共通変数設定
		--------------------------------------------------------------------- */
		var $table = "t_shop_plan_item";
		
		
		function Plan_item(){
			parent::ClientController();
			$this -> load -> helper(array('form','date'));									// ヘルパーのロード
			
			$this -> output -> set_header('Content-Type: text/html; charset=UTF-8');
		}
		function index(){
			$data = array();
			/* ------------------------------------------------------------------ */
			/* ページの設定
			--------------------------------------------------------------------- */
			$data['page_title'] = "プラン料金項目編集";
			$data['now_category'] = "shop";
			$data['now_page'] = "plan";
			$data['sub_menu'] = "item";
			$data['document_root'] = str_replace("secure_html", "public_html", $_SERVER['DOCUMENT_ROOT']);
			
			$datestring = "%Y年%m月%d日";
			$time = time();
			$data['today'] = mdate($datestring, $time)."(".get_day($time).")";
			
#			$data['sid'] = $this->session->userdata['sid'];
			$data['sid'] = $_SESSION['login_dat']['sid'];
			/* ------------------------------------------------------------------ */
			/* 項目名の取得
			--------------------------------------------------------------------- */
			$this -> load -> model('client/plan_itemmodel');
			$result = $this -> plan_itemmodel -> do_select(array("sid" => $data['sid']));
			
			if($result != null and $this->plan_itemmodel->rows == 1){
				foreach($result[0] as $key => $val){
					$data['form_data'][$key] = $val;
				}
			}
			/* ------------------------------------------------------------------ */
			/* ユーザー情報の設定
			--------------------------------------------------------------------- */
			$result = $this->plan_itemmodel->do_select(array("sid" => $data['sid']));
			if($result != null and count($result) == 1){
				$data['user_data'] = $result[0];
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
#			
			$this->smarty_parser->parse("ci:client/plan_item.tpl", $data);
			unset($_SESSION['msg'],$_SESSION['form_error']);
		}
		
		function to_confirm(){
			unset($_SESSION['form_error']);
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
			$fields['di_itm01_nm'] = "料金項目1";
			$fields['di_itm02_nm'] = "料金項目2";
			$fields['di_itm03_nm'] = "料金項目3";
			$fields['di_itm04_nm'] = "料金項目4";
			$fields['di_itm05_nm'] = "料金項目5";
			$fields['di_itm06_nm'] = "料金項目6";
			$fields['di_itm07_nm'] = "料金項目7";
			$fields['di_itm08_nm'] = "料金項目8";
			
			$this -> validation -> set_fields($fields);
			/* ------------------------------------------------------------------ */
			/* ルールセット
			--------------------------------------------------------------------- */
			$rules['sid'] = "required";
			$rules['di_itm01_nm'] = "";
			$rules['di_itm02_nm'] = "";
			$rules['di_itm03_nm'] = "";
			$rules['di_itm04_nm'] = "";
			$rules['di_itm05_nm'] = "";
			$rules['di_itm06_nm'] = "";
			$rules['di_itm07_nm'] = "";
			$rules['di_itm08_nm'] = "";
			
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
				header("location: /client/plan_item/");
			}else{
				#OK
				foreach ($this->validation->_fields as $field => $label){
					$_SESSION['form'][$field] = $this->input->post($field);
				}
				header("location: /client/plan_item/regist_db");
			}
		}
		
		function regist_db(){
			if(!isset($_SESSION['form'])){
				header("location: /client/plan_item/");
			}
			$values = $_SESSION['form'];
			
			$this -> load -> model('client/plan_itemmodel');
			
			if(!isset($values['sid'])){
				$_SESSION['form_error'][] = "DB登録時にエラーが発生しました。";
#				if($this -> plan_itemmodel -> do_insert($values)){
#					$_SESSION['msg'] = "プランの料金項目の名称を変更しました。";
#					unset($_SESSION['form']);
#				}else{
#					$_SESSION['form_error'][] = "DB登録時にエラーが発生しました。";
#				}
			}else{
				if($this -> plan_itemmodel -> do_update($values)){
					$_SESSION['msg'] = "プランの料金項目の名称を変更しました。";
					unset($_SESSION['form']);
				}else{
					
				}
			}
			
			header("location: /client/plan_item/");
		}
#		
#		function delete_db($sid){
#			if(!isset($sid)){
#				header("location: /client/plan_item/");
#			}
#			$this -> load -> model('client/plan_itemmodel');
#			
#			if($this -> plan_itemmodel -> do_delete(array("sid" => $sid))){
#				$_SESSION['msg'] = "サービスを削除しました。";
#			}else{
#				$_SESSION['form_error'][] = "データ削除時にエラーが発生しました。";
#			}
#			
#			header("location: /client/plan_item/");
#		}
		
		function edit($sid){
#			/* ------------------------------------------------------------------ */
#			/* 編集データの取得
#			--------------------------------------------------------------------- */
#			if(!isset($sid)){
#				$_SESSION['form_error'] = "トピックが選択されていないので編集できません。";
#				header("location: /client/plan_item/");
#			}
#			$this -> load -> model('client/plan_itemmodel');
#			
#			$result = $this -> plan_itemmodel -> do_select(array("sid" => $sid));
#			if($this->plan_itemmodel->rows == 1){
#				if($result != null){
#					foreach($result[0] as $key => $val){
#						$_SESSION['form'][$key] = $val;
#					}
#				}
#			}
#			header("location: /client/plan_item/#regist_form");
			/* ------------------------------------------------------------------ */
		}
		
		
		
	}
	
?>