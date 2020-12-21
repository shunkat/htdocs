<?php

class Template_test extends Controller {

function Template_test()
{
parent::Controller();
}

function index()
{
// ライブラリを呼び出します。
$this->load->library('smarty_parser');
$data['title'] = "テンプレート日本語";
$data['body'] = "日本語が表示されましたか？";
$this->smarty_parser->parse("ci:template_test.tpl", $data);
}
}
?>