{include file="$document_root/application/views/client/header.tpl"}

  <div id="content">

{include file="$document_root/application/views/client/shop_menu.tpl"}

	<div id="content_right">
    <h2>プラン</h2>
    <p class="description">プラン料金の設定をします。</p>
    <div class="content_sub">
      {if $msg != ""}
		<div class="messagebox">
          <ul>
            {$msg}
          </ul>
        </div>
	{/if}
      <table border="0" cellspacing="0" cellpadding="0" class="common">
        <tr>
          <td class="introcell_title"><strong>料金項目の名称変更</strong></td>
        </tr>
        <tr>
          <td class="introcell_label">プラン料金項目名（継続検査料 など）を入力し、変更ボタンを押してください。</td>
        </tr>
      </table>
      <form action="/client/plan_item/to_confirm" method="post">
      <table class="common" id="#regist">
		<tr>
			<td class="cell_value">料金項目1</td>
			<td class="cell_value"><input size="50" name="di_itm01_nm" value="{$form_data.di_itm01_nm}" /></td>
		</tr>
		<tr>
			<td class="cell_value">料金項目2</td>
			<td class="cell_value"><input size="50" name="di_itm02_nm" value="{$form_data.di_itm02_nm}" /></td>
		</tr>
		<tr>
		  <td class="cell_value">料金項目3</td>
		  <td class="cell_value"><input size="50" name="di_itm03_nm" value="{$form_data.di_itm03_nm}" /></td>
		  </tr>
		<tr>
		  <td class="cell_value">料金項目4</td>
		  <td class="cell_value"><input size="50" name="di_itm04_nm" value="{$form_data.di_itm04_nm}" /></td>
		  </tr>
		<tr>
		  <td class="cell_value">料金項目5</td>
		  <td class="cell_value"><input size="50" name="di_itm05_nm" value="{$form_data.di_itm05_nm}" /></td>
		  </tr>
		<tr>
		  <td class="cell_value">料金項目6</td>
		  <td class="cell_value"><input size="50" name="di_itm06_nm" value="{$form_data.di_itm06_nm}" /></td>
		  </tr>
		<tr>
		  <td class="cell_value">料金項目7</td>
		  <td class="cell_value"><input size="50" name="di_itm07_nm" value="{$form_data.di_itm07_nm}" /></td>
		  </tr>
		<tr>
		  <td class="cell_value">料金項目8</td>
		  <td class="cell_value"><input size="50" name="di_itm08_nm" value="{$form_data.di_itm08_nm}" /></td>
		  </tr>
		<tr>
            <td class="cell_submit" colspan="2"><input type="submit" name="Submit3" value="変更"  class="submit"/></td>
        </tr>
		</table>
		<input type="hidden" name="sid" value="{$sid}" />
      </form>
    </div>
	</div>
	<br style="clear:both" />
  </div>
  
{include file="$document_root/application/views/client/footer.tpl"}
