<?
	class Detail extends AdminController{
		/* ------------------------------------------------------------------ */
		/* 共通変数設定
		--------------------------------------------------------------------- */
		var $table = "t_shop_base";
		var $pkey = "";
		var $column_nm_arr = array("sd_page_keyword01","sd_page_keyword02","sd_page_keyword03","sd_page_keyword04","sd_page_keyword05","sd_page_keyword06","sd_page_keyword07","sd_page_keyword08","sd_page_keyword09");
		
		function Detail(){
			parent::AdminController();
			$this -> load -> helper(array('form','date','pwd'));									// ヘルパーのロード
			$this -> load -> model('admin/detailmodel');
			
			$this -> output -> set_header('Content-Type: text/html; charset=UTF-8');
		}
		function index($sid = ""){
			if($sid == ""){
				header("location: /admin/account/");
			}
			/* ------------------------------------------------------------------ */
			/* ページの設定
			--------------------------------------------------------------------- */
			$data['page_title'] = "アカウント詳細";
			$data['now_page'] = "account";
			$data['document_root'] = str_replace("secure_html", "public_html", $_SERVER['DOCUMENT_ROOT']);
			
			$datestring = "%Y年%m月%d日";
			$time = time();
			$data['today'] = mdate($datestring, $time)."(".get_day($time).")";
			/* ------------------------------------------------------------------ */
			/* 初期化
			--------------------------------------------------------------------- */
			$where_list = array();
			/* ------------------------------------------------------------------ */
			/* ロード
			--------------------------------------------------------------------- */
			$this -> load -> model('admin/detailmodel');
			/* ------------------------------------------------------------------ */
			/* 店舗情報取得
			--------------------------------------------------------------------- */
			$result = $this->detailmodel->do_select($sid);
			if($result != null){
				foreach($result as $key => $val){
					$disp_arr = array();
					
					$buf_arr = $val;
					$disp_arr = $this -> detailmodel -> data_display($val);
					if($disp_arr){
						$val = $disp_arr;
					}
					$data['query_data'] = $val;
				}
			}
			$data['sid'] = $sid;
			/* ------------------------------------------------------------------ */
			/* 選択地域の取得
			--------------------------------------------------------------------- */
			if(isset($data['query_data']['sd_open_chiku'])){
				$result = $this->detailmodel->do_select_data("m_region mr",array("region_id" => $data['query_data']['sd_open_chiku']));
				
				if(isset($result) and count($result) == 1){
					$data['query_data']['region_nm'] = $result[0]['region_nm'];
					$data['query_data']['sub_region_nm'] = $result[0]['sub_region_nm'];
					$data['query_data']['todoufuken_nm'] = $result[0]['todoufuken_nm'];
				}
			}
			
			/* ------------------------------------------------------------------ */
			/* 座標整形 2009/01/07 Googleマップ修正 added by mori
			--------------------------------------------------------------------- */
			if(!empty($data['query_data']['sd_point'])){
				$data['query_data']['sd_point'] = str_replace("(","",$data['query_data']['sd_point']);
				$data['query_data']['sd_point'] = str_replace(")","",$data['query_data']['sd_point']);
				list($la,$lon) = explode(",",$data['query_data']['sd_point']);
				$data['query_data']['sd_point_la'] = $la;
				$data['query_data']['sd_point_lon'] = $lon;
			}
			// session の値表示
			if(!empty($_SESSION['form']['sd_point_la'])){
				$data['query_data']['sd_point_la'] = $_SESSION['form']['sd_point_la'];
			}
			if(!empty($_SESSION['form']['sd_point_lon'])){
				$data['query_data']['sd_point_lon'] = $_SESSION['form']['sd_point_lon'];
			}
			
			/* ------------------------------------------------------------------ */
			/* ページタイトル　2009/08/24　title description keywords 設定BOX設置 added by mori
			--------------------------------------------------------------------- */
			// session の値表示
			if(!empty($_SESSION['form']['sd_page_description'])){
				$data['query_data']['sd_page_description'] = $_SESSION['form']['sd_page_description'];
				
			}
			/* ------------------------------------------------------------------ */
			/* ページキーワード　2009/08/24　title description keywords 設定BOX設置 added by mori
			--------------------------------------------------------------------- */
			// session の値表示
			if(!empty($this->column_nm_arr)){
				
				for($i=0;$i<count($this->column_nm_arr);$i++){
					if(isset($_SESSION['form'][$this->column_nm_arr[$i]])){
						$data['query_data'][$this->column_nm_arr[$i]] = $_SESSION['form'][$this->column_nm_arr[$i]];
						
					}
					
				}
				
			}
			
			/* ------------------------------------------------------------------ */
			/* 画像データの取得
			--------------------------------------------------------------------- */
			$img_type = array("gif","jpg");
			$bigimg_w = "350";
			$bigimg_h = "250";
			// 大画像
			for($i=0;$i<count($img_type);$i++){
				$image_buf = "";
				if(file_exists($_SERVER['DOCUMENT_ROOT']."/photo/".$sid."/intro1.".$img_type[$i])){
					$image_buf = getimagesize($_SERVER['DOCUMENT_ROOT']."/photo/".$sid."/intro1.".$img_type[$i]);
					$bigimg_result = $this->detailmodel->image_resize($image_buf[0],$image_buf[1],$bigimg_w,$bigimg_h);
					if($bigimg_result != null){
						$data['bigimg_data'] = $bigimg_result;
						$data['bigimg_data']['img_path'] = "/photo/".$sid."/intro1.".$img_type[$i];
					}
					
				}
			}
			// 小画像1
			$small1_w = "230";
			$small1_h = "160";
			for($i=0;$i<count($img_type);$i++){
				$image_buf2 = "";
				if(file_exists($_SERVER['DOCUMENT_ROOT']."/photo/".$sid."/intro2.".$img_type[$i])){
					$image_buf2 = getimagesize($_SERVER['DOCUMENT_ROOT']."/photo/".$sid."/intro2.".$img_type[$i]);
					$small1_result = $this->detailmodel->image_resize($image_buf2[0],$image_buf2[1],$small1_w,$small1_h);
					
					if($small1_result != null){
						$data['small1img_data'] = $small1_result;
						$data['small1img_data']['img_path'] = "/photo/".$sid."/intro2.".$img_type[$i];
					}
				}
			}
			// 小画像2
			for($i=0;$i<count($img_type);$i++){
				$image_buf3 = "";
				if(file_exists($_SERVER['DOCUMENT_ROOT']."/photo/".$sid."/intro3.".$img_type[$i])){
					$image_buf3 = getimagesize($_SERVER['DOCUMENT_ROOT']."/photo/".$sid."/intro3.".$img_type[$i]);
					$small2_result = $this->detailmodel->image_resize($image_buf3[0],$image_buf3[1],$small1_w,$small1_h);
					
					if($small2_result != null){
						$data['small2img_data'] = $small2_result;
						$data['small2img_data']['img_path'] = "/photo/".$sid."/intro3.".$img_type[$i];
					}
				}
			}
			/* ------------------------------------------------------------------ */
			/* 店舗オプション
			--------------------------------------------------------------------- */
			$option_result = $this->detailmodel->do_select_data("t_shop_shopopsion",array("sid" => $sid));
			if($option_result != null){
				$buf_arr = array();
				for($i=0;$i<count($option_result);$i++){
					$buf_arr[] = $option_result[$i]['shop_option_no'];
				}
				
				if(isset($buf_arr) and $buf_arr != null){
					$icon_num = 16;
					$icon = array();
					for($i=1;$i<=$icon_num;$i++){
						if(array_search($i,$buf_arr) !== false){
							$icon['icon'.$i] = "t";
						}else{
							$icon['icon'.$i] = "";
						}
					}
					
					if(isset($icon) and $icon != null){
						$data['icon'] = $icon;
					}
					
				}
				
			}
			/* ------------------------------------------------------------------ */
			/* 登録情報一覧
			--------------------------------------------------------------------- */
			// プラン数
			$plan_result = $this->detailmodel->do_select_data("t_shop_planbase",array("sid" => $sid));
			if($plan_result != null){
				$data['plan'] = count($plan_result);
				
			}else{
				$data['plan'] = 0;
			}
			// オプション数
			$addop_result = $this->detailmodel->do_select_data("t_shop_adoption",array("sid" => $sid));
			if($addop_result != null){
				$data['add_option'] = count($addop_result);
			}else{
				$data['add_option'] = 0;
			}
			
			// 割引メニュー数
			$dsc_result = $this->detailmodel->do_select_data("t_shop_dscbase",array("sid" => $sid));
			if($dsc_result != null){
				$data['dsc_menu'] = count($dsc_result);
			}else{
				$data['dsc_menu'] = 0;
			}
			
			// サービス数
			$srv_result = $this->detailmodel->do_select_data("t_shop_service",array("sid" => $sid));
			if($srv_result != null){
				$data['service'] = count($srv_result);
			}else{
				$data['service'] = 0;
			}
			// キャンペーン
			$cpn_result = $this->detailmodel->do_select_data("t_shop_campaign",array("sid" => $sid));
			if($cpn_result != null and count($cpn_result) == 1){
				if($cpn_result[0]['cam_open'] == "t"){
					$data['campaign'] = "実施中";
					$data['campaign_flag'] = "t";
				}else{
					$data['campaign'] = "非掲載";
					$data['campaign_flag'] = "t";
				}
			}else{
				$data['campaign'] = "非掲載";
					$data['campaign_flag'] = "f";
			}
			
			// クーポン
			$cou_result = $this->detailmodel->do_select_data("t_shop_coupon",array("sid" => $sid));
			if($cpn_result != null and count($cou_result) == 1){
				if($cou_result[0]['cou_open_state'] == "t"){
					$data['coupon'] = "有り";
					$data['coupon_flag'] = "t";
					
				}else{
					$data['coupon'] = "無し";
					$data['coupon_flag'] = "t";
				}
			}else{
				$data['coupon'] = "無し";
				$data['coupon_flag'] = "f";
			}
			
			// メールフォーマット
			$mail_result = $this->detailmodel->do_select_data("t_shop_mailformat",array("sid" => $sid));
			if($mail_result != null and count($mail_result) == 1){
				if($mail_result[0]['mail_subject'] != "" or $mail_result[0]['mail_greeting'] != "" or $mail_result[0]['mail_footer'] != ""){
					$data['format_flag'] = "t";
				}else{
					$data['format_flag'] = "f";
				}
			}else{
				$data['format_flag'] = "f";
			}
			
			/* ------------------------------------------------------------------ */
			/* 利用状況
			--------------------------------------------------------------------- */
			$use_result = $this->detailmodel->do_select_data("t_manager_usedata",array("sid" => $sid,"ud_year" => date("Y"),"ud_month" => date("m")));
			
			if($use_result != null and count($use_result) == 1){
				foreach($use_result[0] as $key => $val){
					if($val == ""){
						$data['use_data'][$key] = 0;
					}else{
						$data['use_data'][$key] = $val;
					}
				}
			}else{
				$data['use_data']['ud_conversion_cnt'] = 0;
				$data['use_data']['ud_access_cnt'] = 0;
				$data['use_data']['ud_coupon_cnt'] = 0;
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
#			if(isset($_SESSION['form']['sd_customer_nm'])){
#				$data['query_data']['sd_customer_nm'] = $_SESSION['form']['sd_customer_nm'];
#			}
			// 表示対策
			$data['edit_data']['sd_customer_nm'] = (isset($_SESSION['form']['sd_customer_nm']))? $_SESSION['form']['sd_customer_nm'] : $data['query_data']['sd_customer_nm'];
			
			$data['edit_data']['sd_contract_shop'] = (isset($_SESSION['form']['sd_contract_shop']))? $_SESSION['form']['sd_contract_shop'] : $data['query_data']['sd_contract_shop'];
			
			if(isset($_SESSION['form']['sd_remind_mail'])){
				$data['query_data']['sd_remind_mail'] = $_SESSION['form']['sd_remind_mail'];
			}
			if(isset($_SESSION['form']['sd_basic_charge'])){
				$data['query_data']['sd_basic_charge'] = $_SESSION['form']['sd_basic_charge'];
			}
			
			// 出稿ランクプルダウン
			if(isset($data['query_data']['sd_copy_lank'])){
				$data['rank_pulldown'] = $this->detailmodel->make_rank_pulldown($data['query_data']['sd_copy_lank']);
			}else{
				$data['rank_pulldown'] = $this->detailmodel->make_rank_pulldown();
			}
			

# 				print "<pre>";
# 				print_r($data);
# 				print "</pre>";

			$this->smarty_parser->parse("ci:admin/detail.tpl", $data);
			unset($_SESSION['msg'],$_SESSION['form_error'],$_SESSION['form']);
		}
#		
		function to_confirm(){
			unset($_SESSION['form_error']);
			$this -> load -> library('validation');
			$this -> validation -> set_error_delimiters('<li>','</li>');
			
			$this->pkey = $_POST['sid'];
			/* ------------------------------------------------------------------ */
			/* XSS対策 + タグの無効化
			--------------------------------------------------------------------- */
			foreach($_POST as $key => $val){
				$val = $this->input->xss_clean($val);
				$_POST[$key] = htmlspecialchars($val);
			}
			
			/* ------------------------------------------------------------------ */
			/* フィールド・ルールセット
			--------------------------------------------------------------------- */
			$sid = $_POST['sid'];
			$fields['sid'] = "店舗番号";
			if($_POST['mode'] == "memo_regist"){
				$fields['sd_memo'] = "メモ";
				$rules['sd_memo'] = "";
			}elseif($_POST['mode'] == "rank_regist"){
				$fields['sd_shop_rank'] = "車検ミシュランク";
				$rules['sd_shop_rank'] = "";
			}elseif($_POST['mode'] == "customer_nm"){
				$fields['sd_customer_nm'] = "顧客名";
				$rules['sd_customer_nm'] = "required";
			}elseif($_POST['mode'] == "mail"){
				$fields['sd_remind_mail'] = "契約者メールアドレス";
#				$rules['sd_remind_mail'] = "required|valid_email|callback_account_mail_chk";
				$rules['sd_remind_mail'] = "required|valid_email";
			}elseif($_POST['mode'] == "shop_nm"){
				$fields['sd_contract_shop'] = "店舗名";
				$rules['sd_contract_shop'] = "required";
			}elseif($_POST['mode'] == "manage_a"){
				$fields['sd_manage_a'] = "管理コードA";
				$rules['sd_manage_a'] = "";
			}elseif($_POST['mode'] == "manage_b"){
				$fields['sd_manage_b'] = "管理コードB";
				$rules['sd_manage_b'] = "";
			}elseif($_POST['mode'] == "manage_c"){
				$fields['sd_manage_c'] = "管理コードC";
				$rules['sd_manage_c'] = "";
			}elseif($_POST['mode'] == "manage_d"){
				$fields['sd_manage_d'] = "管理コードD";
				$rules['sd_manage_d'] = "";
			}elseif($_POST['mode'] == "manage_e"){
				$fields['sd_manage_e'] = "管理コードE";
				$rules['sd_manage_e'] = "";
			}elseif($_POST['mode'] == "manage_f"){
				$fields['sd_manage_f'] = "管理コードF";
				$rules['sd_manage_f'] = "";
			}elseif($_POST['mode'] == "basic_charge"){
				$fields['sd_basic_charge'] = "基本料金";
				$rules['sd_basic_charge'] = "numeric";
			}elseif($_POST['mode'] == "copy_rank"){
				$fields['sd_copy_lank'] = "出稿ランク";
				$rules['sd_copy_lank'] = "";
			}
			
			$this -> validation -> set_fields($fields);
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
				$this->pkey = "";
				header("location: /admin/detail/".$sid."/");
			}else{
				#OK
				foreach ($this->validation->_fields as $field => $label){
					$_SESSION['form'][$field] = $this->input->post($field);
				}
				if($_POST['mode'] == "point_regist")
				
				$this->pkey = "";
				header("location: /admin/detail/regist_db");
			}
		}
		
		function regist_db(){
			if(!isset($_SESSION['form'])){
				header("location: /admin/account/");
			}
			$values = $_SESSION['form'];
			$this -> load -> model('admin/detailmodel');
			
			if($values['sid'] != ""){
				if($this -> detailmodel -> do_update($values)){
					if(isset($values['sd_memo'])){
						$_SESSION['msg'] = "メモの内容を更新しました。";
					}elseif(isset($values['sd_shop_rank'])){
						$_SESSION['msg'] = "車検ミシュランクを設定しました。";
					}elseif(isset($values['sd_mail_srvc'])){
						if($values['sd_mail_srvc'] == "t"){
							$_SESSION['msg'] = "メール受付を有効にしました。";
						}else{
							$_SESSION['msg'] = "メール受付を無効にしました。";
						}
					}elseif(isset($values['sd_tel_srvc'])){
						if($values['sd_tel_srvc'] == "t"){
							$_SESSION['msg'] = "電話受付を有効にしました。";
						}else{
							$_SESSION['msg'] = "電話受付を無効にしました。";
						}
					}elseif(isset($values['sd_acc_state'])){
						if($values['sd_acc_state'] == "t"){
							$_SESSION['msg'] = "アカウントを有効にしました。";
						}else{
							$_SESSION['msg'] = "アカウントを停止しました。";
						}
					}elseif(isset($values['sd_exam_state'])){
						if($values['sd_exam_state'] == "2"){
							$_SESSION['msg'] = "ページの状態を公開に設定しました。";
						}elseif($values['sd_exam_state'] == "3"){
							$_SESSION['msg'] = "ページの状態を非公開に設定しました。";
						}elseif($values['sd_exam_state'] == "4"){
							$_SESSION['msg'] = "ページの状態を強制公開停止に設定しました。";
						}elseif($values['sd_exam_state'] == "0"){
							$_SESSION['msg'] = "ページの状態を未審査に設定しました。";
						}
					}elseif(isset($values['sd_customer_nm'])){
						$_SESSION['msg'] = "顧客名を変更しました。";
						// 検索キャッシュの更新
						$this->detailmodel->make_search_cache(array("sid" => $values['sid']));
					}elseif(isset($values['sd_remind_mail'])){
						$_SESSION['msg'] = "契約者メールアドレスを変更しました。";
					}elseif(isset($values['sd_contract_shop'])){
						$_SESSION['msg'] = "店舗名を変更しました。";
					}elseif(isset($values['sd_manage_a'])){
						$_SESSION['msg'] = "管理コードAを変更しました。";
					}elseif(isset($values['sd_manage_b'])){
						$_SESSION['msg'] = "管理コードBを変更しました。";
					}elseif(isset($values['sd_manage_c'])){
						$_SESSION['msg'] = "管理コードCを変更しました。";
					}elseif(isset($values['sd_manage_d'])){
						$_SESSION['msg'] = "管理コードDを変更しました。";
					}elseif(isset($values['sd_manage_e'])){
						$_SESSION['msg'] = "管理コードEを変更しました。";
					}elseif(isset($values['sd_manage_f'])){
						$_SESSION['msg'] = "管理コードFを変更しました。";
					}elseif(isset($values['sd_basic_charge'])){
						$_SESSION['msg'] = "基本料金を変更しました。";
					}elseif(isset($values['sd_copy_lank'])){
						$_SESSION['msg'] = "出稿ランクを変更しました。";
					}
					unset($_SESSION['form']);
					header("location: /admin/detail/".$values['sid']."/");
				}else{
					header("location: /admin/detail/".$values['sid']."/");
				}
			}else{
				header("location: /admin/account/");
			}
		}
		
		
		// 2009/01/07 Gooogleマップ修正 added by mori
		function pointRegist(){
			unset($_SESSION['form_error'],$_SESSION['form']);
			/*** ↓↓エラーチェック始まり↓↓ ***/
			
			$chk_flag = true;
			// 緯度と経度のどちらか一方だけがnullだった場合はエラー
			if($this->input->post('sd_point_la') != "" and $this->input->post('sd_point_lon') == ""){
				$_SESSION['form_error']['sd_point_lon'] = "経度が入力されていません。<br />";
				$chk_flag = false;
			}
			if($this->input->post('sd_point_la') == "" and $this->input->post('sd_point_lon') != ""){
				$_SESSION['form_error']['sd_point_la'] = "緯度が入力されていません。<br />";
				$chk_flag = false;
			}
			
			// 数字と.（ドット）以外の文字が入力された場合もエラー
			if($this->input->post('sd_point_la') != "" and ereg("([^0-9\.]+)",$this->input->post('sd_point_la'))){
				$_SESSION['form_error']['sd_point_la'] = "緯度が正しく入力されていません。<br />";
				$chk_flag = false;
			}elseif(substr_count($this->input->post('sd_point_la'),".") > 1){
			// .（ドット）が2回以上出現した場合もエラー
				$_SESSION['form_error']['sd_point_la'] = "緯度が正しく入力されていません。<br />";
				$chk_flag = false;
			}
			
			// 数字と.（ドット）以外の文字が入力された場合もエラー
			if($this->input->post('sd_point_lon') != "" and ereg("([^0-9\.]+)",$this->input->post('sd_point_lon'))){
				$_SESSION['form_error']['sd_point_lon'] = "経度が正しく入力されていません。<br />";
				$chk_flag = false;
			}elseif(substr_count($this->input->post('sd_point_lon'),".") > 1){
			// .（ドット）が2回以上出現した場合もエラー
				$_SESSION['form_error']['sd_point_lon'] = "経度が正しく入力されていません。<br />";
				$chk_flag = false;
			}
			
			
			/*** ↑↑エラーチェック終わり↑↑ ***/
			
			if(!$chk_flag){
				$_SESSION['form'] = $_POST;
				header("location: /admin/detail/".$this->input->post('sid')."/");
				exit;
			}else{
				$atrlist = array();
				// DB登録
				if($this->input->post('sd_point_la') != "" and $this->input->post('sd_point_lon')){
					$atrlist['sd_point'] = $this->input->post('sd_point_la').",".$this->input->post('sd_point_lon');
					$atrlist['sd_last_update'] = "now()";
				}else{
					$atrlist['sd_point'] = null;
					$atrlist['sd_last_update'] = "now()";
				}
				
				if($this->input->post('sid') != ""){
					$this->db->where("sid",$this->input->post('sid'));
					$this->db->update("t_shop_base",$atrlist);
					
					$_SESSION['msg'] = "座標を設定しました。";
					header("location: /admin/detail/".$this->input->post('sid')."/");
					exit;
				}else{
					$_SESSION['form_error']['internal_error'] = "DB登録時にエラーが発生しました。<br />";
					header("location: /admin/detail/".$this->input->post('sid')."/");
					exit;
				}
				
			}
			
		}
		
		
		// 2009/08/24 店舗詳細ページ　title keywords description 変更BOX追加
		// ページタイトル編集
		function locate_title_change(){
			$chk_flag = true;
			unset($_SESSION['form_error'],$_SESSION['form']);
			
			/*** ↓↓エラーチェック始まり↓↓ ***/
			if($this->input->post('sid') == ""){
				$_SESSION['form_error']['internal_error'] = "店舗を識別できません。システム管理者に問い合わせてください。";
				$chk_flag = false;
				
			}
			
			/*** ↑↑エラーチェック終わり↑↑ ***/
			
			if($chk_flag){
				
				$atrlist['sd_page_title'] = $this->input->post('sd_page_title');
				
				// データベース登録
				$this->db->where("sid",$this->input->post('sid'));
				$this->db->update("t_shop_base",$atrlist);
				
				$_SESSION['msg'] = "ページタイトルを設定しました。";
				
				header("location: /admin/detail/".$this->input->post('sid')."/");
				exit;
				
			}else{
				header("location: /admin/account/");
				exit;
				
			}
			
		}
		
		// ページディスクプション編集
		function locate_description_change(){
			$chk_flag = true;
			unset($_SESSION['form_error'],$_SESSION['form'],$_SESSION['msg']);
			
			/*** ↓↓エラーチェック始まり↓↓ ***/
			if($this->input->post('sid') == ""){
				$_SESSION['form_error']['internal_error'] = "店舗を識別できません。システム管理者に問い合わせてください。";
				$chk_flag = false;
				
			}
			
			$temp_description = str_replace("\n","",$this->input->post('sd_page_description'));
# 			if($temp_description != ""){
# 				// 文字数チェック　（最大100文字まで）
# 				if(mb_strlen($temp_description) > 100){
# 					$_SESSION['form_error']['sd_page_description'] = "ページディスクリプションは100文字以内に設定してください。";
# 					$chk_flag = false;
# 				}
# 				
# 			}
			
			/*** ↑↑エラーチェック終わり↑↑ ***/
			
			if($chk_flag){
				
				$atrlist['sd_page_description'] = $temp_description;
				
				// データベース登録
				$this->db->where("sid",$this->input->post('sid'));
				$this->db->update("t_shop_base",$atrlist);
				
				$_SESSION['msg'] = "ページディスクリプションを設定しました。";
				
				header("location: /admin/detail/".$this->input->post('sid')."/");
				exit;
				
			}else{
				if($this->input->post('sid') == ""){
					header("location: /admin/account/");
					exit;
				}else{
					
					$_SESSION['form']['sd_page_description'] = $temp_description;
					
					
					header("location: /admin/detail/".$this->input->post('sid')."/");
					exit;
					
				}
				
			}
			
		}
		
		// ページキーワード編集
		function locate_keywords_change(){
			$chk_flag = true;
			unset($_SESSION['form_error'],$_SESSION['form']);
			
			/*** ↓↓エラーチェック始まり↓↓ ***/
			if($this->input->post('sid') == ""){
				$_SESSION['form_error']['internal_error'] = "店舗を識別できません。システム管理者に問い合わせてください。";
				$chk_flag = false;
				
			}
			if(!empty($this->column_nm_arr)){
				for($i=0;$i<count($this->column_nm_arr);$i++){
					if(ereg(",",$this->input->post($this->column_nm_arr[$i]))){
						$_SESSION['form_error'][$this->column_nm_arr[$i]] = "キーワードにはカンマを使用することができません。";
						$chk_flag = false;
						
					}
					
				}
				
			}
			
			/*** ↑↑エラーチェック終わり↑↑ ***/
			
			if($chk_flag){
				
				if(!empty($this->column_nm_arr)){
					for($i=0;$i<count($this->column_nm_arr);$i++){
						$atrlist[$this->column_nm_arr[$i]] = $this->input->post($this->column_nm_arr[$i]);
						
					}
					
				}
				
				// データベース登録
				$this->db->where("sid",$this->input->post('sid'));
				$this->db->update("t_shop_base",$atrlist);
				
				$_SESSION['msg'] = "ページキーワードを設定しました。";
				
				header("location: /admin/detail/".$this->input->post('sid')."/");
				exit;
				
			}else{
				if($this->input->post('sid') == ""){
					header("location: /admin/account/");
					exit;
				}else{
					if(!empty($this->column_nm_arr)){
						for($i=0;$i<count($this->column_nm_arr);$i++){
							$_SESSION['form'][$this->column_nm_arr[$i]] = $this->input->post($this->column_nm_arr[$i]);
						}
						
					}
					
					header("location: /admin/detail/".$this->input->post('sid')."/");
					exit;
					
				}
				
			}
			
		}
		
		
		
		
		function change_status($change_contents = "",$sid = ""){
			if($sid != ""){
				$_SESSION['form']['sid'] = $sid;
			}
			if($change_contents != ""){
				list($target,$status) = explode("-",$change_contents);
				if($target != "" and $status != ""){
					$_SESSION['form'][$target] = $status;
				}
			}
			header("location: /admin/detail/regist_db");
		}
		
		function delete_db($sid){
			if(!isset($sid)){
				header("location: /admin/account/");
			}
			$this -> load -> model('admin/detailmodel');
			
			if($this -> detailmodel -> do_delete($sid)){
				$_SESSION['msg'] = "アカウントを削除しました。";
			}else{
				$_SESSION['form_error'][] = "データ削除時にエラーが発生しました。";
			}
			
			header("location: /admin/account/");
		}
		
		
		function change_date(){
			if($_POST['sd_start_mYear'] != "" and $_POST['sd_start_mMonth'] != ""){
				$values['sd_start_m'] = $_POST['sd_start_mYear']."-".$_POST['sd_start_mMonth']."-01";
				$values['sid'] = $_POST['sid'];
				
				if($this->detailmodel->update_sd_start_m($values)){
					$_SESSION['msg'] = "契約開始月を変更しました。";
				}else{
					$_SESSION['form_error'][] = "契約開始月の変更に失敗しました。";
				}
			}
			header("location: /admin/detail/".$values['sid']."/");
		}
		
		
		function end_m_regist($change_contents = "",$sid = ""){
			if($this -> detailmodel -> update_end_m($sid)){
				$_SESSION['msg'] = "アカウントを停止しました。";
			}else{
				$_SESSION['form_error'][] = "アカウントの停止に失敗しました。";
			}
			header("location: /admin/detail/".$sid."/");
		}
		
		
		function account_mail_chk($email){
			$result = $this -> detailmodel -> duplex_chk(array("sd_remind_mail" => $email),array("sid" => $this->pkey));
		
			if(!$result){
				$this->validation->set_message('account_mail_chk','メールアドレスが重複しています。');
				return false;
			}else{
				return true;
			}
		}
		
		
		
		
	}
	
?>