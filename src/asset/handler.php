<?php
/**
 * Asset Handler.
 *
 * @package     KnowTheCode\StarterPlugin\Asset
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://knowthecode.io
 * @license     GNU-2.0+
 */

namespace KnowTheCode\StarterPlugin\Asset;

use function KnowTheCode\StarterPlugin\_get_plugin_directory;
use function KnowTheCode\StarterPlugin\_get_plugin_url;
use function KnowTheCode\StarterPlugin\_is_in_development_mode;

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_plugin_script' );
/**
 * Enqueues the plugin's script(s).
 *
 * @since 1.0.0
 *
 * @return void
 */
function enqueue_plugin_script() {
	$file = _is_in_development_mode()
		? '/assets/dist/starter-plugin.min.js'
		: '/assets/scripts/starter-plugin.js';

	wp_enqueue_script(
		'starter_plugin_script',
		_get_plugin_url() . $file,
		[ 'jquery' ],
		_get_asset_version( $file ),
		true
	);
}

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_plugin_css' );
/**
 * Enqueues the plugin's stylesheet.
 *
 * @since 1.0.0
 *
 * @return void
 */
function enqueue_plugin_css() {
	$file = _is_in_development_mode()
		? '/assets/dist/starter-plugin.min.css'
		: '/assets/css/starter-plugin.css';

	wp_enqueue_style(
		'plugin_starter_styles',
		_get_plugin_url() . $file,
		[],
		_get_asset_version( $file )
	);
}

/**
 * Get's the asset file's version number by using it's modification timestamp.
 *
 * @since 1.0.0
 *
 * @param string $relative_path Relative path to the asset file.
 *
 * @return bool|int
 */
function _get_asset_version( $relative_path ) {
	return filemtime( _get_plugin_directory() . $relative_path );
}
