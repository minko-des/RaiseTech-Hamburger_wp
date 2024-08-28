<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  <!-- レスポンシブに必要 -->
    <title>archive-search</title>
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
                    
                    <form class="p-search" method="get" action="#"> <!--フォーム全体を定義、ユーザーが入力したデータを送信-->
                        <input class="c-search-box" name="s" type="text" placeholder="" value="チーズバーガー">
                        <input class="c-search-btn" type="submit" value="検索">
                    </form>
                </div>
            </header>

            <main class="l-main">
                
                <section class="p-archive__main-visual">
                    <div class="main-visual__img">
                        <img class="main-visual__img--sp" src="./images/page-title_arcive@2x.jpg" alt="メインビジュアル スマホ">
                        <img class="main-visual__img--pc" src="./images/page-title_arcive_pc.jpg" alt="メインビジュアル パソコン">
                    </div>
                    <div class="main-visual__title">
                        <h1 class="c-heading--roboto">Search:</h1>
                        <p class="c-heading--notosans">チーズバーガー</p>
                    </div>
                </section>

                <div class="archive__content-area">
                    <section class="p-under-page__title c-heading--notosans">
                        <h2>小見出しが入ります</h2>
                        <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    </section>

                    <section class="p-archive__main-content">
                        <ul class="card-list">
                            <li class="p-card">
                                <figure class="card__img">
                                    <img src="./images/archive-card.jpg" alt="商品写真">
                                </figure>
                                <div class="card__text c-heading--notosans">
                                    <h4>チーズバーガー</h4>
                                    <dl>
                                        <dt>小見出しが入ります</dt>
                                        <dd>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</dd>
                                    </dl>
                                    <p class="c-more-btn"><a href="#">詳しく見る</a></p>
                                </div>
                            </li>
                            <li class="p-card">
                                <figure class="card__img">
                                    <img src="./images/archive-card.jpg" alt="商品写真">
                                </figure>
                                <div class="card__text c-heading--notosans">
                                    <h4>チーズバーガー</h4>
                                    <dl>
                                        <dt>小見出しが入ります</dt>
                                        <dd>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</dd>
                                    </dl>
                                    <p class="c-more-btn"><a href="#">詳しく見る</a></p>
                                </div>
                            </li>
                            <li class="p-card">
                                <figure class="card__img">
                                    <img src="./images/archive-card.jpg" alt="商品写真">
                                </figure>
                                <div class="card__text c-heading--notosans">
                                    <h4>チーズバーガー</h4>
                                    <dl>
                                        <dt>小見出しが入ります</dt>
                                        <dd>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</dd>
                                    </dl>
                                    <p class="c-more-btn"><a href="#">詳しく見る</a></p>
                                </div>
                            </li>
                            <li class="p-card">
                                <figure class="card__img">
                                    <img src="./images/archive-card.jpg" alt="商品写真">
                                </figure>
                                <div class="card__text c-heading--notosans">
                                    <h4>チーズバーガー</h4>
                                    <dl>
                                        <dt>小見出しが入ります</dt>
                                        <dd>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</dd>
                                    </dl>
                                    <p class="c-more-btn"><a href="#">詳しく見る</a></p>
                                </div>
                            </li>
                            <li class="p-card">
                                <figure class="card__img">
                                    <img src="./images/archive-card.jpg" alt="商品写真">
                                </figure>
                                <div class="card__text c-heading--notosans">
                                    <h4>チーズバーガー</h4>
                                    <dl>
                                        <dt>小見出しが入ります</dt>
                                        <dd>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</dd>
                                    </dl>
                                    <p class="c-more-btn"><a href="#">詳しく見る</a></p>
                                </div>
                            </li>
                        </ul>
                    </section>
                </div>
                    <section class="p-pagination">
                        <ul class="pagination__container">
                            <li class="page-count c-heading--roboto">page 1/10</li>
                            <li class="page-turn">
                                <a class="page-turn--left" href="#"><span class="c-arrow--left">矢印</span><span class="page-turn__txt">前へ</span></a>
                            </li>
                            <li class="page-number">
                                <ul class="page-number__list c-heading--roboto">
                                    <li><a class="u-currentPage" href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">6</a></li>
                                    <li><a href="#">7</a></li>
                                    <li><a href="#">8</a></li>
                                    <li><a href="#">9</a></li>
                                </ul>
                            </li>
                            <li class="page-turn">
                                <a class="page-turn--right" href="#"><span class="page-turn__txt">次へ</span><span class="c-arrow--right">矢印</span></a>
                            </li>
                        </ul>
                    </section>

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