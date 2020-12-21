{include file="ci:admin/header.tpl"}
  <div id="content_top">
    <h2>アカウント管理</h2>
    <ul id="submenu">
      <li><a href="/admin/account/#list">アカウント一覧</a></li>
      <li><a href="/admin/account/#regist">アカウントの新規登録</a></li>
    </ul>
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
    <h3 id="list">アカウント一覧 (総登録数:{$total_rows}件)</h3>
    <div class="content_sub">
    <form action="/admin/account/post_control" method="post">
      <table width="100%" border="0" cellpadding="0" cellspacing="1" id="result">
        <tr>
          <td width="200"><table border="0" cellspacing="0" cellpadding="0" id="search">
              <tr>
                <td class="cell_title"><strong>アカウント検索</strong></td>
              </tr>
              <tr>
                <td class="cell_value">(条件は複数選べます)</td>
              </tr>
              <tr>
                <!-- <td class="cell_label">店舗番号/アカウント名/顧客名</td> -->
                <td class="cell_label">店舗番号/アカウント名/会社名</td>
              </tr>
              <tr>
                <td class="cell_value"><input type="text" name="keyword" value="{$request.keyword}" /></td>
              </tr>
              <tr>
                <td class="cell_label">最終ログイン日</td>
              </tr>
              <tr>
                <td class="cell_value"><select name="sd_last_login">
                    <option value=""{if $request.sd_last_login == ""} selected{/if}>---</option>
                    <option value="1"{if $request.sd_last_login == "1"} selected{/if}>あり</option>
                    <option value="0"{if $request.sd_last_login == "0"} selected{/if}>なし</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td class="cell_label">アカウント状態</td>
              </tr>
              <tr>
                <td class="cell_value"><select name="sd_acc_state">
                    <option value=""{if $request.sd_acc_state == ""} selected{/if}>---</option>
                    <option value="1"{if $request.sd_acc_state == "1"} selected{/if}>有効</option>
                    <option value="0"{if $request.sd_acc_state == "0"} selected{/if}>無効</option>
                  </select></td>
              </tr>
              <tr>
                <td class="cell_label">サイトの状態</td>
              </tr>
              <tr>
                <td class="cell_value"><select name="sd_exam_state">
                    <option value=""{if $request.sd_exam_state == ""} selected{/if}>---</option>
                    <option value="2"{if $request.sd_exam_state == "2"} selected{/if}>公開中</option>
                    <option value="3"{if $request.sd_exam_state == "3"} selected{/if}>非公開</option>
                    <option value="4"{if $request.sd_exam_state == "4"} selected{/if}>強制非公開</option>
                    <option value="1"{if $request.sd_exam_state == "1"} selected{/if}>審査中</option>
                    <option value="0"{if $request.sd_exam_state == "0"} selected{/if}>未審査</option>
                  </select></td>
              </tr>
			  <tr>
                <td class="cell_label">管理コード</td>
              </tr>
              <tr>
                <td class="cell_value">
			<input type="text" name="managecode" value="{$request.managecode}" />
		</td>
              <tr>
                <td class="cell_value"><input type="submit" name="Submit" value="この条件で検索" /></td>
              </tr>
            </table>
	    {$search_hidden}
	    </form>
	    </td>
          <td class="result_list">
	  <form action ="/admin/account/post_control" method="post">
	  <div class="result_stat">{$result_navi}
              <select name="limit" onchange="submit();">
                <option value="10"{if $request.limit == "10"} selected{/if}>10件表示</option>
                <option value="50"{if $request.limit == "50"} selected{/if}>50件表示</option>
                <option value="100"{if $request.limit == "100"} selected{/if}>100件表示</option>
              </select>
            </div>
	    {$limit_hidden}
	    </form>
            <div class="result_sort">ソート：{$sort}</div>
            <table class="list" width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="5%" class="cell_label">店舗番号</td>
                <td width="8%" class="cell_label">アカウント名<br />
                  [アカウント状態]</td>
				<td width="9%" class="cell_label"><strong>管理コードA<br />
                </strong>管理コードB</td>
                <td width="15%" class="cell_label"><strong>店舗名（表示用）</strong><br />
                  会社名/店舗名</td>
                <td width="11%" class="cell_label"><strong>最終ログイン日</strong><br />
                  アカウント登録日</td>
                <td width="8%" class="cell_label">契約開始月</td>
                <td width="9%" class="cell_label">サイトの状態</td>
                <td width="23%" class="cell_label">メモ</td>
				<td width="12%" class="cell_label">基本料金</td>
              </tr>
	      {foreach from=$query_data item = "item" key = "key" name = "account_loop"}
              <tr>
                <td>{$item.sid|string_format:"%04d"}</td>
                <td><a href="/admin/detail/{$item.sid}/">{$item.sd_account}</a><br />
                  [<span{if $item.sd_acc_state == "有効"} class="active"{else} class="deactive"{/if}>{$item.sd_acc_state}</span>]</td>
				  <td>{if $item.sd_manage_a != ""}<strong>{$item.sd_manage_a}</strong>{/if}<br />{$item.sd_manage_b}&nbsp;</td>
                <td><strong>{$item.sd_shop_nm}</strong><br />
                  {$item.sd_customer_nm}/{$item.sd_contract_shop}</td>
                <td><strong>{if $item.sd_last_login != "なし"}{$item.sd_last_login|date_format:"%Y/%m/%d"}{else}{$item.sd_last_login}{/if}</strong><br />
                  {$item.sd_regist_date|date_format:"%Y/%m/%d"}</td>
                <td>{$item.sd_start_m|date_format:"%Y/%m"}</td>
                <td {if $item.sd_exam_state_flag == "1"}class="cell_ready"{elseif $item.sd_exam_state_flag == "2"}class="cell_on"{elseif $item.sd_exam_state_flag == "3"}class="cell_off"{elseif $item.sd_exam_state_flag == "4"}class="cell_attention"{else $item.sd_exam_state_flag == "0"} class="cell_notready"{/if}>{$item.sd_exam_state}</td>
                <td>{if $item.sd_memo != ""}{$item.sd_memo|nl2br}{else}&nbsp;{/if}</td>
				<td>{if $item.sd_basic_charge != 0}{$item.sd_basic_charge|number_format} 円{else}&nbsp;{/if}</td>
              </tr>
	      {/foreach}
            </table>
            <div class="pagenation">{$pager} </div></td>
        	
	</tr>
      </table>
    </div>
    <h3 id="regist">アカウント新規登録</h3>
    <div class="content_sub">
      <ul class="attention">
        <li>登録ボタンを押すと仮パスワードが自動生成されます。</li>
        <li>アカウント名は重複できません。</li>
      </ul>
      <form method="post" action="/admin/account/to_confirm">
      <!-- <table border="0" cellspacing="0" cellpadding="0" class="list">
        <tr>
          <td class="cell_label">アカウント名</td>
          <td><input name="sd_account" type="text" value="{if $form_data.sd_account != ""}{$form_data.sd_account}{else}S-{/if}" size="25" /></td>
          <td class="cell_label">顧客名</td>
          <td><input name="sd_customer_nm" type="text" size="30" value="{$form_data.sd_customer_nm}" /></td>
          <td class="cell_label">メールアドレス</td>
          <td><input name="sd_remind_mail" type="text" size="40" value="{$form_data.sd_remind_mail}" /></td>
          <td><input type="submit" name="Submit2" value="登録" /></td>
        </tr>
      </table> -->
	  
	  <table border="0" cellspacing="0" cellpadding="0" class="list">
        <tr>
          <td class="cell_label">アカウント名</td>
          <td><input name="sd_account" type="text" value="{if $form_data.sd_account != ""}{$form_data.sd_account}{else}s{/if}" size="25" /></td>
        </tr>
        <tr>
          <td class="cell_label">会社名</td>
          <td><input name="sd_customer_nm" type="text" size="30" value="{$form_data.sd_customer_nm}" /></td>
        </tr>
        <tr>
          <td class="cell_label">店舗名</td>
          <td><input name="sd_contract_shop" type="text" size="30" value="{$form_data.sd_contract_shop}" /></td>
        </tr>
        <tr>
          <td class="cell_label">メールアドレス</td>
          <td><input name="sd_remind_mail" type="text" size="40" value="{$form_data.sd_remind_mail}" /></td>
        </tr>
        <tr>
          <td colspan="2" class="list"><input name="Submit2" type="submit" value="登録" /></td>
        </tr>
      </table>
	  
      </form>
    </div>
  </div>
  
{include file="ci:admin/footer.tpl"}
