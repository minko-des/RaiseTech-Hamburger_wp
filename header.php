<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>"> <!-- 管理画面から使用言語を変更する -->
<head>
    <meta charset="<?php esc_attr(bloginfo('UTF-8') ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  <!-- レスポンシブに必要 -->
    <meta name="description" content="<?php esc_attr(bloginfo('description') ); ?>">
    <meta name="keywords" content="ページに関連するキーワードを記述">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?> <!-- 他のプラグインやスクリプトがここに適切なコンテンツやコードを挿入できるようになります。 -->
    
    <div class="p-wrapper">
        <div class="wrapper__main">

            <header class="l-header">
                <div class="p-header">
                    <p class="header__heading c-heading--roboto"><a href="<?php echo esc_url( home_url('/') ); ?>"><?php esc_html(bloginfo('name') ); ?></a></p>
                    <button class="menu-btn c-heading--roboto"><span>Menu</span></button>
                    
                    <?php get_search_form(); ?>
                </div>
            </header>