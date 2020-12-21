<!DOCTYPE html> 
<html lang="ja">
<head>
<script src="https://efo01.urichan.com/s.php?id=2073"></script>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="keywords" content="{if $page_keywords != ""}{$page_keywords}{else}車検,費用,料金,見積,格安,激安,予約{/if}" />
<meta name="description" content="{if $page_description != ""}{$page_description}{else}車検費用を安くするなら、とことん車検ナビで車検料金がお得な店舗を検索。早期の車検予約割引やプレゼント情報、軽自動車車検の特典など、全国のお得な格安車検情報が満載です！今すぐネットで車検見積が出来ます{/if}" />

{if $notfound_flg === TRUE}
<meta name="robots" content="noindex,nofollow,noarchive" />
{/if}
<title>{$page_title}</title>
<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/main.js"></script>
<script type="text/JavaScript" src="/js/rollover.js"></script>
<script type="text/javascript" src="/js/prototype.js"></script>
<script src="/js/check_cartype.js" type="text/JavaScript"></script>
<script type="text/javascript" src="/js/function.js"></script>
<link href="http://{$smarty.server.HTTP_HOST}/favicon.ico" rel="icon" type="image/x-icon" />

<!-- CSS -->
<link rel="stylesheet" href="/sp/css/reset.css" type="text/css"/>
<link rel="stylesheet" href="/sp/css/reset_table.css" type="text/css"/>
<link rel="stylesheet" href="/sp/css/style2.css" type="text/css"/>

<!-- JS -->
<script src="/js/jquery-1.7.2.min.js" type="text/javascript" charset="utf-8"></script>

<!--[if lt IE 9]>
<script type="text/javascript" src="./js/vendor/svgweb/src/svg.js"></script>
<![endif]-->
{literal}
<?php if ($_SERVER['HTTPS'] === 'on') { ?>
<link rel="canonical" href="https://<?= $_SERVER['HTTP_HOST'] ?><?= $_SERVER['REQUEST_URI'] ?>" />
<?php } else { ?>
<link rel="canonical" href="http://<?= $_SERVER['HTTP_HOST']?><?= $_SERVER['REQUEST_URI'] ?>" />
<?php } ?>
{/literal}
{if $header_js != ""}{$header_js}{/if}
{if $map_js != ""}{$map_js}{/if}
{$overture_tag}
{literal}
<? if ($_SERVER['REQUEST_URI'] === '/') { ?>
<script type="text/javascript" src="/js/common_userAgent.js"></script>
<? } ?>
{/literal}
{if $page_name === "estimate_fin"}
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
{/if}
{literal}
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-23885931-1', 'auto');
  ga('send', 'pageview');

  ga('create', 'UA-3286712-15', 'auto', {'name': 'secondTracker'});
  ga('secondTracker.send','pageview');

</script>
{/literal}
{literal}
<!-- Validation -->
<script>

/*20161205@nagai ST*/
//jQuery競合対策 (スマホは動く!?)
var $jQ = jQuery.noConflict(true);
$jQ(document).ready(function(){
	// binds form submission and fields to the validation engine
    $jQ("#formID").validationEngine();
});

/*
jQuery(document).ready(function(){
	jQuery("#formID").validationEngine();
});
*/
/*20161129@nagai END*/
</script>

<!-- Accordion -->
<script type="text/javascript">
//アコーディオンメニュー
	$(function(){
		$("#privacy_ac").on("click", function() { 
			$(this).next().slideToggle("fast");
			$(this).toggleClass("purasu");
			$(this).toggleClass("mainasu");
		});
	});
</script>

{/literal}

</head>

<body>
<!--▼wrapper-->
<div id="wrapper">
	<!--▼header-->
	<header id="header">
		<div id="header_in">
			<div id="header_left">
			<p><a href="/sp/"><img src="/sp/images/common/logo.png" width="136" height="18" alt="とことん車検ナビ"></a></p>
			</div>
			<div id="header_right">
			</div>
			<br class="clear">
		</div>
	</header>
	<!--▲header-->
