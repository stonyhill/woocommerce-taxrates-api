<?php
/**
 * Plugin Name: WooCommerce Taxrates API
 * Plugin URI: http://woothemes.com/products/woocommerce-taxrates-api/
 * Description: Accurate sales tax rates for Woocommerce.
 * Version: 1.0.0
 * Author: WooThemes
 * Author URI: http://woothemes.com/
 * Developer: Steven Dunston
 * Developer URI: http://yourdomain.com/
 * Text Domain: woocommerce-taxrates-api
 * Domain Path: /languages
 *
 * Copyright: © 2009-2015 WooThemes.
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

/**
 * Check if WooCommerce is active
 **/
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
    // Put your plugin code here
}
?>
