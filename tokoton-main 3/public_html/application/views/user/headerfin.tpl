<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="{if $page_keywords != ""}{$page_keywords}{else}車検,費用,料金,見積,格安,激安,予約{/if}" />
<meta name="description" content="{if $page_description != ""}{$page_description}{else}車検費用を安くするなら、とことん車検ナビで車検料金がお得な店舗を検索。早期の車検予約割引やプレゼント情報、軽自動車車検の特典など、全国のお得な格安車検情報が満載です！今すぐネットで車検見積が出来ます{/if}" />
{if $notfound_flg === TRUE}
<meta name="robots" content="noindex,nofollow,noarchive" />
{/if}
<title>{$page_title}</title>
<meta name="viewport" content="width=920" />
<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/main.js"></script>
<script type="text/javascript" src="/js/function.js"></script>
<script type="text/javascript" src="/js/prototype.js"></script>
<script src="/js/rollover.js" type="text/JavaScript"></script>
<script src="/js/check_cartype.js" type="text/JavaScript"></script>
<link href="http://{$smarty.server.HTTP_HOST}/favicon.ico" rel="icon" type="image/x-icon" />
{if $css != ""}
<link href="{$css}" rel="stylesheet" type="text/css" />
{/if}
<link href="/css/user/common_new.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="/sp/css/reset.css" type="text/css"/>

<!-- SEO対策 [PUBLIC_TOKOTON-3] /なしページへcanonical対応 20170306 ST -->
{$canonical}
<!-- SEO対策 [PUBLIC_TOKOTON-3] /なしページへcanonical対応 20170306 ED -->

{if $header_js != ""}{$header_js}{/if}
{if $map_js != ""}{$map_js}{/if}
{$overture_tag}
{literal}
<? if ($_SERVER['REQUEST_URI'] === '/') { ?>
<script type="text/javascript" src="/js/common_userAgent.js"></script>
<? } ?>
{/literal}
<!-- 2018/11/20 google_analytics差し替え対応 ST -->
{literal}
<? require_once ('google_analytics.tpl');?>
{/literal}
<!-- 2018/11/20 google_analytics差し替え対応 ED -->
{literal}
<script language="Javascript" type="text/javascript">
<!--
/* <![CDATA[ */
var account_id="DkoepqQOLDUlz7yecxMA";
var transaction_id = "";
var amount = "";
if (location.protocol == "https:") { var protocol = "https:"} else { var protocol = "http:" }
document.write("<img width=1 height=1 border=0 src='" + protocol + "//b90.yahoo.co.jp/c?account_id=" + account_id + "&transaction_id=" + transaction_id + "&amount=" + amount + "'>");
/* ]]> */
//-->
</script>
{/literal}

</head>
<body{$load}>
<div id="wrapper">
  <div id="container">
      <div id="header">
        <p id="title"><a href="http://{$smarty.server.HTTP_HOST}/" title="とことん車検ナビ"><img src="/img/user/title.gif" alt="とことん車検ナビ" /></a></p>
        <h1>{if $h1 != ""}{$h1}{else}車検を探す|どこより格安料金で便利なお見積りなら「とことん車検ナビ」{/if}</h1>
        <br />
        <ul id="submenu">
            <li><a href="http://{$smarty.server.HTTP_HOST}/sitemap.html">サイトマップ</a></li>
            <li><a href="http://{$smarty.server.HTTP_HOST}/privacy.html">プライバシーポリシー</a></li>
            <li><a href="http://{$smarty.server.HTTP_HOST}/rules.html">利用規約</a></li>
            <li><a href="http://{$smarty.server.HTTP_HOST}/glossary.php">車検用語集</a></li>
            <li id="menu_end"><a href="http://{$smarty.server.HTTP_HOST}/useinfo.html">とことん車検ナビとは？</a></li>
        </ul>
        <br class="clear" />
        <ul id="mainmenu">
          <li><a href="http://{$smarty.server.HTTP_HOST}/"><img src="/img/user/mainmenu/{$mainmenu_home}.gif" alt="ホーム" /></a></li>
          <li><a href="http://{$smarty.server.HTTP_HOST}/search_top/"><img src="/img/user/mainmenu/{$mainmenu_list}.gif" alt="車検をさがす" /></a></li>
          <li><a href="http://{$smarty.server.HTTP_HOST}/knowledge_1.php"><img src="/img/user/mainmenu/mainmenu_knowledge_off.gif" alt="車検のいろは" /></a></li>
          <li><a href="http://{$smarty.server.HTTP_HOST}/faq/"><img src="/img/user/mainmenu/mainmenu_faq_off.gif" alt="よくある質問" /></a></li>
          <li><a href="https://{$smarty.server.HTTP_HOST}/inquiry.html"><img src="/img/user/mainmenu/mainmenu_inquiry_off.gif" alt="お問い合わせ" /></a></li>
          <li><a href="http://{$smarty.server.HTTP_HOST}/keisai.html"><img src="/img/user/mainmenu/mainmenu_keisai_off.gif" alt="掲載をお考えの方" /></a></li>
        </ul>
        <br class="clear" />
      </div>
