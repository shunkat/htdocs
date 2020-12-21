<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="keywords" content="車検 見積もり" />
<meta name="description" content="車検を不安に思っている方も多いのではないでしょうか。車検を不安に思う一番の理由は、その費用の把握のしづらさにあると思われます。車検の見積もりをすることで、内訳を把握したり、他社との比較をしたりと、メリットが多数あります。今回は、車検の見積もりをする方法と、そのメリットについてご紹介します。" />
<title>車検の見積もりの方法とメリット | とことん車検ナビ</title>
<link href="../../css/user/shop-detail.css" rel="stylesheet" type="text/css" /><!-- 下部固定ボタンstyle 20191119_add -->
<link href="../css/reset.css" rel="stylesheet" type="text/css" />
<link href="../css/reset_table.css" rel="stylesheet" type="text/css" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<link href="../css/acordion.css" rel="stylesheet" type="text/css" />
<link href="../css/jquery.pageslide.css" rel="stylesheet" type="text/css" />
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<link rel="canonical" href="http://www.tokoton-navi.com/knowledge_10.php" />
<script type="text/javascript" src="../../js/common_userAgent.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript">
//アコーディオンメニュー
$(document).ready(function(){
  //acordion_treeを一旦非表示に
  $(".acordion_tree").css("display","none");
  //triggerをクリックすると以下を実行
  $(".trigger").click(function() {
    //もしもクリックしたtriggerの直後の.acordion_treeが非表示なら
    if ($("+.acordion_tree",this).css("display")=="none") {
      //classにactiveを追加
      $(this).addClass("active");
      //直後のacordion_treeをスライドダウン
      $("+.acordion_tree",this).slideDown("normal");
    } else {
      //classからactiveを削除
      $(this).removeClass("active");
      //クリックしたtriggerの直後の.acordion_treeが表示されていればスライドアップ
      $("+.acordion_tree",this).slideUp("normal");
    }
  });
});
</script>

<!-- モバイル用アコーディオン -->
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

</script>

<!-- 2018/11/20 google_analytics差し替え対応 ST -->
<? require_once ('../../application/views/user/google_analytics.tpl');?>
<!-- 2018/11/20 google_analytics差し替え対応 ED -->

</head>

<body class="shop_detail">
<!-- 下部固定ボタン 20200317_add ↓↓↓↓↓ -->
<div class="contact-btn">
  <a href="/">車検店舗を探す</a>
</div>
<!-- 下部固定ボタン 20200317_add ↑↑↑↑↑ -->
<!--▼wrapper-->
<div id="wrapper">
  <!--▼header-->
  <header id="header">
      <div id="top">
          <p>車検費用の料金比較、全国のお得な情報が満載！格安便利なお見積り</p>
        </div>
        <div id="header_in">
          <div id="header_left">
              <p><a href="http://www.tokoton-navi.com/sp/"><img src="../images/common/logo.png" width="136" height="18" alt="とことん車検ナビ"></a></p>
            </div>
            <div id="header_right">
              <p><a href="#modal" class="second open"><span><img src="../images/common/heder_menu.png" width="80" height="35" alt="メニュー"></span></a></p>
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
        <ul class="breadcrumb_list" >
          <li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb" class="breadcrumb_row">
            <a href="http://www.tokoton-navi.com/" itemprop="url">
              <span itemprop="title">車検TOP</span>
            </a>
          </li><span class="arrow-magin">></span>
          <li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb" itemprop="child" class="breadcrumb_list">
            <span  itemprop="title">車検の見積もりの方法とメリット</span>
          </li>
        </ul>
      <br class="clear"/>
      </div>
    </div>
<!-- パンくず対応 ED -->


<!--▼section-->
  <section>
  <h1 class="text_center"><span class="shop-info-price-c">いろは<strong style="font-size:18px;">10</strong></span>&nbsp;<span class="title04">車検の見積もりの方法とメリット</span></h1>

        <div id="section_box">

            <!-- <p><img src="../images/knowledge/knowledge10.jpg" alt="車検紛失" width="100%"><br> -->
            <p><img src="../images/knowledge/knowledge11.jpg" alt="車検予約" width="100%"><br>車検を不安に思っている方も多いのではないでしょうか。車検を不安に思う一番の理由は、その費用の把握のしづらさにあると思われます。車検の見積もりをすることで、内訳を把握したり、他社との比較をしたりと、メリットが多数あります。今回は、車検の見積もりをする方法と、そのメリットについてご紹介します。</p>
<!-- </p> -->

<!--▼section-->
  <!-- <section>
      <h1 class="shop-info-page_title">車検の予約ってどうすればいいの？</h1>
        <div id="section_box">

            <p><img src="../images/knowledge/knowledge11.jpg" alt="車検予約" width="100%"><br>
            みなさんは、車検を行う時の予約はどのようにしているでしょうか。車検は、2年に1回しかなく、頻繁に行うものではないので、いざ車検を実施しようとしても予約方法がわからないという方も少なくないと思います。もしかすると初めての車検で、不安な方もいるかもしれません。そこで今回は、初めての方にもわかりやすく車検の予約の方法をご紹介します。
</p> -->

<!--▼section-->
<!-- ▼エリア選択 -->
<section id="area_search" class="tab clearfix">
<h3><span><img src="../images/common/title_icon.png" width="20" height="12"></span>エリアから車検を探す</h3>
<!-- tab1 -->
<div class="tab1">
    <input id="tab1" type="radio" name="tabs" class="tab_switch">
    <label class="tab_label" for="tab1">北海道・東北</label>
    <div class="tab_content">
        <div class="back">
        <input id="tab1_bk" type="radio" name="tabs" class="tab_switch2">
        <label class="tab_label2 arrow" for="tab1_bk">戻る</label><span>都道府県を選んでください</span>
        </div>
        <div>
        <ul>
        <li><a href="http://www.tokoton-navi.com/search/pref_02/">北海道</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_03/">青森</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_04/">岩手</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_05/">宮城</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_06/">秋田</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_07/">山形</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_08/">福島</a></li>
        </ul>
        </div>
    </div>
</div>
<!-- tab2 -->
<div class="tab2">
    <input id="tab2" type="radio" name="tabs" class="tab_switch">
    <label class="tab_label" for="tab2">関東</label>
    <div class="tab_content">
        <div class="back">
        <input id="tab2_bk" type="radio" name="tabs" class="tab_switch2">
        <label class="tab_label2 arrow" for="tab2_bk">戻る</label><span>都道府県を選んでください</span>
        </div>
        <div>
        <ul>
        <li><a href="http://www.tokoton-navi.com/search/pref_09/">東京</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_10/">神奈川</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_11/">埼玉</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_12/">千葉</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_13/">茨城</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_14/">栃木</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_15/">群馬</a></li>
        </ul>
        </div>
    </div>
</div>
<!-- tab3 -->
<div class="tab3">
    <input id="tab3" type="radio" name="tabs" class="tab_switch">
    <label class="tab_label" for="tab3">北陸・甲信越</label>
    <div class="tab_content tab3">
        <div class="back">
        <input id="tab3_bk" type="radio" name="tabs" class="tab_switch2">
        <label class="tab_label2 arrow" for="tab3_bk">戻る</label><span>都道府県を選んでください</span>
        </div>
        <div>
        <ul>
        <li><a href="http://www.tokoton-navi.com/search/pref_16/">新潟</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_17/">富山</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_18/">石川</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_19/">福井</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_20/">山梨</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_21/">長野</a></li>
        </ul>
        </div>
    </div>
</div>
<!-- tab4 -->
<div class="tab4">
    <input id="tab4" type="radio" name="tabs" class="tab_switch">
    <label class="tab_label" for="tab4">東海</label>
    <div class="tab_content tab4">
        <div class="back">
        <input id="tab4_bk" type="radio" name="tabs" class="tab_switch2">
        <label class="tab_label2 arrow" for="tab4_bk">戻る</label><span>都道府県を選んでください</span>
        </div>
        <div>
        <ul>
        <li><a href="http://www.tokoton-navi.com/search/pref_22/">愛知</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_23/">岐阜</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_24/">静岡</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_25/">三重</a></li>
        </ul>
        </div>
    </div>
</div>
<!-- tab5 -->
<div class="tab5">
    <input id="tab5" type="radio" name="tabs" class="tab_switch">
    <label class="tab_label" for="tab5">近畿</label>
    <div class="tab_content tab5">
        <div class="back">
        <input id="tab5_bk" type="radio" name="tabs" class="tab_switch2">
        <label class="tab_label2 arrow" for="tab5_bk">戻る</label><span>都道府県を選んでください</span>
        </div>
        <div>
        <ul>
        <li><a href="http://www.tokoton-navi.com/search/pref_26/">大阪</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_27/">兵庫</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_28/">京都</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_29/">滋賀</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_30/">奈良</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_31/">和歌山</a></li>
        </ul>
        </div>
    </div>
</div>
<!-- tab6 -->
<div class="tab6">
    <input id="tab6" type="radio" name="tabs" class="tab_switch">
    <label class="tab_label" for="tab6">中国・四国</label>
    <div class="tab_content tab6">
        <div class="back">
        <input id="tab6_bk" type="radio" name="tabs" class="tab_switch2">
        <label class="tab_label2 arrow" for="tab6_bk">戻る</label><span>都道府県を選んでください</span>
        </div>
        <div>
        <ul>
        <li><a href="http://www.tokoton-navi.com/search/pref_32/">鳥取</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_33/">島根</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_34/">岡山</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_35/">広島</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_36/">山口</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_37/">徳島</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_38/">香川</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_39/">愛媛</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_40/">高知</a></li>
        </ul>
        </div>
    </div>
</div>
<!-- tab7 -->
<div class="tab7">
    <input id="tab7" type="radio" name="tabs" class="tab_switch">
    <label class="tab_label" for="tab7">九州・沖縄</label>
    <div class="tab_content tab7">
        <div class="back">
        <input id="tab7_bk" type="radio" name="tabs" class="tab_switch2">
        <label class="tab_label2 arrow" for="tab7_bk">戻る</label><span>都道府県を選んでください</span>
        </div>
        <div>
        <ul>
        <li><a href="http://www.tokoton-navi.com/search/pref_41/">福岡</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_42/">佐賀</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_43/">長崎</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_44/">熊本</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_45/">大分</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_46/">宮崎</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_47/">鹿児島</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_48/">沖縄</a></li>
        </ul>
        </div>
    </div>
</div>
<!-- /.tab --></section>
<!--<p class="text_center"><span class="shop-info-price-c">いろは<strong style="font-size:18px;">11</strong></span>&nbsp;<span class="title04">車検の予約ってどうすればいいの？<br /> </span></p>-->


            <h2 class="shop-info-sub"><span class="shop-info-sub-in">車検見積もりの方法</span></h2>
            <p>はじめに、車検の見積もりとはどのようなものなのか、車検の見積もりを行うことによってどのようなメリットがあるのかをご紹介します。</p>

            <p><span class="shop-info-sub-in">車検の見積もりとは</span></p>
            <p>車検の見積もりとは、車検にかかる実際の費用を算出することです。オートバックスやイエローハット、車検のコバックなどのフランチャイズ車検業者、もしくはガソリンスタンド併設の車検業者等が見積もりを実施しています。車検の見積もりをしておくことで、事前にどの業者を利用すれば、どの程度の費用がかかるのかがわかります。もちろん、見積もりは無料で出来るので、車検を行う前に見積もりは必ずやっておくべきだと言えます。<br>
<br>
見積もりの申込方法は業者によっても様々ですが、インターネットからの申し込みが主流です。

            </p>


            <p><span class="shop-info-sub-in">車検の見積もりの必要性</span></p>
            <p>では、なんのために車検の見積もりを出すのでしょうか。車検の見積りをすると、２つのメリットがあります。
まず、自分で車検の整備内容と金額を把握しておくことによって、車検の費用を抑えることができます。車検の見積りをすると整備の必要な箇所を知ることができるので、無駄な整備やパーツの交換を省くことができます。車検を業者まかせにすると、思わぬところで金額が上がっていることもあるので、「自分で把握する」ということは非常に重要です。<br>
<br>
次に、車検を行っている複数社を比較検討することが可能になります。車検業者は、それぞれ時期によって料金が異なることがしばしばあるので、複数の車検業者に見積もりをして、比較をすることによって自分の車検の時期に最適な車検業者を見つけることができます。また、複数社を同時に見積もると、細かな見積もり内容も比較検討することができるので、費用が高くなっている要素を見つけることもできます。安く、必要な要素のみを整備してくれる業者を選択することによって自分の車にとって最適な車検をすることができます。

            </p>

            <h2 class="shop-info-sub"><span class="shop-info-sub-in">車検見積もりの手順</span></h2>
            <p>次に、車検の具体的な見積もりの手順をご紹介いたします。実際に見積もりをしてみましょう。
車検の見積もりをする方法として、基本的にはインターネット予約と電話予約の2パターンがあります。ですが、どちらの方法をとるにしても、Webサイトにアクセスする必要がありますし、手間が少ない上に記録も残るので現在はインターネット予約が主流となっています。<br>
<br>
            <p><span class="shop-info-sub-in">ステップ1：近くの車検業者を探す</span></p>
<p>まず、近くの車検業者を探しましょう。様々な車検業者が掲載されている車検情報サイトにアクセスし、地域名で絞り込むことによってある程度近隣の車検業者を把握することができます。</p>

            <p><span class="shop-info-sub-in">ステップ2：地域・条件に合った業者・店舗を選択</span></p>
<p>ある程度近くの車検業者がわかったら、その中からさらに具体的な地域、様々な条件に合致する業者や店舗を選択しましょう。</p>

            <p><span class="shop-info-sub-in">ステップ3：車検業者の店舗に問い合わせ、見積もり予約</span></p>
<p>最も自分の条件に合う車検業者を選んだら、その業者に問い合わせをして、車検見積もりの予約をしましょう。インターネット上で見積もりを行えば、オンラインのみで効率的に見積もりを出すことができるので非常におすすめです。</p>

            <p><span class="shop-info-sub-in">ステップ4：車検の実車見積もり</span></p>
<p>インターネット上だけの見積もりだけでなく、実車での見積もりも合わせて行うようにしましょう。実車見積もりをすることによって、正確な金額の見積もりを依頼することができます。インターネット上での見積もりは手軽でスピーディーにできますが、あくまでも概算です。なるべく正確な費用を知るためにも、できるだけ実車での見積もりを行うようにしましょう。</p>

            <p><span class="shop-info-sub-in">ステップ5：自動車を車検業者に持ち込んで実車見積もりをとる</span></p>
<p>実車見積もりの予約ができたら、予約した日時に実際に車を店舗に持ち込んで見積もりをとってもらいましょう。多少の手間がかかりますが、最適な車検を探すのに非常に重要なことです。</p>

            <p><span class="shop-info-sub-in">ステップ6：複数社の見積もりをとる</span></p>
<p>1つ目の車検の見積もりをとることができたら、続けて複数社の見積もりをとりましょう。2つ目以降も基本的に同じ要領で見積もりをとることができます。ある程度の数の業者で見積もりを出すことができたら、最も自分の車にとって適切な車検業者を選択するために、その複数社の見積もり結果を比較検討しましょう。</p>

            <p><span class="shop-info-sub-in">ステップ7：車検の予約</span></p>
<p>見積もり内容に納得ができる車検業者を見つけられたら、その業者に車検の予約を入れましょう。これで車検の見積もりからの予約までは完了です。<br>
<br>
とことん車検ナビでは、こちらから車検業者を探すことができます。</p>

<p><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/sp/search_top/" class="btn-mitsumori scroll"><img src="../images/common/search_car.png" width="17" class=" btn-reserve-icon-left"/>&nbsp;車検を見積もってみる<i class="fa fa-chevron-right btn-reserve-icon-right"></i></a></p>

            <h2 class="shop-info-sub"><span class="shop-info-sub-in">車検見積もりの時期</span></h2>
            <p>では、車検の見積もりはどのくらいの時期に行うのがベストなのかということですが、見積もりは車検予約1ヶ月前に実施するのがおすすめです。「そんなの、早すぎるんじゃないの！？」と思う方もいるかもしれませんが、車検予約の1ヶ月前に見積もりを行う理由としては、余裕を持っておくことが大事だからです。最適な車検業者を選ぶには、「複数社の見積もり実施」「見積もりをした業者の比較検討」をする必要があります。これらの作業を、ゆとりを持って行うためにも車検予約の1ヶ月前くらいには車検見積もりを実施しておくことをおすすめします。</p>

            <h2 class="shop-info-sub"><span class="shop-info-sub-in">車検見積もりの費用</span></h2>
            <p>車検見積もり費用の内訳は、主に整備代金と法定費用の２種類に分類することができます。大まかな内訳を把握しておきましょう。</p>

            <p><span class="shop-info-sub-in">整備代金と法定費用</span></p>
            <p>車検の見積もりを行う際には、車検にかかる費用の内訳をある程度把握しておくことが重要です。車検にかかる費用の内訳は以下の通りです。<br>
<br>
・法定費用<br>
　こちらは、法律で決められた費用です。法律が変わらない限り、常に一定の費用となるので、各車検業者によって変動することはありません。法定費用には以下のようなものがあります。<br>
　	-重量税<br>
　	-自賠責保険<br>
　	-印紙代<br>
印紙代は一律1100円ですが、重量税は車種、自賠責保険は軽自動車か普通自動車かによって費用が異なります。<br>
<br>
・整備代金<br>
　業者によって大きく差が出るのはこちらの整備代金です。整備代金は、法定費用とは違って一律料金ではないため、車検業者や整備内容によって異なります。例えば、整備箇所の多さ、損傷の大きさ等が大きく費用に影響することがあります。<br>
整備代金は、各業者がそれぞれ独自に料金を設定しているものなので、他社との比較や交渉次第で料金を下げることが可能です。基本的にディーラー車検では、こちらの整備代金が非常に高額であるのに対し、その他のフランチャイズ車検や、ガソリンスタンドでの車検は安く抑えられる傾向があります。

</p>

            <h2 class="shop-info-sub"><span class="shop-info-sub-in">車検見積もりに必要なもの</span></h2>
            <p>続いて、車検の見積もりに必要なものをご紹介します。車検の見積もりに必要な物は以下の通りです。<br>
<br>
・車検証<br>
　まず、必要なのは車検証です。こちらは、車検満了日、年式、車種等を見積もり金額の検討材料とするために必要となっています。<br>
<br>
・整備記録簿<br>
　次に必要なのは、整備記録簿です。こちらを見れば、車検を行う車がいつ、どの箇所を整備したのかがわかるため、必要となっています。こちらは、車検業者によっては必須ではない場合もあります。<br>
<br>
ただし、この限りでない場合もあるので、車検業者に事前確認をすることによって、スムーズに見積もりを行うことができます。
</p>


            <h2 class="shop-info-sub"><span class="shop-info-sub-in">まとめ</span></h2>
            <p>今回は、車検の見積もりについてご紹介しましたが、いかがでしょうか。複数の車検業者に見積もり依頼をして、それぞれ比較検討しておくことによって、自分の車にとって最も適した車検業者を見つけることができます。無駄な費用を支払わないためにも、しっかり見積もりをしてから車検を行いましょう。
</p>


            <br>
            <p><a href="http://www.tokoton-navi.com/sp/search_top/" class="btn-mitsumori scroll"><img src="../images/common/search_car.png" width="17" class=" btn-reserve-icon-left"/>　車検ができる店舗を探す<i class="fa fa-chevron-right btn-reserve-icon-right"></i></a></p>
 <!-- knowledge_index.php のなかにコンポーネント化しておきました -->
 <div class="knowledge_index">
    <?php include("./knowledge_index.php"); ?>
</div>


    </div>
  </section>
  <section id="area_search" class="tab clearfix">
<h3><span><img src="../images/common/title_icon.png" width="20" height="12"></span>エリアから車検を探す</h3>
<!-- tab1 -->
<div class="tab1">
    <input id="tab1" type="radio" name="tabs" class="tab_switch">
    <label class="tab_label" for="tab1">北海道・東北</label>
    <div class="tab_content">
        <div class="back">
        <input id="tab1_bk" type="radio" name="tabs" class="tab_switch2">
        <label class="tab_label2 arrow" for="tab1_bk">戻る</label><span>都道府県を選んでください</span>
        </div>
        <div>
        <ul>
        <li><a href="http://www.tokoton-navi.com/search/pref_02/">北海道</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_03/">青森</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_04/">岩手</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_05/">宮城</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_06/">秋田</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_07/">山形</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_08/">福島</a></li>
        </ul>
        </div>
    </div>
</div>
<!-- tab2 -->
<div class="tab2">
    <input id="tab2" type="radio" name="tabs" class="tab_switch">
    <label class="tab_label" for="tab2">関東</label>
    <div class="tab_content">
        <div class="back">
        <input id="tab2_bk" type="radio" name="tabs" class="tab_switch2">
        <label class="tab_label2 arrow" for="tab2_bk">戻る</label><span>都道府県を選んでください</span>
        </div>
        <div>
        <ul>
        <li><a href="http://www.tokoton-navi.com/search/pref_09/">東京</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_10/">神奈川</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_11/">埼玉</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_12/">千葉</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_13/">茨城</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_14/">栃木</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_15/">群馬</a></li>
        </ul>
        </div>
    </div>
</div>
<!-- tab3 -->
<div class="tab3">
    <input id="tab3" type="radio" name="tabs" class="tab_switch">
    <label class="tab_label" for="tab3">北陸・甲信越</label>
    <div class="tab_content tab3">
        <div class="back">
        <input id="tab3_bk" type="radio" name="tabs" class="tab_switch2">
        <label class="tab_label2 arrow" for="tab3_bk">戻る</label><span>都道府県を選んでください</span>
        </div>
        <div>
        <ul>
        <li><a href="http://www.tokoton-navi.com/search/pref_16/">新潟</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_17/">富山</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_18/">石川</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_19/">福井</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_20/">山梨</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_21/">長野</a></li>
        </ul>
        </div>
    </div>
</div>
<!-- tab4 -->
<div class="tab4">
    <input id="tab4" type="radio" name="tabs" class="tab_switch">
    <label class="tab_label" for="tab4">東海</label>
    <div class="tab_content tab4">
        <div class="back">
        <input id="tab4_bk" type="radio" name="tabs" class="tab_switch2">
        <label class="tab_label2 arrow" for="tab4_bk">戻る</label><span>都道府県を選んでください</span>
        </div>
        <div>
        <ul>
        <li><a href="http://www.tokoton-navi.com/search/pref_22/">愛知</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_23/">岐阜</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_24/">静岡</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_25/">三重</a></li>
        </ul>
        </div>
    </div>
</div>
<!-- tab5 -->
<div class="tab5">
    <input id="tab5" type="radio" name="tabs" class="tab_switch">
    <label class="tab_label" for="tab5">近畿</label>
    <div class="tab_content tab5">
        <div class="back">
        <input id="tab5_bk" type="radio" name="tabs" class="tab_switch2">
        <label class="tab_label2 arrow" for="tab5_bk">戻る</label><span>都道府県を選んでください</span>
        </div>
        <div>
        <ul>
        <li><a href="http://www.tokoton-navi.com/search/pref_26/">大阪</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_27/">兵庫</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_28/">京都</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_29/">滋賀</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_30/">奈良</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_31/">和歌山</a></li>
        </ul>
        </div>
    </div>
</div>
<!-- tab6 -->
<div class="tab6">
    <input id="tab6" type="radio" name="tabs" class="tab_switch">
    <label class="tab_label" for="tab6">中国・四国</label>
    <div class="tab_content tab6">
        <div class="back">
        <input id="tab6_bk" type="radio" name="tabs" class="tab_switch2">
        <label class="tab_label2 arrow" for="tab6_bk">戻る</label><span>都道府県を選んでください</span>
        </div>
        <div>
        <ul>
        <li><a href="http://www.tokoton-navi.com/search/pref_32/">鳥取</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_33/">島根</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_34/">岡山</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_35/">広島</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_36/">山口</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_37/">徳島</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_38/">香川</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_39/">愛媛</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_40/">高知</a></li>
        </ul>
        </div>
    </div>
</div>
<!-- tab7 -->
<div class="tab7">
    <input id="tab7" type="radio" name="tabs" class="tab_switch">
    <label class="tab_label" for="tab7">九州・沖縄</label>
    <div class="tab_content tab7">
        <div class="back">
        <input id="tab7_bk" type="radio" name="tabs" class="tab_switch2">
        <label class="tab_label2 arrow" for="tab7_bk">戻る</label><span>都道府県を選んでください</span>
        </div>
        <div>
        <ul>
        <li><a href="http://www.tokoton-navi.com/search/pref_41/">福岡</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_42/">佐賀</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_43/">長崎</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_44/">熊本</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_45/">大分</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_46/">宮崎</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_47/">鹿児島</a></li>
        <li><a href="http://www.tokoton-navi.com/search/pref_48/">沖縄</a></li>
        </ul>
        </div>
    </div>
</div>
<!-- /.tab --></section>
    <section>
        <div class="title03">
      <h3><span><img src="../images/common/title_icon.png" width="20" height="12"></span>車検ナビに関する情報</h3>
    </div>
      <div class="about_us">
      <ul>
        <li><a href="http://www.tokoton-navi.com/sp/"><span>車検TOP</span></a></li>
                <li class="about_us_left"><a href="http://www.tokoton-navi.com/sp/search_top/">車検を探す</a></li>
      </ul>
      <ul>
        <li><a href="http://www.tokoton-navi.com/sp/useinfo/"><span>車検ナビとは</span></a></li>
        <li class="about_us_left"><a href="http://www.tokoton-navi.com/sp/knowledge/knowledge_1.php">車検のいろは</a></li>
      </ul>
            <ul>
              <li><a href="http://www.tokoton-navi.com/sp/faq/"><span>よくある質問</span></a></li>
        <li class="about_us_left"><a href="http://www.tokoton-navi.com/sp/rules/">利用規約</a></li>
      </ul>
            <ul>
        <li><a href="http://www.tokoton-navi.com/sp/privacy/"><span>プライバシー</span></a></li>
                <li class="about_us_left"><a href="http://www.tokoton-navi.com/sp/company/"><span>運営会社</span></a></li>
      </ul>
    </div>
  </section>

    <!--▼footer-->
  <footer>
    <div id="footer_pc">
      <ul>
          <li><a href="http://www.tokoton-navi.com/"><img src="../images/common/pc.png" width="158" height="33" alt="PCサイトはこちら"></a></li>
        </ul>
    </div>
        <address>Copyright(C)2008-<?=date('Y');?> Tokoton Shaken Navi All Rights Reserved.</address>
    </footer>
    <!--▲footer-->


</div>
<!--▲wrapper-->

<div id="modal">
  <p class="close"><a href="javascript:$.pageslide.close()">閉じる</a></p>
  <h2>■メニュー</h2>
  <ul>
    <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/sp/">車検TOP</a></li>
  </ul>
  <h2>■店舗検索</h2>
  <ul>
    <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/sp/search_top/">車検を探す</a></li>
    <li><a href="http://tokoton-navi.com/search/pref_02">北海道</a></li>
    <li><a href="http://tokoton-navi.com/search/pref_03">青森県</a></li>
    <li><a href="http://tokoton-navi.com/search/pref_04">岩手県</a></li>
    <li><a href="http://tokoton-navi.com/search/pref_05">宮城県</a></li>
    <li><a href="http://tokoton-navi.com/search/pref_06">秋田県</a></li>
    <li><a href="http://tokoton-navi.com/search/pref_07">山形県</a></li>
    <li><a href="http://tokoton-navi.com/search/pref_08">福島県</a></li>
    <li><a href="http://tokoton-navi.com/search/pref_09">東京都</a></li>
    <li><a href="http://tokoton-navi.com/search/pref_10">神奈川県</a></li>
    <li><a href="http://tokoton-navi.com/search/pref_11">埼玉県</a></li>
    <li><a href="http://tokoton-navi.com/search/pref_12">千葉県</a></li>
    <li><a href="http://tokoton-navi.com/search/pref_13">茨城県</a></li>
    <li><a href="http://tokoton-navi.com/search/pref_14">栃木県</a></li>
    <li><a href="http://tokoton-navi.com/search/pref_15">群馬県</a></li>
    <li><a href="http://tokoton-navi.com/search/pref_16">新潟県</a></li>
    <li><a href="http://tokoton-navi.com/search/pref_17">富山県</a></li>
    <li><a href="http://tokoton-navi.com/search/pref_18">石川県</a></li>
    <li><a href="http://tokoton-navi.com/search/pref_19">福井県</a></li>
    <li><a href="http://tokoton-navi.com/search/pref_20">山梨県</a></li>
    <li><a href="http://tokoton-navi.com/search/pref_21">長野県</a></li>
    <li><a href="http://tokoton-navi.com/search/pref_22">愛知県</a></li>
    <li><a href="http://tokoton-navi.com/search/pref_23">岐阜県</a></li>
    <li><a href="http://tokoton-navi.com/search/pref_24">静岡県</a></li>
    <li><a href="http://tokoton-navi.com/search/pref_25">三重県</a></li>
    <li><a href="http://tokoton-navi.com/search/pref_26">大阪府</a></li>
    <li><a href="http://tokoton-navi.com/search/pref_27">兵庫県</a></li>
    <li><a href="http://tokoton-navi.com/search/pref_28">京都府</a></li>
    <li><a href="http://tokoton-navi.com/search/pref_29">滋賀県</a></li>
    <li><a href="http://tokoton-navi.com/search/pref_30">奈良県</a></li>
    <li><a href="http://tokoton-navi.com/search/pref_31">和歌山県</a></li>
    <li><a href="http://tokoton-navi.com/search/pref_32">鳥取県</a></li>
    <li><a href="http://tokoton-navi.com/search/pref_33">島根県</a></li>
    <li><a href="http://tokoton-navi.com/search/pref_34">岡山県</a></li>
    <li><a href="http://tokoton-navi.com/search/pref_35">広島県</a></li>
    <li><a href="http://tokoton-navi.com/search/pref_36">山口県</a></li>
    <li><a href="http://tokoton-navi.com/search/pref_37">徳島県</a></li>
    <li><a href="http://tokoton-navi.com/search/pref_38">香川県</a></li>
    <li><a href="http://tokoton-navi.com/search/pref_39">愛媛県</a></li>
    <li><a href="http://tokoton-navi.com/search/pref_40">高知県</a></li>
    <li><a href="http://tokoton-navi.com/search/pref_41">福岡県</a></li>
    <li><a href="http://tokoton-navi.com/search/pref_42">佐賀県</a></li>
    <li><a href="http://tokoton-navi.com/search/pref_43">長崎県</a></li>
    <li><a href="http://tokoton-navi.com/search/pref_44">熊本県</a></li>
    <li><a href="http://tokoton-navi.com/search/pref_45">大分県</a></li>
    <li><a href="http://tokoton-navi.com/search/pref_46">宮崎県</a></li>
    <li><a href="http://tokoton-navi.com/search/pref_47">鹿児島県</a></li>
    <li><a href="http://tokoton-navi.com/search/pref_48">沖縄県</a></li>
  </ul>
  <h2>■お役立ちコンテンツ</h2>
  <ul>
    <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/sp/knowledge/knowledge_1.php">車検のいろは</a></li>
  </ul>
  <h2>■とことん車検ナビに関する情報</h2>
  <ul>
    <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/sp/useinfo/">とことん車検ナビとは</a></li>
    <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/sp/faq/">よくある質問</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/sp/rules/">利用規約</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/sp/privacy/">プライバシーポリシー</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/sp/company/">運営会社</a></li>
  </ul>
    <h2>■その他</h2>
  <ul>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/keisai.html">掲載をお考えの方</a></li>
  </ul>
  <p class="close"><a href="javascript:$.pageslide.close()">閉じる</a></p>
</div>
<script type="text/javascript" src="../js/jquery.pageslide.min.js"></script>
<script>
  /* Default pageslide, moves to the right */
  $(".first").pageslide();

  /* Slide to the left, and make it model (you'll have to call $.pageslide.close() to close) */
  $(".second").pageslide({ direction: "left", modal: true });
</script>
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

<!-- Yahoo Code for your Target List -->
<script type="text/javascript">
/* <![CDATA[ */
var yahoo_ss_retargeting_id = 1000395893;
var yahoo_sstag_custom_params = window.yahoo_sstag_params;
var yahoo_ss_retargeting = true;
/* ]]> */
</script>
<script type="text/javascript" src="https://s.yimg.jp/images/listing/tool/cv/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="https://b97.yahoo.co.jp/pagead/conversion/1000395893/?guid=ON&script=0&disvt=false"/>
</div>
</noscript>

</body>
</html>
