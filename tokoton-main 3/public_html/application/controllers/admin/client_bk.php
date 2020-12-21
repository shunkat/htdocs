<?
ob_start();

class client extends AdminController{
	
	function client(){
		parent::AdminController();
		$this -> load -> helper(array('form','date','file','download'));// ヘルパーのロード
		$this -> output -> set_header('Content-Type: text/html; charset=UTF-8');
		$this -> load -> model('admin/clientmodel');
	}
	function index(){
		
		//初期設定---------------------------------------------------------------------------
		$data = array();
		$data['page_title'] = "データ管理";
#		$data['now_category'] = "shop";
		$data['now_page'] = "month_price";
#		$data['sub_menu'] = "list";
		$data['document_root'] = str_replace("secure_html", "public_html", $_SERVER['DOCUMENT_ROOT']);
		
		$datestring = "%Y年%m月%d日";
		$time = time();
		$data['today'] = mdate($datestring, $time)."(".get_day($time).")";
#		
#		$sid = $this->session->userdata['sid'];

#		$file_type = array("jpg","gif","png");
#		$rootpass = $_SERVER['DOCUMENT_ROOT'];
#		$updir = "/photo/".$sid;
		
		$error_result = "";
#		//-----------------------------------------------------------------------------------
		$total_rows = $this->clientmodel->get_total_rows();
		$data['total_rows'] = $total_rows;
		
		//データ抽出・セット-----------------------------------------------------------------
		if(isset($_SESSION['msg']) && $_SESSION['msg'] != ""){
			$data['msg'] = $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		if(isset($_SESSION['form_error']) && $_SESSION['form_error'] != ""){
			$data['form_error'] = $_SESSION['form_error'];
			unset($_SESSION['form_error']);
		}
		
		//出力VIEW---------------------------------------------------------------------------
		$this->smarty_parser->parse("ci:admin/client.tpl", $data);
		//-----------------------------------------------------------------------------------
	}
	
	function regist(){
		
		$start_y = $this -> input ->post('start_y');
		$start_m = $this -> input ->post('start_m');
		$start_d = $this -> input ->post('start_d');
		$end_y = $this -> input ->post('end_y');
		$end_m = $this -> input ->post('end_m');
		$end_d = $this -> input ->post('end_d');
		
		
		
		// CSV吐き出しデータ
		$item[] = array('sb.sid','店舗番号','integer');
		$item[] = array('sd_account','アカウント','character varying');
		$item[] = array('sd_manage_a','管理コードA','character varying');
		$item[] = array('sd_manage_b','管理コードB','character varying');
		$item[] = array('sd_manage_c','管理コードC','character varying');
		$item[] = array('sd_manage_d','管理コードD','character varying');
		$item[] = array('sd_manage_e','管理コードE','character varying');
		$item[] = array('sd_manage_f','管理コードF','character varying');
		
		$item[] = array('sd_shop_nm','表示_店舗名','character varying');
		$item[] = array('sd_customer_nm','契約_会社名','character varying');
		$item[] = array('sd_contract_shop','契約_店舗名','character varying');
		
		$item[] = array('sd_remind_mail','契約者メールアドレス','character varying');
		$item[] = array('sd_estimate_mail','見積送受信メールアドレス','character varying');
		$item[] = array('sd_info_mail','事務連絡受信メールアドレス','character varying');
		
		$item[] = array('sd_regist_date','アカウント登録日','timestamp without time zone');
		$item[] = array('sd_start_m','契約開始月','date');
		$item[] = array('sd_end_m','契約終了月','date');
		$item[] = array('sd_acc_state','アカウント状態','boolean');
		$item[] = array('sd_exam_state','サイトの状態','integer');
		$item[] = array('sd_last_login','最終ログイン日','timestamp without time zone');
		
		$item[] = array('sd_basic_charge','基本料金','integer');
		$item[] = array('sd_copy_lank','料金テーブル','character varying');
		
		$item[] = array('sd_mail_srvc','メール受付代行サービス','character varying');
		$item[] = array('sd_tel_srvc','電話受付代行サービス','character varying');
		
		$item[] = array('sd_company_nm','管理_会社名','character varying');
		$item[] = array('sd_tanto_section','管理_部署','character varying');
		$item[] = array('sd_tanto_position','管理_役職','character varying');
		$item[] = array('sd_tanto_nm','管理_担当者名','character varying');
		$item[] = array('sd_tanto_kana','管理_担当フリガナ','character varying');
		$item[] = array('sd_company_tel','管理_電話','character varying');
		$item[] = array('sd_company_fax','管理_FAX','character varying');
		$item[] = array('sd_company_zip','管理_郵便番号','character varying');
		$item[] = array('sd_company_address','管理_住所','character varying');
		
		$item[] = array('sd_shop_rank','ミシュランク','character varying');
		$item[] = array('sd_open_chiku','地域コード','character varying');
		
		$item[] = array('sd_shop_tel','表示_電話番号','character varying');
		$item[] = array('sd_shop_zip','表示_郵便番号','character varying');
		$item[] = array('sd_shop_address','表示_住所','character varying');
		$item[] = array('sd_shop_access','表示_アクセス','character varying');
		$item[] = array('sd_shop_open','表示_営業時間','character varying');
		$item[] = array('sd_shop_off','表示_休業日','character varying');
		$item[] = array('sd_shop_url','表示_URL','character varying');
		$item[] = array('sd_shop_memo','表示_備考','character varying');
		$item[] = array('shop_option','表示_サービスアイコン','character varying');
		$item[] = array('sd_card','表示_対応カード','character varying');
		
		$item[] = array('sd_catch_copy','詳細_コピー','character varying');
		$item[] = array('sd_intro','詳細_紹介文','character varying');
		$item[] = array('sd_small_img01','詳細_画像説明1','character varying');
		$item[] = array('sd_small_img02','詳細_画像説明2','character varying');
		
		$item[] = array('di_itm01_nm','料金項目1','character varying');
		$item[] = array('di_itm02_nm','料金項目2','character varying');
		$item[] = array('di_itm03_nm','料金項目3','character varying');
		$item[] = array('di_itm04_nm','料金項目4','character varying');
		$item[] = array('di_itm05_nm','料金項目5','character varying');
		$item[] = array('di_itm06_nm','料金項目6','character varying');
		$item[] = array('di_itm07_nm','料金項目7','character varying');
		$item[] = array('di_itm08_nm','料金項目8','character varying');
		
#		$item[] = array('login_cnt','login_cnt','integer');
		$item[] = array('sd_login_count','ログイン回数','integer');
		$item[] = array('ud_access_cnt','アクセス数','integer');
		$item[] = array('ud_conversion_cnt','コンバージョン数','integer');
		$item[] = array('ud_coupon_cnt','クーポン印刷数','integer');
		
		$item[] = array('sd_last_update','店舗情報の最終更新日','timestamp without time zone');
		$item[] = array('sd_memo','管理側メモ','character varying');
		
		
#		$item[] = array('sd_regist_flag','初回設定フラグ');
#		$item[] = array('sd_charge_table','何に使われているかわかりませんでした。');
		
		for($i=0;$i<count($item);$i++){
			$item_e[] = $item[$i][0];
#			$item_j[] = $item[$i][1];
			$item_name[$item[$i][0]] = $item[$i][1];
			$item_column[$item[$i][1]] = $item[$i][0];
			$item_type[$item[$i][0]] = $item[$i][2];
		}
		
		
		if($item_e != null){
			$select_column = implode(',',$item_e);
			$select_column = str_replace('shop_option,','',$select_column);
		}else{
			$select_column = "";
		}
		
		
		if($start_y != "" && $start_m != "" && $start_d != "" && $end_y != "" && $end_m != "" && $end_d != ""){
			
			$start_date = $start_y."-".$start_m."-".$start_d;
			$end_date = $end_y."-".$end_m."-".$end_d;
			
			if(checkdate($start_m,$start_d,$start_y) && checkdate($end_m,$end_d,$end_y) && ($start_date <= $end_date )){
				
				$this->load->dbutil();
				//カンマ区切り
				$delimiter = ",";
				//改行
				$newline = "\r\n";
				//CSVファイル名
				$filename = "client_".$start_y.$start_m.$start_d."_".$end_y.$end_m.$end_d.".csv";
				//データselect
#				$query = $this -> clientmodel -> do_select_csv($start_date,$end_date,$select_column);
				$result = $this -> clientmodel -> do_select_csv($start_date,$end_date,$select_column);
			
				if($this -> clientmodel -> rows > 0){
					$query = $this->clientmodel->make_csv_query($result,$item_type);
					
					
					//CSV変換
					$csv_data = $this->dbutil->csv_from_result($query, $delimiter, $newline);
			
					//CSV１行目編集
		#			$csv_data = str_replace("sid","id",$csv_data);
		#			$csv_data = str_replace("sd_customer_nm","クライアント名",$csv_data);
		#			$csv_data = str_replace("ud_year","年",$csv_data);
		#			$csv_data = str_replace("ud_month","月",$csv_data);
		#			$csv_data = str_replace("ud_access_cnt","アクセス数",$csv_data);
		#			$csv_data = str_replace("ud_conversion_cnt","問い合わせ数",$csv_data);
		#			$csv_data = str_replace("rate_type","料金テーブル",$csv_data);
		#			$csv_data = str_replace("rate_price","金額",$csv_data);
					
					foreach($item_name as $key => $val){
						if($key == "sb.sid"){
							$key = str_replace("sb.","",$key);
						}
						$csv_data = str_replace($key,$val,$csv_data);
					}
					
					
					//エンコード変更SJIS
					$csv_data = mb_convert_encoding($csv_data,"SJIS-win","UTF-8");
					
					
					//ファイルダウンロード
					force_download($filename,$csv_data);
				}else{
					$_SESSION['form_error'] = "顧客データが見つかりませんでした。選択した範囲を選び直してください。";
				}
			}else{
				$_SESSION['form_error'] = "日付の選択が正しくありません。選択した範囲を選び直してください。";
			}
		}
		redirect('admin/client/', 'refresh');
	}
}
?>