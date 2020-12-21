<?
	class Top extends Controller{
		/* ------------------------------------------------------------------ */
		/* 共通変数設定
		--------------------------------------------------------------------- */
		
		function Top(){
			parent::Controller();
			$this -> load -> model('user/topmodel');
			
			
			$this -> output -> set_header('Content-Type: text/html; charset=UTF-8');
		}
		function index(){
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
			
			
			
			$data['mainmenu_home'] = "mainmenu_home_act";
			$data['mainmenu_list'] = "mainmenu_list";
			$data['css'] = "/css/user/top.css";
			$data['document_root'] = $_SERVER['DOCUMENT_ROOT'];
			$data['page_title'] = "信頼できる全国の車検ショップの車検、お得情報をご紹介！それがとことん車検ナビ";
			
			$this->smarty_parser->parse("ci:user/index.tpl", $data);
		}
		
		
		
	}
	
?>