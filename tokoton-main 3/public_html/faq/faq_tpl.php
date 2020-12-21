<?

  require_once 'faq_object.php';
  $var_view_object = $var_view_object_list[$_GET['url']];
		
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="keywords" content="とことん車検ナビ" />
<meta http-equiv="description" content="とことん車検ナビについての説明です。" />
<title><?= $var_view_object['title'] ?> - よくある質問 | とことん車検ナビ</title>
<meta name="viewport" content="width=920" />
<link href="/css/user/common_new.css" rel="stylesheet" type="text/css" />
<link href="/css/user/faq.css" rel="stylesheet" type="text/css" />
<link href="http://<?= $_SERVER['HTTP_HOST'] ?>/favicon.ico" rel="icon" type="image/x-icon" />
<!-- SEO対策 [PUBLIC_TOKOTON-6] canonical対応 20170301 ST -->
<?php if($var_view_object['canonical'] != ""){ echo $var_view_object['canonical'];?>
<?php } else {?>
<link rel="canonical" href="http://<?= $_SERVER['HTTP_HOST'] ?><?= $_SERVER['REQUEST_URI'] ?>"/>
<?php } ?>
<!-- SEO対策 [PUBLIC_TOKOTON-6] canonical対応 20170301 ED -->
<script type="text/javascript" src="/js/main.js"></script>
<script type="text/javascript" src="/js/function.js"></script>
<script type="text/javascript" src="/js/prototype.js"></script>
<script src="/js/rollover.js" type="text/JavaScript"></script>
<script src="/js/check_cartype.js" type="text/JavaScript"></script>
<script type="text/javascript" src="/js/smartRollover.js"></script>

<!-- 2018/11/20 google_analytics差し替え対応 ST -->
<? require_once ('../application/views/user/google_analytics.tpl');?>
<!-- 2018/11/20 google_analytics差し替え対応 ED -->
</head>
<body>
<div id="container">
  <div id="header">
    <p id="title"><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/" title="とことん車検ナビ"><img src="/img/user/title.gif" alt="とことん車検ナビ" /></a></p>
    <h1>よくある質問|どこより格安料金で便利なお見積りなら「とことん車検ナビ」</h1><br>
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
      <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/">車検の費用比較ならとことん車検ナビ</a></li>
      <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/">よくある質問</a></li>
    <li><?= $var_view_object['main_li_tree'] ?></li>
    </ul>
    <br class="clear"/>
    <h2 id="faq"><img src="/img/user/faq/header_pagetitle.gif" alt="よくある質問" /></h2>

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
    <p class="declaration">お客様から寄せられた、よくある質問を掲載しています。</p>
    <!--▼右コンテンツ-->
    <div id="content_right">
        <?php if ($var_view_object): ?>
            <h3 id="question_title"><?= $var_view_object['h3'] ?></h3>
            <div id="box_answer">
                <? if (!$var_view_object['image']) : ?>
                    <p class="content">
                        <?= $var_view_object['main_description'] ?>
                    </p>
                <? else : ?>
                    <div class="content_left_box">
                        <img src="<?= $var_view_object['image'] ?>" />
                    </div>
                    <div class="content_right_box">
                        <?= $var_view_object['main_description'] ?>
                    </div>
                    <br clear="all" />
                    <br />
                <? endif; ?>
                <p id="guide">こちらのページをご覧頂いても疑問が解消されない場合は<a href="https://<?= $_SERVER['HTTP_HOST'] ?>/inquiry.html">お問い合わせ</a>ページからお問い合わせください。</p>
            </div>
        <?php endif; ?>

  <p id="btn_backtothefuture">
    <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/">&raquo;前のページへ戻る</a>
  </p>
    <br />

      <h3 id="question_title">質問一覧</h3>

        <h4>とことん車検ナビについて</h4>
          <ul id="faq_list">
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c1_q1.html"><strong>Q1.</strong> とことん車検ナビってなんですか？</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c1_q2.html"><strong>Q2.</strong> 最大割引適用後の料金とはなんですか？</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c1_q3.html"><strong>Q3.</strong> 割引サービスはどこを見れば分かりますか？</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c1_q4.html"><strong>Q4.</strong> 見積りは無料ですか？</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c1_q5.html"><strong>Q5.</strong> 車検の予約をするにはどうしたらいいですか？</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c1_q6.html"><strong>Q6.</strong> とことん車検ナビへの掲載をお願いしたいのですが？</a></li>
          </ul>

      <h3 id="question_title" style="margin-top: 30px;">故障しやすいパーツについて</h3>
      <h4>エンジン機構</h4>
          <ul id="faq_list">
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c3_q1.html"><strong>Q1.</strong> シリンダーヘッド</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c3_q2.html"><strong>Q2.</strong> シリンダーブロック</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c3_q3.html"><strong>Q3.</strong> カムシャフト</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c3_q4.html"><strong>Q4.</strong> インレットバルブ</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c3_q5.html"><strong>Q5.</strong> エグゾーストバルブ</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c3_q6.html"><strong>Q6.</strong> プッシュロッド</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c3_q7.html"><strong>Q7.</strong> ロッカーアーム</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c3_q8.html"><strong>Q8.</strong> ピストン</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c3_q9.html"><strong>Q9.</strong> コンロッド</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c3_q10.html"><strong>Q10.</strong> クランクシャフト</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c3_q11.html"><strong>Q11.</strong> フライホイール</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c3_q12.html"><strong>Q12.</strong> オイルパン</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c3_q13.html"><strong>Q13.</strong> エアフロメーター</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c3_q14.html"><strong>Q14.</strong> スロットルボディ</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c3_q15.html"><strong>Q15.</strong> ISCV</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c3_q16.html"><strong>Q16.</strong> ウォーターポンプ</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c3_q17.html"><strong>Q17.</strong> アイドルアジャストスクリュー</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c3_q18.html"><strong>Q18.</strong> インレットマニホールド</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c3_q19.html"><strong>Q19.</strong> エグゾーストマニホールド</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c3_q20.html"><strong>Q20.</strong> オイルタペット</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c3_q21.html"><strong>Q21.</strong> オイルポンプ</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c3_q22.html"><strong>Q22.</strong> オイルダンパー</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c3_q23.html"><strong>Q23.</strong> ECU</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c3_q24.html"><strong>Q24.</strong> ノックセンサー</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c3_q25.html"><strong>Q25.</strong> O2センサー</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c3_q26.html"><strong>Q26.</strong> スピードセンサー</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c3_q27.html"><strong>Q27.</strong> クランク角センサー</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c3_q28.html"><strong>Q28.</strong> グロープラグ</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c3_q29.html"><strong>Q29.</strong> スロットルポジションセンサー</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c3_q30.html"><strong>Q30.</strong> EGR</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c3_q31.html"><strong>Q31.</strong> ブローバイガス還元装置</a></li>
          </ul>
     <h4>冷却装置</h4>
          <ul id="faq_list">
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c4_q1.html"><strong>Q1.</strong> 電動ファン</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c4_q2.html"><strong>Q2.</strong> ラジエーター本体</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c4_q3.html"><strong>Q3.</strong> ファンプーリー</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c4_q4.html"><strong>Q4.</strong> 水温センサー</a></li>
      </ul>
      <h4>潤滑装置</h4>
          <ul id="faq_list">
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c5_q1.html"><strong>Q1.</strong> オイルポンプ</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c5_q2.html"><strong>Q2.</strong> オイルストレーナー</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c5_q3.html"><strong>Q3.</strong> オイルプレッシャースイッチ</a></li>
      </ul>
      <h4>始動装置</h4>
          <ul id="faq_list">
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c6_q1.html"><strong>Q1.</strong> スターターモニター</a></li>
      </ul>
      <h4>エアコン装置</h4>
          <ul id="faq_list">
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c7_q1.html"><strong>Q1.</strong> ヒーターユニット</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c7_q2.html"><strong>Q2.</strong> ヒーターコア</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c7_q3.html"><strong>Q3.</strong> ヒーターウォーターバルブ</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c7_q4.html"><strong>Q4.</strong> プロアモーター</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c7_q5.html"><strong>Q5.</strong> プロアモーターレジスター</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c7_q6.html"><strong>Q6.</strong> エアコンユニット</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c7_q7.html"><strong>Q7.</strong> コンプレッサー</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c7_q8.html"><strong>Q8.</strong> コンプレッサーマグネットクラッチ</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c7_q9.html"><strong>Q9.</strong> エバポレーター</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c7_q10.html"><strong>Q10.</strong> コンデンアーレシーバータンク</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c7_q11.html"><strong>Q11.</strong> エキスパッションバルブ</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c7_q12.html"><strong>Q12.</strong> 電動ファン</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c7_q13.html"><strong>Q13.</strong> クーラーガス</a></li>
      </ul>
      <h4>動力伝達機構</h4>
          <ul id="faq_list">
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c8_q1.html"><strong>Q1.</strong> A/Tトランスミッション</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c8_q2.html"><strong>Q2.</strong> トルクコンバーター</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c8_q3.html"><strong>Q3.</strong> A/Tクーラーホース</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c8_q4.html"><strong>Q4.</strong> A/Tセレクトレバー</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c8_q5.html"><strong>Q5.</strong> ソレノイドバルブ</a></li>
          </ul>
      <h4>点火装置</h4>
          <ul id="faq_list">
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c9_q1.html"><strong>Q1.</strong> イグニッションスイッチ</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c9_q2.html"><strong>Q2.</strong> イグニッションコイル</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c9_q3.html"><strong>Q3.</strong> ハイテンションコード</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c9_q4.html"><strong>Q4.</strong> ディストリビューター</a></li>
          </ul>
      <h4>充電装置</h4>
          <ul id="faq_list">
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c10_q1.html"><strong>Q1.</strong> オルタネーター</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c10_q2.html"><strong>Q2.</strong> ICレギュレーター</a></li>
          </ul>
      <h4>燃料装置</h4>
          <ul id="faq_list">
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c11_q1.html"><strong>Q1.</strong> フューエルポンプ</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c11_q2.html"><strong>Q2.</strong> フューエルインジェクター</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c11_q3.html"><strong>Q3.</strong> フューエルプレッシャーレギュレーター</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c11_q4.html"><strong>Q4.</strong> 噴射ポンプ</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c11_q5.html"><strong>Q5.</strong> 噴射ノズル</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c11_q6.html"><strong>Q6.</strong> フューエルインジェクションコンピュータ</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c11_q7.html"><strong>Q7.</strong> キャニスター</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/c11_q8.html"><strong>Q8.</strong> キャブレター</a></li>
      </ul>
    <p id="guide">こちらのページをご覧頂いても疑問が解消されない場合は<a href="https://<?= $_SERVER['HTTP_HOST'] ?>/inquiry.html">お問い合わせ</a>ページからお問い合わせください。</p>
    <!--<p class="text_center"><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search_top/" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('serch_but','','/images/knowledge/eria_over.jpg',1)"><img src="/images/knowledge/eria.jpg" alt="エリア＋条件で車検を探す" name="serch_but" width="450" height="60" border="0" /></a></p>
    <br />-->
  <!--<p id="btn_backtothefuture" class="text_center">
    <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/faq/">&raquo;前のページへ戻る</a>
  </p>
  <br />
-->
    </div>
    <!--▲右コンテンツ-->

    <!--▼左コンテンツ-->
    <div id="content_left">
    <!--
      <p id="update"><span class="orange">2013/06/20 UPDATE 毎日更新</span><br />
      現在 <span class="red">323</span> 店舗、<span class="red">425件</span>の車検情報を掲載中です。</p>
    -->

    <div id="box_search">
      <h2 id="search"><img src="/img/user/top/h2_search2.gif" alt="車検をさがす" /></h2>
      <h3 id="search_region"><img src="/img/user/top/h3_search_region3.gif" alt="地域で車検を選ぶ" width="320" height="5" /></h3>
      <div class="box_search_content">
        <br />
        <form action="/user/search/post_control/" method="post" name="keyword_form2">
        <input name="key" type="text" size="30" value="地域・市町村名から探す" id="freeword2" onclick="textClear(this);" />
        <input type="submit" value="検索" onclick="document.keyword_form2.submit();">
        </form>


    <dl id="area_list_category">
      <dt>北海道・東北</dt>
      <dd>
      <ul class="area_list_detail">
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_02/">北海道</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_03/">青森</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_04/">岩手</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_05/">宮城</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_06/">秋田</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_07/">山形</a></li>
        <li class="last"><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_08/">福島</a></li>
      </ul>
      </dd>
      <dt>関東</dt>
      <dd>
      <ul class="area_list_detail">
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_09/">東京</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_10/">神奈川</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_11/">埼玉</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_12/">千葉</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_13/">茨城</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_14/">栃木</a></li>
        <li class="last"><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_15/">群馬</a></li>
      </ul>
      </dd>
      <dt>北陸・甲信越</dt>
      <dd>
      <ul class="area_list_detail">
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_16/">新潟</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_17/">富山</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_18/">石川</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_19/">福井</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_20/">山梨</a></li>
        <li class="last"><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_21/">長野</a></li>
      </ul>
      </dd>
      <dt>東海</dt>
      <dd>
      <ul class="area_list_detail">
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_22/">愛知</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_23/">岐阜</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_24/">静岡</a></li>
        <li class="last"><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_25/">三重</a></li>
      </ul>
      </dd>
      <dt>近畿</dt>
      <dd>
      <ul class="area_list_detail">
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_26/">大阪</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_27/">兵庫</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_28/">京都</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_29/">滋賀</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_30/">奈良</a></li>
        <li class="last"><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_31/">和歌山</a></li>
      </ul>
      </dd>
      <dt>中国・四国</dt>
      <dd>
      <ul class="area_list_detail">
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_32/">鳥取</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_33/">島根</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_34/">岡山</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_35/">広島</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_36/">山口</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_37/">徳島</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_38/">香川</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_39/">愛媛</a></li>
        <li class="last"><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_40/">高知</a></li>
      </ul>
      </dd>
      <dt>九州・沖縄</dt>
      <dd>
      <ul class="area_list_detail">
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_41/">福岡</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_42/">佐賀</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_43/">長崎</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_44/">熊本</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_45/">大分</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_46/">宮崎</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_47/">鹿児島</a></li>
        <li class="last"><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_48/">沖縄</a></li>
      </ul>
      </dd>
    </dl>
    </div>

      <h3 id="search_freeword"><img src="/img/user/top/h3_search_freeword.gif" alt="フリーワード検索" /></h3>
      <div class="box_search_content">
        <p id="search_freeword_desc"><img src="/img/user/top/desc_search_freeword2.gif" alt="お住まいの市町村名などで店舗を検索！" /></p>

    <form action="/user/search/post_control/" method="post" name="keyword_form">
        <input name="key" type="text" size="40" id="freeword" />

        <p id="example">例. 東京　中央区</p>
        <a href="#" onclick="document.keyword_form.submit(); return false;" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('search_btn','','/images/top/btn_search_act.gif',1)"><img src="/images/top/btn_search.gif" alt="検索する" name="search_btn1" width="250" height="37" border="0" id="search_btn1" /></a></form> </div>

    <h3 id="search_option"><img src="/img/user/top/h3_search_option.gif" alt="こだわりで選ぶ" /></h3>
      <div class="box_search_content">
        <p id="search_option_desc"><img src="/img/user/top/desc_search_potion.gif" alt="自分にピッタリの店舗がきっと見つかる！" /></p>
        <p id="search_option_check_desc"><img src="/img/user/top/desc_search_option_check.gif" alt="気になる項目にチェックして検索ボタンをクリック" /></p>
    <form action="/user/search/post_control/" method="post" name="option_form">
        <ul id="option_list">
          <li class="option_left">
            <input type="checkbox" name="option[]" value="9" />
      <img src="/img/user/top/option_list9.gif" alt="グルメプレゼント" id="option9" />
          </li>
          <li>
            <input type="checkbox" name="option[]" value="10" />
      <img src="/img/user/top/option_list10.gif" alt="グッズプレゼント" id="option10" />
          </li>
          <li class="option_left">
            <input type="checkbox" name="option[]" value="11" />
      <img src="/img/user/top/option_list11.gif" alt="ガソリンプレゼント" id="option11" />
          </li>
          <li>
            <input type="checkbox" name="option[]" value="12" />
      <img src="/img/user/top/option_list12.gif" alt="抽選でプレゼント" id="option12" />
          </li>
          <li class="option_left">
            <input type="checkbox" name="option[]" value="13" />
      <img src="/img/user/top/option_list13.gif" alt="オイル交換サービス" id="option13" />
          </li>
          <li>
            <input type="checkbox" name="option[]" value="14" />
      <img src="/img/user/top/option_list14.gif" alt="車検時限定割引サービス" id="option14" />
          </li>
          <li class="option_left">
            <input type="checkbox" name="option[]" value="2" />
            <img src="/img/user/top/option_list2.gif" alt="整備保証付き" id="option2" />
          </li>
          <li>
            <input type="checkbox" name="option[]" value="15" />
            <img src="/img/user/top/option_list15.gif" alt="即日完了OK" id="option15" />
          </li>
          <li class="option_left">
            <input type="checkbox" name="option[]" value="16" />
      <img src="/img/user/top/option_list16.gif" alt="ロードサービス取り扱い" id="option16" />
          </li>
          <li>
            <input type="checkbox" name="option[]" value="3" />
      <img src="/img/user/top/option_list3.gif" alt="夜間受付OK" id="option3" />
          </li>
          <li class="option_left">
            <input type="checkbox" name="option[]" value="4" />
      <img src="/img/user/top/option_list4.gif" alt="土日対応OK" id="option4" />
          </li>
          <li>
            <input type="checkbox" name="option[]" value="5" />
      <img src="/img/user/top/option_list5.gif" alt="代車あり" id="option5" />
          </li>
          <li class="option_left">
            <input type="checkbox" name="option[]" value="6" />
            <img src="/img/user/top/option_list6.gif" alt="引取納車OK" id="option6" />
          </li>
          <li>
            <input type="checkbox" name="option[]" value="7" />
            <img src="/img/user/top/option_list7.gif" alt="キャッシュレスOK" id="option7" />
          </li>
          <li class="option_left">
            <input type="checkbox" name="option[]" value="8" />
      <img src="/img/user/top/option_list8.gif" alt="クレジットカード利用OK" id="option8" />
          </li>
        </ul>
        <br class="clear" />
        <!--
        <p><a href="javascript:;" onclick="window.open('/shopoption_desc.html', 'temp_window', 'left=0,top=0,width=670,height=600,scrollbars=yes');">* オプションの詳細はこちら</a></p>
        <a href="#" onclick="document.option_form.submit(); return false;" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('search_btn2','','/images/top/btn_search_act.gif',1)"><img src="/images/top/btn_search.gif" alt="検索する" name="search_btn2" width="250" height="37" border="0" id="search_btn2" /></a></form>
        -->
    </div>

    </div>
    </div>
  <!--▲左コンテンツ-->

  <br class="clear" />
    <div id="bottom">
      <div id="pagetop"><a href="#ALL" onclick="backToTop(); return false" onkeypress="backToTop(); return false"><img src="/img/user/btn_pagetop.gif" /></a></div>
      <br class="clear" />
      <p><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/" >←車検費用の比較・見積もりなら【とことん車検ナビ】ホーム</a></p>
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
        <li>- <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/knowledge_5.php">要注意!車検の期間とは？</a></li>
        <li>- <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/knowledge_6.php">本当にお得な車検を選ぶ方法とは？</a></li>
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
</div>
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
