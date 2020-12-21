<?
	class Link_shopmodel extends Model{
		/* ------------------------------------------------------------------ */
		/* 共通変数設定
		--------------------------------------------------------------------- */
		/*対象店舗リスト
		*21:仲町台
		*605:寒川
		*/		
		
		var $link_shop = array(
		
		/*MIC店舗転送処理停止対応 2019/07/18 ST*/
		/*
		"21_nakamachidai",
		"605_samukawa",
		"22_centerminami",
		"358_hiratsuka",
		"24_tokorozawa",
		"1115_horinouchi"	
		*/
		/*MIC店舗転送処理停止対応 2019/07/18 ED*/
		"000_dummy"
		);
		
		
		function Link_shopmodel(){
			parent::Model();
		}
		
		function link_shopChk($sid = ""){

			$linkFlg = false;
			foreach($this->link_shop as $row){
				$sidAr = explode("_",$row);
				if($sid == $sidAr[0]){
					$linkFlg = true;
					break;
				}
			}
			
			return $linkFlg;

		}
		
		function link_shopName($sid = ""){

			$name = "";
			foreach($this->link_shop as $rowCnt =>$row){
				$sidAr = explode("_",$row);
				if($sid == $sidAr[0]){
					$name = $sidAr[1];
					break;
				}
			}
			
			return $name;

		}		
		
	}
	
?>