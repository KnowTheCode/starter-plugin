<?php
/**
 * Tests _is_in_development_mode().
 *
 * @package     KnowTheCode\StarterPlugin\Tests\PHP\Integration
 * @since       1.0.0
 * @link        https://github.com/KnowTheCode/starter-plugin
 * @license     GNU-2.0+
 */

namespace KnowTheCode\StarterPlugin\Tests\PHP\Integration;

use function KnowTheCode\StarterPlugin\_is_in_development_mode;
use function KnowTheCode\StarterPlugin\Tests\PHP\get_plugin_root_dir;

/**
 * Class Tests_IsInDevelopmentMode
 *
 * @package KnowTheCode\StarterPlugin\Tests\PHP\Integration
 */
class Tests_IsInDevelopmentMode extends Test_Case {

	/**
	 * Test _is_in_development_mode() should return false when not in development mode.
	 */
	public function test__is_in_development_mode_should_return_false_when_not_in_dev_mode() {
		$this->assertFalse( _is_in_development_mode() );
	}

	/**
	 * Test _is_in_development_mode() should return true when in development mode.
	 */
	public function test__is_in_development_mode_should_return_true_when_in_dev_mode() {
		// If defined, skip this test.
		if ( defined( 'WP_DEBUG' ) ) {
			$this->assertTrue( true );
			return;
		}

		define( 'WP_DEBUG', true );
		$this->assertTrue( _is_in_development_mode() );
	}
}
