<?
	class Topmodel extends Model {
#		var $table = "t_shop_service";
#		var $rows;
		
		function Topmodel(){
			parent::Model();
			
		}
		
		function do_select($table = "",$where_arr = array(),$select_culum = "*"){
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
						$where_dat[] = $key." = '".$val."' ";
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
				
				/* ------------------------------------------------------------------ */
				/* 抽出するテーブルごとの設定
				--------------------------------------------------------------------- */
				switch($table){
					case "t_manager_topics":
						$this->db->order_by("top_up_date desc");
						
					break;
					case "t_shop_base sb":
						$this->db->join("t_shop_planbase spb","sb.sid = spb.sid","left");
					break;
					default:
					break;
				}
				
				if($select_culum != ""){
					$this->db->select($select_culum);
				}else{
					$this->db->select("*");
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