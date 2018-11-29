<?php include 'header.php';?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- Carousel -->
<div class="container fullwidth post">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
		<?php if ( get_field( 'background_header_image' ) ): ?>
		<div class="item active" style="background:url(<?php the_field('background_header_image'); ?>)!important;background-size:auto!important;background-repeat:repeat!important;">
		<?php elseif(has_post_thumbnail()): ?>
		<div class="item active" style="background:url(<?php the_post_thumbnail_url('full'); ?>)!important;background-size:cover!important;background-repeat:no-repeat!important;">
		<?php else: ?>
		<div class="item active" style="background:url(<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/2018/10/BP-pink-3-600-1.jpg)!important;background-size:auto!important;background-repeat:repeat!important;">
		<?php endif; ?>
		<div class="container">
           <div class="carousel-caption microstory">
            <h1><?php the_title(); ?></h1>
			
          </div>
		</div>
        </div><!-- End Item -->
                        
      </div><!-- End Carousel Inner -->

    </div>
</div>
<!-- End Carousel -->

<!-- Title -->
<div class="container">
<?php the_content();?>
</div>
<!-- End Title -->
<?php endwhile; ?>
<?php else : ?>
		<p>Sorry, no related articles to display.</p>
<?php endif;
// Reset postdata
wp_reset_postdata(); ?>
<?php include 'footer.php';?>
