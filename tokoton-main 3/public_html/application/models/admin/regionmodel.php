<?
	class Regionmodel extends Model {
		var $select_table = "m_region";
		var $select_table2 = "t_shop_base";
		var $rows;
		
		function Regionmodel(){
			parent::Model();
			
		}
		
		
		function do_select($no = ""){
			$this->db->select("*");
			$this->db->from($this -> select_table);
			$this->db->where("todoufuken_id = '$no'");
#			$this->db->orderby("todoufuken_id asc,region_id asc");
			$this->db->orderby("sub_region_nm asc,region_id asc");
			
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
			$display_arr = array();
			$row_count = 0;
			$array_count = 0;
			if($result_list != null){
				
				
				for($i=0;$i<count($result_list);$i++){
					if($i != 0){
						if($result_list[$i]['sub_region_nm'] != $result_list[$i - 1]['sub_region_nm']){
							$row_count = 0;
						}
					}
					if($row_count == 4){
						$row_count = 0;
						$array_count++;
					}
					$display_arr[$result_list[$i]['sub_region_nm']][$array_count][$result_list[$i]['region_id']] = $result_list[$i]['region_nm'];
					$row_count++;
				}
				
#				foreach($result_list as $key => $val){
#					if($row_count == 0){
#						$display_arr[$val['sub_region_nm']][$array_count][$val['region_id']] = $val['region_nm'];
#					}else{
#						if($row_count == 4){
#							$row_count = 0;
#							$array_count++;
#						}
#						$display_arr[$val['sub_region_nm']][$array_count][$val['region_id']] = $val['region_nm'];
#						
#					}
#					$row_count++;
#				}
			}
			#PRINT_R
#			print "<pre>";
#			print_r($display_arr);
#			print "</pre>";
			
			
			return $display_arr;
		}
		
		
		function do_select_shop($sid = ""){
			if($sid == ""){
				header("location: /admin/account/");
			}
			$this->db->select("*");
			$this->db->from($this -> select_table2);
			if($sid != ""){
				$this->db->where("sid = $sid");
			}
			$query = $this->db->get();
			$rows = $query->num_rows();
			
			if($rows > 0){
				$result = $query->result_array();
				return $result;
			}else{
				return array();
			}
		}
		function do_select_todoufuken($todoufuken_id = ""){
			if($todoufuken_id != ""){
				$this->db->where("todoufuken_id = '$todoufuken_id'");
			}
			$this->db->select("*");
			$this->db->from("m_todoufuken");
			
			$query = $this->db->get();
			$rows = $query->num_rows();
			
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
			$atrlist['sid'] = $list['sid'];
			$atrlist['sd_open_chiku'] = $list['region_id'];
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
		
	}
	
?>