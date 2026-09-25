<?php
/**
 * Blokmark functions.
 *
 * Presentation only (CLAUDE.md §5): tokens, fonts, styles, patterns category
 * and block styles. Effects and extra blocks live in the optional Blokino
 * plugin; this theme is complete without it.
 *
 * @package Blokmark
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'BLOKMARK_VERSION', '1.0.0' );

/**
 * Google Fonts URL (the only remote resource wp.org allows).
 *
 * @return string
 */
function blokmark_fonts_url() {
	return 'https://fonts.googleapis.com/css2?family=Gabarito:wght@500;600;700&family=Albert+Sans:wght@400;500;600&family=Azeret+Mono:wght@400;500&display=swap';
}

/**
 * Theme supports, text domain and editor styles.
 */
function blokmark_setup() {
	load_theme_textdomain( 'blokmark', get_template_directory() . '/languages' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'style', 'script', 'gallery', 'caption', 'navigation-widgets', 'search-form', 'comment-form', 'comment-list' ) );
	add_theme_support( 'editor-styles' );
	add_editor_style( array( blokmark_fonts_url(), 'assets/css/tokens.css', 'assets/css/starter.css', 'assets/css/editor.css' ) );
}
add_action( 'after_setup_theme', 'blokmark_setup' );

/**
 * Front-end styles. Fonts first, then the token contract, then the theme CSS.
 */
function blokmark_enqueue_assets() {
	$dir = get_template_directory();
	$uri = get_template_directory_uri();
	wp_enqueue_style( 'blokmark-fonts', blokmark_fonts_url(), array(), null ); // phpcs:ignore WordPress.WP.EnqueuedResourceParameters.MissingVersion -- versioned by Google.
	wp_enqueue_style( 'blokmark-tokens', $uri . '/assets/css/tokens.css', array(), (string) filemtime( $dir . '/assets/css/tokens.css' ) );
	wp_enqueue_style( 'blokmark-styles', $uri . '/assets/css/starter.css', array( 'blokmark-tokens' ), (string) filemtime( $dir . '/assets/css/starter.css' ) );
}
add_action( 'wp_enqueue_scripts', 'blokmark_enqueue_assets', 5 );

/**
 * Preconnect to Google Fonts so the swap happens sooner.
 *
 * @param string[] $hints    URLs.
 * @param string   $relation Relation type.
 * @return string[]
 */
function blokmark_resource_hints( $hints, $relation ) {
	if ( 'preconnect' === $relation ) {
		$hints[] = array( 'href' => 'https://fonts.googleapis.com', 'crossorigin' => '' );
		$hints[] = array( 'href' => 'https://fonts.gstatic.com', 'crossorigin' => '' );
	}
	return $hints;
}
add_filter( 'wp_resource_hints', 'blokmark_resource_hints', 10, 2 );

/**
 * Pattern category shown in the inserter.
 */
function blokmark_register_pattern_category() {
	register_block_pattern_category(
		'blokmark',
		array(
			'label'       => __( 'Blokmark', 'blokmark' ),
			'description' => __( 'Sections designed for Blokmark: hero, services, pricing, testimonials and more.', 'blokmark' ),
		)
	);
}
add_action( 'init', 'blokmark_register_pattern_category' );

/**
 * Block styles: self-contained looks selectable from the block "Styles" panel.
 */
function blokmark_register_block_styles() {
	register_block_style( 'core/group', array( 'name' => 'ts-card', 'label' => __( 'Card', 'blokmark' ) ) );
	register_block_style( 'core/group', array( 'name' => 'ts-ink', 'label' => __( 'Ink panel', 'blokmark' ) ) );
	register_block_style( 'core/heading', array( 'name' => 'ts-marker-underline', 'label' => __( 'Marker underline', 'blokmark' ) ) );
	register_block_style( 'core/button', array( 'name' => 'ts-chalk', 'label' => __( 'Chalk', 'blokmark' ) ) );
}
add_action( 'init', 'blokmark_register_block_styles' );

/**
 * One dismissible, informative notice suggesting the free Blokino plugin
 * (hosted on WordPress.org). No redirect, no nag: dismissed once per user.
 */
function blokmark_core_notice() {
	if ( defined( 'BLOKINO_VERSION' ) || ! current_user_can( 'install_plugins' ) ) {
		return;
	}
	if ( get_user_meta( get_current_user_id(), 'blokmark_notice_dismissed', true ) ) {
		return;
	}
	$screen = get_current_screen();
	if ( ! $screen || ! in_array( $screen->id, array( 'dashboard', 'themes' ), true ) ) {
		return;
	}
	$plugin = 'blokino/blokino.php';
	if ( file_exists( WP_PLUGIN_DIR . '/' . $plugin ) ) {
		$url   = wp_nonce_url( self_admin_url( 'plugins.php?action=activate&plugin=' . rawurlencode( $plugin ) ), 'activate-plugin_' . $plugin );
		$label = __( 'Activate Blokino', 'blokmark' );
	} else {
		$url   = self_admin_url( 'plugin-install.php?tab=plugin-information&plugin=blokino' );
		$label = __( 'Install Blokino', 'blokmark' );
	}
	$dismiss = wp_nonce_url( add_query_arg( 'blokmark_dismiss', '1' ), 'blokmark_dismiss' );
	printf(
		'<div class="notice notice-info is-dismissible blokmark-notice"><p><strong>%1$s</strong> %2$s</p><p><a class="button button-primary" href="%3$s">%4$s</a> <a class="button" href="%5$s">%6$s</a></p></div>',
		esc_html__( 'Blokmark is ready to use.', 'blokmark' ),
		esc_html__( 'Install the free Blokino plugin to add motion effects, sliders and more blocks to your patterns — optional, the theme works without it.', 'blokmark' ),
		esc_url( $url ),
		esc_html( $label ),
		esc_url( $dismiss ),
		esc_html__( 'Dismiss', 'blokmark' )
	);
}
add_action( 'admin_notices', 'blokmark_core_notice' );

/** Persist the dismissal (link with nonce; works without JS). */
function blokmark_dismiss_notice() {
	if ( ! isset( $_GET['blokmark_dismiss'] ) || ! current_user_can( 'install_plugins' ) ) {
		return;
	}
	check_admin_referer( 'blokmark_dismiss' );
	update_user_meta( get_current_user_id(), 'blokmark_notice_dismissed', 1 );
	wp_safe_redirect( remove_query_arg( array( 'blokmark_dismiss', '_wpnonce' ) ) );
	exit;
}
add_action( 'admin_init', 'blokmark_dismiss_notice' );

/**
 * Soporte de WooCommerce (declarativo). No instala ni requiere Woo; solo declara
 * compatibilidad para que, SI alguien activa WooCommerce en el futuro, todo encaje
 * (sin el aviso de "tema no compatible") y la galería de producto funcione. Sin Woo
 * activo no tiene ningún efecto.
 */
function blokmark_woocommerce_support() {
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'blokmark_woocommerce_support' );

/**
 * Hoja de estilos de WooCommerce — SOLO si Woo está activo. Es CSS bespoke que
 * viste el markup estándar de Woo con los tokens --tnt-* del theme (no editable
 * por bloques, no toca plantillas ni el header). Si no hay Woo, no se encola nada.
 */
function blokmark_woocommerce_styles() {
	if ( ! class_exists( 'WooCommerce' ) ) {
		return;
	}
	$rel  = 'assets/css/woocommerce.css';
	$path = get_template_directory() . '/' . $rel;
	if ( ! file_exists( $path ) ) {
		return; // Don't enqueue a 404 URL if the sheet was removed from the package.
	}
	wp_enqueue_style(
		'blokmark-woocommerce',
		get_template_directory_uri() . '/' . $rel,
		array( 'blokmark-styles' ),
		(string) filemtime( $path )
	);
}
add_action( 'wp_enqueue_scripts', 'blokmark_woocommerce_styles', 6 );

/**
 * Enlace "Shop" en el nav del header — SOLO si WooCommerce está activo. Se inyecta
 * en tiempo de render sobre el bloque de navegación del header (clase ts-nav), así
 * aparece/desaparece automáticamente con Woo sin tocar el header.php ni la BD. Sin
 * Woo, el header queda intacto (un estudio, no una tienda).
 */
function blokmark_header_shop_link( $content, $block ) {
	if ( empty( $block['blockName'] ) || 'core/navigation' !== $block['blockName'] ) {
		return $content;
	}
	$class = isset( $block['attrs']['className'] ) ? $block['attrs']['className'] : '';
	if ( false === strpos( $class, 'ts-nav' ) || ! class_exists( 'WooCommerce' ) ) {
		return $content;
	}
	$url  = function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : home_url( '/shop/' );
	$item = '<li class="wp-block-navigation-item wp-block-navigation-link"><a class="wp-block-navigation-item__content" href="' . esc_url( $url ) . '"><span class="wp-block-navigation-item__label">' . esc_html__( 'Shop', 'blokmark' ) . '</span></a></li>';

	// Insertar como último ítem de la lista principal (antes del </ul> final).
	$pos = strrpos( $content, '</ul>' );
	if ( false !== $pos ) {
		$content = substr( $content, 0, $pos ) . $item . substr( $content, $pos );
	}
	return $content;
}
add_filter( 'render_block', 'blokmark_header_shop_link', 10, 2 );

/**
 * Footer Shop + My-account links — only when WooCommerce is active. Mirrors the
 * header Shop link: injected at render on the footer "Explore" nav (className
 * ts-footer__nav--explore, patterns/footer.php), so it appears/disappears
 * automatically with Woo. No importer surgery. The "Company" nav shares
 * ts-footer__nav but not the --explore modifier, so it is never touched.
 */
function blokmark_footer_woo_links( $content, $block ) {
	if ( empty( $block['blockName'] ) || 'core/navigation' !== $block['blockName'] ) {
		return $content;
	}
	$class = isset( $block['attrs']['className'] ) ? $block['attrs']['className'] : '';
	if ( false === strpos( $class, 'ts-footer__nav--explore' ) || ! class_exists( 'WooCommerce' ) ) {
		return $content;
	}
	$shop    = function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : home_url( '/shop/' );
	$account = function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'myaccount' ) : home_url( '/my-account/' );
	$items   = '<li class="wp-block-navigation-item wp-block-navigation-link"><a class="wp-block-navigation-item__content" href="' . esc_url( $shop ) . '"><span class="wp-block-navigation-item__label">' . esc_html__( 'Shop', 'blokmark' ) . '</span></a></li>'
		. '<li class="wp-block-navigation-item wp-block-navigation-link"><a class="wp-block-navigation-item__content" href="' . esc_url( $account ) . '"><span class="wp-block-navigation-item__label">' . esc_html__( 'My account', 'blokmark' ) . '</span></a></li>';
	$pos = strrpos( $content, '</ul>' );
	if ( false !== $pos ) {
		$content = substr( $content, 0, $pos ) . $items . substr( $content, $pos );
	}
	return $content;
}
add_filter( 'render_block', 'blokmark_footer_woo_links', 10, 2 );
