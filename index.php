<?php get_header(); ?>
            <main class="l-main">
                <article class="p-main-visual">
                    <div class="main-visual__img">
                        <img class="main-visual__img--sp" src="<?php echo get_theme_file_uri('/images/mainvisual-sp.jpg'); ?>" alt="メインビジュアル スマホ">
                        <img class="main-visual__img--pc" src="<?php echo get_theme_file_uri('/images/mainvisual-pc@2x.jpg'); ?>" alt="メインビジュアル パソコン">
                    </div>
                    <h1 class="main-visual__heading c-heading--notosans">ダミーサイト（indexﾌｧｲﾙ）</h1>
                </article>
                
                <div class="p-content-wrap">
                    <?php
                    $args = array(
                        'post_type' => 'service', //投稿タイプのスラッグ
                        'posts_per_page' => 2,      // 2件のみ表示
                    );
                    $the_query = new WP_Query($args); ?>
                    <?php if ($the_query->have_posts()) : ?>

                    <ul class="content">
                        <?php
                        while ($the_query->have_posts()) : $the_query->the_post();
                        ?>

                        <?php get_template_part('template-parts/service'); ?>

                        <?php endwhile; ?>
                    </ul>
                    
                    <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                        <p>まだ作品がありません。</p>
                    <?php endif; ?>
                </div>

                <article class="p-access">
                    <img class="access__img" src="<?php echo get_theme_file_uri('/images/map.jpg'); ?>" alt="マップ画像">
                    <div class="overlay--all"></div>
                    <div class="overlay--half"></div>
                    <div class="p-access__text">
                        <h2 class="access__text__title c-heading--notosans">見出しが入ります</h2>
                        <div class="c-line"></div>
                        <p class="c-heading--notosans">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    </div>
                </article>
            </main>
        </div>
        <?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>