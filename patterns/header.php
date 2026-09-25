<?php
/**
 * Title: Header
 * Slug: blokmark/header
 * Categories: blokmark
 * Block Types: core/template-part/header
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"header","className":"ts-header","align":"full","layout":{"type":"constrained"}} -->
<header class="wp-block-group alignfull ts-header">
	<!-- wp:group {"align":"wide","className":"ts-header__bar","style":{"spacing":{"padding":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|4"}}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"}} -->
	<div class="wp-block-group alignwide ts-header__bar" style="padding-top:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4)">
		<!-- wp:group {"className":"ts-brand","layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group ts-brand">
			<!-- wp:site-logo {"width":140,"shouldSyncIcon":false} /-->
			<!-- wp:site-title {"level":0,"className":"ts-site-title"} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"ts-header__nav","style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group ts-header__nav">
			<!-- wp:navigation {"overlayMenu":"mobile","overlayBackgroundColor":"bg","overlayTextColor":"text","className":"ts-nav","layout":{"type":"flex","justifyContent":"right"},"style":{"spacing":{"blockGap":"var:preset|spacing|5"}}} -->
				<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Home', 'blokmark' ); ?>","url":"/","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Services', 'blokmark' ); ?>","url":"/#services","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_html_e( 'About', 'blokmark' ); ?>","url":"/#about","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Pricing', 'blokmark' ); ?>","url":"/#pricing","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Contact', 'blokmark' ); ?>","url":"/#contact","kind":"custom"} /-->
			<!-- /wp:navigation -->

			<!-- wp:buttons {"className":"ts-header__cta"} -->
			<div class="wp-block-buttons ts-header__cta">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/#contact"><?php esc_html_e( 'Get started', 'blokmark' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</header>
<!-- /wp:group -->
