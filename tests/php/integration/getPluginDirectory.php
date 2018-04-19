<?php
/**
 * Tests _get_plugin_directory().
 *
 * @package     KnowTheCode\StarterPlugin\Tests\PHP\Integration
 * @since       1.0.0
 * @link        https://github.com/KnowTheCode/starter-plugin
 * @license     GNU-2.0+
 */

namespace KnowTheCode\StarterPlugin\Tests\PHP\Integration;

use function KnowTheCode\StarterPlugin\_get_plugin_directory;
use function KnowTheCode\StarterPlugin\Tests\PHP\get_plugin_root_dir;

/**
 * Class Tests_GetPluginDirectory
 *
 * @package KnowTheCode\StarterPlugin\Tests\PHP\Integration
 */
class Tests_GetPluginDirectory extends Test_Case {

	/**
	 * Test _get_plugin_directory() should return the plugin's root directory.
	 */
	public function test__get_plugin_directory_should_run_plugin_directory() {
		$this->assertStringEndsWith( 'starter-plugin', _get_plugin_directory() );
		$this->assertSame( rtrim( get_plugin_root_dir(), DIRECTORY_SEPARATOR ), _get_plugin_directory() );
	}
}
