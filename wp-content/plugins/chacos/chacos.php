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

    // $my_post4 = array(
    //     'post_title'    => wp_strip_all_tags('About'),
    //     'post_status'   => 'publish',
    //     'post_author'   => 1,
    //     'post_type'     => 'page',
    //     'post_name' => 'about',
    // );

    // // Insert the post into the database
    // $add3 = wp_insert_post($my_post4);
    // update_option('about', $add3);
}

register_activation_hook(__FILE__, 'add_my_custom_page_shop');


add_filter( 'page_template', 'fw_reserve_page_template_shop' );
function fw_reserve_page_template_shop( $page_template )
{
    $page_home = get_option('home-shop');
    if (  is_page( $page_home ) ) {

        $page_template = dirname( __FILE__ ) . '/view/home.php';
    }

    // $page_about = get_option('about');
    // if (  is_page( $page_about ) ) {

    //     $page_template = dirname( __FILE__ ) . '/view/about.php';
    // }

    return $page_template;
}

// xoa active
function deactivate_plugin_pythaverse_shop()
{
    $page_home = get_option('home-shop');
    wp_delete_post($page_home);
}
register_deactivation_hook(__FILE__, 'deactivate_plugin_pythaverse_shop');


//WP-ADMIN MENU
if (!function_exists('create_home_pages_type')) :
	function create_home_pages_type()
	{
		$labels = array(
			'name' => 'Home Pages',
			'singular_name' => 'Home Page',
		);
		$args = array(
			'labels' => $labels,
			'public' => true,
			'has_archive' => false,
		);
		register_post_type('home_pages', $args);
	}
endif;
add_action('init', 'create_home_pages_type');

// Remove the Add New submenu page for Home Pages
function remove_home_pages_submenu()
{
    remove_submenu_page('edit.php?post_type=home_pages', 'edit.php?post_type=home_pages');
	remove_submenu_page('edit.php?post_type=home_pages', 'post-new.php?post_type=home_pages');
}
add_action('admin_menu', 'remove_home_pages_submenu');

if (!function_exists('create_slider_post_type')) :
	function create_slider_post_type()
	{
		$labels = array(
			'name' => 'Sliders',
			'singular_name' => 'Slider',
		);
		$args = array(
			'labels' => $labels,
			'public' => true,
			'has_archive' => false,
			'supports' => array('title'),
			'show_in_menu' => 'edit.php?post_type=home_pages', // Set the parent menu
		);
		register_post_type('slider', $args);
	}
endif;
add_action('init', 'create_slider_post_type');

if (!function_exists('create_shop_by_style_type')) :
	function create_shop_by_style_type()
	{
		$labels = array(
			'name' => 'Shop By Style',
			'singular_name' => 'Shop By Style',
		);
		$args = array(
			'labels' => $labels,
			'public' => true,
			'has_archive' => false,
			'supports' => array('title'),
			'show_in_menu' => 'edit.php?post_type=home_pages', // Set the parent menu
		);
		register_post_type('shop_by_style', $args);
	}
endif;
add_action('init', 'create_shop_by_style_type');

if (!function_exists('create_home_card_type')) :
	function create_home_card_type()
	{
		$labels = array(
			'name' => 'Home Cards',
			'singular_name' => 'Home Cards',
		);
		$args = array(
			'labels' => $labels,
			'public' => true,
			'has_archive' => false,
			'supports' => array('title'),
			'show_in_menu' => 'edit.php?post_type=home_pages', // Set the parent menu
		);
		register_post_type('home_card', $args);
	}
endif;
add_action('init', 'create_home_card_type');

// if (!function_exists('create_favorite_type')) :
// 	function create_favorite_type()
// 	{
// 		$labels = array(
// 			'name' => 'Favorites',
// 			'singular_name' => 'Favorites',
// 		);
// 		$args = array(
// 			'labels' => $labels,
// 			'public' => true,
// 			'has_archive' => false,
// 			'supports' => array('title'),
// 			'show_in_menu' => 'edit.php?post_type=home_pages', // Set the parent menu
// 		);
// 		register_post_type('favorites', $args);
// 	}
// endif;
// add_action('init', 'create_favorite_type');

if (!function_exists('create_customs_type')) :
	function create_customs_type()
	{
		$labels = array(
			'name' => 'Customs',
			'singular_name' => 'Customs',
		);
		$args = array(
			'labels' => $labels,
			'public' => true,
			'has_archive' => false,
			'supports' => array('title'),
			'show_in_menu' => 'edit.php?post_type=home_pages', // Set the parent menu
		);
		register_post_type('custom', $args);
	}
endif;
add_action('init', 'create_customs_type');

// if (!function_exists('create_social_type')) :
// 	function create_social_type()
// 	{
// 		$labels = array(
// 			'name' => 'Social',
// 			'singular_name' => 'Social',
// 		);
// 		$args = array(
// 			'labels' => $labels,
// 			'public' => true,
// 			'has_archive' => false,
// 			'supports' => array('title'),
// 			'show_in_menu' => 'edit.php?post_type=home_pages', // Set the parent menu
// 		);
// 		register_post_type('social', $args);
// 	}
// endif;
// add_action('init', 'create_social_type');