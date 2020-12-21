<?
	class Information extends ClientController{
		/* ------------------------------------------------------------------ */
		/* 共通変数設定
		--------------------------------------------------------------------- */
#		var $table = "t_shop_information";
		
		
		function Information(){
			parent::ClientController();
			$this -> load -> helper(array('form','date'));									// ヘルパーのロード
			
			$this -> output -> set_header('Content-Type: text/html; charset=UTF-8');
		}
		function index($info_no = ""){
			$data = array();
			/* ------------------------------------------------------------------ */
			/* ページの設定
			--------------------------------------------------------------------- */
			$data['page_title'] = "お知らせ";
			$data['now_category'] = "information";
			$data['now_page'] = "information";
			$data['document_root'] = str_replace("secure_html", "public_html", $_SERVER['DOCUMENT_ROOT']);
			
			$datestring = "%Y年%m月%d日";
			$time = time();
			$data['today'] = mdate($datestring, $time)."(".get_day($time).")";
			
#			$data['sid'] = $this->session->userdata['sid'];
			$data['sid'] = $_SESSION['login_dat']['sid'];
			$this -> load -> model('client/informationmodel');
			/* ------------------------------------------------------------------ */
			/* お知らせの取得
			--------------------------------------------------------------------- */
			$result = $this->informationmodel->do_select("t_manager_info",array("info_no" => $info_no));
			if($result != null and count($result) == 1){
				$data['info_data'] = $result[0];
			}
			

			
			$this->smarty_parser->parse("ci:client/information.tpl", $data);
			unset($_SESSION['msg'],$_SESSION['form_error']);
		}
		
#		function to_confirm(){
#			unset($_SESSION['form_error']);
#			$this -> load -> library('validation');
#			$this -> validation -> set_error_delimiters('<li>','</li>');
# #			/* ------------------------------------------------------------------ */
#			/* フィールドセット
#			--------------------------------------------------------------------- */
#			$fields['sid'] = "店舗番号";
#			$fields['srv_name'] = "サービス名";
#			$fields['srv_contents'] = "内容";
#			
#			$this -> validation -> set_fields($fields);
#			/* ------------------------------------------------------------------ */
#			/* ルールセット
#			--------------------------------------------------------------------- */
#			$rules['sid'] = "required";
#			$rules['srv_name'] = "required";
#			$rules['srv_contents'] = "required";
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
#				header("location: /client/information/");
#			}else{
#				#OK
#				foreach ($this->validation->_fields as $field => $label){
#					$_SESSION['form'][$field] = $this->input->post($field);
#				}
#				header("location: /client/information/regist_db");
#			}
#		}
		
#		function regist_db(){
#			if(!isset($_SESSION['form'])){
#				header("location: /client/information/");
#			}
#			$values = $_SESSION['form'];
#			
#			$this -> load -> model('client/informationmodel');
#			
#			if(!isset($values['srv_no'])){
#				if($this -> informationmodel -> do_insert($values)){
#					$_SESSION['msg'] = "サービスを追加しました。";
#					unset($_SESSION['form']);
#				}else{
#					$_SESSION['form_error'][] = "DB登録時にエラーが発生しました。";
#				}
#			}else{
#				if($this -> informationmodel -> do_update($values)){
#					$_SESSION['msg'] = "サービスの編集が完了しました。";
#					unset($_SESSION['form']);
#				}
#			}
#			
#			header("location: /client/information/");
#		}
		
#		function delete_db($srv_no){
#			if(!isset($srv_no)){
#				header("location: /client/information/");
#			}
#			$this -> load -> model('client/informationmodel');
#			
#			if($this -> informationmodel -> do_delete(array("srv_no" => $srv_no))){
#				$_SESSION['msg'] = "サービスを削除しました。";
#			}else{
#				$_SESSION['form_error'][] = "データ削除時にエラーが発生しました。";
#			}
#			
#			header("location: /client/information/");
#		}
		
#		function edit($srv_no){
#			/* ------------------------------------------------------------------ */
#			/* 編集データの取得
#			--------------------------------------------------------------------- */
#			if(!isset($srv_no)){
#				$_SESSION['form_error'] = "トピックが選択されていないので編集できません。";
#				header("location: /client/information/");
#			}
#			$this -> load -> model('client/informationmodel');
#			
#			$result = $this -> informationmodel -> do_select(array("srv_no" => $srv_no));
#			if($this->informationmodel->rows == 1){
#				if($result != null){
#					foreach($result[0] as $key => $val){
#						$_SESSION['form'][$key] = $val;
#					}
#				}
#			}
#			header("location: /client/information/#regist_form");
#			/* ------------------------------------------------------------------ */
#		}
		
		
		
	}
	
?>