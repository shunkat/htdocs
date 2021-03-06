{include file="ci:user/header.tpl"}

  <div id="content">
    <ul id="breadcrumb">
      <li><a href="/">ホーム</a></li>
      <li><a href="/search_top/">車検をさがす</a></li>
      <li><a href="{$search_url}">検索結果</a></li>
      <li><a href="/shop_detail/{$sid}/{if $type != ""}{$type}/{/if}">店舗詳細</a></li>
      <li>クーポン</li>
    </ul>
    <br class="clear"/>
    <h2 id="coupon">クーポン</h2>
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
    <p id="desc">このページをプリントアウトまたはクーポン画面を表示して店舗にご来店ください。</p>
    <div id="coupon">
      <div id="coupon_box">
	  	<img src="/img/user/coupon/header_coupon.gif" alt="とことん車検ナビクーポンチケット" width="700" height="62" />
	  	<p id="shopname">{$shop_data.sd_shop_nm}</p>
        <pre id="coupon_list">{$shop_data.cou_contents}</pre>
        <p id="timelimit">有効期限：{$shop_data.cou_limit_date|date_format:"%Y年%m月%d日"}&nbsp;</p>
        <p id="attention">{$shop_data.cou_limit_matter|nl2br}&nbsp;</p>
        <br class="clear" />
      </div>
	  <table cellspacing="0" cellpadding="0" style="margin:0 auto; margin-top:20px;">
        <tr>
          <td width="95" class="left">店舗名</td>
          <td width="503">{$shop_data.sd_shop_nm}&nbsp;</td>
        </tr>
        <tr>
          <td class="left">電話番号</td>
          <td>{$shop_data.sd_shop_tel}&nbsp;</td>
        </tr>
        <tr>
          <td class="left">住所</td>
          <td>〒{$shop_data.sd_shop_zip}<br />{$shop_data.sd_shop_address}&nbsp;</td>
        </tr>
        <tr>
          <td class="left">アクセス</td>
          <td>{$shop_data.sd_shop_access}&nbsp;</td>
        </tr>
        <tr>
          <td class="left">営業時間</td>
          <td>{$shop_data.sd_shop_open}&nbsp;</td>
        </tr>
        <tr>
          <td class="left">休業日</td>
          <td>{$shop_data.sd_shop_off}&nbsp;</td>
        </tr>
      </table>
	  {$map}
      <!-- <div id="map">マップ</div> -->
      
	  <!-- <p id="printout" onclick="CouponPrint()">このページを印刷する</p> -->
	  <p id="printout" onclick="coupon_print({$sid})">このページを印刷する</p>
	  <p id="back"><a href="javascript:window.history.back();" >←前のページへ戻る</a></p>
    </div>
  </div>

{include file="ci:user/footer.tpl"}
