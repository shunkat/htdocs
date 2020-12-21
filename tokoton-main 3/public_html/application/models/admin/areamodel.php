<?
	class Areamodel extends Model {
		var $select_table1 = "m_area ma";
		var $select_table2 = "t_shop_base";
		var $join_table = "m_todoufuken mt";
		var $regist_table = "t_shop_base";
		var $rows;
		
		function Areamodel(){
			parent::Model();
			
		}
		
		
		function do_select($no = ""){
			/* ------------------------------------------------------------------ */
			/* where条件設定
			--------------------------------------------------------------------- */
			/* ------------------------------------------------------------------ */
			$this->db->select("*");
			$this->db->from($this -> select_table1);
			$this->db->join($this->join_table,"ma.area_id = mt.area_id");
			$this->db->orderby("ma.area_id asc,todoufuken_id asc");
			
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
		function make_disp_arr($result_list = array()){
			$name_buf = "";
			$display_arr = array();
			if($result_list != null){
				foreach($result_list as $key => $val){
					$display_arr[$val['area_nm']][$val['todoufuken_id']] = $val['todoufuken_nm'];
					
					
				}
			}
			return $display_arr;
		}
		
		
		function do_select_shop($sid = ""){
			if($sid == ""){
				header("location: /admin/account/");
			}
			$this->db->select("*");
			$this->db->from($this -> select_table2);
			$this->db->where("sid = $sid");
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
	
?>