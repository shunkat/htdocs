{include file="$document_root/application/views/admin/header.tpl"}


  <div class="breadcrumb"><a href="/admin/account/">アカウント一覧</a> > <a href="/admin/detail/{$sid}/">アカウント詳細</a> &gt; 地区選択</div>
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
          <td><h4>表示地区選択</h4>
            <div class="content_sub">
              <p class="description">次に表示された地区から、店舗のある地区（市区町村）を１つ選択してください。              </p>
			  <form action="/admin/region/to_confirm" method="post" class="useful_centerpadding">
				STEP1 地域選択 >> <strong>STEP2 地区選択</strong> >> 設定完了
			<h5 id="area_name">{$todoufuken.todoufuken_nm}</h5>
			{foreach from=$region_query item = "item" key = "key" name = "region_loop"}
			<h6>{$key}</h6>
			<table class="common">
			    <tbody>
			    {foreach from=$item item = "item2" key = "key2" name = "region_loop2"}
			      <tr>
			    {foreach from=$item2 item = "item3" key = "key3" name = "region_loop3"}
			        <td bgcolor="white" class="cell_lefty"><input id="reg_290" type="radio" value="{$key3}" name="region_id" />
			        <label for="reg_290">{$item3}</label></td>
			    {/foreach}
				
				{* レイアウト調整のため空セルのループ *}
				{if $smarty.foreach.region_loop3.total%4 != 0}
				{math equation="x - y" x=4 y=$smarty.foreach.region_loop3.total%4 assign = cnt}
					{section name = td_loop loop = $cnt}
					<td>&nbsp;</td>
					{/section}
				{/if}
				
				  </tr>
			      {/foreach}
			    </tbody>
			  </table>
			{/foreach}
			
			
			  <input value="設定" type="submit" />
			  <input type="hidden" name="sid" value="{$sid}" />
			  <input type="hidden" name="todoufuken_id" value="{$todoufuken_id}" />
			</form>
			</div>
		  </td>
        </tr>
      </table>
    </div>
  </div>

{include file="$document_root/application/views/admin/footer.tpl"}

