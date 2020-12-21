		{include file="$document_root/application/views/admin/header.tpl"}
		
		<div id="content">
			<h2>トピックス管理</h2>
			<div class="content_sub"><p class="description">サイトにトピックスを掲載できます。</p></div>
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
			<h3>トピックス一覧</h3>
			<div class="content_sub">
			<p>トピックスの内容に誤りがあった場合は編集ボタンから編集が出来ます。情報を修正し、登録ボタンを押してください。<br />
			削除ボタンを押すと、トピックスが削除されます。</p>
				<table class="common">
					<tr>
						<td width="9%" class="cell_title">掲載日</td>
						<td width="48%" class="cell_title">トピックス</td>
						<td width="27%" class="cell_title">リンク先URL</td>
						<td width="16%" class="cell_title">コマンド</td>
					</tr>
					{foreach from=$query_data item = "item" key = "key" name = "topics_loop"}
					<tr>
						<td class="cell_value">{$item.top_up_date|date_format:"%Y/%m/%d"}</td>
						<td class="cell_value">{$item.top_contents}</td>
						<td class="cell_value">{if $item.top_link != ""}<a href="{$item.top_link}" target="_blank">{$item.top_link}</a>{else}&nbsp;{/if}</td>
						<td class="cell_value"><input type="button" name="Submit24" value="編集" onclick="location.href='/admin/topics/edit/{$item.top_no}'" />
						<input type="button" name="Submit242" value="削除" onclick="if(formConfirm('delete')) location.href='/admin/topics/delete_db/{$item.top_no}'" /></td>
					</tr>
					
					{/foreach}
				</table>
		</div>
		<br />
		<h3>トピックス登録</h3>
		<div class="content_sub" id="regist_form">
			<p>トピックスを入力し、登録ボタンを押してください。リンクを貼る場合はリンク先URLを入力してください。 <br />
			※印は必須項目です。</p>
			<form method="post" action="/admin/topics/to_confirm">
			<table class="common">
			<tr>
				<td class="cell_title">掲載日　※</td>
				<td>
					{html_select_date_j display_ymd=true prefix="top_up_date" time=$form_data.top_up_date start_year="-1"}
				</td>
			</tr>
			<tr>
				<td class="cell_title">トピック内容　※</td>
				<td class="cell_value"><textarea name="top_contents" cols="50" rows="2">{$form_data.top_contents}</textarea></td>
			</tr>
			<tr>
				<td class="cell_title">リンク先URL</td>
				<td class="cell_value"><input name="top_link" type="text" size="50" value="{$form_data.top_link}" /></td>
			</tr>
			<tr>
				<td colspan="2" class="cell_submit"><input type="submit" name="Submit" value="登録" /></td>
			</tr>
			</table>
			{if $form_data.top_no != ""}
				<input type="hidden" name="top_no" value="{$form_data.top_no}" />
				<input type="hidden" name="top_lastupdate" value="now()" />
			{/if}
			</form>
		</div>
		</div>
		
		{include file="$document_root/application/views/admin/footer.tpl"}
