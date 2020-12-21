<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>店舗管理画面ログイン</title>
<link href="/css/client/login.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div align="center">
	<div id="container">
		<div id="header">&nbsp;</div>
		
		<div id="content">
			{if is_array($form_error) && count($form_error) > 0}
			<div class="messagebox"><span class="td1"><strong>入力に誤りがあります。</strong><br />
			{foreach from=$form_error item=curr_id}{$curr_id}{/foreach}
			</span></div>
			{/if}
			
			<img src="/img/client/sitelogo.gif" alt="" id="logo" />
			<form name="firstlogin" action="/client/login/re_password" method="post">
			<table width="360" cellpadding="0" cellspacing="0">
			  <tr>
				<td colspan="2"><img src="/img/client_login_title.gif" width="358" height="48" /></td>
			  </tr>
			  <tr>
				<td colspan="2" class="td1">新しいパスワードに変更してください。　※初回ログイン時のみ</td>
			  </tr>
			  <tr>
				<td class="td2"><strong>新パスワード</strong>（半角英数6～12文字）      </td>
				<td class="td3"><input type="password" name="new_pwd" class="field" value="{$form.new_pwd}"/></td>
			  </tr>
			  <tr>
				<td class="td2"><strong>新パスワード（確認）</strong>      </td>
				<td class="td3"><input type="password" name="new_pwd_r" class="field" value="{$form.new_pwd_r}"/></td>
			  </tr>
			  <tr>
				<td colspan="2" class="td4"><p id="login_btn"><a href="#" onclick="document.firstlogin.submit()">送信</a></p></td>
			  </tr>
			</table>
			<input type="hidden" name="login" value="login">
			</form>
		</div>
		
		<div id="footer"><p>Copyright(C)2008 Shakenavi All Rights Reserved.</p></div>
			
	</div>
</div>
</body>
</html>
