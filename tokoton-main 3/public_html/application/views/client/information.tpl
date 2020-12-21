<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>お知らせ</title>
<link href="/css/client/common.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="content_sub">
<table border="0" cellpadding="0" cellspacing="0" class="common">
  <tr>
    <td class="cell_title"><strong>{$info_data.info_up_date|date_format:"%Y/%m/%d"} {$info_data.info_index} </strong></td>
  </tr>
  <tr>
    <td class="cell_value">{$info_data.info_contents|nl2br} </td>
  </tr>
  <tr>
    <td class="cell_submit"><input name="Submit" type="submit" class="submit" onclick="window.close()" value="閉じる" /></td>
  </tr>
</table>
</div>
</body>
</html>
