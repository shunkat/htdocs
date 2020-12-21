{include file="$document_root/application/views/client/header.tpl"}

  <div id="content">

{include file="$document_root/application/views/client/shop_menu.tpl"}

    <div id="content_right">
      <h2>サービスアイコンの設定</h2>
      <p class="description">サービスアイコン・取り扱いカードの設定をします。
        （登録が無ければ店舗一覧画面・店舗詳細画面のサービスアイコンは表示されません。） </p>
      <div class="content_sub">
      {if $msg != ""}
	  	<div class="messagebox">
          <ul>
	            {$msg}
          </ul>
        </div>
	{/if}
        <table border="0" cellspacing="0" cellpadding="0" class="common">
          <tr>
            <td class="introcell_title">サービスアイコン</td>
          </tr>
          <tr>
            <td class="introcell_label">追加したいサービスアイコンのチェックボックスにチェックを入れ、登録ボタンを押してください。<br />
              取り消したい場合はチェックをはずし、登録ボタンを押してください。</td>
          </tr>
        </table>
	
	<form action="/client/shop_option/to_confirm" method="post">
        <table border="0" cellspacing="0" cellpadding="0" class="common">
          <tr>
            <td width="5%" class="cell_value">&nbsp;</td>
            <td width="9%" class="cell_value">アイコン</td>
            <td width="86%" class="cell_value">アイコンの解説</td>
          </tr>
<!--
          <tr>
            <td class="cell_value"><input type="checkbox" name="icon1" value="t"{if $check_icon.icon1 == "t"} checked="cheked"{/if} /></td>
            <td class="cell_value"><img src="/img/client/icon_1.gif" width="32" height="32" /></td>
            <td class="cell_value"><p><strong>とことん24取扱い</strong></p>
            <p>「とことん24」を取り扱っており、パンフレットやメニューにこれを明記していること。</p></td>
          </tr>
-->
          <tr>
            <td class="cell_value"><input type="checkbox" name="icon2" value="t"{if $check_icon.icon2 == "t"} checked="cheked"{/if} /></td>
            <td class="cell_value"><img src="/img/client/icon_2.gif" width="32" height="32" /></td>
            <td class="cell_value"><p><strong>整備保証付き</strong></p>
            <p>すべての車検コースが「整備保証付」であり、パンフレットやメニューにこれを明記していること。</p></td>
          </tr>
          <tr>
            <td class="cell_value"><input type="checkbox" name="icon16" value="t"{if $check_icon.icon16 == "t"} checked="cheked"{/if} /></td>
		    <td class="cell_value"><img src="/img/client/icon_15.gif" width="32" height="32" /></td>
		    <td class="cell_value"><p><strong>ロードサービス取扱い</strong></p>
	          <p>「ロードサービス」を取り扱っており、パンフレットやメニューにこれを明記していること。</p>
            <p>無料サービスでも、有償オプションでもよい。</p></td>
          </tr>
          <tr>
            <td class="cell_value"><input type="checkbox" name="icon15" value="t"{if $check_icon.icon15 == "t"} checked="cheked"{/if} /></td>
		    <td class="cell_value"><img src="/img/client/icon_16.gif" width="32" height="32" /></td>
		    <td class="cell_value"><p><strong>即日完了OK</strong></p>
	        <p>朝持ち込んで夕方納車、またはそれ以上の短時間車検が可能であること。</p>
	        <p>有償サービス（特急料金）でもよい。平日のみの対応であってもよい。</p></td>
          </tr>
          <tr>
            <td class="cell_value"><input type="checkbox" name="icon3" value="t"{if $check_icon.icon3 == "t"} checked="cheked"{/if} /></td>
            <td class="cell_value"><img src="/img/client/icon_3.gif" width="32" height="32" /></td>
            <td class="cell_value"><p><strong>夜間受付OK</strong></p>
            <p>夜19時以降でも予約受付、および入庫、納車が可能であること。</p></td>
          </tr>
          <tr>
            <td class="cell_value"><input type="checkbox" name="icon4" value="t"{if $check_icon.icon4 == "t"} checked="cheked"{/if} /></td>
            <td class="cell_value"><img src="/img/client/icon_4.gif" width="32" height="32" /></td>
            <td class="cell_value"><p><strong>土日対応OK</strong></p>
            <p>土曜、日曜、祝日の対応が可能であること。車検（検査）が休日明けでもよい。</p></td>
          </tr>
          <tr>
            <td class="cell_value"><input type="checkbox" name="icon5" value="t"{if $check_icon.icon5 == "t"} checked="cheked"{/if} /></td>
            <td class="cell_value"><img src="/img/client/icon_5.gif" width="32" height="32" /></td>
            <td class="cell_value"><p><strong>代車あり</strong></p>
            <p>代車の用意があること。有償サービスでもよい。</p></td>
          </tr>
          <tr>
            <td class="cell_value"><input type="checkbox" name="icon6" value="t"{if $check_icon.icon6 == "t"} checked="cheked"{/if} /></td>
            <td class="cell_value"><img src="/img/client/icon_6.gif" width="32" height="32" /></td>
            <td class="cell_value"><p><strong>引取納車OK</strong></p>
            <p>引取納車に対応できること。有償サービスでもよい。距離制限などあってもよい。</p></td>
          </tr>
          <tr>
            <td class="cell_value"><input type="checkbox" name="icon7" value="t"{if $check_icon.icon7 == "t"} checked="cheked"{/if} /></td>
            <td class="cell_value"><img src="/img/client/icon_7.gif" width="32" height="32" /></td>
            <td class="cell_value"><p><strong>キャッシュレスOK （クレジット分割払い）</strong></p>
            <p>クレジットローンが利用でき、12回以上の分割払いに対応できること。</p></td>
          </tr>
          <tr>
            <td class="cell_value"><input type="checkbox" name="icon8" value="t"{if $check_icon.icon8 == "t"} checked="cheked"{/if} /></td>
            <td class="cell_value"><img src="/img/client/icon_8.gif" width="32" height="32" /></td>
            <td class="cell_value"><p><strong>クレジットカード利用OK</strong></p>
            <p>少なくともVISA、MASTER、JCB等の大手カード会社について、クレジットカード払いが可能であること。</p>
            <p>法定費用については現金払いでもよい。</p></td>
          </tr>
          <tr>
            <td class="cell_value"><input type="checkbox" name="icon9" value="t"{if $check_icon.icon9 == "t"} checked="cheked"{/if} /></td>
            <td class="cell_value"><img src="/img/client/icon_9.gif" width="32" height="32" /></td>
            <td class="cell_value"><p><strong>グルメプレゼント</strong></p>
            <p>車検実施ユーザーに対して、食品関連のプレゼントを用意しており、パンフレットやメニューにこれを明記していること。
		選択型プレゼントの選択肢のひとつでもよい。ただし抽選形式は不可。</p>
          </tr>
          <tr>
            <td class="cell_value"><input type="checkbox" name="icon10" value="t"{if $check_icon.icon10 == "t"} checked="cheked"{/if} /></td>
            <td class="cell_value"><img src="/img/client/icon_10.gif" width="32" height="32" /></td>
            <td class="cell_value"><p><strong>グッズプレゼント</strong></p>
            <p>車検実施ユーザーに対して、日用品、雑貨関連のプレゼントを用意しており、パンフレットやメニューにこれを明記していること。選択型プレゼントの選択肢のひとつでもよい。</p>
          </tr>
          <tr>
            <td class="cell_value"><input type="checkbox" name="icon11" value="t"{if $check_icon.icon11 == "t"} checked="cheked"{/if} /></td>
            <td class="cell_value"><img src="/img/client/icon_11.gif" width="32" height="32" /></td>
            <td class="cell_value"><p><strong>ガソリンプレゼント</strong></p>
            <p>車検実施ユーザーに対して、燃料（ガソリン・軽油）関連のプレゼントを用意しており、パンフレットやメニューにこれを明記していること。選択型プレゼントの選択肢のひとつでもよい。</p>
            <p>ガソリン割引き、ガソリン無料券等の形式は問わない。また、割引額、割引期間は問わない。ただし抽選形式は不可。</p>            </td>
          </tr>
          <tr>
            <td class="cell_value"><input type="checkbox" name="icon12" value="t"{if $check_icon.icon12 == "t"} checked="cheked"{/if} /></td>
            <td class="cell_value"><img src="/img/client/icon_12.gif" width="32" height="32" /></td>
            <td class="cell_value"><p><strong>抽選でプレゼント</strong></p>
            <p>車検実施ユーザー対象に抽選形式のプレゼント企画を行っており、パンフレットやメニューにこれを明記していること。企画の規模は問わない。チェーン店などの全国企画でもよい。</p>
          </tr>
          <tr>
            <td class="cell_value"><input type="checkbox" name="icon13" value="t"{if $check_icon.icon13 == "t"} checked="cheked"{/if} /></td>
            <td class="cell_value"><img src="/img/client/icon_13.gif" width="32" height="32" /></td>
            <td class="cell_value"><p><strong>オイル交換サービス</strong></p>
            <p>車検実施時にオイル交換の無料サービスを行っており、パンフレットやメニューにこれを明記していること。</p>
            <p>選択型プレゼントの選択肢のひとつでもよい。オイル交換無料チケットの配付でもよい。グレードは問わない。</p></td>
          </tr>
          <tr>
            <td class="cell_value"><input type="checkbox" name="icon14" value="t"{if $check_icon.icon14 == "t"} checked="cheked"{/if} /></td>
            <td class="cell_value"><img src="/img/client/icon_14.gif" width="32" height="32" /></td>
            <td class="cell_value"><p><strong>車検時限定割引サービス</strong></p>
            <p>車検時に、各種メンテナンス商品や、カーディテーリングサービスを割引、または無料サービスしており、</p>
            <p>パンフレットやメニューにこれを明記していること。割引額は問わない。</p></td>
          </tr>
          <tr>
            <td colspan="3" class="cell_submit"><input type="submit" name="Submit224222" value="登録" class="submit" />
            </td>
          </tr>
        </table>
	<input type="hidden" name="sid" value="{$sid}" />
	<input type="hidden" name="mode" value="icon" />
	</form>
	
        <table border="0" cellspacing="0" cellpadding="0" class="common">
          <tr>
            <td class="introcell_title">取扱いカード</td>
          </tr>
          <tr>
            <td class="introcell_label">クレジットカード払いに対応している場合は対応しているカードにチェックを入れ、登録ボタンを押してください。<br />
              取り消したい場合はチェックをはずし、登録ボタンを押してください。</td>
          </tr>
        </table>
	
	<form action="/client/shop_option/to_confirm" method="post">
        <table border="0" cellspacing="0" cellpadding="0" class="common">
          <tr>
            <td width="20%" class="cell_submit"><img src="/img/client/card_visa_b.gif" /></td>
            <td width="20%" class="cell_submit"><img src="/img/client/card_master_b.gif" /></td>
            <td width="20%" class="cell_submit"><img src="/img/client/card_jcb_b.gif" /></td>
            <td width="20%" class="cell_submit"><img src="/img/client/card_dc_b.gif" /></td>
            <td width="20%" class="cell_submit"><img src="/img/client/card_amex_b.gif" /></td>
          </tr>
          <tr>
            <td class="cell_value"><input type="checkbox" value="t" name="card1"{if $checked_card.card1 == "t"} checked="checked"{/if} />
              VISA</td>
            <td class="cell_value"><input type="checkbox" value="t" name="card2"{if $checked_card.card2 == "t"} checked="checked"{/if} />
              Master</td>
            <td class="cell_value"><input type="checkbox" value="t" name="card3"{if $checked_card.card3 == "t"} checked="checked"{/if} />
              JCB</td>
            <td class="cell_value"><input type="checkbox" value="t" name="card4"{if $checked_card.card4 == "t"} checked="checked"{/if} />
              DC</td>
            <td class="cell_value"><input type="checkbox" value="t" name="card5"{if $checked_card.card5 == "t"} checked="checked"{/if} />
              アメリカン<br />
              エキスプレス</td>
          </tr>
          <tr>
            <td class="cell_submit"><img src="/img/client/card_uc_b.gif" /></td>
            <td class="cell_submit"><img src="/img/client/card_nicos_b.gif" /></td>
            <td colspan="2" class="cell_submit"><img src="/img/client/card_diners_b.gif" /></td>
            <td class="cell_submit">&nbsp;</td>
          </tr>
          <tr>
            <td class="cell_value"><input type="checkbox" value="t" name="card6"{if $checked_card.card6 == "t"} checked="checked"{/if} />
              UC　 </td>
            <td class="cell_value"><input type="checkbox" value="t" name="card7"{if $checked_card.card7 == "t"} checked="checked"{/if} />
              NICOS</td>
            <td colspan="2" class="cell_value"><input type="checkbox" value="t" name="card8"{if $checked_card.card8 == "t"} checked="checked"{/if} />
              ダイナース</td>
            <td class="cell_value"><input type="checkbox" value="t" name="card9"{if $checked_card.card9 == "t"} checked="checked"{/if} />
              その他</td>
          </tr>
          <tr>
            <td colspan="5" class="cell_submit"><input type="submit" name="Submit22422" value="登録" class="submit" /></td>
          </tr>
        </table>
	<input type="hidden" name="sid" value="{$sid}" />
	<input type="hidden" name="mode" value="card" />
	</form>
	
      </div>
    </div>
    <br style="clear:both" />
  </div>

{include file="$document_root/application/views/client/footer.tpl"}
