<?php
	class Coupon extends ClientController{
		/* ------------------------------------------------------------------ */
		/* 共通変数設定
		--------------------------------------------------------------------- */
		var $table = "t_shop_coupon";
		
		
		function Coupon(){
			parent::ClientController();
			$this -> load -> helper(array('date'));									// ヘルパーのロード
			
			$this -> output -> set_header('Content-Type: text/html; charset=UTF-8');
		}
		function index(){
#			#PRINT_R
#			print "<pre>";
#			print_r(debug_backtrace());
#			print "</pre>";
			$data = array();
			/* ------------------------------------------------------------------ */
			/* ページの設定
			--------------------------------------------------------------------- */
			$data['page_title'] = "クーポン設定";
			$data['now_category'] = "shop";
			$data['now_page'] = "coupon";
			$data['document_root'] = str_replace("secure_html", "public_html", $_SERVER['DOCUMENT_ROOT']);
			
			$datestring = "%Y年%m月%d日";
			$time = time();
			$data['today'] = mdate($datestring,$time)."(".get_day($time).")";
			
			$data['sid'] = $_SESSION['login_dat']['sid'];
			/* ------------------------------------------------------------------ */
			/* クーポン情報の取得
			--------------------------------------------------------------------- */
			$this -> load -> model('client/couponmodel');
			$result = $this -> couponmodel -> do_select(array("sid" => $data['sid']));
			
			if($result != null and count($result) == 1){
				$query_data = $result[0];
			}else{
				$query_data = array();
			}
			$_SESSION['form'] = (isset($_SESSION['form'])) ? $_SESSION['form'] : $query_data;
			/* ------------------------------------------------------------------ */
			/* ユーザー情報の設定
			--------------------------------------------------------------------- */
			$result = $this->couponmodel->select_shop_data("t_shop_base",array("sid" => $data['sid']));
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
#			$this->output->enable_profiler(TRUE);
			$this->smarty_parser->parse("ci:client/coupon.tpl",$data);
			unset($_SESSION['msg'],$_SESSION['form_error'],$_SESSION['form']);
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
			if(isset($_POST['cou_no'])){
				$fields['cou_no'] = "クーポンNo.";
			}
			$fields['cou_open_state'] = "クーポンの表示";
			$fields['cou_contents'] = "クーポンの内容";
			$fields['cou_limit_matter'] = "クーポンの制限事項";
			$fields['cou_limit_date'] = "クーポンの有効期限";
			
			$this -> validation -> set_fields($fields);
			/* ------------------------------------------------------------------ */
			/* ルールセット
			--------------------------------------------------------------------- */
			$rules['sid'] = "required";
			if(isset($_POST['cou_no'])){
				$rules['cou_no'] = "";
			}
			$rules['cou_open_state'] = "required";
			$rules['cou_contents'] = "";
			$rules['cou_limit_matter'] = "";
			$rules['cou_limit_date'] = "callback_date_chk";
			
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
				header("location: /client/coupon/");
			}else{
				#OK
				foreach ($this->validation->_fields as $field => $label){
					$_SESSION['form'][$field] = $this->input->post($field);
				}
				header("location: /client/coupon/regist_db");
			}
		}
		
		function regist_db(){
			if(!isset($_SESSION['form'])){
				header("location: /client/coupon/");
			}
			$values = $_SESSION['form'];
			
			$this -> load -> model('client/couponmodel');
			
			if(!isset($values['cou_no'])){
				if($this -> couponmodel -> do_insert($values)){
					$_SESSION['msg'] = "クーポン内容を登録しました。";
					unset($_SESSION['form']);
				}else{
					$_SESSION['form_error'][] = "DB登録時にエラーが発生しました。";
				}
			}else{
				if($this -> couponmodel -> do_update($values)){
					$_SESSION['msg'] = "クーポン内容を登録しました。";
					unset($_SESSION['form']);
				}else{
					$_SESSION['form_error'][] = "DB登録時にエラーが発生しました。";
				}
			}
			
			header("location: /client/coupon/");
		}
		
		
		function date_chk($date){
			list($y,$m,$d) = explode("-",$date);
			if($date == ""){
				$this->validation->set_message('date_chk','クーポンの有効期限が入力されていません。');
				return false;
			}elseif(!checkdate($m,$d,$y)){
				$this->validation->set_message('date_chk','クーポンの有効期限を正しく入力してください。');
				return false;
			}else{
				return true;
			}
		}
	}
?>