<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name='viewport' content='initial-scale=1, maximum-scale=1.0, user-scalable=no" viewport-fit=cover'>
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head() ; ?>
    <?php isIE(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="site-header">
        <a href="/">
            <h1><?php bloginfo('name') ?><h1>
        </a>
    </header>