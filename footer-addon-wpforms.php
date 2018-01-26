<?php
/**
 * Plugin Name: Form Footer Addon for WPForms
 * Plugin URI:  https://www.github.com/billerickson/Form-Footer-Addon-for-WPForms
 * Description: Allows you to specify form footer content to appear below the form.
 * Version:     1.0.0
 * Author:      Bill Erickson
 * Author URI:  https://www.billerickson.net
 * Text Domain: integrate-convertkit-wpforms
 * Domain Path: /languages
 * License:     GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 2, as published by the
 * Free Software Foundation.  You may NOT assume that you can use any other
 * version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.
 *
 * @package    FormFooterAddonWPForms
 * @since      1.0.0
 * @copyright  Copyright (c) 2017, Bill Erickson
 * @license    GPL-2.0+
 */

 // Exit if accessed directly
 if ( ! defined( 'ABSPATH' ) ) exit;

 // Plugin version
 define( 'FORM_FOOTER_ADDON_WPFORMS', '1.0.0' );

/**
 * Load the class
 *
 */
function form_fooer_addon_wpforms() {

    load_plugin_textdomain( 'form-footer-addon-wpforms', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );

    require_once( plugin_dir_path( __FILE__ ) . 'class-form-footer-addon-wpforms.php' );

}
add_action( 'wpforms_loaded', 'form_fooer_addon_wpforms' );
