<?
	class Remindermodel extends Model {

		var $table = "t_shop_base";
		var $from_set = "desk@tokoton-navi.com";
		var $to_set = "aaa@aaa.com";
		var $subject_set = "【車検ナビ】アカウント情報ご連絡";
		var $mail_text_set = "メール本文";
		var $account_set = "";
		var $pwd_set = "";


		function Remindermodel(){
			parent::Model();
		}

		//入力メールアドレスチェック
		function mail_check($mail = ""){
			if($mail != ""){
				//SQL
				$this -> db -> where("sd_remind_mail = '".$mail."'");
				$this -> db ->select("*");
				$this -> db ->from($this -> table);

				//Query実行
				$query = $this->db->get();
				if($query->num_rows() > 0){
					$result = $query->result_array();
					$this->to_set = $result[0]['sd_info_mail'];
					$this->account_set = $result[0]['sd_account'];
					$this->pwd_set = $result[0]['sd_pwd'];

					return TRUE;
				}else{
					return FALSE;
				}
			}else{
				return FALSE;
			}
		}

		function sid_check($sid = ""){
			if($sid != ""){
				// sql
				$this -> db -> where("sid = '".$sid."'");
				$this -> db ->select("*");
				$this -> db ->from($this -> table);

				//Query実行
				$query = $this->db->get();
				if($query->num_rows() > 0){
#					$result = $query->result_array();
#					$this->to_set = $result[0]['sd_remind_mail'];
#					$this->account_set = $result[0]['sd_account'];
#					$this->pwd_set = $result[0]['sd_pwd'];

					return TRUE;
				}else{
					return FALSE;
				}

			}else{
				return FALSE;
			}
		}

		function match_check($sid = "",$mail){
			if($sid != "" and $mail != ""){
				// sql
				$this -> db -> where("sid = '".$sid."' and sd_remind_mail = '".$mail."'");
				$this -> db ->select("*");
				$this -> db ->from($this -> table);

				//Query実行
				$query = $this->db->get();

				if($query->num_rows() > 0){
					$result = $query->result_array();
					$this->to_set = $result[0]['sd_info_mail'];
					$this->account_set = $result[0]['sd_account'];
					$this->pwd_set = $result[0]['sd_pwd'];

					return TRUE;
				}else{
					return FALSE;
				}
			}else{
				return FALSE;
			}
		}



		//メール送信
		function mail_send($type = ""){

			//メール本文作成
			$from = "From:".$this->from_set;
			$to = $this->to_set;
			$subject = $this->subject_set;

			$mail_text ="（システム自動送信メール）\n";
			$mail_text .="\n";
			$mail_text .="とことん車検ナビのご利用ありがとうございます。\n";
			$mail_text .="ご依頼頂きましたアカウント情報をお送りいたします。\n";
			$mail_text .="\n";
			$mail_text .="◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇\n";
			if($type == "" || $type == "01" || $type == "03"){
			$mail_text .="・アカウント　：　".$this->account_set."\n";
			}
			if($type == "" || $type == "02" || $type == "03"){
			$mail_text .="・パスワード　：　".$this->pwd_set."\n";
			}
			$mail_text .="◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇\n";
			$mail_text .="\n";
			$mail_text .="\n";
			$mail_text .="今後とも「とことん車検ナビ」をよろしくお願い申し上げます。\n";
			$mail_text .="\n";
			$mail_text .="====================================================================\n";
			$mail_text .="「とことん車検ナビ」運営事務局\n";
			$mail_text .="desk@tokoton-navi.com\n";
			$mail_text .="\n";
			$mail_text .="株式会社MIC\n";
			$mail_text .="〒224-0041 横浜市都筑区仲町台1-27-20プラザ仲町台\n";
			$mail_text .="TEL:045-943-7271 FAX:045-943-7270\n";
			$mail_text .="====================================================================\n";


			//メール送信
			if($to != "" && $subject != "" && $mail_text !=""){
				$mime_subject = mb_convert_encoding($subject,"JIS","UTF-8");
				mb_internal_encoding("JIS");
				$mime_subject = mb_encode_mimeheader($mime_subject,"JIS", 'B', "\n");
				mb_internal_encoding("UTF-8");

				return mail($to,$mime_subject,mb_convert_encoding($mail_text,"JIS","UTF-8"),$from."\nMime-Version: 1.0\nContent-Type: text/plain; charset=ISO-2022-JP\nContent-Transfer-Encoding: 7bit");

			}else{
				return FALSE;
			}
		}
	}
?>
