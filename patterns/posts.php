<?php
/**
 * Title: Latest posts
 * Slug: tunet-starter/posts
 * Categories: tunet-starter
 * Keywords: posts, blog, journal, latest, query
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ts-section","anchor":"journal","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ts-section" id="journal" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)">
	<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"className":"ts-kicker"} -->
		<p class="ts-kicker"><?php esc_html_e( 'Journal', 'tunet-starter' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"className":"ts-section-title"} -->
		<h2 class="wp-block-heading ts-section-title"><?php esc_html_e( 'From the journal.', 'tunet-starter' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:query {"queryId":7,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"align":"wide","className":"ts-posts"} -->
	<div class="wp-block-query alignwide ts-posts">
		<!-- wp:post-template {"className":"ts-post-grid","tfAnimation":"fade-up","tfStagger":90} -->
			<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"ts-post-card__media"} /-->
			<!-- wp:post-date /-->
			<!-- wp:post-title {"isLink":true,"level":3,"fontSize":"md"} /-->
			<!-- wp:post-excerpt {"excerptLength":18,"fontSize":"sm"} /-->
		<!-- /wp:post-template -->

		<!-- wp:query-no-results -->
			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'No posts yet — publish your first one and it will show up here.', 'tunet-starter' ); ?></p>
			<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:query -->
</section>
<!-- /wp:group -->
