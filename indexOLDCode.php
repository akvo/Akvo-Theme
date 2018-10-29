<?php get_header();?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="fullwidth homeslider">
		<?php get_template_part('partials/content', 'header'); ?>
		<div class="container">
			<?php the_content();?>
		</div>
		<?php get_template_part('partials/content', 'clocks'); ?>
	</div>
	<?php endwhile; else : ?>
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
<?php get_footer();?>
