<?
	class Discountmodel extends Model {
		var $table = "t_shop_dscbase";
		var $table2 = "t_shop_dscdetail";
		
		var $table3 = "t_shop_plandiscount";
		
		var $rows;
		
		function Discountmodel(){
			parent::Model();
			
		}
		
		
		function do_insert($list = array()){
			$result_flag = true;
			/* ------------------------------------------------------------------ */
			/* DB登録項目整形
			--------------------------------------------------------------------- */
			$atrlist['sid'] = $list['sid'];
			$atrlist['db_menu_nm'] = $list['db_menu_nm'];
			$atrlist['db_menu_detail'] = $list['db_menu_detail'];
			$atrlist['db_last_update'] = "now()";
			
			$atrlist['db_sort'] = $this->max_select($this->table,"db_sort");
			/* ------------------------------------------------------------------ */
			/* Query実行
			--------------------------------------------------------------------- */
			$this->db->trans_begin();
			$result = $this -> db -> insert($this ->table,$atrlist);
			/* ------------------------------------------------------------------ */
			if($result){
				$db_no = $this->db->insert_id();
				
				if($list['level_flag'] == "f"){
					$atrlist2[0]['db_no'] = $db_no;
					$atrlist2[0]['dd_level_no'] = 0;
					$atrlist2[0]['dd_dsc_price'] = $list['dd_dsc_price'];
					
				}else{
					for($i=0;$i<4;$i++){
						$atrlist2[$i]['db_no'] = $db_no;
						$atrlist2[$i]['dd_level_no'] = $i;
						if(isset($list['dsc_nm'.($i + 1)])){
							$atrlist2[$i]['dd_dsc_nm'] = $list['dsc_nm'.($i + 1)];
						}else{
							$atrlist2[$i]['dd_dsc_nm'] = "";
						}
						if(isset($list['dsc_price'.($i + 1)])){
							$atrlist2[$i]['dd_dsc_price'] = $list['dsc_price'.($i + 1)];
						}else{
							$atrlist2[$i]['dd_dsc_price'] = "";
						}
					}
				}
				for($i=0;$i<count($atrlist2);$i++){
					$result2 = $this -> db -> insert($this ->table2,$atrlist2[$i]);
					
					if(!$result2){
						$result_flag = false;
					}
					
				}
				
				if($result_flag){
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
				$this->db->trans_rollback();
				return false;
			}
			
		}
		
		function do_delete($where_list = array()){
			
			/*20190514 割引メニュー不具合対応 ST*/
			$result_flag = true;
			
			if($where_list != null){
				
				$this->db->trans_begin();
				
				//t_shop_dscbaseのデータ削除
				$result = $this -> db -> delete($this -> table,$where_list);
				
				if($result){
					//t_shop_plandiscountのデータ削除
					$result = $this -> db -> delete($this -> table3,$where_list);
					
				}else{
					$result_flag = false;
				}
				
				if($result_flag){
					$this->db->trans_commit();
					return true;
				}else{
					$this->db->trans_rollback();
					return false;
				}
				
			}else{
				return false;
			}
			
			

			/*現処理コメントアウト ST*/
			
#			if($where_list != null){
			/* ------------------------------------------------------------------ */
			/* Query実行
			--------------------------------------------------------------------- */
#				$result = $this -> db -> delete($this -> table,$where_list);
#			}else{
#				$result = false;
#			}
#			if($result){
#				return true;
#			}else{
#				return false;
#			}
			
			/*現処理コメントアウト ED*/
			/*20190514 割引メニュー不具合対応 ED*/
		}
		
		function do_select($where_arr = array()){
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
			$this->db->order_by("db_sort asc");
			
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
		
		function do_update($list = array(),$where_list = array()){
			$result_flag = true;
			/* ------------------------------------------------------------------ */
			/* DB登録項目整形
			--------------------------------------------------------------------- */
			$atrlist['sid'] = $list['sid'];
			$atrlist['db_menu_nm'] = $list['db_menu_nm'];
			$atrlist['db_menu_detail'] = $list['db_menu_detail'];
			$atrlist['db_last_update'] = "now()";
			
			if($where_list != null){
				$result_flag = true;
				$this->db->where($where_list);
				/* ------------------------------------------------------------------ */
				/* Query実行
				--------------------------------------------------------------------- */
				$this->db->trans_begin();
				$result = $this -> db -> update($this -> table,$atrlist);
				if($result){
					if($list['level_flag'] == "f"){
						$list['dd_no1'] = $list['dd_no1'];
						$atrlist2[0]['db_no'] = $list['db_no'];
						$atrlist2[0]['dd_level_no'] = 0;
						$atrlist2[0]['dd_dsc_price'] = $list['dd_dsc_price'];
						
						$flag = true;
						for($i=2;$i<5;$i++){
							if(isset($list['dd_no'.$i])){
								$result = $this->do_delete_detail(array("dd_no" => $list['dd_no'.$i]));
							}
							if(!$result){
								$flag = false;
							}
						}
						if(!$flag){
							$this->db->trans_rollback();
							return false;
						}
					}else{
						for($i=0;$i<4;$i++){
#							if(isset($list['dsc_nm'.($i + 1)]) and isset($list['dsc_price'.($i + 1)])){
								$atrlist2[$i]['db_no'] = $list['db_no'];
								$atrlist2[$i]['dd_level_no'] = $i;
								if(isset($list['dsc_nm'.($i + 1)])){
									$atrlist2[$i]['dd_dsc_nm'] = $list['dsc_nm'.($i + 1)];
								}else{
									$atrlist2[$i]['dd_dsc_nm'] = "";
								}
								if(isset($list['dsc_price'.($i + 1)])){
									$atrlist2[$i]['dd_dsc_price'] = $list['dsc_price'.($i + 1)];
								}else{
									$atrlist2[$i]['dd_dsc_price'] = "";
								}
#							}
						}
					}
					for($i=0;$i<count($atrlist2);$i++){
						if(isset($list['dd_no'.($i + 1)]) and $list['dd_no'.($i + 1)] != ""){
							$this->db->where("dd_no = ".$list['dd_no'.($i + 1)]);
							$result2 = $this -> db -> update($this -> table2,$atrlist2[$i]);
						}elseif(!isset($list['dd_no'.($i + 1)])){
							for($i=1;$i<4;$i++){
								$atrlist2[$i]['dd_level_no'] = $i;
								$this->do_insert_detail($atrlist2[$i]);
							}
						}else{
							$result2 = false;
						}
						
						if(!$result2){
							$result_flag = false;
						}
					}
					if($result_flag){
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
					$this->db->trans_rollback();
					return false;
				}
				
			}else{
				return false;
			}
			
		}
		
		
		function do_select_edit($where_list = array()){
			$this->db->select("*");
			$this->db->from($this -> table." sd");
			$this->db->order_by("sd.db_no DESC");
			$this->db->join("t_shop_dscdetail sdd","sd.db_no = sdd.db_no");
			$this->db->where($where_list);
			
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
		
		function do_delete_detail($where_list = array()){
			if($where_list != null){
				$result = $this -> db -> delete($this -> table2,$where_list);
			}else{
				$result = false;
			}
			if($result){
				return true;
			}else{
				return false;
			}
		}
		
		function do_insert_detail($list = array()){
			$atrlist['db_no'] = $list['db_no'];
			
			$atrlist['dd_level_no'] = $list['dd_level_no'];
			
			$atrlist['dd_dsc_nm'] = $list['dd_dsc_nm'];
			$atrlist['dd_dsc_price'] = $list['dd_dsc_price'];
			
			$result = $this -> db -> insert($this ->table2,$atrlist);
			
			return $result;
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
		
		/* sort change 20080927arai  */
		function make_sort_button($array = array()){
			$button = "";
			
			for($i=0;$i<count($array);$i++){
				$array[$i]['button'] = "";
				
				// 上へ移動ボタン
				if($i != 0){
					$button = "<input type=\"button\" name=\"\" value=\"↑\" onclick=\"location.href='/client/discount/order_change/".$array[$i]['db_no']."/".$array[($i - 1)]['db_no']."/'\" />";
					if($i == (count($array) - 1)) $button .= "<img src=\"/img/spacer.gif\" width=\"15\" height=\"1\" border=\"0\" alt=\"\">";
				}
				
				// 下へ移動ボタン
				if($i != (count($array) - 1)){
					if($i == 0) $button .= "<img src=\"/img/spacer.gif\" width=\"15\" height=\"1\" border=\"0\" alt=\"\">";
					$button .= "<input type=\"button\" name=\"\" value=\"↓\" onclick=\"location.href='/client/discount/order_change/".$array[$i]['db_no']."/".$array[($i + 1)]['db_no']."/'\" />";
				}
				
				
				
				$array[$i]['button'] = $button;
				$button = "";
			}
			
			return $array;
			
		}
		function order_change($before = "",$after = "",$table = "",$pkey = "",$sortkey = ""){
			// 初期化
			$before_result = "";
			$after_result = "";
			$result_flag = false;

			
			if($before != "" and $after != "" and $table){
				
				// 対象レコードセレクト
				
				$this->db->select(array($pkey,$sortkey));
				$this->db->from($table);
				$this->db->where($pkey." = '".$before."' or ".$pkey." = '".$after."'");
				$this->db->order_by($sortkey." ASC");
				
				$query = $this->db->get();
				$rows = $query->num_rows;
				
				
				if($rows > 0){
					$result = $query->result_array();

					
					// トランザクション開始
					$this->db->trans_start();
					
					
					for($i=0;$i<count($result);$i++){
						
						if($result[$i][$pkey] == $before){
							// アップデート実行
							# $before_result = $this->do_update($table,array($sortkey => $result[$i][$sortkey],),array($pkey => $after));
							$sql = "update ".$table." set ".$sortkey." = ".$result[$i][$sortkey]." where ".$pkey." = ".$after;
							$before_result = $this->db->query($sql);
							
						}elseif($result[$i][$pkey] == $after){
							// アップデート実行
							# $after_result = $this->do_update($table,array($sortkey => $result[$i][$sortkey],),array($pkey => $before));
							$sql = "update ".$table." set ".$sortkey." = ".$result[$i][$sortkey]." where ".$pkey." = ".$before;
							$after_result = $this->db->query($sql);
						}
					}
					
					if($before_result == TRUE and $after_result == TRUE){
						// コミット
						$this->db->trans_commit();
						
						$result_flag = true;
					}else{
						// ロールバック
						$this->db->trans_rollback();
						
					}
				}
			}
			
			return $result_flag;
			
		}
		
		function max_select($table = "",$column = "",$where = ""){
			
			$where = "";
			$result = array();
			
			if($table != "" && $column != ""){
				$this->db->select("max(".$column.") as max_data");
				$this->db->from($table);
				if($where != "") $this->db->where($where);
				
				$query = $this->db->get();
				$row = $query->num_rows;
				
				if($row > 0){
					$result = $query->result_array();
					if($result[0]['max_data'] == ""){
						return 1;
					}else{
						return ($result[0]['max_data'] + 1);
					}
				}elseif($row == 0){
					return 1;//デフォルト数値
				}else{
					return FALSE;
				}
			}else{
				return FALSE;
			}
		}
	}
	
?>