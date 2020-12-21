<?

    require_once 'glossary_object.php';
    $var_view_object = $var_view_object_list[$_GET['url']];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="<?= $var_view_object['keywords'] ?>,車検,得,コツ,限定割引,お得,プレゼント,クレジットカード,利用" />
<meta name="description" content="<?= $var_view_object['description'] ?>車検の知識をしっかり押さえて、自分に合った車検を選ぼう！" />
<title><?= $var_view_object['title'] ?> | とことん車検ナビ</title>
<meta name="viewport" content="width=920" />
<link href="/css/user/common_new.css" rel="stylesheet" type="text/css" />
<link href="/css/user/glossary.css" rel="stylesheet" type="text/css" />
<link href="http://<?= $_SERVER['HTTP_HOST'] ?>/favicon.ico" rel="icon" type="image/x-icon" />
<link rel="canonical" href="http://<?= $_SERVER['HTTP_HOST'] ?>/glossary/<?= $_GET['url'] ?>" />
<script type="text/javascript" src="/js/main.js"></script>
<script type="text/javascript" src="/js/rollover.js"></script>
<script type="text/javascript" src="/js/smartRollover.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script type="text/javascript">
// ページスクロール

$(function(){
    $('a[href^=#]').click(function() {
        var speed = 500;
        var href= $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        $($.browser.safari ? 'body' : 'html').animate({scrollTop:position}, speed, 'swing');
        return false;
    });
});
</script>
<!-- 2018/11/20 google_analytics差し替え対応 ST -->
<? require_once ('../application/views/user/google_analytics.tpl');?>
<!-- 2018/11/20 google_analytics差し替え対応 ED -->

</head>
<body onload="MM_preloadImages('/img/user/tokoton24/btn_shoplist.gif','img/user/knowledge/btn_presentsearch_r.gif','images/knowledge/serch_but3_mo.jpg','images/knowledge/serch_but4_mo.jpg')">
<div id="wrapper">
<div id="container">
  <div id="header">
    <p id="title"><a href="http://<?= $_SERVER['HTTP_HOST'] ?>" title="とことん車検ナビ"><img src="/img/user/title.gif" alt="とことん車検ナビ" /></a></p>
    <h1><?= $var_view_object['h1'] ?>|どこより格安料金で便利なお見積りなら「とことん車検ナビ」</h1>
    <ul id="submenu">
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/sitemap.html">サイトマップ</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/privacy.html">プライバシーポリシー</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/rules.html">利用規約</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/glossary.php">車検用語集</a></li>
        <li id="menu_end"><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/useinfo.html">とことん車検ナビとは？</a></li>
    </ul>
    <br class="clear" />
    <ul id="mainmenu">
      <li><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/"> ホーム</a></li>
      <li><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/search_top/"> 車検を探す</a></li>
      <li><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/knowledge_1.php"> 車検のいろは</a></li>
      <li><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/faq/"> よくある質問</a></li>
      <li><a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>/inquiry.html"> お問い合わせ</a></li>
      <li><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/keisai.html"> 掲載をお考えの方</a></li>
    </ul>
    <br class="clear" />
  </div>
  <div id="content">
    <ul id="breadcrumb">
      <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/">ホーム</a></li>
      <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/glossary.php">車検用語集</a></li>
      <li><?= $var_view_object['main_li_tree'] ?></li>
    </ul>
    <br class="clear"/>
    <br />
    <h2 id="knowledge"><img src="/images/glossary/pagetitle_glossary.gif" width="110" height="20" alt="車検用語集" /></h2>
    <!-- ▼ソーシャルブックマーク-->
    <div class="sns">
    <!-- Place this tag where you want the +1 button to render. -->
    <div class="g-plusone" data-size="medium" data-annotation="none"></div>
    <!-- Place this tag after the last +1 button tag. -->
    <script type="text/javascript">
      window.___gcfg = {lang: 'ja'};

      (function() {
        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
        po.src = 'https://apis.google.com/js/plusone.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
      })();
    </script>
    <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://<?= $_SERVER['HTTP_HOST'] ?>/" data-text="車検費用が驚きの3万円台から！とことん車検ナビ" data-lang="ja" data-count="none">ツイート</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2F<?= $_SERVER['HTTP_HOST'] ?>%2F&amp;send=false&amp;layout=button_count&amp;width=70&amp;show_faces=false&amp;font=tahoma&amp;colorscheme=light&amp;action=like&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:70px; height:21px;" allowTransparency="true"></iframe>
    </div>
    <br class="clear" />
    <!-- ▲ソーシャルブックマーク-->
    <div id="knowledge_box">
      <div id="content_left">
        <dl>
          <dt id="link_a"><?= $var_view_object['main_title'] ?><span class="text_small"><?= $var_view_object['main_title_kana'] ?></span></dt>
          <dd>
            <div class="list-container">
              <p><?= $var_view_object['main_description'] ?></p>
              <p>→<a href="http://<?= $_SERVER['HTTP_HOST'] ?>/glossary.php">車検用語集一覧へ戻る</a></p>
            </div>
            <br class="clear" />
          </dd>
        </dl>
        <p class="text_center"><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search_top/" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('serch_but','','/images/knowledge/eria_over.jpg',1)"><img src="/images/knowledge/eria.jpg" alt="エリア＋条件で車検を探す" name="serch_but" width="450" height="60" border="0" /></a></p>

      </div>
      <div id="content_right">
        <ul>
          <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/glossary.php"><img src="/images/glossary/glossary_taitle.gif" width="243" height="43" alt="用語集一覧" /></a></li>
          <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/glossary.php#link_a"><img src="/images/glossary/glossary_taitle_a.gif" width="243" height="43" alt="ア行" /></a></li>
          <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/glossary.php#link_ka"><img src="/images/glossary/glossary_taitle_ka.gif" width="243" height="43" alt="カ行" /></a></li>
          <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/glossary.php#link_sa"><img src="/images/glossary/glossary_taitle_sa.gif" width="243" height="43" alt="サ行" /></a></li>
          <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/glossary.php#link_ta"><img src="/images/glossary/glossary_taitle_ta.gif" width="243" height="43" alt="タ行" /></a></li>
          <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/glossary.php#link_na"><img src="/images/glossary/glossary_taitle_na.gif" width="243" height="43" alt="ナ行" /></a></li>
          <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/glossary.php#link_ha"><img src="/images/glossary/glossary_taitle_ha.gif" width="243" height="43" alt="ハ行" /></a></li>
          <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/glossary.php#link_ma"><img src="/images/glossary/glossary_taitle_ma.gif" width="243" height="43" alt="マ行" /></a></li>
          <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/glossary.php#link_ya"><img src="/images/glossary/glossary_taitle_ya.gif" width="243" height="43" alt="ヤ行" /></a></li>
          <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/glossary.php#link_ra"><img src="/images/glossary/glossary_taitle_ra.gif" width="243" height="43" alt="ラ行" /></a></li>
        </ul>

      </div>
      <br style="clear:both;" />
      <div id="bottom">
        <div id="pagetop"><a href="#ALL" onclick="backToTop(); return false" onkeypress="backToTop(); return false"><img src="/img/user/btn_pagetop.gif" /></a></div>
        <br class="clear" />
      </div>
    </div>
  </div>
<div id="footer">
<ul>
  <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/">とことん車検ナビHOME</a>
  <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search_top/">車検をさがす</a></li>
  <li><ul>
        <li>- 北海道・東北</li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_02/">北海道</a> / <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_03/">青森</a> / <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_04/">岩手</a> / <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_05/">宮城</a> / <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_06/">秋田</a> / <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_07/">山形</a> / <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_08/">福島</a></li>
        <li>- 関東</li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_09/">東京</a> / <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_10/">神奈川</a> / <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_11/">埼玉</a> / <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_12/">千葉</a> / <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_13/">茨城</a> / <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_14/">栃木</a> / <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_15/">群馬</a></li>
        <li>- 北陸・甲信越</li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_16/">新潟</a> / <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_17/">富山</a> / <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_18/">石川</a> / <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_19/">福井</a> / <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_20/">山梨</a> / <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_21/">長野</a></li>
        <li>- 東海</li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_22/">愛知</a> / <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_23/">岐阜</a> / <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_24/">静岡</a> / <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_25/">三重</a></li>
        <li>- 関西</li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_26/">大阪</a> / <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_27/">兵庫</a> / <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_28/">京都</a> / <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_29/">滋賀</a> / <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_30/">奈良</a> / <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_31/">和歌山</a></li>
        <li>- 中国・四国</li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_32/">鳥取</a> / <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_33/">島根</a> / <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_34/">岡山</a> / <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_35/">広島</a> / <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_36/">山口</a> / <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_37/">徳島</a> / <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_38/">香川</a> / <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_39/">愛媛</a> / <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_40/">高知</a></li>
        <li>- 九州・沖縄</li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_41/">福岡</a> / <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_42/">佐賀</a> / <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_43/">長崎</a> / <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_44/">熊本</a> / <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_45/">大分</a> / <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_46/">宮崎</a> / <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_47/">鹿児島</a> / <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_48/">沖縄</a></li>
      </ul>
    </li>
   </li>
</ul>
<ul>
  <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/knowledge_1.php">車検のいろは</a></li>
  <li><ul>
        <li>- <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/knowledge_1.php">車検って何？</a></li>
        <li>- <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/knowledge_2.php">安心できる車検を選ぶコツ</a></li>
        <li>- <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/knowledge_3.php">車検を安くあげるコツ</a></li>
        <li>- <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/knowledge_4.php">車検で得をするコツ</a></li>
        <li>- <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/knowledge_5.php">要注意！車検の期間とは？</a></li>
        <li>- <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/knowledge_6.php">本当にお得な車検を選ぶ方法とは？ </a></li>
        <li>- <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/knowledge_7.php">車検費用の内訳を徹底解説！</a></li>
        <li>&nbsp;</li>
      </ul>
  </li>
  <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/">よくある質問</a></li>
  <li><a href="https://<?= $_SERVER['HTTP_HOST'] ?>/inquiry.html">お問い合わせ</a></li>
  <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/useinfo.html">とことん車検ナビとは？</a></li>
  <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/glossary.php">車検用語集</a></li>
  <li><a href="https://<?= $_SERVER['HTTP_HOST'] ?>/publish.html">掲載依頼</a></li>
  <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/rules.html">利用規約</a></li>
  <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/company.html">運営会社</a></li>
  <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/privacy.html">プライバシーポリシー</a></li>
  <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/manual/lightCar.html">とことん車検ナビ比較マニュアル&nbsp;軽自動車編</a></li>
  <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/manual/prius.html">とことん車検ナビ比較マニュアル&nbsp;プリウス編</a></li>
  <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/sitemap.html">サイトマップ</a></li>
</ul>
<dl class="pMarkSsl">
    <dt><img src="http://<?= $_SERVER['HTTP_HOST'] ?>/img/common/1608_p_mark.png" alt="プライバシーマーク"></dt>
    <dt class="sslBox"><div id="ssl_Area">
      <script src="//ssif1.globalsign.com/SiteSeal/siteSeal/siteSeal/siteSeal.do?p1=www.tokoton-navi.com&amp;p2=SZ130-66&amp;p3=image&amp;p4=ja&amp;p5=V0001&amp;p6=S001&amp;p7=http"></script><span> <a id="aa" href="javascript:ss_open_sub()"><img name="ss_imgTag" border="0" src="//ssif1.globalsign.com/SiteSeal/siteSeal/siteSeal/siteSealImage.do?p1=www.tokoton-navi.com&amp;p2=SZ130-66&amp;p3=image&amp;p4=ja&amp;p5=V0001&amp;p6=S001&amp;p7=http&amp;deterDn=" alt="グローバルサイン認証サイト　SSL secured クリックして確認　GlobalSign byGMO" oncontextmenu="return false;" galleryimg="no" style="width:130px;"></a></span><span id="ss_siteSeal_fin_SZ130-66_image_ja_V0001_S001"></span>
    <script type="text/javascript" src="//seal.globalsign.com/SiteSeal/gs_flash_130-66_ja.js"></script>
    </div></dt>
    <dd>とことん車検ナビの通信はGMOグローバルサイン株式会社の提供によるセキュリティ認証によって暗号化されています。<br>安心して車検をお探しください。</dd>
</dl>
<p id="copyright">Copyright(C)2008-<?=date('Y');?> Tokoton Shaken Navi All Rights Reserved.</p>
</div>
</div>
</div>
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
/* <![CDATA[ */
var yahoo_retargeting_id = 'LN3Q3C91TN';
var yahoo_retargeting_label = '';
var yahoo_retargeting_page_type = '';
var yahoo_retargeting_items = [{item_id: '', category_id: '', price: '', quantity: ''}];
/* ]]> */
</script>
<script type="text/javascript" language="javascript" src="//b92.yahoo.co.jp/js/s_retargeting.js"></script>
<!-- リターゲティングタグ_YDN ED -->

</body>
</html>
