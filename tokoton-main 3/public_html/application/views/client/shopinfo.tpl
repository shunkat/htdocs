{include file="ci:client/header.tpl"}


<div id="content">
{include file="ci:client/shop_menu.tpl"}
	<div id="content_right">
	<h2>基本情報の設定</h2>
	<p class="description">店舗の基本情報を入力してください。<br />
		※電話受付代行サービスに申し込んでいる場合も、店舗の電話番号を入力してください。<br />
		※店舗サイトをお持ちの場合は店舗サイトURLにアドレスを入力すると、店舗詳細画面で紹介できます。</p>
	<div class="content_sub">
		{if $msg != ""}
		<div class="messagebox">
		<ul>			
			<li>{$msg}</li>
		</ul>
		</div>
		{/if}
		{if $form_error != ""}
		<div class="messagebox_error">
		<ul>
			<li>※印は必須項目です。入力内容を確認してください。</li>
			<li>{$form_error}</li>
		</ul>
		</div>
		{/if}
	<form action="/client/shopinfo/regist/" method="post">
		<table border="0" cellspacing="0" cellpadding="0" class="common">
		<tr>
			<td width="17%" class="cell_label">会社名・店舗名　※</td>
			<td class="cell_value"><input size="45" name="sd_shop_nm" value="{$form_data.sd_shop_nm}" /></td>
		</tr>
		<tr>
			<td class="cell_label">電話番号　※</td>
			<td class="cell_value"><input size="30" name="sd_shop_tel" value="{$form_data.sd_shop_tel}"/>
例.) 023-1234-5678</td>
		</tr>
		<tr>
			<td class="cell_label">住所　※</td>
			<td class="cell_value">〒
			<input size="3" name="sd_shop_zip1" value="{$form_data.sd_shop_zip1}" />
-
<input size="4" name="sd_shop_zip2" value="{$form_data.sd_shop_zip2}" />
<br />
<input size="80" name="sd_shop_address" value="{$form_data.sd_shop_address}" /></td>
		</tr>
		<tr>
			<td class="cell_label">アクセス</td>
			<td class="cell_value"><textarea name="sd_shop_access" cols="50">{$form_data.sd_shop_access}</textarea></td>
		</tr>
		<tr>
			<td class="cell_label">営業時間　※</td>
			<td class="cell_value"><input size="45" name="sd_shop_open" value="{$form_data.sd_shop_open}" />
例.) 8:00～20:00 </td>
		</tr>
		<tr>
			<td class="cell_label">休業日　※</td>
			<td class="cell_value"><input size="45" name="sd_shop_off" value="{$form_data.sd_shop_off}"/>
例.) 土日祝日 、年末年始 </td>
		</tr>
		<tr>
			<td class="cell_label">店舗サイトURL</td>
			<td class="cell_value"><input size="45" name="sd_shop_url" value="{$form_data.sd_shop_url}" /> 
			例.) http://www.syakenavi.com </td>
		</tr>
		<tr>
            <td class="cell_label">備考</td>
            <td class="cell_value"><textarea name="sd_shop_memo" cols="50" rows="5">{$form_data.sd_shop_memo}</textarea></td>
          </tr>
		<tr>
			<td colspan="2" class="cell_submit"><input type="submit" name="Submit" value="設定" class="submit" /></td>
		</tr>
		</table>
		<input type="hidden" name="sid" value="{$sid}" />
	</form>
	</div>
	</div>
</div>
<br style="clear:both;" />

{include file="ci:client/footer.tpl"}