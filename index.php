<?php get_header();?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="fullwidth homeslider paddingbottom">
		<div class="container-fluid">
			<?php get_template_part('partials/content', 'header'); ?>
			<?php the_content();?>
		</div>
	</div>
	<?php endwhile; else : ?>
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
<?php get_footer();?>