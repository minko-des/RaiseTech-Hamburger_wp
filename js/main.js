/*
document.addEventListener("DOMContentLoaded", function() {
    const menuBtn = document.querySelector(".c-menu-btn");
    const slidebar = document.querySelector(".l-sidebar");
    const closeBtn = document.querySelector(".c-close-btn");

    menuBtn.addEventListener("click", function() {
        slidebar.classList.add("open");
    });

    closeBtn.addEventListener("click", function() {
        slidebar.classList.remove("open");
    });
});
*/

/* サイドバー/背景の表示/非表示 */
$(document).ready(function() {
    const $menuBtn = $(".menu-btn");  //menuボタン
    const $sidebar = $(".p-sidebar");  //サイドバー
    const $closeBtn = $(".c-close-btn");  //×ボタン
    const $sidebarBg = $(".p-sidebar__bg");  //背景色

    //menuボタンクリックイベント
    $menuBtn.on("click", function() {
        $sidebar.addClass("u-open");  //サイドバースライドイン
        $sidebarBg.addClass("u-overlay"); //背景色透明度0.5
    });

    //×ボタンクリックイベント
    $closeBtn.on("click", function() {
        $sidebar.removeClass("u-open");  //サイドバー非表示
        $sidebarBg.removeClass("u-overlay"); //背景色透明度0 
    });


    
/* pc画面時のサイドバー/背景の削除 */
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
        }
    }
});