<?php

add_action( 'wp_enqueue_scripts', 'style_theme');
add_action( 'wp_footer', 'scripts_theme');
add_action( 'after_setup_theme', 'theme_register');
add_action( 'wp_enqueue_scripts', 'jquery_inst');
add_action( 'after_setup_theme', 'myMenu' );
add_action( 'acf/init', 'portfolio_register_blocks' );
add_action( 'acf/init', 'price_register_blocks' );

function style_theme() {
    wp_enqueue_style( 'style', get_stylesheet_uri()); //подключение основного style.css
    wp_enqueue_style( 'owl.carousel.min', get_template_directory_uri() . '/assets/css/owl.carousel.min.css' ); //подключение остальных css файлов
    wp_enqueue_style( 'owl.theme.default.min', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css' );
}

function scripts_theme() {
    wp_enqueue_script( 'owl.carousel.min', get_template_directory_uri() . '/assets/js/owl.carousel.min.js');
    wp_enqueue_script( 'slider', get_template_directory_uri() . '/assets/js/slider.js');
    wp_enqueue_script( 'menu-btn', get_template_directory_uri() . '/assets/js/menu-btn.js');
    wp_enqueue_script( 'add-slider', get_template_directory_uri() . '/assets/js/add-slider.js');
}

function theme_register() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails', array( 'post'));
}

function jquery_inst() {
    wp_deregister_script('jquery-core');
    wp_deregister_script('jquery');

    wp_register_script( 'jquery-core', get_template_directory_uri() . '/assets/js/jquery-core.js');
    wp_register_script( 'jquery', false, array('jquery-core'), null, true);

    wp_enqueue_script( 'jquery' );
}

function myMenu(){
    register_nav_menu( 'top', 'Header Menu' );
}

function portfolio_register_blocks() {
    if( ! function_exists('acf_register_block') )
        return;
    acf_register_block( array(
        'name'			=> 'my-portfolio',
        'title'			=> __( 'My Portfolio' ),
        'render_callback'	=> 'acf_file',
        'category'        => 'acf_fx_blocks',
        'icon'            => 'slides',
        'keywords'        => ['image', 'title', 'text'],
        'mode'            => 'edit',
    ));
}

function acf_file(){
    include(get_theme_file_path("/blocks/block-my-portfolio.php"));
}

function price_register_blocks() {
    if( ! function_exists('acf_register_block') )
        return;
    acf_register_block( array(
        'name'			=> 'price_plans',
        'title'			=> __( 'Price Plans' ),
        'render_callback'	=> 'acf_file2',
        'category'        => 'acf_fx_blocks',
        'icon'            => 'slides',
        'keywords'        => ['image', 'title', 'text'],
        'mode'            => 'edit',
    ));
}

function acf_file2(){
    include(get_theme_file_path("/blocks/block-price-plans.php"));
}