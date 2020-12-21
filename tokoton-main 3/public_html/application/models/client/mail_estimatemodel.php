<?
	class mail_estimatemodel extends Model {
		var $table = "t_shop_mailformat";
		var $rows;
		
		function mail_estimatemodel(){
			parent::Model();
			
		}
		
		
		function do_insert($list = array()){
			/* ------------------------------------------------------------------ */
			/* DB登録項目整形
			--------------------------------------------------------------------- */
			$atrlist['sid'] = $list['sid'];
			$atrlist['mail_subject'] = $list['mail_subject'];
			$atrlist['mail_greeting'] = $list['mail_greeting'];
			$atrlist['mail_footer'] = $list['mail_footer'];
			$atrlist['mail_lastupdate'] = "now()";
			/* ------------------------------------------------------------------ */
			/* Query実行
			--------------------------------------------------------------------- */
			$result = $this -> db -> insert($this ->table,$atrlist);
			/* ------------------------------------------------------------------ */
			if($result){
				// t_shop_base の情報更新日をupdate する
				if(isset($atrlist['sid']) and $atrlist['sid'] != ""){
					$this->db->query("update t_shop_base set sd_last_update = now() where sid = '".$atrlist['sid']."'");
				}
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
				$result = $this -> db -> delete($this -> table,$where_list);
			}else{
				$result = false;
			}
			if($result){
				// t_shop_base の情報更新日をupdate はここのみcontrollerで行う
				return true;
			}else{
				return false;
			}
			
		}
		
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
			$this->db->orderby("mail_lastupdate DESC");
			
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
			if($list['mail_no'] != ""){
				$mail_no = $list['mail_no'];
				$atrlist['sid'] = $list['sid'];
				$atrlist['mail_subject'] = $list['mail_subject'];
				$atrlist['mail_greeting'] = $list['mail_greeting'];
				$atrlist['mail_footer'] = $list['mail_footer'];
				$atrlist['mail_lastupdate'] = "now()";
				
				if($mail_no != ""){
					$this -> db -> where("mail_no = '".$mail_no."'");
				
					/* ------------------------------------------------------------------ */
					/* Query実行
					--------------------------------------------------------------------- */
					$result = $this -> db -> update($this -> table,$atrlist);
					/* ------------------------------------------------------------------ */
				}else{
					$result = false;
				}
				
			}else{
				$result = false;
			}
			
			if($result){
				// t_shop_base の情報更新日をupdate する
				if(isset($atrlist['sid']) and $atrlist['sid'] != ""){
					$this->db->query("update t_shop_base set sd_last_update = now() where sid = '".$atrlist['sid']."'");
				}
				return true;
			}else{
				return false;
			}
		}
		
		function select_shop_data($table = "",$where_arr = array()){
			if($table == ""){
				return array();
			}else{
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
				$this->db->from($table);
				/* ------------------------------------------------------------------ */
				/* Query実行
				--------------------------------------------------------------------- */
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
	}
	
?>