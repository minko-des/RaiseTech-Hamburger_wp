<?php get_header(); ?>

            <main class="l-main">
                <section class="p-single__main-visual">                  
                    <div class="main-visual__img">
                    <?php 
                        if (has_post_thumbnail()) {
                            the_post_thumbnail();   //投稿のアイキャッチ画像を出力
                        } else {
                            echo '<p>商品の写真</p>';
                        }
                    ?>
                    </div>
                    <div class="main-visual__title">
                        <h1 class="c-heading--roboto"><?php the_title(); ?></h1>
                    </div>
                </section>

                <div class="p-single__content">

                    <?php the_content(); ?>

                </div>

            </main>
        </div>
        <?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>