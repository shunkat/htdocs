{include file="$document_root/application/views/user/headerestimate_test.tpl"}
{literal}
<script type="text/javascript">
// ページ移動時▼
var is_note_msg=true;
window.onbeforeunload = function(){
	if(is_note_msg){
		return "見積りは完了しておりません。\nこのページを離れると、入力したデータが削除されます。\移動してもよろしいですか？";
	}
}
</script>

<!-- 20161128@nagai ST -->
<!-- 入庫希望日時 -->
<script type="text/javascript">
	jQuery.noConflict();
	(function($) {
		$(function(){
			$("#datepicker2").datepicker({
				minDate : '0y', 		//今日から
				maxDate : '+1y',		//1年後までが選択可能範囲
				showOn : "both",
				buttonImage : "/img/user/estimate/icon_calendar.gif", 		//カレンダーアイコン (暫定)
				buttonImageOnly : true,
				buttonText : "カレンダーから選択",
				showOtherMonths : true,
				
				onSelect: function(dateText, inst){
					//カレンダー確定時にフォームに反映
					var dates = dateText.split('/');
					var wareki = 1988;
					var year = dates[0] - wareki; 
	
					document.getElementById('id_check_y2').value=year;
					document.getElementById('id_check_m2').value=dates[1];
					document.getElementById('id_check_d2').value=dates[2];
	
				}
			});
		});
	})(jQuery)
</script>
<!-- 20161128@nagai END -->
<!-- 20161205@nagai ST -->
<!-- 車検満了日 -->
<script type="text/javascript">
	jQuery.noConflict();
	(function($) {
		$(function(){
			$("#datepicker").datepicker({
				minDate : '-1y', 		//1年前から(過去の車検切れを考慮)
				maxDate : '+3y',			//3年後までが選択可能範囲
				showOn : "both",
				buttonImage : "/img/user/estimate/icon_calendar.gif", 		//カレンダーアイコン (暫定)
				buttonImageOnly : true,
				buttonText : "カレンダーから選択",
				showOtherMonths : true,

				onSelect: function(dateText, inst){
					//カレンダー確定時にフォームに反映
					var dates = dateText.split('/');
					var wareki = 1988;
					var year = dates[0] - wareki; 

					document.getElementById('id_check_y').value=year;
					document.getElementById('id_check_m').value=dates[1];
					document.getElementById('id_check_d').value=dates[2];
				}
			});
		});
	})(jQuery)
</script>
<!-- 20161205@nagai END -->

<style>
td{
	vertical-align:middle;
	text-align:left;
}

table.price_table_base th{
	border-right:1px solid #ADADAD;
}

td.b_s3{
	border-right:1px solid #ADADAD;
	vertical-align:middle;
	
}

.b_s4{
	border-left:1px solid #ADADAD;
	
}

div#content td{
	height:40px;
}

table.pric_table th,
table.pric_table td{
	border-right: 1px solid #ADADAD;
}
</style>

{/literal}
<div id="content">
	<br class="clear"/>
	<center><h2 id="text_style00">下記フォームに必要項目をご入力ください。（お見積り無料！）</h2></center><br/>
	<center><img src="/img/user/estimate/step_01.jpg" alt="ステップ１"></center>
	<br/>
	<h3 id="selected_plan" align="left" class="line_style">{$plan.pb_plan_nm}（{$shop_data.sd_shop_nm}）</h3>
	<!-- 20161129@nagai ST -->
	{if $form_error.car_check_date or $form_error.car_arrival_date}
	<!-- 20161129@nagai END -->
	<div style="border: 1px solid red;color:#ff0000;">
		<p style="padding:10px;">
			<!-- 20161129@nagai ST -->
			{if $form_error.car_arrival_date}<font style="color:#ff0000;">・{$form_error.car_arrival_date}</font><br />{/if}
			{if $form_error.car_check_date}<font style="color:#ff0000;">・{$form_error.car_check_date}</font>{/if}
			<!-- 20161129@nagai END -->
		</p>
	</div>
	{/if}

	<form action="/user/estimate_form_test/to_confirm/" method="post" name="estimate_form_test" id="formID">
		{include file="$document_root/application/views/user/makerchildS.tpl"}
		<p id="caption_carinfo"></p>
		<table class="price_table_base" >
		<tbody>
			<tr style="line-height:20px;">
				<th class="bg_price_title b_s4 b_top" colspan="4">■お車に関する情報を入力して下さい</th>
			</tr>
			<!-- 20161125@nagai ST -->
			<tr>
				<td class="b_s4">入庫希望日時</td>
				<td class="b_s3"><img src="/img/user/estimate/nini.gif"></td>
				<td colspan="2" class="b_s3">
					{$check_pulldown2}
					
					<input type="hidden" id="datepicker2">
					{$time_zone_pulldown}
					<br />
					
					<textarea name="other_comment" cols="52" rows="6" maxlength="300" placeholder="その他、ご要望をご記入ください..." onfocus = "this.style.background = '#FFFF7C';" onblur="this.style.background = '#fff';">{$form_data.other_comment}</textarea>
					<p class="mr8" style="color:#ff0000;">※入庫希望日は仮予約のものになります。<br />店舗の状況によってお客様のご希望の日時に添えない場合がございます。</p>
				</td>
			</tr>
			<!-- 20161125@nagai END -->
			<tr>
				<td class="b_s4">車検満了日</td>
				<td class="b_s3"><img src="/img/user/estimate/hissu.gif"></td>
				<td colspan="2" class="b_s3">{$check_pulldown}
					<input type="hidden" id="datepicker"><br />
					<p class="mr8" style="color:#ff0000;">※車検満了日まで1週間を切っている場合は「日にち」まで入力して下さい。</p>
				</td>
			</tr>
			<tr>
				<td class="b_s4">自動車の種別</td>
				<td class="b_s3"><img src="/img/user/estimate/hissu.gif"></td>
				<td colspan="2" class="b_s3">{$car_type_pulldown}</td>
			</tr>
			<tr>
				<td class="b_s4">メーカー</td>
				<td class="b_s3"><img src="/img/user/estimate/nini.gif"></td>
				<td colspan="2" class="b_s3">{$maker_pulldown}</td>
			</tr>
			<tr>
				<td class="b_s4">車名</td>
				<td class="b_s3"><img src="/img/user/estimate/nini.gif"></td>
				<td colspan="2" class="b_s3">
					<div id="car_name">
						<!---▼車名一覧表示スクリプト--->
						{literal}
						<script type="text/javascript">					
							/* 子ジャンルのID名 */
							var idName="car_name";

							/* 親ジャンルが変更されたら、子ジャンルを生成 */
							function createChildOptions(frmObj) {
								/* 親ジャンルを変数pObjに格納 */
								var pObj=estimate_form_test.elements["maker"].options;
								/* 親ジャンルのoption数 */
								var pObjLen=pObj.length;
								var htm="<select class='validate[required] text-input' onfocus='is_note_msg=true;' name='car_name' style='width:40%;'>";
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
									htm ="<select onfocus='is_note_msg=true;' name='car_name' style='width:40%;'>";
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
				</td>
			</tr>
			<tr>
				<td class="b_s4">車両重量</td>
				<td class="b_s3"><img src="/img/user/estimate/hissu.gif"></td>
				<td colspan="2" class="b_s3">{$car_weight_pulldown}</td>
			</tr>
			<?php if($dsc_arr){ ?>
				<tr>
					<th class="bg_price_title b_s4 b_top" colspan="4">■ご利用予定の割引メニューを選んでください</th>
				</tr>
				<tr>
					<th class="bg_price_subtitle01 b_s4 b_top" colspan="2">割引メニュー</th>
					<th class="bg_price_subtitle01 b_top" colspan="2">選択項目</th>
				</tr>
				{foreach from=$dsc_arr item = "item" key = "key" name = "dsc_base_loop"}
					<tr>
						<td class="b_s4">{$item.db_menu_nm}</td>
						<td class="b_s3"><img src="/img/user/estimate/nini.gif"></td>
						<td class="b_s3" colspan="2">
							<select name="discount[{$key}]"  style="width:40%">
								{foreach from=$item.detail_arr item = "item2" key = "key2" name = "dsc_detail_loop"}
									<option value="{$item.db_no}_{$key2}" {if $form_data.discount.$key == $item.db_no|cat:_|cat:$key2} selected="selected"{/if} >{$item2}</option>
								{/foreach}
								<option value="{$item.db_no}_nouse" id="discount{$item.db_no}_nouse"{if $form_data.discount.$key == $item.db_no|cat:_nouse} selected="selected"{/if} >使わない</option>
								<option value="{$item.db_no}_nojudge" id="discount{$item.db_no}_nojudge"{if $form_data.discount.$key == $item.db_no|cat:_nojudge or $form_data.discount == ""} selected="selected"{/if} >分からない</option>
							</select>
							<br/>
							<p class="mr8">{$item.db_menu_detail|nl2br}</p>
						</td>
					</tr>
				{/foreach}
			<?php } ?>
			<tr>
				<th class="bg_price_title b_s4 b_top" colspan="4">■お客様情報を入力してください</th>
			</tr>
			<tr>
				<td class="b_s4">お客様氏名</td>
				<td class="b_s3"><img src="/img/user/estimate/hissu.gif"></td>
				<td class="value b_s3" colspan="2">
					<span class="value">
					<input name="name" placeholder="山田太郎" type="text" size="52" value="{$form_data.name}" class="validate[required]"  onfocus = "this.style.background = '#FFFF7C';" onblur="this.style.background = '#fff';"/>
					</span>
				</td>
			</tr>
			<tr>
				<td class="b_s4">ふりがな</td>
				<td class="b_s3"><img src="/img/user/estimate/hissu.gif"></td>
				<td class="value b_s3" colspan="2">
					<span class="value">
					<input name="name_kana" placeholder="やまだたろう" type="text" size="52" value="{$form_data.name_kana}" class="validate[required]"  onfocus = "this.style.background = '#FFFF7C';" onblur="this.style.background = '#fff';"/>
					</span>
				</td>
			</tr>
			<tr>
				<td class="b_s4"><span class="rabel">連絡先電話番号</span></td>
				<td class="b_s3"><img src="/img/user/estimate/hissu.gif"></td>
				<td colspan="2" class="b_s3">
					<span class="value">
					<input name="tel" placeholder=" 例：09000000000" type="text" size="52" value="{$form_data.tel}" class="validate[required]"  onfocus = "this.style.background = '#FFFF7C';" onblur="this.style.background = '#fff';"/>
					</span>
					{if $form_error.tel}<p class="mr8"><font style="color:#ff0000;">{$form_error.tel}</font></p>{/if}
				</td>
			</tr>
			<tr>
				<td class="b_s4"><span class="rabel">メールアドレス</span></td>
				<td class="b_s3"><img src="/img/user/estimate/hissu.gif"></td>
				<td colspan="2" class="b_s3">
					<span class="value">
					<input name="email" type="text" size="52" value="{$form_data.email}" class="validate[required,custom[email]] text-input"  onfocus = "this.style.background = '#FFFF7C';" onblur="this.style.background = '#fff';"/>
					</span>
				</td>
			</tr>
			<tr>
				<td class="b_s4 border_bottom">ご要望・お問い合わせ</td>
				<td class="b_s3 border_bottom"><img src="/img/user/estimate/nini.gif"></td>
				<td colspan="2" class="b_s3 border_bottom"><textarea name="comment" cols="52" rows="10"  onfocus = "this.style.background = '#FFFF7C';" onblur="this.style.background = '#fff';">{$form_data.comment}</textarea></td>
			</tr>
		</tbody>
		</table>	
		<br/><br/>
		<div id="privacy">
			<div id="privacy_box_left">
				<h3>■個人情報の取り扱いについて</h3>
				<p class="mt_10 line_style" align="left">下記「個人情報の取り扱いについて」に同意の上、<br />
				「同意して入力内容を確認する」ボタンをクリックして下さい。</p>
			</div>
			<div id="privacy_box_right">
				<table>
					<tr>
            				<td><a href="http://privacymark.jp/" target="_blank"><img src="https://www.tokoton-navi.com/inquiry/images/10840435_75_JP.gif" width="75" height="75" alt="プライバシーマーク" /></a></td>
						<td>当社はプライバシーマークを取得しております</td>
					</tr>
				</table>
			</div>
			<br class="clear" />
			
			<div id="privacy_text">
				<ol>
					<li>事業者の氏名または名称<br>
					株式会社　マーケティングインフォメーションコミュニティ</li>
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
                    当社ホームページの<a onclick="is_note_msg=false;" onfocus="is_note_msg=true;" href="http://www.mic-info.co.jp/privacy_policy/privacy_policy.html" target="_blank">個人情報保護方針</a>をご覧下さい。 <br>
                      <a onclick="is_note_msg=false;" onfocus="is_note_msg=true;" href="http://www.mic-info.co.jp" target="_blank">http://www.mic-info.co.jp </a></li></ol>
				<hr size="1" noshade>
				<p class="ml_20">株式会社マーケティングインフォメーションコミュニティ<br>
				個人情報　苦情・相談窓口<br>
				〒224-0041<br>
				神奈川県横浜市都筑区仲町台1-27-20 プラザ仲町台 <br>
				TEL：045-943-7281　FAX：045-943-7280<br>
				◎TELによるお問合せ受付時間　平日（月～金）9:00～17:00（※12:00～13:00は除く）</p>
			</div>
		</div>
		<br />
		<br />
		<center>
			<input type="image" src="/img/user/estimate/confirm_off.gif" onClick="is_note_msg=false;" onmouseover="this.src='/img/user/estimate/confirm_on.gif'" onmouseout="this.src='/img/user/estimate/confirm_off.gif'" >
			<!--  
			<a href="#" onclick="is_note_msg=false;javascript:estimate_form_test.submit();return false;">
			<input type="image" src="/img/user/estimate/confirm_off.gif"  onmouseover="this.src='/img/user/estimate/confirm_on.gif'" onmouseout="this.src='/img/user/estimate/confirm_off.gif'" >
			</a>-->
		</center>
		<input type="hidden" name="sid" value="{$sid}" />
		<input type="hidden" name="pb_no" value="{$pb_no}" />
		<input type="hidden" name="plan_nm" value="{$plan.pb_plan_nm}" />
	</form>

	<center>
		<p class="line_style">※このフォームは、SSLによる通信の暗号化処理が施してありますので、<br />
		お客様の情報を外部に漏らすことなく安心して送信頂けます。</p>
	</center>
	
	<div style="text-align:center; margin:1em;">
		<span id="ss_img_wrapper_130-66_flash_ja">
			<a href="http://jp.globalsign.com/" target=_blank>
				<img alt="SSL　グローバルサインのサイトシール" border=0 id="ss_img" src="https://seal.globalsign.com/SiteSeal/images/gs_noscript_130-66_ja.gif">
			</a>
		</span>
		<script type="text/javascript" src="https://seal.globalsign.com/SiteSeal/gs_flash_130-66_ja.js">
		</script>
	</div>
</div>
{include file="ci:user/footerestimate.tpl"}
