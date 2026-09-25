<?php
/**
 * Title: Testimonials — 2:1
 * Slug: blokmark/testimonials
 * Categories: blokmark
 * Keywords: testimonials, quotes, clients, reviews
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ts-section ts-testimonials","backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ts-section ts-testimonials has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)">
	<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"className":"ts-kicker"} -->
		<p class="ts-kicker"><?php esc_html_e( 'Clients', 'blokmark' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"className":"ts-section-title"} -->
		<h2 class="wp-block-heading ts-section-title"><?php esc_html_e( 'What it’s like to work with us.', 'blokmark' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","className":"ts-quotes","tfAnimation":"fade-up","tfStagger":110,"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide ts-quotes">

		<!-- wp:group {"className":"is-style-ts-card ts-quote ts-quote--lead","style":{"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6","right":"var:preset|spacing|6"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group is-style-ts-card ts-quote ts-quote--lead" style="padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)">
			<!-- wp:paragraph {"fontSize":"lg","fontFamily":"display"} -->
			<p class="has-display-font-family has-lg-font-size"><?php esc_html_e( '“We had three agencies before Northline. This is the first site our own team can update without calling anyone.”', 'blokmark' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:image {"width":"48px","height":"48px","scale":"cover","sizeSlug":"full","className":"is-style-rounded ts-avatar"} -->
				<figure class="wp-block-image size-full is-resized is-style-rounded ts-avatar"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/avatar-2.webp' ) ); ?>" alt="" style="object-fit:cover;width:48px;height:48px"/></figure>
				<!-- /wp:image -->
				<!-- wp:paragraph {"fontSize":"sm"} -->
				<p class="has-sm-font-size"><?php echo wp_kses_post( __( '<strong>Jonas Meyer</strong> · Operations lead, Fieldstone Coffee', 'blokmark' ) ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"is-style-ts-card ts-quote","style":{"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group is-style-ts-card ts-quote" style="padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)">
			<!-- wp:paragraph -->
			<p><?php esc_html_e( '“Clear timeline, clear price, and the launch actually happened on the day they said.”', 'blokmark' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"fontSize":"sm"} -->
			<p class="has-sm-font-size"><?php echo wp_kses_post( __( '<strong>Priya Nair</strong> · Founder, Loop Yoga', 'blokmark' ) ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"is-style-ts-card ts-quote","style":{"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group is-style-ts-card ts-quote" style="padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)">
			<!-- wp:paragraph -->
			<p><?php esc_html_e( '“The redesign paid for itself in the first quarter. Bookings doubled.”', 'blokmark' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"fontSize":"sm"} -->
			<p class="has-sm-font-size"><?php echo wp_kses_post( __( '<strong>Tom Alvarez</strong> · Owner, Alvarez Dental', 'blokmark' ) ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
