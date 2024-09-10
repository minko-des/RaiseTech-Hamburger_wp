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
            <?php
            $content = get_the_content();  // 投稿のコンテンツを取得

            $h2_match = '';
            $p_match = '';
            
            // 最初の <h2> タグを取得
            if (preg_match('/<h2[^>]*>(.*?)<\/h2>/', $content, $h2_matches)) {
                $h2_match = $h2_matches[0];
            }
            
            // 最初の <p> タグを取得
            if (preg_match('/<p>(.*?)<\/p>/', $content, $p_matches)) {
                $p_match = $p_matches[0];
            }
            
            // 両方の結果をまとめて出力
            echo $h2_match . $p_match;
            ?>
        </dl>
        <p class="c-more-btn"><a href="<?php the_permalink(); ?>">詳しく見る</a></p>
    </div>
</li>