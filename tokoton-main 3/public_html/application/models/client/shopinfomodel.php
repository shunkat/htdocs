<?
	class shopinfomodel extends Model {
		var $table = "t_shop_base";
		var $rows;
		
		function shopinfomodel(){
			parent::Model();
		}
		
		function do_select($where_arr = array(),$orderby = ""){
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
			$this->db->from($this -> table);
			if($orderby != "")$this->db->orderby($orderby);
			
			/* ------------------------------------------------------------------ */
			/* Query実行
			--------------------------------------------------------------------- */
			$query = $this->db->get();
			$this->rows = $query->num_rows();
			if($this->rows > 0){
				$result = $query->result_array();
				return $result;
			}else{
				return array();
			}
		}
		
		function do_insert($list = array()){
			
			$atrlist = $list;
			
			/* ------------------------------------------------------------------ */
			/* Query実行
			--------------------------------------------------------------------- */
			$result = $this -> db -> insert($this ->table,$atrlist);
			
			
			/* ------------------------------------------------------------------ */
			if($result){
				return true;
			}else{
				return false;
			}
		}

		function do_update($list = array()){
			
			$atrlist = $list;
			
			// 最終更新日更新
			$atrlist['sd_last_update'] = "now()";
			
			if($atrlist['sid'] != ""){
				$this -> db -> where("sid = '".$atrlist['sid']."'");
				
				/* ------------------------------------------------------------------ */
				/* Query実行
				--------------------------------------------------------------------- */
				$result = $this -> db -> update($this -> table,$atrlist);
				/* ------------------------------------------------------------------ */
			}else{
				$result = false;
			}
			if($result){
				return true;
			}else{
				return false;
			}
		}

		
		function make_search_cache($where_list = array()){
			$table = "t_search_cache";
			$table_list = array("t_shop_base");
// 2012/11/08 globalcoms nagayoshi 修正（法人関連の情報は検索キーワードに設定しない）			$column_list = array("t_shop_base" => "sid,sd_account,sd_customer_nm,sd_company_nm,sd_company_tel,sd_company_zip,sd_company_address,sd_shop_nm,sd_shop_tel,sd_shop_zip,sd_shop_address,sd_shop_access,sd_shop_url,sd_shop_open,sd_shop_off,sd_catch_copy,sd_intro");
			$column_list = array("t_shop_base" => "sid,sd_account,sd_customer_nm,sd_shop_nm,sd_shop_tel,sd_shop_zip,sd_shop_address,sd_shop_access,sd_shop_url,sd_shop_open,sd_shop_off,sd_catch_copy,sd_intro");
			$ins_key = "";
			$ins_dat = "";
			$key_nm = "sid";
			$ins_column_nm = array("sid","search_data");
			
			
			// where 条件の設定
			if($where_list != null){
				foreach($where_list as $key => $val){
					$where_dat[] = $key." = ".$val." ";
				}
				if(isset($where_dat) and $where_dat != null){
					$where = implode("and ",$where_dat);
				}
			}
			
			// SQL発行
			for($i=0;$i<count($table_list);$i++){
				$select_column = "";
				$select_column = $column_list[$table_list[$i]];
				
				$this->db->select($select_column);
				$this->db->from($table_list[$i]);
				$this->db->where($where);
				
				$query = $this->db->get();
				$rows = $query->num_rows;
				
				if($rows > 0){
					$ins_dat_arr = $query->result_array();
					for($y=0;$y<count($ins_dat_arr);$y++){
						foreach($ins_dat_arr[$i] as $column_nm => $column_val){
							if($column_nm == $key_nm){
								$ins_key = $ins_dat_arr[$i][$column_nm];
								$ins_dat_arr[$i][$column_nm] = sprintf("%04d",$ins_dat_arr[$i][$column_nm]);
							}else{
								$ins_dat_arr[$i][$column_nm] = mb_convert_kana($column_val,"KVa","UTF-8");
							}
						}
#						if(isset($ins_dat_arr[$i][$key_nm])){
#							$ins_key = $ins_dat_arr[$i][$key_nm];
#							$ins_dat_arr[$i][$key_nm] = sprintf("%04d",$ins_dat_arr[$i][$key_nm]);
#						}
						$ins_dat .= implode(" ",$ins_dat_arr[$i]);
						$ins_dat = strtolower($ins_dat);
						
					}
				}
			}
			
			if($ins_key != "" and $ins_dat != ""){
				for($i=0;$i<count($ins_column_nm);$i++){
					if($ins_column_nm[$i] == $key_nm){
#						$atrlist[$ins_column_nm[$i]] = $ins_key;
					}else{
						$atrlist[$ins_column_nm[$i]] = $ins_dat;
					}
				}
				
				// 検索キャッシュの更新
				$this->db->where($where);
				$this->db->update($table,$atrlist);
				
			}
			
		}
		
		
		
	}
	
?>