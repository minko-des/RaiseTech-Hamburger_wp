<?php get_header(); ?>
            <main class="l-main">
                <article class="p-main-visual">
                    <div class="main-visual__img">
                        <img class="main-visual__img--sp" src="<?php echo get_theme_file_uri('/images/mainvisual-sp.jpg'); ?>" alt="メインビジュアル スマホ">
                        <img class="main-visual__img--pc" src="<?php echo get_theme_file_uri('/images/mainvisual-pc@2x.jpg'); ?>" alt="メインビジュアル パソコン">
                    </div>
                    <h1 class="main-visual__heading c-heading--notosans">ダミーサイト</h1>
                </article>
                
                <div class="p-content-wrap">
                    <?php
                    $args = array(
                        'post_type' => 'service', //投稿タイプのスラッグ
                        'posts_per_page' => 2,      // 2件のみ表示
                    );
                    $the_query = new WP_Query($args); ?>
                    <?php if ($the_query->have_posts()) : ?>

                    <ul class="p-content">
                        <?php
                        $counter = 0; //カウンターを初期化
                        while ($the_query->have_posts()) : $the_query->the_post();
                            $counter++; //カウンターをインクリメント、値を1ずつ増やす
                            $class = ($counter == 2) ? " second-item" : ''; //2件目の投稿に特定のクラスを追加
                        ?>
                        <li class="p-service--takeout<?php echo $class; ?>">
                            <div class="p-service__title">
                                <h2 class="service__title__label c-heading--roboto"><?php the_title(); ?></h2>
                                <div class="c-line"></div>
                            </div>
                            <ul class="p-description-wrap">
                                <li class="p-description">
                                    <dl class="description__list">
                                        <dt><?php echo get_post_meta(get_the_ID(),'s_dr-1_dt',true); ?></dt> <!--trueは指定された値を文字列で返す-->
                                        <dd><?php echo get_post_meta(get_the_ID(),'s_dr-1_dd',true); ?></dd>
                                    </dl>
                                </li>
                                <li class="p-description">
                                    <dl class="description__list">
                                        <dt><?php echo get_post_meta(get_the_ID(),'s_dr-2_dt',true); ?></dt>
                                        <dd><?php echo get_post_meta(get_the_ID(),'s_dr-2_dd',true); ?></dd>
                                    </dl>
                                </li>
                            </ul>
                        </li>
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