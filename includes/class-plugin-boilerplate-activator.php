<?php

/**
 * Plugin_Boilerplate_Activator
 *
 * Class the keep the code related to activation
 */
class Plugin_Boilerplate_Activator {

	/**
	 * Minimum PHP Version
	 */
	const MINIMUM_PHP_VERSION = '7.0';

	/**
	 * Compatibility Checks
	 *
	 * Checks if the installed version of Elementor meets the plugin's minimum requirement.
	 * Checks if the installed PHP version meets the plugin's minimum requirement.
	 */
	public function is_compatible() {

		// Check for required PHP version
		if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_minimum_php_version' ] ); // phpcs:ignore
			return false;
		}

		return true;
	}

	/**
	 * Admin notice
	 *
	 * Warning when the site doesn't have a minimum required PHP version.
	 */
	public function admin_notice_minimum_php_version() {

		require_once DIR_PATH . 'includes/class-plugin-boilerplate-deactivator.php';
		Plugin_Boilerplate_Deactivator::admin_notice_minimum_php_version();

	}

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 */
	public static function activate() {
		// Setup any post types or create tables that require before the activation of the plugin
		// Check PHP version here if it's cin´ompatible

		$this->is_compatible();
	}

}
