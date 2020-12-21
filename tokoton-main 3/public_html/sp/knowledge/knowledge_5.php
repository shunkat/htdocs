<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="keywords" content="車検 期間" />
<meta name="description" content="車検には有効期間があり、有効期間が切れる前に新たに車検を受ける必要があります。車検は満了日の一か月前から受けることができます。慌てて車検を受けることのないよう、車検の期間についての知識を紹介しています" />
<title>いつから受けられる？車検の期間について | とことん車検ナビ</title>
<link href="../../css/user/shop-detail.css" rel="stylesheet" type="text/css" /><!-- 下部固定ボタンstyle 20191119_add -->
<link href="../css/reset.css" rel="stylesheet" type="text/css" />
<link href="../css/reset_table.css" rel="stylesheet" type="text/css" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<link href="../css/acordion.css" rel="stylesheet" type="text/css" />
<link href="../css/jquery.pageslide.css" rel="stylesheet" type="text/css" />
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<link rel="canonical" href="http://www.tokoton-navi.com/knowledge_5.php" />
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
              <p><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/sp/"><img src="../images/common/logo.png" width="136" height="18" alt="とことん車検ナビ"></a></p>
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
            <span  itemprop="title">いつから受けられる？車検の期間について</span>
          </li>
        </ul>
      <br class="clear"/>
      </div>
    </div>
<!-- パンくず対応 ED -->



<!--▼section-->
  <section>
  <h1 class="text_center"><span class="shop-info-price-c">いろは<strong style="font-size:18px;">5</strong></span>&nbsp;<span class="title04">いつから受けられる？車検の期間</span></h1>

        <div id="section_box">
        <p>
皆さんは愛車の車検の有効期限をご存知ですか？<br>車検の有効期限を知らないと、一発で免許停止になってしまうリスクもあります。2016年秋には国土交通省から「車検が切れ車両をその場で摘発できるシステムを2017年度より実験的に導入する」という発表がありました。<br>
国土交通省によると全国で約20万台もの車が車検切れの状態で公道を走行しているそうです。<br>
仮に、車検も自賠責保険も切れた状態で公道を走行したことが発覚した場合、一発で</p>
  <ul>
    <li>違反点数12点</li>
    <li>90日間の免許停止</li>
    <li>1年6ヶ月以下の懲役または80万円以下の罰金</li>
  </ul>
 <p>
が科せられます。<br>
公道を走行しただけでこの処罰ですから、事故でも起こした場合には目も当てられません。<br>
こんな事態を避けるためにも車検の有効期限には気を付けたいものですが、車検の有効期限はいつまでで、いつ車検を受ければ良いのでしょうか？

      <!--▼section-->
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


</p>

            <h2 class="shop-info-sub"><span class="shop-info-sub-in">車(普通車・軽自動車・バイク)の車検の有効期間</span></h2>
            <p>車検の期間は車の種類(普通車・軽自動車・バイク)に寄らず基本的に全て同じです。
しかし主に貨物車に区分される1・4ナンバーの車だけは車検期間が他と異なるので注意が必要です。</p>
<p><span class="shop-info-sub-in">新車3年、それ以後2年</span></p>
 <p>新車の場合、有効期限は登録日から3年です。たとえば2015年11月3日に車両の登録を行った場合は車検の有効期限は2018年11月2日までとなります。<br>
2回以降の車検の有効期限は2年です。なので、車検の時期は新車の3年目車検から5年目→7年と言う順に訪れます。
</p>
<p><span class="shop-info-sub-in">1・4ナンバーの車検の有効期限</span></p>
<p>前述した通り、1・4ナンバーは他の車と車検の時期が異なります。1ナンバーの車は普通貨物車、4ナンバーの車は小型貨物車・軽貨物車に区分され、重い荷物を輸送する用途で使われることが多いのでその分車検の期間は短くなっています。<br>
1・4ナンバーの普通車の車検の有効期限は新車なら2年、その後の車検は1年となります。なので、車検の時期は2年→3年→4年と言う順に訪れます。<br>
4ナンバーの軽自動車(軽自動車に1ナンバーは無い)の車検の有効期限は初回、2回目にかかわらず2年となっているので、車検の時期は2年→4年→6年と言う順に訪れます。
</p>
<p><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/sp/search_top/" class="btn-mitsumori scroll"><img src="../images/common/search_car.png" width="17" class=" btn-reserve-icon-left"/>&nbsp;愛車の条件に合った車検を探す<i class="fa fa-chevron-right btn-reserve-icon-right"></i></a></p>
            <h2 class="shop-info-sub"><span class="shop-info-sub-in">車検はいつから受けられるのか、いつ受けるべきか </span></h2>
            <p>車検の有効期限について説明しましたが、実際に登録した日なんて覚えていない人がほとんどでしょう。
では有効期限は何を見て判断すればよいのでしょうか？</p>
<p><span class="shop-info-sub-in">有効期限の調べ方</span></p>
            <p>もっとも確実でお勧めできる方法は車検証を見ることです。<br>
            <img src="/img/user/knowledge/certificate.jpg" alt="車検証" width="100%"><br>
            この写真の左下にある「有効期間の満了する日」が車検の有効期限となるため、この日までに車検を更新しなければなりません。</p>
<p><span class="shop-info-sub-in">満了日の判断にステッカーを見てはいけない！</span></p>
            <p><img src="/img/user/knowledge/Sticker.jpg" alt="車検のステッカー" width="100%">
            車検の有効期間を調べる際に車検証を確認するのが良いと説明しましたが、フロントガラスに貼り付けられたステッカーでも有効期限がわかるのではないか、という人もいるかと思います。(上写真)<br>
しかし、フロントガラスの表(外側)に書いてあるのは車検が満了する年月だけなのです。<br>
つまりステッカーに28年7月と書いてあったとしても7月1日なのか31日なのかまではわかりません。車検を受けたことのない人が末日まで大丈夫だろうと思っていたらいつの間にか満了日を過ぎていたなんてことや、末日ではないと知り、期限を確認した時には都合の合う日がなく、オプション代金を支払って引き取りに来てもらうハメになった、なんて事もあり得ます。<br>
ステッカーの裏には日付まで書いてあるものもありますが表同様月までしかわからないものや手書きで日にちを記入するステッカーもあり、満了日を勘違いしてしまう可能性があります。そのような自体にならないためにもステッカー等を見て車検が近づいてきたと感じたら満了日は車検証で確認することが大事なのです。</p>

<p><span class="shop-info-sub-in">車検の満了日1ヶ月前から受けるのが「基本」</span></p>
            <p>いつまでに車検を受けなければならない、と言う期限はありますが、実は車検を受けることはいつでも可能です。極端な例を挙げると車検に合格した1週間後にもう一度車検を受けることも出来るのです。<br>
しかし、車検の有効期間は最後に合格した日から2年間となるため車検の回数をなるべく抑えるために期限が近づいてから受ける人がほとんどなのです。<br>
「車検の有効期間が車検に合格した日から2年間ならば、満了日に車検を受けるのが一番お得なのでは？」<br>
と思う人もいるかもしれません。<br>
しかし、混雑回避や仕事で忙しい人がいることを踏まえて、満了日の1ヶ月前以降であればその車検の有効期間が満了日に車検を受けた場合と同じ期間になるのです。具体的には、2016年12月15日が車検の満了日の場合は2016年11月15日以降に車検を受ければ次の車検満了日が2018年12月15日となり、仮に2016年11月14日に車検を受けてしまうと、次の車検満了日は2018年11月13日となってしまいます。<br>
そのため車検の満了日1ヶ月前から受けるのが基本となっています。
</p>
<p><span class="shop-info-sub-in">45日前でも大丈夫な特例もある</span></p>
            <p>車検業者の中には、満了日の45日前以降の車検であれば先程述べたものと同じく満了日に車検を受けた場合の期間と同じ有効期間になる業者もあり、そのことを強みにしている業者もあります。
これには保有している工場に理由があるのです。車検業者には大きく分けて下の2種類の業者がいます。</p>
<ul>
<li>認証工場：整備のみを行える。検査自体は他の検査場で行う。</li>
<li>指定工場：整備から検査までを一貫して行う事が出来る。</li>
</ul>
<p>
指定工場の場合、車を検査場に持っていくことなく自分の工場で検査を実施できます。ただし検査実施後15日以内に車検場に書類を提出し、正式な車検証を発行する必要があります。そのため45日前に車検を実施し、その後15日後に車検場に書類を提出してもらうことで、45日前から車検を実施することができるのです。<br>

もし車検をする工場が指定工場ならば、45日前から車検ができないか相談してみると応じてくれる可能性があるでしょう。
            </p>
<p><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/sp/search_top/" class="btn-mitsumori scroll"><img src="../images/common/search_car.png" width="17" class=" btn-reserve-icon-left"/>&nbsp;愛車の条件に合った車検を探す<i class="fa fa-chevron-right btn-reserve-icon-right"></i></a></p>
<h2 class="shop-info-sub"><span class="shop-info-sub-in">車検を予約する時期</span></h2>
            <p>車検は1ヶ月前から損をせず受けられると説明しましたが、実際に検査をする何日前に予約すればよいかを説明していきます。</p>
<p><span class="shop-info-sub-in">予約時期と早割</span></p>
            <p>車検業者は入庫の1週間~1ヶ月前から予約を受け付けているところが多いです。
しかし、車検業者によっては早くから予約することで料金の割引が受けられる「早割制度」というものを導入しており、1週間前、1ヶ月前、3ヶ月前など予約のタイミングが早くなるにつれて割引率も高くなる場合があります。3ヶ月前ともなると予定を組むのが難しくなってくるため、早めから車検を意識して予定を組むことがお得に車検を受けるためのコツと言えるでしょう。<br>
早割制度ですが、もっとも早くから車検の予約を行っている業者はなんと2年前(新車であれば3年前)から予約を受け付けています。予約と言っても、当然2年後の予定など分からないので日にちは確定させない仮予約と言う形式が多いようです。車検を受ける場所が決まっている場合は利用してみると良いでしょう。
</p>

<h2 class="shop-info-sub"><span class="shop-info-sub-in">車検期間の気を付けるポイント</span></h2>
            <p>車検の有効期間で勘違いしがちなポイントをまとめました。</p>
<p><span class="shop-info-sub-in">中古車の車検期間</span></p>
            <p>中古車の車検は初回さえ無事に終わってしまえば、その後は新車で購入した場合の2回目以降の期間と同じになるので間違えることは少ないかと思います。しかし、購入時の車検の状態によっては「1年も乗っていないのに車検が切れてしまっていた」　なんてこともあり得るので初回の車検には十分注意しましょう。
中古車は購入時の車検の状態によって大きく三つに分けられます。
<ul>
<li>車検2年付き、車検切れ</li>
<p>購入時に車検が切れているのが車検切れ、購入時に車検を通す費用を負担してくれるのが車検2年付きです。これら二つについては、2回目以降の車検を行った状態と考えて良く、その後の車検は2年→4年→６年…というふうに続くのでそこまで問題ないかと思います。</p>
<li>車検残り</li>
<p>中古車の車検で陥りやすいのがこの車検残りです。購入時に車検が1年近く残っている場合などに、残っている車検の有効期限をそのままで販売いることがあります。その場合、当然購入者は車検が切れる前に車検を通さなければならないので、初回の車検がいつ訪れるのかはしっかり確認してから購入するようにしましょう。</p>
</ul>
</p>
<p><span class="shop-info-sub-in">10年経過車の車検期間</span></p>
            <p>10年経過車は毎年車検が必要になる、と聞いたことがあるかもしれません。しかし1995年の道路運送車両法の改正によって10年経過車の車検期間も2年のままとなりました。<br>
技術の発達から車の寿命は年々増加傾向にあり、現在では小型車、普通車ともに寿命が12年を上回っています。
</p>
<p><span class="shop-info-sub-in">1ヶ月前っていつ？</span></p>
           <p style="margin-bottom:5em;">ネットで車検の期間についてしらべていると「車検は1ヶ月前から受けられる」、と書いてあるサイトと「30日前から受けられる」と書いて
                  あるサイトがあります(受けられる、というのは前述した「有効期間が満了日から2年間で」の意味)。では、2017年8月31日が車検満了日の場合
                  、有効期間が満了日から2年間で車検を受けられるのは30日前の2017年8月1日からか1ヶ月前の2017年7月31日からか、どちらでしょうか？</p>
              　　<p style="margin-bottom:3em;">正解は1ヶ月前の2017年7月31日です。</p>
                  <p>
                  1日しか変わらないのでそこまで気にする必要もないかもしれませんがマメ知識として知っておくとよいでしょう。ちなみに満了日が5月31日の
                  場合1ヶ月前は4/31となりますが、4/31日は存在しないため、4/30日が満了日計算の始まるタイミングとなります。(2月についても同様です)<br></p>

            <h2 class="shop-info-sub"><span class="shop-info-sub-in">まとめ</span></h2>
            <p>車検の期間がわからなくなった時に車検証を見れば間違いありません。違反を行わないためにも、お得に車検を行うためにも車検期間を踏まえて、早めに検討、予約をすることが重要です。車検の期間について学んだと思いますがそのほかにも、費用、予約方法、など車検にまつわる基礎知識はたくさん存在します。車の維持費の中でも車検の費用は大部分を占めます。長く車にのる予定がある人は車検について詳しく調べてみると良いでしょう。</p>


            <br>
            <p><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/sp/search_top/" class="btn-mitsumori scroll"><img src="../images/common/search_car.png" width="17" class=" btn-reserve-icon-left"/>&nbsp;愛車の条件に合った車検を探す<i class="fa fa-chevron-right btn-reserve-icon-right"></i></a></p>
            <!--▼section-->



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
          <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/"><img src="../images/common/pc.png" width="158" height="33" alt="PCサイトはこちら"></a></li>
        </ul>
    </div>
        <address>Copyright(C)2008-<?= date('Y') ?> Tokoton Shaken Navi All Rights Reserved.</address>
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

</body>
</html>
