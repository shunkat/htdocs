<?php
class shopinfo extends ClientController {
	
	function shopinfo(){
		parent::ClientController();
		
#		$this->load->library('session');
#		$this->load->database();
		$this->load->helper(array('form', 'date'));
		$this->load->library('validation');
		$this->output->set_header('Content-Type: text/html; charset=UTF-8');
		$this->load->library('smarty_parser');
		
		$this -> load -> model('client/shopinfomodel');
	}
	
	function index(){
#		$this->output->enable_profiler(TRUE);
		
		//初期設定---------------------------------------------------------------------------
		$data = array();
		$data['page_title'] = "店舗情報";
		$data['now_category'] = "shop";
		$data['now_page'] = "shopinfo";
#		$data['sub_menu'] = "list";
		$data['document_root'] = str_replace("secure_html", "public_html", $_SERVER['DOCUMENT_ROOT']);
		
		$datestring = "%Y年%m月%d日";
		$time = time();
		$data['today'] = mdate($datestring, $time)."(".get_day($time).")";
		
#		$sid = $this->session->userdata['sid'];
		$sid = $_SESSION['login_dat']['sid'];
		$error_result = "";
#		//-----------------------------------------------------------------------------------


		/* ------------------------------------------------------------------ */
		/* ユーザー情報の設定
		--------------------------------------------------------------------- */
		$result = $this->shopinfomodel->do_select(array("sid" => $sid));
		if($result != null and count($result) == 1){
			$data['user_data'] = $result[0];
		}
		$data['sid'] = $sid;
		//データ抽出・セット-----------------------------------------------------------------
		if(isset($_SESSION['form'])){
			$data['form_data'] = $_SESSION['form'];
			unset($_SESSION['form']);
		}else{
#			$this -> load -> model('client/shopinfomodel');
			$db_dat = $this -> shopinfomodel -> do_select(array("sid" => $sid));
			if(count($db_dat) == 1){
				$data['form_data']['sd_shop_nm'] = $db_dat[0]['sd_shop_nm'];
				$data['form_data']['sd_shop_tel'] = $db_dat[0]['sd_shop_tel'];
				$data['form_data']['sd_shop_zip'] = $db_dat[0]['sd_shop_zip'];
				$data['form_data']['sd_shop_address'] = $db_dat[0]['sd_shop_address'];
				$data['form_data']['sd_shop_access'] = $db_dat[0]['sd_shop_access'];
				$data['form_data']['sd_shop_url'] = $db_dat[0]['sd_shop_url'];
				$data['form_data']['sd_shop_open'] = $db_dat[0]['sd_shop_open'];
				$data['form_data']['sd_shop_off'] = $db_dat[0]['sd_shop_off'];
				$data['form_data']['sd_shop_memo'] = $db_dat[0]['sd_shop_memo'];
			}
		}
		
		if(isset($data['form_data']['sd_shop_zip']) && $data['form_data']['sd_shop_zip'] != ""){
			$split_zip = split("-",$data['form_data']['sd_shop_zip']);
			$data['form_data']['sd_shop_zip1'] = $split_zip[0];
			$data['form_data']['sd_shop_zip2'] = $split_zip[1];
		}
		if(isset($_SESSION['msg']) && $_SESSION['msg'] != ""){
			$data['msg'] = $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		if(isset($_SESSION['form_error']) && $_SESSION['form_error'] != ""){
			$data['form_error'] = $_SESSION['form_error'];
			unset($_SESSION['form_error']);
		}
		
		//出力VIEW---------------------------------------------------------------------------
		$this->smarty_parser->parse("ci:client/shopinfo.tpl", $data);
		//-----------------------------------------------------------------------------------
	}
	
	function regist(){
		if($this->input->post('sid') == ""){
			$_SESSION['form_error'] = "DB登録エラーが発生いたしました。";
			header("location: /client/shopinfo/");
			exit;
		}
		
		
		unset($_SESSION['form']);
		
		$_SESSION['form']['sd_shop_nm'] = $this->input->post('sd_shop_nm');
		$_SESSION['form']['sd_shop_tel'] = $this->input->post('sd_shop_tel');
		$_SESSION['form']['sd_shop_zip'] = ($this->input->post('sd_shop_zip1'))."-".($this->input->post('sd_shop_zip2'));
		$_SESSION['form']['sd_shop_address'] = $this->input->post('sd_shop_address');
		$_SESSION['form']['sd_shop_access'] = $this->input->post('sd_shop_access');
		$_SESSION['form']['sd_shop_url'] = $this->input->post('sd_shop_url');
		$_SESSION['form']['sd_shop_open'] = $this->input->post('sd_shop_open');
		$_SESSION['form']['sd_shop_off'] = $this->input->post('sd_shop_off');
		$_SESSION['form']['sd_shop_memo'] = $this->input->post('sd_shop_memo');
		
#		$_SESSION['form']['sid'] = $this->session->userdata['sid'];
# 		$_SESSION['form']['sid'] = $_SESSION['login_dat']['sid'];
		$_SESSION['form']['sid'] = $this->input->post('sid');

		/* ------------------------------------------------------------------ */
		/* XSS対策 + タグの無効化
		--------------------------------------------------------------------- */
		foreach($_SESSION['form'] as $key => $val){
			$val = $this->input->xss_clean($val);
			$_SESSION['form'][$key] = htmlspecialchars($val);
		}
		/* ------------------------------------------------------------------ */
		if($this -> form_check()){
#			$this -> load -> model('client/shopinfomodel');
			
			if($this -> shopinfomodel -> do_update($_SESSION['form'])){
				$_SESSION['msg'] = "店舗情報を設定しました。";
				
				// 検索キャッシュの更新
				$this->shopinfomodel->make_search_cache(array("sid" => $_SESSION['login_dat']['sid']));
			}else{
				$_SESSION['msg'] = "店舗情報を設定できませんでした。";
			}
#			redirect('client/shopinfo/', 'refresh');
			header("location: /client/shopinfo/");
		}else{
#			redirect('client/shopinfo/', 'refresh');
			header("location: /client/shopinfo/");
		}
	}
	
	function form_check(){
		
		$err_ck = TRUE;
		$error_result = "";
		
		// バリデーション ルール設定
		$rules['sd_shop_nm'] = "trim|required";
		$rules['sd_shop_tel'] = "trim|required";
		$rules['sd_shop_zip1'] = "trim|required";
		$rules['sd_shop_zip2'] = "trim|required";
		$rules['sd_shop_address'] = "trim|required";
		$rules['sd_shop_open'] = "trim|required";
		$rules['sd_shop_off'] = "trim|required";
		$rules['sd_shop_memo'] = "trim";
		
		$this->validation->set_rules($rules);
		
		// バリデーション フィールド名設定
		$fields['sd_remind_mail'] = 'メールアドレス';
		
		$fields['sd_shop_nm'] = "店舗名";
		$fields['sd_shop_tel'] = "電話番号";
		$fields['sd_shop_zip1'] = "郵便番号(前)";
		$fields['sd_shop_zip2'] = "郵便番号(後)";
		$fields['sd_shop_address'] = "住所";
		$fields['sd_shop_open'] = "営業時間";
		$fields['sd_shop_off'] = "休業日";
		$fields['sd_shop_memo'] = "備考";
		
		$this->validation->set_fields($fields);
		
		if($this->validation->run() == FALSE ){
			foreach ($this->validation->_fields as $field => $label){
				$error_result .= $this->validation->{$field.'_error'}."\n";
			}
			$err_ck = FALSE;
		}
		
		if($err_ck){
			return true;
		}else{
			$_SESSION['form_error'] = $error_result;
			return false;
		}
	}
}
?>
