<?php get_header(); ?>

            <main class="l-main">
                <section class="p-archive__main-visual">
                    <div class="main-visual__img">
                        <img class="main-visual__img--sp" src="<?php echo get_theme_file_uri('/images/cooked-foods-750073-2.png'); ?>" alt="メインビジュアル スマホ">
                        <img class="main-visual__img--pc" src="<?php echo get_theme_file_uri('/images/cooked-foods-750073-2.png'); ?>" alt="メインビジュアル パソコン">
                    </div>
                    <div class="main-visual__title">
                        <h1 class="c-heading--roboto">Menu:</h1>
                        <p class="c-heading--notosans"><?php the_category(); ?></p>
                    </div>
                </section>

                <div class="archive__content-area">
                    <section class="p-under-page__title c-heading--notosans">
                        <h2>小見出しが入ります</h2>
                        <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    </section>
                    <section class="p-archive__main-content">
                        <ul class="card-list">
                            <?php
                            if (have_posts()) :
                                while (have_posts()) : the_post();
                            ?>
                            <?php get_template_part('template-parts/post-card'); ?>
                                <?php endwhile; ?>
                            <?php else : ?>
                                <p>投稿がありません</p>
                            <?php endif ; ?>
                        </ul>
                    </section>
                </div>

                <section class="p-pagination">
                    <?php get_template_part('template-parts/pagination'); ?>
                </section>

            </main>
        </div>
        <?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>