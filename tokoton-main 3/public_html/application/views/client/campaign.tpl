{include file="ci:client/header.tpl"}


<div id="content">
{include file="ci:client/shop_menu.tpl"}
	<div id="content_right">
	<h2>キャンペーン</h2>
	<p class="description">キャンペーンの設定をします。（登録が無ければ店舗詳細画面のキャンペーンは表示されません。）<br />
		フォームに情報を入力し、登録ボタンを押してください。<br />
		編集する場合はフォーム内を直接書き変え、登録ボタンを押してください。<br />
		削除ボタンを押すと登録内容が削除されます。</p>
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
			<li>{$form_error}</li>
		</ul>
		</div>
		{/if}
		<form action="/client/campaign/regist" method="post">
		<table border="0" cellspacing="0" cellpadding="0" class="common">
		<tr>
			<td class="introcell_title">サイト掲載</td>
		</tr>
		<tr>
			<td class="cell_value"><input type="radio" name="cam_open" value="t" {if $form_data.cam_open == "t"}checked{/if}>掲載する　<input type="radio" name="cam_open" value="f" {if $form_data.cam_open == "f" || $form_data.cam_open == ""}checked{/if}>掲載しない</td>
		</tr>
		</table>
		<table border="0" cellspacing="0" cellpadding="0" class="common">
		<tr>
			<td class="introcell_title">キャンペーン名　※</td>
		</tr>
		<tr>
			<td class="cell_value"><input name="cam_name" type="text" size="60" value="{$form_data.cam_name}" /></td>
		</tr>
		</table>
		<table border="0" cellspacing="0" cellpadding="0" class="common">
		<tr>
			<td class="introcell_title">期間</td>
		</tr>
		<tr>
			<td class="introcell_label">キャンペーンの開始日・終了日を入力してください。どちらかだけでも構いません。 </td>
		</tr>
		<tr>
			<td class="cell_value"><input name="cam_start_date" type="text" size="20" value="{$form_data.cam_start_date}" />
			～
			<input name="cam_end_date" type="text" size="20" value="{$form_data.cam_end_date}" />
			例.）2008年4月1日～2008年4月30日</td>
		</tr>
		</table>
		<table border="0" cellspacing="0" cellpadding="0" class="common">
		<tr>
			<td class="introcell_title">詳細</td>
		</tr>
		<tr>
			<td class="cell_value"><textarea name="cam_detail" cols="60" rows="8">{$form_data.cam_detail}</textarea></td>
		</tr>
		</table>
		<div class="centering">
		<input type="submit" name="Submit223" value="登録" class="submit" />
<!--		<input type="submit" name="Submit224" value="削除" /> -->
		</div>
		<input type="hidden" name="sid" value="{$sid}" />
		</form>
		<form action="/client/campaign/image_upload" method="post" enctype="multipart/form-data" >
		<table border="0" cellspacing="0" cellpadding="0" class="common">
		<tr>
			<td class="introcell_title">画像</td>
		</tr>
		<tr>
			<td class="introcell_label">キャンペーンに関わる写真を上記の内容と一緒に表示できます。<br />
			参照ボタンから表示したい画像を選び、登録ボタンを押してください。<br />
			推奨画像サイズ（横500×縦375ピクセル）</td>
		</tr>
		<tr>
			<td class="cell_value">
			{if $form_data.filename0 != ""}
			<img src="{$form_data.filename0}?{$smarty.now}">
			{else}
			<p class="noimage2">No Image</p>
			{/if}
			<br />
			<input type="file" name="campaign1" value="" />
			<input type="submit" name="upload" value="登録" />
			<span class="centering">
			<input type="submit" name="delete" value="削除" />
			</span>
			</td>
		</tr>
		</table>
		<input type="hidden" name="filed_name" value="campaign1">
		<input type="hidden" name="file_name" value="campaign1">
		<input type="hidden" name="sid" value="{$sid}" />
		</form>
	</div>
	</div>
	<br style="clear:both" />
	</div>
{include file="ci:client/footer.tpl"}
