<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="keywords" content="車検 費用" />
<meta name="description" content="車検にかかる費用の内訳を徹底解析。安く車検を行うには知識を付けるのが一番の近道！なぜ車検費用はここまで高いのか、法定費用とは何なのか、手数料やメンテナンス代にはどのようなものが含まれるかなど、車検について詳しくない方でもわかるよう丁寧に解説しています。" />
<title>車検費用の内訳を徹底解説！ | とことん車検ナビ</title>
<link href="../../css/user/shop-detail.css" rel="stylesheet" type="text/css" /><!-- 下部固定ボタンstyle 20191119_add -->
<link href="../css/reset.css" rel="stylesheet" type="text/css" />
<link href="../css/reset_table.css" rel="stylesheet" type="text/css" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<link href="../css/acordion.css" rel="stylesheet" type="text/css" />
<link href="../css/jquery.pageslide.css" rel="stylesheet" type="text/css" />
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<link rel="canonical" href="http://www.tokoton-navi.com/knowledge_7.php" />
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
            <span  itemprop="title">車検費用の内訳を徹底解説！</span>
          </li>
        </ul>
      <br class="clear"/>
      </div>
    </div>
<!-- パンくず対応 ED -->

<!--▼section-->
  <section>
  <h1 class="text_center"><span class="shop-info-price-c">いろは<strong style="font-size:18px;">7</strong></span>&nbsp;<span class="title04">車検費用の内訳を徹底解説！
</span></h1>

        <div id="section_box">

     <!--▼section-->
  <section>
  
            <p><img src="../images/knowledge/car_invoice.jpg" alt="車検請求書" width="100%"><br></p>
            <ul>
            <li>・「車検はどの業者に出すのが一番いいの？」</li>
			<li>・「実際に見積りを出してもらったけどその金額は相場比較してどうなの？」</li>
			<li>・「ディーラー車検は他の車検と何が違うの？」</li>
			</ul>
            <p>
            等の疑問を持ったことはありませんか？<br>
            車検に詳しくない人は何となくディーラーや行きつけのガソリンスタンドに車検を出しているかもしれません。しかし、車検費用の内訳や、業者、車の種類ごとの車検の相場を知れば適正な料金で車検が受けられます。この記事を読んで車検の費用についての知識を身につけましょう。</p>
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
    
            <h2 class="shop-info-sub"><span class="shop-info-sub-in">車検費用の相場</span></h2>
            <p>まずは車検にかかる費用の相場について説明します。</p>

            <p><span class="shop-info-sub-in">法定費用</span></p>
            <p>これは、車検時に必ずかかる費用です。詳しくは内訳で説明しますが、車の種類によって異なり、
            <ul>
                <li>・軽自動車&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp →<span>3万円</span></li>
                <li>・小型の普通自動車(重量~1000kg) → <span>4.5万円</span></li>
                <li>・中型の自動車(~1500kg) &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp → <span>5万円</span></li>
                <li>・大型の自動車(~2000kg) &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp → <span>6万円</span></li>
                </ul>
                <p>
                が相場になります。エコカー減税や13年経過車などによって1万円前後変わってくるので自身の車が該当しているか車検証を見てチェックしておきましょう。
            </p>

            <p><span class="shop-info-sub-in">車検基本料</span></p>
            <p>整備や代行など業者のサービスによってかかる費用で、業者ごとに相場が大きく変わるのはこの車検基本料が原因です。相場は整備の内容や各店舗によっても変わりますが、
                <ul>
                <li>・ディーラー &nbsp&nbsp&nbsp&nbsp → <span>法定費用+3.5~10万円</span></li>
                <li>・ディーラー &nbsp&nbsp&nbsp&nbsp → <span>法定費用+3.5~10万円</span></li>
                <li>・カー用品店 &nbsp&nbsp&nbsp → <span>法定費用+2~6万円</span></li>
                <li>・車検代行業者 → <span>法定費用+1~3万円</span></li>
                <li>・ユーザー車検 → <span>法定費用のみ</span></li>
                </ul><p>
                が一般的な相場でしょう。車検を受ける際はこれらの相場を参考に業者を決めてみて下さい。
</p>

            <p><span class="shop-info-sub-in">車検費用の内訳</span></p>
            <p>次に車検費用の内訳についてです。先述した法定費用、車検基本料金もさらに細かく分けることが出来ます。<br>
                <ul>
                <li><b>法定費用</b><br></li>
                <p>
                法定費用は、自動車重量税、自賠責保険料、検査手数料(印紙代)の三つに分けられます。先述した相場は、車の種類ごとの三つの法定費用の合計になります。この法定費用については車ごとに決められた金額ですので、安く抑えることは出来ません。</p>
                	<ul>
                    <li>・自転車重量税<br>
                    	自動車重量税はその名前の通り自動車の重量によって決められた金額を車検時に払う税金です。車両重量0.5トン毎に課税税額が増加していきます。重量税の金額は車検証の備考欄に記載されているので確認しておきましょう。<br>
                        エコカー減税や、13年経過車は自動車重量税の金額が変わってくるので注意が必要です。
                    </li>
                    <li>・自賠責保険料<br>
                    	自賠責保険とは、正式には「自動車損害賠償責任保険」と言い、自動車を保有する全ての人に加入が義務付けられている保険で、対人のみ損害を補償してくれます。車検に出す際に次の車検満了時までの期間で有効な自賠責保険に加入していないと車検に合格することが出来ません。そのためほとんどの方が新車時に三年分、以降車検時に二年分を支払っています。<br>
                        金額は軽自動車が25,070円、普通自動車が25,830円で統一されています。<span>(2017年4月に改訂され、この料金になっています)</span>
                    </li>
                    <li>・検査手数料(印紙代)<br>
                    	検査手数料は、検査場で実際に検査を行う際に必要な書類に貼る印紙の代金です。軽自動車の場合1,400円、小型自動車の場合1,700円、小型自動車以外の自動車の場合1,800円となります。
                    </li>
                    </ul>
                    <br>
                <li><b>車検基本料金</b><br></li>
                	<p>車検基本料金は「車検代行料」「検査手続代行料」等さまざまな呼ばれ方をしており、依頼店舗、業者、整備内容によって内容や値段が大きく変わってきます。多くの車検業者では検査代、２４か月点検整備、整備費、代行手数料等がこの車検基本料金に該当します。</p>
                    <ul>
                    	<li>・検査代<br>
                        	車検に通るために必要な整備を見つもる検査を行う手数料が検査代になります。
                        </li>
                        <li>・24ヶ月点検整備<br>
                        	車検と共に、実施が義務付けられているのが24か月点検です。次の車検まで安全に乗るために56項目の点検を行わなければならないのですが、自力で行う事は困難な項目もあるので一般的に車検と同時に業者にお願いする人がほとんどです。
                        </li>
                        <li>・代行手数料<br>
                        	ユーザーの代わりに車検場に車を持っていき車検を通してくる分の手数料が代行手数料になります。格安の車検代行業者は最低限の整備とこの代行手数料以外を行わないため格安で車検を行えています。
                        </li>
                    </ul>
                </ul>
</p>
<p><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/sp/search_top/" class="btn-mitsumori scroll"><img src="../images/common/search_car.png" width="17" class=" btn-reserve-icon-left"/>&nbsp;車検ができる店舗を探す<i class="fa fa-chevron-right btn-reserve-icon-right"></i></a></p>
            <h2 class="shop-info-sub"><span class="shop-info-sub-in">ディーラー車検の費用</span></h2>
            <p>多くの人が気になっているのがディーラー車検でしょう。ディーラー車検は相場が他の業者よりも高めなため、「値段はかかるが整備がしっかりしていて安全」というイメージかと思いますが、本当に他の業者よりも安全なのでしょうか？ディーラー車検の詳細についてご説明します。</p>

            <p><span class="shop-info-sub-in">ディーラー利用時の車検費用の相場、目安</span></p>
            <p>まずはディーラー車検の相場についてですが、上述したとおり相場は法定費用に加え3.5~10万円ほどになり、他の車検業者と比べてかなりの差があることが分かります。実際に見積もりに出してみるとガソリンスタンドの車検と比べて5万円近く差があるなんてこともありますし、ディーラーが割高というのは間違いではないでしょう。ディーラーに車検を出す場合は他よりも費用がかかることを覚悟して出すようにしましょう。</p>

            <p><span class="shop-info-sub-in">ディーラー車検の費用が高い理由</span></p>
            <p>ディーラー車検が他の車検と比べて割高になっているのにはいくつか理由があります。
                <ol>
                	<li><b>・故障しないように万全の整備を行うため</b><br>ディーラーに車検を出したのにその後すぐ車の調子が悪くなったとあればディーラーの印象はおろか、そのメーカーの印象まで悪くなりかねません。そのようなことにならないため、ディーラー車検では次の車検までに交換が必要なものについてはすべて交換し、二年間安心して車に乗れるような整備を行います。そのため整備個所が多くなり、費用が高くなるのです。</li>
                    <li><b>・純正品を使用するため</b><br>民間整備場や、カー用品店では整備の際に交換する部品はリビルド品という中古に近いものや、店舗で打っている部品を利用しています。それに対してディーラーは交換する部品は正規品の新品を用いるため部品代等が高くなってしまうのです。</li>

                </ol><p>
                その他にも、指定工場の維持費がかかるため、そのメーカーの車に対して深い知識を持っているため等色々ありますが、主な理由は上記の二つでしょう。</p>
                 <p><span class="shop-info-sub-in">見積りを依頼する</span></p>
            <p>ディーラーで車検をする際の一番のポイントは見積りを依頼する、という点です。<br>
安全な整備をしてもらえるとは言え見積りで出された整備をすべて行うと料金がかなり高くなってしまいます。そうならないためにも見積りをもらい、諸費用・内訳を吟味し不要だと判断した整備については省いてもらうのがディーラーで車検を行うポイントと言えるでしょう。<br>
また、同じメーカーのディーラーでも店舗によって見積りは変わってくるので、近場に複数のディーラーがある場合は相見積(複数の店舗に見積もりを出すこと)するのもおすすめです。
            </p>

            <h2 class="shop-info-sub"><span class="shop-info-sub-in">軽自動車の車検費用</span></h2>
            <p>次は軽自動車の車検費用についてです。軽自動車は法定費用が安いうえにエコカー減税なども適応されやすいため、他の自動車よりもかなり車検の相場が安くなっています。</p>
            <p><span class="shop-info-sub-in">ディーラー利用時の車検費用の相場</span></p>
            <p>法定費用については、
          	<ul>
            <li>・重量税 → 6,600円(エコカーの場合5,000円、13年経過車の場合7,600円)</li>
            <li>・自賠責保険料 →　25,070円(2017年4月改訂)</li>
            <li>・印紙代 → 1,400円</li>
            </ul>
            <p>
          ですので、合計33,070円(エコカーの場合31,470円、13年経過車の場合34,070円)になります。<br>
          その他、車検基本料金である24ヶ月定期点検等の検査費用も含めると法定費用と合わせて70,000円が最低ラインで、相場は8～10万円程度です。<br>
          フランチャイズの車検業者では5万円台から車検を行える所もあるので予算を元にディーラーで車検を行うべきか考えてみるのが良いでしょう。</p>
          <p><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/sp/search_top/" class="btn-mitsumori scroll"><img src="../images/common/search_car.png" width="17" class=" btn-reserve-icon-left"/>&nbsp;車検ができる店舗を探す<i class="fa fa-chevron-right btn-reserve-icon-right"></i></a></p>
            <h2 class="shop-info-sub"><span class="shop-info-sub-in">バイク(自動二輪車)の車検費用</span></h2>
            <p>バイクは自動車と異なり、排気量によっては車検の必要のないものもあります。バイクの車検費用についてまとめられた記事は少ないので是非参考にしてみて下さい。</p>
            <p><span class="shop-info-sub-in">車検対象の排気量は250cc超</span></p>
            <p>車検が必要なバイクの排気量は250cc超のものになるので250cc以下のものについては車検の必要がありません。まず自分のバイクの排気量を確認し、車検が必要かどうか判断してみましょう。</p>
            <p><span class="shop-info-sub-in">バイクの車検費用の内訳と相場</span></p>
            <p>バイクも自動車と同様に法定費用(自賠責保険料、印紙代、重量税)と代行手数料等の車検基本料がかかります。<br />
            法定費用については
            <ul>
            <li>自賠責保険料11,520円(24ヶ月)</li>
            <li>自動車重量税3,800円</li>
            <li>印紙代1,700円</li>
            </ul>
            <p>
            となっており、合計17,020円かかります。車検基本料金について、車検代行料の相場が1～2万円、車両整備費用の相場は1～3万円程度となっているので合計の相場は5～6万円程度を予想していれば良いでしょう。ただし普段あまりメンテナンスをしていない場合や長く乗っているバイクなどの場合には、相場よりも高い費用がかかる可能性もあります。車検費用の見積りが高いと感じたら、なぜその費用が掛かるのか項目ごとに車検店舗のスタッフと確認することをオススメします。</p>

            <h2 class="shop-info-sub"><span class="shop-info-sub-in">まとめ</span></h2>
            <p>いかがでしたでしょうか。普通自動車の車検から、軽自動車、自動二輪車の車検まで幅広い車検についてご説明しました。車検の仕組みを理解しておくと、車検代を安くしたい場合に不要な整備を省いたり、純正品を用いたければディーラーに車検を出したりなど自分の希望に合った車検を受けることが出来ます。車検が近づいてきたらこのページで得た知識を基に自分に合った車検業者を選んでみて下さい！</p>


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
