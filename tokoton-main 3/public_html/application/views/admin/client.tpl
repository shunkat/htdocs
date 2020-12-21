{include file="$document_root/application/views/admin/header.tpl"}
<div id="content">
	<h2>データ管理</h2>
	<ul id="submenu_vertical">
		<li><a href="/admin/month_price/">>> 月次課金情報管理</a></li>
		<li class="act"><a href="#">>> クライアント登録情報出力</a></li>
		<li><a href="/admin/rank_master/">>> 料金マスタ設定閲覧</a></li>
	</ul>
	<div class="separator_right">
		<h3>クライアント登録情報出力</h3>
		{if $msg != ""}
		<div class="messagebox">
		<ul>			
			<li>{$msg}</li>
		</ul>
		</div>
		{/if}
		{if $form_error != ""}
		<div class="messagebox_error">
		<ul>
			<li>{$form_error}</li>
		</ul>
		</div>
		{/if}
<!--		<div class="messagebox_error">顧客データが見つかりませんでした。選択した範囲を選び直してください。	</div>	-->
			<div class="content_sub">
			<p>登録されているクライアント情報をCSV形式でファイルに出力できます。</p>
			<form action="/admin/client/regist" method="post">
			<table class="common">
				<tr>
				<td class="cell_title"><strong>現在の総顧客データ数 ： {$total_rows}件</strong></td>
				</tr>
				<tr>
				<td class="cell_label">期間を選び、その間に登録されたアカウントのみをCSVファイルでダウンロードできます。</td>
				</tr>
				<tr>
				<td class="cell_submit">抽出したいクライアント情報の期間を選択して下さい</td>
				</tr>
				<tr>
				<td class="cell_submit">
					<select name="start_y">
					<option value="2008">2008</option>
					<option value="2009">2009</option>
					<option value="2010">2010</option>
					<option value="2011">2011</option>
					<option value="2012">2012</option>
					<option value="2013">2013</option>
					<option value="2014">2014</option>
					<option value="2015">2015</option>
					<option value="2016">2016</option>
					<option value="2017">2017</option>
					<option value="2018">2018</option>
					</select>
					年
					<select name="start_m">
					<option value="01">01</option>
					<option value="02">02</option>
					<option value="03">03</option>
					<option value="04">04</option>
					<option value="05">05</option>
					<option value="06">06</option>
					<option value="07">07</option>
					<option value="08">08</option>
					<option value="09">09</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					</select>
					月
					<select name="start_d">
					<option value="01">01</option>
					<option value="02">02</option>
					<option value="03">03</option>
					<option value="04">04</option>
					<option value="05">05</option>
					<option value="06">06</option>
					<option value="07">07</option>
					<option value="08">08</option>
					<option value="09">09</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
					<option value="23">23</option>
					<option value="24">24</option>
					<option value="25">25</option>
					<option value="26">26</option>
					<option value="27">27</option>
					<option value="28">28</option>
					<option value="29">29</option>
					<option value="30">30</option>
					<option value="31">31</option>
					</select>
					日				
					～
					<select name="end_y">
					<option value="2008">2008</option>
					<option value="2009">2009</option>
					<option value="2010">2010</option>
					<option value="2011">2011</option>
					<option value="2012">2012</option>
					<option value="2013">2013</option>
					<option value="2014">2014</option>
					<option value="2015">2015</option>
					<option value="2016">2016</option>
					<option value="2017">2017</option>
					<option value="2018">2018</option>
					</select>
					年
					<select name="end_m">
					<option value="01">01</option>
					<option value="02">02</option>
					<option value="03">03</option>
					<option value="04">04</option>
					<option value="05">05</option>
					<option value="06">06</option>
					<option value="07">07</option>
					<option value="08">08</option>
					<option value="09">09</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					</select>
					月
					<select name="end_d">
					<option value="01">01</option>
					<option value="02">02</option>
					<option value="03">03</option>
					<option value="04">04</option>
					<option value="05">05</option>
					<option value="06">06</option>
					<option value="07">07</option>
					<option value="08">08</option>
					<option value="09">09</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
					<option value="23">23</option>
					<option value="24">24</option>
					<option value="25">25</option>
					<option value="26">26</option>
					<option value="27">27</option>
					<option value="28">28</option>
					<option value="29">29</option>
					<option value="30">30</option>
					<option value="31">31</option>
					</select>日</td>
				</tr>
				<tr>
				<td class="cell_submit"><input type="submit" name="Submit22" value="CSVダウンロード" class="submit" /></td>
				</tr>
			</table>
			</form>
			</div>
		</div>
	</div>
</div>
{include file="$document_root/application/views/admin/footer.tpl"}