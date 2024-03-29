<?php

//LOAD CSS
function load_stylesheets()
{
    wp_register_style('font', 'https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap', array(), 1, 'all');
    wp_enqueue_style('font');
    
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css', array(), 1, 'all');
    wp_enqueue_style('bootstrap');
    
    wp_register_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), 1, 'all');
    wp_enqueue_style('swiper');

    wp_register_style('home-style', get_template_directory_uri() . '/assets/css/home.css', array(), 1, 'all');
    wp_enqueue_style('home-style');
    
    wp_register_style('styles', get_template_directory_uri() . '/assets/css/style.css', array(), 1, 'all');
    wp_enqueue_style('styles');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

//LOAD JS
function load_scripts()
{
    wp_register_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), 1, 1);
    wp_enqueue_script('swiper');

    wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js', array(), 1, 1);
    wp_enqueue_script('bootstrap');

    wp_register_script('index-style', get_template_directory_uri() . '/assets/js/index.js', array(), 1, 1);
    wp_enqueue_script('index-style');

    wp_register_script('home-style', get_template_directory_uri() . '/assets/js/home.js', array(), 1, 1);
    wp_enqueue_script('home-style');
}

add_action('wp_enqueue_scripts', 'load_scripts');