{include file="$document_root/application/views/admin/pop_header.tpl"}
  
    <div id="content">
      <table width="600" border="0" cellspacing="5" cellpadding="0" id="table_detail">
        <tr>
          <td><h4>メールフォーマット</h4></td>
        </tr>
        <tr>
          <td class="indent">登録されている自動返信メールの内容を表示しています。</td>
        </tr>        
        <tr>
          <td class="indent"><table border="0" cellspacing="0" cellpadding="0" class="common">
            <tr>
              <td class="subdetail_label_center">メール件名</td>
              <td>{$query_data.mail_subject}</td>
            </tr>
            <tr>
              <td class="subdetail_label_center">挨拶文</td>
              <td>{$query_data.mail_greeting|nl2br}</td>
            </tr>
            <tr>
              <td class="subdetail_label_center">メールフッター</td>
              <td>{$query_data.mail_footer|nl2br}</td>
            </tr>
            
            
            
          </table></td>
        </tr>
        <tr>
          <td class="subdetail_value"><input type="submit" name="Submit" value="このウィンドウを閉じる" onclick="window.close()" /></td>
        </tr>
      </table>
    </div>
    
{include file="$document_root/application/views/admin/pop_footer.tpl"}
