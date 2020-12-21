<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>シンプルログインフォーム</title>
</head>
<body>
<p>*** ログインフォーム (cyberstar / 0000) ***</p>

<?php if ($this->validation->error_string):?>
<div style="color:#FF3300;"><?=$this->validation->error_string; ?></div>
<?php endif;?>
<!--
<?=$this->validation->id_error?>
<?=$this->validation->pwd_error?>
-->

<?=form_open('/index.php/admin/sample/login')?>
<dl>
<dt>ユーザ名</dt>
<dd><input type="text" name="id" value="<?=$this->validation->id?>" /></dd>
<dt>パスワード</dt>
<dd><input type="text" name="pwd" value="<?=$this->validation->pwd?>" /></dd>
</dl>
<input type="submit" value="ログイン" />
<?=form_close()?>

</body>
</html>
