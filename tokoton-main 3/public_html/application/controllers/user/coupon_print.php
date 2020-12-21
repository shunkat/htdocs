<?
	class Coupon_print extends Controller{
		/* ------------------------------------------------------------------ */
		/* 共通変数設定
		--------------------------------------------------------------------- */
		
		function Coupon_print(){
			parent::Controller();
#			$this -> load -> model('user/coupon_printmodel');
			
			
			$this -> output -> set_header('Content-Type: text/html; charset=UTF-8');
		}
		
		// 複数行登録防止処理追加 2009/03/11 mori
		function index($sid = ""){
			
#			$this->coupon_printmodel->print_count($sid);
			if($sid != ""){
				// 初期設定
				$now_y = date("Y");
				$now_m = date("m");
				$result = "";
				
				// トランザクションスタート
				$this->db->trans_start();
				
				// 利用状況テーブルよりデータを取得
				$query = $this->db->query("select ud_coupon_cnt from t_manager_usedata where sid = '".$sid."' and ud_year = '".$now_y."' and ud_month = '".$now_m."' order by ud_no asc for update");
				$rows = $query->num_rows();
				
				if($rows == 1){
					$result = $query->result_array();
					
					// クーポン印刷回数カウントアップデート
					$this->db->query("update t_manager_usedata set ud_coupon_cnt = '".($result[0]['ud_coupon_cnt'] + 1)."' where sid = '".$sid."' and ud_year = '".$now_y."' and ud_month = '".$now_m."'");
					
				}elseif($rows == 0){
					// クーポン印刷回数テーブルインサート
					$this->db->query("insert into t_manager_usedata (sid,ud_year,ud_month,ud_conversion_cnt,ud_access_cnt,ud_coupon_cnt) values ('".$sid."','".$now_y."','".$now_m."',0,0,1)");
					
				}else{
					// 誤って複数行登録されてしまった時の処理
					$result = $query->result_array();
					$this->db->query("update t_manager_usedata set ud_coupon_cnt = '".($result[0]['ud_coupon_cnt'] + 1)."' where sid = '".$sid."' and ud_year = '".$now_y."' and ud_month = '".$now_m."'");
				}
				
				// トランザクションエンド
				$this->db->trans_complete();
			}
			
		}
		
		
		
	}
	
?>