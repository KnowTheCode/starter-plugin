<?php
/**
 * Shared functionality for all test suites.
 *
 * @package     KnowTheCode\StarterPlugin\Tests\PHP
 * @since       1.0.0
 * @link        https://github.com/KnowTheCode/starter-plugin
 * @license     GNU-2.0+
 */

namespace KnowTheCode\StarterPlugin\Tests\PHP;

if ( version_compare( phpversion(), '5.6.0', '<' ) ) {
	die( 'Whoops, PHP 5.6 or higher is required.' );
}

/**
 * Gets the plugin's root directory.
 *
 * @since 1.0.0
 *
 * @return string
 */
function get_plugin_root_dir() {
	static $root_dir;

	if ( is_null( $root_dir ) ) {
		$root_dir = dirname( dirname( __DIR__ ) ) . DIRECTORY_SEPARATOR;
	}

	return $root_dir;
}

/**
 * Attempts to load Composer's autoloader.
 *
 * @since 1.0.0
 *
 * @return void
 */
function load_composer_autoloader() {
	$path_to_vendor_dir = get_plugin_root_dir() . 'vendor' . DIRECTORY_SEPARATOR;

	if ( ! is_readable( $path_to_vendor_dir . 'autoload.php' ) ) {
		die( 'Whoops, we need Composer before we start running tests.  Please type: `composer install`.  When done, try running `phpunit` again.' );
	}

	require_once $path_to_vendor_dir . 'autoload.php';
}
