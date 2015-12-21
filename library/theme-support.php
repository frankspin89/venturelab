<?php
/**
 * Register theme support for languages, menus, post-thumbnails, post-formats etc.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

if ( ! function_exists( 'foundationpress_theme_support' ) ) :
function foundationpress_theme_support() {
	load_theme_textdomain( 'foundationpress', get_template_directory() . '/languages' );
	add_theme_support( 'menus' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'venturelab-860', 860, 600, false );
	add_theme_support( 'automatic-feed-links' );
}
add_action( 'after_setup_theme', 'foundationpress_theme_support' );
endif;
?>
