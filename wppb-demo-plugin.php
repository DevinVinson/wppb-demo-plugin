<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://devinvinson.com
 * @since             1.0.0
 * @package           Wppb_Demo_Plugin
 *
 * @wordpress-plugin
 * Plugin Name:       WPPB Demo Plugin
 * Plugin URI:        http://wppb.io/demo-plugin
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Devin Vinson
 * Author URI:        http://devinvinson.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wppb-demo-plugin
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wppb-demo-plugin-activator.php
 */
function activate_wppb_demo_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wppb-demo-plugin-activator.php';
	Wppb_Demo_Plugin_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wppb-demo-plugin-deactivator.php
 */
function deactivate_wppb_demo_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wppb-demo-plugin-deactivator.php';
	Wppb_Demo_Plugin_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wppb_demo_plugin' );
register_deactivation_hook( __FILE__, 'deactivate_wppb_demo_plugin' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wppb-demo-plugin.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wppb_demo_plugin() {

	$plugin = new Wppb_Demo_Plugin();
	$plugin->run();

}
run_wppb_demo_plugin();
