<?php
/**
 * Tests _get_plugin_url().
 *
 * @package     KnowTheCode\StarterPlugin\Tests\PHP\Integration
 * @since       1.0.0
 * @link        https://github.com/KnowTheCode/starter-plugin
 * @license     GNU-2.0+
 */

namespace KnowTheCode\StarterPlugin\Tests\PHP\Integration;

use function KnowTheCode\StarterPlugin\_get_plugin_url;

/**
 * Class Tests_GetPluginUrl
 *
 * @package KnowTheCode\StarterPlugin\Tests\PHP\Integration
 */
class Tests_GetPluginUrl extends Test_Case {

	/**
	 * Test _get_plugin_url() should return the plugin's URL.
	 */
	public function test__get_plugin_url_should_run_plugin_url() {
		$this->assertStringEndsWith( 'plugins/starter-plugin', _get_plugin_url() );
	}
}
