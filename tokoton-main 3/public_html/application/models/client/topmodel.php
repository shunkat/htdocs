<?
	class Topmodel extends Model {
		var $table = "t_shop_service";
		var $rows;
		
		var $db_no_array = array();
		
		
		function Topmodel(){
			parent::Model();
			
		}
		
		
		function do_select($table = "",$where_arr = array()){
			$where_dat = array();
			$where = "";
			if($table == ""){
				return array();
			}else{
				
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
			
				if($table != ""){
					$this->db->from($table);
				}
				/* ------------------------------------------------------------------ */
				$this->db->select("*");
				if($table == "t_manager_info"){
					$this->db->order_by("info_up_date DESC,info_lastupdate DESC");
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
		
		
		function copyData($this_sid = "",$copy_sid = ""){
			$data = array();
			
			/******************************************
			* ◆◆◆コピーするテーブル◆◆◆
			* t_shop_base（ショップ基本情報）
			* t_shop_planbase（プラン基本情報）
			* t_shop_plandetail（プラン詳細）
			* t_shop_plandiscount（プラン利用割引）
			* t_shop_dscbase（割引基本情報）
			* t_shop_dscdetail（割引詳細）
			* t_shop_adoption（追加オプション）
			* t_shop_service（特典）
			* t_shop_campaign（キャンペーン）
			* t_shop_coupon（クーポン）
			*******************************************/
			
			
			if($this_sid != "" and $copy_sid != ""){
				
				// transaction start
				$this->db->trans_start();
				
				// t_shop_base copy
				$this->copyShopBase($this_sid,$copy_sid);
				
				// t_shop_campaign copy
				$this->copyShopCampaign($this_sid,$copy_sid);
				
				// t_shop_coupon copy
				$this->copyShopCoupon($this_sid,$copy_sid);
				
				// t_shop_service
				$this->copyShopService($this_sid,$copy_sid);
				
				// t_shop_adoption
				$this->copyShopAdoption($this_sid,$copy_sid);
				
				// t_shop_dscbase & t_shop_dscdetail
				$this->copyShopDiscount($this_sid,$copy_sid);
				
				// t_shop_planbase & t_shop_plandetail & t_shop_plandiscount
				$this->copyShopPlan($this_sid,$copy_sid);
				
				
				
				// transaction end
				$this->db->trans_complete();
				
				if($this->db->trans_status() === false){
					return false;
				}else{
					return true;
				}
			}
			
			
		}
		
		
		function copyShopBase($this_sid = "",$copy_sid = ""){
			/* t_shop_base select list */
			$shopbase_list[] = "sd_card";
			$shopbase_list[] = "di_itm01_nm";
			$shopbase_list[] = "di_itm02_nm";
			$shopbase_list[] = "di_itm03_nm";
			$shopbase_list[] = "di_itm04_nm";
			$shopbase_list[] = "di_itm05_nm";
			$shopbase_list[] = "di_itm06_nm";
			$shopbase_list[] = "di_itm07_nm";
			$shopbase_list[] = "di_itm08_nm";
			
			$select_column = implode(",",$shopbase_list);
			
			if($this_sid != "" and $copy_sid != ""){
				$this->db->select($select_column);
				$this->db->from("t_shop_base");
				$this->db->where("sid",$copy_sid);
				
				$query = $this->db->get();
				$rows = $query->num_rows;
				
				if($rows > 0){
					$result = $query->result_array();
					
					if(!empty($result) and count($result) == 1){
						$data = $result[0];
						
						// update
						$this->db->where("sid",$this_sid);
						$result = $this->db->update("t_shop_base",$data);
						
					}
				}
			}
		}
		
		function copyShopCampaign($this_sid = "",$copy_sid = ""){
			
			if($this_sid != "" and $copy_sid != ""){
				
				// campaign select
				$this->db->select("*");
				$this->db->from("t_shop_campaign");
				$this->db->where("sid",$copy_sid);
				
				$query = $this->db->get();
				$rows = $query->num_rows;
				
				if($rows > 0){
					$result = $query->result_array();
					
					if(!empty($result) and count($result) == 1){
						$data = $result[0];
						unset($data['cam_no']);
						$data['sid'] = $this_sid;
						$data['cam_lastupdate'] = "now()";
						
						
						if($this->isCampaignRegist($this_sid)){
							// update
							$this->db->where("sid",$this_sid);
							$this->db->update("t_shop_campaign",$data);
						}else{
							$this->db->insert("t_shop_campaign",$data);
						}
					}
					
				}
				
			}
			
		}
		
		
		function isCampaignRegist($this_sid = ""){
			
			if($this_sid != ""){
				$this->db->select("sid");
				$this->db->from("t_shop_campaign");
				$this->db->where("sid",$this_sid);
				
				$query = $this->db->get();
				$rows = $query->num_rows;
				
				if($rows > 0){
					return true;
				}
			}
			return false;
			
		}
		
		
		function copyShopCoupon($this_sid = "",$copy_sid = ""){
			
			if($this_sid != "" and $copy_sid != ""){
				// coupon select
				$this->db->select("*");
				$this->db->from("t_shop_coupon");
				$this->db->where("sid",$copy_sid);
				
				$query = $this->db->get();
				$rows = $query->num_rows;
				
				if($rows > 0){
					$result = $query->result_array();
					
					if(!empty($result) and count($result) == 1){
						$data = $result[0];
						unset($data['cou_no']);
						$data['sid'] = $this_sid;
						$data['cou_lastupdate'] = "now()";
						
						
						if($this->isCouponRegist($this_sid)){
							// update
							$this->db->where("sid",$this_sid);
							$this->db->update("t_shop_coupon",$data);
						}else{
							$this->db->insert("t_shop_coupon",$data);
						}
					}
					
				}
				
			}
			
		}
		
		
		function isCouponRegist($this_sid = ""){
			
			if($this_sid != ""){
				$this->db->select("sid");
				$this->db->from("t_shop_coupon");
				$this->db->where("sid",$this_sid);
				
				$query = $this->db->get();
				$rows = $query->num_rows;
				
				if($rows > 0){
					return true;
				}
			}
			return false;
			
		}
		
		
		function copyShopService($this_sid = "",$copy_sid = ""){
			
			if($this_sid != "" and $copy_sid != ""){
				// service select
				$this->db->select("*");
				$this->db->from("t_shop_service");
				$this->db->where("sid",$copy_sid);
				$this->db->order_by("srv_no asc");
				
				$query = $this->db->get();
				$rows = $query->num_rows;
				
				if($rows > 0){
					$result = $query->result_array();
					
					if(!empty($result) and count($result) > 0){
						
						if($this->isServiceRegist($this_sid)){
							$this->db->delete("t_shop_service",array("sid" => $this_sid));
						}
						
						for($i=0;$i<count($result);$i++){
							$data = $result[$i];
							unset($data['srv_no']);
							$data['sid'] = $this_sid;
							$data['srv_lastupdate'] = "now()";
							
							$this->db->insert("t_shop_service",$data);
							unset($data);
						}
						
					}
					
				}
				
			}
			
		}
		
		
		function isServiceRegist($this_sid = ""){
			
			if($this_sid != ""){
				$this->db->select("sid");
				$this->db->from("t_shop_service");
				$this->db->where("sid",$this_sid);
				
				$query = $this->db->get();
				$rows = $query->num_rows;
				
				if($rows > 0){
					return true;
				}
			}
			return false;
			
		}
		
		
		function copyShopAdoption($this_sid = "",$copy_sid = ""){
			
			if($this_sid != "" and $copy_sid != ""){
				// option select
				$this->db->select("*");
				$this->db->from("t_shop_adoption");
				$this->db->where("sid",$copy_sid);
				$this->db->order_by("opt_no asc");
				
				$query = $this->db->get();
				$rows = $query->num_rows;
				
				if($rows > 0){
					$result = $query->result_array();
					
					if(!empty($result) and count($result) > 0){
						
						if($this->isAdoptionRegist($this_sid)){
							$this->db->delete("t_shop_adoption",array("sid" => $this_sid));
						}
						
						for($i=0;$i<count($result);$i++){
							$data = $result[$i];
							unset($data['opt_no']);
							$data['sid'] = $this_sid;
							$data['opt_lastupdate'] = "now()";
							
							$this->db->insert("t_shop_adoption",$data);
							unset($data);
						}
						
					}
					
				}
				
			}
			
		}
		
		function isAdoptionRegist($this_sid = ""){
			
			if($this_sid != ""){
				$this->db->select("sid");
				$this->db->from("t_shop_adoption");
				$this->db->where("sid",$this_sid);
				
				$query = $this->db->get();
				$rows = $query->num_rows;
				
				if($rows > 0){
					return true;
				}
			}
			return false;
			
		}
		
		
		function copyShopDiscount($this_sid = "",$copy_sid = ""){
			
			if($this_sid != "" and $copy_sid != ""){
				// dscbase select
				$this->db->select("*");
				$this->db->from("t_shop_dscbase");
				$this->db->where("sid",$copy_sid);
				$this->db->order_by("db_no asc");
				
				$query = $this->db->get();
				$rows = $query->num_rows;
				
				if($rows > 0){
					$result = $query->result_array();
					
					if(!empty($result) and count($result) > 0){
						
						if($this->isDiscountRegist($this_sid)){
							$this->db->delete("t_shop_dscbase",array("sid" => $this_sid));
						}
						
						$this->registShopDiscount($result,$this_sid);
						
					}
					
				}
				
			}
			
		}
		
		
		function registShopDiscount($array = array(),$sid = ""){
			
			if(!empty($array) and $sid != ""){
				
				for($i=0;$i<count($array);$i++){
					$data = $array[$i];
					
					$db_no = $data['db_no'];
					unset($data['db_no']);
					$data['sid'] = $sid;
					$data['db_last_update'] = "now()";
					$data['db_sort'] = $this->getMaxSelect();
					
					$ins_result = $this->db->insert("t_shop_dscbase",$data);
					unset($data);
					
					if($ins_result){
						
						$new_db_no = $this->db->insert_id();
						
						$this->db_no_array[$db_no] = $new_db_no;
						
						$this->db->select("*");
						$this->db->from("t_shop_dscdetail");
						$this->db->where("db_no",$db_no);
						
						$query = $this->db->get();
						$rows = $query->num_rows;
						
						if($rows > 0){
							$detail_data = $query->result_array();
							
							for($y=0;$y<count($detail_data);$y++){
								$data = $detail_data[$y];
								
								unset($data['dd_no']);
								$data['db_no'] = $new_db_no;
								
								$this->db->insert("t_shop_dscdetail",$data);
								unset($data);
							}
							
						}
						
					}
					
				}
				
			}
			
		}
		
		
		function isDiscountRegist($this_sid = ""){
			
			if($this_sid != ""){
				$this->db->select("sid");
				$this->db->from("t_shop_dscbase");
				$this->db->where("sid",$this_sid);
				
				$query = $this->db->get();
				$rows = $query->num_rows;
				
				if($rows > 0){
					return true;
				}
			}
			return false;
			
		}
		
		
		function getMaxSelect(){
			
			$this->db->select_max("db_sort");
			$this->db->from("t_shop_dscbase");
			
			$query = $this->db->get();
			$rows = $query->num_rows;
			
			if($rows == 1){
				$result = $query->result_array();
				$data = $result[0]['db_sort'];
				
				return $data + 1;
			}else{
				return false;
			}
			
		}
		
		function copyShopPlan($this_sid = "",$copy_sid = ""){
			
			if($this_sid != "" and $copy_sid != ""){
				// すでにプランが登録されていたら削除
				if($this->isPlanRegist($this_sid)){
					$this->db->delete("t_shop_planbase",array("sid" => $this_sid));
				}
				
				// planbase select
				$this->db->select("*");
				$this->db->from("t_shop_planbase");
				$this->db->where("sid",$copy_sid);
				$this->db->order_by("pb_no asc");
				
				$query = $this->db->get();
				$rows = $query->num_rows;
				
				if($rows > 0){
					
					$base_data = $query->result_array();
					
					
					for($i=0;$i<count($base_data);$i++){
						
						$data = $base_data[$i];
						unset($data['pb_no']);
						$data['pb_last_update'] = "now()";
						$data['sid'] = $this_sid;
						
						$ins_result1 = $this->db->insert("t_shop_planbase",$data);
						unset($data);
						
						if($ins_result1){
							
							$new_pb_no = $this->db->insert_id();
							
							// t_shop_plandetail select
							$this->db->select("*");
							$this->db->from("t_shop_plandetail");
							$this->db->where("pb_no",$base_data[$i]['pb_no']);
							$this->db->order_by("pd_no asc");
							
							$detail_query = $this->db->get();
							$detail_rows = $detail_query->num_rows;
							
							if($detail_rows > 0){
								$detail_data = $detail_query->result_array();
								
								for($y=0;$y<count($detail_data);$y++){
									$data = $detail_data[$y];
									unset($data['pd_no']);
									$data['pb_no'] = $new_pb_no;
									$data['sid'] = $this_sid;
									
									// insert
									$this->db->insert("t_shop_plandetail",$data);
									unset($data);
									
								}
								
							}
							
						}
						
						// t_shop_plandiscount select
#						$this->db->select("*");
#						$this->db->from("t_shop_plandiscount");
#						$this->db->where("pb_no",$base_data[$i]['pb_no']);
#						$this->db->order_by("pdsc_no asc");
						
						$this->db->select("pb_no,db_no,dd_level_no");
						$this->db->from("t_shop_plandiscount");
						$this->db->where("pb_no",$base_data[$i]['pb_no']);
#									$this->db->order_by("pdsc_no asc");
						$this->db->order_by("db_no asc,dd_level_no asc");
						$this->db->group_by("pb_no,db_no,dd_level_no");
						
						$dsc_query = $this->db->get();
						$dsc_rows = $dsc_query->num_rows;
						
#									print $dsc_rows;
#									print $this->db->last_query();
#									exit;
						
						if($dsc_rows > 0){
							$dsc_data = $dsc_query->result_array();
							
							for($l=0;$l<count($dsc_data);$l++){
								$data = $dsc_data[$l];
								// データ整形
								unset($data['pdsc_no']);
								$data['pb_no'] = $new_pb_no;
								foreach($this->db_no_array as $key => $val){
									$data['db_no'] = str_replace($key,$val,$data['db_no']);
								}
								
								// insert
								$this->db->insert("t_shop_plandiscount",$data);
								unset($data);
							}
						}
						
						
					}
				}
				
			}
			
			// 配列を空に
			$this->db_no_array = array();
		}
		
		
		function isPlanRegist($this_sid = ""){
			
			if($this_sid != ""){
				$this->db->select("sid");
				$this->db->from("t_shop_planbase");
				$this->db->where("sid",$this_sid);
				
				$query = $this->db->get();
				$rows = $query->num_rows;
				
				if($rows > 0){
					return true;
				}
			}
			return false;
			
		}
		
	}
	
?>