<?php
class campaign extends ClientController {
	
	function campaign(){
		parent::ClientController();
		
#		$this->load->library('session');
#		$this->load->database();
		$this->load->helper(array('form','url','date'));
		$this->load->library('validation');
		$this->output->set_header('Content-Type: text/html; charset=UTF-8');
		$this->load->library('smarty_parser');
		
		$this -> load -> model('client/campaignmodel');
	}
	
	function index(){
		
		//初期設定---------------------------------------------------------------------------
		$data = array();
		$data['page_title'] = "キャンペーン";
		$data['now_category'] = "shop";
		$data['now_page'] = "campaign";
#		$data['sub_menu'] = "list";
		$data['document_root'] = str_replace("secure_html", "public_html", $_SERVER['DOCUMENT_ROOT']);
		
		$datestring = "%Y年%m月%d日";
		$time = time();
		$data['today'] = mdate($datestring, $time)."(".get_day($time).")";
		
#		$sid = $this->session->userdata['sid'];
		$sid = $_SESSION['login_dat']['sid'];
		
		$file_type = array("jpg","gif","png");
		$rootpass = $_SERVER['DOCUMENT_ROOT'];
		$updir = "/photo/".$sid;
		
		$error_result = "";
		$data['sid'] = $sid;
#		//-----------------------------------------------------------------------------------


		/* ------------------------------------------------------------------ */
		/* ユーザー情報の設定
		--------------------------------------------------------------------- */
		$result = $this->campaignmodel->select_shop_data("t_shop_base",array("sid" => $sid));
		if($result != null and count($result) == 1){
			$data['user_data'] = $result[0];
		}



		//データ抽出・セット-----------------------------------------------------------------
		if(isset($_SESSION['form'])){
			$data['form_data'] = $_SESSION['form'];
			unset($_SESSION['form']);
		}else{
			$db_dat = $this -> campaignmodel -> do_select(array("sid" => $sid));
			if(count($db_dat) == 1){
				$data['form_data']['cam_no'] = $db_dat[0]['cam_no'];
				$data['form_data']['sid'] = $db_dat[0]['sid'];
				$data['form_data']['cam_name'] = $db_dat[0]['cam_name'];
				$data['form_data']['cam_start_date'] = $db_dat[0]['cam_start_date'];
				$data['form_data']['cam_end_date'] = $db_dat[0]['cam_end_date'];
				$data['form_data']['cam_detail'] = $db_dat[0]['cam_detail'];
				$data['form_data']['cam_open'] = $db_dat[0]['cam_open'];
				$data['form_data']['cam_lastupdate'] = $db_dat[0]['cam_lastupdate'];
			}
		}
		
		if(isset($_SESSION['msg']) && $_SESSION['msg'] != ""){
			$data['msg'] = $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		if(isset($_SESSION['form_error']) && $_SESSION['form_error'] != ""){
			$data['form_error'] = $_SESSION['form_error'];
			unset($_SESSION['form_error']);
		}
		//画像セット-------------------------------------------------------------------------
		$file_name = "campaign1";
		$filed_name = "filename0";
		$photo_name = "";
		foreach($file_type as $key => $val){
			if(file_exists($rootpass.$updir."/".$file_name.".".$val)){
				$photo_name = $file_name.".".$val;
				break;
			}
		}
		if($photo_name != "") $data['form_data'][$filed_name] = $updir."/".$photo_name;
		
		//出力VIEW---------------------------------------------------------------------------
		$this->smarty_parser->parse("ci:client/campaign.tpl", $data);
		//-----------------------------------------------------------------------------------
	}
	
	function regist(){
		if($this->input->post('sid') == ""){
			$_SESSION['form_error'] = "DB登録エラーが発生いたしました。";
			header("location: /client/intro/");
			exit;
		}
		$query_flg =false;
		unset($_SESSION['form']);

#		$_SESSION['form']['cam_no'] = $this->input->post('cam_no');
#		$_SESSION['form']['sid'] = $this->session->userdata['sid'];
# 		$_SESSION['form']['sid'] = $_SESSION['login_dat']['sid'];
		$_SESSION['form']['sid'] = $this->input->post('sid');
		$_SESSION['form']['cam_name'] = $this->input->post('cam_name');
		$_SESSION['form']['cam_start_date'] = $this->input->post('cam_start_date');
		$_SESSION['form']['cam_end_date'] = $this->input->post('cam_end_date');
		$_SESSION['form']['cam_detail'] = $this->input->post('cam_detail');
		$_SESSION['form']['cam_open'] = $this->input->post('cam_open');
		$_SESSION['form']['cam_lastupdate'] = "now()";
		
		/* ------------------------------------------------------------------ */
		/* XSS対策 + タグの無効化
		--------------------------------------------------------------------- */
		foreach($_SESSION['form'] as $key => $val){
			$val = $this->input->xss_clean($val);
			$_SESSION['form'][$key] = htmlspecialchars($val);
		}
		/* ------------------------------------------------------------------ */
		
		if($this -> form_check()){
#			$db_dat = $this -> campaignmodel -> do_select(array("sid" => $this->session->userdata['sid']));
# 			$db_dat = $this -> campaignmodel -> do_select(array("sid" => $_SESSION['login_dat']['sid']));
			$db_dat = $this -> campaignmodel -> do_select(array("sid" => $_SESSION['form']['sid']));
			if(count($db_dat) > 0){
				//update
				if($this -> campaignmodel -> do_update($_SESSION['form'])) $query_flg =true;
			}else{
				//insert
				if($this -> campaignmodel -> do_insert($_SESSION['form'])) $query_flg =true; 
			}
			
			if($query_flg){
				$_SESSION['msg'] = "キャンペーンを設定しました。";
			}else{
				$_SESSION['msg'] = "キャンペーンを設定できませんでした。";
			}
		}
#		redirect('client/campaign/', 'refresh');
		header("location: /client/campaign/");
	}
	
	function form_check(){
		
		$err_ck = TRUE;
		$error_result = "";
		
		// バリデーション ルール設定
		$rules['cam_name'] = "trim|required";
		
		$this->validation->set_rules($rules);
		
		// バリデーション フィールド名設定
		$fields['sd_remind_mail'] = 'メールアドレス';
		
		$fields['cam_name'] = "キャンペーン名";
		
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
	
	function image_upload(){
		if($this->input->post('sid') == ""){
			$_SESSION['form_error'] = "アップロードエラーが発生いたしました。";
			header("location: /client/intro/");
			exit;
		}
		
		ini_set("memory_limit","128M"); 
#		ini_set ( "display_errors", "1" ); 
		
		
		//アップロード定数設定---------------------------
		
		$filed_name = $this->input->post('filed_name');
		$file_name = $this->input->post('file_name');
		
#		$filed_name = "filename0";
#		$file_name = "campaign1";
		
#		$sid = $this->session->userdata['sid'];
# 		$sid = $_SESSION['login_dat']['sid'];
		$sid = $this->input->post('sid');
		$file_type = array("jpg","gif","png");
		$rootpass = $_SERVER['DOCUMENT_ROOT'];
		$updir = "/photo/".$sid;
		//config
		$config['overwrite']  = TRUE;
		$config['upload_path'] = $rootpass.$updir;
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100000';
#		$config['max_width']  = '600';
#		$config['max_height']  = '400';
		
		
#		print filesize($_FILES[$file_name]['tmp_name']);
#		exit;
		
		
		if(filesize($_FILES[$file_name]['tmp_name']) > 2000000){
			$_SESSION['form_error'] = "ファイルサイズが大きすぎます。画像が登録できませんでした。";
			
			redirect('/client/campaign/');
			exit;
		}
		
		
		if($this->input->post('delete') != "削除"){
		//up
			//ディレクトリ作成-------------------------------
			if(!is_dir($rootpass.$updir)){
				mkdir($rootpass.$updir);
				chmod($rootpass.$updir,0777);
			}
			//ファイル名変更---------------------------------
			if(isset($_FILES[$filed_name]['name']) && $_FILES[$filed_name]['name'] != "" ){
				$splitname = split("\.",$_FILES[$filed_name]['name']);
				$_FILES[$filed_name]['name'] = $file_name.".".$splitname[1];
			}
			//アップロード-----------------------------------
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload($filed_name)){
			
				$error = array('error' => $this->upload->display_errors());
				$_SESSION['form_error'] = $error['error'];
			}else{
				if(isset($splitname[1]) and $splitname[1] != ""){
					foreach($file_type as $key => $val){
						if($val != $splitname[1]){
							if(file_exists($rootpass.$updir."/".$file_name.".".$val)){
								unlink($rootpass.$updir."/".$file_name.".".$val);
							}
						}
						
					}
					
				}
				
				/* ------------------------------------------------------------------ */
				/* 画像のリサイズ
				--------------------------------------------------------------------- */
				$img_w = 500;
#				$img_w = 230;
#				$img_h = 160;
				$img_h = 0;
				$img_quality = 80;
				
				/* ------------------------------------------------------------------ */
				/* 拡張子大文字対応
				--------------------------------------------------------------------- */
				rename($rootpass.$updir."/".$file_name.".".$splitname[1],$rootpass.$updir."/".$file_name.".".strtolower($splitname[1]));
				$splitname[1] = strtolower($splitname[1]);

				$uploaded_img = getimagesize($rootpass.$updir."/".$file_name.".".$splitname[1]);
				
#				if($uploaded_img[0] > $img_w or $uploaded_img[1] > $img_h){
				if($uploaded_img[0] > $img_w){
					$this->load->library('thumbnail',$rootpass.$updir."/".$file_name.".".$splitname[1]);
					$this->thumbnail->resize($img_w,$img_h);
					$this->thumbnail->show($img_quality,$rootpass.$updir."/".$file_name.".".$splitname[1]);
					
				}
				/* ------------------------------------------------------------------ */
				
				// t_shop_base の情報更新日をupdate する
				if(isset($sid) and $sid != ""){
					$this->db->query("update t_shop_base set sd_last_update = now() where sid = '".$sid."'");
				}
				
				$_SESSION['msg'] = "ファイルをアップロードしました。";
			}
		}else{
		//delete
			$delete_flg = FALSE;
			foreach($file_type as $key => $val){
				if(file_exists($rootpass.$updir."/".$file_name.".".$val)){
					unlink($rootpass.$updir."/".$file_name.".".$val);
					$_SESSION['msg'] = "ファイルを削除しました。";
					$delete_flg = TRUE;
				}
			}
			if(!$delete_flg) $_SESSION['form_error'] = "ファイルの削除に失敗しました。";
		}
		
#		redirect('client/campaign/', 'refresh');
		header("location: /client/campaign/");
	}
}
?>
