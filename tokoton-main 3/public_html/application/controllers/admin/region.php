<?
	class Region extends AdminController{
		/* ------------------------------------------------------------------ */
		/* 共通変数設定
		--------------------------------------------------------------------- */
		var $table = "t_shop_base";
		
		
		function Region(){
			parent::AdminController();
			$this -> load -> helper(array('form','date'));									// ヘルパーのロード
			
			$this -> output -> set_header('Content-Type: text/html; charset=UTF-8');
		}
		function index($sid = "",$todoufuken_id = ""){
			/* ------------------------------------------------------------------ */
			/* ページの設定
			--------------------------------------------------------------------- */
			$data['page_title'] = "アカウント詳細";
			$data['now_page'] = "area";
			$data['document_root'] = str_replace("secure_html", "public_html", $_SERVER['DOCUMENT_ROOT']);
			
			$datestring = "%Y年%m月%d日";
			$time = time();
			$data['today'] = mdate($datestring, $time)."(".get_day($time).")";
			
			$data['sid'] = $sid;
			$data['todoufuken_id'] = $todoufuken_id;
#			if($_SESSION['form']['sid'] != ""){
#				$data['sid'] = $_SESSION['form']['sid'];
#				$sid = $_SESSION['form']['sid'];
#			}else{
#				header("location: /admin/account/");
#			}
#			if($_SESSION['form']['todoufuken_id'] != ""){
#				$todoufuken_id = $_SESSION['form']['todoufuken_id'];
#			}else{
#				header("location: /admin/area/".$data['sid']."/");
#			}
			
			/* ------------------------------------------------------------------ */
			/* region情報の取得
			--------------------------------------------------------------------- */
			$this -> load -> model('admin/regionmodel');
			$result = $this -> regionmodel -> do_select($todoufuken_id);
			
			if($result != null){
				$disp_arr = $this->regionmodel->make_disp_arr($result);
			}
			if(isset($disp_arr) and $disp_arr != null){
				$data['region_query'] = $disp_arr;
			}
			/* ------------------------------------------------------------------ */
			/* アカウント情報の取得
			--------------------------------------------------------------------- */
			$acc_result = $this->regionmodel->do_select_shop($sid);
			if($acc_result != null){
				$data['acc_data'] = $acc_result[0];
			}
			/* ------------------------------------------------------------------ */
			/* 都道府県情報の取得
			--------------------------------------------------------------------- */
			$pref_result = $this->regionmodel->do_select_todoufuken($todoufuken_id);
			if($pref_result != null){
				$data['todoufuken'] = $pref_result[0];
			}
			/* ------------------------------------------------------------------ */
			/* エラーメッセージの代入
			--------------------------------------------------------------------- */
			if(isset($_SESSION['form_error'])){
				$data['form_error'] = $_SESSION['form_error'];
			}
			
			
			$this->smarty_parser->parse("ci:admin/region.tpl", $data);
			unset($_SESSION['msg'],$_SESSION['form_error']);
		}
		
		function to_confirm(){
			$sid = $_POST['sid'];
			$todoufuken_id = $_POST['todoufuken_id'];
			$this -> load -> library('validation');
			$this -> validation -> set_error_delimiters('<li>','</li>');
			/* ------------------------------------------------------------------ */
			/* フィールドセット
			--------------------------------------------------------------------- */
			$fields['sid'] = "店舗番号";
			$fields['region_id'] = "地区";
			
			$this -> validation -> set_fields($fields);
			/* ------------------------------------------------------------------ */
			/* ルールセット
			--------------------------------------------------------------------- */
			$rules['sid'] = "";
			$rules['region_id'] = "required";
			
			$this -> validation -> set_rules($rules);
			$this->validation->set_message('isset','%sが選択されていません。');
			/* ------------------------------------------------------------------ */
			/* エラーチェック
			--------------------------------------------------------------------- */
			if ($this->validation->run() == FALSE){
				#NG
				foreach ($this->validation->_fields as $field => $label){
					$_SESSION['form_error'][$field] = $this->validation->{$field.'_error'};
					$_SESSION['form'][$field] = $this->input->post($field);
				}
				header("location: /admin/region/$sid/$todoufuken_id/");
			}else{
				#OK
				foreach ($this->validation->_fields as $field => $label){
					$_SESSION['form'][$field] = $this->input->post($field);
				}
				header("location: /admin/region/regist_db");
			}
			
			
		}
		
		function regist_db(){
			if(!isset($_SESSION['form'])){
				header("location: /admin/region/");
			}
			$values = $_SESSION['form'];
			$this -> load -> model('admin/regionmodel');
			
			if($this -> regionmodel -> do_update($values)){
				$_SESSION['msg'] = "地域を設定しました。";
				unset($_SESSION['form']);
			}
			
			header("location: /admin/detail/".$values['sid']."/");
		}
		
		
	}
	
?>