<?
	class Plan_itemmodel extends Model {
		var $table = "t_shop_base";
		var $rows;
		
		function Plan_itemmodel(){
			parent::Model();
			
		}
		
		
#		function do_insert($list = array()){
#			/* ------------------------------------------------------------------ */
#			/* DB登録項目整形
#			--------------------------------------------------------------------- */
# #			$atrlist['sid'] = $list['sid'];
#			$atrlist['di_itm01_nm'] = $list['pb_plan_nm'];
#			$atrlist['srv_contents'] = $list['srv_contents'];
#			$atrlist['srv_lastupdate'] = "now()";
#			/* ------------------------------------------------------------------ */
#			/* Query実行
#			--------------------------------------------------------------------- */
#			$result = $this -> db -> insert($this ->table,$atrlist);
#			/* ------------------------------------------------------------------ */
#			if($result){
#				return true;
#			}else{
#				return false;
#			}
#			
#		}
		
#		function do_delete($where_list = array()){
# #			if($where_list != null){
# #			/* ------------------------------------------------------------------ */
# #			/* Query実行
# #			--------------------------------------------------------------------- */
# #				$result = $this -> db -> delete($this -> table,$where_list);
# #			}else{
# #				$result = false;
# #			}
# #			if($result){
# #				return true;
# #			}else{
# #				return false;
# #			}
#			
#		}
		
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
#			$this->db->orderby("srv_lastupdate DESC");
			
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
			$atrlist['di_itm01_nm'] = $list['di_itm01_nm'];
			$atrlist['di_itm02_nm'] = $list['di_itm02_nm'];
			$atrlist['di_itm03_nm'] = $list['di_itm03_nm'];
			$atrlist['di_itm04_nm'] = $list['di_itm04_nm'];
			$atrlist['di_itm05_nm'] = $list['di_itm05_nm'];
			$atrlist['di_itm06_nm'] = $list['di_itm06_nm'];
			$atrlist['di_itm07_nm'] = $list['di_itm07_nm'];
			$atrlist['di_itm08_nm'] = $list['di_itm08_nm'];
			$atrlist['sd_last_update'] = "now()";
			
			if($list['sid'] != ""){
				$this -> db -> where("sid = '".$list['sid']."'");
				
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
		
		
	}
	
?>