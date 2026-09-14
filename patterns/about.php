<?php
/**
 * Title: About — editorial split
 * Slug: tunet-starter/about
 * Categories: tunet-starter
 * Keywords: about, team, story, quote
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ts-section ts-about","anchor":"about","backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ts-section ts-about has-surface-background-color has-background" id="about" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)">
	<!-- wp:group {"align":"wide","className":"ts-about__grid","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide ts-about__grid">

		<!-- wp:image {"sizeSlug":"full","className":"ts-about__photo","tfAnimation":"clip-reveal"} -->
		<figure class="wp-block-image size-full ts-about__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/about.webp' ) ); ?>" alt="<?php esc_attr_e( 'Two people sketching a website structure on paper', 'tunet-starter' ); ?>"/></figure>
		<!-- /wp:image -->

		<!-- wp:group {"className":"ts-about__copy","tfAnimation":"fade-up","tfStagger":90,"layout":{"type":"default"}} -->
		<div class="wp-block-group ts-about__copy">
			<!-- wp:paragraph {"className":"ts-kicker"} -->
			<p class="ts-kicker"><?php esc_html_e( 'About', 'tunet-starter' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading -->
			<h2 class="wp-block-heading"><?php echo wp_kses_post( __( 'A small team, <mark>big</mark> attention.', 'tunet-starter' ) ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'Northline started in 2019 as two people and a shared desk. Today we are six — designers, developers and a strategist — and we still work on one project at a time, with the founders in the room.', 'tunet-starter' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:quote -->
			<blockquote class="wp-block-quote"><!-- wp:paragraph --><p><?php esc_html_e( 'The best websites are decided in conversations, not in mockups.', 'tunet-starter' ); ?></p><!-- /wp:paragraph --><cite><?php esc_html_e( 'Marta Lind, creative director', 'tunet-starter' ); ?></cite></blockquote>
			<!-- /wp:quote -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#contact"><?php esc_html_e( 'Meet the team', 'tunet-starter' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
