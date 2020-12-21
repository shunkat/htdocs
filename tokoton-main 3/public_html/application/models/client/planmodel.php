<?
	class Planmodel extends Model {
		var $table = "t_shop_planbase";
		var $table2 = "t_shop_plandetail";
		var $table3 = "t_shop_plandiscount";
		var $rows;
		
		function Planmodel(){
			parent::Model();
			
		}
		
		
		function do_insert($list = array()){
			/* ------------------------------------------------------------------ */
			/* DB登録項目整形
			--------------------------------------------------------------------- */
			$atrlist['sid'] = $list['sid'];
			$atrlist['pb_plan_nm'] = $list['pb_plan_nm'];
			$atrlist['pb_chatch_copy'] = $list['pb_chatch_copy'];
			$atrlist['pb_plan_contents'] = $list['pb_plan_contents'];
			
			$atrlist['pb_itm01_state'] = $list['pb_itm01_state'];
			$atrlist['pb_itm02_state'] = $list['pb_itm02_state'];
			$atrlist['pb_itm03_state'] = $list['pb_itm03_state'];
			$atrlist['pb_itm04_state'] = $list['pb_itm04_state'];
			$atrlist['pb_itm05_state'] = $list['pb_itm05_state'];
			$atrlist['pb_itm06_state'] = $list['pb_itm06_state'];
			$atrlist['pb_itm07_state'] = $list['pb_itm07_state'];
			$atrlist['pb_itm08_state'] = $list['pb_itm08_state'];
			$atrlist['pb_last_update'] = "now()";
			/* ------------------------------------------------------------------ */
			/* Query実行　　　t_shop_planbase
			--------------------------------------------------------------------- */
			$this->db->trans_begin();
			$result = $this -> db -> insert($this ->table,$atrlist);
			/* ------------------------------------------------------------------ */
			
			
			if($result){
				$pb_no = $this->db->insert_id();
				$result2_flag = true;
				$head_list = array("mini_"=>"0","small_" => "1","middle_" => "2","large_" => "3","great_" => "4");
				$cnt = 0;
				foreach($head_list as $key => $val){
					$atrlist2[$cnt]['sid'] = $list['sid'];
					$atrlist2[$cnt]['pd_car_kind'] = $val;
					$atrlist2[$cnt]['pb_no'] = $pb_no;
					$atrlist2[$cnt]['pd_weight_tax'] = (isset($list[$key.'weight_tax']) and $list[$key.'weight_tax'] != "") ? $list[$key.'weight_tax'] : null;
					$atrlist2[$cnt]['pd_insrnc_price'] = (isset($list[$key.'insrnc_price']) and $list[$key.'insrnc_price'] != "") ? $list[$key.'insrnc_price'] : null;
					
					
					// 印紙代の適用
					
					if($key == "middle_"){												// 中型自動車＝印紙代（小型）
						$atrlist2[$cnt]['pd_stamp_price'] = (isset($list['small_stamp_price']) and $list['small_stamp_price'] != "") ? $list['small_stamp_price'] : null;
					}elseif($key == "large_" or $key == "great_"){						// 大型自動車＝印紙代（普通）
						$atrlist2[$cnt]['pd_stamp_price'] = (isset($list['middle_stamp_price']) and $list['middle_stamp_price'] != "") ? $list['middle_stamp_price'] : null;
					}else{																// 軽自動車 or 小型自動車
						$atrlist2[$cnt]['pd_stamp_price'] = (isset($list[$key.'stamp_price']) and $list[$key.'stamp_price'] != "") ? $list[$key.'stamp_price'] : null;
					}
					
#					if($key == "large_" or $key == "great_"){
#						$atrlist2[$cnt]['pd_stamp_price'] = (isset($list['middle_stamp_price']) and $list['middle_stamp_price'] != "") ? $list['middle_stamp_price'] : null;
#					}else{
#						$atrlist2[$cnt]['pd_stamp_price'] = (isset($list[$key.'stamp_price']) and $list[$key.'stamp_price'] != "") ? $list[$key.'stamp_price'] : null;
#					}
					
					$atrlist2[$cnt]['pd_itm01_price'] = (isset($list[$key.'itm01_price']) and $list[$key.'itm01_price'] != "") ? $list[$key.'itm01_price']: null;
					$atrlist2[$cnt]['pd_itm02_price'] = (isset($list[$key.'itm02_price']) and $list[$key.'itm02_price'] != "") ? $list[$key.'itm02_price'] : null;
					$atrlist2[$cnt]['pd_itm03_price'] = (isset($list[$key.'itm03_price']) and $list[$key.'itm03_price'] != "") ? $list[$key.'itm03_price'] : null;
					$atrlist2[$cnt]['pd_itm04_price'] = (isset($list[$key.'itm04_price']) and $list[$key.'itm04_price'] != "") ? $list[$key.'itm04_price'] : null;
					$atrlist2[$cnt]['pd_itm05_price'] = (isset($list[$key.'itm05_price']) and $list[$key.'itm05_price'] != "") ? $list[$key.'itm05_price'] : null;
					$atrlist2[$cnt]['pd_itm06_price'] = (isset($list[$key.'itm06_price']) and $list[$key.'itm06_price'] != "") ? $list[$key.'itm06_price'] : null;
					$atrlist2[$cnt]['pd_itm07_price'] = (isset($list[$key.'itm07_price']) and $list[$key.'itm07_price'] != "") ? $list[$key.'itm07_price'] : null;
					$atrlist2[$cnt]['pd_itm08_price'] = (isset($list[$key.'itm08_price']) and $list[$key.'itm08_price'] != "") ? $list[$key.'itm08_price'] : null;
					
					$cnt++;
				}
				
				for($i=0;$i<count($atrlist2);$i++){
					/* ------------------------------------------------------------------ */
					/* Query実行　　　t_shop_plandetail
					--------------------------------------------------------------------- */
					$result2 = $this -> db -> insert($this ->table2,$atrlist2[$i]);
					/* ------------------------------------------------------------------ */
					if(!$result2){
						$result2_flag = false;
					}
				}
				if($result2_flag){
					$result3_flag = true;
					
					if(isset($list['disc_data'])){
						for($i=0;$i<count($list['disc_data']);$i++){
							list($atrlist3[$i]['db_no'],$atrlist3[$i]['dd_level_no']) = explode("-",$list['disc_data'][$i]);
							$atrlist3[$i]['pb_no'] = $pb_no;
						}
						
						for($i=0;$i<count($atrlist3);$i++){
							$result3 = $this -> db -> insert($this ->table3,$atrlist3[$i]);
							
							if(!$result3){
								$result3_flag = false;
							}
						}
						if($result3_flag){
							$this->db->trans_commit();
							// t_shop_base の情報更新日をupdate する
							if(isset($atrlist['sid']) and $atrlist['sid'] != ""){
								$this->db->query("update t_shop_base set sd_last_update = now() where sid = '".$atrlist['sid']."'");
							}
							return true;
						}else{
							$this->db->trans_rollback();
							return false;
						}
					}else{
						$this->db->trans_commit();
						// t_shop_base の情報更新日をupdate する
						if(isset($atrlist['sid']) and $atrlist['sid'] != ""){
							$this->db->query("update t_shop_base set sd_last_update = now() where sid = '".$atrlist['sid']."'");
						}
						return true;
					}
				}else{
					$this->db->trans_rollback();
					return false;
				}
				
			}else{
				$this->db->trans_rollback();
				return false;
			}
			
		}
		
		function do_delete($where_list = array()){
			if($where_list != null){
			/* ------------------------------------------------------------------ */
			/* Query実行
			--------------------------------------------------------------------- */
				$result = $this -> db -> delete($this -> table,$where_list);
			}else{
				$result = false;
			}
			if($result){
				return true;
			}else{
				return false;
			}
			
		}
		
		function do_select($table = "",$where_arr = array()){
			$where_dat = array();
			$where = "";
			/* ------------------------------------------------------------------ */
			/* where条件設定
			--------------------------------------------------------------------- */
			if($where_arr != null){
				foreach($where_arr as $key => $val){
					$where_dat[] = $key." = ".$val;
				}
				if($where_dat != null){
					$where = implode("and ",$where_dat);
				}
			}
			if($where != "" and $table != ""){
				$this->db->where($where);
				$this->db->from($table);
			}
			/* ------------------------------------------------------------------ */
			$this->db->select("*");
			
			if($table == "t_shop_dscbase db"){
				$this->db->join("t_shop_dscdetail dd","db.db_no = dd.db_no");
#				$this->db->order_by("db.db_no asc,dd_no asc");
				$this->db->order_by("db.db_sort asc");
			}elseif($table == "t_shop_planbase pb"){
				$this->db->join("t_shop_plandetail pd","pb.pb_no = pd.pb_no");
				$this->db->order_by("pb.pb_no asc,pd_car_kind asc");
			}elseif($table == "t_shop_plandiscount pds"){
				$this->db->join("t_shop_dscdetail dd","pds.db_no = dd.db_no and pds.dd_level_no = dd.dd_level_no");
				$this->db->order_by("pds.db_no asc,pds.dd_level_no asc");
			}elseif($table == "t_shop_planbase"){
				$this->db->order_by("pb_last_update asc,pb_no asc");
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
		
		function do_update($list = array()){
			/* ------------------------------------------------------------------ */
			/* DB登録項目整形
			--------------------------------------------------------------------- */
			$atrlist['sid'] = $list['sid'];
			$atrlist['pb_plan_nm'] = $list['pb_plan_nm'];
			$atrlist['pb_chatch_copy'] = $list['pb_chatch_copy'];
			$atrlist['pb_plan_contents'] = $list['pb_plan_contents'];
			
			$atrlist['pb_itm01_state'] = $list['pb_itm01_state'];
			$atrlist['pb_itm02_state'] = $list['pb_itm02_state'];
			$atrlist['pb_itm03_state'] = $list['pb_itm03_state'];
			$atrlist['pb_itm04_state'] = $list['pb_itm04_state'];
			$atrlist['pb_itm05_state'] = $list['pb_itm05_state'];
			$atrlist['pb_itm06_state'] = $list['pb_itm06_state'];
			$atrlist['pb_itm07_state'] = $list['pb_itm07_state'];
			$atrlist['pb_itm08_state'] = $list['pb_itm08_state'];
			$atrlist['pb_last_update'] = "now()";
			
			if($list['pb_no'] != ""){
				$pb_no = $list['pb_no'];
				/* ------------------------------------------------------------------ */
				/* Query実行　　　t_shop_planbase
				--------------------------------------------------------------------- */
				$this->db->trans_begin();
				$this->db->where("pb_no = '".$pb_no."'");
				$result = $this -> db -> update($this ->table,$atrlist);
				/* ------------------------------------------------------------------ */
				if($result){
					$result2_flag = true;
					$head_list = array("mini_"=>"0","small_" => "1","middle_" => "2","large_" => "3","great_" => "4");
					$cnt = 0;
					foreach($head_list as $key => $val){
						$atrlist2[$cnt]['sid'] = $list['sid'];
						$atrlist2[$cnt]['pd_car_kind'] = $val;
						$atrlist2[$cnt]['pb_no'] = $pb_no;
						$atrlist2[$cnt]['pd_weight_tax'] = (isset($list[$key.'weight_tax']) and $list[$key.'weight_tax'] != "") ? $list[$key.'weight_tax'] : null;
						$atrlist2[$cnt]['pd_insrnc_price'] = (isset($list[$key.'insrnc_price']) and $list[$key.'insrnc_price'] != "") ? $list[$key.'insrnc_price'] : null;
						
						// 印紙代の適用
						
						if($key == "middle_"){												// 中型自動車＝印紙代（小型）
							$atrlist2[$cnt]['pd_stamp_price'] = (isset($list['small_stamp_price']) and $list['small_stamp_price'] != "") ? $list['small_stamp_price'] : null;
						}elseif($key == "large_" or $key == "great_"){						// 大型自動車＝印紙代（普通）
							$atrlist2[$cnt]['pd_stamp_price'] = (isset($list['middle_stamp_price']) and $list['middle_stamp_price'] != "") ? $list['middle_stamp_price'] : null;
						}else{																// 軽自動車 or 小型自動車
							$atrlist2[$cnt]['pd_stamp_price'] = (isset($list[$key.'stamp_price']) and $list[$key.'stamp_price'] != "") ? $list[$key.'stamp_price'] : null;
						}
						
						
#						if($key == "large_" or $key == "great_"){
#							$atrlist2[$cnt]['pd_stamp_price'] = (isset($list['middle_stamp_price']) and $list['middle_stamp_price'] != "") ? $list['middle_stamp_price'] : null;
#						}else{
#							$atrlist2[$cnt]['pd_stamp_price'] = (isset($list[$key.'stamp_price']) and $list[$key.'stamp_price'] != "") ? $list[$key.'stamp_price'] : null;
#						}
						
						
						$atrlist2[$cnt]['pd_itm01_price'] = (isset($list[$key.'itm01_price']) and $list[$key.'itm01_price'] != "") ? $list[$key.'itm01_price']: null;
						$atrlist2[$cnt]['pd_itm02_price'] = (isset($list[$key.'itm02_price']) and $list[$key.'itm02_price'] != "") ? $list[$key.'itm02_price'] : null;
						$atrlist2[$cnt]['pd_itm03_price'] = (isset($list[$key.'itm03_price']) and $list[$key.'itm03_price'] != "") ? $list[$key.'itm03_price'] : null;
						$atrlist2[$cnt]['pd_itm04_price'] = (isset($list[$key.'itm04_price']) and $list[$key.'itm04_price'] != "") ? $list[$key.'itm04_price'] : null;
						$atrlist2[$cnt]['pd_itm05_price'] = (isset($list[$key.'itm05_price']) and $list[$key.'itm05_price'] != "") ? $list[$key.'itm05_price'] : null;
						$atrlist2[$cnt]['pd_itm06_price'] = (isset($list[$key.'itm06_price']) and $list[$key.'itm06_price'] != "") ? $list[$key.'itm06_price'] : null;
						$atrlist2[$cnt]['pd_itm07_price'] = (isset($list[$key.'itm07_price']) and $list[$key.'itm07_price'] != "") ? $list[$key.'itm07_price'] : null;
						$atrlist2[$cnt]['pd_itm08_price'] = (isset($list[$key.'itm08_price']) and $list[$key.'itm08_price'] != "") ? $list[$key.'itm08_price'] : null;
					
						$cnt++;
					}
					
					$pd_car_kind = "";
					for($i=0;$i<count($atrlist2);$i++){
						$pd_car_kind = $atrlist2[$i]['pd_car_kind'];
						/* ------------------------------------------------------------------ */
						/* Query実行　　　t_shop_plandetail
						--------------------------------------------------------------------- */
						$this->db->where("pb_no = '$pb_no' and pd_car_kind = '$pd_car_kind'");
						$result2 = $this -> db -> update($this ->table2,$atrlist2[$i]);
						/* ------------------------------------------------------------------ */
						if(!$result2){
							$result2_flag = false;
						}
					}
					
					if($result2_flag){
						$delete_result = $this -> db -> delete($this -> table3,array("pb_no" => $pb_no));
						
						if($delete_result){
							$result3_flag = true;
							if(isset($list['disc_data'])){
								for($i=0;$i<count($list['disc_data']);$i++){
									list($atrlist3[$i]['db_no'],$atrlist3[$i]['dd_level_no']) = explode("-",$list['disc_data'][$i]);
									$atrlist3[$i]['pb_no'] = $pb_no;
								}
								for($i=0;$i<count($atrlist3);$i++){
									$result3 = $this -> db -> insert($this ->table3,$atrlist3[$i]);
									
#									print $this->db->last_query();
#									print "<br>";
									
									if(!$result3){
										$result3_flag = false;
									}
								}
#								exit;
								if($result3_flag){
									$this->db->trans_commit();
									// t_shop_base の情報更新日をupdate する
									if(isset($atrlist['sid']) and $atrlist['sid'] != ""){
										$this->db->query("update t_shop_base set sd_last_update = now() where sid = '".$atrlist['sid']."'");
									}
									return true;
								}else{
									$this->db->trans_rollback();
									return false;
								}
							}else{
								$this->db->trans_commit();
								// t_shop_base の情報更新日をupdate する
								if(isset($atrlist['sid']) and $atrlist['sid'] != ""){
									$this->db->query("update t_shop_base set sd_last_update = now() where sid = '".$atrlist['sid']."'");
								}
								return true;
							}
						}else{
							$this->db->trans_rollback();
							return false;
						}
					}else{
						$this->db->trans_rollback();
						return false;
					}
				}else{
					$this->db->trans_rollback();
					return false;
				}
			}else{
				return false;
			}











#			if($list['sid'] != ""){
#				$this -> db -> where("sid = '".$list['sid']."'");
#				
#				/* ------------------------------------------------------------------ */
#				/* Query実行
#				--------------------------------------------------------------------- */
#				$result = $this -> db -> update($this -> table,$atrlist);
#				/* ------------------------------------------------------------------ */
#			}else{
#				$result = false;
#			}
#			if($result){
#				return true;
#			}else{
#				return false;
#			}
		}
		
		
		function disp_data($list = array()){
			if($list != null){
				$data['pb_no'] = $list[0]['pb_no'];
				$data['pb_plan_nm'] = $list[0]['pb_plan_nm'];
				$data['pb_chatch_copy'] = $list[0]['pb_chatch_copy'];
				$data['pb_plan_contents'] = $list[0]['pb_plan_contents'];
				$data['pb_itm01_state'] = $list[0]['pb_itm01_state'];
				$data['pb_itm02_state'] = $list[0]['pb_itm02_state'];
				$data['pb_itm03_state'] = $list[0]['pb_itm03_state'];
				$data['pb_itm04_state'] = $list[0]['pb_itm04_state'];
				$data['pb_itm05_state'] = $list[0]['pb_itm05_state'];
				$data['pb_itm06_state'] = $list[0]['pb_itm06_state'];
				$data['pb_itm07_state'] = $list[0]['pb_itm07_state'];
				$data['pb_itm08_state'] = $list[0]['pb_itm08_state'];
				$data['pb_reccomend_flag'] = $list[0]['pb_no'];
				
				$head_list = array("0" => "mini_","1" => "small_","2" => "middle_","3" => "large_","4" => "great_");
				for($i=0;$i<count($list);$i++){
					$data[$head_list[$list[$i]['pd_car_kind']]."weight_tax"] = $list[$i]['pd_weight_tax'];
					$data[$head_list[$list[$i]['pd_car_kind']]."insrnc_price"] = $list[$i]['pd_insrnc_price'];
					
					// 印紙代（軽自動車＝印紙代（軽）　小型自動車＝印紙代（小型）　中型自動車＝印紙代（小型）　大型自動車＝印紙代（普通）　大型自動車＝印紙代（普通））
					if($head_list[$list[$i]['pd_car_kind']] == "middle_"){
						$data["small_stamp_price"] = $list[$i]['pd_stamp_price'];
					}elseif($head_list[$list[$i]['pd_car_kind']] == "large_" or $head_list[$list[$i]['pd_car_kind']] == "great_"){
						$data["middle_stamp_price"] = $list[$i]['pd_stamp_price'];
					}else{
						$data[$head_list[$list[$i]['pd_car_kind']]."stamp_price"] = $list[$i]['pd_stamp_price'];
					}
					
					
					$data[$head_list[$list[$i]['pd_car_kind']]."itm01_price"] = $list[$i]['pd_itm01_price'];
					$data[$head_list[$list[$i]['pd_car_kind']]."itm02_price"] = $list[$i]['pd_itm02_price'];
					$data[$head_list[$list[$i]['pd_car_kind']]."itm03_price"] = $list[$i]['pd_itm03_price'];
					$data[$head_list[$list[$i]['pd_car_kind']]."itm04_price"] = $list[$i]['pd_itm04_price'];
					$data[$head_list[$list[$i]['pd_car_kind']]."itm05_price"] = $list[$i]['pd_itm05_price'];
					$data[$head_list[$list[$i]['pd_car_kind']]."itm06_price"] = $list[$i]['pd_itm06_price'];
					$data[$head_list[$list[$i]['pd_car_kind']]."itm07_price"] = $list[$i]['pd_itm07_price'];
					$data[$head_list[$list[$i]['pd_car_kind']]."itm08_price"] = $list[$i]['pd_itm08_price'];
				}
				
				$result = $this->do_select("t_shop_plandiscount",array("pb_no" => $data['pb_no']));
				
				if($result != null){
					for($i=0;$i<count($result);$i++){
						$data['disc_data'][] = $result[$i]['db_no']."-".$result[$i]['dd_level_no'];
					}
				}
				return $data;
			}else{
				return array();
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
		
		function do_update_recommend($list = array()){
			if($list != null and isset($list['sid']) and isset($list['pb_no'])){
				$sid = $list['sid'];
				$atrlist['pb_reccomend_flag'] = "f";
				
				$this->db->trans_begin();
				$this->db->where("sid = '".$sid."'");
				$result = $this -> db -> update($this ->table,$atrlist);
				
				if($result){
					$atrlist2['pb_reccomend_flag'] = "t";
					$this->db->where("pb_no = '".$list['pb_no']."'");
					$result2 = $this -> db -> update($this ->table,$atrlist2);
					
					if($result2){
						$this->db->trans_commit();
						return true;
					}else{
						$this->db->trans_rollback();
						return false;
					}
				}else{
					$this->db->trans_rollback();
					return false;
				}
			}else{
				return false;
			}
			
		}
		
		
		function select_shop_data($table = "",$where_arr = array()){
			if($table == ""){
				return array();
			}else{
				$where_dat = array();
				$where = "";
				/* ------------------------------------------------------------------ */
				/* where条件設定
				--------------------------------------------------------------------- */
				if($where_arr != null){
					foreach($where_arr as $key => $val){
						$where_dat[] = $key." = ".$val;
					}
					if($where_dat != null){
						$where = implode("and ",$where_dat);
					}
				}
				if($where != ""){
					$this->db->where($where);
				}
				/* ------------------------------------------------------------------ */
				$this->db->select("*");
				$this->db->from($table);
				/* ------------------------------------------------------------------ */
				/* Query実行
				--------------------------------------------------------------------- */
				$query = $this->db->get();
				$rows = $query->num_rows();
				
				if($rows > 0){
					$result = $query->result_array();
					return $result;
				}else{
					return array();
				}
			}
		}
		
	}
	
?>