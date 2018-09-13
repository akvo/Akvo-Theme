<?php get_header();?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php if ( is_front_page() ) { ?>
<div class="container fullwidth homeslider">
<?php putRevSlider("home", "homepage") ?>
</div>
<?php } else { ?>
<div class="container fullwidth">
<div id="myCarousel" class="carousel slide">
<div class="carousel-inner">
<div class="item active" style="background: url(<?php the_field('header_image'); ?>);background-size:cover;">
<div class="container">
<div class="carousel-caption">
<h1><?php the_title();?></h1>
</div>
</div>
</div>
</div>
</div>
</div>
<?php } ?>

<div class="fullwidth paddingtop paddingbottom">
<div class="container"><?php the_content();?></div>
</div>
<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php get_footer();?>