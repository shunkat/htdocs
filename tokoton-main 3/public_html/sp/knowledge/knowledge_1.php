<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="keywords" content="車検,期間,費用 " />
<meta name="description" content="車検費用を安くするなら、とことん車検ナビで車検料金がお得な店舗を検索。早期の車検予約割引やプレゼント情報、軽自動車車検の特典など、全国のお得な格安車検情報が満載です！今すぐネットで車検見積が出来ます" />
<title>車検の有効期間や費用・必要なものについて| とことん車検ナビ</title>
<link href="../../css/user/shop-detail.css" rel="stylesheet" type="text/css" /><!-- 下部固定ボタンstyle 20191119_add -->
<link href="../css/reset.css" rel="stylesheet" type="text/css" />
<link href="../css/reset_table.css" rel="stylesheet" type="text/css" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<link href="../css/acordion.css" rel="stylesheet" type="text/css" />
<link href="../css/jquery.pageslide.css" rel="stylesheet" type="text/css" />
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<link rel="canonical" href="http://www.tokoton-navi.com/knowledge_1.php" />
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
            <span  itemprop="title">車検って何？</span>
          </li>
        </ul>
      <br class="clear"/>
      </div>
    </div>
<!-- パンくず対応 ED -->



<!--▼section-->
  <section>
  <h1 class="text_center"><span class="shop-info-price-c">いろは<strong style="font-size:18px;">１</strong></span>&nbsp;<span class="title04">車検って何？</span></h1>
        <img src="../images/knowledge/main_knowledge.jpg" width="100%">
        <div id="section_box">
          <p>車検が全くの初めての方でも、このページさえ読めばきっと大丈夫！車検は2年に1度行われる大切な愛車の「健康診断」です。そうとなると車検をお願いする時は、信頼できる業者をしっかり見極めたいものですよね。この「車検のいろは」では、車検の基礎的な知識から安心で安くて得する車検の選び方までを伝授します！</p>

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

      <h2 class="shop-info-sub"><span class="shop-info-sub-in">車検とは</span></h2>
            <p>道路運送車両法では、車が安全性や公害防止面で問題ないかどうかを国の機関（運輸支局）で定期的に検査するよう義務づけられています。これを正式には「継続検査」、一般名称では「車検」といいます。車検の有効期限が切れた自動車は、原則的に公道を走ることが認められていません。これに違反してしまうと、免停などを含めた厳しい罰則の対象となります。</p>

            <h2 class="shop-info-sub"><span class="shop-info-sub-in">車検の有効期間</span></h2>
            <p>車検を行う時期に関して、自家用乗用車と軽乗用自動車は、新車登録から3年目、それ以後は2年ごとと定められています。（トラックやバスなど事業用自動車の期間はさらに短く定められています。）車検の有効期間を車検満了日と言い、自動車検査証（車検証）に記載されています。車検に合格すると、この車検証が更新されて、新しい車検満了日が記載された検査標章（フロントウィンドウに貼るシール、通称「車検ステッカー」）がもらえます。車検満了日を過ぎた自動車で公道を走ると重い処分（免許停止90日）の対象になります。</p>
            <p>車検の有効期間について詳しくは<a href="http://<?= $_SERVER['HTTP_HOST'] ?>/sp/knowledge/knowledge_5.php">"いつから受けられる？車検の期間"</a>をご覧ください。</p>

      <table>
              <tr>
                  <th><img src="../images/knowledge/certificate.gif" width="240"></th>
                    <td>自動車検査証<br>（車検証）</td>
                </tr>
                <tr>
                  <th><img src="../images/knowledge/sticker.gif" width="180"></th>
                    <td>検査標章<br>（車検ステッカー）</td>
                </tr>
            </table>
<p><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/sp/search_top/" class="btn-mitsumori scroll"><img src="../images/common/search_car.png" width="17" class=" btn-reserve-icon-left"/>&nbsp;車検ができる店舗を探す<i class="fa fa-chevron-right btn-reserve-icon-right"></i></a></p>
            <h2 class="shop-info-sub"><span class="shop-info-sub-in">車検の時に行うこと</span></h2>
            <p>車検の前または後に法定2年点検を実施し、必要に応じて整備を行わなければなりません。したがって一般的には、「点検」「整備」「検査」を総称して「車検」と呼ばれています。また、車検を行った際には、同時に自賠責保険料と重量税を支払う必要があります。</p>

            <h2 class="shop-info-sub"><span class="shop-info-sub-in">車検にかかる費用</span></h2>

               <ul id="plan1-price">
          <li class="selected"><a href="#plan1-price1">軽自動車</a></li>
          <li><a href="#plan1-price2">小型</a></li>
          <li><a href="#plan1-price3">中型</a></li>
          <li><a href="#plan1-price4">大型</a></li>
        </ul>

        <div id="plan1-detail-price">
          <section id="plan1-price1" class="plan1box-price">
                  <table class="car-description">
                          <tr>
                              <th><h3 class="price-title">軽自動車の費用</h3>重量：軽自動車<br/>
ワゴンR、ライフ、ムーヴ等</th>
                                <td><img src="../images/knowledge/car_kei.jpg" width="100"/></td>
                            </tr>
                        </table>


            <table class="price-table">
              <tr class="bg01">
                <th rowspan="3">法定費用</th>
                <th>重量税</th>
                <td>6,600円</td>
              </tr>

                            <tr class="bg01">
                <th>自賠責</th>
                <td>21,140円</td>
              </tr>

                            <tr class="bg01">
                <th>印紙代</th>
                <td>※ 1,100円</td>
              </tr>

                        </table>
                        <p>軽自動車の車検については、<a href="../../manual/lightCar.html">車検比較マニュアル 軽自動車編</a>を参照してください。</p>

          <!-- #plan1-price1 --></section>
          <section id="plan1-price2" class="plan1box-price">
            <table class="car-description">
                          <tr>
                              <th><h3 class="price-title">小型自動車の費用</h3>重量：1.0t以下<br/>
マーチ、デミオ、プジョー等</th>
                                <td><img src="../images/knowledge/car_kogata.jpg" width="100"/></td>
                            </tr>
                        </table>

            <table class="price-table">
              <tr class="bg01">
                <th rowspan="3">法定費用</th>
                <th>重量税</th>
                <td>16,400円</td>
              </tr>

                            <tr class="bg01">
                <th>自賠責</th>
                <td>21,550円</td>
              </tr>

                            <tr class="bg01">
                <th>印紙代</th>
                <td>※ 1,100円</td>
              </tr>

                        </table>
          <!-- #plan1-price2 --></section>
          <section id="plan1-price3" class="plan1box-price">
            <table class="car-description">
                          <tr>
                              <th><h3 class="price-title">中型自動車の費用</h3>重量：1.5t以下<br/> レガシィ、ゴルフ、BMW3シリーズ等</th>
                                <td><img src="../images/knowledge/car_chugata.jpg" width="100"/></td>
                            </tr>
                        </table>

            <table class="price-table">
              <tr class="bg01">
                <th rowspan="3">法定費用</th>
                <th>重量税</th>
                <td>24,600円</td>
              </tr>

                            <tr class="bg01">
                <th>自賠責</th>
                <td>21,550円</td>
              </tr>

                            <tr class="bg01">
                <th>印紙代</th>
                <td>※ 1,100円</td>
              </tr>


                        </table>
                        <p>プリウスの車検については、<a href="../../manual/prius.html">車検比較マニュアル プリウス編</a>を参照してください。</p>

          <!-- #plan1-price3 --></section>
                    <section id="plan1-price4" class="plan1box-price">
            <table class="car-description">
                          <tr>
                              <th><h3 class="price-title">大型自動車の費用</h3>重量：1.5t超2.0t以下<br/>
オデッセイ、セルシオ、ベンツEクラス等</th>
                                <td><img src="../images/knowledge/car_ogata.jpg" width="100"/></td>
                            </tr>
                        </table>

            <table class="price-table">
              <tr class="bg01">
                <th rowspan="3">法定費用</th>
                <th>重量税</th>
                <td>32,800円</td>
              </tr>

                            <tr class="bg01">
                <th>自賠責</th>
                <td>21,550円</td>
              </tr>

                            <tr class="bg01">
                <th>印紙代</th>
                <td>※ 1,100円</td>
              </tr>

                        </table>
          <!-- #plan1-price4 --></section>

                    </div>

            <p>自賠責保険料、重量税、印紙代（継続検査手数料）に関しては法定費用なので、全て一律に決められており、業者によって金額の差はありません。 しかし、このほかに支払う検査手数料・点検料・整備料等の金額は業者によって異なるため、きちんと比較することが大切です。各業者の車検費用を比較するには、それぞれの見積もりを出す事が一番効果的です。<br>
            <br>
            車検費用の内訳についての詳しい内容は、<a href="knowledge_7.php">“車検費用の内訳を徹底解説！”</a>をご覧ください。</p>

            <p>※印紙代の額は車検を行う整備工場の種類により異なります。</p>

            <h2 class="shop-info-sub"><span class="shop-info-sub-in">車検に必要なもの</span></h2>
            <p>車検当日に必要なものは以下の通りです。特に「自動車税納税証明書」は税務署から自宅に郵送されてくる書類なので、紛失してしまう方が多いようです。しっかりと保管をしておき、車検当日に困ってしまわないようお気を付けください。<br>
            <br>
            ●車検証<br>
            ●自動車損害賠償責任（自賠責）保険証明書<br>
            ●自動車税納税証明書<br>
            ●印鑑（認め印）<br>
            ●車検費用（現金または決済に必要なクレジットカードなど）</p>

            <br>
            <p><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/sp/search_top/" class="btn-mitsumori scroll"><img src="../images/common/search_car.png" width="17" class=" btn-reserve-icon-left"/>&nbsp;車検ができる店舗を探す<i class="fa fa-chevron-right btn-reserve-icon-right"></i></a></p>
 <!-- knowledge_index.php のなかにコンポーネント化しておきました -->
 <div class="knowledge_index">
    <?php include("./knowledge_index.php"); ?>
</div>
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
    </div>
  </section>
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
