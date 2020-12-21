<?
	class Detailmodel extends Model {
		var $table = "t_shop_base";
		var $rows = 0;
		var $total_rows = 0;
		var $search_base = "/admin/account/search/";
		var $base_url = "/admin/account/";
		
		function Detailmodel(){
			parent::Model();
			
		}
		
		
#		function do_insert($list = array()){
# #			/* ------------------------------------------------------------------ */
# #			/* DB登録項目整形
# #			--------------------------------------------------------------------- */
# #			$atrlist['sd_account'] = $list['sd_account'];
# #			$atrlist['sd_customer_nm'] = $list['sd_customer_nm'];
# #			$atrlist['sd_remind_mail'] = $list['sd_remind_mail'];
# #			$atrlist['sd_pwd'] = $list['sd_pwd'];
# #			/* ------------------------------------------------------------------ */
# #			/* Query実行
# #			--------------------------------------------------------------------- */
# #			$result = $this -> db -> insert($this ->table,$atrlist);
# #			/* ------------------------------------------------------------------ */
# #			if($result){
# #				return true;
# #			}else{
# #				return false;
# #			}
#			
#		}
		
		function do_update($list = array()){
			#PRINT_R
#			print "<pre>";
#			print_r($list);
#			print "</pre>";
			$item_list[] = "sid";
			$item_list[] = "sd_memo";
			$item_list[] = "sd_tel_srvc";
			$item_list[] = "sd_mail_srvc";
			$item_list[] = "sd_shop_rank";
			$item_list[] = "sd_acc_state";
			$item_list[] = "sd_exam_state";
			$item_list[] = "sd_remind_mail";
			$item_list[] = "sd_customer_nm";
			$item_list[] = "sd_contract_shop";
			$item_list[] = "sd_manage_a";
			$item_list[] = "sd_manage_b";
			$item_list[] = "sd_manage_c";
			$item_list[] = "sd_manage_d";
			$item_list[] = "sd_manage_e";
			$item_list[] = "sd_manage_f";
			$item_list[] = "sd_basic_charge";
			$item_list[] = "sd_copy_lank";
			
			
			/* ------------------------------------------------------------------ */
			/* DB登録項目整形
			--------------------------------------------------------------------- */
			if($list != null){
				foreach($list as $key => $val){
					if(array_search($key,$item_list) !== false){
						if(($key == "sd_shop_rank" or $key == "sd_basic_charge") and $val == ""){
							$atrlist[$key] = null;
						}else{
							$atrlist[$key] = $list[$key];
						}
					}
				}
			}
			if($atrlist['sid'] != ""){
				$this -> db -> where("sid = '".$atrlist['sid']."'");
				$atrlist['sd_last_update'] = "now()";
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
		
		
		function do_select($no = ""){
			/* ------------------------------------------------------------------ */
			/* where条件設定
			--------------------------------------------------------------------- */
			if($no != ""){
				$this -> db -> where("sid = '".$no."'");
			}
			/* ------------------------------------------------------------------ */
			$this->db->select("*");
			$this->db->from($this -> table);
#			$this->db->join("m_region mr","sd_open_chiku = mr.region_id");
#			$this->db->join("m_todoufuken mt","mr.todoufuken_id = mt.todoufuken_id");
			$this->db->order_by("sid asc");
			
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
		
		
		/* ------------------------------------------------------------------ */
		/* 重複チェック用DB SELECT
		--------------------------------------------------------------------- */
#		function duplex_chk($where_list = array(),$nglist = array()){
# #			if($where_list != null){
# #				foreach($where_list as $key => $val){
# #					$where_dat[] = $key." = '".$val."' ";
# #				}
# #			}
# #			if($nglist != null){
# #				foreach($nglist as $key => $val){
# #					$where_dat[] = $key." <> '".$val."' ";
# #				}
# #			}
# #			
# #			if(is_array($where_dat)){
# #				$this->db->where(implode("and ",$where_dat));
# #			}
# #			
# #			
# #			$this->db->from($this -> table);
# #			$this->db->orderby("sid asc");
# #			
# #			$query = $this->db->get();
# #			$rows = $query->num_rows();
# #			
# #			if($rows == 0){
# #				return true;
# #			}else{
# #				return false;
# #			}
#			
#		}
		/* ------------------------------------------------------------------ */
		/* 表示用データ整形
		--------------------------------------------------------------------- */
		function data_display($data_array = array()){
			if($data_array != null){
				$array = $data_array;
				
				if($array['sd_acc_state'] == "t"){
					$array['sd_acc_state'] = "有効";
					$array['sd_acc_state_flag'] = "t";
				}else{
					$array['sd_acc_state'] = "無効";
					$array['sd_acc_state_flag'] = "f";
				}
				
				if($array['sd_exam_state'] == "1"){
					$array['sd_exam_state'] = "審査中";
					$array['sd_exam_state_flag'] = 1;
				}elseif($array['sd_exam_state'] == "2"){
					$array['sd_exam_state'] = "公開中";
					$array['sd_exam_state_flag'] = 2;
				}elseif($array['sd_exam_state'] == "3"){
					$array['sd_exam_state'] = "非公開中";
					$array['sd_exam_state_flag'] = 3;
				}elseif($array['sd_exam_state'] == "4"){
					$array['sd_exam_state'] = "強制公開停止";
					$array['sd_exam_state_flag'] = 4;
				}else{
					$array['sd_exam_state'] = "未審査";
					$array['sd_exam_state_flag'] = 0;
				}
				
				if($array['sd_open_state'] == 1){
					$array['sd_open_state'] = "公開";
				}else{
					$array['sd_open_state'] = "非公開";
				}
				
				
				if($array['sd_last_login'] == ""){
					$array['sd_last_login'] = "なし";
				}
				
				// 対応クレジット
				if($array['sd_card'] != ""){
					$card_arr = explode(",",$array['sd_card']);
					
					if($card_arr != null){
						
						for($i=0;$i<count($card_arr);$i++){
							
							if($card_arr[$i] == "1"){										// VISA
								$array['card1'] = "t";
							}elseif($card_arr[$i] == "2"){									// MasterCard
								$array['card2'] = "t";
							}elseif($card_arr[$i] == "3"){									// JCB
								$array['card3'] = "t";
							}elseif($card_arr[$i] == "4"){									// DC
								$array['card4'] = "t";
							}elseif($card_arr[$i] == "5"){									// AMERICANEXPRESS
								$array['card5'] = "t";
							}elseif($card_arr[$i] == "6"){									// uc
								$array['card6'] = "t";
							}elseif($card_arr[$i] == "7"){									// Nicos
								$array['card7'] = "t";
							}elseif($card_arr[$i] == "8"){									// Diners
								$array['card8'] = "t";
							}elseif($card_arr[$i] == "9"){									// その他
								$array['card9'] = "t";
							}
							
						}
					}
					
					
				}
				
				
				foreach($array as $key => $val){
					if($array[$key] == ""){
						if($key == "sd_memo" or $key == "sd_intro"){
							continue;
						}
#						if($key == "sd_end_m"){
#							$array[$key] = "---";
#						}else{
#							$array[$key] = "&nbsp;";
#						}
					}elseif($key == "sd_tel_srvc" or $key == "sd_mail_srvc"){
						if($val == "t"){
							$array[$key] = "利用中";
							$array[$key."_flag"] = $data_array[$key];
						}else{
							$array[$key] = "---";
							$array[$key."_flag"] = $data_array[$key];
						}
					}
				}
				
				
				if($array != null){
					return $array;
				}else{
					return false;
				}
			}else{
				return false;
			}
		}
		
		function do_delete($no){
			if($no != ""){
			/* ------------------------------------------------------------------ */
			/* Query実行
			--------------------------------------------------------------------- */
				$result = $this -> db -> delete($this -> table,array('sid' => $no));
			}else{
				$result = false;
			}
			
			if(file_exists($_SERVER['DOCUMENT_ROOT']."/photo/".$no."/")){
				$this->deleteDir($_SERVER['DOCUMENT_ROOT']."/photo/".$no."/");
			}
			
			if($result){
				return true;
			}else{
				return false;
			}
			
		}
		
		
		function do_select_data($table="",$where_arr){
			$where_dat = array();
			$where = "";
			/* ------------------------------------------------------------------ */
			/* where条件設定
			--------------------------------------------------------------------- */
			if($where_arr != null){
				foreach($where_arr as $key => $val){
					$where_dat[] = $key." = '".$val."'";
				}
				if($where_dat != null){
					$where = implode("and ",$where_dat);
				}
			}
			if($where != ""){
				$this->db->where($where);
			}
			$this->db->select("*");
			$this->db->from($table);
			
			if($table == "m_region mr"){
				$this->db->join("m_todoufuken mt","mr.todoufuken_id = mt.todoufuken_id");
			}
#			$this->db->orderby("sid asc");
			
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
		
		
		function image_resize($img_w,$img_h,$fixed_w,$fixed_h){
			$flag = false;
			if($img_w != "" and $img_h != "" and $fixed_h != "" and $fixed_w != ""){
				if($img_w <= $fixed_w and $img_h <= $fixed_h){
					$img_data['width'] = $img_w;
					$img_data['height'] = $img_h;
					$flag = true;
				}else{
					if($img_w > $img_h or $img_w == $img_h){
						$img_data['height'] = ceil($img_h * ($img_h / $img_h));
						$img_data['width'] = $fixed_w;
						$flag = true;
					}elseif($img_w < $img_h){
						$img_data['width'] = ceil($img_w * ($fixed_h / $img_h));
						$img_data['height'] = $fixed_h;
						$flag = true;
					}
				}
			}
			
			if($flag){
				return $img_data;
			}else{
				return array();
			}
		}
		
		function update_sd_start_m($list = array()){
			if($list != null){
				$atrlist['sid'] = $list['sid'];
				$atrlist['sd_start_m'] = $list['sd_start_m'];
				$atrlist['sd_last_update'] = "now()";
				
				if($atrlist['sid'] != ""){
					$this -> db -> where("sid = '".$atrlist['sid']."'");
					$result = $this -> db -> update($this -> table,$atrlist);
				}else{
					$result = false;
				}
			}else{
				$result = false;
			}
			
			return $result;
		}
		
		function update_end_m($sid = ""){
			$atrlist['sid'] = $sid;
			$atrlist['sd_acc_state'] = "f";
			$atrlist['sd_end_m'] = date("Y-m-d");
			
			if($sid != ""){
				$this -> db -> where("sid = '".$sid."'");
				$result = $this -> db -> update($this -> table,$atrlist);
			}else{
				$result = false;
			}
			return $result;
			
		}
		
		function duplex_chk($where_list = array(),$nglist = array()){
			if($where_list != null){
				foreach($where_list as $key => $val){
					$where_dat[] = $key." = '".$val."' ";
				}
			}
			if($nglist != null){
				foreach($nglist as $key => $val){
					$where_dat[] = $key." <> '".$val."' ";
				}
			}
			
			if(is_array($where_dat)){
				$this->db->where(implode("and ",$where_dat));
			}
			
			
			$this->db->from($this -> table);
			$this->db->order_by("sid asc");
			
			$query = $this->db->get();
			$rows = $query->num_rows();
			
			if($rows == 0){
				return true;
			}else{
				return false;
			}
			
		}
		
		/* ディレクトリ削除メソッド */
		function deleteDir($rootPath){

			$strDir = opendir($rootPath);
			while($strFile = readdir($strDir)){
				if($strFile != '.' && $strFile != '..'){  //ディレクトリでない場合のみ
				unlink($rootPath.'/'.$strFile);
				}
			}
			rmdir($rootPath);
		}

		
		function make_search_cache($where_list = array()){
			$table = "t_search_cache";
			$table_list = array("t_shop_base");
			$column_list = array("t_shop_base" => "sid,sd_account,sd_customer_nm,sd_company_nm,sd_company_tel,sd_company_zip,sd_company_address,sd_shop_nm,sd_shop_tel,sd_shop_zip,sd_shop_address,sd_shop_access,sd_shop_url,sd_shop_open,sd_shop_off,sd_catch_copy,sd_intro");
			$ins_key = "";
			$ins_dat = "";
			$key_nm = "sid";
			$ins_column_nm = array("sid","search_data");
			
			
			// where 条件の設定
			if($where_list != null){
				foreach($where_list as $key => $val){
					$where_dat[] = $key." = ".$val." ";
				}
				if(isset($where_dat) and $where_dat != null){
					$where = implode("and ",$where_dat);
				}
			}
			
			// SQL発行
			for($i=0;$i<count($table_list);$i++){
				$select_column = "";
				$select_column = $column_list[$table_list[$i]];
				
				$this->db->select($select_column);
				$this->db->from($table_list[$i]);
				$this->db->where($where);
				
				$query = $this->db->get();
				$rows = $query->num_rows;
				
				if($rows > 0){
					$ins_dat_arr = $query->result_array();
					for($y=0;$y<count($ins_dat_arr);$y++){
						foreach($ins_dat_arr[$i] as $column_nm => $column_val){
							if($column_nm == $key_nm){
								$ins_key = $ins_dat_arr[$i][$column_nm];
								$ins_dat_arr[$i][$column_nm] = sprintf("%04d",$ins_dat_arr[$i][$column_nm]);
							}else{
								$ins_dat_arr[$i][$column_nm] = mb_convert_kana($column_val,"KVa","UTF-8");
							}
						}
#						if(isset($ins_dat_arr[$i][$key_nm])){
#							$ins_key = $ins_dat_arr[$i][$key_nm];
#							$ins_dat_arr[$i][$key_nm] = sprintf("%04d",$ins_dat_arr[$i][$key_nm]);
#						}
						$ins_dat .= implode(" ",$ins_dat_arr[$i]);
						$ins_dat = strtolower($ins_dat);
					}
				}
			}
# print $ins_dat;
# exit;
			
			if($ins_key != "" and $ins_dat != ""){
				for($i=0;$i<count($ins_column_nm);$i++){
					if($ins_column_nm[$i] == $key_nm){
#						$atrlist[$ins_column_nm[$i]] = $ins_key;
					}else{
						$atrlist[$ins_column_nm[$i]] = $ins_dat;
					}
				}
				
				// 検索キャッシュの更新
				$this->db->where($where);
				$this->db->update($table,$atrlist);
				
			}
			
		}
		
		function make_rank_pulldown($rank = ""){
			
			/*20180202 ランク変更対応 ST*/
			$rank_arr['S'] = "ランクS";
			$rank_arr['A'] = "ランクA";
			$rank_arr['B'] = "ランクB";
			$rank_arr['C'] = "ランクC";
			$rank_arr['D'] = "ランクD";
			$rank_arr['E'] = "ランクE";
			
			/*
			$rank_arr['A'] = "ランクA";
			$rank_arr['B'] = "ランクB";
			$rank_arr['C'] = "ランクC";
			$rank_arr['D'] = "ランクD";
			$rank_arr['E'] = "ランクE";
			$rank_arr['F'] = "ランクF";
			*/
			/*20180202 ランク変更対応 ED*/
			
			$pulldown = "<option value=\"\">-----</option>\n";
			
			foreach($rank_arr as $key => $val){
				$pulldown .= "<option value=\"".$key."\">".$val."</option>\n";
			}
			
			$pulldown = str_replace("value=\"".$rank."\">","value=\"".$rank."\" selected=\"selected\">",$pulldown);
			
			
			return $pulldown;
		}
		
		
	
	}
	
?>