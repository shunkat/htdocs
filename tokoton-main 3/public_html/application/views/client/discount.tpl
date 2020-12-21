{include file="ci:client/header.tpl"}

  <div id="content">

{include file="ci:client/shop_menu.tpl"}

    <div id="content_right">
      <h2>割引メニュー</h2>
      <p class="description">
		割引メニューの設定をします。 割引メニューは最大15個登録することが出来ます。<br />
		<strong style="color:red;">※注意 割引メニュー追加後に必ず「料金プラン」の再設定をして、各割引メニューを「有効」にしてください。</strong>
	</p>
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
            <td class="introcell_title">割引メニュー一覧</td>
          </tr>
          <tr>
            <td class="introcell_label">編集したいメニューの編集ボタンを登録内容が下に表示され、編集することができます。<br />
              編集後は登録ボタンを押して
              ください。削除ボタンを押すと登録内容が削除されます。</td>
          </tr>
        </table>
        <table border="0" cellspacing="0" cellpadding="0" class="common">
          <tr>
            <td width="75%" class="cell_list_label">メニュー項目</td>
            <td width="15%" class="cell_list_label" align="center">コマンド</td>
	    <td width="10%" class="cell_list_label" align="center">表示順位</td>
          </tr>
	{foreach from=$query_data item = "item" key = "key" name = "service_loop"}
          <tr>
            <td class="cell_value">{$item.db_menu_nm}</td>
            <td class="cell_value"><input type="submit" name="Submit2242" value="編集" onclick="location.href='/client/discount/edit/{$item.db_no}'" />
              <input type="submit" name="Submit2243" value="削除" onclick="if(formConfirm('delete')) location.href='/client/discount/delete_db/{$item.db_no}'" /></td>
            <td class="cell_value" align="center">{$item.button}</td>
          </tr>
	{/foreach}
        </table>
        <table border="0" cellspacing="0" cellpadding="0" class="common" id="#regist_form">
          <tr>
            <td class="introcell_title">割引メニューを登録する</td>
          </tr>
          <tr>
            <td class="introcell_label">メニュー項目名、段階、割引金額、詳細を入力して登録ボタンを押してください。<br />
              メニューの中でさらに項目が分かれる場合には、段階ありにチェックを入れ段階項目名・段階割引金額を入力してください。<br />
              <strong>金額の数字はカンマなしの半角で入力してください。</strong></td>
          </tr>
        </table>
	<form action="/client/discount/to_confirm" method="post">
        <table border="0" cellspacing="0" cellpadding="0" class="common">
          <tr>
            <td width="31%" class="cell_value">メニュー項目名　※</td>
            <td colspan="2" class="cell_value"><input name="db_menu_nm" value="{$form_data.db_menu_nm}" type="text" size="30" /></td>
          </tr>
          <tr>
            <td class="cell_value">段階　※</td>
            <td class="cell_value"><input name="level_flag" type="radio" value="f"{if $form_data.level_flag == "f" or $form_data == ""} checked="checked"{/if} />
              なし</td>
            <td class="cell_value"><input name="level_flag" type="radio" value="t"{if $form_data.level_flag == "t"} checked="checked"{/if} />
              あり</td>
          </tr>
          <tr>
            <td class="cell_value">割引金額　※<br />
              <br />
              段階項目名/段階割引金額<br />
              （最大4個まで）</td>
            <td width="19%" class="cell_value">-
              <input name="dd_dsc_price" value="{$form_data.dd_dsc_price}" type="text" size="5" />
              円</td>
            <td width="50%" class="cell_value">段階項目名<br />
              1
              <input name="dsc_nm1" value="{$form_data.dsc_nm1}" type="text" size="25" />
              / -
              <input name="dsc_price1" value="{$form_data.dsc_price1}" type="text" size="5" />
              円<br />
              2
              <input name="dsc_nm2" value="{$form_data.dsc_nm2}" type="text" size="25" />
              / -
              <input name="dsc_price2" value="{$form_data.dsc_price2}" type="text" size="5" />
              円<br />
              3
              <input name="dsc_nm3" value="{$form_data.dsc_nm3}" type="text" size="25" />
              / -
              <input name="dsc_price3" value="{$form_data.dsc_price3}" type="text" size="5" />
              円<br />
              4
              <input name="dsc_nm4" value="{$form_data.dsc_nm4}" type="text" size="25" />
              / -
              <input name="dsc_price4" value="{$form_data.dsc_price4}" type="text" size="5" />
              円</td>
          </tr>
          <tr>
            <td class="cell_value">詳細　※</td>
            <td colspan="2" class="cell_value"><textarea name="db_menu_detail" cols="50" rows="2">{$form_data.db_menu_detail}</textarea>
            </td>
          </tr>
          <tr>
            <td colspan="3" class="cell_submit"><input type="submit" name="Submit22422" value="登録" class="submit" /></td>
          </tr>
        </table>
	<input type="hidden" name="sid" value="{$sid}" />
	<input type="hidden" name="max_num" value="15" />
	{if $form_data.db_no != ""}
	<input type="hidden" name="db_no" value="{$form_data.db_no}" />
	{/if}
	{if $form_data.dd_no1 != ""}
	<input type="hidden" name="dd_no1" value="{$form_data.dd_no1}" />
	{/if}
	{if $form_data.dd_no2 != ""}
	<input type="hidden" name="dd_no2" value="{$form_data.dd_no2}" />
	{/if}
	{if $form_data.dd_no3 != ""}
	<input type="hidden" name="dd_no3" value="{$form_data.dd_no3}" />
	{/if}
	{if $form_data.dd_no4 != ""}
	<input type="hidden" name="dd_no4" value="{$form_data.dd_no4}" />
	{/if}
	</form>
      </div>
    </div>
    <br style="clear:both" />
  </div>

{include file="ci:client/footer.tpl"}
