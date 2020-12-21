<?
/****************************************************
*
* 本番用送信先がコメントアウトされております。
* 本番アップロードの際は、送信先アドレスを変更してから
* アップロードしてください。
*
*****************************************************/



	class Estimate_form_test extends Controller{

		/* ------------------------------------------------------------------ */
		/* 共通変数設定
		--------------------------------------------------------------------- */

		function Estimate_form_test(){
			parent::Controller();
			$this -> load -> model('user/estimate_formmodel_test');
			$this -> load -> helper(array('mail_subject'));									// ヘルパーのロード
			$this -> load -> helper(array('mail_subject','user_agent'));
			$this -> output -> set_header('Content-Type: text/html; charset=UTF-8');
		}

		
		function index($pb_no = ""){
			unset($_SESSION['back_loacte']);
			/* ------------------------------------------------------------------ */
			/* ページの設定
			--------------------------------------------------------------------- */
			//開発
#			$data['document_root'] = $_SERVER['DOCUMENT_ROOT'];
			//本番
			$data['document_root'] = "/home/webmaster/public_html";
			$data['css'] = "/css/user/estimate_test.css";
			$data['page_title'] = "お見積りフォーム｜車検費用が驚きの3万円台から！とことん車検ナビで車検予約";
			$data['mainmenu_home'] = "mainmenu_home_off";
			$data['mainmenu_list'] = "mainmenu_list_act";
			$data['nowyear'] = date("Y");
			$data['page_name'] = "estimate_form_test";
			// 検索結果へパン屑リンク
			if(isset($_SESSION['search_url'])){
				$data['search_url'] = $_SESSION['search_url'];
			}
			
			if($pb_no != ""){
				$data['pb_no'] = $pb_no;
				/* ------------------------------------------------------------------ */
				/* データの抽出
				--------------------------------------------------------------------- */
				// 取得するカラムの設定
				$select_culum = "pb_plan_nm,sid";
				
				$plan_result = $this->estimate_formmodel_test->do_select("t_shop_planbase",array("pb_no" => "$pb_no"),$select_culum);								// プラン
				if($plan_result != null and count($plan_result) == 1){
					$data['plan'] = $plan_result[0];
					if($plan_result[0]['sid'] != ""){
						$sid = $plan_result[0]['sid'];
						$data['sid'] = $sid;
					}
				}else{
					$not_open = "t";
				}

				if(!isset($_SESSION['search_url'])){
					if(empty($not_open)){
						$data['search_url'] = "/search/key_".sprintf("%04d",$data['sid'])."/type_manager/";
					}
				}

				
				
				if(isset($sid) and $sid != ""){
#					$shopdata_result = $this->estimate_formmodel->do_select("t_shop_base",array("sid" => "$sid"),"sd_shop_nm");									// 基本情報
					$shopdata_result = $this->estimate_formmodel_test->do_select("t_shop_base",array("sid" => "$sid","sd_exam_state" => "2"),"sd_shop_nm");			// 基本情報
					
					if(isset($shopdata_result) and $shopdata_result != null and count($shopdata_result) == 1){
						$data['shop_data']['sd_shop_nm'] = $shopdata_result[0]['sd_shop_nm'];
					}else{
						// 店舗表示判定
						$not_open = "t";
					}
					
				}
				// 取得するカラムの設定
				$select_culum = "pds.pb_no,pds.db_no,db_menu_nm,db_menu_detail";
				$dsc_base = $this->estimate_formmodel_test->do_select("t_shop_plandiscount pds",array("pb_no" => $pb_no),$select_culum);
				if($dsc_base != null){
					$dsc_detail = $this->estimate_formmodel_test->make_detail($dsc_base);
					
					if(isset($dsc_detail) and $dsc_detail != null){
						
						for($i=0;$i<count($dsc_base);$i++){
							$dsc_base[$i]['detail_arr'] = $dsc_detail[$dsc_base[$i]['db_no']];
						}
					}
					$data['dsc_arr'] = $dsc_base;
				}
				
#				$this->output->enable_profiler(TRUE);
			}else{
				// 店舗表示判定
				$not_open = "t";
			}
			
			// フォームエラーがあったらセットする
			if(isset($_SESSION['form_error'])){
				$data['form_error'] = $_SESSION['form_error'];
			}
			
			// フォームデータがあったらセットする
			if(isset($_SESSION['form'])){
				$data['form_data'] = $_SESSION['form'];
			}
//var_dump($data['form_data']);
			/* 20161128@nagai ST */
			// 入庫希望日時プルダウン作成
			if(isset($_SESSION['form']['car_arrival_date']) and $_SESSION['form']['car_arrival_date'] != ""){
				list($selected_y2,$selected_m2,$selected_d2) = explode("-",$_SESSION['form']['car_arrival_date']);
				
				$data['check_pulldown2'] = $this->estimate_formmodel_test->car_check_pulldown2($selected_y2,$selected_m2,$selected_d2);
			}else{
				$data['check_pulldown2'] = $this->estimate_formmodel_test->car_check_pulldown2();
			}
			
			// 時間帯プルダウン作成
			if(isset($_SESSION['form']['time_zone']) and $_SESSION['form']['time_zone'] != ""){
				$data['time_zone_pulldown'] = $this->estimate_formmodel_test->time_zone_pulldown($_SESSION['form']['time_zone']);
			}else{
				$data['time_zone_pulldown'] = $this->estimate_formmodel_test->time_zone_pulldown();
			}
			/* 20161128@nagai END */
			
			// 車検満了日プルダウン作成
			if(isset($_SESSION['form']['car_check_date']) and $_SESSION['form']['car_check_date'] != ""){
				list($selected_y,$selected_m,$selected_d) = explode("-",$_SESSION['form']['car_check_date']);
				
				$data['check_pulldown'] = $this->estimate_formmodel_test->car_check_pulldown($selected_y,$selected_m,$selected_d);
			}else{
				$data['check_pulldown'] = $this->estimate_formmodel_test->car_check_pulldown();
			}
			
			// 自動車の種別プルダウン作成
			if(isset($_SESSION['form']['car_type']) and $_SESSION['form']['car_type'] != ""){
				$data['car_type_pulldown'] = $this->estimate_formmodel_test->car_type_pulldown($_SESSION['form']['car_type']);
			}else{
				$data['car_type_pulldown'] = $this->estimate_formmodel_test->car_type_pulldown();
			}
			
			// メーカープルダウンの作成
			if(isset($_SESSION['form']['maker']) and $_SESSION['form']['maker'] != ""){
				$data['maker_pulldown'] = $this->estimate_formmodel_test->maker_pulldown($_SESSION['form']['maker']);
			}else{
				$data['maker_pulldown'] = $this->estimate_formmodel_test->maker_pulldown();
			}
			
			// 車両重量プルダウン作成
			if(isset($_SESSION['form']['car_weight']) and $_SESSION['form']['car_weight'] != ""){
				$data['car_weight_pulldown'] = $this->estimate_formmodel_test->weight_pulldown($_SESSION['form']['car_weight']);
			}else{
				$data['car_weight_pulldown'] = $this->estimate_formmodel_test->weight_pulldown();
			}
			
			
			if(user_agent()){
					$this->smarty_parser->parse("ci:user/estimate_form_sp_test.tpl", $data);
			}else{
					$this->smarty_parser->parse("ci:user/estimate_form_test.tpl", $data);
			}

			// 店舗が非表示・存在しない場合は NotFound 画面を表示
			if(!empty($not_open) and $not_open == "t"){
				unset($data);
				
				// ページの設定（NotFoundページ用）
				$data['notfound_flg'] = TRUE; // ページが見つからない、非公開の際にはロボットにインデックスさせないための対応（このフラグが立っていたらrobot用metaタグにnoindex,nofollow,noarchiveを追加）20130730 y.igarashi
				$data['css'] = "/css/user/estimate.css";
				$data['mainmenu_home'] = "mainmenu_home_off";
				$data['mainmenu_list'] = "mainmenu_list_act";
				
				
				$data['page_title'] = "ページが見つかりませんでした｜とことん車検ナビ";
				$this->smarty_parser->parse("ci:user/notfound.tpl", $data);
			}else{
				if(user_agent()){
					$this->smarty_parser->parse("ci:user/estimate_form_sp_test.tpl", $data);
				}else{
					$this->smarty_parser->parse("ci:user/estimate_form_test.tpl", $data);
				}
			}
			
			unset($_SESSION['form_error']);
		}
		
		
		function to_confirm(){
			unset($_SESSION['form_error'],$_SESSION['form']);
			$this -> load -> library('validation');
			$this -> validation -> set_error_delimiters('<li>','</li>');
			
			/* ------------------------------------------------------------------ */
			/* XSS対策 + タグの無効化
			--------------------------------------------------------------------- */
			foreach($_POST as $key => $val){
				if($key != "discount"){
					$val = $this->input->xss_clean($val);
					$_POST[$key] = htmlspecialchars($val);
				}
			}
			
			if(isset($_POST['pb_no']) and $_POST['pb_no'] != ""){
				$pb_no = $_POST['pb_no'];
			}
			
			/*20161128@nagai ST*/
			if(isset($_POST['check_y2']) and isset($_POST['check_m2']) and isset($_POST['check_d2'])){
				$_POST['car_arrival_date'] = $_POST['check_y2']."-".$_POST['check_m2']."-".$_POST['check_d2'];
			}
			/*20161128@nagai END*/
			
			if(isset($_POST['check_y']) and isset($_POST['check_m']) and isset($_POST['check_d'])){
				$_POST['car_check_date'] = $_POST['check_y']."-".$_POST['check_m']."-".$_POST['check_d'];
			}
			
			
			
			/* ------------------------------------------------------------------ */
			/* フィールドセット
			--------------------------------------------------------------------- */
			
			/*20161128@nagai ST*/
			$fields['car_arrival_date'] = "入庫希望日時";
			$fields['time_zone'] = "時間帯";
			$fields['other_comment'] = "その他、ご要望をご記入ください...";
			/*20161128@nagai END*/
			
			$fields['car_check_date'] = "車検満了日";
			$fields['car_type'] = "自動車の種別";
			$fields['maker'] = "メーカー";
			$fields['car_name'] = "車名";
			$fields['car_weight'] = "車両重量";
			
			$fields['name'] = "お客様氏名";
			$fields['name_kana'] = "ふりがな";
			$fields['tel'] = "連絡先電話番号";
			$fields['email'] = "メールアドレス";
			$fields['comment'] = "ご要望・お問い合わせ";
			
			$fields['pb_no'] = "プランNo.";
			$fields['plan_nm'] = "プランNo.";
			$fields['sid'] = "店舗番号";
			
			$this -> validation -> set_fields($fields);
			/* ------------------------------------------------------------------ */
			/* ルールセット
			--------------------------------------------------------------------- */
			/*20161128@nagai ST*/
			$rules['car_arrival_date'] = "callback_date_chk2";
			$rules['time_zone'] = "";
			$rules['other_comment'] = "";
			/*20161128@nagai END*/
			$rules['car_check_date'] = "callback_date_chk";
			$rules['car_type'] = "required";
			$rules['maker'] = "";
			$rules['car_name'] = "";
			$rules['car_weight'] = "required";
			
			$rules['name'] = "required";
			$rules['name_kana'] = "required";
			$rules['tel'] = "required|callback_phone";
			$rules['email'] = "required|valid_email";
			$rules['comment'] = "";
			
			
#			if(isset($_POST['car_type']) and $_POST['car_type'] != 0){
#				$rules['car_weight'] = "required|integer";
#			}else{
#				$rules['car_weight'] = "integer";
#			}
			
#			$rules['car_total_weight'] = "integer";
#			$rules['car_service'] = "";
			$rules['sid'] = "";
			$rules['pb_no'] = "";
			$rules['plan_nm'] = "";
			
			$this -> validation -> set_rules($rules);
			/* ------------------------------------------------------------------ */
			/* エラーチェック
			--------------------------------------------------------------------- */
			if ($this->validation->run() == FALSE){
				#NG
				foreach ($this->validation->_fields as $field => $label){
					//エラーメッセージにliタグがついてしまうので返還。時間があるときに調査する20141203澤田
					$_SESSION['form_error'][$field] = str_replace(array("<li>","</li>"), '', $this->validation->{$field.'_error'});
					$_SESSION['form'][$field] = $this->input->post($field);
				}
				
				if(isset($_POST['discount']) and $_POST['discount'] != null){
					foreach($_POST['discount'] as $key => $val){
						$_SESSION['form']['discount'][$key] = $val;
					}
				}
				header("location: /estimate_form_test/$pb_no/");
			}else{
				#OK
				foreach ($this->validation->_fields as $field => $label){
					$_SESSION['form'][$field] = $this->input->post($field);
				}
				
				if(isset($_POST['discount']) and $_POST['discount'] != null){
					foreach($_POST['discount'] as $key => $val){
						$_SESSION['form']['discount'][$key] = $val;
					}
				}
				
				header("location: /estimate_form_test/confirm/");
			}
		}
		
		
		function confirm(){
			if(!isset($_SESSION['form'])){
				if(isset($_SESSION['locate_back']) and $_SESSION['locate_back'] != ""){
					header("location: http://".$_SERVER['HTTP_HOST']."/shop_detail/".$_SESSION['locate_back']."/");
				}else{
					header("location: http://".$_SERVER['HTTP_HOST']."");
				}
			}
			
			/* ------------------------------------------------------------------ */
			/* ページの設定
			--------------------------------------------------------------------- */
			//開発
#			$data['document_root'] = $_SERVER['DOCUMENT_ROOT'];
			//本番
			$data['document_root'] = "/home/webmaster/public_html";
			$data['css'] = "/css/user/estimate.css";
			$data['page_title'] = "見積り内容の確認 | ことこん車検ナビ";
			$data['mainmenu_home'] = "mainmenu_home_off";
			$data['mainmenu_list'] = "mainmenu_list_act";
			$data['nowyear'] = date("Y");
			$data['page_name'] = "estimate_confirm_test";

			
			if(isset($_SESSION['search_url'])){
				$data['search_url'] = $_SESSION['search_url'];
			}else{
				$data['search_url'] = "/search/key_".sprintf("%04d",$_SESSION['form']['sid'])."/type_manager/";
			}
			
			if(isset($_SESSION['form']) and $_SESSION['form'] != null){
				
				$data['form_data'] = $_SESSION['form'];

				/*20161128@nagai ST*/
				// 入庫希望日時データ整形
				if(isset($_SESSION['form']['car_arrival_date']) and $_SESSION['form']['car_arrival_date'] != ""){
					list($data['form_data']['check_y2'],$data['form_data']['check_m2'],$data['form_data']['check_d2']) = explode("-",$_SESSION['form']['car_arrival_date']);
				}
				
				// 時間帯
				if(isset($_SESSION['form']['time_zone']) and $_SESSION['form']['time_zone'] != ""){
					if($_SESSION['form']['time_zone'] == 0){
						$data['form_data']['time_zone_nm'] = "午前";
					}elseif($_SESSION['form']['time_zone'] == 1){
						$data['form_data']['time_zone_nm'] = "午後";
					}elseif($_SESSION['form']['time_zone'] == 2){
						$data['form_data']['time_zone_nm'] = "夕方以降";
					}else{
						$data['form_data']['time_zone_nm'] = "&nbsp;";
					}
				}
				
				/*20161128@nagai END*/
				
				// 車検満了日データ整形
				if(isset($_SESSION['form']['car_check_date']) and $_SESSION['form']['car_check_date'] != ""){
					list($data['form_data']['check_y'],$data['form_data']['check_m'],$data['form_data']['check_d']) = explode("-",$_SESSION['form']['car_check_date']);
				}
				// 自動車の種別
				if(isset($_SESSION['form']['car_type']) and $_SESSION['form']['car_type'] != ""){
					if($_SESSION['form']['car_type'] == 0){
						$data['form_data']['car_type_nm'] = "軽自動車";
					}elseif($_SESSION['form']['car_type'] == 1){
						$data['form_data']['car_type_nm'] = "小型（乗用車なら、5,7ナンバー)";
					}elseif($_SESSION['form']['car_type'] == 2){
						$data['form_data']['car_type_nm'] = "普通(乗用車なら、3ナンバー)";
					}else{
						$data['form_data']['car_type_nm'] = "&nbsp;";
					}
					
				}
				// メーカー名の取得
				if(isset($_SESSION['form']['maker']) and $_SESSION['form']['maker'] != ""){
					$data['form_data']['maker_nm'] = $this->estimate_formmodel_test->maker_nm($_SESSION['form']['maker']);
				}else{
					$data['form_data']['maker_nm'] = $this->estimate_formmodel_test->maker_nm();
				}
				
				// 車両重量
				if(isset($_SESSION['form']['car_weight']) and $_SESSION['form']['car_weight'] != ""){
					if($_SESSION['form']['car_weight'] == "0"){
						$data['form_data']['car_weight_nm'] = "軽自動車";
						
					}elseif($_SESSION['form']['car_weight'] == "1"){
						$data['form_data']['car_weight_nm'] = "1000kg以下";
						
					}elseif($_SESSION['form']['car_weight'] == "2"){
						$data['form_data']['car_weight_nm'] = "1001kg～1500kg";
						
					}elseif($_SESSION['form']['car_weight'] == "3"){
						$data['form_data']['car_weight_nm'] = "1501kg～2000kg";
						
					}elseif($_SESSION['form']['car_weight'] == "4"){
						$data['form_data']['car_weight_nm'] = "2001kg～2500kg";
						
					}
					
				}
				
				
				
				if(isset($_SESSION['form']['sid']) and $_SESSION['form']['sid'] != ""){
					$sid = $_SESSION['form']['sid'];
					// 店舗情報抽出
					$shopdata_result = $this->estimate_formmodel_test->do_select("t_shop_base",array("sid" => "$sid"),"sd_shop_nm");
					
					if($shopdata_result != null and count($shopdata_result) == 1){
						$data['shop_data']['sd_shop_nm'] = $shopdata_result[0]['sd_shop_nm'];
					}
					
				}
				
#				if(isset($_SESSION['form']['pb_no']) and $_SESSION['form']['pb_no'] != ""){
#					$pb_no = $_SESSION['form']['pb_no'];
#					$select_culum = "pb_plan_nm";
#					// プラン情報抽出
#					$plan_result = $this->estimate_formmodel->do_select("t_shop_planbase",array("pb_no" => "$pb_no"),$select_culum);
#					if($plan_result != null and count($plan_result) == 1){
#						$data['plan'] = $plan_result[0];
#					}
#				}
				
				// プラン名の取得
				if(isset($_SESSION['form']['plan_nm']) and $_SESSION['form']['plan_nm'] != ""){
					$data['plan']['pb_plan_nm'] = $_SESSION['form']['plan_nm'];
				}
				
				if(isset($_SESSION['form']['discount']) and $_SESSION['form']['discount'] != null){
#					$select_culum = "db_menu_nm,db_menu_detail,dd_dsc_nm";

					foreach($_SESSION['form']['discount'] as $key => $val){
						list($db_no,$dd_level_no) = explode("_",$val);
						
						if(ereg("([0-9]+)",$dd_level_no)){
							// 割引情報の抽出
							$dsc_result = $this->estimate_formmodel_test->do_select("t_shop_dscbase db",array("db.db_no" => "$db_no","dd_level_no" => $dd_level_no),"db_menu_nm,db_menu_detail,dd_dsc_nm");
						}else{
							$dsc_result = $this->estimate_formmodel_test->do_select("t_shop_dscbase",array("db_no" => "$db_no"),"db_menu_nm,db_menu_detail");
							$data['dsc_arr'][$key]['use'] = $dd_level_no;
						}
						if(isset($dsc_result) and $dsc_result != null and count($dsc_result) == 1){
							$data['dsc_arr'][$key]['db_menu_nm'] = $dsc_result[0]['db_menu_nm'];
							$data['dsc_arr'][$key]['db_menu_detail'] = $dsc_result[0]['db_menu_detail'];
							if(isset($dsc_result[0]['dd_dsc_nm']) and $dsc_result[0]['dd_dsc_nm'] != null){
								$data['dsc_arr'][$key]['use'] = $dsc_result[0]['dd_dsc_nm'];
							}else{
								if(!$dd_level_no == "nouse" and !$dd_level_no == "nojudge"){
									$data['dsc_arr'][$key]['use'] = "使う";
								}
							}
							
						}
					}
					
				}
				
			}
			if(user_agent()){
				$this->smarty_parser->parse("ci:user/estimate_confirm_sp_test.tpl", $data);
			}else{
				$this->smarty_parser->parse("ci:user/estimate_confirm_test.tpl", $data);
			}
		}
		
		function sendmail(){
			// 初期化
			$subject = "無題";											// メールタイトル
			$greeting = "ここにあいさつ文が入ります。";					// あいさつ文
			$footer = "ここにメールフッターが入ります。";				// メールフッター
			$shop_nm = "店舗名";
			
			
			// メール代理応答サービス用センターメールアドレス設定
/*開発用にコメントアウト@nagai			
			$represent_mail = "uketsuke@tokoton-navi.com";									// 本番
			$log_mail = "cv_log@tokoton-navi.com";
*/
// 2011/07/13 globalcoms			$add1_mail = "cinfo_mic@media-active.jp";

/*開発用メアド(後で削除) ST*/			
			$represent_mail = "xanone4@gmail.com";
			$log_mail = "night_flight_to_venus@msn.com";
/*開発用メアド(後で削除) END*/			
# 			$represent_mail = "whiteliry0506@gmail.com";										// テスト
# 			$log_mail = "les-papillon-coeurs@hotmail.co.jp";
# 			$add1_mail = "les-papillons-coeurs@hotmail.co.jp";
			
			if(isset($_SESSION['form']) and $_SESSION['form'] != null){
				if(isset($_SESSION['form']['sid']) and $_SESSION['form']['sid'] != ""){
					$sid = $_SESSION['form']['sid'];
					/* ------------------------------------------------------------------ */
					/* 店舗ごとのメール設定取得
					--------------------------------------------------------------------- */
					// 見積もりメール受信先取得
					$shop_result = $this->estimate_formmodel_test->do_select("t_shop_base",array("sid" => "$sid"),"sd_estimate_mail,sd_shop_nm,sd_mail_srvc");
					if($shop_result != null and count($shop_result) == 1){
						$mail = $shop_result[0]['sd_estimate_mail'];
						$shop_nm = $shop_result[0]['sd_shop_nm'];
						$mail_srvc = $shop_result[0]['sd_mail_srvc'];
						
						if($mail != ""){
							$mail_arr = explode(",",$mail);
							$from = $mail_arr[0];
							
						}
					}
					
					// 店舗メール文の取得
					$select_column = "mail_subject,mail_greeting,mail_footer";
					$mail_result = $this->estimate_formmodel_test->do_select("t_shop_mailformat",array("sid" => "$sid"),$select_column);
					if($mail_result != null and count($mail_result) == 1){
						$subject = $mail_result[0]['mail_subject'];
						$greeting = $mail_result[0]['mail_greeting'];
						$footer = $mail_result[0]['mail_footer'];
					}
				}
				
				if(isset($_SESSION['form']['pb_no']) and $_SESSION['form']['pb_no'] != ""){
					$pb_no = $_SESSION['form']['pb_no'];
				}
				
				/* ------------------------------------------------------------------ */
				/* フォームデータの整形
				--------------------------------------------------------------------- */
				// メーカー名
				if(isset($_SESSION['form']['maker']) and $_SESSION['form']['maker'] != ""){
					$maker_nm = $this->estimate_formmodel_test->maker_nm($_SESSION['form']['maker']);
				}else{
					$maker_nm = "";
				}
				
				/*20161128@nagai ST*/
				// 入庫希望日時
				$check_date2 = "";
				if(isset($_SESSION['form']['car_arrival_date']) and $_SESSION['form']['car_arrival_date'] != ""){
					list($check_y2,$check_m2,$check_d2) = explode("-",$_SESSION['form']['car_arrival_date']);
					if($check_y2 != "" and $check_m2 != "" and $check_d2 != ""){
						$check_date2 = "平成".$check_y2."年".$check_m2."月";
						if($check_d2 != "不明")$check_date2 = $check_date2.$check_d2."日";
					}
				}
				// 時間帯
				if(isset($_SESSION['form']['time_zone'])){
					if($_SESSION['form']['time_zone'] == "0"){
						$time_zone = "午前";
						
					}elseif($_SESSION['form']['time_zone'] == "1"){
						$time_zone = "午後";
						
					}elseif($_SESSION['form']['time_zone'] == "2"){
						$time_zone = "夕方以降";
						
					}else{
						$time_zone = "";
						
					}
				}
				/*20161128@nagai END*/
				
				
				// 車検満了日
				$check_date = "";
				if(isset($_SESSION['form']['car_check_date']) and $_SESSION['form']['car_check_date'] != ""){
					list($check_y,$check_m,$check_d) = explode("-",$_SESSION['form']['car_check_date']);
					if($check_y != "" and $check_m != "" and $check_d != ""){
						//$check_date = "平成".$check_y."年".$check_m."月".$check_d."日";
						$check_date = "平成".$check_y."年".$check_m."月";
						if($check_d != "不明")$check_date = $check_date.$check_d."日";
					}
				}
				
				
				// 自動車の種別
				if(isset($_SESSION['form']['car_type'])){
					if($_SESSION['form']['car_type'] == "0"){
						$car_type = "軽自動車";
						$stamp_kind = "0";							// 印紙代の種類（0 … 軽、1 … 小型、2 … 普通）
						
					}elseif($_SESSION['form']['car_type'] == "1"){
						$car_type = "小型（乗用車なら、5,7ナンバー)";
						$stamp_kind = "1";
					}elseif($_SESSION['form']['car_type'] == "2"){
						$car_type = "普通(乗用車なら、3ナンバー)";
						$stamp_kind = "2";
					}else{
						$car_type = "";
						$stamp_kind = "";
					}
				}
				
				/* ------------------------------------------------------------------ */
				/* 選択プラン情報取得
				--------------------------------------------------------------------- */
				// 取得する車種別の設定（フォームデータの整形も含む）
				if(isset($_SESSION['form']['car_weight'])){
					
					if($_SESSION['form']['car_weight'] == 0){								// 軽自動車
						$pd_car_kind = "0";
						$car_weight_nm = "軽自動車";
					}elseif($_SESSION['form']['car_weight'] == 1){							// 1000kg以下（小型乗用車）
						$pd_car_kind = "1";
						$car_weight_nm = "1000kg以下";
					}elseif($_SESSION['form']['car_weight'] == 2){							// 1001kg～1500kg（中型乗用車）
						$pd_car_kind = "2";
						$car_weight_nm = "1001kg～1500kg";
					}elseif($_SESSION['form']['car_weight'] == 3){							// 1501kg～2000kg（大型乗用車）
						$pd_car_kind = "3";
						$car_weight_nm = "1501kg～2000kg";
					}elseif($_SESSION['form']['car_weight'] == 4){							// 2001kg～2500kg（大型乗用車）
						$pd_car_kind = "4";
						$car_weight_nm = "2001kg～2500kg";
					}else{
						$pd_car_kind = "";
						$car_weight_nm = "";
					}
				}
				
				
#				if($_SESSION['form']['car_type'] == "2"){								// 普通
#					
#					if($_SESSION['form']['car_weight'] > 2000 and $_SESSION['form']['car_weight'] <= 2500){
#						// 大型
#						$pd_car_kind = "4";
#					}elseif($_SESSION['form']['car_weight'] > 1500 and $_SESSION['form']['car_weight'] <= 2000){
#						// 大型乗用車
#						$pd_car_kind = "3";
#					}elseif($_SESSION['form']['car_weight'] > 1000 and $_SESSION['form']['car_weight'] <= 1500){
#						// 中型乗用車
#						$pd_car_kind = "2";
#					}else{
#						$pd_car_kind = "";
#					}
#					
#				}elseif($_SESSION['form']['car_type'] == "1"){							// 小型
#					$pd_car_kind = "1";
#					
#				}elseif($_SESSION['form']['car_type'] == "0"){							// 軽
#					$pd_car_kind = "0";
#					
#				}
				
				
				// 対象となるプラン条件設定
				$where_list = array();
				
				// プランNo.
				if($pb_no != ""){
					$where_list['pb.pb_no'] = $pb_no;
				}
				// 自動車の種別
				if($pd_car_kind != ""){
					$where_list['pd_car_kind'] = $pd_car_kind;
				}
				// 印紙の種類
				if($stamp_kind != ""){
					$where_list['stamp_kind'] = $stamp_kind;
				}
				
				
				// 抽出するデータ配列
				$select_column_arr[] = "pb_itm01_state";								// 料金構成要素1適用フラグ
				$select_column_arr[] = "pb_itm02_state";								// 料金構成要素2適用フラグ
				$select_column_arr[] = "pb_itm03_state";								// 料金構成要素3適用フラグ
				$select_column_arr[] = "pb_itm04_state";								// 料金構成要素4適用フラグ
				$select_column_arr[] = "pb_itm05_state";								// 料金構成要素5適用フラグ
				$select_column_arr[] = "pb_itm06_state";								// 料金構成要素6適用フラグ
				$select_column_arr[] = "pb_itm07_state";								// 料金構成要素7適用フラグ
				$select_column_arr[] = "pb_itm08_state";								// 料金構成要素8適用フラグ
				$select_column_arr[] = "pd_weight_tax";									// 重量税
				$select_column_arr[] = "pd_insrnc_price";								// 自賠責保険
				$select_column_arr[] = "pd_itm01_price";								// 料金構成要素1 価格
				$select_column_arr[] = "pd_itm02_price";								// 料金構成要素2 価格
				$select_column_arr[] = "pd_itm03_price";								// 料金構成要素3 価格
				$select_column_arr[] = "pd_itm04_price";								// 料金構成要素4 価格
				$select_column_arr[] = "pd_itm05_price";								// 料金構成要素5 価格
				$select_column_arr[] = "pd_itm06_price";								// 料金構成要素6 価格
				$select_column_arr[] = "pd_itm07_price";								// 料金構成要素7 価格
				$select_column_arr[] = "pd_itm08_price";								// 料金構成要素8 価格
#				$select_column_arr[] = "stamp_kind";									// 印紙代の種類（1 … 軽、2 … 小型、3 … 普通）（サブクエリーにより作成カラム）
				$select_column_arr[] = "stamp_price";									// 印紙代（サブクエリーにより作成カラム）
				
				if($select_column_arr != null){
					$select_column = implode(",",$select_column_arr);
				}
				
				$plan_result = $this->estimate_formmodel_test->getEstimatePlanData($where_list,$select_column);
				
				// 対象となるプラン料金の抽出
#				$select_column = "pb_itm01_state,pb_itm02_state,pb_itm03_state,pb_itm04_state,pb_itm05_state,";
#				$select_column .= "pb_itm06_state,pb_itm07_state,pb_itm08_state,pd_weight_tax,pd_insrnc_price,pd_stamp_price,";
#				$select_column .= "pd_itm01_price,pd_itm02_price,pd_itm03_price,pd_itm04_price,pd_itm05_price,pd_itm06_price,";
#				$select_column .= "pd_itm07_price,pd_itm08_price";
#				$plan_result = $this->estimate_formmodel->do_select("t_shop_planbase pb",array("pb.pb_no" => "$pb_no","pd_car_kind" => "$pd_car_kind"),$select_column);
				
				
				
				
				
				$estimate_item['basic_item'] = "";
				$estimate_item['advansed_item'] = "";
				if($plan_result != null and count($plan_result) == 1){
					$plan_dat = $plan_result[0];
					
					$estimate_item = $this->estimate_formmodel_test->charge_table($plan_dat,$sid);
				}
				
				// 値引き金額算出
				if(isset($_SESSION['form']['discount']) and $_SESSION['form']['discount'] != null){
					$dsc_item = $this->estimate_formmodel_test->discount_table($_SESSION['form']['discount']);
				}else{
					$dsc_item = array();
				}
				
				
				// 使用しない値引きの金額取得
				if(isset($_SESSION['form']['discount']) and $_SESSION['form']['discount'] != ""){
					$non_use_dsc = $this->estimate_formmodel_test->no_use_discount($_SESSION['form']['discount'],$pb_no);
				}else{
					$non_use_dsc = "";
				}
				
				
				$total_cost = 0;
				if(isset($dsc_item['dsc_total']) and isset($estimate_item['cost_sum'])){
					$total_cost = $estimate_item['cost_sum'] - $dsc_item['dsc_total'];
				}elseif(isset($estimate_item['cost_sum'])){
					$total_cost = $estimate_item['cost_sum'];
				}
				
#				$total = "■お見積り金額\n";
#				$total .= "　合計： ".number_format($total_cost)." 円\n";
				
				$user_data = $this->estimate_formmodel_test->user_data_format($_SESSION['form']);
				
				foreach($user_data as $key => $val){
					$$key = $val;
				}
				
				// 店舗さまへのメールにのみ下記文章を挿入
				$discription = "お客様からの「見積リクエスト」を受信しました。\n";
				$discription .= "下記の通り、見積結果を自動送信しましたのでご確認ください。\n";
				$discription .= "---------------------------------------------------------------\n";
				$discription .= "\n";
				/* ------------------------------------------------------------------ */
				/* メール文の設定
				--------------------------------------------------------------------- */
				$mail_subject = "【車検ナビ】見積リクエスト報告（".sprintf("%04d",$sid)." / ".$shop_nm."）";
				$mail_subject_tks = $subject;
				$mail_from = $from;
				$mail_from_tks = "request_report@tokoton-navi.com";		// 本部行きメール差出人アドレス

				// メール代理応答サービス有効店はメール代理応答サービス用メールアドレスを送信先に付加
				if($mail_srvc == "t"){
// 2011/07/13 globalcoms					$mail_to = $represent_mail.",".$mail.",".$log_mail.",".$add1_mail;
					$mail_to = $represent_mail.",".$mail.",".$log_mail;
				}else{
// 2011/07/13 globalcoms					$mail_to = $mail.",".$log_mail.",".$add1_mail;
					$mail_to = $mail.",".$log_mail;
				}
				
				$mail_to_tks = $_SESSION['form']['email'];
				
				mb_language('Japanese');
				mb_internal_encoding('JIS');
				/* ------------------------------------------------------------------ */
				/* メール文の設定
				--------------------------------------------------------------------- */
				$mail_body = $_SESSION['form']['name']." 様\n";
				$mail_body .= "\n";
				$mail_body .= $greeting;
				$mail_body .= "\n";
				$mail_body .= "============================================================\n";
				$mail_body .= "\n";
				$mail_body .= "[車検プラン名]　　　　　".$_SESSION['form']['plan_nm']."\n";
				$mail_body .= "\n";
				$mail_body .= "車検の仮見積金額は合計　".number_format($total_cost)." 円（税込）　です。\n";
				$mail_body .= "\n";
				$mail_body .= "============================================================\n";
				$mail_body .= "\n";
				$mail_body .= "※上記金額は「とことん車検ナビ」サイトにてお客様が選択された条件に\n";
				$mail_body .= "基づく料金計算です。\n";
				$mail_body .= "※ご予約時に「プラン」や「割引きメニュー」の変更は可能です。\n";
				$mail_body .= "※修理や追加部品代は実車を拝見した上で別途見積りとなります。\n";
				$mail_body .= "\n";
				$mail_body .= "―――――――――――――――――――――――――――――――――――――\n";
				$mail_body .= "【内訳明細】\n";
				$mail_body .= "\n";
				$mail_body .= $estimate_item['basic_item']."\n";
				$mail_body .= "\n";
				$mail_body .= $estimate_item['advansed_item'];
				$mail_body .= "\n";
				if(isset($dsc_item['dsc_item'])){
					$mail_body .= $dsc_item['dsc_item']."\n";
				}
				
				$mail_body .= "\n";
				if($non_use_dsc != ""){
				$mail_body .= "―――――――――――――――――――――――――――――――――――――\n";
					$mail_body .= "※参考：今回お客様が選択されなかった割引メニュー\n";
					$mail_body .= $non_use_dsc;
				$mail_body .= "―――――――――――――――――――――――――――――――――――――\n";
					$mail_body .= "\n";
				}
				$mail_body .= $footer."\n";
				$mail_body .= "\n";
				$mail_body .= "\n";
				$mail_body .= "\n";
				$mail_body .= "＜お客様からの送信内容＞\n";
				$mail_body .= "[店名]　　　　　　　　　".$shop_nm."\n";
				$mail_body .= "[車検プラン名]　　　　　".$_SESSION['form']['plan_nm']."\n";
				$mail_body .= "[お客様氏名]　　　　　　".$_SESSION['form']['name']."\n";
				$mail_body .= "[ふりがな]　　　　　　　".$_SESSION['form']['name_kana']."\n";
				$mail_body .= "[連絡先電話番号]　　　　".$_SESSION['form']['tel']."\n";
				$mail_body .= "[メールアドレス]　　　　".$_SESSION['form']['email']."\n";
				
				/*20161206@nagai ST*/
				$mail_body .= "[入庫希望日時]　　　　　".$check_date2." ".$time_zone."\n";
				$mail_body .= "[その他、ご要望]\n";
				$mail_body .= $_SESSION['form']['other_comment']."\n";
				/*20161206@nagai END*/
				
				$mail_body .= "[車検満了日]　　　　　　".$check_date."\n";
				$mail_body .= "[メーカー]　　　　　　　".$maker_nm."\n";
				$mail_body .= "[車名]　　　　　　　　　".$_SESSION['form']['car_name']."\n";
				$mail_body .= "[自動車の種別]　　　　　".$car_type."\n";
				$mail_body .= "[車両重量]　　　　　　　".$car_weight_nm."\n";
				$mail_body .= "[ご要望・お問い合わせ]\n";
				$mail_body .= $_SESSION['form']['comment']."\n";
				$mail_body .= "\n";
				if(isset($dsc_item['input_item'])){
					$mail_body .= $dsc_item['input_item']."\n";
				}
#				$mail_body .= "\n";
#				$mail_body .= "\n";
				/* ------------------------------------------------------------------ */
				// メールタイトルエンコーディング
				$mail_subject_tks = mail_subject($mail_subject_tks);
				$mail_subject = mail_subject($mail_subject);
				
				// メール説明文エンコーディング
				$discription = mb_convert_encoding($discription,"JIS","UTF-8");
				
				// メール本文エンコーディング
				$mail_body = mb_convert_encoding($mail_body,"JIS","UTF-8");
				
		//print_r($mail_body);
		//exit;		
				
				// Emailライブラリ読み込み
				$this->load->library('email');

				$config['charset'] = 'ISO-2022-JP';
				$config['wrapchars'] = '72';
				$config['_encoding'] = '7bit';
				$this->email->initialize($config);
				
				// お客様用メール送信
#				$this->email->from($mail_from, '');
#				$this->email->to($mail_to_tks); 
#				$this->email->subject($mail_subject_tks);
#				$this->email->message($mail_body); 
#				
#				$this->email->send();
/*開発用に一時的にコメントアウト@nagai ST
				mail($mail_to_tks,$mail_subject_tks,$mail_body,"From:".$mail_from."\nMime-Version: 1.0\nContent-Type: text/plain; charset=ISO-2022-JP\nContent-Transfer-Encoding: 7bit");
開発用に一時的にコメントアウト@nagai END*/				
				
				// 本部行きメール送信
#				$this->email->from($mail_from_tks, '');
#				$this->email->to($mail_to); 
#				$this->email->subject($mail_subject);
#				$this->email->message($discription.$mail_body);
#				
#				$send_result = $this->email->send();
/*テスト用(後で削除する) ST*/
				$send_result = mail('y-nagai@globalcoms.co.jp',$mail_subject,$discription.$mail_body,"From:".$mail_from_tks."\nMime-Version: 1.0\nContent-Type: text/plain; charset=ISO-2022-JP\nContent-Transfer-Encoding: 7bit");
/*テスト用(後で削除する) END*/
				
/*開発用に一時的にコメントアウト@nagai	 ST			
				$send_result = mail($mail_to,$mail_subject,$discription.$mail_body,"From:".$mail_from_tks."\nMime-Version: 1.0\nContent-Type: text/plain; charset=ISO-2022-JP\nContent-Transfer-Encoding: 7bit");
				// 20131106追加分 - MIC 長田様依頼 送信先追加（既存の送信メールのCCやBCCには含まないように）
				$send_result = mail('tokoton-navi@1.gk1.jp',$mail_subject,$discription.$mail_body,"From:".$mail_from_tks."\nMime-Version: 1.0\nContent-Type: text/plain; charset=ISO-2022-JP\nContent-Transfer-Encoding: 7bit");

				// 20161026追加分 古賀さん依頼
				$send_result = mail('ord-tokoton-navi-di@coby.tools',$mail_subject,$discription.$mail_body,"From:".$mail_from_tks."\nMime-Version: 1.0\nContent-Type: text/plain; charset=ISO-2022-JP\nContent-Transfer-Encoding: 7bit");

				// 20131106追加分 - グローバル確認用
				$send_result = mail('tokotonall@globalcoms.co.jp',$mail_subject,$discription.$mail_body,"From:".$mail_from_tks."\nMime-Version: 1.0\nContent-Type: text/plain; charset=ISO-2022-JP\nContent-Transfer-Encoding: 7bit");
#				echo $this->email->print_debugger();
#				exit;
開発用に一時的にコメントアウト@nagai END */				
				mb_internal_encoding('UTF-8');
				if($send_result){
					$this->estimate_formmodel_test->conversion_count($_SESSION['form']['sid']);
					$_SESSION['locate_back'] = $_SESSION['form']['sid'];
					unset($_SESSION['form']);
					header("location: /estimate_form_test/estimate_fin/");
				}else{
					header("location: /estimate_form_test/confirm/");
				}
			}
			
		}
		
		
		function estimate_fin(){
			/* ------------------------------------------------------------------ */
			/* ページの設定
			--------------------------------------------------------------------- */
#			$data['document_root'] = $_SERVER['DOCUMENT_ROOT'];
			$data['document_root'] = "/home/webmaster/public_html";
			$data['css'] = "/css/user/estimate.css";
			$data['page_title'] = "見積り完了 | とことん車検ナビ";
			$data['mainmenu_home'] = "mainmenu_home_off";
			$data['mainmenu_list'] = "mainmenu_list_act";
			$data['nowyear'] = date("Y");
			$data['page_name'] = "estimate_fin_test";
			
			/*----------------------------------------------------------------------------------*/
			/* overture コンバージョンタグ設置
			------------------------------------------------------------------------------------*/

			$overture_tag = "<SCRIPT language=\"JavaScript\" type=\"text/javascript\"> \n";
			$overture_tag .= "<!-- Yahoo Japan Corporation. \n";
			$overture_tag .= "window.ysm_customData = new Object();\n";
			$overture_tag .= "window.ysm_customData.conversion = \"transId=,currency=,amount=\"; ";
			$overture_tag .= "var ysm_accountid  = \"161FH85NJP6UJ2SJLODARRR4PM4\";";
			$overture_tag .= "document.write(\"<SCR\" + \"IPT language='JavaScript' type='text/javascript' \" ";
			$overture_tag .= "+ \"SRC=//\" + \"srv3.wa.marketingsolutions.yahoo.com\" + \"/script/ScriptServlet\" + \"?aid=\" + ysm_accountid  ";
			$overture_tag .= "+ \"></SCR\" + \"IPT>\"); \n ";
			$overture_tag .= "// --> \n ";
			$overture_tag .= "</SCRIPT> \n";
//20101009 高橋様からのご依頼でコンバージョンタグ変更 start
//			$overture_tag = "<SCRIPT language=\"JavaScript\" type=\"text/javascript\"> \n";
//			$overture_tag .= "<!-- Overture K.K. \n";
//			$overture_tag .= "window.ysm_customData = new Object();\n";
//			$overture_tag .= "window.ysm_customData.conversion = \"transId=,currency=,amount=\"; ";
//			$overture_tag .= "var ysm_accountid  = \"14L65HT2702MBVHK8ALP8FCKUC0\";";
//			$overture_tag .= "document.write(\"<SCR\" + \"IPT language='JavaScript' type='text/javascript' \" ";
//			$overture_tag .= "+ \"SRC=//\" + \"srv3.wa.marketingsolutions.yahoo.com\" + \"/script/ScriptServlet\" + \"?aid=\" + ysm_accountid ";
//			$overture_tag .= "+ \"></SCR\" + \"IPT>\"); ";
//			$overture_tag .= "// --> ";
//			$overture_tag .= "</SCRIPT> \n";
//20101009 高橋様からのご依頼でコンバージョンタグ変更 end
//20100407 SEO会社変更のためコンバージョンタグ変更 start
//			$overture_tag = "<SCRIPT language=\"JavaScript\" type=\"text/javascript\">\n";
//			$overture_tag .= "<!-- Overture K.K. \n";
//			$overture_tag .= "window.ysm_customData = new Object(); \n";
//			$overture_tag .= "window.ysm_customData.conversion = \"transId=,currency=,amount=\"; var ysm_accountid  = ";
//			$overture_tag .= "\"1KVSIJS7O1P676S66TRKKAJFDQO\"; document.write(\"<SCR\" + \"IPT language='JavaScript' type='text/javascript' \" ";
//			$overture_tag .= "+ \"SRC=//\" + \"srv2.wa.marketingsolutions.yahoo.com\" + ";
//			$overture_tag .= "\"/script/ScriptServlet\" + \"?aid=\" + ysm_accountid ";
//			$overture_tag .= "+ \"></SCR\" + \"IPT>\"); \n";
//			$overture_tag .= "// -->\n";
//			$overture_tag .= "</SCRIPT>\n";
//20100407 SEO会社変更のためコンバージョンタグ変更 end
			$data['overture_tag'] = $overture_tag;
			/*----------------------------------------------------------------------------------*/
			
			
			if(isset($_SESSION['search_url'])){
				$data['search_url'] = $_SESSION['search_url'];
			}else{
				if(isset($data['shop_data']['sid'])){
					$data['search_url'] = "/search/key_".sprintf("%04d",$data['shop_data']['sid'])."/";
				}else{
					$data['search_url'] = "/search/key_/";
				}
				
			}
			
			if(isset($_SESSION['locate_back'])){
				$data['sid'] = $_SESSION['locate_back'];
			}elseif(isset($_SESSION['form']['sid'])){
				$data['sid'] = $_SESSION['form']['sid'];
			}

			if(user_agent()){
				$this->smarty_parser->parse("ci:user/estimate_fin_sp_test.tpl", $data);
			}else{
				$this->smarty_parser->parse("ci:user/estimate_fin_test.tpl", $data);
			}
		}
		
		/*20161129@nagai ST*/
		function date_chk2($date){
			list($y,$m,$d) = explode("-",$date);
			if($d == "不明")$d = "01";
			$y = $y + 1988;
			$today = date("Y-m-d");
			$date_tmp = date("Y-m-d", strtotime($y."-".$m."-".$d));
			
			if($y != "1988" and $m != "" and $d != ""){
				if(!checkdate($m,$d,$y)){
					$this->validation->set_message('date_chk2','入庫希望日時に正しい日付を入力して下さい。');
					return false;
				}else{
					
					if($date_tmp < $today) {
						$this->validation->set_message('date_chk2','入庫希望日時は本日以降の日付を入力して下さい。');
						return false;;
					}
					
					return true;
				}
			}else{
				return true;
			}
		}
		/*20161129@nagai END*/
		
		function date_chk($date){
			list($y,$m,$d) = explode("-",$date);
			if($d == "不明")$d = "01";
			$y = $y + 1988;
			
			
			if($y != "1988" and $m != "" and $d != ""){
				if(!checkdate($m,$d,$y)){
					$this->validation->set_message('date_chk','車検満了日に正しい日付を入力して下さい。');
					return false;
				}else{
					return true;
				}
			}else{
				return true;
			}
			
		}
		
		function estimate_check($pd_no = ""){
			
#			$data['document_root'] = $_SERVER['DOCUMENT_ROOT'];
			$data['document_root'] = "/home/webmaster/public_html";
			$data['css'] = "/css/user/estimate.css";
			$data['page_title'] = "見積りフォーム | とことん車検ナビ";
			$data['mainmenu_home'] = "mainmenu_home_off";
			$data['mainmenu_list'] = "mainmenu_list_act";
			
			if($pd_no != ""){
				$data['pb_no'] = $pd_no;
			}
			$select_culum = "sid";
			$plan_result = $this->estimate_formmodel_test->do_select("t_shop_planbase",array("pb_no" => "$pd_no"),$select_culum);								// プラン
			if($plan_result != null and count($plan_result) == 1){
				$data['sid'] = $plan_result[0]['sid'];
			}
			
			if(isset($_SESSION['search_url'])){
				$data['search_url'] = $_SESSION['search_url'];
			}else{
				if(!empty($data['shop_data']['sid'])){
					$data['search_url'] = "/search/key_".sprintf("%04d",$data['shop_data']['sid'])."/type_manager/";
				}elseif(!empty($data['sid'])){
					$data['search_url'] = "/search/key_".sprintf("%04d",$data['sid'])."/type_manager/";
				}
			}
			
			
			$this->smarty_parser->parse("ci:user/estimate_check_test.tpl", $data);
			
		}
		
		function phone($str)
		{
			if ($str == '' || !$str)
			{
				return TRUE;
			}
			$result = TRUE;
			if($str){
				if(strpos($str,"-")===false){
					if (!preg_match("/(^(?<!090|080|070|０９０|０８０|０７０)[0-9０-９]{10}$)|(^(090|080|070|０９０|０８０|０７０)[0-9０-９]{8}$)|(^(0120|０１２０)[0-9０-９]{6}$)|(^(0080|００８０)[0-9０-９]{7}$)|(^(050|０５０)[0-9０-９]{8}$)/u", $str)) {
						$this->validation->set_message('phone','※ハイフン（-）なしの半角数字でご入力ください。');
						$result = FALSE;
					}
				}else{
					if (!preg_match("/(^(?<!090|080|070|０９０|０８０|０７０)(^[0-9０-９]{2,5}?\-[0-9０-９]{1,4}?\-[0-9０-９]{4}$|^[0-9０-９\-]{12}$))|(^(090|080|070|０９０|０８０|０７０)(\-[0-9０-９]{4}\-[0-9０-９]{4}|[0-9０-９\-]{13})$)|(^(0120|０１２０)(\-[0-9０-９]{2,3}\-[0-9０-９]{3,4}|[0-9０-９\-]{12})$)|(^(0080|００８０)\-[0-9０-９]{3}\-[0-9０-９]{4})|(^(050|０５０)(\-[0-9０-９]{4}\-[0-9０-９]{4}|[0-9０-９\-]{13})$)/u", $str)) {
						$this->validation->set_message('phone','※ハイフン（-）なしの半角数字でご入力ください。');
						$result = FALSE;
					}
				}
			}
			return $result;
		}
		
		
	}
	
?>
