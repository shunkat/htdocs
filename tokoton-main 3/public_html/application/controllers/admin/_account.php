<?
	class Account extends Controller{
		/* ------------------------------------------------------------------ */
		/* 共通変数設定
		--------------------------------------------------------------------- */
		var $table = "t_shop_base";
		var $pkey = "";
		var $limit = "";
		
		function Account(){
			parent::Controller();
			$this -> load -> helper(array('form','date','pwd'));									// ヘルパーのロード
			
			$this -> output -> set_header('Content-Type: text/html; charset=UTF-8');
		}
		function index($offset = '',$where_list = array(),$order = array()){
			$offset = (int) $offset;
			
			/* ------------------------------------------------------------------ */
			/* ページの設定
			--------------------------------------------------------------------- */
			$data['page_title'] = "トップページ";
			$data['now_page'] = "account";
			$data['document_root'] = $_SERVER['DOCUMENT_ROOT'];
			
			$datestring = "%Y年%m月%d日";
			$time = time();
			$data['today'] = mdate($datestring, $time)."(".get_day($time).")";
			/* ------------------------------------------------------------------ */
			/* アカウント情報の取得
			--------------------------------------------------------------------- */
			$this -> load -> model('admin/accountmodel');
			$result = $this -> accountmodel -> do_search($where_list,$order,$offset,$this->limit);
			
			if($result != null){
				foreach($result as $key => $val){
					$disp_arr = array();
					
					$buf_arr = $val;
					$disp_arr = $this -> accountmodel -> data_display($val);
					if($disp_arr){
						$val = $disp_arr;
					}
					$data['query_data'][] = $val;
				}
			}
			// 総件数
			$data['rows'] = $this->accountmodel->rows;
			
			$data['pager'] = $this -> accountmodel -> pager($data['rows']);
			
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
			
			$this->smarty_parser->parse("ci:admin/account.tpl", $data);
			unset($_SESSION['msg'],$_SESSION['form_error']);
		}
		
		function to_confirm(){
			unset($_SESSION['form_error']);
			$this -> load -> library('validation');
			$this -> validation -> set_error_delimiters('<li>','</li>');
			/* ------------------------------------------------------------------ */
			/* フィールドセット
			--------------------------------------------------------------------- */
			$fields['sd_account'] = "アカウント名";
			$fields['sd_customer_nm'] = "顧客名";
			$fields['sd_remind_mail'] = "メールアドレス";
			
			$this -> validation -> set_fields($fields);
			/* ------------------------------------------------------------------ */
			/* ルールセット
			--------------------------------------------------------------------- */
			$rules['sd_account'] = "callback_account_chk";
			$rules['sd_customer_nm'] = "required";
			$rules['sd_remind_mail'] = "required|valid_email";
			
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
				header("location: /admin/account/");
			}else{
				#OK
				foreach ($this->validation->_fields as $field => $label){
					$_SESSION['form'][$field] = $this->input->post($field);
				}
				header("location: /admin/account/regist_db");
			}
		}
		
		function regist_db(){
			if(!isset($_SESSION['form'])){
				header("location: /admin/account/");
			}
			// 仮パスワードの発行
			$pwd = makePassword(9);
			if($pwd != ""){
				$_SESSION['form']['sd_pwd'] = $pwd;
			}else{
				$_SESSION['form']['sd_pwd'] = "0000";
			}
			
			$values = $_SESSION['form'];
			
			$this -> load -> model('admin/accountmodel');
			
			
			if(!isset($values['sid'])){
				if($this -> accountmodel -> do_insert($values)){
					$_SESSION['msg'] = "新規アカウントを登録しました。";
					$_SESSION['msg'] .= "<div class=\"info\">顧客名：".$_SESSION['form']['sd_customer_nm']."<br />\n";
					$_SESSION['msg'] .= "アカウント名：".$_SESSION['form']['sd_account']."<br />\n";
					$_SESSION['msg'] .= "メールアドレス：".$_SESSION['form']['sd_remind_mail']."<br />\n";
					$_SESSION['msg'] .= "<br />\n";
					$_SESSION['msg'] .= "<span class=\"important\">仮パスワード：".$_SESSION['form']['sd_pwd']."</span></div>\n";
					$_SESSION['msg'] .= "<strong>※お客様に通知する内容です。確実にメモをお取り下さい。</strong>\n";
					unset($_SESSION['form']);
				}else{
					$_SESSION['form_error'][] = "DB登録時にエラーが発生しました。";
				}
			}else{
				if($this -> accountmodel -> do_update($values)){
					$_SESSION['msg'] = "アカウントの編集が完了しました。<br />\n";
					unset($_SESSION['form']);
				}
			}
			
			header("location: /admin/account/");
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
		
		function account_chk($account_nm){
			if($account_nm == ""){
				$this->validation->set_message('account_chk','アカウント名が入力されていません。');
			}else{
				$this -> load -> model('admin/accountmodel');
				if($this->pkey != ""){
					$result = $this -> accountmodel -> duplex_chk(array("sd_account" => $account_nm),array("sid" => $this->pkey));
				}else{
					$result = $this -> accountmodel -> duplex_chk(array("sd_account" => $account_nm));
				}
				
				if(!$result){
					$this->validation->set_message('account_chk','アカウント名が重複しています。');
					return false;
				}else{
					return true;
				}
			}
			
			
		}
		/* ------------------------------------------------------------------ */
		
		
		
		
		
	}
	
?>