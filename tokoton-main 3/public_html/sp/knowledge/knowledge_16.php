<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="keywords" content="車検,費用,分割,支払い" />
<meta name="description" content="車検費用を分割払いする方法、内訳や相場、分割払いするときの注意点についてご紹介します。" />
<title>車検費用を分割で支払う方法とは？気になる料金の内訳と注意点 | とことん車検ナビ</title>
<link href="../../css/user/shop-detail.css" rel="stylesheet" type="text/css" /><!-- 下部固定ボタンstyle 20191119_add -->
<link href="../css/reset.css" rel="stylesheet" type="text/css" />
<link href="../css/reset_table.css" rel="stylesheet" type="text/css" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<link href="../css/acordion.css" rel="stylesheet" type="text/css" />
<link href="../css/jquery.pageslide.css" rel="stylesheet" type="text/css" />
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<link rel="canonical" href="http://www.tokoton-navi.com/knowledge_16.php" />
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
            <span  itemprop="title">車検費用を分割で支払う方法とは？気になる料金の内訳と注意点</span>
          </li>
        </ul>
      <br class="clear"/>
      </div>
    </div>
<!-- パンくず対応 ED -->



<!--▼section-->
  <section>
  <h1 class="text_center"><span class="shop-info-price-c">いろは<strong style="font-size:18px;">16</strong></span>&nbsp;<span class="title04">検費用を分割で支払う方法とは？気になる料金の内訳と注意点</span></h1>
        <div id="section_box">
            <p><img src="../images/knowledge/knowledge16_3.jpg" alt="車検費用" width="100%"></p>
            <p>車を所有していると、定期的に車検(新規検査、継続検査)を行わなければなりません。車検代は高額で、まとまったお金を支払わなければならないため、今月は出費が厳しい…一括払いはできない…という方もいるのではないでしょうか。しかし、車検を先延ばしにして車検切れを起こしてしまうと、公道を走れないなどのさまざまな問題があります。<br>
            それでは、車検の費用を分割で支払うことはできるのでしょうか。<br>
            今回は、車検費用を分割払いする方法、内訳や相場、分割払いするときの注意点についてご紹介します。</p>
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

            <h2 class="shop-info-sub"><span class="shop-info-sub-in">車検費用を分割払いする方法</span></h2>
            <p>まず車検費用を分割払いできるかというところですが、結論から言うと可能です。分割で支払う方法もさまざまありますので、こちらで詳しく解説します。</p>
            <p><span class="shop-info-sub-in">車検取り扱い業者の車検ローンを利用する</span></p>
            <p>車検代を分割払いする方法の1つとして、車検取扱業者の車検ローンを利用する借入れ方法があります。業者の多くは信販会社と提携していて、分割払いに対応しています。<br>
            業者とは、具体的にカーディーラー、車検専門店、カー用品店、ガソリンスタンド、民間整備工場（指定工場）などのことを指し、店舗で申し込みを行うことができる場合が多くなっています。<br>
            <br>
            車検ローンを利用するメリットとして、審査が比較的早いこと、車検を行う店舗で申し込みできるため手間がかからないことが挙げられます。その一方で、金利が10～15％程度と高めに設定されていることデメリットです。しかし、これもさまざまな業者によって異なりますし、お願いしたい業者がローンに対応していない可能性もありますので、まずは事前に確認や見積もりを行っておくことが必須です。</p>
            <p><span class="shop-info-sub-in">金融機関のマイカーローンを利用する</span></p>
            <p>一般的に、金融機関のマイカーローンは車を購入する際によく利用されている分割払いの方法です。ところが、金融機関によっては車購入だけでなく車検代にもローンを申請し、借入れできるところがあります。<br>
            <br>
            金融機関のマイカーローンを利用するメリットとして、車検取り扱い業者の車検ローンよりも金利が低い傾向にあることが挙げられます。金利は2~5％が目安となっています。しかし、その分結果が出るまで時間がかかりやすく、審査も厳しいというデメリットがありますので、注意が必要です。</p>
            <p><span class="shop-info-sub-in">クレジットカードで支払う</span></p>
            <p>何かを購入するとき、クレジットカードの分割払いを利用している方は多いのではないでしょうか。クレジットカード払いは身近にありますし、新たにローンを申請する必要がない気軽さや簡単さが魅力です。また、ポイントが付くこともあるでしょう。しかし、カード会社によって異なりますが、クレジットカードの分割払いは金利が高い傾向にあります。分割回数によっても金利は異なってきますので、クレジットカードを利用した金利についてはクレジットカード会社に確認しておきましょう。<br>
            そして、全ての業者がカード払いが可能とは限らないため、こちらも事前に業者へ確認しておくと安心です。<br>
            なお、クレジットカードには限度額が設定している場合がほとんどです。車検費用とその他カード支払額が利用枠を超えてしまうと支払いできません。クレジットカードの限度額と使用状況も把握しておきましょう。</p>

            <p><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/sp/search_top/" class="btn-mitsumori scroll"><img src="../images/common/search_car.png" width="17" class=" btn-reserve-icon-left"/>&nbsp;お住まいの地域から車検を探す<i class="fa fa-chevron-right btn-reserve-icon-right"></i></a></p>

            <h2 class="shop-info-sub"><span class="shop-info-sub-in">車検費用の内訳と相場</span></h2>
            <p>車検代は高額と言われていますが、実際の相場はどのくらいなのでしょうか？<br>
            ここでは、車検費用の内訳と合わせて、車検の金額の目安を解説していきます。</p>
            <p><span class="shop-info-sub-in">車検費用の内訳</span></p>
            <p>車検費用の内訳は、大きく分けて「法定費用」と「車検基本料」の2つがあります。それぞれの費用について解説していきます。</p>
            <p><span class="shop-info-sub-in2">・法定費用</span></p>
            <p>まず法定費用とは、法律で定められた、必ず支払わなければならない費用のことです。<br>
                自動車重量税、自賠責保険料、印紙・証紙代（検査手数料）の合計額がこの法定費用に当たります。<br>
                車種や車両重量、保険期間などにより細かく定められていますが、一律の金額となっています。<br>
                車種ごとの法定費用の目安は以下の通りです。<br>
                <br>
                軽自動車：自賠責保険21,140円(2年分)、重量税6,600円(2年分)、印紙代1,100円(ユーザー車検の場合は1,700円)<br>
                <br>
                小型自動車(1t以下)：自賠責保険21,550円(2年分)、重量税16,400円(2年分)、印紙代1,100円(ユーザー車検の場合は1,800円)<br>
                <br>
                中型自動車(1t～1.5t)：自賠責保険21,550円(2年分)、重量税24,600円(2年分)、印紙代1,100円(ユーザー車検の場合は1,800円)<br>
                <br>
                小型自動車(1.5t～2.0t)：自賠責保険21,550円(2年分)、重量税32,800円(2年分)、印紙代1,100円(ユーザー車検の場合は1,800円)<br>
                <br>
                小型自動車(2.0t～2.5t)：自賠責保険21,550円(2年分)、重量税41,000円(2年分)、印紙代1,100円(ユーザー車検の場合は1,800円)<br>
                <br>
                ※エコカーなどの減税制度等により、異なる可能性があります。</p>
            <p><span class="shop-info-sub-in2">・車検基本料</span></p>
            <p>車検基本料は、車検を取り扱う業者に支払う料金のことを指し、点検費用と事務手数料が含まれています。部品交換や整備が必要な場合、追加で費用が発生することもあることに注意が必要です。<br>
                上記に説明した法定費用は車種や重量によって一律に定められていますが、この車検基本料は業者により料金が異なります。<br>
                <br>
                車検代の詳細や目安はこちらの記事でご紹介しています。<br>
                →<a href="knowledge_15.php">車検のいろは15「車検の相場は？安くするには？」</a></p>
            <p><span class="shop-info-sub-in">車検費用の相場（普通車の場合）</span></p>
            <p>普通車の場合、上記で開設したように法定費用は4.7万～6万円程度となっています。<br>
              そして、車検基本料は業者によって異なり、ディーラーの車検代は法定費用を含め約10万～11万円、ディーラー以外の業者の車検代は、法定費用を含め約7万～8万円程度となっています。ただし、これは追加の部品交換や整備費用がかからなかった場合ですので、あくまでも目安とお考え下さい。<br>
              <br>
              車検代は業者によって大きく異なってきますので、さまざまな業者を比較、検討し、見積もりすることが大切です。</p>

            <p><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/sp/search_top/" class="btn-mitsumori scroll"><img src="../images/common/search_car.png" width="17" class=" btn-reserve-icon-left"/>&nbsp;お住まいの地域から車検を探す<i class="fa fa-chevron-right btn-reserve-icon-right"></i></a></p>

            <h2 class="shop-info-sub"><span class="shop-info-sub-in">車検費用を分割払いする際の注意点</span></h2>
            <p>ここまで車検費用を分割する方法についてご紹介してきました。では、車検代を分割する際に注意するべき点はどのようなところでしょうか。</p>
            <p><span class="shop-info-sub-in">法定費用は現金前払いとなるケースがある</span></p>
            <p>ローンなどを組んだとしても、法定費用は現金前払いの一括払いとなるケースがあります。法定費用は車検基本料と異なり、業者の利益分が含まれないためです。法定費用は車検代の大きな割合を占めますので注意が必要です。ローンを組んだから安心していて、当日払う現金が足りなくなってしまった！ということがないように気を付けましょう。万が一のことを考えて、現金にも余裕をもって置くと安心です。</p>
            <p><span class="shop-info-sub-in">ローン審査が通らない場合がある</span></p>
            <p>車検取り扱い業者が提携する信販会社の車検ローンも、金融機関のマイカーローンも、手続きの後に必ず審査が行われます。そのため、審査落ちする場合があることにも気を付けましょう。<br>
              ローンの審査項目はさまざまありますが、主に安定収入があるかなどの返済能力を審査されます。<br>
              審査が通りにくい人の特徴として、既に他社からも借り入れしている場合や、過去に返済を延滞したことがある場合が挙げられます。<br>
              他社からの借り入れも合わせた総額年収の3分の1を超えることは原則禁止されていますので、自分の経済状況を把握し、ローンが組めるのかを検討しておきましょう。<br>
              そして、ローンは一時的な負担は軽減されますが、あくまでも借入れですので、返済していかなければなりません。車検の費用は住宅ローンや新車購入時の自動車ローンに比べれば少額ですが、リスクも考慮し、無理のない範囲でローンを組むことが大切です。<br>
              <br>
              なお、大手の業者では車検代すべてを分割払いが可能な場合がありますので、こちらも事前に確認を行いましょう。</p>
            <p><span class="shop-info-sub-in">必要書類を揃える</span></p>
            <p>車検を行うにあたり、事前に用意しておくべきものは以下の5(6)点です。</p>
                    <p style="color: #49A500;">・自動車検査証（車検証）<br>
                    ・自動車税納税証明書<br>
                    ・点検整備記録簿<br>
                    ・自動車損害賠償責任保険証明書<br>
                    ・印鑑<br>
                    ・車検費用<br>
                    (・ロックナットアダプター)</p>
                    <p>そして、車検ローンの手続きを行うためには以下の必要書類も用意しましょう。</p>
                    <p style="color: #49A500;">・本人証明書類<br>
                    ・年収を証明する書類<br>
                    ・借りたお金の用途を証明する書類</p>
                    <p>なお、ユーザー車検の場合は以下の3点も必要になります。</p>
                    <p style="color: #49A500;">・自動車重量税納付書<br>
                    ・継続検査申請書<br>
                    ・自動車検査票</p>
            <p><span class="shop-info-sub-in">複数の業者を比較する</span></p>
            <p>業者によって車検費用の合計金額に差があります。そして、車検ローンの金利にも差があるため、支払総額を算出して比較しておきましょう。<br>
              ディーラーは法定費用も含めた車検ローンを組むことや、クレジットカードで支払ったりすることも可能な場合が多く安心感がありますが。ディーラーの車検費用は高い傾向があります。<br>
              車検専門店、カー用品店、ガソリンスタンド、民間整備工場（指定工場）などでは分割払いに制約がある場合もありますが、車検時のガソリン代割引やグッズプレゼント、土日対応ありや即日完了などサービスが充実していたり、費用を安く抑えることが可能なため、業者ごとの特徴も加味して比較、検討を行うことで、自分に合った車検を行うことができます。</p>

            <p><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/sp/search_top/" class="btn-mitsumori scroll"><img src="../images/common/search_car.png" width="17" class=" btn-reserve-icon-left"/>&nbsp;お住まいの地域から車検を探す<i class="fa fa-chevron-right btn-reserve-icon-right"></i></a></p>

            <h2 class="shop-info-sub"><span class="shop-info-sub-in">まとめ</span></h2>
            <p>今回は、車検費用を分割払いする方法、内訳や相場、分割払いするときの注意点についてご紹介しました。車検を期日までに行わなければ車検切れになってしまいますので、車検は決まった期間に必ず行わなければなりません。しかし、今月はまとまったお金がない…車検代を一括で支払うには負担が大きい…そんな時もあるでしょう。そのような場合は、車検費用の分割払いを検討してみましょう。分割払いする方法は多くありますが、それぞれにメリット・デメリットがありますので、ご紹介したものを参考に、自分に適した支払い方法を選択しましょう。それと同様に、様々な業者を比較することで車検費用を抑えることもできますので、業者の比較も行うことが大切です。</p>

           <p><a href="http://www.tokoton-navi.com/sp/search_top/" class="btn-mitsumori scroll"><img src="../images/common/search_car.png" width="17" class=" btn-reserve-icon-left"/>　車検ができる店舗を探す<i class="fa fa-chevron-right btn-reserve-icon-right"></i></a></p>


 <!-- knowledge_index.php のなかにコンポーネント化しておきました -->
 <div class="knowledge_index">
    <?php include("./knowledge_index.php"); ?>
</div>

    </div>
  </section>
  <section id="area_search" class="tab clearfix">
  <h3>
    <span><img　src="../images/common/title_icon.png"
        width="20"
        height="12" /></span>エリアから車検を探す
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
