<?
	class Service extends ClientController{
		/* ------------------------------------------------------------------ */
		/* 共通変数設定
		--------------------------------------------------------------------- */
		var $table = "t_shop_service";
		var $srv_no = "";
		
		function Service(){
			parent::ClientController();
			$this -> load -> helper(array('form','date'));									// ヘルパーのロード
			
			$this -> output -> set_header('Content-Type: text/html; charset=UTF-8');
		}
		function index(){
			$data = array();
			/* ------------------------------------------------------------------ */
			/* ページの設定
			--------------------------------------------------------------------- */
			$data['page_title'] = "サービス設定";
			$data['now_category'] = "shop";
			$data['now_page'] = "service";
			$data['document_root'] = str_replace("secure_html", "public_html", $_SERVER['DOCUMENT_ROOT']);
			
			$datestring = "%Y年%m月%d日";
			$time = time();
			$data['today'] = mdate($datestring, $time)."(".get_day($time).")";
			
#			$data['sid'] = $this->session->userdata['sid'];
			$data['sid'] = $_SESSION['login_dat']['sid'];
			/* ------------------------------------------------------------------ */
			/* サービス情報の取得
			--------------------------------------------------------------------- */
			$this -> load -> model('client/servicemodel');
			$result = $this -> servicemodel -> do_select(array("sid" => $data['sid']));
			
			if($result != null){
				foreach($result as $key => $val){
					$data['query_data'][] = $val;
				}
			}
			/* ------------------------------------------------------------------ */
			/* ユーザー情報の設定
			--------------------------------------------------------------------- */
			$result = $this->servicemodel->select_shop_data("t_shop_base",array("sid" => $data['sid']));
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
			
			$this->smarty_parser->parse("ci:client/service.tpl", $data);
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
			
			if(isset($_POST['srv_no']) and $_POST['srv_no'] != ""){
				$this->srv_no = $_POST['srv_no'];
			}
#			/* ------------------------------------------------------------------ */
			/* フィールドセット
			--------------------------------------------------------------------- */
			$fields['sid'] = "店舗番号";
			if(isset($_POST['srv_no']) and $_POST['srv_no'] != ""){
				$fields['srv_no'] = "サービスNo.";
			}
			$fields['srv_name'] = "サービス名";
			$fields['srv_contents'] = "内容";
			$fields['max_num'] = "最大個数";
			
			$this -> validation -> set_fields($fields);
			/* ------------------------------------------------------------------ */
			/* ルールセット
			--------------------------------------------------------------------- */
			$rules['sid'] = "required";
			if(isset($_POST['srv_no']) and $_POST['srv_no'] != ""){
				$rules['srv_no'] = "";
			}
			$rules['srv_name'] = "required";
			$rules['srv_contents'] = "required";
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
				$this->srv_no = "";
				header("location: /client/service/");
			}else{
				#OK
				foreach ($this->validation->_fields as $field => $label){
					$_SESSION['form'][$field] = $this->input->post($field);
				}
				$this->srv_no = "";
				header("location: /client/service/regist_db");
			}
		}
		
		function regist_db(){
			if(!isset($_SESSION['form'])){
				header("location: /client/service/");
			}
			$values = $_SESSION['form'];
			
			$this -> load -> model('client/servicemodel');
			
			if(!isset($values['srv_no'])){
				if($this -> servicemodel -> do_insert($values)){
					$_SESSION['msg'] = "サービスを追加しました。";
					unset($_SESSION['form']);
				}else{
					$_SESSION['form_error'][] = "DB登録時にエラーが発生しました。";
				}
			}else{
				if($this -> servicemodel -> do_update($values)){
					$_SESSION['msg'] = "サービスの編集が完了しました。";
					unset($_SESSION['form']);
				}
			}
			
			header("location: /client/service/");
		}
		
		function delete_db($srv_no){
			if(!isset($srv_no)){
				header("location: /client/service/");
			}
			$this -> load -> model('client/servicemodel');
			
			if($this -> servicemodel -> do_delete(array("srv_no" => $srv_no))){
				$_SESSION['msg'] = "サービスを削除しました。";
				if(isset($_SESSION['form'])){
					unset($_SESSION['form']);
				}
			}else{
				$_SESSION['form_error'][] = "データ削除時にエラーが発生しました。";
			}
			
			header("location: /client/service/");
		}
		
		function edit($srv_no){
			/* ------------------------------------------------------------------ */
			/* 編集データの取得
			--------------------------------------------------------------------- */
			if(!isset($srv_no)){
				$_SESSION['form_error'] = "トピックが選択されていないので編集できません。";
				header("location: /client/service/");
			}
			$this -> load -> model('client/servicemodel');
			
			$result = $this -> servicemodel -> do_select(array("srv_no" => $srv_no));
			if($this->servicemodel->rows == 1){
				if($result != null){
					foreach($result[0] as $key => $val){
						$_SESSION['form'][$key] = $val;
					}
				}
			}
			header("location: /client/service/#regist_form");
			/* ------------------------------------------------------------------ */
		}
		
		
		function chk_num($max_num){
			
			if($this->srv_no != ""){
#				$this->db->where("sid = '".$this->session->userdata['sid']."' and srv_no <> '".$this->srv_no."'");
				$this->db->where("sid = '".$_SESSION['login_dat']['sid']."' and srv_no <> '".$this->srv_no."'");
			}else{
#				$this->db->where("sid = '".$this->session->userdata['sid']."'");
				$this->db->where("sid = '".$_SESSION['login_dat']['sid']."'");
			}
			
			$query = $this->db->get("t_shop_service");
			
			$rows = $query->num_rows;
			
			if($rows < $max_num){
				return true;
			}else{
				$this->validation->set_message('chk_num','サービスは最大'.$max_num.'個まで登録可能です。');
				return false;
			}
			
		}
		
		
		
		
	}
	
?>