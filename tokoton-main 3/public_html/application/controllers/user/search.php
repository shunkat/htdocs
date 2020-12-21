<?php
	class Search extends Controller{
		/* ------------------------------------------------------------------ */
		/* 共通変数設定
		--------------------------------------------------------------------- */
		
		function Search(){
			parent::Controller();
			$this -> load -> model('user/searchmodel');
			$this -> load -> helper(array('mail_subject','user_agent'));									// ヘルパーのロード
			
			$this -> output -> set_header('Content-Type: text/html; charset=UTF-8');
		}
		function index(){
#			$this->output->enable_profiler(true);
			/* ------------------------------------------------------------------ */
			/* ページの設定
			--------------------------------------------------------------------- */
			$data['css'] = "/css/user/result.css";
#			$data['document_root'] = $_SERVER['DOCUMENT_ROOT'];
			$data['document_root'] = str_replace("secure_html", "public_html", $_SERVER['DOCUMENT_ROOT']);
#			$data['page_title'] = "検索結果 | とことん車検ナビ";
			$data['mainmenu_home'] = "mainmenu_home_off";
			$data['mainmenu_list'] = "mainmenu_list_act";
			$data['nowyear'] = date("Y");
			$data['page_type'] = "search";
			
			$opt_nm = "";
			$region_nm = "";
			$todoufuken = "";
			$shikuchouson = "";
			$sub_region_nm = "";
			
			/* ------------------------------------------------------------------ */
			/* URLよりクエリの取得
			--------------------------------------------------------------------- */
			$pattern['todoufuken_id'] = "/pref_([0-9]{2})/";
			$pattern['start'] = "/start_([0-9]+)";
			$pattern['region_id'] = "/region_([0-9]{4})/";
			$pattern['sub_region_id'] = "/region_sb([0-9]{4})/";
			$pattern['option'] = "/option_([0-9]{1,40})/";
			$pattern['order'] = "/order_([a-z-]{3,10})/";
			$pattern['keyword'] = "/key_([^/]+)/";
			$pattern['area_id'] = "/area_([^/]+)/";
			$pattern['type'] = "/type_([^/]+)/";
			
			$params = $this->uri->get_rewrite_parameter($pattern);

			if($params['type'] != ""){
				$data['type'] = $params['type'];
				$data['robots_meta'] = "<meta name=\"ROBOTS\" content=\"NOINDEX, NOFOLLOW\">";
			}
			
			// 検索開始位置指定
			if($params['start'] != ""){
				$offset = $params['start'];
			}else{
				$offset = 0;
			}

			// titleタグ,metaタグ用に「nページ目」の文字列を作成
			$data['page_num'] = "";
			
			/*search/配下の掲載店舗数変更 2019/07/16 ST*/
			if($offset !== "" && floor($offset / 50 + 1) != 1){
				$data['page_num'] = "（".floor($offset / 50 + 1)."ページ目）";
			}
			
			/*search/配下の掲載店舗数変更 2017/05/11 ST*/
			/*
			if($offset !== "" && floor($offset / 20 + 1) != 1){
				$data['page_num'] = "（".floor($offset / 20 + 1)."ページ目）";
			}
			/*
			if($offset !== "" && floor($offset / 10 + 1) != 1){
				$data['page_num'] = "（".floor($offset / 10 + 1)."ページ目）";
			}
			*/
			/*search/配下の掲載店舗数変更 2017/05/11 ED*/
			/*search/配下の掲載店舗数変更 2019/07/16 ED*/

			// hidden 用都道府県ID割り当て
			$data['todoufuken_id'] = $params['todoufuken_id'];
			
			// 地区IDがあったらセットする
			if($params['region_id'] != ""){
				$data['region_id'] = $params['region_id'];
			} else {
				$data['region_id'] = "sb".$params['sub_region_id'];
			}
			
			// 検索条件保持用にkeywordを割り当てる
			if($params['keyword'] != ""){
				$data['keyword'] = urldecode($params['keyword']);
			}
			
			
			$url = $this->uri->ruri_string();
			// 不要なURLを取り除く処理
			if($url != ""){
				$url = str_replace("index/","",$url);
				$url = str_replace("//","/",$url);
				
				// ページャー用URL作成
				$pager_link = ereg_replace("/start_([0-9]+)","",$url);
				// ソート用URL作成
				$sort_link = ereg_replace("/start_([0-9]+)","",$url);
				$sort_link = ereg_replace("/order_([a-z-]+)","",$sort_link);
				
			}
			
			// ソートリンク一式の作成
			$data['sort_box'] = $this->searchmodel->sort_link($params['order'],$sort_link);
			
			
			/* ------------------------------------------------------------------ */
			/* 地区登録店舗数配列の取得
			--------------------------------------------------------------------- */
			$region_arr = $this->searchmodel->get_region_array(array("todoufuken_id" => $params['todoufuken_id']));
			
			/* ------------------------------------------------------------------ */
			/* その他設定
			--------------------------------------------------------------------- */
			if($params != null){
				foreach($params as $key => $val){
					if($key == "option"){										// 検索オプションのチェック
						for($i=0;$i<strlen($val);$i+=2){
							$option_arr[] = substr($val,$i,2);
						}
						if(isset($option_arr) and $option_arr != null){
							foreach($option_arr as $arr_no => $option_no){
								$data['option'.$option_no] = "t";
							}
						}
						
						if(!empty($option_arr)){
							// 選択されたオプションが1つの場合はオプション名を取得
							if(count($option_arr) == 1){
								$opt_nm = $this->searchmodel->getOptionNm(ltrim($option_arr[0],"0"));
							}
						}

					}

					if($key == "todoufuken_id"){							// 地区プルダウンの設定
						if($val != ""){
							$region_select_column = "region_id, sub_region_id, sub_region_nm,region_nm,mt.todoufuken_nm";
//							$region_select_column = "region_id,sub_region_nm,region_nm,mt.todoufuken_nm";
							$region_result = $this->searchmodel->do_select("m_region mr",array("mr.todoufuken_id" => $val),$region_select_column);
						}else{
							$region_result = array();
						}
						
						if($region_result != null){
							$region_pulldown = $this->searchmodel->region_pulldown($region_result,$region_arr);
							$data["SubRegionCntAry"] = $this->searchmodel->SubRegionCntAry;

							if(isset($region_pulldown) and $region_pulldown != null){
								foreach($region_pulldown as $key => $val){
									$data[$key] = $val;
								}
								
								$data['todoufuken'] = $region_result[0]['todoufuken_nm'];				// 現在の都道府県名
								$data['shikuchouson'] = null;
								$todoufuken = $region_result[0]['todoufuken_nm'];
							}
						}else{
							$data['todoufuken'] = "未選択";				// 現在の都道府県名
						}

					}

					if($key == "region_id" && $val != ""){
						
						// 選択されている地区名を取得
						$region_nm = $this->searchmodel->getRegionNm($val);

						// 政令指定都市名の取得
						$sub_region_nm = $this->searchmodel->getSubRegionNm("", $val);

						$data['shikuchouson'] = null;
						if ($sub_region_nm != "" && $sub_region_nm !== "市部" && $sub_region_nm !== "23区") {
							$data['shikuchouson'] = $sub_region_nm;
							$shikuchouson = $sub_region_nm;
						}

						$data['region_nm'] = $region_nm;
					}

					if ($key == "sub_region_id" && $val != ""){
						// 政令指定都市名を取得
						$sub_region_nm = $this->searchmodel->getSubRegionNm($val, "");

						$shikuchouson = $sub_region_nm;
						$data['shikuchouson'] = $shikuchouson;
					}
				}

			}

			/* ------------------------------------------------------------------ */
			/* 店舗情報の抽出
			--------------------------------------------------------------------- */
			// 抽出するカラムの設定
#			$select_column = "sb.sid,sd_account,sd_shop_nm,sd_catch_copy,sd_intro,sd_shop_address,sd_shop_access,sd_shop_rank,sd_last_update";
			$select_column = "sid,sd_account,sd_shop_nm,sd_catch_copy,sd_intro,sd_shop_address,sd_shop_access,sd_shop_rank,sd_last_update";
			// 店舗基本データの抽出
#			$search_result = $this->searchmodel->do_search("t_shop_base sb",$params,$select_column,$offset,$pager_link);
			$search_result = $this->searchmodel->do_search("v_search_view",$params,$select_column,$offset,$pager_link);
			
			// キャンペーン・サービス・プラン情報の抽出
			if($search_result != null){
				$display = $this->searchmodel->display_data($search_result['search_result']);
				
				if($display != null){
					$data['search_arr'] = $display;
				}
				
				// 割り当て（search_result 以外）
				foreach($search_result as $key => $val){
					if($key != "search_result"){
						$data[$key] = $val;
					}
				}
			}
			
			/*SEO対策 [PUBLIC_TOKOTON-5] 不正なURLはエラーページ表示  20170228 ST*/
			/*URLから値を取得*/
			//$str = $_SERVER['REQUEST_URI'];
			$str = str_replace("/search/","",rtrim($_SERVER['REQUEST_URI'],'/'));
			$wk_url = array();
			$wk_url = explode('/', $str);
			
			//変数初期化
			$wk_pref = '';
			$wk_start = '';
			$wk_region = '';
			$wk_region_sb = '';
			$wk_option = '';
			$wk_key = '';
			$wk_type = '';
			$wk_other = array();
			$errorFlg = '';
			$checkFlg = false;
			/*SEO対策 [PUBLIC_TOKOTON-20] /pref_配下、/region_配下は/有のページへcanonical 20170404 ST*/
			$canonicalFlg = false;
			/*SEO対策 [PUBLIC_TOKOTON-20] /pref_配下、/region_配下は/有のページへcanonical 20170404 ED*/
			
			//取得したURLをLOOP処理で分解しwk変数に代入
			foreach($wk_url as $value){
				
				if(strpos($value,'pref_') !== false){
					$wk_pref = $value;
				} elseif(strpos($value,'start_') !== false){
					$wk_start = $value;
				} elseif(strpos($value,'region_') !== false){
					if(strpos($value,'region_sb') !== false){
				    	$wk_region_sb = $value;
				    } else {
				    	$wk_region = $value;
				    }
				} elseif(strpos($value,'option_') !== false){
					$wk_option = $value;
				} elseif(strpos($value,'key_') !== false){
					$wk_key = $value;
				} elseif(strpos($value,'type_') !== false){
					$wk_type = $value;
				} else {
					$wk_other[] = $value;
				}
			}
			
			//prefの整合性チェック
			if($wk_pref != ''){
				/*SEO対策 [PUBLIC_TOKOTON-20] /pref_配下、/region_配下は/有のページへcanonical 20170404 ST*/
				$canonicalFlg = true;
				/*SEO対策 [PUBLIC_TOKOTON-20] /pref_配下、/region_配下は/有のページへcanonical 20170404 ED*/
				
				//「pref_」以下を抜き出し、存在チェック (2桁で02～48ならOK)
				$check_pref = substr($wk_pref,5);
				if(strlen($check_pref) == 2 AND 02 <= $check_pref AND $check_pref <= 48){
					//何もしない
				}else {
					$errorFlg = true;
				}
			}
			
			//startの整合性チェック
			if($wk_start != ''){
				//「start_」以下を抜き出し、存在チェック (数値で20の倍数かつ、検索件数以下ならOK)
				$check_start = substr($wk_start,6);
				
				//先頭「00」等の0の連続の場合、3桁以上で先頭0始まりの場合、先頭「-」始まりはNG
				if(preg_match("/^[0]{2,}/", $check_start)
					or (strlen($check_start) >= 3 AND substr($check_start,0,1) == 0)
					or substr($check_start,0,1) == '-'){
	    			$checkFlg = true;
	  			}

				/*search/配下の掲載店舗数変更 2019/07/16 ST*/
				if(is_numeric($check_start) AND ($check_start%50) == 0
				/*search/配下の掲載店舗数変更 2017/05/11 ST*/
				/*	
				if(is_numeric($check_start) AND ($check_start%20) == 0
				*/
				//if(is_numeric($check_start) AND ($check_start%10) == 0
				/*search/配下の掲載店舗数変更 2017/05/11 ED*/
				/*search/配下の掲載店舗数変更 2019/07/16 ED*/

					AND $check_start < $search_result["total_search_rows"] AND !$checkFlg){
					//何もしない
				}else {
					$errorFlg = true;
				}
			}
			
			//regionの整合性チェック
			if($wk_region != ''){
				/*SEO対策 [PUBLIC_TOKOTON-20] /pref_配下、/region_配下は/有のページへcanonical 20170404 ST*/
				$canonicalFlg = true;
				/*SEO対策 [PUBLIC_TOKOTON-20] /pref_配下、/region_配下は/有のページへcanonical 20170404 ED*/
				
				//「region_」以下を抜き出し、存在チェック
				$check_region = substr($wk_region,7);
				
				//存在チェック
				$check_region_nm = '';
				$check_region_nm = $this->searchmodel->getRegionNm($check_region);
				
				//falseだったらエラー(値が取得できないとfalseで帰ってくるため)
				if($check_region_nm != false){
					//何もしない
				}else {
					$errorFlg = true;
				}
			}
			
			//region_sbの整合性チェック
			if($wk_region_sb != ''){
				/*SEO対策 [PUBLIC_TOKOTON-20] /pref_配下、/region_配下は/有のページへcanonical 20170404 ST*/
				$canonicalFlg = true;
				/*SEO対策 [PUBLIC_TOKOTON-20] /pref_配下、/region_配下は/有のページへcanonical 20170404 ED*/
				
				//「region_sb」以下を抜き出し、存在チェック
				$check_region_sb = substr($wk_region_sb,9);
				
				//存在チェック
				$check_region_sb_nm = '';
				$check_region_sb_nm = $this->searchmodel->getSubRegionNm($check_region_sb, "");
				
				if($check_region_sb_nm != false){
					//何もしない
				}else {
					$errorFlg = true;
				}
			}
			
			//optionの整合性チェック
			if($wk_option != ''){
				//「option_」以下を抜き出し、存在チェック
				$check_option = substr($wk_option,7);
				
				//LOOP処理で2桁毎に分解し、存在チェック
				for($i=0;$i<strlen($check_option);$i+=2){
					
					$wk_check_option = '';
					$wk_check_option = substr($check_option,$i,2);

					//2桁以下はNG
					if(strlen($wk_check_option) < 2){
						$errorFlg = true;
					}
		
					$check_option_nm = $this->searchmodel->getOptionNm(ltrim($wk_check_option,"0"));
				
					if($check_option_nm != false){
						//何もしない
					}else {
						$errorFlg = true;
					}
				}
				
				/*SEO対策 [PUBLIC_TOKOTON-7] optionが2つ以上選択されている場合はNOINDEX 20170228 ST*/
				if (strlen($check_option) >= 4){
					$data['notfound_flg'] = true;
				}
				/*SEO対策 [PUBLIC_TOKOTON-7] optionが2つ以上選択されている場合はNOINDEX 20170228 ED*/
					
			}
			
			//keyの整合性チェック
			if($wk_key != ''){
				//「key_」以下を抜き出し、存在チェック
				$check_key = substr($wk_key,4);
				
				//フリー入力の検索キーワードのため、特にチェックはなし
				//URL直接書きかえで値がない場合「Key_」のみNGとする
				if($check_key != ''){
					//何もしない
				}else {
					$errorFlg = true;
				}
				
				/*SEO対策 [PUBLIC_TOKOTON-9] フリーワード検索された場合はNOINDEX 20170301 ST*/
				$data['notfound_flg'] = true;
				/*SEO対策 [PUBLIC_TOKOTON-9] フリーワード検索された場合はNOINDEX 20170301 ED*/
			}
			
			//typeの整合性チェック
			if($wk_type != ''){
				//「type_」以下を抜き出し、存在チェック
				$check_type = substr($wk_type,5);
				
				if($check_type == 'manager'){
					//何もしない
				}else {
					$errorFlg = true;
				}
			}
			
			//その他の整合性チェック
			//不正なURLが存在する場合はエラー
			if(!empty($wk_other)){
				$errorFlg = true;
			}
			
			/*SEO対策 エラーフラグ=ONの場合は404表示*/
			if($errorFlg){
				show_404($page = '', $log_error = TRUE);
			}
			
			/*SEO対策 [PUBLIC_TOKOTON-8] 検索結果が0件の場合はNOINDEX  20170228 ST*/
			if($search_result["total_search_rows"] == 0){
				$data['notfound_flg'] = true;
			}
			/*SEO対策 [PUBLIC_TOKOTON-8] 検索結果が0件の場合はNOINDEX  20170228 ED*/
			
			$wk_url2 = str_replace("/type_manager","",$_SERVER['REQUEST_URI']);				//「type_manager」削除
			$wk_url2 = str_replace("/start_0","",$wk_url2);									//「start_0」削除
			
			/*SEO対策 [PUBLIC_TOKOTON-20] /pref_配下、/region_配下は/有のページへcanonical 20170404 ST*/
			if(!$canonicalFlg){
				$wk_url2 = rtrim($wk_url2,'/');												//末尾/削除
			}
			
			if(isset($_SERVER['HTTPS']) and $_SERVER['HTTPS'] == "on"){
				$data['canonical'] = "<link rel=\"canonical\" href=\"https://".$_SERVER['HTTP_HOST'].$wk_url2."\" />";
			} else {
				$data['canonical'] = "<link rel=\"canonical\" href=\"http://".$_SERVER['HTTP_HOST'].$wk_url2."\" />";
			}
			
			/*SEO対策 [PUBLIC_TOKOTON-3] /なしページへcanonical対応 20170228 ST*/
			/*$_SERVER['REQUEST_URI']の加工*/
			/*
			$wk_url2 = str_replace("type_manager","",$_SERVER['REQUEST_URI']);			//「type_manager」削除
			$wk_url2 = str_replace("start_0","",$wk_url2);								//「start_0」削除
			$wk_url2 = str_replace("//","/",rtrim($wk_url2,'/'));						//末尾/削除、//の置き換え
			
			if(isset($_SERVER['HTTPS']) and $_SERVER['HTTPS'] == "on"){
				$data['canonical'] = "<link rel=\"canonical\" href=\"https://".$_SERVER['HTTP_HOST'].$wk_url2."\" />";
				
			} else {
				$data['canonical'] = "<link rel=\"canonical\" href=\"http://".$_SERVER['HTTP_HOST'].$wk_url2."\" />";
				
			}
			*/
			/*SEO対策 [PUBLIC_TOKOTON-3] /なしページへcanonical対応 20170228 ED*/
			/*SEO対策 [PUBLIC_TOKOTON-5] 不正なURLはエラーページ表示  20170228 ED*/
			
			/*SEO対策 [PUBLIC_TOKOTON-20] /pref_配下、/region_配下は/有のページへcanonical 20170404 ED*/


#			$this->output->enable_profiler(TRUE);
			
			// ページタイトル設定
			$data['page_title'] = $this->searchmodel->getPageTitle($todoufuken,$region_nm,$opt_nm,$shikuchouson, $data['page_num']);

			/*パンくずリスト構造化対応 2017/10/02 ST*/
			$breadcrumb_ary = array();
			$breadcrumb_ary[0]['name']	= "車検TOP";
			$breadcrumb_ary[0]['url']		= "http://".$_SERVER['HTTP_HOST'].'/';

			if($wk_pref != ''){
				$breadcrumb_ary[1]['name']	= $todoufuken."の車検";
				$breadcrumb_ary[1]['url']		= "http://".$_SERVER['HTTP_HOST'].'/search/'.$wk_pref.'/';

				if(isset($check_region_nm) or isset($check_region_sb_nm)){
					
					if(isset($check_region_sb_nm)){
						$breadcrumb_ary[2]['name']	= $shikuchouson."の車検";
						$breadcrumb_ary[2]['url']		= "";
					} else {
						
						//政令指定都市か判定
						$wk_region_sb_nm = $this->searchmodel->getSubRegionNm("", $check_region);
						if(isset($wk_region_sb_nm) and $wk_region_sb_nm !== "市部"){
							//リンク用に政令指定都市のIDを取得
							$select_column = 'sub_region_id';
							$wk_region_sb_id = $this->searchmodel->do_select("m_region",array("region_id" => $check_region),$select_column);
							$region_sb_id = $wk_region_sb_id[0]['sub_region_id'];
							
							$breadcrumb_ary[2]['name']	= $wk_region_sb_nm."の車検";
							$breadcrumb_ary[2]['url']		= "http://".$_SERVER['HTTP_HOST'].'/search/'.'region_sb'.$region_sb_id.'/'.$wk_pref.'/';
							$breadcrumb_ary[3]['name']	= $check_region_nm."の車検";
							$breadcrumb_ary[3]['url']		= "";
						}else{
							$breadcrumb_ary[2]['name']	= $check_region_nm."の車検";
							$breadcrumb_ary[2]['url']		= "";
						}
					}
				}

			} else {
				$breadcrumb_ary[1]['name']	= "車検をさがす";
				$breadcrumb_ary[1]['url']		= "http://".$_SERVER['HTTP_HOST'].'/search_top/';
				$breadcrumb_ary[2]['name']	= '検索結果';
				$breadcrumb_ary[2]['url']		= "";
			}

			$data['breadcrumb_ary'] = $breadcrumb_ary;
			
			//構造化タグをセット
					$data['itemcope']				=	' itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"';
					$data['itemcope_child'] = ' itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"';
					$data['itemprop_url']		=	' itemprop="item"';
					$data['itemprop_title'] =	' itemprop="name"';
			/*パンくずリスト構造化対応 2017/10/02 ED*/
			
			/*20180116 エリアページ独自テキスト追加対応 ST */
			//ページ表示用フラグ初期化
			$data['text_dispflg'] = false;						//1ページ目判定用フラグ
			$data['areatext_dispflg'] = false;				//ページ上部エリアテキスト判定用フラグ
			$data['shakentext_dispflg'] = false;			//ページ下部エリア車検テキスト判定用フラグ
			
			//1ページ目の場合のみ表示
			if($wk_start == '' or $wk_start == 'start_0'){
			
				$data['text_dispflg'] = true;
				$data['areatext_dispflg'] = true;
				$data['shakentext_dispflg'] = true;
							
				//市区町村の場合
				if(isset($check_region)){
					$region_txtAry = array();
					$select_column = 'region_text, region_shaken_text';
					$region_txtAry = $this->searchmodel->do_select("m_region",array("region_id" => $check_region),$select_column);

					if($region_txtAry[0]['region_text'] == NULL or $region_txtAry[0]['region_text'] == ''){
						$data['areatext_dispflg'] = false;
					}else{
						$data['area_text'] = $region_txtAry[0]['region_text'];
					}

					if($region_txtAry[0]['region_shaken_text'] == NULL or $region_txtAry[0]['region_shaken_text'] == ''){
						$data['shakentext_dispflg'] = false;
					}else{
						$data['shaken_text'] = $region_txtAry[0]['region_shaken_text'];
					}

				//政令指定都市の場合
				}else if(isset($check_region_sb)){
					$region_sb_txtAry = array();
					$select_column = 'sub_region_text, sub_region_shaken_text';
					$region_sb_txtAry = $this->searchmodel->do_select("m_sub_region",array("sub_region_id" => $check_region_sb),$select_column);

					if($region_sb_txtAry[0]['sub_region_text'] == NULL or $region_sb_txtAry[0]['sub_region_text'] == ''){
						$data['areatext_dispflg'] = false;
					}else{
						$data['area_text'] = $region_sb_txtAry[0]['sub_region_text'];
					}

					if($region_sb_txtAry[0]['sub_region_shaken_text'] == NULL or $region_sb_txtAry[0]['sub_region_shaken_text'] == ''){
						$data['shakentext_dispflg'] = false;
					}else{
						$data['shaken_text'] = $region_txtAry[0]['sub_region_shaken_text'];
					}

				//都道府県の場合
				}else if(isset($check_pref)){
					$pref_txtAry = array();
					$select_column = 'todoufuken_text, todoufuken_shaken_text';
					$pref_txtAry = $this->searchmodel->do_select("m_todoufuken",array("todoufuken_id" => $check_pref),$select_column);

					if($pref_txtAry[0]['todoufuken_text'] == NULL or $pref_txtAry[0]['todoufuken_text'] == ''){
						$data['areatext_dispflg'] = false;
					}else{
						$data['area_text'] = $pref_txtAry[0]['todoufuken_text'];
					}

					if($pref_txtAry[0]['todoufuken_shaken_text'] == NULL or $pref_txtAry[0]['todoufuken_shaken_text'] == ''){
						$data['shakentext_dispflg'] = false;
					}else{
						$data['shaken_text'] = $pref_txtAry[0]['todoufuken_shaken_text'];
					}
				}
			}
			/*20180116 エリアページ独自テキスト追加対応 ED */
			
			if(user_agent() ){
				$data['pref_arr'] = $this->searchmodel->getpref_array();
				$data['chkoption_name'] = "";
				if(!empty($option_arr)){
					foreach($option_arr as $row){
						$data['chkoption_name'] .= $this->searchmodel->getOptionNm_SP(ltrim($row,"0"));
						$data['chkoption_name'] .= "|";
					}
				} else {
					$data['chkoption_name'] = "指定なし";
					unset($_SESSION['serach_todoufuken']);
					if($data['todoufuken'])$_SESSION['serach_todoufuken'] = $data['todoufuken'];
				}
				$this->smarty_parser->parse("ci:user/result_sp.tpl", $data);
			} else {
				$this->smarty_parser->parse("ci:user/result.tpl", $data);
			}
		}
		
		
		function post_control(){

			unset($_SESSION['form_data']);
			
			
			if(isset($_POST['change'])){
				
				$session_list = array("key","option","pref");
				
				foreach($_POST as $key => $val){
					if(array_search($key,$session_list) !== false){
						$_SESSION['form_data'][$key] = $val;
					}
				}
				
				header("location: /search_top/");
				exit;
			}else{
				/* ------------------------------------------------------------------ */
				/* 変数・配列初期化
				--------------------------------------------------------------------- */
				$option_no = "";
				$url = "";
				$base_url = "/search/";
				$chk_flag = true;
				$error_result = array();
			
				$post_list = array("region","key","option","pref");
			
				/* ------------------------------------------------------------------ */
				/* エラーチェック
				--------------------------------------------------------------------- */
				if(isset($_POST) and $_POST != null){
					foreach($_POST as $key => $val){
	#				print $key;
						if(array_search($key,$post_list) !== false){
							if($key != "option" and $val != ""){
								$val = str_replace(" ","　",$val);
								$url .= $key."_".urlencode($val)."/";
							}else{
								if($key == "option"){
									for($i=0;$i<count($_POST[$key]);$i++){
										$option_no .= sprintf("%02d",$_POST[$key][$i]);
									}
									if(isset($option_no) and $option_no != ""){
										$url .= "option_".$option_no."/";
									}
								}
							}
						}
					
					}
				
				}
			
				if($url != "" and $chk_flag){
					header("location: ".$base_url.$url);
				}else{
					if(isset($_POST) and $_POST != null){
						$_SESSION['form_data'] = $_POST;
					}
					if(isset($_POST['rollback']) and $_POST['rollback'] != ""){
						header("location: ".$_POST['rollback']);
					}else{
						header("location: /");
					}
				}
			
			}
		}
		
		
	}
	
?>