<?
	/********************************************************************************/
	/* Googleマップキーを本番用に変更してから、アップロードしてください
	*********************************************************************************/
	class Shop_coupon extends Controller{
		/* ------------------------------------------------------------------ */
		/* 共通変数設定
		--------------------------------------------------------------------- */
		
		function Shop_coupon(){
			parent::Controller();
			$this -> load -> model('user/shop_detailmodel');
			$this -> load -> model('user/shop_couponmodel');
			$this -> load -> helper(array('mail_subject','user_agent'));
			
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
               point.y + ',' + point.x + '\" /></form>';
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
			if($sid == ""){
				header("location: /");
			}else{
				/* ------------------------------------------------------------------ */
				/* データの抽出
				--------------------------------------------------------------------- */
				// 抽出するカラムの設定
				$select_column = "sd_shop_nm,sd_shop_tel,sd_shop_zip,sd_shop_address,sd_shop_access,sd_shop_open,sd_shop_off,";
				$select_column .= "cou_contents,cou_limit_matter,cou_limit_date";
				
				if($type == "manager"){
					$data['type'] = $type;
					// 管理画面からのプレビューであっても「sd_exam_state」の値を参照して表示可否を判断する 2013/07/29 y.igarashi
					$shop_data = $this->shop_couponmodel->do_select("t_shop_base sb",array("sb.sid" => $sid,"cou_open_state" => "t",'sd_exam_state' => '2'));
					// $shop_data = $this->shop_couponmodel->do_select("t_shop_base sb",array("sb.sid" => $sid,"cou_open_state" => "t"));
				}else{
					$shop_data = $this->shop_couponmodel->do_select("t_shop_base sb",array("sb.sid" => $sid,"cou_open_state" => "t",'sd_exam_state' => '2'));
				}
				
				if($shop_data != null and count($shop_data) == 1){
					$data['shop_data'] = $shop_data[0];
					
				}else{
					$data['shop_data'] = array();
					$not_open = "t";
				}
				$data['sid'] = $sid;
				
			}
			
			
# 			if(isset($data['shop_data']['sd_shop_address']) and $data['shop_data']['sd_shop_address'] != ""){
			// 2009/01/07 Googleマップ修正 mori
			if(!empty($data['shop_data']['sd_shop_address']) or !empty($data['shop_data']['sd_point'])){
				if(!empty($data['shop_data']['sd_point'])){
					$data['shop_data']['sd_point'] = str_replace("(","",$data['shop_data']['sd_point']);
					$data['shop_data']['sd_point'] = str_replace(")","",$data['shop_data']['sd_point']);
					list($la,$lon) = explode(",",$data['shop_data']['sd_point']);
				}
				$data['load'] = " onload=\"onLoad()\"";
				// googlemap
				$this->load->library('Cigooglemapapi');
# 				// 本番
#				$this->cigooglemapapi->setAPIKey('ABQIAAAAsiv-J2Ktz3vUShHLO2yozRSfAcih3MSuU765d1yhfnq_fiK1SRTzMW_IiwIlS_AoS27FPitnJtcW8g'); 
				$this->cigooglemapapi->setAPIKey('AIzaSyAZaRLx45ADj9XsX5o9PVBhtB7LSuns0C4'); 
				// テスト
# 				$this->cigooglemapapi->setAPIKey('ABQIAAAAmJ0dIqMLRn_O2VFLEnWu2hTaJ6zd6RagG-WzczsmVAA0PFotARRHgn8B_gXuKFEaFtlOEvhnh9-n6Q'); 
				
				$this->cigooglemapapi->width = "550";
				$this->cigooglemapapi->height = "450px";
				$this->cigooglemapapi->zoom = 18;
				$this->cigooglemapapi->disableSidebar();
			
				if(!empty($lon) and !empty($la)){
					$flag = $this->cigooglemapapi->addMarkerByCoords($lon,$la);
  				$data['map_js'] = $this->cigooglemapapi->printMapJS();
				}else{
          $flag = true;
          $data['map_js'] = $this->get_MapByAddress($data['shop_data']['sd_shop_address']);
#					$flag = $this->cigooglemapapi->addMarkerByAddress($data['shop_data']['sd_shop_address']);
				}
				
# 				$flag = $this->cigooglemapapi->addMarkerByAddress($data['shop_data']['sd_shop_address']);
				
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
			
			if(isset($_SESSION['search_url'])){
				$data['search_url'] = $_SESSION['search_url'];
			}else{
				if(empty($not_open)){
					$data['search_url'] = "/search/key_".sprintf("%04d",$data['shop_data']['sid'])."/type_manager/";
				}
			}
			
#			$data['document_root'] = $_SERVER['DOCUMENT_ROOT'];
			$data['document_root'] = str_replace("secure_html", "public_html", $_SERVER['DOCUMENT_ROOT']);
			$data['css'] = "/css/user/coupon.css";
			$data['mainmenu_home'] = "mainmenu_home_off";
			$data['mainmenu_list'] = "mainmenu_list_act";
			$data['page_title'] = "クーポン｜とことん車検ナビ";
			if($type =="manager"){
				$data['robots_meta'] = "<meta name=\"ROBOTS\" content=\"NOINDEX, NOFOLLOW\">";
			}
			
			/*SEO対策 [PUBLIC_TOKOTON-2] shop_detail/配下へのcanonical対応 20170227 ST*/
			if(isset($_SERVER['HTTPS']) and $_SERVER['HTTPS'] == "on"){
				$data['canonical'] = "<link rel=\"canonical\" href=\"https://".$_SERVER['HTTP_HOST']."/shop_detail/".$data['sid']."/\" />";
			} else {
				$data['canonical'] = "<link rel=\"canonical\" href=\"http://".$_SERVER['HTTP_HOST']."/shop_detail/".$data['sid']."/\" />";
			}
			/*SEO対策 [PUBLIC_TOKOTON-2] shop_detail/配下へのcanonical対応 20170227 ED*/
			
					
			
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
				if(user_agent()){
					$this->smarty_parser->parse("ci:user/shop_coupon_sp.tpl", $data);
				} else {
					$this->smarty_parser->parse("ci:user/shop_coupon.tpl", $data);
				}
				
			}
		}
		
		
		
	}
	
	
	
?>