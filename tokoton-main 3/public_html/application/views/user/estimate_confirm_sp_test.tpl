{include file="$document_root/application/views/user/headerestimate_sp_test.tpl"}


<!--▽カンタン無料お見積りフォーム -->
<div id="easyform_title">
	<img src="/sp/images/estimate/title.svg" width="100%" alt="カンタン無料お見積りフォーム">
</div>
<!--△カンタン無料お見積りフォーム -->

<!---▼全体--->
<div id="all_contents">
	<p class="kaki_form" style="margin-top:12px;margin-bottom:10px;">入力内容をご確認下さい。</p>
	<!--- ▽STEP --->
	<div id="step_flow">
		<img src="/sp/images/estimate/step2.svg" width="100%" alt="STEP2">
		<p>{$plan.pb_plan_nm}（{$shop_data.sd_shop_nm}）</p>
	</div>
	<!--- △STEP --->


	<!---▽フォーム--->
	<div id="form">
		<h3 class="subtitle">お客様情報</h3>
		<table class="fm2">
			<tr>
				<th class="fm2th">お客様氏名</th>
				<td class="fm2td">{$form_data.name}</td>
			</tr>

			<tr>
				<th class="fm2th">ふりがな</th>
				<td class="fm2td">{$form_data.name_kana}</td>
			</tr>

			<tr>
				<th class="fm2th">連絡先電話番号</th>
				<td class="fm2td">{$form_data.tel}</td>
			</tr>

			<tr>
				<th class="fm2th">メールアドレス</th>
				<td class="fm2td">{$form_data.email}</td>
			</tr>
		</table>

		<h3 class="subtitle">車両情報</h3>
		<table class="fm2">
			<tr>
				<th class="fm2th">メーカー</th>
				<td class="fm2td">{$form_data.maker_nm}</td>
			</tr>

			<tr>
				<th class="fm2th">車名</th>
				<td class="fm2td">{$form_data.car_name}</td>
			</tr>

			<tr>
				<th class="fm2th">自動車の種別</th>
				<td class="fm2td">{$form_data.car_type_nm}</td>
			</tr>

			<tr>
				<th class="fm2th">車両重量</th>
				<td class="fm2td">{if $form_data.car_weight != ""}{$form_data.car_weight_nm}{/if}</td>
			</tr>

			<!-- 20161206@nagai ST -->
			<tr>
				<th class="fm2th">入庫希望日時</th>
				<td class="fm2td" style="word-break:break-all;">
					{if $form_data.check_y2 != "" and $form_data.check_m2 != "" and $form_data.check_d2}平成{$form_data.check_y2}年{$form_data.check_m2}月{if $form_data.check_d2 != "不明"}{$form_data.check_d2}日{/if}{/if}
					{if $form_data.time_zone_nm}{$form_data.time_zone_nm}{/if}
					<!-- 改行を調整 -->
					{if (($form_data.check_y2 != "" and $form_data.check_m2 != "" and $form_data.check_d2) or ($form_data.time_zone_nm != "")) and $form_data.other_comment != ""}<br />{/if}
					
					{if $form_data.other_comment}<div style="margin-top:10px;margin-bottom:10px;">【その他、ご要望】<br />
					<div style="margin-top:10px;margin-bottom:10px;">{$form_data.other_comment}</div>
					{/if}
					{if $form_data.check_y2 != "" and $form_data.check_m2 != "" and $form_data.check_d2 or $form_data.time_zone_nm != "" or $form_data.other_comment != ""}
					<div style="margin-top:10px;margin-bottom:10px;color:#ff0000;">店舗の状況によってお客様のご希望の日時に添えない場合がございます。<div>
					{/if}
					{if $form_data.check_y2 == "" and $form_data.check_m2 == "" and $form_data.check_d2 and $form_data.time_zone_nm == "" and $form_data.other_comment == ""}
					<div>ご希望の日時指定なし</div>
					{/if}
				</td>
			</tr>
			<!-- 20161206@nagai END -->

			<tr>
				<th class="fm2th">車両満了日</th>
				<td class="fm2td">{if $form_data.check_y != "" and $form_data.check_m != "" and $form_data.check_d}平成{$form_data.check_y}年{$form_data.check_m}月{if $form_data.check_d != "不明"}{$form_data.check_d}日{/if}{/if}</td>
			</tr>

		</table>
{if $dsc_arr}
		<h3 class="subtitle">割引メニュー</h3>
		<table class="fm2">
		{foreach from=$dsc_arr item = "item" key = "key" name = "dsc_base_loop"}
			<tr>
				<th class="fm2th">{$item.db_menu_nm}</th>
				<td class="fm2td">{if $item.use == "nouse"}使わない{elseif $item.use == "nojudge"}分からない{else}{$item.use}{/if}</td>
			</tr>
		{/foreach}
		</table>
{/if}
		<h3 class="subtitle">ご要望・お問い合わせ</h3>
		<table class="fm2">                        
		<tr>
		<th class="fm2th">内容</th>
		<!-- 20161206@nagai ST -->
		<td class="fm2td" style="word-break:break-all;">{$form_data.comment|nl2br}</td>
		<!-- <td class="fm2td">{$form_data.comment|nl2br}</td> -->
		<!-- 20161206@nagai END -->
		</tr>
		</table>

		<br/>


		<table id="send_edit">
			<tr>
				<td><a href="/estimate_form_test/{$form_data.pb_no}/"><img src="/sp/images/estimate/fixbutton.jpg" onClick="is_note_msg=false;" width="120" alt="修正する"></a></td>
				<td><a href="/user/estimate_form_test/sendmail/" ><img src="/sp/images/estimate/sendbutton.jpg" onClick="is_note_msg=false;" width="120" alt="送信する"></a></td>
			</tr>
		</table>
		<input type="hidden" name="backurl" value="http://www.tokoton-navi.com/index.html" />
	</form>
	</div>
	<!---△フォーム--->
	
	
</div>
<!---▲全体--->

{include file="$document_root/application/views/user/footerestimate_sp.tpl"}
