    <div id="content_left">
      <h1>プレビュー</h1>
      <ul class="mainmenu">
        <li><a href="http://www.tokoton-navi.com/shop_detail/{$sid}/manager/" target="_blank">店舗詳細画面を見る&nbsp;&#x00bb;</a></li>
        <li><a href="http://www.tokoton-navi.com/search/key_{$sid|string_format:"%04d"}/type_manager/" target="_blank">検索結果画面を見る&nbsp;&#x00bb;</a></li>
      </ul>
      <h1>店舗情報の設定</h1>
      <ul class="mainmenu">
        <li{if $now_page == "shopinfo"} class="act"{/if}><a href="/client/shopinfo/">基本情報</a></li>
        <li{if $now_page == "intro"} class="act"{/if}><a href="/client/intro/">紹介文と画像</a></li>
        <li{if $now_page == "plan"} class="act"{/if}><a href="/client/plan/">料金プラン</a>
		{if $now_page == "plan"}
		<ul class="submenu">
			<li{if $sub_menu == "list"} class="act"{/if}><a href="/client/plan/">料金プラン一覧</a></li>
			<li{if $sub_menu == "item"} class="act"{/if}><a href="/client/plan_item/">料金項目編集</a></li>
		</ul>
		{/if}
	</li>
        <li{if $now_page == "discount"} class="act"{/if}><a href="/client/discount/">割引メニュー</a></li>
        <li{if $now_page == "add_option"} class="act"{/if}><a href="/client/add_option/">オプションメニュー</a></li>
        <li{if $now_page == "service"} class="act"{/if}><a href="/client/service/">サービス・特典</a></li>
        <li{if $now_page == "campaign"} class="act"{/if}><a href="/client/campaign/">キャンペーン</a></li>
        <li{if $now_page == "coupon"} class="act"{/if}><a href="/client/coupon/">WEBクーポン</a></li>
        <li{if $now_page == "shop_option"} class="act"{/if}><a href="/client/shop_option/">サービスアイコン</a></li>
        <li{if $now_page == "mail_estimate"} class="act"{/if}><a href="/client/mail_estimate/">見積りメール</a></li>
        <li{if $now_page == "statchange"} class="act"{/if}><a href="/client/statchange/">サイト公開設定</a></li>
      </ul>
    </div>
