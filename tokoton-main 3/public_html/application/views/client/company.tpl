{include file="$document_root/application/views/client/header.tpl"}

  <div id="content">
  
{include file="$document_root/application/views/client/admin_menu.tpl"}
  
    <div id="content_right">
      <h2>会社情報の設定</h2>
      <p class="description">運営会社からの連絡や書類郵送時に使用する情報を入力します。<br />
      サイトには表示されません。</p>
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
       <form action="/client/company/to_confirm" method="post">
        <table border="0" cellspacing="0" cellpadding="0" class="common">
          <tr>
            <td width="16%" class="cell_label">会社名</td>
            <td width="84%" class="cell_value"><input name="sd_company_nm" type="text" size="50" value="{$form_data.sd_company_nm}" /></td>
          </tr>
		  <!-- <tr>
            <td class="cell_label">店舗名</td>
            <td class="cell_value"><input name="sd_" type="text" size="35" value="" /></td>
          </tr> -->
          <tr>
            <td class="cell_label">部署名</td>
            <td class="cell_value"><input name="sd_tanto_section" type="text" size="24" value="{$form_data.sd_tanto_section}" /></td>
          </tr>
          <tr>
            <td class="cell_label">お役職</td>
            <td class="cell_value"><input name="sd_tanto_position" type="text" size="24" value="{$form_data.sd_tanto_position}" /></td>
          </tr>
          <tr>
            <td class="cell_label">担当者氏名<br />
              フリガナ</td>
            <td class="cell_value"><input name="sd_tanto_nm" type="text" size="20" value="{$form_data.sd_tanto_nm}" />
              <br />
            <input name="sd_tanto_kana" type="text" size="20" value="{$form_data.sd_tanto_kana}" /></td>
          </tr>
          <tr>
            <td class="cell_label">電話番号</td>
            <td class="cell_value"><input name="sd_company_tel" type="text" size="20" value="{$form_data.sd_company_tel}" />
            ex) 03-1234-5678</td>
          </tr>
		  <tr>
            <td class="cell_label">ＦＡＸ番号</td>
            <td class="cell_value"><input name="sd_company_fax" type="text" size="20" value="{$form_data.sd_company_fax}" />
			ex) 03-1234-5678</td>
          </tr>
          <tr>
            <td class="cell_label">住所</td>
            <td class="cell_value">〒
            <input name="zip1" type="text" size="3" maxlength="3" value="{$form_data.zip1}" />
            -
            <input name="zip2" type="text" size="7" maxlength="4" value="{$form_data.zip2}" />
            <br />
            <input name="sd_company_address" type="text" size="80" value="{$form_data.sd_company_address}" /></td>
          </tr>
        </table>
        <div class="centering"><input type="submit" name="Submit22422" value="変更" class="submit" /></div>
	<input type="hidden" name="sid" value="{$sid}" />
       </form>
      </div>
    </div>
    <br style="clear:both" />
  </div>

{include file="$document_root/application/views/client/footer.tpl"}
