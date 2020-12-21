<?
	class Mail_temp extends AdminController{
		/* ------------------------------------------------------------------ */
		/* 共通変数設定
		--------------------------------------------------------------------- */
		var $table = "t_manager_mail_temp";
		
		
		function Mail_temp(){
			parent::AdminController();
			$this -> load -> helper(array('form','date'));									// ヘルパーのロード
			
			$this -> output -> set_header('Content-Type: text/html; charset=UTF-8');
		}
		function index($sid = ""){
			if($sid == ""){
				header("location: /admin/account/");
			}
			/* ------------------------------------------------------------------ */
			/* ページの設定
			--------------------------------------------------------------------- */
			$data['page_title'] = "メールフォーマット";
			$data['now_page'] = "mail_temp";
			$data['document_root'] = str_replace("secure_html", "public_html", $_SERVER['DOCUMENT_ROOT']);
			
			/* ------------------------------------------------------------------ */
			/* メールフォーマットの取得
			--------------------------------------------------------------------- */
			$this -> load -> model('admin/mail_tempmodel');
			$result = $this -> mail_tempmodel -> do_select("t_shop_mailformat",array("sid" => $sid));
			
			if($result != null and count($result) == 1){
				foreach($result[0] as $key => $val){
					$data['query_data'][$key] = $val;
				}
			}
			$this->smarty_parser->parse("ci:admin/mail_temp.tpl", $data);
			unset($_SESSION['msg'],$_SESSION['form_error']);
		}
		
		
		
	}
	
?>