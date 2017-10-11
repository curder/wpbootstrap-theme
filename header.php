<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title>
        <?php bloginfo('name'); ?> |
        <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>
    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css">
    <?php wp_head(); ?>
</head>
<body>

<div class="blog-masthead">
    <div class="container">
        <nav class="blog-nav">
            <?php
            wp_nav_menu(array(
                    'menu' => 'primary',
                    'theme_location' => 'primary',
                    'depth' => 2,
                    'container' => 'div',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id' => 'bs-example-navbar-collapse-1',
                    'menu_class' => 'nav navbar-nav',
                    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                    'walker' => new WP_Bootstrap_Navwalker())
            );
            ?>
        </nav>
    </div>
</div>
<?php if (!is_front_page()): ?>
<div class="container">
    <?php endif; ?>
    <?php if (!is_front_page()): ?>
        <div class="blog-header">
            <h1 class="blog-title"><?php bloginfo('name'); ?></h1>
            <p class="lead blog-description"><?php bloginfo('description'); ?></p>
        </div>
    <?php endif; ?>
