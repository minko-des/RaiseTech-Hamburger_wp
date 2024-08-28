<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  <!-- レスポンシブに必要 -->
    <title>page</title>
    <meta name="description" content="ページの内容を表す文章を書く、検索結果のタイトル下に表示される">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="./css/style.css">
    <!-- Google Fonts Link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="icon" href="#" sizes="16x16" type="image/png">  <!-- ファビコン読み込み -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>  <!-- jqueryのライブラリ読み込み -->
    <script defer src="./js/main.js"></script>  <!-- javaScriptファイル読み込み -->
</head>
<body>
    <div class="p-wrapper">
        <div class="wrapper__main">

            <header class="l-header">
                <div class="p-header">
                    <p class="header__heading c-heading--roboto">Hamburger</p>
                    <button class="menu-btn c-heading--roboto"><span>Menu</span></button>
                    <form class="p-search" method="get" action="#">
                        <input class="c-search-box" name="s" type="text" placeholder="">
                        <input class="c-search-btn" type="submit" value="検索">
                    </form>
                </div>
            </header>

            <main class="l-main">
                
                <section class="p-page__main-visual">
                    <div class="main-visual__img">
                        <img class="main-visual__img--sp" src="./images/page_main-visual_sp.jpg" alt="メインビジュアル スマホ">
                        <img class="main-visual__img--pc" src="./images/page_main-visual_pc.jpg" alt="メインビジュアル パソコン">
                    </div>
                    <div class="main-visual__title">
                        <h1 class="c-heading--roboto">ショップについて</h1>
                    </div>
                </section>

                <div class="single__content-area">

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

                </div>
            </main>
        </div>

        <aside class="l-sidebar">
            <div class="p-sidebar">
                <button class="c-close-btn"><span>クローズボタン</span></button>
                <h2 class="sidebar__title c-heading--roboto">Menu</h2>
                <nav class="p-sidebar__nav">
                    <ul class="sidebar__nav__list">
                        <li class="c-heading--notosans"><a href="#">バーガー</a>
                            <ul class="sidebar__nav__list__item">
                                <li><a href="#">ハンバーガー</a></li>
                                <li><a href="#">チーズバーガー</a></li>
                                <li><a href="#">テリヤキバーガー</a></li>
                                <li><a href="#">アボカドバーガー</a></li>
                                <li><a href="#">フィッシュバーガー</a></li>
                                <li><a href="#">ベーコンバーガー</a></li>
                                <li><a href="#">チキンバーガー</a></li>
                            </ul>
                        </li>
                        <li class="c-heading--notosans"><a href="#">サイド</a>
                            <ul class="sidebar__nav__list__item">
                                <li><a href="#">ポテト</a></li>
                                <li><a href="#">サラダ</a></li>
                                <li><a href="#">ナゲット</a></li>
                                <li><a href="#">コーン</a></li>
                            </ul>
                        </li>
                        <li class="c-heading--notosans"><a href="#">ドリンク</a>
                            <ul class="sidebar__nav__list__item">
                                <li><a href="#">コーラ</a></li>
                                <li><a href="#">ファンタ</a></li>
                                <li><a href="#">オレンジ</a></li>
                                <li><a href="#">アップル</a></li>
                                <li><a href="#">紅茶<span>(Ice/Hot)</span></a></li>
                                <li><a href="#">コーヒー<span>(Ice/Hot)</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="p-sidebar__bg"></div>
    </div>

    <footer class="l-footer">
        <div class="p-footer">
            <p class="footer__nav">
                <a href="#">ショップ情報</a><span class="footer__nav__vertical-line"></span><a href="#">ヒストリー</a>
            </p>
            <small class="c-copyright">Copyright: RaiseTech</small>
        </div>
    </footer>

</body>
</html>