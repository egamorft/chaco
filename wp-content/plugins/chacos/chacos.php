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

    $my_login = array(
        'post_title'    => wp_strip_all_tags('Login'),
        'post_status'   => 'publish',
        'post_author'   => 1,
        'post_type'     => 'page',
        'post_name' => 'login',
    );

    $add_login = wp_insert_post($my_login);
    update_option('login', $add_login);

    $my_registration = array(
        'post_title'    => wp_strip_all_tags('Registration'),
        'post_status'   => 'publish',
        'post_author'   => 1,
        'post_type'     => 'page',
        'post_name' => 'registration',
    );

    $add_registration = wp_insert_post($my_registration);
    update_option('registration', $add_registration);

    $my_account_qa = array(
        'post_title'    => wp_strip_all_tags('Account'),
        'post_status'   => 'publish',
        'post_author'   => 1,
        'post_type'     => 'page',
        'post_name' => 'account',
    );

    $add_account_qa = wp_insert_post($my_account_qa);
    update_option('account', $add_account_qa);

    $my_order_status = array(
        'post_title'    => wp_strip_all_tags('Order-status'),
        'post_status'   => 'publish',
        'post_author'   => 1,
        'post_type'     => 'page',
        'post_name' => 'order-status',
    );

    $add_order_status = wp_insert_post($my_order_status);
    update_option('order-status', $add_order_status);

    $my_account = array(
        'post_title'    => wp_strip_all_tags('My-account'),
        'post_status'   => 'publish',
        'post_author'   => 1,
        'post_type'     => 'page',
        'post_name' => 'my-account',
    );

    $add_my_account = wp_insert_post($my_account);
    update_option('my-account', $add_my_account);

    $edit_account = array(
        'post_title'    => wp_strip_all_tags('Edit-account'),
        'post_status'   => 'publish',
        'post_author'   => 1,
        'post_type'     => 'page',
        'post_name' => 'edit-account',
    );

    $add_edit_account = wp_insert_post($edit_account);
    update_option('edit-account', $add_edit_account);

    $address = array(
        'post_title'    => wp_strip_all_tags('Address'),
        'post_status'   => 'publish',
        'post_author'   => 1,
        'post_type'     => 'page',
        'post_name' => 'address',
    );

    $add_address = wp_insert_post($address);
    update_option('address', $add_address);

    $order_history = array(
        'post_title'    => wp_strip_all_tags('Order-history'),
        'post_status'   => 'publish',
        'post_author'   => 1,
        'post_type'     => 'page',
        'post_name' => 'order-history',
    );

    $add_order_history = wp_insert_post($order_history);
    update_option('order-history', $add_order_history);

    $order_wishlist = array(
        'post_title'    => wp_strip_all_tags('Wishlist'),
        'post_status'   => 'publish',
        'post_author'   => 1,
        'post_type'     => 'page',
        'post_name' => 'wishlist',
    );

    $add_wishlist = wp_insert_post($order_wishlist);
    update_option('wishlist', $add_wishlist);
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

    $page_login = get_option('login');
    if (  is_page( $page_login ) ) {

        $page_template = dirname( __FILE__ ) . '/view/sign-in.php';
    }

    $page_registration = get_option('registration');
    if (  is_page( $page_registration ) ) {

        $page_template = dirname( __FILE__ ) . '/view/registration.php';
    }

    $page_account = get_option('account');
    if (  is_page( $page_account ) ) {

        $page_template = dirname( __FILE__ ) . '/view/account.php';
    }

    $page_order_status = get_option('order-status');
    if (  is_page( $page_order_status ) ) {

        $page_template = dirname( __FILE__ ) . '/view/order-status.php';
    }

    $page_my_account = get_option('my-account');
    if (  is_page( $page_my_account ) ) {

        $page_template = dirname( __FILE__ ) . '/view/my-account.php';
    }

    $page_edit_account = get_option('edit-account');
    if (  is_page( $page_edit_account ) ) {

        $page_template = dirname( __FILE__ ) . '/view/edit-account.php';
    }

    $page_address = get_option('address');
    if (  is_page( $page_address ) ) {

        $page_template = dirname( __FILE__ ) . '/view/address.php';
    }

    $page_order_history = get_option('order-history');
    if (  is_page( $page_order_history ) ) {

        $page_template = dirname( __FILE__ ) . '/view/order-history.php';
    }

    $page_wishlist = get_option('wishlist');
    if (  is_page( $page_wishlist ) ) {

        $page_template = dirname( __FILE__ ) . '/view/wishlist.php';
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
    $page_login = get_option('login');
    wp_delete_post($page_login);
    $page_registration = get_option('registration');
    wp_delete_post($page_registration);
    $page_account = get_option('account');
    wp_delete_post($page_account);
    $page_order_status = get_option('order-status');
    wp_delete_post($page_order_status);
    $page_my_account = get_option('my-account');
    wp_delete_post($page_my_account);
    $page_edit_account = get_option('edit-account');
    wp_delete_post($page_edit_account);
    $page_address = get_option('address');
    wp_delete_post($page_address);
    $page_order_history = get_option('order-history');
    wp_delete_post($page_order_history);
    $wishlist = get_option('wishlist');
    wp_delete_post($wishlist);
}
register_deactivation_hook(__FILE__, 'deactivate_plugin_chacos_shop');