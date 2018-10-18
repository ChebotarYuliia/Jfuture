<?php
add_action( 'wp_enqueue_scripts', function(){

    wp_enqueue_script('vendor-js', get_template_directory_uri() . '/assets/js/vendors.js');
    wp_enqueue_script('app', get_template_directory_uri() . '/app.js');
    wp_enqueue_style('css', get_template_directory_uri() . '/assets/css/application.css');
});

register_nav_menus(array(
    'top' => 'Верхнее меню'
));

add_theme_support('widgets');

remove_filter( 'the_content', 'wpautop' );
