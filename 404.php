<?php
/**
 * The template for displaying 404 pages (Not Found)
 */

get_header(); ?>

	<div class="cotainer text-center">
		<h1><?php _e( 'Page not found', 'html5blank' ); ?></h1>
		<h1>404</h1>
		<h2>
			<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'html5blank' ); ?></a>
		</h2>
	</div>
<?php get_footer(); ?>