<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('UTF-8'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  <!-- レスポンシブに必要 -->
    <title><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="keywords" content="ページに関連するキーワードを記述">

    <?php wp_head(); ?>
</head>
<body>
    <div class="p-wrapper">
        <div class="wrapper__main">

            <header class="l-header">
                <div class="p-header">
                    <p class="header__heading c-heading--roboto"><a href="<?php echo esc_url( home_url('/') ); ?>"><?php bloginfo('name'); ?></a></p>
                    <button class="menu-btn c-heading--roboto"><span>Menu</span></button>
                    
                    <?php get_search_form(); ?>
                </div>
            </header>