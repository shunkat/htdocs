<?
	class Plan_detail extends AdminController{
		/* ------------------------------------------------------------------ */
		/* 共通変数設定
		--------------------------------------------------------------------- */
#		var $table = "t_manager_plan_detail";
		
		
		function Plan_detail(){
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
			$data['page_title'] = "料金プラン一覧";
			$data['now_page'] = "plan_detail";
			$data['document_root'] = str_replace("secure_html", "public_html", $_SERVER['DOCUMENT_ROOT']);
			
			/* ------------------------------------------------------------------ */
			/* 料金項目一覧
			--------------------------------------------------------------------- */
			$this -> load -> model('admin/plan_detailmodel');
			$result = $this -> plan_detailmodel -> do_select("t_shop_base",array("sid" => $sid));
			
			if($result != null){
				foreach($result[0] as $key => $val){
					$data['query_data'][$key] = $val;
				}
			}

			/* ------------------------------------------------------------------ */
			/* プランの取得
			--------------------------------------------------------------------- */
			$result = $this->plan_detailmodel->do_select("t_shop_planbase",array("sid" => $sid));
			if($result != null){
				$list_display = $this->plan_detailmodel->list_display($result);
				
				if($list_display != null){
					$data['plan_data'] = $list_display;
				}
				
				if(isset($list_display)){
					$data['rows'] = count($list_display);
				}else{
					$data['rows'] = 0;
				}
			}
			
			$this->smarty_parser->parse("ci:admin/plan_detail.tpl", $data);
			unset($_SESSION['msg'],$_SESSION['form_error']);
		}
		
		
		
	}
	
?>