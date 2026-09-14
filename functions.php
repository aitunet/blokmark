<?php
/**
 * Tunet Starter functions.
 *
 * Presentation only (CLAUDE.md §5): tokens, fonts, styles, patterns category
 * and block styles. Effects and extra blocks live in the optional Tunet Core
 * plugin; this theme is complete without it.
 *
 * @package Tunet_Starter
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'TUNET_STARTER_VERSION', '1.0.0' );

/**
 * Google Fonts URL (the only remote resource wp.org allows).
 *
 * @return string
 */
function tunet_starter_fonts_url() {
	return 'https://fonts.googleapis.com/css2?family=Gabarito:wght@500;600;700&family=Albert+Sans:wght@400;500;600&family=Azeret+Mono:wght@400;500&display=swap';
}

/**
 * Theme supports, text domain and editor styles.
 */
function tunet_starter_setup() {
	load_theme_textdomain( 'tunet-starter', get_template_directory() . '/languages' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'style', 'script', 'gallery', 'caption', 'navigation-widgets', 'search-form', 'comment-form', 'comment-list' ) );
	add_theme_support( 'editor-styles' );
	add_editor_style( array( tunet_starter_fonts_url(), 'assets/css/tokens.css', 'assets/css/starter.css', 'assets/css/editor.css' ) );
}
add_action( 'after_setup_theme', 'tunet_starter_setup' );

/**
 * Front-end styles. Fonts first, then the token contract, then the theme CSS.
 */
function tunet_starter_enqueue_assets() {
	$dir = get_template_directory();
	$uri = get_template_directory_uri();
	wp_enqueue_style( 'tunet-starter-fonts', tunet_starter_fonts_url(), array(), null ); // phpcs:ignore WordPress.WP.EnqueuedResourceParameters.MissingVersion -- versioned by Google.
	wp_enqueue_style( 'tunet-starter-tokens', $uri . '/assets/css/tokens.css', array(), (string) filemtime( $dir . '/assets/css/tokens.css' ) );
	wp_enqueue_style( 'tunet-starter-styles', $uri . '/assets/css/starter.css', array( 'tunet-starter-tokens' ), (string) filemtime( $dir . '/assets/css/starter.css' ) );
}
add_action( 'wp_enqueue_scripts', 'tunet_starter_enqueue_assets', 5 );

/**
 * Preconnect to Google Fonts so the swap happens sooner.
 *
 * @param string[] $hints    URLs.
 * @param string   $relation Relation type.
 * @return string[]
 */
function tunet_starter_resource_hints( $hints, $relation ) {
	if ( 'preconnect' === $relation ) {
		$hints[] = array( 'href' => 'https://fonts.googleapis.com', 'crossorigin' => '' );
		$hints[] = array( 'href' => 'https://fonts.gstatic.com', 'crossorigin' => '' );
	}
	return $hints;
}
add_filter( 'wp_resource_hints', 'tunet_starter_resource_hints', 10, 2 );

/**
 * Pattern category shown in the inserter.
 */
function tunet_starter_register_pattern_category() {
	register_block_pattern_category(
		'tunet-starter',
		array(
			'label'       => __( 'Tunet Starter', 'tunet-starter' ),
			'description' => __( 'Sections designed for Tunet Starter: hero, services, pricing, testimonials and more.', 'tunet-starter' ),
		)
	);
}
add_action( 'init', 'tunet_starter_register_pattern_category' );
