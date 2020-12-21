<?
	class month_pricemodel extends Model {
		var $table = "csv_month_price";
		var $table_data = "t_manager_usedata";
		var $rows;
		
		function month_pricemodel(){
			parent::Model();
		}
		function do_select_csv($where_arr = array(),$orderby = ""){
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
					$where = implode(" and ",$where_dat);
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
				return $query;
			}else{
				return array();
			}
		}
		
		function do_select_monthlist(){
			/* ------------------------------------------------------------------ */
			/* Query実行
			--------------------------------------------------------------------- */
			$query = $this->db->query('select ud_year,ud_month from t_manager_usedata group by ud_year,ud_month order by ud_year desc,ud_month desc');
			$this->rows = $query->num_rows();
			if($this->rows > 0){
				$result = $query->result_array();
				return $result;
			}else{
				return array();
			}
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
					$where = implode(" and ",$where_dat);
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
			
#			/* ------------------------------------------------------------------ */
#			/* DB登録項目整形
#			--------------------------------------------------------------------- */
#			$atrlist['sid'] = $list['sid'];
#			$atrlist['opt_name'] = $list['opt_name'];
#			$atrlist['opt_price'] = $list['opt_price'];
#			$atrlist['opt_contents'] = $list['opt_contents'];
#			$atrlist['opt_lastupdate'] = "now()";
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
			
			/* ------------------------------------------------------------------ */
			/* DB登録項目整形
			--------------------------------------------------------------------- */
#			$atrlist['opt_no'] = $list['opt_no'];
#			$atrlist['sid'] = $list['sid'];
#			$atrlist['opt_name'] = $list['opt_name'];
#			$atrlist['opt_price'] = $list['opt_price'];
#			$atrlist['opt_contents'] = $list['opt_contents'];
#			$atrlist['opt_lastupdate'] = "now()";
			
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
		
		function do_delete($where_list = array()){
			if($where_list != null){
			/* ------------------------------------------------------------------ */
			/* Query実行
			--------------------------------------------------------------------- */
				$result = $this -> db -> delete($this -> table_data,$where_list);
			}else{
				$result = false;
			}
			if($result){
				return true;
			}else{
				return false;
			}
			
		}
#		
#		function do_select($where_arr = array()){
#			$where_dat = array();
#			$where = "";
#			/* ------------------------------------------------------------------ */
#			/* where条件設定
#			--------------------------------------------------------------------- */
#			if($where_arr != null){
#				foreach($where_arr as $key => $val){
#					$where_dat[] = $key." = ".$val;
#				}
#				if($where_dat != null){
#					$where = implode("and ",$where_dat);
#				}
#			}
#			if($where != ""){
#				$this->db->where($where);
#			}
#			/* ------------------------------------------------------------------ */
#			$this->db->select("*");
#			$this->db->from($this -> table);
#			$this->db->orderby("opt_lastupdate DESC");
#			
#			/* ------------------------------------------------------------------ */
#			/* Query実行
#			--------------------------------------------------------------------- */
#			$query = $this->db->get();
#			$rows = $query->num_rows();
#			$this->rows = $rows;
#			
#			if($rows > 0){
#				$result = $query->result_array();
#				return $result;
#			}else{
#				return array();
#			}
#		}
#		
#		function do_update($list = array()){
#			/* ------------------------------------------------------------------ */
#			/* DB登録項目整形
#			--------------------------------------------------------------------- */
#			$atrlist['opt_no'] = $list['opt_no'];
#			$atrlist['sid'] = $list['sid'];
#			$atrlist['opt_name'] = $list['opt_name'];
#			$atrlist['opt_price'] = $list['opt_price'];
#			$atrlist['opt_contents'] = $list['opt_contents'];
#			$atrlist['opt_lastupdate'] = "now()";
#			
#			if($atrlist['opt_no'] != ""){
#				$this -> db -> where("opt_no = '".$atrlist['opt_no']."'");
#				
#				/* ------------------------------------------------------------------ */
#				/* Query実行
#				--------------------------------------------------------------------- */
#				$result = $this -> db -> update($this -> table,$atrlist);
#				/* ------------------------------------------------------------------ */
#			}else{
#				$result = false;
#			}
#			if($result){
#				return true;
#			}else{
#				return false;
#			}
#		}
		
		
	}
	
?>