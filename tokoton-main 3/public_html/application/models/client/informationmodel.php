<?
	class Informationmodel extends Model {
		var $table = "t_shop_service";
		var $rows;
		
		function Informationmodel(){
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
		
		
	}
	
?>