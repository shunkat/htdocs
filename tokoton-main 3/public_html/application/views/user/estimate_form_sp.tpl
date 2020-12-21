<!DOCTYPE html>
<html lang="ja">
<head>
<script src="https://efo01.urichan.com/s.php?id=2073"></script>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="keywords" content="{if $page_keywords != ""}{$page_keywords}{else}車検,費用,料金,見積,格安,激安,予約{/if}" />
<meta name="description" content="{if $page_description != ""}{$page_description}{else}車検費用を安くするなら、とことん車検ナビで車検料金がお得な店舗を検索。早期の車検予約割引やプレゼント情報、軽自動車車検の特典など、全国のお得な格安車検情報が満載です！今すぐネットで車検見積が出来ます{/if}" />

{if $notfound_flg === TRUE}
<meta name="robots" content="noindex,nofollow,noarchive" />
{/if}
<title>{$page_title}</title>

<link href="http://{$smarty.server.HTTP_HOST}/favicon.ico" rel="icon" type="image/x-icon" />

<!-- CSS -->
<link rel="stylesheet" href="/sp/css/reset.css" type="text/css"/>
<link rel="stylesheet" href="/sp/css/reset_table.css" type="text/css"/>
<link rel="stylesheet" href="/sp/css/style2.css" type="text/css"/>
<!--
<script src="http://code.jquery.com/jquery-1.7.2.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="/js/jquery.js"></script>
 -->
<!-- JS -->
<script src="//code.jquery.com/jquery-1.7.2.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/main_2.js"></script>
<script type="text/javascript" src="/js/prototype_2.js"></script>
<script type="text/JavaScript" src="/js/rollover.js"></script>
<script type="text/JavaScript" src="/js/check_cartype_2.js"></script>
<script type="text/javascript" src="/js/function.js"></script>

<!--[if lt IE 9]>
<script type="text/javascript" src="./js/vendor/svgweb/src/svg.js"></script>
<![endif]-->
<!-- SEO対策 [PUBLIC_TOKOTON-3] /なしページへcanonical対応 20170306 ST -->
{$canonical}
<!-- SEO対策 [PUBLIC_TOKOTON-3] /なしページへcanonical対応 20170306 ED -->
{if $header_js != ""}{$header_js}{/if}
{if $map_js != ""}{$map_js}{/if}
{$overture_tag}
{literal}
<? if ($_SERVER['REQUEST_URI'] === '/') { ?>
<script type="text/javascript" src="/js/common_userAgent.js"></script>
<? } ?>
{/literal}
{if $page_name === "estimate_fin"}
{literal}
<script language="Javascript" type="text/javascript">
<!--
/* <![CDATA[ */
var account_id="DkoepqQOLDUlz7yecxMA";
var transaction_id = "";
var amount = "";
if (location.protocol == "https:") { var protocol = "https:"} else { var protocol = "http:" }
document.write("<img width=1 height=1 border=0 src='" + protocol + "//b90.yahoo.co.jp/c?account_id=" + account_id + "&transaction_id=" + transaction_id + "&amount=" + amount + "'>");
/* ]]> */
//-->
</script>
{/literal}
{/if}
<!-- 2018/11/20 google_analytics差し替え対応 ST -->
{literal}
<? require_once ('google_analytics.tpl');?>
{/literal}
<!-- 2018/11/20 google_analytics差し替え対応 ED -->

<!-- Accordion -->
{literal}
<script type="text/javascript">
//アコーディオンメニュー
		$(function(){
			$("#privacy_ac").on("click", function() {
				$(this).next().slideToggle("fast");
				$(this).toggleClass("mainasu");
			});
		});
</script>
{/literal}

<!-- 20161205@nagai ST -->
<!-- datepicker読み込み -->
<!--
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>
<link type="text/css" href="//ajax.googleapis.com/ajax/libs/jqueryui/1/themes/ui-lightness/jquery-ui.css" rel="stylesheet" />
-->
<!-- 20161205@nagai END -->

<!-- 20161219@nagai ST -->
<!-- datepicker読み込み -->
<script type="text/javascript" src="/js/jquery.datepicker.js"></script>
<script type="text/javascript" src="/js/jquery-ui.datepicker.min.js"></script>
<script type="text/javascript" src="/js/datepicker-ja.js"></script>
<link type="text/css" href="/sp/css/jquery-ui.datepicker.css" rel="stylesheet" />
<!-- 20161219@nagai END -->

<!-- 20161219@nagai ST -->
<!-- 入庫希望日時 -->
{literal}
<script type="text/javascript">
	jQuery.noConflict();
	(function($) {
		$(function(){
			$("#datepicker2").datepicker({
				minDate : '0y', 		//今日から
				maxDate : '+1y',		//1年後までが選択可能範囲
				showOn : "both",
				buttonImage : "/sp/images/estimate/icon_calendar.gif", 		//カレンダーアイコン (暫定)
				buttonImageOnly : true,
				buttonText : "カレンダーから選択",
				showOtherMonths : true,
				showButtonPanel : true, 					//「今日」「閉じる」ボタン
				onSelect: function(dateText, inst){
					//カレンダー確定時にフォームに反映
					var dates = dateText.split('/');
          
          //令和元号対応 ST
					document.getElementById('check_y2').value=dates[0];
					//現状処理をコメントアウト
					/*
					var wareki = 1988;
					var year = dates[0] - wareki;

					document.getElementById('check_y2').value=year;
					*/
          
					document.getElementById('check_m2').value=dates[1];
					document.getElementById('check_d2').value=dates[2];
				}

			});
		});
	})(jQuery)
</script>
<!-- 車検満了日 -->
<script type="text/javascript">
	jQuery.noConflict();
	(function($) {
		$(function(){
			$("#datepicker").datepicker({
				minDate : '-1y', 		//1年前から(過去の車検切れを考慮)
				maxDate : '+3y',			//3年後までが選択可能範囲
				showOn : "both",
				buttonImage : "/sp/images/estimate/icon_calendar.gif", 		//カレンダーアイコン (暫定)
				buttonImageOnly : true,
				buttonText : "カレンダーから選択",
				showOtherMonths : true,
				showButtonPanel : true, 					//「今日」「閉じる」ボタン
				onSelect: function(dateText, inst){
					//カレンダー確定時にフォームに反映
					var dates = dateText.split('/');
					var wareki = 1988;
					var year = dates[0] - wareki;

					document.getElementById('check_y').value=year;
					document.getElementById('check_m').value=dates[1];
					document.getElementById('check_d').value=dates[2];

				}
			});
		});
	})(jQuery)
</script>
{/literal}
<!-- 20161219@nagai END -->

</head>

<body>
<!--▼wrapper-->
<div id="wrapper">
	<!--▼header-->
	<header id="header">
		<div id="header_in">
			<div id="header_left">
			<p><a href="/sp/"><img src="/sp/images/common/logo.png" width="136" height="18" alt="とことん車検ナビ"></a></p>
			</div>
			<div id="header_right">
			</div>
			<br class="clear">
		</div>
	</header>
	<!--▲header-->

{literal}
<script type="text/javascript">
var is_note_msg=true;
window.onbeforeunload = function(){
  if(is_note_msg){
		return "見積りは完了しておりません。\nこのページを離れると、入力したデータが削除されます。\移動してもよろしいですか？";
  }
}
</script>
{/literal}
<!--▽カンタン無料お見積りフォーム -->
<div id="easyform_title">
	<img src="/sp/images/estimate/title.svg" width="100%" alt="カンタン無料お見積りフォーム">
</div>
<!--△カンタン無料お見積りフォーム -->

<!---▼全体--->
<div id="all_contents">
	<p class="kaki_form" style="margin-top:12px;margin-bottom:10px;">下記フォームに必要項目をご入力ください。<span class="mitsumori_color">お見積り無料</span></p>

	<!--- ▽STEP --->
	<div id="step_flow">
		<img src="/sp/images/estimate/step1.svg" width="100%" alt="STEP1">
		<p>{$plan.pb_plan_nm}（{$shop_data.sd_shop_nm}）</p>
	</div>
	<!--- △STEP --->
	<!-- 20161206@nagai ST -->
	{if $form_error.car_check_date or $form_error.car_arrival_date}
	<!-- 20161206@nagai END -->
	<div style="border: 1px solid red;color:#ff0000;margin:10px;">
		<!-- 20161206@nagai ST -->
		{if $form_error.car_arrival_date}<p style="padding:10px;"><font style="color:#ff0000;">・{$form_error.car_arrival_date}</font></p>{/if}
		{if $form_error.car_check_date}<p style="padding:10px;"><font style="color:#ff0000;">・{$form_error.car_check_date}</font></p>{/if}
		<!-- 20161206@nagai END -->
	</div>
	{/if}

	<!---▽フォーム--->
	<div id="form">
	<form action="/user/estimate_form/to_confirm/" method="post" name="estimate_form" id="formID">
	{include file="$document_root/application/views/user/makerchildS.tpl"}
		<div class="content_wrapp">
			<h3 class="subtitle">お客様情報を入力してください</h3><br/>
			<ul>
				<li class="subhead"><span class="require">必須</span> お客様氏名</li>
				<li class="subcontent">
					<input name="name" placeholder=" 山田太郎" type="text" value="{$form_data.name}" class="validate[required]"  onfocus = "this.style.background = '#FFFF7C';" onBlur="this.style.background = '#fff';"/>
					<br/>
				</li>
			</ul>
			<ul>
				<li class="subhead"><span class="require">必須</span> ふりがな</li>
				<li class="subcontent">
					<input name="name_kana" placeholder=" やまだたろう" type="text" value="{$form_data.name_kana}" class="validate[required]"  onfocus = "this.style.background = '#FFFF7C';" onBlur="this.style.background = '#fff';"/>
				</li>
			</ul>

			<ul>
				<li class="subhead"><span class="require">必須</span> 連絡先電話番号</li>
				<li class="subcontent">
					<input name="tel" placeholder=" 09012345678" type="tel" value="{$form_data.tel}" class="validate[required]"  onfocus = "this.style.background = '#FFFF7C';" onBlur="this.style.background = '#fff';"/>
					{if $form_error.tel}<p class="mt5 red">{$form_error.tel}</p>{/if}
				</li>
			</ul>

			<ul>
				<li class="subhead"><span class="require">必須</span> メールアドレス</li>
				<li class="subcontent">
					<input name="email" type="text" value="{$form_data.email}" class="validate[required]"  onfocus = "this.style.background = '#FFFF7C';" onBlur="this.style.background = '#fff';"/>
					<p class="mt5 red">※ご入力頂いたメールアドレス宛てにお見積りを返信いたします。</p>
				</li>
			</ul>

		</div>

		<div class="content_wrapp">
			<h3 class="subtitle">お車に関する情報を入力してください</h3><br/>

			<ul>
				<li class="subhead"><span class="require2">任意</span> メーカー</li>
				<li class="subcontent">{$maker_pulldown}</li>
			</ul>

			<ul>
				<li class="subhead"><span class="require2">任意</span> 車名</h4>
				<li class="subcontent">
					<!---▼車名一覧表示--->
					<div id="car_name">
						<!---▼車名一覧表示スクリプト--->
						{literal}
						<script type="text/javascript">
							/* 子ジャンルのID名 */
							var idName="car_name";

							/* 親ジャンルが変更されたら、子ジャンルを生成 */
							function createChildOptions(frmObj) {
								/* 親ジャンルを変数pObjに格納 */
								var pObj=estimate_form.elements["maker"].options;
								/* 親ジャンルのoption数 */
								var pObjLen=pObj.length;
								var htm="<select class='validate[required] text-input' onfocus='is_note_msg=true;' name='car_name'>";
								for(i=0; i<pObjLen; i++ ) {
									/* 親ジャンルの選択値を取得 */
									if(pObj[i].selected>0){
										var itemLen=item[i].length;
										for(j=0; j<itemLen; j++){
											// 先のページから戻ってきた、入力チェックで自ページに戻された場合は車両を選択している場合がある
											txt_selected = ("<?= $form_data["car_name"] ?>" == item[i][j]) ? " selected" : " ";
											htm+="<option value='"+item[i][j]+"'"+txt_selected+">"+item[i][j]+"<\/option>";
										}
									}
								}
								htm+="<\/select>";
								/* HTML出力 */
								document.getElementById(idName).innerHTML=htm;
							}

							/* onLoad時にプルダウンを初期化 */
							function init(){
								/* メーカーが未選択なら全初期化 */
								if (document.getElementById('maker').selectedIndex == 0) {
									htm ="<select onfocus='is_note_msg=true;' name='car_name'>";
									htm+="<option value=''>"+item[0][0]+"<\/option>";
									htm+="<\/select>";
									/* HTML出力 */
									document.getElementById("car_name").innerHTML=htm;
									/* メーカーが選択された状態で戻ってくれば車両リスト読込(先のページから戻ってきた、入力チェックで自ページに戻された場合) */
								} else {
									createChildOptions(document.forms[0]);
								}
							}

							/* ページ読み込み完了時に、プルダウン初期化を実行 */
							window.onload=init;
						</script>
						{/literal}
					</div>
					<!---▲車名一覧表示--->
				</li>
			</ul>

			<ul>
				<li class="subhead"><span class="require">必須</span> 自動車の種別</li>
				<li class="subcontent">{$car_type_pulldown}</li>
			</ul>

			<ul>
				<li class="subhead"><span class="require">必須</span> 車両重量</li>
				<li class="subcontent">{$car_weight_pulldown}</li>
			</ul>

			<!-- 20161219@nagai ST -->
			<ul>
				<li class="subhead"><span class="require2">任意</span> 入庫希望日時</li>
				<li class="subcontent">{$check_pulldown2}<input type="hidden" id="datepicker2"></li>
				<li class="subcontent">{$time_zone_pulldown}</li>
				<li class="subcontent" style="margin-top: 10px;">
					<textarea name="other_comment" cols="52" rows="6" maxlength="300" placeholder="その他、ご要望をご記入ください..." onfocus = "this.style.background = '#FFFF7C';" onBlur="this.style.background = '#fff';">{$form_data.other_comment}</textarea>
				</li>
				<li class="subcontent" style="color:#ff0000;">※ご希望の入庫日がございましたら、ご記入ください。<br />※実際の入庫日は、店舗とご相談の上決定となります。</li>
	        </ul>
	        <!-- 20161219@nagai END -->

			<ul>
				<li class="subhead"><span class="require">必須</span> 車検満了日</li>
				<li class="subcontent">{$check_pulldown}<input type="hidden" id="datepicker"></li>
				<!--<li class="subcontent" style="color:#ff0000;">※車検満了日まで1週間を切っている場合は「日にち」まで入力して下さい。</li>-->
	        </ul>
		</div>

	{if $dsc_arr}
		<div class="content_wrapp">
			<h3 class="subtitle">ご利用予定の割引メニューを選んでください</h3><br/>
		{foreach from=$dsc_arr item = "item" key = "key" name = "dsc_base_loop"}
			<ul>
				<li class="subhead"><span class="require2">任意</span> {$item.db_menu_nm}</li>
				<li class="sub_explanation">{$item.db_menu_detail|nl2br}</li>
				<li class="subcontent">
					<select name="discount[{$key}]">
					{foreach from=$item.detail_arr item = "item2" key = "key2" name = "dsc_detail_loop"}
						<option value="{$item.db_no}_{$key2}" {if $form_data.discount.$key == $item.db_no|cat:_|cat:$key2} selected="selected"{/if} >{$item2}</option>
					{/foreach}
						<option value="{$item.db_no}_nouse" id="discount{$item.db_no}_nouse"{if $form_data.discount.$key == $item.db_no|cat:_nouse} selected="selected"{/if} >使わない</option>
						<option value="{$item.db_no}_nojudge" id="discount{$item.db_no}_nojudge"{if $form_data.discount.$key == $item.db_no|cat:_nojudge or $form_data.discount == ""} selected="selected"{/if} >分からない</option>
					</select>
				</li>
			</ul>
		{/foreach}
		</div>
	{/if}

		<div class="content_wrapp">
			<h3 class="subtitle">ご要望・お問い合わせ</h3><br/>
			<ul>
				<li class="subcontent" style="margin-top: 10px;">
					<textarea name="comment" rows="5"  onfocus = "this.style.background = '#FFFF7C';" onBlur="this.style.background = '#fff';">{$form_data.comment}</textarea>
				</li>
			</ul>
		</div>


		<div class="title_estimate">
		</div>
		<dl id="estimate_ac" >
			<label for="Panel1" id="privacy_ac" class="pArea">個人情報の取り扱いについて</label>
			<input type="checkbox" id="Panel1" class="on-off" />
			<div id="privacy_text">
				<ol>
                    <li>事業者の氏名または名称<br>
                      株式会社MIC</li>
                    <li>個人情報保護管理者<br>
                      開発部部長 </li>
                    <li>個人情報の利用目的<br>
                      ご入力いただいた個人情報は見積りをご依頼された店舗が、お見積りおよびご連絡、お申込み手続きのために利用いたします。</li>
                    <li>個人情報の第三者提供について<br />
                    	ご入力いただいた個人情報は以下のとおり提供され、その後は個別のお取引となります。<br />
                        <ul class="num4">
                        	<li>イ、提供する目的は、お見積もりおよびご連絡、お申込手続きのためです。</li>
                            <li>ロ、提供する個人情報は、本フォームにご入力いただいたすべての内容です。</li>
                            <li>ハ、提供の手段は、電子メールです。</li>
                            <li>ニ、提供を受けるのは見積もりをご依頼された店舗を運営する法人です。</li>
                            <li>ホ、個人情報の取り扱いは当該法人が行い、法律、法令および当該法人の定める規定に基づいて利用、保管され、消去されます。</li>
                        </ul>
                    </li>
                    <li>個人情報の取扱いの委託について<br>
                      取得した個人情報の取扱いの全部又は一部を委託することがあります。</li>
                    <li>開示対象個人情報の開示等および問い合わせ窓口について<br>
						ご本人からの求めにより、当社が保有する開示対象個人情報の利用目的の通知・開示・内容の訂正・追加または削除・利用の停止・消去および第三者への提供の停止（「開示等」といいます。）に応じます。 <br>
                      開示等に関する窓口は、以下の「お問合せ先」をご覧下さい。</li>
                    <li>個人情報を入力するにあたっての注意事項<br>
                      個人情報の提供は任意ですが、正確な情報をご提供いただけない場合、正確な処理およびご連絡などが行われない場合がありますので、予めご了承下さい。</li>
                    <li>本人が容易に認識できない方法による個人情報の取得<br>
                      クッキーやウェブビーコン等を用いるなどして、本人が容易に認識できない方法による個人情報の取得は行っておりません。</li>
                    <li>個人情報の安全管理措置について<br>
						取得した個人情報については、漏洩、減失またはき損の防止と是正、その他個人情報の安全管理のために必要かつ適切な措置を講じます。<br>
                      このサイトは、SSL（Secure Socket Layer）による暗号化措置を講じています。</li>
                    <li>個人情報保護方針<br>
                    当社ホームページの<a onClick="is_note_msg=false;" onFocus="is_note_msg=true;" href="http://www.mic-info.co.jp/privacy_policy/privacy_policy.html" target="_blank">個人情報保護方針</a>をご覧下さい。 <br>
                      <a onClick="is_note_msg=false;" onFocus="is_note_msg=true;" href="http://www.mic-info.co.jp" target="_blank">http://www.mic-info.co.jp </a></li></ol>
                    <hr size="1" noshade>
                    <p class="ml_20">株式会社MIC<br>
						個人情報　苦情・相談窓口<br>
						〒224-0041<br>
						神奈川県横浜市都筑区仲町台1-27-20 プラザ仲町台 <br>
						TEL：045-943-7281　FAX：045-943-7280<br>
                      ◎TELによるお問合せ受付時間　平日（月～金）9:00～17:00（※12:00～13:00は除く）</p>
			</div>
		</dd>
		</dl>

		<div class="box">
			<p class="style_box">上記「個人情報の取り扱いについて」に同意の上、「同意して入力内容を確認する」ボタンを押して下さい。</p>
		</div>
		<br/>
        <p class="text_center marginTop20">
	        <center>
	        	<button type="submit" name="confirm" onClick="is_note_msg=false;" value="同意して入力内容を確認する"><img src="/sp/images/estimate/button.jpg" width="250"/></button>
			</center>
        </p>
		<input type="hidden" name="backurl" value="http://www.tokoton-navi.com/index.html" />
		<input type="hidden" name="sid" value="{$sid}" />
		<input type="hidden" name="pb_no" value="{$pb_no}" />
		<input type="hidden" name="plan_nm" value="{$plan.pb_plan_nm}" />
	</form>

	<br/>
	<!---▼プライバシーマーク--->
	<div id="pr">
		<p>※このフォームは、SSLによる通信の暗号化処理が施してありますので、お客様の情報を外部に漏らすことなく安心して送信頂けます。</p>
		<ul class="pr_icon">
        	<li><a href="http://privacymark.jp/" target="_blank"><img src="https://www.tokoton-navi.com/sp/images/common/10840435_100_JP.gif" width="50" alt="プライバシーマーク" /></a></li>
            <li>当社はプライバシーマークを取得しております。</li>
		</ul>
	</div>
	<!---▲プライバシーマーク--->

	</div>
	<!---△フォーム--->

</div>
<!---▲全体--->

{include file="$document_root/application/views/user/footerestimate_sp.tpl"}
