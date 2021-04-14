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

function getBrowser() {
    $broswerList = array('MSIE', 'Chrome', 'Firefox', 'iPhone', 'iPad', 'Android', 'PPC', 'Safari', 'Trident', 'none');
    $browserName = 'none';
    
    foreach ($broswerList as $userBrowser){
        if($userBrowser === 'none') break;
        if(strpos($_SERVER['HTTP_USER_AGENT'], $userBrowser)) {
            $browserName = $userBrowser;
            break;
        }
    }
    return $browserName;
}
 
function isIE() {
    $BrowserName = getBrowser();
    if($BrowserName === 'MSIE'||$BrowserName === 'Trident'){
        echo("<script>alert('현재 사용하시는 브라우저를 지원하지 않습니다. \\n웹 표준을 준수하는 최신 브라우저를 이용해보세요.');</script>"); 
    }
}
function triki_register_menus() {
    register_nav_menus(
        array(
            'menu1' => 'Header Menu'
        )
    );
};
add_action('init', 'triki_register_menus');


?>