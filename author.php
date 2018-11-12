<?php
/**
 * The template for displaying author results pages.
 *
 */ 
?>
<?php get_header();?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="fullwidth homeslider">
		<div class="container">
			<?php the_content();?>
		</div>
	</div>
	<?php endwhile; else : ?>
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
<?php get_template_part('partials/content', 'clocks'); ?>
<?php get_footer();?>