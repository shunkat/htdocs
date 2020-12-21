<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="keywords" content="車検,費用,料金,見積,格安,激安,予約" />
<meta name="description" content="サーバーメンテナンスのお知らせ" />
<title>サーバーメンテナンスのお知らせ | 車検費用が驚きの3万円台から！とことん車検ナビ</title>
<link href="../css/reset.css" rel="stylesheet" type="text/css" />
<link href="../css/reset_table.css" rel="stylesheet" type="text/css" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<link href="../css/acordion.css" rel="stylesheet" type="text/css" />
<link href="../css/jquery.pageslide.css" rel="stylesheet" type="text/css" />
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<script type="text/javascript" src="../../js/common_userAgent.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
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

<!-- モバイル用アコーディオン -->
<script>
    $(function(){
        $(".acNavi-list-title").on("click", function() {
            $(this).next().slideToggle();
        });

		//クリックでアイコン切り替え
		$(".acNavi-icon").on("click", function() {
			$(this).toggleClass("acNavi-icon_on");
		});
    });
</script>



<script>
//プランタブ切り替え
$(function(){
	$('.tabbox:first').show();
	$('.tab-list:first').addClass('active');
	$('.tab-list').click(function() {
		$('.tab-list').removeClass('active');
		$(this).addClass('active');
		$('.tabbox').hide();
		$($(this).find('a').attr('href')).fadeIn();
		return false;
	});
});

//プラン1の車種切り替え
$(function(){
	$('.plan1box-price:first').show();
	$('#plan1-price li:first').addClass('active');
	$('#plan1-price li').click(function() {
		$('#plan1-price li').removeClass('active');
		$(this).addClass('active');
		$('.plan1box-price').hide();
		$($(this).find('a').attr('href')).fadeIn();
		return false;
	});
});
//プラン2の車種切り替え
$(function(){
	$('.plan2box-price:first').show();
	$('#plan2-price li:first').addClass('active');
	$('#plan2-price li').click(function() {
		$('#plan2-price li').removeClass('active');
		$(this).addClass('active');
		$('.plan2box-price').hide();
		$($(this).find('a').attr('href')).fadeIn();
		return false;
	});
});
//プラン3の車種切り替え
$(function(){
	$('.plan3box-price:first').show();
	$('#plan3-price li:first').addClass('active');
	$('#plan3-price li').click(function() {
		$('#plan3-price li').removeClass('active');
		$(this).addClass('active');
		$('.plan3box-price').hide();
		$($(this).find('a').attr('href')).fadeIn();
		return false;
	});
});

</script>

<!-- 2018/11/20 google_analytics差し替え対応 ST -->
<? require_once ('../../application/views/user/google_analytics.tpl');?>
<!-- 2018/11/20 google_analytics差し替え対応 ED -->

</head>

<body>
<!--▼wrapper-->
<div id="wrapper">
	<!--▼header-->
	<header id="header">
    	<div id="top">
        	<p>車検費用の料金比較、全国のお得な情報が満載！格安便利なお見積り</p>
        </div>
        <div id="header_in">
        	<div id="header_left">
            	<p><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/sp/"><img src="../images/common/logo.png" width="136" height="18" alt="とことん車検ナビ"></a></p>
            </div>
            <div id="header_right">
            	<p><a href="#modal" class="second open"><span><img src="../images/common/heder_menu.png" width="80" height="35" alt="メニュー"></span></a></p>
            </div>
            <br class="clear">
        </div>
</header>
    <!--▲header-->
        <!-- ▼内容 -->
		<div class="breadcrumb_list">
			<p><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/sp/"><img src="../images/search/home.png" width="13"/> ホーム</a> &gt; サーバーメンテナンスのお知らせ</p>
		</div>


<!--▼section-->
  <section>
    <h1 class="shop-info-page_title">サーバーメンテナンスのお知らせ</h1>
    <br>
    <div id="section_box">
			<p style="margin-top:10px;">とことん車検ナビをご利用いただき、誠にありがとうございます。<br />
            この度、とことん車検ナビではサーバーメンテナンスを実施いたします。<br />
            メンテナンス中はとことん車検ナビのPCサイト・スマートフォンサイト（http://www.tokoton-navi.com　各サイトアドレス共通）をご利用いただけません。（閲覧・見積もり申請）
ご利用の皆様には大変ご迷惑をお掛けいたしますが、何卒ご理解賜りますようお願い申し上げます。</p>
			<br />
            <p>日時：2015年11月3日(水) 11時00分 ～ 12時00分頃<br />
            ※作業の都合により、メンテナンスの終了時間が前後する場合がございます。</p>
    </div>
  </section>

    <section>
        <div class="title03">
			<h3><span><img src="../images/common/title_icon.png" width="20" height="12"></span>車検ナビに関する情報</h3>
		</div>
	  	<div class="about_us">
			<ul>
				<li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/sp/"><span>ホーム</span></a></li>
                <li class="about_us_left"><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/sp/search_top/">車検を探す</a></li>
			</ul>
			<ul>
				<li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/sp/useinfo/"><span>車検ナビとは</span></a></li>
				<li class="about_us_left"><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/sp/knowledge/knowledge_1.php">車検のいろは</a></li>
			</ul>
            <ul>
            	<li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/sp/faq/"><span>よくある質問</span></a></li>
				<li class="about_us_left"><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/sp/rules/">利用規約</a></li>
			</ul>
            <ul>
				<li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/sp/privacy/"><span>プライバシー</span></a></li>
                <li class="about_us_left"><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/sp/company/"><span>運営会社</span></a></li>
			</ul>
		</div>
	</section>

    <!--▼footer-->
	<footer>
    <div id="footer_pc">
    	<ul>
        	<li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/"><img src="../images/common/pc.png" width="158" height="33" alt="PCサイトはこちら"></a></li>
        </ul>
  	</div>
        <address>Copyright(C)2008-<?= date('Y') ?> Tokoton Shaken Navi All Rights Reserved.</address>
    </footer>
    <!--▲footer-->


</div>
<!--▲wrapper-->

<div id="modal">
	<p class="close"><a href="javascript:$.pageslide.close()">閉じる</a></p>
	<h2>■メニュー</h2>
	<ul>
		<li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/sp/">ホーム</a></li>
	</ul>
	<h2>■店舗検索</h2>
	<ul>
		<li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/sp/search_top/">車検を探す</a></li>
	</ul>
	<h2>■お役立ちコンテンツ</h2>
	<ul>
		<li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/sp/knowledge/knowledge_1.php">車検のいろは</a></li>
	</ul>
	<h2>■とことん車検ナビに関する情報</h2>
	<ul>
		<li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/sp/useinfo/">とことん車検ナビとは</a></li>
		<li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/sp/faq/">よくある質問</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/sp/rules/">利用規約</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/sp/privacy/">プライバシーポリシー</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/sp/company/">運営会社</a></li>
	</ul>
    <h2>■その他</h2>
	<ul>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/keisai.html">掲載をお考えの方</a></li>
	</ul>
	<p class="close"><a href="javascript:$.pageslide.close()">閉じる</a></p>
</div>
<script type="text/javascript" src="../js/jquery.pageslide.min.js"></script>
<script>
	/* Default pageslide, moves to the right */
	$(".first").pageslide();

	/* Slide to the left, and make it model (you'll have to call $.pageslide.close() to close) */
	$(".second").pageslide({ direction: "left", modal: true });
</script>
<!-- とことん車検ナビ -->
<!-- Google Code for &#12522;&#12510;&#12540;&#12465;&#12486;&#12451;&#12531;&#12464; &#12479;&#12464; -->
<!-- Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. For instructions on adding this tag and more information on the above requirements, read the setup guide: google.com/ads/remarketingsetup -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 989205900;
var google_conversion_label = "x13ICMT63AQQjKvY1wM";
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/989205900/?value=0&amp;label=x13ICMT63AQQjKvY1wM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<script type="text/javascript" language="javascript">
/* <![CDATA[ */
var yahoo_retargeting_id = 'R0TC8QN6YZ';
var yahoo_retargeting_label = '';
/* ]]> */
</script>
<script type="text/javascript" language="javascript" src="//b92.yahoo.co.jp/js/s_retargeting.js"></script>
<!-- Yahoo Code for your Target List -->
<script type="text/javascript">
/* <![CDATA[ */
var yahoo_ss_retargeting_id = 1000009957;
var yahoo_sstag_custom_params = window.yahoo_sstag_params;
var yahoo_ss_retargeting = true;
/* ]]> */
</script>
<script type="text/javascript" src="//s.yimg.jp/images/listing/tool/cv/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//b97.yahoo.co.jp/pagead/conversion/1000009957/?guid=ON&script=0&disvt=false"/>
</div>
</noscript>
</body>
</html>
