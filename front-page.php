<?php get_header(); ?>

            <main class="l-main">
                <article class="p-main-visual">
                    <div class="main-visual__img">
                        <img class="main-visual__img--sp" src="<?php echo esc_url(get_theme_file_uri('/images/mainvisual-sp.jpg') ); ?>" alt="メインビジュアル スマホ">
                        <img class="main-visual__img--pc" src="<?php echo esc_url(get_theme_file_uri('/images/mainvisual-pc@2x.jpg.webp') ); ?>" alt="メインビジュアル パソコン">
                    </div>
                    <h1 class="main-visual__heading c-heading--notosans"><?php echo esc_html__( 'Dammy Site', 'raisetech-hamburger_wp' ); ?> </h1>
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
                        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <?php get_template_part('template-parts/service'); ?>
                        </div>
                        <?php endwhile; ?>
                    </ul>
                    
                    <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                        <p class="u-no-posts">No posts</p>
                    <?php endif; ?>
                </div>

                <?php get_template_part('template-parts/access'); ?>
            </main>

        </div>
        <?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>