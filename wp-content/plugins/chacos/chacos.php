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

    $add_category = wp_insert_post($my_category);
    update_option('category', $add_category);

    $my_return = array(
        'post_title'    => wp_strip_all_tags('Return'),
        'post_status'   => 'publish',
        'post_author'   => 1,
        'post_type'     => 'page',
        'post_name' => 'return',
    );

    $add_return = wp_insert_post($my_return);
    update_option('return', $add_return);

    $my_detail_product = array(
        'post_title'    => wp_strip_all_tags('Detail-product'),
        'post_status'   => 'publish',
        'post_author'   => 1,
        'post_type'     => 'page',
        'post_name' => 'detail-product',
    );

    $add_detail_product = wp_insert_post($my_detail_product);
    update_option('detail-product', $add_detail_product);

    $my_product_features = array(
        'post_title'    => wp_strip_all_tags('Product-features'),
        'post_status'   => 'publish',
        'post_author'   => 1,
        'post_type'     => 'page',
        'post_name' => 'Product-features',
    );

    $add_product_features = wp_insert_post($my_product_features);
    update_option('product-features', $add_product_features);

    $my_strap_adjuster = array(
        'post_title'    => wp_strip_all_tags('Strap-adjuster'),
        'post_status'   => 'publish',
        'post_author'   => 1,
        'post_type'     => 'page',
        'post_name' => 'strap-adjuster',
    );

    $add_strap_adjuster = wp_insert_post($my_strap_adjuster);
    update_option('strap-adjuster', $add_strap_adjuster);
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

    $page_return = get_option('return');
    if (  is_page( $page_return ) ) {

        $page_template = dirname( __FILE__ ) . '/view/return.php';
    }

    $page_detail_product = get_option('detail-product');
    if (  is_page( $page_detail_product ) ) {

        $page_template = dirname( __FILE__ ) . '/view/detail-product.php';
    }

    $page_product_features = get_option('product-features');
    if (  is_page( $page_product_features ) ) {

        $page_template = dirname( __FILE__ ) . '/view/product-features.php';
    }

    $page_strap_adjuster = get_option('strap-adjuster');
    if (  is_page( $page_strap_adjuster ) ) {

        $page_template = dirname( __FILE__ ) . '/view/strap-adjuster.php';
    }

    return $page_template;
}

// xoa active
function deactivate_plugin_chacos_shop()
{
    $page_home = get_option('home-shop');
    wp_delete_post($page_home);
    $page_category = get_option('category');
    wp_delete_post($page_category);
    $page_detail_product = get_option('detail-product');
    wp_delete_post($page_detail_product);
    $page_return = get_option('return');
    wp_delete_post($page_return);
    $page_product_features = get_option('product-features');
    wp_delete_post($page_product_features);
    $page_strap_adjuster = get_option('strap-adjuster');
    wp_delete_post($page_strap_adjuster);
}
register_deactivation_hook(__FILE__, 'deactivate_plugin_chacos_shop');