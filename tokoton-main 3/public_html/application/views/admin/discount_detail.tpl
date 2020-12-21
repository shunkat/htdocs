{include file="$document_root/application/views/admin/pop_header.tpl"}

    <div id="content">
      <table width="600" border="0" cellspacing="5" cellpadding="0" id="table_detail">
        <tr>
          <td><h4>割引メニュー一覧</h4></td>
        </tr>
        <tr>
          <td class="indent">登録されている割引メニューを表示しています。</td>
        </tr>
        <tr>
          <td class="indent">現在の登録数：<strong>{$rows_data.rows}件</strong></td>
        </tr>
        <tr>
          <td class="indent">
		   <table border="0" cellspacing="0" cellpadding="0" class="common">
            <tr>
              <td class="subdetail_label">メニュー項目</td>
            </tr>
		{foreach from=$query_data item = "item" key = "key" name = "menu_loop"}
            <tr>
              <td>{$item.db_menu_nm}&nbsp;</td>
            </tr>
         {/foreach}
            </table>
		   </td>
        </tr>
        <tr>
          <td class="subdetail_value"><input type="submit" name="Submit" value="このウィンドウを閉じる" onclick="window.close()" /></td>
        </tr>
      </table>
    </div>
    
{include file="$document_root/application/views/admin/pop_footer.tpl"}
