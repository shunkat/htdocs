<?php
	class Couponmodel extends Model {
		var $table = "t_shop_coupon";
		var $rows;
		
		function Couponmodel(){
			parent::Model();
		}
		
		
		function do_insert($list = array()){
			/* ------------------------------------------------------------------ */
			/* DB登録項目整形
			--------------------------------------------------------------------- */
			$atrlist['sid'] = $list['sid'];
			$atrlist['cou_open_state'] = $list['cou_open_state'];
			$atrlist['cou_contents'] = $list['cou_contents'];
			$atrlist['cou_limit_matter'] = $list['cou_limit_matter'];
			$atrlist['cou_limit_date'] = $list['cou_limit_date'];
			$atrlist['cou_lastupdate'] = "now()";
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
			if($list['cou_no'] != ""){
				$cou_no = $list['cou_no'];
				$atrlist['sid'] = $list['sid'];
				$atrlist['cou_open_state'] = $list['cou_open_state'];
				$atrlist['cou_contents'] = $list['cou_contents'];
				$atrlist['cou_limit_matter'] = $list['cou_limit_matter'];
				$atrlist['cou_limit_date'] = $list['cou_limit_date'];
				$atrlist['cou_lastupdate'] = "now()";
				
				if($cou_no != ""){
					$this -> db -> where("cou_no = '".$cou_no."'");
				
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