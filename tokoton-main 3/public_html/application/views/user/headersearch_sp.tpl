<!DOCTYPE html> 
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="keywords" content="車検,費用,料金,見積,格安,激安,予約" />
<!-- SEO対策 [PUBLIC_TOKOTON-7,8,9] NOINDEX対応 20170302 ST -->
{if $notfound_flg === TRUE}
<meta name="robots" content="noindex,nofollow,noarchive" />
{/if}
<!-- SEO対策 [PUBLIC_TOKOTON-7,8,9] NOINDEX対応 20170302 ED -->
<title>{$page_title}</title>
<meta name="description" content="{if $page_description != ""}{$page_description}{else}{if $todoufuken != "" && $todoufuken !== "未選択"}{if $region_nm == ""}{$todoufuken}{/if}{if $shikuchouson != ""}{$shikuchouson}{/if}{$region_nm}で{/if}車検費用を比較するなら、とことん車検ナビで車検料金が安いお得な店舗を検索。早期の車検予約割引やプレゼント情報、軽自動車車検の特典など、全国のお得な格安車検情報が満載です！今すぐネットで車検見積もりが出来ます。{/if}{if $page_num != ""}{$page_num}{/if}" />
<link href="/sp/css/reset.css" rel="stylesheet" type="text/css" />
<link href="/sp/css/reset_table.css" rel="stylesheet" type="text/css" />
<link href="/sp/css/style.css" rel="stylesheet" type="text/css" />
{if $page_type == "search"}
<link href="/sp/css/search_result_sp.css" rel="stylesheet" type="text/css" />
{else if  $page_type == "shop_detail"}
<link href="/sp/css/acordion.css" rel="stylesheet" type="text/css" />
<link href="/sp/css/shop_info_sp.css" rel="stylesheet" type="text/css" />
<link href="/sp/css/tab-sp.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="/sp/dist/magnific-popup.css">
<link href="/sp/css/font-awesome.min.css" rel="stylesheet">
{/if}
<link href="/sp/css/jquery.pageslide.css" rel="stylesheet" type="text/css" />
{literal}
<? if ($_SERVER['REQUEST_URI'] === '/') { ?>
<script type="text/javascript" src="/js/common_userAgent.js"></script>
<? } ?>
{/literal}

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

<!-- jQuery -->
<script type="text/javascript" src="/sp/js/jquery.min.js"></script>
{if $page_type == "search"}
<!-- React.js -->
<script type="text/javascript" src="/sp/js/react-0.12.2.js"></script>
<script type="text/javascript" src="/sp/js/JSXTransformer-0.12.2.js"></script>
{else if  $page_type == "shop_detail"}
<script src="/sp/dist/jquery.magnific-popup.min.js"></script> 
<script src="/sp/js/readmore.js"></script>
{literal}
<script>
$(function () {
	$('article').readmore({
		speed: 500,
		collapsedHeight: 110,
        
		moreLink: '<a href="#" class="shop_info_more"><img src="/sp/images/search/ico_readmore.png" alt=""/>続きを読む</a>',
		lessLink: '<a href="#" class="shop_info_close"><img src="/sp/images/search/ico_readclose.png" alt=""/>もとに戻す</a>'
	});
});
</script>
{/literal}
{/if}



<!-- 2018/11/20 google_analytics差し替え対応 ST -->
{literal}
<? require_once ('google_analytics.tpl');?>
{/literal}
<!-- 2018/11/20 google_analytics差し替え対応 ED -->
{literal}
<script type="text/javascript">
//アコーディオンメニュー
$(document).ready(function(){
	//acordion_treeを一旦非表示に
	$(".acordion_tree").css("display","none");
	//triggerをクリックすると以下を実行
	$(".trigger").click(function() {
		//もしもクリックしたtriggerの直後の.acordion_treeが非表示なら
		if ($("+.acordion_tree",this).css("display")=="none") {
			//classにactiveを追加
			$(this).addClass("active");
			//直後のacordion_treeをスライドダウン
			$("+.acordion_tree",this).slideDown("normal");
		} else {
			//classからactiveを削除
			$(this).removeClass("active");
			//クリックしたtriggerの直後の.acordion_treeが表示されていればスライドアップ
			$("+.acordion_tree",this).slideUp("normal");
		}
	});
});
</script>
{/literal}

