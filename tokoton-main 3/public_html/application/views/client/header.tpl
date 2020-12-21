<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-cache">
<title>{$page_title} | 店舗管理画面</title>
<link href="/css/client/common.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/js/function.js"></script>
</head>
<body>
<div id="container">
  <div id="header">
    <table>
      <tr class="header">
        <td width="250">とことん車検ナビ / 店舗管理画面<br />
          {$today}</td>
        <td class="cell_right">ようこそ {if $user_data.sd_shop_nm != ""}{$user_data.sd_shop_nm}{else} －－－ {/if} 様 (店舗番号 : {$sid|string_format:"%04d"})</td>
        <td class="cell_right"><a href="/client/login/logout" id="btn_logout">ログアウト >></a></td>
      </tr>
      <tr class="statusbar">
        <td colspan="3"><div class="kuzure_stopper"> <strong>ステータス</strong>
            <dl>
              <dt>アカウントの状態：</dt>
              <dd{if $user_data.sd_acc_state == "t"} class="active"{else} class="notuse"{/if}>{if $user_data.sd_acc_state == "t"}有効{else}無効{/if}</dd>
              <dt>サイトの状態：</dt>
              <dd{if $user_data.sd_exam_state == "0"} class="nojudge"{elseif $user_data.sd_exam_state == "1"} class="judge"{elseif $user_data.sd_exam_state == "2"} class="open"{elseif $user_data.sd_exam_state == "3"} class="notopen"{elseif $user_data.sd_exam_state == "4"} class="forcestop"{/if}>{if $user_data.sd_exam_state == "0"}未審査{elseif $user_data.sd_exam_state == "1"}審査中{elseif $user_data.sd_exam_state == "2"}公開中{elseif $user_data.sd_exam_state == "3"}非公開{elseif $user_data.sd_exam_state == "4"}強制非公開{/if}</dd>
              <dt>サイト上掲載地域：</dt>
              <dd{if $user_data.sd_open_chiku != ""} class="incomplete"{else} class="notuse"{/if}>{if $user_data.sd_open_chiku != ""}設定済{else}未設定{/if}</dd>
              <dt>メール受付サービス：</dt>
              <dd{if $user_data.sd_mail_srvc == "t"} class="use"{else} class="notuse"{/if}>{if $user_data.sd_mail_srvc == "t"}使用{else}未使用{/if}</dd>
              <dt>電話受付サービス：</dt>
              <dd{if $user_data.sd_tel_srvc == "t"} class="use"{else} class="notuse"{/if}>{if $user_data.sd_tel_srvc == "t"}使用{else}未使用{/if}</dd>
            </dl>
          </div></td>
      </tr>
      <tr class="mainmenu">
        <td colspan="3"><ul>
            <li{if $now_category == "top"} class="act"{/if}><a href="/client/top/">ホーム</a></li>
            <li{if $now_category == "admin"} class="act"{/if}><a href="/client/mail_set/">管理者設定</a></li>
            <li{if $now_category == "shop"} class="act"{/if}><a href="/client/shopinfo/">店舗情報設定</a></li>
            <li><a href="http://www.tokoton-navi.com/shop_detail/{$sid}/manager/" target="_blank">プレビュー確認</a></li>
            <li{if $now_category == "manual"} class="act"{/if}><a href="/client/manual/">マニュアル</a></li>
          </ul>
          <div class="mainmenu_link"><a href="http://www.micstore.jp/" target="_blank"><img src="/img/client/ouen_site.gif" alt="logo ouen_site"></a></div>
          </td>
          
      </tr>
    </table>
  </div>