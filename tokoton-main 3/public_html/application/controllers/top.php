<?
	class Top extends Controller{
		/* ------------------------------------------------------------------ */
		/* 共通変数設定
		--------------------------------------------------------------------- */
		
		function Top(){
			parent::Controller();
			$this -> load -> model('user/topmodel');

			if ($this -> is_smafo() && $_SERVER['HTTP_REFERER'] !== "http://".$_SERVER['HTTP_HOST']."/sp/") {
				// 機種がスマホからのアクセスならばスマホサイトに転送
				header("Location: http://{$_SERVER['HTTP_HOST']}/sp/");
				exit;
			}

			$this -> output -> set_header('Content-Type: text/html; charset=UTF-8');
		}
		function index(){
			if(isset($_SERVER['HTTPS']) and $_SERVER['HTTPS'] == "on" and isset($_SERVER['HTTP_HOST']) and $_SERVER['HTTP_HOST'] != ""){
				header("location: http://".$_SERVER['HTTP_HOST']."/");
				exit;
			}
			// トピックス抽出
			$select_column = "top_up_date,top_contents,top_link";
			$topics_result = $this->topmodel->do_select("t_manager_topics","",$select_column);
			
			
			if($topics_result != null){
				$data['topics'] = $topics_result;
				
				for($i=0;$i<count($topics_result);$i++){
					if($topics_result[$i]['top_link'] != ""){
						$data['topics'][$i]['topics_nm'] = "<a href=\"".$topics_result[$i]['top_link']."\" target=\"_blank\">".$topics_result[$i]['top_contents']."</a>";
					}else{
						$data['topics'][$i]['topics_nm'] = $topics_result[$i]['top_contents'];
					}
				}
				
			}
			/*TOPページが重いため、コメントアウト@2014/04/25sawada
			
			// 店舗数取得
			$select_column = "max(sd_last_update) as last_update,count(sid) as shop_count";
			$shop_num_result = $this->topmodel->do_select("t_shop_base",array("sd_exam_state" => "2"),$select_column);
			
			if($shop_num_result != null and count($shop_num_result) == 1){
				$data['shop_num'] = $shop_num_result[0]['shop_count'];
				$data['last_update'] = $shop_num_result[0]['last_update'];
			}else{
				$data['shop_num'] = 0;
				$data['last_update'] = "";
			}
			
			// プラン数
			$select_column = "count(sb.sid) as plan_count";
			$plan_num_result = $this->topmodel->do_select("t_shop_base sb",array("sd_exam_state" => "2"),$select_column);
			
			if($plan_num_result != null and count($plan_num_result) == 1){
				$data['plan_num'] = $plan_num_result[0]['plan_count'];
			}else{
				$data['plan_num'] = 0;
			}
			*/
			/*SEO対策 [PUBLIC_TOKOTON-3] /なしページへcanonical対応 20170228 ST*/
			if(isset($_SERVER['HTTPS']) and $_SERVER['HTTPS'] == "on"){
				$data['canonical'] = "<link rel=\"canonical\" href=\"https://".$_SERVER['HTTP_HOST'].rtrim($_SERVER['REQUEST_URI'],'/')."\" />";
			} else {
				$data['canonical'] = "<link rel=\"canonical\" href=\"http://".$_SERVER['HTTP_HOST'].rtrim($_SERVER['REQUEST_URI'],'/')."\" />";
			}
			/*SEO対策 [PUBLIC_TOKOTON-3] /なしページへcanonical対応 20170228 ED*/
			
			$data['mainmenu_home'] = "mainmenu_home_act";
			$data['mainmenu_list'] = "mainmenu_list_off";
			$data['css'] = "/css/user/top.css";
#			$data['document_root'] = $_SERVER['DOCUMENT_ROOT'];
			$data['document_root'] = "/home/webmaster/public_html";
/*	2016/02/04
			$data['page_title'] = "車検費用が驚きの3万円台から！とことん車検ナビで車検予約";
	2016/02/18
			$data['page_title'] = "車検費用が驚きの3万円台から！とことん車検ナビで安い見積もりを比較して予約";*/
			
			/*20170907 ST*/
			$data['page_title'] = "車検が3万円台～安い車検を比較|とことん車検ナビ";
			//$data['page_title'] = "車検費用が3万円台～安い見積もりを比較して予約|とことん車検ナビ";
			/*20170907 ED*/
			
/*	2016/02/18
			$data['h1'] = "車検費用の料金比較、全国のお得な情報が満載！どこより格安便利なお見積りなら「とことん車検ナビ」";*/
			$data['h1'] = "車検費用の見積もりを比較して予約・全国のお得な情報が満載！どこよりも安い便利なお見積りなら「とことん車検ナビ」";
			
			$this->smarty_parser->parse("ci:user/index.tpl", $data);
		}
		
		function is_smafo () {
			$useragents = array(
			'iPhone',         // Apple iPhone
			'iPod',           // Apple iPod touch
			'Android',        // 1.5+ Android
			'dream',          // Pre 1.5 Android
			'CUPCAKE',        // 1.5+ Android
			'blackberry9500', // Storm
			'blackberry9530', // Storm
			'blackberry9520', // Storm v2
			'blackberry9550', // Storm v2
			'blackberry9800', // Torch
			'webOS',          // Palm Pre Experimental
			'incognito',      // Other iPhone browser
			'webmate'         // Other iPhone browser
			);
			$pattern = '/'.implode('|', $useragents).'/i';
			return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
		}
		
	}
	
?>