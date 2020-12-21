<?
	class Accountmodel extends Model {
		var $table = "t_shop_base";
		var $rows = 0;
		var $total_rows = 0;
		var $search_base = "/admin/account/search/";
		var $base_url = "/admin/account/";
		
		function Accountmodel(){
			parent::Model();
			
		}
		
		
		function do_insert($list = array()){
			$cache_data_arr = array();
			/* ------------------------------------------------------------------ */
			/* DB登録項目整形
			--------------------------------------------------------------------- */
			$atrlist['sd_account'] = $list['sd_account'];
			$atrlist['sd_customer_nm'] = $list['sd_customer_nm'];
			$atrlist['sd_contract_shop'] = $list['sd_contract_shop'];
			$atrlist['sd_remind_mail'] = $list['sd_remind_mail'];
			$atrlist['sd_pwd'] = $list['sd_pwd'];
			$atrlist['sd_info_mail'] = $list['sd_remind_mail'];
			$atrlist['sd_start_m'] = date("Y-m")."-01";
			/* ------------------------------------------------------------------ */
			/* Query実行
			--------------------------------------------------------------------- */
			$result = $this -> db -> insert($this ->table,$atrlist);
			/* ------------------------------------------------------------------ */
			if($result){
				unset($atrlist);
				$sid = $this->db->insert_id();
				$atrlist['sid'] = $sid;
				
#				if($atrlist != null){
#					// キャッシュ用データ作成
#					foreach($list as $key => $val){
#						switch($key){
#							case "sid":
#							case "sd_account":
#							case "sd_customer_nm":
#							case "sd_contract_shop":
#								
#								if($key == "sid"){
#									$val = sprintf("%04d",$val);
#								}
#								
#								$cache_data_arr[] = $val;
#							break;
#							default:
#							break;
#						}
#						
#					}
#					if($cache_data_arr != null){
#						$atrlist['search_data'] = implode(" ",$cache_data_arr);
#					}
#					
#				}
				
				
				// キャッシュデータの作成
				$this->db->insert("t_search_cache",$atrlist);
				return true;
			}else{
				return false;
			}
			
		}
		
		
#		function do_select($no = ""){
#			/* ------------------------------------------------------------------ */
#			/* where条件設定
#			--------------------------------------------------------------------- */
# #			if($no != ""){
# #				$this -> db -> where("sid = '".$no."'");
# #			}
# #			/* ------------------------------------------------------------------ */
# #			$this->db->select("*");
# #			$this->db->from($this -> table);
# #			$this->db->orderby("sid asc");
# #			
# #			/* ------------------------------------------------------------------ */
# #			/* Query実行
# #			--------------------------------------------------------------------- */
# #			$query = $this->db->get();
# #			$rows = $query->num_rows();
# #			$this->rows = $rows;
# #			
# #			if($rows > 0){
# #				$result = $query->result_array();
# #				return $result;
# #			}else{
# #				return array();
# #			}
#		}
		
		
		/* ------------------------------------------------------------------ */
		/* 重複チェック用DB SELECT
		--------------------------------------------------------------------- */
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
		/* ------------------------------------------------------------------ */
		/* 表示用データ整形
		--------------------------------------------------------------------- */
		function data_display($data_array = array()){
			if($data_array != null){
				$array = $data_array;
				
				if($array['sd_acc_state'] == "t"){
					$array['sd_acc_state'] = "有効";
				}else{
					$array['sd_acc_state'] = "無効";
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
				foreach($array as $key => $val){
					if($array[$key] == ""){
						if($key == "sd_memo" or $key == "sd_intro"){
							continue;
						}
						if($key == "sd_end_m"){
							$array[$key] = "---";
						}else{
							$array[$key] = "&nbsp;";
						}
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
		/* ------------------------------------------------------------------ */
		/* 表示用データ整形
		--------------------------------------------------------------------- */
		function do_search($list = "",$url = ""){
#			$where_dat = array();
			$offset = "";
			$limit = "";
			$val_arr = array();
			$where_dat = array();
			$order = "";
			$loop_start = 0;
			$loop_end = 0;
			if($list != null){
				foreach($list as $key => $val){
					if($val != ""){
						switch($key){
							case "keyword":
								$val = urldecode($val);
								$val = str_replace("　"," ",$val);
								$val = trim($val);
								$val_arr = explode(" ",$val);
								for($i=0;$i<count($val_arr);$i++){
									$where_dat[] = "search_data like '%".$val_arr[$i]."%'";
								}
								
#								for($i=0;$i<count($val_arr);$i++){
#									if(!is_numeric($val_arr[$i])){
#										$search_sid = "";
#									}else{
#										$search_sid = "sid like '%".(int)$val_arr[$i]."%' or ";
#									}
#									$where_dat[] = "(".$search_sid."sd_account like '%".$val_arr[$i]."%' or sd_customer_nm like '%".$val_arr[$i]."%') ";
#								}
							break;
							case "sd_last_login":
								if($val == 0){
									$where_dat[] = $key." is null ";
								}else{
									$where_dat[] = $key." is not null ";
								}
							break;
							case "sd_acc_state":
								if($val == 0){
									$where_dat[] = $key." = 'f' ";
								}else{
									$where_dat[] = $key." = 't' ";
								}
							break;
							case "sd_exam_state":
								$where_dat[] = $key." = '".$val."' ";
							break;
							case "start":
								$offset = $val;
							break;
							case "limit":
								$limit = $val;
							break;
							case "order":
								list($order_nm,$order_type) = explode("-",$val);
#								$order = "sd_regist_date ".$val.",sid asc  ";
								$order = "sd_".$order_nm." ".$order_type.",sid asc";
							break;
							case "managecode":
								$val = urldecode($val);
								$where_dat[] = "( sd_manage_a like '%".$val."%' or sd_manage_b like '%".$val."%' or sd_manage_c like '%".$val."%' or sd_manage_d like '%".$val."%' or sd_manage_e like '%".$val."%' or sd_manage_f like '%".$val."%' )";
							break;
						
						}
					}
				}
				if($where_dat != null){
					$this -> db -> where(implode("and ",$where_dat));
				}
				
			}
			if($order != ""){
				$this->db->order_by($order);
			}
			/* ------------------------------------------------------------------ */
			/* Query実行
			--------------------------------------------------------------------- */
			// $limit が空だったらデフォルト件数で表示
			if($limit == ""){
				$limit = 10;
			}
			
			// サブクエリー
			$sub_query = "(select sid,to_char(sid,'0000') || ' ' || sd_account || ' ' || ";
			$sub_query .= "case when sd_shop_nm is null then '' else sd_shop_nm end || ' ' || ";
			$sub_query .= "case when sd_customer_nm is null then '' else sd_customer_nm end || ' ' ||";
			$sub_query .= "case when sd_contract_shop is null then '' else sd_contract_shop end  || ' ' ||";
			$sub_query .= "case when sd_memo is null then '' else sd_memo end ";
			$sub_query .= "as search_data from t_shop_base) as search";
			
			
			// セレクトするカラム
			$table_data = array();
			$select_column = "";
			$table_data = $this->db->list_fields('t_shop_base');
			if($table_data != null){
				$select_column = implode(",",$table_data);
				$select_column = str_replace("sid","sb.sid",$select_column);
				
			}
			
			if($select_column == ""){
				$select_column = "*";
			}
			
			$this->db->select($select_column);
			
			$this->db->from('t_shop_base sb');
			$this->db->join($sub_query,"sb.sid = search.sid","left");
			$this->db->limit($limit,$offset);
			
			$query = $this->db->get();
#			$query = $this->db->get($this -> table,$limit,$offset);
			
			
			// もう一度総検索数出力queryのためのwhere条件を設定
			if($where_dat != null){
				$this -> db -> where(implode("and ",$where_dat));
			}
			
			// 総検索数の取得
#			$rows_query = $this->db->get($this -> table);
			$this->db->select($select_column);
			
			$this->db->from('t_shop_base sb');
			
			$this->db->join($sub_query,"sb.sid = search.sid","left");
			
			$rows_query = $this->db->get();
			
			$rows = $rows_query->num_rows();
			$this->rows = $rows;
			
			
			if($rows > 0){
				$data['query'] = $query->result_array();
			}else{
				$data['query'] = array();
			}
			// pager の取得
			$data['pager'] = $this->pager($rows,$limit,$url,$offset);
			
			// 総登録数の取得
			$total_query = $this->db->get($this->table);
			$this->total_rows = $total_query->num_rows();
			
			$data['total_rows'] = $this->total_rows;
			
			// result_navi 用件数取得
			if($offset == "" and $rows > 0){
				$loop_start = 1;
			}elseif($offset == "" and $rows == 0){
				$loop_start = 0;
			}else{
				$loop_start = $offset + 1;
			}
			
			$loop_end = $offset + $limit;
			if($loop_end > $rows){
				$loop_end = $rows;
			}
			
#			if($limit > $rows){
#				$loop_end = $rows;
#			}else{
#				$loop_end = $offset + $limit;
#				if($loop_end <= 0){
#					$loop_end = $rows;
#				}
#			}
			
			
			$data['result_navi'] = $rows."件の結果が見つかりました。現在 ".$loop_start."-".$loop_end."件を表示しています";
			
			
			return $data;
			/* ------------------------------------------------------------------ */
		}
		/* ------------------------------------------------------------------ */
		/* Pager
		--------------------------------------------------------------------- */
		function pager($rows = 0,$per_page = 10,$url = "",$offset = 0){
			$this->load->library('pagination');
			
			$config['base_url'] = "/admin/account/search/".$url;
			$config['total_rows'] = $rows;
			$config['per_page'] = $per_page;
			$config['num_links'] = 4;
			$config['cur_page'] = $offset;
			
			$config['first_link'] = "";
			$config['last_link'] = "";
			
			$config['prev_link'] = "前の".$per_page."件 <<";
			$config['next_link'] = ">> 次の".$per_page."件";
			$config['cur_tag_open'] = "<b>";
			$config['cur_tag_close'] = "</b>";
			
			$this->pagination->initialize($config);
			
			$result = $this->pagination->create_links();
			if($result == ""){
				$result = "<b>1</b>";
			}
			return $result;
			
		}
		
		
		function get_request_url($post = ""){
			$url_str = "";
			$str_arr = array();
			
			if(is_array($post)){
				foreach($post as $key => $val){
					if($val != ""){
						switch($key){
							case "limit":
								$str_arr[] = "Lim_".$val;
							break;
							case "sd_last_login":
								$str_arr[] = "Log_".$val;
							break;
							case "sd_acc_state":
								$str_arr[] = "Acc_".$val;
							break;
							case "sd_exam_state":
								$str_arr[] = "Exa_".$val;
							break;
							case "keyword":
								$val = urlencode($val);
								$val = str_replace("+","%20",$val);
								$str_arr[] = "Key_".$val;
							break;
							case "order":
								$str_arr[] = "Ord_".$val;
							break;
							case "managecode":
								$val = urlencode($val);
								$val = str_replace("+","%20",$val);
								$str_arr[] = "Cod_".$val;
							break;
						}
					}
				}
				if($str_arr != null){
					$url_str = implode("/",$str_arr)."/";
				}
				if($url_str != ""){
					return $this->search_base.$url_str;
				}else{
					return $this->base_url.$url_str;
				}
				
			}
			
			
			
		}
		
		function select_next_sid(){
			$this->db->select_max('sid');
			$query = $this->db->get($this->table);
			
			$rows = $query->num_rows();
			
			if($rows == 1){
				$result = $query->result_array();
				$sid = $result[0]['sid'];
				$this->db->query("select setval('t_shop_base_sid_seq',".$sid.")");
				
				$next_sid = $result[0]["sid"] + 1;
				
				return $next_sid;
				
			}else{
				return "";
			}
		}
		
		
		
		
		
	
	}
	
?>