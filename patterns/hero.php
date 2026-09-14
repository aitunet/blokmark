<?php
/**
 * Title: Hero — split stage
 * Slug: tunet-starter/hero
 * Categories: tunet-starter, featured
 * Keywords: hero, header, intro
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ts-section ts-hero","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ts-section ts-hero" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)">
	<!-- wp:group {"align":"wide","className":"ts-hero__grid","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide ts-hero__grid">

		<!-- wp:group {"className":"ts-hero__copy","layout":{"type":"default"}} -->
		<div class="wp-block-group ts-hero__copy">
			<!-- wp:paragraph {"className":"ts-kicker","tfAnimation":"fade-up","tfAnimEasing":"expo"} -->
			<p class="ts-kicker"><?php esc_html_e( 'Design · Build · Launch', 'tunet-starter' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"tfAnimation":"text-stagger","tfStagger":60,"tfAnimEasing":"expo"} -->
			<h1 class="wp-block-heading"><?php echo wp_kses_post( __( 'Build the site you <mark>actually</mark> want.', 'tunet-starter' ) ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"ts-lede","tfAnimation":"fade-up","tfAnimDelay":150,"tfAnimEasing":"expo"} -->
			<p class="ts-lede"><?php esc_html_e( 'Northline is a small studio for brands that have outgrown their first website. Strategy, design and code — from one team, without the runaround.', 'tunet-starter' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"className":"ts-hero__actions","tfAnimation":"fade-up","tfAnimDelay":300,"tfAnimEasing":"expo"} -->
			<div class="wp-block-buttons ts-hero__actions">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#contact"><?php esc_html_e( 'Get started', 'tunet-starter' ); ?></a></div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#services"><?php esc_html_e( 'See what we do →', 'tunet-starter' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"ts-hero__stage","layout":{"type":"default"}} -->
		<div class="wp-block-group ts-hero__stage">
			<!-- wp:image {"sizeSlug":"full","className":"ts-hero__photo","tfAnimation":"scale-in","tfAnimDuration":900,"tfAnimEasing":"expo"} -->
			<figure class="wp-block-image size-full ts-hero__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hero.webp' ) ); ?>" alt="<?php esc_attr_e( 'A designer and a developer reviewing a website layout on a laptop', 'tunet-starter' ); ?>"/></figure>
			<!-- /wp:image -->

			<!-- wp:group {"className":"is-style-ts-card ts-hero__card","style":{"spacing":{"padding":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|4","left":"var:preset|spacing|4","right":"var:preset|spacing|4"}}},"tfAnimation":"fade-up","tfAnimDelay":500,"tfAnimEasing":"spring","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
			<div class="wp-block-group is-style-ts-card ts-hero__card" style="padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--4)">
				<!-- wp:image {"width":"48px","height":"48px","scale":"cover","sizeSlug":"full","className":"is-style-rounded ts-avatar"} -->
				<figure class="wp-block-image size-full is-resized is-style-rounded ts-avatar"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/avatar-1.webp' ) ); ?>" alt="" style="object-fit:cover;width:48px;height:48px"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"layout":{"type":"default"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"className":"ts-hero__quote","fontSize":"sm"} -->
					<p class="ts-hero__quote has-sm-font-size"><?php esc_html_e( '“Launched in two weeks, and it still feels like us.”', 'tunet-starter' ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"ts-hero__who","fontSize":"xs"} -->
					<p class="ts-hero__who has-xs-font-size"><?php esc_html_e( 'Ana Ruiz — founder, Marlow Bakery', 'tunet-starter' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
