{include file="$document_root/application/views/client/header.tpl"}

  <div id="content">
  
{include file="$document_root/application/views/client/shop_menu.tpl"}
  
    <div id="content_right">
      <h2>サービス・特典の設定</h2>
      <p class="description">サービス・特典の設定をします。サービスは最大5個登録することが出来ます。<br />
      （登録が無ければ店舗詳細画面のサービスは表示されません。）</p>
      <div class="content_sub">
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
        <table border="0" cellspacing="0" cellpadding="0" class="common">
          <tr>
            <td class="introcell_title">サービス一覧</td>
          </tr>
          <tr>
            <td class="introcell_label">編集したいサービスの編集ボタンを押すと登録内容が下に表示され、編集することができます。<br />
              編集後は登録ボタンを押して
ください。削除ボタンを押すと登録内容が削除されます。</td>
          </tr>
        </table>
        <table border="0" cellspacing="0" cellpadding="0" class="common">
          <tr>
            <td width="33%" class="cell_list_label">サービス名</td>
            <td width="50%" class="cell_list_label">内容</td>
            <td width="17%" class="cell_list_label">コマンド</td>
          </tr>
	{foreach from=$query_data item = "item" key = "key" name = "service_loop"}
          <tr>
            <td class="cell_value">{$item.srv_name}</td>
            <td class="cell_value">{$item.srv_contents|nl2br}</td>
            <td class="cell_value"><input type="submit" name="Submit2242" value="編集" onclick="location.href='/client/service/edit/{$item.srv_no}'" />
            <input type="submit" name="Submit2243" value="削除" onclick="if(formConfirm('delete')) location.href='/client/service/delete_db/{$item.srv_no}'" /></td>
          </tr>
	{/foreach}
        </table>
        <table border="0" cellspacing="0" cellpadding="0" class="common">
          <tr>
            <td class="introcell_title">サービスを登録する</td>
          </tr>
          <tr>
            <td class="introcell_label">入力フォームに内容を入力し、登録ボタンを押してください。登録されたサービスは上記のサービス一覧に表示されます。</td>
          </tr>
        </table>
	<form action="/client/service/to_confirm" method="post">
        <table border="0" cellspacing="0" cellpadding="0" class="common" id="#regist_form">
          <tr>
            <td width="17%" class="cell_value">サービス名　※</td>
            <td width="83%" class="cell_value"><input name="srv_name" type="text" value="{$form_data.srv_name}" size="50" /></td>
          </tr>
          <tr>
            <td class="cell_value">内容　※</td>
            <td class="cell_value"><textarea name="srv_contents" cols="50" rows="2">{$form_data.srv_contents}</textarea></td>
          </tr>
          <tr>
            <td colspan="2" class="cell_submit"><span class="cell_value">
              <input type="submit" name="Submit22422" value="登録" class="submit" />
	      <input type="hidden" name="sid" value="{$sid}" />
	      <input type="hidden" name="max_num" value="5" />
	      {if $form_data.srv_no != ""}
	      <input type="hidden" name="srv_no" value="{$form_data.srv_no}">
	      {/if}
            </span></td>
          </tr>
        </table>
	</form>
      </div>
    </div>
    <br style="clear:both" />
  </div>
{include file="$document_root/application/views/client/footer.tpl"}
