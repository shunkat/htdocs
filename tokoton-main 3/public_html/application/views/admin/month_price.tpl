{include file="ci:admin/header.tpl"}
<div id="content">
	<h2>データ管理</h2>
	<ul id="submenu_vertical">
		<li class="act"><a href="#">&gt;&gt; 月次課金情報管理</a></li>
		<li><a href="/admin/client/">&gt;&gt; クライアント登録情報出力</a></li>
		<li><a href="/admin/rank_master/">&gt;&gt; 料金マスタ設定閲覧</a></li>
	</ul>
	<div class="separator_right">
		<h3>月次課金情報管理</h3>
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
<!--		<div class="messagebox">[POSTされた年月]月のデータを削除しました。</div> -->
		
		<div class="content_sub">
		<p> 月ごとに課金対象の車検ナビ利用料金をCSVファイルでダウンロードできます。<br />
			※サーバの容量を考慮し、古くなったデータは必要ならばエクスポートして3ヶ月以内に削除するようにして下さい。 </p>
		<form action="/admin/month_price/regist" method="post">
		<table class="common">
			<tr>
			<td colspan="2" class="cell_title">CSVファイルのダウンロード</td>
			</tr>
			<tr>
			<td colspan="2" class="cell_value">見たい月を選択し、CSVダウンロードを押すと課金対象の車検ナビ利用料金をダウンロードすることができます。</td>
			</tr>
			<tr>
			<td class="cell_label">現在保存中の月次データ</td>
			<td class="cell_value"><select name="targetdate" size="1">
				{foreach from=$form_data.targetdate item=targetdate}
					<option value="{$targetdate}">{$targetdate}</option>
				{/foreach}
				</select>
				<input type="submit" name="csvdownload" value="CSVダウンロード" /><br /><br /><br /><br />
				<input type="submit" name="csvdelete" value="対象月のデータを削除する" onclick="return formConfirm('delete')" /><br />(クリックで確認画面が表示されます)
			</td>
			</tr>
		</table>
		</form>
		</div>
	</div>
</div>
{include file="ci:admin/footer.tpl"}
