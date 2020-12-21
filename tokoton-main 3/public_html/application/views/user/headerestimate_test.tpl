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
<script type="text/JavaScript" src="/js/rollover.js"></script>
<script type="text/javascript" src="/js/prototype.js"></script>
<script src="/js/check_cartype.js" type="text/JavaScript"></script>
<script type="text/javascript" src="/js/function.js"></script>
<link href="http://{$smarty.server.HTTP_HOST}/favicon.ico" rel="icon" type="image/x-icon" />
{if $css != ""}
<link href="{$css}" rel="stylesheet" type="text/css" />
{/if}
<link href="/css/user/common_new.css" rel="stylesheet" type="text/css" />
<link href="/css/user/result.css" rel="stylesheet" type="text/css" />
<!--<link rel="stylesheet" href="/sp/css/reset.css" type="text/css"/>-->
<link rel="stylesheet" href="/css/user/validationEngine.jquery.css" type="text/css"/>
<script src="/js/jquery.validationEngine-ja.js" type="text/javascript" charset="utf-8"></script>
<script src="/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>

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
{literal}
<script>
	/*20161129@nagai ST*/
	//jQuery競合対策
	var $jQ = jQuery.noConflict(true);
	$jQ(document).ready(function(){
		// binds form submission and fields to the validation engine
        $jQ("#formID").validationEngine();
    });
    
    /*コメントアウト
    jQuery(document).ready(function(){
        // binds form submission and fields to the validation engine
        jQuery("#formID").validationEngine();
    });
    */
    /*20161129@nagai END*/
</script>
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

<!-- 20161128@nagai ST -->
<!-- datepicker読み込み -->
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>
<link type="text/css" href="//ajax.googleapis.com/ajax/libs/jqueryui/1/themes/ui-lightness/jquery-ui.css" rel="stylesheet" />
<!-- 20161128@nagai END -->

</head>
<body>
<div id="wrapper">
  <div id="container">
      <div id="header">
        <p id="title"><img src="/img/user/title.gif" alt="とことん車検ナビ" /></p>
        <h1>{if $h1 != ""}{$h1}{else}車検を探す|どこより格安料金で便利なお見積りなら「とことん車検ナビ」{/if}</h1>
        <br />
      </div>
