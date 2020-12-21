<?
	class Shop_couponmodel extends Model {
#		var $table = "t_shop_service";
#		var $rows;
		
		function Shop_couponmodel(){
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
					case "t_shop_base sb":
						$this->db->join("t_shop_coupon sc","sb.sid = sc.sid","left");
						
					break;
#					case "t_shop_plandiscount pds2":
#						$this->db->join("t_shop_dscdetail dd","pds2.db_no = dd.db_no and pds2.dd_level_no = dd.dd_level_no","left");
#						$this->db->order_by("pds2.dd_level_no asc");
#					break;
#					case "t_shop_planbase":
#						$select_culum = "sid,pb_plan_nm";
#					break;
#					case "t_shop_base":
#					break;
#					case "t_shop_dscbase db":
#						$this->db->join("t_shop_dscdetail dd","db.db_no = dd.db_no","left");
#					break;
#					case "t_shop_dscbase":
#					break;
#					case "t_shop_mailformat":
#					break;
#					case "t_shop_planbase pb":
#						$this->db->join("t_shop_plandetail pd","pb.pb_no = pd.pb_no","left");
#					break;
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