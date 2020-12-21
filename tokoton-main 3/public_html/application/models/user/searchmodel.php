<?
	class Searchmodel extends Model {
		var $rows;
		var $SubRegionCntAry;
		
		function Searchmodel(){
			parent::Model();
			
		}
		
		function do_search($table = "",$list = array(),$select_culum = "",$offset = 0,$url = ""){
			// 初期設定
			$nglist = array("start","order","keyword","option","type", "sb_region_id"); // where 条件自動設定NGリスト
			$or_where_arr = array();
			$or_where_buf = array();
			$where_dat = array();
			$where_arr = array();
			$where = "";

			/*search/配下の掲載店舗数変更 2019/07/16 ST*/
			$per_page = 50;
			/*search/配下の掲載店舗数変更 2017/05/11 ST*/
			//$per_page = 20;
			//$per_page = 10;
			/*search/配下の掲載店舗数変更 2017/05/11 ED*/
			/*search/配下の掲載店舗数変更 2019/07/16 ED*/

			$result_arr['search_result'] = "";
			$result_arr['pager'] = "";
			$result_arr['total_search_rows'] = "";
			$result_arr['loop_start'] = "";
			$result_arr['loop_end'] = "";
			
			if($list['order'] == ""){
				$this->db->order_by("sd_shop_rank is null,sd_shop_rank DESC,sd_last_update DESC");
			}elseif($list['order'] == "icon"){
				$this->db->order_by("icon_count is null,icon_count DESC,sd_last_update DESC");
			}elseif($list['order'] == "shop"){
				$this->db->order_by("sd_shop_nm asc,sd_last_update DESC");
			}else{
				$this->db->order_by("sd_shop_rank is null,sd_shop_rank DESC,sd_last_update DESC");
			}
			
			if(isset($list) and $list != null){
				foreach($list as $key => $val){
					if(array_search($key,$nglist) === false){
						if($val != ""){
							$where_arr[$key] = $val;
						}
					}else{
						if($key == "option"){
							for($i=0;$i<strlen($val);$i+=2){
								$or_where_arr[] = substr($val,$i,2);
							}
						}elseif($key == "keyword"){
							if($val != ""){
								$val = urldecode($val);
								$val = str_replace(" ","　",$val);
								$keyword_arr = explode("　",$val);
								for($i=0;$i<count($keyword_arr);$i++){
									$this->db->like("search_data",strtolower(mb_convert_kana($keyword_arr[$i],"KVa","UTF-8")));
#									$where_arr[] = "search_data like '%".strtolower(mb_convert_kana($keyword_arr[$i],"KVa","UTF-8"))."%' ";
								}
								
							}
						}
					}
				}
				
				if(isset($or_where_arr) and $or_where_arr != null){
					for($i=0;$i<count($or_where_arr);$i++){
						$or_where_buf[] = "shop_option_no = '".(int)$or_where_arr[$i]."' ";
					}
					if(isset($or_where_buf) and $or_where_buf != null){
						$where_arr['shop_option_no'] = "( ".implode("or ",$or_where_buf)." )";
					}
					
				}
			}
			
			/* ------------------------------------------------------------------ */
			/* where条件設定
			--------------------------------------------------------------------- */
			if($where_arr != null){
				foreach($where_arr as $key => $val){
					if($key != "shop_option_no"){
						if($val != ""){
							$where_dat[] = $key." = '".$val."' ";
						}
					}else{
						$where_dat[] = $val;
					}
				}
				if($where_dat != null){
					$where = implode("and ",$where_dat);
				}
			}
			if(isset($list['type']) and $list['type'] == ""){
				if($where != ""){
					$where .= "and sd_exam_state = '2' ";
				}else{
					$where = "sd_exam_state = '2' ";
				}
			}else{
				if($where != ""){
#					$where .= "and (sd_exam_state = '2' or sd_exam_state = '1' or sd_exam_state = '3' or sd_exam_state = '4') ";
					$where .= "and (sd_exam_state is not null) ";
				}else{
#					$where = "(sd_exam_state = '2' or sd_exam_state = '1' or sd_exam_state = '3' or sd_exam_state = '4') ";
					$where = "(sd_exam_state is not null) ";
				}
			}
			if(isset($where) and $where != ""){
				$this->db->where($where);
			}
			
		
		
			if($table != ""){
				$this->db->from($table);
			}
			/* ------------------------------------------------------------------ */
#			$this->db->join("v_search vs","vs.sid = ssp.sid","left");
#			$this->db->join("t_shop_shopopsion ssp","vs.sid = ssp.sid","left");
#			$this->db->join("t_search_cache sc","vs.sid = sc.sid","left");
# #			$this->db->join("(select sid,count(sid) as icon_count from t_shop_shopopsion group by sid ) as icon","sb.sid = icon.sid","left");
# #			
# #			$this->db->join("m_region mr ","sb.sd_open_chiku = mr.region_id","left");
# # #			$this->db->join("m_todoufuken mt","mr.todoufuken_id = mt.todoufuken_id","left");




			if($list['order'] == "icon"){
				$this->db->group_by($select_culum.",icon_count");
			}else{
				$this->db->group_by($select_culum);
			}
			
			
			if($select_culum != ""){
				$this->db->select($select_culum);
			}else{
				$this->db->select("*");
			}
			
			/* ------------------------------------------------------------------ */
			/* Query実行
			--------------------------------------------------------------------- */
			$query = $this->db->get($table,$per_page,$offset);
#			$query = $this->db->get_where($table,$where,$per_page,$offset);
			$rows = $query->num_rows();
			$this->rows = $rows;
		
			if($rows > 0){
					$result = $query->result_array();
				
				
				$result_arr['search_result'] = $result;
				
#				print $loop_start;
				/* ------------------------------------------------------------------ */
			}
			
			/* ------------------------------------------------------------------ */
			/* 総検索数の取得
			--------------------------------------------------------------------- */
			$this->db->from($table);
#			$this->db->join("m_region mr ","sb.sd_open_chiku = mr.region_id","left");
#			$this->db->join("t_shop_shopopsion ssp","sb.sid = ssp.sid","left");
#			$this->db->join("t_search_cache sc","sb.sid = sc.sid","left");
			$this->db->group_by($select_culum);
			$this->db->select($select_culum);
			$this->db->where($where);
			
			if(isset($keyword_arr) and $keyword_arr != null){
				for($i=0;$i<count($keyword_arr);$i++){
					$this->db->like("search_data",strtolower(mb_convert_kana($keyword_arr[$i],"KVa","UTF-8")));
				}
			}
			
			$all_query = $this->db->get();
			
			$total_search_rows = $all_query->num_rows;
			
			$result_arr['total_search_rows'] = $total_search_rows;
			
			/* ------------------------------------------------------------------ */
			/* ページャーの取得
			--------------------------------------------------------------------- */
			$pager = $this->pager($total_search_rows,$per_page,$url,$offset);
			$result_arr['pager'] = $pager;
			$pager_sp = $this->pager_sp($total_search_rows,$per_page,$url,$offset);
			$result_arr['pager_sp'] = $pager_sp;
			
			/* ------------------------------------------------------------------ */
			/* 現在表示されている件数目を取得
			--------------------------------------------------------------------- */
			// 表示の最後
			$loop_end = $per_page + $offset;
			if($loop_end > $total_search_rows){
				$loop_end = $total_search_rows;
			}
			// 表示の最初
			$loop_start = $offset;
			if($total_search_rows > 0){
				$loop_start = $offset + 1;
			}else{
				$loop_start = $offset;
			}
			
			
			
#			$loop_start = $loop_end - $per_page;
#			if($loop_start < 0){
#				if($total_search_rows > 0){
#					$loop_start = 1;
#				}else{
#					$loop_start = 0;
#				}
#			}
			
			
			$result_arr['loop_start'] = $loop_start;
			$result_arr['loop_end'] = $loop_end;
			
			
#			#PRINT_R
#			print "<pre>";
#			print_r($result_arr);
#			print "</pre>";
			return $result_arr;
			
		}
		
		
		
		
		
		function do_select($table = "",$where_arr = array(),$select_culum = ""){
#			$nglist = array("start","order","keyword","option","todoufuken_id");						// where 条件自動設定NGリスト
#			$or_where_arr = array();
#			$or_where_buf = array();
			$where_dat = array();
			$where = "";
			if($table == ""){
				return array();
			}else{
#				if(isset($list) and $list != null){
#					foreach($list as $key => $val){
#						if(array_search($key,$nglist) === false){
#							if($val != ""){
#								$where_arr[$key] = $val;
#							}
#						}else{
#							if($key == "option"){
#								for($i=0;$i<strlen($val);$i+=2){
#									$or_where_arr[] = substr($val,$i,2);
#								}
#							}
#							
#							
#						}
#					}
#					
#					if(isset($or_where_arr) and $or_where_arr != null){
#						for($i=0;$i<count($or_where_arr);$i++){
#							$or_where_buf[] = "shop_option_no = '".(int)$or_where_arr[$i]."' ";
#						}
#						if(isset($or_where_buf) and $or_where_buf != null){
#							$where_arr['shop_option_no'] = "( ".implode("or ",$or_where_buf)." )";
#						}
#						
#					}
#				}
				
				/* ------------------------------------------------------------------ */
				/* where条件設定
				--------------------------------------------------------------------- */
				if($where_arr != null){
					foreach($where_arr as $key => $val){
#						if($key != "shop_option_no"){
							if($val != ""){
								$where_dat[] = $key." = '".$val."' ";
							}
#						}else{
#							$where_dat[] = $val;
#						}
					}
					if($where_dat != null){
						$where = implode("and ",$where_dat);
					}
				}
				if($where != ""){
					$this->db->where($where);
				}
			
				if($table != ""){
					$this->db->from($table);
				}
				/* ------------------------------------------------------------------ */
				
				/* ------------------------------------------------------------------ */
				/* 抽出するテーブルごとの設定
				--------------------------------------------------------------------- */
				switch($table){
#					case "t_shop_base sb":
#						$this->db->join("m_region mr ","sb.sd_open_chiku = mr.region_id","left");
#						$this->db->join("t_shop_shopopsion ssp","sb.sid = ssp.sid","left");
#						$this->db->group_by($select_culum);
#						
#					break;
					case "t_shop_service";
						$this->db->order_by("srv_lastupdate DESC");
					break;
					case "t_shop_plandiscount pds":
						$this->db->join("t_shop_dscdetail dd","pds.db_no = dd.db_no and pds.dd_level_no = dd.dd_level_no");
						$this->db->order_by("pds.db_no asc,pds.dd_level_no asc");
					break;
					case "m_region mr":
						$this->db->join("m_todoufuken mt","mr.todoufuken_id = mt.todoufuken_id");
						$this->db->order_by("region_id ASC");
					break;
					default:
					break;
				}
				
				if($select_culum != ""){
					$this->db->select($select_culum);
				}else{
					$this->db->select("*");
				}
			
				/* ------------------------------------------------------------------ */
				/* Query実行
				--------------------------------------------------------------------- */
				$query = $this->db->get();
				$rows = $query->num_rows();
#				$this->rows = $rows;
			
				if($rows > 0){
					$result = $query->result_array();
					return $result;
				}else{
					return array();
				}
				
			}
		}
		
		
		
		function display_data($list = array()){
			$file_type = array("jpg","gif");
			
			if($list == null){
				return array();
			}else{
				for($i=0;$i<count($list);$i++){
					$display_data_arr[$i] = array();
					$intro_img = "";
					$star = "";
					$str_length = "";
					
					// 抽出済みデータを配列に格納
					$display_data_arr[$i]['shop_data'] = $list[$i];

					// 長いアクセス情報のときは省略する。
					$str_length = mb_strlen($list[$i]['sd_shop_access'], "UTF-8");
					if($str_length > 67){
						$display_data_arr[$i]['shop_data']['sd_shop_access'] = mb_substr($list[$i]['sd_shop_access'],0,67,"UTF-8")."...<a href=\"/link_shop/".$list[$i]['sid']."/search/\">( 続きはコチラ ) </a>";
					}
					
					// 長い紹介文のときは省略する。
					$str_length = mb_strlen($list[$i]['sd_intro'], "UTF-8");
					if($str_length > 31){
						$display_data_arr[$i]['shop_data']['sd_intro'] = mb_substr($list[$i]['sd_intro'],0,31,"UTF-8")."...<a href=\"/link_shop/".$list[$i]['sid']."/search/\">( 続きはコチラ ) </a>";
					}
					
					
					// ミシュランクの星の設定
					if($list[$i]['sd_shop_rank'] != null){
						for($y=0;$y<$list[$i]['sd_shop_rank'];$y++){
							$star .= "★";
						}
					}
					$display_data_arr[$i]['shop_data']['rank_star'] = $star;
					
					// 店舗オプションの抽出
					$option_select_column = "shop_option_no";
					$option_result = $this->do_select("t_shop_shopopsion",array("sid" => $list[$i]['sid']),$option_select_column);
					if($option_result != null){
						foreach($option_result as $no => $arr_val){
							foreach($arr_val as $key => $val){
								$display_data_arr[$i]['shop_data']['icon'.$val] = "t";
							}
						}
					}
					
					// 店舗画像大の抽出.
					for($y=0;$y<count($file_type);$y++){
						if(file_exists($_SERVER['DOCUMENT_ROOT']."/photo/".$list[$i]['sid']."/intro1.".$file_type[$y])){
							$intro_img = "/photo/".$list[$i]['sid']."/intro1.".$file_type[$y];
						}
					}
					$display_data_arr[$i]['shop_data']['shop_img'] = $intro_img;
					
					
					// キャンペーン抽出
					$camp_select_column = "cam_name,cam_start_date,cam_end_date,cam_detail";
					$campaign_result = $this->do_select("t_shop_campaign",array("sid" =>$list[$i]['sid'],"cam_open" => "t"),$camp_select_column);
					if($campaign_result != null and count($campaign_result) == 1){
						$display_data_arr[$i]['campagin'] = $campaign_result[0];
					}
					
					// クーポン抽出
					$coupon_select_column = "*";
					$coupon_result = $this->do_select("t_shop_coupon",array("sid" =>$list[$i]['sid'],"cou_open_state" => "t"),$coupon_select_column);
					if($coupon_result != null and count($coupon_result) == 1){
						$display_data_arr[$i]['shop_data']['coupon'] = "t";
					}
					
					// サービス抽出
					$service_select_column = "srv_name";
					$service_result = $this->do_select("t_shop_service",array("sid" =>$list[$i]['sid']),$service_select_column);
					if($service_result != null and count($service_result)){
						$display_data_arr[$i]['service'] = $service_result;
					}
					
					// おすすめプラン
					$planbase_select_column = "pb_no,pb_plan_nm,pb_itm01_state,pb_itm02_state,pb_itm03_state,pb_itm04_state,pb_itm05_state,pb_itm06_state,pb_itm07_state,pb_itm08_state";
					$planbase_result = $this->do_select("t_shop_planbase",array("sid" =>$list[$i]['sid'],"pb_reccomend_flag" => "t"),$planbase_select_column);
					
					if($planbase_result != null and count($planbase_result) == 1){
						$display_data_arr[$i]['plan_base'] = $planbase_result[0];
						$plan_display = $this->list_display($planbase_result);
						
						#PRINT_R
#						print "<pre>";
#						print_r($plan_display);
#						print "</pre>";
						
						if($plan_display != null and count($plan_display) == 1){
							$display_data_arr[$i]['plan_detail'] = $plan_display[0];
							//最大割引
							$maxdiscountprice = 0;
							foreach($plan_display as $pd){
								$mindp = min($pd["mini_disc_price"], $pd["small_disc_price"], $pd["middle_disc_price"],$pd["large_disc_price"], $pd["great_disc_price"]);
								if(($maxdiscountprice) == 0 or ($maxdiscountprice > $mindp))$maxdiscountprice = $mindp;
							}
							$display_data_arr[$i]['plan_detail']["maxdiscountprice"] = $maxdiscountprice;
						}
						
					}
					
				}
				
			}
			
			return $display_data_arr;
			
		}
		
		
		function list_display($list = array()){
			$return_data = array();
			if($list != null){
				for($y=0;$y<count($list);$y++){
					$return_data[$y] = $list[$y];
					$result = $this->do_select("t_shop_plandetail",array("pb_no" => $list[$y]['pb_no']));
				
					if($result != null){
						$sum = 0;
						$sumitem_list = array("pd_weight_tax","pd_insrnc_price","pd_stamp_price","pd_itm01_price","pd_itm02_price","pd_itm03_price","pd_itm04_price","pd_itm05_price","pd_itm06_price","pd_itm07_price","pd_itm08_price");
						for($i=0;$i<count($result);$i++){
							foreach($result[$i] as $key => $val){
								if(array_search($key,$sumitem_list) !== false){
									if($key == "pd_itm01_price"){
										if($list[$y]['pb_itm01_state'] == "t" and $val != ""){
											$sum = $val + $sum;
										}
									}elseif($key == "pd_itm02_price"){
										if($list[$y]['pb_itm02_state'] == "t" and $val != ""){
											$sum = $val + $sum;
										}
									}elseif($key == "pd_itm03_price"){
										if($list[$y]['pb_itm03_state'] == "t" and $val != ""){
											$sum = $val + $sum;
										}
									}elseif($key == "pd_itm04_price"){
										if($list[$y]['pb_itm04_state'] == "t" and $val != ""){
											$sum = $val + $sum;
										}
									}elseif($key == "pd_itm05_price"){
										if($list[$y]['pb_itm05_state'] == "t" and $val != ""){
											$sum = $val + $sum;
										}
									}elseif($key == "pd_itm06_price"){
										if($list[$y]['pb_itm06_state'] == "t" and $val != ""){
											$sum = $val + $sum;
										}
									}elseif($key == "pd_itm07_price"){
										if($list[$y]['pb_itm07_state'] == "t" and $val != ""){
											$sum = $val + $sum;
										}
									}elseif($key == "pd_itm08_price"){
										if($list[$y]['pb_itm08_state'] == "t" and $val != ""){
											$sum = $val + $sum;
										}
									}else{
										if($val != ""){
											$sum = $val + $sum;
										}
									}
									
									
								}
							
							}
							
							if($result[$i]['pd_car_kind'] == 0){
								$return_data[$y]['mini_price_sum'] = $sum;
							}elseif($result[$i]['pd_car_kind'] == 1){
								$return_data[$y]['small_price_sum'] = $sum;
							}elseif($result[$i]['pd_car_kind'] == 2){
								$return_data[$y]['middle_price_sum'] = $sum;
							}elseif($result[$i]['pd_car_kind'] == 3){
								$return_data[$y]['large_price_sum'] = $sum;
							}elseif($result[$i]['pd_car_kind'] == 4){
								$return_data[$y]['great_price_sum'] = $sum;
							}
							$sum = 0;
						}
					}
					
					$result2 = $this->do_select("t_shop_plandiscount pds",array("pb_no" => $list[$y]['pb_no']));
					
					if($result2 != null){
						$buf_price = 0;
						$disc_price = 0;
						for($i=0;$i<count($result2);$i++){
							if($i == 0){
								$buf_price = $result2[$i]['dd_dsc_price'];
							}else{
								if($result2[$i]['db_no'] == $result2[($i - 1)]['db_no']){
									if($buf_price < $result2[$i]['dd_dsc_price']){
										$buf_price = $result2[$i]['dd_dsc_price'];
									}
								}else{
									$disc_price = $buf_price + $disc_price;
									$buf_price = $result2[$i]['dd_dsc_price'];
								}
							}
							if($i == count($result2) - 1){
								$disc_price = $buf_price + $disc_price;
							}
							
						}
						
						if(isset($disc_price)){
							if(isset($return_data[$y]['mini_price_sum'])){
								$return_data[$y]['mini_disc_price'] = $return_data[$y]['mini_price_sum'] - $disc_price;
							}
							
							if(isset($return_data[$y]['small_price_sum'])){
								$return_data[$y]['small_disc_price'] = $return_data[$y]['small_price_sum'] - $disc_price;
							}
							
							if(isset($return_data[$y]['middle_price_sum'])){
								$return_data[$y]['middle_disc_price'] = $return_data[$y]['middle_price_sum'] - $disc_price;
							}
							
							if(isset($return_data[$y]['large_price_sum'])){
								$return_data[$y]['large_disc_price'] = $return_data[$y]['large_price_sum'] - $disc_price;
							}
							
							if(isset($return_data[$y]['great_price_sum'])){
								$return_data[$y]['great_disc_price'] = $return_data[$y]['great_price_sum'] - $disc_price;
							}
							
						}
						
#						$return_data[$y]['mini_disc_price'] = $return_data[$y]['mini_price_sum'] - $disc_price;
#						$return_data[$y]['small_disc_price'] = $return_data[$y]['small_price_sum'] - $disc_price;
#						$return_data[$y]['middle_disc_price'] = $return_data[$y]['middle_price_sum'] - $disc_price;
#						$return_data[$y]['large_disc_price'] = $return_data[$y]['large_price_sum'] - $disc_price;
#						$return_data[$y]['great_disc_price'] = $return_data[$y]['great_price_sum'] - $disc_price;
						
					}else{
					
						if(isset($return_data[$y]['mini_price_sum'])){
							$return_data[$y]['mini_disc_price'] = $return_data[$y]['mini_price_sum'];
						}
						
						if(isset($return_data[$y]['small_price_sum'])){
							$return_data[$y]['small_disc_price'] = $return_data[$y]['small_price_sum'];
						}
						
						if(isset($return_data[$y]['middle_price_sum'])){
							$return_data[$y]['middle_disc_price'] = $return_data[$y]['middle_price_sum'];
						}
						
						if(isset($return_data[$y]['large_price_sum'])){
							$return_data[$y]['large_disc_price'] = $return_data[$y]['large_price_sum'];
						}
						
						if(isset($return_data[$y]['great_price_sum'])){
							$return_data[$y]['great_disc_price'] = $return_data[$y]['great_price_sum'];
						}
					
#						$return_data[$y]['mini_disc_price'] = $return_data[$y]['mini_price_sum'];
#						$return_data[$y]['small_disc_price'] = $return_data[$y]['small_price_sum'];
#						$return_data[$y]['middle_disc_price'] = $return_data[$y]['middle_price_sum'];
#						$return_data[$y]['large_disc_price'] = $return_data[$y]['large_price_sum'];
#						$return_data[$y]['great_disc_price'] = $return_data[$y]['great_price_sum'];
					}
					
				}
				
				
				if($return_data != null){
					return $return_data;
				}else{
					return array();
				}
				
			}else{
				return array();
			}
			
		}
		
		
		/* ------------------------------------------------------------------ */
		/* Pager
		--------------------------------------------------------------------- */
		/*search/配下の掲載店舗数変更 2019/07/16 ST*/
		function pager($rows = 0,$per_page = 50,$url = "",$offset = 0){
		/*search/配下の掲載店舗数変更 2017/05/11 ST*/
		//function pager($rows = 0,$per_page = 20,$url = "",$offset = 0){
		//function pager($rows = 0,$per_page = 10,$url = "",$offset = 0){
		/*search/配下の掲載店舗数変更 2017/05/11 ED*/
		/*search/配下の掲載店舗数変更 2019/07/16 ED*/

			$this->load->library('pagination');
			
			$config['base_url'] = $url;
			$config['total_rows'] = $rows;
			$config['per_page'] = $per_page;
			$config['num_links'] = 4;
			$config['cur_page'] = $offset;
			
			$config['first_link'] = "";
			$config['last_link'] = "";
			
			$config['prev_link'] = "&lt;&lt; 前の".$per_page."件";
			$config['next_link'] = " 次の".$per_page."件 &gt;&gt;";
			$config['cur_tag_open'] = "";
			$config['cur_tag_close'] = "";
			
			$config['num_tag_open'] = "&nbsp;/&nbsp;";
			$config['num_tag_close'] = "&nbsp;/&nbsp;";
			
			$this->pagination->initialize($config);
			
			$result = $this->pagination->create_links("result");
			
			if($result == ""){
				$result = "1";
			}
			return $result;
			
		}
		/*search/配下の掲載店舗数変更 2019/07/16 ST*/
		function pager_sp($rows = 0,$per_page = 50,$url = "",$offset = 0){
		/*search/配下の掲載店舗数変更 2017/05/11 ST*/
		//function pager_sp($rows = 0,$per_page = 20,$url = "",$offset = 0){
		//function pager_sp($rows = 0,$per_page = 10,$url = "",$offset = 0){
		/*search/配下の掲載店舗数変更 2017/05/11 ED*/
		/*search/配下の掲載店舗数変更 2019/07/16 ED*/


			$config['center_msg'] = ($offset+1);
			if($rows == 0)$config['center_msg'] = 0;
			if ($rows <= ($offset + $per_page)){
				$config['center_msg'] .= "～".$rows.'件表示/'.number_format($rows).'件';
			} else {
				$config['center_msg'] .= "～".($offset + $per_page).'件表示/'.number_format($rows).'件';
			}
			$config['left_link'] = "";
			$config['right_link'] = "";
			if ($offset != 0) $config['left_link'] = $url."start_".($offset - $per_page);
			if ($rows > ($offset + $per_page))$config['right_link'] = $url."start_".($offset + $per_page);

			return $config;
			
		}
		
		function region_pulldown($list = array(),$region_arr = array()){
			$pulldown_arr = array();
			// 政令指定都市の件数取得
			$this->SubRegionCntAry = array();
			$result_arr['pulldown_arr'] = array();
			$result_arr['todoufuken'] = "";
			
			if($list != null){
				for($i=0;$i<count($list);$i++){
					$result_arr['todoufuken'] = $list[$i]['todoufuken_nm'];

					if(array_key_exists($list[$i]['region_id'],$region_arr)){
					   $pulldown_arr[$list[$i]['sub_region_id']][$list[$i]['sub_region_nm']][$list[$i]['region_id']] = $list[$i]['region_nm'];
						$pulldown_arr[$list[$i]['sub_region_id']][$list[$i]['sub_region_nm']][$list[$i]['region_id']] .= "（".$region_arr[$list[$i]['region_id']]."件）";
						if(!array_key_exists($list[$i]['sub_region_id'], $this->SubRegionCntAry)) {
							$this->SubRegionCntAry[$list[$i]['sub_region_id']] = 0;
						}
						$this->SubRegionCntAry[$list[$i]['sub_region_id']] += $region_arr[$list[$i]['region_id']];
					}# else{
#						$pulldown_arr[$list[$i]['sub_region_nm']][$list[$i]['region_id']] .= "（0件）";
#						unset($pulldown_arr[$list[$i]['sub_region_nm']][$list[$i]['region_id']]);
#					}
					
				}
			}
			if(isset($pulldown_arr) and $pulldown_arr != null){
				$result_arr['pulldown_arr'] = $pulldown_arr;
			}
			
			return $result_arr;
			
		}
		
		
		function get_region_array($where_list = array()){
			/* ------------------------------------------------------------------ */
			/* 初期化
			--------------------------------------------------------------------- */
			$region_arr = array();
			$where = "";
			
			if($where_list != null){
				/* ------------------------------------------------------------------ */
				/* where 句の設定
				--------------------------------------------------------------------- */
				
				foreach($where_list as $key => $val){
					if($val != ""){
						$where_dat[] = $key." = '".$val."' ";
					}
				}
				
				if(isset($where_dat) and $where_dat != null){
					$where = implode("and ",$where_dat);
				}
				
				if($where != ""){
					$where .= "and sd_exam_state = '2' ";
				}else{
					$where = "sd_exam_state = '2' ";
				}
				
				$this->db->where($where);
				
				/* ------------------------------------------------------------------ */
				/* その他DB抽出設定
				--------------------------------------------------------------------- */
				$this->db->select("region_id,region_nm,count(region_id) as region_shop_sum");				// 抽出カラム
				$this->db->from("t_shop_base sb");															// 対象テーブル
				$this->db->join("m_region mr","sb.sd_open_chiku = mr.region_id","left");					// 結合設定
				$this->db->group_by("region_id,region_nm");
				
				$query = $this->db->get();
				$rows = $query->num_rows();
				
				if($rows > 0){
					$result = $query->result_array();
					
					if($result != null){
						for($i=0;$i<count($result);$i++){
							$region_arr[$result[$i]['region_id']] = $result[$i]['region_shop_sum'];
						}
					}
				}
			}
			
			return $region_arr;
			
		}
		
		
		function sort_link($parms = "",$url = ""){
			$sort_link = "";
			
			if($parms == "icon"){
#				$sort_link = "<a href=\"".$url."order_nomal/\">標準</a> / <a href=\"".$url."order_shop/\">店名順</a> / アイコンが多い順";
				$sort_link = "<a href=\"".$url."order_nomal/\">標準</a> / アイコンが多い順";
			}elseif($parms == "shop"){
#				$sort_link = "<a href=\"".$url."order_nomal/\">標準</a> / 店名順 / <a href=\"".$url."order_icon/\">アイコンが多い順</a>";
				$sort_link = "<a href=\"".$url."order_nomal/\">標準</a> / <a href=\"".$url."order_icon/\">アイコンが多い順</a>";
			}else{
#				$sort_link = "標準 / <a href=\"".$url."order_shop/\">店名順</a> / <a href=\"".$url."order_icon/\">アイコンが多い順</a>";
				$sort_link = "標準 / <a href=\"".$url."order_icon/\">アイコンが多い順</a>";
			}
			
			return $sort_link;
		}
		
		
		// 市区町村名の取得
		function getRegionNm($region_id = ""){
			
			if($region_id != ""){
				
				$this->db->select("region_nm");
				$this->db->from("m_region");
				$this->db->where("region_id",$region_id);
				
				$query = $this->db->get();
				$rows = $query->num_rows;
				
				if($rows == 1){
					$result = $query->result_array();
					return $result[0]['region_nm'];
				}
			}
			
			return false;
			
		} // end of function getRegionNm

		// 政令指定都市名の取得
		function getSubRegionNm($sub_region_id = "", $region_id = ""){

			$this->db->select("sub_region_nm");
			$this->db->from("m_region");

			if($sub_region_id != ""){
				$this->db->where("sub_region_id",$sub_region_id);
			} else if($region_id != ""){
				$this->db->where("region_id", $region_id);
			}

			$query = $this->db->get();
			$rows = $query->num_rows;
			
			/*SEO対策 [PUBLIC_TOKOTON-5] 不正なURLはエラーページ表示  20170228 ST*/
			/*データ取得できない場合はfalseを返却*/
			if($rows > 0){
				$result = $query->result_array();
				return $result[0]['sub_region_nm'];
			}else {
				return false;
			}
			
			//以前の処理をコメントアウト
			/*
			$result = $query->result_array();
			return $result[0]['sub_region_nm'];
			*/
			/*SEO対策 [PUBLIC_TOKOTON-5] 不正なURLはエラーページ表示  20170228 ED*/
			
		} // end of function getSubRegionNm
		
		
		function getOptionNm($opt_no = ""){
			
			// オプション名配列
			$list[] = array("1","とことん24取扱い");
			$list[] = array("2","整備保証付");
			$list[] = array("3","夜間受付ＯＫ");
			$list[] = array("4","土日対応ＯＫ");
			$list[] = array("5","代車あり");
			$list[] = array("6","引取・納車ＯＫ");
			$list[] = array("7","キャッシュレスＯＫ");
			$list[] = array("8","クレジットカード利用ＯＫ");
			$list[] = array("9","グルメプレゼント");
			$list[] = array("10","グッズプレゼント");
			$list[] = array("11","ガソリンプレゼント");
			$list[] = array("12","抽選でプレゼント");
			$list[] = array("13","オイル交換サービス");
			$list[] = array("14","車検時限定割引サービス");
			$list[] = array("15","即日完了ＯＫ");
			$list[] = array("16","ロードサービス取扱い");
			
			for($i=0;$i<count($list);$i++){
				$item_nm[$list[$i][0]] = $list[$i][1];
			}
			
			if($opt_no != ""){
				
				/*SEO対策 [PUBLIC_TOKOTON-5] 不正なURLはエラーページ表示  20170228 ST*/
				//不正な値はfalseで返す
				if(isset($item_nm[$opt_no]) == false){
					return false;
				}
				/*SEO対策 [PUBLIC_TOKOTON-5] 不正なURLはエラーページ表示  20170228 ED*/
					
				return $item_nm[$opt_no];
			}
			
			return false;
		}
		
		function getOptionNm_SP($opt_no = ""){
			
			// オプション名配列
			//$list[] = array("1","とことん24取扱い");
			$list[] = array("2","整備保証");
			$list[] = array("3","夜間受付");
			$list[] = array("4","土日対応");
			$list[] = array("5","代車あり");
			$list[] = array("6","引取納車");
			$list[] = array("7","分割払い");
			$list[] = array("8","クレジットカード");
			$list[] = array("9","グルメ");
			$list[] = array("10","グッズ");
			$list[] = array("11","ガソリン");
			$list[] = array("12","抽選");
			$list[] = array("13","オイル交換");
			$list[] = array("14","限定割引");
			$list[] = array("15","即日完了");
			$list[] = array("16","ロードサービス");
			
			for($i=0;$i<count($list);$i++){
				$item_nm[$list[$i][0]] = $list[$i][1];
			}
			
			if($opt_no != ""){
				return $item_nm[$opt_no];
			}
			
			return false;
		}
		
		function getPageTitle($todoufuken_nm = "",$region_nm = "",$opt_nm = "",$shikuchouson_nm = "", $page_num = ""){
			$title = "";

			if($todoufuken_nm != ""){
				if($region_nm != ""){
					$title = $shikuchouson_nm.$region_nm;
				} else if($shikuchouson_nm != "") {
					$title = $todoufuken_nm.$shikuchouson_nm;
				} else {
					$title = $todoufuken_nm;
				}
				$title .= "の格安車検".$page_num." | 車検費用が驚きの3万円台から！とことん車検ナビ";
			}elseif($opt_nm != ""){
				$title = $opt_nm."の格安車検".$page_num." | 車検費用が驚きの3万円台から！とことん車検ナビ";
			}else{
				$title = "格安車検".$page_num." | 車検費用が驚きの3万円台から！とことん車検ナビ";
			}

			return $title;
			
		}
		
		
		function getpref_array(){
			$prefarray = array();
			
			$prefarray["02"] = "北海道";
			$prefarray["03"] = "青森県";
			$prefarray["04"] = "岩手県";
			$prefarray["05"] = "宮城県";
			$prefarray["06"] = "秋田県";
			$prefarray["07"] = "山形県";
			$prefarray["08"] = "福島県";
			$prefarray["09"] = "東京都";
			$prefarray["10"] = "神奈川県";
			$prefarray["11"] = "埼玉県";
			$prefarray["12"] = "千葉県";
			$prefarray["13"] = "茨城県";
			$prefarray["14"] = "栃木県";
			$prefarray["15"] = "群馬県";
			$prefarray["16"] = "新潟県";
			$prefarray["17"] = "富山県";
			$prefarray["18"] = "石川県";
			$prefarray["19"] = "福井県";
			$prefarray["20"] = "山梨県";
			$prefarray["21"] = "長野県";
			$prefarray["22"] = "愛知県";
			$prefarray["23"] = "岐阜県";
			$prefarray["24"] = "静岡県";
			$prefarray["25"] = "三重県";
			$prefarray["26"] = "大阪府";
			$prefarray["27"] = "兵庫県";
			$prefarray["28"] = "京都府";
			$prefarray["29"] = "滋賀県";
			$prefarray["30"] = "奈良県";
			$prefarray["31"] = "和歌山県";
			$prefarray["32"] = "鳥取県";
			$prefarray["33"] = "島根県";
			$prefarray["34"] = "岡山県";
			$prefarray["35"] = "広島県";
			$prefarray["36"] = "山口県";
			$prefarray["37"] = "徳島県";
			$prefarray["38"] = "香川県";
			$prefarray["39"] = "愛媛県";
			$prefarray["40"] = "高知県";
			$prefarray["41"] = "福岡県";
			$prefarray["42"] = "佐賀県";
			$prefarray["43"] = "長崎県";
			$prefarray["44"] = "熊本県";
			$prefarray["45"] = "大分県";
			$prefarray["46"] = "宮崎県";
			$prefarray["47"] = "鹿児島県";
			$prefarray["48"] = "沖縄県";

			return $prefarray;
			
		}

		
		
	}
	
?>