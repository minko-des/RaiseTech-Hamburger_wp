<?php
wp_list_comments( array(
    'avatar_size' => 64,  // コメント投稿者のアバター画像のサイズ
) );
?>

<?php
// コメントが開いているか確認
if ( comments_open() ) {
    // コメントフォームを表示
    comment_form();
}
?>

<?php the_comments_navigation(); ?>