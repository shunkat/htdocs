{include file="ci:client/header.tpl"}

  <div id="content">
  
{include file="ci:client/shop_menu.tpl"}
  
    <div id="content_right">
    <h2>料金プランの設定</h2>
    <p class="description">プラン料金の設定をします。プランは最大3個登録することが出来ます。</p>
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
      <table border="0" cellspacing="0" cellpadding="0" class="common">
        <tr>
          <td class="introcell_title"><strong>プラン一覧</strong></td>
        </tr>
        <tr>
          <td class="introcell_label">編集したいプランの編集ボタンを押すと登録内容が下に表示され、編集することができます。
            <br />
            編集後は登録ボタンを押してください。削除ボタンを押すと登録内容が削除されます。
            <br />
            おすすめのプランにチェックを入れおすすめ決定ボタンを押してください。おすすめのプランは店舗一覧画面で表示されます。</td>
        </tr>
      </table>
      
      
  <form action="/client/plan/to_confirm_recommend" method="post">
  <table border="0" cellspacing="0" cellpadding="0" class="common">
  <tr>
    <td width="9%" rowspan="2" class="cell_list_label">おすすめ</td>
    <td width="22%" rowspan="2" class="cell_list_label">プラン名</td>
    <td colspan="5" class="cell_list_label">費用合計料金（税込）<br />
      最大割引適用後料金（税込）</td>
    <td width="17%" rowspan="2" class="cell_list_label">コマンド</td>
  </tr>
  <tr>
    <td width="13%" class="cell_list_label">軽自動車</td>
    <td width="13%" class="cell_list_label">小型乗用車</td>
    <td width="13%" class="cell_list_label">中型乗用車</td>
    <td width="13%" class="cell_list_label">大型乗用車</td>
    <td width="13%" class="cell_list_label">大型乗用車</td>
    </tr>
    
    
{foreach from=$plan_data item = "item" key = "key" name = "form_error_loop"}
  <tr>
    <td class="cell_small_value"><input type="radio" value="{$item.pb_no}" name="recommend"{if $item.pb_reccomend_flag == "t"} checked{/if} /></td>
    <td class="cell_value">{$item.pb_plan_nm}</td>
    <td class="cell_value">{if $item.mini_price_sum != ""}{$item.mini_price_sum|number_format}円{else}&nbsp;{/if}<br />
      {if $item.mini_disc_price != ""}<strong>{$item.mini_disc_price|number_format}円</strong>{else}&nbsp;{/if}</td>
    <td class="cell_value">{if $item.small_price_sum != ""}{$item.small_price_sum|number_format}円{else}&nbsp;{/if}<br />
      {if $item.small_disc_price != ""}<strong>{$item.small_disc_price|number_format}円</strong>{else}&nbsp;{/if}</td>
    <td class="cell_value">{if $item.middle_price_sum != ""}{$item.middle_price_sum|number_format}円{else}&nbsp;{/if}<br />
      {if $item.middle_disc_price != ""}<strong>{$item.middle_disc_price|number_format}円</strong>{else}&nbsp;{/if}</td>
    <td class="cell_value">{if $item.large_price_sum != ""}{$item.large_price_sum|number_format}円{else}&nbsp;{/if}<br />
      {if $item.large_disc_price != ""}<strong>{$item.large_disc_price|number_format}円</strong>{else}&nbsp;{/if}</td>
	  
    <td class="cell_value">{if $item.great_price_sum != ""}{$item.great_price_sum|number_format}円{else}&nbsp;{/if}<br />
      {if $item.great_disc_price != ""}<strong>{$item.great_disc_price|number_format}円</strong>{else}&nbsp;{/if}</td>
	  
    <td class="cell_value"><input type="button" value="編集" name="Submit2" onclick="location.href='/client/plan/edit/{$item.pb_no}'" />
      <input type="button" value="削除" name="Submit23" onclick="if(formConfirm('delete')) location.href='/client/plan/delete_db/{$item.pb_no}'" /></td>
  </tr>
{/foreach}
  
  <tr>
    <td colspan="8" class="cell_value"><input name="Submit" type="submit" class="submit" value="おすすめ決定" /></td>
    </tr>
  </table>
  <input type="hidden" name="sid" value="{$sid}" / >
  </form>

	<form action="/client/plan/to_confirm" method="post">
        <table border="0" cellspacing="0" cellpadding="0" class="common">
          <tr>
            <td class="introcell_title"><strong>プランを登録する</strong></td>
          </tr>
          <tr>
            <td class="introcell_label">入力フォームに内容を入力し、登録ボタンを押してください。   登録されたプランは上記のプラン一覧に表示されます。<br />
              ※料金テーブルの法定費用以外の項目名は左メニューの料金項目編集から変えることが出来ます。<br />
            ※有効にチェックをしていない料金要素は自動見積りメールの計算時に適用されません。</td>
          </tr>
        </table>
		
		<table class="common" id="#regist_form">
		<tr>
			<td class="cell_value">プラン名</td><td class="cell_value"><input size="50" name="pb_plan_nm" value="{$form_data.pb_plan_nm}" /></td>
		</tr>
		<tr>
			<td class="cell_value">プランの<br />
		    キャッチコピー</td><td class="cell_value"><input size="50" name="pb_chatch_copy" value="{$form_data.pb_chatch_copy}" />
		      例) 初心者にお勧めの格安プランです</td>
		</tr>
		<tr>
			<td class="cell_value">内容</td><td class="cell_value"><textarea name="pb_plan_contents" cols="50" rows="3">{$form_data.pb_plan_contents}</textarea></td>
		</tr>
		<tr>
		  <td class="cell_value">料金テーブル<br />
		    （税込）</td>
		  <td><table border="0" cellpadding="0" cellspacing="0" class="common">
            <tr>
              <td class="cell_label">&nbsp;</td>
              <td class="cell_label">軽自動車</td>
              <td class="cell_label">小型乗用車<br />
                (1000kg以下)</td>
              <td class="cell_label">中型乗用車<br />
                (1001kg～1500kg)</td>
              <td class="cell_label">大型乗用車<br />
                (1501kg～2000kg)</td>
			  <td class="cell_label">大型乗用車<br />
                (2001kg～2500kg)</td>
              <td class="cell_label">有効</td>
            </tr>
            <tr>
              <td class="cell_label">重量税</td>
              <td class="cell_small_value"><input size="10" name="mini_weight_tax" value="{$form_data.mini_weight_tax}" /></td>
              <td class="cell_small_value"><input size="10" name="small_weight_tax" value="{$form_data.small_weight_tax}" /></td>
              <td class="cell_small_value"><input size="10" name="middle_weight_tax" value="{$form_data.middle_weight_tax}" /></td>
              <td class="cell_small_value"><input size="10" name="large_weight_tax" value="{$form_data.large_weight_tax}" /></td>
              <td class="cell_small_value"><input size="10" name="great_weight_tax" value="{$form_data.great_weight_tax}" /></td>
			  <td>&nbsp;</td>
            </tr>
            <tr>
              <td class="cell_label">自賠責保険</td>
              <td class="cell_small_value"><input size="10" name="mini_insrnc_price" value="{$form_data.mini_insrnc_price}" /></td>
              <td class="cell_small_value"><input size="10" name="small_insrnc_price" value="{$form_data.small_insrnc_price}" /></td>
              <td class="cell_small_value"><input size="10" name="middle_insrnc_price" value="{$form_data.middle_insrnc_price}" /></td>
              <td class="cell_small_value"><input size="10" name="large_insrnc_price" value="{$form_data.large_insrnc_price}" /></td>
              <td class="cell_small_value"><input size="10" name="great_insrnc_price" value="{$form_data.great_insrnc_price}" /></td>
			  <td>&nbsp;</td>
            </tr>
            <tr>
              <td class="cell_label">印紙代(軽)</td>
              <td colspan="5" class="cell_small_value_insi">
                <input name="mini_stamp_price" type="text" size="20" value="{$form_data.mini_stamp_price}" />
円</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td class="cell_label">印紙代(小型)</td>
              <td colspan="5" class="cell_small_value_insi">
                <input name="small_stamp_price" type="text" size="20" value="{$form_data.small_stamp_price}" />
円</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td class="cell_label">印紙代(普通)</td>
              <td colspan="5" class="cell_small_value_insi">
                <input name="middle_stamp_price" type="text" size="20" value="{$form_data.middle_stamp_price}" />
円</td>
              <td>&nbsp;</td>
            </tr>
            <!-- <tr>
              <td class="cell_label">印紙代</td>
              <td class="cell_small_value"><input size="10" name="mini_stamp_price" value="{$form_data.mini_stamp_price}" /></td>
              <td class="cell_small_value"><input size="10" name="small_stamp_price" value="{$form_data.small_stamp_price}" /></td>
              <td class="cell_small_value"><input size="10" name="middle_stamp_price" value="{$form_data.middle_stamp_price}" /></td>
              <td class="cell_small_value"><input size="10" name="large_stamp_price" value="{$form_data.large_stamp_price}" /></td>
              <td>&nbsp;</td>
            </tr> -->
            <tr>
              <td class="cell_label">&nbsp;</td>
              <td class="cell_label">&nbsp;</td>
              <td class="cell_label">&nbsp;</td>
              <td class="cell_label">&nbsp;</td>
              <td class="cell_label">&nbsp;</td>
              <td class="cell_label">&nbsp;</td>
              <td class="cell_label">&nbsp;</td>
            </tr>
            <tr>
              <td class="cell_label">{if $query_data.di_itm01_nm != ""}{$query_data.di_itm01_nm}{else}料金構成要素 1{/if}</td>
              <td class="cell_small_value"><input size="10" name="mini_itm01_price" value="{$form_data.mini_itm01_price}" /></td>
              <td class="cell_small_value"><input size="10" name="small_itm01_price" value="{$form_data.small_itm01_price}" /></td>
              <td class="cell_small_value"><input size="10" name="middle_itm01_price" value="{$form_data.middle_itm01_price}" /></td>
              <td class="cell_small_value"><input size="10" name="large_itm01_price" value="{$form_data.large_itm01_price}" /></td>
              <td class="cell_small_value"><input size="10" name="great_itm01_price" value="{$form_data.great_itm01_price}" /></td>
			  <td class="cell_small_value"><input type="checkbox" value="t" name="pb_itm01_state"{if $form_data.pb_itm01_state == "t"} checked{/if} /></td>
			</tr>
            <tr>
              <td class="cell_label">{if $query_data.di_itm02_nm != ""}{$query_data.di_itm02_nm}{else}料金構成要素 2{/if}</td>
              <td class="cell_small_value"><input size="10" name="mini_itm02_price" value="{$form_data.mini_itm02_price}" /></td>
              <td class="cell_small_value"><input size="10" name="small_itm02_price" value="{$form_data.small_itm02_price}" /></td>
              <td class="cell_small_value"><input size="10" name="middle_itm02_price" value="{$form_data.middle_itm02_price}" /></td>
              <td class="cell_small_value"><input size="10" name="large_itm02_price" value="{$form_data.large_itm02_price}" /></td>
              <td class="cell_small_value"><input size="10" name="great_itm02_price" value="{$form_data.great_itm02_price}" /></td>
			  <td class="cell_small_value"><input type="checkbox" value="t" name="pb_itm02_state"{if $form_data.pb_itm02_state == "t"} checked{/if} /></td>
			</tr>
            <tr>
              <td class="cell_label">{if $query_data.di_itm03_nm != ""}{$query_data.di_itm03_nm}{else}料金構成要素 3{/if}</td>
              <td class="cell_small_value"><input size="10" name="mini_itm03_price" value="{$form_data.mini_itm03_price}" /></td>
              <td class="cell_small_value"><input size="10" name="small_itm03_price" value="{$form_data.small_itm03_price}" /></td>
              <td class="cell_small_value"><input size="10" name="middle_itm03_price" value="{$form_data.middle_itm03_price}" /></td>
              <td class="cell_small_value"><input size="10" name="large_itm03_price" value="{$form_data.large_itm03_price}" /></td>
              <td class="cell_small_value"><input size="10" name="great_itm03_price" value="{$form_data.great_itm03_price}" /></td>
			  <td class="cell_small_value"><input type="checkbox" value="t" name="pb_itm03_state"{if $form_data.pb_itm03_state == "t"} checked{/if} /></td>
			</tr>
            <tr>
              <td class="cell_label">{if $query_data.di_itm04_nm != ""}{$query_data.di_itm04_nm}{else}料金構成要素 4{/if}</td>
              <td class="cell_small_value"><input size="10" name="mini_itm04_price" value="{$form_data.mini_itm04_price}" /></td>
              <td class="cell_small_value"><input size="10" name="small_itm04_price" value="{$form_data.small_itm04_price}" /></td>
              <td class="cell_small_value"><input size="10" name="middle_itm04_price" value="{$form_data.middle_itm04_price}" /></td>
              <td class="cell_small_value"><input size="10" name="large_itm04_price" value="{$form_data.large_itm04_price}" /></td>
              <td class="cell_small_value"><input size="10" name="great_itm04_price" value="{$form_data.great_itm04_price}" /></td>
			  <td class="cell_small_value"><input type="checkbox" value="t" name="pb_itm04_state"{if $form_data.pb_itm04_state == "t"} checked{/if} /></td>
		    </tr>
            <tr>
              <td class="cell_label">{if $query_data.di_itm05_nm != ""}{$query_data.di_itm05_nm}{else}料金構成要素 5{/if}</td>
              <td class="cell_small_value"><input size="10" name="mini_itm05_price" value="{$form_data.mini_itm05_price}" /></td>
              <td class="cell_small_value"><input size="10" name="small_itm05_price" value="{$form_data.small_itm05_price}" /></td>
              <td class="cell_small_value"><input size="10" name="middle_itm05_price" value="{$form_data.middle_itm05_price}" /></td>
              <td class="cell_small_value"><input size="10" name="large_itm05_price" value="{$form_data.large_itm05_price}" /></td>
              <td class="cell_small_value"><input size="10" name="great_itm05_price" value="{$form_data.great_itm05_price}" /></td>
			  <td class="cell_small_value"><input type="checkbox" value="t" name="pb_itm05_state"{if $form_data.pb_itm05_state == "t"} checked{/if} /></td>
			</tr>
            <tr>
              <td class="cell_label">{if $query_data.di_itm06_nm != ""}{$query_data.di_itm06_nm}{else}料金構成要素 6{/if}</td>
              <td class="cell_small_value"><input size="10" name="mini_itm06_price" value="{$form_data.mini_itm06_price}" /></td>
              <td class="cell_small_value"><input size="10" name="small_itm06_price" value="{$form_data.small_itm06_price}" /></td>
              <td class="cell_small_value"><input size="10" name="middle_itm06_price" value="{$form_data.middle_itm06_price}" /></td>
              <td class="cell_small_value"><input size="10" name="large_itm06_price" value="{$form_data.large_itm06_price}" /></td>
              <td class="cell_small_value"><input size="10" name="great_itm06_price" value="{$form_data.great_itm06_price}" /></td>
			  <td class="cell_small_value"><input type="checkbox" value="t" name="pb_itm06_state"{if $form_data.pb_itm06_state == "t"} checked{/if} /></td>
			</tr>
            <tr>
              <td class="cell_label">{if $query_data.di_itm07_nm != ""}{$query_data.di_itm07_nm}{else}料金構成要素 7{/if}</td>
              <td class="cell_small_value"><input size="10" name="mini_itm07_price" value="{$form_data.mini_itm07_price}" /></td>
              <td class="cell_small_value"><input size="10" name="small_itm07_price" value="{$form_data.small_itm07_price}" /></td>
              <td class="cell_small_value"><input size="10" name="middle_itm07_price" value="{$form_data.middle_itm07_price}" /></td>
              <td class="cell_small_value"><input size="10" name="large_itm07_price" value="{$form_data.large_itm07_price}" /></td>
              <td class="cell_small_value"><input size="10" name="great_itm07_price" value="{$form_data.great_itm07_price}" /></td>
			  <td class="cell_small_value"><input type="checkbox" value="t" name="pb_itm07_state"{if $form_data.pb_itm07_state == "t"} checked{/if} /></td>
			</tr>
            <tr>
              <td class="cell_label">{if $query_data.di_itm08_nm != ""}{$query_data.di_itm08_nm}{else}料金構成要素 8{/if}</td>
              <td class="cell_small_value"><input size="10" name="mini_itm08_price" value="{$form_data.mini_itm08_price}" /></td>
              <td class="cell_small_value"><input size="10" name="small_itm08_price" value="{$form_data.small_itm08_price}" /></td>
              <td class="cell_small_value"><input size="10" name="middle_itm08_price" value="{$form_data.middle_itm08_price}" /></td>
              <td class="cell_small_value"><input size="10" name="large_itm08_price" value="{$form_data.large_itm08_price}" /></td>
              <td class="cell_small_value"><input size="10" name="great_itm08_price" value="{$form_data.great_itm08_price}" /></td>
			  <td class="cell_small_value"><input type="checkbox" value="t" name="pb_itm08_state"{if $form_data.pb_itm08_state == "t"} checked{/if} /></td>
			</tr>
          </table></td>
		  </tr>
<!--		  <tr>
		  <td class="cell_value">印紙代(軽)</td>
		  <td class="cell_value"><input name="mini_stamp_price" type="text" size="20" value="{$form_data.mini_stamp_price}" />
		    円</td>
		  </tr>
		<tr>
		  <td class="cell_value">印紙代(小型)</td>
		  <td class="cell_value"><input name="small_stamp_price" type="text" size="20" value="{$form_data.small_stamp_price}" />
		    円</td>
		  </tr>
		<tr>
		  <td class="cell_value">印紙代(普通)</td>
		  <td class="cell_value"><input name="middle_stamp_price" type="text" size="20" value="{$form_data.middle_stamp_price}" />
		    円</td>
		  </tr>
-->		<tr>
		  <td class="cell_value">割引きメニュー</td>
		  <td><table border="0" cellpadding="0" cellspacing="0" class="common">
            <tr>
              <td width="40%" class="cell_label">メニュー項目</td>
              <td width="34%" class="cell_label">段階</td>
              <td width="19%" class="cell_label">割引金額</td>
              <td width="7%" class="cell_label">有効</td>
            </tr>
	   {foreach from=$disc_menu item = "item" key = "key" name = "discount_loop"}
            <tr>
              <td class="cell_value">{if $item.dd_level_no == 0}{$item.db_menu_nm}{else}&nbsp;{/if}</td>
              <td class="cell_value">{if $item.dd_dsc_nm != ""}{$item.dd_dsc_nm}{else}&nbsp;{/if}</td>
              <td class="cell_value">-{$item.dd_dsc_price} 円</td>
              <td class="cell_small_value"><input type="checkbox" value="{$item.db_no}-{$item.dd_level_no}" name="disc_data[]" {$item.checked} /></td>
            </tr>
	    {/foreach}
          </table></td>
		  </tr>
		<tr>
            <td class="cell_submit" colspan="2"><input type="submit" name="Submit3" value="登録"  class="submit"/></td>
        </tr>
		</table>
		<input type="hidden" name="sid" value="{$sid}" />
		<input type="hidden" name="max_num" value="3" />
		{if $form_data.pb_no != ""}
		<input type="hidden" name="pb_no" value="{$form_data.pb_no}" />
		{/if}
	</form>
    </div>
	</div>
	<br style="clear:both" />
  </div>

{include file="ci:client/footer.tpl"}
