{include file="ci:client/header.tpl"}

<div id="content">
{include file="ci:client/shop_menu.tpl"}
	<div id="content_right">
	<h2>紹介文と画像の設定</h2>
	<p class="description">店舗詳細画面及びリスト表示画面の紹介文を設定できます。</p>
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
		<form action="/client/intro/regist" method="post">
		<table border="0" cellspacing="0" cellpadding="0" class="common">
		<tr>
			<td class="introcell_title">キャッチコピー(60文字以内)　※</td>
		</tr>
		<tr>
			<td class="introcell_label">検索結果画面と店舗詳細画面に表示されます。</td>
		</tr>
		<tr>
			<td class="cell_value"><input name="sd_catch_copy" type="text" size="60" value="{$form_data.sd_catch_copy}"/></td>
		</tr>
		</table>
		<table border="0" cellspacing="0" cellpadding="0" class="common">
		<tr>
			<td class="introcell_title">紹介文(6行以内)　※</td>
		</tr>
		<tr>
			<td class="introcell_label">検索結果画面と店舗詳細画面に表示されます。 </td>
		</tr>
		<tr>
			<td class="cell_value"><textarea name="sd_intro" cols="60" rows="6">{$form_data.sd_intro}</textarea>
			<br />
			(HTMLタグは利用できません)</td>
		</tr>
		</table>
		<div class="centering">
		<input type="submit" name="Submit3" value="設定"class="submit"/>
		</div>
		<input type="hidden" name="sid" value="{$sid}" />
		</form>
		
		<form action="/client/intro/image_upload" method="post" enctype="multipart/form-data" >
		<table border="0" cellspacing="0" cellpadding="0" class="common">
		<tr>
			<td class="introcell_title">店舗画像(大)</td>
		</tr>
		<tr>
			<td class="introcell_label">店舗の写真を上記の紹介文と一緒に表示できます。<br />
			推奨画像サイズ（横350×縦262ピクセル）<br />
			※画像のアップロードを行う前に上の設定ボタンを押してテキストを保存して下さい。</td>
		</tr>
		<tr>
			<td class="cell_value">
			{if $form_data.intro1 != ""}
			<img src="{$form_data.intro1}?{$smarty.now}">
			{else}
			<p class="noimage">No Image</p>
			{/if}
			</td>
		</tr>
		<tr>
			<td class="cell_value"><input type="file" name="intro1" value="" />
			<input type="submit" name="upload" value="登録" />
			<input type="submit" name="delete" value="削除" /></td>
		</tr>
		</table>
		<input type="hidden" name="filed_name" value="intro1">
		<input type="hidden" name="file_name" value="intro1">
			<input type="hidden" name="sid" value="{$sid}" />
		</form>
		
		<table border="0" cellspacing="0" cellpadding="0" class="common">
		<tr>
			<td class="introcell_title">店舗画像(小)</td>
		</tr>
		<tr>
			<td class="introcell_label">店舗の写真をコメント付きで店舗詳細画面に2つまで表示できます。<br />
			推奨画像サイズ（横230×縦172ピクセル)</td>
		</tr>
		<tr>
			<td class="cell_value">
			<form action="/client/intro/image_upload" method="post" enctype="multipart/form-data" >
			<table border="0" cellspacing="0" cellpadding="0" class="pic2">
				<tr>
				<td><strong>画像1</strong></td>
				</tr>
				<tr>
				<td>説明文<br />
					<input name="sd_small_img01" type="text" size="44" value="{$form_data.sd_small_img01}" /></td>
				</tr>
				<tr>
				<td>
				{if $form_data.intro2 != ""}
				<img src="{$form_data.intro2}?{$smarty.now}">
				{else}
				<p class="noimage2">No Image</p>
				{/if}
				</td>
				</tr>
				<tr>
				<td><input type="file" name="intro2" value="" /></td>
				</tr>
				<tr>
				<td><input type="submit" name="upload" value="登録" />
					<input type="submit" name="delete" value="削除" /></td>
				</tr>
			</table>
			<input type="hidden" name="filed_name" value="intro2">
			<input type="hidden" name="file_name" value="intro2">
			<input type="hidden" name="sid" value="{$sid}" />
			</form>
			<form action="/client/intro/image_upload" method="post" enctype="multipart/form-data" >
			<table border="0" cellspacing="0" cellpadding="0" class="pic2">
				<tr>
				<td><strong>画像2</strong></td>
				</tr>
				<tr>
				<td>説明文<br />
					<input name="sd_small_img02" type="text" size="44" value="{$form_data.sd_small_img02}" /></td>
				</tr>
				<tr>
				<td>
				{if $form_data.intro3 != ""}
				<img src="{$form_data.intro3}?{$smarty.now}">
				{else}
				<p class="noimage2">No Image</p>
				{/if}
				</td>
				</tr>
				<tr>
				<td><input type="file" name="intro3" value="" /></td>
				</tr>
				<tr>
				<td><input type="submit" name="upload" value="登録" />
					<input type="submit" name="delete" value="削除" /></td>
				</tr>
			</table>
			<input type="hidden" name="filed_name" value="intro3">
			<input type="hidden" name="file_name" value="intro3">
			<input type="hidden" name="sid" value="{$sid}" />
			</form>
			</td>
		</tr>
		</table>
	</div>
	</div>
	<br style="clear:both" />
	</div>
{include file="ci:client/footer.tpl"}
