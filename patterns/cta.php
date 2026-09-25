<?php
/**
 * Title: Call to action — Ink band
 * Slug: blokmark/cta
 * Categories: blokmark
 * Keywords: cta, call to action, band, contact, ink
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ts-section is-style-ts-ink ts-cta","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ts-section is-style-ts-ink ts-cta" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)">
	<!-- wp:group {"align":"wide","className":"ts-cta__grid","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide ts-cta__grid">

		<!-- wp:group {"layout":{"type":"default"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"fontSize":"2xl","tfAnimation":"text-stagger","tfStagger":50} -->
			<h2 class="wp-block-heading has-2-xl-font-size"><?php echo wp_kses_post( __( 'Ready to <mark>start</mark>?', 'blokmark' ) ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"ts-lede"} -->
			<p class="ts-lede"><?php esc_html_e( 'Tell us what you are building. We reply within one business day with next steps and a fixed quote.', 'blokmark' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"layout":{"type":"default"}} -->
		<div class="wp-block-group">
			<!-- wp:buttons {"tfAnimation":"fade-up","tfAnimDelay":250} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-ts-chalk"} -->
				<div class="wp-block-button is-style-ts-chalk"><a class="wp-block-button__link wp-element-button" href="#contact"><?php esc_html_e( 'Book a call', 'blokmark' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

			<!-- wp:paragraph {"fontSize":"sm"} -->
			<p class="has-sm-font-size"><?php echo wp_kses_post( __( 'or email <a href="mailto:hello@northline.studio">hello@northline.studio</a>', 'blokmark' ) ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
