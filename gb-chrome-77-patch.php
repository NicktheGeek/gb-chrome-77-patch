<?php
/*
Plugin Name: Gutenberg Patch for Chrome 77 Bug
Plugin URI: https://github.com/NicktheGeek/gb-chrome-77-patch/
Description: Adds a bit of CSS to the admin head to fix an issue where the metaboxes can overlap the block editor.
Version: 0.0.1
Author: NicktheGeek
Author URI: http://designsbynickthegeek.com
License: GPLv2 or later
*/

/**
 * Modify the height of a specific CSS class to fix an issue in Chrome 77 with Gutenberg.
 *
 * @see https://github.com/WordPress/gutenberg/issues/17406
 */
add_action(
	'admin_head',
	function() {
		echo '<style>.block-editor-writing-flow { height: auto; }</style>'; // phpcs:ignore
	}
);
