<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('UTF-8'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  <!-- レスポンシブに必要 -->
    <title><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="keywords" content="ページに関連するキーワードを記述">
    <!--
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="icon" href="#" sizes="16x16" type="image/png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>  jqueryのライブラリ読み込み 
    <script defer src="./js/main.js"></script>   javaScriptファイル読み込み 
    -->

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