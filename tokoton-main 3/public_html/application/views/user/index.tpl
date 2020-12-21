{include file="ci:user/header.tpl"}
<div id="switcherOuter"></div>
<div id="content">
    <div id="content_main_img"> <a href="/search_top/"><img src="/images/top/main_search.png" alt="車検店舗を検索" width="218" height="179" id="Image1" onmouseover="MM_swapImage('Image1','','/images/top/main_search_over.png',0)" onmouseout="MM_swapImgRestore()"></a> </div>
    <div id="content_left">
        <?php  /*
      <p id="update"><span class="orange">{if $last_update != ""}{$last_update|date_format:"%Y/%m/%d"}{else}---{/if} UPDATE 毎日更新</span><br />
      現在 <span class="red">{$shop_num}</span> 店舗、<span class="red">{$plan_num}件</span>の車検情報を掲載中です。</p>
    */?>
        <div id="box_search">
            <h2 id="search"><img src="/img/user/top/h2_search2.gif" alt="車検をさがす" /></h2>
            <h3 id="search_region"><img src="/img/user/top/h3_search_region3.gif" alt="地域で車検を選ぶ" width="320" height="5" /></h3>
            <div class="box_search_content">
                <form action="/user/search/post_control/" method="post" name="keyword_form2"> <input name="key" type="text" size="30" value="地域・市町村名から探す" id="freeword2" onclick="textClear(this);" /> <input type="submit" class="margin_top10" value="検索" onclick="document.keyword_form2.submit();"> </form>
                <dl id="area_list_category"> <dt>北海道・東北</dt>
                    <dd>
                        <ul class="area_list_detail">
                            <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_02/">北海道</a></li>
                            <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_03/">青森</a></li>
                            <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_04/">岩手</a></li>
                            <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_05/">宮城</a></li>
                            <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_06/">秋田</a></li>
                            <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_07/">山形</a></li>
                            <li class="last"><a href="http://{$smarty.server.HTTP_HOST}/search/pref_08/">福島</a></li>
                        </ul>
                    </dd> <dt>関東</dt>
                    <dd>
                        <ul class="area_list_detail">
                            <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_09/">東京</a></li>
                            <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_10/">神奈川</a></li>
                            <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_11/">埼玉</a></li>
                            <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_12/">千葉</a></li>
                            <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_13/">茨城</a></li>
                            <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_14/">栃木</a></li>
                            <li class="last"><a href="http://{$smarty.server.HTTP_HOST}/search/pref_15/">群馬</a></li>
                        </ul>
                    </dd> <dt>北陸・甲信越</dt>
                    <dd>
                        <ul class="area_list_detail">
                            <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_16/">新潟</a></li>
                            <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_17/">富山</a></li>
                            <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_18/">石川</a></li>
                            <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_19/">福井</a></li>
                            <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_20/">山梨</a></li>
                            <li class="last"><a href="http://{$smarty.server.HTTP_HOST}/search/pref_21/">長野</a></li>
                        </ul>
                    </dd> <dt>東海</dt>
                    <dd>
                        <ul class="area_list_detail">
                            <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_22/">愛知</a></li>
                            <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_23/">岐阜</a></li>
                            <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_24/">静岡</a></li>
                            <li class="last"><a href="http://{$smarty.server.HTTP_HOST}/search/pref_25/">三重</a></li>
                        </ul>
                    </dd> <dt>近畿</dt>
                    <dd>
                        <ul class="area_list_detail">
                            <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_26/">大阪</a></li>
                            <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_27/">兵庫</a></li>
                            <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_28/">京都</a></li>
                            <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_29/">滋賀</a></li>
                            <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_30/">奈良</a></li>
                            <li class="last"><a href="http://{$smarty.server.HTTP_HOST}/search/pref_31/">和歌山</a></li>
                        </ul>
                    </dd> <dt>中国・四国</dt>
                    <dd>
                        <ul class="area_list_detail">
                            <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_32/">鳥取</a></li>
                            <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_33/">島根</a></li>
                            <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_34/">岡山</a></li>
                            <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_35/">広島</a></li>
                            <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_36/">山口</a></li>
                            <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_37/">徳島</a></li>
                            <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_38/">香川</a></li>
                            <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_39/">愛媛</a></li>
                            <li class="last"><a href="http://{$smarty.server.HTTP_HOST}/search/pref_40/">高知</a></li>
                        </ul>
                    </dd> <dt>九州・沖縄</dt>
                    <dd>
                        <ul class="area_list_detail">
                            <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_41/">福岡</a></li>
                            <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_42/">佐賀</a></li>
                            <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_43/">長崎</a></li>
                            <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_44/">熊本</a></li>
                            <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_45/">大分</a></li>
                            <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_46/">宮崎</a></li>
                            <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_47/">鹿児島</a></li>
                            <li class="last"><a href="http://{$smarty.server.HTTP_HOST}/search/pref_48/">沖縄</a></li>
                        </ul>
                    </dd>
                </dl>
            </div>
            <h3 id="search_freeword"><img src="/img/user/top/h3_search_freeword.gif" alt="フリーワード検索" /></h3>
            <div class="box_search_content">
                <p id="search_freeword_desc"><img src="/img/user/top/desc_search_freeword2.gif" alt="お住まいの市町村名などで店舗を検索！" /></p>
                <form action="/user/search/post_control/" method="post" name="keyword_form"> <input name="key" type="text" size="40" id="freeword" />
                    <p id="example">例. 東京 中央区</p> <a href="#" onclick="document.keyword_form.submit(); return false;" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('search_btn','','/images/top/btn_search_act.gif',1)"><img src="/images/top/btn_search.gif" alt="検索する" name="search_btn1" width="250" height="37" border="0" id="search_btn1" /></a></form>
            </div>
            <h3 id="search_option"><img src="/img/user/top/h3_search_option.gif" alt="こだわりで選ぶ" /></h3>
            <div class="box_search_content">
                <p id="search_option_desc"><img src="/img/user/top/desc_search_potion.gif" alt="自分にピッタリの店舗がきっと見つかる！" /></p>
                <p id="search_option_check_desc"><img src="/img/user/top/desc_search_option_check.gif" alt="気になる項目にチェックして検索ボタンをクリック" /></p>
                <form action="/user/search/post_control/" method="post" name="option_form">
                    <ul id="option_list">
                        <label for="option9"><li class="option_left"><input id="option9" type="checkbox" name="option[]" value="9" /><img src="/img/user/top/option_list9.gif" alt="グルメプレゼント" id="option9" /></li></label>
                        <label for="option10"><li><input id="option10" type="checkbox" name="option[]" value="10" /> <img src="/img/user/top/option_list10.gif" alt="グッズプレゼント" id="option10" /></li></label>
                        <label for="option11"><li class="option_left"> <input id="option11" type="checkbox" name="option[]" value="11" /> <img src="/img/user/top/option_list11.gif" alt="ガソリンプレゼント" id="option11" /></li></label>
                        <label for="option12"><li><input id="option12" type="checkbox" name="option[]" value="12" /> <img src="/img/user/top/option_list12.gif" alt="抽選でプレゼント" id="option12" /></li></label>
                        <label for="option13"><li class="option_left"> <input id="option13" type="checkbox" name="option[]" value="13" /> <img src="/img/user/top/option_list13.gif" alt="オイル交換サービス" id="option13" /></li></label>
                        <label for="option14"><li><input id="option14" type="checkbox" name="option[]" value="14" /> <img src="/img/user/top/option_list14.gif" alt="車検時限定割引サービス" id="option14" /></li></label>
                        <label for="option2"><li class="option_left"> <input id="option2" type="checkbox" name="option[]" value="2" /> <img src="/img/user/top/option_list2.gif" alt="整備保証付き" id="option2" /></li></label>
                        <label for="option15"><li><input id="option15" type="checkbox" name="option[]" value="15" /> <img src="/img/user/top/option_list15.gif" alt="即日完了OK" id="option15" /></li></label>
                        <label for="option16"><li class="option_left"> <input id="option16" type="checkbox" name="option[]" value="16" /> <img src="/img/user/top/option_list16.gif" alt="ロードサービス取り扱い" id="option16" /></li></label>
                        <label for="option3"><li><input id="option3" type="checkbox" name="option[]" value="3" /> <img src="/img/user/top/option_list3.gif" alt="夜間受付OK" id="option3" /></li></label>
                        <label for="option4"><li class="option_left"> <input id="option4" type="checkbox" name="option[]" value="4" /> <img src="/img/user/top/option_list4.gif" alt="土日対応OK" id="option4" /></li></label>
                        <label for="option5"><li><input id="option5" type="checkbox" name="option[]" value="5" /> <img src="/img/user/top/option_list5.gif" alt="代車あり" id="option5" /></li></label>
                        <label for="option6"><li class="option_left"> <input id="option6" type="checkbox" name="option[]" value="6" /> <img src="/img/user/top/option_list6.gif" alt="引取納車OK" id="option6" /></li></label>
                        <label for="option7"><li><input id="option7" type="checkbox" name="option[]" value="7" /> <img src="/img/user/top/option_list7.gif" alt="キャッシュレスOK" id="option7" /></li></label>
                        <label for="option8"><li class="option_left"> <input id="option8" type="checkbox" name="option[]" value="8" /> <img src="/img/user/top/option_list8.gif" alt="クレジットカード利用OK" id="option8" /></li></label>
                    </ul> <br class="clear" />
                    <p><a href="javascript:;" onclick="window.open('/shopoption_desc.html', 'temp_window', 'left=0,top=0,width=670,height=600,scrollbars=yes');">* オプションの詳細はこちら</a></p> <a href="#" onclick="document.option_form.submit(); return false;" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('search_btn2','','/images/top/btn_search_act.gif',1)"><img src="/images/top/btn_search.gif" alt="検索する" name="search_btn2" width="250" height="37" border="0" id="search_btn2" /></a></form>
            </div>
        </div> {*
        <div id="box_about">
            <h2><img src="img/user/top/h2_about.gif" alt="「とことん車検ナビ」とは？" /></h2>
            <p> 2年に1度の愛車の車検。<br />少しでも便利でオトクで、安心できるお見せをじっくり探して頼みたい！ そんな賢いドライバーの皆様のために、最適の車検をとことん選べる「とことん車検ナビ」が誕生しました。 </p>
            <p> ドライバーの方の利用料は全て無料です。<br />あなたのご希望にぴったりの車検を見つけて下さい。 </p> <img src="img/user/top/about_cut.gif" alt="" /> </div> *}
        <h2 id="topics_bnr"><a href="http://{$smarty.server.HTTP_HOST}/manual/lightCar.html"><img src="/img/user/manual_lightCar.jpg" alt="車検比較マニュアル 軽自動車編" border="0" /></a></h2>
        <p>■<a href="http://{$smarty.server.HTTP_HOST}/manual/lightCar.html">車検比較マニュアル 軽自動車編</a><br /> 軽自動車の車検に関する疑問やポイントを解説しています。</p>
        <hr />
        <h2 id="topics_bnr_2"><a href="http://{$smarty.server.HTTP_HOST}/manual/prius.html"><img src="/img/user/manual_prius.jpg" alt="車検比較マニュアル プリウス編" border="0" /></a></h2>
        <p>■<a href="http://{$smarty.server.HTTP_HOST}/manual/prius.html">車検比較マニュアル プリウス編</a><br /> プリウスの車検に関する疑問やポイントを解説しています。</p>
        <hr />
        <!--   <h2 id="topics"><a href="http://{$smarty.server.HTTP_HOST}/glossary.php"><img src="/img/user/glossary_top.jpg" alt="車検用語集" border="0" /></a></h2>
  <p><a href="http://{$smarty.server.HTTP_HOST}/glossary.php">車検用語集</a><br />
  車検に関する用語を掲載しています。分からない用語はこちらでチェック！</p>
  <hr />
 ■<a href="http://{$smarty.server.HTTP_HOST}/glossary/glossary_a04.html">オイルエレメント</a>（車検用語ピックアップ）<br />
    オイルエレメントとは別名オイルフィルターとも呼び、エンジンオイル中に含まれる金属粉などの異物を取り除くためのもので、定期的に交換が必要です。<br />
  その他の用語は<a href="http://{$smarty.server.HTTP_HOST}/glossary.php">こちら</a></p>
    <hr />-->
        <h2 id="topics"><a href="http://{$smarty.server.HTTP_HOST}/keisai.html"><img src="/img/user/top/keisai_bunnar.jpg" alt="掲載をお考えの方へ" border="0" /></a></h2>
        <p><a href="http://{$smarty.server.HTTP_HOST}/keisai.html">掲載をお考えの方へ</a><br /> とことん車検ナビは、全国の選び抜かれた車検ショップを紹介するサイトです。掲載希望の方はこちらよりお申し込みください。</p> {* 以下追加部分 *}
        <p class="pr">PR</p>
        <div class="banner"> <a href="http://www.2525r.com/" target="_blank"><img src="/img/user/top/niconico_bnr.gif" alt="ニコニコレンタカー" width="230" height="80" border="0" /></a><br /> <a href="http://www.2525r.com/" target="_blank">ニコニコレンタカー</a><br /> 全国1500店を超える格安レンタカー日本最大ネットワーク！ <br class="clear" /> </div>
        <div class="banner"> <a href="http://www.nicolease.com/" target="_blank"><img src="/img/user/top/banner_nicolease.jpg" alt="ニコリース" width="230" height="80" border="0" /></a><br /> <a href="http://www.nicolease.com/" target="_blank">ニコリース</a><br /> 2ヶ月～の長期で車を借りるなら、断然お得なニコリース！<br />全く新しい「期間設定型中古車リースシステム」です。 <br class="clear" /> </div>
        <!-- 2017/04/12 コメントアウト ST 
  <div class="banner">
    <a href="http://www.nicoren-oc.com/" target="_blank"><img src="/img/user/top/banner_owners2.jpg" alt="ニコレンオーナーズ" width="230" height="80" border="0" /></a><br />
    <a href="http://www.nicoren-oc.com/" target="_blank">ニコレンオーナーズ</a><br />
  「買取」＆「レンタカー運用益配当」の全く新しい仕組みを開発！愛車をどこよりも高額買取いたします。
  <br class="clear" />
  </div>
  2017/04/12 コメントアウト ED -->
        <div class="banner"> <a href="http://www.haisya.co.jp/" target="_blank"><img src="/img/user/top/banner_haisya2.jpg" alt="日本廃車センター" width="230" height="80" border="0" /></a><br /> <a href="http://www.haisya.co.jp/" target="_blank">日本廃車センター</a><br /> 日本全国から廃車買取いたします。お気軽にご相談ください。 <br class="clear" /> </div>
        <div class="banner"> <a href="https://www.2525repair.com/" target="_blank"><img src="/img/user/top/banner_niconicobp.png" alt="ニコニコ板金" width="230" border="0" /></a><br /> <a href="https://www.2525repair.com/" target="_blank">ニコニコ板金</a><br /> 横浜で車の傷修理・板金塗装ならニコニコ板金！ <br class="clear" /> </div>
        <!--
  <div class="banner">
  <ul>
  <li><a href="http://www.ss4u.com/"><img src="/img/user/top/banner_super.jpg" alt="スーパーステーション" width="151" height="50" border="0" /></a><br />
    <a href="http://www.ss4u.com/" target="_blank">スーパーステーション</a></li>
  </ul>
  <br class="clear" />
  </div>
-->
        <!--
    <div id="box_pr">
    <span id="ss_img_wrapper_130-66_flash_ja">
    <a href="http://jp.globalsign.com/" target="_blank">
    <img alt="SSL　グローバルサインのサイトシール" border="0" id="ss_img" src="//seal.globalsign.com/SiteSeal/images/gs_noscript_130-66_ja.gif" />
    </a>
    </span>
    <script type="text/javascript" src="//seal.globalsign.com/SiteSeal/gs_flash_130-66_ja.js"></script>
    </div>
--></div>
    <div id="content_right">
        <div id="box_iroha">
            <h2 id="iroha"><img src="/img/user/top/h2_iroha.gif" alt="これからは賢い車検探し 車検の知識をしっかり押さえて、余裕を持って準備しましょう" /></h2>
            <p id="iroha_desc"><img src="/img/user/top/desc_iroha.gif" alt="車検がまったくの初めてでも、これさえ読めばきっと大丈夫" /></p>
            <ol>
                <li id="iroha1"><a href="/knowledge_1.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('img_iroha_1','','/img/user/top/btn_iroha1_act.gif',0)"><img src="/img/user/top/btn_iroha1.gif" alt="いろはその1 車検って何？" name="img_iroha_1" /></a></li>
                <li id="iroha2"><a href="/knowledge_2.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('img_iroha_2','','/img/user/top/btn_iroha2_act.gif',0)"><img src="/img/user/top/btn_iroha2.gif" alt="いろはその2 安心できる車検を選ぶコツ" name="img_iroha_2"  /></a></li>
                <li id="iroha3"><a href="/knowledge_3.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('img_iroha_3','','/img/user/top/btn_iroha3_act.gif',0)"><img src="/img/user/top/btn_iroha3.gif" alt="いろはその3 車検を安くあげるコツ" name="img_iroha_3"  /></a></li>
                <li id="iroha4"><a href="/knowledge_4.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('img_iroha_4','','/img/user/top/btn_iroha4_act.gif',0)"><img src="/img/user/top/btn_iroha4.gif" alt="いろはその4 車検で得をするコツ" name="img_iroha_4"  /></a></li>
                <!--<li id="iroha5"><a href="/knowledge_5.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('img_iroha_5','','/img/user/top/btn_iroha5_act.gif',0)"><img src="/img/user/top/btn_iroha5.gif" alt="いろはその5 要注意！車検の期間とは？" name="img_iroha_5"  /></a></li>
        <li id="iroha6"><a href="/knowledge_6.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('img_iroha_6','','/img/user/top/btn_iroha6_act.gif',0)"><img src="/img/user/top/btn_iroha6.gif" alt="いろはその6 本当にお得な車検を選ぶ方法とは？" name="img_iroha_4"  /></a></li>
        <li id="iroha7"><a href="/knowledge_7.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('img_iroha_7','','/img/user/top/btn_iroha7_act.gif',0)"><img src="/img/user/top/btn_iroha7.gif" alt="いろはその7 車検費用の内訳を徹底解説！" name="img_iroha_5"  /></a></li>-->
            </ol>
        </div>
        <p class="margin-left10">全国からお見積りご注文を頂いております！</p>
        <div style="height:300px; width:572px; overflow:hidden; margin:0; padding:1px 0 1px 1px; border:1px solid #CCCCCC; margin-bottom: 10px;"> <iframe src="http://hand-control.shop/tokoton-navi-api/tokoton-orders.php" name="現在の注文状況" width="571" height="300" align="center" frameborder="0">
      このページではインラインフレームを使用しています<br />インラインフレームに未対応のブラウザをお使いの方は、
        <A href="http://hand-control.shop/tokoton-navi-api/tokoton-orders.php" target="_blank">こちら</A>で内容をご確認いただけます。
      </iframe> </div>
        <div id="box_economy">
            <h2 id="economy"><img src="/img/user/top/h2_economy.gif" alt="どうせ車検をするのなら、とことんお得な車検を選ぼう！" /></h2>
            <p id="economy_desc">格安車検情報、プレゼント、キャンペーン情報、限定WEBクーポンなどお得情報いっぱい！</p>
            <p id="economy_desc_privilege" style="width:500px;">車検が3万円台からの激安価格でお見積もり。ドライバーを応援する車検取扱い店舗がたくさん掲載されていますので設備や費用を徹底比較。<br />もちろん、お見積りは無料で予約は簡単。お気に入りの車検ショップが見つかったらお気軽にお問い合わせください。<br />さらに、WEB限定の見逃せないプレゼントが、掲載各社からたくさん用意されています。<br />車検は2年に1回の車の誕生日。このチャンスに嬉しい景品やサービスをGETしちゃいましょう。</p>
        </div>
        <div id="box_topics">
            <h2 id="topics"><img src="/img/user/top/h2_topics2.gif" alt="トピックス" /></h2>
            <table cellspacing="0" cellpadding="0" id="table_topics"> {foreach from=$topics item = "item" key = "key" name = "top_loop"}
                <tr class="{cycle values=" even,odd "}">
                    <td class="date" width="60">{$item.top_up_date|date_format:"%Y/%m/%d"}</td>
                    <td class="title" width="258">{$item.topics_nm}</td>
                </tr> {/foreach} </table>
        </div>
        <div id="box_knowledge">
            <h2><img src="img/user/top/h2_knowledge.gif" alt="車検選びの心得" /></h2>
            <div class="left">
                <h3><img src="img/user/top/knowledge_catch.gif" alt="「質だけでなく状況に合う車検を選ぶ」" /></h3>
                <p>車検とは、国の基準にお車が合っているかどうかを検査することであり、一定の設備と技術があって信頼さえできていれば、カーディーラー・整備専門工場・ガソリンスタンド・専門店など、<span>どこで予約・実施をしても内容は同じ</span>なのです。<br /> だからこそ<span class="orenge">“質はもちろん、安いだけではなくご自身の状況に合う車検を見積り、比較して選ぶこと”</span>を心がけましょう。</p>
            </div> <img src="img/user/top/knowledge_cut.gif" alt="実はどれも同じだった！！" class="right" /> </div>
        <div id="box_point">
            <h3 id="point"><img src="/img/user/top/h3_point.gif" alt="さらに車検でポイント・マイルをGET！" /></h3>
            <h4 id="card"><img src="/img/user/top/h4_point_card.gif" alt="クレジットカードが使える店舗増加中。" /></h4>
            <p id="card_desc">多くの車検工場でクレジットカードが利用可能に！<br /> 現金払いと違ってポイントやマイルが付くので断然お得です。<br /> この機会にクレジットカードを使ってポイントやマイルを大量GET！<br /><br /> 【ご利用可能なクレジットカード例】<br /> <img src="/img/user/detail/visa.gif" alt="VISA"> <img src="/img/user/detail/jcb.gif" alt="JCB"> <img src="/img/user/detail/master.gif" alt="MasterCard"> <img src="/img/user/detail/ae.gif" alt="AMERICANEXPRESS"> <img src="/img/user/detail/dc.gif" alt="DC"> <img src="/img/user/detail/uc.gif" alt="UC"> <a href="/search/option_08/" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('card_btn','','/images/top/btn_creditcard_list_over.png',1)"><img src="/images/top/btn_creditcard_list.png" alt="クレジット対応店舗はこちら" name="card_btn" width="444" height="37" border="0" id="card_btn" /></a></p>
        </div>
        <div id="box_privilege">
            <h3 id="privilege"><img src="/img/user/top/h3_privilege.gif" alt="例えばこんなお得な特典があります！" /></h3>
            <ul id="privilege_list">
                <li>
                    <h4 id="privilege1"><img src="/img/user/top/h4_present_gourmet.gif" alt="美味しいグルメプレゼント" /></h4>
                    <p id="privilege1_desc">ステーキ・カニ・メロンなどの旬の味覚やフルーツがあなたの食卓に</p> <a href="/search/option_09/" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('privilege1_img','','/images/top/img_present_gourmet_act.gif',1)"><img src="/images/top/img_present_gourmet.gif" alt="対応店を見る" name="privilege1_img" width="154" height="120" border="0" id="privilege1_img" /></a></li>
                <li>
                    <h4 id="privilege2"><img src="/img/user/top/h4_present_goods.gif" alt="お役立ちグッズプレゼント" /></h4>
                    <p id="privilege2_desc">日常品やカー用品など各社工夫を凝らしたプレゼントがいっぱい</p> <a href="/search/option_10/" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('privilege2_img','','/images/top/img_present_goods_act.gif',1)"><img src="/images/top/img_present_goods.gif" alt="対応店を見る" name="privilege2_img" width="154" height="120" border="0" id="privilege2_img" /></a></li>
                <li>
                    <h4 id="privilege3"><img src="/img/user/top/h4_present_lottery.gif" alt="抽選deプレゼント" /></h4>
                    <p id="privilege3_desc">旅行券やホテル宿泊券、AV家電など大型景品GETのチャンス</p> <a href="/search/option_12/" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('privilege3_img','','/images/top/img_present_lottery_act.gif',1)"><img src="/images/top/img_present_lottery.gif" alt="対応店を見る" name="privilege3_img" width="154" height="120" border="0" id="privilege3_img" /></a></li>
                <li>
                    <h4 id="privilege4"><img src="/img/user/top/h4_present_gasoline.gif" alt="ガソリンプレゼント" /></h4>
                    <p id="privilege4_desc">給油チケットや長期のガソリン大幅割引など大盤振る舞い！</p> <a href="/search/option_11/" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('privilege4_img','','/images/top/img_present_gasoline_act.gif',1)"><img src="/images/top/img_present_gasoline.gif" alt="対応店を見る" name="privilege4_img" width="154" height="120" border="0" id="privilege4_img" /></a></li>
                <li>
                    <h4 id="privilege5"><img src="/img/user/top/h4_present_discount.gif" alt="車検時限定割引" /></h4>
                    <p id="privilege5_desc">メンテナンス作業以外にも板金・コーティングなどが割引特価に</p> <a href="/search/option_14/" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('privilege5_img','','/images/top/img_present_discount_act.gif',1)"><img src="/images/top/img_present_discount.gif" alt="対応店を見る" name="privilege5_img" width="154" height="120" border="0" id="privilege5_img" /></a></li>
                <li>
                    <h4 id="privilege6"><img src="/img/user/top/h4_present_oilchange.gif" alt="オイル交換サービス" /></h4>
                    <p id="privilege6_desc">カーメンテナンスの必須事項、オイル交換を無料でサービス</p> <a href="/search/option_13/" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('privilege6_img','','/images/top/img_present_oilchange_act.gif',1)"><img src="/images/top/img_present_oilchange.gif" alt="対応店を見る" name="privilege6_img" width="154" height="120" border="0" id="privilege6_img" /></a></li>
            </ul> <br class="clear" /> </div>
        <p id="otherprivileges"><img src="/img/user/top/desc_otherprivileges.gif" alt="このほかにも素敵な特典盛り沢山です。左のメニューで掘り出し車検を探そう！" /></p> {* 以下追加部分 *} </div>
</div> <br class="clear" />
<div id="box_about">
    <h2><img src="/images/top/icn_circle.png" height="16px" />「とことん車検ナビ」とは？</h2>
    <p>2年に一度の車検は費用のかかるお買い物です。これをしないと自動車検査章(いわゆる車検章)を交付してもらえず、公道を走ることができなくなります。<br /> しかし現在は車検を実施する店舗も自動車ディーラーや車検専門店、ガソリンスタンドなど多くあります。それぞれの車検相場やサービスが異なるためどの店舗で車検の見積り予約をするか悩んでしまう方も多いでしょう。そんな状況で少しでも便利でオトクな車検を比較して選ぶために「とことん車検ナビ」が生まれました。</p>
    <p>車検費用をとにかく安くしたいという方や、普段整備をしないから車検時にしっかりと整備して欲しい方、軽自動車の車検なのかベンツやBMWなど外車の車検なのかなど、お客様の状況やご要望に合わせて車検の実施内容は変わってきます。</p>
    <p>とことん車検ナビではあなたの近くの優良車検店を多数掲載。<br /> 車検に関連する費用や整備内容の見積りなどをじっくり比較検討することができます。<br /> さらに各車検店舗が独自で実施しているサービスや期間限定の特典なども多数掲載しています。</p>
    <p>安いだけではなく安心して任せられる車検のためには、技術や費用の見積りを比較しながら納得できる車検店舗を選ぶことが大切です。<br /> 指定整備工場や認証工場となっている車検店舗もたくさん掲載されています。</p>
    <p>またとことん車検ナビでは車検が初めてという方のための様々なコンテンツがあります。車検の有効期間や費用の詳細を説明する記事をご覧いただくと、<br />お得な車検を選ぶための手助けになるでしょう。</p>
    <p>安心できるドライブライフをずっとサポート。信頼できるお店ばかりです。あなたのご希望にぴったりの頼れる愛車のパートナーショップを見つけて下さい。</p>
    <h2><img src="/images/top/icn_circle.png" height="16px" />車検とは？</h2>
    <h3>車検は2年1回</h3>
    <p>車検は2年に1度実施する”車の健康診断”です。車の中にはブレーキパッドなど経年劣化する部品もあるため、期間を定めて点検をすることで整備不良による事故を未然に防ぐために車検が義務付けられています。</p>
    <p>2年に1度ですが税金や手数料・整備費用を一度に支払うため費用を気にする人が多くいます。車検費用は車種によって異なり、軽自動車、小型自動車、中型、二輪車などで費用の目安が変わってきます。もし車検無しで運転した場合には、「無車検車運行」で違反点数と罰金が科せられてしまいます。</p>
    <h2><img src="/images/top/icn_circle.png" height="16px" />車検を受ける前の確認と必要なもの</h2>
    <h3>車検の期間・満了日</h3>
    <p>一般的に満了日の1ヶ月前が車検を受ける時期の目途となっています。車検満了日を確認するにはフロントガラスのステッカーだけではなく、しっかりと車検証に記載されている日付を見て確認するようにしましょう。車検は業者に委託するケースがほとんどです。整備工場やガソリンスタンド、ディーラーなどの民間車検工場で検査をするのが一般的です。ユーザー車検や車検代行業者で実施することも可能です。</p>
    <h3>自動車納税証明書</h3>
    <p>以前は車検を受ける際に必要な書類でしたが現在は電子化が進んただめ、納税確認を電子上でできるようになった都道府県では車検時に不要のケースもあります。</p>
    <h3>自動車損害賠償保険（自賠責）の証明書</h3>
    <p>自賠責保険の証明書は保険期間が有効なものを用意する必要があります。大抵は車検時に自賠責も更新するため問題無いのですが、車検切れの車を車検に出す場合には注意しましょう。</p>
    <h2><img src="/images/top/icn_circle.png" height="16px" />車検はなぜ必要なのか？</h2>
    <h3>車検は安全の意味ではない</h3>
    <p>国土交通省によって全ての車が定期的に車検を受けることを義務付けられています。自動車の故障による事故を未然に防ぐためにこのような規則が定められています。<br />
        <p>国土交通省によって定められているといっても、必ずしも安全性を保障するものではありません。あくまでも定められた最低限の保安基準を満たしていることを示すために車検があります。そのため可能であれば近くのガソリンスタンドなどで定期的に点検や整備を行うことをおすすめします。</p>
        <h3>車検制度の概要</h3>
        <p>車検制度は道路運送車両法という法律で義務付けられており、1951年に日本全国で実施が定められました。安全の基準(保安基準)をクリアした車両であることを国が認めて初めて公道での運転が可能になります。これによって未整備車両や故障車による事故を防ぐことができるのです。今ではたくさんの方が利用している軽自動車は実は1971年まで車検を受ける必要がありませんでした。それまでは軽自動車を保有する人が少なかったのです。しかし1970年代になり軽自動車が全車両の30%程度を占めるようになり、1972年に法改正によって軽自動車も車検が必要となりました。そのため軽自動車だけは普通車と異なり”軽自動車検査協会”が車検を実施することになっています。</p>
</div>
<div>
    <p class="search_top_but"><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/search_top/"></a></p>
    <!--<span style="font-size:14px;margin-right:30px">「とことん車検ナビ」で見つけよう！あなたの愛車にぴったりの安心、便利、格安なお店。見積り無料です。</span>--></div> <br class="clear" />
<!-- ▼ソーシャルブックマーク-->
<div class="sns">
    <!-- Place this tag where you want the +1 button to render. -->
    <div class="g-plusone" data-size="medium" data-annotation="none"></div> {literal}
    <!-- Place this tag after the last +1 button tag. -->
    <script type="text/javascript">
        window.___gcfg = {lang: 'ja'};
      
        (function() {
          var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
          po.src = 'https://apis.google.com/js/plusone.js';
          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
        })();
    </script> {/literal} <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://{$smarty.server.HTTP_HOST}/" data-text="車検費用が驚きの3万円台から！とことん車検ナビ" data-lang="ja" data-count="none">ツイート</a> {literal}
    <script>
        !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
    </script> {/literal} <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2F{$smarty.server.HTTP_HOST}%2F&amp;send=false&amp;layout=button_count&amp;width=70&amp;show_faces=false&amp;font=tahoma&amp;colorscheme=light&amp;action=like&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:70px; height:21px;" allowTransparency="true"></iframe> </div> <br class="clear" />
<!-- ▲ソーシャルブックマーク-->{include file="ci:user/footer.tpl"}
