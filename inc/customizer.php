<?php
function wpb_customize_register($wp_customize)
{
    // Showcase Section
    $wp_customize->add_section('showcase', array(
        'title' => __('首页首屏内容', 'wpbootstrap'),
        'description' => sprintf(__('Options for showcase', 'wpbootstrap')),
        'priority' => 130,
    ));

    $wp_customize->add_setting('showcase_image', array(
        'default' => get_bloginfo('template_directory') . '/assets/images/showcase.jpg',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
        'label' => __('背景图片', 'wpbootstrap'),
        'section' => 'showcase',
        'setting' => 'showcase_image',
        'priority' => 1,
    )));

    $wp_customize->add_setting('showcase_heading', array(
        'default' => _x('Custom Bootstrap Wordpress Theme', 'wpbootstrap'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('showcase_heading', array(
        'label' => __('大标题', 'wpbootstrap'),
        'section' => 'showcase',
        'priority' => 2,
    ));


    $wp_customize->add_setting('showcase_text', array(
        'default' => _x('Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam', 'wpbootstrap'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('showcase_text', array(
        'label' => __('简介', 'wpbootstrap'),
        'section' => 'showcase',
        'priority' => 3,
    ));

    $wp_customize->add_setting('showcase_button_text', array(
        'default' => _x('Read More', 'wpbootstrap'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('showcase_button_text', array(
        'label' => __('按钮文字', 'wpbootstrap'),
        'section' => 'showcase',
        'priority' => 4,
    ));

    $wp_customize->add_setting('showcase_button_url', array(
        'default' => _x('http://www.google.com.cn', 'wpbootstrap'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('showcase_button_url', array(
        'label' => __('按钮链接', 'wpbootstrap'),
        'section' => 'showcase',
        'priority' => 5,
    ));


}

add_action('customize_register', 'wpb_customize_register');
