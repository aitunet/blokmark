<?php
/**
 * Title: Footer
 * Slug: tunet-starter/footer
 * Categories: tunet-starter
 * Block Types: core/template-part/footer
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"footer","className":"ts-footer","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|6"}}},"layout":{"type":"constrained"}} -->
<footer class="wp-block-group alignfull ts-footer" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--6)">
	<!-- wp:columns {"align":"wide","className":"ts-footer__cols","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|6","left":"var:preset|spacing|6"}}}} -->
	<div class="wp-block-columns alignwide ts-footer__cols">
		<!-- wp:column {"width":"36%"} -->
		<div class="wp-block-column" style="flex-basis:36%">
			<!-- wp:group {"className":"ts-brand","layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group ts-brand">
				<!-- wp:site-logo {"width":120,"shouldSyncIcon":false} /-->
				<!-- wp:site-title {"level":0,"className":"ts-site-title"} /-->
			</div>
			<!-- /wp:group -->
			<!-- wp:paragraph {"className":"ts-footer__about","fontSize":"sm"} -->
			<p class="ts-footer__about has-sm-font-size"><?php esc_html_e( 'A small studio for brands, websites and the growth that follows. We keep things simple, fast and honest.', 'tunet-starter' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":3,"className":"ts-footer__title","fontSize":"xs"} -->
			<h3 class="wp-block-heading ts-footer__title has-xs-font-size"><?php esc_html_e( 'Explore', 'tunet-starter' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:navigation {"overlayMenu":"never","className":"ts-footer__nav","layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
				<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Services', 'tunet-starter' ); ?>","url":"/#services","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_html_e( 'About', 'tunet-starter' ); ?>","url":"/#about","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Pricing', 'tunet-starter' ); ?>","url":"/#pricing","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_html_e( 'FAQ', 'tunet-starter' ); ?>","url":"/#faq","kind":"custom"} /-->
			<!-- /wp:navigation -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":3,"className":"ts-footer__title","fontSize":"xs"} -->
			<h3 class="wp-block-heading ts-footer__title has-xs-font-size"><?php esc_html_e( 'Company', 'tunet-starter' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:navigation {"overlayMenu":"never","className":"ts-footer__nav","layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
				<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Journal', 'tunet-starter' ); ?>","url":"/#journal","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Contact', 'tunet-starter' ); ?>","url":"/#contact","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Privacy policy', 'tunet-starter' ); ?>","url":"/privacy-policy/","kind":"custom"} /-->
			<!-- /wp:navigation -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":3,"className":"ts-footer__title","fontSize":"xs"} -->
			<h3 class="wp-block-heading ts-footer__title has-xs-font-size"><?php esc_html_e( 'Follow', 'tunet-starter' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:social-links {"className":"is-style-logos-only ts-footer__social","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|3"}}},"layout":{"type":"flex"}} -->
			<ul class="wp-block-social-links is-style-logos-only ts-footer__social">
				<!-- wp:social-link {"url":"https://www.instagram.com/","service":"instagram"} /-->
				<!-- wp:social-link {"url":"https://www.linkedin.com/","service":"linkedin"} /-->
				<!-- wp:social-link {"url":"https://x.com/","service":"x"} /-->
				<!-- wp:social-link {"url":"https://www.youtube.com/","service":"youtube"} /-->
			</ul>
			<!-- /wp:social-links -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:group {"align":"wide","className":"ts-footer__legal","style":{"spacing":{"padding":{"top":"var:preset|spacing|5"},"margin":{"top":"var:preset|spacing|7"}},"border":{"top":{"color":"var:preset|color|border","width":"1px"}}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
	<div class="wp-block-group alignwide ts-footer__legal" style="border-top-color:var(--wp--preset--color--border);border-top-width:1px;margin-top:var(--wp--preset--spacing--7);padding-top:var(--wp--preset--spacing--5)">
		<!-- wp:paragraph {"fontSize":"xs"} -->
		<p class="has-xs-font-size"><?php esc_html_e( '© 2026 Northline Studio. All rights reserved.', 'tunet-starter' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"fontSize":"xs"} -->
		<p class="has-xs-font-size">Theme by <a href="https://tunetdesign.com" rel="nofollow">TUNET</a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</footer>
<!-- /wp:group -->
