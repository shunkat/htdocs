<?
	class Estimate_formmodel extends Model {
#		var $table = "t_shop_service";
#		var $rows;
		
		function Estimate_formmodel(){
			parent::Model();
			$this -> load -> helper(array('mail_subject','user_agent'));
		}
		
		function do_select($table = "",$where_arr = array(),$select_culum = "*"){
			$where_dat = array();
			$where = "";
#			$select_culum = "";
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
#				$this->db->select("*");
				
				/* ------------------------------------------------------------------ */
				/* 抽出するテーブルごとの設定
				--------------------------------------------------------------------- */
				switch($table){
					case "t_shop_plandiscount pds":
						$this->db->join("t_shop_dscbase db","pds.db_no = db.db_no","left");
						$this->db->order_by("pds.db_no asc");
						$this->db->group_by("pds.pb_no,pds.db_no,db_menu_nm,db_menu_detail");
#						$select_culum = "pds.pb_no,pds.db_no,db_menu_nm,db_menu_detail";
						
					break;
					case "t_shop_plandiscount pds2":
						$this->db->join("t_shop_dscdetail dd","pds2.db_no = dd.db_no and pds2.dd_level_no = dd.dd_level_no","left");
						$this->db->order_by("pds2.dd_level_no asc");
#						$select_culum = "pds2.db_no,pds2.dd_level_no,dd_dsc_nm";
					break;
					case "t_shop_planbase":
						$select_culum = "sid,pb_plan_nm";
					break;
					case "t_shop_base":
#						$select_culum = "sd_shop_nm,sd_estimate_mail,di_itm01_nm,di_itm02_nm,di_itm03_nm,di_itm04_nm,di_itm05_nm,di_itm06_nm,di_itm07_nm,di_itm08_nm";
					break;
					case "t_shop_dscbase db":
						$this->db->join("t_shop_dscdetail dd","db.db_no = dd.db_no","left");
						$this->db->order_by("db.db_no asc,dd_level_no asc");
#						$select_culum = "db_menu_nm,db_menu_detail,dd_dsc_nm";
					break;
					case "t_shop_dscbase":
#						$select_culum = "db_menu_nm,db_menu_detail";
					break;
					case "t_shop_mailformat":
#						$select_culum = "mail_subject,mail_greeting,mail_footer";
					break;
					case "t_shop_planbase pb":
						$this->db->join("t_shop_plandetail pd","pb.pb_no = pd.pb_no","left");
#						$select_culum = "pb_plan_nm,pb_itm01_state,pb_itm02_state,pb_itm03_state,pb_itm04_state,pb_itm05_state,";
#						$select_culum .= "pb_itm06_state,pb_itm07_state,pb_itm08_state,pd_weight_tax,pd_insrnc_price,pd_stamp_price,";
#						$select_culum .= "pd_itm01_price,pd_itm02_price,pd_itm03_price,pd_itm04_price,pd_itm05_price,pd_itm06_price,";
#						$select_culum .= "pd_itm07_price,pd_itm08_price";
					break;
					case "t_shop_plandiscount spd":
						$this->db->join("t_shop_dscdetail sdd","spd.db_no = sdd.db_no and spd.dd_level_no = sdd.dd_level_no","left");
						$this->db->join("t_shop_dscbase sdb","sdd.db_no = sdb.db_no","left");
						$this->db->order_by("sdd.db_no asc,sdd.dd_level_no asc");
					break;
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
		
		function make_detail($list){
			$array = array();
			if($list != null){
				$select_culum = "pds2.db_no,pds2.dd_level_no,dd_dsc_nm";
				for($i=0;$i<count($list);$i++){
					$result = $this->do_select("t_shop_plandiscount pds2",array("pds2.db_no" => $list[$i]['db_no'],"pds2.pb_no" => $list[$i]['pb_no']),$select_culum);
					
					if($result != null){
						for($y=0;$y<count($result);$y++){
							if($result[$y]['dd_dsc_nm'] != ""){
								$array[$list[$i]['db_no']][$result[$y]['dd_level_no']] = $result[$y]['dd_dsc_nm'];
							}else{
								$array[$list[$i]['db_no']][$result[$y]['dd_level_no']] = "使う";
							}
						}
					}
					
				}
			}
			
			return $array;
		}
		
		
		function user_data_format($array = array()){
			if($array != ""){
				
				// 自動車の種別
				if($array['car_type'] == 0){
					$user_data['car_type'] = "軽自動車";
				}elseif($array['car_type'] == 1){
					$user_data['car_type'] = "小型";
				}elseif($array['car_type'] == 2){
					$user_data['car_type'] = "普通";
				}else{
					$user_data['car_type'] = "";
				}
				
				// 用途
#				if($array['car_use'] == 0){
#					$user_data['car_use'] = "乗用";
#				}elseif($array['car_use'] == 1){
#					$user_data['car_use'] = "貨物";
#				}elseif($array['car_use'] == 2){
#					$user_data['car_use'] = "特殊";
#				}elseif($array['car_use'] == 3){
#					$user_data['car_use'] = "その他";
#				}else{
#					$user_data['car_use'] = "";
#				}
				
				// 車両重量
				if($array['car_weight'] != ""){
					$user_data['car_weight'] = number_format($array['car_weight'])." kg";
				}else{
					$user_data['car_weight'] = "";
				}
				
				// 車両総重量
#				if($array['car_total_weight'] != ""){
#					$user_data['car_total_weight'] = number_format($array['car_total_weight'])." kg";
#				}else{
#					$user_data['car_total_weight'] = "";
#				}
				
				// 保証サービス
#				if($array['car_service'] == 1){
#					$user_data['car_service'] = "希望する";
#				}else{
#					$user_data['car_service'] = "希望しない";
#				}
				
			}else{
				$user_data = array();
			}
			
			return $user_data;
			
		}
		
		function charge_table($array = array(),$sid = ""){
			
			
			$basic_item = "";
			$advansed_item = "";
			
			if($array != null and $sid != ""){
				// プラン料金の項目名を取得
				$select_column = "di_itm01_nm,di_itm02_nm,di_itm03_nm,di_itm04_nm,di_itm05_nm,di_itm06_nm,di_itm07_nm,di_itm08_nm";
				$item_result = $this->do_select("t_shop_base",array("sid" => $sid),$select_column);
				
				if($item_result != null and count($item_result) == 1){
					$item_arr = $item_result[0];
					for($i=0;$i<count($item_arr);$i++){
						if($item_arr['di_itm0'.($i + 1).'_nm'] == ""){
							$item_name_arr['pd_itm0'.($i + 1).'_price'] = "料金構成要素".($i + 1);
						}else{
							$item_name_arr['pd_itm0'.($i + 1).'_price'] = $item_arr['di_itm0'.($i + 1).'_nm'];
						}
					}
				}
				
				$nglist = array("pb_plan_nm","pb_itm01_state","pb_itm02_state","pb_itm03_state","pb_itm04_state","pb_itm05_state","pb_itm06_state","pb_itm07_state","pb_itm08_state");
			
				// ステータス名割り出し用配列の作成
				for($i=0;$i<9;$i++){
					$item_column_arr['pd_itm0'.($i + 1).'_price'] = "pb_itm0".($i + 1)."_state";
				}
			
#				$estimate_item = "■料金テーブル\n";
				$cost_sum = 0;
				foreach($array as $key => $val){
					if(array_search($key,$nglist) === false){
						if($key == "pd_weight_tax"){
							$basic_item .= "○重量税\n　　　　　　".number_format($val)." 円\n";
							$cost_sum = $cost_sum + $val;
						}elseif($key == "pd_insrnc_price"){
							$basic_item .= "○自賠責保険\n　　　　　　".number_format($val)." 円\n";
							$cost_sum = $cost_sum + $val;
#						}elseif($key == "pd_stamp_price"){
						}elseif($key == "stamp_price"){
							$basic_item .= "○印紙代\n　　　　　　".number_format($val)." 円\n";
							$cost_sum = $cost_sum + $val;
						}else{
							if($array[$item_column_arr[$key]] == "t"){
								$advansed_item .= "○".$item_name_arr[$key]."\n　　　　　　".number_format($val)." 円\n";
								$cost_sum = $cost_sum + $val;
							}
						}
					}
				}
				if($cost_sum != 0){
#					$estimate_item .= "---------------------\n";
#					$estimate_item .= "　料金小計： ".number_format($cost_sum)." 円\n";
				}
			}else{
				$estimate_item = "";
				$cost_sum = 0;
			}
			$return_data['basic_item'] = $basic_item;
			$return_data['advansed_item'] = $advansed_item;
			$return_data['cost_sum'] = $cost_sum;
			
			return $return_data;
			
		}
		
		function discount_table($array = array()){
			if($array != null){
				
				// 値引き情報を抽出
				$select_column = "db_menu_nm,dd_dsc_nm,dd_dsc_price";
#				$dsc_item = "■割引メニュー\n";
				$dsc_item = "";
				$input_item = "";
				$dsc_total = 0;
				
				
				if(isset($array) and $array != ""){
					for($i=0;$i<count($array);$i++){
						list($db_no,$dd_level_no) = explode("_",$array[$i]);
						
						if(ereg("([0-9]+)",$dd_level_no)){
							$dsc_data = $this->do_select("t_shop_dscbase db",array("db.db_no" => $db_no,"dd_level_no" => $dd_level_no),$select_column);
							
							if($dsc_data != null and count($dsc_data) == 1){
								$dsc_item .= "○".$dsc_data[0]['db_menu_nm'];
								$input_item .= "[".$dsc_data[0]['db_menu_nm']."]";
								
								if($dsc_data[0]['dd_dsc_nm'] != ""){
									$dsc_item .= "[".$dsc_data[0]['dd_dsc_nm']."]";
									$input_item .= "\n　　　　　　　　　　　　".$dsc_data[0]['dd_dsc_nm']."\n";
								}else{
									$input_item .= "\n　　　　　　　　　　　　使う\n";
								}
								$dsc_item .= "\n　　　　　　▲".number_format($dsc_data[0]['dd_dsc_price'])." 円\n";
								$dsc_total = $dsc_data[0]['dd_dsc_price'] + $dsc_total;
							}
							
						}else{
							$dsc_data = $this->do_select("t_shop_dscbase",array("db_no" => $db_no),"db_menu_nm");
							
							
							if($dsc_data != null and count($dsc_data) == 1){
								if($dd_level_no == "nouse"){
									$input_item .= "[".$dsc_data[0]['db_menu_nm']."]\n　　　　　　　　　　　　使わない\n";
								}else{
									$input_item .= "[".$dsc_data[0]['db_menu_nm']."]\n　　　　　　　　　　　　分からない\n";
								}
							}
							
						}
					}
					
#					$dsc_item .= "---------------------\n";
#					$dsc_item .= "　割引小計： -".number_format($dsc_total)." 円\n";
					
				}
				
			}else{
				$dsc_item = "";
				$dsc_total = 0;
			}
			$discount_data['dsc_item'] = $dsc_item;
			$discount_data['input_item'] = $input_item;
			$discount_data['dsc_total'] = $dsc_total;
			
			return $discount_data;
		}
		
		
		function no_use_discount($array = array(),$pb_no = ""){
			$no_use_dsc = "";
			
			if($array != null){
				
				for($i=0;$i<count($array);$i++){
					
					list($db_no,$dd_level_no) = explode("_",$array[$i]);
					
					if($dd_level_no == "nouse" or $dd_level_no == "nojudge"){
						$select_column = "db_menu_nm,dd_dsc_nm,dd_dsc_price";
#						$dsc_data = $this->do_select("t_shop_dscbase db",array("db.db_no" => $db_no),$select_column);
						$dsc_data = $this->do_select("t_shop_plandiscount spd",array("spd.db_no" => $db_no,"pb_no" => $pb_no),$select_column);
						
						
						if($dsc_data != null){
							for($y=0;$y<count($dsc_data);$y++){
								if($dsc_data[$y]['dd_dsc_price'] != ""){
									$no_use_dsc .= "●".$dsc_data[$y]['db_menu_nm'];
									if($dsc_data[$y]['dd_dsc_nm'] != ""){
										$no_use_dsc .= "[".$dsc_data[$y]['dd_dsc_nm']."]";
									}
									$no_use_dsc .= "\n　　　　　　▲".number_format($dsc_data[$y]['dd_dsc_price'])."円\n";
								}
								
							}
						}
						
						
					}
					
					
				}
			}
			
			return $no_use_dsc;
			
		}
		
		/*20161219@nagai ST*/
		// 入庫希望日時プルダウン
		function car_check_pulldown2($selected_y = "",$selected_m = "",$selected_d = ""){
			
			// 本日の年月日を取得
			$today_y = date("Y");
			$today_m = date("m");
			$today_d = date("d");
			
			$today_now = date("Y/m/d H:i:s");
			
			// 何年前から表示か設定
			$ago = 0;
			
			// 何年まで表示
			$later = 1;
			
			// 年
			$check_y2 = "<select id=\"check_y2\" name=\"check_y2\" class=\"validate[optional]\" ";
			if(user_agent())$check_y2 .= "style=\"width:28%\">\n";
			else $check_y2 .= ">\n";
			$check_y2 .= "<option value=\"\">選択</option>\n";
			
			//令和元号対応 ST
			for($i=($today_y - $ago);$i<=($today_y + $later);$i++){
				//テスト用にセット (後でコメントアウト)
				//$today_now = '2019/05/01 00:00:00';
				
				if($today_now >= '2019/05/01 00:00:00'){
					
					if($i == 2019){
						$check_y2 .= "<option value=\"".$i."\">令和".($i - 2018)." (平成".($i - 1988).")</option>\n";
					}else{
						$check_y2 .= "<option value=\"".$i."\">令和".($i - 2018)."</option>\n";
					}
					$check_y2 = str_replace('令和1', '令和元', $check_y2);
					
				}else{
					$check_y2 .= "<option value=\"".$i."\">平成".($i - 1988)."</option>\n";
				}
			}
			
			//現状処理コメントアウト ST
			/*
			for($i=($today_y - $ago);$i<=($today_y + $later);$i++){
				$check_y2 .= "<option value=\"".($i - 1988)."\">平成".($i - 1988)."</option>\n";
			}
			*/
			//現状処理コメントアウト ED
			//令和元号対応 ED
			$check_y2 .= "</select>\n";
			$check_y2 = str_replace("value=\"".$selected_y."\">","value=\"".$selected_y."\" selected=\"selected\">",$check_y2);
			
			
			// 月
			$checked_m2 = "<select id=\"check_m2\" name=\"check_m2\" class=\"validate[optional]\" ";
			if(user_agent())$checked_m2 .= "style=\"width:24%\">\n";
			else $checked_m2 .= ">\n";
			$checked_m2 .= "<option value=\"\">選択</option>\n";
			
			for($i=1;$i<=12;$i++){
				$checked_m2 .= "<option value=\"".sprintf("%02d",$i)."\">".$i."</option>\n";
			}
			$checked_m2 .= "</select>\n";
			$checked_m2 = str_replace("value=\"".$selected_m."\">","value=\"".$selected_m."\" selected=\"selected\">",$checked_m2);
			
			
			// 日
			$checked_d2 = "<select id=\"check_d2\" name=\"check_d2\" class=\"validate[optional]\" ";
			if(user_agent())$checked_d2 .= "style=\"width:24%\">\n";
			else $checked_d2 .= ">\n";
			//$checked_d2.= "<option value=\"\">選択</option>\n";
			$checked_d2.= "<option value=\"不明\">不明</option>\n";
			for($i=1;$i<=31;$i++){
				$checked_d2 .= "<option value=\"".sprintf("%02d",$i)."\">".$i."</option>\n";
			}
			$checked_d2 .= "</select>\n";
			$checked_d2= str_replace("value=\"".$selected_d."\">","value=\"".$selected_d."\" selected=\"selected\">",$checked_d2);
			
			// return data 整形
			$pulldown2 = $check_y2." 年".$checked_m2." 月".$checked_d2." 日";
			
			return $pulldown2;
		}
		
		// 時間帯プルダウン
		function time_zone_pulldown($selected_data = ""){
			$time_zone_arr['0'] = "午前";
			$time_zone_arr['1'] = "午後";
			$time_zone_arr['2'] = "夕方以降";
			
			
			$time_zone = "<select name=\"time_zone\" class=\"validate[optional]\" ";
			if(user_agent())$time_zone .= ">\n";
			else $time_zone .= "style=\"width:20%\">\n";
			$time_zone .= "<option value=\"\">時間帯の選択</option>\n";
			
			foreach($time_zone_arr as $key => $val){
				$time_zone .= "<option value=\"".$key."\">$val</option>\n";
			}
			$time_zone .= "</select>\n";
			$time_zone = str_replace("value=\"".$selected_data."\">","value=\"".$selected_data."\" selected=\"selected\">",$time_zone);
			
			return $time_zone;
		}
		/*20161219@nagai END*/
		
		// 車検満了日プルダウン
		function car_check_pulldown($selected_y = "",$selected_m = "",$selected_d = ""){
			
			// 本日の年月日を取得
			$today_y = date("Y");
			$today_m = date("m");
			$today_d = date("d");
			
			$today_now = date("Y/m/d H:i:s");
			
			/*20161219@nagai ST*/
			// 何年前から表示か設定
			$ago = 1;
			
			// 何年まで表示
			$later = 3; 
			/*
			
			// 何年前から表示か設定
			$ago = 0;
			
			// 何年まで表示
			$later = 7;
			*/
			/*20161219@nagai END*/
			
			// 年
			$check_y = "<select id=\"check_y\" name=\"check_y\" class=\"validate[required]\" ";
			if(user_agent())$check_y .= "style=\"width:28%\">\n";
			else $check_y .= ">\n";
			$check_y .= "<option value=\"\">選択</option>\n";
			
			//令和元号対応 ST
			//現状処理コメントアウト
			/*
			for($i=($today_y - $ago);$i<=($today_y + $later);$i++){
				$check_y .= "<option value=\"".($i - 1988)."\">平成".($i - 1988)."</option>\n";
			}
		  */
			
			for($i=($today_y - $ago);$i<=($today_y + $later);$i++){
				
				//テスト用にセット (後でコメントアウト)
				//$today_now = '2019/05/01 00:00:00';
				
				if($today_now >= '2019/05/01 00:00:00'){
					
					if($i < 2019){
						$check_y .= "<option value=\"".$i."\">平成".($i - 1988)."</option>\n";
					}else{
						
						if($i >= 2019 and $i <= 2022){
							$check_y .= "<option value=\"".$i."\">令和".($i - 2018)." (平成".($i - 1988).")</option>\n";
						}else{
							$check_y .= "<option value=\"".$i."\">令和".($i - 2018)."</option>\n";
						}
									
						$check_y = str_replace('令和1', '令和元', $check_y);
					
					}
					
				}else{
				
					$check_y .= "<option value=\"".$i."\">平成".($i - 1988)."</option>\n";
				}
				
			}
			//令和元号対応 ED
			
			$check_y .= "</select>\n";
			$check_y = str_replace("value=\"".$selected_y."\">","value=\"".$selected_y."\" selected=\"selected\">",$check_y);
			
			
			// 月
			$checked_m = "<select id=\"check_m\" name=\"check_m\" class=\"validate[required]\" ";
			if(user_agent())$checked_m .= "style=\"width:24%\">\n";
			else $checked_m .= ">\n";
			$checked_m .= "<option value=\"\">選択</option>\n";
			
			for($i=1;$i<=12;$i++){
				$checked_m .= "<option value=\"".sprintf("%02d",$i)."\">".$i."</option>\n";
			}
			$checked_m .= "</select>\n";
			$checked_m = str_replace("value=\"".$selected_m."\">","value=\"".$selected_m."\" selected=\"selected\">",$checked_m);
			
			
			// 日
			$checked_d = "<input id=\"check_d\" name=\"check_d\" value=\"不明\" type=\"hidden\" ";
			/*$checked_d = "<select id=\"check_d\" name=\"check_d\" class=\"validate[required]\" ";
			if(user_agent())$checked_d .= "style=\"width:24%\">\n";
			else $checked_d .= ">\n";
			//$checked_d.= "<option value=\"\">選択</option>\n";
			$checked_d.= "<option value=\"不明\">不明</option>\n";
			for($i=1;$i<=31;$i++){
				$checked_d .= "<option value=\"".sprintf("%02d",$i)."\">".$i."</option>\n";
			}
			$checked_d .= "</select>\n";*/
			$checked_d= str_replace("value=\"".$selected_d."\">","value=\"".$selected_d."\" selected=\"selected\">",$checked_d);
			
			// return data 整形
			$pulldown = $check_y." 年".$checked_m." 月".$checked_d." 日";
			
			return $pulldown;
		}
		
		// 自動車の種別プルダウン
		function car_type_pulldown($selected_data = ""){
			$car_type_arr['0'] = "軽自動車";
			$car_type_arr['1'] = "小型（乗用車なら、5,7ナンバー)";
			$car_type_arr['2'] = "普通(乗用車なら、3ナンバー)";
			
			
			$car_type = "<select name=\"car_type\" class=\"validate[required]\" onchange=\"car_check();\" ";
			if(user_agent())$car_type .= ">\n";
			else $car_type .= "style=\"width:40%\">\n";
#			$car_type = "<select name=\"car_type\">\n";
			$car_type .= "<option value=\"\">選択してください</option>\n";
			
			foreach($car_type_arr as $key => $val){
				$car_type .= "<option value=\"".$key."\">$val</option>\n";
			}
			$car_type .= "</select>\n";
			$car_type = str_replace("value=\"".$selected_data."\">","value=\"".$selected_data."\" selected=\"selected\">",$car_type);
			
			return $car_type;
		}
		
		function maker_pulldown($selected_data = ""){
			$maker_arr[] = array("0" =>"トヨタ");
			$maker_arr[] = array("1" =>"日産");
			$maker_arr[] = array("2" =>"ホンダ");
			$maker_arr[] = array("3" =>"マツダ");
			$maker_arr[] = array("4" =>"三菱");
			$maker_arr[] = array("5" =>"スバル");
			$maker_arr[] = array("6" =>"ダイハツ");
			$maker_arr[] = array("7" =>"スズキ");
			$maker_arr[] = array("8" =>"レクサス");
			$maker_arr[] = array("9" =>"ユーノス");
			$maker_arr[] = array("10" =>"日本フォード");
			$maker_arr[] = array("11" =>"ミツオカ");
			$maker_arr[] = array("12" =>"いすゞ");
			$maker_arr[] = array("13" =>"メルセデス・ベンツ");
			$maker_arr[] = array("14" =>"AMG");
			$maker_arr[] = array("15" =>"マイバッハ");
			$maker_arr[] = array("16" =>"スマート");
			$maker_arr[] = array("17" =>"BMW");
			$maker_arr[] = array("18" =>"BMWアルピナ");
			$maker_arr[] = array("19" =>"アウディ");
			$maker_arr[] = array("20" =>"フォルクスワーゲン");
			$maker_arr[] = array("21" =>"オペル");
			$maker_arr[] = array("22" =>"ポルシェ");
			$maker_arr[] = array("23" =>"ヨーロッパフォード");
			$maker_arr[] = array("24" =>"イエス！");
			$maker_arr[] = array("25" =>"ロールスロイス");
			$maker_arr[] = array("26" =>"ベントレー");
			$maker_arr[] = array("27" =>"ジャガー");
			$maker_arr[] = array("28" =>"デイムラー");
			$maker_arr[] = array("29" =>"ランドローバー");
			$maker_arr[] = array("30" =>"MG");
			$maker_arr[] = array("31" =>"MINI");
			$maker_arr[] = array("32" =>"ローバー");
			$maker_arr[] = array("33" =>"ロータス");
			$maker_arr[] = array("34" =>"アストンマーティン");
			$maker_arr[] = array("35" =>"モーガン");
			$maker_arr[] = array("36" =>"TVR");
			$maker_arr[] = array("37" =>"フィアット");
			$maker_arr[] = array("38" =>"アバルト");
			$maker_arr[] = array("39" =>"フェラーリ");
			$maker_arr[] = array("40" =>"ランチア");
			$maker_arr[] = array("41" =>"アルファロメオ");
			$maker_arr[] = array("42" =>"バーキン");
			$maker_arr[] = array("43" =>"CT&T");
			$maker_arr[] = array("44" =>"GMマティス");
			$maker_arr[] = array("45" =>"大宇");
			$maker_arr[] = array("46" =>"起亜");
			$maker_arr[] = array("47" =>"ヒュンダイ");
			$maker_arr[] = array("48" =>"ティアラ");
			$maker_arr[] = array("49" =>"スタークラフト");
			$maker_arr[] = array("50" =>"ダッジ");
			$maker_arr[] = array("51" =>"クライスラー・ジープ");
			$maker_arr[] = array("52" =>"クライスラー");
			$maker_arr[] = array("53" =>"マーキュリー");
			$maker_arr[] = array("54" =>"フォード");
			$maker_arr[] = array("55" =>"リンカーン");
			$maker_arr[] = array("56" =>"ハマー");
			$maker_arr[] = array("57" =>"サターン");
			$maker_arr[] = array("58" =>"ビュイック");
			$maker_arr[] = array("59" =>"ポンテアック");
			$maker_arr[] = array("60" =>"シボレー");
			$maker_arr[] = array("61" =>"キャデラック");
			$maker_arr[] = array("62" =>"ドンカーブート");
			$maker_arr[] = array("63" =>"サーブ");
			$maker_arr[] = array("64" =>"ボルボ");
			$maker_arr[] = array("65" =>"ヴェンチュリー");
			$maker_arr[] = array("66" =>"シトロエン");
			$maker_arr[] = array("67" =>"プジョー");
			$maker_arr[] = array("68" =>"ルノー");
			$maker_arr[] = array("69" =>"アウトビアンキ");
			$maker_arr[] = array("70" =>"ランボルギーニ");
			$maker_arr[] = array("71" =>"マセラティ");

			$maker = "<select id=\"maker\" name=\"maker\" onfocus=\"is_note_msg=true;\" onChange=\"createChildOptions(this.form)\" ";
			if(user_agent())$maker .= ">\n";
			else $maker .= "style=\"width:40%\">\n";
			$maker .= "<option value=\"\">選択してください</option>\n";
			
			for($i=0;$i<count($maker_arr);$i++){
				foreach($maker_arr[$i] as $key => $val){
					$maker .= "<option value=\"".$key."\">".$val."</option>\n";
				}
			}
			$maker .= "</select>\n";
			$maker = str_replace("value=\"".$selected_data."\">","value=\"".$selected_data."\" selected=\"selected\">",$maker);
			
			return $maker;
			
		}
		
		function weight_pulldown($selected_data = ""){
			$weight_arr[] = array("0" => "軽自動車");
			$weight_arr[] = array("1" => "1000kg以下");
			$weight_arr[] = array("2" => "1001kg～1500kg");
			$weight_arr[] = array("3" => "1501kg～2000kg");
			$weight_arr[] = array("4" => "2001kg～2500kg");
			
			
			$weight = "<select name=\"car_weight\" onchange=\"weight_check();\" class=\"validate[required]\" ";
			if(user_agent())$weight .= ">\n";
			else $weight .= "style=\"width:40%\">\n";
			$weight .= "<option value=\"\">選択してください</option>\n";
			
			for($i=0;$i<count($weight_arr);$i++){
				foreach($weight_arr[$i] as $key => $val){
					$weight .= "<option value=\"".$key."\">".$val."</option>\n";
				}
			}
			$weight .= "</select>\n";
			
			$weight = str_replace("value=\"".$selected_data."\">","value=\"".$selected_data."\" selected=\"selected\">",$weight);
			
			return $weight;
		}
		
		function maker_nm($maker_cd = ""){
			$maker_arr[] = array("0" =>"トヨタ");
			$maker_arr[] = array("1" =>"日産");
			$maker_arr[] = array("2" =>"ホンダ");
			$maker_arr[] = array("3" =>"マツダ");
			$maker_arr[] = array("4" =>"三菱");
			$maker_arr[] = array("5" =>"スバル");
			$maker_arr[] = array("6" =>"ダイハツ");
			$maker_arr[] = array("7" =>"スズキ");
			$maker_arr[] = array("8" =>"レクサス");
			$maker_arr[] = array("9" =>"ユーノス");
			$maker_arr[] = array("10" =>"日本フォード");
			$maker_arr[] = array("11" =>"ミツオカ");
			$maker_arr[] = array("12" =>"いすゞ");
			$maker_arr[] = array("13" =>"メルセデス・ベンツ");
			$maker_arr[] = array("14" =>"AMG");
			$maker_arr[] = array("15" =>"マイバッハ");
			$maker_arr[] = array("16" =>"スマート");
			$maker_arr[] = array("17" =>"BMW");
			$maker_arr[] = array("18" =>"BMWアルピナ");
			$maker_arr[] = array("19" =>"アウディ");
			$maker_arr[] = array("20" =>"フォルクスワーゲン");
			$maker_arr[] = array("21" =>"オペル");
			$maker_arr[] = array("22" =>"ポルシェ");
			$maker_arr[] = array("23" =>"ヨーロッパフォード");
			$maker_arr[] = array("24" =>"イエス！");
			$maker_arr[] = array("25" =>"ロールスロイス");
			$maker_arr[] = array("26" =>"ベントレー");
			$maker_arr[] = array("27" =>"ジャガー");
			$maker_arr[] = array("28" =>"デイムラー");
			$maker_arr[] = array("29" =>"ランドローバー");
			$maker_arr[] = array("30" =>"MG");
			$maker_arr[] = array("31" =>"MINI");
			$maker_arr[] = array("32" =>"ローバー");
			$maker_arr[] = array("33" =>"ロータス");
			$maker_arr[] = array("34" =>"アストンマーティン");
			$maker_arr[] = array("35" =>"モーガン");
			$maker_arr[] = array("36" =>"TVR");
			$maker_arr[] = array("37" =>"フィアット");
			$maker_arr[] = array("38" =>"アバルト");
			$maker_arr[] = array("39" =>"フェラーリ");
			$maker_arr[] = array("40" =>"ランチア");
			$maker_arr[] = array("41" =>"アルファロメオ");
			$maker_arr[] = array("42" =>"バーキン");
			$maker_arr[] = array("43" =>"CT&T");
			$maker_arr[] = array("44" =>"GMマティス");
			$maker_arr[] = array("45" =>"大宇");
			$maker_arr[] = array("46" =>"起亜");
			$maker_arr[] = array("47" =>"ヒュンダイ");
			$maker_arr[] = array("48" =>"ティアラ");
			$maker_arr[] = array("49" =>"スタークラフト");
			$maker_arr[] = array("50" =>"ダッジ");
			$maker_arr[] = array("51" =>"クライスラー・ジープ");
			$maker_arr[] = array("52" =>"クライスラー");
			$maker_arr[] = array("53" =>"マーキュリー");
			$maker_arr[] = array("54" =>"フォード");
			$maker_arr[] = array("55" =>"リンカーン");
			$maker_arr[] = array("56" =>"ハマー");
			$maker_arr[] = array("57" =>"サターン");
			$maker_arr[] = array("58" =>"ビュイック");
			$maker_arr[] = array("59" =>"ポンテアック");
			$maker_arr[] = array("60" =>"シボレー");
			$maker_arr[] = array("61" =>"キャデラック");
			$maker_arr[] = array("62" =>"ドンカーブート");
			$maker_arr[] = array("63" =>"サーブ");
			$maker_arr[] = array("64" =>"ボルボ");
			$maker_arr[] = array("65" =>"ヴェンチュリー");
			$maker_arr[] = array("66" =>"シトロエン");
			$maker_arr[] = array("67" =>"プジョー");
			$maker_arr[] = array("68" =>"ルノー");
			$maker_arr[] = array("69" =>"アウトビアンキ");
			$maker_arr[] = array("70" =>"ランボルギーニ");
			$maker_arr[] = array("71" =>"マセラティ");

			
			
			for($i=0;$i<count($maker_arr);$i++){
				foreach($maker_arr[$i] as $key => $val){
					$maker_nm_arr[$key] = $val;
				}
			}
			
			
			if($maker_cd == ""){
				$maler_nm = "&nbsp;";
			}else{
				$maler_nm = $maker_nm_arr[$maker_cd];
			}
			
			
			return $maler_nm;
			
		}
		
		// 複数行登録防止処理追加 2009/03/11 mori
		function conversion_count($sid = ""){
			if($sid != ""){
				// 初期設定
				$now_y = date("Y");
				$now_m = date("m");
				$result = "";
				
				// トランザクションスタート
				$this->db->trans_start();
				
				// コンバージョンをテーブルよりデータ取得
				$query = $this->db->query("select ud_conversion_cnt from t_manager_usedata where sid = '".$sid."' and ud_year = '".$now_y."' and ud_month = '".$now_m."' order by ud_no asc for update");
				$rows = $query->num_rows();
				
				if($rows == 1){
					$result = $query->result_array();
					
					// コンバージョンアップデート
					$this->db->query("update t_manager_usedata set ud_conversion_cnt = '".($result[0]['ud_conversion_cnt'] + 1)."' where sid = '".$sid."' and ud_year = '".$now_y."' and ud_month = '".$now_m."'");
				}elseif($rows == 0){
					// コンバージョンカウントテーブルインサート
					$this->db->query("insert into t_manager_usedata (sid,ud_year,ud_month,ud_conversion_cnt,ud_access_cnt,ud_coupon_cnt) values ('".$sid."','".$now_y."','".$now_m."',1,0,0)");
					
				}else{
					// 誤って複数行登録されてしまった時の処理
					$result = $query->result_array();
					$this->db->query("update t_manager_usedata set ud_conversion_cnt = '".($result[0]['ud_conversion_cnt'] + 1)."' where sid = '".$sid."' and ud_year = '".$now_y."' and ud_month = '".$now_m."'");
					
				}
				
				// トランザクションエンド
				$this->db->trans_complete();
			}
			
		}
		
		
		function getEstimatePlanData($where_list = array(),$select_column = '*'){
			$result = "";
			
			// where 条件設定
			if($where_list != null){
				$this->db->where($where_list);
			}
			
			$this->db->select($select_column);
			$this->db->from('t_shop_planbase pb');
			$this->db->join('t_shop_plandetail pd','pb.pb_no = pd.pb_no');
			$this->db->join('(select pb_no,sid,pd_stamp_price as stamp_price,case when pd_car_kind = \'0\' then 0 when pd_car_kind = \'1\' then 1 when pd_car_kind = \'2\' then 1 when pd_car_kind = \'3\' then 2 when pd_car_kind = \'4\' then 2 end as stamp_kind from t_shop_plandetail group by pb_no,sid,pd_stamp_price,stamp_kind) as stamp','pb.pb_no = stamp.pb_no');
			
			
			// クエリの実行
			$query = $this->db->get();
			
			// 取得件数
			$rows = $query->num_rows;
			
			if($rows > 0){
				
				$result = $query->result_array();
				
			}
			return $result;
		}
		
		
		
		
	}
	
?>