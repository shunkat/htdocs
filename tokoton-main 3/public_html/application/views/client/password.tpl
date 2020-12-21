{include file="$document_root/application/views/client/header.tpl"}

  <div id="content">

{include file="$document_root/application/views/client/admin_menu.tpl"}

    <div id="content_right">
      <h2>パスワードの設定</h2>
      <p class="description">設定済みのパスワードを変更することができます。</p>
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
	<form action="/client/password/to_confirm" method="post">
        <table border="0" cellspacing="0" cellpadding="0" class="common">
          <tr>
            <td class="introcell_title"><strong>パスワードの再設定</strong></td>
          </tr>
          <tr>
            <td class="introcell_label"><p>現在のパスワードを別のパスワード(半角英数6～12文字)に変更することができます。<br />
                <strong>※全角半角や大文字小文字に注意して変更して下さい。</strong></p></td>
          </tr>
        </table>
        <table border="0" cellpadding="0" cellspacing="0" class="common">
	  <tr>
	    <td class="cell_small_value">変更前のパスワードを入力して下さい</td>
	    <td class="cell_small_value"><input name="now_pwd" type="password" value="{$form_data.now_pwd}" maxlength="12" /></td>
	  </tr>
	  <tr>
	    <td class="cell_small_value">変更後のパスワードを入力して下さい</td>
	    <td class="cell_small_value"><input name="next_pwd" type="password" value="{$form_data.next_pwd}" maxlength="12" /></td>
	  </tr>
	  <tr>
	    <td class="cell_small_value">変更後のパスワードをもう一度入力して下さい</td>
	    <td class="cell_small_value"><input name="conf_pwd" type="password" value="{$form_data.conf_pwd}" maxlength="12" /></td>
	  </tr>
	</table>

        <div class="centering"><input type="submit" name="Submit22422" value="変更" class="submit" />
        </div>
	<input type="hidden" name="sid" value="{$sid}" />
	</form>
      </div>
    </div>
    <br style="clear:both" />
  </div>

{include file="$document_root/application/views/client/footer.tpl"}
