{include file="ci:user/headersearch_sp.tpl"}

<link href="/sp/css/search.css" rel="stylesheet" type="text/css" />
<!-- lightbox用CSS-->
<link href="/sp/css/colorbox.css" rel="stylesheet" type="text/css" />

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
</script>

</script>
{/literal}

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
		<div class="breadcrumb_list">
			<img src="/sp/images/search/home.png" width="13"/> ホーム > 車検を探す > {if $todoufuken != "" && $todoufuken !== "未選択"}{$todoufuken}{$shikuchouson}{$region_nm}の{/if}検索結果
		</div>

		<!-- ▼現在の条件 -->
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
		<!-- ▲現在の条件 -->
		<form name="search_form" id="search_form" action="/user/search/post_control/" method="post">
    <!-- ▼検索絞り込みフォーム -->
    <dl id="acMenu">
        <dt class="c-icon">&nbsp;&nbsp;こだわり条件を選ぶ</dt>
        <dd class="acMenu-child">



		<div class="shop-search-select-wrap" style="background:none;margin-bottom:40px;">
			<select class="shop-search-select" name="pref" style="padding:5px;height:40px;">
				<option value="">都道府県を選択して下さい</option>
{foreach from=$pref_arr item = "item1" key = "key1" name = "todoufuken_loop"}
				<option value="{$key1}"{if $key1 == $todoufuken_id} selected="selected"{/if}>{$item1}</option>
{/foreach}
			</select>
		</div>

          <div class="acMenu-child_txtBox">
            <p class="acMenu-child_txt">※複数選択できます</p>
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

          <button type="submit" value="検索" class="btn-submit red" onclick="javascript;document.search_form.submit();return false;"><span class="arrow">この条件で再検索する</span></button>
	      </dd>
  	  </dl>

		<!-- ▼検索結果 -->
		<section>
			<p class="result_num">検索結果<span class="is-red">{$total_search_rows}</span>件</p>
			<br clear="all">

			<!-- ▽店舗 -->
{foreach from=$search_arr item = "shop_arr" key = "key" name = "search_shop_loop"}
			<article class="shop-unit">
				<a href="/link_shop/{$shop_arr.shop_data.sid}/search" class="shop-unit-link">
					<h1 class="shop-unit-title">{$shop_arr.shop_data.sd_shop_nm}</h1>
					<center><img src="/sp/images/search/sankaku.gif" style="padding-top:-4px; width:100%;"></center>
			{if $shop_arr.shop_data.shop_img != ""}
					<img src="{$shop_arr.shop_data.shop_img}" alt="{$shop_arr.shop_data.sd_shop_nm}" class="newshoppic" border="0">
					{else}
					<img src="/img/user/detail/img_big.gif" alt="{$shop_arr.shop_data.sd_shop_nm}" class="newshoppic" border="0">
			{/if}
					<div class="shop-content">
						<table>
							<tr>
								<th width="100%" style="font-weight:normal;color:#333;">{$shop_arr.shop_data.sd_shop_address}</th>
								<td><img src="/sp/images/search/shop-info-arrow.gif" width="90"></td>
							</tr>
							<tr>
								<th width="100%" class="shop-content-price"><div class="is-red">最大割引後：{$shop_arr.plan_detail.maxdiscountprice|number_format}円～</div></th>
							</tr>
						</table>
					</div><!-- /.shop-content -->
				</a>
				<!-- 20170327@Nagai_ST -->
				{if $shop_arr.plan_base.pb_no}
				<div class="spEstimateBtn">
					<a href="/link_shop/{$shop_arr.shop_data.sid}/search2/{$shop_arr.plan_base.pb_no}/"><p>この店舗で無料見積り</p></a>
				<div>
				{/if}
				<!-- 20170327@Nagai_ED -->
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
        	<li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/"><img src="/sp/images/common/pc.png" width="158" height="33" alt="PCサイトはこちら"></a></li>
        </ul>
  	</div>
        <address>Copyright(C)2008-<?= date('Y') ?> Tokoton Shaken Navi All Rights Reserved.</address>
    </footer>
    <!--▲footer-->

    <script type="text/javascript">var smnAdvertiserId = '00004987';</script><script type="text/javascript" src="//cd.ladsp.com/script/pixel.js"></script>
