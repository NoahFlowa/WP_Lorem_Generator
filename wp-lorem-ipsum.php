<?php
/**
 * WP Faker
 *
 * Plugin Name: WP Faker
 * Description: Automatically create <strong>new fake posts</strong> to fill the database and get a very good impression for your website.
 * Version: 1.0
 * Author: Noah Osterhout
 * Author URI: https://noahosterhout.com
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: wp-faker
 */

// Injection prevention
if ( !defined( 'ABSPATH' ) )
    exit;

/**
 * Global defines
 *
 * @since   2.9
 */
if ( ! defined( 'WPLI_PLUGIN_VERSION' ) )
    define( 'WPLI_PLUGIN_VERSION', 1.0 );

// Admin Class
if ( is_admin() )
    require_once plugin_dir_path( __FILE__ ) . 'admin/class-wpli-admin.php';
    require_once plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';
