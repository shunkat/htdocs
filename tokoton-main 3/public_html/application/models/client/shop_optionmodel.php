<?
	class Shop_optionmodel extends Model {
		var $table = "t_shop_base";
		var $table2 = "t_shop_shopopsion";
		var $rows;
		
		function Shop_optionmodel(){
			parent::Model();
			
		}
		
		
		function do_insert($list = array()){
			/* ------------------------------------------------------------------ */
			/* DB登録項目整形
			--------------------------------------------------------------------- */
			$sid = $list['sid'];
			
			if($list != null){
				$cnt = 0;
				$icon_num = 16;
				
				for($i=1;$i<=$icon_num;$i++){
					if($list['icon'.$i] == "t"){
						$atrlist[$cnt]['sid'] = $sid;
						$atrlist[$cnt]['shop_option_no'] = $i;
						$cnt++;
					}
				}
				
				$this->db->trans_begin();
				
				$result = $this->do_delete(array("sid" => $sid));
				
				if(isset($atrlist) and $atrlist != null){
					
					if($result){
						$result2_flag = true;
						for($i=0;$i<count($atrlist);$i++){
							/* ------------------------------------------------------------------ */
							/* Query実行
							--------------------------------------------------------------------- */
							$result2 = $this -> db -> insert($this ->table2,$atrlist[$i]);
							/* ------------------------------------------------------------------ */
							if(!$result2){
								$result2_flag = false;
							}
						}
						
						if($result2_flag){
							$this->db->trans_commit();
							// t_shop_base の情報更新日をupdate する
							if(isset($sid) and $sid != ""){
								$this->db->query("update t_shop_base set sd_last_update = now() where sid = '".$sid."'");
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
					$this->db->trans_commit();
					// t_shop_base の情報更新日をupdate する
					if(isset($sid) and $sid != ""){
						$this->db->query("update t_shop_base set sd_last_update = now() where sid = '".$sid."'");
					}
					return true;
				}
			}else{
				return false;
			}
			if($result){
				return true;
			}else{
				return false;
			}
			
		}
		
		function do_delete($where_list = array()){
			if($where_list != null){
			/* ------------------------------------------------------------------ */
			/* Query実行
			--------------------------------------------------------------------- */
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
			if($table != ""){
				$this->db->from($table);
			}
			
			/* ------------------------------------------------------------------ */
			$this->db->select("*");
#			$this->db->orderby("mail_lastupdate DESC");
			
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
			if($list['sid'] != ""){
				$sid = $list['sid'];
				$atrlist['sd_card'] = $list['sd_card'];
				$atrlist['sd_last_update'] = "now()";
				
				if($sid != ""){
					$this -> db -> where("sid = '".$sid."'");
				
					/* ------------------------------------------------------------------ */
					/* Query実行
					--------------------------------------------------------------------- */
					$result = $this -> db -> update($this -> table,$atrlist);
					/* ------------------------------------------------------------------ */
				}else{
					$result = false;
				}
				
			}else{
				$result = false;
			}
			
			if($result){
				return true;
			}else{
				return false;
			}
		}
		
		
	}
	
?>