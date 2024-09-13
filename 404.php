<?php get_header(); ?>
            
            <main class="l-main">
                
                <div class="p-page404">
                    <div class="p-page404__title">
                        <h1>404</h1>
                        <p>page not found</p>
                    </div>
                    <div class="p-page404__text">
                        <p>お探しのページが見つかりませんでした。<br>
                            URLが間違っているか、ページが存在しません。
                        </p>
                    </div>
                
                    <div class="p-page404__btn .c-search-btn">
                        <a href="<?php echo esc_url( home_url('/') ); ?>" class="c-search-btn"><span>TOPページへ戻る</span></a>
                    </div>
                </div>

            </main>
        </div>
        <?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>