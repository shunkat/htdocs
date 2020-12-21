{include file="$document_root/application/views/admin/pop_header.tpl"}

    <div id="content">
      <table width="600" border="0" cellspacing="5" cellpadding="0" id="table_detail">
        <tr>
          <td><h4>キャンペーン内容</h4></td>
        </tr>
        <tr>
          <td class="indent">登録されているキャンペーンを表示しています。</td>
        </tr>        
        <tr>
          <td class="indent"><table border="0" cellpadding="0" cellspacing="0" class="common">
			<tr>
              <td class="subdetail_label_center">サイト掲載</td>
              <td>{if $query_data.cam_open == "t"}掲載中{else}非掲載{/if}</td>
            </tr>
			<tr>
              <td class="subdetail_label_center">キャンペーン名</td>
              <td>{$query_data.cam_name}</td>
            </tr>
            <tr>
              <td class="subdetail_label_center">期間</td>
              <td>{$query_data.cam_start_date}～{$query_data.cam_end_date}</td>
            </tr>
            <tr>
              <td class="subdetail_label_center">詳細</td>
              <td>{$query_data.cam_detail|nl2br}</td>
            </tr>
            <tr>
              <td class="subdetail_label_center">内容</td>
              <td>{if $img_data.img_path != ""}<img src="{$img_data.img_path}" alt="キャンペーン画像" width="{$img_data.width}" height="{$img_data.height}" />{else}&nbsp;{/if}</td>
            </tr>
            
            
          </table></td>
        </tr>
        <tr>
          <td class="subdetail_value"><input type="submit" name="Submit" value="このウィンドウを閉じる" onclick="window.close()" /></td>
        </tr>
      </table>
    </div>

{include file="$document_root/application/views/admin/pop_footer.tpl"}
