{include file="ci:user/headersearch_sp.tpl"}
<link href="/css/user/shop-detail.css" rel="stylesheet" type="text/css" /><!-- 下部固定ボタンstyle 20191119_add -->

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

<body class="shop_detail">
<!-- 下部固定ボタン 20191119_add ↓↓↓↓↓ -->
<div class="contact-btn">
  <a href="/link_shop/{$shop_data.sid}/shop_detail_estimate/{$plan.0.pb_no}/">この店舗で無料見積り</a> 
</div>
<!-- 下部固定ボタン 20191119_add ↑↑↑↑↑ -->
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
      <img src="/sp/images/search/home.png" width="13"class="breadcrumb_img" />
      <div class="breadcrumb-padding">
        <ul class="breadcrumb_list" itemscope itemtype="http://schema.org/BreadcrumbList">
<?
$length = count($breadcrumb_ary);
$no = 0;    // 追加
foreach ($breadcrumb_ary as $value){
  if ($no == 0){
?>
          <li{$itemcope} class="breadcrumb_row">
            <a href="<?=$value['url']?>"{$itemprop_url}>
              <span{$itemprop_title}><?=$value['name']?></span>
            </a>
			<meta itemprop="position" content="1" />
          </li><span class="arrow-magin">></span>
<?
  } else {
?>
          <li{$itemcope_child} class="breadcrumb_list">
<?
    if($no === $length-1){
?>
            <span {$itemprop_title}><?=$value['name']?></span>
			<meta itemprop="position" content="<? print $no+1 ?>" />
<?
    } else {
?>
            <a href="<?=$value['url']?>"{$itemprop_url}>
              <span{$itemprop_title}><?=$value['name']?></span>
            </a>
			<meta itemprop="position" content="<? print $no+1 ?>" />
            <span class="arrow-magin">></span>
<?
    }
?>
          </li>
<?
  }
  $no++;
}
?>
        </ul>
      <br class="clear"/>
      </div>
    </div>
    <!-- パンくず対応 ED -->

	<!-- ▼店舗情報 -->
	<div class="shop-info">
		<h1 class="shop-info-title">{$shop_data.sd_shop_nm}&nbsp;{if $sd_shop_rank != ""}<strong>{$sd_shop_rank}</strong>{/if}</h1>
        <!-- 店舗データ -->
		<div class="shop_data clearfix">
        	{if $intro1_img != ""}<img src="{$intro1_img}" alt="" width="280" class="shop_data_img" />{else}<img src="/img/user/detail/img_big.gif" alt="" width="280" class="noimage shop_data_img" />{/if}
			<ul class="shop_data_detail">
			    <li>〒158-0081</li>
			    <li>{$shop_data.sd_shop_address}</li>
			    <li>{if $map_flag ne "f"}{if $map != ""}<a class="map" data-mfp-src="" href="http://maps.google.co.jp/?mapf=q&hl=ja&geocode=&q={$map_link}" target="_blank">地図を見る</a></li>{else}&nbsp;{/if}{else}<a class="map" data-mfp-src="" href="http://maps.google.co.jp/?mapf=q&hl=ja&geocode=&q={$map_link}" target="_blank">Googleマップ</a>のページからご確認ください。{/if}
			    <li>{$shop_data.sd_shop_open} {$shop_data.sd_shop_off}</li>
			</ul>
		<div class="al-center clear">
            <a href="/link_shop/{$shop_data.sid}/shop_detail_estimate/{$plan.0.pb_no}/" class="btn-mitsumori">この店舗で無料見積りを申し込む</a>
		</div>
        </div>
        <!-- /店舗データ -->

        <!-- 店舗紹介文 -->
        <article class="shop-info-introduce_wrap">
            <div class="shop-info-introduce">
                <p class="green_text mb10">{$shop_data.sd_catch_copy}</p>
                <p class="txt">{$shop_data.sd_intro}</p>
            </div>
            <div class="shop-info-box">
                <table class="shop-info-box1-table mt10">
                <tbody><tr>
                  <th>
                    {if $intro2_img != ""}<img src="{$intro2_img}" alt="{$shop_data.sd_small_img01}" width="140"/>{else}<img src="/img/user/detail/img_small.gif" width="140" />{/if}</th>
                  <td>{if $shop_data.sd_small_img01 != ""}{$shop_data.sd_small_img01}{else}&nbsp;{/if}</td>
                </tr>
              </tbody></table>
            </div>
            <div class="shop-info-box">
                <table class="shop-info-box1-table mt10 mb10">
                <tbody><tr>
                  <th>
                    {if $intro3_img != ""}<img src="{$intro3_img}" alt="{$shop_data.sd_small_img02}" width="140"/>{else}<img src="/img/user/detail/img_small.gif" alt="" width="140"/>{/if}</th>
                  <td>{if $shop_data.sd_small_img02 != ""}{$shop_data.sd_small_img02}{else}&nbsp;{/if}</td>
                </tr>
              </tbody></table>
            </div>
        </article>
        <!-- /店舗紹介文 -->  

      <h2 class="shop-info-sub"><span class="shop-info-sub-in" id="price">車検プラン</span></h2>
        <!-- tab -->
      <ul id="tab">
        <li class="selected tab-list" id="plan_exist"><a href="#tab1" class="tab-list-link">プラン1</a></li>
        {if $plan_count >= 2}<li class="tab-list" ><a href="#tab2" class="tab-list-link">プラン2</a></li>{/if}
        {if $plan_count == 3}<li class="tab-list" ><a href="#tab3" class="tab-list-link">プラン3</a></li>{/if}
      </ul>
      
		<div id="detail">
{foreach from=$plan item = "item" key = "key" name = "plan_loop"}
			<div id="tab{$key+1}" class="tabbox">
            <h3 class="shop_info_h3">{$item.pb_plan_nm}</h3>
            <ul id="plan{$key+1}-price">
                <li class="selected active"><a href="#plan{$key+1}-price1">軽自動車</a></li>
                <li><a href="#plan{$key+1}-price2">小型</a></li>
                <li><a href="#plan{$key+1}-price3">中型</a></li>
                <li><a href="#plan{$key+1}-price4">大型</a></li>
            </ul>
            <!-- #plan-detail-price -->
			<div id="plan{$key+1}-detail-price">
                <!-- #plan-price1 -->
                <section id="plan{$key+1}-price1" class="plan{$key+1}box-price" style="display: block;">
                    <div class="price_box">
                        <div class="amount">
                            <p>最大割引適用後<span class="discount_value">{if $item.mini_disc_price !== ""}{$item.mini_disc_price|number_format}{else}&nbsp;{/if}円</span></p>
                        </div>
                        <table>
                            <tr>
                                <td rowspan="3" class="price_box_left"><p>法定費用</p></td>
                                <td rowspan="3"class="blank">&nbsp;</td>
                                <td class="price_box_right1">重量税</td>
                                <td class="price_box_right2">{if $item.mini_pd_weight_tax !== ""}{$item.mini_pd_weight_tax|number_format}円{else}&nbsp;{/if}</td>
                            </tr>
                            <tr>
                                <td class="price_box_right1">自賠責※2020/4以降</td>
                                <td class="price_box_right2">{if $item.mini_pd_insrnc_price !== ""}{$item.mini_pd_insrnc_price|number_format}円{else}&nbsp;{/if}</td>
                            </tr>
                            <tr>
                                <td class="price_box_right1">印紙代</td>
                                <td class="price_box_right2">{if $item.mini_pd_stamp_price !== ""}{$item.mini_pd_stamp_price|number_format}円{else}&nbsp;{/if}</td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td rowspan="2" class="price_box_left"><p>車検基本料</p></td>
                                <td rowspan="2"class="blank">&nbsp;</td>
                                <td class="price_box_right1">基本料</td>
                                <td class="price_box_right2">{if $item.mini_base_price !== ""}{$item.mini_base_price|number_format}円{else}&nbsp;{/if}</td>
                            </tr>
                            <tr>
                                <td class="price_box_right1">最大割引額</td>
                                <td class="price_box_right2 discount">{if $item.mini_disc !== ""}{$item.mini_disc|number_format}円{else}&nbsp;{/if}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="al-center">
					<p style="margin-bottom:4px;">※自賠責料金は2020年4月以後の金額を表示しています。</p>
                      <a href="/link_shop/{$shop_data.sid}/shop_detail_estimate/{$item.pb_no}/" class="btn-mitsumori">このプランで見積りをする</a>
                    </div>
                </section>
                <!-- /#plan1-price1 -->
                
                <!-- #plan1-price2 -->
                <section id="plan{$key+1}-price2" class="plan{$key+1}box-price">
                   <div class="price_box">
                    <div class="amount">
                        <p>最大割引適用後<span class="discount_value">{if $item.small_disc_price !== ""}{$item.small_disc_price|number_format}円{else}&nbsp;{/if}</span></p>
                    </div>
                    <table>
                        <tr>
                            <td rowspan="3" class="price_box_left"><p>法定費用</p></td>
                            <td rowspan="3"class="blank">&nbsp;</td>
                            <td class="price_box_right1">重量税</td>
                            <td class="price_box_right2">{if $item.small_pd_weight_tax !== ""}{$item.small_pd_weight_tax|number_format}円{else}&nbsp;{/if}</td>
                        </tr>
                        <tr>
                            <td class="price_box_right1">自賠責※2020/4以降</td>
                            <td class="price_box_right2">{if $item.small_pd_insrnc_price !== ""}{$item.small_pd_insrnc_price|number_format}円{else}&nbsp;{/if}</td>
                        </tr>
                        <tr>
                            <td class="price_box_right1">印紙代</td>
                            <td class="price_box_right2">{if $item.middle_pd_stamp_price !== ""}{$item.middle_pd_stamp_price|number_format}円{else}&nbsp;{/if}</td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td rowspan="2" class="price_box_left"><p>車検基本料</p></td>
                            <td rowspan="2"class="blank">&nbsp;</td>
                            <td class="price_box_right1">基本料</td>
                            <td class="price_box_right2">{if $item.small_base_price !== ""}{$item.small_base_price|number_format}円{else}&nbsp;{/if}</td>
                        </tr>
                        <tr>
                            <td class="price_box_right1">最大割引額</td>
                            <td class="price_box_right2 discount">{if $item.small_disc !== ""}{$item.small_disc|number_format}円{else}&nbsp;{/if}</td>
                        </tr>
                    </table>
                    </div>
                    <div class="al-center">
					<p style="margin-bottom:4px;">※自賠責料金は2020年4月以後の金額を表示しています。</p>
                      <a href="/link_shop/{$shop_data.sid}/shop_detail_estimate/{$item.pb_no}/" class="btn-mitsumori">このプランで見積りをする</a>
                    </div>
                </section>
                <!-- /#plan1-price2 -->
                
                <!-- #plan1-price3 -->
                <section id="plan{$key+1}-price3" class="plan{$key+1}box-price">
                    <div class="price_box">
                        <div class="amount">
                            <p>最大割引適用後<span class="discount_value">{if $item.middle_disc_price !== ""}{$item.middle_disc_price|number_format}円{else}&nbsp;{/if}</span></p>
                        </div>
                        <table>
                            <tr>
                                <td rowspan="3" class="price_box_left"><p>法定費用</p></td>
                                <td rowspan="3"class="blank">&nbsp;</td>
                                <td class="price_box_right1">重量税</td>
                                <td class="price_box_right2">{if $item.middle_pd_weight_tax !== ""}{$item.middle_pd_weight_tax|number_format}円{else}&nbsp;{/if}</td>
                            </tr>
                            <tr>
                                <td class="price_box_right1">自賠責※2020/4以降</td>
                                <td class="price_box_right2">{if $item.middle_pd_insrnc_price !== ""}{$item.middle_pd_insrnc_price|number_format}円{else}&nbsp;{/if}</td>
                            </tr>
                            <tr>
                                <td class="price_box_right1">印紙代</td>
                                <td class="price_box_right2">{if $item.middle_pd_stamp_price !== ""}{$item.middle_pd_stamp_price|number_format}円{else}&nbsp;{/if}</td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td rowspan="2" class="price_box_left"><p>車検基本料</p></td>
                                <td rowspan="2"class="blank">&nbsp;</td>
                                <td class="price_box_right1">基本料</td>
                                <td class="price_box_right2">{if $item.middle_base_price !== ""}{$item.middle_base_price|number_format}円{else}&nbsp;{/if}</td>
                            </tr>
                            <tr>
                                <td class="price_box_right1">最大割引額</td>
                                <td class="price_box_right2 discount">{if $item.middle_disc !== ""}{$item.middle_disc|number_format}円{else}&nbsp;{/if}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="al-center">
					<p style="margin-bottom:4px;">※自賠責料金は2020年4月以後の金額を表示しています。</p>
                      <a href="/link_shop/{$shop_data.sid}/shop_detail_estimate/{$item.pb_no}/" class="btn-mitsumori">このプランで見積りをする</a>
                    </div>
                </section>
                <!-- /#plan1-price3 -->
                
                
                                <!-- #plan1-price4 -->
                <section id="plan{$key+1}-price4" class="plan{$key+1}box-price">
                    <div class="price_box">
                        <div class="amount">
                            <p>概算総額<span class="discount_value">{if $item.large_disc_price !== ""}{$item.large_disc_price|number_format}円{else}&nbsp;{/if}</span></p>
                        </div>
                        <table>
                            <tr>
                                <td rowspan="3" class="price_box_left"><p>法定費用</p></td>
                                <td rowspan="3"class="blank">&nbsp;</td>
                                <td class="price_box_right1">重量税</td>
                                <td class="price_box_right2">{if $item.large_pd_weight_tax !== ""}{$item.large_pd_weight_tax|number_format}円{else}&nbsp;{/if}</td>
                            </tr>
                            <tr>
                                <td class="price_box_right1">自賠責※2020/4以降</td>
                                <td class="price_box_right2">{if $item.large_pd_insrnc_price !== ""}{$item.large_pd_insrnc_price|number_format}円{else}&nbsp;{/if}</td>
                            </tr>
                            <tr>
                                <td class="price_box_right1">印紙代</td>
                                <td class="price_box_right2">{if $item.large_pd_stamp_price !== ""}{$item.large_pd_stamp_price|number_format}円{else}&nbsp;{/if}</td>
                            </tr>
                        </table>                        
                        <table>
                            <tr>
                                <td rowspan="2" class="price_box_left"><p>車検基本料</p></td>
                                <td rowspan="2"class="blank">&nbsp;</td>
                                <td class="price_box_right1">基本料</td>
                                <td class="price_box_right2">{if $item.large_base_price !== ""}{$item.large_base_price|number_format}円{else}&nbsp;{/if}</td>
                            </tr>
                            <tr>
                                <td class="price_box_right1">最大割引額</td>
                                <td class="price_box_right2 discount">{if $item.large_disc !== ""}{$item.large_disc|number_format}円{else}&nbsp;{/if}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="al-center">
					<p style="margin-bottom:4px;">※自賠責料金は2020年4月以後の金額を表示しています。</p>
                      <a href="/link_shop/{$shop_data.sid}/shop_detail_estimate/{$item.pb_no}/" class="btn-mitsumori">このプランで見積りをする</a>
                    </div>
                </section>
                <!-- /#plan1-price4 -->
                    
        <div class="shop-info-price-text">
          <strong>{$item.pb_chatch_copy}</strong><br/>
          <br class="clear">
        	<div>{$item.pb_plan_contents}</div>
        </div>
            <div class="al-center">
              <a href="/link_shop/{$shop_data.sid}/shop_detail_estimate/{$item.pb_no}/" class="btn-mitsumori">このプランで無料見積り</a>
            </div>
				<!-- #plan{$key+1}-detail-price --></div>

			<!-- #tab1 --></div>
{/foreach}
		<!-- #detail --></div>
        <!-- tab -->

    <div>&nbsp;&nbsp;※平成30年5月以降は、タカタ製エアバックのリコールを受けていないと車検が通らなくなります。ご注意ください。</div>



		<!-- オプション -->
        <section class="shop-info-option">
        <p class="shop-info-option-title">対応サービス</p>
			{if $option_data.icon2 == "t"}
			<span>整備保証</span>
			{/if}
			{if $option_data.icon16 == "t"}
			<span>ロードサービス</span>
			{/if}
			{if $option_data.icon15 == "t"}
			<span>即日完了</span>
			{/if}
			{if $option_data.icon3 == "t"}
			<span>夜間受付</span>
			{/if}
			{if $option_data.icon4 == "t"}
			<span>土日対応</span>
			{/if}
			{if $option_data.icon5 == "t"}
			<span>代車あり</span>
			{/if}
			{if $option_data.icon6 == "t"}
			<span>引取納車</span>
			{/if}
			{if $option_data.icon7 == "t"}
			<span>キャッシュレス</span>
			{/if}
			{if $option_data.icon8 == "t"}
			<span>クレジットカード</span>
			{/if}
			{if $option_data.icon9 == "t"}
			<span>グルメ</span>
			{/if}
			{if $option_data.icon10 == "t"}
			<span>グッズ</span>
			{/if}
			{if $option_data.icon11 == "t"}
			<span>ガソリン</span>
			{/if}
			{if $option_data.icon12 == "t"}
			<span>抽選</span>
			{/if}
			{if $option_data.icon13 == "t"}
			<span>オイル交換</span>
			{/if}
			{if $option_data.icon14 == "t"}
			<span>限定割引</span>
			{/if}
            <div class="d-option">
				<p class="description-option"><a class="popup-modal" href="#test-modal" style="color:#333;"><i class="fa fa-plus-square"></i> 詳しく見る</a></p>
			</div>
				<!-- ▼詳しく見る内容 -->
				 <div class="html-code">
					<div id="test-modal" class="mfp-hide white-popup-block" style="background:white;">
                    <p><a class="popup-modal-dismiss btn-close" href="#">閉じる</a></p>
						<p class="popup-title">対応サービスの説明</p>
						<div class="popup-content">
							<div class="popup-content-box">
								<span class="popup-text">限定割引</span><br/>
                            	<span class="popup-text2">車検時に各種メンテナンス商品やカーディテーリングサービスを割引または無料サービスしています。</span>
							</div>

							<div class="popup-content-box">
								<span class="popup-text">土日対応</span><br/>
                            	<span class="popup-text2">土曜、日曜、祝日の予約受付や車両持ち込み(入庫)が可能です。</span>
                            </div>

							<div class="popup-content-box">
								<span class="popup-text">夜間受付</span><br/>
								<span class="popup-text2">夜19時以降の予約受付および入庫、納車が可能です。</span>
                            </div>

							<div class="popup-content-box">
								<span class="popup-text">即日完了</span><br/>
								<span class="popup-text2">無料または有料で即日（朝持ち込み夕方納車またはそれよりも短い時間）の車検が可能です。</span>
							</div>

							<div class="popup-content-box">
								<span class="popup-text">オイル交換</span><br/>
								<span class="popup-text2">車検実施時にオイル交換の無料サービスまたはオイル交換の無料チケットを配付しています。</span>
							</div>

							<div class="popup-content-box">
								<span class="popup-text">代車あり</span><br/>
								<span class="popup-text2">無料または有料で代車の用意が可能です。</span>
                            </div>

							<div class="popup-content-box">
								<span class="popup-text">引取納車</span><br/>
								<span class="popup-text2">無料または有料で引取・納車が可能です。</span>
							</div>

							<div class="popup-content-box">
								<span class="popup-text">ロードサービス</span><br/>
								<span class="popup-text2">無料または有料でロードサービスを取り扱っています。</span>
							</div>
						</div>

						<p class="popup-title">お支払い</p>
						<div class="popup-content">

							<div class="popup-content-box">
								<span class="popup-text">クレジットカード</span><br/>
								<span class="popup-text2">クレジットカード払いが可能です。(法定費用のみ現金払いの場合があります。)</span>
                            </div>

							<div class="popup-content-box">
								<span class="popup-text">分割払い</span><br/>
								<span class="popup-text2">クレジットローンが利用でき、12回以上の分割払いに対応しています。</span>
							</div>
						</div>

						<p class="popup-title">保証</p>
						<div class="popup-content">
							<div class="popup-content-box">
								<span class="popup-text">整備保証</span><br/>
								<span class="popup-text2">車検プランに整備保証が付いています。</span>
							</div>
						</div>

						<p class="popup-title">プレゼント</p>
						<div class="popup-content">

							<div class="popup-content-box">
								<span class="popup-text">グルメ</span><br/>
								<span class="popup-text2">車検を実施して頂いたお客様に食品関連のプレゼントをしています。</span>
							</div>

							<div class="popup-content-box">
								<span class="popup-text">グッズ</span><br/>
								<span class="popup-text2">車検を実施して頂いたお客様に日用品・雑貨関連のプレゼントをしています。</span>
							</div>

							<div class="popup-content-box">
								<span class="popup-text">ガソリン</span><br/>
								<span class="popup-text2">車検を実施して頂いたお客様に燃料（ガソリン・軽油）関連のプレゼントをしています。</span>
							</div>

							<div class="popup-content-box">
								<span class="popup-text">抽選</span><br/>
								<span class="popup-text2">車検を実施して頂いたお客様に抽選でプレゼントをしています。</span>
							</div>

						</div>

					</div>
				</div>
				<!-- ▲詳しく見る内容 -->
        </section>


		<section class="shop-info mt20">
        <h2 class="shop-info-sub"><span class="shop-info-sub-in">うれしい！お得な情報</span></h2>
			<nav>
{if $dsc_data != null}
				<ul class="acNavi">
					<li class="acNavi-icon acNavi-list-title">&nbsp;&nbsp;各種割引メニュー</li>
						<ul class="is-not">
{foreach from=$dsc_data item = "item" key = "key" name = "dsc_loop"}
							<li><a>{$item.db_menu_nm}{if $item.dd_dsc_nm != ""}[{$item.dd_dsc_nm}]{/if}<span class="dis-price">▲{$item.dd_dsc_price}円</span></a></li>
{/foreach}
						</ul>
				</ul><!-- /.acNavi -->
{/if}
{if $coupon_flag == "t"}
                <ul class="acNavi">
					<li class="acNavi-icon acNavi-list-title">&nbsp;&nbsp;お得なクーポン</li>
						<div class="is-not" style="display: block;">
							<div class="al-center mt20 mb20"><a href="/shop_coupon/{$shop_data.sid}/{if $type != ""}{$type}/{/if}" class="btn-reserve"><img src="/sp/images/search/courpon.png" width="30"class=" btn-courpon-icon-left"/>お得なクーポンはこちら<i class="fa fa-chevron-right btn-reserve-icon-right"></i></a></div>
						</div>
				</ul><!-- /.acNavi -->
{/if}
{if $campaign != null}
                <ul class="acNavi">
					<li class="acNavi-icon acNavi-icon_on acNavi-list-title">&nbsp;&nbsp;キャンペーン</li>
						<div class="is-not" style="display: block;">
                        	<div class="cam">
                        		<p class="cam-title">{$campaign.cam_name}</p>
                        		{if $campaign_img != ""}<img src="{$campaign_img}" alt="キャンペーン" width="270">{else}<img src="/img/user/detail/img_campaign.gif" alt="キャンペーン" width="270">{/if}
                               <p class="cam-text">
                               		{$campaign.cam_detail|nl2br}<br />
									期間：{$campaign.cam_start_date}～{$campaign.cam_end_date}
                                </p>
							</div><!-- /.cam -->
						</div>
				</ul><!-- /.acNavi -->
{/if}
            </nav>
		</section>

		<section class="shop-info">
			<h2 class="shop-info-sub"><span class="shop-info-sub-in">その他</span></h2>
            <nav>
{if $service != null}
				<ul class="acNavi">
					<li class="acNavi-icon acNavi-list-title">&nbsp;&nbsp;サービス</li>
						<div class="is-not">
                        	<div class="service">
{foreach from=$service item = "item" key = "key" name = "plan_loop"}
                            	<div class="service-box">
                        			<p class="service-title">{$item.srv_name}</p>
                            		<p class="service-text">
										{$item.srv_contents|nl2br}
                            		</p>
								</div><!-- /#service-box -->
{/foreach}
							</div>
						</div>
				</ul><!-- /.acNavi -->
{/if}
{if $add_option != null}
                <ul class="acNavi">
					<li class="acNavi-icon acNavi-list-title">&nbsp;&nbsp;オプション</li>
						<div class="is-not">
{foreach from=$add_option item = "item" key = "key" name = "plan_loop"}
                        	<div class="option">
							<p class="option-title">{$item.opt_name}</p>
                            <p class="option-text">
								{if $item.opt_price != ""}<strong>車検時特価　{$item.opt_price}</strong><br />{/if}
                            	{$item.opt_contents|nl2br}<br />
                            </p>
							</div>
{/foreach}
						</div>
				</ul><!-- /.acNavi -->
{/if}
            </nav>
		</section>

		<h2 class="shop-info-sub"><span class="shop-info-sub-in">店舗データ</span></h2>
        <table class="shop-info-table1">
        	<tr>
				<th>会社名／店舗名</th>
				<td>{$shop_data.sd_shop_nm}</td>
            </tr>

            <tr>
				<th>営業時間/休業日</th>
				<td>{$shop_data.sd_shop_open} {$shop_data.sd_shop_off}</td>
            </tr>

        	<tr>
				<th>住所</th>
				<td>
					{$shop_data.sd_shop_address}<br/>
					{if $map_flag ne "f"}{if $map != ""}<a class="map" data-mfp-src="" href="http://maps.google.co.jp/?mapf=q&hl=ja&geocode=&q={$shop_data.sd_shop_address|urlencode}" target="_blank"><img src="/sp/images/search/map.gif" width="95"/></a>{else}&nbsp;{/if}{else}<a class="map" data-mfp-src="" href="http://maps.google.co.jp/?mapf=q&hl=ja&geocode=&q={$shop_data.sd_shop_address|urlencode}" target="_blank">Googleマップ</a>のページからご確認ください。{/if}
				</td>
            </tr>

            <tr>
				<th>アクセス</th>
				<td>{$shop_data.sd_shop_access}</td>
            </tr>

            <tr>
				<th>対応クレジット</th>
				<td>
{if $card_arr.flag == "t"}
                	{if $card_arr.card1 == "t"}<span><img src="/sp/images/search/credit01.gif" height="30" alt="VISA"/></span>{/if}
                    {if $card_arr.card2 == "t"}<span><img src="/sp/images/search/credit02.gif" height="30" alt="MasterCard"/></span>{/if}
                    {if $card_arr.card3 == "t"}<span><img src="/sp/images/search/credit03.gif" height="30" alt="JCB"/></span>{/if}
                    {if $card_arr.card4 == "t"}<span><img src="/sp/images/search/credit04.gif" height="30" alt="DC"/></span>{/if}
                    {if $card_arr.card5 == "t"}<span><img src="/sp/images/search/credit05.gif" height="30" alt="AMERICANEXPRESS"/></span>{/if}
                    {if $card_arr.card6 == "t"}<span><img src="/sp/images/search/credit06.gif" height="30" alt="uc"/></span>{/if}
                    {if $card_arr.card7 == "t"}<span><img src="/sp/images/search/credit07.gif" height="30" alt="Nicos"/></span>{/if}
                    {if $card_arr.card8 == "t"}<span><img src="/sp/images/search/credit08.gif" height="30" alt="Diners"/></span>{/if}
                    {if $card_arr.card9 == "t"}<span><img src="/img/user/detail/other.gif" height="30" alt="その他"/></span>{/if}
{else}
					&nbsp;
{/if}
				</td>
            </tr>

            <tr>
				<th>TEL</th>
				<td>
					{$shop_data.sd_shop_tel}</strong> {if $shop_data.sd_tel_srvc == 't'}（店舗番号：{$shop_data.sid|string_format:"%04d"} とお伝えください）{/if}
                </td>
            </tr>


            <tr>
				<th>備考</th>
				<td>
                	{if $shop_data.sd_shop_memo != ""}{$shop_data.sd_shop_memo|nl2br}{else}&nbsp;{/if}
				</td>
            </tr>
        </table>
    </div><!-- /.shop-info -->
    <!-- ▲店舗情報 -->

	<div class="al-center">
		<img src="/sp/images/search/mitsumori-arrow2.gif" width="200" alt="まずは店舗の車検プランから無料見積もりをご利用ください" class="mt20 mb20"/><br/>
		<a href="#price" class="btn-reserve scroll"><img src="/sp/images/search/car_icon.png" width="20" class=" btn-reserve-icon-left"/>この店舗の車検プランを見る<i class="fa fa-chevron-up btn-reserve-icon-right"></i></a><br/>
        <a href="{if $search_url ne ""}{$search_url}{else}/search/index/{/if}" class="btn-back"><i class="fa fa-chevron-left btn-back-icon-left"></i>検索結果に戻る</a><br/>
	</div>

<!-- ▲内容 -->
{include file="ci:user/footersearch_sp.tpl"}
