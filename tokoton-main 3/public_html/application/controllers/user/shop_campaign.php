<?
	class Shop_campaign extends Controller{
		/* ------------------------------------------------------------------ */
		/* 共通変数設定
		--------------------------------------------------------------------- */
		
		function Shop_campaign(){
			parent::Controller();
			$this -> load -> model('user/shop_campaignmodel');
			
			
			$this -> output -> set_header('Content-Type: text/html; charset=UTF-8');
		}
		function index($sid = "",$type = ""){
			$img_type = array("gif","jpg");
			$campaign_img = ""; 
			
			if($sid == ""){
				header("location: /");
			}else{
				/* ------------------------------------------------------------------ */
				/* データの抽出
				--------------------------------------------------------------------- */
				$data['sid'] = $sid;
				
				// 抽出するカラムの設定
				/*SEO対策 [PUBLIC_TOKOTON-1] キャンペーンページのタイトルに店舗名を追加 20170227 ST*/
				$select_column = "cam_name,cam_start_date,cam_end_date,cam_detail,sd_shop_nm";
				//$select_column = "cam_name,cam_start_date,cam_end_date,cam_detail";
				/*SEO対策  [PUBLIC_TOKOTON-1] キャンペーンページのタイトルに店舗名を追加 20170227 ED*/
				
				if($type == "manager"){
					$data['type'] = $type;
					// 管理画面からのプレビューであっても「sd_exam_state」の値を参照して表示可否を判断する 2013/07/29 y.igarashi
					$campaign_data = $this->shop_campaignmodel->do_select("t_shop_campaign",array("sb.sid" => $sid,"cam_open" => "t",'sd_exam_state' => '2'),$select_column);
					// $campaign_data = $this->shop_campaignmodel->do_select("t_shop_campaign",array("sb.sid" => $sid,"cam_open" => "t"),$select_column);
				}else{
					$campaign_data = $this->shop_campaignmodel->do_select("t_shop_campaign",array("sb.sid" => $sid,"cam_open" => "t",'sd_exam_state' => '2'),$select_column);
				}
				
				if($campaign_data != null and count($campaign_data) == 1){
					$data['campaign_data'] = $campaign_data[0];
					
					
					// キャンペーン画像の読み出し
					for($i=0;$i<count($img_type);$i++){
						if(file_exists($_SERVER['DOCUMENT_ROOT']."/photo/".$sid."/campaign1.".$img_type[$i])){
							$image_data = getimagesize($_SERVER['DOCUMENT_ROOT']."/photo/".$sid."/campaign1.".$img_type[$i]);
							
							$data['img_wh'] = $image_data[3];
							$campaign_img = "/photo/".$sid."/campaign1.".$img_type[$i];
						}
					}
				}else{
					$data['campaign_data'] = array();
					$not_open = "t";
				}
			}
			
			$data['campaign_img'] = $campaign_img;
			
#			if(isset($data['shop_data']['sd_shop_address']) and $data['shop_data']['sd_shop_address'] != ""){
#				$data['load'] = " onload=\"onLoad()\"";
#				// googlemap
#				$this->load->library('Cigooglemapapi');
#				$this->cigooglemapapi->setAPIKey('ABQIAAAAsiv-J2Ktz3vUShHLO2yozRSfAcih3MSuU765d1yhfnq_fiK1SRTzMW_IiwIlS_AoS27FPitnJtcW8g'); 
#				$this->cigooglemapapi->width = "550";
#				$this->cigooglemapapi->height = "450px";
#				$this->cigooglemapapi->zoom = 18;
#			
#				$this->cigooglemapapi->addMarkerByAddress($data['shop_data']['sd_shop_address']);
#			
#				$data['header_js'] = $this->cigooglemapapi->printHeaderJS();
#				$data['map_js'] = $this->cigooglemapapi->printMapJS();
#				$data['map'] = $this->cigooglemapapi->printMap();
#			}else{
#				$data['load'] = "";
#				$data['map'] = "";
#			}
			
			if(isset($_SESSION['search_url'])){
				$data['search_url'] = $_SESSION['search_url'];
			}else{
				if(isset($_SERVER['HTTP_REFERER'])){
					if(ereg("/search/",$_SERVER['HTTP_REFERER'])){
						$data['search_url'] = str_replace("type_manager/","",$_SERVER['HTTP_REFERER']);
					}
				}elseif(isset($sid)){
					$data['search_url'] = "/search/key_".sprintf("%04d",$sid)."/";
				}
				
				
# 				if(empty($not_open)){
# 					$data['search_url'] = "/search/key_".sprintf("%04d",$data['shop_data']['sid'])."/type_manager/";
# 				}
			}
			
#			$data['document_root'] = $_SERVER['DOCUMENT_ROOT'];
			$data['document_root'] = str_replace("secure_html", "public_html", $_SERVER['DOCUMENT_ROOT']);
			$data['css'] = "/css/user/campaign.css";
			
			/*SEO対策 [PUBLIC_TOKOTON-1] キャンペーンページのタイトルに店舗名を追加 20170227 ST*/
			if(isset($data['campaign_data']['sd_shop_nm']) != ''){
				$data['page_title'] = $data['campaign_data']['sd_shop_nm']."のキャンペーン | とことん車検ナビ";
			}else {
				$data['page_title'] = "キャンペーン | とことん車検ナビ";	
			}
			/*SEO対策 [PUBLIC_TOKOTON-1] キャンペーンページのタイトルに店舗名を追加 20170227 ED*/
			
			/*SEO対策 [PUBLIC_TOKOTON-4] /manager/ページのcanonical対応 20170227 ST*/
			/*[PUBLIC_TOKOTON-3]とも関連するが、/なしページへcanonical化するため、「$type =="manager"」の条件はなし*/
			if(isset($_SERVER['HTTPS']) and $_SERVER['HTTPS'] == "on"){
				$data['canonical'] = "<link rel=\"canonical\" href=\"https://".$_SERVER['HTTP_HOST']."/shop_campaign/".$data['sid']."/\" />";
			} else {
				$data['canonical'] = "<link rel=\"canonical\" href=\"http://".$_SERVER['HTTP_HOST']."/shop_campaign/".$data['sid']."/\" />";
			}
			/*SEO対策 [PUBLIC_TOKOTON-4] /manager/ページのcanonical対応 20170227 ED*/
			
			
			$data['mainmenu_home'] = "mainmenu_home_off";
			$data['mainmenu_list'] = "mainmenu_list_act";
			if($type =="manager"){
				$data['robots_meta'] = "<meta name=\"ROBOTS\" content=\"NOINDEX, NOFOLLOW\">";
			}
			
			
			if(!empty($not_open) and $not_open == "t"){
				unset($data);
				// NotFoundページの設定
				$data['notfound_flg'] = TRUE; /* ページが見つからない、非公開の際にはロボットにインデックスさせないための対応（このフラグが立っていたらrobot用metaタグにnoindex,nofollow,noarchiveを追加）20130730 y.igarashi */
				$data['css'] = "/css/user/detail.css";
				$data['mainmenu_home'] = "mainmenu_home_off";
				$data['mainmenu_list'] = "mainmenu_list_act";
				$data['page_title'] = "ページが見つかりませんでした｜とことん車検ナビ";
				/*20190603 ステータスコード変更対応 ST*/
				http_response_code(404);
				/*20190603 ステータスコード変更対応 ED*/
				$this->smarty_parser->parse("ci:user/notfound.tpl", $data);
			}else{
				$this->smarty_parser->parse("ci:user/shop_campaign.tpl", $data);
				
			}
			
		}
		
		
		
	}
	
?>