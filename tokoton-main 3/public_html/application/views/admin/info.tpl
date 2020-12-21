		{include file="$document_root/application/views/admin/header.tpl"}
		
		<div id="content">
			<h2>お知らせ管理</h2>
			<div class="content_sub"><p class="description">全店舗へのお知らせを掲載できます。<br />お知らせは店舗の管理画面トップに表示されます。</p></div>
				{if $msg != ""}
			<div class="messagebox">
				<ul>
					{$msg}
				</ul>
			</div>
			{/if}
			
			{if $form_error != ""}
			<div class="messagebox_error">
			<ul>
				{foreach from=$form_error item = "item" key = "key" name = "form_error_loop"}
					{$item}
				{/foreach}
			</ul>
			</div>
			{/if}


			<h3>お知らせ一覧</h3>
			<div class="content_sub">
				<p>お知らせ内容に誤りがあった場合は編集ボタンから編集が出来ます。情報を修正し、登録ボタンを押してください。<br />削除ボタンを押すと、お知らせが削除されます。</p>
				<table class="common">
				<tr>
					<td width="9%" class="cell_title">掲載日</td>
					<td width="42%" class="cell_title">お知らせ</td>
					<td width="33%" class="cell_title">内容</td>
					<td width="16%" class="cell_title">コマンド</td>
				</tr>
				{foreach from=$query_data item = "item" key = "key" name = "info_loop"}
				<tr>
					<td class="cell_value">{$item.info_up_date|date_format:"%Y/%m/%d"}</td>
					<td class="cell_value">{$item.info_index}</td>
					<td class="cell_value">{$item.info_contents|nl2br}</td>
					<td class="cell_value">
						<input type="submit" name="Submit24" value="編集" onclick="location.href='/admin/info/edit/{$item.info_no}'" />
						<input type="submit" name="Submit242" value="削除" onclick="if(formConfirm('delete')) location.href='/admin/info/delete_db/{$item.info_no}'" />
					</td>
				</tr>
				{/foreach}
				</table>
			</div>
		<br />
			<h3>お知らせ登録</h3>
			<div class="content_sub" id="#regist_form">
				<p>お知らせする情報を入力し、登録ボタンを押してください。<br />
				お知らせする情報が長い時は、内容を内容フォームに入力してください。内容に記入のあるお知らせはポップアップで表示されます。<br />
				※印は必須項目です。</p>
				<form method="post" action="/admin/info/to_confirm">
				<table class="common">
				<tr>
				<td class="cell_title">掲載日　※</td>
				<td>
					{html_select_date_j display_ymd=true prefix="info_up_date" time=$form_data.info_up_date start_year="-1"}
				</td>
				</tr>
				<tr>
					<td class="cell_title">見出し　※</td>
					<td class="cell_value">
						<input name="info_index" type="text" size="80" value="{$form_data.info_index}" />
					</td>
				</tr>
				<tr>
					<td class="cell_title">内容</td>
					<td class="cell_value"><textarea name="info_contents" cols="50" rows="2">{$form_data.info_contents}</textarea></td>
				</tr>
				<tr>
					<td colspan="2" class="cell_submit"><input type="submit" name="Submit" value="登録" /></td>
				</tr>
				</table>
				</form>
			</div>
		</div>
		
		{include file="$document_root/application/views/admin/footer.tpl"}
