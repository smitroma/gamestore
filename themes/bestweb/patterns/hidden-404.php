<?php
/**
 * Title: 404
 * Slug: bestweb/404
 * Inserter: no
 *
 * @package bestweb
 * @since 1.0.0
 */
?>
<!-- wp:heading {"textAlign":"center", "level": 1} -->
<h1 class="wp-block-heading has-text-align-center">
	<?php esc_html_e( 'Page not found', 'bestweb' ); ?>
</h1>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'bestweb' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:search {"label":"<?php echo esc_html_x( 'Search', 'Search form label', 'bestweb' ); ?>","showLabel":false,"buttonText":"<?php echo esc_html_x( 'Search', 'Search form submit button text', 'bestweb' ); ?>"} /-->
