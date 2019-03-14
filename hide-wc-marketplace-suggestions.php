<?php
/**
 * Plugin Name: Hide WooCommerce Marketplace Suggestions
 * Plugin URI: https://github.com/jessepearson/hide-wc-marketplace-suggestions
 * Description: This will hide marketplace ads/suggestions that are part of WooCommerce.
 * Author: Jesse Pearson
 * Author URI: https://github.com/jessepearson/
 * Text Domain: hide-wc-marketplace-suggestions
 * Domain Path: /languages/
 * Version: 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Just this single filter to disable marketplace suggestions. 
 */
add_filter( 'woocommerce_allow_marketplace_suggestions', '__return_false' );