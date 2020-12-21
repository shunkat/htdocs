<?
	class Add_option extends ClientController{
		/* ------------------------------------------------------------------ */
		/* 共通変数設定
		--------------------------------------------------------------------- */
		var $table = "t_shop_add_option";
		var $opt_no = "";
		
		function Add_option(){
			parent::ClientController();
			$this -> load -> helper(array('form','date'));									// ヘルパーのロード
			
			$this -> output -> set_header('Content-Type: text/html; charset=UTF-8');
		}
		function index(){
			$data = array();
			/* ------------------------------------------------------------------ */
			/* ページの設定
			--------------------------------------------------------------------- */
			$data['page_title'] = "追加オプション";
			$data['now_category'] = "shop";
			$data['now_page'] = "add_option";
			$data['document_root'] = str_replace("secure_html", "public_html", $_SERVER['DOCUMENT_ROOT']);
			
			$datestring = "%Y年%m月%d日";
			$time = time();
			$data['today'] = mdate($datestring, $time)."(".get_day($time).")";
			
#			$data['sid'] = $this->session->userdata['sid'];
			$data['sid'] = $_SESSION['login_dat']['sid'];
			/* ------------------------------------------------------------------ */
			/* サービス情報の取得
			--------------------------------------------------------------------- */
			$this -> load -> model('client/add_optionmodel');
			$result = $this -> add_optionmodel -> do_select(array("sid" => $data['sid']));
			
			if($result != null){
				foreach($result as $key => $val){
					$data['query_data'][] = $val;
				}
			}
			/* ------------------------------------------------------------------ */
			/* ユーザー情報の設定
			--------------------------------------------------------------------- */
			$result = $this->add_optionmodel->select_shop_data("t_shop_base",array("sid" => $data['sid']));
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
			
			$this->smarty_parser->parse("ci:client/add_option.tpl", $data);
			unset($_SESSION['msg'],$_SESSION['form_error'],$_SESSION['form']);
		}
		
		function to_confirm(){
			unset($_SESSION['form_error']);
			$this -> load -> library('validation');
			$this -> validation -> set_error_delimiters('<li>','</li>');
			
			/* ------------------------------------------------------------------ */
			/* XSS対策 + タグの無効化
			--------------------------------------------------------------------- */
			foreach($_POST as $key => $val){
				$val = $this->input->xss_clean($val);
				$_POST[$key] = htmlspecialchars($val);
			}
			
			if(isset($_POST['opt_no']) and $_POST['opt_no'] != ""){
				$this->opt_no = $_POST['opt_no'];
			}
			/* ------------------------------------------------------------------ */
			/* フィールドセット
			--------------------------------------------------------------------- */
			$fields['sid'] = "店舗番号";
			$fields['opt_name'] = "オプション名";
			$fields['opt_price'] = "オプション価格";
			$fields['opt_contents'] = "オプション内容";
			$fields['max_num'] = "最大個数";
			
			if(isset($_POST['opt_no']) and $_POST['opt_no'] != ""){
				$fields['opt_no'] = "オプションNo.";
			}
			
			$this -> validation -> set_fields($fields);
			/* ------------------------------------------------------------------ */
			/* ルールセット
			--------------------------------------------------------------------- */
			$rules['sid'] = "required";
			$rules['opt_name'] = "required";
			$rules['opt_price'] = "";
			$rules['opt_contents'] = "";
			$rules['max_num'] = "callback_chk_num";
			
			if(isset($_POST['opt_no']) and $_POST['opt_no'] != ""){
				$rules['opt_no'] = "";
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
				$this->opt_no = "";
				header("location: /client/add_option/");
			}else{
				#OK
				foreach ($this->validation->_fields as $field => $label){
					$_SESSION['form'][$field] = $this->input->post($field);
				}
				$this->opt_no = "";
				header("location: /client/add_option/regist_db");
			}
		}
		
		function regist_db(){
			if(!isset($_SESSION['form'])){
				header("location: /client/add_option/");
			}
			$values = $_SESSION['form'];
			
			$this -> load -> model('client/add_optionmodel');
			
			if(!isset($values['opt_no'])){
				if($this -> add_optionmodel -> do_insert($values)){
					$_SESSION['msg'] = "サービスを追加しました。";
					unset($_SESSION['form']);
				}else{
					$_SESSION['form_error'][] = "DB登録時にエラーが発生しました。";
				}
			}else{
				if($this -> add_optionmodel -> do_update($values)){
					$_SESSION['msg'] = "サービスの編集が完了しました。";
					unset($_SESSION['form']);
				}
			}
			
			header("location: /client/add_option/");
		}
		
		function delete_db($opt_no){
			if(!isset($opt_no)){
				header("location: /client/add_option/");
			}
			$this -> load -> model('client/add_optionmodel');
			
			if($this -> add_optionmodel -> do_delete(array("opt_no" => $opt_no))){
				$_SESSION['msg'] = "追加オプションを削除しました。";
			}else{
				$_SESSION['form_error'][] = "データ削除時にエラーが発生しました。";
			}
			
			header("location: /client/add_option/");
		}
		
		function edit($opt_no){
			/* ------------------------------------------------------------------ */
			/* 編集データの取得
			--------------------------------------------------------------------- */
			if(!isset($opt_no)){
				$_SESSION['form_error'] = "追加オプションが選択されていないので編集できません。";
				header("location: /client/add_option/");
			}
			$this -> load -> model('client/add_optionmodel');
			
			$result = $this -> add_optionmodel -> do_select(array("opt_no" => $opt_no));
			if($this->add_optionmodel->rows == 1){
				if($result != null){
					foreach($result[0] as $key => $val){
						$_SESSION['form'][$key] = $val;
					}
				}
			}
			header("location: /client/add_option/#regist_form");
			/* ------------------------------------------------------------------ */
		}
		
		
		function chk_num($max_num){
			
			if($this->opt_no != ""){
#				$this->db->where("sid = '".$this->session->userdata['sid']."' and opt_no <> '".$this->opt_no."'");
				$this->db->where("sid = '".$_SESSION['login_dat']['sid']."' and opt_no <> '".$this->opt_no."'");
			}else{
				$this->db->where("sid = '".$_SESSION['login_dat']['sid']."'");
			}
			
			$query = $this->db->get("t_shop_adoption");
			
			$rows = $query->num_rows;
			
			if($rows < $max_num){
				return true;
			}else{
				$this->validation->set_message('chk_num','追加オプションは最大'.$max_num.'個まで登録可能です。');
				return false;
			}
			
		}
		
		
	}
	
?>