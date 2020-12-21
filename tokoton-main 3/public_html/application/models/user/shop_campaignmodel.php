<?
	class Shop_campaignmodel extends Model {
#		var $table = "t_shop_service";
#		var $rows;
		
		function Shop_campaignmodel(){
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
					$this->db->from($table." cam");
					$this->db->join('t_shop_base sb','cam.sid = sb.sid','left');
				}
				/* ------------------------------------------------------------------ */
				
				/* ------------------------------------------------------------------ */
				/* 抽出するテーブルごとの設定
				--------------------------------------------------------------------- */
#				switch($table){
#					case "t_shop_base sb":
#						$this->db->join("t_shop_coupon sc","sb.sid = sc.sid","left");
#						
#					break;
#					default:
#					break;
#				}
				
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