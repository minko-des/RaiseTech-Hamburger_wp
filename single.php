<?php get_header(); ?>

            <main class="l-main">
                <section class="p-single__main-visual">                  
                    <div class="main-visual__img">
                    <?php 
                        if (has_post_thumbnail()) {
                            the_post_thumbnail();   //投稿のアイキャッチ画像を出力
                        } else {
                            echo '<p>商品の写真</P>';
                        }
                    ?>
                    </div>
                    <div class="main-visual__title">
                        <h1 class="c-heading--roboto"><?php the_title(); ?></h1>
                    </div>
                </section>

                <div class="single__content-area">

                    <?php the_content(); ?>

                    <!-- 
                    <section class="p-under-page__title c-heading--notosans">
                        <h2>見出しh2</h2>
                        <p>Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。</p>
                    </section>

                    <section class="p-single__heading-container">
                        <h3>見出しh3</h3>
                        <h4>見出しh4</h4>
                        <h5>見出しh5</h5>
                        <h6>見出しh6</h6>
                    </section>

                    <div class="p-blockquote">
                        <blockquote>
                            Blockquote 引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
                        </blockquote>
                        <p>出典元： <span>○○○○○○○○○○○○</span></p>
                    </div>

                    <section class="p-single__product">
                        <div class="product__content">
                            <div class="product__content__img">
                                
                                <img src="./images/single-content.jpg" alt="商品写真">
                            </div>
                            <ul class="product__content__item-wrap">
                                <li class="product__content__item">
                                    <img src="./images/single-content.jpg" alt="商品写真">
                                    <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                </li>
                                <li class="product__content__item">
                                    <img src="./images/single-content.jpg" alt="商品写真">
                                    <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                </li>
                            </ul>
                        </div>
                    </section>

                    <section class="p-single__photo-list">
                        <div class="photo-top">
                            <img src="./images/single-content.jpg" alt="商品写真">
                        </div>
                        <div class="photo-set">
                            <img src="./images/single-content.jpg" alt="商品写真">
                        </div>
                    </section>

                    <section class="others">
                        <div class="p-single__others__lists-wrap">
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

                        <div class="p-single__others__source">
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

                        <div class="p-single__others__table">
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

                        <div class="p-single__others__btn">
                            <a href="#" class="c-search-btn"><span>ボタン</span></a>
                            <p class="c-heading--notosans">boldboldboldboldboldboldbold</p>
                        </div>
                    </section>
                    -->

                </div>

            </main>
        </div>

        <?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>