<?php

add_action( 'wp_enqueue_scripts', 'style_theme');
add_action( 'wp_footer', 'scripts_theme');
add_action( 'after_setup_theme', 'theme_register');
add_action( 'wp_enqueue_scripts', 'jquery_inst');

add_action('acf/init', 'be_register_blocks' );

function style_theme() {
    wp_enqueue_style( 'style', get_stylesheet_uri()); //подключение основного style.css
    wp_enqueue_style( 'owl.carousel.min', get_template_directory_uri() . '/assets/css/owl.carousel.min.css' ); //подключение остальных css файлов
    wp_enqueue_style( 'owl.theme.default.min', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css' );
}

function scripts_theme() {
//    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.js');
    wp_enqueue_script( 'owl.carousel.min', get_template_directory_uri() . '/assets/js/owl.carousel.min.js');
    wp_enqueue_script( 'slider', get_template_directory_uri() . '/assets/js/slider.js');
}

function theme_register() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails', array( 'post'));
//    add_image_size( 'post_thumb', 100%, 100%, ;
}

function jquery_inst() {
    wp_deregister_script('jquery-core');
    wp_deregister_script('jquery');

    wp_register_script( 'jquery-core', get_template_directory_uri() . '/assets/js/jquery-core.js');
    wp_register_script( 'jquery', false, array('jquery-core'), null, true);

    wp_enqueue_script( 'jquery' );
}

function be_register_blocks() {
    if( ! function_exists('acf_register_block') )
        return;
    acf_register_block( array(
        'name'			=> 'team-member',
        'title'			=> __( 'Team Member', 'clientname' ),
        'render_template'	=> 'block-team-member.php',
        'category'		=> 'formatting',
        'icon'			=> 'admin-users',
        'mode'			=> 'preview',
        'keywords'		=> array( 'profile', 'user', 'author' )
    ));
}