<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="keywords" content="車検 予約" />
<meta name="description" content="本当にお得な車検を予約するためには値段以外にも注目するべきポイントがあります。2年に一度の愛車点検を兼ねた車検なので、自分にとって優先順位の高いポイントを選んで最適な車検を実施しましょう。" />
<title>安さだけじゃない！お得に車検を予約する方法 | とことん車検ナビ </title>
<link href="../../css/user/shop-detail.css" rel="stylesheet" type="text/css" /><!-- 下部固定ボタンstyle 20191119_add -->
<link href="../css/reset.css" rel="stylesheet" type="text/css" />
<link href="../css/reset_table.css" rel="stylesheet" type="text/css" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<link href="../css/acordion.css" rel="stylesheet" type="text/css" />
<link href="../css/jquery.pageslide.css" rel="stylesheet" type="text/css" />
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<link rel="canonical" href="http://www.tokoton-navi.com/knowledge_6.php" />
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
            <span  itemprop="title">安さだけじゃない！お得に車検を予約する方法</span>
          </li>
        </ul>
      <br class="clear"/>
      </div>
    </div>
<!-- パンくず対応 ED -->


<!--▼section-->
  <section>
  <h1 class="text_center"><span class="shop-info-price-c">いろは<strong style="font-size:18px;">6</strong></span>&nbsp;<span class="title04">安さだけじゃない！お得に車検を予約する方法</span></h1>


        <div id="section_box">

<!--▼section-->


      <!--<p class="text_center"><span class="shop-info-price-c">いろは<strong style="font-size:18px;">6</strong></span>&nbsp;<span class="title04">お得な車検を予約する方法 </span></p>-->
            <p><img src="../images/knowledge/booking_car_inspection.jpg" alt="車検カレンダー" width="100%"><br />
            車検がそろそろ切れるけど車検の受け方が分からない、車検場を決める基準が分からない！そんな方々の為にこのページでは車検の流れの説明や車検選びのコツを紹介しています。安さで選ぶだけではない、自分に合った車検先を見つけてください。</p>
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
          <!-- /.tab --></section>            <h2 class="shop-info-sub"><span class="shop-info-sub-in">車検予約の流れ</span></h2>
            <p>初めに車検の大まかな流れについて説明します。今回は大多数の人が利用するであろう車検、整備の両方を行ってくれるガソリンスタンドや整備工場などの車検の流れについてのみ扱います。</p>

            <p><span class="shop-info-sub-in">車検の見積もり予約</span></p>
            <p>まずは複数のお店に車検の見積もりの予約をお願いしましょう。一番初めのステップですが一番大事なポイントと言っても過言ではありません。後述する車検先の選び方を参考に大体2.3件に見積もりを予約しておくと適切な委託先が選びやすくなります。</p>

            <p><span class="shop-info-sub-in">実車による車検の見積もり</span></p>
            <p>見積もりを予約した先で実際に車を見せて、車検時の見積もりを出してもらいます。その際、点検をしている整備士に同行して車の状態について理解しておくとその後の見積もりの透明性が高くなり、必要不必要の分別が付きやすくなります。</p>

            <p><span class="shop-info-sub-in">見積もり確認、委託先の決定</span></p>
            <p>見積書を吟味し、本当に必要な整備をしてくれるところ、安いところなど自分の設定していた予算等の条件をもとに委託先を決めましょう。整備士は万が一でも車が事故を起こさないように万全の整備を心がけているので優先順位の低い整備が見積りに入っていることもあります。見積もりをお願いする際に整備士に予算を伝えてみると整備の優先順位と予算を参考に見積りを決めてくれたりもするのであるのでお勧めです。</p>

            <p><span class="shop-info-sub-in">入庫、検査、引取り</span></p>
            <p>委託先を決めたら車検の予約をし、当日車を入庫させましょう。その後は業者が整備、点検を行い車検に通してくれます。委託先がその場で車検を行うことのできる「指定工場」であれば当日に車を返してもらうこともできます。しかし、通常の車検には1~3日かかってしまうので、その際の代車が必要であれば手配しておくとよいでしょう。</p>

<p><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/sp/search_top/" class="btn-mitsumori scroll"><img src="../images/common/search_car.png" width="17" class=" btn-reserve-icon-left"/>&nbsp;車検ができる店舗を探す<i class="fa fa-chevron-right btn-reserve-icon-right"></i></a></p>
            <h2 class="shop-info-sub"><span class="shop-info-sub-in">車検見積もり先の決め方</span></h2>
            <p>車検を予約する流れの中でユーザーが考えて決めなければならないのは見積先と委託先ですが、委託先については見積書という明確な比較対象があるため選ぶことはさほど困難ではないでしょう。しかし、どこに見積もりをお願いするかについては明確な基準がありません。業者により車検で力を入れているポイント(整備の充実さ、費用等)はさまざまです。それらを基準に選ぶことも出来なくはないでしょう。しかし、費用に関していうとメンテナンス費用がいくらになるのかは店舗によって、はたまた整備する人によって変わってくるので見積もりを出してもらうまでどこが安いのか分からないのが現状です。<br/>
そこで重要になってくる車検選びの最大のポイントは
「安く車検に出すことではなく、安さも一つの項目に含めてお得に車検を行うこと」
なのです。
お得に、と言われてもピンとくる方は少ないと思うので以下に車検を選ぶにあたって参考にすべきポイントをいくつか紹介していくので、自分にとって嬉しいオプションを考えてみてください。</p>

            <p><span class="shop-info-sub-in">自宅からの近さ</span></p>
            <p>ある意味安さ以前のポイントかもしれない大事な要素です。安い車検場でも遠いと手間がかかってしまうのでお得とは言えません。まずは自宅周辺で自分が車を持っていける範囲の車検場をピックアップしましょう。</p>

            <p><span class="shop-info-sub-in">車検に出している間に使用する代車</span></p>
            <p>車検の多くは１日以上かかってしまうことは説明しました。毎日のように車を使っている人であれば車検にかかる日数が２、３日であっても代車が必要でしょう。安くて近い車検場にお願いしたとしても車検の際の代車は遠い所でお金を払ってレンタカーを借りなければならない、となってしまってはお得ではありません。現在ほとんどの車検場で代車のサービスは行っていますが行っていない所もあるので注意する必要があります。また、有料での貸し出しのところもあるので詳しくは各店舗に問い合わせるのが良いでしょう。</p>

            <p><span class="shop-info-sub-in">車検費用をクレジットカードで決済ができるか</span></p>
            <p>車検はいくら安い所にお願いしても決して安い買い物とは言えません。現金で払うのは経済状況的に厳しいという人であればクレジットが使用可能であるという条件も大事になると思います。また、大きな買い物だけに多くのポイントが付く点も魅力的です。<br/>
※クレジットでの精算でも車検の費用の内、法定費用分はポイントが付かない場合や法定費用分だけ現金精算という車検屋もあるので注意が必要です。</p>

            <p><span class="shop-info-sub-in">土日、夜間受付</span></p>
            <p>
                <p>平日の昼間に車検に出す余裕がないほど忙しい人であれば気になってくるのが土日、夜間受付が可能かどうかでしょう。特に民間の整備場は土日がお休みのところも少なくありません。また、土日の内に車を返してほしいのであれば一日で車をすぐに返却してくれるようにするため、車検場が指定工場でなければならないので確認が必要です。その場で車検を行う資格を持っている指定工場以外の車検業者は国が管理している運輸局、運輸支局という場所に持って行き車検をお願いしていますが、運輸局は土日がお休みのため土日に車を持って行っても車検に通すのが月曜日以降になってしまうからなのです。</p>

            <h2 class="shop-info-sub"><span class="shop-info-sub-in">まとめ</span></h2>
            <p>本当にお得な車検を予約するためには、安さだけではなくオプションなどにも注目する必要があります。たくさんのお店に実際のメンテナンス費用などの見積もりを取ることができれば良いのですが実際には車を持って行って点検を実施して、というのを何度も繰り返すのは大変なことです。安さ以外に重視するポイントで見積もり先を絞ることで効率よく自分に合った車検を見つけることができるでしょう。</p>


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
