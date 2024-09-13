        <footer class="l-footer">
            <div class="p-footer">

                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer_nav', //'footer_navigation'に登録したメニューを表示
                    'menu_class'     => 'footer__nav', //メニューのクラス名を変更（元々のスタイルが当たるように）
                    'container'      => false, //自動生成されるdivタグ要素生成を防ぐ
                ));    //サブメニュー（各投稿項目）は'menu_class'の子要素になる、クラス名sub-menuが付与される
                ?>

                <small class="c-copyright">Copyright: RaiseTech</small>
            </div>
        </footer>

    <?php wp_footer(); ?>
    </body>
</html>