<?php
	class Shop_detailmodel extends Model {
		var $table = "t_shop_service";
		var $rows;
		var $column_nm_arr = array("sd_page_keyword01","sd_page_keyword02","sd_page_keyword03","sd_page_keyword04","sd_page_keyword05","sd_page_keyword06","sd_page_keyword07","sd_page_keyword08","sd_page_keyword09");
		
		
		function Shop_detailmodel(){
			parent::Model();
			
		}
		
		function do_select($table = "",$where_arr = array()){
			$where_dat = array();
			$where = "";
			$select_culum = "";
			if($table == ""){
				return array();
			}else{
				
				/* ------------------------------------------------------------------ */
				/* where条件設定
				--------------------------------------------------------------------- */
				if($where_arr != null){
					foreach($where_arr as $key => $val){
						$where_dat[] = $key." = '".$val."' ";
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
#				$this->db->select("*");
				
				/* ------------------------------------------------------------------ */
				/* 抽出するテーブルごとの設定
				--------------------------------------------------------------------- */
				switch($table){
					case "t_shop_adoption":
						$this->db->order_by("opt_lastupdate asc,opt_no ASC");
						$select_culum = "opt_name,opt_price,opt_contents";
					break;
					case "t_shop_service":
						$this->db->order_by("srv_lastupdate ASC,srv_no ASC");
						$select_culum = "srv_name,srv_contents";
					break;
					case "t_shop_planbase":
						$this->db->order_by("pb_reccomend_flag desc,pb_last_update ASC,pb_no ASC");
						$select_culum = "pb_no,pb_plan_nm,pb_chatch_copy,pb_plan_contents,pb_itm01_state,pb_itm02_state,";
						$select_culum .= "pb_itm03_state,pb_itm04_state,pb_itm05_state,pb_itm06_state,pb_itm07_state,pb_itm08_state";
					break;
					case "t_shop_plandiscount pds":
						$this->db->join("t_shop_dscdetail dd","pds.db_no = dd.db_no and pds.dd_level_no = dd.dd_level_no");
						$this->db->order_by("pds.db_no asc,pds.dd_level_no asc");
						$select_culum = "pds.db_no,dd_dsc_price";
					break;
					case "t_shop_base":
						// 地図座標追加 2009/01/07 mori
						// タイトル・キーワード・ディスクリプション追加 2009/08/24 mori
						$select_culum = "sid,sd_account,sd_tel_srvc,sd_mail_srvc,sd_company_nm,sd_company_tel,sd_company_zip,sd_company_address,";
						$select_culum .= "sd_shop_nm,sd_shop_tel,sd_shop_zip,sd_shop_address,sd_shop_access,sd_shop_url,sd_shop_open,sd_shop_off,sd_shop_rank,";
						$select_culum .= "sd_card,sd_catch_copy,sd_intro,sd_small_img01,sd_small_img02,sd_shop_memo,todoufuken_nm,region_nm,sd_point,";
						$select_culum .= "sd_page_title,sd_page_description,sd_page_keyword01,sd_page_keyword02,sd_page_keyword03,sd_page_keyword04,sd_page_keyword05,sd_page_keyword06,sd_page_keyword07,sd_page_keyword08,sd_page_keyword09";
						
						/*パンくずリスト構造化対応 2017/10/02 ST*/
						$select_culum .= ",m_todoufuken.todoufuken_id,sub_region_id,sub_region_nm,region_id ";
						/*パンくずリスト構造化対応 2017/10/02 ED*/
						
						# SEO対策修正（都道府県・地域の抽出追加）2008/10/30 mori
						$this->db->join("m_region","t_shop_base.sd_open_chiku = m_region.region_id","left");
						$this->db->join("m_todoufuken","m_region.todoufuken_id = m_todoufuken.todoufuken_id","left");
					break;
					case "t_shop_dscbase db":

						$this->db->join("t_shop_dscdetail dd","db.db_no = dd.db_no","left");
						$this->db->join("t_shop_planbase pb","db.sid = pb.sid","left");
						$this->db->join("t_shop_plandiscount pdc","pb.pb_no = pdc.pb_no and dd.db_no = pdc.db_no and dd.dd_level_no = pdc.dd_level_no","left");
						$this->db->where("pdsc_no IS NOT NULL");
						$this->db->order_by("db.db_sort asc,dd.dd_level_no asc");
						$select_culum = "db_menu_nm,db_menu_detail,dd_dsc_nm,dd_dsc_price";
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
				$this->rows = $rows;
			
				if($rows > 0){
					$result = $query->result_array();
					return $result;
				}else{
					return array();
				}
				
			}
		}
		
		
		
		function list_display($list = array()){
			$return_data = array();
			if($list != null){
				for($y=0;$y<count($list);$y++){
					$return_data[$y] = $list[$y];
					$result = $this->do_select("t_shop_plandetail",array("pb_no" => $list[$y]['pb_no']));
					if($result != null){
						$sum = 0;
						$pd_weight_tax = 0;
						$pd_insrnc_price = 0;
						$pd_itm01_price = 0;
						$pd_stamp_price = 0;
						$sum_base = 0;
						$sumitem_list = array("pd_weight_tax","pd_insrnc_price","pd_stamp_price","pd_itm01_price","pd_itm02_price","pd_itm03_price","pd_itm04_price","pd_itm05_price","pd_itm06_price","pd_itm07_price","pd_itm08_price");
						for($i=0;$i<count($result);$i++){
							foreach($result[$i] as $key => $val){
								if(array_search($key,$sumitem_list) !== false){
								
									if($key == "pd_itm01_price"){
										if($list[$y]['pb_itm01_state'] == "t" and $val != ""){
											$sum = $val + $sum;
											$sum_base += $val;
										}
									}elseif($key == "pd_itm02_price"){
										if($list[$y]['pb_itm02_state'] == "t" and $val != ""){
											$sum = $val + $sum;
											$sum_base += $val;
										}
									}elseif($key == "pd_itm03_price"){
										if($list[$y]['pb_itm03_state'] == "t" and $val != ""){
											$sum = $val + $sum;
											$sum_base += $val;
										}
									}elseif($key == "pd_itm04_price"){
										if($list[$y]['pb_itm04_state'] == "t" and $val != ""){
											$sum = $val + $sum;
											$sum_base += $val;
										}
									}elseif($key == "pd_itm05_price"){
										if($list[$y]['pb_itm05_state'] == "t" and $val != ""){
											$sum = $val + $sum;
											$sum_base += $val;
										}
									}elseif($key == "pd_itm06_price"){
										if($list[$y]['pb_itm06_state'] == "t" and $val != ""){
											$sum = $val + $sum;
											$sum_base += $val;
										}
									}elseif($key == "pd_itm07_price"){
										if($list[$y]['pb_itm07_state'] == "t" and $val != ""){
											$sum = $val + $sum;
											$sum_base += $val;
										}
									}elseif($key == "pd_itm08_price"){
										if($list[$y]['pb_itm08_state'] == "t" and $val != ""){
											$sum = $val + $sum;
											$sum_base += $val;
										}
									}else{
										if($val != ""){
											$sum = $val + $sum;
										}
										if($key == "pd_weight_tax" and $val != ""){
											$pd_weight_tax = $val;
										}elseif($key == "pd_insrnc_price" and $val != ""){
											$pd_insrnc_price = $val;
										}elseif($key == "pd_stamp_price" and $val != ""){
											$pd_stamp_price = $val;
										}
									}
									
									
								}
							
							}
							
							if($result[$i]['pd_car_kind'] == 0){
								$return_data[$y]['mini_price_sum'] = $sum;
								$return_data[$y]['mini_pd_weight_tax'] = $pd_weight_tax;
								$return_data[$y]['mini_pd_insrnc_price'] = $pd_insrnc_price;
								$return_data[$y]['mini_pd_stamp_price'] = $pd_stamp_price;
								$return_data[$y]['mini_base_price'] = $sum_base;
							}elseif($result[$i]['pd_car_kind'] == 1){
								$return_data[$y]['small_price_sum'] = $sum;
								$return_data[$y]['small_pd_weight_tax'] = $pd_weight_tax;
								$return_data[$y]['small_pd_insrnc_price'] = $pd_insrnc_price;
								$return_data[$y]['small_pd_stamp_price'] = $pd_stamp_price;
								$return_data[$y]['small_base_price'] = $sum_base;
							}elseif($result[$i]['pd_car_kind'] == 2){
								$return_data[$y]['middle_price_sum'] = $sum;
								$return_data[$y]['middle_pd_weight_tax'] = $pd_weight_tax;
								$return_data[$y]['middle_pd_insrnc_price'] = $pd_insrnc_price;
								$return_data[$y]['middle_pd_stamp_price'] = $pd_stamp_price;
								$return_data[$y]['middle_base_price'] = $sum_base;
							}elseif($result[$i]['pd_car_kind'] == 3){
								$return_data[$y]['large_price_sum'] = $sum;
								$return_data[$y]['large_pd_weight_tax'] = $pd_weight_tax;
								$return_data[$y]['large_pd_insrnc_price'] = $pd_insrnc_price;
								$return_data[$y]['large_pd_stamp_price'] = $pd_stamp_price;
								$return_data[$y]['large_base_price'] = $sum_base;
							}elseif($result[$i]['pd_car_kind'] == 4){
								$return_data[$y]['great_price_sum'] = $sum;
								$return_data[$y]['great_pd_weight_tax'] = $pd_weight_tax;
								$return_data[$y]['great_pd_insrnc_price'] = $pd_insrnc_price;
								$return_data[$y]['great_pd_stamp_price'] = $pd_stamp_price;
								$return_data[$y]['great_base_price'] = $sum_base;
							}
							$sum = 0;
							$pd_weight_tax = 0;
							$pd_insrnc_price = 0;
							$pd_itm01_price = 0;
							$pd_stamp_price = 0;
							$sum_base = 0;
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
								$return_data[$y]['mini_disc'] = $disc_price * -1;
							}
							
							if(isset($return_data[$y]['small_price_sum'])){
								$return_data[$y]['small_disc_price'] = $return_data[$y]['small_price_sum'] - $disc_price;
								$return_data[$y]['small_disc'] = $disc_price * -1;
							}
							
							if(isset($return_data[$y]['middle_price_sum'])){
								$return_data[$y]['middle_disc_price'] = $return_data[$y]['middle_price_sum'] - $disc_price;
								$return_data[$y]['middle_disc'] = $disc_price * -1;
							}
							
							if(isset($return_data[$y]['large_price_sum'])){
								$return_data[$y]['large_disc_price'] = $return_data[$y]['large_price_sum'] - $disc_price;
								$return_data[$y]['large_disc'] = $disc_price * -1;
							}
							
							if(isset($return_data[$y]['great_price_sum'])){
								$return_data[$y]['great_disc_price'] = $return_data[$y]['great_price_sum'] - $disc_price;
								$return_data[$y]['great_disc'] = $disc_price * -1;
							}
							
						}
						
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
		
		function image_resize($img_w,$img_h,$fixed_w){
			$flag = false;
			
			if($img_w != "" and $img_h != "" and $fixed_w != ""){
				if($img_w > $fixed_w){
					$img_data['height'] = ceil($img_h * ($fixed_w / $img_w));
					$img_data['width'] = $fixed_w;
					$flag = true;
				}else{
					$img_data['height'] = $img_h;
					$img_data['width'] = $img_w;
				}
			}
			
			if($flag){
				return $img_data;
			}else{
				return array();
			}
		}
		
		
		// 複数行登録防止処理追加 2009/03/11 mori
		function access_count($sid = ""){
			if($sid != ""){
				// 初期設定
				$now_y = date("Y");
				$now_m = date("m");
				$result = "";
				
				// トランザクションスタート
				$this->db->trans_start();
				
				// アクセステーブルよりデータを取得
				$query = $this->db->query("select ud_access_cnt from t_manager_usedata where sid = '".$sid."' and ud_year = '".$now_y."' and ud_month = '".$now_m."' order by ud_no asc for update");
				$rows = $query->num_rows();
				
				if($rows == 1){
					$result = $query->result_array();
					
					// アクセスカウントアップデート
					$this->db->query("update t_manager_usedata set ud_access_cnt = '".($result[0]['ud_access_cnt'] + 1)."' where sid = '".$sid."' and ud_year = '".$now_y."' and ud_month = '".$now_m."'");
					
				}elseif($rows == 0){
					// アクセスカウントテーブルインサート
					$this->db->query("insert into t_manager_usedata (sid,ud_year,ud_month,ud_conversion_cnt,ud_access_cnt,ud_coupon_cnt) values ('".$sid."','".$now_y."','".$now_m."',0,1,0)");
					
				}else{
					// 誤って複数行登録されてしまった時の処理
					$result = $query->result_array();
					$this->db->query("update t_manager_usedata set ud_access_cnt = '".($result[0]['ud_access_cnt'] + 1)."' where sid = '".$sid."' and ud_year = '".$now_y."' and ud_month = '".$now_m."'");
					
				}
				
				// トランザクションエンド
				$this->db->trans_complete();
				
			}
		}
		
		// キーワード作成　2009/08/24　added by mori
		function makeKeywords($data = array()){
			$needComma = false;
			$keywords = "";
			
			if(!empty($this->column_nm_arr) and !empty($data)){
				for($i=0;$i<count($this->column_nm_arr);$i++){
					if($data[$this->column_nm_arr[$i]] != ""){
						if($needComma){
							$keywords .= ",";
						}
						$keywords .= $data[$this->column_nm_arr[$i]];
						
					}
					
					$needComma = true;
				}
				
				
			}
			
			if($keywords != ""){
				$keywords .= ",とことん車検ナビ";
			}
			
			return $keywords;
		}
		
		// ページタイトル作成　2009/08/24　added by mori
		function makeTitle($page_title = ""){
			
			if($page_title != ""){
				
				$page_title .= "｜とことん車検ナビ";
				
			}
			
			return $page_title;
			
		}
		
	}
	
?>