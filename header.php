<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1024">
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <?php
    if ( get_site_icon_url() != '' ) {
        echo '<link rel="shortcut icon" href="' . get_site_icon_url() . '"/>';
        echo '<link rel="apple-touch-icon" href="' . get_site_icon_url() . '"/>';
    }
    ?>

    <link rel="shortcut icon" href="/path/faviconimagename.ico">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head() ; ?>
</head>

<body <?php body_class(); ?>>
    <header class="site-header">
        <a href="/"><h1><?php bloginfo('name') ?><h1></a>
    </header>