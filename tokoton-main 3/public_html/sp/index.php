<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="keywords" content="車検,費用,料金,見積,格安,激安,予約" />
<meta name="description" content="車検費用を安くするなら、とことん車検ナビで車検料金がお得な店舗を検索。早期の車検予約割引やプレゼント情報、軽自動車車検の特典など、全国のお得な格安車検情報が満載です！今すぐネットで車検見積が出来ます" />
<title>車検費用が3万円台～安い車検を比較・予約|とことん車検ナビ</title>
<link href="css/reset.css" rel="stylesheet" type="text/css" />
<link href="css/reset_table.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/acordion.css" rel="stylesheet" type="text/css" />
<link href="css/jquery.pageslide.css" rel="stylesheet" type="text/css" />
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<link rel="canonical" href="http://www.tokoton-navi.com" />
<script type="text/javascript" src="../js/common_userAgent.js"></script>
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

<script>
// 各エリアの高さを取得
$(function(){
    var height_default = $(".tab_content").height();
    $(".tab1 .tab_switch").click(function(){
        var wH = $(".tab1 .tab_content").height(); 
    	$('#area_search').css('height',wH+20+'px'); //　北海道・東北
    });
    $(".tab2 .tab_switch").click(function(){
        var wH = $(".tab2 .tab_content").height(); 
    	$('#area_search').css('height',wH+20+'px'); //　関東
    });
    $(".tab3 .tab_switch").click(function(){
        var wH = $(".tab3 .tab_content").height(); 
    	$('#area_search').css('height',wH+20+'px'); //　北陸・甲信越
    });
    $(".tab4 .tab_switch").click(function(){
        var wH = $(".tab4 .tab_content").height(); 
    	$('#area_search').css('height',wH+20+'px'); //　東海
    });
    $(".tab5 .tab_switch").click(function(){
        var wH = $(".tab5 .tab_content").height(); 
    	$('#area_search').css('height',wH+20+'px'); //　近畿
    });
    $(".tab6 .tab_switch").click(function(){
        var wH = $(".tab6 .tab_content").height(); 
    	$('#area_search').css('height',wH+20+'px'); //　中国・四国
    });
    $(".tab7 .tab_switch").click(function(){
        var wH = $(".tab7 .tab_content").height(); 
    	$('#area_search').css('height',wH+20+'px'); //　九州
    });
    $(".tab_switch2").click(function(){
        console.log(height_default);
    	$('#area_search').css('height',height_default+20+'px'); //　元に戻る
    });
});
</script>

<!-- 2018/11/20 google_analytics差し替え対応 ST -->
<? require_once ('../application/views/user/google_analytics.tpl');?>
<!-- 2018/11/20 google_analytics差し替え対応 ED -->

</head>

<body>
<!--▼wrapper-->
<div id="wrapper">
  <!--▼header-->
  <header id="header">
      <div id="top">
          <p>車検費用の料金比較、全国のお得な情報が満載！格安便利なお見積り</p>
        </div>
        <div id="header_in">
          <div id="header_left">
              <p><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/sp/"><img src="images/common/logo.png" width="136" height="18" alt="とことん車検ナビ"></a></p>
            </div>
            <div id="header_right">
              <p><a href="#modal" class="second open"><span><img src="images/common/heder_menu.png" width="80" height="35" alt="メニュー"></span></a></p>
            </div>
            <br class="clear">
        </div>
</header>
    <!--▲header-->
        <div id="main_imgTop">
          <p><img src="images/common/header_title.png" width="300" height="21" alt="あなたが満足する車検が必ず見つかる！"></p>
        </div>
        <p class="marginTop2"><img src="images/common/main_image.jpg" width="100%" alt="「かんたん検索」「無料見積もり」"></p>
    <!--
        <p style="margin-top:15px;"><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/sp/search_top/" class="btn-type01 btn-orange"><img src="images/search_ico.gif" width="15px" alt="虫眼鏡">&nbsp;こだわり条件から車検を検索</a></p>
    -->

<!-- ▼エリア選択 -->
<section id="area_search" class="tab clearfix">
<h3>エリアから車検を探す</h3>
<!-- tab1 -->
<div class="tab1">
    <input id="tab1" type="radio" name="tabs" class="tab_switch" />
    <label class="tab_label" for="tab1">北海道・東北</label>
    <div class="tab_content">
        <div class="back">
        <input id="tab1_bk" type="radio" name="tabs" class="tab_switch2"/>
        <label class="tab_label2 arrow" for="tab1_bk">戻る</label><span>都道府県を選んでください</span>
        </div>
        <div>
        <ul>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_02/">北海道</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_03/">青森</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_04/">岩手</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_05/">宮城</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_06/">秋田</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_07/">山形</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_08/">福島</a></li>
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
        <label class="tab_label2 arrow" for="tab2_bk">戻る</label><span>都道府県を選んでください</span>
        </div>
        <div>
        <ul>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_09/">東京</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_10/">神奈川</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_11/">埼玉</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_12/">千葉</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_13/">茨城</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_14/">栃木</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_15/">群馬</a></li>
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
        <label class="tab_label2 arrow" for="tab3_bk">戻る</label><span>都道府県を選んでください</span>
        </div>
        <div>
        <ul>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_16/">新潟</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_17/">富山</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_18/">石川</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_19/">福井</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_20/">山梨</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_21/">長野</a></li>
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
        <label class="tab_label2 arrow" for="tab4_bk">戻る</label><span>都道府県を選んでください</span>
        </div>
        <div>
        <ul>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_22/">愛知</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_23/">岐阜</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_24/">静岡</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_25/">三重</a></li>
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
        <label class="tab_label2 arrow" for="tab5_bk">戻る</label><span>都道府県を選んでください</span>
        </div>
        <div>
        <ul>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_26/">大阪</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_27/">兵庫</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_28/">京都</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_29/">滋賀</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_30/">奈良</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_31/">和歌山</a></li>
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
        <label class="tab_label2 arrow" for="tab6_bk">戻る</label><span>都道府県を選んでください</span>
        </div>
        <div>
        <ul>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_32/">鳥取</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_33/">島根</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_34/">岡山</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_35/">広島</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_36/">山口</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_37/">徳島</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_38/">香川</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_39/">愛媛</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_40/">高知</a></li>
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
        <label class="tab_label2 arrow" for="tab7_bk">戻る</label><span>都道府県を選んでください</span>
        </div>
        <div>
        <ul>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_41/">福岡</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_42/">佐賀</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_43/">長崎</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_44/">熊本</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_45/">大分</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_46/">宮崎</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_47/">鹿児島</a></li>
        <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/pref_48/">沖縄</a></li>
        </ul>
        </div>
    </div>
</div>
<!-- /.tab --></section>

    <section>
      <div id="free_box">
        <div class="title01">
      <h3><span><img src="images/common/title_icon.png" width="20" height="12"></span>フリーワードから車検を探す</h3>
    </div>
        <form action="http://<?= $_SERVER['HTTP_HOST'] ?>/user/search/post_control/" method="post" name="keyword_form2">
          <div id="free_serch">
            <input name="key" type="text" class="text_box" value="" placeholder="地域・市町村名から探す" id="freeword2" onClick="textClear(this);" />
            <button type="submit" value="検索" class="css3button_free" onClick="document.keyword_form2.submit();">検索</button>
                <br class="clear">
            </div>
        </form>
        <br class="clear">
        </div>
  </section>

    <section>
        <div class="title02">
      <h3><span><img src="images/common/title_icon.png" width="20" height="12"></span>車検が初めての方はこちらをチェック</h3>
    </div>
        <div id="oyakudachi">
        <table>
          <tr>
              <th><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/sp/knowledge/knowledge_1.php"><img src="images/common/contents_first.jpg" width="102" height="76" alt="これからは賢い車検探し"></a></th>
                <td><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/sp/knowledge/knowledge_1.php"><h4>車検のいろは</h4>
                車検の知識を押さえて、余裕をもって準備しよう。車検が全くのはじめてでも、これさえ読めば大丈夫。</a></td>
            </tr>
    </table>
        <!---▼クレジットカード検索
        <table>
            <tr>
              <th><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/option_08/"><img src="images/common/contents_card.jpg" width="102" height="76" alt="らくらくカード払い"></a></th>
                <td><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search/option_08/"><h4>クレジットカード取扱店検索</h4>
                クレジットカードでラクラク支払♪現金払いと違ってポイントやマイルがつくので断然お得です。</a></td>
            </tr>
        </table>
        ▲クレジットカード検索--->
        </div>
  </section>

<!--▼マニュアルバナー-->
    <section class="manual_bnr">
    <ul>
      <li><a href="http://www.tokoton-navi.com/manual/lightCar.html">車検比較マニュアル　軽自動車編</a></li>
      <li><a href="http://www.tokoton-navi.com/manual/prius.html">車検比較マニュアル　プリウス編</a></li>
    </ul>
    </section>
<!--//-->

<!--▼現在の注文状況-->
    <section class="CurrentOrder">
    <div class="title03">
    <h3><span><img src="images/common/title_icon.png" width="20" height="12"></span>車検お見積り状況</h3>
  </div>
    <div class="innner">
    <p>全国から車検のお見積りを頂いております！</p>
      <iframe src="http://hand-control.shop/tokoton-navi-api/tokoton-orders.php" name="現在の注文状況" width="571" height="300" align="center" frameborder="0">
      このページではインラインフレームを使用しています<br />インラインフレームに未対応のブラウザをお使いの方は、
        <A href="http://hand-control.shop/tokoton-navi-api/tokoton-orders.php" target="_blank">こちら</A>で内容をご確認いただけます。
      </iframe>
    </div>
    </section>
<!--//-->

<!-- 2019/11/14 追加部分 ST -->
    <section class="tokoton_info">

      <div>
        <h3><i class="fa fa-square" aria-hidden="true"></i>「とことん車検ナビ」とは？</h3>
        <p>2年に一度の車検は費用のかかるお買い物です。これをしないと自動車検査章(いわゆる車検章)を交付してもらえず、公道を走ることができなくなります。しかし現在は車検を実施する店舗も自動車ディーラーや車検専門店、ガソリンスタンドなど多くあります。それぞれの車検相場やサービスが異なるためどの店舗で車検の見積り予約をするか悩んでしまう方も多いでしょう。そんな状況で少しでも便利でオトクな車検を比較して選ぶために「とことん車検ナビ」が生まれました。</p>
        <p>車検費用をとにかく安くしたいという方や、普段整備をしないから車検時にしっかりと整備して欲しい方、軽自動車の車検なのかベンツやBMWなど外車の車検なのかなど、お客様の状況やご要望に合わせて車検の実施内容は変わってきます。</p>
        <p>とことん車検ナビではあなたの近くの優良車検店を多数掲載。車検に関連する費用や整備内容の見積りなどをじっくり比較検討することができます。さらに各車検店舗が独自で実施しているサービスや期間限定の特典なども多数掲載しています。</p>
        <p>安いだけではなく安心して任せられる車検のためには、技術や費用の見積りを比較しながら納得できる車検店舗を選ぶことが大切です。指定整備工場や認証工場となっている車検店舗もたくさん掲載されています。</p>
        <p>またとことん車検ナビでは車検が初めてという方のための様々なコンテンツがあります。車検の有効期間や費用の詳細を説明する記事をご覧いただくと、お得な車検を選ぶための手助けになるでしょう。</p>
        <p>安心できるドライブライフをずっとサポート。信頼できるお店ばかりです。あなたのご希望にぴったりの頼れる愛車のパートナーショップを見つけて下さい。</p>
      </div>

      <div>
        <h3><i class="fa fa-square" aria-hidden="true"></i> 車検とは？</h3>
        <h4>車検は2年1回</h4>
        <p>車検は2年に1度実施する”車の健康診断”です。車の中にはブレーキパッドなど経年劣化する部品もあるため、期間を定めて点検をすることで整備不良による事故を未然に防ぐために車検が義務付けられています。</p>
        <p>2年に1度ですが税金や手数料・整備費用を一度に支払うため費用を気にする人が多くいます。車検費用は車種によって異なり、軽自動車、小型自動車、中型、二輪車などで費用の目安が変わってきます。もし車検無しで運転した場合には、「無車検車運行」で違反点数と罰金が科せられてしまいます</p>
      </div>

      <div>
        <h3><i class="fa fa-square" aria-hidden="true"></i> 車検を受ける前の確認と必要なもの</h3>
        <h4>車検の期間・満了日</h4>
        <p>一般的に満了日の1ヶ月前が車検を受ける時期の目途となっています。車検満了日を確認するにはフロントガラスのステッカーだけではなく、しっかりと車検証に記載されている日付を見て確認するようにしましょう。車検は業者に委託するケースがほとんどです。整備工場やガソリンスタンド、ディーラーなどの民間車検工場で検査をするのが一般的です。ユーザー車検や車検代行業者で実施することも可能です。</p>
        <h4>自動車納税証明書</h4>
        <p>以前は車検を受ける際に必要な書類でしたが現在は電子化が進んただめ、納税確認を電子上でできるようになった都道府県では車検時に不要のケースもあります。</p>
        <h4>自動車損害賠償保険（自賠責）の証明書</h4>
        <p>自賠責保険の証明書は保険期間が有効なものを用意する必要があります。大抵は車検時に自賠責も更新するため問題無いのですが、車検切れの車を車検に出す場合には注意しましょう。</p>
      </div>

      <div>
        <h3><i class="fa fa-square" aria-hidden="true"></i> 車検はなぜ必要なのか？</h3>
        <h4>車検は安全の意味ではない</h4>
        <p>国土交通省によって全ての車が定期的に車検を受けることを義務付けられています。自動車の故障による事故を未然に防ぐためにこのような規則が定められています。</p>
        <p>国土交通省によって定められているといっても、必ずしも安全性を保障するものではありません。あくまでも定められた最低限の保安基準を満たしていることを示すために車検があります。そのため可能であれば近くのガソリンスタンドなどで定期的に点検や整備を行うことをおすすめします。</p>
        <h4>車検制度の概要</h4>
        <p>車検制度は道路運送車両法という法律で義務付けられており、1951年に日本全国で実施が定められました。安全の基準(保安基準)をクリアした車両であることを国が認めて初めて公道での運転が可能になります。これによって未整備車両や故障車による事故を防ぐことができるのです。今ではたくさんの方が利用している軽自動車は実は1971年まで車検を受ける必要がありませんでした。それまでは軽自動車を保有する人が少なかったのです。しかし1970年代になり軽自動車が全車両の30%程度を占めるようになり、1972年に法改正によって軽自動車も車検が必要となりました。そのため軽自動車だけは普通車と異なり”軽自動車検査協会”が車検を実施することになっています。</p>
      </div>

  </section>
<!-- 2019/11/14 追加部分 ED -->


<!--▼車検ナビに関する情報-->
    <section>
        <div class="title03">
      <h3><span><img src="images/common/title_icon.png" width="20" height="12"></span>車検ナビに関する情報</h3>
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
      <ul>
                <li><a href="https://tokoton-job.com/" target="_blank" rel="noopener">自動車業界　求人</a></li>
                <li class="about_us_left"><a href="https://www.seibikyujin.com/" target="_blank" rel="noopener">自動車整備士　求人</a></li>
      </ul>
    </div>
  </section>

    <!--▼footer-->
  <footer>
    <div id="footer_pc">
      <!--<ul>
          <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/"><img src="images/common/pc.png" width="158" height="33" alt="PCサイトはこちら"></a></li>
        </ul>-->
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
<script type="text/javascript" src="js/jquery.pageslide.min.js"></script>
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
