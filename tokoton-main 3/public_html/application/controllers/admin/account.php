<?
	class Account extends AdminController{
		/* ------------------------------------------------------------------ */
		/* 共通変数設定
		--------------------------------------------------------------------- */
		var $table = "t_shop_base";
		var $pkey = "";
		var $limit = 1;
		
		function Account(){
			parent::AdminController();
			$this -> load -> helper(array('form','date','pwd'));									// ヘルパーのロード
			$this -> load -> model('admin/accountmodel');
			
			
			$this -> output -> set_header('Content-Type: text/html; charset=UTF-8');
		}
		function index(){
#			$this->output->enable_profiler(TRUE);
			#PRINT_R
#			print "<pre>";
#			print_r($this->session);
#			print "</pre>";
			$params = "";
			/* ------------------------------------------------------------------ */
			/* ページの設定
			--------------------------------------------------------------------- */
			$data['page_title'] = "トップページ";
			$data['now_page'] = "account";
			$data['document_root'] = str_replace("secure_html", "public_html", $_SERVER['DOCUMENT_ROOT']);
			
			$datestring = "%Y年%m月%d日";
			$time = time();
			$data['today'] = mdate($datestring, $time)."(".get_day($time).")";
			
			$data['search_hidden'] = "";
			$data['limit_hidden'] = "";
			$order_link = "";
			$pager_link = "";
#			/* ------------------------------------------------------------------ */
#			/* ファイルのロード
#			--------------------------------------------------------------------- */
#			$this -> load -> model('admin/accountmodel');
			/* ------------------------------------------------------------------ */
			/* URLよりクエリの取得
			--------------------------------------------------------------------- */
			$pattern['start'] = "/Pos_([0-9]+)";
			$pattern['keyword'] = "/Key_([^/]+)/";
			$pattern['sd_last_login'] = "/Log_([0-1]{1})/";
			$pattern['sd_acc_state'] = "/Acc_([0-5]{1})/";
			$pattern['sd_exam_state'] = "/Exa_([0-5]{1})/";
			$pattern['limit'] = "/Lim_([015]{1,3})/";
			$pattern['order'] = "/Ord_([a-z_-]{12,16})/";
			$pattern['managecode'] = "/Cod_([A-Za-z0-9%-]+)/";
			
			$params = $this->uri->get_rewrite_parameter($pattern);
			
			if($params['order'] == ""){
				$params['order'] = "regist_date-desc";
			}
			
			$url = $this->uri->ruri_string();
			
			/* ------------------------------------------------------------------ */
			/* ページャー・ソート用URL生成
			--------------------------------------------------------------------- */
			$url = str_replace("account/index/","",$url);
			$pager_link = ereg_replace("/Pos_([0-9]+)","",$url);
			$order_link = ereg_replace("/Ord_([a-z_-]{12,16})","",$url);
#			print $order_link;
			$order_link = ereg_replace("/Pos_([0-9]+)","",$order_link);
			$pager_link = str_replace("//","/",$pager_link);
			$order_link = str_replace("//","/",$order_link);
			$order_link = "/admin/account/search".$order_link;
			
			if($params['order'] == "regist_date-asc"){
				$data['sort'] = "<a href=\"".$order_link."Ord_regist_date-desc/\">登録が新しい順</a> / 登録が古い順 / <a href=\"".$order_link."Ord_manage_a-asc/\">管理コードA順</a>";
			}elseif($params['order'] == "regist_date-desc"){
				$data['sort'] = "登録が新しい順 / <a href=\"".$order_link."Ord_regist_date-asc/\">登録が古い順</a> / <a href=\"".$order_link."Ord_manage_a-asc/\">管理コードA順</a>";
			}elseif($params['order'] == "manage_a-asc"){
				$data['sort'] = "<a href=\"".$order_link."Ord_regist_date-desc/\">登録が新しい順</a> / <a href=\"".$order_link."Ord_regist_date-asc/\">登録が古い順</a> / 管理コードA順";
			}
			
			/* ------------------------------------------------------------------ */
			/* hidden タグ・表示文字生成
			--------------------------------------------------------------------- */
			foreach($params as $key => $val){
				if($key == "keyword" or $key == "managecode"){
					$val = urldecode($val);
				}
				$data['request'][$key] = $val;																				// 表示用
				
				if($key == "limit"){
					$data['search_hidden'] .= "<input type=\"hidden\" name=\"".$key."\" value=\"".$val."\" />\n";			// アカウント検索hidden
				}
				if($key != "limit"){
					$data['limit_hidden'] .= "<input type=\"hidden\" name=\"".$key."\" value=\"".$val."\" />\n";			// 件数変更用hidden
				}
			}
			/* ------------------------------------------------------------------ */
			/* アカウント情報の取得
			--------------------------------------------------------------------- */
			$result = $this -> accountmodel -> do_search($params,$pager_link);
			
			
			if($result['query'] != null){
				foreach($result['query'] as $key => $val){
					$disp_arr = array();
					
					$buf_arr = $val;
					$disp_arr = $this -> accountmodel -> data_display($val);
					if($disp_arr){
						$val = $disp_arr;
					}
					$data['query_data'][] = $val;
				}
			}
			// 検索数
			$data['rows'] = $this->accountmodel->rows;
			// 総登録数
			$data['total_rows'] = $this->accountmodel->total_rows;
			
#			$data['pager'] = $this -> accountmodel -> pager($data['rows']);
			$data['pager'] = $result['pager'];
			$data['result_navi'] = $result['result_navi'];
			
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
			/* 次の店舗番号取得
			--------------------------------------------------------------------- */
			$next_sid = $this->accountmodel->select_next_sid();
			$data['form_data']['sd_account'] = "t".sprintf("%05d",$next_sid);
			
			
			$this->smarty_parser->parse("ci:admin/account.tpl", $data);
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
			
			/* ------------------------------------------------------------------ */
			/* フィールドセット
			--------------------------------------------------------------------- */
			$fields['sd_account'] = "アカウント名";
			$fields['sd_customer_nm'] = "会社名";
			$fields['sd_contract_shop'] = "店舗名";
			$fields['sd_remind_mail'] = "メールアドレス";
			
			$this -> validation -> set_fields($fields);
			/* ------------------------------------------------------------------ */
			/* ルールセット
			--------------------------------------------------------------------- */
			$rules['sd_account'] = "callback_account_chk|required";
			$rules['sd_customer_nm'] = "required";
			$rules['sd_contract_shop'] = "required";
#			$rules['sd_remind_mail'] = "required|valid_email|callback_account_mail_chk";
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
				$_SESSION['form']['sd_pwd'] = "000000";
			}
			
			
			$values = $_SESSION['form'];
			
#			$this -> load -> model('admin/accountmodel');
			
			
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
		
		
		function post_control(){
			foreach($_POST as $key => $val){
				$_POST[$key] = strip_tags($val);
				$_POST[$key] = str_replace("\"","",$_POST[$key]);
			}
			
#			$this -> load -> model('admin/accountmodel');
			$url_str = "";
			$url_str = $this->accountmodel->get_request_url($_POST);
			
			header("location: ".$url_str);
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
#				$this -> load -> model('admin/accountmodel');
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
		
		function account_mail_chk($email){
			$result = $this -> accountmodel -> duplex_chk(array("sd_remind_mail" => $email));
			
			if(!$result){
				$this->validation->set_message('account_mail_chk','メールアドレスが重複しています。');
				return false;
			}else{
				return true;
			}
		}
		
		
		
		
		
		/* ------------------------------------------------------------------ */
		
		
		
		
		
	}
	
?>