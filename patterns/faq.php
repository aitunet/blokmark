<?php
/**
 * Title: FAQ — details
 * Slug: tunet-starter/faq
 * Categories: tunet-starter
 * Keywords: faq, questions, accordion, details
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ts-section","anchor":"faq","backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ts-section has-surface-background-color has-background" id="faq" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)">
	<!-- wp:group {"align":"wide","className":"ts-faq","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide ts-faq">

		<!-- wp:group {"layout":{"type":"default"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"ts-kicker"} -->
			<p class="ts-kicker"><?php esc_html_e( 'FAQ', 'tunet-starter' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading -->
			<h2 class="wp-block-heading"><?php esc_html_e( 'Questions we hear a lot.', 'tunet-starter' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"text-muted"} -->
			<p class="has-text-muted-color has-text-color"><?php echo wp_kses_post( __( 'Anything else? <a href="#contact">Write to us</a>.', 'tunet-starter' ) ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"ts-faq__list","tfAnimation":"fade-up","tfStagger":70,"layout":{"type":"default"}} -->
		<div class="wp-block-group ts-faq__list">
			<!-- wp:details -->
			<details class="wp-block-details"><summary><?php esc_html_e( 'What do you need from us to start?', 'tunet-starter' ); ?></summary>
				<!-- wp:paragraph -->
				<p><?php esc_html_e( 'A short call, your current site or brand files, and a list of the pages you know you need. We draft the rest together.', 'tunet-starter' ); ?></p>
				<!-- /wp:paragraph -->
			</details>
			<!-- /wp:details -->

			<!-- wp:details -->
			<details class="wp-block-details"><summary><?php esc_html_e( 'How long does a project take?', 'tunet-starter' ); ?></summary>
				<!-- wp:paragraph -->
				<p><?php esc_html_e( 'Starter sites launch in about two weeks, Growth sites in four. The timeline is fixed once we agree on scope.', 'tunet-starter' ); ?></p>
				<!-- /wp:paragraph -->
			</details>
			<!-- /wp:details -->

			<!-- wp:details -->
			<details class="wp-block-details"><summary><?php esc_html_e( 'Do you work with existing sites?', 'tunet-starter' ); ?></summary>
				<!-- wp:paragraph -->
				<p><?php esc_html_e( 'Yes. We often redesign on top of existing WordPress installs and keep your content, plugins and SEO history.', 'tunet-starter' ); ?></p>
				<!-- /wp:paragraph -->
			</details>
			<!-- /wp:details -->

			<!-- wp:details -->
			<details class="wp-block-details"><summary><?php esc_html_e( 'What happens after launch?', 'tunet-starter' ); ?></summary>
				<!-- wp:paragraph -->
				<p><?php esc_html_e( 'A month of included support, then an optional monthly plan for design, development and growth work.', 'tunet-starter' ); ?></p>
				<!-- /wp:paragraph -->
			</details>
			<!-- /wp:details -->

			<!-- wp:details -->
			<details class="wp-block-details"><summary><?php esc_html_e( 'Can I edit the site myself?', 'tunet-starter' ); ?></summary>
				<!-- wp:paragraph -->
				<p><?php esc_html_e( 'Everything is built with native blocks: pages, sections and the header are editable in the Site Editor without touching code.', 'tunet-starter' ); ?></p>
				<!-- /wp:paragraph -->
			</details>
			<!-- /wp:details -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
