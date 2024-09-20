<?php get_header(); ?>
            
            <main class="l-main">
                <section class="p-archive__main-visual">
                    <div class="main-visual__img">
                        <img class="main-visual__img--sp" src="<?php echo get_theme_file_uri('/images/page-title_arcive@2x.jpg'); ?>" alt="メインビジュアル スマホ">
                    </div>
                    <div class="main-visual__title">
                        <h1 class="c-heading--roboto">Search:</h1>
                        <p class="c-heading--notosans"><?php the_search_query(); ?></p>
                    </div>
                </section>

                <section class="p-archive__title c-heading--notosans">
                    <h2>小見出しが入ります</h2>
                    <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                </section>
                <section class="p-archive__content">
                    <ul class="card-list">
                        <?php
                        if (have_posts()) :
                            while (have_posts()) : the_post();
                        ?>
                        <?php get_template_part('template-parts/post-card'); ?>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <p>記事がありません</p>
                        <?php endif ; ?>
                    </ul>
                </section>

                <section class="p-pagination">
                    <?php get_template_part('template-parts/pagination'); ?>
                </section>

            </main>
        </div>
        <?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>