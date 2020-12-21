{include file="$document_root/application/views/user/header.tpl"}
  
  <div id="content">
    <ul id="breadcrumb">
      <li><a href="/">ホーム</a></li>
      <li><a href="/search_top/">車検をさがす</a></li>
      <li>検索結果</li>
    </ul>
    <br class="clear"/>
    <h2 id="result">検索結果一覧</h2>
	
	<form action="/user/search/post_control/" method="post">
    <table cellspacing="0" cellpadding="0" id="area">
      <tr>
        <td width="80" class="search_label">選択地域 ：</td>
        <td class="bold">{$todoufuken}
          <input type="submit" name="change" value="変更する"  id="change"/></td>
      </tr>
    </table>
	
    <table cellspacing="0" cellpadding="0" id="condition">
      <tr>
        <td rowspan="4" class="search_label" width="120">絞り込み検索 ：</td>
        <td width="100" id="search_type_district">-- 地区 --</td>
        <td width="200"><select name="region">
            <option value="">選択して下さい</option>
		{foreach from=$pulldown_arr item = "item1" key = "key1" name = "subregion_loop"}
            <option value="">======{$key1}=======</option>
			{foreach from=$item1 item = "item2" key = "key2" name = "region_loop"}
            <option value="{$key2}"{if $key2 == $region_id} selected="selected"{/if}>{$item2}</option>
			{/foreach}
		{/foreach}
          </select></td>
        <td width="125" id="search_type_keyword">-- キーワード --</td>
        <td width="443"><input name="key" type="text" size="32" value="{$keyword}" /></td>
      </tr>
      <tr>
        <td rowspan="3" width="100" id="search_type_option">- オプション -</td>
        <td colspan="3"><input type="checkbox" name="option[]" value="1" id="option1"{if $option01 == "t"} checked="checked"{/if} />
          <label for="option1">とことん24取扱い</label>
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
        </td>
      </tr>
      <tr>
        <td colspan="3" class="checkbox">
          <input type="checkbox" name="option[]" value="5" id="option5"{if $option05 == "t"} checked="checked"{/if} />
          <label for="option5"> 代車あり</label>
          <input type="checkbox" name="option[]" value="6" id="option6"{if $option06 == "t"} checked="checked"{/if} />
          <label for="option6"> 引取・納車ＯＫ</label>
          <input type="checkbox" name="option[]" value="7" id="option7"{if $option07 == "t"} checked="checked"{/if} />
          <label for="option7"> キャッシュレスＯＫ</label>
		  <input type="checkbox" name="option[]" value="8" id="option8"{if $option08 == "t"} checked="checked"{/if} />
          <label for="option8"> クレジットカード利用ＯＫ</label>
          <input type="checkbox" name="option[]" value="9" id="option9"{if $option09 == "t"} checked="checked"{/if} />
          <label for="option9"> グルメプレゼント</label>
          <input type="checkbox" name="option[]" value="10" id="option10"{if $option10 == "t"} checked="checked"{/if} />
          <label for="option10"> グッズプレゼント</label>
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <input type="checkbox" name="option[]" value="11" id="option11"{if $option11 == "t"} checked="checked"{/if} />
          <label for="option11"> ガソリンプレゼント</label>
          <input type="checkbox" name="option[]" value="12" id="option12"{if $option12 == "t"} checked="checked"{/if} />
          <label for="option12"> 抽選でプレゼント</label>
          <input type="checkbox" name="option[]" value="13" id="option13"{if $option13 == "t"} checked="checked"{/if} />
          <label for="option13"> オイル交換サービス</label>
          <input type="checkbox" name="option[]" value="14" id="option14"{if $option14 == "t"} checked="checked"{/if} />
          <label for="option14"> 車検時限定割引サービス</label>
		  </td>
      </tr>
      <tr>
        <td colspan="5" class="search_btn"><input type="submit" name="search" value="検索"  id="btn_search"/>
        </td>
      </tr>
    </table>
	<input type="hidden" name="pref" value="{$todoufuken_id}">
	</form>
	
    <p id="option_detail"><a href="javascript:;" onclick="window.open('/shopoption_desc.html', 'temp_window', 'left=0,top=0,width=670,height=600,scrollbars=yes');">* オプションの詳細はこちら</a></p>
    <br class="clear" />
    <div id="sort"><strong>並び順を変更 ： </strong>{$sort_box}</div>
    <div id="corresponding_number">該当件数: <span class="orange">{$total_search_rows}</span> 件 / 現在 {$loop_start}-{$loop_end} 件目を表示しています</div>
    <div id="page">{$pager}</div>
    <br class="clear" />
	
	{foreach from=$search_arr item = "shop_arr" key = "key" name = "search_shop_loop"}
    <div class="shopheader">
      <p class="shopname"><a href="/shop_detail/{$shop_arr.shop_data.sid}/">{$shop_arr.shop_data.sd_shop_nm}</a><br />
        {$shop_arr.shop_data.rank_star}</p>
      <p class="shopnumber">店舗No.{$shop_arr.shop_data.sid|string_format:"%04d"}</p>
    </div>
    <div class="iconlist"> 
	{if $shop_arr.shop_data.icon1 == "t"}
	<img src="/img/user/result/icon_1.gif" alt="とことん24取扱い" width="32" height="32" />
	{/if}
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
    <br class="clear" />
    <div class="intro">
      <div class="intro_main">
        <p class="catch">{$shop_arr.shop_data.sd_catch_copy}</p>
		
		{if $shop_arr.shop_data.shop_img != ""}
        <img src="{$shop_arr.shop_data.shop_img}" class="shoppic">
		{else}
        <img src="/img/user/detail/img_big.gif" class="shoppic">
		{/if}
        <p class="intro">{$shop_arr.shop_data.sd_intro|nl2br}</p>
        <br class="clear" />
		{if $shop_arr.plan_base != null}
        <h5 class="recommend_plan">おすすめ車検プランはコレ！</h5>
        <h6 class="recommend_plan_name">{$shop_arr.plan_base.pb_plan_nm|nl2br}</h6>
        <table class="price" cellspacing="0" cellpadding="0">
          <tr>
            <td width="18%" class="label">種別</td>
            <td width="20%" class="label">軽自動車</td>
            <td width="20%" class="label">小型乗用車<br />
              (1000kg以下)</td>
            <td width="21%" class="label">中型乗用車<br />
              (1001kg～1500kg)</td>
            <td width="21%" class="label">大型乗用車<br />
              (1501kg～2000kg)</td>
          </tr>
          <tr>
            <td class="label">費用合計<br />
              最大割引後</td>
            <td class="value">{$shop_arr.plan_detail.mini_price_sum|number_format}円<br />
              <span class="orange">{$shop_arr.plan_detail.mini_disc_price|number_format}円</span></td>
            <td class="value">{$shop_arr.plan_detail.small_price_sum|number_format}円<br />
              <span class="orange">{$shop_arr.plan_detail.small_disc_price|number_format}円</span></td>
            <td class="value">{$shop_arr.plan_detail.middle_price_sum|number_format}円<br />
              <span class="orange">{$shop_arr.plan_detail.middle_disc_price|number_format}円</span></td>
            <td class="value">{$shop_arr.plan_detail.large_price_sum|number_format}円<br />
              <span class="orange">{$shop_arr.plan_detail.large_disc_price|number_format}円</span></td>
          </tr>
        </table>
		{/if}
      </div>
      <div class="otoku">
	  
	  {if $shop_arr.campagin != null}
        <h5 class="campaign_header">キャンペーン</h5>
        <div class="campaign_box">
          <h6 class="campaign_title">{$shop_arr.campagin.cam_name}</h6>
          <p class="campaign_desc">{$shop_arr.campagin.cam_detail|nl2br}</p>
          <p class="campaign_period">期間：{$shop_arr.campagin.cam_start_date}～{$shop_arr.campagin.cam_end_date}</p>
        </div>
	  {/if}
	  {if $shop_arr.service != null}
        <h5 class="service_header">サービス</h5>
        <div class="service_box">
          <ul class="service_title">
		   {foreach from=$shop_arr.service item = "service" key = "service_key" name = "service_loop"}
            <li>{$service.srv_name}</li>
		   {/foreach}
          </ul>
        </div>
	  {/if}
      </div>
	  
      <br class="clear" />
      <div class="shopdata">
        <p class="shopdata">住所：{$shop_arr.shop_data.sd_shop_address}<br />
          アクセス：{$shop_arr.shop_data.sd_shop_access}</p>
        <p class="btn_detail"><a href="/shop_detail/{$shop_arr.shop_data.sid}/">詳細はこちら</a></p>
        <br class="clear" />
      </div>
    </div>
	{/foreach}
	
    <br class="clear" />
    <br class="clear" />
    <br class="clear" />
    <br class="clear" />
    <div id="page_bottom">{$pager}</div>
    <p id="pagetop"><a href="#ALL" onclick="backToTop(); return false" onkeypress="backToTop(); return false">↑ページのトップへ</a></p>
    <br class="clear" />
    <br class="clear" />
  </div>
  
  
  
{include file="$document_root/application/views/user/footer.tpl"}
