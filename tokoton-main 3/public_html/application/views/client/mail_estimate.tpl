{include file="ci:client/header.tpl"}

  <div id="content">

{include file="ci:client/shop_menu.tpl"}

    <div id="content_right">
      <h2>見積りメール設定</h2>
      <p class="description">見積り依頼のメールを受け、自動で返信するメールの内容を設定をします。<br />
      編集する場合はフォーム内を直接書き変え、登録ボタンを押してください。<br />
      見積り結果は依頼されたお客様と店舗に送信されます。<br />
      <br />
      代行サービスにお申込みされている場合は、運営会社にも送信されます。<br />
      見積り内容は自動的に挨拶文の下に挿入されます。<br />
      <br />
      メールはテキスト形式です。※半角カナ文字は使用しないでください。</p>
      <div class="content_sub">
      
      {if $msg != ""}
  	<div class="messagebox">
          <ul>
            {$msg}
          </ul>
        </div>
	{/if}
	{if $form_error != ""}
	<div class="messagebox_error">
          <ul>
		{foreach from=$form_error item = "item" key = "key" name = "form_error_loop"}
			{$item}
		{/foreach}
          </ul>
        </div>
	{/if}
	
	<form action="/client/mail_estimate/to_confirm" method="post">
        <table border="0" cellspacing="0" cellpadding="0" class="common">
          <tr>
            <td class="introcell_title"><strong>メール件名　※</strong></td>
          </tr>
          <tr>
            <td class="cell_value"><input name="mail_subject" type="text" size="50" value="{$form_data.mail_subject}" />
            例.）お見積りありがとうございます。</td>
          </tr>
        </table>
        <table border="0" cellspacing="0" cellpadding="0" class="common">
          <tr>
            <td class="introcell_title"><strong>メール挨拶文</strong></td>
          </tr>
          <tr>
            <td class="introcell_label">メールの最初に入ります。</td>
          </tr>
          <tr>
            <td class="cell_value">例.）
              <p>―――――――――――――――――――――――――――――――――――――<br />
                ※　自動返信メールです。このメールへの返信は出来ません。<br />
                ―――――――――――――――――――――――――――――――――――――</p>
              <p>こんにちは。●●商事(株)/▲▲店です。<br />
                このたびは数ある店舗の中から当店に見積りのご依頼をいただきまして<br />
                誠にありがとうございます。</p>
              <p>早速ですが、車検の仮見積りをさせていただきます。 <br />
                当店で車検をお申し込み頂ける場合、また、ご質問等ございましたら、 <br />
                下記の受付ダイヤルまでお電話ください。 <br />
                スタッフ一同、心よりお待ちしております。<br />
                （既にお申込み済みの場合は行き違いをお許しください。） </p>
              <br />
                <textarea name="mail_greeting" cols="70" rows="8">{$form_data.mail_greeting}</textarea>
              <br />
              <br />
              ※自動で送られるメールに対してお客様に返信させたくない場合は<br />
              挨拶文に以下の文章を入れて下さい。<br />
              ―――――――――――――――――――――――――――――――――――――<br />
              ※　自動返信メールです。このメールへの返信は出来ません。<br />
              ―――――――――――――――――――――――――――――――――――――</td>
          </tr>
        </table>
        <table border="0" cellspacing="0" cellpadding="0" class="common">
          <tr>
            <td class="introcell_title"><strong>メールフッター</strong></td>
          </tr>
		  <tr>
            <td class="introcell_label">メールの最後に入ります。<br />
              <strong>※連絡先は必ず記入するようにして下さい。<br />
              ※代行サービスに申し込んでいる場合は、こちらの電話番号をお使い下さい。<br />
              　　　　　　　　　　　　　　　　　　　　　　　　　　
              </strong>↓<strong><br />
              　　　　　　　　　　　　　　　　
            フリーダイヤル：0120-22-2222</strong></td>
          </tr>
          <tr>
            <td class="cell_value">例.）
              <p>お申込み、お問い合わせは下記の受付ダイヤルまでお電話ください。<br />
                今なら豪華グルメプレゼント進呈中です。 </p>
              <p>★車検受付フリーダイヤル★ 9999-999-999（受付時間 9:00～20:00 ）</p>
              <p>※事前に車検に通るかどうかの点検(事前点検)が必要となります。</p>
              <p>※当店は国土交通省認証工場資格を取得し、<br />
                　
                安心・便利な車検を提供させていただいております。 <br />
                　
                お客様の大切なお車をぜひ当店にお任せください。 </p>
              <p>==========================================================================<br />
                ●●商事(株)/▲▲店</p>
              <p>所在地　：東京都渋谷区渋谷0-0-0<br />
                TEL：999-999-9999（工場直通）</p>
                メールアドレス：　********＠**.**</p>
              <p>営業時間：8:00～24:00（年中無休）<br />
                ==========================================================================</p>
              <p></p>
              <br />
              <textarea cols="70" rows="8" name="mail_footer">{$form_data.mail_footer}</textarea></td></tr>
        </table>
        <div class="centering"><input type="submit" name="Submit223" value="登録" class="submit" />
	{if $form_data.mail_no != ""}
        <input type="button" name="Submit224" value="削除" onclick="if(formConfirm('delete')) location.href='/client/mail_estimate/delete_db/{$form_data.mail_no}'" /></div>
	{/if}
	<input type="hidden" name="sid" value="{$sid}">
	{if $form_data.mail_no != ""}
	<input type="hidden" name="mail_no" value="{$form_data.mail_no}">
	{/if}
	</form>
      </div>
    </div>
</div>
</div>
    <br style="clear:both" />


{include file="ci:client/footer.tpl"}
