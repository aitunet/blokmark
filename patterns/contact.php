<?php
/**
 * Title: Contact — details
 * Slug: blokmark/contact
 * Categories: blokmark
 * Keywords: contact, email, phone, address, details
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ts-section ts-contact","anchor":"contact","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ts-section ts-contact" id="contact" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)">
	<!-- wp:group {"align":"wide","className":"ts-contact__grid","tfAnimation":"fade-up","tfStagger":90,"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide ts-contact__grid">

		<!-- wp:group {"layout":{"type":"default"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"ts-kicker"} -->
			<p class="ts-kicker"><?php esc_html_e( 'Contact', 'blokmark' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading -->
			<h2 class="wp-block-heading"><?php echo wp_kses_post( __( 'Let’s talk about your <mark>next</mark> step.', 'blokmark' ) ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"text-muted"} -->
			<p class="has-text-muted-color has-text-color"><?php esc_html_e( 'No forms, no ticket numbers. Write to a person and get an answer from a person.', 'blokmark' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"is-style-ts-card ts-contact__list","style":{"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6","right":"var:preset|spacing|6"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group is-style-ts-card ts-contact__list" style="padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)">
			<!-- wp:list -->
			<ul class="wp-block-list">
				<!-- wp:list-item -->
				<li><?php echo wp_kses_post( __( '<strong>Email</strong> hello@northline.studio', 'blokmark' ) ); ?></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><?php echo wp_kses_post( __( '<strong>Phone</strong> +1 (305) 555-0142', 'blokmark' ) ); ?></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><?php echo wp_kses_post( __( '<strong>Studio</strong> 210 Ocean Drive, Miami, FL', 'blokmark' ) ); ?></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><?php echo wp_kses_post( __( '<strong>Hours</strong> Mon–Fri, 9am–6pm ET', 'blokmark' ) ); ?></li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="mailto:hello@northline.studio"><?php esc_html_e( 'Email us', 'blokmark' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
		<?php // Add your contact form plugin below this block if you need a form. ?>

	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
