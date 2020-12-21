<?
	class Campaign_detail extends AdminController{
		/* ------------------------------------------------------------------ */
		/* 共通変数設定
		--------------------------------------------------------------------- */
#		var $table = "t_manager_campaign_detail";
		
		
		function Campaign_detail(){
			parent::AdminController();
			$this -> load -> helper(array('form','date'));									// ヘルパーのロード
			
			$this -> output -> set_header('Content-Type: text/html; charset=UTF-8');
		}
		function index($sid = ""){
			if($sid == ""){
				header("location: /admin/account/");
			}
			/* ------------------------------------------------------------------ */
			/* ページの設定
			--------------------------------------------------------------------- */
			$data['page_title'] = "キャンペーン内容";
			$data['now_page'] = "campaign_detail";
			$data['document_root'] = str_replace("secure_html", "public_html", $_SERVER['DOCUMENT_ROOT']);
			
			/* ------------------------------------------------------------------ */
			/* メールフォーマットの取得
			--------------------------------------------------------------------- */
			$this -> load -> model('admin/campaign_detailmodel');
			$result = $this -> campaign_detailmodel -> do_select("t_shop_campaign",array("sid" => $sid));
			
			if($result != null and count($result) == 1){
				foreach($result[0] as $key => $val){
					$data['query_data'][$key] = $val;
				}
			}
			
			/* ------------------------------------------------------------------ */
			/* 画像の取得
			--------------------------------------------------------------------- */
			$img_type = array("gif","jpg");
			
			for($i=0;$i<count($img_type);$i++){
				$image_buf = "";
				if(file_exists($_SERVER['DOCUMENT_ROOT']."/photo/".$sid."/campaign1.".$img_type[$i])){
					$image_buf = getimagesize($_SERVER['DOCUMENT_ROOT']."/photo/".$sid."/campaign1.".$img_type[$i]);
#					$bigimg_result = $this->detailmodel->image_resize($image_buf[0],$image_buf[1],$bigimg_w,$bigimg_h);
#					if($bigimg_result != null){
#						$data['bigimg_data'] = $bigimg_result;
						$data['img_data']['img_path'] = "/photo/".$sid."/campaign1.".$img_type[$i];
						$data['img_data']['width'] = $image_buf[0];
						$data['img_data']['height'] = $image_buf[1];
#					}
#					
				}
			}
			
			
			
			$this->smarty_parser->parse("ci:admin/campaign_detail.tpl", $data);
			unset($_SESSION['msg'],$_SESSION['form_error']);
		}
		
		
		
	}
	
?>