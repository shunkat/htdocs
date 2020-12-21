<?
	class Coupon_detail extends AdminController{
		/* ------------------------------------------------------------------ */
		/* 共通変数設定
		--------------------------------------------------------------------- */
#		var $table = "t_manager_coupon_detail";
		
		
		function Coupon_detail(){
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
			$data['page_title'] = "クーポン";
			$data['now_page'] = "coupon_detail";
			$data['document_root'] = str_replace("secure_html", "public_html", $_SERVER['DOCUMENT_ROOT']);
			
			/* ------------------------------------------------------------------ */
			/* メールフォーマットの取得
			--------------------------------------------------------------------- */
			$this -> load -> model('admin/coupon_detailmodel');
			$result = $this -> coupon_detailmodel -> do_select("t_shop_coupon",array("sid" => $sid));
			
			if($result != null and count($result) == 1){
				foreach($result[0] as $key => $val){
					$data['query_data'][$key] = $val;
				}
			}
			$this->smarty_parser->parse("ci:admin/coupon_detail.tpl", $data);
			unset($_SESSION['msg'],$_SESSION['form_error']);
		}
		
		
		
	}
	
?>