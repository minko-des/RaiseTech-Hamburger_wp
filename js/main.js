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

$(document).ready(function() {
    const $menuBtn = $(".c-menu-btn");  //menuボタン
    const $sidebar = $(".p-sidebar");  //サイドバー
    const $closeBtn = $(".c-close-btn");  //×ボタン
    const $sidebarBg = $(".p-sidebar__bg")  //背景色

    //menuボタンクリックでサイドバー表示
    $menuBtn.on("click", function() {
        $sidebar.addClass("u-open");
        $sidebarBg.addClass("u-overlay");
    });

    //×ボタンクリックでサイドバー非表示
    $closeBtn.on("click", function() {
        $sidebar.removeClass("u-open");
        $sidebarBg.removeClass("u-overlay");
    });
});

