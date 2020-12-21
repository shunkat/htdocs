<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>トップページ | 運営用管理画面</title>
<link href="/css/common.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="container">
  <div id="header">
    <table>
      <tr>
        <td><strong id="header_title">とことん車検ナビ / 運営用管理画面</strong></td>
        <td width="150" align="right"><strong id="header_time">2008年05月22日(木)</strong></td>
        <td width="130"><a href="#" id="btn_logout">ログアウト >></a></td>
      </tr>
    </table>
    <ul id="mainmenu">
      <li class="act"><a href="#">アカウント管理</a></li>
      <li><a href="#">トピックス管理</a></li>
      <li><a href="#">お知らせ管理</a></li>
      <li><a href="#">データ管理</a></li>
    </ul>
  </div>
  <div id="content_top">
    <h2>アカウント管理</h2>
    <ul id="submenu">
      <li><a href="#">アカウント一覧</a></li>
      <li><a href="#">アカウントの新規登録</a></li>
    </ul>
    <div class="messagebox">
		<ul>
			<li>
				新規アカウントを登録しました。
      			<div class="info">顧客名：メド車検株式会社<br />
        		アカウント名：S0006<br />
        		メールアドレス：info@media-active.jp<br />
        		<br />
        		<span class="important">仮パスワード：xJDhfnSW2</span></div>
      			<strong>※お客様に通知する内容です。確実にメモをお取り下さい。</strong>
			</li>
		</ul>
	</div>
	  <div class="messagebox_error">
	  	<ul>
			<li>アカウント名が入力されていません</li>
			<li>アカウント名が既に使われています。</li>
			<li>顧客名を入力して下さい</li>
			<li>メールアドレスを入力して下さい</li>
		</ul>
	</div>
    <h3>アカウント一覧 (総登録数:6件)</h3>
    <div class="content_sub">
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
                <td class="cell_label">店舗番号/アカウント名/顧客名</td>
              </tr>
              <tr>
                <td class="cell_value"><input type="text" name="textfield" /></td>
              </tr>
              <tr>
                <td class="cell_label">最終ログイン日</td>
              </tr>
              <tr>
                <td class="cell_value"><select name="select">
                    <option>---</option>
                    <option>あり</option>
                    <option>なし</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td class="cell_label">アカウント状態</td>
              </tr>
              <tr>
                <td class="cell_value"><select name="select2">
                    <option>---</option>
                    <option>有効</option>
                    <option>無効</option>
                  </select></td>
              </tr>
              <tr>
                <td class="cell_label">サイトの状態</td>
              </tr>
              <tr>
                <td class="cell_value"><select name="select3">
                    <option>---</option>
                    <option>公開中</option>
                    <option>非公開</option>
                    <option>強制非公開</option>
                    <option>審査中</option>
                    <option>未審査</option>
                  </select></td>
              </tr>
              <tr>
                <td class="cell_value"><input type="submit" name="Submit" value="この条件で検索" /></td>
              </tr>
            </table></td>
          <td class="result_list"><div class="result_stat">1件の結果が見つかりました。現在 1-1件を表示しています
              <select name="select">
                <option>10件表示</option>
                <option>50件表示</option>
                <option>100件表示</option>
              </select>
            </div>
            <div class="result_sort">ソート：登録が新しい順 / <a href="#">登録が古い順</a></div>
            <table class="list" width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="8%" class="cell_label">店舗番号</td>
                <td width="15%" class="cell_label">アカウント名<br />
                  [アカウント状態]</td>
                <td width="18%" class="cell_label"><strong>店舗名</strong><br />
                  顧客名</td>
                <td width="13%" class="cell_label"><strong>最終ログイン日</strong><br />
                  アカウント登録日</td>
                <td width="12%" class="cell_label">契約開始月</td>
                <td width="10%" class="cell_label">サイトの状態</td>
                <td width="24%" class="cell_label">メモ</td>
              </tr>
              <tr>
                <td>0006</td>
                <td><a href="admin_account_detail.html">S0006</a><br />
                  [<span class="active">有効</span>]</td>
                <td><strong>メド車検ステーション</strong><br />
                  メド車検株式会社</td>
                <td><strong>なし</strong><br />
                  2008/05/21</td>
                <td>2008/05</td>
                <td class="cell_notready">未審査</td>
                <td>電話受付サービス有り</td>
              </tr>
              <tr>
                <td>0005</td>
                <td><a href="#">S0005<br />
                  </a>[<span class="active">有効</span>]</td>
                <td><strong>ヤマ車検ステーション</strong><br />
                  株式会社ヤマ車検</td>
                <td><strong>2008/05/22</strong><br />
                  2008/05/05 <br /></td>
                <td>2008/05</td>
                <td class="cell_ready">審査中</td>
                <td>電話受付サービス有り<br />
                  メール受付サービス有り</td>
              </tr>
              <tr>
                <td>0004</td>
                <td><a href="#">S0004</a><br />
                  [<span class="active">有効</span>]</td>
                <td><strong>そら車検ステーション</strong><br />
                  そら車検株式会社</td>
                <td><strong>2008/05/01</strong><br />
                  2008/03/16</td>
                <td>2008/03</td>
                <td class="cell_on">公開中</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>0003</td>
                <td><a href="#">S0003<br />
                  </a>[<span class="active">有効</span>]</td>
                <td><strong>カワ車検ステーション</strong><br />
                  カワ車検株式会社</td>
                <td><strong>2008/04/15</strong><br />
                  2008/02/11</td>
                <td>2008/02</td>
                <td class="cell_off">非公開中</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>0002</td>
                <td><a href="#">S0002<br />
                  </a>[<span class="active">有効</span>]</td>
                <td><strong>うみ車検ステーション</strong><br />
                  うみ車検株式会社</td>
                <td><strong>2008/02/27</strong><br />
                  2008/01/31</td>
                <td>2008/01</td>
                <td class="cell_attention">強制公開停止</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>0001</td>
                <td><a href="#">S0001<br />
                  </a>[<span class="deactive">無効</span>]</td>
                <td><strong>ほし車検ステーション</strong><br />
                  ほし車検株式会社</td>
                <td><strong>2008/03/29</strong><br />
                  2008/01/23</td>
                <td>2008/01</td>
                <td class="cell_off">非公開中</td>
                <td>&nbsp;</td>
              </tr>
            </table>
            <div class="pagenation"> <a href="#">前の10件 <<</a> <a href="#">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">5</a> <a href="#">>> 次の10件</a> </div></td>
        </tr>
      </table>
    </div>
    <h3>アカウント新規登録</h3>
    <div class="content_sub">
      <ul class="attention">
        <li>登録ボタンを押すと仮パスワードが自動生成されます。</li>
        <li>アカウント名は重複できません。</li>
      </ul>
      <table border="0" cellspacing="0" cellpadding="0" class="list">
        <tr>
          <td class="cell_label">アカウント名</td>
          <td><input name="textfield2" type="text" value="S-" size="25" /></td>
          <td class="cell_label">顧客名</td>
          <td><input name="textfield22" type="text" size="30" /></td>
          <td class="cell_label">メールアドレス</td>
          <td><input name="textfield23" type="text" size="40" /></td>
          <td><input type="submit" name="Submit2" value="登録" /></td>
        </tr>
      </table>
    </div>
  </div>
  <div id="footer"> Copyright(C)2008 SyakenNavi All Rights Reserved. </div>
</div>
</body>
</html>
