{include file="ci:admin/pop_header.tpl"}

    <div id="content">
      <table width="600" border="0" cellspacing="5" cellpadding="0" id="table_detail">
        <tr>
          <td><h4>料金プラン一覧</h4></td>
        </tr>
        <tr>
          <td class="indent">登録されているプランを表示しています。</td>
        </tr>
        <tr>
          <td class="indent">現在の登録数：<strong>{$rows}件</strong></td>
        </tr>
        <tr>
          <td class="indent"><table border="0" cellspacing="0" cellpadding="0" class="common">
            <tr>
              <td class="subdetail_label_center">おすすめ</td>
              <td class="subdetail_label_center">プラン名</td>
              <td class="subdetail_label_center">軽自動車<br />料金（税込）</td>
              <td class="subdetail_label_center">小型乗用車<br />料金（税込）</td>
              <td class="subdetail_label_center">中型乗用車<br />料金（税込）</td>
              <td class="subdetail_label_center">大型乗用車<br />料金（税込）</td>
              <td class="subdetail_label_center">大型乗用車<br />料金（税込）</td>
            </tr>
	    
	{foreach from=$plan_data item = "item" key = "key" name = "form_error_loop"}
            <tr>
              <td class="subdetail_value">{if $item.pb_reccomend_flag == "t"}●{else}&nbsp;{/if}</td>
              <td class="subdetail_value">{if $item.pb_plan_nm != ""}{$item.pb_plan_nm}{else}&nbsp;{/if}</td>
              <td class="subdetail_value">{if $item.mini_price_sum != ""}{$item.mini_price_sum|number_format}円{else}&nbsp;{/if}<br />
                {if $item.mini_disc_price != ""}<strong>{$item.mini_disc_price|number_format}円</strong>{else}&nbsp;{/if}</td>
              <td class="subdetail_value">{if $item.small_price_sum != ""}{$item.small_price_sum|number_format}円{else}&nbsp;{/if}<br />
                {if $item.small_disc_price != ""}<strong>{$item.small_disc_price|number_format}円</strong>{else}&nbsp;{/if}</td>
              <td class="subdetail_value">{if $item.middle_price_sum != ""}{$item.middle_price_sum|number_format}円{else}&nbsp;{/if}<br />
                {if $item.middle_disc_price != ""}<strong>{$item.middle_disc_price|number_format}円</strong>{else}&nbsp;{/if}</td>
              <td class="subdetail_value">{if $item.large_price_sum != ""}{$item.large_price_sum|number_format}円{else}&nbsp;{/if}<br />
                {if $item.large_disc_price != ""}<strong>{$item.large_disc_price|number_format}円</strong>{else}&nbsp;{/if}</td>
              <td class="subdetail_value">{if $item.great_price_sum != ""}{$item.great_price_sum|number_format}円{else}&nbsp;{/if}<br />
                {if $item.great_disc_price != ""}<strong>{$item.great_disc_price|number_format}円</strong>{else}&nbsp;{/if}</td>
            </tr>
         {/foreach}
          </table></td>
        </tr>
        <tr>
          <td><h4>料金項目一覧</h4></td>
        </tr>
        <tr>
          <td class="indent">法定料金以外の登録している料金項目名を表示しています。</td>
        </tr>
        <tr>
          <td class="indent"><table border="0" cellspacing="0" cellpadding="0" class="common">
            <tr>
              <td width="22%" class="subdetail_label_center">料金項目1</td>
              <td width="78%">{if $query_data.di_itm01_nm != ""}{$query_data.di_itm01_nm}{else}&nbsp;{/if}</td>
            </tr>
            <tr>
              <td class="subdetail_label_center">料金項目2</td>
              <td>{if $query_data.di_itm02_nm != ""}{$query_data.di_itm02_nm}{else}&nbsp;{/if}</td>
            </tr>
            <tr>
              <td class="subdetail_label_center">料金項目3</td>
              <td>{if $query_data.di_itm03_nm != ""}{$query_data.di_itm03_nm}{else}&nbsp;{/if}</td>
            </tr>
            <tr>
              <td class="subdetail_label_center">料金項目4</td>
              <td>{if $query_data.di_itm04_nm != ""}{$query_data.di_itm04_nm}{else}&nbsp;{/if}</td>
            </tr>
            <tr>
              <td class="subdetail_label_center">料金項目5</td>
              <td>{if $query_data.di_itm05_nm != ""}{$query_data.di_itm05_nm}{else}&nbsp;{/if}</td>
            </tr>
            <tr>
              <td class="subdetail_label_center">料金項目6</td>
              <td>{if $query_data.di_itm06_nm != ""}{$query_data.di_itm06_nm}{else}&nbsp;{/if}</td>
            </tr>
            <tr>
              <td class="subdetail_label_center">料金項目7</td>
              <td>{if $query_data.di_itm07_nm != ""}{$query_data.di_itm07_nm}{else}&nbsp;{/if}</td>
            </tr>
            <tr>
              <td class="subdetail_label_center">料金項目8</td>
              <td>{if $query_data.di_itm08_nm != ""}{$query_data.di_itm08_nm}{else}&nbsp;{/if}</td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td class="subdetail_value"><input type="submit" name="Submit" value="このウィンドウを閉じる" onclick="window.close()" /></td>
        </tr>
      </table>
    </div>

{include file="ci:admin/pop_footer.tpl"}
