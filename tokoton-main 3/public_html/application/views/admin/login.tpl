<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>ログイン | 運営用管理画面</title>
<link href="/css/admin/login.css" rel="stylesheet" type="text/css" />
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
			
			{if $logout_msg == "t"}
			<div class="messagebox"><span class="td1"><strong>ログアウトが完了しました。</strong></span></div>
			{/if}
			
			<img src="/img/admin/sitelogo.gif" alt="" id="logo" />
			<form action="/admin/login/" method="post" name="login_form">
			<table width="360" cellpadding="0" cellspacing="0">
			  <tr>
				<td colspan="2"><img src="/img/admin_login_title.gif" width="358" height="48" /></td>
			  </tr>
			  <tr>
				<td colspan="2" class="td1">アカウントとパスワードを入力し、ログインボタンを押して下さい。</td>
			  </tr>
			  <tr>	
				<td class="td2"><strong>アカウント</strong>（半角英数）
				  <label></label></td>
				<td class="td3"><input type="text" name="id"  class="field" value="{$form.id}"/></td>
			  </tr>
			  <tr>
				<td class="td2"><strong>パスワード</strong>（半角英数6～12文字）      </td>
				<td class="td3"><input type="password" name="pwd" class="field" /></td>
			  </tr>
			  <tr>
				<td colspan="2" class="td4">
					<p id="login_btn"><a href="#" onclick="javascript:login_form.submit();return false;">ログイン</a></p>
				</td>
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
