<?php

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('reset', get_template_directory_uri() . '/assets/style/reset.css');
    wp_enqueue_style('header', get_template_directory_uri() . '/assets/style/header.css');
    wp_enqueue_style('footer', get_template_directory_uri() . '/assets/style/footer.css');
    wp_enqueue_style('home', get_template_directory_uri() . '/assets/style/home.css');
    wp_enqueue_style('urgentPhotoForDocument', get_template_directory_uri() . '/assets/style/urgentPhotoForDocument.css');

    wp_enqueue_script('main', get_template_directory_uri() . '/assets/scripts/main.js', 'null', true);
});

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');
