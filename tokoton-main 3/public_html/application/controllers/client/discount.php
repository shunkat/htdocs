<?
	class Discount extends ClientController{
		/* ------------------------------------------------------------------ */
		/* 共通変数設定
		--------------------------------------------------------------------- */
		var $table = "t_shop_dscbase";
		var $table2 = "t_shop_dscdetail";
		var $db_no = "";
		
		function Discount(){
			parent::ClientController();
			$this -> load -> helper(array('form','date'));									// ヘルパーのロード
			
			$this -> output -> set_header('Content-Type: text/html; charset=UTF-8');
		}
		function index(){
			
			
			#20080927 arai db_sort set
			# db_last_update desc,db_no DESC 旧ソート
#			$max_sort = 0;
#			$sql = "select * from t_shop_dscbase order by db_last_update asc,db_no asc";
#			$query = $this -> db -> query($sql);
#			$result = $query->result_array();
#			
#			$this -> load -> model('client/discountmodel');
#			foreach($result as $key => $val){
#				
#				$max_sort = $this->discountmodel->max_select("t_shop_dscbase","db_sort");
#				
#				$sql = "update t_shop_dscbase set db_sort = ".$max_sort." where db_no =".$val['db_no'];
#				$this -> db -> query($sql);
#			}
			
			
			
			
			
			
			
			
			$data = array();
			/* ------------------------------------------------------------------ */
			/* ページの設定
			--------------------------------------------------------------------- */
			$data['page_title'] = "割引メニュー";
			$data['now_category'] = "shop";
			$data['now_page'] = "discount";
			$data['document_root'] = str_replace("secure_html", "public_html", $_SERVER['DOCUMENT_ROOT']);
			
			$datestring = "%Y年%m月%d日";
			$time = time();
			$data['today'] = mdate($datestring, $time)."(".get_day($time).")";
			
#			$data['sid'] = $this->session->userdata['sid'];
			$data['sid'] = $_SESSION['login_dat']['sid'];
			/* ------------------------------------------------------------------ */
			/* 割引メニュー情報の取得
			--------------------------------------------------------------------- */
			$this -> load -> model('client/discountmodel');
			$result = $this -> discountmodel -> do_select(array("sid" => $data['sid']));
			
			if($result != null){
				foreach($result as $key => $val){
					$data['query_data'][] = $val;
				}
			}
			/* ------------------------------------------------------------------ */
			/* エラーメッセージの代入
			--------------------------------------------------------------------- */
			if(isset($_SESSION['form_error'])){
				$data['form_error'] = $_SESSION['form_error'];
			}
			
			/* 順番変更ボタン作成 */
			if(isset($data['query_data'])){
				$data['query_data'] = $this->discountmodel->make_sort_button($data['query_data']);
			}
			
			/* ------------------------------------------------------------------ */
			/* ユーザー情報の設定
			--------------------------------------------------------------------- */
			$result = $this->discountmodel->select_shop_data("t_shop_base",array("sid" => $data['sid']));
			if($result != null and count($result) == 1){
				$data['user_data'] = $result[0];
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

			
			$this->smarty_parser->parse("ci:client/discount.tpl", $data);
			unset($_SESSION['msg'],$_SESSION['form_error']);
		}
		
		function to_confirm(){
			unset($_SESSION['form_error'],$_SESSION['form']);
			$this -> load -> library('validation');
			$this -> validation -> set_error_delimiters('<li>','</li>');
			
			if(isset($_POST['db_no']) and $_POST['db_no'] != ""){
				$this->db_no = $_POST['db_no'];
			}
			/* ------------------------------------------------------------------ */
			/* XSS対策 + タグの無効化
			--------------------------------------------------------------------- */
			foreach($_POST as $key => $val){
				$val = $this->input->xss_clean($val);
				$_POST[$key] = htmlspecialchars($val);
			}
			
			/* ------------------------------------------------------------------ */
			/* フィールドセット
			--------------------------------------------------------------------- */
			$fields['sid'] = "店舗番号";
			$fields['db_menu_nm'] = "メニュー項目名";
			$fields['db_menu_detail'] = "詳細";
			$fields['level_flag'] = "段階";
			$fields['db_no'] = "割引メニューNo.";
			
			if($_POST['level_flag'] == "f"){
				$fields['dd_dsc_price'] = "割引金額";
				$fields['dd_no1'] = "割引メニューNo.1";
				
				$fields['dd_no1'] = "割引詳細No1";
				$fields['dd_no2'] = "割引詳細No2";
				$fields['dd_no3'] = "割引詳細No3";
				$fields['dd_no4'] = "割引詳細No4";
			}elseif($_POST['level_flag'] == "t"){
				$fields['dsc_nm1'] = "段階項目名1";
				$fields['dsc_nm2'] = "段階項目名2";
				$fields['dsc_nm3'] = "段階項目名3";
				$fields['dsc_nm4'] = "段階項目名4";
				$fields['dsc_price1'] = "割引金額1";
				$fields['dsc_price2'] = "割引金額2";
				$fields['dsc_price3'] = "割引金額3";
				$fields['dsc_price4'] = "割引金額4";
				
				$fields['dd_no1'] = "割引詳細No1";
				$fields['dd_no2'] = "割引詳細No2";
				$fields['dd_no3'] = "割引詳細No3";
				$fields['dd_no4'] = "割引詳細No4";
			}
			$fields['max_num'] = "最大個数";
			
			$this -> validation -> set_fields($fields);
			/* ------------------------------------------------------------------ */
			/* ルールセット
			--------------------------------------------------------------------- */
			$rules['sid'] = "required";
			$rules['db_menu_nm'] = "required";
			$rules['db_menu_detail'] = "required";
			$rules['level_flag'] = "required";
			$rules['db_no'] = "";
			$rules['max_num'] = "callback_chk_num";
			
			if($_POST['level_flag'] == "f"){
				$rules['dd_dsc_price'] = "required|numeric";
				
				$rules['dd_no1'] = "";
				$rules['dd_no2'] = "";
				$rules['dd_no3'] = "";
				$rules['dd_no4'] = "";
			}elseif($_POST['level_flag'] == "t"){
				$rules['dsc_nm1'] = "required";
				
				for($i=2;$i<5;$i++){
					if(isset($_POST['dsc_nm'.$i]) and $_POST['dsc_nm'.$i] != ""){
						$rules['dsc_price'.$i] = "required|numeric";
					}else{
						$rules['dsc_price'.$i] = "numeric";
					}
					if(isset($_POST['dsc_price'.$i]) and $_POST['dsc_price'.$i] != ""){
						$rules['dsc_nm'.$i] = "required";
					}else{
						$rules['dsc_nm'.$i] = "";
					}
				}
				
#				$rules['dsc_nm2'] = "";
#				$rules['dsc_nm3'] = "";
#				$rules['dsc_nm4'] = "";
				$rules['dsc_price1'] = "required|numeric";
#				$rules['dsc_price2'] = "numeric";
#				$rules['dsc_price3'] = "numeric";
#				$rules['dsc_price4'] = "numeric";
				
				$rules['dd_no1'] = "";
				$rules['dd_no2'] = "";
				$rules['dd_no3'] = "";
				$rules['dd_no4'] = "";
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
				$this->db_no = "";
				header("location: /client/discount/");
			}else{
				#OK
				foreach ($this->validation->_fields as $field => $label){
					$_SESSION['form'][$field] = $this->input->post($field);
				}
				$this->db_no = "";
				header("location: /client/discount/regist_db");
			}
		}
		
		function regist_db(){
			if(!isset($_SESSION['form'])){
				header("location: /client/discount/");
			}
			foreach($_SESSION['form'] as $key => $val){
				if($val == ""){
					unset($_SESSION['form'][$key]);
				}
			}
			$values = $_SESSION['form'];
			
			$this -> load -> model('client/discountmodel');
			
			if(!isset($values['db_no'])){
				if($this -> discountmodel -> do_insert($values)){
					$_SESSION['msg'] = "割引メニューを追加しました。";
					unset($_SESSION['form']);
				}else{
					$_SESSION['form_error'][] = "DB登録時にエラーが発生しました。";
				}
			}else{
				if($this -> discountmodel -> do_update($values,array("db_no" => $values['db_no']))){
					$_SESSION['msg'] = "割引メニューの編集が完了しました。";
					unset($_SESSION['form']);
				}else{
					$_SESSION['form_error'][] = "割引メニューの編集がに失敗しました。。";
				}
			}
			
			header("location: /client/discount/");
		}
		
		function delete_db($db_no){
			if(!isset($db_no)){
				header("location: /client/discount/");
			}
			$this -> load -> model('client/discountmodel');
			
			if($this -> discountmodel -> do_delete(array("db_no" => $db_no))){
				$_SESSION['msg'] = "割引メニューを削除しました。";
			}else{
				$_SESSION['form_error'][] = "データ削除時にエラーが発生しました。";
			}
			unset($_SESSION['form']);
			header("location: /client/discount/");
		}
		
		function edit($db_no){
			unset($_SESSION['form']);
			/* ------------------------------------------------------------------ */
			/* 編集データの取得
			--------------------------------------------------------------------- */
			if(!isset($db_no)){
				$_SESSION['form_error'] = "トピックが選択されていないので編集できません。";
				header("location: /client/discount/");
			}
			$this -> load -> model('client/discountmodel');
			
			$result = $this -> discountmodel -> do_select_edit(array("sd.db_no" => $db_no));
			
			if($this->discountmodel->rows == 1){
				$_SESSION['form']['db_no'] = $result[0]['db_no'];
				$_SESSION['form']['db_menu_nm'] = $result[0]['db_menu_nm'];
				$_SESSION['form']['db_menu_detail'] = $result[0]['db_menu_detail'];
				$_SESSION['form']['dd_no1'] = $result[0]['dd_no'];
				$_SESSION['form']['dd_level_no'] = $result[0]['dd_level_no'];
				$_SESSION['form']['dd_dsc_nm'] = $result[0]['dd_dsc_nm'];
				$_SESSION['form']['dd_dsc_price'] = $result[0]['dd_dsc_price'];
				
				$_SESSION['form']['level_flag'] = "f";
			}elseif($this->discountmodel->rows > 1){
				$_SESSION['form']['db_no'] = $result[0]['db_no'];
				$_SESSION['form']['db_menu_nm'] = $result[0]['db_menu_nm'];
				$_SESSION['form']['db_menu_detail'] = $result[0]['db_menu_detail'];
				$_SESSION['form']['level_flag'] = "t";
				for($i=0;$i<count($result);$i++){
					$_SESSION['form']['dd_no'.($i + 1)] = $result[$i]['dd_no'];
					$_SESSION['form']['level_no'.($i + 1)] = $result[$i]['dd_level_no'];
					$_SESSION['form']['dsc_nm'.($i + 1)] = $result[$i]['dd_dsc_nm'];
					$_SESSION['form']['dsc_price'.($i + 1)] = $result[$i]['dd_dsc_price'];
				}
			}
			header("location: /client/discount/#regist_form");
			/* ------------------------------------------------------------------ */
		}
		
		function chk_num($max_num){
			
			if($this->db_no != ""){
				$this->db->where("sid = '".$_SESSION['login_dat']['sid']."' and db_no <> '".$this->db_no."'");
			}else{
				$this->db->where("sid = '".$_SESSION['login_dat']['sid']."'");
			}
			
			$query = $this->db->get("t_shop_dscbase");
			
			$rows = $query->num_rows;
			
			if($rows < $max_num){
				return true;
			}else{
				$this->validation->set_message('chk_num','割引メニューは最大'.$max_num.'個まで登録可能です。');
				return false;
			}
			
		}
		
		
		/* sort change 20080927arai  */
		function order_change($before = "",$after = ""){
		
			if($before != "" and $after != ""){
				// モデルのロード
				$this -> load -> model('client/discountmodel');
			
				// 順番変更処理
				$this->discountmodel->order_change($before,$after,$this->table,"db_no","db_sort");
			
			}			
		
			redirect('client/discount/');
			exit;
		
		}
	}
	
?>