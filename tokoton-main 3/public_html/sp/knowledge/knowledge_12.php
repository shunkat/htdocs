<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="keywords" content="車検 おすすめ" />
<meta name="description" content="車検選びは2年に一度しかないイベントです。機会が少ないからこそおすすめの車検の選び方をマスターすることで、自分に合った車検を選べるようになりましょう！" />
<title>おすすめの車検の選び方 | とことん車検ナビ</title>
<link href="../../css/user/shop-detail.css" rel="stylesheet" type="text/css" /><!-- 下部固定ボタンstyle 20191119_add -->
<link href="../css/reset.css" rel="stylesheet" type="text/css" />
<link href="../css/reset_table.css" rel="stylesheet" type="text/css" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<link href="../css/acordion.css" rel="stylesheet" type="text/css" />
<link href="../css/jquery.pageslide.css" rel="stylesheet" type="text/css" />
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<link rel="canonical" href="http://www.tokoton-navi.com/knowledge_12.php" />
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
            <span  itemprop="title">おすすめの車検の選び方</span>
          </li>
        </ul>
      <br class="clear"/>
      </div>
    </div>
<!-- パンくず対応 ED -->



<!--▼section-->
  <section>
  <h1 class="text_center"><span class="shop-info-price-c">いろは<strong style="font-size:18px;">12</strong></span>&nbsp;<span class="title04">おすすめの車検の選び方</span></h1>

        <div id="section_box">
         <p><img src="../images/knowledge/knowledge12.jpg" alt="おすすめの車検の選び方" width="100%"><br>
        車検選びは2年に一度しかないイベントです。機会が少ないからこそおすすめの車検の選び方をマスターすることで、自分に合った車検を選べるようになりましょう！</p>
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

        <h2 class="shop-info-sub"><span class="shop-info-sub-in">車検には、いくらかかる？</span></h2>
        <p>車検にかかる費用は大きく分けて3種類。税金や保険料などの法定費用、点検・検査にかかる車検基本料、そして検査後に必要となる整備・修理のための整備費用です。このうち法定費用は車両の重量や区分によって予め定められているものですが、車検基本料と整備費用は、あなたが選ぶ車検の種類によって変わってきます。その基準は整備を請負う業者ごとに異なり、とくに整備費用は車両の状態によっても大きく変化する部分です。想定外の劣化や外見からはわからなかった故障個所などで見積もり額を大幅に超えてしまうことも考えられるので、事前に業者と相談しながら十分に比較検討しておくと良いでしょう。
        </p>

        <p><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/sp/search_top/" class="btn-mitsumori scroll"><img src="../images/common/search_car.png" width="17" class=" btn-reserve-icon-left"/>&nbsp;お住まいの地域から車検を探す<i class="fa fa-chevron-right btn-reserve-icon-right"></i></a></p>

        <h2 class="shop-info-sub"><span class="shop-info-sub-in">目的別車検選びのすすめ</span></h2>
        <p><span class="shop-info-sub-in">「とにかく早く、安く！」</span></p>
        <p>車両の状態を定期的に検査するのはとても大切なことですが、そのための費用は決して安くありません。すべてを業者任せにせず、自分に合った車検を選ぶことで無駄な出費を抑えることもできるでしょう。たとえば普段から自分で整備していて安全面であまり不安がないという方なら、車検時の整備内容を必要最低限にしたり、経年劣化による部品交換の時期を遅らせたりして費用を削減することも選択肢のひとつ。ただしその場合は、日常的な点検・整備を続けること、そして次回車検でその分を埋め合わせる心構えも必要でしょう。</p>
        <p><span class="shop-info-sub-in">「何より安全第一！」</span></p>
        <p>自分だけではなく家族や友人の命まで託すことになる車ですから、費用を度外視して何よりも安全を追求したいという方も多いはずです。とくに車両整備の技能も知識もなく、普段は点検の機会がほとんどないという方なら、予め決められた検査項目の枠を超えて、あらゆる箇所を見直してもらうことで大きな安心感を得られるでしょう。もちろん、どれだけ費用をかけたとしても安全に“絶対”はありません。しかし突然のトラブルで楽しいドライブを台無しにしないための最善策として、2年に1度の車検を有効に活用していきましょう。</p>

        <h2 class="shop-info-sub"><span class="shop-info-sub-in">車検の種類いろいろ</span></h2>
        <p>すべての車両所有者に義務づけられている車検ですが、その方法は様々用意されていて自由に選択することができます。それぞれに特色があり、点検・整備の内容、費用、時間などに違いがあるので、各項目を比較しながら自分に最も合った方法を探しましょう。ここでは以下の7つの方法をご紹介します。</p>

        <p><span class="shop-info-sub-in">１．車検専門フランチャイズ</span></p>
        <p>車検だけを専門に取り扱っているので、車検に関する知識が豊富で技術にも優れています。どの店舗でも一定水準のサービスを提供し、それでいて費用も比較的リーズナブルに抑えられているのが特徴と言えます。整備内容、費用、時間ともに総合的に充実していることから人気が高まってきており、時期によってはかなり込み合うこともあるようです。しかし、専門店は車検検査項目だけに特化していて、それ以外のことは一切やってくれないので注意が必要。車検の機会に全体の点検を考えているなら他の方法も検討してみましょう。</p>

        <p><span class="shop-info-sub-in">２．ガソリンスタンド</span></p>
        <p>日常的に訪れる最も身近な場所。“いつもの場所”へ愛車を持ち込めばよい手軽さが最大のメリットです。チェーン店なら内容と費用が明確になっていて安心ですし、ガソリンの割引など特典サービスを受けられる場合もあります。また24時間受付の店舗もあるので、日中は仕事で忙しいという方には便利でしょう。最近ではガソリンスタンドといっても十分な経験と適切な資格を有する整備士も多く配置されているところが多いので、まずは気軽に相談してみることをお勧めします。また、ガソリンを入れるついでに日常の点検・整備を依頼し、費用対効果を確認しておくのも良い方法です。</p>

        <p><span class="shop-info-sub-in">３．ディーラー</span></p>
        <p>自動車メーカーからのサポートが充実しているという点で、安心感は断トツと言えるでしょう。当然ながらあなたの愛車についての知識は完璧ですし、点検・整備の技術が高く信頼できます。また修理やメンテナンスでパーツ交換が必要な場合には、メーカー純正品、OEM製品が豊富に取り揃えられています。でもその分、修理すれば使える部品も交換されてしまうなど、どうしても費用が高くなってしまうため利用者としてはつい二の足を踏むことになるのです。ディーラー車検の質の高さを維持しながら費用を低く抑えるのは難しいかもしれませんが、見積もりの時点で不要部分を伝えるなどで対応することも可能です。<br>ディーラーの車検についてより詳しく知りたい方は、<a href="http://www.tokoton-navi.com/knowledge_8.php">高い、安心？ディーラー車検の真実と安くするコツ</a>をご覧ください。</p>

        <p><span class="shop-info-sub-in">４．カー用品店</span></p>
        <p>オートバックス、イエローハットなどのカー用品チェーンも車検を請負っています。ガソリンスタンドほどではないとしても、普段から用品購入で訪れる機会がある方にはとても便利な方法です。全国展開のチェーン店として安定したサービスが受けられますし、必要パーツの取り寄せなどにも慣れているため素早い対応を期待することができるでしょう。ただ、車検専門店やディーラーと比べれば従業員ひとりひとりの知識にはばらつきが見られるかもしれません。気になる場合は、買い物のついでにひと声かけるなど普段からコミュニケーションをとっておくのもおすすめ。</p>

        <p><span class="shop-info-sub-in">５．整備工場</span></p>
        <p>整備工場には、認定工場と指定工場の2種類があります。認定工場では運輸支局や自動車検査登録事務所（車検場）などに車両を持ち込んで検査を受けますが、指定工場では検査員が自ら点検・整備を行い、適合性を証明して保安基準適合証を交付するので車両の持ち込みを省略することができます。このように、工場によって知識や技術に差があり、サービスの内容も異なってくるので事前に十分な確認が必要です。個人の整備工場は敷居が高くて近づきにくいという方もいらっしゃると思いますが、その一方で大型チェーン店では対応できない細かい要求に応えてくれる店舗も見つかるかもしれません。まずは思い切って扉を叩いてみましょう。</p>

        <p><span class="shop-info-sub-in">６．車検代行業者</span></p>
        <p>車検代行業者は車検場に車両を持ち込み、検査ラインを通すことはできますが、分解整備を伴う点検・整備を行うことはできません。つまり、車両を持ち込む手前までの作業を何らかの方法で完了させておかなければならないというわけです。これを自分で完璧にできるという方なら問題ありませんが、そうでなければ、せっかく依頼したのに検査不合格となり無駄な出費だけが残るということにもなりかねません。しかしもちろんメリットもあります。車検を行う運輸支局は土日祝日が休みなので、平日は仕事で行かれないという方にとっては費用を抑える最良の方法ということになります。ただし入念な事前準備を怠りなく！</p>

        <p><span class="shop-info-sub-in">７．ユーザー車検</span></p>
        <p>車両の所有者がすべて行います。まずは車検検査項目を把握し、それに合わせて愛車の状態をチェックします。その内容は灯火装置やタイヤなどの外観、バックミラーやシートベルトなどの内装、さらにはマフラーやドライブシャフトなどの機能と多岐に渡ります。当然豊富な知識と技術が必要ですし、それ以外にも書類を準備したり、ユーザー車検の予約をしたりと大変な労力と時間を覚悟しなければなりません。しかしその分、費用は最も安く済みます。具体的には法定費用に含まれる自動車重量税と自賠責保険料、運輸支局で必要となる検査・登録手数料がかかりますが、これらは車両の重量や区分により定められているので、以下に一部ご紹介しておきます。</p>

        <h2 class="shop-info-sub"><span class="shop-info-sub-in">車検にかかる費用について</span></h2>
        <p><span class="shop-info-sub-in">自動車重量税（自家用自動車2年分の重量税／13年未満の場合）</span></p>
        <p>
        500kg以下…8,200円<br>
        501～1,000㎏以下…16,400円<br>
        1,001～1,500㎏以下…24,600円<br>
        1,501～2,000㎏以下…32,800円<br>
        2,001～2,500㎏以下…41,000円<br>
        2,501～3,000㎏以下…49,200円<br>
        （但し、エコカー減税対象車種は減額されます）</p>

        <p><span class="shop-info-sub-in">自賠責保険料</span></p>
        <p>車検の際は通常24か月分（25,830円）の加入を行います。新車購入時は車検が3年のため、車検有効期間をカバーする37か月分（36,780円）が必要になります。</p>
        <p><span class="shop-info-sub-in">検査・登録手数料（継続検査の場合）</span></p>
        <p>
        小型自動車…1,700円<br>
        普通自動車…1,800円<br>
        保安基準適合証がある場合…1,100円（指定整備工場で点検・整備を行い保安基準に適合している場合）
        </p>

        <h2 class="shop-info-sub"><span class="shop-info-sub-in">車検の手続きを進めていきましょう！</span></h2>
        <p><span class="shop-info-sub-in">１．車検の種類を選定</span></p>
        <p>上記のように、車検にはいろいろな種類があります。それぞれのメリットとデメリットを比較しながら自分に最も合った方法を選定しましょう。</p><br>

        <p><span class="shop-info-sub-in">２．店舗を検索</span></p>
        <p>車検の種類が決まったら、車両を預ける店舗を探します。自宅からの距離も重要な要素ですが、それ以外に点検設備の規模、整備士の有無、オプション・サービスの内容などが検討項目になります。<br>
        ネットで車検店舗を検索すると口コミが載っている場合があります。確かに口コミを調べるのもいいですが、個人の性格や車の状態によって評価は大きく変わってきてしまうのであくまで参考程度にとどめておきましょう。</p>

        <p><span class="shop-info-sub-in">３．見積もりを依頼</span></p>
        <p>まずは手軽なWeb見積もりがおすすめ。ここで税金など基本料金の相場を把握してから、実店舗に車両を持ち込んで、より詳細な見積もりを出してもらいます。もしも疑問点や不明点があれば必ず事前にクリアにしておきましょう。もちろん、複数、依頼して比較検討することも必要です。</p>

        <p><span class="shop-info-sub-in">４．車検を予約</span></p>
        <p>車検専門店や一部ディーラーでは45分車検や60分車検を扱っていますが、これは指定工場に点検・整備を依頼するもので、事前に予約を受け付けて作業時間を確保することで可能になるサービスです。もちろん、ユーザー車検を含むそれ以外の車検においても事前予約によってスムースに進めることができます。</p>

        <h2 class="shop-info-sub"><span class="shop-info-sub-in">入念な下準備で面倒な車検を効率よく！</span></h2>
        <p>2年に1度の車検の機会を大切にし、面倒がらずに積極的にチャレンジすることをお勧めしています。ここでご紹介したように、様々なニーズに合わせていろいろな方法が用意されていますので、比較検討しながらご自分に合ったものを見つけてください。十分な知識と技術があれば何も心配することはありませんが、そうでなければ、ある程度の費用をかけて業者のサポートを受けることになります。その際に最も重視したいところを明確にしておくことで、車検選びはスムースに運ぶでしょう。車検の種類が決まれば、そのあとは手順に沿って進めてゆくだけでOK。すべてを業者任せにするよりは、少し時間を割いて下調べを行い、自分なりに納得のゆく車検を経験してみませんか？</p>

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
