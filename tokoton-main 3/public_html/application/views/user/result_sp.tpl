{include file="ci:user/headersearch_sp.tpl"}

<link href="/sp/css/search.css" rel="stylesheet" type="text/css" />
<!-- lightbox用CSS-->
<link href="/sp/css/colorbox.css" rel="stylesheet" type="text/css" />
<link href="/sp/css/search_result_sp_181128.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="/sp/js/jquery.colorbox-min.js"></script>

<!-- モバイル用アコーディオン -->
{literal}
<script type="text/javascript">
$(function(){
	$("#acMenu dt").on("click", function() {
		$(this).next().slideToggle();
	});
	$(".pref-list-title").on("click", function() {
		$(this).next().slideToggle();
	});
	$(".c-icon").on("click", function() {
		$(this).toggleClass("c-icon_on");
	});
	$(".g-icon").on("click", function() {
		$(this).toggleClass("g-icon_on");
	});
	$(".pref-icon").on("click", function() {
		$(this).toggleClass("pref-icon_on");
	});
});


$(function() {
    $(".inline").colorbox({
    inline:true,
    maxWidth:"90%",
    maxHeight:"90%",
    opacity: 0.7
  });
});

/*20180116 エリアページ独自テキスト追加対応 ST*/
$(function() {
    $(".pref-accBtn").on("click", function() {
        $(".pref-txt").toggleClass("acc-pref");
        if($(".pref-txt").hasClass("acc-pref")){
            $(this).text("ー閉じる").css("background","#ccc");
        } else {
            $(this).text("＋もっと読む").css("background","");
        }

    });
    $(".accBox dt").on("click", function() {
        $(this).next().slideToggle();
    });
});
/*20180116 エリアページ独自テキスト追加対応 ED*/

</script>

</script>
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
        <div id="header_right" style="box-sizing: content-box">
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

    
   <div class="area-list">
   		<!--20181217古賀修正-->
        <h1>{if $todoufuken != "" && $todoufuken !== "未選択"}{if $region_nm == ""}{$todoufuken}{/if}{$shikuchouson}{$region_nm}の車検一覧{else}車検検索結果一覧{/if}</h1>
        <!--/20181217古賀修正-->
        <!--<h2>{if $todoufuken != "" && $todoufuken !== "未選択"}{$todoufuken}{$shikuchouson}{$region_nm}の{/if}車検一覧</h2>-->
        <a href="#acMenu">条件を変更する</a>
    </div>
    
    <div class="search-result">
        <p class="result_num"><span class="number">{$total_search_rows}件</span>（{$pager_sp.center_msg}）</p>
        <div class="result_sort">
            <!--<a href="#" class="result_recommend on">おすすめ順</a>-->
            <!--<a href="#" class="result_cheap off">安い順</a>-->
        </div>
    </div>    
  
  		<!-- ▼検索結果 -->
		<section>
			<br clear="all">
			<!-- ▽店舗 -->
{foreach from=$search_arr item = "shop_arr" key = "key" name = "search_shop_loop"}
			<article class="shop-unit">
	            <p class="shop-unit-title arrow-shop"><a href="/shop_detail/{$shop_arr.shop_data.sid}/">{$shop_arr.shop_data.sd_shop_nm}</a></p>
                        <div class="shop-content clearfix">
                        <!--店舗画像-->
                        <div class="shop-img">
	                        <a href="/shop_detail/{$shop_arr.shop_data.sid}/">
                                {if $shop_arr.shop_data.shop_img != ""}
                                    <img src="{$shop_arr.shop_data.shop_img}" alt="{$shop_arr.shop_data.sd_shop_nm}" border="0" style=" width:100px;">
                                {else}
                                    <img src="/img/user/detail/img_big.gif" alt="{$shop_arr.shop_data.sd_shop_nm}" border="0" style=" width:100px;">
                                {/if}
                            </a>
					    </div>
					    <!--店舗情報-->
					    <div class="shop-info">
					    <!--店舗情報リンク-->
					    <a href="/link_shop/{$shop_arr.shop_data.sid}/search2/{$shop_arr.plan_base.pb_no}/" class="shop-info-link">お見積り</a>
						<table>
							<tbody>
							    <tr>
								    <td width="100%" class="shop-content-add">{$shop_arr.shop_data.sd_shop_address}</td>
							    </tr>
							    <tr>
								    <td width="100%" class="shop-content-price"><div class="is-red">最大割引後：{$shop_arr.plan_detail.maxdiscountprice|number_format}円～</div></td>
							    </tr>
						    </tbody>
						</table>
                        <!-- 無料見積り -->
                        {if $shop_arr.plan_base.pb_no}
						<div class="spEstimateBtn">
						    <a href="/shop_detail/{$shop_arr.shop_data.sid}/">店舗詳細を見る</a>
						</div>
                        {/if}
					    </div><!-- /.shop-info -->
                    </div><!-- /.shop-content -->
				<!--店舗コメント-->
                <div class="shop-introduce"><p>{$shop_arr.shop_data.sd_catch_copy}</p></div>
			</article>
{/foreach}
			<!-- △店舗 -->
		</section>
		<!-- ▲検索結果 -->

		<br clear="all">
		<!-- ▼pager -->
		<div class="pager-wrap">
			<div class="pager-left">
{if $pager_sp.left_link != ""}
				<a href="{$pager_sp.left_link}">
					<p class="pager-text"><img src="/sp/images/search/arrow-left.png" width="8"> 前へ</p>
				</a>
{/if}
			</div>
			<div class="pager-center">
				<p class="pager-text">{$pager_sp.center_msg}</p>
			</div>
			<div class="pager-right">
{if $pager_sp.right_link != ""}
			<a href="{$pager_sp.right_link}">
				<p class="pager-text">次へ <img src="/sp/images/search/arrow-right.png" width="8"></p>
			</a>
{/if}
			</div>
		</div>
		<!-- ▲pager -->
        

		<!-- ▼現在の条件 --><!--
		<div class="pref-search-result">
			<table>
				<tr>
					<th><img src="/sp/images/search/s1.gif" width="15"></th>
					<td> {if $todoufuken != "" && $todoufuken !== "未選択"}{$todoufuken}{$shikuchouson}{$region_nm}{/if}</td>
				</tr>
				<tr>
					<th><img src="/sp/images/search/s2.gif" width="15"></th>
					<td>{$chkoption_name}</td>
				</tr>
			</table>
		</div>
		--><!-- ▲現在の条件 -->
		<form name="search_form" id="search_form" action="/user/search/post_control/" method="post">
    <!-- ▼検索絞り込みフォーム -->
    <dl id="acMenu">
        <dt class="c-icon">条件を変更する</dt>
        <dd class="acMenu-child">

<!--20181217古賀修正ここから-->
{if $todoufuken !== "未選択"}
{/if}
{if $todoufuken != "" && $todoufuken !== "未選択"}
		<div class="shop-search-select-wrap" style="background:none;margin-bottom:40px;">
        	<input type="hidden" name="pref" value="{$todoufuken_id}">
			<select class="shop-search-select" name="region" style="padding:5px;height:40px;">
				<option value="">市区町村を選択して下さい</option>
                {foreach from=$pulldown_arr item = "item1" key = "SubRegionID" name = "subregion_loop"}
				{foreach from=$item1 item = "item2" key = "SubRegionName" name = "region_loop"}
					{if $SubRegionName !== "市部"}
	            <option value="sb{$SubRegionID}" {if "sb"|cat:$SubRegionID == $region_id} selected="selected"{/if}>└{$SubRegionName}（{$SubRegionCntAry[$SubRegionID]}件）</option>
					{/if}
					{foreach from=$item2 item = "item3" key = "RegionID" name = "region_loop"}
	            <option value="{$RegionID}"{if $RegionID == $region_id} selected="selected"{/if}>{if $SubRegionName !== "市部"}　{if $SubRegionName !== "23区"}{$SubRegionName}{/if}{$item3}{else}{$item3}{/if}</option>
					{/foreach}
				{/foreach}
			{/foreach}
   			</select>
		</div>
{/if}
<!--20181217古賀修正ここまで-->

          <div class="acMenu-child_txtBox">
            <!--<p class="acMenu-child_txt">※複数選択できます</p>-->
            <a href="#inline-content" class="btn_middle_arw inline"><span class="arrow02">条件の詳細を確認する</span></a>
          </div>

          <!--モーダルで表示させる要素-->
          <div style="display: none;">
          <section id="inline-content">
            <h3 class="ttl-lv3">各条件について</h3>
            <table class="table-list01">
	            <colgroup>
                <col style="width:40%;" >
  	          </colgroup>
              <tbody>
                <tr>
                <th><img src="/sp/images/icn_card.png" alt=""><span style="font-size:9px;">カード払い可</span></th>
                    <td>カード払いが可能です。<br><span style="font-size:10px;">※法定費用は現金払いの場合があります。</span></td>
                </tr>
                <tr>
                    <th><img src="/sp/images/icn_soku.png" alt="">即日完了</th>
                    <td>無料または有料で朝持ち込み夕方納車の車検が 可能です。</td>
                </tr>
                <tr>
                    <th><img src="/sp/images/icn_donichi.png" alt="">土日対応</th>
                    <td>土曜、日曜、祝日の予約受付や車両持ち込み(入庫)が可能です。</td>
                </tr>
                <tr>
                    <th><img src="/sp/images/icn_daisya.png" alt="">代車あり</th>
                    <td>無料または有料で代車の用意が可能です。</td>
                </tr>
                <tr>
                    <th><img src="/sp/images/icn_hosyo.png" alt="">整備保証</th>
                    <td>車検プランに整備保証が付いています。</td>
                </tr>
                <tr>
                    <th><img src="/sp/images/icn_oil.png" alt="">オイル交換</th>
                    <td>オイル交換の無料サービスまたは無料チケットを配布します。</td>
                </tr>
                <tr>
                    <th><img src="/sp/images/icn_bunkatsu.png" alt="">分割払い</th>
                    <td>クレジットカード利用時に12回以上の分割払いに 対応しています。</td>
                </tr>
                <tr>
                    <th><img src="/sp/images/icn_hikisya.png" alt="">引車納車</th>
                    <td>無料または有料で引取・納車が可能です。</td>
                </tr>
                <tr>
                    <th><img src="/sp/images/icn_yakan.png" alt="">夜間受付</th>
                    <td>夜19時以降の予約受付および入庫・納車が可能です。</td>
                </tr>
                <tr>
                    <th><img src="/sp/images/icn_road.png" alt=""><span style="font-size:8px;">ロードサービス</span></th>
                    <td>無料または有料のロードサービスを扱っています。</td>
                </tr>
                <tr>
                    <th><img src="/sp/images/icn_gentei.png" alt="">限定割引</th>
                    <td>整備やカーディテーリングを割引・無料にてサービスします。</td>
                </tr>
                <tr>
                    <th><img src="/sp/images/icn_gasorin.png" alt="">ガソリン</th>
                    <td>燃料（ガソリン・軽油）関連のプレゼントをしています。</td>
                </tr>
                <tr>
                    <th><img src="/sp/images/icn_gurume.png" alt="">グルメ</th>
                    <td>グルメプレゼントをしています。</td>
                </tr>
                <tr>
                    <th><img src="/sp/images/icn_goods.png" alt="">グルメ</th>
                    <td>日用品・雑貨関連のプレゼントをしています。</td>
                </tr>
                <tr>
                    <th><img src="/sp/images/icn_cyusen.png" alt="">抽選</th>
                    <td>抽選でプレゼントをしています。</td>
                </tr>
              </tbody>
            </table>
          </section>
          </div>

          <div class="optionBox">
            <ul class="optionList type03">
            <li>
            <input type="checkbox" name="option[]" id="option_card"value="8" {if $option08 == "t"} checked="checked"{/if}>
            <label for="option_card" class="label-option01"><p class="option-ttl"><span style="font-size:12px;">カード払い可</span><img src="/sp/images/icn_card.png" alt=""></p></label>
            </li>
            <li>
            <input type="checkbox" name="option[]" id="option_soku" value="15" {if $option15 == "t"} checked="checked"{/if}>
            <label for="option_soku" class="label-option01"><p class="option-ttl"><span>即日完了</span><img src="/sp/images/icn_soku.png" alt=""></p>
            <p class="option-comment"></p></label>
            </li>
            <li>
            <input type="checkbox" name="option[]" id="option_donichi" value="4" {if $option04 == "t"} checked="checked"{/if}>
            <label for="option_donichi" class="label-option01"><p class="option-ttl"><span>土日対応</span><img src="/sp/images/icn_donichi.png" alt=""></p></label>
            </li>
            <li>
            <input type="checkbox" name="option[]" id="option_daisya" value="5" {if $option05 == "t"} checked="checked"{/if}>
            <label for="option_daisya" class="label-option01"><p class="option-ttl"><span>代車あり</span><img src="/sp/images/icn_daisya.png" alt=""></p></label>
            </li>
            <li>
            <input type="checkbox" name="option[]" id="option_hosyo" value="2" {if $option02 == "t"} checked="checked"{/if}>
            <label for="option_hosyo"><p class="option-ttl"><span>整備保証</span><img src="/sp/images/icn_hosyo.png" alt=""></p></label>
            </li>
            <li>
            <input type="checkbox" name="option[]" id="option_oil" value="13" {if $option13 == "t"} checked="checked"{/if}>
            <label for="option_oil"><p class="option-ttl"><span>オイル交換</span><img src="/sp/images/icn_oil.png" alt=""></p></label>
            </li>
            <li>
            <input type="checkbox" name="option[]" id="option_bunkatsu" value="7" {if $option07 == "t"} checked="checked"{/if}>
            <label for="option_bunkatsu"><p class="option-ttl"><span>分割払い</span><img src="/sp/images/icn_bunkatsu.png" alt=""></p></label>
            </li>
            <li>
            <input type="checkbox" name="option[]" id="option_hikisya" value="6" {if $option06 == "t"} checked="checked"{/if}>
            <label for="option_hikisya"><p class="option-ttl"><span>引車納車</span><img src="/sp/images/icn_hikisya.png" alt=""></p></label>
            </li>
            <li>
            <input type="checkbox" name="option[]" id="option_yakan" value="3" {if $option03 == "t"} checked="checked"{/if}>
            <label for="option_yakan"><p class="option-ttl"><span>夜間受付</span><img src="/sp/images/icn_yakan.png" alt=""></p>
            </label>
            </li>
            <li>
            <input type="checkbox" name="option[]" id="option_road" value="16" {if $option16 == "t"} checked="checked"{/if}>
            <label for="option_road"><p class="option-ttl"><span style="font-size:11px;">ロードサービス</span><img src="/sp/images/icn_road.png" alt=""></p></label>
            </li>
            <li>
            <input type="checkbox" name="option[]" id="option_gentei" value="14" {if $option14 == "t"} checked="checked"{/if}>
            <label for="option_gentei"><p class="option-ttl"><span>限定割引</span><img src="/sp/images/icn_gentei.png" alt=""></p></label>
            </li>
            <li>
            <input type="checkbox" name="option[]" id="option_gasorin" value="11" {if $option11 == "t"} checked="checked"{/if}>
            <label for="option_gasorin"><p class="option-ttl"><span>ガソリン</span><img src="/sp/images/icn_gasorin.png" alt=""></p></label>
            </li>
            <li>
            <input type="checkbox" name="option[]" id="option_gurume" value="9" {if $option09 == "t"} checked="checked"{/if}>
            <label for="option_gurume"><p class="option-ttl"><span>グルメ</span><img src="/sp/images/icn_gurume.png" alt=""></p></label>
            </li>
            <li>
            <input type="checkbox" name="option[]" id="option_goods" value="10" {if $option10 == "t"} checked="checked"{/if}>
            <label for="option_goods"><p class="option-ttl"><span>グッズ</span><img src="/sp/images/icn_goods.png" alt=""></p></label>
            </li>
            <li>
            <input type="checkbox" name="option[]" id="option_cyusen" value="12" {if $option12 == "t"} checked="checked"{/if}>
            <label for="option_cyusen"><p class="option-ttl"><span>抽選</span><img src="/sp/images/icn_cyusen.png" alt=""></p></label>
            </li>
            </ul>
          </div><!--/.optionBox-->
          
			<div class="btn_submit_area">
          		<button type="submit" value="検索" class="btn-submit" onClick="javascript;document.search_form.submit();return false;"><span>検索する</span></button>
            </div>
	      </dd>
  	  </dl>


<!--20180116 エリアページ独自テキスト追加対応 ST -->
<?
  //1ページ目だったら表示(データ無しの場合はテンプレテキスト表示)
  if($text_dispflg && $shakentext_dispflg){
?>
{if $todoufuken != "" && $todoufuken !== "未選択"}
    <dl class="accBox">
      <dt class="c-icon">{if $todoufuken != "" && $todoufuken !== "未選択"}{$todoufuken}{$shikuchouson}{$region_nm}の{/if}車検情報</dt>
      <dd class="accBox-child"><?=nl2br($shaken_text)?></dd>
    </dl>
{/if}
<?
  }
?>
<!--20180116 エリアページ独自テキスト追加対応 ED -->

<!--20180116 エリアページ独自テキスト追加対応 ST -->
<?
  //1ページ目だったら表示(データ無しの場合は非表示)
  if($text_dispflg && $areatext_dispflg){
?>
{if $todoufuken != "" && $todoufuken !== "未選択"}
  <p class="pref-txt acc-pref-txt"><?=nl2br($area_text)?></p>
  <a href="#" class="pref-accBtn" style="margin-bottom:18px;">+もっと読む</a>
{/if}
<?
  }
?>
<!--20180116 エリアページ独自テキスト追加対応 ED -->


    <section>
    	<div id="free_box">
        <div class="title01">
			<h3><span><img src="/sp/images/common/title_icon.png" width="20" height="12"></span>フリーワードから車検を探す</h3>
		</div>
        <form action="http://<?= $_SERVER['HTTP_HOST'] ?>/user/search/post_control/" method="post" name="keyword_form2">
        	<div id="free_serch">
        		<input name="key" type="text" class="text_box" value="" placeholder="地域・市町村名から探す" id="freeword2" onClick="textClear(this);" />
        		<button type="submit" value="検索" class="css3button_free" onClick="document.keyword_form2.submit();">検索</button>
                <br class="clear">
            </div>
        </form>
        <br class="clear">
        </div>
	</section>

    <section>
        <div class="title03">
			<h3><span><img src="/sp/images/common/title_icon.png" width="20" height="12"></span>車検ナビに関する情報</h3>
		</div>
	  	<div class="about_us">
			<ul>
				<li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/sp/"><span>車検TOP</span></a></li>
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
        	<li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/"><img src="/sp/images/common/pc.png" width="158" height="33" alt="PCサイトはこちら"></a></li>
        </ul>
  	</div>
        <address>Copyright(C)2008-<?= date('Y') ?> Tokoton Shaken Navi All Rights Reserved.</address>
    </footer>
    <!--▲footer-->
    
      <div id="modal">
    <p class="close"><a href="javascript:$.pageslide.close()">閉じる</a></p>
    <h2>■メニュー</h2>
    <ul>
    <li><a href="http://{$smarty.server.HTTP_HOST}/sp/">車検TOP</a></li>
    </ul>
    <h2>■店舗検索</h2>
    <ul>
    <li><a href="http://{$smarty.server.HTTP_HOST}/sp/search_top/">車検を探す</a></li>
    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_02">北海道</a></li>
    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_03">青森県</a></li>
    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_04">岩手県</a></li>
    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_05">宮城県</a></li>
    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_06">秋田県</a></li>
    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_07">山形県</a></li>
    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_08">福島県</a></li>
    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_09">東京都</a></li>
    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_10">神奈川県</a></li>
    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_11">埼玉県</a></li>
    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_12">千葉県</a></li>
    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_13">茨城県</a></li>
    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_14">栃木県</a></li>
    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_15">群馬県</a></li>
    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_16">新潟県</a></li>
    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_17">富山県</a></li>
    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_18">石川県</a></li>
    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_19">福井県</a></li>
    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_20">山梨県</a></li>
    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_21">長野県</a></li>
    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_22">愛知県</a></li>
    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_23">岐阜県</a></li>
    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_24">静岡県</a></li>
    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_25">三重県</a></li>
    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_26">大阪府</a></li>
    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_27">兵庫県</a></li>
    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_28">京都府</a></li>
    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_29">滋賀県</a></li>
    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_30">奈良県</a></li>
    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_31">和歌山県</a></li>
    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_32">鳥取県</a></li>
    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_33">島根県</a></li>
    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_34">岡山県</a></li>
    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_35">広島県</a></li>
    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_36">山口県</a></li>
    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_37">徳島県</a></li>
    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_38">香川県</a></li>
    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_39">愛媛県</a></li>
    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_40">高知県</a></li>
    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_41">福岡県</a></li>
    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_42">佐賀県</a></li>
    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_43">長崎県</a></li>
    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_44">熊本県</a></li>
    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_45">大分県</a></li>
    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_46">宮崎県</a></li>
    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_47">鹿児島県</a></li>
    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_48">沖縄県</a></li>

    </ul>
    <h2>■お役立ちコンテンツ</h2>
    <ul>
    <li><a href="http://{$smarty.server.HTTP_HOST}/sp/knowledge/knowledge_1.php">車検のいろは</a></li>
    </ul>
    <h2>■とことん車検ナビに関する情報</h2>
    <ul>
    <li><a href="http://{$smarty.server.HTTP_HOST}/sp/useinfo/">とことん車検ナビとは</a></li>
    <li><a href="http://{$smarty.server.HTTP_HOST}/sp/faq/">よくある質問</a></li>
    <li><a href="http://{$smarty.server.HTTP_HOST}/sp/rules/">利用規約</a></li>
    <li><a href="http://{$smarty.server.HTTP_HOST}/sp/privacy/">プライバシーポリシー</a></li>
    <li><a href="http://{$smarty.server.HTTP_HOST}/sp/company/">運営会社</a></li>
    </ul>
    <h2>■その他</h2>
    <ul>
    <li><a href="http://{$smarty.server.HTTP_HOST}/keisai.html">掲載をお考えの方</a></li>
    </ul>
    <p class="close"><a href="javascript:$.pageslide.close()">閉じる</a></p>
  </div>
  {literal}
  <script type="text/javascript" src="/sp/js/jquery.pageslide.min.js"></script>
  <script>
  /* Default pageslide, moves to the right */
  $(".first").pageslide();

  /* Slide to the left, and make it model (you'll have to call $.pageslide.close() to close) */
  $(".second").pageslide({ direction: "left", modal: true });
  </script>
    
    
    

    <script type="text/javascript">var smnAdvertiserId = '00004987';</script><script type="text/javascript" src="//cd.ladsp.com/script/pixel.js"></script>

    <!-- リマーケティングタグ_Google ST -->
	<script type="text/javascript">
	/* <![CDATA[ */
	var google_conversion_id = 846813654;
	var google_custom_params = window.google_tag_params;
	var google_remarketing_only = true;
	/* ]]> */
	</script>
	<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
	</script>
	<noscript>
	<div style="display:inline;">
	<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/846813654/?guid=ON&amp;script=0"/>
	</div>
	</noscript>
	<!-- リマーケティングタグ_Google ED -->

	<!-- リターゲティングタグ_YDN ST -->
	<!-- Yahoo Code for your Target List -->
	<script type="text/javascript" language="javascript">
	{literal}
	/* <![CDATA[ */
	var yahoo_retargeting_id = 'LN3Q3C91TN';
	var yahoo_retargeting_label = '';
	var yahoo_retargeting_page_type = '';
	var yahoo_retargeting_items = [{item_id: '', category_id: '', price: '', quantity: ''}];
	/* ]]> */
	{/literal}
	</script>
	<script type="text/javascript" language="javascript" src="//b92.yahoo.co.jp/js/s_retargeting.js"></script>
	<!-- リターゲティングタグ_YDN ED -->
  </div>