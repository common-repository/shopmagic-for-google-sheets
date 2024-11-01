<?php
/**
 * Plugin Name: ShopMagic for Google Sheets
 * Plugin URI: https://shopmagic.app/products/shopmagic-for-google-sheets/?utm_source=add_plugin_details&utm_medium=link&utm_campaign=plugin_homepage
 * Description: Allows adding rows to Google Sheets from automations data.
 * Version: 2.1.1
 * Author: WP Desk
 * Author URI: https://shopmagic.app/?utm_source=user-site&utm_medium=quick-link&utm_campaign=author
 * Text Domain: shopmagic-for-google-sheets
 * Domain Path: /lang/
 * Requires at least: 5.4
 * Tested up to: 6.6
 * WC requires at least: 8.8
 * WC tested up to: 9.2
 * Requires PHP: 7.2
 * Requires Plugins: shopmagic-for-woocommerce
 *
 * Copyright 2023 WP Desk Ltd
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly


/* THESE TWO VARIABLES CAN BE CHANGED AUTOMATICALLY */
$plugin_version = '2.1.1';

$plugin_name        = 'ShopMagic for Google Sheets';
$plugin_class_name  = '\WPDesk\ShopMagicGoogleSheets\Plugin';
$plugin_text_domain = 'shopmagic-for-google-sheets';
$product_id         = '';
$plugin_file        = __FILE__;
$plugin_dir         = __DIR__;

$requirements = [
	'php'     => '7.2',
	'wp'      => '5.0',
	'plugins' => [
		[
			'name'      => 'shopmagic-for-woocommerce/shopMagic.php',
			'nice_name' => 'ShopMagic for WooCommerce',
			'version'   => '4.2.19',
		],
	],
];


require __DIR__ . '/vendor_prefixed/wpdesk/wp-plugin-flow-common/src/plugin-init-php52-free.php';

require_once __DIR__ . '/vendor_prefixed/guzzlehttp/guzzle/src/functions.php';
