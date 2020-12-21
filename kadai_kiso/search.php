<!DOCTYPE html>
<html>
  <head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title>学生情報閲覧画面</title>
  </head>
  <body>
    <p><b><font size="6">学生情報閲覧画面</font></b></p>
    <hr style="width: 100%; height: 3px;">
    <form action="search.php" method="post">
      <p>学生番号　　：<input name="StudentID" type="search">を含む</p>
      <p>氏名（漢字）：<input name="kanji" type="search">を含む</p>
      <p>氏名（かな）：<input name="kana" type="search">を含む</p>
      <button type="submit" value="検索" name="Search" style="position: absolute; left: 300px; color: orange;">検索</button> <br>
    </form>
    <br>
    <table style="width: 550px; height: 100px;" border="1">
      <tbody>
        <tr>
          <td align="center"><b>学生番号</b></td>
          <td align="center"><b>氏名（漢字）</b></td>
          <td align="center"><b>氏名（かな）</b></td>
          <td align="center"><b>性別</b></td>
          <td align="center"><b>生年月日</b></td>
        </tr>
        <?php
          // 入力値の初期化
          $InputStudentID = 0;
          $Inputkanji = 0;
          $Inputkana = 0;

          // POSTで送信された入力値を取得する
          // 学生番号
          if (!empty($_POST['StudentID']))
          {
            $InputStudentID = $_POST['StudentID'];
          }
          // 氏名(漢字)
          if (!empty($_POST['kanji']))
          {
            $Inputkanji = $_POST['kanji'];
          }
          // 氏名(かな)
          if (!empty($_POST['kana']))
          {
            $Inputkana = $_POST['kana'];
          }

          // データベースへ接続
          $pdo = new PDO("mysql:dbname=test", "root");
          $pdo->query("set names utf8");

          // SQL文を設定
          if ($InputStudentID or $Inputkanji or $Inputkana)
          {
            $sql = "SELECT * FROM studentdata WHERE 'stCode' like '%$InputStudentID%' AND 'stName' like '%$Inputkanji%' AND 'stFurigana' like '%$Inputkana%'";

            $st = $pdo->query($sql);

            // SQL分を実行し、結果を表示する
            while ($row = $st->fetch()) {
              $stCode = $row['stCode'];
              $stFurigana= $row['stFurigana'];
              $stName= $row['stName'];
              $stSeibetsu= $row['stSeibetsu'];
              $stSeinengappi=$row['stSeinengappi'];

              // 画面への表示
              echo "
              <tr>
                <td align='center'>$stCode</td>
                <td align='left'>$stName</td>
                <td align='left'>$stFurigana</td>
                <td align='center'>$stSeibetsu</td>
                <td align='right'>$stSeinengappi</td>
              </tr>";
            }
          }
        ?>
      </tbody>
    </table>
  </body>
</html>
