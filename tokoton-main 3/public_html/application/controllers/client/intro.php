<?php
class intro extends ClientController {
	
	function intro(){
		parent::ClientController();
		
#		$this->load->library('session');
#		$this->load->database();
		$this->load->helper(array('form','url', 'date'));
		$this->load->library('validation');
		$this->output->set_header('Content-Type: text/html; charset=UTF-8');
		$this->load->library('smarty_parser');
		
		$this -> load -> model('client/intromodel');
	}
	
	function index(){
		
		//初期設定---------------------------------------------------------------------------
		$data = array();
		$data['page_title'] = "紹介内容";
		$data['now_category'] = "shop";
		$data['now_page'] = "intro";
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
		$result = $this->intromodel->do_select(array("sid" => $sid));
		if($result != null and count($result) == 1){
			$data['user_data'] = $result[0];
		}


		//データ抽出・セット-----------------------------------------------------------------
#		if(isset($_SESSION['form'])){
#			$data['form_data'] = $_SESSION['form'];
#			unset($_SESSION['form']);
#		}else{
#			$db_dat = $this -> intromodel -> do_select(array("sid" => $sid));
#			if(count($db_dat) == 1){
#				$data['form_data']['sd_catch_copy'] = $db_dat[0]['sd_catch_copy'];
#				$data['form_data']['sd_intro'] = $db_dat[0]['sd_intro'];
#				$data['form_data']['sd_small_img01'] = $db_dat[0]['sd_small_img01'];
#				$data['form_data']['sd_small_img02'] = $db_dat[0]['sd_small_img02'];
#			}
#		}
		
		$db_dat = $this -> intromodel -> do_select(array("sid" => $sid));
		if(count($db_dat) == 1){
			$data['form_data']['sd_catch_copy'] = $db_dat[0]['sd_catch_copy'];
			$data['form_data']['sd_intro'] = $db_dat[0]['sd_intro'];
			$data['form_data']['sd_small_img01'] = $db_dat[0]['sd_small_img01'];
			$data['form_data']['sd_small_img02'] = $db_dat[0]['sd_small_img02'];
		}
		
		if(isset($_SESSION['form'])){
			foreach($_SESSION['form'] as $key => $val){
				$data['form_data'][$key] = $val;
			}
			unset($_SESSION['form']);
		}
		
		if(isset($_SESSION['msg']) && $_SESSION['msg'] != ""){
			$data['msg'] = $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		if(isset($_SESSION['form_error']) && $_SESSION['form_error'] != ""){
			$data['form_error'] = $_SESSION['form_error'];
			unset($_SESSION['form_error']);
		}
		
		//画像セット1------------------------------------------------------------------------
		$file_name = "intro1";
		$filed_name = "intro1";
		$photo_name = "";
		foreach($file_type as $key => $val){
			if(file_exists($rootpass.$updir."/".$file_name.".".$val)){
				$photo_name = $file_name.".".$val;
				break;
			}
		}
		if($photo_name != "") $data['form_data'][$filed_name] = $updir."/".$photo_name;
		
		//画像セット2------------------------------------------------------------------------
		$file_name = "intro2";
		$filed_name = "intro2";
		$photo_name = "";
		foreach($file_type as $key => $val){
			if(file_exists($rootpass.$updir."/".$file_name.".".$val)){
				$photo_name = $file_name.".".$val;
				break;
			}
		}
		if($photo_name != "") $data['form_data'][$filed_name] = $updir."/".$photo_name;
		
		//画像セット3------------------------------------------------------------------------
		$file_name = "intro3";
		$filed_name = "intro3";
		$photo_name = "";
		foreach($file_type as $key => $val){
			if(file_exists($rootpass.$updir."/".$file_name.".".$val)){
				$photo_name = $file_name.".".$val;
				break;
			}
		}
		if($photo_name != "") $data['form_data'][$filed_name] = $updir."/".$photo_name;

		
		//出力VIEW---------------------------------------------------------------------------
		$this->smarty_parser->parse("ci:client/intro.tpl", $data);
		//-----------------------------------------------------------------------------------
	}
	
	function regist(){
		$query_flg =false;
		unset($_SESSION['form']);

		if($this->input->post('sid') == ""){
			$_SESSION['form_error'] = "DB登録エラーが発生いたしました。";
			header("location: /client/intro/");
			exit;
		}

#		$_SESSION['form']['cam_no'] = $this->input->post('cam_no');
#		$_SESSION['form']['sid'] = $this->session->userdata['sid'];
# 		$_SESSION['form']['sid'] = $_SESSION['login_dat']['sid'];
		$_SESSION['form']['sid'] = $this->input->post('sid');
		$_SESSION['form']['sd_catch_copy'] = $this->input->post('sd_catch_copy');
		$_SESSION['form']['sd_intro'] = $this->input->post('sd_intro');
		
		/* ------------------------------------------------------------------ */
		/* XSS対策 + タグの無効化
		--------------------------------------------------------------------- */
		foreach($_SESSION['form'] as $key => $val){
			$val = $this->input->xss_clean($val);
			$_SESSION['form'][$key] = htmlspecialchars($val);
		}
		/* ------------------------------------------------------------------ */
		
		if($this -> form_check()){
			if($this -> intromodel -> do_update($_SESSION['form'])){
				$_SESSION['msg'] = "紹介内容を設定しました。";
				// 検索キャッシュの更新
				$this->intromodel->make_search_cache(array("sid" => $_SESSION['login_dat']['sid']));
				unset($_SESSION['form']);
			}else{
				$_SESSION['msg'] = "紹介内容を設定できませんでした。";
			}
		}
#		redirect('client/intro/', 'refresh');
		header("location: /client/intro/");
	}
	
	function form_check(){
		
		$err_ck = TRUE;
		$error_result = "";
		
		// バリデーション ルール設定
		$rules['sd_catch_copy'] = "trim|required|max_length[60]";
		$rules['sd_intro'] = "trim|required|callback_line_num_chk";
		
		$this->validation->set_rules($rules);
		
		// バリデーション フィールド名設定
		$fields['sd_catch_copy'] = "キャッチコピー";
		$fields['sd_intro'] = '紹介文';
		
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
		
		
		if(filesize($_FILES[$file_name]['tmp_name']) > 2000000){
			$_SESSION['form_error'] = "ファイルサイズが大きすぎます。画像が登録できませんでした。";
			
			redirect('/client/intro/');
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
			
			// テキストがnullだったら画像が登録してあるか確認する
			if((isset($_POST['sd_small_img01']) and $_POST['sd_small_img01'] != "" and isset($_FILES[$filed_name]['name']) and $_FILES[$filed_name]['name'] == "") or (isset($_POST['sd_small_img02']) and $_POST['sd_small_img02'] != "" and isset($_FILES[$filed_name]['name']) and $_FILES[$filed_name]['name'] == "")){
				$exists_flag = false;
				for($i=0;$i<count($file_type);$i++){
					if(file_exists($rootpass.$updir."/".$file_name.".".$file_type[$i])){
						$exists_flag = true;
					}
				}
				
				if(!$exists_flag){
					if(isset($_POST['sd_small_img01'])){
						$_SESSION['form']['sd_small_img01'] = $_POST['sd_small_img01'];
					}elseif($_POST['sd_small_img02']){
						$_SESSION['form']['sd_small_img02'] = $_POST['sd_small_img02'];
					}
					$_SESSION['form_error'] = "画像を選択してください。";
					
					
					header("location: /client/intro/");
					exit;
				}
				
			}
			
			
			
			if(isset($_FILES[$filed_name]['name']) and $_FILES[$filed_name]['name'] != ""){
				
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
					/* 拡張子大文字対応
					--------------------------------------------------------------------- */
					rename($rootpass.$updir."/".$file_name.".".$splitname[1],$rootpass.$updir."/".$file_name.".".strtolower($splitname[1]));
					$splitname[1] = strtolower($splitname[1]);
					/* ------------------------------------------------------------------ */
					/* 画像のリサイズ
					--------------------------------------------------------------------- */
					$uploaded_img = getimagesize($rootpass.$updir."/".$file_name.".".$splitname[1]);
#					$intro2_w = "";
#					$intro2_h = "";
#					if($filed_name != "intro1"){
#						// 横長画像 or 縦長画像
#						if($uploaded_img[0] < $uploaded_img[1]){								// 縦長画像
#							$intro2_w = 230;
#							$intro2_h = 172;
#						}else{																// 横長画像
#							$intro2_w = 230;
#							$intro2_h = 0;
#						}
#					}
					
					
					$intro1_w = 350;
					$intro1_h = 0;
					$intro2_w = 0;
					$intro2_h = 172;
					$img_quality = 80;
				
					if(($filed_name == "intro1" and ($uploaded_img[0] > $intro1_w)) or ($filed_name != "intro1" and (($intro2_w != 0 and $uploaded_img[0] > $intro2_w) or ($intro2_h != 0 and $uploaded_img[1] > $intro2_h)))){
					
						$this->load->library('thumbnail',$rootpass.$updir."/".$file_name.".".$splitname[1]);
				
						if($filed_name == "intro1"){
							$this->thumbnail->resize($intro1_w,$intro1_h);
						}else{
							$this->thumbnail->resize($intro2_w,$intro2_h);
						}
						$this->thumbnail->show($img_quality,$rootpass.$updir."/".$file_name.".".$splitname[1]);
					
					
					}
				}
			}
			
			/* ------------------------------------------------------------------ */
		
			switch($filed_name){
				case 'intro1':
					$this -> intromodel -> do_update(array("sid" => $sid,"sd_last_update" => "now()"));
					$_SESSION['msg'] = "店舗画像(大)を登録しました。";
					break;
				case 'intro2':
					$_SESSION['form']['sid'] = $sid;
					$_SESSION['form']['sd_small_img01'] = $this->input->post('sd_small_img01');
					if($this -> intromodel -> do_update($_SESSION['form'])){
						$_SESSION['msg'] = "店舗画像(小)/画像1・説明文を登録しました。";
					}else{
						$_SESSION['msg'] = "店舗画像(小)/説明文を登録できませんでした。";
					}
					break;
				case 'intro3':
					$_SESSION['form']['sid'] = $sid;
					$_SESSION['form']['sd_small_img02'] = $this->input->post('sd_small_img02');
					if($this -> intromodel -> do_update($_SESSION['form'])){
						$_SESSION['msg'] = "店舗画像(小)/画像2・説明文を登録しました。";
					}else{
						$_SESSION['msg'] = "店舗画像(小)/説明文を登録できませんでした。";
					}
					break;
				default:
					break;
			}
			unset($_SESSION['form']);
				
			
			
			
			
			
			
			
			
			
#			//アップロード-----------------------------------
#			$this->load->library('upload', $config);
#			if ( ! $this->upload->do_upload($filed_name)){
#				$error = array('error' => $this->upload->display_errors());
#				$_SESSION['form_error'] = $error['error'];
#			}else{
#				
#				if(isset($splitname[1]) and $splitname[1] != ""){
#					foreach($file_type as $key => $val){
#						if($val != $splitname[1]){
#							if(file_exists($rootpass.$updir."/".$file_name.".".$val)){
#								unlink($rootpass.$updir."/".$file_name.".".$val);
#							}
#						}
#						
#					}
#					
#				}
#				
#				/* ------------------------------------------------------------------ */
#				/* 画像のリサイズ
#				--------------------------------------------------------------------- */
#				$uploaded_img = getimagesize($rootpass.$updir."/".$file_name.".".$splitname[1]);
#				
#				$intro1_w = 350;
# #				$intro1_h = 250;
#				$intro1_h = 0;
#				$intro2_w = 230;
# #				$intro2_h = 160;
#				$intro2_h = 0;
#				$img_quality = 80;
#				
# #				if(($filed_name == "intro1" and ($uploaded_img[0] > $intro1_w or $uploaded_img[1] > $intro1_h)) or ($filed_name != "intro1" and ($uploaded_img[0] > $intro2_w or $uploaded_img[1] > $intro2_h))){
#				if(($filed_name == "intro1" and ($uploaded_img[0] > $intro1_w)) or ($filed_name != "intro1" and ($uploaded_img[0] > $intro2_w))){
#					
#					$this->load->library('thumbnail',$rootpass.$updir."/".$file_name.".".$splitname[1]);
#				
#					if($filed_name == "intro1"){
#						$this->thumbnail->resize($intro1_w,$intro1_h);
#					}else{
#						$this->thumbnail->resize($intro2_w,$intro2_h);
#					}
#					$this->thumbnail->show($img_quality,$rootpass.$updir."/".$file_name.".".$splitname[1]);
#					
#				}
#				/* ------------------------------------------------------------------ */
#				
#				switch($filed_name){
#					case 'intro1':
#						$_SESSION['msg'] = "店舗画像(大)を登録しました。";
#						break;
#					case 'intro2':
#						$_SESSION['form']['sid'] = $sid;
#						$_SESSION['form']['sd_small_img01'] = $this->input->post('sd_small_img01');
#						if($this -> intromodel -> do_update($_SESSION['form'])){
#							$_SESSION['msg'] = "店舗画像(小)/画像1・説明文を登録しました。";
#						}else{
#							$_SESSION['msg'] = "店舗画像(小)/説明文を登録できませんでした。";
#						}
#						break;
#					case 'intro3':
#						$_SESSION['form']['sid'] = $sid;
#						$_SESSION['form']['sd_small_img02'] = $this->input->post('sd_small_img02');
#						if($this -> intromodel -> do_update($_SESSION['form'])){
#							$_SESSION['msg'] = "店舗画像(小)/画像2・説明文を登録しました。";
#						}else{
#							$_SESSION['msg'] = "店舗画像(小)/説明文を登録できませんでした。";
#						}
#						break;
#					default:
#						break;
#				}
#				unset($_SESSION['form']);
#			}
		}else{
		//delete
			$delete_flg = FALSE;
			foreach($file_type as $key => $val){
				if(file_exists($rootpass.$updir."/".$file_name.".".$val)){
					unlink($rootpass.$updir."/".$file_name.".".$val);
					$delete_flg = TRUE;
				}
			}
			if($delete_flg){
				switch($filed_name){
					case 'intro1':
						$_SESSION['msg'] = "店舗画像(大)を削除しました。";
						break;
					case 'intro2':
						$_SESSION['form']['sid'] = $sid;
						$_SESSION['form']['sd_small_img01'] = "";
						if($this -> intromodel -> do_update($_SESSION['form'])){
							$_SESSION['msg'] = "店舗画像(小)/画像1・説明文を削除しました。";
						}else{
							$_SESSION['msg'] = "店舗画像(小)/説明文を削除できませんでした。";
						}
						break;
					case 'intro3':
						$_SESSION['form']['sid'] = $sid;
						$_SESSION['form']['sd_small_img02'] = "";
						if($this -> intromodel -> do_update($_SESSION['form'])){
							$_SESSION['msg'] = "店舗画像(小)/画像2・説明文を削除しました。";
						}else{
							$_SESSION['msg'] = "店舗画像(小)/説明文を削除できませんでした。";
						}
						break;
					default:
						break;
				}
				unset($_SESSION['form']);
			}else{
				$_SESSION['form_error'] = "ファイルの削除に失敗しました。";
			}
		}
		
#		redirect('client/intro/', 'refresh');
		header("location: /client/intro/");
	}
	
	
	function line_num_chk($str){
		$max_line_str = 34;
		$chk_flag = true;
		$num = "";
		
		$str_arr = explode("\n",$str);
		$arr_count = count($str_arr);
		
		
		if($arr_count > 6){
			$chk_flag = false;
		}else{
			
			for($i=0;$i<count($str_arr);$i++){
				$num = ceil(strlen($str_arr[$i]) / ($max_line_str * 3));
				if($num > 1){
					$arr_count = $arr_count + ($num - 1);
				}
			}
			
			if($arr_count > 6){
				$chk_flag = false;
			}
			
		}
		
		
		if(!$chk_flag){
			$this->validation->set_message('line_num_chk','紹介文は6行以内で入力してください。');
			return false;
		}else{
			return true;
		}
		
	}
	
	
	

}
?>
