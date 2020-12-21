<?
	class Area extends AdminController{
		/* ------------------------------------------------------------------ */
		/* 共通変数設定
		--------------------------------------------------------------------- */
		var $table = "t_shop_base";
		
		
		function area(){
			parent::AdminController();
			$this -> load -> helper(array('form','date'));									// ヘルパーのロード
			
			$this -> output -> set_header('Content-Type: text/html; charset=UTF-8');
		}
		function index($sid = ""){
			$data = "";
			$disp_arr = array();
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
			/* ------------------------------------------------------------------ */
			/* area情報の取得
			--------------------------------------------------------------------- */
			$this -> load -> model('admin/areamodel');
			$result = $this -> areamodel -> do_select();
			if($result != null){
				$disp_arr = $this->areamodel->make_disp_arr($result);
			}
			if($disp_arr != null){
				$data['area_query'] = $disp_arr;
			}
			/* ------------------------------------------------------------------ */
			/* アカウント情報の取得
			--------------------------------------------------------------------- */
			$acc_result = $this->areamodel->do_select_shop($sid);
			if($acc_result != null){
				$data['acc_data'] = $acc_result[0];
			}
			/* ------------------------------------------------------------------ */
			/* エラーメッセージの代入
			--------------------------------------------------------------------- */
			if(isset($_SESSION['form_error'])){
				$data['form_error'] = $_SESSION['form_error'];
			}
			
			$this->smarty_parser->parse("ci:admin/area.tpl", $data);
			unset($_SESSION['msg'],$_SESSION['form_error']);
		}
		
		function to_confirm(){
			$todoufuken_id = "";
			$this -> load -> library('validation');
			$this -> validation -> set_error_delimiters('<li>','</li>');
			if($_POST['sid'] != ""){
				$sid = $_POST['sid'];
			}else{
				$sid = "";
			}
			if(isset($_POST['todoufuken_id']) and $_POST['todoufuken_id'] != ""){
				$todoufuken_id = $_POST['todoufuken_id'];
			}
			/* ------------------------------------------------------------------ */
			/* フィールドセット
			--------------------------------------------------------------------- */
			$fields['sid'] = "店舗番号";
			$fields['todoufuken_id'] = "都道府県";
			
			$this -> validation -> set_fields($fields);
			/* ------------------------------------------------------------------ */
			/* ルールセット
			--------------------------------------------------------------------- */
			$rules['sid'] = "required";
			$rules['todoufuken_id'] = "required";
			
			$this -> validation -> set_rules($rules);
			$this->validation->set_message('isset','%sが選択されていません。');
			
			if ($this->validation->run() == FALSE){
#				#NG
				foreach ($this->validation->_fields as $field => $label){
					$_SESSION['form_error'][$field] = $this->validation->{$field.'_error'};
					$_SESSION['form'][$field] = $this->input->post($field);
				}
				header("location: /admin/area/$sid/");
			}else{
				#OK
				header("location: /admin/region/$sid/$todoufuken_id/");
#				foreach ($this->validation->_fields as $field => $label){
#					$_SESSION['form'][$field] = $this->input->post($field);
#				}
#				header("location: /admin/region/");
			}
			
		}
		
		
		
		
		
		
	}
	
?>