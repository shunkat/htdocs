{include file="ci:user/headersearch_sp.tpl"}


<!-- モバイル用アコーディオン -->
{literal}
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
{/literal}


{literal}
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
/*
//マップポップアップ表示
jQuery(function($){

  if($('a.map').length > 0) {
    $('a.map').each(function() {
      var address = $('span.address').text();
      address = $.trim(address);
      address = address.replace(/\s+/g, '+');
      var map_param = $.param({
        'q': address
      });
      $(this).attr('data-mfp-src', "https://maps.google.com/maps?" + map_param);
      $(this).attr('href', "https://maps.google.com/maps?" + map_param);
    });

    $('.map').magnificPopup({
      type: 'iframe'
    });
  }
});
*/
//詳しく見るポップアップ表示
$(function () {
	$('.popup-modal').magnificPopup({
		type: 'inline',
		preloader: false,
		focus: '#username',
		modal: true
	});

	$(document).on('click', '.popup-modal-dismiss', function (e) {
		e.preventDefault();
		$.magnificPopup.close();
	});
});

$(function() {
 $(".scroll").click(function(event){
  event.preventDefault();

  var url = this.href;

  var parts = url.split("#");
  var target = parts[1];

  var target_offset = $("#"+target).offset();
  var target_top = target_offset.top;

  $('html, body').animate({scrollTop:target_top}, 1500);
  });
 });
</script>
{/literal}
{literal}
<style>
.shop-info-price-text{
	white-space: -moz-pre-wrap; /* Mozilla */
	white-space: -pre-wrap;     /* Opera 4-6 */
	white-space: -o-pre-wrap;   /* Opera 7 */
	white-space: pre-wrap;      /* CSS3 */
	word-wrap: break-word;      /* IE 5.5+ */
}
.shop-info-price-text strong{
	float: left;
}
</style>
{/literal}
</head>

<!--▼wrapper-->
	<div id="wrapper">
		<!--▼header-->
		<header id="header">
			<div id="top">
				<p>車検費用の料金比較、全国のお得な情報が満載！格安便利なお見積り</p>
			</div>
			<div id="header_in">
				<div id="header_left">
					<p><a href="http://{$smarty.server.HTTP_HOST}/sp/"><img src="/sp/images/common/logo.png" width="136" height="18" alt="とことん車検ナビ"></a></p>
				</div>
				<div id="header_right">
					<p><a href="#modal" class="second open"><span><img src="/sp/images/common/heder_menu.png" width="80" height="35" alt="メニュー"></span></a></p>
				</div>
				<br class="clear">
			</div>
		</header>
    <!--▲header-->

	<!-- ▼内容 -->
    <!-- パンくず対応 ST -->
    <div  class="breadcrumb-wrap">
      <img src="/sp/images/search/home.png" width="13" class="breadcrumb_img">
      <div class="breadcrumb-padding">
    <ul class="breadcrumb_list">
      <li class="breadcrumb_row"><a href="/">ホーム</a><span class="arrow-magin">&gt;</span></li>
      <li class="breadcrumb_list"><a href="/search_top/">車検をさがす</a><span class="arrow-magin">&gt;</span></li>
      <li class="breadcrumb_list"><a href="{$search_url}">検索結果</a><span class="arrow-magin">&gt;</span></li>
      <li class="breadcrumb_list"><a href="/shop_detail/{$sid}/{if $type != ""}{$type}/{/if}">店舗詳細</a><span class="arrow-magin">&gt;</span></li>
      <li class="breadcrumb_list">クーポン</li>
    </ul>
    </div>
    </div>

    <!-- パンくず対応 ED -->
{literal}
<style>
.coupon-sp{
	width:90%;
	margin:0 auto;
	margin-bottom:20px;
}
.coupon-sp h1{
	padding:14px;
	background-color:#49A500;
	color:#FFFFFF;
	font-size:16px;
}
.coupon-sp p{
	font-size:16px;
	color:#666;
}
.coupon-sp-outer{
	border: #49A500 1px solid;
	border-radius:5px;
}
.coupon-sp-inner{
	width:90%;
	margin:0 auto;
	padding:20px 0 ;
}
.coupon-sp-kigen{
	text-align:center;
	color:#F60!important;
	background-color: #FC9;
	font-size:16px;
	padding:8px;
}
</style>
{/literal}


<div class="coupon-sp">

    <p class="shop-info-title" style="font-weight:bold;">{$shop_data.sd_shop_nm}&nbsp;</p>
    
    <div class="coupon-sp-outer">
        <h1>とことん車検ナビクーポン・チケット</h1>
        <div class="coupon-sp-inner">
        	<p class="shop-info-title" style="font-weight:bold; color:#49A500;">{$shop_data.sd_shop_nm}&nbsp;</p>
        	<p>{$shop_data.cou_contents|nl2br}</p>
        </div>
   		<p class="coupon-sp-kigen">有効期限：{$shop_data.cou_limit_date|date_format:"%Y年%m月%d日"}&nbsp;</p>
        <div style="background-color:#FFECCC;">
	        <div class="coupon-sp-inner">
    	    <p>{$shop_data.cou_limit_matter|nl2br}&nbsp;</p>
        	</div>
        </div>
    </div>
    <p style="margin-top:8px;">このページを店頭でお見せください。</p>
</div><!--coupon-sp-->

<div class="al-center clear" style="width:90%; margin:0 auto 20px;">
    <a href="/shop_detail/{$sid}/" class="btn-mitsumori" style="background-color:#49A500!important;">店舗情報に戻る</a>
</div>






{include file="ci:user/footersearch_sp.tpl"}
