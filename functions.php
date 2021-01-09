<?php
register_sidebar(array(
    'id' => 'sidebar-1',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="widget_title">',
    'after_title'   => '</h2>'
));
add_theme_support( 'post-thumbnails' );

function new_excerpt_more($more) {
    global $post;
 return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');
?>