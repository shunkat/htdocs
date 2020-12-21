<?
	class Rank_mastermodel extends Model {
		var $rows;
		
		function Rank_mastermodel(){
			parent::Model();
			
		}
		
		
		
		function do_select($table = "",$where_arr = array(),$select_column = "*"){
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
			
			$this->db->select($select_column);
			$this->db->from($table);
			
			if($select_column != "*"){
				$this->db->order_by($select_column);
				$this->db->group_by($select_column);
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
		
		
		function make_master_view(){
			// 初期化
			$master_data = array();
			
			
			// ランクの取得
			
			/*20180202 ランク変更対応 ST*/
			$rank_result = $this->do_select("m_rate","","*");
			$wk_var = '';		//判定用変数
			//$rank_result = $this->do_select("m_rate","","rate_type");
			/*20180202 ランク変更対応 ED*/
			
			if($rank_result != null){
				
				for($i=0;$i<count($rank_result);$i++){
					
					/*20180202 ランク変更対応 ST*/
					if ($wk_var != $rank_result[$i]['rate_type'] ){
					
						$wk_var = $rank_result[$i]['rate_type'];
					/*20180202 ランク変更対応 ED*/
						
						$master_data['rank_index'][] = $rank_result[$i]['rate_type'];
						$master_data['relation_arr'][$rank_result[$i]['rate_type']] = $i;
					
					/*20180202 ランク変更対応 ST*/
					}
					/*20180202 ランク変更対応 ED*/
				}
				$master_data['rank_count'] = count($rank_result);
				
			}
			
			// 範囲の取得
			$range_result = $this->do_select("m_rate","","rate_cntmin,rate_cntmax");
			
			if($range_result != null){
				
				for($i=0;$i<count($range_result);$i++){
					$master_data['range_index'][$range_result[$i]['rate_cntmin']."-".$range_result[$i]['rate_cntmax']]['index'] = $range_result[$i]['rate_cntmin']."～".$range_result[$i]['rate_cntmax'];
				}
				
			}
			
			// 金額取得
			$charge_result = $this->do_select("m_rate");
			
			if($charge_result != null){
				
				
				
				
				for($i=0;$i<count($charge_result);$i++){
					$master_data['range_index'][$charge_result[$i]['rate_cntmin']."-".$charge_result[$i]['rate_cntmax']]['charge'][$master_data['relation_arr'][$charge_result[$i]['rate_type']]] = $charge_result[$i]['rate_price'];
				}
				
			}
			
			return $master_data;
		}
		
		
		
		
		
	}
	
?>