<?php // phpcs:ignore

/**
 * Plugin Name: WP Plugin Boilerplate
 * Description: A simple plugin boilerplate for WordPress ready to use!
 * Plugin URI:  https://github.com/farhanmaba/wp-plugin-boilerplate
 * Version:     1.0.0
 * Author:      Farhan Sabir
 * Author URI:  https://www.linkedin.com/in/farhanmaba/
 * License:     GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: plugin-boilerplate
 */

if ( ! defined( 'ABSPATH' ) ) { // Security: Abort if this file is called directly
	die;
}

define( 'DIR_PATH', plugin_dir_path( __FILE__ ) ); // Define Dirpath for hooks

if ( ! class_exists( 'WpPluginBoilerplate' ) ) {
	class WpPluginBoilerplate {
		/**
		 * Constructor
		 */
		public function __construct() {
			$this->setup_actions();
		}
		/**
		 * Setting up Hooks
		 */
		public function setup_actions() {
			//Main plugin hooks
			register_activation_hook( DIR_PATH, array( 'WpPluginBoilerplate', 'activate' ) );
			register_deactivation_hook( DIR_PATH, array( 'WpPluginBoilerplate', 'deactivate' ) );
		}
		/**
		 * Activate callback
		 */
		public static function activate() {
			//Activation code in here
		}

		/**
		 * Deactivate callback
		 *
		 */
		public static function deactivate() {
			//Deactivation code in here
		}
	}

	// instantiate the plugin class
	$wp_plugin_template = new WpPluginBoilerplate();
}
