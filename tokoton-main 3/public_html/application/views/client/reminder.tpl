<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>アカウント・パスワードを忘れた方</title>
<link href="/css/client/login.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div align="center">
	<div id="container">
		<div id="header"><p>&nbsp;</p></div>
		
		<div id="content">
			{if $form_error != ""}
			<div class="messagebox"><span class="td1"><strong>入力に誤りがあります。</strong><br />{$form_error}</span></div>
			{/if}
			
			<img src="/img/client/sitelogo.gif" alt="" id="logo" />
			<form action="/client/reminder/" method="post" name="reminder_form">
			<table width="458" cellpadding="0" cellspacing="0">
			  <tr>
				<td colspan="2"><img src="/img/client_reminder_title.gif" width="458" height="48" /></td>
			  </tr>
			  <tr>
				<td colspan="2" class="td5">パスワード・アカウント名を確認したい対象の店舗番号を入力し、その店舗で契約の際に設定したメールアドレスを入力して下さい。確認事項をメールにてお知らせします。</td>
			  </tr>
			  <tr>
				<td class="td6">確認項目</td>
				<td class="td8"><input name="kind" type="radio" value="01" id="radio" {if $form.kind == "01"}checked{/if}/>アカウント
								<input name="kind" type="radio" value="02" id="radio" {if $form.kind == "02"}checked{/if}/>パスワード
								<input name="kind" type="radio" value="03" id="radio" {if $form.kind == "03"}checked{/if}/>両方</td>
			  </tr>
			  <tr>
			    <td class="td6">店舗番号</td>
			    <td class="td7"><input name="sid" type="text" class="field_small" value="{$form.sid}" />
			    (半角数字)</td>
		      </tr>
			  <tr>
				<td class="td6">メールアドレス</td>
				<td class="td7"><input type="text" name="sd_remind_mail" class="field" value="{$form.sd_remind_mail}"/>（半角）</td>
			  </tr>
			  <tr>
			    <td colspan="2" class="td9">※店舗番号は、表画面店舗詳細画面のURL<br />
		        【http://www.tokoton-navi.com/shop_detail/**/】の**の部分に書いてあります。</td>
		      </tr>
			  <tr>
				<td colspan="2" class="td4"><p id="reminder_btn"><a href="" onclick="reminder_form.submit();return false;">送信</a></p></td>
			  </tr>
			</table>
			<input type="hidden" name="reminder" value="reminder">
			</form>
			<p id="back">←<a href="/client/login/">ログイン画面に戻る</a></p>
		</div>
		
		<div id="footer"><p>Copyright(C)2008 Shakenavi All Rights Reserved.</p></div>
			
	</div>
</div>
</body>
</html>
