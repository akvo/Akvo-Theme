<?php get_header();?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="fullwidth homeslider">
		<div class="container">
			<?php get_template_part('partials/content', 'header'); ?>
			<?php the_content();?>
			<?php get_template_part('partials/content', 'clocks'); ?>
		</div>
	</div>
	<?php endwhile; else : ?>
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
<?php get_footer();?>