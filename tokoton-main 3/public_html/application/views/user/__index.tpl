{include file="$document_root/application/views/user/header.tpl"}

<div id="content">
  <div id="content_left">
    <p id="update"><span class="orange">{if $last_update != ""}{$last_update|date_format:"%Y/%m/%d"}{else}---{/if} UPDATE 毎日更新</span><br />
      現在 <span class="red">{$shop_num}</span> 店舗、<span class="red">{$plan_num}件</span>の車検情報を掲載中です。</p>
    <div id="box_topics">
      <h2 id="topics">トピックス</h2>
      <table cellspacing="0" cellpadding="0" id="table_topics">
	{foreach from=$topics item = "item" key = "key" name = "top_loop"}
        <tr class="{cycle values="even,odd"}">
          <td class="date" width="60">{$item.top_up_date|date_format:"%Y/%m/%d"}</td>
          <td class="title" width="258">{$item.topics_nm}</td>
        </tr>
	{/foreach}
      </table>
    </div>
    <div id="box_search">
      <h2 id="search">車検をさがす</h2>
      <h3 id="search_region">地域で車検を選ぶ</h3>
      <div class="box_search_content">
        <p id="search_region_desc">近所の隠れたお得車検を探し出そう！</p>
        <script type="text/javascript" src="/js/top_flash.js"></script>
		</div>
      <h3 id="search_freeword">フリーワード検索</h3>
      <div class="box_search_content">
        <p id="search_freeword_desc">店舗名や内容で気になる店舗を一発検索！</p>
		
		<form action="/user/search/post_control/" method="post" name="keyword_form">
        <input name="key" type="text" size="40" id="freeword" />
		
        <p id="example">例. 東京渋谷車検センター</p>
        <a href="#" onclick="document.keyword_form.submit(); return false;" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('search_btn','','/images/top/btn_search_act.gif',1)"><img src="/images/top/btn_search.gif" alt="検索する" name="search_btn" width="250" height="37" border="0" id="search_btn1" /></a> </div>
		</form>
	  <h3 id="search_option">こだわりで選ぶ</h3>
      <div class="box_search_content">
        <p id="search_option_desc">自分にピッタリの店舗がきっと見つかる！</p>
        <p id="search_option_check_desc">気になる項目にチェックして検索ボタンをクリック</p>
		<form action="/user/search/post_control/" method="post" name="option_form">
        <ul id="option_list">
          <li class="option_left">
            <input type="checkbox" name="option[]" value="1" />
            <p id="option1">とことん24取扱い</p>
          </li>
          <li>
            <input type="checkbox" name="option[]" value="2" />
            <p id="option2">整備保証付き</p>
          </li>
          <li class="option_left">
            <input type="checkbox" name="option[]" value="15" />
            <p id="option15">即日完了ＯＫ</p>
          </li>
          <li>
            <input type="checkbox" name="option[]" value="16" />
            <p id="option16">ロードサービス取り扱い</p>
          </li>
          <li class="option_left">
            <input type="checkbox" name="option[]" value="3" />
            <p id="option3">夜間受付ＯＫ</p>
          </li>
          <li>
            <input type="checkbox" name="option[]" value="4" />
            <p id="option4">土日対応ＯＫ</p>
          </li>
          <li class="option_left">
            <input type="checkbox" name="option[]" value="5" />
            <p id="option5">代車あり</p>
          </li>
          <li>
            <input type="checkbox" name="option[]" value="6" />
            <p id="option6">引取納車ＯＫ</p>
          </li>
          <li class="option_left">
            <input type="checkbox" name="option[]" value="7" />
            <p id="option7">キャッシュレスＯＫ</p>
          </li>
          <li>
            <input type="checkbox" name="option[]" value="8" />
            <p id="option8">クレジットカード利用ＯＫ</p>
          </li>
          <li class="option_left">
            <input type="checkbox" name="option[]" value="9" />
            <p id="option9">グルメプレゼント</p>
          </li>
          <li>
            <input type="checkbox" name="option[]" value="10" />
            <p id="option10">グッズプレゼント</p>
          </li>
          <li class="option_left">
            <input type="checkbox" name="option[]" value="11" />
            <p id="option11">ガソリンプレゼント</p>
          </li>
          <li>
            <input type="checkbox" name="option[]" value="12" />
            <p id="option12">抽選でプレゼント</p>
          </li>
          <li class="option_left">
            <input type="checkbox" name="option[]" value="13" />
            <p id="option13">オイル交換サービス</p>
          </li>
          <li>
            <input type="checkbox" name="option[]" value="14" />
            <p id="option14">車検時限定割引サービス</p>
          </li>
        </ul>
        <br class="clear" />
        <a href="#" onclick="document.option_form.submit(); return false;" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('search_btn2','','/images/top/btn_search_act.gif',1)"><img src="/images/top/btn_search.gif" alt="検索する" name="search_btn2" width="250" height="37" border="0" id="search_btn2" /></a> </div>
        </form>
	</div>
    <div id="box_pr">
      <h2 id="pr">PR枠</h2>
      <a href="http://www.haisya.co.jp" target="_blank"><img src="/images/top/banner1.gif" alt="" border="0" /></a><br />
      <a href="http://www.s2-super-flex.com/" target="_blank"><img src="/images/top/banner_2.gif" alt="" border="0" /></a><br />
    </div>
  </div>
  <div id="content_right">
    <div id="box_economy">
      <h2 id="economy">どうせ車検をするなら、とことんお得な車検を選ぼう！</h2>
      <p id="economy_desc">とことん車検ナビは車検の詳細な内容はもちろん、お得についての情報が満載なんです。</p>
      <p id="economy_desc_privilege">車検実施時には、各社からいろいろなプレゼントが用意されています。車検は2年に1回の車の誕生日。このチャンスに嬉しい景品やサービスをGETしちゃいましょう。</p>
    </div>
    <div id="box_privilege">
      <h3 id="privilege">例えばこんなお得な特典があります！</h3>
      <ul id="privilege_list">
        <li>
          <h4 id="privilege1">美味しいグルメプレゼント</h4>
          <p id="privilege1_desc">ステーキ・カニ・メロンなどの旬の味覚やフルーツがあなたの食卓に</p>
          <a href="/search/option_09/" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('privilege1_img','','/images/top/img_present_gourmet_act.gif',1)"><img src="/images/top/img_present_gourmet.gif" alt="対応店を見る" name="privilege1_img" width="154" height="120" border="0" id="privilege1_img" /></a></li>
        <li>
          <h4 id="privilege2">お役立ちグッズプレゼント</h4>
          <p id="privilege2_desc">日常品やカー用品など各社工夫を凝らしたプレゼントがいっぱい</p>
          <a href="/search/option_10/" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('privilege2_img','','/images/top/img_present_goods_act.gif',1)"><img src="/images/top/img_present_goods.gif" alt="対応店を見る" name="privilege2_img" width="154" height="120" border="0" id="privilege2_img" /></a></li>
        <li>
          <h4 id="privilege3">抽選deプレゼント</h4>
          <p id="privilege3_desc">旅行券やホテル宿泊券、AV家電など大型景品GETのチャンス</p>
          <a href="/search/option_12/" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('privilege3_img','','/images/top/img_present_lottery_act.gif',1)"><img src="/images/top/img_present_lottery.gif" alt="対応店を見る" name="privilege3_img" width="154" height="120" border="0" id="privilege3_img" /></a></li>
        <li>
          <h4 id="privilege4">ガソリンプレゼント</h4>
          <p id="privilege4_desc">給油チケットや長期のガソリン大幅割引など大盤振る舞い！</p>
          <a href="/search/option_11/" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('privilege4_img','','/images/top/img_present_gasoline_act.gif',1)"><img src="/images/top/img_present_gasoline.gif" alt="対応店を見る" name="privilege4_img" width="154" height="120" border="0" id="privilege4_img" /></a></li>
        <li>
          <h4 id="privilege5">車検時限定割引</h4>
          <p id="privilege5_desc">メンテナンス作業以外にも板金・コーティングなどが割引特価に</p>
          <a href="/search/option_14/" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('privilege5_img','','/images/top/img_present_discount_act.gif',1)"><img src="/images/top/img_present_discount.gif" alt="対応店を見る" name="privilege5_img" width="154" height="120" border="0" id="privilege5_img" /></a></li>
        <li>
          <h4 id="privilege6">オイル交換サービス</h4>
          <p id="privilege6_desc">カーメンテナンスの必須事項、オイル交換を無料でサービス</p>
          <a href="/search/option_13/" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('privilege6_img','','/images/top/img_present_oilchange_act.gif',1)"><img src="/images/top/img_present_oilchange.gif" alt="対応店を見る" name="privilege6_img" width="154" height="120" border="0" id="privilege6_img" /></a></li>
      </ul>
      <br class="clear" />
    </div>
    <div id="box_point">
      <h3 id="point">さらに車検でポイント・マイルをGET！</h3>
      <h4 id="card">クレジットカードが使える店舗増加中。</h4>
      <p id="card_desc"><strong>多くの車検工場でクレジットカードが利用可能に！</strong><br />
        現金払いと違ってポイントやマイルが付くので断然お得です。<br />
        この機会にクレジットカードを使ってポイントやマイルを<strong>大量GET！</strong> <a href="/search/option_08/" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('card_btn','','/images/top/btn_point_card_act.gif',1)"><img src="/images/top/btn_point_card.gif" alt="クレジット対応店舗はこちら" name="card_btn" width="326" height="31" border="0" id="card_btn" /></a></p>
    </div>
    <p id="otherprivileges">このほかにも素敵な特典盛り沢山です。左のメニューで掘り出し車検を探そう！</p>
    <h3 id="tokoton">さらにとことん車検ナビ独自の保証サービスがお得！！</h3>
    <div id="box_tokoton">
      <p id="tokoton_desc">2年間修理・部品代無料 故障しやすい76項目を完全カバー</p>
      <h4 id="tokoton24">2年間修理保証サービスとことん24</h4>
      <p id="tokoton24_desc">とことん24は2年間契約の会員制サービスであり、<br />
        入会すると車検実施後2年間に故障しやすい、<br />
        エンジン・ATF・スターターなどの76項目の部品代<br />
        修理代が無料になるサービスです。</p>
      <a href="http://www.tokoton-navi.com/tokoton24.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('tokoton_btn','','/images/top/btn_tokoton_act.gif',0)"><img src="/images/top/btn_tokoton.gif" alt="詳細はこちら" name="tokoton_btn" width="247" height="25" border="0" id="tokoton_btn" /></a><br class="clear" />
    </div>
    <div id="box_iroha">
      <h2 id="iroha">これからは賢い車検探し 車検の知識をしっかり押さえて、余裕を持って準備しましょう。</h2>
      <p id="iroha_desc">車検がまったくの初めてでも、これさえ読めばきっと大丈夫。</p>
      <ol>
        <li id="iroha1"><a href="/knowledge_1.php">いろはその1 車検って何？</a></li>
        <li id="iroha2"><a href="/knowledge_2.php">いろはその2 安心できる車検を選ぶコツ</a></li>
        <li id="iroha3"><a href="/knowledge_3.php">いろはその3 車検を安くあげるコツ</a></li>
        <li id="iroha4"><a href="/knowledge_4.php">いろはその4 車検で得をするコツ</a></li>		
      </ol>
    </div>
  </div>
  <br class="clear" />
</div>
{include file="$document_root/application/views/user/footer.tpl"}