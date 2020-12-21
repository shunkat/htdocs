{include file="ci:client/header.tpl"}

  <div id="content">
  
    <h2>Welcome to とことん車検ナビ店舗管理画面</h2>
    <p class="description">ここではとことん車検ナビに載せる店舗情報の管理をすることが出来ます。</p>
    

	{if $form_error != ""}
        <div class="messagebox_error" style="margin:10px;">
          <ul>
		{foreach from=$form_error item = "item" key = "key" name = "form_error_loop"}
			{$item}
		{/foreach}
          </ul>
        </div>
	{/if}
	
	{if $msg != ""}
	<div class="messagebox" style="margin:10px;">
	<ul>			
		<li>{$msg}</li>
	</ul>
	</div>
	{/if}
	
	
	<div class="content_sub">
      {if $user_data.exam_flag == "t" or $user_data.intro_flag == "t" or $user_data.plan_flag == "t" or $user_data.shop_info_flag == "t" or $user_data.plan_item_flag == "t" or $user_data.mailformat_flag == "t" or $user_data.mail_flag == "t" or $user_data.company_flag == "t"}
      <h3>注意</h3>
      <ul id="caution">
        {if $user_data.shop_info_flag == "t"}<li><strong>注意：</strong>基本情報が入力されていません。 <a href="/client/shopinfo/">[入力はこちら]</a></li>{/if}
        {if $user_data.intro_flag == "t"}<li><strong>注意：</strong>紹介文と画像が入力されていません。<a href="/client/intro/">[入力はこちら]</a></li>{/if}
        {if $user_data.plan_flag == "t"}<li><strong>注意：</strong>料金プランが入力されていません！ <a href="/client/plan/">[入力はこちら]</a></li>{/if}
        {if $user_data.plan_item_flag == "t"}<li><strong>注意：</strong>プランの料金項目が入力されていません。<a href="/client/plan_item/">[入力はこちら]</a></li>{/if}
        {if $user_data.mailformat_flag == "t"}<li><strong>注意：</strong>見積りメール設定が入力されていません。<a href="/client/mail_estimate/">[入力はこちら]</a></li>{/if}
        {if $user_data.mail_flag == "t"}<li><strong>注意：</strong>管理者のメールアドレス関連設定がされていません。<a href="/client/mail_set/">[入力はこちら]</a></li>{/if}
        {if $user_data.company_flag == "t"}<li><strong>注意：</strong>会社情報が入力されていません。<a href="/client/company/">[入力はこちら]</a></li>{/if}
        {if $user_data.exam_flag == "t"}<li><strong>注意：</strong>審査が完了していません！サイトを公開するには審査を行って下さい。 <a href="/client/statchange/">[審査はこちら]</a></li>{/if}
	
      </ul>
      {/if}
	  {if $info_data != ""}
      <h3>お知らせ</h3>
      <ul id="info">
	{foreach from=$info_data item = "item" key = "key" name = "info_loop"}
        <li><strong>{$item.info_up_date|date_format:"%Y/%m/%d"}</strong> {$item.info_index} <a href="/client/information/{$item.info_no}/" target="_blank">[詳細はこちら]</a></li>
	{/foreach}
      </ul>
	  {/if}
	  
	  {if $copy_flag eq "t"}
	  <h3>店舗データコピー</h3>
	  <div id="copy">
	  <form action="/client/top/locate_copy/" method="post" name="copy_form" onsubmit="if (!confirm('コピーを実行します。よろしいですか？')) return false;">
	  	<table cellpadding="0" cellspacing="0" border="0" width="350">
		<tr>
			<td width="120"><strong>コピー元店舗番号：</strong></td>
			<td><input type="text" name="copy_sid" value="{$form_data.copy_sid}" size="5" /></td>
			<td><input type="submit" value="コピー実行" /></td>
		</tr>
		</table>
		<input type="hidden" name="this_sid" value="{$sid}" />
	  </form>
	  </div>
	  {/if}
	  
    </div>
  </div>

{include file="ci:client/footer.tpl"}
