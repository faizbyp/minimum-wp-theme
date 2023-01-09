<!-- berisi fungsi-fungsi (hook) yg diperlukan -->

<?php

function load_stylesheets() {
    wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), false, 'all'); // memanggil dir stylesheet
    wp_enqueue_style('bootstrap'); // memasang stylesheet

    wp_register_style('style', get_template_directory_uri().'/style.css', array(), false, 'all');
    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_stylesheets'); // menjalankan fungsi

function include_jquery() {
    wp_deregister_script('jquery'); // memastikan tidak ada JQuery yg sudah terpasang
    wp_enqueue_script('jquery', get_template_directory_uri().'/js/jquery-3.6.3.min.js', '', 1, true); // memanggil directory JQuery
    add_action('wp_enqueue_scripts', 'jquery'); // menjalankan fungsi jquery
}
add_action('wp_enqueue_scripts', 'include_jquery');

function load_script() {
    wp_register_script('customjs', get_template_directory_uri().'/js/scripts.js', '', 1, true);
    wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts', 'load_script');

add_theme_support('menus'); // memasang fitur menu

register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'theme'),
        'footer-menu' => __('Footer Menu', 'theme'),
    )
);

function img_setup_theme() {
    add_theme_support( 'post-thumbnails' );
    add_image_size('smallest', 300, 300, true);
    add_image_size('largest', 800, 800, true);
}
 
add_action( 'after_setup_theme', 'img_setup_theme' );

?>