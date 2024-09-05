<li class="p-card">
    <figure class="card__img">
        <?php 
        if (has_post_thumbnail()) {
            the_post_thumbnail();   //投稿のアイキャッチ画像を出力
        } else {
            echo '<p>商品の写真</P>';
        }
        ?>
    </figure>
    <div class="card__text c-heading--notosans">
        <h4><?php the_title(); ?></h4>
        <dl>
            <dt><?php the_content(); ?></dt>
            <dd><?php the_excerpt(); ?></dd>
        </dl>
        <p class="c-more-btn"><a href="<?php the_permalink(); ?>">詳しく見る</a></p>
    </div>
</li>