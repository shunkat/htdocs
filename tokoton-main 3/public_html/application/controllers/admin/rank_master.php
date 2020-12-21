<?
ob_start();

class Rank_master extends AdminController{
	
	function Rank_master(){
		parent::AdminController();
		$this -> load -> helper(array('form','date','file','download'));// ヘルパーのロード
		$this -> output -> set_header('Content-Type: text/html; charset=UTF-8');
		$this -> load -> model('admin/rank_mastermodel');
	}
	function index(){
		
		//初期設定---------------------------------------------------------------------------
		$data = array();
		$data['page_title'] = "料金マスタ設定閲覧";
		$data['now_page'] = "month_price";
		$data['document_root'] = str_replace("secure_html", "public_html", $_SERVER['DOCUMENT_ROOT']);
		
		$datestring = "%Y年%m月%d日";
		$time = time();
		$data['today'] = mdate($datestring, $time)."(".get_day($time).")";
		
		//-----------------------------------------------------------------------------------
		
		//データ抽出・セット-----------------------------------------------------------------
		$data['master_data'] = $this->rank_mastermodel->make_master_view();
		
		
		//出力VIEW---------------------------------------------------------------------------
		$this->smarty_parser->parse("ci:admin/rank_master.tpl", $data);
		//-----------------------------------------------------------------------------------
	}
	
}
?>