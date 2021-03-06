{include file="ci:user/header.tpl"}

<div id="content">
<!-- パンくず対応 ST -->
  <ul id="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
<?
$length = count($breadcrumb_ary);
$no = 0;    // 追加
foreach ($breadcrumb_ary as $value){
  if ($no == 0){
?>
    <li{$itemcope}>
      <a href="<?=$value['url']?>"{$itemprop_url}>
         <span{$itemprop_title}><?=$value['name']?></span>
      </a>
	  <meta itemprop="position" content="1" />
    </li>
<?
  } else {
?>
    <li{$itemcope_child}>
<?
    if($no === $length-1){
?>
      <span{$itemprop_title}><?=$value['name']?></span>
	  <meta itemprop="position" content="<? print $no+1 ?>" />
<?
    } else {
?>
      <a href="<?=$value['url']?>"{$itemprop_url}>
        <span{$itemprop_title}><?=$value['name']?></span>
      </a>
	  <meta itemprop="position" content="<? print $no+1 ?>" />
<?
    }
?>
    </li>
<?
  }
  $no++;
}
?>
  </ul>
  <br class="clear"/>
<!-- パンくず対応 ED -->
  
    <div class="ninja_onebutton margin_top10">
        <br class="clear" />
        <h3 id="shopname">{$shop_data.sd_shop_nm}&nbsp;{if $sd_shop_rank != ""}<strong>{$sd_shop_rank}</strong>{/if}</h3>
        <p id="shopnumber"><strong>店舗No.{$shop_data.sid|string_format:"%04d"}</strong></p>
        <br class="clear" />
        <div id="content_all">
            <div id="content_left">
                <dl class="pic1">
                <dt>{if $intro1_img != ""}<img src="{$intro1_img}" alt="" width="300" />{else}<img src="/img/user/detail/img_big.gif" alt="" width="300" class="noimage" />{/if}</dt>
                </dl>
                <dl class="text">
                    <dt>
                        <hr class="shop" />
                        <h3 id="shopname2" style="word-break:break-all;">{$shop_data.sd_shop_nm}&nbsp;</h3>
                        <!-- <h3 id="shopname3"></h3> -->
                        <h4 id="shopinfo">{$shop_data.sd_shop_address}&nbsp;<br />
                            {$shop_data.sd_shop_open} {$shop_data.sd_shop_off}&nbsp;<br />
                            <a href="#shopdata">詳しい店舗データを見る</a>
                        </h4>
                            <hr class="shop" />
                        {if $link_shop}
                            <p class="plan_btn_jump"><a href="/link_shop/{$shop_data.sid}/shop_detail_plan/">&nbsp;</a></p>
                        {else}
                            <p class="estimateRec"><a href="/link_shop/{$shop_data.sid}/shop_detail_estimate/{$plan.0.pb_no}/">オススメプランで無料見積り</a></p>
                            <p class="plan_btn_jump"><a href="#plan">車検プランを見る</a></p>
                        {/if}
                    </dt>
                </dl><br class="clear" />
                <h3 id="contents">対応サービス</h3> {if $option_data.flag == "t"}
                <ul id="icon"> {if $option_data.icon1 == "t"}
                    <!--            <li><img src="/img/user/detail/icon_1.gif" alt="とことん24取扱い" width="45" height="66" /></li>-->{/if} {if $option_data.icon2 == "t"}
                    <li><img src="/img/user/detail/icon_2.gif" alt="整備保証付き" width="45" height="66" /></li> {/if} {if $option_data.icon16 == "t"}
                    <li><img src="/img/user/detail/icon_15.gif" alt="ロードサービス取扱い" width="45" height="66" /></li> {/if} {if $option_data.icon15 == "t"}
                    <li><img src="/img/user/detail/icon_16.gif" alt="即日完了ＯＫ" width="45" height="66" /></li> {/if} {if $option_data.icon3 == "t"}
                    <li><img src="/img/user/detail/icon_3.gif" alt="夜間受付ＯＫ" width="45" height="66" /></li> {/if} {if $option_data.icon4 == "t"}
                    <li><img src="/img/user/detail/icon_4.gif" alt="土日対応ＯＫ" width="45" height="66" /></li> {/if} {if $option_data.icon5 == "t"}
                    <li><img src="/img/user/detail/icon_5.gif" alt="代車あり" width="45" height="66" /></li> {/if} {if $option_data.icon6 == "t"}
                    <li><img src="/img/user/detail/icon_6.gif" alt="引取納車ＯＫ" width="45" height="66" /></li> {/if} {if $option_data.icon7 == "t"}
                    <li><img src="/img/user/detail/icon_7.gif" alt="キャッシュレスＯＫ" width="45" height="66" /></li> {/if} {if $option_data.icon8 == "t"}
                    <li><img src="/img/user/detail/icon_8.gif" alt="クレジットカード利用ＯＫ" width="45" height="66" /></li> {/if} {if $option_data.icon9 == "t"}
                    <li><img src="/img/user/detail/icon_9.gif" alt="グルメプレゼント" width="45" height="66" /></li> {/if} {if $option_data.icon10 == "t"}
                    <li><img src="/img/user/detail/icon_10.gif" alt="グッズプレゼント" width="45" height="66" /></li> {/if} {if $option_data.icon11 == "t"}
                    <li><img src="/img/user/detail/icon_11.gif" alt="ガソリンプレゼント" width="45" height="66" /></li> {/if} {if $option_data.icon12 == "t"}
                    <li><img src="/img/user/detail/icon_12.gif" alt="抽選でプレゼント" width="45" height="66" /></li> {/if} {if $option_data.icon13 == "t"}
                    <li><img src="/img/user/detail/icon_13.gif" alt="オイル交換サービス" width="45" height="66" /></li> {/if} {if $option_data.icon14 == "t"}
                    <li><img src="/img/user/detail/icon_14.gif" alt="車検時限定割引サービス" width="45" height="66" /></li> {/if} </ul> {/if} <br class="clear" />
                <table class="top" width="600" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="340" valign="top">
                            <h5 id="introduction">{$shop_data.sd_catch_copy}</h5>
                            <div>{$shop_data.sd_intro}</div>
                            <dl class="pic2"> <dt>{if $intro2_img != ""}<img src="{$intro2_img}" alt="{$shop_data.sd_small_img01}" width="160" />{else}<img src="/img/user/detail/img_small.gif" alt="" width="160" class="noimage" />{/if}</dt>
                                <dd><span style="font-size:10px;">{if $shop_data.sd_small_img01 != ""}{$shop_data.sd_small_img01}{else}&nbsp;{/if}</span></dd>
                            </dl>
                            <dl class="pic2"> <dt>{if $intro3_img != ""}<img src="{$intro3_img}" alt="{$shop_data.sd_small_img02}" width="160" />{else}<img src="/img/user/detail/img_small.gif" alt="" width="160" class="noimage" />{/if}</dt>
                                <dd><span style="font-size:10px;">{if $shop_data.sd_small_img02 != ""}{$shop_data.sd_small_img02}{else}&nbsp;{/if}</span></dd>
                            </dl>
                        </td>
                        <td width="260" valign="top">
                            <h3 id="contents2">アクセス情報</h3>
                            <!-- /*20180808 GoogleMap座標表示対応 nagai ST*/-->
                            {if $map_flag ne "f"}
                                {if $map != ""}
                                    <iframe src="https://maps.google.co.jp/maps?output=embed&q={$map_link}&z=16" width="260" height="260" frameborder="0" scrolling="no" ></iframe>
                                    <font size="-2"><a href="http://maps.google.co.jp/?mapf=q&hl=ja&geocode=&q={$map_link}" target="_blank">大きな地図で見る</a></font><br />
                                {else}
                                    &nbsp;
                                {/if}
                            {else}
                                &nbsp;<a href="http://maps.google.co.jp/?mapf=q&hl=ja&geocode=&q={$map_link}" target="_blank">Googleマップ</a>のページからご確認ください。
                            {/if}
                            <!-- /*20180808 GoogleMap座標表示対応 nagai ED*/-->
                            <span style="font-size:10px">{$shop_data.sd_shop_access}&nbsp;</span>
                        </td>
                    </tr>
                </table>
                <h4 id="plan">車検プラン</h4> {if $plan != null}
                <ul id="plan_navi"> {foreach from=$plan item = "item" key = "key" name = "plan_name_loop"}
                    <li{if $smarty.foreach.plan_name_loop.last} id="none" {/if}><a href="#p{$item.pb_no}">{$item.pb_plan_nm}</a></li> {/foreach} </ul> {/if} <br class="clear" /> {foreach from=$plan item = "item" key = "key" name = "plan_loop"}
                <h5 class="plan_name"><a name="p{$item.pb_no}">{$item.pb_plan_nm}</a></h5>
                <div class="plan_detail">
                    <div class="plan_desc">
                        <h6 class="plan_detail_title">{$item.pb_chatch_copy}</h6>
                        <pre>{$item.pb_plan_contents}</pre> </div> {if 1 == 2}
                    <table class="plan_price" width="100%" cellspacing="0" cellpadding="0">
                        <tr>
                            <td width="100" class="price_title">&nbsp;</td>
                            <td align="left" class="price_title"> <strong>軽自動車</strong><br /> ワゴンR、ライフ、ムーブなど（軽自動車） </td>
                            <td align="left" class="price_title"> <strong>小型乗用車</strong><br /> ヴィッツ、フィット、マーチなど（1.0t以下） </td>
                            <td align="left" class="price_title"> <strong>中型乗用車</strong><br /> カローラ、スカイライン、アテンザなど（1.5t以下） </td>
                            <td align="left" class="price_title"> <strong>大型乗用車</strong><br /> クラウン、セルシオ、マークXなど（1.5t超2.0t以下） </td>
                        </tr>
                        <tr>
                            <td height="35" class="price_title">車検費用合計(*)</td>
                            <td>{if $item.mini_price_sum != ""}{$item.mini_price_sum|number_format}円{else}&nbsp;{/if}</td>
                            <td>{if $item.small_price_sum != ""}{$item.small_price_sum|number_format}円{else}&nbsp;{/if}</td>
                            <td>{if $item.middle_price_sum != ""}{$item.middle_price_sum|number_format}円{else}&nbsp;{/if}</td>
                            <td>{if $item.large_price_sum != ""}{$item.large_price_sum|number_format}円{else}&nbsp;{/if}</td>
                        </tr>
                        <tr>
                            <td height="50" class="price_title">最大割引適用後</td>
                            <td class="serviceprice">
                                <font size="+1">{if $item.mini_disc_price != ""}{$item.mini_disc_price|number_format}円{else}&nbsp;{/if}</font>
                            </td>
                            <td class="serviceprice">
                                <font size="+1">{if $item.small_disc_price != ""}{$item.small_disc_price|number_format}円{else}&nbsp;{/if}</font>
                            </td>
                            <td class="serviceprice">
                                <font size="+1">{if $item.middle_disc_price != ""}{$item.middle_disc_price|number_format}円{else}&nbsp;{/if}</font>
                            </td>
                            <td class="serviceprice">
                                <font size="+1">{if $item.large_disc_price != ""}{$item.large_disc_price|number_format}円{else}&nbsp;{/if}</font>
                            </td>
                        </tr>
                    </table> {/if}
                    <table class="plan_price" width="100%" cellspacing="0" cellpadding="0">
                        <tr>
                            <td colspan="2"><strong>クラス</strong><br /> （車両重量）</td>
                            <td align="center"><strong>軽自動車</strong><br /> <img src="/img/user/detail/kei.jpg" width="58" height="35" /><br /> （軽自動車）</td>
                            <td align="center"><strong>小型乗用車</strong><br /> <img src="/img/user/detail/kogata.jpg" width="61" height="35" /><br /> （1.0t以下）</td>
                            <td align="center"><strong>中型乗用車</strong><br /> <img src="/img/user/detail/tyuugata.jpg" width="61" height="35" /><br /> （1.5t以下）</td>
                            <td align="center"><strong>大型乗用車</strong><br /> <img src="/img/user/detail/oogata.jpg" width="61" height="35" /><br /> （1.5t超2.0t以下）</td>
                        </tr>
                        <tr>
                            <td rowspan="3" class="price_title">法定<br /> 費用</td>
                            <td width="100" height="35" class="price_title">重量税</td>
                            <td class="price_title">{if $item.mini_pd_weight_tax !== ""}{$item.mini_pd_weight_tax|number_format}円{else}&nbsp;{/if}</td>
                            <td class="price_title">{if $item.small_pd_weight_tax !== ""}{$item.small_pd_weight_tax|number_format}円{else}&nbsp;{/if}</td>
                            <td class="price_title">{if $item.middle_pd_weight_tax !== ""}{$item.middle_pd_weight_tax|number_format}円{else}&nbsp;{/if}</td>
                            <td class="price_title">{if $item.large_pd_weight_tax !== ""}{$item.large_pd_weight_tax|number_format}円{else}&nbsp;{/if}</td>
                        </tr>
                        <tr>
                            <td height="35" class="price_title">自賠責<br>※2020/4以降</td>
                            <td class="price_title">{if $item.mini_pd_insrnc_price !== ""}{$item.mini_pd_insrnc_price|number_format}円{else}&nbsp;{/if}</td>
                            <td class="price_title">{if $item.small_pd_insrnc_price !== ""}{$item.small_pd_insrnc_price|number_format}円{else}&nbsp;{/if}</td>
                            <td class="price_title">{if $item.middle_pd_insrnc_price !== ""}{$item.middle_pd_insrnc_price|number_format}円{else}&nbsp;{/if}</td>
                            <td class="price_title">{if $item.large_pd_insrnc_price !== ""}{$item.large_pd_insrnc_price|number_format}円{else}&nbsp;{/if}</td>
                        </tr>
                        <tr>
                            <td height="35" class="price_title">印紙代</td>
                            <td class="price_title">{if $item.mini_pd_stamp_price !== ""}{$item.mini_pd_stamp_price|number_format}円{else}&nbsp;{/if}</td>
                            <td class="price_title">{if $item.small_pd_stamp_price !== ""}{$item.small_pd_stamp_price|number_format}円{else}&nbsp;{/if}</td>
                            <td class="price_title">{if $item.middle_pd_stamp_price !== ""}{$item.middle_pd_stamp_price|number_format}円{else}&nbsp;{/if}</td>
                            <td class="price_title">{if $item.large_pd_stamp_price !== ""}{$item.large_pd_stamp_price|number_format}円{else}&nbsp;{/if}</td>
                        </tr>
                        <tr>
                            <td height="35" colspan="2">車検基本料金</td>
                            <td>{if $item.mini_base_price !== ""}{$item.mini_base_price|number_format}円{else}&nbsp;{/if}</td>
                            <td>{if $item.small_base_price !== ""}{$item.small_base_price|number_format}円{else}&nbsp;{/if}</td>
                            <td>{if $item.middle_base_price !== ""}{$item.middle_base_price|number_format}円{else}&nbsp;{/if}</td>
                            <td>{if $item.large_base_price !== ""}{$item.large_base_price|number_format}円{else}&nbsp;{/if}</td>
                        </tr>
                        <tr>
                            <td height="35" colspan="2">最大割引額</td>
                            <td class="serviceprice">{if $item.mini_disc !== ""}{$item.mini_disc|number_format}円{else}&nbsp;{/if}</td>
                            <td class="serviceprice">{if $item.small_disc !== ""}{$item.small_disc|number_format}円{else}&nbsp;{/if}</td>
                            <td class="serviceprice">{if $item.middle_disc !== ""}{$item.middle_disc|number_format}円{else}&nbsp;{/if}</td>
                            <td class="serviceprice">{if $item.large_disc !== ""}{$item.large_disc|number_format}円{else}&nbsp;{/if}</td>
                        </tr>
                        <tr>
                            <td height="50" colspan="2"><strong>最大割引適用後</strong></td>
                            <td class="serviceprice">
                                <font size="+1">{if $item.mini_disc_price !== ""}{$item.mini_disc_price|number_format}円{else}&nbsp;{/if}</font>
                            </td>
                            <td class="serviceprice">
                                <font size="+1">{if $item.small_disc_price !== ""}{$item.small_disc_price|number_format}円{else}&nbsp;{/if}</font>
                            </td>
                            <td class="serviceprice">
                                <font size="+1">{if $item.middle_disc_price !== ""}{$item.middle_disc_price|number_format}円{else}&nbsp;{/if}</font>
                            </td>
                            <td class="serviceprice">
                                <font size="+1">{if $item.large_disc_price !== ""}{$item.large_disc_price|number_format}円{else}&nbsp;{/if}</font>
                            </td>
                        </tr>
                    </table> {if 1 == 2} (*)車検費用合計には、各種法定費用（重量税・自賠責保険料・印紙代等）が含まれています。<br class="clear" /> {/if}
                    <p>※自賠責料金は2020年4月以降の金額を表示しています。</p>
                    <p>※お使いの車両の年式によっては重量税の費用が異なる場合がございます。</p>
                    <p>※平成30年5月以降は、タカタ製エアバックのリコールを受けていないと車検が通らなくなります。ご注意ください。</p>
                    <p class="plan_btn"><a href="/link_shop/{$shop_data.sid}/shop_detail_estimate/{$item.pb_no}/">このプランの見積りをする</a></p>
                </div> {/foreach}
                <h4 id="shopdata">店舗データ</h4>
                <table id="shopdata" cellspacing="0" cellpadding="0">
                    <tr>
                        <td class="datatitle">会社名・店舗名</td>
                        <td class="value">{$shop_data.sd_shop_nm}&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="datatitle">住所</td>
                        <td class="value">{$shop_data.sd_shop_address}&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="datatitle">TEL</td>
                        <td class="value">{$shop_data.sd_shop_tel}</strong> {if $shop_data.sd_tel_srvc == 't'}（店舗番号：{$shop_data.sid|string_format:"%04d"} とお伝えください）{/if}</td>
                    </tr>
                    <tr>
                        <td class="datatitle">営業時間/休業日</td>
                        <td class="value">{$shop_data.sd_shop_open} {$shop_data.sd_shop_off}&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="datatitle">アクセス</td>
                        <td class="value">{$shop_data.sd_shop_access}&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="datatitle">対応クレジット</td>
                        <td class="value"> {if $card_arr.flag == "t"}
                            <ul id="card"> {if $card_arr.card1 == "t"}
                                <li><img src="/img/user/detail/visa.gif" alt="VISA" /></li> {/if} {if $card_arr.card2 == "t"}
                                <li><img src="/img/user/detail/master.gif" alt="MasterCard" /></li> {/if} {if $card_arr.card3 == "t"}
                                <li><img src="/img/user/detail/jcb.gif" alt="JCB" /></li> {/if} {if $card_arr.card4 == "t"}
                                <li><img src="/img/user/detail/dc.gif" alt="DC" /></li> {/if} {if $card_arr.card5 == "t"}
                                <li><img src="/img/user/detail/ae.gif" alt="AMERICANEXPRESS" /></li> {/if} {if $card_arr.card6 == "t"}
                                <li><img src="/img/user/detail/uc.gif" alt="uc" /></li> {/if} {if $card_arr.card7 == "t"}
                                <li><img src="/img/user/detail/nicos.gif" alt="Nicos" /></li> {/if} {if $card_arr.card8 == "t"}
                                <li><img src="/img/user/detail/diners.gif" alt="Diners" /></li> {/if} {if $card_arr.card9 == "t"}
                                <li><img src="/img/user/detail/other.gif" alt="その他" /></li> {/if} </ul> {else} &nbsp; {/if} <br class="clear" /> </td>
                    </tr>
                    <tr>
                        <td class="datatitle">URL</td>
                        <td class="value">{if $shop_data.sd_shop_url != ""}<a href="{$shop_data.sd_shop_url}" target="_blank" rel="nofollow">{$shop_data.sd_shop_url}</a>{else}&nbsp;{/if}</td>
                    </tr>
                    <tr>
                        <td class="datatitle">備考</td>
                        <td class="value">{if $shop_data.sd_shop_memo != ""}{$shop_data.sd_shop_memo|nl2br}{else}&nbsp;{/if}</td>
                    </tr>
                </table>
            </div>
            <div id="content_right"> {if $coupon_flag == "t"}
                <h4 id="coupon">クーポン</h4>
                <div class="right_contentbox">
                    <dl id="contentdesc"> <dt><a href="/shop_coupon/{$shop_data.sid}/{if $type != ""}{$type}/{/if}"><img src="/img/user/detail/coupon.gif" alt="お得なクーポンはこちらから" width="240" height="75" border="0" /></a></dt> </dl>
                </div> {/if} {if $campaign != null}
                <h4 id="campaign">キャンペーン</h4>
                <div class="right_contentbox">
                    <h5 id="campaignname"><a href="/shop_campaign/{$shop_data.sid}/{if $type != " "}{$type}/{/if}">{$campaign.cam_name}</a></h5>
                    <dl id="contentdesc"> <dt><a href="/shop_campaign/{$shop_data.sid}/{if $type != ""}{$type}/{/if}">{if $campaign_img != ""}<img src="{$campaign_img}" width="{$campaign_img_w}" height="{$campaign_img_h}" alt="" border="0" />{else}<img src="/img/user/detail/img_campaign.gif" alt="キャンペーン画像" width="240" height="135" class="noimage" border="0" />{/if}</a></dt>
                        <dd>
                            <p>{$campaign.cam_detail|nl2br}</p>
                            <p id="campaign_period">期間：{$campaign.cam_start_date}～{$campaign.cam_end_date}</p>
                            <p><a href="/shop_campaign/{$shop_data.sid}/{if $type != " "}{$type}/{/if}">[ 詳細はこちら ]</a></p>
                        </dd>
                    </dl>
                </div> {/if} {if $service != null}
                <h4 id="service">サービス</h4>
                <div class="right_contentbox">
                    <dl id="contentdesc_servicelist"> {foreach from=$service item = "item" key = "key" name = "plan_loop"} <dt>{$item.srv_name}</dt>
                        <dd>{$item.srv_contents|nl2br}</dd> {/foreach} </dl>
                </div> {/if} {if $add_option != null}
                <h4 id="option">オプション</h4>
                <div class="right_contentbox">
                    <dl id="contentdesc_optionlist"> {foreach from=$add_option item = "item" key = "key" name = "plan_loop"} <dt>{$item.opt_name}{if $item.opt_price != ""}<br /><span class="option_price">{$item.opt_price}</span>{/if}</dt>
                        <dd>{$item.opt_contents|nl2br}</dd> {/foreach} </dl>
                </div> {/if} {if $dsc_data != null}
                <h4 id="discount">割引メニュー</h4>
                <div class="right_contentbox">
                    <ul id="contentdesc_discountlist"> {foreach from=$dsc_data item = "item" key = "key" name = "dsc_loop"}
                        <li><strong>{$item.db_menu_nm}{if $item.dd_dsc_nm != ""}[{$item.dd_dsc_nm}]{/if}</strong>▲{$item.dd_dsc_price}円</li> {/foreach} </ul>
                </div> {/if} {if $shop_data.sid == "21"}
                <!---▼スタッフ募集中---><a href="http://www.mic-info.co.jp/adoption/index.html" target="_blank"><img src="/img/user/detail/recruit.gif" class="hover_01" /></a>
                <!---▲スタッフ募集中--->{/if} </div> <br class="clear" /> </div>
        <div id="bottom">
            <p id="printout" onclick="print()">このページを印刷する</p>
            <p id="back"><a href="javascript:window.history.back();">←検索結果一覧へ戻る</a></p>
            <!-- ▼ソーシャルブックマーク-->
            <div class="sns" id="sns_shop" style="margin-top: 0px;">
                <!-- Place this tag where you want the +1 button to render. -->
                <div class="g-plusone" data-size="medium" data-annotation="none"> </div> {literal}
                <!-- Place this tag after the last +1 button tag. -->
                <script type="text/javascript">
                    window.___gcfg = {lang: 'ja'};
                    (function() {
                        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                        po.src = 'https://apis.google.com/js/plusone.js';
                        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                    })();
                </script> {/literal} <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.tokoton-navi.com/" data-text="車検費用が驚きの3万円台から！とことん車検ナビ" data-lang="ja" data-count="none">ツイート</a> {literal}
                <script>
                    !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
                </script> {/literal} <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.tokoton-navi.com%2F&amp;send=false&amp;layout=button_count&amp;width=70&amp;show_faces=false&amp;font=tahoma&amp;colorscheme=light&amp;action=like&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:70px; height:21px;" allowTransparency="true"></iframe> </div>
        </div> <br class="clear" />
        <!-- ▲ソーシャルブックマーク-->
        <p id="pagetop"><a href="#ALL" onclick="backToTop(); return false" onkeypress="backToTop(); return false">↑ページのトップへ</a></p> <br class="clear" />
        <p><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/knowledge_1.php">←車検期間・費用等の情報はこちら</a></p>
        <p><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/knowledge_10.php">←車検の見積もり方法を徹底解説！</a></p>
        <p><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/">←車検費用の比較・見積もりなら【とことん車検ナビ】ホーム</a></p>
    </div>
</div> {include file="ci:user/footer.tpl"}
