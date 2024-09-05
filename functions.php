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
    add_theme_support( 'menus' );           //テーマにメニューという項目、機能をサポートすることを許可
    
    register_nav_menus( array(       //カスタムメニューの有効化（管理画面の外観-メニューで編集できるようになる）
        'footer_nav' => esc_html__( 'footer navigation', 'RaiseTech-Hamburger_wp' ),
        'category_nav' => esc_html__( 'category navigation', 'RaiseTech-Hamburger_wp' ),
    ) );
    add_theme_support( 'editor-styles' );
    add_editor_style();
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
    add_action( 'wp_enqueue_scripts', 'readScript');
    //add_action() は、WordPressのアクションフックに関数を登録するための関数。
    //第１引数：スクリプトやスタイルシートを読み込むタイミングを指すアクションフック（ページの <head> セクションにスクリプトやスタイルシートを追加する直前に実行される


    add_action( 'init', 'cpt_register_services' );
    /**
     * カスタム投稿タイプ service を登録する。
     *
     * @link http://codex.wordpress.org/Function_Reference/register_post_type
     */
    function cpt_register_services() {
        $labels = array(
            'name'               => _x( 'Services', 'post type general name', 'your-plugin-textdomain' ), //投稿タイプの一般名。通常は複数形
            'singular_name'      => _x( 'Service', 'post type singular name', 'your-plugin-textdomain' ), //この投稿タイプの 1 つのオブジェクトの名前
            'menu_name'          => _x( 'Service', 'admin menu', 'your-plugin-textdomain' ),
            'name_admin_bar'     => _x( 'Service', 'add new on admin bar', 'your-plugin-textdomain' ),
            'add_new'            => _x( 'Add New', 'Service', 'your-plugin-textdomain' ),
            'add_new_item'       => __( 'Add New Service', 'your-plugin-textdomain' ),
            'new_item'           => __( 'New Service', 'your-plugin-textdomain' ),
            'edit_item'          => __( 'Edit Service', 'your-plugin-textdomain' ),
            'view_item'          => __( 'View Service', 'your-plugin-textdomain' ),
            'all_items'          => __( 'All Services', 'your-plugin-textdomain' ),
            'search_items'       => __( 'Search Services', 'your-plugin-textdomain' ),
            'parent_item_colon'  => __( 'Parent Services:', 'your-plugin-textdomain' ),
            'not_found'          => __( 'No Services found.', 'your-plugin-textdomain' ),
            'not_found_in_trash' => __( 'No Services found in Trash.', 'your-plugin-textdomain' )
        );

        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'Service' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => 5,
            'show_in_rest'       => true,
            'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields' ) //デフォルトのカスタムフィールドも有効化
        );

        register_post_type( 'Service', $args ); //カスタム投稿タイプを作成する関数
    }

?>