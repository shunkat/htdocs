{include file="ci:client/header.tpl"}
  <div id="content">

{include file="ci:client/shop_menu.tpl"}

    <div id="content_right">
      <h2>WEBクーポンの設定</h2>
      <p class="description">WEBクーポンの設定をします。
        フォームに情報を入力し、登録ボタンを押してください。 <br />
        編集する場合はフォーム内を直接書き変え、登録ボタンを押してください。 <br />
        削除ボタンを押すと登録内容が削除されます。</p>
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
	
	<form action="/client/coupon/to_confirm/" method="post">
        <table border="0" cellspacing="0" cellpadding="0" class="common">
          <tr>
            <td class="introcell_title">クーポン</td>
          </tr>
          <tr>
            <td class="cell_value"><input name="cou_open_state" type="radio" value="t"{if $form_data.cou_open_state == "t"} checked="checked"{/if} />
              表示
              <input name="cou_open_state" type="radio" value="f"{if $form_data.cou_open_state == "f" or  $form_data.cou_open_state == ""} checked="checked"{/if} />
              非表示</td>
          </tr>
        </table>
        <table border="0" cellspacing="0" cellpadding="0" class="common">
          <tr>
            <td class="introcell_title"><p>クーポンの内容</p></td>
          </tr>
          <tr>
            <td class="cell_value"><textarea name="cou_contents" cols="60" rows="3" >{$form_data.cou_contents}</textarea>
            </td>
          </tr>
        </table>
        <table border="0" cellspacing="0" cellpadding="0" class="common">
          <tr>
            <td class="introcell_title">クーポンの制限事項</td>
          </tr>
          <tr>
            <td class="cell_value"><textarea name="cou_limit_matter" cols="60" rows="3" >{$form_data.cou_limit_matter}</textarea>
            </td>
          </tr>
        </table>
        <table border="0" cellspacing="0" cellpadding="0" class="common">
          <tr>
            <td class="introcell_title">クーポンの有効期限</td>
          </tr>
          <tr>
            <td class="cell_value">
		{html_select_date_j display_ymd=true prefix="cou_limit_date" time=$form_data.cou_limit_date start_year="-1" end_year="+1"}
	      まで</td>
          </tr>
        </table>
        <div class="centering">
          <input type="submit" name="Submit22422" value="登録" class="submit" />
          
        </div>
	{if $form_data.cou_no != ""}
	<input type="hidden" name="cou_no" value="{$form_data.cou_no}" />
	{/if}
	<input type="hidden" name="sid" value="{$sid}" />
	</form>
      </div>
    </div>
    <br style="clear:both" />
  </div>

{include file="ci:client/footer.tpl"}
