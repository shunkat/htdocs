{include file="ci:user/headerestimate.tpl"}
{literal}
<style>
.thstyle{
	border-bottom:5px solid #00911f;
}
</style>
{/literal}

  <div id="content">
    <br class="clear"/>
    <center><h2 id="text_style00">入力内容をご確認ください。</h2></center><br/>
    <center><img src="/img/user/estimate/step_02.jpg" alt="ステップ2"></center>
    <br/>
    <p align="center">内容に間違いが無ければ送信ボタンを押してください。修正する場合は修正するボタンを押して修正してください。</p>
    <p id="caption_carinfo"></p>
    <table class="price_table_base">
    	<tr>
    		<th class="thstyle" colspan="2">■車両情報</th>
    	</tr>
    	
    	<!-- 20161219@nagai ST -->
    	<tr>
    		<td class="b_s2">入庫希望日時</td>
			<td class="b_s" width="650" style="word-break:break-all;">
        {$form_data.arrival_date}
				{if $form_data.time_zone_nm}{$form_data.time_zone_nm}{/if}
				<!-- 改行を調整 -->
				{if (($form_data.check_y2 != "" and $form_data.check_m2 != "" and $form_data.check_d2) or ($form_data.time_zone_nm != "")) and $form_data.other_comment != ""}<br />{/if}
				{if $form_data.other_comment}【その他、ご要望】<br />{$form_data.other_comment}{/if}
				{if $form_data.check_y2 != "" and $form_data.check_m2 != "" and $form_data.check_d2 or $form_data.time_zone_nm != "" or $form_data.other_comment != ""}
				<P class="mr8" style="color:#ff0000;">※実際の入庫日は、店舗とご相談の上決定となります。</p>
				{/if}
				{if $form_data.check_y2 == "" and $form_data.check_m2 == "" and $form_data.check_d2 and $form_data.time_zone_nm == "" and $form_data.other_comment == ""}
				<div>ご希望の日時指定なし</div>
				{/if}
			</td>
		</tr>
    	<!-- 20161219@nagai END -->
    	
    	<tr>
    		<td class="b_s2">車検満了日</td>
			<td class="b_s" width="650">
        {$form_data.check_date}
			</td>
		</tr>
    	<tr>
    		<td class="b_s2">自動車の種別</td>
			<td class="b_s">
				{$form_data.car_type_nm}
			</td>
		</tr>
    	<tr>
    		<td class="b_s2">メーカー</td>
			<td class="b_s">
				{$form_data.maker_nm}
			</td>
		</tr>
    	<tr>
    		<td class="b_s2">車名</td>
			<td class="b_s">
				{$form_data.car_name}
			</td>
		</tr>
    	<tr>
    		<td class="b_s2">車両重量</td>
			<td class="b_s">
				{if $form_data.car_weight != ""}{$form_data.car_weight_nm}{/if}
			</td>
		</tr>
		<?php if($dsc_arr){ ?>
		<tr>
			<th class= "thstyle" colspan="2">■ご利用予定の割引メニュー</th>
		</tr>
		{foreach from=$dsc_arr item = "item" key = "key" name = "dsc_base_loop"}
	      <tr>
	        <td class="b_s2">{$item.db_menu_nm}</td>
	        <td class="b_s">{if $item.use == "nouse"}使わない{elseif $item.use == "nojudge"}分からない{else}{$item.use}{/if}</td>
	      </tr>
		{/foreach}
		<?php } ?>
		<tr>
			<th class="thstyle" colspan="2">■お客様情報</th>
		</tr>
		<tr>
    		<td class="b_s2">お客様氏名</td>
			<td class="b_s">
				{$form_data.name}
			</td>
		</tr>
		<tr>
    		<td class="b_s2">ふりがな</td>
			<td class="b_s">
				{$form_data.name_kana}
			</td>
		</tr>
		<tr>
    		<td class="b_s2">連絡先電話番号</td>
			<td class="b_s">
				{$form_data.tel}
			</td>
		</tr>
		<tr>
    		<td class="b_s2">メールアドレス</td>
			<td class="b_s">
				{$form_data.email}
			</td>
		</tr>
		<tr>
    		<td class="b_s2">ご要望・お問い合わせ</td>
    		<!-- 20161219@nagai ST -->
			<td class="b_s" style="word-break:break-all;">
			<!-- <td class="b_s"> -->
			<!-- 20161219@nagai END -->
				{$form_data.comment|nl2br}
			</td>
		</tr>
    </table>

  <br/><br/>
  <br class="clear" />

  <center>
	 <a href="/estimate_form/{$form_data.pb_no}/"><img src="/img/user/estimate/fix_off.gif" onClick="is_note_msg=false;" onmouseover="this.src='/img/user/estimate/fix_on.gif'" onmouseout="this.src='/img/user/estimate/fix_off.gif'" ></a>
	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 <a href="/user/estimate_form/sendmail/" ><img src="/img/user/estimate/send_off.gif" onClick="is_note_msg=false;" onmouseover="this.src='/img/user/estimate/send_on.gif'" onmouseout="this.src='/img/user/estimate/send_off.gif'" ></a>
  </center>
<br />
<br />
</div>
  
{include file="$document_root/application/views/user/footerestimate.tpl"}
