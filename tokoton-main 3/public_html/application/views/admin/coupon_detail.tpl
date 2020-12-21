{include file="$document_root/application/views/admin/pop_header.tpl"}

    <div id="content">
      <table width="600" border="0" cellspacing="5" cellpadding="0" id="table_detail">
        <tr>
          <td><h4>クーポン内容</h4></td>
        </tr>
        <tr>
          <td class="indent">登録されているクーポンを表示しています。</td>
        </tr>        
        <tr>
          <td class="indent"><table border="0" cellspacing="0" cellpadding="0" class="common">
            <tr>
              <td class="subdetail_label_center" style="width:10%;">クーポン</td>
              <td style="width:90%;">{if $query_data.cou_open_state == "t"}有効{else}無効{/if}</td>
            </tr>
            <tr>
              <td class="subdetail_label_center">内容</td>
              <td>{$query_data.cou_contents}</td>
            </tr>
            <tr>
              <td class="subdetail_label_center">制限事項</td>
              <td>{$query_data.cou_limit_matter}</td>
            </tr>
            <tr>
              <td class="subdetail_label_center">有効期限</td>
              <td>{$query_data.cou_limit_date|date_format:"%Y年%m月%d日"}</td>
            </tr>
            
            
          </table></td>
        </tr>
        <tr>
          <td class="subdetail_value"><input type="submit" name="Submit" value="このウィンドウを閉じる" onclick="window.close()" /></td>
        </tr>
      </table>
    </div>
{include file="$document_root/application/views/admin/pop_footer.tpl"}
