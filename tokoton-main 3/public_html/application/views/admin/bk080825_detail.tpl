{include file="$document_root/application/views/admin/header.tpl"}
  <div class="breadcrumb"><a href="/admin/account/">アカウント一覧</a> > アカウント詳細</div>
  <div id="content">
    <h2>アカウント詳細</h2>
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
	
	<table width="100%" border="0" cellpadding="0" cellspacing="0" id="detail">
        <tr>
          <td colspan="2" id="detail_shop">[{$query_data.sd_customer_nm}] [{$query_data.sd_contract_shop}] （アカウント名：{$query_data.sd_account}）</td>
        </tr>
        <tr>
          <td width="246"><ul>
              <li><a href="/shop_detail/{$sid}/" target="_blank" class="btn_open">店舗ページを見る &gt;&gt; </a></li>
              <li><form action="/client/login/" method="post" name="clientlogin" id="clientlogin"><a href="" class="btn_open" onclick="ClientLoginNewWin();return false;">店舗の管理画面を開く &gt;&gt; </a>
	      <input type="hidden" name="id" value="{$query_data.sd_account}">
	      <input type="hidden" name="pwd" value="{$query_data.sd_pwd}">
		  <input type="hidden" name="mode" value="admin_login" />
	      </form></li>
            </ul>
            <table border="0" cellspacing="0" cellpadding="0" class="subdetail">
              <tr>
                <td colspan="2" class="subdetail_title"><strong>アカウント</strong></td>
              </tr>
              <tr>
                <td width="102" class="subdetail_label">アカウント登録日</td>
                <td width="126" class="subdetail_value">{$query_data.sd_regist_date|date_format:"%Y/%m/%d"}</td>
              </tr>
              <tr>
                <td class="subdetail_label">契約開始月</td>
                <td class="subdetail_value">
		<form action="/admin/detail/change_date/" method="post">
		{html_select_date display_ymd=true prefix="sd_start_m" time=$query_data.sd_start_m start_year="-3" end_year=+3 display_days=false month_format=%m field_order=YMD}
                  <br />
                  <input type="submit" name="Submit52" value="決定" onclick="return formConfirm('update')" />
		  <input type="hidden" name="sid" value="{$sid}" />
		</form>
		</td>
              </tr>
              <tr>
                <td class="subdetail_label">契約終了月</td>
                <td class="subdetail_value">{if $query_data.sd_end_m != ""}{$query_data.sd_end_m|date_format:"%Y/%m"}{else}---{/if}</td>
              </tr>
              <tr>
                <td class="subdetail_label">アカウント状態</td>
                <td class="subdetail_value"><span{if $query_data.sd_acc_state == "有効"} class="ok"{/if}>{$query_data.sd_acc_state}</span></td>
              </tr>
              <tr>
                <td class="subdetail_label">サイトの状態</td>
                <td class="subdetail_value"><span{if $query_data.sd_exam_state == "公開中"} class="ok"{/if}>{$query_data.sd_exam_state}</span></td>
              </tr>
              <tr>
                <td class="subdetail_label">最終ログイン日</td>
                <td class="subdetail_value">{if $query_data.sd_last_login != "なし"}{$query_data.sd_last_login|date_format:"%Y/%m/%d"}{else}{$query_data.sd_last_login}{/if}</td>
              </tr>
			  <tr>
                <td class="subdetail_label">基本料金</td>
                <td class="subdetail_value"><form method="post" action="/admin/detail/to_confirm"><input type="text" size="5" name="sd_basic_charge" value="{$query_data.sd_basic_charge}" />
                  <input name="submit" type="submit" value="変更" onclick="return formConfirm('update');" /><input type="hidden" name="sid" value="{$sid}" /><input type="hidden" name="mode" value="basic_charge" /></form></td>
              </tr>
            </table>
            <table border="0" cellspacing="0" cellpadding="0" class="subdetail">
              <tr>
                <td colspan="2" class="subdetail_title"><strong>有料オプション</strong></td>
              </tr>
              <tr>
                <td width="102" class="subdetail_label">メール受付</td>
                <td width="126" class="subdetail_value"><span{if $query_data.sd_mail_srvc_flag == "t"} class="option_active"{/if}>{$query_data.sd_mail_srvc}<br />
		{if $query_data.sd_mail_srvc_flag == "t"}
                  <input type="button" name="Submit" value="無効にする" onclick="if(formConfirm('update')) location.href='/admin/detail/change_status/sd_mail_srvc-f/{$sid}'" />
		  {else}
		  <input type="button" name="Submit2" value="有効にする" onclick="if(formConfirm('update')) location.href='/admin/detail/change_status/sd_mail_srvc-t/{$sid}'" />
		  {/if}
                  </span></td>
              </tr>
              <tr>
                <td class="subdetail_label">電話受付</td>
                <td class="subdetail_value"><span{if $query_data.sd_tel_srvc_flag == "t"} class="option_active"{/if}>{$query_data.sd_tel_srvc}<br />
		  {if $query_data.sd_tel_srvc_flag == "t"}
                  <input type="button" name="Submit" value="無効にする" onclick="if(formConfirm('update')) location.href='/admin/detail/change_status/sd_tel_srvc-f/{$sid}'" />
		  {else}
                  <input type="button" name="Submit2" value="有効にする" onclick="if(formConfirm('update')) location.href='/admin/detail/change_status/sd_tel_srvc-t/{$sid}'" />
		  {/if}
                  </span></td>
              </tr>
            </table>
            <table border="0" cellspacing="0" cellpadding="0" class="subdetail">
              <tr>
                <td colspan="2" class="subdetail_title"><strong>店舗ページ利用状況</strong></td>
              </tr>
              <tr>
                <td width="102" class="subdetail_label">アクセス数<br />
                  （今月）</td>
                <td width="126" class="subdetail_value">{$use_data.ud_access_cnt}回</td>
              </tr>
              <tr>
                <td class="subdetail_label">コンバージョン<br />
                  （今月）</td>
                <td class="subdetail_value">{$use_data.ud_conversion_cnt}件</td>
              </tr>
              <tr>
                <td class="subdetail_label">クーポンの印刷数</td>
                <td class="subdetail_value">{$use_data.ud_coupon_cnt}回</td>
              </tr>
            </table>
            <table border="0" cellspacing="0" cellpadding="0" class="subdetail">
              <tr>
                <td colspan="2" class="subdetail_title"><strong>コマンド</strong></td>
              </tr>
              <tr>
                <td width="102" class="subdetail_label">内容審査</td>
                <td width="126" class="subdetail_value"><input type="submit" name="Submit3" value="合格" onclick="if(formConfirm('update')) location.href='/admin/detail/change_status/sd_exam_state-2/{$sid}'" /></td>
              </tr>
              <tr>
                <td class="subdetail_label">ページ</td>
                <td class="subdetail_value"><input type="submit" name="Submit32" value="公開" onclick="if(formConfirm('update')) location.href='/admin/detail/change_status/sd_exam_state-2/{$sid}'" />
                  <input type="submit" name="Submit33" value="非公開" onclick="if(formConfirm('update')) location.href='/admin/detail/change_status/sd_exam_state-3/{$sid}'" />
                  <br />
                  <input type="submit" name="Submit33" value="強制公開停止" onclick="if(formConfirm('update')) location.href='/admin/detail/change_status/sd_exam_state-4/{$sid}'" /></td>
              </tr>
              <tr>
                <td class="subdetail_label">アカウント</td>
                <td class="subdetail_value">
		{if $query_data.sd_acc_state_flag == "t"}
		<input type="button" name="Submit332" value="アカウント停止" onclick="if(formConfirm('update')) location.href='/admin/detail/end_m_regist/sd_acc_state-f/{$sid}'" />
		{else}
		<input type="button" name="Submit332" value="アカウント有効" onclick="if(formConfirm('update')) location.href='/admin/detail/change_status/sd_acc_state-t/{$sid}'" />
		{/if}
                  <br />
                  <input type="submit" name="Submit332" value="アカウント削除" onclick="if(formConfirm('delete')) location.href='/admin/detail/delete_db/{$sid}'" /></td>
              </tr>
            </table>
			</td>
			
          <td>
		  	<h4>契約者情報</h4>
			<table border="0" cellspacing="0" cellpadding="0" class="subdetail_right">
              <tr>
                <td width="118" class="subdetail_label">会社名</td>
                <td width="425" class="subdetail_value"><form method="post" action="/admin/detail/to_confirm"><input type="text" size="35" name="sd_customer_nm" value="{$edit_data.sd_customer_nm}" /> <input type="submit" value="変更" onclick="return formConfirm('update');" /><input type="hidden" name="sid" value="{$sid}" /><input type="hidden" name="mode" value="customer_nm" /></form></td>
              </tr>
			  
			  <tr>
                <td class="subdetail_label">店舗名</td>
                <td class="subdetail_value"><form method="post" action="/admin/detail/to_confirm"><input type="text" size="35" name="sd_contract_shop" value="{$edit_data.sd_contract_shop}" />
                  <input name="submit3" type="submit" value="変更" onclick="return formConfirm('update');" /><input type="hidden" name="mode" value="shop_nm" /><input type="hidden" name="sid" value="{$sid}" /></form></td>
              </tr>
			  
              <tr>
                <td class="subdetail_label">契約者メールアドレス</td>
                <td class="subdetail_value"><form method="post" action="/admin/detail/to_confirm"><input type="text" size="35" name="sd_remind_mail" value="{$query_data.sd_remind_mail}" /> <input type="submit" value="変更" onclick="return formConfirm('update');" /><input type="hidden" name="sid" value="{$sid}" /><input type="hidden" name="mode" value="mail" /></form></td>
              </tr>
			  <tr>
                <td class="subdetail_label">管理コードA</td>
                <td class="subdetail_value"><form method="post" action="/admin/detail/to_confirm"><input type="text" size="20" name="sd_manage_a" value="{$query_data.sd_manage_a}" /><input type="hidden" name="sid" value="{$sid}" /><input type="hidden" name="mode" value="manage_a" />
                  <input name="submit32" type="submit" value="変更" onclick="return formConfirm('update');" /></form></td>
              </tr>
              <tr>
                <td class="subdetail_label">管理コードB</td>
                <td class="subdetail_value"><form method="post" action="/admin/detail/to_confirm"><input type="text" size="20" name="sd_manage_b" value="{$query_data.sd_manage_b}" /><input type="hidden" name="sid" value="{$sid}" /><input type="hidden" name="mode" value="manage_b" />
                  <input name="submit33" type="submit" value="変更" onclick="return formConfirm('update');" /></form></td>
              </tr>
              <tr>
                <td class="subdetail_label">管理コードC</td>
                <td class="subdetail_value"><form method="post" action="/admin/detail/to_confirm"><input type="text" size="20" name="sd_manage_c" value="{$query_data.sd_manage_c}" /><input type="hidden" name="sid" value="{$sid}" /><input type="hidden" name="mode" value="manage_c" />
                  <input name="submit34" type="submit" value="変更" onclick="return formConfirm('update');" /></form></td>
              </tr>
              <tr>
                <td class="subdetail_label">管理コードD</td>
                <td class="subdetail_value"><form method="post" action="/admin/detail/to_confirm"><input type="text" size="20" name="sd_manage_d" value="{$query_data.sd_manage_d}" /><input type="hidden" name="sid" value="{$sid}" /><input type="hidden" name="mode" value="manage_d" />
                  <input name="submit35" type="submit" value="変更" onclick="return formConfirm('update');" /></form></td>
              </tr>
              <tr>
                <td class="subdetail_label">管理コードE</td>
                <td class="subdetail_value"><form method="post" action="/admin/detail/to_confirm"><input type="text" size="20" name="sd_manage_e" value="{$query_data.sd_manage_e}" /><input type="hidden" name="sid" value="{$sid}" /><input type="hidden" name="mode" value="manage_e" />
                  <input name="submit36" type="submit" value="変更" onclick="return formConfirm('update');" /></form></td>
              </tr>
              <tr>
                <td class="subdetail_label">管理コードF</td>
                <td class="subdetail_value"><form method="post" action="/admin/detail/to_confirm"><input type="text" size="20" name="sd_manage_f" value="{$query_data.sd_manage_f}" /><input type="hidden" name="sid" value="{$sid}" /><input type="hidden" name="mode" value="manage_f" />
                  <input name="submit37" type="submit" value="変更" onclick="return formConfirm('update');" /></form></td>
              </tr>
            </table>
			
		<h4>メモ</h4>
		<form action="/admin/detail/to_confirm/" method="post">
            <textarea name="sd_memo" cols="50" rows="3">{$query_data.sd_memo}</textarea>
            <div class="useful_centerpadding"><input type="submit" value="書き込み適用" name="Submit22" onclick="return formConfirm('update');" /></div>
	    <input type="hidden" name="sid" value="{$sid}" />
	    <input type="hidden" name="mode" value="memo_regist" />
	    </form>
            <h4>店舗基本情報</h4>
            <table border="0" cellspacing="0" cellpadding="0" class="subdetail_right">
              <tr>
                <td width="118" class="subdetail_label">店舗名</td>
                <td width="425" class="subdetail_value">{$query_data.sd_shop_nm}{if $query_data.sd_shop_nm == ""}&nbsp;{/if}</td>
              </tr>
              <tr>
                <td class="subdetail_label">サイト上掲載地域</td>
                <td class="subdetail_value">{if $query_data.todoufuken_nm == ""}<span class="atention">設定されていません</span>{else}{$query_data.todoufuken_nm}{if $query_data.sub_region_nm != "市部" and $query_data.sub_region_nm != "23区"}{$query_data.sub_region_nm}{/if}{$query_data.region_nm}　{/if}
                  <input type="button" name="Submit4" value="地域を選択する" onclick="location.href='/admin/area/{$sid}/'" /></td>
              </tr>
              <tr>
                <td class="subdetail_label">電話番号</td>
                <td class="subdetail_value">{$query_data.sd_shop_tel}{if $query_data.sd_shop_tel == ""}&nbsp;{/if}</td>
              </tr>
              <tr>
                <td class="subdetail_label">店舗所在地</td>
                <td class="subdetail_value">{$query_data.sd_shop_address}{if $query_data.sd_shop_address == ""}&nbsp;{/if}</td>
              </tr>
              <tr>
                <td class="subdetail_label">アクセス</td>
                <td class="subdetail_value">{$query_data.sd_shop_access|nl2br}{if $query_data.sd_shop_access == ""}&nbsp;{/if}</td>
              </tr>
              <tr>
                <td class="subdetail_label">営業時間/休業日</td>
                <td class="subdetail_value">{$query_data.sd_shop_open} {if $query_data.sd_shop_open != "&nbsp;" or $query_data.sd_shop_off != "&nbsp;"}/ {/if}{$query_data.sd_shop_off}</td>
              </tr>
              <tr>
                <td class="subdetail_label">店舗オプション</td>
                <td class="subdetail_value">
				{if $icon.icon1 == "t"}
				<img src="/img/admin/icon_1.gif" alt="とことん24取扱い" width="32" height="32" />
				{/if}
				{if $icon.icon2 == "t"}
				<img src="/img/admin/icon_2.gif" alt="整備保証付き" width="32" height="32" />
				{/if}
				{if $icon.icon3 == "t"}
				<img src="/img/admin/icon_3.gif" alt="夜間受付" width="32" height="32" />
				{/if}
				{if $icon.icon4 == "t"}
				<img src="/img/admin/icon_4.gif" alt="土日入庫OK" width="32" height="32" />
				{/if}
				{if $icon.icon5 == "t"}
				<img src="/img/admin/icon_5.gif" alt="代車あり" width="32" height="32" />
				{/if}
				{if $icon.icon6 == "t"}
				<img src="/img/admin/icon_6.gif" alt="引取・納車OK" width="32" height="32" />
				{/if}
				{if $icon.icon7 == "t"}
				<img src="/img/admin/icon_7.gif" alt="キャッシュレスOK" width="32" height="32" />
				{/if}
				{if $icon.icon8 == "t"}
				<img src="/img/admin/icon_8.gif" alt="クレジットカード払いOK" width="32" height="32" />
				{/if}
				{if $icon.icon9 == "t"}
				<img src="/img/admin/icon_9.gif" alt="グルメプレゼント" width="32" height="32" />
				{/if}
				{if $icon.icon10 == "t"}
				<img src="/img/admin/icon_10.gif" alt="グッズプレゼント" width="32" height="32" />
				{/if}
				{if $icon.icon11 == "t"}
				<img src="/img/admin/icon_11.gif" alt="ガソリンプレゼント" width="32" height="32" />
				{/if}
				{if $icon.icon12 == "t"}
				<img src="/img/admin/icon_12.gif" alt="抽選でプレゼント" width="32" height="32" />
				{/if}
				{if $icon.icon13 == "t"}
				<img src="/img/admin/icon_13.gif" alt="オイル交換サービス" width="32" height="32" />
				{/if}
				{if $icon.icon14 == "t"}
				<img src="/img/admin/icon_14.gif" alt="車検時限定割引サービス" width="32" height="32" />
				{/if}
				{if $icon.icon15 == "t"}
				<img src="/img/admin/icon_15.gif" alt="即日完了ＯＫ" width="32" height="32" />
				{/if}
				{if $icon.icon16 == "t"}
				<img src="/img/admin/icon_16.gif" alt="ロードサービス取り扱い" width="32" height="32" />
				{/if}
				&nbsp;
				</td>
              </tr>
              <tr>
                <td class="subdetail_label">車検ミシュランク</td>
                <td class="subdetail_value">
		<form action="/admin/detail/to_confirm/" method="post">
		<select name="sd_shop_rank">
                    <option value=""{if $query_data.sd_shop_rank == ""} selected="selected"{/if}>表示なし</option>
                    <option value="1"{if $query_data.sd_shop_rank == "1"} selected="selected"{/if}>★</option>
                    <option value="2"{if $query_data.sd_shop_rank == "2"} selected="selected"{/if}>★★</option>
                    <option value="3"{if $query_data.sd_shop_rank == "3"} selected="selected"{/if}>★★★</option>
                    <option value="4"{if $query_data.sd_shop_rank == "4"} selected="selected"{/if}>★★★★</option>
                    <option value="5"{if $query_data.sd_shop_rank == "5"} selected="selected"{/if}>★★★★★</option>
                  </select>
                  <input type="submit" name="Submit5" value="適用" onclick="return formConfirm('update');" />
		  <input type="hidden" name="sid" value="{$sid}" />
		  <input type="hidden" name="mode" value="rank_regist" />
		  </form>
                </td>
              </tr>
			  <tr>
                <td class="subdetail_label">店舗サイトURL</td>
                <td class="subdetail_value"><a href="{$query_data.sd_shop_url}" target="_blank">{$query_data.sd_shop_url}</a></td>
              </tr>
			  <tr>
                <td class="subdetail_label">備考</td>
                <td class="subdetail_value"><textarea name="textarea3" rows="6" readonly>{$query_data.sd_shop_memo}</textarea></td>
              </tr>
              <!-- <tr>
                <td class="subdetail_label">&nbsp;</td>
                <td class="subdetail_value">&nbsp;</td>
              </tr> -->
            </table>
            <h4>登録情報一覧</h4>
            <table class="subdetail_right" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="16%" class="subdetail_label">プラン数</td>
                <td width="17%" class="subdetail_label">オプション数</td>
                <td width="17%" class="subdetail_label">割引メニュー数</td>
                <td width="17%" class="subdetail_label">サービス数</td>
                <td width="17%" class="subdetail_label">キャンペーン</td>
                <td width="16%" class="subdetail_label">クーポン</td>
              </tr>
              <tr>
                <td class="subdetail_value"><p>{$plan}</p></td>
                <td class="subdetail_value">{$add_option}</td>
                <td class="subdetail_value">{$dsc_menu}</td>
                <td class="subdetail_value">{$service}</td>
                <td class="subdetail_value">{$campaign}</td>
                <td class="subdetail_value">{$coupon}</td>
              </tr>
            </table>
            <h4>店舗紹介内容</h4>
            <table border="0" cellspacing="0" cellpadding="0" class="subdetail_right">
              <tr>
                <td width="118" class="subdetail_label">キャッチコピー※</td>
                <td width="425" class="subdetail_value">{$query_data.sd_catch_copy}{if $query_data.sd_catch_copy == ""}&nbsp;{/if}</td>
              </tr>
              <tr>
                <td class="subdetail_label">紹介文※</td>
                <td class="subdetail_value"><textarea name="textarea2" cols="" rows="3" readonly="readonly">{$query_data.sd_intro}</textarea></td>
              </tr>
			  <tr>
                <td class="subdetail_label">登録画像</td>
                <td class="subdetail_value">{if $bigimg_data.img_path != ""}<img src="{$bigimg_data.img_path}" alt="" width="{$bigimg_data.width}" height="{$bigimg_data.height}" class="pic" />{else}&nbsp;{/if}
		{if $small1img_data.img_path != ""}<img src="{$small1img_data.img_path}" alt="{$query_data.sd_small_img01}" width="{$small1img_data.width}" height="{$small1img_data.height}" class="pic" />{else}&nbsp;{/if}
		{if $small2img_data.img_path != ""}<img src="{$small2img_data.img_path}" alt="{$query_data.sd_small_img02}" width="{$small2img_data.width}" height="{$small2img_data.height}" class="pic" />{else}&nbsp;{/if}</td>
              </tr>
              <tr>
                <td class="subdetail_label">料金プラン※</td>
                <td class="subdetail_value">{if $plan != 0}<a href="/admin/plan_detail/{$sid}/" target="_blank">[料金プランを表示する]</a>{else}料金プランが登録されていません{/if}</td>
              </tr>
              <tr>
                <td class="subdetail_label">割引メニュー</td>
                <td class="subdetail_value">{if $dsc_menu != 0}<a href="/admin/discount_detail/{$sid}/" target="_blank">[割引メニューを表示する]</a>{else}割引メニューが登録されていません{/if}</td>
              </tr>
              <tr>
                <td class="subdetail_label">サービス</td>
                <td class="subdetail_value">{if $service != 0}<a href="/admin/service_detail/{$sid}/" target="_blank">[サービス一覧を表示する]</a>{else}サービスが登録されていません{/if}</td>
              </tr>
              <tr>
                <td class="subdetail_label">キャンペーン</td>
                <td class="subdetail_value">{if $campaign_flag == "t"}<a href="/admin/campaign_detail/{$sid}/" target="_blank">[キャンペーン内容を表示する]</a>{else}キャンペーンが登録されていません{/if}</td>
              </tr>
              <tr>
                <td class="subdetail_label">クーポン</td>
                <td class="subdetail_value">{if $coupon_flag == "t"}<a href="/admin/coupon_detail/{$sid}/" target="_blank">[クーポン内容を表示する]</a>{else}クーポンが登録されていません{/if}</td>
              </tr>
            </table>
            <h4>メール関連設定</h4>
            <table border="0" cellspacing="0" cellpadding="0" class="subdetail_right">
              <tr>
                <td width="118" class="subdetail_label">見積りメール送受信先※</td>
                <td width="425" class="subdetail_value">{$query_data.sd_estimate_mail}{if $query_data.sd_estimate_mail == ""}&nbsp;{/if}</td>
              </tr>
              <tr>
                <td class="subdetail_label">車検ナビからの<br />
                  お知らせ受信先※</td>
                <td class="subdetail_value">{if $query_data.sd_info_mail != "&nbsp;"}<a href="mailto:{$query_data.sd_info_mail}">{$query_data.sd_info_mail}</a>{else}{$query_data.sd_info_mail}{/if}{if $query_data.sd_info_mail == ""}&nbsp;{/if}</td>
              </tr>
              <tr>
                <td class="subdetail_label">自動見積りメール<br />
                  表示フォーマット※</td>
                <td class="subdetail_value">{if $format_flag == "t"}<a href="/admin/mail_temp/{$sid}/" target="_blank">[フォーマットを表示する]</a>{else}フォーマットが登録されていません{/if}</td>
              </tr>
            </table>
            <h4>連絡先</h4>
            <table border="0" cellspacing="0" cellpadding="0" class="subdetail_right">
              <tr>
                <td width="118" class="subdetail_label">会社名※</td>
                <td width="425" class="subdetail_value">{$query_data.sd_company_nm}{if $query_data.sd_company_nm == ""}&nbsp;{/if}</td>
              </tr>
			  <tr>
                <td class="subdetail_label">部署名※</td>
                <td class="subdetail_value">{$query_data.sd_tanto_section}{if $query_data.sd_tanto_section == ""}&nbsp;{/if}</td>
              </tr>
              <tr>
                <td class="subdetail_label">お役職※</td>
                <td class="subdetail_value">{$query_data.sd_tanto_position}{if $query_data.sd_tanto_position == ""}&nbsp;{/if}</td>
              </tr>
              <tr>
                <td class="subdetail_label">担当者氏名※</td>
                <td class="subdetail_value">{$query_data.sd_tanto_nm}{if $query_data.sd_tanto_nm == ""}&nbsp;{/if}</td>
              </tr>
              <tr>
                <td class="subdetail_label">担当者フリガナ※</td>
                <td class="subdetail_value">{$query_data.sd_tanto_kana}{if $query_data.sd_tanto_kana == ""}&nbsp;{/if}</td>
              </tr>
              <tr>
                <td class="subdetail_label">電話番号※</td>
                <td class="subdetail_value">{$query_data.sd_company_tel}{if $query_data.sd_company_tel == ""}&nbsp;{/if}</td>
              </tr>
			  <tr>
                <td class="subdetail_label">FAX番号※</td>
                <td class="subdetail_value">{$query_data.sd_company_fax}{if $query_data.sd_company_fax == ""}&nbsp;{/if}</td>
              </tr>
              <tr>
                <td class="subdetail_label">郵便番号※</td>
                <td class="subdetail_value">{$query_data.sd_company_zip}{if $query_data.sd_company_zip == ""}&nbsp;{/if}</td>
              </tr>
              <tr>
                <td class="subdetail_label">住所※</td>
                <td class="subdetail_value">{$query_data.sd_company_address}{if $query_data.sd_company_address == ""}&nbsp;{/if}</td>
              </tr>
            </table></td>
        </tr>
      </table>
    </div>
  </div>
{include file="$document_root/application/views/admin/footer.tpl"}
