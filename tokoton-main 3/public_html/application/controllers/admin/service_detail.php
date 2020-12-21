<?
	class Service_detail extends AdminController{
		/* ------------------------------------------------------------------ */
		/* 共通変数設定
		--------------------------------------------------------------------- */
#		var $table = "t_manager_service_detail";
		
		
		function Service_detail(){
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
			$data['page_title'] = "サービス一覧";
			$data['now_page'] = "service_detail";
			$data['document_root'] = str_replace("secure_html", "public_html", $_SERVER['DOCUMENT_ROOT']);
			
			/* ------------------------------------------------------------------ */
			/* サービスの取得
			--------------------------------------------------------------------- */
			$this -> load -> model('admin/service_detailmodel');
			$result = $this -> service_detailmodel -> do_select("t_shop_service",array("sid" => $sid));
			
			if($result != null){
				foreach($result as $key => $val){
					$data['query_data'][$key] = $val;
				}
				$data['rows_data']['rows'] = count($result);
			}else{
				$data['rows_data']['rows'] = 0;
			}
			
			$this->smarty_parser->parse("ci:admin/service_detail.tpl", $data);
			unset($_SESSION['msg'],$_SESSION['form_error']);
		}
		
		
		
	}
	
?>