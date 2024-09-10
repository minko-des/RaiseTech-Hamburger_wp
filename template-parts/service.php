<li class="p-service">
    <a href="<?php the_permalink(); ?>">
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
    </a>
</li>