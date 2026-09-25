<?php
/**
 * Title: Services — bento
 * Slug: blokmark/services
 * Categories: blokmark
 * Keywords: services, bento, cards, features
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ts-section ts-services","anchor":"services","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ts-section ts-services" id="services" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)">
	<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"className":"ts-kicker"} -->
		<p class="ts-kicker"><?php esc_html_e( 'Services', 'blokmark' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"className":"ts-section-title","tfAnimation":"fade-up"} -->
		<h2 class="wp-block-heading ts-section-title"><?php esc_html_e( 'Everything a growing business needs from one team.', 'blokmark' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","className":"ts-bento","tfAnimation":"fade-up","tfStagger":80,"tfAnimEasing":"expo","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide ts-bento">

		<!-- wp:group {"className":"is-style-ts-ink ts-bento__lead","style":{"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6","right":"var:preset|spacing|6"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group is-style-ts-ink ts-bento__lead" style="padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)">
			<!-- wp:heading {"level":3,"fontSize":"xl"} -->
			<h3 class="wp-block-heading has-xl-font-size"><?php echo wp_kses_post( __( 'What we <mark>do</mark>', 'blokmark' ) ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'We design and build websites, brands and the systems behind them — then help them grow. Small team, senior people, no hand-offs.', 'blokmark' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p><a href="#contact"><?php esc_html_e( 'Start a project →', 'blokmark' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"is-style-ts-card ts-bento__card","style":{"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group is-style-ts-card ts-bento__card" style="padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)">
			<!-- wp:image {"className":"ts-icon"} -->
			<figure class="wp-block-image ts-icon"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/icons/brand.svg' ) ); ?>" alt=""/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":3,"fontSize":"md"} -->
			<h3 class="wp-block-heading has-md-font-size"><?php esc_html_e( 'Brand identity', 'blokmark' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"sm"} -->
			<p class="has-sm-font-size"><?php esc_html_e( 'Naming, logo, color and voice — a system your team can actually use.', 'blokmark' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"is-style-ts-card ts-bento__card","style":{"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group is-style-ts-card ts-bento__card" style="padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)">
			<!-- wp:image {"className":"ts-icon"} -->
			<figure class="wp-block-image ts-icon"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/icons/web.svg' ) ); ?>" alt=""/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":3,"fontSize":"md"} -->
			<h3 class="wp-block-heading has-md-font-size"><?php esc_html_e( 'Web design', 'blokmark' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"sm"} -->
			<p class="has-sm-font-size"><?php esc_html_e( 'Pages designed around the questions your customers ask.', 'blokmark' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"is-style-ts-card ts-bento__card","style":{"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group is-style-ts-card ts-bento__card" style="padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)">
			<!-- wp:image {"className":"ts-icon"} -->
			<figure class="wp-block-image ts-icon"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/icons/code.svg' ) ); ?>" alt=""/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":3,"fontSize":"md"} -->
			<h3 class="wp-block-heading has-md-font-size"><?php esc_html_e( 'Development', 'blokmark' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"sm"} -->
			<p class="has-sm-font-size"><?php esc_html_e( 'Fast, accessible WordPress builds you can edit yourself.', 'blokmark' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"is-style-ts-card ts-bento__card","style":{"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group is-style-ts-card ts-bento__card" style="padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)">
			<!-- wp:image {"className":"ts-icon"} -->
			<figure class="wp-block-image ts-icon"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/icons/growth.svg' ) ); ?>" alt=""/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":3,"fontSize":"md"} -->
			<h3 class="wp-block-heading has-md-font-size"><?php esc_html_e( 'Growth & SEO', 'blokmark' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"sm"} -->
			<p class="has-sm-font-size"><?php esc_html_e( 'Content, search and analytics that turn visits into customers.', 'blokmark' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
