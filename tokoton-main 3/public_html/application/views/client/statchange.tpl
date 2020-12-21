{include file="$document_root/application/views/client/header.tpl"}

	<div id="content">

{include file="$document_root/application/views/client/shop_menu.tpl"}

		<div id="content_right">
			<h2>サイトの公開・非公開</h2>
			<p class="description">店舗の公開・非公開の設定をします。<br />
			店舗の各情報の設定がされていても、非公開が選択されていれば、公開されることはありません。</p>
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
	
			<form action="/client/statchange/to_confirm_exam" method="post">
			<table border="0" cellspacing="0" cellpadding="0" class="common">
				<tr>
					<td class="introcell_title"><strong>サイトの状態　：　{if $query_data.sd_exam_state == "0"}<span class="nojudge">未審査</span>{elseif $query_data.sd_exam_state == "1"}<span class="judge">審査中</span>{elseif $query_data.sd_exam_state == "2"}<span class="open">公開中</span>{elseif $query_data.sd_exam_state == "3"}<span class="notopen">非公開中</span>{elseif $query_data.sd_exam_state == "4"}<span class="forcestop">強制非公開中</span>{/if}</strong></td>
				</tr>
				<tr>
					<td class="introcell_label"><p class="hight"><span class="open"><strong>公開中</strong></span>…店舗情報が公開されています。<br />
					<span class="notopen"><strong>非公開中</strong></span>…店舗情報が公開されていません。<br />
					<span class="forcestop"><strong>強制非公開中</strong></span>…運営会社により公開が停止されています。<br />
					<span class="judge"><strong><strong>審査中</strong></strong></span>・・・運営会社によりページの内容の審査を行っています。<br />
					<span class="nojudge"><strong>未審査</strong></span>・・・ページを公開するために審査を行う必要があります。<br />
					</p></td>
				</tr>
				{if $query_data.sd_exam_state == 0}
				<tr>
					<td class="cell_submit">
						<p class="hight">内容の準備が整い次第「審査に出す」ボタンを押して下さい。<br /></p>
						<p class="attention">入力が必要な項目：店舗情報 / 紹介内容 / プラン / プランの料金項目/ 割引メニュー(あれば) / 店舗オプション(あれば) / 見積りメール設定 / メールアドレス設定 / 会社情報</p>
						<input type="submit" name="Submit2" value="審査に出す" class="submit" />
					</td>
				</tr>
				{/if}
			</table>
			<input type="hidden" name="sid" value="{$sid}" />
			<input type="hidden" name="sd_exam_state" value="1" />
			</form>

			{if $query_data.sd_exam_state != 0 and $query_data.sd_exam_state != 1}
			<form action="/client/statchange/to_confirm_open" method="post">
			<table border="0" cellspacing="0" cellpadding="0" class="common">
				<tr>
					<td class="introcell_title"><p>公開・非公開</p></td>
				</tr>
			<tr>
				<td class="cell_value"><input name="sd_exam_state" type="radio" value="2"{if $query_data.sd_exam_state == "2"} checked="checked"{/if} />
				公開
				<input name="sd_exam_state" type="radio" value="3"{if $query_data.sd_exam_state == "3" or $query_data.sd_exam_state == "4"} checked="checked"{/if} />
				非公開</td>
			</tr>
			</table>
			
			<div class="centering">
				<input type="submit" name="Submit" value="変更" class="submit" />
			</div>
			<input type="hidden" name="sid" value="{$sid}" />
			</form>
		</div>
	</div>
			{/if}
	<br style="clear:both" />
</div>
</div>
</div>
<br style="clear:both" />
{include file="$document_root/application/views/client/footer.tpl"}
