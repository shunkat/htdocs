<?
	class Top extends ClientController{
		/* ------------------------------------------------------------------ */
		/* 共通変数設定
		--------------------------------------------------------------------- */
#		var $table = "t_shop_top";
		
		
		function Top(){
			parent::ClientController();
			$this -> load -> helper(array('form','date'));									// ヘルパーのロード
			
			$this -> output -> set_header('Content-Type: text/html; charset=UTF-8');
		}
		function index($url_param = ""){
			$data = array();
			/* ------------------------------------------------------------------ */
			/* ページの設定
			--------------------------------------------------------------------- */
			$data['page_title'] = "ホーム";
			$data['now_category'] = "top";
			$data['now_page'] = "top";
			$data['document_root'] = str_replace("secure_html", "public_html", $_SERVER['DOCUMENT_ROOT']);
			
			$datestring = "%Y年%m月%d日";
			$time = time();
			$data['today'] = mdate($datestring, $time)."(".get_day($time).")";
			
#			$data['sid'] = $this->session->userdata['sid'];
			$data['sid'] = $_SESSION['login_dat']['sid'];
			/* ------------------------------------------------------------------ */
			/* エラーメッセージの代入
			--------------------------------------------------------------------- */
			if(isset($_SESSION['form_error'])){
				$data['form_error'] = $_SESSION['form_error'];
			}
			/* ------------------------------------------------------------------ */
			/* メッセージの代入
			--------------------------------------------------------------------- */
			if(isset($_SESSION['msg']) && $_SESSION['msg'] != ""){
				$data['msg'] = $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
			/* ------------------------------------------------------------------ */
			/* フォームデータ
			--------------------------------------------------------------------- */
			if(isset($_SESSION['form'])){
				$data['form_data'] = $_SESSION['form'];
			}
			
			/* ------------------------------------------------------------------ */
			/* ユーザーデータの取得
			--------------------------------------------------------------------- */
			$this -> load -> model('client/topmodel');
			$result = $this -> topmodel -> do_select("t_shop_base",array("sid" => $data['sid']));
			
			if($result != null and count($result) == 1){
				foreach($result[0] as $key => $val){
					$data['user_data'][$key] = $val;
				}
				/* ------------------------------------------------------------------ */
				/* 注意文用フラグの設定
				--------------------------------------------------------------------- */
				if($data['user_data']['sd_exam_state'] == 0){
					$data['user_data']['exam_flag']  = "t";
				}else{
					$data['user_data']['exam_flag']  = "f";
				}
				if($data['user_data']['sd_catch_copy'] == "" or $data['user_data']['sd_intro'] == ""){
					$data['user_data']['intro_flag'] = "t";
				}else{
					$data['user_data']['intro_flag'] = "f";
				}
				if($data['user_data']['sd_shop_nm'] == "" or $data['user_data']['sd_shop_tel'] == "" or $data['user_data']['sd_shop_zip'] == "" or $data['user_data']['sd_shop_address'] == "" or $data['user_data']['sd_shop_open'] == "" or $data['user_data']['sd_shop_off'] == ""){
					$data['user_data']['shop_info_flag'] = "t";
				}else{
					$data['user_data']['shop_info_flag'] = "f";
				}
				
				if($data['user_data']['di_itm01_nm'] == "" and $data['user_data']['di_itm02_nm'] == "" and $data['user_data']['di_itm03_nm'] == "" and $data['user_data']['di_itm04_nm'] == "" and $data['user_data']['di_itm05_nm'] == "" and $data['user_data']['di_itm06_nm'] == "" and $data['user_data']['di_itm07_nm'] == "" and $data['user_data']['di_itm08_nm'] == ""){
					$data['user_data']['plan_item_flag'] = "t";
				}else{
					$data['user_data']['plan_item_flag'] = "f";
				}
				
				if($data['user_data']['sd_estimate_mail'] == "" or $data['user_data']['sd_info_mail'] == ""){
					$data['user_data']['mail_flag'] = "t";
				}else{
					$data['user_data']['mail_flag'] = "f";
				}
				
				if($data['user_data']['sd_company_nm'] == "" and $data['user_data']['sd_tanto_nm'] == "" and $data['user_data']['sd_tanto_kana'] == "" and $data['user_data']['sd_company_tel'] == "" and $data['user_data']['sd_company_zip'] == "" and $data['user_data']['sd_company_address'] == ""){
					$data['user_data']['company_flag'] = "t";
				}else{
					$data['user_data']['company_flag'] = "f";
				}
				
				
			}
			
			$result = $this -> topmodel -> do_select("t_shop_planbase",array("sid" => $data['sid']));
			if($result != null){
				if(count($result) > 0){
					$data['user_data']['plan_flag'] = "f";
				}else{
					$data['user_data']['plan_flag'] = "t";
				}
			}else{
				$data['user_data']['plan_flag'] = "t";
			}
			
			$result = $this -> topmodel -> do_select("t_shop_mailformat",array("sid" => $data['sid']));
			if($result != null){
				if(count($result) > 0){
					$data['user_data']['mailformat_flag'] = "f";
				}else{
					$data['user_data']['mailformat_flag'] = "t";
				}
			}else{
				$data['user_data']['mailformat_flag'] = "t";
			}
			
			/* ------------------------------------------------------------------ */
			/* お知らせの取得
			--------------------------------------------------------------------- */
			$result = $this -> topmodel -> do_select("t_manager_info");
			if($result != null){
				$data['info_data'] = $result;
			}
			
			/* ------------------------------------------------------------------ */
			/* URL判定（$url_param が 「copy」である場合のみコピーフォームを表示させる）
			--------------------------------------------------------------------- */
			if($url_param == "copy"){
				$data['copy_flag'] = "t";
				
			}
			
			
			$this->smarty_parser->parse("ci:client/top.tpl", $data);
			unset($_SESSION['msg'],$_SESSION['form_error']);
		}
		
		function locate_copy(){
			$chk_flag = true;
			
			$this->load->library('validation');
			
			$fields['copy_sid'] = "コピー元店舗番号";
			$fields['this_sid'] = "現在の店舗番号";
			
			$rules['copy_sid'] = "trim|xss_clean|required|numeric|callback_exists_chk";
			$rules['this_sid'] = "trim|xss_clean|required|numeric";
			
			$this->validation->set_fields($fields);
			$this->validation->set_rules($rules);
			
			// セッションに代入
			foreach ($this->validation->_fields as $field => $label){
				$_SESSION['form'][$field] = $this->validation->{$field};
			}
			
			// エラーチェック
			if($this->validation->run() === false){
				$chk_flag = false;
			}
			
			
			if(!$chk_flag){
				foreach ($this->validation->_fields as $field => $label){
					$_SESSION['form_error'][$field] = $this->validation->{$field.'_error'};
				}
				header("location: /client/top/copy/");
				exit;
			}
			
			
			// コピーの実行
			$this->load->model("client/topmodel");
			$result = $this->topmodel->copyData($this->input->post("this_sid"),$this->input->post("copy_sid"));
			
			if($result){
				$_SESSION['msg'] = "コピーが完了しました。";
				unset($_SESSION['form']);
			}else{
				$_SESSION['form_error'][] = "コピーに失敗しました。";
			}
			header("location: /client/top/copy/");
			exit;
		}
		
		
		function exists_chk($copy_sid = ""){
			
			$this->db->select("sid");
			$this->db->from("t_shop_base");
			$this->db->where("sid",$copy_sid);
			
			$query = $this->db->get();
			$rows = $query->num_rows;
			
			if($rows > 0){
				return true;
			}else{
				$this->validation->set_message('exists_chk', '入力した%sは存在しない店舗番号です。');
				return false;
			}
		}
		
		
	}
	
?>