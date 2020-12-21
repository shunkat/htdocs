<?
	class Topicsmodel extends Model {
		var $table = "t_manager_topics";
		var $rows;
		
		function Topicsmodel(){
			parent::Model();
			
		}
		
		
		function do_insert($list = array()){
			/* ------------------------------------------------------------------ */
			/* DB登録項目整形
			--------------------------------------------------------------------- */
			$atrlist['top_up_date'] = $list['top_up_date'];
			$atrlist['top_contents'] = $list['top_contents'];
			$atrlist['top_link'] = $list['top_link'];
			$atrlist['top_lastupdate'] = "now()";
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
		
		function do_delete($no){
			if($no != ""){
			/* ------------------------------------------------------------------ */
			/* Query実行
			--------------------------------------------------------------------- */
				$result = $this -> db -> delete($this -> table,array('top_no' => $no));
			}else{
				$result = false;
			}
			if($result){
				return true;
			}else{
				return false;
			}
			
		}
		
		function do_select($no = ""){
			/* ------------------------------------------------------------------ */
			/* where条件設定
			--------------------------------------------------------------------- */
			if($no != ""){
				$this -> db -> where("top_no = '".$no."'");
			}
			/* ------------------------------------------------------------------ */
			$this->db->select("*");
			$this->db->from($this -> table);
			$this->db->orderby("top_up_date DESC,top_lastupdate DESC");
			
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
			$atrlist['top_up_date'] = $list['top_up_date'];
			$atrlist['top_contents'] = $list['top_contents'];
			$atrlist['top_link'] = $list['top_link'];
			$atrlist['top_lastupdate'] = "now()";
			$atrlist['top_no'] = $list['top_no'];
			
			if($atrlist['top_no'] != ""){
				$this -> db -> where("top_no = '".$atrlist['top_no']."'");
				
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