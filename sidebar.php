<aside class="l-sidebar">
    <div class="p-sidebar">
        <button class="c-close-btn"><span>クローズボタン</span></button>
        <h2 class="sidebar__title c-heading--roboto">Menu</h2>
        
        <nav class="p-sidebar__nav">

            <?php
            wp_nav_menu(array(
                'theme_location' => 'category_nav', //'category_navigation'に登録したメニューを表示
                'menu_class'     => 'sidebar__nav__list', //メニュー（カテゴリ名に当たる部分）のクラス名を変更（元々のスタイルが当たるように）
                'container'      => false, //自動生成されるdivタグ要素生成を防ぐ
            ));    //サブメニュー（各投稿項目）は'menu_class'の子要素になる、クラス名sub-menuが付与される
            ?>

        </nav>
    </div>
</aside>
<div class="p-sidebar__bg"></div>



<!--
wp_nav_menu()関数は下記HTMLを出力する

<div class="menu-top-menu-container">
  <ul id="menu-top-menu" class="menu">
    <li id="menu-item-212" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-212">
      <a href="http://localhost/minimalist/">ホーム</a>
    </li>
    <li id="menu-item-213" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-213">
      <a href="http://localhost/minimalist/blog/">Blog</a>
    </li>
  </ul>
</div>
-->