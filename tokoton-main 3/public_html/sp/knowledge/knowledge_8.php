<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="keywords" content="ディーラー車検" />
<meta name="description" content="理由もわからないままディーラー車検は高いと決めつけてはいませんか？ディーラー車検が高いのには理由があり、それを知ることでどこに車検を出すべきかが決めやすくなります。また、ディーラー車検を安く受けるためのコツも紹介しています。自分に合ったお得な車検を！" />
<title>ディーラー車検の真実と安く受けるコツ！高い=安心は本当？ | とことん車検ナビ</title>
<link href="../../css/user/shop-detail.css" rel="stylesheet" type="text/css" /><!-- 下部固定ボタンstyle 20191119_add -->
<link href="../css/reset.css" rel="stylesheet" type="text/css" />
<link href="../css/reset_table.css" rel="stylesheet" type="text/css" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<link href="../css/acordion.css" rel="stylesheet" type="text/css" />
<link href="../css/jquery.pageslide.css" rel="stylesheet" type="text/css" />
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<link rel="canonical" href="http://www.tokoton-navi.com/knowledge_8.php" />
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
.shop-info-price-c {
    line-height: 80px;
}
table.type01 {
	border-collapse: collapse;
	text-align: left;
	line-height: 1.5;
}
table.type01 th {
	width: 150px;
	padding: 10px;
	font-weight: bold;
	vertical-align: top;
	border: 1px solid #ccc;
}
table.type01 td {
	width: 350px;
	padding: 10px;
	vertical-align: top;
	border: 1px solid #ccc;
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
            <span  itemprop="title">ディーラー車検の真実と安く受けるコツ！</span>
          </li>
        </ul>
      <br class="clear"/>
      </div>
    </div>
<!-- パンくず対応 ED -->


<!--▼section-->
  <section>
  <h1 class="text_center"><span class="shop-info-price-c">いろは<strong style="font-size:18px;">8</strong></span>&nbsp;<span class="title04">ディーラー車検の真実と安く受けるコツ！<br>高い=安心は本当？</span></h1>
  <div id="section_box">
    <!--▼section-->

      <!--<p class="text_center"><span class="shop-info-price-c" style="line-height:20px !important;">いろは<strong style="font-size:18px;">8</strong></span>&nbsp;<span class="title04">ディーラー車検の真実と安く受けるコツ </span></p>-->

            <p><img src="/img/user/knowledge/dealer.jpg" alt="ディーラー車検" width="100%" /><br>
              皆さんはディーラーの車検にどのようなイメージを持っていますか？<br>
              「割高だけど安心できる」というのが一般的なイメージでしょう。<br>
              初めての車検で悩んでいる時にディーラーから連絡が来たので、費用が高いのを知っていながらディーラーに出した、なんて人もいるかもしれません。
              しかし、割高な理由、安心できる理由がわからないままディーラー車検を申し込んだり、他の車検を選んだりするのはもったいないことです。<br>
              ディーラー車検の特徴を知ったうえで、愛車に合った車検業者を選びましょう。
</p>
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
<p><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/option_02/" class="btn-mitsumori scroll"><img src="../images/common/search_car.png" width="17" class=" btn-reserve-icon-left"/>&nbsp;整備保証付きのおすすめ車検
<i class="fa fa-chevron-right btn-reserve-icon-right"></i></a></p>
            <h2 class="shop-info-sub"><span class="shop-info-sub-in">ディーラー車検の特徴</span></h2>
            <p>まず初めにディーラー車検ならではの特徴をメリット・デメリットに分けてご紹介します。</p>
<p><span class="shop-info-sub-in">ディーラー車検のメリット</span></p>
<ul>
   <li><br>・純正パーツを使用している<br>
   ディーラーは、メーカーの各車種の純正パーツを保有しているので、部品交換の際は純正パーツに替えてもらえます。純正パーツは高品質が保証されているので「安心できる」理由の一つと言えるでしょう。
   </li>
   <li><br>・整備の質が保証されている<br>
   ディーラーで車検を通した車が、その後すぐに故障したとなってはディーラーだけでなく、メーカーの信用にもかかわります。そのためディーラー車検では次回の車検・点検まで安全に乗れるような整備を行っており、整備のチェックも厳重になっています。これはディーラーがメーカーの看板を背負っているからこそのメリットと言えるでしょう。<br>
   </li>
   <li><br>・ディーラーならではのサービスが受けられる<br>
   一般に車検を受けると、グッズのプレゼントやガソリンの割引等のサービスを受けられます。普段から車検や点検をディーラーにお願いしておくことで、新車購入の際や下取りの際に融通が利くこともあります。それらはディーラーならではのサービスと言えるでしょう。
   </li>
   <li><br>・ディーラーのメーカー車種に強い<br>
   当然のことですが、メーカーの車の知識やデータを持ち合わせている業者はディーラーです。そのため、車検時の整備内容だけでなく車の買い替え時期や普段のメンテナンスなど一番的確に答えてくれるでしょう。
   </li>
</ul>
<p><span class="shop-info-sub-in">ディーラー車検のデメリット</span></p>
<ul>
  <li>・費用が割高<br>
  ディーラー車検における唯一にして最大のデメリットが費用です。他の車検業者と比べて具体的にどのくらい高いのかは次章の”ディーラー車検の費用”で説明しますが、メリットに相応しい程割高となっています。<br>
  </li>
</ul>
<p><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/option_02/" class="btn-mitsumori scroll"><img src="../images/common/search_car.png" width="17" class=" btn-reserve-icon-left"/>&nbsp;整備保証付きのおすすめ車検
<i class="fa fa-chevron-right btn-reserve-icon-right"></i></a></p>
            <h2 class="shop-info-sub"><span class="shop-info-sub-in">ディーラーの車検費用</span></h2>
            <p>では実際、ディーラー車検の費用はどの程度かかるのでしょうか？<br>
  フランチャイズの車検業者とディーラーでの車検を比べたものを以下の相場表にまとめてみました。<br>
  ガソリンスタンドや、民間の整備工場との相場の差が知りたい場合は<a href="knowledge_7.php">「車検費用の内訳を徹底解説！」</a>をご覧ください</p>
<p><span class="shop-info-sub-in">ディーラー車検における軽自動車の費用</span></p>
            <p> 軽自動車でも、ディーラー車検はやはり割高になります。必ずかかる費用として法定費用２４ヶ月点検費用と代行料をあわせて7万円近くかかってしまいます。<br>
一方でユーザー車検に関しては必要な費用は法定費用である<br></p>
<ul>
   <li>・自動車重量税　8,800円</li>
   <li>・印紙代　　　　1,400円</li>
   <li>・自賠責保険　 26,370円</li>
</ul>
<p>の計36,570円のみで受けることができます。<br>
　民間車検もディーラー車検と違い、整備費以外の車検基本料金(点検費、代行料)は低く設定されているところが多いので、整備箇所が少ない新車であれば十分に安く車検を受ける事が出来るでしょう。<br>
軽自動車の車検に関する詳しい情報は<a href="http://www.tokoton-navi.com/manual/lightCar.html">「車検比較マニュアル 軽自動車編」</a>もご覧ください。</p>

<p><span class="shop-info-sub-in">車別相場表</span></p>
<table  class="type01">
  <tr>
    <td></td>
    <th scope="col">ディーラー</th>
    <th scope="col">フランチャイズ</th>
  </tr>
  <tr>
    <th scope="row">軽自動車</th>
    <td>約70,000円</td>
    <td>約40,000-50,000円</td>
  </tr>
  <tr>
    <th scope="row">コンパクトカー</th>
    <td>約90,000円</td>
    <td>約50,000-60,000円</td>
  </tr>
  <tr>
    <th scope="row">ミニバン</th>
    <td>約120,000円</td>
    <td>約70,000-90,000円</td>
  </tr>
</table>
<font size="1">(参考資料:ネッツトヨタ北九州http://www.hellonetz.com/support/syaken/cost.html)</font>
          <p>この表はあくまで「整備費用を除いた」費用となるため実際はこの費用に加え、車の状態に応じて整備費用がかかります。ディーラーは純正品を用いて整備を行うため部品の価格も割高で、整備項目もディーラーの方が多くなるので費用の差はより大きくなるでしょう。</p>



<h2 class="shop-info-sub"><span class="shop-info-sub-in">ディーラー車検と民間車検・ユーザー車検の違い</span></h2>
            <p>ディーラー車検が高い理由は先述したメリットと密接に関係しています。</p>
            <ul>
              <li>・純正パーツの使用<br>
            “ディーラー車検のメリット”でもお伝えしましたが、ディーラーは部品交換の際に割高な純正パーツに交換します。<br>
  部品を持ちこむことで社外品(純正パーツでない部品)での部品交換を受け入れてくれる所もあるので、社外品の利用を希望する場合は店舗に確認してみるのも良いでしょう。
              </li>
              <li>・工賃が高い<br>
            先述したとおり、ディーラーは次の車検まで安全に乗れるように綿密な整備を行うため、整備項目が多くなり、時間もかかります。<br>
  また、ほとんどのディーラーや整備工場では整備一時間当たりの工賃が定められていますが(これをレバレートと呼びます)、これもディーラーの場合は他の整備工場よりも高めに設定されているため整備時間と合わさって工賃が高くなるのです。
  </li>
              <li>・その他サービス費用も上乗せされている<br>
              車をディーラーで購入した方であればすでに体感しているかと思いますが、ディーラーのカスタマーサービスは他の整備工場とは比べ物にならないほど充実しています。<br>
  来店時に飲み物やお菓子がでてくるのは当たり前で、子供用の遊び場まである。また、来店時に乗ってきた車を洗車してくれるというディーラーも存在します。その他にもいろいろなサービスがありますが、そのサービス分も料金に多少上乗せされているのです。<br>
            </li>
            </ul>
<p><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/option_02/" class="btn-mitsumori scroll"><img src="../images/common/search_car.png" width="17" class=" btn-reserve-icon-left"/>&nbsp;整備保証付きのおすすめ車検
<i class="fa fa-chevron-right btn-reserve-icon-right"></i></a></p>
<h2 class="shop-info-sub"><span class="shop-info-sub-in">ディーラーで安く車検を行うコツ</span></h2>
            <p>ディーラーだと車検費用が高くなると説明しました。ではディーラーで安く車検を行う事はできないのでしょうか？<br>
  もちろん整備項目を減らすことで安く抑えることができますが、車検を受けるタイミングによってはさらに車検費用を安く抑えることができるのです。<br>
  元エリートディーラーから聞いたそのからくりをご紹介します。</p>
<p><span class="shop-info-sub-in">車検目標台数というものがある</span></p>
            <p>>ディーラーには新車の販売目標というものがありますが、実は車検にも同様に目標台数が存在します。車検を通して新規顧客を手に入れれば車販の売り上げにも繋がるので、営業部門の人たちは目標を達成するために日々奮闘しています。<br>
  初めにお伝えしたディーラーからの車検の連絡も営業の一部と言えるでしょう。</p>

<p><span class="shop-info-sub-in">狙い目は３月９月</span></p>
            <p>３月９月は決算期のため、その年の売り上げを少しでも上げるために車検目標も多めに設定されています。なので、その時期に車検を出せるように見積りを出しに行くと値段やサービスなどにおいて優遇されることが多くなるでしょう。</p>
<p><span class="shop-info-sub-in">月の最終週を狙う</span></p>
  <p>とは言っても車検の有効期限は決まっており、車検を出しに行く時期を大きく調整することは難しいので3月9月に車検を行う事が難しい人もいるかと思います。そんな方は、月末を狙いましょう。月末であれば決算期と同様、ディーラーは目標を達成するために台数を稼ぎたいのでサービスされることが多いです。</p>



<h2 class="shop-info-sub"><span class="shop-info-sub-in">実は民間車検でも整備の質は変わらない！？</span></h2>
            <p>ディーラーに車検を頼んでも、町の整備工場に外注をしていることも少なくありません。その証拠に、車検シールや明細書に記載されている店舗名を見ると依頼したディーラーの店舗と異なる工場名が書かれていることがあります。</p>
            <p>というのも車検業者には、陸運支局の代わりに車検を行うことが許可されている「指定工場」と、点検や整備・修理はできるものの自社の検査ラインを持っていない「認証工場」の2種類があります。認証工場に持ち込んだ場合、検査の際には陸運支局に持っていかなくてはなりません。</p>
            <p>ディーラー車検に依頼をしても、そこが指定工場でなければ別のディーラー店舗や下請けの整備工場に回してしまうことがあったり、指定工場であったとしても工場がキャパオーバーで新たに車を受け入れられないことがあったりするため、このようなことが起こります。つまり、<u>窓口はディーラーでありながら実際に整備を行うのは町の整備工場であるというパターンもある</u>のです。</p>
            <p>ディーラー車検で申し込みをした場合、まだ使えるパーツを交換したり、不要な整備をしたりすることによって高額になっている可能性もあります。「今まで車検はディーラーしか考えたことはない！」という方も、一度ディーラー車検と民間車検をそれぞれ見積もって、整備内容を比較してみましょう。</p>
<p><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/option_02/" class="btn-mitsumori scroll"><img src="../images/common/search_car.png" width="17" class=" btn-reserve-icon-left"/>&nbsp;整備保証付きのおすすめ車検
<i class="fa fa-chevron-right btn-reserve-icon-right"></i></a></p>

            <h2 class="shop-info-sub"><span class="shop-info-sub-in">まとめ</span></h2>
            <p>このページを見た方であれば、次からは「なんとなく安全そうだから」という理由でディーラーに車検をお願いする人はいないでしょう。普段整備をしない人であれば次回の車検まで安全に乗れるディーラー車検
              がオススメですし、普段から自力でメンテナンスをしているのであれば、わざわざディーラーに出す必要はないかと思います。普段のメンテナンスや、愛車の状況、またご自身の経済状況などを考えた上で車検業者を選んでみて下さい。</p>


            <br>
            <p><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/option_02/" class="btn-mitsumori scroll"><img src="../images/common/search_car.png" width="17" class=" btn-reserve-icon-left"/>&nbsp;整備保証付きのおすすめ車検<i class="fa fa-chevron-right btn-reserve-icon-right"></i></a></p>
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
</div>
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
