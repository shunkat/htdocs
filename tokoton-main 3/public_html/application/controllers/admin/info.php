<?
	class Info extends AdminController{
		/* ------------------------------------------------------------------ */
		/* 共通変数設定
		--------------------------------------------------------------------- */
		var $table = "t_manager_info";
		
		
		function Info(){
			parent::AdminController();
			$this -> load -> helper(array('form','date'));									// ヘルパーのロード
			
			$this -> output -> set_header('Content-Type: text/html; charset=UTF-8');
		}
		function index(){
			/* ------------------------------------------------------------------ */
			/* ページの設定
			--------------------------------------------------------------------- */
			$data['page_title'] = "お知らせ管理";
			$data['now_page'] = "info";
			$data['document_root'] = str_replace("secure_html", "public_html", $_SERVER['DOCUMENT_ROOT']);
			
			$datestring = "%Y年%m月%d日";
			$time = time();
			$data['today'] = mdate($datestring, $time)."(".get_day($time).")";
			/* ------------------------------------------------------------------ */
			/* お知らせ情報の取得
			--------------------------------------------------------------------- */
			$this -> load -> model('admin/infomodel');
			$result = $this -> infomodel -> do_select();
			
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
			
			$this->smarty_parser->parse("ci:admin/info.tpl", $data);
			unset($_SESSION['msg'],$_SESSION['form_error']);
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
			
			/* ------------------------------------------------------------------ */
			/* フィールドセット
			--------------------------------------------------------------------- */
			$fields['info_up_date'] = "掲載日";
			$fields['info_index'] = "見出し";
			$fields['info_contents'] = "内容";
			
			$this -> validation -> set_fields($fields);
			/* ------------------------------------------------------------------ */
			/* ルールセット
			--------------------------------------------------------------------- */
			$rules['info_up_date'] = "callback_date_chk";
			$rules['info_index'] = "required";
			$rules['info_contents'] = "";
			
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
				header("location: /admin/info/");
			}else{
				#OK
				foreach ($this->validation->_fields as $field => $label){
					$_SESSION['form'][$field] = $this->input->post($field);
				}
				header("location: /admin/info/regist_db");
			}
		}
		
		function regist_db(){
			if(!isset($_SESSION['form'])){
				header("location: /admin/info/");
			}
			$values = $_SESSION['form'];
			
			$this -> load -> model('admin/infomodel');
			
			
			if(!isset($values['info_no'])){
				if($this -> infomodel -> do_insert($values)){
					$_SESSION['msg'] = "お知らせを追加しました。";
					unset($_SESSION['form']);
				}else{
					$_SESSION['form_error'][] = "DB登録時にエラーが発生しました。";
				}
			}else{
				if($this -> infomodel -> do_update($values)){
					$_SESSION['msg'] = "お知らせの編集が完了しました。";
					unset($_SESSION['form']);
				}
			}
			
			header("location: /admin/info/");
		}
		
		function delete_db($info_no){
			if(!isset($info_no)){
				header("location: /admin/info/");
			}
			$this -> load -> model('admin/infomodel');
			
			if($this -> infomodel -> do_delete($info_no)){
				$_SESSION['msg'] = "お知らせを削除しました。";
			}else{
				$_SESSION['form_error'][] = "データ削除時にエラーが発生しました。";
			}
			
			header("location: /admin/info/");
		}
		
		function edit($info_no){
			/* ------------------------------------------------------------------ */
			/* 編集データの取得
			--------------------------------------------------------------------- */
			if(!isset($info_no)){
				$_SESSION['form_error'] = "トピックが選択されていないので編集できません。";
				header("location: /admin/info/");
			}
			$this -> load -> model('admin/infomodel');
			
			$result = $this -> infomodel -> do_select($info_no);
			if($this->infomodel->rows == 1){
				if($result != null){
					foreach($result[0] as $key => $val){
						$_SESSION['form'][$key] = $val;
					}
				}
			}
			header("location: /admin/info/#regist_form");
			/* ------------------------------------------------------------------ */
		}
		
		
		/* ------------------------------------------------------------------ */
		/* オリジナルエラーチェック
		--------------------------------------------------------------------- */
		function date_chk($date){
			list($y,$m,$d) = explode("-",$date);
			if($date == ""){
				$this->validation->set_message('date_chk','日付が入力されていません。');
				return false;
			}elseif(!checkdate($m,$d,$y)){
				$this->validation->set_message('date_chk','日付を正しく入力してください。');
				return false;
			}else{
				return true;
			}
		}
		/* ------------------------------------------------------------------ */
		
		
		
		
		
	}
	
?>