<?
ob_start();

class month_price extends AdminController{
	
	function month_price(){
		parent::AdminController();
		$this -> load -> helper(array('form','date','file','download'));// ヘルパーのロード
		$this -> output -> set_header('Content-Type: text/html; charset=UTF-8');
		$this -> load -> model('admin/month_pricemodel');
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
		
		//データ抽出・セット-----------------------------------------------------------------
		$db_dat = $this -> month_pricemodel -> do_select_monthlist();
		if(count($db_dat) > 0){
			foreach($db_dat as $key => $val){
				$data['form_data']['targetdate'][$key] = $val['ud_year']."/".$val['ud_month'];
			}
		}
		if(isset($_SESSION['msg']) && $_SESSION['msg'] != ""){
			$data['msg'] = $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		if(isset($_SESSION['form_error']) && $_SESSION['form_error'] != ""){
			$data['form_error'] = $_SESSION['form_error'];
			unset($_SESSION['form_error']);
		}
		
		//出力VIEW---------------------------------------------------------------------------
		$this->smarty_parser->parse("ci:admin/month_price.tpl", $data);
		//-----------------------------------------------------------------------------------
	}
	
	function regist(){
		
		$targetdate = $this -> input ->post('targetdate');
		$csvdownload = $this -> input ->post('csvdownload');
		$csvdelete = $this -> input ->post('csvdelete');
		if($targetdate != "" && ($csvdownload != "" || $csvdelete != "")){
			if($csvdownload == "CSVダウンロード"){
				$splitdate = split("/",$targetdate);
				
				$this->load->dbutil();
				//カンマ区切り
				$delimiter = ",";
				//改行
				$newline = "\r\n";
				//CSVファイル名
				$filename = "monthprice_".$splitdate[0].$splitdate[1].".csv";
				//データselect
				$query = $this -> month_pricemodel -> do_select_csv(array("ud_year" => "'".$splitdate[0]."'","ud_month" => "'".$splitdate[1]."'"),"sid asc");
				//CSV変換
				$csv_data = $this->dbutil->csv_from_result($query, $delimiter, $newline);
				//CSV１行目編集
				$csv_data = str_replace("sid","店舗番号",$csv_data);
				$csv_data = str_replace("sd_account","アカウント",$csv_data);
				$csv_data = str_replace("sd_manage_a","管理コードA",$csv_data);
				$csv_data = str_replace("sd_manage_b","管理コードB",$csv_data);
				$csv_data = str_replace("sd_manage_c","管理コードC",$csv_data);
				$csv_data = str_replace("sd_manage_d","管理コードD",$csv_data);
				$csv_data = str_replace("sd_manage_e","管理コードE",$csv_data);
				$csv_data = str_replace("sd_manage_f","管理コードF",$csv_data);
				$csv_data = str_replace("sd_shop_nm","表示_店舗名",$csv_data);
				$csv_data = str_replace("sd_customer_nm","契約_会社名",$csv_data);
				$csv_data = str_replace("sd_contract_shop","契約_店舗名",$csv_data);
				$csv_data = str_replace("ud_year","集計_年",$csv_data);
				$csv_data = str_replace("ud_month","集計_月",$csv_data);
				$csv_data = str_replace("client_login_count","月間ログイン回数",$csv_data);
				$csv_data = str_replace("ud_access_cnt","月間アクセス数",$csv_data);
				$csv_data = str_replace("ud_conversion_cnt","月間コンバージョン数",$csv_data);
				$csv_data = str_replace("ud_coupon_cnt","月間クーポン印刷数",$csv_data);
				$csv_data = str_replace("sd_shop_rank","ミシュランク",$csv_data);
				$csv_data = str_replace("sd_basic_charge","基本料金",$csv_data);
				$csv_data = str_replace("rate_type","料金テーブル",$csv_data);
				$csv_data = str_replace("rate_price","金額",$csv_data);
				$csv_data = str_replace("sd_memo","管理側メモ",$csv_data);
				
				//エンコード変更SJIS
				$csv_data = mb_convert_encoding($csv_data,"SJIS","UTF-8");
				//ファイルダウンロード
				force_download($filename,$csv_data);
				
			}elseif($csvdelete == "削除"){
				$splitdate = split("/",$targetdate);
				$query = $this -> month_pricemodel -> do_delete(array("ud_year" => $splitdate[0],"ud_month" => $splitdate[1]));
				if($query){
					$_SESSION['msg'] = $splitdate[0]."年".$splitdate[1]."月のデータを削除しました。";
				}else{
					$data['form_error'] =$splitdate[0]."年".$splitdate[1]."月のデータを削除できませんでした。";
				}
			}
		}
		redirect('admin/month_price/', 'refresh');
	}
}
?>