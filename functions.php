<?php
// Register Nav Walker Class
// https://github.com/twittem/wp-bootstrap-navwalker
require_once get_template_directory() . '/wp-bootstrap-navwalker.php';
// Customizer File
require get_template_directory(). '/inc/customizer.php';

function wpb_theme_setup()
{
    add_theme_support('post-thumbnails');

    // Post Formats
    add_theme_support('post-formats', array('aside', 'gallery'));

    register_nav_menus(array(
        'primary' => __('页面主菜单')
    ));
}

//add_action('after_theme_setup', 'wpb_theme_setup');
add_action('after_setup_theme', 'wpb_theme_setup');

// Widget Locations
function wpb_init_widget($id)
{
    register_sidebar(array(
        'name' => '侧边栏',
        'id' => 'sidebar',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => 'Box1',
        'id' => 'box1',
        'before_widget' => '<div class="box">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => 'Box2',
        'id' => 'box2',
        'before_widget' => '<div class="box">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => 'Box3',
        'id' => 'box3',
        'before_widget' => '<div class="box">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
}

add_action('widgets_init', 'wpb_init_widget');

// Excerpt Length Control
function set_excerpt_length()
{
    return 120;
}

add_filter('excerpt_length', 'set_excerpt_length');
