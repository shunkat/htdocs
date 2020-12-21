<?
	class clientmodel extends Model {
		var $table = "t_shop_base";
		var $rows;
		
		function clientmodel(){
			parent::Model();
		}
		function do_select_csv($start_date = "",$end_date = "",$select_column = ""){
			/* Query実行
			--------------------------------------------------------------------- */
#			$sql = "select * from t_shop_base where sd_regist_date >= '".$start_date."' and sd_regist_date <= '".$end_date."' order by sid asc";
			
			// bk080819
#			$sql = "select sid,sd_account,sd_remind_mail,sd_customer_nm,sd_acc_state,sd_exam_state,sd_tel_srvc,sd_mail_srvc,sd_start_m,sd_end_m,";
#			$sql .= "sd_regist_date,sd_last_login,sd_memo,sd_estimate_mail,sd_info_mail,sd_company_nm,sd_tanto_nm,sd_tanto_kana,sd_company_tel,";
#			$sql .= "sd_company_zip,sd_company_address,sd_shop_nm,sd_open_chiku,sd_shop_tel,sd_shop_zip,sd_shop_address,sd_shop_access,sd_shop_url,";
#			$sql .= "sd_shop_open,sd_shop_off,sd_card,sd_shop_rank,sd_catch_copy,sd_intro,sd_small_img01,sd_small_img02,di_itm01_nm,di_itm02_nm,di_itm03_nm,";
#			$sql .= "di_itm04_nm,di_itm05_nm,di_itm06_nm,di_itm07_nm,di_itm08_nm,sd_regist_flag,sd_charge_table,sd_login_count ";
			
			
			// 20080819
#			$sql = "select sid,sd_account,sd_manage_a,sd_manage_b,sd_manage_c,sd_manage_d,sd_manage_e,sd_manage_f,sd_remind_mail,sd_customer_nm,sd_acc_state,sd_exam_state,sd_tel_srvc,sd_mail_srvc,sd_start_m,sd_end_m,";
#			
#			$sql .= "sd_regist_date,sd_last_login,sd_memo,sd_estimate_mail,sd_info_mail,sd_company_nm,sd_tanto_nm,sd_tanto_kana,sd_company_tel,";
#			$sql .= "sd_company_zip,sd_company_address,sd_shop_nm,sd_open_chiku,sd_shop_tel,sd_shop_zip,sd_shop_address,sd_shop_access,sd_shop_url,";
#			$sql .= "sd_shop_open,sd_shop_off,sd_card,sd_shop_rank,sd_catch_copy,sd_intro,sd_small_img01,sd_small_img02,di_itm01_nm,di_itm02_nm,di_itm03_nm,";
#			$sql .= "di_itm04_nm,di_itm05_nm,di_itm06_nm,di_itm07_nm,di_itm08_nm,sd_regist_flag,sd_charge_table,sd_login_count,sd_shop_memo,sd_tanto_section,";
#			$sql .= "sd_tanto_position,sd_company_fax,sd_last_update,sd_contract_shop,";
#			$sql .= "sd_basic_charge,sd_copy_lank ";
#			
#			$sql .= "from t_shop_base where sd_regist_date >= '".$start_date."' and sd_regist_date <= '".$end_date."' order by sid asc";
			
			
			if($select_column == ""){
				$select_column = "* ";
			}
			
			// 20080916
#			$sql = "select ".$select_column." ";
#			$sql .= "from t_shop_base where sd_regist_date >= '".$start_date."' and sd_regist_date <= '".$end_date."' order by sid asc";
			
			// 20081001
			$sql = "select ".$select_column.",shop_option_no ";
			$sql .= "from t_shop_base sb ";
			$sql .= "left join (select ";
			$sql .= "sid,sum(ud_conversion_cnt) as ud_conversion_cnt,sum(ud_access_cnt) as ud_access_cnt,sum(ud_coupon_cnt) as ud_coupon_cnt,sum(client_login_count) as login_cnt ";
			$sql .= "from t_manager_usedata group by sid ) as usr_data ";
			$sql .= "on sb.sid = usr_data.sid ";
			$sql .= "left join t_shop_shopopsion ss on sb.sid = ss.sid ";
			$sql .= " where sd_regist_date >= '".$start_date."' and sd_regist_date <= '".$end_date."' order by sid asc,shop_option_no asc";
			
			
#			print $sql;
#			exit;
			
			$query = $this->db->query($sql);
			$this->rows = $query->num_rows();
			if($this->rows > 0){
				$result = $query->result_array();
				
				$data = array();
				$array_count = 0;
				$option_data_arr = array();
				for($i=0;$i<count($result);$i++){
					if($i == 0){
						$data[$array_count] = $result[$i];
						$option_data_arr[] = $result[$i]['shop_option_no'];
					}else{
						
						if($result[$i]['sid'] == $result[($i - 1)]['sid']){
							$option_data_arr[] = $result[$i]['shop_option_no'];
							
						}else{
							if($option_data_arr != null){
								$data[$array_count]['shop_option'] = implode(",",$option_data_arr);
								
								$option_data_arr = array();
								
							}else{
								$data[$array_count]['shop_option'] = "";
							}
							unset($data[$array_count]['shop_option_no']);
							
							$array_count++;
							
							$data[$array_count] = $result[$i];
							$option_data_arr[] = $result[$i]['shop_option_no'];
						}
						
						if($i == count($result) - 1){
							if($option_data_arr != null){
								$data[$array_count]['shop_option'] = implode(",",$option_data_arr);
								
								$option_data_arr = array();
								
							}else{
								$data[$array_count]['shop_option'] = "";
							}
							unset($data[$array_count]['shop_option_no']);
						}
						
					}
					
					
				}
				
				return $data;
#				return $query;
			}else{
				return array();
			}
		}
		
		
		function get_total_rows(){
			$rows = 0;
			
			$query = $this->db->query('select * from t_shop_base');
			$rows = $query->num_rows();
			
			return $rows;
		}
		
		
		
		
		function make_csv_query($result_array = array(),$column_type = array()){
			$query = array();
			
			
			if($result_array != null and $column_type != null){
				
				$needComma = false;
				// tmp テーブル作成
				$tmp_sql = "create temp table tmp ( ";
				foreach($column_type as $key => $val){
					
					$key = str_replace("sb.","",$key);
					if($needComma){
						$tmp_sql .= ", ";
					}
					$tmp_sql .= $key." ".$val;
					$needComma = true;
				}
				
				$tmp_sql .= " );";
			}
			
			$tmp_result = $this->db->query($tmp_sql);
			
			$ins_dat = "";
			$ins_result = true;
			if($tmp_result){
				for($i=0;$i<count($result_array);$i++){
					unset($result_array[$i]['shop_option_no']);
					
					foreach($result_array[$i] as $key => $val){
						if($key == "sid"){
							$key = "sb.".$key;
						}
						switch($column_type[$key]){
							case "integer":
							case "date":
							case "timestamp without time zone":
								
								if($val == ""){
									$ins_val_arr[] = "null";
								}else{
									$ins_val_arr[] = "'".$val."'";
								}
								
							break;
							default:
								$ins_val_arr[] = "'".$val."'";
							break;
							
						}
						if($key == "sb.sid"){
							$key = str_replace("sb.","",$key);
						}
						$ins_column_arr[] = $key;
						
						
					}
					$ins_sql = "insert into tmp (".implode(",",$ins_column_arr).") values (".implode(",",$ins_val_arr).");";
					
					$ins_result = $this->db->query($ins_sql);
					$ins_val_arr = array();
					$ins_column_arr = array();
					
					if(!$ins_result){
						$ins_flag = false;
					}
				}
				
				if($ins_result){
					
					$this->db->select('*');
					$this->db->from('tmp');
					
					$query = $this->db->get();
					
					$this->rows = $query->num_rows;
					
					
				}
				
			}
			
			return $query;
		}
		
		
		
		
		
		
		
	}
	
?>