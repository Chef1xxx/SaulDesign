<?php

add_action('wp_enqueue_scripts', 'assets_enqueue_script');
function assets_enqueue_script()
{

    wp_deregister_script('jquery');
    wp_register_script('jquery', mix('js/jquery.js'));
    wp_enqueue_script('jquery');

    wp_register_script('app-js', mix('/js/app.js'));
    wp_enqueue_script('app-js');
    wp_register_style('app-css', mix('css/app.css'));
    wp_enqueue_style('app-css');
    wp_register_style('app-scss', mix('css/app.scss'));
    wp_enqueue_style('app-scss');
}
add_action(
    'after_setup_theme',
    function () {
        add_theme_support('html5', ['script', 'style']);
    }
);