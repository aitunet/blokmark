<?php
/**
 * Title: 404
 * Slug: tunet-starter/404
 * Categories: tunet-starter
 * Block Types: core/template-part
 * Inserter: no
 */
?>
<!-- wp:group {"align":"wide","className":"ts-404","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide ts-404" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)">
	<!-- wp:paragraph {"className":"ts-kicker"} -->
	<p class="ts-kicker"><?php esc_html_e( 'Error 404', 'tunet-starter' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"level":1} -->
	<h1 class="wp-block-heading"><?php echo wp_kses_post( __( 'Page not <mark>found</mark>.', 'tunet-starter' ) ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"className":"ts-lede"} -->
	<p class="ts-lede"><?php esc_html_e( 'The link may be old, or the page moved. Try a search, or head back home.', 'tunet-starter' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:search {"label":"<?php esc_html_e( 'Search', 'tunet-starter' ); ?>","showLabel":false,"placeholder":"<?php esc_attr_e( 'Search the site…', 'tunet-starter' ); ?>","buttonText":"<?php esc_html_e( 'Search', 'tunet-starter' ); ?>","buttonPosition":"button-inside"} /-->

	<!-- wp:paragraph -->
	<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( '← Back to the home page', 'tunet-starter' ); ?></a></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
