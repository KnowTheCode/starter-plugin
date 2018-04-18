<?php
/**
 * Test Case for the Plugin's Unit Tests.
 *
 * @package     KnowTheCode\StarterPlugin\Tests\PHP\Unit
 * @since       1.0.0
 * @link        https://github.com/KnowTheCode/starter-plugin
 * @license     GNU-2.0+
 */

namespace KnowTheCode\StarterPlugin\Tests\PHP\Unit;

use Brain\Monkey;
use KnowTheCode\StarterPlugin\Tests\PHP\Test_Case_Trait;
use PHPUnit\Framework\TestCase;

/**
 * Abstract Class Test_Case
 *
 * @package KnowTheCode\StarterPlugin\Tests\PHP\Unit
 */
abstract class Test_Case extends TestCase {

	use Test_Case_Trait;

	/**
	 * Prepares the test environment before each test.
	 */
	public function setUp() {
		$this->test_root_dir = get_test_root_dir() . DIRECTORY_SEPARATOR;
		parent::setUp();
		Monkey\setUp();
	}

	/**
	 * Cleans up the test environment after each test.
	 */
	protected function tearDown() {
		Monkey\tearDown();
		parent::tearDown();
	}

	/**
	 * Setup the stubs for the common WordPress escaping and internationalization functions.
	 */
	protected function setup_common_wp_stubs() {
		// Common escaping functions.
		Monkey\Functions\stubs( array(
			'esc_attr',
			'esc_html',
			'esc_textarea',
			'esc_url',
			'wp_kses_post',
		) );

		// Common internationalization functions.
		Monkey\Functions\stubs( array(
			'__',
			'esc_html__',
			'esc_html_x',
			'esc_attr_x',
		) );

		foreach ( array( 'esc_attr_e', 'esc_html_e', '_e' ) as $wp_function ) {
			Monkey\Functions\when( $wp_function )->echoArg();
		}
	}
}
