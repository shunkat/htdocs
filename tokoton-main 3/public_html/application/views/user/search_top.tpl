{include file="ci:user/header.tpl"}

  <div id="content">
    <ul id="breadcrumb">
      <li><a href="http://{$smarty.server.HTTP_HOST}/">車検の費用比較ならとことん車検ナビ</a></li>
      <li>車検をさがす</li>
    </ul>
    <br class="clear"/>
    <h2 id="search_top">車検をさがす</h2>
    <!-- ▼ソーシャルブックマーク-->
    <div class="sns">
    <!-- Place this tag where you want the +1 button to render. -->
    <div class="g-plusone" data-size="medium" data-annotation="none"></div>
    {literal}
    <!-- Place this tag after the last +1 button tag. -->
    <script type="text/javascript">
      window.___gcfg = {lang: 'ja'};

      (function() {
        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
        po.src = 'https://apis.google.com/js/plusone.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
      })();
    </script>
    {/literal}
    <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://{$smarty.server.HTTP_HOST}/" data-text="車検費用が驚きの3万円台から！とことん車検ナビ" data-lang="ja" data-count="none">ツイート</a>
    {literal}
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    {/literal}
    <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2F{$smarty.server.HTTP_HOST}%2F&amp;send=false&amp;layout=button_count&amp;width=70&amp;show_faces=false&amp;font=tahoma&amp;colorscheme=light&amp;action=like&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:70px; height:21px;" allowTransparency="true"></iframe>
    </div>
    <br class="clear" />
    <!-- ▲ソーシャルブックマーク-->
	{if $error != null}
	<div class="error">
		<ul>
		{foreach from=$error item = "item" key = "arrat_key" name = "error_loop"}
			<li>{$item}</li>
		</ul>
		{/foreach}
	</div>
	{/if}

    <div id="search_left">
		<div id="box_kodawari">
			<h3 id="step1">都道府県から探す</h3>
            <div class="marginTop10">
            </div>
    <!-- ▼都道府県から探す-->

            <!-- ▼地図-->
            <div id="syakenmap">
            	<div id="map_Firefox">
            	<!-- ▼九州-->
                <ul id="kyushu">
                	<li class="map_ie"><a href="http://{$smarty.server.HTTP_HOST}/search/pref_41/"><img src="/images/map/map_fukuoka.gif" width="41" height="20" alt="福岡" /></a></li>
                    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_42/"><img src="/images/map/map_saga.gif" width="41" height="19" alt="佐賀" /></a></li>
                    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_43/"><img src="/images/map/map_saga-13.gif" width="41" height="20" alt="長崎" /></a></li>
                    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_44/"><img src="/images/map/map_kumamoto.gif" width="41" height="19" alt="熊本" /></a></li>
                    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_45/"><img src="/images/map/map_oita.gif" width="41" height="19" alt="大分" /></a></li>
                    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_46/"><img src="/images/map/map_miyazaki.gif" width="41" height="20" alt="宮崎" /></a></li>
                    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_47/"><img src="/images/map/map_kagoshima.gif" width="41" height="19" alt="鹿児島" /></a></li>
                </ul>
                <!-- ▼中国-->
                <ul id="tyugoku">
                	<li class="map_ie"><a href="http://{$smarty.server.HTTP_HOST}/search/pref_32/"><img src="/images/map/map_tottori.gif" width="42" height="19" alt="鳥取" /></a></li>
                    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_33/"><img src="/images/map/map_tottori-05.gif" width="42" height="20" alt="島根" /></a></li>
                    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_34/"><img src="/images/map/map_okayama.gif" width="42" height="19" alt="岡山" /></a></li>
                    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_35/"><img src="/images/map/map_hiroshima.gif" width="42" height="20" alt="広島" /></a></li>
                    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_36/"><img src="/images/map/map_yamaguchi.gif" width="42" height="20" alt="山口" /></a></li>
              	</ul>
            	<!-- ▼北陸・甲信越-->
                <ul id="hokuriku">
                	<li class="map_ie"><a href="http://{$smarty.server.HTTP_HOST}/search/pref_16/"><img src="/images/map/map_nigata.gif" width="42" height="19" alt="新潟" /></a></li>
                    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_17/"><img src="/images/map/map_toyama.gif" width="42" height="19" alt="富山" /></a></li>
                    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_18/"><img src="/images/map/map_ishikawa.gif" width="42" height="20" alt="石川" /></a></li>
                    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_19/"><img src="/images/map/map_fukui.gif" width="42" height="19" alt="福井" /></a></li>
                    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_20/"><img src="/images/map/map_yamanashi.gif" width="42" height="20" alt="山梨" /></a></li>
                    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_21/"><img src="/images/map/map_nagano.gif" width="42" height="19" alt="長野" /></a></li>
                </ul>
            	<!-- ▼北海道-->
        		<ul id="hokkaido">
                	<li class="map_ie"><a href="http://{$smarty.server.HTTP_HOST}/search/pref_02/"><img src="/images/map/map_hokkaido.gif" width="42" height="20" alt="北海道" /></a></li>
                </ul>
                <br class="clear" />
                
                
                
                <!-- ▼沖縄-->
        		<ul id="okinawa">
                	<li class="map_ie"><a href="http://{$smarty.server.HTTP_HOST}/search/pref_48/"><img src="/images/map/map_okinawa.gif" width="41" height="20" alt="沖縄" /></a></li>
                </ul>
                <ul id="shikoku">
                	<li class="map_ie"><a href="http://{$smarty.server.HTTP_HOST}/search/pref_37/"><img src="/images/map/map_tokushima.gif" width="42" height="19" alt="徳島" /></a></li>
                    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_38/"><img src="/images/map/map_kagawa.gif" width="42" height="20" alt="香川" /></a></li>
                    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_39/"><img src="/images/map/map_ehime.gif" width="42" height="20" alt="愛媛" /></a></li>
                    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_40/"><img src="/images/map/map_kouchi.gif" width="42" height="19" alt="高知" /></a></li>
                </ul>
                <ul id="kansai">
                	<li class="map_ie"><a href="http://{$smarty.server.HTTP_HOST}/search/pref_26/"><img src="/images/map/map_osaka.gif" width="42" height="20" alt="大阪" /></a></li>
                    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_27/"><img src="/images/map/map_hyougo.gif" width="42" height="20" alt="兵庫" /></a></li>
                    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_28/"><img src="/images/map/map_kyoto.gif" width="42" height="19" alt="京都" /></a></li>
                    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_29/"><img src="/images/map/map_shiga.gif" width="42" height="20" alt="滋賀" /></a></li>
                    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_30/"><img src="/images/map/map_nara.gif" width="42" height="20" alt="奈良" /></a></li>
                    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_31/"><img src="/images/map/map_wakayama.gif" width="42" height="19" alt="和歌山" /></a></li>
                </ul>
                <ul id="tokai">
                	<li class="map_ie"><a href="http://{$smarty.server.HTTP_HOST}/search/pref_22/"><img src="/images/map/map_aichi.gif" width="42" height="20" alt="愛知" /></a></li>
                    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_23/"><img src="/images/map/map_gifu.gif" width="42" height="19" alt="岐阜" /></a></li>
                    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_24/"><img src="/images/map/map_sizuoka.gif" width="42" height="20" alt="静岡" /></a></li>
                    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_25/"><img src="/images/map/map_mie.gif" width="42" height="20" alt="三重" /></a></li>
                </ul>
                <ul id="kanto">
                	<li class="map_ie"><a href="http://{$smarty.server.HTTP_HOST}/search/pref_09/"><img src="/images/map/map_tokyo.gif" width="41" height="20" alt="東京" /></a></li>
                    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_10/"><img src="/images/map/map_kanagawa.gif" width="41" height="19" alt="神奈川" /></a></li>
                    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_11/"><img src="/images/map/map_saitama.gif" width="41" height="20" alt="埼玉" /></a></li>
                    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_12/"><img src="/images/map/map_chiba.gif" width="41" height="20" alt="千葉" /></a></li>
                    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_13/"><img src="/images/map/map_ibaraki.gif" width="41" height="20" alt="茨城" /></a></li>
                    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_14/"><img src="/images/map/map_tochigi.gif" width="41" height="20" alt="栃木" /></a></li>
                    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_15/"><img src="/images/map/map_gunma.gif" width="41" height="19" alt="群馬" /></a></li>
                </ul>
                <ul id="tohoku">
                	<li class="map_ie"><a href="http://{$smarty.server.HTTP_HOST}/search/pref_03/"><img src="/images/map/map_aomori.gif" width="42" height="20" alt="青森" /></a></li>
                    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_04/"><img src="/images/map/map_iwate.gif" width="42" height="20" alt="岩手" /></a></li>
                    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_05/"><img src="/images/map/map_miyagi.gif" width="42" height="19" alt="宮城" /></a></li>
                    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_06/"><img src="/images/map/map_akita.gif" width="42" height="20" alt="秋田" /></a></li>
                    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_07/"><img src="/images/map/map_yamagata.gif" width="42" height="19" alt="山形" /></a></li>
                    <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_08/"><img src="/images/map/map_fukushima.gif" width="42" height="20" alt="福島" /></a></li>
                </ul>
                <br class="clear" />
                </div>
                <!-- ▲Firefox-->
                
			</div>
			<!-- ▲地図-->

            <div id="search_input">
            <form action="/user/search/post_control/" method="post" name="keyword_form2">
        	<input name="key" type="text" size="30" value="地域・市町村名から探す" id="freeword2" onclick="textClear(this);" />
        	<input type="submit" value="検索" onclick="document.keyword_form2.submit();">
        	</form>
            </div>
		<dl id="area_list_category2">
		  <dt>北海道・東北</dt>
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
		  </dd>
		  <dt>関東</dt>
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
		  </dd>
		  <dt>北陸・甲信越</dt>
			<dd>
			<ul class="area_list_detail">
			  <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_16/">新潟</a></li>
			  <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_17/">富山</a></li>
			  <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_18/">石川</a></li>
			  <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_19/">福井</a></li>
			  <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_20/">山梨</a></li>
			  <li class="last"><a href="http://{$smarty.server.HTTP_HOST}/search/pref_21/">長野</a></li>
			</ul>
		  </dd>
		  <dt>東海</dt>
		  <dd>
			<ul class="area_list_detail">
			  <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_22/">愛知</a></li>
			  <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_23/">岐阜</a></li>
			  <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_24/">静岡</a></li>
			  <li class="last"><a href="http://{$smarty.server.HTTP_HOST}/search/pref_25/">三重</a></li>
			</ul>
		  </dd>
		  <dt>近畿</dt>
		  <dd>
			<ul class="area_list_detail">
			  <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_26/">大阪</a></li>
			  <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_27/">兵庫</a></li>
			  <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_28/">京都</a></li>
			  <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_29/">滋賀</a></li>
			  <li><a href="http://{$smarty.server.HTTP_HOST}/search/pref_30/">奈良</a></li>
			  <li class="last"><a href="http://{$smarty.server.HTTP_HOST}/search/pref_31/">和歌山</a></li>
			</ul>
		  </dd>
		  <dt>中国・四国</dt>
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
		  </dd>
		  <dt>九州・沖縄</dt>
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
    
    </div>
    <!-- ▲都道府県から探す-->
    
    <!-- ▼エリア＋条件で探す-->
    <div id="search_right">
    		<form method="post" action="/user/search/post_control/" name="todouhuken">
			<input type="hidden" id="pref2" name="pref" value="" />
		</form>
		<form method="post" action="/user/search/post_control/" name="kodawari">
            <h3 id="step2">エリア＋条件で探す</h3>
            <h4 id="opt_select_3">都道府県を選択</h4>
			<div id="search_box_region">
				<select id="pref1" name="pref" onchange="set_pref();return false;">
				 <option value="">都道府県を選択して下さい</option>
				 <optgroup label="北海道・東北">
<option value="02">北海道</option>
<option value="03">青森県</option>
<option value="04">岩手県</option>
<option value="05">宮城県</option>
<option value="06">秋田県</option>
<option value="07">山形県</option>
<option value="08">福島県</option>
</optgroup>
<optgroup label="関東">
<option value="09">東京都</option>
<option value="10">神奈川県</option>
<option value="11">埼玉県</option>
<option value="12">千葉県</option>
<option value="13">茨城県</option>
<option value="14">栃木県</option>
<option value="15">群馬県</option>
</optgroup>
<optgroup label="北陸・甲信越">
<option value="16">新潟県</option>
<option value="17">富山県</option>
<option value="18">石川県</option>
<option value="19">福井県</option>
<option value="20">山梨県</option>
<option value="21">長野県</option>
</optgroup>
<optgroup label="東海">
<option value="22">愛知県</option>
<option value="23">岐阜県</option>
<option value="24">静岡県</option>
<option value="25">三重県</option>
</optgroup>
<optgroup label="関西">
<option value="26">大阪府</option>
<option value="27">兵庫県</option>
<option value="28">京都府</option>
<option value="29">滋賀県</option>
<option value="30">奈良県</option>
<option value="31">和歌山県</option>
</optgroup>
<optgroup label="中国・四国">
<option value="32">鳥取県</option>
<option value="33">島根県</option>
<option value="34">岡山県</option>
<option value="35">広島県</option>
<option value="36">山口県</option>
<option value="37">徳島県</option>
<option value="38">香川県</option>
<option value="39">愛媛県</option>
<option value="40">高知県</option>
</optgroup>
<optgroup label="九州・沖縄">
<option value="41">福岡県</option>
<option value="42">佐賀県</option>
<option value="43">長崎県</option>
<option value="44">熊本県</option>
<option value="45">大分県</option>
<option value="46">宮崎県</option>
<option value="47">鹿児島県</option>
<option value="48">沖縄県</option>
</optgroup>

				</select>
			</div>
            
			<div class="indenter">
				<h4 id="opt_select_1">オプションを選択</h4>
				<p id="desc_opt_select_1">自分に合ったご希望のこだわりオプションにチェックを入れて下さい。</p>
				<ul id="optionlist">
					<li><input type="checkbox" name="option[]" value="2" id="option_2" /><label class="option_title" for="option_2">整備保証付</label><br class="clear" />
					</li>
					<li><input type="checkbox" name="option[]" value="16" id="option_16" /><label class="option_title" for="option_16">ロードサービス取扱い</label><br class="clear" />
					</li>
					<li><input type="checkbox" name="option[]" value="15" id="option_15" /><label class="option_title" for="option_15">即日完了ＯＫ</label><br class="clear" />
					</li>
					<li><input type="checkbox" name="option[]" value="3" id="option_3" /><label class="option_title" for="option_3">夜間受付ＯＫ</label><br class="clear" /></li>
					<li><input type="checkbox" name="option[]" value="4" id="option_4" /><label class="option_title" for="option_4">土日対応ＯＫ</label><br class="clear" />
					</li>
					<li><input type="checkbox" name="option[]" value="5" id="option_5" /><label class="option_title" for="option_5">代車あり</label><br class="clear" />
					</li>
					<li><input type="checkbox" name="option[]" value="6" id="option_6" /><label class="option_title" for="option_6">引取納車ＯＫ</label><br class="clear" />
					</li>
					<li><input type="checkbox" name="option[]" value="7" id="option_7" /><label class="option_title" for="option_7">キャッシュレスＯＫ</label><br class="clear" />
					</li>
					<li><input type="checkbox" name="option[]" value="8" id="option_8" /><label class="option_title" for="option_8">クレジットカード利用ＯＫ</label><br class="clear" />
					</li>
					<li><input type="checkbox" name="option[]" value="9" id="option_9" /><label class="option_title" for="option_9">グルメ<br>プレゼント</label><br class="clear" />
					</li>
					<li><input type="checkbox" name="option[]" value="10" id="option_10" /><label class="option_title" for="option_10">グッズ<br>プレゼント</label><br class="clear" />
					</li>
					<li><input type="checkbox" name="option[]" value="11" id="option_11" /><label class="option_title" for="option_11">ガソリン<br>プレゼント</label><br class="clear" />
					</li>
					<li><input type="checkbox" name="option[]" value="12" id="option_12" /><label class="option_title" for="option_12">抽選で<br>プレゼント</label><br class="clear" />
					</li>
					<li><input type="checkbox" name="option[]" value="13" id="option_13" /><label class="option_title" for="option_13">オイル交換サービス</label><br class="clear" />
					</li>
					<li><input type="checkbox" name="option[]" value="14" id="option_14" /><label class="option_title" for="option_14">車検時限定割引サービス</label><br class="clear" />
					</li>
				</ul>
				<br class="clear" />
				<p id="option_detail2" class="text_right70"><a href="http://{$smarty.server.HTTP_HOST}/shopoption_desc.html" onclick="window.open('/shopoption_desc.html', 'temp_window', 'left=0,top=0,width=670,height=600,scrollbars=yes');return false;">* オプションの詳細はこちら</a></p>
			</div>
			
			<div class="indenter">
				<h4 id="opt_select_2">キーワードでさらに絞り込む場合はキーワードを入力</h4>
				<div id="search_box_keyword">
					<p id="desc_opt_select_2">ご希望の店舗名などがわかる場合は店舗名から絞り込むことも出来ます。</p>
					<input type="text" name="key" size="50" value="" /><p><strong>例：東京渋谷車検センター</strong></p>
				</div>
			</div>
			<div>
				<center>
					<p class="search_top_but2"><a href="#submit" onclick="document.kodawari.submit();return false;">　</a></p>
				</center>
			</div>
			<input type="hidden" name="rollback" value="/search_top/" />
		</form>
    </div>
    <!-- ▲エリア＋条件で探す-->
    <br class="clear" />
    

            
            
            
            
            
            
            

    <div id="bottom">
      <p id="pagetop"><a href="#ALL" onclick="backToTop(); return false" onkeypress="backToTop(); return false">↑ページのトップへ</a></p>
      <br class="clear" />
      <p><a href="http://{$smarty.server.HTTP_HOST}/" >←車検費用の比較・見積もりなら【とことん車検ナビ】ホーム</a></p>
    </div>

  </div>
  
  
{include file="ci:user/footer.tpl"}