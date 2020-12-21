<?php header("Content-Type:text/html;charset=UTF-8"); ?>
<?php
//==========================================================
//  メールフォームシステム ver.0.96β
//  eWeb http://www.eweb-design.com/
//==========================================================

// このファイルの名前
$script ="publish.php";

// メールを送信するアドレス(複数指定する場合は「,」で区切る)
$to = "desk@tokoton-navi.com";

// 送信されるメールのタイトル
$sbj = "[とことん車検ナビ]資料請求がありました";

// 送信確認画面の表示(する=1, しない=0)
$chmail = 1;

// 送信後に自動的にジャンプする(する=1, しない=0)
// 0にすると、送信終了画面が表示されます。
$jpage = 0;

// 送信後にジャンプするページ(送信後にジャンプする場合)
$next = $_POST['backurl'];

// 差出人は、送信者のメールアドレスにする(する=1, しない=0)
// する場合は、メール入力欄のname属性を「email」にしてください。
$from_add = 1;

// 差出人に送信内容確認メールを送る(送る=1, 送らない=0)
// 送る場合は、メール入力欄のname属性を「email」にしてください。
$remail = 1;

// 差出人に送信確認メールを送る場合のメールのタイトル
$resbj = "資料請求いただき有難うございました";

// 必須入力項目を設定する(する=1, しない=0)
$esse = 1;

// 必須入力項目(入力フォームで指定したname)
$eles = array('貴社名','氏名','email','郵便番号','住所','電話番号');


//--------------------------------------------------------------------
// 以上で基本的な設定は終了です。
// 以下の変更は自己責任でお願いします。(行数はデフォルト時)
// 未入力画面のレイアウト → 88行目周辺
// 送信メールのレイアウト → 103行目周辺
// 差出人への送信確認メールのレイアウト → 128行目周辺
// 送信確認画面のレイアウト → 163行目周辺
// 送信終了画面のレイアウト → 194行目周辺
// 送信確認画面や終了画面のヘッダとフッタ → 209行目周辺
//--------------------------------------------------------------------

$sendm = 0;
foreach($_POST as $key=>$var) {
  if($var == "eweb_submit") $sendm = 1;
}

// 文字の置き換え
$string_from = "＼";
$string_to = "ー";

// 未入力項目のチェック
if($esse == 1) {
  $flag = 0;
  $length = count($eles) - 1;
  foreach($_POST as $key=>$var) {
    $key = strtr($key, $string_from, $string_to);
    if($var == "eweb_submit") ;
    else {
      for($i=0; $i<=$length; $i++) {
        if($key == $eles[$i] && empty($var)) {
          $errm .= "<FONT color=#ff0000>「".$key."」は必須入力項目です。</FONT><BR>\n";
          $flag = 1;
        }
      }
    }
  }
  foreach($_POST as $key=>$var) {
    $key = strtr($key, $string_from, $string_to);
    for($i=0; $i<=$length; $i++) {
      if($key == $eles[$i]) {
        $eles[$i] = "eweb_ok";
      }
    }
  }
  for($i=0; $i<=$length; $i++) {
    if($eles[$i] != "eweb_ok") {
      $errm .= "<FONT color=#ff0000>「".$eles[$i]."」が未選択です。</FONT><BR>\n";
      $eles[$i] = "eweb_ok";
      $flag = 1;
    }
  }
  // メールアドレスチェック(2011-09-15 igarashi追加)
  if($_POST['email']){
    if(!preg_match('/^[a-zA-Z0-9_\.\-]+?@[A-Za-z0-9_\.\-]+$/',$_POST['email'])){
      $errm .= "<FONT color=#ff0000>「email」を正しく入力してください</FONT><BR>\n";
      $flag = 1;
    }
  }
  // 電話番号チェック(2011-09-15 igarashi追加)
  if($_POST['電話番号']){
    if(strpos($_POST['電話番号'],"-")===false){
      if (!preg_match("/(^(?<!090|080|070)\d{10}$)|(^(090|080|070)\d{8}$)|(^0120\d{6}$)|(^0080\d{7}$)|(^050\d{8}$)/", $_POST['電話番号'])) {
        $errm .= "<FONT color=#ff0000>「電話番号」を正しく入力してください</FONT><BR>\n";
        $flag = 1;
      }
    }else{
      if (!preg_match("/(^(?<!090|080|070)(^\d{2,5}?\-\d{1,4}?\-\d{4}$|^[\d\-]{12}$))|(^(090|080|070)(\-\d{4}\-\d{4}|[\\d-]{13})$)|(^0120(\-\d{2,3}\-\d{3,4}|[\d\-]{12})$)|(^0080\-\d{3}\-\d{4})|(^(050)(\-\d{4}\-\d{4}|[\\d-]{13})$)/", $_POST['電話番号'])) {
        $errm .= "<FONT color=#ff0000>「電話番号」を正しく入力してください</FONT><BR>\n";
        $flag = 1;
      }
    }
  }
  if($flag == 1){
    htmlHeader();
?>


<!--- 未入力があった時の画面 --- 開始 --------------------->
入力エラー<BR><BR>
<?php echo $errm; ?>
<BR><BR>
<INPUT type="button" value="前画面に戻る" onClick="history.back()"><br /><br />

<!--- 終了 --->


<?php
    htmlFooter();
    exit(0);
  }
}
//--- メールのレイアウトの編集 --- 開始 ------------------->

$body="「".$sbj."」からの発信です\n\n";
$body.="-------------------------------------------------\n\n";
foreach($_POST as $key=>$var) {
  $key = strtr($key, $string_from, $string_to);
  if(get_magic_quotes_gpc()) $var = stripslashes($var);
  if($var == "eweb_submit" || $key == "sitename" || $key == "backurl" || $key == "Submit" || $key == "URL"){
  }
  else{
  	if($key == "REF"){
  	///////////////////////////////////////////////////////
//キーワード抽出フェーズ
//coding by J
///////////////////////////////////////////////////////

//DEBUG MODE? "on" or "off"
$skc_debug = "off";

//参考データ選択(デバッグ用)
//srand((double) microtime() * 1000000);
//$rnd = rand(0,3);
//$data_sample[0] = "http://www.google.co.jp/search?hl=ja&q=%E3%83%91%E3%82%B8%E3%82%A7%E3%83%AD&btnG=Google+%E6%A4%9C%E7%B4%A2&lr=";
//$data_sample[1] = "http://www.excite.co.jp/search.gw?search=%83f%83B%83X%83N%83%8D%81%5B%83%5E%81%5B%81@%83%89%83%93%83N%83%8B70&target=combined&look=excite_jp&Language=";
//$data_sample[2] = "http://cgi.search.biglobe.ne.jp/cgi-bin/search2-b?search=%8C%9F%8D%F5&q=%83C%83v%83T%83%80";
//$data_sample[3] = "http://search.yahoo.co.jp/search?p=%A5%AA%A1%BC%A5%C8%A5%B9%A5%D4%A5%EA%A5%C3%A5%C8&fr=top_v2&tid=top_v2&ei=euc-jp&search.x=1&x=24&y=12";
//$sample = str_replace("?", "&",$data_sample[$rnd]);
//$sample_array = explode("&",$sample);
$skc_raw = str_replace("?", "&",$var);
$skc_raw_ref = str_replace("&amp;","&",$skc_raw);
$skc_data_array = explode("&",$skc_raw_ref);

// Array("検索エンジン名","ひっかけワード","キーワードクエリーヘッダー")
$search_set[14] = Array("Google","google.co.jp","q=","UTF-8");
$search_set[13] = Array("Google","google.co.jp","q=","UTF-8");
$search_set[0] = Array("Google US","google.com","q=","UTF-8");
$search_set[1] = Array("Excite","excite","search=","SJIS");
$search_set[2] = Array("BIGLOBE","biglobe","q=","SJIS");
$search_set[3] = Array("YAHOO","yahoo","p=","EUC-JP");
$search_set[4] = Array("MSN","msn","q=","UTF-8");
$search_set[5] = Array("Infoseek","infoseek","qt=","EUC-JP");
$search_set[6] = Array("Gooネット","goo-net","query=","EUC-JP");
$search_set[7] = Array("Goo","goo.ne.jp","MT=","EUC-JP");
$search_set[8] = Array("ニフティー","nifty","text=","EUC-JP");
$search_set[9] = Array("ライブドア","livedoor","q=","EUC-JP");
$search_set[10] = Array("AskJeeves","ask","q=","UTF-8");
$search_set[11] = Array("はてな","hatena","word=","UTF-8");
$search_set[12] = Array("Google Adsense提携サイト","googlesyndication","url=","UTF-8");

for($i=0;$i < 14; $i++)
	{
		if(strpos($skc_data_array[0],$search_set[$i][1],0) === false){
		}
		else{
			$skc_EngineName = $search_set[$i][0];
			$key_number = $i;
		}
	}
//未対応エンジンの場合
if($skc_EngineName)
	{
		if($skc_debug == "on"){print_r($skc_data_array);}
		if($skc_debug == "on"){print("<BR>"."キーワードクエリーヘッダー：".$search_set[$key_number][2]."<BR>");}

		//YAHOOの場合のエンコード確認処理
		if($key_number == 3){
			if(in_array("ei=UTF-8",$skc_data_array)){
				$search_set[$key_number][3] = "UTF-8";
			}
			if(strpos($_POST['URL'],"OVRAW") === false){
				$skc_EngineName = "Yahoo(リスティング)";
			}
			else
			{
				$skc_EngineName = "Yahoo(オーバチュア)";
			}
		}

		echo(in_array($search_set[$key_number][2],$skc_data_array));

		$key_position = array_search($search_set[$key_number][2],$skc_data_array);

		foreach($skc_data_array as $key=>$value)
			{
				if($skc_debug == "on"){print("<BR>ROUND ".$key."...FIGHT[".$value."][".strpos($value,$search_set[$key_number][2],0)."]");}

				if(strpos($value,$search_set[$key_number][2],0) === 0){
					$raw_keyword = $skc_data_array[$key];
					break;
			}
		}

		if($raw_keyword){
		$skc_keyword = str_replace($search_set[$key_number][2],"",$raw_keyword);
		$skc_result = mb_convert_encoding(rawurldecode($skc_keyword), "SJIS", $search_set[$key_number][3]);
		}
		else
		{
			$skc_result="[確認できません]".$_POST["REF"];
		}
	}
else
	{
		$skc_EngineName = "未対応エンジン";
		$skc_result = $_POST["REF"];
	}
//$search_set[1] = "&q=,&btnG=";
//list ($query, $query_cutter) = explode(",",$search_set[1]);

//echo $query;
//echo $query_cutter;

$body.="[検索エンジン]".$skc_EngineName."\n";
$body.="[キーワード]".$skc_result."\n";
$body.="[".$key."] ".$var."\n";
  	}
  	else
  	{
  		$body.="[".$key."] ".$var."\n";
  	}
  }
}
$body.="\n-------------------------------------------------\n\n";
$body.="送信日時：".date( "Y/m/d (D) H:i:s", time() )."\n";
$body.="ホスト名：".getHostByAddr(getenv('REMOTE_ADDR'))."\n\n";

//--- 終了 --->


if($remail == 1) {
//--- 差出人への送信確認メールのレイアウトの編集 --- 開始 ->
$today = getdate();

$rebody="━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n";
$rebody.="本メールは".$today[year]."年".$today[mon]."月".$today[mday]."日、フォームにて資料請求いただきましたお客様に\n";
$rebody.="対してお送りしております。\n\n";

$rebody.="※本メールは「お問い合わせ専用アドレス」からお送りしております。\n";
$rebody.="このため、本メールへ返信はできませんのでご了承ください。\n";
$rebody.="━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n\n";

$rebody.=$_REQUEST['氏名']." 様\n\n";
$rebody.="この度は「とことん車検ナビ」掲載依頼関連資料のご請求、誠にありがとうございます。\n\n";
$rebody.="確認次第、資料を送付させていただきます。\nまた、必要に応じて運営事務局よりご連絡差し上げる場合があります。\n\nいましばらくお待ちください。\n\n";

$rebody.="\n=====================================================================\n";
$rebody.=" 株式会社MIC\n";
$rebody.="「とことん車検ナビ」運営事務局\n";
$rebody.="desk@tokoton-navi.com\n";
$rebody.=" 〒224-0041 横浜市都筑区仲町台1-27-20プラザ仲町台\n";
$rebody.=" TEL:045-943-7271 FAX:045-943-7270\n";
$rebody.="====================================================================\n\n";

$rebody.="▼資料請求フォームからの送信内容はこちらです。\n\n";
$rebody.="-------------------------------------------------\n\n";
foreach($_POST as $key=>$var) {
  $key = strtr($key, $string_from, $string_to);
  if(get_magic_quotes_gpc()) $var = stripslashes($var);
  if($var == "eweb_submit" || $key == "sitename" || $key == "REF" || $key == "backurl" || $key == "URL") ;
  else $rebody.=$key." : ".$var."\n\n";
}

$rebody.="-------------------------------------------------\n";

$reto = $_POST['email'];
$rebody=mb_convert_encoding($rebody,"JIS","UTF-8");
$resbj="=?iso-2022-jp?B?".base64_encode(mb_convert_encoding($resbj,"JIS","UTF-8"))."?=";
$reheader="From:auto_confirm@tokoton-navi.com\nReply-To:auto_confirm@tokoton-navi.com\nContent-Type: text/plain;charset=iso-2022-jp\nX-Mailer: PHP/".phpversion();

//--- 終了 --->
}

if($chmail == 0 || $sendm == 1){
//デバッグの際はスラッシュを消す
//if($_POST["コメント"] == "debug"){
//
//MySQLによるデータベースへの書き込み
//$db = mysql_connect("localhost","admin","xN2MDdTY") or die(mysql_error());
//mysql_select_db("userdata",$db);
//mysql_query("SET NAMES sjis");
//$sql['insert'] = "INSERT INTO `inquiry_list` (`SerialNo`, `InquiryNo`, `date_inquiry`, `date_complete`, `status`, `status_detail`, `info_maker`, `info_carname`, `info_grade`, `info_type`, `info_year`, `info_running`, `info_mission`, `info_oil`, `info_repair`, `info_color`, `info_option_repairbook`, `info_option_sunroof`, `info_option_lethersheet`, `info_comment`,`client_name`,`client_kana`,`client_tel`,`client_mobile`,`client_address`,`client_mail`, `sitename`, `keyword`, `refferer`, `IP`, `lastupdate`) VALUES (NULL, NULL, NOW(), NULL, 1, '', '".mysql_escape_string($_POST['メ-カ-名'])."', '".mysql_escape_string($_POST['車種名'])."', '".mysql_escape_string($_POST['グレ-ド'])."', '".mysql_escape_string($_POST['型式'])."', '".mysql_escape_string($_POST['年式'])."', '".mysql_escape_string($_POST['走行距離'])."', '".mysql_escape_string($_POST['ミッション'])."', '".mysql_escape_string($_POST['燃料'])."', '".mysql_escape_string($_POST['修復暦'])."', '".mysql_escape_string($_POST['お車の色'])."', '".mysql_escape_string($_POST['整備手帳'])."', '".mysql_escape_string($_POST['サンルーフ'])."', '".mysql_escape_string($_POST['本皮シート'])."', '".mysql_escape_string($_POST['コメント'])."','".mysql_escape_string($_POST['名前'])."','".mysql_escape_string($_POST['カナ'])."','".mysql_escape_string($_POST['電話'])."','".mysql_escape_string($_POST['携帯番号'])."','".mysql_escape_string($_POST['住所'])."','".mysql_escape_string($_POST['email'])."' , '".mysql_escape_string($_POST['sitename'])."','".mysql_escape_string($skc_result)."', '".$skc_EngineName."', '".getHostByAddr(getenv('REMOTE_ADDR'))."', now());";
//$result['insert'] = mysql_query($sql['insert'],$db) or die(mysql_error());
//print "-SQL--------------------------------<BR>".$sql."<BR>---------------------------------";
//if($result['insert']){
//$inq_no = sprintf("%07d",mysql_insert_id());
//$sql['regist_no'] = "UPDATE `inquiry_list` SET `InquiryNo` = 'AS-".sprintf("%07d", mysql_insert_id())."',`lastupdate` = now() WHERE `SerialNo` =".mysql_insert_id()." LIMIT 1 ;";
//$result['regist_no'] = mysql_query($sql['regist_no'],$db) or die(mysql_error());

//Mysqlで作成した問い合わせ番号をメールヘッダに載せる
//$resbj .= "AS-".$inq_no;
//$sbj .= "AS-".$inq_no;
//}
//mysql_close($db);

//デバッグの際はスラッシュを消す
//die("デバッグモード");
//デバッグの際はスラッシュを消す
//}
}

$body=mb_convert_encoding($body,"JIS","UTF-8");
$sbj="=?iso-2022-jp?B?".base64_encode(mb_convert_encoding($sbj,"JIS","UTF-8"))."?=";
if($from_add == 1) {
  $from = $_POST['email'];
  $header="From: $from\nReply-To: ".$_POST['email']."\nContent-Type: text/plain;charset=iso-2022-jp\nX-Mailer: PHP/".phpversion();
} else {
  $header="Reply-To: ".$_POST['email']."\nContent-Type: text/plain;charset=iso-2022-jp\nX-Mailer: PHP/".phpversion();
}
if($chmail == 0 || $sendm == 1) {
  mail($to,$sbj,$body,$header);
  $yheader="From: $from\nReply-To:rin.yasuda@mic-info.co.jp\nContent-Type: text/plain;charset=iso-2022-jp\nX-Mailer: PHP/".phpversion();
  mail('rin.yasuda@mic-info.co.jp', $sbj, $body, $yheader);
  $iheader="From: $from\nReply-To:y-igarashi@globalcoms.co.jp\nContent-Type: text/plain;charset=iso-2022-jp\nX-Mailer: PHP/".phpversion();
  mail('y-igarashi@globalcoms.co.jp', $sbj, $body, $iheader);
  if($remail == 1) { mail($reto,$resbj,$rebody,$reheader); }
}
else { htmlHeader();
?>
<h3>入力内容の確認</h3>
<!--- 送信確認画面のレイアウトの編集 --- 開始 ------------->
<p class="desc2">入力内容に間違いが無ければ送信ボタンを押して下さい。</p>
<FORM action="<? echo $script; ?>" method="POST" name="Entry">
<? echo $err_message; ?>
<TABLE width="500" cellpadding="0" cellspacing="0">
<?php
foreach($_POST as $key=>$var) {
  $key = strtr($key, $string_from, $string_to);
  if(get_magic_quotes_gpc()) $var = stripslashes($var);
  $var = htmlspecialchars($var);
 switch($key){
  case 'flaggie':
  	 	break;

  case 'URL':
?>
		<INPUT type="hidden" name="<?= $key ?>" value="<?= $var ?>">
  <?php
  	  	break;
  case 'backurl':
?>
		<INPUT type="hidden" name="<?= $key ?>" value="<?= $var ?>">
<?php
  		break;

  case 'REF':
?>
		<INPUT type="hidden" name="<?= $key ?>" value="<?= $var ?>">
<?php
  		break;

  case 'sitename':
?>
 		 <INPUT type="hidden" name="<?= $key ?>" value="<?= $var ?>">
<?php
 	 	break;

	case 'submit':

		break;


	case 'email':

 		 print("<TR ><TD class='left'>メールアドレス</TD><TD>".$var);
?>
 		 <INPUT type="hidden" name="<?= $key ?>" value="<?= $var ?>">
<?php
 		 print("</TD></TR>\n");

		break;

?>

<?php
  default:
 		 print("<TR ><TD class='left'>".$key."</TD><TD>".$var);
?>
 		 <INPUT type="hidden" name="<?= $key ?>" value="<?= $var ?>">
<?php
 		 print("</TD></TR>\n");
}
}
?>
</TABLE>
<BR>
<div id="btn_layout">
	<INPUT type="hidden" name="eweb_set" value="eweb_submit"><BR>
	<INPUT type="button" value="この内容で送信する" name="Submit" onClick="submit()" style="background-color:#ff8929;color:white;font-weight:bold;padding:5px;">
	<INPUT type="button" value="前画面に戻る" onClick="history.back();" style="background-color:#eeeeee;color:#333333;font-weight:bold;padding:5px;">
</div>
</FORM>

<!--- 終了 --->


<?php htmlFooter(); } if(($jpage == 0 && $sendm == 1) || ($jpage == 0 && ($chmail == 0 && $sendm == 0))) { htmlHeader(); ?>
      <div id="fin_box">
		<h3>資料請求完了</h3>
	  	<p id="sanks">資料請求ありがとうございました。</p>
	  	<p id="notice">※ご連絡には多少お時間をいただく場合がございます。ご了承ください。</p></div>
		<p id="top"><a href="<?php echo $_REQUEST['backurl'] ?>">サイトのトップページへ戻る</a></p>
    </div>
<?php htmlFooter(); } else if(($jpage == 1 && $sendm == 1) || $chmail == 0) {
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>掲載依頼 | とことん車検ナビ</title>
<link href="common.css" rel="stylesheet" type="text/css" />
<link href="publish.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="./js/main.js"></script>
</head>
<body>
<div id="container">
  <div id="header">
    <p id="title"><a href="./index.html">とことん車検ナビ - tokoton-navi.com</a></p>
    <h1>とことん車検ナビは信頼できる全国の車検ショップの車検、お得情報をご紹介。</h1>
    <br class="clear" />
  </div>
  <div id="content">
    <h2 id="publish_confirm">掲載依頼</h2>
    <div id="publish_box">
情報を送信中です。

      <br class="clear" />
    </div>
  </div>
  <div id="footer">
    <p id="copyright">Copyright(C)2008-<?=date('Y');?> Tokoton Shaken Navi All Rights Reserved.</p>
  </div>
</div>
</body>
</html>

<?php
 } function htmlHeader() { ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>掲載依頼 | とことん車検ナビ</title>
<link href="common.css" rel="stylesheet" type="text/css" />
<link href="publish.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="./js/main.js"></script>
</head>
<body>
<div id="container">
  <div id="header">
    <p id="title"><a href="http://www.tokoton-navi.com/">とことん車検ナビ - tokoton-navi.com</a></p>
    <h1>とことん車検ナビは信頼できる全国の車検ショップの車検、お得情報をご紹介。</h1>
    <br class="clear" />
  </div>
  <div id="content">
    <h2 id="publish_confirm">掲載依頼</h2>
    <div id="publish_box">



<?php } function htmlFooter() { ?>

      <br class="clear" />
    </div>
  </div>
  <div id="footer">
    <p id="copyright">2008-2013 Tokoton Shaken Navi All Rights Reserved.</p>
  </div>
</div>
</body>
</html>




<?php } ?>