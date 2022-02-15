<?php

/**
 * Plugin_Boilerplate_Deactivator
 *
 * Class the keep the code related to de-activation
 */
class Plugin_Boilerplate_Deactivator {

	/**
	 * Admin notice
	 *
	 * Warning when the site doesn't have a minimum required PHP version.
	 */
	public function admin_notice_minimum_php_version() {

		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] ); // phpcs:ignore

		$message = sprintf(
			/* translators: 1: Plugin name 2: PHP 3: Required PHP version */
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'wp-plugin-boilerplate' ),
			'<strong>' . esc_html__( 'WP Plugin Boilerplate', 'wp-plugin-boilerplate' ) . '</strong>',
			'<strong>' . esc_html__( 'PHP', 'wp-plugin-boilerplate' ) . '</strong>',
			self::MINIMUM_PHP_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message ); // phpcs:ignore

	}

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {
		// Delete any custom post types or tables or data
	}

}
