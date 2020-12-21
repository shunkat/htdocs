<?
	class Search_top extends Controller{
		/* ------------------------------------------------------------------ */
		/* 共通変数設定
		--------------------------------------------------------------------- */
		
		function Search_top(){
			parent::Controller();
			$this -> load -> model('user/search_topmodel');
			
			
			$this -> output -> set_header('Content-Type: text/html; charset=UTF-8');
		}
		function index(){
			/* ------------------------------------------------------------------ */
			/* ページの設定
			--------------------------------------------------------------------- */
#			$data['document_root'] = $_SERVER['DOCUMENT_ROOT'];
			$data['document_root'] = "/home/webmaster/public_html/";
			$data['css'] = "/css/user/search_top.css";
			$data['page_title'] = "車検をさがす | とことん車検ナビ";
			$data['mainmenu_home'] = "mainmenu_home_off";
			$data['mainmenu_list'] = "mainmenu_list_act";
			
			// 2009/08/26 更新対応
			$data['page_keywords'] = "検索,探す,エリア,条件,地域,ピンポイント";
			$data['page_description'] = "ピンポイントで車検を探せる。見つかる。エリア＋条件で車検を探すことができます。";
                        // 2010/07/27 iseki対応
//			$data['h1'] = "車検費用の料金比較、全国のお得な情報が満載！どこより格安便利なお見積りなら「とことん車検ナビ」";
			$data['h1'] = "車検を探す|どこより格安料金で便利なお見積りなら「とことん車検ナビ」";
			
			
			/* ------------------------------------------------------------------ */
			/* 都道府県プルダウンの設定
			--------------------------------------------------------------------- */
			$pulldown = $this->search_topmodel->get_pulldown();
			
			if($pulldown != null){
				$data['pulldown'] = $pulldown;
			}
			
			/* ------------------------------------------------------------------ */
			/* エラーがあったらセットする
			--------------------------------------------------------------------- */
			if(isset($_SESSION['error']) and $_SESSION['error'] != null){
				$data['error'] = $_SESSION['error'];
			}
			
			/* ------------------------------------------------------------------ */
			/* フォームデータがあったらセットする
			--------------------------------------------------------------------- */
			if(isset($_SESSION['form_data']) and $_SESSION['form_data'] != null){
				foreach($_SESSION['form_data'] as $key => $val){
					if($key != "option" and $key != "rollback"){
						$data[$key] = $val;
					}elseif($key == "option"){
						foreach($val as $array_no => $option_no){
							$data['option'.$option_no] = "t";
						}
						
					}
					
				}
				
				// プルダウン
				if(isset($_SESSION['form_data']['pref']) and $_SESSION['form_data']['pref'] != ""){
					$data['pulldown'] = str_replace("value=\"".$_SESSION['form_data']['pref']."\">","value=\"".$_SESSION['form_data']['pref']."\" selected=\"selected\">",$data['pulldown']);
				}
			}
			
			$this->smarty_parser->parse("ci:user/search_top.tpl", $data);
			unset($_SESSION['error']);
		}
		
		
		
	}
	
?>