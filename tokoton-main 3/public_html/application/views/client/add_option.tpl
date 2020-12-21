{include file="$document_root/application/views/client/header.tpl"}

  <div id="content">

{include file="$document_root/application/views/client/shop_menu.tpl"}

    <div id="content_right">
      <h2>オプションメニューの設定</h2>
      <p class="description">プランに追加できるオプションの設定をします。追加オプションは最大8個登録することが出来ます。<br />
      （登録が無ければ店舗詳細画面の追加オプションは表示されません。） </p>
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
            <td class="introcell_title">追加オプション一覧</td>
          </tr>
          <tr>
            <td class="introcell_label">編集したいオプションの編集ボタンを押すと登録内容が下に表示され、編集することができます。<br />
              編集後は登録ボタンを押して
              ください。削除ボタンを押すと登録内容が削除されます。</td>
          </tr>
        </table>
        <table border="0" cellspacing="0" cellpadding="0" class="common">
          <tr>
            <td width="25%" class="cell_list_label">オプション名</td>
            <td width="15%" class="cell_list_label">価格（税込）</td>
            <td width="43%" class="cell_list_label">内容</td>
            <td width="17%" class="cell_list_label">コマンド</td>
          </tr>
	{foreach from=$query_data item = "item" key = "key" name = "service_loop"}
          <tr>
            <td class="cell_value">{$item.opt_name}</td>
            <td class="cell_value">{$item.opt_price}</td>
            <td class="cell_value">{$item.opt_contents|nl2br}</td>
            <td class="cell_value"><input type="submit" name="Submit2242" value="編集" onclick="location.href='/client/add_option/edit/{$item.opt_no}'" />
              <input type="submit" name="Submit2243" value="削除" onclick="if(formConfirm('delete')) location.href='/client/add_option/delete_db/{$item.opt_no}'" /></td>
          </tr>
	{/foreach}
        </table>
        <table border="0" cellspacing="0" cellpadding="0" class="common" id="#regist_form">
          <tr>
            <td class="introcell_title">オプションを登録する</td>
          </tr>
          <tr>
            <td class="introcell_label">入力フォームに内容を入力し、登録ボタンを押してください。<br />
              登録されたオプションは上記の追加オプション一覧に表示されます。 <br />
              ※価格・内容は入力しなくても構いません。</td>
          </tr>
        </table>
	<form action="/client/add_option/to_confirm" method="post">
        <table border="0" cellspacing="0" cellpadding="0" class="common">
          <tr>
            <td width="17%" class="cell_value">オプション名　※</td>
            <td width="83%" class="cell_value"><input name="opt_name" value="{$form_data.opt_name}" type="text" size="50" /></td>
          </tr>
          <tr>
            <td class="cell_value">価格</td>
            <td class="cell_value"><input name="opt_price" value="{$form_data.opt_price}" type="text" size="15" />
              (例： 3,000円～)</td>
          </tr>
          <tr>
            <td class="cell_value">内容</td>
            <td class="cell_value"><textarea name="opt_contents" cols="50" rows="2">{$form_data.opt_contents}</textarea></td>
          </tr>
          <tr>
            <td colspan="2" class="cell_submit"><input type="submit" name="Submit22422" value="登録" class="submit" />
	    <input type="hidden" name="sid" value="{$sid}" />
	    <input type="hidden" name="max_num" value="8" />
	    {if $form_data.opt_no != ""}
	    <input type="hidden" name="opt_no" value="{$form_data.opt_no}" />
	    {/if}
            </td>
          </tr>
        </table>
	</form>
      </div>
    </div>
    <br style="clear:both" />
  </div>
  
{include file="$document_root/application/views/client/footer.tpl"}
