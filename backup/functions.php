<?php
declare(strict_types=1);

require get_template_directory().'/post-types/student.php';

require get_template_directory().'/taxonomies/skill.php';

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    // Enable featured image
    add_theme_support( 'post-thumbnails' );
});

add_filter('show_admin_bar', '__return_false');

// Enqueue styles and scripts the right way.
add_action('wp_enqueue_scripts', function () {
    wp_deregister_script('jquery');
    wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', '', '', true);
    wp_register_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', '', '', true);
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap');
    wp_enqueue_style( 'style', get_stylesheet_uri() );
});
