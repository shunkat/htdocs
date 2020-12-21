<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="keywords" content="車検," />
<meta name="description" content="コロナで車検を受検できず焦っている方もいると思います。車検期間がいつまで延長したのか、次回の車検にどう影響するのかを詳しく解説していきます。" />
<title>コロナで車検延長？注意点は？ | とことん車検ナビ</title>
<link href="../../css/user/shop-detail.css" rel="stylesheet" type="text/css" /><!-- 下部固定ボタンstyle 20191119_add -->
<link href="../css/reset.css" rel="stylesheet" type="text/css" />
<link href="../css/reset_table.css" rel="stylesheet" type="text/css" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<link href="../css/acordion.css" rel="stylesheet" type="text/css" />
<link href="../css/jquery.pageslide.css" rel="stylesheet" type="text/css" />
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<link rel="canonical" href="http://www.tokoton-navi.com/knowledge_18.php" />
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

<style>
table.type01 {
	border-collapse: collapse;
	text-align: left;
	line-height: 1.5;
    width: 100%;
}
table.type01 th {
	/*width: 150px;*/
	padding: 10px;
	font-weight: bold;
	vertical-align: top;
	border: 1px solid #ccc;
    background-color: rgb(230, 255, 224);
    text-align: center;
    font-size: 12px;
}
table.type01 td {
	/*width: 350px;*/
	padding: 10px;
	vertical-align: top;
	border: 1px solid #ccc;
    text-align: center;
}
</style>

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
            <span  itemprop="title">コロナで車検延長？注意点は？</span>
          </li>
        </ul>
      <br class="clear"/>
      </div>
    </div>
<!-- パンくず対応 ED -->



<!--▼section-->
  <section>

        <div id="section_box">
        <h1 class="text_center"><span class="shop-info-price-c">いろは<strong style="font-size:18px;">18</strong></span>&nbsp;<span class="title04">コロナで車検延長？注意点は？</span></h1>

            <p><img src="../images/knowledge/knowledge18_2.jpg" alt="緊急事態宣言" width="100%"></p>
            <p>コロナで車検を受検できず焦っている方もいると思います。国土交通省は緊急事態宣言により車検の有効期限を延長することを発表しました。この記事では車検期間がいつまで延長したのか、次回の車検にどう影響するのかを詳しく解説していきます。</p>
            <section id="area_search" class="tab clearfix">
  <h3>
    <span
      ><img
        src="../images/common/title_icon.png"
        width="20"
        height="12" /></span
    >エリアから車検を探す
  </h3>
  <!-- tab1 -->
  <div class="tab1">
    <input id="tab1" type="radio" name="tabs" class="tab_switch" />
    <label class="tab_label" for="tab1">北海道・東北</label>
    <div class="tab_content">
      <div class="back">
        <input id="tab1_bk" type="radio" name="tabs" class="tab_switch2" />
        <label class="tab_label2 arrow" for="tab1_bk">戻る</label
        ><span>都道府県を選んでください</span>
      </div>
      <div>
        <ul>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_02/">北海道</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_03/">青森</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_04/">岩手</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_05/">宮城</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_06/">秋田</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_07/">山形</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_08/">福島</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- tab2 -->
  <div class="tab2">
    <input id="tab2" type="radio" name="tabs" class="tab_switch" />
    <label class="tab_label" for="tab2">関東</label>
    <div class="tab_content">
      <div class="back">
        <input id="tab2_bk" type="radio" name="tabs" class="tab_switch2" />
        <label class="tab_label2 arrow" for="tab2_bk">戻る</label
        ><span>都道府県を選んでください</span>
      </div>
      <div>
        <ul>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_09/">東京</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_10/">神奈川</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_11/">埼玉</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_12/">千葉</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_13/">茨城</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_14/">栃木</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_15/">群馬</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- tab3 -->
  <div class="tab3">
    <input id="tab3" type="radio" name="tabs" class="tab_switch" />
    <label class="tab_label" for="tab3">北陸・甲信越</label>
    <div class="tab_content tab3">
      <div class="back">
        <input id="tab3_bk" type="radio" name="tabs" class="tab_switch2" />
        <label class="tab_label2 arrow" for="tab3_bk">戻る</label
        ><span>都道府県を選んでください</span>
      </div>
      <div>
        <ul>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_16/">新潟</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_17/">富山</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_18/">石川</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_19/">福井</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_20/">山梨</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_21/">長野</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- tab4 -->
  <div class="tab4">
    <input id="tab4" type="radio" name="tabs" class="tab_switch" />
    <label class="tab_label" for="tab4">東海</label>
    <div class="tab_content tab4">
      <div class="back">
        <input id="tab4_bk" type="radio" name="tabs" class="tab_switch2" />
        <label class="tab_label2 arrow" for="tab4_bk">戻る</label
        ><span>都道府県を選んでください</span>
      </div>
      <div>
        <ul>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_22/">愛知</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_23/">岐阜</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_24/">静岡</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_25/">三重</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- tab5 -->
  <div class="tab5">
    <input id="tab5" type="radio" name="tabs" class="tab_switch" />
    <label class="tab_label" for="tab5">近畿</label>
    <div class="tab_content tab5">
      <div class="back">
        <input id="tab5_bk" type="radio" name="tabs" class="tab_switch2" />
        <label class="tab_label2 arrow" for="tab5_bk">戻る</label
        ><span>都道府県を選んでください</span>
      </div>
      <div>
        <ul>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_26/">大阪</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_27/">兵庫</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_28/">京都</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_29/">滋賀</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_30/">奈良</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_31/">和歌山</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- tab6 -->
  <div class="tab6">
    <input id="tab6" type="radio" name="tabs" class="tab_switch" />
    <label class="tab_label" for="tab6">中国・四国</label>
    <div class="tab_content tab6">
      <div class="back">
        <input id="tab6_bk" type="radio" name="tabs" class="tab_switch2" />
        <label class="tab_label2 arrow" for="tab6_bk">戻る</label
        ><span>都道府県を選んでください</span>
      </div>
      <div>
        <ul>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_32/">鳥取</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_33/">島根</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_34/">岡山</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_35/">広島</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_36/">山口</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_37/">徳島</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_38/">香川</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_39/">愛媛</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_40/">高知</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- tab7 -->
  <div class="tab7">
    <input id="tab7" type="radio" name="tabs" class="tab_switch" />
    <label class="tab_label" for="tab7">九州・沖縄</label>
    <div class="tab_content tab7">
      <div class="back">
        <input id="tab7_bk" type="radio" name="tabs" class="tab_switch2" />
        <label class="tab_label2 arrow" for="tab7_bk">戻る</label
        ><span>都道府県を選んでください</span>
      </div>
      <div>
        <ul>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_41/">福岡</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_42/">佐賀</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_43/">長崎</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_44/">熊本</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_45/">大分</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_46/">宮崎</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_47/">鹿児島</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_48/">沖縄</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- /.tab -->
</section>

            <h2 class="shop-info-sub"><span class="shop-info-sub-in">車検いつまで延長？</span></h2>
            <p><span class="shop-info-sub-in">2/28～3/31までに車検が切れる方へ</span></p>
            <p>車検の有効期限が3月31日までの車は当初は有効期限が4月30日まで延長でした。<br>
              しかし6月1日までに有効期限が更新されました。<br>
              また自賠責保険（強制保険）も申請なしで6月1日まで延長になりました。<br>
              加えて、自動車検査証の変更手続きも不要です。</p>
              <p style="color: red;">※７都府県の車両は4月30日から6月1日まで変更になりました。（4/7）<br>
                  全国の車両は4月30日から6月1日まで変更になりました。（4/16）</p>
            <p><span class="shop-info-sub-in">4/8～5/31までに車検が切れる方へ</span></p>
            <p>車検の有効期限が5月31日までの車は有効期限6月1日まで延長されました。<br>
              また同様に自賠責保険（強制保険）も申請なしで6月1日まで延長になります。<br>
              自動車検査証の変更手続きも不要です。<br>
              <br>
              当初は緊急事態宣言の対象である7都府県（東京、埼玉、神奈川、千葉、大阪、兵庫、福岡）だけに特別措置が取られていましました。しかし政府が4月16日にこの措置を全国も対象にしました。</p>
            <p><span class="shop-info-sub-in">4/1～4/7までに車検が切れる場合</span></p>
            <p>車検有効期間4/1～4/7までの車に関しては延長措置対象外となっています。そのため有効期限後に受検した場合、従来同様に車検切れになります。<br>
              車検切れの対処方法については「<a href="knowledge_13.php">いろは13 車検切れの場合の対処法</a>」の記事でご紹介していますのでご覧ください。</p>

            <p><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/sp/search_top/" class="btn-mitsumori scroll"><img src="../images/common/search_car.png" width="17" class=" btn-reserve-icon-left"/>&nbsp;お住まいの地域から車検を探す<i class="fa fa-chevron-right btn-reserve-icon-right"></i></a></p>

            <h2 class="shop-info-sub"><span class="shop-info-sub-in">次回の車検・強制保険の有効期限は？</span></h2>
            <p>ここでは有効期限が変動することに次回の車検・強制保険の有効期限の調べ方を紹介しています。また注意点についても解説していきます。</p>
            <p><span class="shop-info-sub-in">次回の車検有効期限はどうなる？</span></p>
            <p>特例措置に伴い国土交通省か次回有効期限が調べられる表が発表されたので記載します。<br>
              ご自身がどれに当てはまるかご確認ください。（ピンク：通常、青：特例措置）<br>
              ※事前に伸長手続きは不要です。継続検査時に車検の伸長希望の旨をお申し出ください。<br>
              <img src="../images/knowledge/knowledge18_1.jpg" alt="自動車検査証の伸長に係る有効期限について" width="100%" class="border">
              <br class="clear" />
              出典：国土交通省資料<br>
              <a href="http://www.mlit.go.jp/jidosha/kensatoroku/kensa/200416_shincho.pdf" target="_blank">http://www.mlit.go.jp/jidosha/kensatoroku/kensa/200416_shincho.pdf</a><br>
              <a href="http://www.mlit.go.jp/jidosha/kensatoroku/kensa/index.htm" target="_blank">http://www.mlit.go.jp/jidosha/kensatoroku/kensa/index.htm</a></p>
            <p><span class="shop-info-sub-in">新しい自動車損害賠償責任保険の契約期間</span></p>
            <p>車検有効期限の延長を希望する・しない、有効期限切れ、車検の受検日により新しい自賠責保険の契約期間が変わってきます。</p>
            <p><span class="shop-info-sub-in2">（１）4月30日までの車検伸長を希望する</span></p>
            <p>現自動車損害賠償責任保険の終期から新たな継続車検の有効期限の末日（令和4年4月30日まで）を補う自動車損害賠償責任保険を契約する<br>
                Ex) 現有効期限：3/30  車検日：4/10<br>
                新有効期限：令和2年3月30日～令和4年5月1日以降</p>
            <p><span class="shop-info-sub-in2">（２）4月30日までの車検伸長を希望しないで受検日からとする場合</span></p>
            <p>1 有効期限内で受検する場合<br>
                　従来のものと変わらない<br>
                2 現有効期限切れで受検する場合<br>
                　受検日から車検期間の末日までを補う自動車損害賠償責任保険を契約する<br>
                　Ex) 現有効期限：4/15  車検日：4/2<br>
                　新有効期限：令和2年4月15日～令和4年4月26日以降</p>
            <p><span class="shop-info-sub-in2">（３）6月1日までの車検伸長を希望する</span></p>
            <p>現自動車損害賠償責任保険の終期から新たな継続車検の有効期限の末日（令和4年6月1日まで）を補う自動車損害賠償責任保険を契約する<br>
                Ex) 現有効期限：4/15  車検日：5/19<br>
                新有効期限：令和2年4月15日～令和4年6月2日以降</p>
            <p><span class="shop-info-sub-in2">（４）6月1日までの車検伸長を希望しないで受検日からとする場合</span></p>
            <p> 1 有効期限内で受検する場合<br>
                　従来のものと変わらない<br>
                2 現有効期限切れで受検する場合<br>
                　受検日から車検期間の末日までを補う自動車損害賠償責任保険を契約する<br>
                　Ex) 現有効期限：4/15  車検日：5/14<br>
                　新有効期限：令和2年4月15日～令和4年5月14日以降</p>
            <p><span class="shop-info-sub-in">任意保険には注意</span></p>
            <p>任意保険は契約が車検時期と同時ということが多いと思います。しかしこちらは延長措置とは関係なく更新の手続きが必要です。無保険にならないよう各代理店に自分がその保険に加入しているか確認をお願いします。</p>

            <p><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/sp/search_top/" class="btn-mitsumori scroll"><img src="../images/common/search_car.png" width="17" class=" btn-reserve-icon-left"/>&nbsp;お住まいの地域から車検を探す<i class="fa fa-chevron-right btn-reserve-icon-right"></i></a></p>

            <h2 class="shop-info-sub"><span class="shop-info-sub-in">最新の情報を把握する</span></h2>
            <p>車検の有効期限はコロナの影響に伴って変動しています。そのため、記載されている情報が古い可能性があります。最新の情報を把握し行動するようにしましょう。<br>
            また、期限伸長による次回の車検・強制保険の有効期限の調べ方、任意保険の注意点などについても紹介しています。ご自身がどれに当てはまるのかをご確認ください。</p>

            <p><a href="http://www.tokoton-navi.com/sp/search_top/" class="btn-mitsumori scroll"><img src="../images/common/search_car.png" width="17" class=" btn-reserve-icon-left"/>　車検ができる店舗を探す<i class="fa fa-chevron-right btn-reserve-icon-right"></i></a></p>



 <!-- knowledge_index.php のなかにコンポーネント化しておきました -->
 <div class="knowledge_index">
    <?php include("./knowledge_index.php"); ?>
</div>


    </div>
  </section>
  <section id="area_search" class="tab clearfix">
  <h3>
    <span
      ><img
        src="../images/common/title_icon.png"
        width="20"
        height="12" /></span
    >エリアから車検を探す
  </h3>
  <!-- tab1 -->
  <div class="tab1">
    <input id="tab1" type="radio" name="tabs" class="tab_switch" />
    <label class="tab_label" for="tab1">北海道・東北</label>
    <div class="tab_content">
      <div class="back">
        <input id="tab1_bk" type="radio" name="tabs" class="tab_switch2" />
        <label class="tab_label2 arrow" for="tab1_bk">戻る</label
        ><span>都道府県を選んでください</span>
      </div>
      <div>
        <ul>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_02/">北海道</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_03/">青森</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_04/">岩手</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_05/">宮城</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_06/">秋田</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_07/">山形</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_08/">福島</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- tab2 -->
  <div class="tab2">
    <input id="tab2" type="radio" name="tabs" class="tab_switch" />
    <label class="tab_label" for="tab2">関東</label>
    <div class="tab_content">
      <div class="back">
        <input id="tab2_bk" type="radio" name="tabs" class="tab_switch2" />
        <label class="tab_label2 arrow" for="tab2_bk">戻る</label
        ><span>都道府県を選んでください</span>
      </div>
      <div>
        <ul>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_09/">東京</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_10/">神奈川</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_11/">埼玉</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_12/">千葉</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_13/">茨城</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_14/">栃木</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_15/">群馬</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- tab3 -->
  <div class="tab3">
    <input id="tab3" type="radio" name="tabs" class="tab_switch" />
    <label class="tab_label" for="tab3">北陸・甲信越</label>
    <div class="tab_content tab3">
      <div class="back">
        <input id="tab3_bk" type="radio" name="tabs" class="tab_switch2" />
        <label class="tab_label2 arrow" for="tab3_bk">戻る</label
        ><span>都道府県を選んでください</span>
      </div>
      <div>
        <ul>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_16/">新潟</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_17/">富山</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_18/">石川</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_19/">福井</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_20/">山梨</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_21/">長野</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- tab4 -->
  <div class="tab4">
    <input id="tab4" type="radio" name="tabs" class="tab_switch" />
    <label class="tab_label" for="tab4">東海</label>
    <div class="tab_content tab4">
      <div class="back">
        <input id="tab4_bk" type="radio" name="tabs" class="tab_switch2" />
        <label class="tab_label2 arrow" for="tab4_bk">戻る</label
        ><span>都道府県を選んでください</span>
      </div>
      <div>
        <ul>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_22/">愛知</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_23/">岐阜</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_24/">静岡</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_25/">三重</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- tab5 -->
  <div class="tab5">
    <input id="tab5" type="radio" name="tabs" class="tab_switch" />
    <label class="tab_label" for="tab5">近畿</label>
    <div class="tab_content tab5">
      <div class="back">
        <input id="tab5_bk" type="radio" name="tabs" class="tab_switch2" />
        <label class="tab_label2 arrow" for="tab5_bk">戻る</label
        ><span>都道府県を選んでください</span>
      </div>
      <div>
        <ul>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_26/">大阪</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_27/">兵庫</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_28/">京都</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_29/">滋賀</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_30/">奈良</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_31/">和歌山</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- tab6 -->
  <div class="tab6">
    <input id="tab6" type="radio" name="tabs" class="tab_switch" />
    <label class="tab_label" for="tab6">中国・四国</label>
    <div class="tab_content tab6">
      <div class="back">
        <input id="tab6_bk" type="radio" name="tabs" class="tab_switch2" />
        <label class="tab_label2 arrow" for="tab6_bk">戻る</label
        ><span>都道府県を選んでください</span>
      </div>
      <div>
        <ul>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_32/">鳥取</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_33/">島根</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_34/">岡山</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_35/">広島</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_36/">山口</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_37/">徳島</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_38/">香川</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_39/">愛媛</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_40/">高知</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- tab7 -->
  <div class="tab7">
    <input id="tab7" type="radio" name="tabs" class="tab_switch" />
    <label class="tab_label" for="tab7">九州・沖縄</label>
    <div class="tab_content tab7">
      <div class="back">
        <input id="tab7_bk" type="radio" name="tabs" class="tab_switch2" />
        <label class="tab_label2 arrow" for="tab7_bk">戻る</label
        ><span>都道府県を選んでください</span>
      </div>
      <div>
        <ul>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_41/">福岡</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_42/">佐賀</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_43/">長崎</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_44/">熊本</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_45/">大分</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_46/">宮崎</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_47/">鹿児島</a>
          </li>
          <li>
            <a href="http://www.tokoton-navi.com/search/pref_48/">沖縄</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- /.tab -->
</section>

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
