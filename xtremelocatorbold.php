<?php
/**
 * Plugin Name
 *
 * @package           XtremelocatorBold
 * @author            Emmanuel Ob
 * @copyright         2021 XtremeLocator
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       XtremelocatorBold
 * Plugin URI:        https://xtremelocator.com/
 * Description:       This plugin allows you to deploy the Xtreme Locator dealer locator  application on your Wordpress website.  Complete help files are available at the Xtreme Locator  website.
 * Version:           3.0.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Emmanuel Ob
 * Author URI:        https://iqservices.com
 * Text Domain:       xtremelocatorbold
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt 36542 3158
 */

/*Init variables*/
require_once __DIR__ . '/config.php';


if ( ! session_id() ) {
	session_start();
	session_write_close(); // Other plugins can restart a session again via session_start()
}

/*Init variables end*/

add_action( 'admin_init', 'xtreme_locator_editor_admin_init' );
add_action( 'admin_head', 'xtreme_locator_editor_admin_head' );

function xtreme_locator_editor_admin_init() {
	wp_enqueue_script( 'word-count' );
	wp_enqueue_script( 'post' );
	wp_enqueue_script( 'editor' );
	wp_enqueue_script( 'media-upload' );
}

function xtreme_locator_editor_admin_head() {
	//wp_tiny_mce();
}

//add_action('admin_print_scripts', 'xtreme_locator_add_admin_javascript');


register_activation_hook( __FILE__, 'xtreme_locator_install' );
register_uninstall_hook( __FILE__, 'xtreme_locator_uninstall' );

//add_filter( 'the_content', 'includeLocator', 7 );

add_shortcode( 'xtreme_locator_standard', 'shortcode_handler_function_standard' );
add_shortcode( 'xtreme_locator_advanced', 'shortcode_handler_function_advanced' );
add_shortcode( 'xtreme_locator_custom', 'shortcode_handler_function_custom' );
add_shortcode( 'xtreme_locator_all', 'shortcode_handler_function_all' );
add_shortcode( 'xtreme_locator_listing', 'shortcode_handler_function_listing' );
//add_filter( 'content_save_pre', 'checkLocatorTag', 7 );

add_action( 'admin_menu', 'xtreme_locator_init_admin_menus' );

add_filter( 'option_update_plugins', 'xtreme_locator_prevent_upgrade' );
add_filter( 'transient_update_plugins', 'xtreme_locator_prevent_upgrade' );

load_plugin_textdomain( 'xtremelocatorbold', false, "/wp-content/plugins/" . XTREME_LOCATOR_DIR . "/languages/" );

//add_action( "plugins_loaded", "xtreme_locator_register_widgets" );


add_action( 'admin_post_xtreme_locator', 'xtreme_locator_form_parser' );
add_action( 'admin_post_nopriv_xtreme_locator', 'xtreme_locator_form_parser' );


add_action( 'wp_enqueue_scripts', "xtreme_locator_script_enqueuer" );

