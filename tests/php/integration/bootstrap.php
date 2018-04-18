<?php
/**
 * Bootstraps the Plugin's Integration Tests.
 *
 * @package     KnowTheCode\StarterPlugin\Tests\PHP\Integration
 * @since       1.0.0
 * @link        https://github.com/KnowTheCode/starter-plugin
 * @license     GNU-2.0+
 */

namespace KnowTheCode\StarterPlugin\Tests\PHP\Integration;

use function KnowTheCode\StarterPlugin\Tests\PHP\get_plugin_root_dir;
use function KnowTheCode\StarterPlugin\Tests\PHP\load_composer_autoloader;

/**
 * Gets the integration test's root directory.
 *
 * @since 1.0.0
 *
 * @return string
 */
function get_test_root_dir() {
	return __DIR__;
}

/**
 * Gets the WordPress' tests suite directory.
 *
 * @since 1.0.0
 *
 * @return string
 */
function get_wp_tests_dir() {
	$tests_dir = getenv( 'WP_TESTS_DIR' );

	// Travis CI & Vagrant SSH tests directory.
	if ( empty( $tests_dir ) ) {
		$tests_dir = '/tmp/wordpress-tests';
	}

	// If the tests' includes directory does not exist, try a relative path to the Core tests directory.
	if ( ! file_exists( $tests_dir . '/includes/' ) ) {
		$tests_dir = '../../../../tests/phpunit';
	}

	// Check it again. If it doesn't exist, stop here and post a message as to why we stopped.
	if ( ! file_exists( $tests_dir . '/includes/' ) ) {
		trigger_error( 'Unable to run the integration tests, because the WordPress test suite could not be located.', E_USER_ERROR ); // phpcs:ignore WordPress.PHP.DevelopmentFunctions.error_log_trigger_error -- Valid use case for our testing suite.
	}

	// Strip off the trailing directory separator, if it exists.
	return rtrim( $tests_dir, DIRECTORY_SEPARATOR );
}

/**
 * Starts up the WordPress Test Suite.
 *
 * @since 1.0.0
 *
 * @return void
 */
function startup_wp_test_suite() {
	$wp_tests_dir = get_wp_tests_dir();

	// Gives access to tests_add_filter() function.
	require_once $wp_tests_dir . '/includes/functions.php';

	// Start up the WP testing environment.
	require_once $wp_tests_dir . '/includes/bootstrap.php';
}

/**
 * Load the test suite's dependencies.
 *
 * @since 1.0.0
 *
 * @return void
 */
function load_dependencies() {
	require_once dirname( __DIR__ ) . '/functions.php';
	load_composer_autoloader();

	startup_wp_test_suite();

	require_once dirname( __DIR__ ) . '/test-case-trait.php';
	require_once get_test_root_dir() . '/class-test-case.php';

	// Load the plugin.
	require get_plugin_root_dir() . 'bootstrap.php';
}

load_dependencies();
