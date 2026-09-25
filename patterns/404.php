<?php
/**
 * Title: 404
 * Slug: blokmark/404
 * Categories: blokmark
 * Block Types: core/template-part
 * Inserter: no
 */
?>
<!-- wp:group {"align":"wide","className":"ts-404","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide ts-404" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)">
	<!-- wp:paragraph {"className":"ts-kicker"} -->
	<p class="ts-kicker"><?php esc_html_e( 'Error 404', 'blokmark' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"level":1} -->
	<h1 class="wp-block-heading"><?php echo wp_kses_post( __( 'Page not <mark>found</mark>.', 'blokmark' ) ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"className":"ts-lede"} -->
	<p class="ts-lede"><?php esc_html_e( 'The link may be old, or the page moved. Try a search, or head back home.', 'blokmark' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:search {"label":"<?php esc_html_e( 'Search', 'blokmark' ); ?>","showLabel":false,"placeholder":"<?php esc_attr_e( 'Search the site…', 'blokmark' ); ?>","buttonText":"<?php esc_html_e( 'Search', 'blokmark' ); ?>","buttonPosition":"button-inside"} /-->

	<!-- wp:paragraph -->
	<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( '← Back to the home page', 'blokmark' ); ?></a></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
