<?php
	class Shop_detail extends Controller{
		/* ------------------------------------------------------------------ */
		/* 共通変数設定
		--------------------------------------------------------------------- */
		
		function Shop_detail(){
			parent::Controller();
			$this -> load -> model('user/shop_detailmodel');
			$this -> load -> model('user/link_shopmodel');
			$this -> load -> helper(array('mail_subject','user_agent'));									// ヘルパーのロード
			
			$this -> output -> set_header('Content-Type: text/html; charset=UTF-8');
		}

    function get_MapByAddress($address){
      $output = "\n";
      $output.= '<script type="text/javascript" charset="utf-8">' . "\n";
      $output.= '//<![CDATA[' . "\n";
      $output.= "var map = null;". "\n";
      $output.= "var centerpoint = null;". "\n";
      $output.= "var points = [];". "\n";
      $output.= "var markers = [];". "\n";
      $output.= "var counter = 0;". "\n";
      $output.= "var to_htmls = [];". "\n";
      $output.= "var from_htmls = [];". "\n";

      $driving_dir_text = array(
        'dir_to' => 'Start address: (include addr, city st/region)',
        'to_button_value' => 'Get Directions',
        'to_button_type' => 'submit',
        'dir_from' => 'End address: (include addr, city st/region)',
        'from_button_value' => 'Get Directions',
        'from_button_type' => 'submit',
        'dir_text' => 'Directions: ',
        'dir_tohere' => 'To here',
        'dir_fromhere' => 'From here'
      );

      $output.= "function onLoad() {". "\n";

      $output.= " if (GBrowserIsCompatible()) {". "\n";
      $output.= "  map = new GMap2(document.getElementById('map'));". "\n";
      $output.= "  map.addControl(new GLargeMapControl());". "\n";
      $output.= "  map.addControl(new GMapTypeControl());". "\n";
      $output.= "  map.addControl(new GScaleControl());". "\n";

      $output.= "    geocoder = new GClientGeocoder();". "\n";
      $output.= "    geocoder.getLatLng('日本 ". $address. "', \n";
      $output.= "      function (point) {". "\n";
      $output.= "        if (!point) {". "\n";
      $output.= "          centerpoint = new GLatLng(35.362852, 138.730875);". "\n";
      $output.= "        } else {". "\n";
      $output.= "          centerpoint = new GLatLng(point.lat(), point.lng());". "\n";
      $output.= "        }". "\n";
      $output.= "        map.setCenter(new GLatLng(centerpoint.lat(), centerpoint.lng()), 13);\n";
      $output.= "        var marker = createMarker(centerpoint,'','<div id=\'gmapmarker\'><\/div>', 0,'');\n";
      $output.= "        map.addOverlay(marker);\n";
      $output.= "      });". "\n";

      $output.= " }". "\n";
      $output.= "}". "\n";
      // end of function onLoad
      
      $output.= "function createMarker(point, title, html, n, tooltip) {". "\n";
      $output.= " if(n >= 0) { n = -1; }". "\n";
      $output.= "  var marker = new GMarker(point,{'title': tooltip});". "\n";
      $output.= "  var tabFlag = isArray(html);". "\n";
      $output.= "  if(!tabFlag) { html = [{'contentElem': html}]; }". "\n";


      $output.= sprintf(
               "to_htmls[counter] = html[0].contentElem + '<form class=\"gmapDir\" id=\"gmapDirTo\" style=\"white-space: nowrap;\" action=\"http://maps.google.co.jp/maps\" method=\"get\" target=\"_blank\">' +
               '<span class=\"gmapDirHead\" id=\"gmapDirHeadTo\">%s<strong>%s</strong> - <a href=\"javascript:fromhere(' + counter + ')\">%s</a></span>' +
               '<p class=\"gmapDirItem\" id=\"gmapDirItemTo\"><label for=\"gmapDirSaddr\" class=\"gmapDirLabel\" id=\"gmapDirLabelTo\">%s<br /></label>' +
               '<input type=\"text\" size=\"40\" maxlength=\"40\" name=\"saddr\" class=\"gmapTextBox\" id=\"gmapDirSaddr\" value=\"\" onfocus=\"this.style.backgroundColor = \'#e0e0e0\';\" onblur=\"this.style.backgroundColor = \'#ffffff\';\" />' +
               '<span class=\"gmapDirBtns\" id=\"gmapDirBtnsTo\"><input value=\"%s\" type=\"%s\" class=\"gmapDirButton\" id=\"gmapDirButtonTo\" /></span></p>' +
               '<input type=\"hidden\" name=\"daddr\" value=\"' +
               point.y + ',' + point.x + \")\" + '\" /></form>';
                from_htmls[counter] = html[0].contentElem + '<p /><form class=\"gmapDir\" id=\"gmapDirFrom\" style=\"white-space: nowrap;\" action=\"http://maps.google.co.jp/maps\" method=\"get\" target=\"_blank\">' +
               '<span class=\"gmapDirHead\" id=\"gmapDirHeadFrom\">%s<a href=\"javascript:tohere(' + counter + ')\">%s</a> - <strong>%s</strong></span>' +
               '<p class=\"gmapDirItem\" id=\"gmapDirItemFrom\"><label for=\"gmapDirSaddr\" class=\"gmapDirLabel\" id=\"gmapDirLabelFrom\">%s<br /></label>' +
               '<input type=\"text\" size=\"40\" maxlength=\"40\" name=\"daddr\" class=\"gmapTextBox\" id=\"gmapDirSaddr\" value=\"\" onfocus=\"this.style.backgroundColor = \'#e0e0e0\';\" onblur=\"this.style.backgroundColor = \'#ffffff\';\" />' +
               '<span class=\"gmapDirBtns\" id=\"gmapDirBtnsFrom\"><input value=\"%s\" type=\"%s\" class=\"gmapDirButton\" id=\"gmapDirButtonFrom\" /></span></p>' +
               '<input type=\"hidden\" name=\"saddr\" value=\"' +
               point.y + ',' + point.x + '\" /></form>';
               html[0].contentElem = html[0].contentElem + '<p /><div id=\"gmapDirHead\" class=\"gmapDir\" style=\"white-space: nowrap;\">%s<a href=\"javascript:tohere(' + counter + ')\">%s</a> - <a href=\"javascript:fromhere(' + counter + ')\">%s</a></div>';\n",
               $driving_dir_text['dir_text'],
               $driving_dir_text['dir_tohere'],
               $driving_dir_text['dir_fromhere'],
               $driving_dir_text['dir_to'],
               $driving_dir_text['to_button_value'],
               $driving_dir_text['to_button_type'],
               $driving_dir_text['dir_text'],
               $driving_dir_text['dir_tohere'],
               $driving_dir_text['dir_fromhere'],
               $driving_dir_text['dir_from'],
               $driving_dir_text['from_button_value'],
               $driving_dir_text['from_button_type'],
               $driving_dir_text['dir_text'],
               $driving_dir_text['dir_tohere'],
               $driving_dir_text['dir_fromhere']
              ). "\n";

      $output.= " if(!tabFlag) { html = html[0].contentElem; }if(isArray(html)) { GEvent.addListener(marker, 'click', function() { marker.openInfoWindowTabsHtml(html); }); }". "\n";
      $output.= " else { GEvent.addListener(marker, 'click', function() { marker.openInfoWindowHtml(html); }); }". "\n";

      $output.= " points[counter] = point;". "\n";
      $output.= " markers[counter] = marker;". "\n";
      $output.= " counter++;". "\n";
      $output.= " return marker;". "\n";
      $output.= "}". "\n";
      //end of function createMarker

      $output.= "function isArray(a) {return isObject(a) && a.constructor == Array;}". "\n";
      $output.= "function isObject(a) {return (a && typeof a == 'object') || isFunction(a);}". "\n";
      $output.= "function isFunction(a) {return typeof a == 'function';}". "\n";

      $output.= "function showInfoWindow(idx,html) {". "\n";
      $output.= " map.centerAtLatLng(points[idx]);". "\n";
      $output.= " markers[idx].openInfoWindowHtml(html);". "\n";
      $output.= "}". "\n";

      $output.= "function tohere(idx) {". "\n";
      $output.= " markers[idx].openInfoWindowHtml(to_htmls[idx]);". "\n";
      $output.= "}". "\n";

      $output.= "function fromhere(idx) {". "\n";
      $output.= " markers[idx].openInfoWindowHtml(from_htmls[idx]);". "\n";
      $output.= "}". "\n";
      $output.= '//]]>' . "\n";
      $output.= '</script>' . "\n";

      return $output;
    } // end of function get_MapByAddress

		function index($sid = "",$type = ""){
			$file_type = array("jpg","gif");
			$sd_shop_rank = "";
			$represent_tel = "999-999-9999";						// 電話応答サービス電話番号設定
			
			/* ------------------------------------------------------------------ */
			/* ページの設定
			--------------------------------------------------------------------- */
#			$data['document_root'] = $_SERVER['DOCUMENT_ROOT'];
			$data['document_root'] = str_replace("secure_html", "public_html", $_SERVER['DOCUMENT_ROOT']);
			$data['css'] = "/css/user/detail.css";
			$data['mainmenu_home'] = "mainmenu_home_off";
			$data['mainmenu_list'] = "mainmenu_list_act";
#			$data['now_page'] = "shop_detail";
			$data['page_type'] = "shop_detail";

			if($type =="manager"){
				$data['robots_meta'] = "<meta name=\"ROBOTS\" content=\"NOINDEX, NOFOLLOW\">";
			}
			$data['link_shop'] = $this->link_shopmodel->link_shopChk($sid);

			if($sid != ""){
				/* ------------------------------------------------------------------ */
				/* 必要データの抽出
				--------------------------------------------------------------------- */
				if($type == "manager"){
					$data['type'] = $type;
					// 管理モードでも店舗ステータスを参照する 2011/05/09 mod by Globalcoms Nagayoshi
					$shopdata_result = $this->shop_detailmodel->do_select("t_shop_base",array("sid" => "$sid","sd_exam_state" => "2"));						// 基本情報
//					if(isset($_SERVER['HTTP_REFERER'])){
//						if(preg_split( '/\//', $_SERVER['HTTP_REFERER'], -1, PREG_SPLIT_NO_EMPTY) != $_SERVER['SERVER_NAME']){
//							$shopdata_result = $this->shop_detailmodel->do_select("t_shop_base",array("sid" => "$sid","sd_exam_state" => "2"));						// 基本情報
//						}else{
//							$shopdata_result = $this->shop_detailmodel->do_select("t_shop_base",array("sid" => "$sid"));											// 基本情報
//						}
//					}else{
//						$shopdata_result = $this->shop_detailmodel->do_select("t_shop_base",array("sid" => "$sid"));											// 基本情報
//					}
				}else{
					$shopdata_result = $this->shop_detailmodel->do_select("t_shop_base",array("sid" => "$sid","sd_exam_state" => "2"));						// 基本情報
				}
				
				/*SEO対策 [PUBLIC_TOKOTON-3,4] shop_detail/配下 (3:/ありページへ、4：manager/なしページへ)のcanonical対応 20170420 ST*/
				$data['sid'] = $sid;
				if(isset($_SERVER['HTTPS']) and $_SERVER['HTTPS'] == "on"){
					$data['canonical'] = "<link rel=\"canonical\" href=\"https://".$_SERVER['HTTP_HOST']."/shop_detail/".$data['sid']."/\" />";
				} else {
					$data['canonical'] = "<link rel=\"canonical\" href=\"http://".$_SERVER['HTTP_HOST']."/shop_detail/".$data['sid']."/\" />";
				}
				/*SEO対策 [PUBLIC_TOKOTON-3,4] shop_detail/配下 (3:/なしページへ、4：manager/なしページへ)のcanonical対応 20170420 ED*/
				
				if($shopdata_result != null and count($shopdata_result) == 1){
					$data['shop_data'] = $shopdata_result[0];
					
					// 電話応答サービス有効店舗の場合、代理電話番号を表示する
					if($data['shop_data']['sd_tel_srvc'] == "t"){
						$data['shop_data']['sd_shop_tel'] = $represent_tel;
					}
					
					if ($data['shop_data']['sd_intro'] !== '') {
						$data['shop_data']['sd_intro'] = nl2br($data['shop_data']['sd_intro']);
					}
					
					// 検索結果へのパン屑リンク
					if(isset($_SERVER['HTTP_REFERER'])){
						$referer = $_SERVER['HTTP_REFERER'];
					}else{
						$referer = "";
					}
					$data['search_url_pref'] = "";
					if(isset($_SESSION['serach_todoufuken'])){
						$data['search_url_pref'] = $_SESSION['serach_todoufuken'];
					}
					$server_name = $_SERVER['SERVER_NAME'];
					if($referer != ""){
						$url = str_replace("http://".$server_name."","",$referer);
						$url = str_replace("https://".$server_name."","",$url);
					}
				
					if(isset($url) and $url != ""){
#						if(ereg("/client/",$url) or ereg("/admin/",$url)){
						if(!ereg("/search/",$url)){
							if(!isset($_SESSION['search_url'])){
#								$url = "/search/key_".sprintf("%04d",$data['shop_data']['sid'])."/type_manager/";
								$url = "/search/key_".sprintf("%04d",$data['shop_data']['sid'])."/";
							}else{
								$url = $_SESSION['search_url'];
							}
						}
					}else{
						$url = "/search/key_".sprintf("%04d",$data['shop_data']['sid'])."/";
#						$url = "/search/key_".sprintf("%04d",$data['shop_data']['sid'])."/type_manager/";
					}
					
					if(isset($url) and $url != ""){
						$_SESSION['search_url'] = $url;
						$data['search_url'] = $url;
					}
					
					/*パンくずリスト構造化対応 2017/10/02 ST*/
					$breadcrumb_ary = array();
					$breadcrumb_ary[0]['name']	= "車検TOP";
					$breadcrumb_ary[0]['url']		= "http://".$_SERVER['HTTP_HOST'].'/';
					
					$breadcrumb_ary[1]['name']	= $data['shop_data']['todoufuken_nm']."の車検";
					$breadcrumb_ary[1]['url']		= "http://".$_SERVER['HTTP_HOST'].'/search/'.'pref_'.$data['shop_data']['todoufuken_id'].'/';
						
					if($data['shop_data']['sub_region_nm'] !== "市部"){
						$breadcrumb_ary[2]['name']	= $data['shop_data']['sub_region_nm']."の車検";
						$breadcrumb_ary[2]['url']		= "http://".$_SERVER['HTTP_HOST'].'/search/'.'region_sb'.$data['shop_data']['sub_region_id'].'/'.'pref_'.$data['shop_data']['todoufuken_id'].'/';
						$breadcrumb_ary[3]['name']	= $data['shop_data']['region_nm']."の車検";
						$breadcrumb_ary[3]['url']		= "http://".$_SERVER['HTTP_HOST'].'/search/'.'region_'.$data['shop_data']['region_id'].'/'.'pref_'.$data['shop_data']['todoufuken_id'].'/';
						$breadcrumb_ary[4]['name']	= $data['shop_data']['sd_shop_nm'];
						$breadcrumb_ary[4]['url']		= "";
					} else {
						$breadcrumb_ary[2]['name']	= $data['shop_data']['region_nm']."の車検";
						$breadcrumb_ary[2]['url']		= "http://".$_SERVER['HTTP_HOST'].'/search/'.'region_'.$data['shop_data']['region_id'].'/'.'pref_'.$data['shop_data']['todoufuken_id'].'/';
						$breadcrumb_ary[3]['name']	= $data['shop_data']['sd_shop_nm'];
						$breadcrumb_ary[3]['url']		= "";
					}
					
					$data['breadcrumb_ary'] = $breadcrumb_ary;

					//構造化タグをセット
					$data['itemcope']				=	' itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"';
					$data['itemcope_child'] = ' itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"';
					$data['itemprop_url']		=	' itemprop="item"';
					$data['itemprop_title'] =	' itemprop="name"';
					/*パンくずリスト構造化対応 2017/10/02 ED*/
					
					// 画像読み出し（店舗画像大）
					for($i=0;$i<count($file_type);$i++){
						if(file_exists($_SERVER['DOCUMENT_ROOT']."/photo/".$sid."/intro1.".$file_type[$i])){
							$data['intro1_img'] = "/photo/".$sid."/intro1.".$file_type[$i];
						}
					}
					
					// 画像読み出し（店舗画像小1）
					for($i=0;$i<count($file_type);$i++){
						if(file_exists($_SERVER['DOCUMENT_ROOT']."/photo/".$sid."/intro2.".$file_type[$i])){
							$data['intro2_img'] = "/photo/".$sid."/intro2.".$file_type[$i];
						}
					}
					
					// 画像読み出し（店舗画像小2）
					for($i=0;$i<count($file_type);$i++){
						if(file_exists($_SERVER['DOCUMENT_ROOT']."/photo/".$sid."/intro3.".$file_type[$i])){
							$data['intro3_img'] = "/photo/".$sid."/intro3.".$file_type[$i];
						}
					}
					
					// 取扱カード
					if(isset($shopdata_result[0]['sd_card']) and $shopdata_result[0]['sd_card'] != ""){
						$card_data = explode(",",$shopdata_result[0]['sd_card']);
						
						$data['card_arr']['flag'] = "f";
						for($i=1;$i<10;$i++){
							$data['card_arr']['card'.$i] = "f";
						}
						
						for($i=0;$i<count($card_data);$i++){
							$data['card_arr']['card'.$card_data[$i]] = "t";
							$data['card_arr']['flag'] = "t";
						}
					}
					
					// ミシュランク
					if(isset($shopdata_result[0]['sd_shop_rank']) and $shopdata_result[0]['sd_shop_rank'] != ""){
						for($i=0;$i<$shopdata_result[0]['sd_shop_rank'];$i++){
							$sd_shop_rank .= "★";
						}
						
					}
					$data['sd_shop_rank'] = $sd_shop_rank;
					
				}else{
					$data['not_open'] = "t";
					
#					header("location: /");
#					exit;
				}
				
				$option_result =  $this->shop_detailmodel->do_select("t_shop_shopopsion",array("sid" => "$sid"));										// オプション
				for($i=1;$i<16;$i++){
					$data['option_data']['icon'.$i] = "f";
				}
				if($option_result != null){
					for($i=0;$i<count($option_result);$i++){
						$data['option_data']['icon'.$option_result[$i]['shop_option_no']] = "t";
						$data['option_data']['flag'] = "t";
					}
				}
				
				$coupon_result = $this->shop_detailmodel->do_select("t_shop_coupon",array("sid" => "$sid","cou_open_state" => "t"));					// クーポン
				if($coupon_result != null and count($coupon_result) == 1){
					$data['coupon_flag'] = "t";
#					$data['coupon'] = $coupon_result[0];
					
					// 画像読み出し
#					for($i=0;$i<count($file_type);$i++){
#						if(file_exists($_SERVER['DOCUMENT_ROOT']."/photo/".$sid."/coupon1.".$file_type[$i])){
#							$data['coupon_img'] = "/photo/".$sid."/coupon1.".$file_type[$i];
#						}
#					}
					
				}else{
					$data['coupon_flag'] = "f";
				}

				$campaign_result = $this->shop_detailmodel->do_select("t_shop_campaign",array("sid" => "$sid","cam_open" => "t"));					// キャンペーン
				if($campaign_result != null and count($campaign_result) == 1){
					$data['campaign'] = $campaign_result[0];
					
					// 画像読み出し
					for($i=0;$i<count($file_type);$i++){
						if(file_exists($_SERVER['DOCUMENT_ROOT']."/photo/".$sid."/campaign1.".$file_type[$i])){
							$fixed_w = "240";
							
							$campaign_img_data = getimagesize($_SERVER['DOCUMENT_ROOT']."/photo/".$sid."/campaign1.".$file_type[$i]);

							// 縦横幅計算
							if($campaign_img_data[0] > $fixed_w){
								$resized_img_data = $this->shop_detailmodel->image_resize($campaign_img_data[0],$campaign_img_data[1],$fixed_w);
								$data['campaign_img_w'] = $resized_img_data['width'];
								$data['campaign_img_h'] = $resized_img_data['height'];
							}else{
								$data['campaign_img_w'] = $campaign_img_data[0];
								$data['campaign_img_h'] = $campaign_img_data[1];
							}
							
							$data['campaign_img'] = "/photo/".$sid."/campaign1.".$file_type[$i];
							
						}
					}
				}

				$service_result = $this->shop_detailmodel->do_select("t_shop_service",array("sid" => "$sid"));										// サービス
				if($service_result != null){
					$data['service'] = $service_result;
				}

				$addopp_result = $this->shop_detailmodel->do_select("t_shop_adoption",array("sid" => "$sid"));										// 追加オプション
				if($addopp_result != null){
					$data['add_option'] = $addopp_result;
				}
				
				$plan_result = $this->shop_detailmodel->do_select("t_shop_planbase",array("sid" => "$sid"));										// プラン
				$data['plan_count'] = 0;
				if($plan_result != null){
					$list_display = $this->shop_detailmodel->list_display($plan_result);
					
					if($list_display != null){
						$data['plan'] = $list_display;
						$data['plan_count'] = count($list_display);
					}
				}

				$dsc_result = $this->shop_detailmodel->do_select("t_shop_dscbase db",array("db.sid" => "$sid","pb_reccomend_flag" => "t" ));										// 割引メニュー
				if($dsc_result != null){
					for($i=0;$i<count($dsc_result);$i++){
						if($dsc_result[$i]['db_menu_nm'] != "" and $dsc_result[$i]['dd_dsc_price'] != ""){
							$data['dsc_data'][] = $dsc_result[$i];
						}
					}
#					$data['dsc_data'] = $dsc_result;
				}
				
				// ページタイトル編集設定　2009/08/24 added by mori
				if(isset($data['shop_data']['sd_page_title'])){
					$temp_page_title = $this->shop_detailmodel->makeTitle($data['shop_data']['sd_page_title']);
				}else{
					$temp_page_title = "";
				}
				if($temp_page_title != ""){
					$data['page_title'] = $temp_page_title;
				}else{
					// ページタイトルの設定 SEO対策修正対応 2008/10/30 mori
					if(!empty($data['shop_data']['sd_shop_nm'])){
						$data['page_title'] = $data['shop_data']['sd_shop_nm']." | とことん車検ナビ";
						if(!empty($data['shop_data']['todoufuken_nm']) and !empty($data['shop_data']['region_nm'])){
							$data['page_title'] = $data['shop_data']['todoufuken_nm']."・".$data['shop_data']['region_nm']."/".$data['page_title'];
						
						}
					}else{
						$data['page_title'] = "ページが見つかりませんでした｜とことん車検ナビ";
					}
				}
				// 店舗詳細情報ページはヘッダ内h1タグとtitleを同一にしてほしいとのこと 2013/02/28 added by iga
				$data['h1'] = $data['page_title'];
				// ディスクリプションの設定（値が「空」の場合はデフォルト表示）2009/08/24 added by mori
				if(isset($data['shop_data']['sd_page_description'])){
					$data['page_description'] = $data['shop_data']['sd_page_description'];
				}
				
				// キーワード設定
				if(isset($data['shop_data'])){
					$data['page_keywords'] = $this->shop_detailmodel->makeKeywords($data['shop_data']);
				}

				// googlemap
#				if($data['shop_data']['sd_shop_address'] != ""){
# 				if(!empty($data['shop_data']['sd_shop_address'])){
				// 2009/01/07 Googleマップ修正 mori
				if(!empty($data['shop_data']['sd_shop_address']) or !empty($data['shop_data']['sd_point'])){
					if(!empty($data['shop_data']['sd_point'])){
						$data['shop_data']['sd_point'] = str_replace("(","",$data['shop_data']['sd_point']);
						$data['shop_data']['sd_point'] = str_replace(")","",$data['shop_data']['sd_point']);
						list($la,$lon) = explode(",",$data['shop_data']['sd_point']);
					}
					
					$data['load'] = " onload=\"onLoad()\"";
					$this->load->library('Cigooglemapapi');
					// 本番
#					$this->cigooglemapapi->setAPIKey('ABQIAAAAsiv-J2Ktz3vUShHLO2yozRSfAcih3MSuU765d1yhfnq_fiK1SRTzMW_IiwIlS_AoS27FPitnJtcW8g');
					$this->cigooglemapapi->setAPIKey('AIzaSyAZaRLx45ADj9XsX5o9PVBhtB7LSuns0C4'); 
# 					// テスト
# 					$this->cigooglemapapi->setAPIKey('ABQIAAAAmJ0dIqMLRn_O2VFLEnWu2hTaJ6zd6RagG-WzczsmVAA0PFotARRHgn8B_gXuKFEaFtlOEvhnh9-n6Q'); 
					
					
					$this->cigooglemapapi->width = "260px";
					$this->cigooglemapapi->height = "260px";
					$this->cigooglemapapi->zoom = 13;
					$this->cigooglemapapi->disableSidebar();
					
					if(!empty($lon) and !empty($la)){
						$flag = $this->cigooglemapapi->addMarkerByCoords($lon,$la);
						$data['map_js'] = $this->cigooglemapapi->printMapJS();
					}else{
 						$flag = true;
						$data['map_js'] = $this->get_MapByAddress($data['shop_data']['sd_shop_address']);
#						$flag = $this->cigooglemapapi->addMarkerByAddress($data['shop_data']['sd_shop_address']);
					}
					
# 					$flag = $this->cigooglemapapi->addMarkerByCoords(140.523205,36.266975);
					
					/*20180808 GoogleMap座標表示対応 nagai ST*/
					/*座標がない場合は住所をセットして地図を表示*/
					if(!empty($data['shop_data']['sd_point'])){
						$maplink = $data['shop_data']['sd_point'];
					}else {
						$maplink = urlencode($data['shop_data']['sd_shop_address']);
					}
					$data['map_link'] = $maplink;
					/*20180808 GoogleMap座標表示対応 nagai ED*/
					
					if($flag === false){
						// マップ非表示フラグ
						$data['map_flag'] = "f";
					}
					
					$data['header_js'] = $this->cigooglemapapi->printHeaderJS();
					$data['map'] = $this->cigooglemapapi->printMap();
				}else{
					$data['load'] = "";
					$data['map'] = "";
				}
				
			}
			
			#PRINT_R
# 			print "<pre>";
# 			print_r($data);
# 			print "</pre>";
			
#			$this->output->enable_profiler(TRUE);
			// アクセスカウント
			if(!$data['link_shop'])$this->shop_detailmodel->access_count($sid);
			
			// 店舗情報表示・非表示で読み込むテンプレートの変更 2008/11/4
			if(!empty($data['not_open']) and $data['not_open'] == "t"){
				$data['notfound_flg'] = TRUE; /* ページが見つからない、非公開の際にはロボットにインデックスさせないための対応（このフラグが立っていたらrobot用metaタグにnoindex,nofollow,noarchiveを追加）20130730 y.igarashi */
				// 店舗が非表示or存在しないとき
				
				/*20190603 ステータスコード変更対応 ST*/
				http_response_code(404);
				/*20190603 ステータスコード変更対応 ED*/
				
				$this->smarty_parser->parse("ci:user/notfound.tpl", $data);
			}else{
				if(user_agent()){
					$this->smarty_parser->parse("ci:user/shop_detail_sp.tpl", $data);
				} else {
					$this->smarty_parser->parse("ci:user/shop_detail.tpl", $data);
				}
			}
		}
		
	}
	
?>