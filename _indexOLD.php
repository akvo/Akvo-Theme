<?php get_header();?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="container fullwidth homeslider">
<?php putRevSlider("home", "homepage") ?>
</div>
<div class="fullwidth paddingtop paddingbottom">
<div class="container"><?php the_content();?></div>
</div>
<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php get_footer();?>