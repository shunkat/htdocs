<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{$page_title} | 運営用管理画面</title>
<link href="/css/admin/common.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/js/function.js"></script>
</head>
<body>
	<div id="container">
		<div id="header">
			<table>
				<tr>
					<td><strong id="header_title">とことん車検ナビ / 運営用管理画面</strong></td>
					<td width="150" align="right"><strong id="header_time">{$today}</strong></td>
					<td width="130"><a href="/admin/login/logout" id="btn_logout">ログアウト >></a></td>
				</tr>
			</table>
		<ul id="mainmenu">
				<li{if $now_page == "account"} class="act"{/if}><a href="/admin/account/">アカウント管理</a></li>
				<li{if $now_page == "topics"} class="act"{/if}><a href="/admin/topics/">トピックス管理</a></li>
				<li{if $now_page == "info"} class="act"{/if}><a href="/admin/info/">お知らせ管理</a></li>
				<li{if $now_page == "month_price"} class="act"{/if}><a href="/admin/month_price/">データ管理</a></li>
		</ul>
		</div>
