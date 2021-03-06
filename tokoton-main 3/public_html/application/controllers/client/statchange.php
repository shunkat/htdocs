<?
	class Statchange extends ClientController{
		/* ------------------------------------------------------------------ */
		/* 共通変数設定
		--------------------------------------------------------------------- */
		var $table = "t_shop_statchange";
		
		function Statchange(){
			parent::ClientController();
			$this -> load -> helper(array('form','date'));									// ヘルパーのロード
			$this -> load -> model('client/statchangemodel');
			
			$this -> output -> set_header('Content-Type: text/html; charset=UTF-8');
		}
		function index(){
			$data = array();
			/* ------------------------------------------------------------------ */
			/* ページの設定
			--------------------------------------------------------------------- */
			$data['page_title'] = "サイトの公開・非公開";
			$data['now_category'] = "shop";
			$data['now_page'] = "statchange";
			$data['document_root'] = str_replace("secure_html", "public_html", $_SERVER['DOCUMENT_ROOT']);
			
			$datestring = "%Y年%m月%d日";
			$time = time();
			$data['today'] = mdate($datestring, $time)."(".get_day($time).")";
			
#			$data['sid'] = $this->session->userdata['sid'];
			$data['sid'] = $_SESSION['login_dat']['sid'];
			$this->sid = $data['sid'];
			/* ------------------------------------------------------------------ */
			/* 会社情報取得
			--------------------------------------------------------------------- */
			$this -> load -> model('client/statchangemodel');
			$result = $this -> statchangemodel -> do_select(array("sid" => $data['sid']));
		
			if($result != null and count($result) == 1){
				$data['query_data'] = $result[0];
#				$_SESSION['form'] = $result[0];
#				$query_data = $result[0];
			}
#			$_SESSION['form'] = (isset($_SESSION['form'])) ? $_SESSION['form'] : $query_data;
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
			/* ユーザー情報の設定
			--------------------------------------------------------------------- */
			$result = $this->statchangemodel->select_shop_data("t_shop_base",array("sid" => $data['sid']));
			if($result != null and count($result) == 1){
				$data['user_data'] = $result[0];
			}
			
			$this->smarty_parser->parse("ci:client/statchange.tpl", $data);
			unset($_SESSION['msg'],$_SESSION['form_error']);
		}
		
		function to_confirm_exam(){
			unset($_SESSION['form_error'],$_SESSION['form']);
			$this -> load -> library('validation');
			$this -> validation -> set_error_delimiters('<li>','</li>');
			/* ------------------------------------------------------------------ */
			/* フィールドセット
			--------------------------------------------------------------------- */
			$fields['sid'] = "店舗番号";
			$fields['sd_exam_state'] = "サイトの状態";
			
			$this -> validation -> set_fields($fields);
			/* ------------------------------------------------------------------ */
			/* ルールセット
			--------------------------------------------------------------------- */
			$rules['sid'] = "required";
			$rules['sd_exam_state'] = "callback_stat_chk|required";
			
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
				header("location: /client/statchange/");
			}else{
				#OK
				foreach ($this->validation->_fields as $field => $label){
					$_SESSION['form'][$field] = $this->input->post($field);
				}
				header("location: /client/statchange/regist_db_exam");
			}
		}
		
		function regist_db_exam(){
			if(!isset($_SESSION['form'])){
				header("location: /client/statchange/");
			}
			$values = $_SESSION['form'];
			
			$this -> load -> model('client/statchangemodel');
			
			if(isset($values['sid'])){
				if($this -> statchangemodel -> do_update($values)){
					$_SESSION['msg'] = "サイトを審査に出しました。審査が完了するまで設定した内容を変更しないでください。";
					unset($_SESSION['form']);
				}else{
					$_SESSION['form_error'][] = "DB登録時にエラーが発生しました。";
				}
				
			}else{
				$_SESSION['form_error'][] = "DB登録時にエラーが発生しました。";
			}
			
			header("location: /client/statchange/");
		}
		
#		function delete_db($mail_no){
# #			if(!isset($mail_no)){
# #				header("location: /client/statchange/");
# #			}
# #			$this -> load -> model('client/statchangemodel');
# #			
# #			if($this -> statchangemodel -> do_delete(array("mail_no" => $mail_no))){
# #				$_SESSION['msg'] = "見積りメール設定の内容をを削除しました。";
# #			}else{
# #				$_SESSION['form_error'][] = "データ削除時にエラーが発生しました。";
# #			}
# #			unset($_SESSION['form']);
# #			header("location: /client/statchange/");
#		}
		
#		function edit($mail_no){
# #			/* ------------------------------------------------------------------ */
# #			/* 編集データの取得
# #			--------------------------------------------------------------------- */
# #			if(!isset($mail_no)){
# #				$_SESSION['form_error'] = "トピックが選択されていないので編集できません。";
# #				header("location: /client/statchange/");
# #			}
# #			$this -> load -> model('client/statchangemodel');
# #			
# #			$result = $this -> statchangemodel -> do_select(array("mail_no" => $mail_no));
# #			if($this->statchangemodel->rows == 1){
# #				if($result != null){
# #					foreach($result[0] as $key => $val){
# #						$_SESSION['form'][$key] = $val;
# #					}
# #				}
# #			}
# #			header("location: /client/statchange/#regist_form");
#			/* ------------------------------------------------------------------ */
#		}
		
		
		function stat_chk($stat){
			$this -> load -> model('client/statchangemodel');
			
#			$result = $this->statchangemodel->do_select(array("sid" => $this->session->userdata['sid']));
			$result = $this->statchangemodel->do_select(array("sid" => $_SESSION['login_dat']['sid']));
			
			if($result != null and count($result) == 1){
				if($result[0]['sd_exam_state'] == 0 or $result[0]['sd_exam_state'] == 4){
					return true;
				}else{
					$this->validation->set_message('stat_chk','すでに審査中か合格しています。');
					return false;
				}
				
			}
			
		}
		
		
		function to_confirm_open(){
			unset($_SESSION['form_error'],$_SESSION['form']);
			$this -> load -> library('validation');
			$this -> validation -> set_error_delimiters('<li>','</li>');
			
			/* ------------------------------------------------------------------ */
			/* フィールドセット
			--------------------------------------------------------------------- */
			$fields['sid'] = "店舗番号";
#			$fields['sd_open_state'] = "公開・非公開";
			$fields['sd_exam_state'] = "公開・非公開";
			
			$this -> validation -> set_fields($fields);
			/* ------------------------------------------------------------------ */
			/* ルールセット
			--------------------------------------------------------------------- */
			$rules['sid'] = "required";
#			$rules['sd_open_state'] = "required";
			$rules['sd_exam_state'] = "required|callback_statchk";
			
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
				header("location: /client/statchange/");
			}else{
				#OK
				foreach ($this->validation->_fields as $field => $label){
					$_SESSION['form'][$field] = $this->input->post($field);
				}
				header("location: /client/statchange/regist_db_open");
			}
			
		}
		
		function regist_db_open(){
			if(!isset($_SESSION['form'])){
				header("location: /client/statchange/");
			}
			$values = $_SESSION['form'];
			
			$this -> load -> model('client/statchangemodel');
			
			if(isset($values['sid'])){
				if($this -> statchangemodel -> do_update($values)){
					$_SESSION['msg'] = "サイトの公開設定を変更しました。";
					unset($_SESSION['form']);
				}else{
					$_SESSION['form_error'][] = "DB登録時にエラーが発生しました。";
				}
				
			}else{
				$_SESSION['form_error'][] = "DB登録時にエラーが発生しました。";
			}
			
			header("location: /client/statchange/");
		}
		
		function statchk(){
#			$result = $this->statchangemodel->select_shop_data("t_shop_base",array("sid" => $this->session->userdata['sid']));
			$result = $this->statchangemodel->select_shop_data("t_shop_base",array("sid" => $_SESSION['login_dat']['sid']));
			
			if($result){
				$data = $result[0];
			}
			
			if($data['sd_exam_state'] == "4"){
				$this->validation->set_message('statchk','現在運営側により強制非公開が選択されているため、店舗の公開設定を変更できませんでした。');
				return false;
			}else{
				return true;
			}
		}
		
		
		
		
	}
	
?>