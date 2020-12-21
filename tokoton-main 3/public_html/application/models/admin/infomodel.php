<?
	class Infomodel extends Model {
		var $table = "t_manager_info";
		var $rows;
		
		function Infomodel(){
			parent::Model();
			
		}
		
		
		function do_insert($list = array()){
			/* ------------------------------------------------------------------ */
			/* DB登録項目整形
			--------------------------------------------------------------------- */
			$atrlist['info_up_date'] = $list['info_up_date'];
			$atrlist['info_index'] = $list['info_index'];
			$atrlist['info_contents'] = $list['info_contents'];
			$atrlist['info_lastupdate'] = "now()";
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
				$result = $this -> db -> delete($this -> table,array('info_no' => $no));
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
				$this -> db -> where("info_no = '".$no."'");
			}
			/* ------------------------------------------------------------------ */
			$this->db->select("*");
			$this->db->from($this -> table);
			$this->db->orderby("info_up_date DESC,info_lastupdate DESC");
			
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
			$atrlist['info_up_date'] = $list['info_up_date'];
			$atrlist['info_index'] = $list['info_index'];
			$atrlist['info_contents'] = $list['info_contents'];
			$atrlist['info_lastupdate'] = "now()";
			$atrlist['info_no'] = $list['info_no'];
			
			if($atrlist['info_no'] != ""){
				$this -> db -> where("info_no = '".$atrlist['info_no']."'");
				
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