<?php
/*
Plugin Name: Chacos Shop
Plugin URI: https://chacos.com
Description: Chacos Shop
Author: 
Version: 1.1
Author URI: https://chacos.com
Text Domain:custom-form
*/
define('WIDGET_URL_CHACOS', plugins_url('/chacos'));
function add_my_custom_page_shop()
{

    $my_home = array(
        'post_title'    => wp_strip_all_tags('Home-shop'),
        'post_status'   => 'publish',
        'post_author'   => 1,
        'post_type'     => 'page',
        'post_name' => 'home-shop',
    );

    $add_home = wp_insert_post($my_home);
    update_option('home-shop', $add_home);

    $my_category = array(
        'post_title'    => wp_strip_all_tags('Category'),
        'post_status'   => 'publish',
        'post_author'   => 1,
        'post_type'     => 'page',
        'post_name' => 'category',
    );

    // Insert the post into the database
    $add_category = wp_insert_post($my_category);
    update_option('category', $add_category);
}

register_activation_hook(__FILE__, 'add_my_custom_page_shop');


add_filter( 'page_template', 'fw_reserve_page_template_shop' );
function fw_reserve_page_template_shop( $page_template )
{
    $page_home = get_option('home-shop');
    if (  is_page( $page_home ) ) {

        $page_template = dirname( __FILE__ ) . '/view/home.php';
    }

    $page_category = get_option('category');
    if (  is_page( $page_category ) ) {

        $page_template = dirname( __FILE__ ) . '/view/category.php';
    }

    return $page_template;
}

// xoa active
function deactivate_plugin_pythaverse_shop()
{
    $page_home = get_option('home-shop');
    wp_delete_post($page_home);
    $page_category = get_option('category');
    wp_delete_post($page_category);
}
register_deactivation_hook(__FILE__, 'deactivate_plugin_pythaverse_shop');