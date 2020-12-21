<?
	class Plan extends ClientController{
		/* ------------------------------------------------------------------ */
		/* 共通変数設定
		--------------------------------------------------------------------- */
		var $table = "t_shop_plan";
		var $pb_no = "";
		
		function Plan(){
			parent::ClientController();
			$this -> load -> helper(array('form','date'));									// ヘルパーのロード
			
			$this -> output -> set_header('Content-Type: text/html; charset=UTF-8');
		}
		function index(){
			$data = array();
			/* ------------------------------------------------------------------ */
			/* ページの設定
			--------------------------------------------------------------------- */
			$data['page_title'] = "プラン一覧";
			$data['now_category'] = "shop";
			$data['now_page'] = "plan";
			$data['sub_menu'] = "list";
			$data['document_root'] = str_replace("secure_html", "public_html", $_SERVER['DOCUMENT_ROOT']);
			
			$datestring = "%Y年%m月%d日";
			$time = time();
			$data['today'] = mdate($datestring, $time)."(".get_day($time).")";
			
#			$data['sid'] = $this->session->userdata['sid'];
			$data['sid'] = $_SESSION['login_dat']['sid'];
			/* ------------------------------------------------------------------ */
			/* 料金項目の取得
			--------------------------------------------------------------------- */
			$this -> load -> model('client/planmodel');
			$result = $this -> planmodel -> do_select("t_shop_base",array("sid" => $data['sid']));
			
			if($result != null and count($result) == 1){
				foreach($result[0] as $key => $val){
					$data['query_data'][$key] = $val;
				}
			}
			/* ------------------------------------------------------------------ */
			/* 割引メニューの取得
			--------------------------------------------------------------------- */
			$result = $this -> planmodel -> do_select("t_shop_dscbase db",array("sid" => $data['sid']));
			if($result != null){
				foreach($result as $key => $val){
					if(($val['dd_level_no'] == 0 and $val['dd_dsc_price'] != "") or ($val['dd_level_no'] != 0 and $val['dd_dsc_price'] != "" and $val['dd_dsc_nm'] != "")){
						$data['disc_menu'][] = $val;
					}
				}
			}
			
			if(isset($data['disc_menu']) and $data['disc_menu'] != null){
				// チェックボックスチェック処理
				for($i=0;$i<count($data['disc_menu']);$i++){
					if(isset($_SESSION['form']['disc_data']) and $_SESSION['form']['disc_data'] != null){
						$data['disc_menu'][$i]['checked'] = "";
						foreach($_SESSION['form']['disc_data'] as $key => $val){
							if($val != ""){
								list($db_no,$dd_level_no) = explode("-",$val);
								if($data['disc_menu'][$i]['db_no'] == $db_no and $data['disc_menu'][$i]['dd_level_no'] == $dd_level_no){
									$data['disc_menu'][$i]['checked'] = "checked";
								}
							
							}
						}
					}
				}
			}
			/* ------------------------------------------------------------------ */
			/* プラン内容の取得
			--------------------------------------------------------------------- */
			$result = $this->planmodel->do_select("t_shop_planbase",array("sid" => $data['sid']));
			if($result != null){
				$list_display = $this->planmodel->list_display($result);
				
				if($list_display != null){
					$data['plan_data'] = $list_display;
				}
				
			}
			
			/* ------------------------------------------------------------------ */
			/* ユーザー情報の設定
			--------------------------------------------------------------------- */
			$result = $this->planmodel->select_shop_data("t_shop_base",array("sid" => $data['sid']));
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
			/* ------------------------------------------------------------------ */
			/* デフォルト値の設定
			--------------------------------------------------------------------- */
			if(!isset($_SESSION['form'])){
				$default_list = array(
					'mini_weight_tax' => '6600',
					'small_weight_tax' => '16400',
					'middle_weight_tax' => '24600',
					'large_weight_tax' => '32800',
					'great_weight_tax' => '41000',
					'mini_insrnc_price' => '25070',
					'small_insrnc_price' => '25830',
					'middle_insrnc_price' => '25830',
					'large_insrnc_price' => '25830',
					'great_insrnc_price' => '25830'
				);
				
				foreach($default_list as $key => $val){
					$data['form_data'][$key] = $val;
				}
			}
			
			
			$this->smarty_parser->parse("ci:client/plan.tpl", $data);
			unset($_SESSION['msg'],$_SESSION['form_error'],$_SESSION['form']);
		}
		
		function to_confirm(){
			unset($_SESSION['form']);
			unset($_SESSION['form_error']);
			$this -> load -> library('validation');
			$this -> validation -> set_error_delimiters('<li>','</li>');
			
			if(isset($_POST['pb_no']) and $_POST['pb_no'] != ""){
				$this->pb_no = $_POST['pb_no'];
			}
			/* ------------------------------------------------------------------ */
			/* XSS対策 + タグの無効化
			--------------------------------------------------------------------- */
			foreach($_POST as $key => $val){
				if($key != "disc_data"){
					$val = $this->input->xss_clean($val);
					$_POST[$key] = htmlspecialchars($val);
				}
			}
			
			/* ------------------------------------------------------------------ */
			/* ステータスセット
			--------------------------------------------------------------------- */
			for($i=1;$i<9;$i++){
				if(!isset($_POST['pb_itm0'.$i.'_state'])){
					$_POST['pb_itm0'.$i.'_state'] = "f";
				}
			}
			
			/* ------------------------------------------------------------------ */
			/* フィールドセット
			--------------------------------------------------------------------- */
			$fields['sid'] = "店舗番号";
			$fields['pb_plan_nm'] = "プラン名";
			$fields['pb_chatch_copy'] = "プランのキャッチコピー";
			$fields['pb_plan_contents'] = "内容";
			
			$fields['mini_weight_tax'] = "軽自動車重量税";
			$fields['small_weight_tax'] = "小型乗用車重量税";
			$fields['middle_weight_tax'] = "中型乗用車重量税";
			$fields['large_weight_tax'] = "大型乗用車重量税";
			$fields['great_weight_tax'] = "大型乗用車重量税";
			
			$fields['mini_insrnc_price'] = "軽自動車自賠責保険";
			$fields['small_insrnc_price'] = "小型乗用車自賠責保険";
			$fields['middle_insrnc_price'] = "中型乗用車自賠責保険";
			$fields['large_insrnc_price'] = "大型乗用車自賠責保険";
			$fields['great_insrnc_price'] = "大型乗用車自賠責保険";
			
#			$fields['mini_stamp_price'] = "軽自動車印紙代";
#			$fields['small_stamp_price'] = "小型自動車印紙代";
#			$fields['middle_stamp_price'] = "中型自動車印紙代";
#			$fields['large_stamp_price'] = "大型自動車印紙代";

			$fields['mini_itm01_price'] = "軽自動車料金構成要素1";
			$fields['small_itm01_price'] = "小型乗用車料金構成要素1";
			$fields['middle_itm01_price'] = "中型乗用車料金構成要素1";
			$fields['large_itm01_price'] = "大型乗用車料金構成要素1";
			$fields['great_itm01_price'] = "大型乗用車料金構成要素1";
			
			$fields['mini_itm02_price'] = "軽自動車料金構成要素2";
			$fields['small_itm02_price'] = "小型乗用車料金構成要素2";
			$fields['middle_itm02_price'] = "中型乗用車料金構成要素2";
			$fields['large_itm02_price'] = "大型乗用車料金構成要素2";
			$fields['great_itm02_price'] = "大型乗用車料金構成要素2";
			
			$fields['mini_itm03_price'] = "軽自動車料金構成要素3";
			$fields['small_itm03_price'] = "小型乗用車料金構成要素3";
			$fields['middle_itm03_price'] = "中型乗用車料金構成要素3";
			$fields['large_itm03_price'] = "大型乗用車料金構成要素3";
			$fields['great_itm03_price'] = "大型乗用車料金構成要素3";
			
			$fields['mini_itm04_price'] = "軽自動車料金構成要素4";
			$fields['small_itm04_price'] = "小型乗用車料金構成要素4";
			$fields['middle_itm04_price'] = "中型乗用車料金構成要素4";
			$fields['large_itm04_price'] = "大型乗用車料金構成要素4";
			$fields['great_itm04_price'] = "大型乗用車料金構成要素4";
			
			$fields['mini_itm05_price'] = "軽自動車料金構成要素5";
			$fields['small_itm05_price'] = "小型乗用車料金構成要素5";
			$fields['middle_itm05_price'] = "中型乗用車料金構成要素5";
			$fields['large_itm05_price'] = "大型乗用車料金構成要素5";
			$fields['great_itm05_price'] = "大型乗用車料金構成要素5";
			
			$fields['mini_itm06_price'] = "軽自動車料金構成要素6";
			$fields['small_itm06_price'] = "小型乗用車料金構成要素6";
			$fields['middle_itm06_price'] = "中型乗用車料金構成要素6";
			$fields['large_itm06_price'] = "大型乗用車料金構成要素6";
			$fields['great_itm06_price'] = "大型乗用車料金構成要素6";
			
			$fields['mini_itm07_price'] = "軽自動車料金構成要素7";
			$fields['small_itm07_price'] = "小型乗用車料金構成要素7";
			$fields['middle_itm07_price'] = "中型乗用車料金構成要素7";
			$fields['large_itm07_price'] = "大型乗用車料金構成要素7";
			$fields['great_itm07_price'] = "大型乗用車料金構成要素7";
			
			$fields['mini_itm08_price'] = "軽自動車料金構成要素8";
			$fields['small_itm08_price'] = "小型乗用車料金構成要素8";
			$fields['middle_itm08_price'] = "中型乗用車料金構成要素8";
			$fields['large_itm08_price'] = "大型乗用車料金構成要素8";
			$fields['great_itm08_price'] = "大型乗用車料金構成要素8";
			
			$fields['pb_itm01_state'] = "料金構成要素1ステータス";
			$fields['pb_itm02_state'] = "料金構成要素2ステータス";
			$fields['pb_itm03_state'] = "料金構成要素3ステータス";
			$fields['pb_itm04_state'] = "料金構成要素4ステータス";
			$fields['pb_itm05_state'] = "料金構成要素5ステータス";
			$fields['pb_itm06_state'] = "料金構成要素6ステータス";
			$fields['pb_itm07_state'] = "料金構成要素7ステータス";
			$fields['pb_itm08_state'] = "料金構成要素8ステータス";
			
			$fields['mini_stamp_price'] = "印紙代（軽）";
			$fields['small_stamp_price'] = "印紙代（小型）";
			$fields['middle_stamp_price'] = "印紙代（普通）";
			
			
			if(isset($_POST['pb_no'])){
				$fields['pb_no'] = "プランNo.";
			}
			$fields['max_num'] = "最大個数";
			
			
			
			$this -> validation -> set_fields($fields);
			/* ------------------------------------------------------------------ */
			/* ルールセット
			--------------------------------------------------------------------- */
			$rules['sid'] = "required";
			$rules['pb_plan_nm'] = "required";
			$rules['pb_chatch_copy'] = "";
			$rules['pb_plan_contents'] = "";
			
			$rules['mini_weight_tax'] = "numeric|required";
			$rules['small_weight_tax'] = "numeric|required";
			$rules['middle_weight_tax'] = "numeric|required";
			$rules['large_weight_tax'] = "numeric|required";
			$rules['great_weight_tax'] = "numeric|required";
			
			$rules['mini_insrnc_price'] = "numeric|required";
			$rules['small_insrnc_price'] = "numeric|required";
			$rules['middle_insrnc_price'] = "numeric|required";
			$rules['large_insrnc_price'] = "numeric|required";
			$rules['great_insrnc_price'] = "numeric|required";
			
#			$rules['mini_stamp_price'] = "numeric|required";
#			$rules['small_stamp_price'] = "numeric|required";
#			$rules['middle_stamp_price'] = "numeric|required";
#			$rules['large_stamp_price'] = "numeric|required";
#			$rules['great_stamp_price'] = "numeric|required";
			
			$rules['mini_itm01_price'] = "numeric";
			$rules['small_itm01_price'] = "numeric";
			$rules['middle_itm01_price'] = "numeric";
			$rules['large_itm01_price'] = "numeric";
			$rules['great_itm01_price'] = "numeric";
			
			$rules['mini_itm02_price'] = "numeric";
			$rules['small_itm02_price'] = "numeric";
			$rules['middle_itm02_price'] = "numeric";
			$rules['large_itm02_price'] = "numeric";
			$rules['great_itm02_price'] = "numeric";
			
			$rules['mini_itm03_price'] = "numeric";
			$rules['small_itm03_price'] = "numeric";
			$rules['middle_itm03_price'] = "numeric";
			$rules['large_itm03_price'] = "numeric";
			$rules['great_itm03_price'] = "numeric";
			
			$rules['mini_itm04_price'] = "numeric";
			$rules['small_itm04_price'] = "numeric";
			$rules['middle_itm04_price'] = "numeric";
			$rules['large_itm04_price'] = "numeric";
			$rules['great_itm04_price'] = "numeric";
			
			$rules['mini_itm05_price'] = "numeric";
			$rules['small_itm05_price'] = "numeric";
			$rules['middle_itm05_price'] = "numeric";
			$rules['large_itm05_price'] = "numeric";
			$rules['great_itm05_price'] = "numeric";
			
			$rules['mini_itm06_price'] = "numeric";
			$rules['small_itm06_price'] = "numeric";
			$rules['middle_itm06_price'] = "numeric";
			$rules['large_itm06_price'] = "numeric";
			$rules['great_itm06_price'] = "numeric";
			
			$rules['mini_itm07_price'] = "numeric";
			$rules['small_itm07_price'] = "numeric";
			$rules['middle_itm07_price'] = "numeric";
			$rules['large_itm07_price'] = "numeric";
			$rules['great_itm07_price'] = "numeric";
			
			$rules['mini_itm08_price'] = "numeric";
			$rules['small_itm08_price'] = "numeric";
			$rules['middle_itm08_price'] = "numeric";
			$rules['large_itm08_price'] = "numeric";
			$rules['great_itm08_price'] = "numeric";
			
			$rules['pb_itm01_state'] = "";
			$rules['pb_itm02_state'] = "";
			$rules['pb_itm03_state'] = "";
			$rules['pb_itm04_state'] = "";
			$rules['pb_itm05_state'] = "";
			$rules['pb_itm06_state'] = "";
			$rules['pb_itm07_state'] = "";
			$rules['pb_itm08_state'] = "";
			
			$rules['mini_stamp_price'] = "numeric|required";
			$rules['small_stamp_price'] = "numeric|required";
			$rules['middle_stamp_price'] = "numeric|required";
			
			
			if(isset($_POST['pb_no'])){
				$rules['pb_no'] = "";
			}
			$rules['max_num'] = "callback_chk_num";
			
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
				if(isset($_POST['disc_data'])){
					for($i=0;$i<count($_POST['disc_data']);$i++){
						$_SESSION['form']['disc_data'][$i] = $_POST['disc_data'][$i];
					}
				}
				$this->pb_no = "";
				header("location: /client/plan/");
			}else{
				#OK
				foreach ($this->validation->_fields as $field => $label){
					$_SESSION['form'][$field] = $this->input->post($field);
				}
				if(isset($_POST['disc_data'])){
					for($i=0;$i<count($_POST['disc_data']);$i++){
						$_SESSION['form']['disc_data'][$i] = $_POST['disc_data'][$i];
					}
				}
				$this->pb_no = "";
				header("location: /client/plan/regist_db");
			}
		}
		
		function regist_db(){
			if(!isset($_SESSION['form'])){
				header("location: /client/plan/");
			}
			$values = $_SESSION['form'];
			
			$this -> load -> model('client/planmodel');
			
			if(!isset($values['pb_no'])){
				if($this -> planmodel -> do_insert($values)){
					$_SESSION['msg'] = "プランを追加しました。";
					unset($_SESSION['form']);
				}else{
					$_SESSION['form_error'][] = "プランの登録に失敗しました。";
				}
			}else{
				if($this -> planmodel -> do_update($values)){
					$_SESSION['msg'] = "プランの編集が完了しました。";
					unset($_SESSION['form']);
				}else{
					$_SESSION['form_error'][] = "プランの編集に失敗しました。";
				}
			}
			
			header("location: /client/plan/");
		}
		
		function delete_db($pb_no){
			if(!isset($pb_no)){
				header("location: /client/plan/");
			}
			$this -> load -> model('client/planmodel');
			
			if($this -> planmodel -> do_delete(array("pb_no" => $pb_no))){
				$_SESSION['msg'] = "プランを削除しました。";
			}else{
				$_SESSION['form_error'][] = "データ削除時にエラーが発生しました。";
			}
			unset($_SESSION['form']);
			header("location: /client/plan/");
		}
		
		function edit($pb_no){
			/* ------------------------------------------------------------------ */
			/* 編集データの取得
			--------------------------------------------------------------------- */
			if(!isset($pb_no)){
				$_SESSION['form_error'] = "プランが選択されていないので編集できません。";
				header("location: /client/plan/");
			}
			$this -> load -> model('client/planmodel');
			
			$result = $this -> planmodel -> do_select("t_shop_planbase pb",array("pb.pb_no" => $pb_no));
			if($result != null){
				$plan_data = $this -> planmodel ->disp_data($result);
				if($plan_data != null){
					foreach($plan_data as $key => $val){
						$_SESSION['form'][$key] = $val;
					}
				}
#				#PRINT_R
#				print "<pre>";
#				print_r($plan_data);
#				print "</pre>";
#				exit;
			}else{
				$_SESSION['form_error'] = "対象のプランを選択できませんでした。";
				header("location: /client/plan/");
			}
#			if($this->planmodel->rows == 1){
#				if($result != null){
#					foreach($result[0] as $key => $val){
#						$_SESSION['form'][$key] = $val;
#					}
#				}
#			}
			header("location: /client/plan/#regist_form");
#			/* ------------------------------------------------------------------ */
		}
		
		
		function to_confirm_recommend(){
			unset($_SESSION['form']);
			unset($_SESSION['form_error']);
			$this -> load -> library('validation');
			$this -> validation -> set_error_delimiters('<li>','</li>');
			
			/* ------------------------------------------------------------------ */
			/* フィールドセット
			--------------------------------------------------------------------- */
			$fields['recommend'] = "おすすめプラン";
			$fields['sid'] = "店舗番号";
			
			$this -> validation -> set_fields($fields);
			/* ------------------------------------------------------------------ */
			/* ルールセット
			--------------------------------------------------------------------- */
			$rules['recommend'] = "required";
			$rules['sid'] = "required";
			
			$this -> validation -> set_rules($rules);
			
			/* ------------------------------------------------------------------ */
			/* エラーチェック
			--------------------------------------------------------------------- */
			if ($this->validation->run() == FALSE){
				#NG
				foreach ($this->validation->_fields as $field => $label){
#					$_SESSION['form_error'][$field] = $this->validation->{$field.'_error'};
					$_SESSION['form'][$field] = $this->input->post($field);
				}
				$_SESSION['form_error'][$field] = "おすすめプランが選択されていません。";
				header("location: /client/plan/");
			}else{
				#OK
				foreach ($this->validation->_fields as $field => $label){
					$_SESSION['form'][$field] = $this->input->post($field);
				}
				header("location: /client/plan/regist_db_recommend");
			}
			
		}
		
		function regist_db_recommend(){
			if(!isset($_SESSION['form'])){
				header("location: /client/plan/");
			}
			
			$values['pb_no'] = $_SESSION['form']['recommend'];
			$values['pb_reccomend_flag'] = "t";
			$values['sid'] = $_SESSION['form']['sid'];
			
			$this -> load -> model('client/planmodel');
			
			if($this -> planmodel -> do_update_recommend($values)){
				$_SESSION['msg'] = "おすすめプランを設定しました。";
				unset($_SESSION['form']);
			}else{
				$_SESSION['form_error'][] = "おすすめプランの設定に失敗しました。";
			}
			header("location: /client/plan/");
		}
		
		
		function chk_num($max_num){
			
			if($this->pb_no != ""){
#				$this->db->where("sid = '".$this->session->userdata['sid']."' and pb_no <> '".$this->pb_no."'");
				$this->db->where("sid = '".$_SESSION['login_dat']['sid']."' and pb_no <> '".$this->pb_no."'");
			}else{
#				$this->db->where("sid = '".$this->session->userdata['sid']."'");
				$this->db->where("sid = '".$_SESSION['login_dat']['sid']."'");
			}
			
			$query = $this->db->get("t_shop_planbase");
			
			$rows = $query->num_rows;
			
			if($rows < $max_num){
				return true;
			}else{
				$this->validation->set_message('chk_num','プランは最大'.$max_num.'個まで登録可能です。');
				return false;
			}
			
		}
		
		
		
	}
	
?>