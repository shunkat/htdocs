<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="{if $page_keywords != ""}{$page_keywords}{else}車検,車検費用,車検料金,軽自動車車検,車検見積,格安車検,激安車検,車検予約,車検切れ,とことん車検ナビ{/if}" />
<meta name="description" content="{if $page_description != ""}{$page_description}{else}車検費用を安くするなら、とことん車検ナビで車検料金がお得な店舗を検索。早期の車検予約割引やプレゼント情報、軽自動車車検の特典など、全国のお得な格安車検情報が満載です！今すぐネットで車検見積が出来ます{/if}" />
<title>{$page_title}</title>
<script type="text/javascript" src="/js/main.js"></script>
<script type="text/javascript" src="/js/function.js"></script>
<script type="text/javascript" src="/js/prototype.js"></script>
<script src="/js/rollover.js" type="text/JavaScript"></script>
<script src="/js/check_cartype.js" type="text/JavaScript"></script>
<script type="text/javascript" src="/js/smartRollover.js"></script>
{if $css != ""}
<link href="{$css}" rel="stylesheet" type="text/css" />
{/if}
<link href="/css/user/common_new.css" rel="stylesheet" type="text/css" />
{if $header_js != ""}{$header_js}{/if}
{if $map_js != ""}{$map_js}{/if}
{$overture_tag}
</head>
<body{$load}>
<div id="wrapper">
  <div id="container">
  <div id="header">
    <p id="title"><a href="http://{$smarty.server.HTTP_HOST}/" title="とことん車検ナビ"><img src="/img/user/title.gif" alt="とことん車検ナビ" /></a></p>
	<h1>{if $h1 != ""}{$h1}{else}車検を探す|どこより格安料金で便利なお見積りなら「とことん車検ナビ」{/if}</h1>
	<ul id="submenu">
		<li><a href="http://{$smarty.server.HTTP_HOST}/sitemap.html">サイトマップ</a></li>
		<li><a href="http://{$smarty.server.HTTP_HOST}/privacy.html">プライバシーポリシー</a></li>
		<li><a href="http://{$smarty.server.HTTP_HOST}/rules.html">利用規約</a></li>
		<li id="menu_end"><a href="http://{$smarty.server.HTTP_HOST}/useinfo.html">利用案内</a></li>
	</ul>
    <br class="clear" />
    <ul id="mainmenu">
      <li><a href="http://{$smarty.server.HTTP_HOST}/"><img src="/img/user/mainmenu/{$mainmenu_home}.gif" alt="ホーム" /></a></li>
      <li><a href="http://{$smarty.server.HTTP_HOST}/search_top/"><img src="/img/user/mainmenu/{$mainmenu_list}.gif" alt="車検をさがす" /></a></li>
      <li><a href="http://{$smarty.server.HTTP_HOST}/tokoton24.html"><img src="/img/user/mainmenu/mainmenu_tokoton24_off.gif" alt="とことん24とは？" /></a></li>
      <li><a href="http://{$smarty.server.HTTP_HOST}/knowledge_1.php"><img src="/img/user/mainmenu/mainmenu_knowledge_off.gif" alt="車検のいろは" /></a></li>
      <li><a href="http://{$smarty.server.HTTP_HOST}/faq.html"><img src="/img/user/mainmenu/mainmenu_faq_off.gif" alt="よくある質問" /></a></li>
      <li><a href="https://{$smarty.server.HTTP_HOST}/inquiry.html"><img src="/img/user/mainmenu/mainmenu_inquiry_off.gif" alt="お問い合わせ" /></a></li>
    </ul>
    <br class="clear" />
  </div>
