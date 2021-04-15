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

function triki_register_menus() {
    register_nav_menus(
        array(
            'menu1' => 'Header Menu'
        )
    );
};
add_action('init', 'triki_register_menus');



function mytheme_customize_register( $wp_customize ) {
    $wp_customize->add_setting( 'main_color' , array(
        'default'     => "#9ce159",
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_setting( 'sub_color' , array(
        'default'     => "#8c5e29",
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_setting( 'header_color_1' , array(
        'default'     => "#9ce159",
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_setting( 'header_color_2' , array(
        'default'     => "#8c5e29",
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_color', array(
        'label'        => __( 'Main Color', 'mytheme' ),
        'section'    => 'colors',
    ) ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sub_color', array(
        'label'        => __( 'Sub Color', 'mytheme' ),
        'section'    => 'colors',
    ) ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_color_1', array(
        'label'        => __( 'Header Color 1', 'mytheme' ),
        'section'    => 'colors',
    ) ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_color_2', array(
        'label'        => __( 'Header Color 2', 'mytheme' ),
        'section'    => 'colors',
    ) ) );
}
add_action( 'customize_register', 'mytheme_customize_register' );

function mytheme_customize_css()
{
    ?>
    <style type="text/css">
        header { 
            background: linear-gradient(120deg, <?php echo get_theme_mod('header_color_1', "#9ce159"); 
        ?>, <?php echo get_theme_mod('header_color_2', "#8c5e29"); ?>);
        }
        article a,article a:visited,.site-footer a,.site-footer a:visited {
            color: <?php echo get_theme_mod('main_color', "#9ce159"); ?>;
        }
        .widget_title { 
            border-bottom: 2px solid <?php echo get_theme_mod('main_color', "#9ce159"); ?>;
        }
        article a:hover, .site-footer a:hover {
            color: <?php echo get_theme_mod('header_color_1', "#8c5e29"); ?>;
        }
    </style>
    <?php
}

add_action( 'wp_head', 'mytheme_customize_css');
function l10n_setup() {
    load_theme_textdomain( 'KiwiSkin', get_template_directory() . '/lang' );
}
add_action( 'after_setup_theme', 'l10n_setup' );
?>