<?php
/**
 * Title: Pricing — three plans
 * Slug: blokmark/pricing
 * Categories: blokmark
 * Keywords: pricing, plans, packages, price table
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ts-section","anchor":"pricing","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ts-section" id="pricing" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)">
	<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"className":"ts-kicker"} -->
		<p class="ts-kicker"><?php esc_html_e( 'Pricing', 'blokmark' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"className":"ts-section-title"} -->
		<h2 class="wp-block-heading ts-section-title"><?php esc_html_e( 'Simple plans, fixed prices.', 'blokmark' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"className":"ts-lede"} -->
		<p class="ts-lede"><?php esc_html_e( 'Every plan includes design, build and a month of support after launch.', 'blokmark' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","className":"ts-pricing","tfAnimation":"scale-in","tfStagger":120,"tfAnimEasing":"spring","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide ts-pricing">

		<!-- wp:group {"className":"is-style-ts-card ts-plan","style":{"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6","right":"var:preset|spacing|6"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group is-style-ts-card ts-plan" style="padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)">
			<!-- wp:paragraph {"className":"ts-kicker"} -->
			<p class="ts-kicker"><?php esc_html_e( 'Starter', 'blokmark' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"className":"ts-plan__price"} -->
			<p class="ts-plan__price"><?php echo wp_kses_post( __( '$2,400 <span>one-time</span>', 'blokmark' ) ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:list -->
			<ul class="wp-block-list">
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Up to 5 pages', 'blokmark' ); ?></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Brand-aligned design', 'blokmark' ); ?></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Editable in the Site Editor', 'blokmark' ); ?></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><?php esc_html_e( '2 weeks from kickoff', 'blokmark' ); ?></li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#contact"><?php esc_html_e( 'Choose Starter', 'blokmark' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"is-style-ts-ink ts-plan ts-plan--featured","style":{"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6","right":"var:preset|spacing|6"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group is-style-ts-ink ts-plan ts-plan--featured" style="padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)">
			<!-- wp:paragraph {"className":"ts-kicker"} -->
			<p class="ts-kicker"><?php esc_html_e( 'Growth', 'blokmark' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"className":"ts-plan__badge"} -->
			<p class="ts-plan__badge"><?php esc_html_e( 'Most popular', 'blokmark' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"className":"ts-plan__price"} -->
			<p class="ts-plan__price"><?php echo wp_kses_post( __( '<mark>$5,900</mark> <span>one-time</span>', 'blokmark' ) ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:list -->
			<ul class="wp-block-list">
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Up to 12 pages', 'blokmark' ); ?></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Copywriting included', 'blokmark' ); ?></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Blog and newsletter setup', 'blokmark' ); ?></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'SEO foundations', 'blokmark' ); ?></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><?php esc_html_e( '4 weeks from kickoff', 'blokmark' ); ?></li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-ts-chalk"} -->
				<div class="wp-block-button is-style-ts-chalk"><a class="wp-block-button__link wp-element-button" href="#contact"><?php esc_html_e( 'Choose Growth', 'blokmark' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"is-style-ts-card ts-plan","style":{"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6","right":"var:preset|spacing|6"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group is-style-ts-card ts-plan" style="padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)">
			<!-- wp:paragraph {"className":"ts-kicker"} -->
			<p class="ts-kicker"><?php esc_html_e( 'Scale', 'blokmark' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"className":"ts-plan__price"} -->
			<p class="ts-plan__price"><?php echo wp_kses_post( __( '$1,200 <span>per month</span>', 'blokmark' ) ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:list -->
			<ul class="wp-block-list">
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Ongoing design & dev', 'blokmark' ); ?></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Monthly growth report', 'blokmark' ); ?></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Priority support', 'blokmark' ); ?></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Cancel anytime', 'blokmark' ); ?></li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#contact"><?php esc_html_e( 'Talk to us', 'blokmark' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
