<?php 

function s3e_load_stylesheets()
    {

        wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
        wp_enqueue_style('bootstrap');

        wp_register_style('s3e_stylesheet', get_template_directory_uri() . '/style.css', array(), false, 'all');
        wp_enqueue_style('s3e_stylesheet');

    }
add_action('wp_enqueue_scripts', 's3e_load_stylesheets');


function s3e_include_custom_jquery() {

	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), null, true);

}
add_action('wp_enqueue_scripts', 's3e_include_custom_jquery');


function s3e_loadjs()
{
    wp_register_script('s3ejs', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
    wp_enqueue_script('s3ejs');
}
add_action('wp_enqueue_scripts', 's3e_loadjs');

add_theme_support('menus');

register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'theme'),
        'footer-menu' => __('Footer Menu', 'theme'),
    )
);

add_theme_support('post-thumbnails');
add_image_size('smallest', 300, 300, true);
add_image_size('largest', 1200, 1200, true);
?>