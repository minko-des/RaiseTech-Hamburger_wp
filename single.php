<?php get_header(); ?>

            <main class="l-main">
                <section class="p-single__main-visual">                  
                    <div class="main-visual__img">
                        <?php 
                        if (has_post_thumbnail()) {
                            the_post_thumbnail();
                        } else { ?>
                            <p class="u-no-posts">no image</p>
                        <?php } ?>
                    
                    </div>
                    <div class="main-visual__title">
                        <h1 class="c-heading--roboto"><?php the_title(); ?></h1>
                        
                        <div class="tags">
                            <?php the_tags(); ?>
                        </div>

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