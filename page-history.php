<?php
/*
Template Name: History Page
*/
?>
<!-- 内容を変更しない前提の固定ページ -->

<?php get_header(); ?>

            <main class="l-main">
                <section class="p-page__main-visual">
                    <div class="main-visual__img">
                        <img class="main-visual__img--sp" src="<?php echo get_theme_file_uri('/images/page_main-visual_sp.jpg'); ?>" alt="メインビジュアル スマホ">
                        <img class="main-visual__img--pc" src="<?php echo get_theme_file_uri('/images/page_main-visual_pc.jpg'); ?>" alt="メインビジュアル パソコン">
                    </div>
                    <div class="main-visual__title">
                        <h1 class="c-heading--roboto"><?php the_title(); ?></h1>
                    </div>
                </section>

                <div class="single__content-area">
                    <section class="p-under-page__title c-heading--notosans">
                        <h2>見出しh2</h2>
                        <p>Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。</p>
                    </section>

                    <section class="p-page__heading-container">
                        <h3>見出しh3</h3>
                        <h4>見出しh4</h4>
                        <h5>見出しh5</h5>
                        <h6>見出しh6</h6>
                    </section>

                    <div class="p-blockquote">
                        <blockquote>
                            Blockquote 引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
                        </blockquote>
                        <p class="source">出典元： <span>○○○○○○○○○○○○</span></p>
                    </div>

                    <section class="p-page__product">
                        <div class="product__content">
                            <div class="product__content__img">
                                <img src="<?php echo get_theme_file_uri('/images/single-content.jpg'); ?>" alt="商品写真">
                            </div>
                            <ul class="product__content__item-wrap">
                                <li class="product__content__item">
                                    <img src="<?php echo get_theme_file_uri('/images/single-content.jpg'); ?>" alt="商品写真">
                                    <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                </li>
                                <li class="product__content__item">
                                    <img src="<?php echo get_theme_file_uri('/images/single-content.jpg'); ?>" alt="商品写真">
                                    <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                </li>
                            </ul>
                        </div>
                    </section>

                    <section class="p-page__photo-list">
                        <div class="photo-top">
                            <img src="<?php echo get_theme_file_uri('/images/single-content.jpg'); ?>" alt="商品写真">
                        </div>
                        <div class="photo-set">
                            <img src="<?php echo get_theme_file_uri('/images/single-content.jpg'); ?>" alt="商品写真">
                            <img src="<?php echo get_theme_file_uri('/images/single-content.jpg'); ?>" alt="商品写真">
                            <img src="<?php echo get_theme_file_uri('/images/single-content.jpg'); ?>" alt="商品写真">
                            <img src="<?php echo get_theme_file_uri('/images/single-content.jpg'); ?>" alt="商品写真">
                            <img src="<?php echo get_theme_file_uri('/images/single-content.jpg'); ?>" alt="商品写真">
                            <img src="<?php echo get_theme_file_uri('/images/single-content.jpg'); ?>" alt="商品写真">
                            <img src="<?php echo get_theme_file_uri('/images/single-content.jpg'); ?>" alt="商品写真">
                            <img src="<?php echo get_theme_file_uri('/images/single-content.jpg'); ?>" alt="商品写真">
                            <img src="<?php echo get_theme_file_uri('/images/single-content.jpg'); ?>" alt="商品写真">
                        </div>
                    </section>

                    <section class="p-page__others">
                        <div class="p-page__others__lists-wrap">
                            <ul class="others__lists">
                                <li class="others__lists__item">
                                    <ul>
                                        <li>1.リストリストリスト</li>
                                        <li>2.リストリストリスト</li>
                                    </ul>
                                </li>
                                <li class="others__lists__item">
                                    <ul>
                                        <li>1.リスト2リスト2リスト2</li>
                                        <li>2.リスト2リスト2リスト2</li>
                                    </ul>
                                </li>
                                <li class="others__lists__item">
                                    <ul>
                                        <li>1.リストリストリスト</li>
                                        <li>2.リストリストリスト</li>
                                    </ul>
                                </li>
                            </ul>

                            <ul class="others__lists">
                                <li class="others__lists__item">
                                    <ul>
                                        <li>リストリストリスト</li>
                                        <li>リストリストリスト</li>
                                    </ul>
                                </li>
                                <li class="others__lists__item">
                                    <ul>
                                        <li>リスト2リスト2リスト2</li>
                                        <li>リスト2リスト2リスト2</li>
                                    </ul>
                                </li>
                                <li class="others__lists__item">
                                    <ul>
                                        <li>リストリストリスト</li>
                                        <li>リストリストリスト</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <div class="p-page__others__source">
                            <pre>
                                <code>
                                    &lt;html&gt;
                                    &nbsp;&nbsp;&lt;head&gt;
                                    &nbsp;&nbsp;&lt;/head&gt;
                                    &nbsp;&nbsp;&lt;body&gt;
                                    &nbsp;&nbsp;&lt;/body&gt;
                                    &lt;/html&gt;
                                </code>
                            </pre>
                        </div>

                        <div class="p-page__others__table">
                            <table>
                                <tr>
                                    <td class="col1">テーブル</td>
                                    <td class="col2">テーブル</td>
                                </tr>
                                <tr>
                                    <td class="col1">テーブル</td>
                                    <td class="col2">テーブル</td>
                                </tr>
                                <tr>
                                    <td class="col1">テーブル</td>
                                    <td class="col2">テーブル</td>
                                </tr>
                                <tr>
                                    <td class="col1">テーブル</td>
                                    <td class="col2">テーブル</td>
                                </tr>
                                <tr>
                                    <td class="col1">テーブル</td>
                                    <td class="col2">テーブル</td>
                                </tr>
                            </table>
                        </div>

                        <div class="p-page__others__btn">
                            <a href="#" class="c-search-btn"><span>ボタン</span></a>
                            <p class="c-heading--notosans">boldboldboldboldboldboldbold</p>
                        </div>
                    </section>

                </div>
            </main>

        </div>
        <?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>