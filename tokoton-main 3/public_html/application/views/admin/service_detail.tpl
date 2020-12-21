{include file="ci:admin/pop_header.tpl"}
  
    <div id="content">
      <table width="600" border="0" cellspacing="5" cellpadding="0" id="table_detail">
        <tr>
          <td><h4>サービス一覧</h4></td>
        </tr>
        <tr>
          <td class="indent">登録されているサービスを表示しています。</td>
        </tr>
        <tr>
          <td class="indent">現在の登録数：<strong>{$rows_data.rows}件</strong></td>
        </tr>
        <tr>
          <td class="indent"><table border="0" cellspacing="0" cellpadding="0" class="common">
            <tr>
              <td class="subdetail_label" style="width:25%;">サービス名</td>
              <td class="subdetail_label" style="width:75%;">内容</td>
            </tr>
	{foreach from=$query_data item = "item" key = "key" name = "form_error_loop"}
            <tr>
              <td>{$item.srv_name}</td>
              <td>{$item.srv_contents|nl2br}</td>
            </tr>
	{/foreach}
            
          </table></td>
        </tr>
        <tr>
          <td class="subdetail_value"><input type="submit" name="Submit" value="このウィンドウを閉じる" onclick="window.close()" /></td>
        </tr>
      </table>
    </div>

{include file="ci:admin/pop_footer.tpl"}
