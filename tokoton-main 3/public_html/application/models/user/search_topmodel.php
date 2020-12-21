<?
	class Search_topmodel extends Model {
#		var $table = "t_shop_service";
#		var $rows;
		
		function Search_topmodel(){
			parent::Model();
			
		}
		
		function get_pulldown(){
			// 初期設定
			$plull_down_arr = array();
			$table = "m_todoufuken mt";
			$pulldown = "";
			$flag = false;
			
			// データ抽出
			$result = $this->do_select($table);
			
			if($result != null){
				for($i=0;$i<count($result);$i++){
					$plull_down_arr[$result[$i]['area_nm']][$result[$i]['todoufuken_id']] = $result[$i]['todoufuken_nm'];
				}
			}
			
			foreach($plull_down_arr as $area => $pref_dat){
				if($flag){
					$pulldown .= "</optgroup>\n";
				}
				$pulldown .= "<optgroup label=\"".$area."\">\n";
				foreach($pref_dat as $id => $nm){
					$pulldown .= "<option value=\"".$id."\">".$nm."</option>\n";
				}
				$flag = true;
			}
			$pulldown .= "</optgroup>\n";
			
			return $pulldown;
		}
		
		
		function do_select($table = "",$where_arr = array(),$select_culum = ""){
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
				
				switch($table){
					case "m_todoufuken mt":
						$this->db->join("m_area ma","mt.area_id = ma.area_id","left");
						$this->db->order_by("mt.todoufuken_id ASC");
					break;
					
				}
				
				
				// セレクトするカラムの設定
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