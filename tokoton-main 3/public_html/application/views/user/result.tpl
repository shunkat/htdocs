{include file="ci:user/header.tpl"}
  <div id="content">
    <ul id="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
<!-- パンくず対応 ST -->
<?
$length = count($breadcrumb_ary);
$no = 0;    // 追加
foreach ($breadcrumb_ary as $value){
  if ($no == 0){
?>
      <li{$itemcope}>
        <a href="<?=$value['url']?>"{$itemprop_url}>
           <span{$itemprop_title}><?=$value['name']?></span>
        </a>
		<meta itemprop="position" content="1" />
      </li>
<?
  } else {
?>
      <li{$itemcope_child}>
<?
    if($no === $length-1){
?>
        <span{$itemprop_title}><?=$value['name']?></span>
		<meta itemprop="position" content="<? print $no+1 ?>" />
<?
    } else {
?>
        <a href="<?=$value['url']?>"{$itemprop_url}>
          <span{$itemprop_title}><?=$value['name']?></span>
        </a>
		<meta itemprop="position" content="<? print $no+1 ?>" />
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
<!-- パンくず対応 ED -->

    <div class="margin_top10">
		<form action="/user/search/post_control/" method="post">
	<!--  <table cellspacing="0" cellpadding="0" id="area">
	      <tr>
	        <td width="80" class="search_label">選択地域 ：</td>
	        <td class="bold">{$todoufuken}
	          <input type="submit" name="change" value="変更する"  id="change"/></td>
	      </tr>
	    </table> -->
	    {if $todoufuken !== "未選択"}
		{/if}
	    <table cellspacing="0" cellpadding="0" id="condition">
	      <tr>
	        <td width="150" id="search_type_district">-エリア-</td>
	        <td width=""><select name="region">
	            <option value="">選択して下さい</option>
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
	          </select></td>
	        <td width="" id="search_type_keyword">-- キーワード --</td>
	        <td width=""><input name="key" type="text" size="32" value="{$keyword}" /></td>
	      </tr>
	      <tr>
	        <td rowspan="3" width="150" id="search_type_option">- オプション -</td>
	        <td colspan="3"><!-- <input type="checkbox" name="option[]" value="1" id="option1"{if $option01 == "t"} checked="checked"{/if} />
	          <label for="option1">とことん24取扱い</label> -->
	          <input type="checkbox" name="option[]" value="2" id="option2"{if $option02 == "t"} checked="checked"{/if} />
	          <label for="option2"> 整備保証付</label>
	          <input type="checkbox" name="option[]" value="16" id="option16"{if $option16 == "t"} checked="checked"{/if} />
	          <label for="option16"> ロードサービス取扱い</label>
	          <input type="checkbox" name="option[]" value="15" id="option15"{if $option15 == "t"} checked="checked"{/if} />
	          <label for="option15"> 即日完了ＯＫ</label>
	          <input type="checkbox" name="option[]" value="3" id="option3"{if $option03 == "t"} checked="checked"{/if} />
	          <label for="option3"> 夜間受付ＯＫ</label>
	          <input type="checkbox" name="option[]" value="4" id="option4"{if $option04 == "t"} checked="checked"{/if} />
	          <label for="option4"> 土日対応ＯＫ</label>
	          <input type="checkbox" name="option[]" value="5" id="option5"{if $option05 == "t"} checked="checked"{/if} />
	          <label for="option5"> 代車あり</label>
	          <input type="checkbox" name="option[]" value="6" id="option6"{if $option06 == "t"} checked="checked"{/if} />
	          <label for="option6"> 引取・納車ＯＫ</label>
	        </td>
	      </tr>
	      <tr>
	        <td colspan="3" class="checkbox">
	          <input type="checkbox" name="option[]" value="7" id="option7"{if $option07 == "t"} checked="checked"{/if} />
	          <label for="option7"> キャッシュレスＯＫ</label>
			  <input type="checkbox" name="option[]" value="8" id="option8"{if $option08 == "t"} checked="checked"{/if} />
	          <label for="option8"> クレジットカード利用ＯＫ</label>
	          <input type="checkbox" name="option[]" value="9" id="option9"{if $option09 == "t"} checked="checked"{/if} />
	          <label for="option9"> グルメプレゼント</label>
	          <input type="checkbox" name="option[]" value="10" id="option10"{if $option10 == "t"} checked="checked"{/if} />
	          <label for="option10"> グッズプレゼント</label>
	          <input type="checkbox" name="option[]" value="11" id="option11"{if $option11 == "t"} checked="checked"{/if} />
	          <label for="option11"> ガソリンプレゼント</label>
	          <input type="checkbox" name="option[]" value="12" id="option12"{if $option12 == "t"} checked="checked"{/if} />
	          <label for="option12"> 抽選でプレゼント</label>
	        </td>
	      </tr>
	      <tr>
	        <td colspan="2">
	          <input type="checkbox" name="option[]" value="13" id="option13"{if $option13 == "t"} checked="checked"{/if} />
	          <label for="option13"> オイル交換サービス</label>
	          <input type="checkbox" name="option[]" value="14" id="option14"{if $option14 == "t"} checked="checked"{/if} />
	          <label for="option14"> 車検時限定割引サービス</label>
			</td>
			<td align="right"><p id="option_detail2"><a href="javascript:;" onclick="window.open('/shopoption_desc.html', 'temp_window', 'left=0,top=0,width=670,height=600,scrollbars=yes');">* オプションの詳細はこちら</a></p></td>
	      </tr>
	      <tr>
	        <td colspan="5" class="search_btn"><input type="submit" name="search" value="さらに絞り込んで検索"  id="btn_search"/>
	        </td>
	      </tr>
	    </table>
		<input type="hidden" name="pref" value="{$todoufuken_id}">
		</form>
	</div>
	<br class="clear" />

<!--20180116 エリアページ独自テキスト追加対応 ST -->
<?
  //1ページ目だったら表示(データ無しの場合は非表示)
  if($text_dispflg && $areatext_dispflg){
?>
  <p style="margin:20px 5px 40px;"><?=nl2br($area_text)?></p>
<?
  }
?>
<!--20180116 エリアページ独自テキスト追加対応 ED -->

    <div id="newsort">
    <div id="search_result">{if $todoufuken !== "未選択"}{if $region_nm == ""}{$todoufuken}{/if}{$shikuchouson}{$region_nm}の車検&nbsp;:{/if} </div><span class="gray">&nbsp;検索結果{$total_search_rows} 件 / 現在 {$loop_start}-{$loop_end} 件目を表示しています。</span></div>
    {if $total_search_rows > 50}
    <div class="">
        {$pager}
    </div>
    {/if}
<?=$this->rows ?>
    <br class="clear" />

	{foreach from=$search_arr item = "shop_arr" key = "key" name = "search_shop_loop"}

    <div class="wrappar">
	<!--<div class="list_no"><p>{$key+$loop_start}</p></div>-->
        {if $shop_arr.shop_data.shop_img != ""}
        <a href="/shop_detail/{$shop_arr.shop_data.sid}/"><img src="{$shop_arr.shop_data.shop_img}" alt="{$shop_arr.shop_data.sd_shop_nm}" class="newshoppic" border="0"></a>
		{else}
        <a href="/shop_detail/{$shop_arr.shop_data.sid}/"><img src="/img/user/detail/img_big.gif" alt="{$shop_arr.shop_data.sd_shop_nm}" class="newshoppic" border="0"></a>
		{/if}

        <div class="shopinfo">
            <div class="shopinfo_left">
                <p class="newshopname"><a href="/shop_detail/{$shop_arr.shop_data.sid}/">{$shop_arr.shop_data.sd_shop_nm}</a></p>
                <p class="shopadress">{$shop_arr.shop_data.sd_shop_address}</p>
                <p class="shopadress">アクセス：{$shop_arr.shop_data.sd_shop_access}</p>

                <!-- {if $shop_arr.shop_data.icon1 == "t"}
            	<img src="/img/user/result/icon_1.gif" alt="とことん24取扱い" width="32" height="32" />
            	{/if} -->
            	{if $shop_arr.shop_data.icon2 == "t"}
                	<img src="/img/user/result/icon_2.gif" alt="整備保証付" width="32" height="32" />
            	{/if}
            	{if $shop_arr.shop_data.icon16 == "t"}
                	<img src="/img/user/result/icon_15.gif" alt="ロードサービス取り扱い" width="32" height="32" />
            	{/if}
            	{if $shop_arr.shop_data.icon15 == "t"}
                	<img src="/img/user/result/icon_16.gif" alt="即日完了OK" width="32" height="32" />
            	{/if}
            	{if $shop_arr.shop_data.icon3 == "t"}
                	<img src="/img/user/result/icon_3.gif" alt="夜間受付" width="32" height="32" />
            	{/if}
            	{if $shop_arr.shop_data.icon4 == "t"}
                	<img src="/img/user/result/icon_4.gif" alt="土日入庫OK" width="32" height="32" />
            	{/if}
            	{if $shop_arr.shop_data.icon5 == "t"}
                	<img src="/img/user/result/icon_5.gif" alt="代車有り" width="32" height="32" />
            	{/if}
            	{if $shop_arr.shop_data.icon6 == "t"}
                	<img src="/img/user/result/icon_6.gif" alt="引取・納車OK" width="32" height="32" />
            	{/if}
            	{if $shop_arr.shop_data.icon7 == "t"}
                	<img src="/img/user/result/icon_7.gif" alt="キャッシュレスOK" width="32" height="32" />
            	{/if}
            	{if $shop_arr.shop_data.icon8 == "t"}
                	<img src="/img/user/result/icon_8.gif" alt="クレジットカード払いOK" width="32" height="32" />
            	{/if}
            	{if $shop_arr.shop_data.icon9 == "t"}
                	<img src="/img/user/result/icon_9.gif" alt="グルメプレゼント" width="32" height="32" />
            	{/if}
            	{if $shop_arr.shop_data.icon10 == "t"}
                	<img src="/img/user/result/icon_10.gif" alt="グッズプレゼント" width="32" height="32" />
            	{/if}
            	{if $shop_arr.shop_data.icon11 == "t"}
                	<img src="/img/user/result/icon_11.gif" alt="ガソリンプレゼント" width="32" height="32" />
            	{/if}
            	{if $shop_arr.shop_data.icon12 == "t"}
                	<img src="/img/user/result/icon_12.gif" alt="抽選でプレゼント" width="32" height="32" />
            	{/if}
            	{if $shop_arr.shop_data.icon13 == "t"}
                	<img src="/img/user/result/icon_13.gif" alt="オイル交換サービス" width="32" height="32" />
            	{/if}
            	{if $shop_arr.shop_data.icon14 == "t"}
                	<img src="/img/user/result/icon_14.gif" alt="車検時限定割引サービス" width="32" height="32" />
            	{/if}
            </div>
            <div class="shopinfo_right">
                <a href="/shop_detail/{$shop_arr.shop_data.sid}/" class="shop_btn"><span>店舗詳細</span><i class="fas fa-angle-double-right"></i></a><br>
              <!-- 20170327@Nagai_ST -->
              {if $shop_arr.plan_base.pb_no}
                  <a href="/link_shop/{$shop_arr.shop_data.sid}/shop_detail_estimate/{$shop_arr.plan_base.pb_no}/" class="shop_btn"><span>無料見積もり</span><i class="fas fa-angle-double-right"></i></a>
        	  {/if}
        	  <!-- 20170327@Nagai_END -->
            </div>

        </div>
        <br class="clear" />

        <div class="shop_detail_wrap">
            <div class="shopcampaign">
            <p class="newcatch"><a href="/shop_detail/{$shop_arr.shop_data.sid}/"><i class="fas fa-check-circle"></i>{$shop_arr.shop_data.sd_catch_copy}</a></p>

            <p class="newintro">{$shop_arr.shop_data.sd_intro|nl2br}</p>
            </div>

            <div class="shopprice shopprice2">
            <table class="newprice" cellspacing="0" cellpadding="0">
                  <tr>
                    <td class="label" width="20%" class="label">軽自動車</td>

                    <td class="label" width="20%" class="label">小型乗用車<br /></td>
                    <td class="label" width="21%" class="label">中型乗用車<br /></td>
                    <td class="label" width="21%" class="label">大型乗用車<br /></td>
                  </tr>
                  <tr>
                    <td class="value"><s>{$shop_arr.plan_detail.mini_price_sum|number_format}円</s><br />
                      <span class="red">{$shop_arr.plan_detail.mini_disc_price|number_format}円</span></td>
                    <td class="value"><s>{$shop_arr.plan_detail.small_price_sum|number_format}円</s><br />
                      <span class="red">{$shop_arr.plan_detail.small_disc_price|number_format}円</span></td>
                    <td class="value"><s>{$shop_arr.plan_detail.middle_price_sum|number_format}円</s><br />
                      <span class="red">{$shop_arr.plan_detail.middle_disc_price|number_format}円</span></td>

                    <td class="value"><s>{$shop_arr.plan_detail.large_price_sum|number_format}円</s><br />
                      <span class="red">{$shop_arr.plan_detail.large_disc_price|number_format}円</span></td>
                  </tr>
                </table>
            </div>
            <br clear="all" />
        </div>
    </div>

	{/foreach}
	
    <br class="clear" />
    <br class="clear" />
    <br class="clear" />
    <br class="clear" />
    <div id="newsort">
    <div id="search_result">{if $todoufuken !== "未選択"}{if $region_nm == ""}{$todoufuken}{/if}{$shikuchouson}{$region_nm}の車検&nbsp;{/if}検索結果: <span class="orange">{$total_search_rows}</span> 件 / 現在 <span class="black">{$loop_start}-{$loop_end} 件目を表示しています。</span></div>
    {if !$shakentext_dispflg}
        <div id="newpage">{$pager}</div>
    {/if}
    </div>

<!--20180116 エリアページ独自テキスト追加対応 ST -->
<?
  //1ページ目だったら表示(データ無しの場合はテンプレテキスト表示)
  if($text_dispflg){
    if($shakentext_dispflg){
?>
    <div style="margin-top: 50px;">
      <h3 class="ttl-lv3">{if $todoufuken != "" && $todoufuken !== "未選択"}{$todoufuken}{$shikuchouson}{$region_nm}の{/if}車検情報</h3>
      <p style="margin:0 5px 40px;"><?=nl2br($shaken_text)?></p>
    </div>
<?
    } else {
?>
<!--20180116 エリアページ独自テキスト追加対応 ED -->

    <!--▼地名を連結
    {assign var=tokoton_place value="$todoufuken$shikuchouson$region_nm"}
    -->
    <!--▼都道府県市区町村名を指定しテンプレートを呼び出し
    {if $tokoton_place == "神奈川県横浜市"}
    	{include file="ci:user/test.tpl"}
    {/if}
    -->
    {if $todoufuken != "" && $todoufuken !== "未選択"}
    <h3 id="searchword">{if $todoufuken != "" && $todoufuken !== "未選択"}{$todoufuken}{$shikuchouson}{$region_nm}の{/if}車検情報はとことん車検ナビで検索！こちらのページでは{if $todoufuken != "" && $todoufuken !== "未選択"}{$todoufuken}{$shikuchouson}{$region_nm}内の{/if}格安車検情報をご紹介しております。{if $todoufuken != "" && $todoufuken !== "未選択"}{$todoufuken}{$shikuchouson}{$region_nm}の{/if}とってもお得な車検探しなら、とことん車検ナビにお任せください。任意のキーワードや、オプション・プレゼント・割引サービスなどのこだわり条件でも検索可能です。</h3>
    {/if}
    <br class="clear" />

<!--20180116 エリアページ独自テキスト追加対応 ST -->
<?
    }
  }
?>
<!--20180116 エリアページ独自テキスト追加対応 ED -->

    <!-- ▼ソーシャルブックマーク-->
    <div class="sns">
    <!-- Place this tag where you want the +1 button to render. -->
    <div class="g-plusone" data-size="medium" data-annotation="none"></div>
    {literal}
    <!-- Place this tag after the last +1 button tag. -->
    <script type="text/javascript">
      window.___gcfg = {lang: 'ja'};

      (function() {
        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
        po.src = 'https://apis.google.com/js/plusone.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
      })();
    </script>
    {/literal}
    <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.tokoton-navi.com/" data-text="車検費用が驚きの3万円台から！とことん車検ナビ" data-lang="ja" data-count="none">ツイート</a>
    {literal}
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    {/literal}
    <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.tokoton-navi.com%2F&amp;send=false&amp;layout=button_count&amp;width=70&amp;show_faces=false&amp;font=tahoma&amp;colorscheme=light&amp;action=like&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:70px; height:21px;" allowTransparency="true"></iframe>
    </div>
    <br class="clear" />
    <!-- ▲ソーシャルブックマーク-->
    <br class="clear" />
    <br class="clear" />
    <div id="post" class="clf" style="margin-top:10px;">
		<h3>{if $todoufuken !== "未選択"}{$todoufuken}以外の{/if}都道府県から車検店舗を探す</h3>
		<ul id="link">
			<li><a href="/search/pref_02/">北海道</a></li>
			<li><a href="/search/pref_03/">青森県</a></li>

			<li><a href="/search/pref_04/">岩手県</a></li>
			<li><a href="/search/pref_05/">宮城県</a></li>
			<li><a href="/search/pref_06/">秋田県</a></li>
			<li><a href="/search/pref_07/">山形県</a></li>
			<li><a href="/search/pref_08/">福島県</a></li>
			<li><a href="/search/pref_09/">東京都</a></li>

			<li><a href="/search/pref_10/">神奈川県</a></li>
			<li><a href="/search/pref_11/">埼玉県</a></li>
			<li><a href="/search/pref_12/">千葉県</a></li>
			<li><a href="/search/pref_13/">茨城県</a></li>
			<li><a href="/search/pref_14/">栃木県</a></li>
			<li><a href="/search/pref_15/">群馬県</a></li>

			<li><a href="/search/pref_16/">新潟県</a></li>
			<li><a href="/search/pref_17/">富山県</a></li>
			<li><a href="/search/pref_18/">石川県</a></li>
			<li><a href="/search/pref_19/">福井県</a></li>
			<li><a href="/search/pref_20/">山梨県</a></li>
			<li><a href="/search/pref_21/">長野県</a></li>

			<li><a href="/search/pref_22/">愛知県</a></li>
			<li><a href="/search/pref_23/">岐阜県</a></li>
			<li><a href="/search/pref_24/">静岡県</a></li>
			<li><a href="/search/pref_25/">三重県</a></li>
			<li><a href="/search/pref_26/">大阪府</a></li>
			<li><a href="/search/pref_27/">兵庫県</a></li>

			<li><a href="/search/pref_28/">京都府</a></li>
			<li><a href="/search/pref_29/">滋賀県</a></li>
			<li><a href="/search/pref_30/">奈良県</a></li>
			<li><a href="/search/pref_31/">和歌山県</a></li>
			<li><a href="/search/pref_32/">鳥取県</a></li>
			<li><a href="/search/pref_33/">島根県</a></li>

			<li><a href="/search/pref_34/">岡山県</a></li>
			<li><a href="/search/pref_35/">広島県</a></li>
			<li><a href="/search/pref_36/">山口県</a></li>
			<li><a href="/search/pref_37/">徳島県</a></li>
			<li><a href="/search/pref_38/">香川県</a></li>
			<li><a href="/search/pref_39/">愛媛県</a></li>

			<li><a href="/search/pref_40/">高知県</a></li>
			<li><a href="/search/pref_41/">福岡県</a></li>
			<li><a href="/search/pref_42/">佐賀県</a></li>
			<li><a href="/search/pref_43/">長崎県</a></li>
			<li><a href="/search/pref_44/">熊本県</a></li>
			<li><a href="/search/pref_45/">大分県</a></li>

			<li><a href="/search/pref_46/">宮崎県</a></li>
			<li><a href="/search/pref_47/">鹿児島県</a></li>
			<li><a href="/search/pref_48/">沖縄県</a></li>
	</ul>
  </div>
  </div>
  <p class="text_center"><a href="#ALL" onclick="backToTop(); return false" onkeypress="backToTop(); return false">↑ページのトップへ</a></p>
  
  
  
{include file="ci:user/footer.tpl"}
