<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name='viewport' content='initial-scale=1, maximum-scale=1.0, user-scalable=no" viewport-fit=cover'>
    <title><?php wp_title('-', true, 'right'); ?></title>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <?php if ( get_option('darkmode_support')) : ?>
        <?php echo "<link rel=\"stylesheet\" href=\"".get_template_directory_uri()."/css/darkmode.css\">" ?>
    <?php endif; ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php wp_head() ; ?>
</head>

<body <?php body_class(); ?>>
<div class="container">
    <div class="header-container">
        <header class="site-header">
            <a href="/">
                <h1><?php bloginfo('name') ?></h1>
                <?php if ( get_option('display_tagline')) : ?>
                    <p><?php bloginfo('description'); ?> </p>
                <?php endif; ?>
            </a>
        </header>
    </div>
    <?php if (has_nav_menu( 'menu1' )) : ?>
    <div class="header_menu">
        <div class="hamberger_container">
            <a href="javascript:void(0);" id="hamberger" onclick="headerMenuToggle()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <?php 
    wp_nav_menu(
        array(
            'theme_location' => 'menu1',
            'depth' => 0,
        )
    )
    ?>
    </div>
    <?php endif; ?>