<?
	class Shop_option extends ClientController{
		/* ------------------------------------------------------------------ */
		/* 共通変数設定
		--------------------------------------------------------------------- */
		var $table = "t_shop_shop_option";
		
		function Shop_option(){
			parent::ClientController();
			$this -> load -> helper(array('form','date'));									// ヘルパーのロード
			
			$this -> output -> set_header('Content-Type: text/html; charset=UTF-8');
		}
		function index(){
			$data = array();
			$card_arr = array();
			/* ------------------------------------------------------------------ */
			/* ページの設定
			--------------------------------------------------------------------- */
			$data['page_title'] = "店舗オプション";
			$data['now_category'] = "shop";
			$data['now_page'] = "shop_option";
			$data['document_root'] = str_replace("secure_html", "public_html", $_SERVER['DOCUMENT_ROOT']);
			
			$datestring = "%Y年%m月%d日";
			$time = time();
			$data['today'] = mdate($datestring, $time)."(".get_day($time).")";
			
#			$data['sid'] = $this->session->userdata['sid'];
			$data['sid'] = $_SESSION['login_dat']['sid'];
			$this->sid = $data['sid'];
			/* ------------------------------------------------------------------ */
			/* 取扱カード情報取得
			--------------------------------------------------------------------- */
			$this -> load -> model('client/shop_optionmodel');
			$result = $this -> shop_optionmodel -> do_select("t_shop_base",array("sid" => $data['sid']));
			
			if($result != null and count($result) == 1){
				if($result[0]['sd_card'] != ""){
					$card_arr = explode(",",$result[0]['sd_card']);
				}
				if($card_arr != null){
					for($i=1;$i<=9;$i++){
						if(array_search($i,$card_arr) !== false){
							$checked_card['card'.$i] = "t";
						}else{
							$checked_card['card'.$i] = "";
						}
						
					}
					$data['checked_card'] = $checked_card;
				}
			}
			
			/* ------------------------------------------------------------------ */
			/* ユーザー情報の設定
			--------------------------------------------------------------------- */
			$result = $this->shop_optionmodel->do_select("t_shop_base",array("sid" => $data['sid']));
			if($result != null and count($result) == 1){
				$data['user_data'] = $result[0];
			}
			
			/* ------------------------------------------------------------------ */
			/* 登録中オプションアイコンの取得
			--------------------------------------------------------------------- */
			$result = $this -> shop_optionmodel -> do_select("t_shop_shopopsion",array("sid" => $data['sid']));
			if($result != null){
				for($i=0;$i<count($result);$i++){
					$check_icon['icon'.$result[$i]['shop_option_no']] = "t";
				}
			}
			if(isset($check_icon) and $check_icon != null){
				$data['check_icon'] = $check_icon;
			}
			
# #			$_SESSION['form'] = (isset($_SESSION['form'])) ? $_SESSION['form'] : $query_data;
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
			
			$this->smarty_parser->parse("ci:client/shop_option.tpl", $data);
			unset($_SESSION['msg'],$_SESSION['form_error']);
		}
		
		function to_confirm(){
			unset($_SESSION['form_error'],$_SESSION['form']);
			$this -> load -> library('validation');
			$this -> validation -> set_error_delimiters('<li>','</li>');
			/* ------------------------------------------------------------------ */
			/* フィールドセット
			--------------------------------------------------------------------- */
			$fields['sid'] = "店舗番号";
			
			if($_POST['mode'] == "card"){
				$fields['card1'] = "VISA";
				$fields['card2'] = "Master";
				$fields['card3'] = "JCB";
				$fields['card4'] = "DC";
				$fields['card5'] = "アメリカンエキスプレス";
				$fields['card6'] = "UC";
				$fields['card7'] = "NICOS";
				$fields['card8'] = "ダイナース";
				$fields['card9'] = "その他";
				
			}else{
				$fields['icon1'] = "とことん24取扱い";
				$fields['icon2'] = "整備保証付";
				$fields['icon3'] = "夜間受付";
				$fields['icon4'] = "土日入庫OK";
				$fields['icon5'] = "代車有り";
				$fields['icon6'] = "引取・納車OK";
				$fields['icon7'] = "キャッシュレスOK";
				$fields['icon8'] = "クレジットカード払いOK";
				$fields['icon9'] = "グルメプレゼント";
				$fields['icon10'] = "グッズプレゼント";
				$fields['icon11'] = "ガソリンプレゼント";
				$fields['icon12'] = "抽選でプレゼント";
				$fields['icon13'] = "オイル交換サービス";
				$fields['icon14'] = "車検時限定割引サービス";
				$fields['icon15'] = "即日完了OK";
				$fields['icon16'] = "ロードサービス取り扱い";
				
			}
			
			
			
			$this -> validation -> set_fields($fields);
			/* ------------------------------------------------------------------ */
			/* ルールセット
			--------------------------------------------------------------------- */
			$rules['sid'] = "required";
			if($_POST['mode'] == "card"){
				$rules['card1'] = "";
				$rules['card2'] = "";
				$rules['card3'] = "";
				$rules['card4'] = "";
				$rules['card5'] = "";
				$rules['card6'] = "";
				$rules['card7'] = "";
				$rules['card8'] = "";
				$rules['card9'] = "";
			}else{
				$rules['icon1'] = "";
				$rules['icon2'] = "";
				$rules['icon3'] = "";
				$rules['icon4'] = "";
				$rules['icon5'] = "";
				$rules['icon6'] = "";
				$rules['icon7'] = "";
				$rules['icon8'] = "";
				$rules['icon9'] = "";
				$rules['icon10'] = "";
				$rules['icon11'] = "";
				$rules['icon12'] = "";
				$rules['icon13'] = "";
				$rules['icon14'] = "";
				$rules['icon15'] = "";
				$rules['icon16'] = "";
				
			}
			
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
				header("location: /client/shop_option/");
			}else{
				#OK
				foreach ($this->validation->_fields as $field => $label){
					$_SESSION['form'][$field] = $this->input->post($field);
				}
				$_SESSION['form']['mode'] = $_POST['mode'];
				header("location: /client/shop_option/regist_db");
			}
		}
		
		function regist_db(){
			if(!isset($_SESSION['form'])){
				header("location: /client/shop_option/");
			}
			$card_data = array();
			$values = $_SESSION['form'];
			if($values['mode'] == "card"){
				$card_num = "9";
				for($i=1;$i<=$card_num;$i++){
					if(isset($_SESSION['form']['card'.$i]) and $_SESSION['form']['card'.$i] != ""){
						$card_data[] = $i;
					}
				}
				if($card_data != null){
					$values['sd_card'] = implode(",",$card_data);
				}else{
					$values['sd_card'] = "";
				}
			}
			
			$this -> load -> model('client/shop_optionmodel');
			
			if(isset($values['sid'])){
				if($values['mode'] == "card"){
					if($this -> shop_optionmodel -> do_update($values)){
							$_SESSION['msg'] = "取扱いカードを登録しました。 ";
						unset($_SESSION['form']);
					}else{
						$_SESSION['form_error'][] = "DB登録時にエラーが発生しました。";
					}
				}else{
					if($this -> shop_optionmodel -> do_insert($values)){
							$_SESSION['msg'] = "店舗オプションを登録しました。";
						unset($_SESSION['form']);
					}else{
						$_SESSION['form_error'][] = "DB登録時にエラーが発生しました。";
					}
				}
				
			}else{
				$_SESSION['form_error'][] = "DB登録時にエラーが発生しました。";
			}
			
			header("location: /client/shop_option/");
		}
		
#		function delete_db($mail_no){
# #			if(!isset($mail_no)){
# #				header("location: /client/shop_option/");
# #			}
# #			$this -> load -> model('client/shop_optionmodel');
# #			
# #			if($this -> shop_optionmodel -> do_delete(array("mail_no" => $mail_no))){
# #				$_SESSION['msg'] = "見積りメール設定の内容をを削除しました。";
# #			}else{
# #				$_SESSION['form_error'][] = "データ削除時にエラーが発生しました。";
# #			}
# #			unset($_SESSION['form']);
# #			header("location: /client/shop_option/");
#		}
		
#		function edit($mail_no){
# #			/* ------------------------------------------------------------------ */
# #			/* 編集データの取得
# #			--------------------------------------------------------------------- */
# #			if(!isset($mail_no)){
# #				$_SESSION['form_error'] = "トピックが選択されていないので編集できません。";
# #				header("location: /client/shop_option/");
# #			}
# #			$this -> load -> model('client/shop_optionmodel');
# #			
# #			$result = $this -> shop_optionmodel -> do_select(array("mail_no" => $mail_no));
# #			if($this->shop_optionmodel->rows == 1){
# #				if($result != null){
# #					foreach($result[0] as $key => $val){
# #						$_SESSION['form'][$key] = $val;
# #					}
# #				}
# #			}
# #			header("location: /client/shop_option/#regist_form");
#			/* ------------------------------------------------------------------ */
#		}
		
		
		function stat_chk($stat){
#			$this -> load -> model('client/shop_optionmodel');
#			
#			$result = $this->shop_optionmodel->do_select(array("sid" => $this->session->userdata['sid']));
#			
#			if($result != null and count($result) == 1){
#				if($result[0]['sd_exam_state'] == 0 or $result[0]['sd_exam_state'] == 4){
#					return true;
#				}else{
#					$this->validation->set_message('stat_chk','すでに審査中か合格しています。');
#					return false;
#				}
#				
#			}
			
		}
		
		
		function to_confirm_open(){
#			unset($_SESSION['form_error'],$_SESSION['form']);
#			$this -> load -> library('validation');
#			$this -> validation -> set_error_delimiters('<li>','</li>');
#			
#			/* ------------------------------------------------------------------ */
#			/* フィールドセット
#			--------------------------------------------------------------------- */
#			$fields['sid'] = "店舗番号";
#			$fields['sd_open_state'] = "公開・非公開";
#			
#			$this -> validation -> set_fields($fields);
#			/* ------------------------------------------------------------------ */
#			/* ルールセット
#			--------------------------------------------------------------------- */
#			$rules['sid'] = "required";
#			$rules['sd_open_state'] = "required";
#			
#			$this -> validation -> set_rules($rules);
#			/* ------------------------------------------------------------------ */
#			/* エラーチェック
#			--------------------------------------------------------------------- */
#			if ($this->validation->run() == FALSE){
#				#NG
#				foreach ($this->validation->_fields as $field => $label){
#					$_SESSION['form_error'][$field] = $this->validation->{$field.'_error'};
#					$_SESSION['form'][$field] = $this->input->post($field);
#				}
#				header("location: /client/shop_option/");
#			}else{
#				#OK
#				foreach ($this->validation->_fields as $field => $label){
#					$_SESSION['form'][$field] = $this->input->post($field);
#				}
#				header("location: /client/shop_option/regist_db_open");
#			}
			
		}
		
		function regist_db_open(){
#			if(!isset($_SESSION['form'])){
#				header("location: /client/shop_option/");
#			}
#			$values = $_SESSION['form'];
#			
#			$this -> load -> model('client/shop_optionmodel');
#			
#			if(isset($values['sid'])){
#				if($this -> shop_optionmodel -> do_update($values)){
#					$_SESSION['msg'] = "サイトの公開設定を変更しました。";
#					unset($_SESSION['form']);
#				}else{
#					$_SESSION['form_error'][] = "DB登録時にエラーが発生しました。";
#				}
#				
#			}else{
#				$_SESSION['form_error'][] = "DB登録時にエラーが発生しました。";
#			}
#			
#			header("location: /client/shop_option/");
		}
		
		
	}
	
?>