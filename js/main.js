
/* ボタンクリックでサイドバーと背景の表示/非表示 */
$(document).ready(function() {

    const $menuBtn = $(".menu-btn");  //menuボタン
    const $sidebar = $(".p-sidebar");  //サイドバー
    const $closeBtn = $(".c-close-btn");  //×ボタン
    const $sidebarBg = $(".p-sidebar__bg");  //背景色

    //menuボタンクリックイベント
    $menuBtn.on("click", function() {
        $sidebar.addClass("u-open");  //サイドバースライドイン
        $sidebarBg.addClass("u-overlay"); //背景色透明度0.5
        
        toggleBodyScroll();  //ボタンクリック時に関数を呼び出す

        console.log("Script loaded");

    });

    //×ボタンクリックイベント
    $closeBtn.on("click", function() {
        $sidebar.removeClass("u-open");  //サイドバー非表示
        $sidebarBg.removeClass("u-overlay"); //背景色透明度0 
        
        toggleBodyScroll();  //ボタンクリック時に関数を呼び出す
    });


    
/* レスポンシブによるサイドバーと背景の削除（タブレット以下でサイドバー表示状態でpc画面幅に広げた場合）関数 */
    //ブレイクポイントのメディアクエリを設定
    const mediaQueryTablet = window.matchMedia("(min-width: 750px)");
    const mediaQueryPc = window.matchMedia("(min-width: 1250px)");

    //リスナーの設定
    mediaQueryPc.addEventListener("change", handlePcChange);  //addEventListenerメソッドを使用、'change' イベントはメディアクエリの状態変更時に処理を実行することができる。（handlePcChange関数の実行）

    //初回の状態チェック
    handlePcChange(mediaQueryPc);

    function handlePcChange(e) {
        console.log("handlePcChange called", e.matches);  //handlePcChange関数の確認（ウィンドウ幅1250px以上でtrue、以下でfalse）
        if (e.matches) {
            $sidebarBg.removeClass("u-overlay");
            $sidebar.removeClass("u-open");
            $("body").removeClass("u-noScroll--body")
            $(".l-sidebar").removeClass("u-noScroll--sidebar");
        }
    }



/* サイドバー表示時の画面スクロール切替え関数 */
    function toggleBodyScroll() {

        if ($sidebar.hasClass("u-open")) {
            $("body").addClass("u-noScroll--body");
            $(".l-sidebar").addClass("u-noScroll--sidebar");
        } else {
            $("body").removeClass("u-noScroll--body");
            $(".l-sidebar").removeClass("u-noScroll--sidebar");
        }
    }



/* 写真の複製処理 */
    const $photoSet = $(".photo-set");
    const imageUrl = "./images/single-content.jpg"; //画像のURL
    const numberOfImages = "8"; //画像の数

    for (let i = 0; i < numberOfImages; i++) { //ループ処理
    const $img = $("<img>").attr("src", imageUrl).attr("alt", "写真一覧"); //新しいimg要素を生成し画像のパス、alt属性を設定、変数$imgに格納
    $photoSet.append($img); //$photoSet要素に$img要素を追加
    }

});
