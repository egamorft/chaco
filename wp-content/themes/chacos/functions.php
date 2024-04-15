<?php
define('THEME_URL',get_stylesheet_directory());
define('CORE',THEME_URL."/core");

require_once(CORE."/init.php");


function chacos_style(){
   wp_register_style('index-style',get_template_directory_uri().'/assets/css/style.css','all');
   wp_enqueue_style('index-style');
   if(is_page('Home')){
    wp_register_style('home-style',get_template_directory_uri().'/assets/css/home.css','home');
    wp_enqueue_style('home-style');
    wp_register_script('home-script', get_template_directory_uri() . '/assets/js/home.js', array('jquery'), '1.0', true);
    wp_enqueue_script('home-script');
   }
   if(is_page('Category')){
    wp_register_style('category-style',get_template_directory_uri().'/assets/css/category.css','category');
    wp_enqueue_style('category-style');
    wp_register_script('category-script', get_template_directory_uri() . '/assets/js/category.js', array('jquery'), '1.0', true);
    wp_enqueue_script('category-script');
   }
   if(is_page('Detail-product')){
    wp_register_style('detail-product-style',get_template_directory_uri().'/assets/css/detail-product.css','detail-product');
    wp_enqueue_style('detail-product-style');
    wp_register_script('detail-product-script', get_template_directory_uri() . '/assets/js/detail-product.js', array('jquery'), '1.0', true);
    wp_enqueue_script('detail-product-script');
   }
   if(is_page('Product-features')){
    wp_register_style('product-features-style',get_template_directory_uri().'/assets/css/product-features.css','product-features');
    wp_enqueue_style('product-features-style');
   }
   if(is_page('Sign-in')){
    wp_register_style('sign-in-style',get_template_directory_uri().'/assets/css/login.css','sign-in');
    wp_enqueue_style('sign-in-style');
   }
   wp_register_script('index-script', get_template_directory_uri() . '/assets/js/index.js', array('jquery'), '1.0', true);
    wp_enqueue_script('index-script');

}
add_action('wp_enqueue_scripts','chacos_style');