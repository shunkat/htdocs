{include file="ci:user/header.tpl"}


  <div id="content">
    <ul id="breadcrumb">
      <li><a href="/">ホーム</a></li>
      <li><a href="/search_top/">車検をさがす</a></li>
      <li><a href="{$search_url}">検索結果</a></li>
      <li><a href="/shop_detail/{$sid}/{if $type != ""}{$type}/{/if}">店舗詳細</a></li>
      <li>キャンペーン詳細</li>
    </ul>
    <br class="clear"/>
    <h2 id="campaign">キャンペーン詳細</h2>
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
    <div id="container_sub">
		<h3 id="campaign_title">{$campaign_data.cam_name}</h3>
		{if $campaign_img != ""}
			<img src="{$campaign_img}" alt="{$campaign_data.cam_name}" {$img_wh} /><br />
		{else}
			<img src="/images/detail/img_big.gif" alt="" width="350" height="250" class="noimage" /><br />
		{/if}
		<div id="detail">
			<pre>{$campaign_data.cam_detail}</pre>
			<p id="range">期間：{$campaign_data.cam_start_date} ～ {$campaign_data.cam_end_date}</p>
		</div>
	</div>
	<p id="back"><a href="javascript:window.history.back();" >←前のページへ戻る</a></p>
	<div id="bottom">
        <p id="pagetop"><a href="#ALL" onclick="backToTop(); return false" onkeypress="backToTop(); return false">↑ページのトップへ</a></p>
        <br class="clear" />
      </div>
	</div>
	

{include file="ci:user/footer.tpl"}
