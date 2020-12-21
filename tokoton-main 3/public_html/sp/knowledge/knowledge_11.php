<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="keywords" content="車検 予約" />
<meta name="description" content="みなさんは、車検を行う時の予約はどのようにしているでしょうか。車検は、2年に1回しかなく、頻繁に行うものではないので、いざ車検を実施しようとしても予約方法がわからないという方も少なくないと思います。もしかすると初めての車検で、不安な方もいるかもしれません。そこで今回は、初めての方にもわかりやすく車検の予約の方法をご紹介します。" />
<title>車検の予約ってどうすればいいの？ | とことん車検ナビ</title>
<link href="../../css/user/shop-detail.css" rel="stylesheet" type="text/css" /><!-- 下部固定ボタンstyle 20191119_add -->
<link href="../css/reset.css" rel="stylesheet" type="text/css" />
<link href="../css/reset_table.css" rel="stylesheet" type="text/css" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<link href="../css/acordion.css" rel="stylesheet" type="text/css" />
<link href="../css/jquery.pageslide.css" rel="stylesheet" type="text/css" />
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<link rel="canonical" href="http://www.tokoton-navi.com/knowledge_11.php" />
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
            <span  itemprop="title">車検の予約ってどうすればいいの？</span>
          </li>
        </ul>
      <br class="clear"/>
      </div>
    </div>
<!-- パンくず対応 ED -->


<!--▼section-->
  <section>
  <h1 class="text_center"><span class="shop-info-price-c">いろは<strong style="font-size:18px;">11</strong></span>&nbsp;<span class="title04">車検の予約ってどうすればいいの？</span></h1>

        <div id="section_box">




            <p><img src="../images/knowledge/knowledge11.jpg" alt="車検予約" width="100%"><br>
            みなさんは、車検を行う時の予約はどのようにしているでしょうか。車検は、2年に1回しかなく、頻繁に行うものではないので、いざ車検を実施しようとしても予約方法がわからないという方も少なくないと思います。もしかすると初めての車検で、不安な方もいるかもしれません。そこで今回は、初めての方にもわかりやすく車検の予約の方法をご紹介します。
</p>

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

            <h2 class="shop-info-sub"><span class="shop-info-sub-in">車検の予約をするには？</span></h2>
            <p>車検は、2年に1回の自動車整備です。信頼できる車検業者に確実に予約をしたいですよね。車検の予約手段としては、インターネットもしくは電話があります。<br>
<br>
車検の予約方法は、ユーザー車検をする場合と、車検業者に依頼をする場合で異なります。<br>
<br>
<u>ユーザー車検の場合</u><br>
ユーザー車検を予約する場合は、インターネットか電話を利用して予約をすることができます。インターネットを利用する場合は予約システムで予約をします。電話予約ができるのは軽自動車のみで、普通車の車検予約は、インターネットからのみとなっています。<br>
<br>
<u>車検業者に依頼をする場合</u><br>
車検業者に車検を依頼する場合、インターネットか電話での予約となりますが、現在は、インターネットからの予約が主流です。

            </p>

<p><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/sp/search_top/" class="btn-mitsumori scroll"><img src="../images/common/search_car.png" width="17" class=" btn-reserve-icon-left"/>&nbsp;お住まいの地域から車検を探す<i class="fa fa-chevron-right btn-reserve-icon-right"></i></a></p>

            <h2 class="shop-info-sub"><span class="shop-info-sub-in">ユーザー車検の予約方法</span></h2>
            <p>ユーザー車検を予約する場合、インターネットか電話で行うことになります。</p>
            <p><span class="shop-info-sub-in">普通車の場合</span></p>
<p>まず、普通車の場合ですが、こちらはインターネットからのみの受付となっており、電話での受け付けは行っていません。インターネットを利用して、国土交通省のサイトの「自動車検査インターネット予約システム」より全国の陸運支局への車検予約ができます。</p>

            <p><span class="shop-info-sub-in">軽自動車の場合</span></p>
<p>一方、軽自動車の車検予約の場合は、軽自動車検査協会サイト内にある「軽自動車検査予約システム」から予約することができます。また、全国の各支所に直接電話をかけて予約をすることも可能です。</p>

            <p><span class="shop-info-sub-in">インターネット予約システムの使い方</span></p>
<p>現在の車検予約の主流は、インターネットでの予約ですが、「ちょっとインターネットの利用は苦手…」という方の為にも、その予約システムの使い方をご紹介します。<br>
<br>
<u>STEP1：アカウントを登録してログイン</u><br>
まず、IDやパスワードを登録しなくてはならないのですが、画面に従って必要項目を入力するだけなので、比較的簡単に登録をすることができます。登録が完了したら、ログインをしましょう。<br>
<br>
<u>STEP2:希望する検査場と受検日時を入力</u><br>
ログインが完了したら、「検査の予約」を選択し、車検を受けたい検査場、検査種別（継続・新規等）、検査車種（普通・中型等）を選択します。選び終わったら、予約日時を選択します。<br>
<br>
<u>STEP3：予約者の情報を入力</u><br>
次に、予約者の情報を入力します。ここでは、受験する方の名前や、車の情報等を入力します。<br>
<br>
<u>STEP4：予約内容を確定</u><br>
最後に予約の確定をすれば、申し込みは完了です。申し込みが完了すると、受付番号等が発行され、登録しているメールアドレスに予約完了メールが届きます。

</p>

            <h2 class="shop-info-sub"><span class="shop-info-sub-in">車検業者の予約方法</span></h2>
            <p>車検業者に車検を依頼する場合、インターネットか電話での予約をすることになりますが、インターネットからの予約が主流となっています。</p>

            <p><span class="shop-info-sub-in">予約サイトでの予約の手順</span></p>
            <p>
<u>STEP1：条件指定して車検業者を探す</u><br>
まず、近隣地域、こだわりの条件（クレジットカードの利用、ETC等）等の項目で車検業者をある程度絞り込みます。<br>
<br>
<u>STEP2：気になる車検業者・プランを選択</u><br>
絞り込んだ車検業者の中で、自分が最も気になる車検業者、プランを選びます。<br>
<br>
<u>STEP3：車検業者に見積もりを依頼</u><br>
車検業者を選んだら、その車検業者に車検の見積もりを依頼しましょう。車検の大まかな見積もりは、インターネット上で可能なので、効率的です。<br>
具体的な見積もり依頼の方法は、「<a href="./knowledge_10.php">車検の見積もりの方法とメリット</a>」をご覧ください。<br>
<br>
<u>STEP4：車検業者に見積もりを受ける</u><br>
見積もり依頼が終わったら、車検業者が見積もりを送ってくれるのを待ちます。<br>
<br>
<u>STEP5：見積もり内容を吟味</u><br>
見積もり内容が送られてきたら、その詳細をよく見て、整備費が高額すぎではないか等、内容を吟味し、インターネットや電話で予約をします。
</p>

            <p><span class="shop-info-sub-in">予約前に見積もりを比較</span></p>
            <p>車検の見積もりは、1社のみでも構いませんが、できるだけ複数社に見積もりを受け、比較検討することが望ましいです。理由としては、各社でプランや見積もりの詳細が異なるためです。例えば、まったく同じ内容の整備を行っていても、業者によって料金が大幅に異なる場合も多くあります。車検の見積もりは、基本的に無料ですし、見積もりをするだけで実際に車検は行わないことも可能なので、なるべく複数社の車検見積もりを受けるようにしましょう。</p>

<p><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/sp/search_top/" class="btn-mitsumori scroll"><img src="../images/common/search_car.png" width="17" class=" btn-reserve-icon-left"/>&nbsp;複数社の見積もりを比較<i class="fa fa-chevron-right btn-reserve-icon-right"></i></a></p>

            <h2 class="shop-info-sub"><span class="shop-info-sub-in">車検の受験期間</span></h2>
            <p>車検を受けられる期間はいつからいつまでなのでしょうか。車検は、有効期限の１か月前から受験をすることができます。<br>
「車検を早く受けてしまうと次の有効期限満了日が早くなるから、期限ギリギリに受けた方がいいんじゃないの？」と思うかもしれませんが、まったく問題ありません。有効期限満了日の1ヶ月前に受けても、ギリギリに受けても次の有効期限満了日は変わらないので安心してください。<br>
<br>
有効期限満了日は、車検の受験月から2年間となっています。具体的な日付は、車検証に記載されているので確認してみて下さい。車検は、車検有効期限満了日から1か月前に受験をすることを目途にすると良いです。ギリギリになってから受験をしようとすると、都合の良い日時が無かったり、受験が殺到して予約がいっぱいになったりすることもあり、最悪の場合有効期限満了日が過ぎて車が使えなくなってしまうので、ゆとりを持って車検を受けましょう。<br>
<br>
車検の予約は、受験をする日の2週間前から可能です。こちらも、混雑等を避けるためにも日程に余裕を持たせて予約することが望ましいです。
</p>

            <h2 class="shop-info-sub"><span class="shop-info-sub-in">予約時の割引・クーポンを利用しよう</span></h2>
            <p>車検業者の場合、時期や店舗によって割引をしていることがあるため、通常よりも費用が安くなることもあります。また、クーポン・キャンペーンでプレゼントなどをもらうこともできます。<br>
主なクーポン・キャンペーンありの車検業者としては、トヨタ、オートバックス、コバック、マツダ、日産等が挙げられます。
</p>

            <h2 class="shop-info-sub"><span class="shop-info-sub-in">受験はお近くの車検場・店舗で</span></h2>
            <p>車検は、近くの車検場や店舗で実施をするのが一番です。地域を指定して検索することで、近くにある車検場を探すことができます。<br>
<br>
近くの店舗はこちらから探せます！

<a href="http://www.tokoton-navi.com/search_top/">車検の条件検索をする</a>
</p>


            <h2 class="shop-info-sub"><span class="shop-info-sub-in">まとめ</span></h2>
            <p>今回は、車検の予約の方法や予約の時期等をご紹介しました。現在は、インターネットの予約システムからの予約が主流になっているので、手順をよく見て確実に行いましょう。車検は、有効期限満了日が過ぎてしまうと車を引き取りに来てもらわなければならない等、非常に手間がかかるので、ギリギリになってしまわないように、日程にはゆとりを持って行うようにしましょう。
</p>

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
