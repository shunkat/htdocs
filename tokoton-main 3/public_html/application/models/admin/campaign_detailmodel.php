<?
	class Campaign_detailmodel extends Model {
#		var $table = "t_shop_mailformat";
		var $rows;
		
		function Campaign_detailmodel(){
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
		
		
		
	}
	
?>