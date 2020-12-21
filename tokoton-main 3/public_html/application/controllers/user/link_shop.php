<?
	class Link_shop extends Controller{
		/* ------------------------------------------------------------------ */
		/* 共通変数設定
		--------------------------------------------------------------------- */
		
		/*@type
		*search:検索結果画面→店舗詳細画面
		*search2:検索結果画面→無料見積もりに進む
		*shop_detail:店舗詳細画面内「車検プラン」
		*shop_detail_estimate:店舗詳細画面内「お見積り」
		*/		
		
		function Link_shop(){
			parent::Controller();
			$this -> load -> model('user/shop_detailmodel');
			$this -> load -> model('user/link_shopmodel');
			$this->load->helper(array('form', 'url'));
			$this -> output -> set_header('Content-Type: text/html; charset=UTF-8');
		}
		function index($sid = "", $type = "", $pid = ""){
			
			$url = "";
			if($type == "search")$url = 'shop_detail/'.$sid.'/';
			if($type == "shop_detail_plan")$url = 'shop_detail/'.$sid.'#plan';
			
			//20170327@Nagai_ST
			//検索結果一覧から、search2(おすすめプランリンク)の場合を追加
			if($type == "shop_detail_estimate" or $type == "search2")$url = 'https://www.tokoton-navi.com/estimate_form/'.$pid.'/';
			//if($type == "shop_detail_estimate")$url = 'https://www.tokoton-navi.com/estimate_form/'.$pid.'/';
			//20170327@Nagai_END
			
			/*対象の店舗でなければとりあえずそのまま店舗詳細画面へ飛ばす*/
			if(!$this->link_shopmodel->link_shopChk($sid)){
				
				//20170327@Nagai_ST
			    //検索結果一覧から、search2(おすすめプランリンク)の場合を追加
				if($type == "shop_detail_estimate" or $type == "search2"){
				//if($type == "shop_detail_estimate"){
				//20170327@Nagai_END
					
					header("location: ".$url."");
					exit;
				} else {
					//2017/04/19 無駄な301を無くすため修正 ST
					header("location: /".$url."");
					exit;
					//redirect($url, 'location');
					//2017/04/19 無駄な301を無くすため修正 ED
				}
			} else {
				$name = $this->link_shopmodel->link_shopName($sid);

				//店舗詳細アクセスカウント加算
				$this->shop_detailmodel->access_count($sid);
				if(($type == "search") or ($type == "shop_detail_plan") or ($type == "search2")){
					header('Location:http://www.2525syaken.com/store/'.$name.'.html');
				} else if($type == "shop_detail_estimate") {
					header('Location:https://www.2525syaken.com/2525kan_nakamachi/estimate.php');
				}
			}
			
		}
	}
	
?>