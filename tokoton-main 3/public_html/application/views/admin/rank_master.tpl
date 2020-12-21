{include file="$document_root/application/views/admin/header.tpl"}
<div id="content">
	<h2>データ管理</h2>
	<ul id="submenu_vertical">
		<li><a href="/admin/month_price/">&gt;&gt; 月次課金情報管理</a></li>
		<li><a href="/admin/client/">&gt;&gt; クライアント登録情報出力</a></li>
		<li class="act"><a href="/admin/client/">&gt;&gt; 料金マスタ設定閲覧</a></li>
	</ul>
	<div class="separator_right">
		<h3>料金マスタ設定閲覧</h3>
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
		
		<div class="content_sub">
	      <p>現在設定されている料金マスタを表示します。</p>  
		<table cellpadding="0" cellspacing="0" border="0" class="common">
		<tr>
		  <th class="main" rowspan="2">問い合わせ数の範囲</th>
		  <th class="main" colspan="{$master_data.rank_count}">ランク</th>
		  </tr>
		<tr>
			
			{foreach from=$master_data.rank_index item="rank_index"}
			<th class="sub">{$rank_index}</th>
			{/foreach}
			
		</tr>
		{foreach from=$master_data.range_index key="range_key" item="range_index"}
		<tr>
			<td class="sub">{$range_index.index}</td>
			
			
			{foreach from=$range_index.charge key="charge_key" item="charge_val"}
			<td class="value">{$charge_val}</td>
			{/foreach}
			
			
		</tr>
		{/foreach}
		</table>
		</div>
	</div>
</div>
{include file="$document_root/application/views/admin/footer.tpl"}
