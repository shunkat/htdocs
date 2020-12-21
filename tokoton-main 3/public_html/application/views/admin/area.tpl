{include file="$document_root/application/views/admin/header.tpl"}


  <div class="breadcrumb"><a href="/admin/account/">アカウント一覧</a> > <a href="/admin/detail/{$sid}/">アカウント詳細</a> &gt; 地域選択</div>
  
  <div id="content">
    <h2>アカウント詳細</h2>
	
{if $form_error != ""}
	<div class="messagebox_error">
		<ul>
			{foreach from=$form_error item = "item" key = "key" name = "form_error_loop"}
				{$item}
			{/foreach}
		</ul>
	</div>
{/if}
	
    <div class="content_sub">
      <table width="100%" border="0" cellpadding="0" cellspacing="0" id="detail">
        <tr>
          <td id="detail_shop">{$acc_data.sd_shop_nm}（アカウント名：{$acc_data.sd_account} / 顧客名：{$acc_data.sd_customer_nm}）</td>
        </tr>
        <tr>
          <td><h4>表示地域選択</h4>
            <div class="content_sub">
              <p class="description">店舗の地域を設定します。店舗の住所（都道府県）を選択してください。</p>
			  <form action="/admin/area/to_confirm" method="post" class="useful_centerpadding">
				<strong>STEP1 地域選択</strong> >> STEP2 地区選択 >> 設定完了
              <table class="common">
	      {foreach from=$area_query item = "item" key = "key" name = "area_loop"}
                <tr>
                  <td class="cell_label">{$key}</td>
                  <td class="cell_lefty">
		  {foreach from=$item item = "item2" key = "key2" name = "area_loop2"}
		  <input type="radio" value="{$key2}" name="todoufuken_id" />{$item2}　
		  
		  {/foreach}
                </tr>
		{/foreach}
              </table>
			  <input name="" value="次へ" type="submit" />
			  <input type="hidden" name="sid" value="{$sid}" />
            </form>
			</div>
			</td>
        </tr>
      </table>
    </div>
  </div>

{include file="$document_root/application/views/admin/footer.tpl"}
