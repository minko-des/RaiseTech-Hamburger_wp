<?php

function custom_theme_support() {
    add_theme_support( 'html5', array(   //add_theme_support() テーマに必要な機能を有効化するための関数
        'search-form',                   //吐き出されるコードをデフォルトの XHTML からHTML5（ Living Standard ）に
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );
    add_theme_support( 'post-thumbnails' );  //投稿ページでアイキャッチ画像を扱えるようにする
    add_theme_support( 'title-tag' );        //テーマにタイトルタグのサポートを許可する
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    add_theme_support( 'custom-background', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    ));
    add_theme_support( 'align-wide' );
    add_theme_support( 'custom-header' );
    add_theme_support( 'editor-styles' );
    add_editor_style();
    add_theme_support( 'automatic-feed-links' );  //RSSフィードリンクを自動的に追加する

    register_block_style(
        'core/paragraph', //ブロックタイプの指定（段落ブロック）
        array(
            'name' => 'custom-style',
            'label' => __( 'Custom Style', 'raisetech-hamburger_wp' ),
        )
    );
    register_block_pattern(
        'my-plugin/my-block-pattern', // パターンの名前
        array(
            'title'       => __( 'My Block Pattern', 'raisetech-hamburger_wp' ), // パターンのタイトル
            'description' => _x( 'A custom block pattern for my plugin.', 'Block pattern description', 'raisetech-hamburger_wp' ), // パターンの説明
            'categories'  => array( 'my-pattern-category' ), // パターンのカテゴリー
            'content'     => '<!-- wp:paragraph --><p>' . __( 'This is a custom block pattern.', 'raisetech-hamburger_wp' ) . '</p><!-- /wp:paragraph -->', // パターンの内容);
        )
    );
    register_nav_menus( array(       //カスタムメニューの有効化（管理画面の外観-メニューで編集できるようになる）
        'footer_nav' => esc_html__( 'footer navigation', 'raisetech-hamburger_wp' ),
        'category_nav' => esc_html__( 'category navigation', 'raisetech-hamburger_wp' ), //( 管理画面でのメニュー名 ,翻訳ファイル参照)
        // ↑ 識別キー                    // ↑ 翻訳可能な名前
    ) );
}
add_action( 'after_setup_theme', 'custom_theme_support' );


function readScript() {
    //googleフォントの読み込み
    wp_enqueue_style( 'google-fonts_noto', 'https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap', array(), ''); //バージョンパラメータを null に設定することで、WordPressは自動的にクエリパラメータを付けないようにします
    wp_enqueue_style( 'google-fonts_roboto', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap', array(), ''); //バージョンパラメータを null に設定することで、WordPressは自動的にクエリパラメータを付けないようにします

    //css,jsの読み込み　（第１引数：ハンドリングするための名前（ID名）、第２引数：ファイルパス、第３引数：ｽﾀｲﾙｼｰﾄの依存関係を指定、第４引数：ﾌｧｲﾙﾊﾞｰｼﾞｮﾝ、第５引数：どこで使うフファイルか（省略可）
    wp_enqueue_style( 'style', get_theme_file_uri('/css/style.css'), array(), '1.0.0');
    wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), '', true); //jqueryの本体読み込み
    wp_enqueue_script( 'script', get_theme_file_uri('/js/main.js'), array('jquery'), '', true); //arrayは依存関係を指定、このjsﾌｧｲﾙは上行のjqueryを使って書かれたという意味
}
add_action( 'wp_enqueue_scripts', 'readScript' );
//add_action() は、WordPressのアクションフックに関数を登録するための関数。
//第１引数：スクリプトやスタイルシートを読み込むタイミングを指すアクションフック（ページの <head> セクションにスクリプトやスタイルシートを追加する直前に実行される


// ブロックエディタに適用されるCSSを無効化
function remove_block_library_css() {
    wp_dequeue_style( 'wp-block-library' ); // すべてのブロックCSSを無効にする
}
add_action( 'wp_enqueue_scripts', 'remove_block_library_css' );


//コメントの返信機能を実装するために必要なスクリプトで、コメントの「返信」ボタンをクリックした際に動作します。
function mytheme_enqueue_comment_reply_script() {
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_comment_reply_script' );


//テキストドメインを読み込み
function theme_slug_setup() {
    load_theme_textdomain( 'raisetech-hamburger_wp', get_template_directory() . '/languages' ); //第一引数はテキストドメイン,第二引数は翻訳ファイルの設置場所
}
add_action( 'after_setup_theme', 'theme_slug_setup' );
    

//ウィジェットエリア登録
function my_theme_widgets_init() {
    register_sidebar( array(
        'name'          => 'Sidebar',
        'id'            => 'sidebar-1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'my_theme_widgets_init' );
    
?>