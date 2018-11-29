<?php get_header();?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<!-- Carousel -->
	<div class="container fullwidth post">
	<?php get_template_part('partials/content', 'header');?>    
	</div>
	<!-- End Carousel -->
	<div class="container"><?php the_content();?></div>	
<?php endwhile; endif; wp_reset_postdata(); ?>
<?php get_footer();?>