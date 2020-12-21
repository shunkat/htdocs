<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="{if $page_keywords != ""}{$page_keywords}{else}車検{if $todoufuken != "" && $todoufuken !== "未選択"},{if $region_nm == ""}費用,格安,激安,{$todoufuken}{else}格安,激安,{/if}{if $shikuchouson != ""}{$shikuchouson},{/if}{$region_nm}{else},費用,料金,見積,格安,激安{/if}{if $page_num != ""}{$page_num}{/if}{/if}" />
<meta name="description" content="{if $page_description != ""}{$page_description}{else}{if $todoufuken != "" && $todoufuken !== "未選択"}{if $region_nm == ""}{$todoufuken}{/if}{if $shikuchouson != ""}{$shikuchouson}{/if}{$region_nm}で{/if}車検費用を比較するなら、とことん車検ナビで車検料金が安いお得な店舗を検索。早期の車検予約割引やプレゼント情報、軽自動車車検の特典など、全国のお得な格安車検情報が満載です！今すぐネットで車検見積もりが出来ます。{/if}{if $page_num != ""}{$page_num}{/if}" />
{if $notfound_flg === TRUE}
<meta name="robots" content="noindex,nofollow,noarchive" />
{/if}
<title>{$page_title}</title>
<meta name="viewport" content="width=920" />
<script type="text/javascript" src="/js/main.js"></script>
<script type="text/javascript" src="/js/function.js"></script>
<script type="text/javascript" src="/js/prototype.js"></script>
<script src="/js/rollover.js" type="text/JavaScript"></script>
<script src="/js/check_cartype.js" type="text/JavaScript"></script>
<script type="text/javascript" src="/js/smartRollover.js"></script>
<link href="http://{$smarty.server.HTTP_HOST}/favicon.ico" rel="icon" type="image/x-icon" />
{if $css != ""}
<link href="{$css}" rel="stylesheet" type="text/css" />
{/if}
<link href="/css/user/common_new.css" rel="stylesheet" type="text/css" />
{literal}

<!-- SEO対策 [PUBLIC_TOKOTON-2,3,4] canonical対応 20170227 ST -->
<?php if($canonical != ""){ echo $canonical;?>
<?php } else {?>
<?php 	if ($_SERVER['HTTPS'] === 'on') { ?>
<link rel="canonical" href="https://<?= $_SERVER['HTTP_HOST'] ?><?= $_SERVER['REQUEST_URI'] ?>" />
<?php 	} else { ?>
<link rel="canonical" href="http://<?= $_SERVER['HTTP_HOST']?><?= $_SERVER['REQUEST_URI'] ?>" />
<?php 	} ?>
<?php } ?>
<!-- SEO対策 [PUBLIC_TOKOTON-2,3,4] canonical対応 20170227 ED -->

{/literal}
{if $header_js != ""}{$header_js}{/if}
{if $map_js != ""}{$map_js}{/if}
{$overture_tag}
{literal}
<? if ($_SERVER['REQUEST_URI'] === '/') { ?>
<script type="text/javascript" src="/js/common_userAgent.js"></script>
<link rel="alternate" media="only screen and (max-width: 640px)" href="http://www.tokoton-navi.com/sp/" />
<? } ?>
{/literal}

<!-- 2018/11/20 google_analytics差し替え対応 ST -->
{literal}
<? require_once ('google_analytics.tpl');?>
{/literal}
<!-- 2018/11/20 google_analytics差し替え対応 ED -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>
<body{$load}>
<div id="wrapper">
  <div id="container">
  <div id="header">
    <p id="title"><a href="http://{$smarty.server.HTTP_HOST}/" title="とことん車検ナビ"><img src="/img/user/title.gif" alt="とことん車検ナビ" /></a></p>
		<h1>{if $h1 != ""}{$h1}{else}{if $todoufuken != "" && $todoufuken !== "未選択"}{if $region_nm == ""}{$todoufuken}{/if}{$shikuchouson}{$region_nm}の{/if}車検を探す|どこより格安料金で便利なお見積りなら「とことん車検ナビ」{/if}</h1>
	<br />
	<ul id="submenu">
		<li><a href="http://{$smarty.server.HTTP_HOST}/sitemap.html">サイトマップ</a></li>
		<li><a href="http://{$smarty.server.HTTP_HOST}/privacy.html">プライバシーポリシー</a></li>
		<li><a href="http://{$smarty.server.HTTP_HOST}/rules.html">利用規約</a></li>
		<!--<li><a href="http://{$smarty.server.HTTP_HOST}/glossary.php">車検用語集</a></li>-->
		<li id="menu_end"><a href="http://{$smarty.server.HTTP_HOST}/useinfo.html">とことん車検ナビとは？</a></li>
	</ul>
    <br class="clear" />
    <ul id="mainmenu">
      <li><a href="http://{$smarty.server.HTTP_HOST}/"> ホーム</a></li>
      <li><a href="http://{$smarty.server.HTTP_HOST}/search_top/"> 車検を探す</a></li>
      <li><a href="http://{$smarty.server.HTTP_HOST}/knowledge_1.php"> 車検のいろは</a></li>
      <li><a href="http://{$smarty.server.HTTP_HOST}/faq/"> よくある質問</a></li>
      <li><a href="https://{$smarty.server.HTTP_HOST}/inquiry.html"> お問い合わせ</a></li>
      <li><a href="http://{$smarty.server.HTTP_HOST}/keisai.html"> 掲載をお考えの方</a></li>
    </ul>
    <br class="clear" />
  </div>
