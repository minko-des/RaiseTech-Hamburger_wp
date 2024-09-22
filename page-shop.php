<?php
/*
Template Name: Shop Page
*/
?>

<?php get_header(); ?>

            <main class="l-main">
                <section class="p-page__main-visual">
                    <div class="main-visual__img">
                        <img class="main-visual__img--sp" src="<?php echo esc_url(get_theme_file_uri('/images/page_main-visual_sp.jpg') ); ?>" alt="メインビジュアル スマホ">
                        <img class="main-visual__img--pc" src="<?php echo esc_url(get_theme_file_uri('/images/page_main-visual_pc.jpg.webp') ); ?>" alt="メインビジュアル パソコン">
                    </div>
                    <div class="main-visual__title">
                        <h1 class="c-heading--roboto"><?php the_title(); ?></h1>
                    </div>
                </section>

                <div class="p-single__content">
                    <?php the_content(); ?>
                    <?php wp_link_pages(); ?>
                </div>
            </main>

        </div>
        <?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>