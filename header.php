<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name='viewport' content='initial-scale=1, viewport-fit=cover'>
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head() ; ?>
</head>

<body <?php body_class(); ?>>
    <header class="site-header">
        <a href="/"><h1><?php bloginfo('name') ?><h1></a>
    </header>