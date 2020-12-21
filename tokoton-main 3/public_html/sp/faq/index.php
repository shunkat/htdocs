<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="keywords" content="車検,費用,料金,見積,格安,激安,予約" />
<meta name="description" content="車検費用を安くするなら、とことん車検ナビで車検料金がお得な店舗を検索。早期の車検予約割引やプレゼント情報、軽自動車車検の特典など、全国のお得な格安車検情報が満載です！今すぐネットで車検見積が出来ます" />
<title>よくある質問 | 車検費用が驚きの3万円台から！とことん車検ナビ</title>
<link href="../css/reset.css" rel="stylesheet" type="text/css" />
<link href="../css/reset_table.css" rel="stylesheet" type="text/css" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<link href="../css/acordion.css" rel="stylesheet" type="text/css" />
<link href="../css/jquery.pageslide.css" rel="stylesheet" type="text/css" />
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
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
            <span  itemprop="title">よくある質問</span>
          </li>
        </ul>
      <br class="clear"/>
      </div>
    </div>
<!-- パンくず対応 ED -->




<!--▼section-->
  <section>
      <h1 class="shop-info-page_title">よくある質問</h1>

        <h2 class="title08">とことん車検ナビについて</h2>
    <dl class="acordion">
        <dt class="trigger" id="about_icon">
              <table class="faq_tableQ">
              <tr>
                  <th>Q</th>
                    <td>とことん車検ナビってなんですか？</td>
                </tr>
            </table>
            </dt>
        <dd class="acordion_tree clear">
              <table class="faq_tableA">
              <tr>
                  <th>A</th>
                    <td>とことん車検ナビは信頼できる全国の車検ショップの車検プラン、お得情報をご紹介しています。プランやサービスなどから自分にピッタリの車検をお探しいただけます。</td>
                </tr>
            </table>
      </dd>
    </dl>
        <dl class="acordion">
        <dt class="trigger" id="about_icon">
              <table class="faq_tableQ">
              <tr>
                  <th>Q</th>
                    <td>見積りは無料ですか？</td>
                </tr>
            </table>
            </dt>
        <dd class="acordion_tree clear">
              <table class="faq_tableA">
              <tr>
                  <th>A</th>
                    <td>はい。全店舗無料でお見積りいただけます。</td>
                </tr>
            </table>
      </dd>
    </dl>
        <dl class="acordion">
        <dt class="trigger" id="about_icon">
              <table class="faq_tableQ">
              <tr>
                  <th>Q</th>
                    <td>最大割引適用後の料金とはなんですか？</td>
                </tr>
            </table>
            </dt>
        <dd class="acordion_tree clear">
              <table class="faq_tableA">
              <tr>
                  <th>A</th>
                    <td>その車検プランの料金から割引サービスを最大数適用した場合の料金です。</td>
                </tr>
            </table>
      </dd>
    </dl>
        <dl class="acordion">
        <dt class="trigger" id="about_icon">
              <table class="faq_tableQ">
              <tr>
                  <th>Q</th>
                    <td>割引サービスはどこを見れば分かりますか？</td>
                </tr>
            </table>
            </dt>
        <dd class="acordion_tree clear">
              <table class="faq_tableA">
              <tr>
                  <th>A</th>
                    <td>各車検プランの割引サービスの内容は、無料見積もりフォーム内で確認できます。店舗の詳細ページに記載されている車検プランの「今すぐ無料見積り」ボタンをタップした先が無料見積もりフォームです。</td>
                </tr>
            </table>
      </dd>
    </dl>
        <dl class="acordion">
        <dt class="trigger" id="about_icon">
              <table class="faq_tableQ">
              <tr>
                  <th>Q</th>
                    <td>車検の予約をするにはどうしたらいいですか？</td>
                </tr>
            </table>
            </dt>
        <dd class="acordion_tree clear">
              <table class="faq_tableA">
              <tr>
                  <th>A</th>
                    <td>まずは無料見積もりをお試しください。その後、ご予約される方は「今後の流れ」や「連絡先」が無料見積もりの返信メールに記載されておりますので、そちらからご予約ください。<br>※店舗ごとに返信メールの記載内容が異なります。</td>
                </tr>
            </table>
      </dd>
    </dl>

    <h2 class="title08">料金・お支払い方法について</h2>
    <dl class="acordion">
        <dt class="trigger" id="about_icon">
              <table class="faq_tableQ">
              <tr>
                  <th>Q</th>
                    <td>料金表の価格以外に費用がかかることはありますか？</td>
                </tr>
            </table>
            </dt>
        <dd class="acordion_tree clear">
              <table class="faq_tableA">
              <tr>
                  <th>A</th>
                    <td>車検の合格基準を満たすために、どうしても交換しなくてはならない部品が出た場合や、安全のための予防整備として早い時期の部品交換をお勧めする場合があります。<br>
                        その際の追加整備の費用につきましては、お客様のご負担となります。<br>
                        整備の内容や費用はお車の状態により異なってきますので、実際に詳しく点検しないと正確な費用をだすことはできません。</td>
                </tr>
            </table>
      </dd>
    </dl>
        <dl class="acordion">
        <dt class="trigger" id="about_icon">
              <table class="faq_tableQ">
              <tr>
                  <th>Q</th>
                    <td>車検費用の内訳について教えてください。</td>
                </tr>
            </table>
            </dt>
        <dd class="acordion_tree clear">
              <table class="faq_tableA">
              <tr>
                  <th>A</th>
                    <td>一般的に、車検の費用は大きく分けて２つあります。<br>
                        １つ目は、国に支払う「法定費用」<br>
                        2つ目は、点検・整備にかかる「整備費用」です。<br>
                        「法定費用」はどこで車検を行なっても同じ金額です。<br>
                        「整備費用」は車検業者によって異なり、店舗によっては整備費用以外に「代行手数料」「事務手数料」といった名目の料金も発生してきます。<br>
                        <br>
                        とことん車検ナビでは整備費用を「車検基本料金」と表記しております。</td>
                </tr>
            </table>
      </dd>
    </dl>
        <dl class="acordion">
        <dt class="trigger" id="about_icon">
              <table class="faq_tableQ">
              <tr>
                  <th>Q</th>
                    <td>分割払いはできますか？</td>
                </tr>
            </table>
            </dt>
        <dd class="acordion_tree clear">
              <table class="faq_tableA">
              <tr>
                  <th>A</th>
                    <td>店舗によって異なります。<br>
                        とことん車検ナビでは「分割払い」対応店舗を絞り込むことができます。<br>
                        <br>
                        車検の検索結果画面から<br>
                        「条件を絞り込む」<br>
                        ↓<br>
                        「こだわり条件を追加する」<br>
                        ↓<br>
                        「分割払い」にチェックを入れた状態で検索をすると、分割払い対応店舗のみ検索することができます。</td>
                </tr>
            </table>
      </dd>
    </dl>
        <dl class="acordion">
        <dt class="trigger" id="about_icon">
              <table class="faq_tableQ">
              <tr>
                  <th>Q</th>
                    <td>クレジットカードでの支払いは可能ですか？</td>
                </tr>
            </table>
            </dt>
        <dd class="acordion_tree clear">
              <table class="faq_tableA">
              <tr>
                  <th>A</th>
                    <td>店舗によって異なります。<br>
                        とことん車検ナビでは「クレジットカード払い」対応店舗を絞り込むことができます。<br>
                        <br>
                        車検の検索結果画面から<br>
                        「条件を絞り込む」<br>
                        ↓<br>
                        「こだわり条件を追加する」<br>
                        ↓<br>
                        「クレジットカード」にチェックを入れた状態で検索をすると、クレジットカード払い対応店舗のみ検索することができます。</td>
                </tr>
            </table>
      </dd>
    </dl>

        <h2 class="title08">車検の時期について</h2>
        <dl class="acordion">
        <dt class="trigger" id="about_icon">
              <table class="faq_tableQ">
              <tr>
                  <th>Q</th>
                    <td>いつから車検を受けることができますか？</td>
                </tr>
            </table>
            </dt>
        <dd class="acordion_tree clear">
              <table class="faq_tableA">
              <tr>
                  <th>A</th>
                    <td>有効期限の「１ヶ月前から車検有効期限の日まで」に車検を受ければ、次の車検の有効期間が短くなってしまうということはありません。<br>
                        ほとんどの方はこの期間に車検を行われます。<br>
                        <br>
                        有効期間の満了する日の１ヶ月前の日よりも前に受けた場合には、更新後の有効期間は受検した日から２年間となりますのでご注意ください。<br>
                        ただし、国土交通省の定める指定整備工場の資格を持つ整備工場で車検を行う場合は、最大約４５日前から車検を受けることも可能です。</td>
                </tr>
            </table>
      </dd>
    </dl>
        <dl class="acordion">
        <dt class="trigger" id="about_icon">
              <table class="faq_tableQ">
              <tr>
                  <th>Q</th>
                    <td>いつまでに車検を受ければいいですか？</td>
                </tr>
            </table>
            </dt>
        <dd class="acordion_tree clear">
              <table class="faq_tableA">
              <tr>
                  <th>A</th>
                    <td>車検証に記載されている有効期間の満了する日までに受けてください。</td>
                </tr>
            </table>
      </dd>
    </dl>
        <dl class="acordion">
        <dt class="trigger" id="about_icon">
              <table class="faq_tableQ">
              <tr>
                  <th>Q</th>
                    <td>車検の有効期間が切れてしまったのですが、車検は受けられますか？</td>
                </tr>
            </table>
            </dt>
        <dd class="acordion_tree clear">
              <table class="faq_tableA">
              <tr>
                  <th>A</th>
                    <td>はい、受けられます。<br>
                        車検の有効期間が過ぎても、車検を受けるための制限があるわけではありません。<br>
                        期間終了後も、いつでも車検を受けられます。<br>
                        <br>
                        もちろん、車検が切れていては公道を走行することができません。<br>
                        絶対に車検切れの状態で公道を走行しないようにして下さい。<br>
                        <br>
                        店舗によって対応状況が違いますので、事前に確認が必要です。<br>
                        無料見積もりフォームの入力画面にある「ご要望・お問い合わせ」の欄に車検が切れていることを入力し、送信してください。</td>
                </tr>
            </table>
      </dd>
    </dl>
        <dl class="acordion">
        <dt class="trigger" id="about_icon">
              <table class="faq_tableQ">
              <tr>
                  <th>Q</th>
                    <td>車検を早く受けると、有効期限が短くなってしまいますか？</td>
                </tr>
            </table>
            </dt>
        <dd class="acordion_tree clear">
              <table class="faq_tableA">
              <tr>
                  <th>A</th>
                    <td>有効期間の満了する日の「１ヶ月前の日よりも前」に受けた場合には、更新後の有効期間は受検した日から２年間となってしまいます。<br>
                        <br>
                        例えば、「平成25年10月1日」が車検満了日の車の場合、8月10日に車検を受けてしまうと、次回の車検有効期間は「平成27年8月9日」となります。<br>
                        <br>
                        車検の有効期間の損をしてしまうことになりますし、税金も余分に払ってしまうことになります。<br>
                        どうしても早めでないと車検が受けられない、という時以外は、１ヶ月前を切ってから車検を受けるようにしましょう。</td>
                </tr>
            </table>
      </dd>
    </dl>
        <dl class="acordion">
        <dt class="trigger" id="about_icon">
              <table class="faq_tableQ">
              <tr>
                  <th>Q</th>
                    <td>車検有効期間の満了日はステッカー表示月の末日ですか？</td>
                </tr>
            </table>
            </dt>
        <dd class="acordion_tree clear">
              <table class="faq_tableA">
              <tr>
                  <th>A</th>
                    <td>有効期間の満了日は、車検ステッカー(四角いステッカー)の表示月の末日までではありません。<br>
                        ステッカーの裏面に有効期間の満了日が記載されていますので、お間違えのないようご確認ください。</td>
                </tr>
            </table>
      </dd>
    </dl>

        <h2 class="title08">点検・整備について</h2>
        <dl class="acordion">
        <dt class="trigger" id="about_icon">
              <table class="faq_tableQ">
              <tr>
                  <th>Q</th>
                    <td>追加整備はやらなくていいから、とにかく安くやってもらいたい。</td>
                </tr>
            </table>
            </dt>
        <dd class="acordion_tree clear">
              <table class="faq_tableA">
              <tr>
                  <th>A</th>
                    <td>車検の際に行う整備はお客様が決められるものと決められないものがあります。<br>
                        検査の段階で、法が定める安全基準を満たさない場合は整備は行わなくてはならず、これはお客様が決められないものとなります。 </td>
                </tr>
            </table>
      </dd>
    </dl>
        <dl class="acordion">
        <dt class="trigger" id="about_icon">
              <table class="faq_tableQ">
              <tr>
                  <th>Q</th>
                    <td>車検時に交換したほうがよいパーツなどはありますか？</td>
                </tr>
            </table>
            </dt>
        <dd class="acordion_tree clear">
              <table class="faq_tableA">
              <tr>
                  <th>A</th>
                    <td>車は命を載せる大切なものですので、ブレーキパッドなどの保安部品は特に入念に点検を行います。<br>
                        今回の車検では大丈夫でも、2年後の車検の前に交換時期を迎えるような場合は、車検を機に新品へ交換しておいたほうがよいでしょう。<br>
                        車検の前に整備士から車の状況を詳しく確認しましょう。</td>
                </tr>
            </table>
      </dd>
    </dl>
        <dl class="acordion">
        <dt class="trigger" id="about_icon">
              <table class="faq_tableQ">
              <tr>
                  <th>Q</th>
                    <td>認証整備工場と指定整備工場の違いについて教えてください。</td>
                </tr>
            </table>
            </dt>
        <dd class="acordion_tree clear">
              <table class="faq_tableA">
              <tr>
                  <th>A</th>
                    <td>認証工場と指定工場とでは、扱う自動車の規模や種類によって、設備などの基準に細かい規則があります。<br>
                        その中でも、いちばん大きな違いは、保安基準適合証、および保安基準適合標章を交付する資格があるかどうかです。この資格を有する指定整備工場であれば、車検場の検査コースに車を持ち込む手間を省くことができます。</td>
                </tr>
            </table>
      </dd>
    </dl>
        <dl class="acordion">
        <dt class="trigger" id="about_icon">
              <table class="faq_tableQ">
              <tr>
                  <th>Q</th>
                    <td>自動車整備士とはどのような人のことですか？</td>
                </tr>
            </table>
            </dt>
        <dd class="acordion_tree clear">
              <table class="faq_tableA">
              <tr>
                  <th>A</th>
                    <td>自動車の点検・整備に従事する専門技術者で、国家試験に合格し、自動車整備士の資格を取得した人のことです。整備工場などでこの資格を持たずに、作業に携わる人は「整備工」「工員」などと呼び、「整備士」を名乗ることはできません。</td>
                </tr>
            </table>
      </dd>
    </dl>

        <h2 class="title08">税金、保険関係について</h2>
        <dl class="acordion">
        <dt class="trigger" id="about_icon">
              <table class="faq_tableQ">
              <tr>
                  <th>Q</th>
                    <td>納税証明書を無くしてしまいました。</td>
                </tr>
            </table>
            </dt>
        <dd class="acordion_tree clear">
              <table class="faq_tableA">
              <tr>
                  <th>A</th>
                    <td>お客様ご自身で「県税事務所」へ再発行・取り寄せの手続きを行って頂く必要がございます。（軽自動車の場合は市役所になります）<br>
                        代行を行っている店舗もございますので、直接店舗までご相談ください。</td>
                </tr>
            </table>
      </dd>
    </dl>
        <dl class="acordion">
        <dt class="trigger" id="about_icon">
              <table class="faq_tableQ">
              <tr>
                  <th>Q</th>
                    <td>自賠責保険を自分で用意することはできますか？</td>
                </tr>
            </table>
            </dt>
        <dd class="acordion_tree clear">
              <table class="faq_tableA">
              <tr>
                  <th>A</th>
                    <td>お客様自身で自賠責保険にご加入いただくことも可能です。<br>
                        新しく契約した自賠責保険証と古い自賠責保険証の両方をご用意ください。</td>
                </tr>
            </table>
      </dd>
    </dl>
        <dl class="acordion">
        <dt class="trigger" id="about_icon">
              <table class="faq_tableQ">
              <tr>
                  <th>Q</th>
                    <td>自動車税をまだ払ってませんが車検を受けられますか？</td>
                </tr>
            </table>
            </dt>
        <dd class="acordion_tree clear">
              <table class="faq_tableA">
              <tr>
                  <th>A</th>
                    <td>いいえ、納税証明書がないと車検に通りません。車検までに自動車税を納付することで（滞納を解消することで）、車検を通すことができます。</td>
                </tr>
            </table>
      </dd>
    </dl>
        <dl class="acordion">
        <dt class="trigger" id="about_icon">
              <table class="faq_tableQ">
              <tr>
                  <th>Q</th>
                    <td>自賠責保険証を無くしてしまいましたが、車検を受けられますか？</td>
                </tr>
            </table>
            </dt>
        <dd class="acordion_tree clear">
              <table class="faq_tableA">
              <tr>
                  <th>A</th>
                    <td>再発行もできますが、新たに通常より1か月分多く（24ヶ月契約の場合、25ヶ月分）契約することで、車検を受けることも可能です。</td>
                </tr>
            </table>
      </dd>
    </dl>

        <h2 class="title08">その他</h2>
        <dl class="acordion">
        <dt class="trigger" id="about_icon">
              <table class="faq_tableQ">
              <tr>
                  <th>Q</th>
                    <td>反則金未納の場合、車検に通らないというのは本当ですか？</td>
                </tr>
            </table>
            </dt>
        <dd class="acordion_tree clear">
              <table class="faq_tableA">
              <tr>
                  <th>A</th>
                    <td>駐車違反などをされて反則金未納の場合、車検証が発行されません。<br>
                        該当される場合は、車検を受ける前に反則金の納付を済ませておかれますようお願いいたします。</td>
                </tr>
            </table>
      </dd>
    </dl>
        <dl class="acordion">
        <dt class="trigger" id="about_icon">
              <table class="faq_tableQ">
              <tr>
                  <th>Q</th>
                    <td>他人名義の車ですが、代理で車検を受けられますか？</td>
                </tr>
            </table>
            </dt>
        <dd class="acordion_tree clear">
              <table class="faq_tableA">
              <tr>
                  <th>A</th>
                    <td>他人名義の車を代理で車検に出すことも可能です。<br>
                        下記の必要書類をご用意ください。<br>
                        ・車検証<br>
                        ・車検に出される代理人の方の認印<br>
                        ・納税証明書<br>
                        ・自賠責保険証<br>
                        ・車検に出される代理人の方の身分証明書（免許証その他）<br>
                        ・お車の所有者の方からの委任状<br>
                        <br>
                        もし、お車を譲り受けたり、購入されたりした場合には、名義変更しておくことをお勧めいたします。<br>
                        詳しくは直接店舗までご相談ください。</td>
                </tr>
            </table>
      </dd>
    </dl>
        <dl class="acordion">
        <dt class="trigger" id="about_icon">
              <table class="faq_tableQ">
              <tr>
                  <th>Q</th>
                    <td>車検証の住所変更をせずに車検を受けられますか？</td>
                </tr>
            </table>
            </dt>
        <dd class="acordion_tree clear">
              <table class="faq_tableA">
              <tr>
                  <th>A</th>
                    <td>旧住所のままでも車検を受けることは可能です。<br>
                        ただし、住所変更手続きは法律で義務づけられていますので、後々のトラブルを避けるためにも早めに変更を行っておくことをお勧めいたします。<br>
                        やむを得ず住所変更手続きを行うことができない場合、都道府県税事務所へ自動車税住所変更届を出しておけば、新しい住所に自動車税の納税通知書は届きますので、納税のトラブルに関しては防ぐことができます。</td>
                </tr>
            </table>
      </dd>
    </dl>
        <dl class="acordion">
        <dt class="trigger" id="about_icon">
              <table class="faq_tableQ">
              <tr>
                  <th>Q</th>
                    <td>車検証を無くしてしまいましたが、車検を受けられますか？</td>
                </tr>
            </table>
            </dt>
        <dd class="acordion_tree clear">
              <table class="faq_tableA">
              <tr>
                  <th>A</th>
                    <td>再発行の手続きが必要です。代行を行っている店舗もございますので、直接店舗までご相談ください。</td>
                </tr>
            </table>
      </dd>
    </dl>



        <br>
        <br>
        <div id="section_box">

            <p><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/sp/search_top/" class="btn-mitsumori scroll"><img src="../images/common/search_car.png" width="17" class=" btn-reserve-icon-left"/>　車検を探す<i class="fa fa-chevron-right btn-reserve-icon-right"></i></a></p>

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

</body>
</html>
