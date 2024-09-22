<form class="p-search" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
    <input class="c-search-box" name="s" id="s" type="text" placeholder="" value="<?php echo esc_attr(get_search_query() ); ?>">
    <input class="c-search-btn" type="submit" value="<?php echo esc_attr__( 'search', 'raisetech-hamburger_wp' ); ?>">
</form>