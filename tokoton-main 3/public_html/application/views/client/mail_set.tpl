{include file="ci:client/header.tpl"}

  <div id="content">

{include file="ci:client/admin_menu.tpl"}

    <div id="content_right">
      <h2>メールアドレスの設定</h2>
      <p class="description">見積りメールの受信先や運営側からのお知らせの受信先を設定できます。</p>
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
	<form action="/client/mail_set/to_confirm" method="post">
        <table border="0" cellspacing="0" cellpadding="0" class="common">
          <tr>
            <td class="introcell_title"><strong>「見積リクエスト報告」受信先と「見積返信メール」差出人</strong></td>
          </tr>
          <tr>
            <td class="introcell_label">ユーザーが見積りをしたら、このアドレス宛に「見積リクエスト報告」が届きます。<br />
			また、ユーザーへの「見積返信メール」の差出人もこのアドレスになります。<br />
			※メールアドレスをカンマ（ , ）で区切ることで、複数のアドレスを登録ができます。<br />
            <strong>（複数アドレス登録時は最初のアドレスが「見積返信メール」の差出人になります。）</strong></td>
          </tr>
          <tr>
            <td class="cell_value"><input size="60" name="sd_estimate_mail" value="{$form_data.sd_estimate_mail}" /></td>
          </tr>
        </table>
        <table border="0" cellspacing="0" cellpadding="0" class="common">
          <tr>
            <td class="introcell_title"><p><strong>車検ナビ事務局からの「お知らせメール」受信先</strong></p></td>
          </tr>
          <tr>
            <td class="introcell_label">車検ナビ事務局から重要なお知らせが届きます。<br />
			※パスワードの再発行の際はこちらのメールアドレスにメールが届きます。</td>
          </tr>
          <tr>
            <td class="cell_value"><input size="60" name="sd_info_mail" value="{$form_data.sd_info_mail}" /></td>
          </tr>
        </table>
        <div class="centering"><input type="submit" name="Submit22422" value="登録" class="submit" />
	<input type="hidden" name="sid" value="{$sid}" />
	</form>
        </div>
      </div>
    </div>
    <br style="clear:both" />
  </div>

{include file="ci:client/footer.tpl"}
