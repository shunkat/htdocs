<?
	class Plan_detailmodel extends Model {
#		var $table = "t_shop_mailformat";
		var $rows;
		
		function Plan_detailmodel(){
			parent::Model();
			
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
			if($where != ""){
				$this->db->where($where);
			}
			if($table == "t_shop_planbase"){
				$this->db->order_by("pb_last_update asc,pb_no asc");
			}elseif($table == "t_shop_plandiscount pds"){
				$this->db->join("t_shop_dscdetail dd","pds.db_no = dd.db_no and pds.dd_level_no = dd.dd_level_no");
				$this->db->order_by("pds.db_no asc,pds.dd_level_no asc");
			}
			$this->db->select("*");
			$this->db->from($table);
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
		
	}
	
?>